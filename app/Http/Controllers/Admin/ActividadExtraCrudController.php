<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ActividadExtraRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class ActividadExtraCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\ActividadExtra::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/actividadextra');
        CRUD::setEntityNameStrings('extra', 'Extras');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'titulo',
            'label' => 'Titulo',
            'type'  => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'precio_normal',
            'label' => 'Precio normal',
            'type' => 'number',
            'prefix'        => '€',
            'decimals'      => 2,
        ]);
        $this->crud->addColumn([
            'name' => 'precio_socio',
            'label' => 'Precio socio',
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
                'label' => 'Titulo',
                'type' => 'text',
            ],
            [
                'name' => 'precio_normal',
                'label' => 'Precio normal',
                'type' => 'number',
                'attributes' => [
                    'step' => 'any',
                ],
            ],
            [
                'name' => 'precio_socio',
                'label' => 'Precio socio',
                'type' => 'number',
                'attributes' => [
                    'step' => 'any',
                ],
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
        CRUD::setValidation(ActividadExtraRequest::class);

        $this->basicFields();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
