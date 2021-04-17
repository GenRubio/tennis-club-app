<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\QuotaSocioRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class QuotaSocioCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\QuotaSocio::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/quotasocio');
        CRUD::setEntityNameStrings('quota', 'Quotas');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'titulo',
            'label' => 'Nombre',
        ]);

        $this->crud->addColumn([
            'name' => 'precio',
            'label' => 'Precio',
            'type' => 'number',
            'prefix'        => '€',
            'decimals'      => 2,
        ]);

        $this->crud->addColumn([
            'name' => 'activo',
            'label' => 'Activo',
            'type' => 'btnToggle',
        ]);
    }

    protected function basicFields()
    {
        $this->crud->addFields([

            [
                'name' => 'titulo',
                'label' => 'Nombre',
                'type' => 'text',
            ],
            [
                'name' => 'precio',
                'label' => 'Precio',
                'type' => 'number',
                'attributes' => [
                    'step' => 'any',
                ],
            ],
            [
                'label'     => "Servicios",
                'type'      => 'select2_multiple',
                'name'      => 'servicios',
                'model'     => "App\Models\Servicio",
                'attribute' => 'titulo',

                'options'   => (function ($query) {
                    return $query->orderBy('titulo', 'ASC')->get();
                }), 
            ],
            [
                'name' => 'activo',
                'label' => 'Activo',
                'type' => 'checkbox',
            ],

        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(QuotaSocioRequest::class);

        $this->basicFields();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
