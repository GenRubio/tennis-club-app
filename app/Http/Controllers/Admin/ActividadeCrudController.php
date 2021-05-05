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
        $this->crud->addButtonFromView('line', 'inscripciones', 'inscripciones', 'beginning');
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
            'name' => 'visible',
            'type' => 'btnToggle',
            'label' => 'Visible',
        ]);
        $this->crud->addColumn([
            'name' => 'activo',
            'type' => 'btnToggle',
            'label' => 'Activo',
        ]);
        $this->crud->addColumn([
            'name' => 'extras',
            'type' => 'relationship',
            'label' => 'Extras',
        ]);
        $this->crud->addColumn([
            'name' => 'actividadTipo',
            'label' => 'Tipo',
            'type' => 'relationship',
            'attribute' => 'titulo',
            'model'     => App\Models\ActividadTipo::class,
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
                'name' => 'imagen',
                'label' => 'Imagen',
                'type' => 'image',
            ],
            [
                'label' => 'Tipo de actividad',
                'type' => 'select2',
                'name' => 'tipo',
                'model'     => "App\Models\ActividadTipo",
                'attribute' => 'titulo',
            ],
            [
                'name'  => 'separator',
                'type'  => 'custom_html',
                'value' => '<hr>'
            ],
            [
                'name' => 'formulario',
                'label' => 'Formulario de inscripcion',
                'type' => 'radio',
                'options'     => [
                    0 => "Inscripcion directa / sin formulario",
                    1 => "Formulario con respuestas simples",
                    2 => "Formulario con respuestas multiples"
                ],
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
