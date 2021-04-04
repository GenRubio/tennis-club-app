<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RestauranteCategoriaRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class RestauranteCategoriaCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class RestauranteCategoriaCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    public function setup()
    {
        CRUD::setModel(\App\Models\RestauranteCategoria::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/restaurantecategoria');
        CRUD::setEntityNameStrings('categoria', 'Restaurante tipos de carta');
    }

    protected function setupListOperation()
    {
        CRUD::setFromDb(); // columns

    }
    protected function setupCreateOperation()
    {
        CRUD::setValidation(RestauranteCategoriaRequest::class);

        CRUD::setFromDb(); // fields
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
