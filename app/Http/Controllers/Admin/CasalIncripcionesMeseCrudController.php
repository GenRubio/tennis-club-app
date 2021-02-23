<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CasalIncripcionesMeseRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CasalIncripcionesMeseCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CasalIncripcionesMeseCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation{
        store as traitStore;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    protected $inscripcionId;
    public function setup()
    {
        CRUD::setModel(\App\Models\CasalIncripcionesMese::class);

        $this->inscripcionId = \Route::current()->parameter('inscripcion_id');
        $this->crud->setRoute("admin/casalinscripcione/".$this->inscripcionId."/inscripcion-fechas");
        $this->crud->addClause('where', 'inscripcion_id', $this->inscripcionId);

        CRUD::setEntityNameStrings('fecha', 'fechas inscripcion');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'mes',
            'label' => 'Més',
        ]);
        $this->crud->addColumn([
            'name' => 'data_inicio',
            'label' => 'Fecha inicio',
        ]);
        $this->crud->addColumn([
            'name' => 'data_final',
            'label' => 'Fecha final',
        ]);
    }
    protected function basicFields()
    {
        $this->crud->addFields([

            [
                'name' => 'mes',
                'label' => 'Més',
                'type' => 'text',
            ],
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
                'name' => 'inscripcion_id',
                'type' => 'hidden',
                'value' => $this->inscripcionId,
            ],
        ]);
    }
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CasalIncripcionesMeseRequest::class);

        $this->basicFields();
    }
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
