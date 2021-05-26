<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FormOpcionOpcioneRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Route;


class FormOpcionOpcioneCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    protected $formId;

    public function setup()
    {
        CRUD::setModel(\App\Models\FormOpcionOpcione::class);
        
        $this->setRoute();
        $this->breadCrumbs();
        $this->filterList();

        CRUD::setEntityNameStrings('opcion', 'Opciones del grupo');
    }

    private function setRoute()
    {
        $this->formId = Route::current()->parameter('form_id');

        $this->crud->setRoute(
            "admin/formgrupoopcione/"
                . $this->formId . "/opciones"
        );
    }

    private function breadCrumbs()
    {
        $this->data['breadcrumbs'] = [
            trans('backpack::crud.admin') => backpack_url('dashboard'),

            'Grupos' => backpack_url('formgrupoopcione'),
            'Opciones' => backpack_url("formgrupoopcione/" . $this->formId . "/opciones"),
            trans('backpack::crud.list') => false,
        ];
    }

    private function filterList()
    {
        $this->crud->addClause('where', 'form_grupo_opcion_id', $this->formId);
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'titulo',
            'label' => 'Titulo',
            'type'  => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'precio_socio',
            'label' => 'Precio socio',
            'type' => 'number',
            'prefix'        => '€',
            'decimals'      => 2,
        ]);
        $this->crud->addColumn([
            'name' => 'precio_normal',
            'label' => 'Precio normal',
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
                'prefix'     => 'EUR €',
                'name' => 'precio_socio',
                'label' => 'Precio socio',
                'type' => 'number',
                'attributes' => [
                    'step' => 'any',
                ],
            ],
            [
                'prefix'     => 'EUR €',
                'name' => 'precio_normal',
                'label' => 'Precio normal',
                'type' => 'number',
                'attributes' => [
                    'step' => 'any',
                ],
            ],
            [
                'name' => 'precio_persona',
                'label' => 'Precio por persona',
                'type' => 'checkbox',
            ],
            [
                'name' => 'precio_mensual',
                'label' => 'Precio mensual',
                'type' => 'checkbox',
            ],
            [
                'name' => 'activo',
                'label' => 'Activo',
                'type' => 'checkbox',
            ],
            [
                'name' => 'form_grupo_opcion_id',
                'label' => '',
                'type' => 'hidden',
                'value' => $this->formId
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(FormOpcionOpcioneRequest::class);

        $this->basicFields();

    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
