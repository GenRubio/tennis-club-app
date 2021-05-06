<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FormOpcionExtraRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Route;

class FormOpcionExtraCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    protected $formId;

    public function setup()
    {
        CRUD::setModel(\App\Models\FormOpcionExtra::class);
      
        $this->setRoute();
        $this->breadCrumbs();
        $this->filterList();

        CRUD::setEntityNameStrings('opcion', 'Opciones del grupo');
    }

    private function setRoute()
    {
        $this->formId = Route::current()->parameter('form_id');

        $this->crud->setRoute(
            "admin/formgrupoextra/"
                . $this->formId . "/opciones"
        );
    }

    private function breadCrumbs()
    {
        $this->data['breadcrumbs'] = [
            trans('backpack::crud.admin') => backpack_url('dashboard'),

            'Grupos' => backpack_url('formgrupoextra'),
            'Opciones' => backpack_url("formgrupoextra/" . $this->formId . "/opciones"),
            trans('backpack::crud.list') => false,
        ];
    }

    private function filterList()
    {
        $this->crud->addClause('where', 'form_grupo_extra_id', $this->formId);
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'titulo',
            'label' => 'Titulo',
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
                'name' => 'activo',
                'label' => 'Activo',
                'type' => 'checkbox',
            ],
            [
                'name' => 'form_grupo_extra_id',
                'label' => '',
                'type' => 'hidden',
                'value' => $this->formId
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(FormOpcionExtraRequest::class);

        $this->basicFields();

    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
