<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CasalInscripcionesDatoRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

use function PHPSTORM_META\type;

/**
 * Class CasalInscripcionesDatoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CasalInscripcionesDatoCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    protected $inscripcionId;
    public function setup()
    {
        CRUD::setModel(\App\Models\CasalInscripcionesDato::class);

        $this->inscripcionId = \Route::current()->parameter('inscripcion_id');
        $this->crud->setRoute("admin/casalinscripcione/" . $this->inscripcionId . "/inscripcion-opciones");
        $this->crud->addClause('where', 'inscripcion_id', $this->inscripcionId);

        CRUD::setEntityNameStrings('datos', 'Datos inscripcion');
    }
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'estada_matins',
            'label' => 'Estada matins',
        ]);
        $this->crud->addColumn([
            'name' => 'comedor',
            'label' => 'Comedor',
        ]);
        $this->crud->addColumn([
            'name' => 'hora_permanencia',
            'label' => 'Hora permanencia',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'name' => 'jovenil',
            'label' => 'Jovenil',
        ]);
        $this->crud->addColumn([
            'name' => 'compra_raqueta',
            'label' => 'Compra raqueta',
        ]);
        $this->crud->addColumn([
            'name' => 'compra_pala',
            'label' => 'Compra pala',
        ]);
        $this->crud->addColumn([
            'name' => 'talla_camiseta',
            'label' => 'Talla camiseta',
            'type' => 'text'
        ]);
    }
    protected function basicFields()
    {
        $this->crud->addFields([

            [
                'name' => 'estada_matins',
                'label' => 'Estada matins',
                'type' => 'checkbox'
            ],
            [
                'name' => 'comedor',
                'label' => 'Comedor',
                'type' => 'checkbox'
            ],
            [
                'name' => 'hora_permanencia',
                'label' => 'Hora permanencia',
                'type' => 'text'
            ],
            [
                'name' => 'jovenil',
                'label' => 'Jovenil',
                'type' => 'checkbox'
            ],
            [
                'name' => 'compra_raqueta',
                'label' => 'Compra raqueta',
                'type' => 'checkbox'
            ],
            [
                'name' => 'compra_pala',
                'label' => 'Compra pala',
                'type' => 'checkbox'
            ],
            [
                'name' => 'talla_camiseta',
                'label' => 'Talla camiseta',
                'type' => 'text'
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
        CRUD::setValidation(CasalInscripcionesDatoRequest::class);
        $this->basicFields();
    }
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
