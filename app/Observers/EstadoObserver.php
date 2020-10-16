<?php

namespace App\Observers;

use App\Models\Estado;
use TCG\Voyager\Models\Permission;
class EstadoObserver
{
    /**
     * Handle the estado "created" event.
     *
     * @param  \Models\Estado  $estado
     * @return void
     */
    public function created(Estado $estado)
    {
        Permission::firstOrCreate([
            'key'        => 'estado_'.$estado->name.'_asiento',
            'table_name' => 'estados',
        ]);
    }

    /**
     * Handle the estado "updated" event.
     *
     * @param  \Models\Estado  $estado
     * @return void
     */
    public function updated(Estado $estado)
    {
        //
    }

    /**
     * Handle the estado "deleted" event.
     *
     * @param  \Models\Estado  $estado
     * @return void
     */
    public function deleted(Estado $estado)
    {
        //
    }

    /**
     * Handle the estado "restored" event.
     *
     * @param  \Models\Estado  $estado
     * @return void
     */
    public function restored(Estado $estado)
    {
        //
    }

    /**
     * Handle the estado "force deleted" event.
     *
     * @param  \Models\Estado  $estado
     * @return void
     */
    public function forceDeleted(Estado $estado)
    {
        //
    }
}
