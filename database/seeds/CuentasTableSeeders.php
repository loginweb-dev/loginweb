<?php

use Illuminate\Database\Seeder;

class CuentasTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cuentas')->delete();

        \DB::table('cuentas')->insert(array (
            0 =>
            array (
                'id' => 1,
                'code' => '100000',
                'name' => 'ACTIVOS',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'code' => '110000',
                'name' => 'ACTIVOS CORRIENTES',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'code' => '111000',
                'name' => 'EFECTIVO Y/O SU EQUIVALENTE',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'code' => '112000',
                'name' => 'CUENTAS POR COBRAR',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'code' => '113000',
                'name' => 'INVENTARIOS',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'code' => '114000',
                'name' => 'OTROS ACTIVOS CORRIENTES',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'code' => '120000',
                'name' => 'ACTIVOS NO CORRIENTES',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'code' => '121000',
                'name' => 'CUENTAS POR COBRAR A LARGO PLAZO',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'code' => '122000',
                'name' => 'INVENTARIOS NO CORRIENTES',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'code' => '123000',
            'name' => 'PROPIEDAD PLANTA Y EQUIPO (ACTIVO FIJO)',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'code' => '124000',
                'name' => 'PROPIEDADES DE INVERSIÓN',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'code' => '125000',
                'name' => 'ACTIVOS INTANGIBLES',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'code' => '126000',
                'name' => 'INVERSIONES PERMANENTES',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            13 =>
            array (
                'id' => 14,
                'code' => '127000',
                'name' => 'ACTIVOS DIFERIDOS',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'code' => '128000',
                'name' => 'OTROS ACTIVOS NO CORRIENTES',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            15 =>
            array (
                'id' => 16,
                'code' => '200000',
                'name' => 'PASIVOS',
                'tipo' => 'P',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            16 =>
            array (
                'id' => 17,
                'code' => '210000',
                'name' => 'PASIVOS CORRIENTES',
                'tipo' => 'P',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            17 =>
            array (
                'id' => 18,
                'code' => '211000',
                'name' => 'OBLIGACIONES BANCARIAS Y FINANCIERAS',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            18 =>
            array (
                'id' => 19,
                'code' => '212000',
                'name' => 'CUENTAS POR PAGAR',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            19 =>
            array (
                'id' => 20,
                'code' => '213000',
                'name' => 'OBLIGACIONES SOCIALES Y FISCALES',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            20 =>
            array (
                'id' => 21,
                'code' => '214000',
                'name' => 'PROVISIONES',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            21 =>
            array (
                'id' => 22,
                'code' => '215000',
                'name' => 'INGRESOS DIFERIDOS',
                'tipo' => 'I',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-10-01 18:21:07',
                'deleted_at' => NULL,
            ),
            22 =>
            array (
                'id' => 23,
                'code' => '216000',
                'name' => 'OTROS PASIVOS CORRIENTES',
                'tipo' => 'P',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            23 =>
            array (
                'id' => 24,
                'code' => '220000',
                'name' => 'PASIVOS NO CORRIENTES',
                'tipo' => 'P',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            24 =>
            array (
                'id' => 25,
                'code' => '221000',
                'name' => 'OBLIGACIONES BANCARIAS Y FINANCIERAS A LARGO PLAZO',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            25 =>
            array (
                'id' => 26,
                'code' => '222000',
                'name' => 'CUENTAS POR PAGAR A LARGO PLAZO',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            26 =>
            array (
                'id' => 27,
                'code' => '223000',
            'name' => 'PREVISIÓN PARA BENEFICIOS SOCIALES (INDEMNIZACIONES AL PERSONAL)',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            27 =>
            array (
                'id' => 28,
                'code' => '224000',
                'name' => 'OTROS PASIVOS NO CORRIENTES',
                'tipo' => 'P',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            28 =>
            array (
                'id' => 29,
                'code' => '410000',
                'name' => 'INGRESOS NETOS',
                'tipo' => 'I',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-10-01 18:21:20',
                'deleted_at' => NULL,
            ),
            29 =>
            array (
                'id' => 30,
                'code' => '510000',
                'name' => 'COSTO DE VENTAS',
                'tipo' => 'I',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-10-01 18:20:05',
                'deleted_at' => NULL,
            ),
            30 =>
            array (
                'id' => 31,
                'code' => '581000',
            'name' => 'UTILIDAD / (PÉRDIDA) BRUTA',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            31 =>
            array (
                'id' => 32,
                'code' => '520000',
                'name' => 'GASTOS DE COMERCIALIZACIÓN',
                'tipo' => 'G',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            32 =>
            array (
                'id' => 33,
                'code' => '530000',
                'name' => 'GASTOS GENERALES DE ADMINISTRACIÓN',
                'tipo' => 'G',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            33 =>
            array (
                'id' => 34,
                'code' => '540000',
                'name' => 'GASTOS FINANCIEROS',
                'tipo' => 'G',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            34 =>
            array (
                'id' => 35,
                'code' => '420000',
                'name' => 'INGRESOS FINANCIEROS',
                'tipo' => 'I',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            35 =>
            array (
                'id' => 36,
                'code' => '550000',
                'name' => 'OTROS GASTOS DE OPERACIÓN',
                'tipo' => 'G',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-10-01 18:13:02',
                'deleted_at' => NULL,
            ),
            36 =>
            array (
                'id' => 37,
                'code' => '582000',
            'name' => 'UTILIDAD / (PÉRDIDA) OPERATIVA',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            37 =>
            array (
                'id' => 38,
                'code' => '430000',
                'name' => 'OTROS INGRESOS',
                'tipo' => 'I',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-10-01 18:21:41',
                'deleted_at' => NULL,
            ),
            38 =>
            array (
                'id' => 39,
                'code' => '560000',
                'name' => 'OTROS GASTOS NO OPERATIVOS',
                'tipo' => 'G',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-10-01 18:13:23',
                'deleted_at' => NULL,
            ),
            39 =>
            array (
                'id' => 40,
                'code' => '583000',
            'name' => 'UTILIDAD / (PÉRDIDA) ANTES DE IMPUESTOS',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            40 =>
            array (
                'id' => 41,
                'code' => '570000',
                'name' => 'IMPUESTO SOBRE LAS UTILIDADES DE LAS EMPRESAS',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            41 =>
            array (
                'id' => 42,
                'code' => '584000',
            'name' => 'UTILIDAD / (PÉRDIDA) DEL EJERCICIO',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            42 =>
            array (
                'id' => 43,
                'code' => '500000',
                'name' => 'UTILIDAD DEL EJERCICIO',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            43 =>
            array (
                'id' => 44,
                'code' => '400000',
                'name' => 'PÉRDIDA DEL EJERCICIO',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            44 =>
            array (
                'id' => 45,
                'code' => '311000',
                'name' => 'CUENTAS DE CAPITAL',
                'tipo' => 'P',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-10-01 18:18:43',
                'deleted_at' => NULL,
            ),
            45 =>
            array (
                'id' => 46,
                'code' => '312000',
                'name' => 'AJUSTE DE CAPITAL',
                'tipo' => 'P',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-10-01 18:18:59',
                'deleted_at' => NULL,
            ),
            46 =>
            array (
                'id' => 47,
                'code' => '321000',
                'name' => 'CUENTAS RESERVAS',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            47 =>
            array (
                'id' => 48,
                'code' => '322000',
                'name' => 'AJUSTE DE RESERVAS PATRIMONIALES',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            48 =>
            array (
                'id' => 49,
                'code' => '331000',
                'name' => 'CUENTAS DE RESULTADO',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            49 =>
            array (
                'id' => 50,
                'code' => '332000',
                'name' => 'ACTUALIZACION VALOR CUENTAS DE RESULTADOS',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            50 =>
            array (
                'id' => 51,
                'code' => '111100',
                'name' => 'FLUJO DE EFECTIVO EN ACTIVIDADES DE OPERACIÓN',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            51 =>
            array (
                'id' => 52,
                'code' => '111200',
                'name' => 'FLUJO DE EFECTIVO EN ACTIVIDADES DE INVERSIÓN',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            52 =>
            array (
                'id' => 53,
                'code' => '111300',
                'name' => 'FLUJO DE EFECTIVO EN ACTIVIDADES DE FINANCIAMIENTO',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            53 =>
            array (
                'id' => 54,
                'code' => '111400',
            'name' => 'AUMENTO (DISMINUCIÓN) NETA DE EFECTIVO Y EQUIVALENTES DE EFECTIVO',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            54 =>
            array (
                'id' => 55,
                'code' => '111500',
                'name' => 'EFECTIVO Y EQUIVALENTES DE EFECTIVO AL INICIO DEL EJERCICIO',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
            55 =>
            array (
                'id' => 56,
                'code' => '111600',
                'name' => 'EFECTIVO Y EQUIVALENTES DE EFECTIVO AL FINAL DEL EJERCICIO',
                'tipo' => 'A',
                'created_at' => '2020-09-30 16:16:17',
                'updated_at' => '2020-09-30 16:16:17',
                'deleted_at' => NULL,
            ),
        ));
    }
}
