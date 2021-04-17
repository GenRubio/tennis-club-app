<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use App\Models\Role;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Hash;

class UserCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

   
    public function setup()
    {
        CRUD::setModel(\App\Models\User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user');
        CRUD::setEntityNameStrings('usuario', 'Usuarios');
    }

  
    protected function setupListOperation()
    {

        $this->crud->addColumn([
            'name' => 'email',
            'label' => 'Email',
            'type'  => 'email',
        ]);
        $this->crud->addColumn([ 
            'label' => 'Clientes',
            'type' => 'relationship_count',
            'name' => 'clients',
            'wrapper' => [
                'href' => function ($crud, $column, $entry, $related_key) {
                    return backpack_url('client?user_id='.$entry->getKey());
                },
            ],
        ]);
        $this->crud->addColumn([
            'name' => 'role',
            'label' => 'Rol',
            'type' => 'relationship',
            'attribute' => 'rol',
            'model'     => App\Models\Role::class,
        ]);
        $this->crud->addColumn([
            'name' => 'email_validate',
            'label' => 'Activo',
            'type' => 'btnToggle'
        ]);


        $this->crud->addFilter(
            [
                'name' => 'rol_id',
                'type' => 'dropdown',
                'label' => 'Rol de usuario',
            ],
            Role::all()->pluck('rol', 'id')->toArray(),
        );
    }
    protected function basicFields()
    {
        $this->crud->addFields([

            [
                'name' => 'email',
                'label' => 'Email',
                'type' => 'email',
            ],
            [
                'name'  => 'password',
                'label' => 'Contraseña',
                'type'  => 'password',
            ],
            [
                'name'  => 'password_confirmation',
                'label' => 'Validar contraseña',
                'type'  => 'password',
            ],
            [
                'label' => 'Rol de usuario',
                'type' => 'select2',
                'name' => 'rol_id',
                'model'     => "App\Models\Role",
                'attribute' => 'rol',
                'options'   => (function ($query) {
                    return $query->where('activo', 1)->get();
                }),
            ],
            [
                'name' => 'email_validate',
                'label' => 'Activo',
                'type' => 'checkbox',
            ],

        ]);
    }
    protected function handlePasswordInput($request)
    {
        // Remove fields not present on the user.
        // Encrypt password if specified.
        if ($request->input('password')) {
            $request->request->set('password', Hash::make($request->input('password')));
        } else {
            $request->request->remove('password');
        }

        return $request;
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(UserRequest::class);
        $this->crud->setRequest($this->handlePasswordInput(request()));

        $this->basicFields();
    }
    
    protected function setupUpdateOperation()
    {
        $this->crud->setRequest($this->handlePasswordInput(request()));

        $this->setupCreateOperation();
    }
}
