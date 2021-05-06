<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FormGrupoOpcioneRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class FormGrupoOpcioneCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\FormGrupoOpcione::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/formgrupoopcione');
        CRUD::setEntityNameStrings('grupo', 'Grupos De Opciones');
    }

    protected function setupListOperation()
    {
        $this->crud->addButtonFromView('line', 'formulario-respuestas', 'formulario-respuestas', 'beginning');

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
                'name' => 'tipo_respuestas',
                'label' => 'Tipo de opciones del grupo <br>
                    <small>
                       Simple: El cliente podra escoger solo 1 opcion del grupo
                    </small>
                    <br>
                    <small>
                       Multiple: El cliente podra escoger mas de 1 opcion del grupo
                    </small>
                    ',
                'type' => 'select_from_array',
                'options' => config('app.opciones-grupo'),
            ],
            [
                'label' => 'Extras (Opciones extras del grupo de opciones) <br>
                        <small>
                        Las opciones extras apareceran al final del grupo. El cliente podra escoger una o todas opciones.
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
        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(FormGrupoOpcioneRequest::class);

        $this->basicFields();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
