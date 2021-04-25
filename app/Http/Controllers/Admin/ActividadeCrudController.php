<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ActividadeRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class ActividadeCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Actividade::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/actividade');
        CRUD::setEntityNameStrings('actividad', 'actividades');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'created_at',
            'label' => 'Publicado',
            'type'  => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'imagen',
            'label' => 'Imagen',
            'type'  => 'image',
        ]);
        $this->crud->addColumn([
            'name' => 'titulo',
            'label' => 'Titulo',
            'type'  => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'actividadTipo',
            'label' => 'Tipo',
            'type' => 'relationship',
            'attribute' => 'titulo',
            'model'     => App\Models\ActividadTipo::class,
        ]);
        $this->crud->addColumn([
            'name' => 'visible',
            'type' => 'btnToggle',
            'label' => 'Visible',
        ]);
        $this->crud->addColumn([
            'name' => 'activo',
            'type' => 'btnToggle',
            'label' => 'Activo',
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
                'name' => 'descripcion',
                'label' => 'Descripcion',
                'type' => 'ckeditor',
                'limint' => -1,
            ],
            [
                'label' => 'Tipo de actividad',
                'type' => 'select2',
                'name' => 'tipo',
                'model'     => "App\Models\ActividadTipo",
                'attribute' => 'titulo',
            ],
            [
                'name' => 'imagen',
                'label' => 'Imagen',
                'type' => 'image',
            ],
            [
                'name' => 'slug',
                'label' => '',
                'type' => 'hidden',
            ],
        ]);
    }
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ActividadeRequest::class);

        $this->basicFields();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
