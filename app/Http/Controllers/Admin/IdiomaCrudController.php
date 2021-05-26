<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\IdiomaRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class IdiomaCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;


    public function setup()
    {
        CRUD::setModel(\App\Models\Idioma::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/idioma');
        CRUD::setEntityNameStrings('idioma', 'idiomas');

        $this->crud->denyAccess('create');
    }

    protected function setupListOperation()
    {
        $this->crud->denyAccess('delete');
        $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Nombre idioma',
        ]);
        $this->crud->addColumn([
            'name' => 'native',
            'label' => 'Nombre nativo',
        ]);
        $this->crud->addColumn([
            'name' => 'active',
            'label' => 'Activo',
            'type' => 'btnToggle'
        ]);
        $this->crud->addColumn([
            'name' => 'defecto',
            'label' => 'Idioma por defecto',
            'type' => 'btnToggle'
        ]);
    }

    protected function basicFields()
    {
        $this->crud->addFields([
            [
                'name' => 'name',
                'label' => 'Nombre idioma',
                'type' => 'text',
                'attributes' => [
                    'readonly'    => 'readonly',
                ],
            ],
            [
                'name' => 'native',
                'label' => 'Nombre nativo',
                'type' => 'text',
            ],
            [
                'name' => 'abbr',
                'label' => 'Code (ISO 639-1)',
                'type' => 'text',
                'attributes' => [
                    'readonly'    => 'readonly',
                ],
            ],
            [
                'name' => 'active',
                'label' => 'Activo',
                'type' => 'checkbox',
            ],
            [
                'name' => 'defecto',
                'label' => 'Idioma por defecto',
                'type' => 'checkbox',
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(IdiomaRequest::class);

        $this->basicFields();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
