<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RoleRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class RoleCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class RoleCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Role::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/role');
        CRUD::setEntityNameStrings('role', 'roles');
    }
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'rol',
            'label' => 'Rol',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'name' => 'activo',
            'label' => 'Activo',
            'type' => 'btnToggle'
        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(RoleRequest::class);

        CRUD::setFromDb(); // fields

    }
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
