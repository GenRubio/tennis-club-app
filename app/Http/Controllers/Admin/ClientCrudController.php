<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ClientRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;


class ClientCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Client::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/client');
        CRUD::setEntityNameStrings('client', 'Datos usuarios');
    }

    
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Imagen',
            'type'  => 'image',
        ]);
        $this->crud->addColumn([
            'name' => 'first_name',
            'label' => 'Nombre',
        ]);
        $this->crud->addColumn([
            'name' => 'second_name',
            'label' => 'Apellidos',
        ]);
        $this->crud->addColumn([
            'name' => 'dni',
            'label' => 'Identificador',
        ]);
    }

    
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ClientRequest::class);

        CRUD::setFromDb(); // fields

    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
