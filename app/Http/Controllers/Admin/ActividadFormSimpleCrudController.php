<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ActividadFormSimpleRequest;
use App\Models\Actividade;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class ActividadFormSimpleCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\ActividadFormSimple::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/actividadformsimple');
        CRUD::setEntityNameStrings('formulario', 'Formulario simple');
    }

    protected function setupListOperation()
    {
        $this->crud->addButtonFromView('line', 'formulario-respuestas-simples', 'formulario-respuestas-simples', 'beginning');
        $this->crud->addColumn([
            'name' => 'actividade',
            'label' => 'Actividad',
            'type' => 'relationship',
            'attribute' => 'titulo',
            'model'     => App\Models\Actvidade::class,
        ]);
        $this->crud->addColumn([
            'name' => 'titulo',
            'label' => 'Titulo',
            'type'  => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'descripcion',
            'label' => 'Descripcion',
            'type'  => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'activo',
            'label' => 'Activo',
            'type' => 'btnToggle',
        ]);
        $this->crud->addColumn([
            'name' => 'extras',
            'type' => 'relationship',
            'label' => 'Extras',
        ]);

        $this->crud->addFilter(
            [
                'name' => 'actividad_id',
                'type' => 'dropdown',
                'label' => 'Actividades',
            ],
            Actividade::where('formulario', 1)->pluck('titulo', 'id')->toArray(),
        );
    }

    protected function basicFields()
    {
        $this->crud->addFields([
            [
                'label' => 'Actividades',
                'type' => 'select2',
                'name' => 'actividad_id',
                'model'     => "App\Models\Actividade",
                'attribute' => 'titulo',
                'options'   => (function ($query) {
                    return $query->where('formulario', 1)
                        ->orderBy('titulo', 'ASC')->get();
                }),
            ],
            [
                'name' => 'titulo',
                'label' => 'Titulo',
                'type' => 'text',
            ],
            [
                'name' => 'descripcion',
                'label' => 'Descripcion',
                'type' => 'text',
            ],
            [
                'label'     => "Extras",
                'type'      => 'select2_multiple',
                'name'      => 'extras',
                'model'     => "App\Models\ActividadExtra",
                'attribute' => 'titulo',
                'options'   => (function ($query) {
                    return $query->orderBy('titulo', 'ASC')->get();
                }),
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(ActividadFormSimpleRequest::class);

        $this->basicFields();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
