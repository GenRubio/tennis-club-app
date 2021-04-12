<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ShopBannerImageRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ShopBannerImageCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ShopBannerImageCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\ShopBannerImage::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/shopbannerimage');
        CRUD::setEntityNameStrings('imagen', 'Carusel imagenes tienda');
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
            'type' => 'btnToggle',
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
                'name' => 'active',
                'label' => 'Activo',
                'type' => 'checkbox',
            ],

        ]);
    }
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ShopBannerImageRequest::class);

        $this->basicFields();

       
    }
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
