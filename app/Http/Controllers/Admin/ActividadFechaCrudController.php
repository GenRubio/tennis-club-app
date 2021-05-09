<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ActividadFechaRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Route;

class ActividadFechaCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    protected $actividad_id;

    public function setup()
    {
        CRUD::setModel(\App\Models\ActividadFecha::class);

        $this->setRoute();
        $this->filter();
        $this->broadCrumbs();

        CRUD::setEntityNameStrings('fecha', 'Actividad Fechas');
    }

    private function setRoute()
    {
        $this->actividad_id = Route::current()->parameter('actividad_id');

        $this->crud->setRoute(
            "admin/actividade/"
                . $this->actividad_id . "/fechas"
        );
    }

    private function filter()
    {
        $this->crud->addClause('where', 'actividad_id', $this->actividad_id);
    }

    private function broadCrumbs()
    {
        $this->data['breadcrumbs'] = [
            trans('backpack::crud.admin') => backpack_url('dashboard'),
            'Actividades' => backpack_url('actividade'),
            'Fechas' => false,
            trans('backpack::crud.list') => false,
        ];
    }

    protected function setupListOperation()
    {
        $this->crud->addButtonFromView('line', 'horario-actividad', 'horario-actividad', 'beginning');

        $this->crud->addColumn([
            'name' => 'data_inicio',
            'label' => 'Fecha inicio',
        ]);
        $this->crud->addColumn([
            'name' => 'data_final',
            'label' => 'Fecha final',
        ]);
        $this->crud->addColumn([
            'name' => 'calendario',
            'label' => 'Calendario',
            'type' => 'btnToggle'
        ]);
        $this->crud->addColumn([
            'name' => 'activo',
            'label' => 'Activo',
            'type' => 'btnToggle'
        ]);
        $this->crud->addColumn([
            'name' => 'actividad',
            'label' => 'Actividad',
            'type' => 'relationship',
            'attribute' => 'titulo',
            'model'     => App\Models\Actividade::class,
        ]);
    }

    protected function basicFields()
    {
        $this->crud->addFields([
            [
                'name' => 'data_inicio',
                'label' => 'Fecha inicio',
                'type' => 'date',
            ],
            [
                'name' => 'data_final',
                'label' => 'Fecha final',
                'type' => 'date',
            ],
            [
                'name' => 'calendario',
                'label' => 'Colocar actividad en calendario',
                'type' => 'checkbox',
            ],
            [
                'name' => 'actividad_id',
                'label' => '',
                'type' => 'hidden',
                'value' => $this->actividad_id
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(ActividadFechaRequest::class);

        $this->basicFields();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
