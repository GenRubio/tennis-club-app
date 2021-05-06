<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FormGrupoExtraRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class FormGrupoExtraCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\FormGrupoExtra::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/formgrupoextra');
        CRUD::setEntityNameStrings('grupo', 'Grupos de opciones extras');
    }

    protected function setupListOperation()
    {
        $this->crud->addButtonFromView('line', 'formulario-respuestas', 'formulario-respuestas', 'beginning');

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
                'name' => 'activo',
                'label' => 'Activo',
                'type' => 'checkbox',
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(FormGrupoExtraRequest::class);

        $this->basicFields();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
