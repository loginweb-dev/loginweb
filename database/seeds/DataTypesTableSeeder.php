<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'Usuario',
                'display_name_plural' => 'Usuarios',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-10-08 21:06:11',
                'updated_at' => '2020-10-08 21:06:11',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menú',
                'display_name_plural' => 'Menús',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-10-08 21:06:11',
                'updated_at' => '2020-10-08 21:06:11',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Rol',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-10-08 21:06:11',
                'updated_at' => '2020-10-08 21:06:11',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Pagina',
                'display_name_plural' => 'Paginas',
                'icon' => 'voyager-browser',
                'model_name' => 'App\\Page',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"id","order_display_column":"id","order_direction":"asc","default_search_key":"id","scope":null}',
                'created_at' => '2020-10-08 21:06:11',
                'updated_at' => '2020-10-08 21:06:11',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'blocks',
                'slug' => 'blocks',
                'display_name_singular' => 'Blocke',
                'display_name_plural' => 'Blockes',
                'icon' => 'voyager-params',
                'model_name' => 'App\\Block',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"id","order_display_column":"id","order_direction":"asc","default_search_key":"id","scope":null}',
                'created_at' => '2020-10-08 21:06:11',
                'updated_at' => '2020-10-08 21:06:11',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'cuentas',
                'slug' => 'cuentas',
                'display_name_singular' => 'Cuenta',
                'display_name_plural' => 'Cuentas',
                'icon' => 'voyager-double-right',
                'model_name' => 'App\\Models\\Cuenta',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"id","order_display_column":"id","order_direction":"asc","default_search_key":"code","scope":null}',
                'created_at' => '2020-10-08 21:21:20',
                'updated_at' => '2020-10-08 21:22:07',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'estados',
                'slug' => 'estados',
                'display_name_singular' => 'Estado',
                'display_name_plural' => 'Estados',
                'icon' => 'voyager-forward',
                'model_name' => 'App\\Models\\Estado',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-10-09 21:15:22',
                'updated_at' => '2020-10-09 21:22:36',
            ),
        ));
        
        
    }
}