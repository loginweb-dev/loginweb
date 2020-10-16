<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;
use TCG\Voyager\Models\Role;
use App\Models\Estado;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        //creacion de mis permisos
        $estados = Estado::all();
        $llaves = $estados->map(function ($estado, $key) {
            return 'estado_'.$estado->name.'_asiento';
        });

        foreach ($llaves as $key) {
            Permission::firstOrCreate([
                'key'        => $key,
                'table_name' => 'estados',
            ]);
        }
        //permisos de voyager
        $role = Role::where('name', 'admin')->firstOrFail();

        $permissions = Permission::all();

        $role->permissions()->sync(
            $permissions->pluck('id')->all()
        );

        // Persmisos agregados manualmente a gerente
        $gerente = Role::where('name', 'gerente')->firstOrFail();
        \DB::table('permission_role')->insert(
            array (
                0 =>
                array (
                    'permission_id' => 1,
                    'role_id' => $gerente->id,
                )
            )
        );
        // users
        $perm_ger_users = Permission::where('table_name','users')
                                        ->where('key','!=','delete_users')
                                        ->get();
        $gerente->permissions()->attach(
            $perm_ger_users->pluck('id')->all()
        );
        // cuentas
        $perm_ger_cuentas = Permission::where('table_name', 'cuentas')->get();
        $gerente->permissions()->attach(
            $perm_ger_cuentas->pluck('id')->all()
        );
        // asientos
        $perm_ger_asientos = Permission::where('table_name', 'asientos')->get();
        $gerente->permissions()->attach(
            $perm_ger_asientos->pluck('id')->all()
        );
        // estados
        $perm_ger_estados = Permission::where('table_name', 'estados')->get();
        $gerente->permissions()->attach(
            $perm_ger_estados->pluck('id')->all()
        );

         // Persmisos agregados manualmente a contador
         $contador = Role::where('name', 'contador')->firstOrFail();
         \DB::table('permission_role')->insert(
             array (
                 0 =>
                 array (
                     'permission_id' => 1,
                     'role_id' => $contador->id,
                 )
             )
         );
         // users
         $perm_cont_users = Permission::where('table_name','users')
                                    ->where('key','browse_users')
                                    ->orWhere('key','read_users')
                                    ->get();
         $contador->permissions()->attach(
             $perm_cont_users->pluck('id')->all()
         );
         // cuentas
         $perm_cont_cuentas = Permission::where('table_name', 'cuentas')->get();
         $contador->permissions()->attach(
             $perm_cont_cuentas->pluck('id')->all()
         );
         // asientos
         $perm_cont_asientos = Permission::where('table_name', 'asientos')
                                            ->where('key','!=','rechasar_asientos')
                                            ->get();
         $contador->permissions()->attach(
             $perm_cont_asientos->pluck('id')->all()
         );
         // estados
         $permisosestados = Permission::where('table_name', 'estados')
                                        ->where('key','browse_estados')
                                        ->orWhere('key','read_estados')
                                        ->get();
         $contador->permissions()->attach(
             $permisosestados->pluck('id')->all()
         );
    }
}
