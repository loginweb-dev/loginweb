<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'FrontEndController@default')->name('page_default');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('login/{social}', 'SocialiteController@redirectToProvider')->name('socialLogin');
Route::get('login/{social}/callback', 'SocialiteController@handleProviderCallback');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('{page_id}/edit', 'PageController@edit')->name('page_edit');
    Route::post('/page/{page_id}/update', 'PageController@update')->name('page_update');
    Route::get('/page/{page_id}/default', 'PageController@default')->name('page_default');

    Route::get('{page_id}/index', 'BlockController@index')->name('block_index');
    Route::post('/block/update/{block_id}', 'BlockController@update')->name('block_update');
    Route::get('/block/delete/{block_id}', 'BlockController@delete')->name('block_delete');
    Route::get('/block/order/{block_id}/{order}', 'BlockController@block_ordering');

    Route::get('/block/move_up/{block_id}', 'BlockController@move_up')->name('block_move_up');
    Route::get('/block/move_down/{block_id}', 'BlockController@move_down')->name('block_move_down');

    //ruta para agregar las cuentas a los elementos
    Route::get('add_subaccount/{id}',function($id){
        $cuenta = \App\Models\Cuenta::with('detalle')
                                            ->where('id',$id)->first();
        //return $plan;
        return view('admin.cuentas.addsubcuentas', [
            'cuenta' => $cuenta,
            'element_id' => $cuenta->id
            ]
        );
    })->name('add_subaccount');

    Route::post('store_account','CuentasController@store')->name('store_account');

    Route::resource('asientos','AsientosController');
    Route::post('add-comprobante/{id}','AsientosController@agregarcomprobante')->name('agregarcomprobante');

     //ruta para buscar por codigo las cuentas
     Route::get('buscarcuenta','AsientosController@buscarCuenta');
     Route::get('listarcuentas','AsientosController@listarCuentas');
     Route::post('printf/asiento/{id}', 'AsientosController@printf_asiento')->name('printf_asiento');

     //rutas para reportes
    Route::get('reports/lbdiario','ReporteController@lbdiario_index')->name('lbdiario_index');
    Route::post('reports/lbdiario/list', 'ReporteController@lbdiario_generate');

    Route::get('reports/lbmayor','ReporteController@lbmayor_index')->name('lbmayor_index');
    Route::post('reports/lbmayor/list', 'ReporteController@lbmayor_generate');

    Route::get('reports/balancegnral','ReporteController@balancegnral_index')->name('balancegnral_index');
    Route::post('reports/balancegnral/list', 'ReporteController@balancegnral_generate');

});

