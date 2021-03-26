<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\GalleriaImageRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class GalleriaImageCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class GalleriaImageCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;


    public function setup()
    {
        CRUD::setModel(\App\Models\GalleriaImage::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/galleriaimage');
        CRUD::setEntityNameStrings('imagen', 'Galleria imagenes');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Imagen',
            'type'  => 'image',
        ]);
        $this->crud->addColumn([
            'name' => 'activo',
            'type' => 'check',
            'label' => 'Activo',
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
                'name' => 'activo',
                'label' => 'Activo',
                'type' => 'checkbox',
            ],

        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(GalleriaImageRequest::class);

        $this->basicFields();
    }
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
