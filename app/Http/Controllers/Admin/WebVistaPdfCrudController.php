<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\WebVistaPdfRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Route;

class WebVistaPdfCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    protected $vistaId;

    public function setup()
    {
        CRUD::setModel(\App\Models\WebVistaPdf::class);
        
        $this->setRoute();
        $this->breadCrumbs();
        $this->filterList();

        CRUD::setEntityNameStrings('PDF', 'Pdfs');
    }

    private function setRoute()
    {
        $this->vistaId = Route::current()->parameter('vista_id');

        $this->crud->setRoute(
            "admin/webvista/"
                . $this->vistaId . "/pdfs"
        );
    }
    private function breadCrumbs()
    {
        $this->data['breadcrumbs'] = [
            trans('backpack::crud.admin') => backpack_url('dashboard'),

            'Vistas' => backpack_url('webvista'),
            'Pdf' => false,
            trans('backpack::crud.list') => false,
        ];
    }

    private function filterList()
    {
        $this->crud->addClause('where', 'web_vista_id', $this->vistaId);
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
                'name' => 'web_vista_id',
                'label' => '',
                'type' => 'hidden',
                'value' => $this->vistaId
            ],

        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(WebVistaPdfRequest::class);

        $this->basicFields();

    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
