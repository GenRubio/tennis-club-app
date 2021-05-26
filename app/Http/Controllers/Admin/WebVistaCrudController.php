<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\WebVistaRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class WebVistaCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\WebVista::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/webvista');
        CRUD::setEntityNameStrings('vista', 'Web vistas');
        $this->crud->denyAccess('create');
    }

    protected function setupListOperation()
    {
        $this->crud->denyAccess('delete');
        $this->crud->addButtonFromView('line', 'pdf', 'pdf', 'beginning');
        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Imagen',
            'type'  => 'image',
        ]);
        $this->crud->addColumn([
            'name' => 'titulo',
            'label' => 'Titulo',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'name' => 'slug',
            'label' => 'Slug',
            'type' => 'text'
        ]);

    }

    protected function basicFields()
    {
        $this->crud->addFields([

            [
                'name' => 'image',
                'label' => 'Imagen',
                'type' => 'image',
            ],
            [
                'name' => 'titulo',
                'label' => 'Titulo',
                'type' => 'text',
            ],
            [
                'name' => 'descripcion',
                'label' => 'Descripcion',
                'type' => 'ckeditor',
                'limint' => -1,
            ],
            [
                'name' => 'slug',
                'label' => 'Slug',
                'type' => 'text',
                'attributes' => [
                    'readonly'    => 'readonly',
                ],
            ],

        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(WebVistaRequest::class);

        $this->basicFields();

    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
