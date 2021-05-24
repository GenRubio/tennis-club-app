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
    use \Backpack\CRUD\app\Http\Controllers\Operations\FetchOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Actividade::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/actividade');
        CRUD::setEntityNameStrings('actividad', 'actividades');
    }

    protected function setupListOperation()
    {
        $this->crud->denyAccess('delete');
        $this->crud->addButtonFromView('line', 'pdf', 'pdf', 'beginning');
        $this->crud->addButtonFromView('line', 'inscripciones', 'inscripciones', 'beginning');
        $this->crud->addButtonFromView('line', 'fechas-actividad', 'fechas-actividad', 'beginning');
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
                'label' => 'Tipo de actividad <br>
                    <small>
                      Es usado en la inscripcion de la actividad.
                    </small>
                    <br>
                    <small>
                      Solo podran inscribirse los clientes que cumplan el requesito.
                    </small>
                ',
                'type' => 'select2',
                'name' => 'tipo',
                'model'     => "App\Models\ActividadTipo",
                'attribute' => 'titulo',
            ],
            [
                'label'     => "Categorias (Son usadas para filtrar actividades)",
                'type'      => 'select2_multiple',
                'name'      => 'actividadCategoria',
                'model'     => "App\Models\ActividadCategoria",
                'attribute' => 'titulo',

                'options'   => (function ($query) {
                    return $query->orderBy('titulo', 'ASC')->get();
                }),
            ],
            [
                'label'     => "Grupo opciones extras (Ej. Nivel padel) <br>
                    <small>
                    Añadir grupos de opciones extras. Por ejemplo Nivel de Padel, Torneo
                    </small>
                    <br>
                    <small>
                    Los grupos de opciones saldran al final de formulario de inscripcion.
                    </small>
                    <br>
                    <small>
                    Ejemplo: Grupo: Nivel padel -> Opciones a escoger: Profecional, Principiante o Avanzado
                    </small>
                    <br>
                    <small>
                    Añadir mas grupos: Actividades/Formulario/Grupos extras
                    </small>
                ",
                'type'      => 'select2_multiple',
                'name'      => 'formGrupoExtras',
                'model'     => "App\Models\FormGrupoExtra",
                'attribute' => 'titulo',
                'options'   => (function ($query) {
                    return $query->orderBy('titulo', 'ASC')->get();
                }),
            ],
            [
                'label' => 'Extras (Opciones extras de la actividad) <br>
                <small>
                  Las opciones extras apareceran al final de formulario. El cliente podra escoger una o todas opciones
                </small>
                 ',
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
