<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ActividadFechaHorarioRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Route;


class ActividadFechaHorarioCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;


    protected $actividad_id;
    protected $fecha_id;

    public function setup()
    {
        CRUD::setModel(\App\Models\ActividadFechaHorario::class);
       
        $this->setRoute();
        $this->filter();
        $this->broadCrumbs();

        CRUD::setEntityNameStrings('horario', 'Fecha horario');
    }

    private function setRoute()
    {
        $this->actividad_id = Route::current()->parameter('actividad_id');
        $this->fecha_id = Route::current()->parameter('fecha_id');

        $this->crud->setRoute(
            "admin/actividade/"
                . $this->actividad_id . "/fechas/"
                . $this->fecha_id . "/horarios"
        );
    }

    private function filter()
    {
        $this->crud->addClause('where', 'actividad_fecha_id', $this->fecha_id);
    }

    private function broadCrumbs()
    {
        $this->data['breadcrumbs'] = [
            trans('backpack::crud.admin') => backpack_url('dashboard'),
            'Actividades' => backpack_url('actividade'),
            'Fechas' => backpack_url("actividade/" . $this->actividad_id . "/fechas"),
            'Horarios' => false,
            trans('backpack::crud.list') => false,
        ];
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'dia',
            'label' => 'Dia',
            'type' => 'select_from_array',
            'options' => config('app.dias-semana'),
        ]);
        $this->crud->addColumn([
            'name' => 'hora_inicio',
            'label' => 'Hora inicio',
        ]);
        $this->crud->addColumn([
            'name' => 'hora_final',
            'label' => 'Hora final',
        ]);
    }

    protected function basicFields()
    {
        $this->crud->addFields([
            [
                'name' => 'dia',
                'label' => 'Dia',
                'type' => 'select_from_array',
                'options' => config('app.dias-semana'),
            ],
            [
                'name' => 'hora_inicio',
                'label' => 'Hora inicio',
                'type' => 'time',
            ],
            [
                'name' => 'hora_final',
                'label' => 'Hora final',
                'type' => 'time',
            ],
            [
                'name' => 'actividad_fecha_id',
                'label' => '',
                'type' => 'hidden',
                'value' => $this->fecha_id
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(ActividadFechaHorarioRequest::class);

        $this->basicFields();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
