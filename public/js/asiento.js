var app = new Vue({
    el: '#asiento',
    data: {
      isProcessing: false,
      form: {},
      form1: {},
      errors: {}
    },
    created: function () {
      Vue.set(this.$data, 'form', _form);
      Vue.set(this.$data, 'form1', _form1);
    },
    mounted() {
      this.listarCuentas(this.form.buscar);
      console.log(this.form)
    },
    computed: {
        totalDebe() {
            if (!this.isEmpty(this.form1)) {
                return this.form1.items.reduce((carry, item) => {
                    return carry + parseFloat(item.debe)
                }, 0)
            }else{
                return this.form.items.reduce((carry, item) => {
                    return carry + parseFloat(item.debe)
                }, 0)
            }

        },
        totalHaber() {
            if (!this.isEmpty(this.form1)) {
                return this.form1.items.reduce((carry, item) => {
                    return carry + parseFloat(item.haber)
                }, 0)
            }
            return this.form.items.reduce((carry, item) => {
                return carry + parseFloat(item.haber)
            }, 0)
        },
        totalesIguales(){
            return (this.totalDebe == this.totalHaber) && (this.totalDebe > 0) && (this.totalHaber > 0)
        }
    },
    methods: {
       itemsarray(arrayDet){
           this.form.cuentas =arrayDet.map(function (obj) {
          return obj.id;
          });
        },
      remove: function(detalle) {
        if (this.isEmpty(this.form1)) {
            const index =this.form.items.indexOf(detalle);
            this.form.items.splice(index, 1);
        } else {
            const index =this.form1.items.indexOf(detalle);
            this.form1.items.splice(index, 1);
        }
        const index =this.form.items.indexOf(detalle);
        this.form.items.splice(index, 1);
      },
      buscarCuenta: function(){
        let me=this;
        me.form.estado = '';
        var url= '/admin/buscarcuenta?filtro=' + me.form.codigobuscar;
        //var url= '/cerma/public/admin/planes_cuentas/buscarcuenta?filtro=' + me.form.codigobuscar;

        this.$http.get(url).then(function (response) {
            var respuesta= response.data;
             me.form.cuentas = respuesta.cuenta;

             if (me.form.cuentas.length>0){
              me.form.cuenta_id=me.form.cuentas[0]['id'];
              me.form.code=me.form.cuentas[0]['code'];
              me.form.cuenta=me.form.cuentas[0]['name'];
              me.form.tipo=me.form.cuentas[0]['tipo'];

              if (this.isEmpty(this.form1)) {
                  //push al a los items
                    me.form.items.push({
                        cuenta_id: me.form.cuenta_id,
                        //fecha: me.form.fecha,
                        code: me.form.code,
                        name: me.form.cuenta,
                        glosa: me.form.glosaitem,
                        debe: parseFloat(me.form.debe),
                        haber: parseFloat(me.form.haber),
                        tipo: me.form.tipo
                    });
              } else {
                me.form1.items.push({
                    cuenta_id: me.form.cuenta_id,
                    //fecha: me.form.fecha,
                    code: me.form.code,
                    name: me.form.cuenta,
                    glosa: me.form.glosaitem,
                    debe: parseFloat(me.form.debe),
                    haber: parseFloat(me.form.haber),
                    tipo: me.form.tipo
                });
              }

                //me.itemsarray( me.form.cuentas);
                me.form.cuenta_id=0;
                me.form.codigobuscar="";
                me.form.code='';
                me.form.tipo = '';
             }
             else{
              me.form.code='No existe tal cuenta';
              me.form.cuenta_id=0;
              me.form.cuenta = '';
              me.form.tipo = '';
             }
        })
        .catch(function (error) {
            console.log(error);
        });
      },
      agregarDetalle(){
        let me=this;
        me.form.items.push({
            id: me.form.cuenta_id,
            //fecha: me.form.fecha,
            code: me.form.code,
            name: me.form.cuenta,
            glosa: me.form.glosaitem,
            debe: parseFloat(me.form.debe),
            haber: parseFloat(me.form.haber),
            tipo: me.form.tipo
        });
            //me.itemsarray( me.form.cuentas);
            me.form.cuenta_id=0;
            me.form.codigobuscar="";
            me.form.code='';

      },
        encuentra(id){
          var sw=0;
          for(var i=0;i<this.form.items.length;i++){
              if(this.form.items[i].id==id){
                  sw=true;
              }
          }
          return sw;
      },
      listarCuentas (buscar){
        let me=this;
        //var url= '/cerma/public/admin/planes_cuentas/listarcuentas?buscar='+ buscar + '&criterio='+ criterio;
        var url= '/admin/listarcuentas?buscar='+ buscar;
       this.$http.get(url).then(function (response) {
            var respuesta= response.data;
            me.form.arrayCuentas = respuesta.data.data;
        })
        .catch(function (error) {
            console.log(error);
        });
      },
      agregarDetalleModal(data =[]){
        let me=this;
        if (this.isEmpty(this.form1)) {
            me.form.items.push({
                cuenta_id: data['id'],
                //fecha: me.form.fecha,
                code: data['code'],
                name: data['name'],
                glosa: me.form.glosaitem,
                debe: parseFloat(me.form.debe),
                haber: parseFloat(me.form.haber),
                tipo: data['tipo']
            });
        }else{
            me.form1.items.push({
                cuenta_id: data['id'],
                //fecha: me.form.fecha,
                code: data['code'],
                name: data['name'],
                glosa: me.form.glosaitem,
                debe: parseFloat(me.form.debe),
                haber: parseFloat(me.form.haber),
                tipo: data['tipo']
            });
        }

        //quitamos el item del arrayde cuenta
        const index =this.form.arrayCuentas.indexOf(data);
        this.form.arrayCuentas.splice(index, 1);
        toastr.success('Cuenta agregada');
                //me.itemsarray( me.form1.tomos);

      },
        storeAsiento: function() {
            this.isProcessing = true;
            var url = '/admin/asientos';
            //var url = '/cerma/public/admin/asientos';

            this.$http.post(url,{
                'items': this.form.items,
                'ufv': this.form.ufv,
                'tipo': this.form.tipo_cambio,
                'glosa': this.form.glosa,
                'estado': this.form.estado
                })
                .then(res => {
                    if(res.data && res.data.saved) {
                    toastr.success('Asiento creado con éxito');
                        this.limpiar();
                    }else{
                        this.isProcessing = false;
                    }
                }).catch(error => {
                    this.isProcessing = false;
                    this.errors = 'Corrija para poder crear con éxito'
                });
        },
        update: function() {
            this.isProcessing = true;

            this.$http.put('/admin/asientos/' + this.form1.id, this.form1)
              .then(function(response) {
                if(response.data.updated) {
                  window.location = '/admin/asientos?alert=1';
                } else {
                  this.isProcessing = false;
                }
              })
              .catch(function(response) {
                this.isProcessing = false;
                Vue.set(this.$data, 'errors', response.data);
              })
        },
        limpiar() {
            this.form.cuenta_id=0;
            this.form.codigobuscar="";
            this.form.code='';
            this.form.ufv=0;
            this.form.glosa='';
            this.form.items= [];
           // this.form.comprobante = null
        },
        uploadComprobante() {
            this.form.comprobante = this.$refs.file.files[0];
            console.log(this.form.comprobante)
        },
        isEmpty(obj) {
            for(var key in obj) {
                if(obj.hasOwnProperty(key))
                    return false;
            }
            return true;
        }
    }
  })
