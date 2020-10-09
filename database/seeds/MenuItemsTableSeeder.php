<?php

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Herramientas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2020-10-08 21:06:11',
                'updated_at' => '2020-10-08 21:23:03',
                'route' => NULL,
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Diseñador de Menús',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 1,
                'order' => 1,
                'created_at' => '2020-10-08 21:06:11',
                'updated_at' => '2020-10-08 21:06:11',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Multimedia',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => 1,
                'order' => 2,
                'created_at' => '2020-10-08 21:06:11',
                'updated_at' => '2020-10-08 21:06:11',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Usuarios',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => 1,
                'order' => 3,
                'created_at' => '2020-10-08 21:06:11',
                'updated_at' => '2020-10-08 21:06:11',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Paginas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-paypal',
                'color' => NULL,
                'parent_id' => 1,
                'order' => 4,
                'created_at' => '2020-10-08 21:06:11',
                'updated_at' => '2020-10-08 21:06:11',
                'route' => 'voyager.pages.index',
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Contable',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-anchor',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2020-10-08 21:17:06',
                'updated_at' => '2020-10-08 21:23:03',
                'route' => NULL,
                'parameters' => '',
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Cuentas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-double-right',
                'color' => NULL,
                'parent_id' => 6,
                'order' => 1,
                'created_at' => '2020-10-08 21:21:20',
                'updated_at' => '2020-10-08 21:23:03',
                'route' => 'voyager.cuentas.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Asientos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-logbook',
                'color' => '#000000',
                'parent_id' => 6,
                'order' => 2,
                'created_at' => '2020-10-08 22:15:45',
                'updated_at' => '2020-10-08 22:15:50',
                'route' => 'asientos.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'Reportes',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-receipt',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2020-10-09 17:58:56',
                'updated_at' => '2020-10-09 17:58:56',
                'route' => NULL,
                'parameters' => '',
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Libro Diario',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-documentation',
                'color' => '#000000',
                'parent_id' => 9,
                'order' => 1,
                'created_at' => '2020-10-09 18:10:52',
                'updated_at' => '2020-10-09 18:10:57',
                'route' => 'lbdiario_index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Libro Mayor',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-logbook',
                'color' => '#000000',
                'parent_id' => 9,
                'order' => 2,
                'created_at' => '2020-10-09 18:25:33',
                'updated_at' => '2020-10-09 18:25:37',
                'route' => 'lbmayor_index',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Balance General',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-anchor',
                'color' => '#000000',
                'parent_id' => 9,
                'order' => 3,
                'created_at' => '2020-10-09 18:26:25',
                'updated_at' => '2020-10-09 18:26:29',
                'route' => 'balancegnral_index',
                'parameters' => NULL,
            ),
        ));
        
        
    }
}