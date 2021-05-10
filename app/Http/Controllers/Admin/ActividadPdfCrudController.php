<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ActividadPdfRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Route;

class ActividadPdfCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\ActividadPdf::class);
        
        $this->setRoute();
        $this->filter();
        $this->broadCrumbs();

        CRUD::setEntityNameStrings('pdf', 'Actividad Pdfs');
    }

    private function setRoute()
    {
        $this->actividad_id = Route::current()->parameter('actividad_id');

        $this->crud->setRoute(
            "admin/actividade/"
                . $this->actividad_id . "/pdfs"
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
            'Pdfs' => false,
            trans('backpack::crud.list') => false,
        ];
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'url',
            'label' => 'Archivo PDF',
            'type' => 'image'
        ]);
        $this->crud->addColumn([
            'name' => 'titulo',
            'label' => 'Titulo',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'name' => 'activo',
            'type' => 'btnToggle',
            'label' => 'Activo',
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
                'name' => 'url',
                'label' => 'Archivo',
                'type' => 'upload',
                'upload'    => true,
            ],
            [
                'name' => 'activo',
                'label' => 'Activo',
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
        CRUD::setValidation(ActividadPdfRequest::class);

        $this->basicFields();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
