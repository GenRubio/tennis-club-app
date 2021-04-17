<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ClientTiposParienteRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class ClientTiposParienteCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\ClientTiposPariente::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/clienttipospariente');
        CRUD::setEntityNameStrings('tipo pariente', 'Pariente tipos');
    }


    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'nom',
            'label' => 'Tipo',
            'type' => 'text'
        ]);
       
        $this->crud->addColumn([
            'name' => 'activo',
            'label' => 'Activo',
            'type' => 'btnToggle'
        ]);

    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(ClientTiposParienteRequest::class);

        CRUD::setFromDb(); // fields

    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
