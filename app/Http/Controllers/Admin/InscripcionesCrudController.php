<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;
use App\Models\ActividadInscripcione;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class InscripcionesCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation {
        destroy as traitDestroy;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    protected $actividad_id;
    public function setup()
    {
        CRUD::setModel(\App\Models\Client::class);

        $this->setRoute();
        $this->filter();
        $this->broadCrumbs();

        CRUD::setEntityNameStrings('client', 'Inscripciones');

        $this->crud->denyAccess('create');
    }
    private function setRoute()
    {
        $this->actividad_id = Route::current()->parameter('actividad_id');

        $this->crud->setRoute(
            "admin/actividade/"
                . $this->actividad_id . "/inscripciones"
        );
    }

    private function filter()
    {
        $this->crud->addClause('whereIn', 'id', function ($query) {
            $query->select('cliente_id')
                ->from('actividad_inscripciones')
                ->where('actividad_inscripciones.actividad_id', '=', $this->actividad_id);
        });
    }

    private function broadCrumbs()
    {
        $this->data['breadcrumbs'] = [
            trans('backpack::crud.admin') => backpack_url('dashboard'),
            'Actividades' => backpack_url('actividade'),
            'Inscripciones' => false,
            trans('backpack::crud.list') => false,
        ];
    }

    protected function setupListOperation()
    {
        $this->crud->addButtonFromView('line', 'opciones-inscripcion', 'opciones-inscripcion', 'beginning');
        $this->crud->denyAccess('update');
        $this->crud->addColumn([
            'name' => 'first_name',
            'label' => 'Nombre',
        ]);
        $this->crud->addColumn([
            'name' => 'second_name',
            'label' => 'Apellidos',
        ]);
        $this->crud->addColumn([
            'name' => 'dni',
            'label' => 'Identificador',
        ]);
        $this->crud->addColumn([
            'name' => 'telefono_1',
            'label' => 'Telefono',
        ]);

        $this->crud->addColumn([
            'name' => 'quotaSocio',
            'label' => 'Quota',
            'type' => 'relationship',
            'attribute' => 'titulo',
            'model'     => App\Models\QuotaSocio::class,
        ]);

        $this->crud->addFilter(
            [
                'name'  => 'status',
                'type'  => 'dropdown',
                'label' => 'Inscripciones'
            ],
            [
                1 => 'Pagadas',
                0 => 'Pago pendiente',
            ],
            function ($value) {
                $this->crud->addClause('whereIn', 'id', function ($query) use ($value) {
                    $query->select('cliente_id')
                        ->from('actividad_inscripciones')
                        ->where('actividad_inscripciones.actividad_id', '=', $this->actividad_id)
                        ->where('actividad_inscripciones.pagado', '=', $value);
                });
            }
        );
    }

    public function destroy($id, $clientId)
    {
        $this->crud->hasAccessOrFail('delete');

        return ActividadInscripcione::where('cliente_id', $clientId)
            ->where('actividad_id', $id)
            ->delete();
    }
}
