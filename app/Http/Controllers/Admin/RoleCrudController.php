<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RoleRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;


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

        if (backpack_user()->role->rol != 'Superadmin'){
            $this->crud->denyAccess('create');
        }
    }
    protected function setupListOperation()
    {
        if (backpack_user()->role->rol != 'Superadmin'){
            $this->crud->denyAccess('delete');
        }
        if (backpack_user()->role->rol != 'Superadmin'){
            $this->crud->denyAccess('update');
        }

        $this->crud->addColumn([
            'name' => 'rol',
            'label' => 'Rol',
            'type' => 'text'
        ]);
        $this->crud->addColumn([ 
            'label' => 'Usuarios',
            'type' => 'relationship_count',
            'name' => 'users',
            'wrapper' => [
                'href' => function ($crud, $column, $entry, $related_key) {
                    return backpack_url('user?rol_id='.$entry->getKey());
                },
            ],
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
