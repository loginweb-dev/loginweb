<?php

use Illuminate\Database\Seeder;

class DetalleCuentasTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('detalle_cuentas')->delete();

        \DB::table('detalle_cuentas')->insert(array (
            0 =>
            array (
                'id' => 1,
                'code' => '111001',
                'name' => 'CAJA',
                'cuenta_id' => 3,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            1 =>
            array (
                'id' => 2,
                'code' => '111002',
                'name' => 'FONDO FIJO',
                'cuenta_id' => 3,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            2 =>
            array (
                'id' => 3,
                'code' => '111003',
                'name' => 'BANCOS',
                'cuenta_id' => 3,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            3 =>
            array (
                'id' => 4,
                'code' => '111004',
                'name' => 'INVERSIONES TEMPORALES',
                'cuenta_id' => 3,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            4 =>
            array (
                'id' => 5,
                'code' => '112001',
                'name' => 'CUENTAS POR COBRAR COMERCIALES',
                'cuenta_id' => 4,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            5 =>
            array (
                'id' => 6,
                'code' => '112002',
                'name' => 'OTRAS CUENTAS POR COBRAR',
                'cuenta_id' => 4,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            6 =>
            array (
                'id' => 7,
                'code' => '112003',
                'name' => 'CUENTAS POR COBRAR A EMPRESAS RELACIONADAS',
                'cuenta_id' => 4,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            7 =>
            array (
                'id' => 8,
                'code' => '112004',
                'name' => 'ANTICIPO A PROVEEDORES',
                'cuenta_id' => 4,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            8 =>
            array (
                'id' => 9,
                'code' => '112005',
                'name' => 'PROVISIÓN PARA CUENTAS INCOBRABLES',
                'cuenta_id' => 4,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            9 =>
            array (
                'id' => 10,
                'code' => '113001',
                'name' => 'INVENTARIOS DE PRODUCTOS TERMINADOS',
                'cuenta_id' => 5,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            10 =>
            array (
                'id' => 11,
                'code' => '113002',
                'name' => 'INVENTARIOS DE PRODUCTOS EN PROCESO',
                'cuenta_id' => 5,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            11 =>
            array (
                'id' => 12,
                'code' => '113003',
                'name' => 'INVENTARIOS DE MATERIA PRIMA',
                'cuenta_id' => 5,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            12 =>
            array (
                'id' => 13,
                'code' => '113004',
                'name' => 'INVENTARIO EN TRÁNSITO',
                'cuenta_id' => 5,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            13 =>
            array (
                'id' => 14,
                'code' => '113005',
                'name' => 'PROVISIÓN PARA OBSOLESCENCIAS',
                'cuenta_id' => 5,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            14 =>
            array (
                'id' => 15,
                'code' => '114001',
                'name' => 'CRÉDITO FISCAL IVA',
                'cuenta_id' => 6,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            15 =>
            array (
                'id' => 16,
                'code' => '114002',
                'name' => 'IMPUESTOS POR RECUPERAR',
                'cuenta_id' => 6,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            16 =>
            array (
                'id' => 17,
                'code' => '114003',
                'name' => 'PAGOS ANTICIPADOS',
                'cuenta_id' => 6,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            17 =>
            array (
                'id' => 18,
                'code' => '114004',
                'name' => 'OTROS ACTIVOS',
                'cuenta_id' => 6,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            18 =>
            array (
                'id' => 19,
                'code' => '121001',
                'name' => 'CUENTAS COMERCIALES POR COBRAR A LARGO PLAZO',
                'cuenta_id' => 8,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            19 =>
            array (
                'id' => 20,
                'code' => '121002',
                'name' => 'OTRAS CUENTAS POR COBRAR',
                'cuenta_id' => 8,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            20 =>
            array (
                'id' => 21,
                'code' => '121003',
                'name' => 'CUENTAS POR COBRAR A EMPRESAS RELACIONADAS',
                'cuenta_id' => 8,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            21 =>
            array (
                'id' => 22,
                'code' => '122001',
                'name' => 'INVENTARIOS DE REPUESTOS',
                'cuenta_id' => 9,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            22 =>
            array (
                'id' => 23,
                'code' => '122002',
                'name' => 'OTROS INVENTARIOS',
                'cuenta_id' => 9,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            23 =>
            array (
                'id' => 24,
                'code' => '123001',
                'name' => 'TERRENOS',
                'cuenta_id' => 10,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            24 =>
            array (
                'id' => 25,
                'code' => '123002',
                'name' => 'EDIFICIOS',
                'cuenta_id' => 10,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            25 =>
            array (
                'id' => 26,
                'code' => '123003',
                'name' => 'DEPRECIACIÓN ACUMULADA EDIFICIO',
                'cuenta_id' => 10,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            26 =>
            array (
                'id' => 27,
                'code' => '123004',
                'name' => 'MAQUINARIAS',
                'cuenta_id' => 10,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            27 =>
            array (
                'id' => 28,
                'code' => '123005',
                'name' => 'DEPRECIACIÓN ACUMULADA MAQUINARIAS',
                'cuenta_id' => 10,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            28 =>
            array (
                'id' => 29,
                'code' => '123006',
                'name' => 'VEHÍCULOS',
                'cuenta_id' => 10,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            29 =>
            array (
                'id' => 30,
                'code' => '123007',
                'name' => 'DEPRECIACIÓN ACUMULADA VEHÍCULOS',
                'cuenta_id' => 10,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            30 =>
            array (
                'id' => 31,
                'code' => '123008',
                'name' => 'MUEBLES Y ENSERES',
                'cuenta_id' => 10,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            31 =>
            array (
                'id' => 32,
                'code' => '123009',
                'name' => 'DEPRECIACIÓN ACUMULADA MUEBLES Y ENSERES',
                'cuenta_id' => 10,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            32 =>
            array (
                'id' => 33,
                'code' => '123010',
                'name' => 'EQUIPOS DE COMPUTACIÓN',
                'cuenta_id' => 10,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            33 =>
            array (
                'id' => 34,
                'code' => '123011',
                'name' => 'DEPRECIACIÓN ACUMULADA EQUIPOS DE COMPUTACIÓN',
                'cuenta_id' => 10,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            34 =>
            array (
                'id' => 35,
                'code' => '125001',
                'name' => 'PATENTES Y MARCAS',
                'cuenta_id' => 12,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            35 =>
            array (
                'id' => 36,
                'code' => '125002',
                'name' => 'AMORTIZACIÓN ACUMULADA PATENTES Y MARCAS',
                'cuenta_id' => 12,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            36 =>
            array (
                'id' => 37,
                'code' => '125003',
                'name' => 'DERECHOS DE LLAVE',
                'cuenta_id' => 12,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            37 =>
            array (
                'id' => 38,
                'code' => '125004',
                'name' => 'AMORTIZACIÓN ACUMULADA DERECHO DE LLAVE',
                'cuenta_id' => 12,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            38 =>
            array (
                'id' => 39,
                'code' => '211001',
                'name' => 'PRÉSTAMOS BANCARIOS',
                'cuenta_id' => 18,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            39 =>
            array (
                'id' => 40,
                'code' => '211002',
                'name' => 'OTROS PASIVOS FINANCIEROS',
                'cuenta_id' => 18,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            40 =>
            array (
                'id' => 41,
                'code' => '211003',
                'name' => 'INTERESES POR PAGAR',
                'cuenta_id' => 18,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            41 =>
            array (
                'id' => 42,
                'code' => '212001',
                'name' => 'CUENTAS POR PAGAR COMERCIALES',
                'cuenta_id' => 19,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            42 =>
            array (
                'id' => 43,
                'code' => '212002',
                'name' => 'DOCUMENTOS POR PAGAR',
                'cuenta_id' => 19,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            43 =>
            array (
                'id' => 44,
                'code' => '212003',
                'name' => 'CUENTAS POR PAGAR A EMPRESAS RELACIONADAS',
                'cuenta_id' => 19,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            44 =>
            array (
                'id' => 45,
                'code' => '213001',
                'name' => 'SUELDOS POR PAGAR',
                'cuenta_id' => 20,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            45 =>
            array (
                'id' => 46,
                'code' => '213002',
                'name' => 'BENEFICIOS SOCIALES POR PAGAR',
                'cuenta_id' => 20,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            46 =>
            array (
                'id' => 47,
                'code' => '213003',
                'name' => 'CARGAS SOCIALES',
                'cuenta_id' => 20,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            47 =>
            array (
                'id' => 48,
                'code' => '213004',
                'name' => 'DÉBITO FISCAL - IVA',
                'cuenta_id' => 20,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            48 =>
            array (
                'id' => 49,
                'code' => '213005',
                'name' => 'IMPUESTO A LAS TRANSACCIONES POR PAGAR',
                'cuenta_id' => 20,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            49 =>
            array (
                'id' => 50,
                'code' => '213006',
                'name' => 'IMPUESTOS SOBRE LAS UTILIDADES DE LAS EMPRESAS POR PAGAR',
                'cuenta_id' => 20,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            50 =>
            array (
                'id' => 51,
                'code' => '213007',
                'name' => 'RETENCIONES POR PAGAR',
                'cuenta_id' => 20,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            51 =>
            array (
                'id' => 52,
                'code' => '213008',
                'name' => 'OTROS IMPUESTOS POR PAGAR',
                'cuenta_id' => 20,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            52 =>
            array (
                'id' => 53,
                'code' => '221001',
                'name' => 'PRÉSTAMOS BANCARIOS A LARGO PLAZO',
                'cuenta_id' => 25,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            53 =>
            array (
                'id' => 54,
                'code' => '221002',
                'name' => 'OTROS PASIVOS FINANCIEROS A LARGO PLAZO',
                'cuenta_id' => 25,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            54 =>
            array (
                'id' => 55,
                'code' => '222001',
                'name' => 'DOCUMENTOS POR PAGAR A LARGO PLAZO',
                'cuenta_id' => 26,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            55 =>
            array (
                'id' => 56,
                'code' => '222002',
                'name' => 'CUENTAS POR PAGAR A EMPRESAS RELACIONADAS A LARGO PLAZO',
                'cuenta_id' => 26,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            56 =>
            array (
                'id' => 57,
                'code' => '410001',
                'name' => 'VENTAS',
                'cuenta_id' => 29,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            57 =>
            array (
                'id' => 58,
                'code' => '410002',
                'name' => 'DEVOLUCIONES, REBAJAS Y DESCUETOS DE BIENES Y/O SERVICIOS',
                'cuenta_id' => 29,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            58 =>
            array (
                'id' => 59,
                'code' => '510001',
                'name' => 'COSTO DE PRODUCTOS',
                'cuenta_id' => 30,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            59 =>
            array (
                'id' => 60,
                'code' => '510002',
                'name' => 'FLETES Y TRANSPORTES DE PRODUCTOS',
                'cuenta_id' => 30,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            60 =>
            array (
                'id' => 61,
                'code' => '510003',
                'name' => 'DEVOLUCIÓN EN COMPRAS',
                'cuenta_id' => 30,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            61 =>
            array (
                'id' => 62,
                'code' => '510004',
                'name' => 'DESCUENTOS SOBRE COMPRAS',
                'cuenta_id' => 30,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            62 =>
            array (
                'id' => 63,
                'code' => '510005',
                'name' => 'COSTO DE PRODUCTOS DAÑADOS',
                'cuenta_id' => 30,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            63 =>
            array (
                'id' => 64,
                'code' => '520001',
                'name' => 'SUELDOS Y SALARIOS',
                'cuenta_id' => 32,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            64 =>
            array (
                'id' => 65,
                'code' => '520002',
                'name' => 'BENEFICIOS SOCIALES',
                'cuenta_id' => 32,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            65 =>
            array (
                'id' => 66,
                'code' => '520003',
                'name' => 'COMISIONES SOBRE VENTAS',
                'cuenta_id' => 32,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            66 =>
            array (
                'id' => 67,
                'code' => '520004',
                'name' => 'VÍATICOS',
                'cuenta_id' => 32,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            67 =>
            array (
                'id' => 68,
                'code' => '520005',
                'name' => 'PASAJES',
                'cuenta_id' => 32,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            68 =>
            array (
                'id' => 69,
                'code' => '520006',
                'name' => 'PUBLICIDAD',
                'cuenta_id' => 32,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            69 =>
            array (
                'id' => 70,
                'code' => '520007',
                'name' => 'DEPRECIACIÓN DE BIENES DE USO',
                'cuenta_id' => 32,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            70 =>
            array (
                'id' => 71,
                'code' => '520008',
                'name' => 'PÉRDIDA EN CUENTAS INCOBRABLES',
                'cuenta_id' => 32,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            71 =>
            array (
                'id' => 72,
                'code' => '520009',
                'name' => 'OTROS GASTOS DE COMERCIALIZACIÓN',
                'cuenta_id' => 32,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            72 =>
            array (
                'id' => 73,
                'code' => '530001',
                'name' => 'SUELDOS Y SALARIOS',
                'cuenta_id' => 33,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            73 =>
            array (
                'id' => 74,
                'code' => '530002',
                'name' => 'BENEFICIOS SOCIALES',
                'cuenta_id' => 33,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            74 =>
            array (
                'id' => 75,
                'code' => '530003',
                'name' => 'PROVISIÓN AGUINALDOS',
                'cuenta_id' => 33,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            75 =>
            array (
                'id' => 76,
                'code' => '530004',
                'name' => 'PREVISIÓN INDEMNIZACIONES',
                'cuenta_id' => 33,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            76 =>
            array (
                'id' => 77,
                'code' => '530005',
                'name' => 'VÍATICOS',
                'cuenta_id' => 33,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            77 =>
            array (
                'id' => 78,
                'code' => '530006',
                'name' => 'PASAJES',
                'cuenta_id' => 33,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            78 =>
            array (
                'id' => 79,
                'code' => '530007',
                'name' => 'SERVICIOS BÁSICOS',
                'cuenta_id' => 33,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            79 =>
            array (
                'id' => 80,
                'code' => '530008',
                'name' => 'MATERIALES Y SUMINISTROS',
                'cuenta_id' => 33,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            80 =>
            array (
                'id' => 81,
                'code' => '530009',
                'name' => 'FLETES Y TRANSPORTE',
                'cuenta_id' => 33,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            81 =>
            array (
                'id' => 82,
                'code' => '530010',
                'name' => 'MANTENIMIENTO Y REPARACIÓN',
                'cuenta_id' => 33,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            82 =>
            array (
                'id' => 83,
                'code' => '530011',
                'name' => 'DEPRECIACIÓN DE BIENES DE USO',
                'cuenta_id' => 33,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            83 =>
            array (
                'id' => 84,
                'code' => '530012',
                'name' => 'ALQUILERES',
                'cuenta_id' => 33,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            84 =>
            array (
                'id' => 85,
                'code' => '530013',
                'name' => 'SEGUROS',
                'cuenta_id' => 33,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            85 =>
            array (
                'id' => 86,
                'code' => '530014',
                'name' => 'SERVICIO DE SEGURIDAD',
                'cuenta_id' => 33,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            86 =>
            array (
                'id' => 87,
                'code' => '530015',
                'name' => 'GASTOS GENERALES',
                'cuenta_id' => 33,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            87 =>
            array (
                'id' => 88,
                'code' => '530016',
                'name' => 'OTROS GASTOS DE ADMINISTRACIÓN',
                'cuenta_id' => 33,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            88 =>
            array (
                'id' => 89,
                'code' => '540001',
                'name' => 'INTERESES SOBRE PRÉSTAMOS BANCARIOS',
                'cuenta_id' => 34,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            89 =>
            array (
                'id' => 90,
                'code' => '540002',
                'name' => 'INTERESES SOBRE OTRAS OBLIGACIONES FINANCIERAS',
                'cuenta_id' => 34,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            90 =>
            array (
                'id' => 91,
                'code' => '540003',
                'name' => 'OTROS INTERESES',
                'cuenta_id' => 34,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            91 =>
            array (
                'id' => 92,
                'code' => '540004',
                'name' => 'COMISIONES BANCARIAS',
                'cuenta_id' => 34,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            92 =>
            array (
                'id' => 93,
                'code' => '540005',
                'name' => 'OTROS GASTOS FINANCIEROS',
                'cuenta_id' => 34,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            93 =>
            array (
                'id' => 94,
                'code' => '420001',
                'name' => 'INTERESES SOBRE DEPÓSITOS BANCARIOS',
                'cuenta_id' => 35,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            94 =>
            array (
                'id' => 95,
                'code' => '420002',
                'name' => 'INTERESES DE INVERSIONES TEMPORALES',
                'cuenta_id' => 35,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            95 =>
            array (
                'id' => 96,
                'code' => '420003',
                'name' => 'OTROS INGRESOS FINANCIEROS',
                'cuenta_id' => 35,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            96 =>
            array (
                'id' => 97,
                'code' => '430001',
                'name' => 'AJUSTE POR INFLACIÓN Y TENENCIA DE BIENES',
                'cuenta_id' => 38,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            97 =>
            array (
                'id' => 98,
                'code' => '430002',
                'name' => 'INGRESOS POR VENTA DE VALORES',
                'cuenta_id' => 38,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            98 =>
            array (
                'id' => 99,
                'code' => '430003',
                'name' => 'OTROS INGRESOS',
                'cuenta_id' => 38,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            99 =>
            array (
                'id' => 102,
                'code' => '560001',
                'name' => 'AJUSTE POR INFLACIÓN Y TENENCIA DE BIENES',
                'cuenta_id' => 39,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            100 =>
            array (
                'id' => 103,
                'code' => '560002',
                'name' => 'DIFERENCIA DE CAMBIO',
                'cuenta_id' => 39,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            101 =>
            array (
                'id' => 104,
                'code' => '560003',
                'name' => 'OTROS GASTOS',
                'cuenta_id' => 39,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            102 =>
            array (
                'id' => 105,
                'code' => '560004',
                'name' => 'DIFERENCIA DE REDONDEO',
                'cuenta_id' => 39,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            103 =>
            array (
                'id' => 106,
                'code' => '311001',
                'name' => 'CAPITAL SOCIAL PAGADO',
                'cuenta_id' => 45,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            104 =>
            array (
                'id' => 107,
                'code' => '311002',
                'name' => 'APORTES POR CAPITALIZAR',
                'cuenta_id' => 45,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            105 =>
            array (
                'id' => 108,
                'code' => '311003',
                'name' => 'AJUSTE DE CAPITAL',
                'cuenta_id' => 45,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            106 =>
            array (
                'id' => 109,
                'code' => '312001',
                'name' => 'AJUSTE DE CAPITAL',
                'cuenta_id' => 46,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            107 =>
            array (
                'id' => 110,
                'code' => '321001',
                'name' => 'RESERVA LEGAL',
                'cuenta_id' => 47,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            108 =>
            array (
                'id' => 111,
                'code' => '321002',
                'name' => 'OTRAS RESERVAS',
                'cuenta_id' => 47,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            109 =>
            array (
                'id' => 112,
                'code' => '322001',
                'name' => 'AJUSTE DE RESERVAS PATRIMONIALES',
                'cuenta_id' => 48,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            110 =>
            array (
                'id' => 113,
                'code' => '331001',
                'name' => 'RESULTADOS ACUMULADOS',
                'cuenta_id' => 49,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            111 =>
            array (
                'id' => 114,
                'code' => '331002',
                'name' => 'RESULTADOS DE LA GESTION',
                'cuenta_id' => 49,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            112 =>
            array (
                'id' => 115,
                'code' => '332001',
                'name' => 'RESULTADOS ACUMULADOS',
                'cuenta_id' => 50,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            113 =>
            array (
                'id' => 116,
                'code' => '111101',
            'name' => 'UTILIDAD / (PÉRDIDA) DEL EJERCICIO',
                'cuenta_id' => 51,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            114 =>
            array (
                'id' => 117,
                'code' => '111102',
                'name' => 'IMPUESTO SOBRE LAS UTILIDADES',
                'cuenta_id' => 51,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            115 =>
            array (
                'id' => 118,
                'code' => '111103',
                'name' => 'DEPRECIACIÓN DEL ACTIVO FIJO',
                'cuenta_id' => 51,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            116 =>
            array (
                'id' => 119,
                'code' => '111104',
                'name' => 'AMORTIZACIÓN DEL ACTIVO INTANGIBLE',
                'cuenta_id' => 51,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            117 =>
            array (
                'id' => 120,
                'code' => '111105',
                'name' => 'PREVISIÓN PARA BENEFICIOS SOCIALES',
                'cuenta_id' => 51,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            118 =>
            array (
                'id' => 121,
                'code' => '111106',
            'name' => 'BAJAS DE BIENES DE USO (ACTIVOS FIJOS)',
                'cuenta_id' => 51,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            119 =>
            array (
                'id' => 122,
                'code' => '111107',
                'name' => 'PROVISIÓN PARA CUENTAS INCOBRABLES',
                'cuenta_id' => 51,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            120 =>
            array (
                'id' => 123,
                'code' => '111108',
                'name' => 'PROVISIÓN PARA OBSOLESCENCIAS',
                'cuenta_id' => 51,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            121 =>
            array (
                'id' => 124,
                'code' => '111109',
                'name' => 'OTROS',
                'cuenta_id' => 51,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            122 =>
            array (
                'id' => 125,
                'code' => '111110',
                'name' => 'AJUSTE POR INFLACIÓN Y TENENCIA DE BIENES',
                'cuenta_id' => 51,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            123 =>
            array (
                'id' => 126,
                'code' => '111111',
            'name' => 'DISMINUCIÓN (AUMENTO) EN CUENTAS POR COBRAR COMERCIALES',
                'cuenta_id' => 51,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            124 =>
            array (
                'id' => 127,
                'code' => '111112',
            'name' => 'DISMINUCIÓN (AUMENTO) EN IMPUESTOS POR RECUPERAR',
                'cuenta_id' => 51,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            125 =>
            array (
                'id' => 128,
                'code' => '111113',
            'name' => 'DISMINUCIÓN (AUMENTO) EN PAGOS ANTICIPADOS',
                'cuenta_id' => 51,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            126 =>
            array (
                'id' => 129,
                'code' => '111114',
            'name' => 'DISMINUCIÓN (AUMENTO) EN INVENTARIOS',
                'cuenta_id' => 51,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            127 =>
            array (
                'id' => 130,
                'code' => '111115',
            'name' => '(DISMINUCIÓN) AUMENTO CUENTAS POR PAGAR COMERCIALES',
                'cuenta_id' => 51,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            128 =>
            array (
                'id' => 131,
                'code' => '111116',
            'name' => '(DISMINUCIÓN) AUMENTO EN OBLIGACIONES SOCIALES Y FISCALES',
                'cuenta_id' => 51,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            129 =>
            array (
                'id' => 132,
                'code' => '111117',
            'name' => '(DISMINUCIÓN) AUMENTO EN PROVISIONES',
                'cuenta_id' => 51,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            130 =>
            array (
                'id' => 133,
                'code' => '111118',
            'name' => '(DISMINUCIÓN) AUMENTO EN INGRESOS DIFERIDOS',
                'cuenta_id' => 51,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            131 =>
            array (
                'id' => 134,
                'code' => '111201',
            'name' => 'ADQUISICIONES DE PROPIEDAD, PLANTA Y EQUIPO (ACTIVOS FIJOS)',
                'cuenta_id' => 52,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            132 =>
            array (
                'id' => 135,
                'code' => '111202',
                'name' => 'ADQUISICIÓN  DE ACTIVOS INTANGIBLES',
                'cuenta_id' => 52,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            133 =>
            array (
                'id' => 136,
                'code' => '111203',
            'name' => 'VENTA DE PROPIEDAD, PLANTA Y EQUIPO (ACTIVOS FIJOS)',
                'cuenta_id' => 52,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            134 =>
            array (
                'id' => 137,
                'code' => '111204',
                'name' => 'VENTA DE PROPIEDADES DE INVERSIÓN',
                'cuenta_id' => 52,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            135 =>
            array (
                'id' => 138,
                'code' => '111205',
                'name' => 'OTRAS ADQUISICIONES',
                'cuenta_id' => 52,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            136 =>
            array (
                'id' => 139,
                'code' => '111206',
                'name' => 'OTRAS VENTAS',
                'cuenta_id' => 52,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            137 =>
            array (
                'id' => 140,
                'code' => '111301',
                'name' => 'PRÉSTAMOS RECIBIDOS',
                'cuenta_id' => 53,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            138 =>
            array (
                'id' => 141,
                'code' => '111302',
                'name' => 'PAGO DE OTROS PASIVOS FINANCIEROS',
                'cuenta_id' => 53,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            139 =>
            array (
                'id' => 142,
                'code' => '111303',
                'name' => 'EMISIÓN DE NUEVAS ACCIONES',
                'cuenta_id' => 53,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            140 =>
            array (
                'id' => 143,
                'code' => '111304',
            'name' => 'PAGO DE DIVIDENDOS (DISTRIBUCIÓN DE UTILIDADES)',
                'cuenta_id' => 53,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            141 =>
            array (
                'id' => 144,
                'code' => '111305',
                'name' => 'EMISIÓN DE BONOS',
                'cuenta_id' => 53,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            142 =>
            array (
                'id' => 145,
                'code' => '111306',
                'name' => 'OTRAS EMISIONES',
                'cuenta_id' => 53,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
            143 =>
            array (
                'id' => 146,
                'code' => '111307',
                'name' => 'OTROS PAGOS',
                'cuenta_id' => 53,
                'created_at' => '2020-09-30 16:57:15',
                'updated_at' => '2020-09-30 16:57:15',
            ),
        ));
    }
}
