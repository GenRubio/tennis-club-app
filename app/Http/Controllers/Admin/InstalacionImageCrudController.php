<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InstalacionImageRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;


class InstalacionImageCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    //Reordenar
    //use \Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;

    protected $instalacionId;
    public function setup()
    {
        CRUD::setModel(\App\Models\InstalacionImage::class);

        $this->instalacionId = \Route::current()->parameter('instalacion_id');

        $this->crud->setRoute("admin/instalacione/".$this->instalacionId."/images");
        $this->crud->addClause('where', 'id_estalacion', $this->instalacionId);

        CRUD::setEntityNameStrings('imagen', 'Imagenes instalacion');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Imagen',
            'type'  => 'image',
        ]);
        $this->crud->addColumn([
            'name' => 'active',
            'label' => 'Activo',
            'type' => 'btnToggle'
        ]);
    }
    protected function basicFields()
    {
        $this->crud->addFields([
            [
                'name' => 'image',
                'label' => 'Imagen',
                'type' => 'image',
            ],
            [
                'name' => 'active',
                'label' => 'Activar',
                'type' => 'checkbox',
            ],
            [
                'name' => 'id_estalacion',
                'label' => '',
                'type' => 'hidden',
                'value' => $this->instalacionId,
            ],

        ]);
    }
    protected function setupCreateOperation()
    {
        CRUD::setValidation(InstalacionImageRequest::class);

        $this->basicFields();
    }
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    /* Reordenar 
    protected function setupReorderOperation()
    {
        $this->crud->set('reorder.label', 'image');
        $this->crud->set('reorder.max_level', 2);
    }
    */
}
