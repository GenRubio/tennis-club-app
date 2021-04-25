<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ActividadTipoRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class ActividadTipoCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\ActividadTipo::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/actividadtipo');
        CRUD::setEntityNameStrings('tipo', 'Tipos actividad');
    }

    protected function setupListOperation()
    {
        CRUD::setFromDb(); // columns

    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(ActividadTipoRequest::class);

        CRUD::setFromDb(); // fields
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
