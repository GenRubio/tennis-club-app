<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;
use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\DB;

class ClientCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    protected $clientId;

    public function setup()
    {
        CRUD::setModel(\App\Models\Client::class);

        $this->clientId = Route::current()->parameter('client_id');
        if ($this->clientId) {

            $this->setRoute();
            $this->broadCrumbs();
            $this->filterFamiliares();

        } else {
            CRUD::setRoute(config('backpack.base.route_prefix') . '/client');
            $this->filterParents();
        }
        CRUD::setEntityNameStrings('client', 'Datos clientes');


        //Denegar accesso a boton de creacion de cliente
        $this->crud->denyAccess('create');
    }

    private function setRoute()
    {
        $this->crud->setRoute("admin/client/"
            . $this->clientId . '/familiares');
    }

    private function broadCrumbs()
    {
        $cliente = Client::where('id', $this->clientId)->first();

        $this->data['breadcrumbs'] = [
            trans('backpack::crud.admin') => backpack_url('dashboard'),
            'Clientes' => $this->clientId ? backpack_url('client?user_id=' . $cliente->user_id) : backpack_url('client'),
            'Familiares' => backpack_url("client/" . $this->clientId . "/familiares"),

            trans('backpack::crud.list') => false,
        ];
    }

    private function filterParents(){
        $this->crud->addClause('whereIn', 'id',  $this->crud->model->parentsIds());
    }

    private function filterFamiliares()
    {
        $this->crud->addClause('whereIn', 'id', function ($query) {
            $query->select('client_id_1')
                ->from('client_parientes_relacions')
                ->where('client_parientes_relacions.client_id_2', '=', $this->clientId);
        });
    }


    protected function setupListOperation()
    {
        if (!$this->clientId) {
            $this->crud->addButtonFromView('line', 'ver-familiares', 'ver-familiares', 'beginning');
        }

        $this->crud->addFilter(
            [
                'label' => 'User ID',
                'type'  => 'text',
                'name'  => 'user_id',
                'visible' => false,
            ]
        );

        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Imagen',
            'type'  => 'image',
        ]);
        if ($this->clientId) {
            $this->crud->addColumn([
                'label' => 'Familia',
                'name' => 'clienteTipoFuncion',
                'type'  => 'model_function',
                'function_name' => 'getClientTipo',
                'function_parameters' => [$this->clientId],
            ]);
        }
        $this->crud->addColumn([
            'name' => 'first_name',
            'label' => 'Nombre',
        ]);
        $this->crud->addColumn([
            'name' => 'second_name',
            'label' => 'Apellidos',
        ]);
        $this->crud->addColumn([
            'name' => 'dni',
            'label' => 'Identificador',
        ]);
        $this->crud->addColumn([
            'name' => 'telefono_1',
            'label' => 'Telefono',
        ]);

        $this->crud->addColumn([
            'name' => 'quotaSocio',
            'label' => 'Quota',
            'type' => 'relationship',
            'attribute' => 'titulo',
            'model'     => App\Models\QuotaSocio::class,
        ]);
    }
    protected function basicFields()
    {
        $this->crud->addFields([
            [
                'name' => 'first_name',
                'label' => 'Nombre',
                'type' => 'text',
                'tab' => 'Personals',
            ],
            [
                'name' => 'second_name',
                'label' => 'Apellidos',
                'type' => 'text',
                'tab' => 'Personals',
            ],
            [
                'name' => 'sexe',
                'label' => 'Sexe',
                'type' => 'select_from_array',
                'options' => [
                    0 => 'Hombre',
                    1 => 'Mujer',
                ],
                'tab' => 'Personals',
            ],
            [
                'name' => 'dni',
                'label' => 'Identificador',
                'type' => 'text',
                'tab' => 'Personals',
            ],
            [
                'name' => 'nacionalidad',
                'label' => 'Nacionalidad',
                'type' => 'text',
                'tab' => 'Personals',
            ],
            [
                'name' => 'cat_salut',
                'label' => 'Targeta sanitaria',
                'type' => 'text',
                'tab' => 'Personals',
            ],
            [
                'name' => 'address',
                'label' => 'Adresa',
                'type' => 'text',
                'tab' => 'Adreça',
            ],
            [
                'name' => 'poblacio',
                'label' => 'Poblacion',
                'type' => 'text',
                'tab' => 'Adreça',
            ],
            [
                'name' => 'cp',
                'label' => 'Codigo postal',
                'type' => 'number',
                'tab' => 'Adreça',
            ],
            [
                'name' => 'provincia',
                'label' => 'Provincia',
                'type' => 'text',
                'tab' => 'Adreça',
            ],
            [
                'name' => 'data_naxement',
                'label' => 'Data nacimiento',
                'type' => 'date',
                'tab' => 'Personals',
            ],
            [
                'name' => 'conte_bancari',
                'label' => 'Nº cuenta bancaria',
                'type' => 'text',
                'tab' => 'Personals',
            ],
            [
                'name' => 'telefono_1',
                'label' => 'Telefono 1',
                'type' => 'text',
                'tab' => 'Personals',
            ],
            [
                'name' => 'telefono_2',
                'label' => 'Telefono 2',
                'type' => 'text',
                'tab' => 'Personals',
            ],
            [
                'name' => 'name_emergenica',
                'label' => 'Nombre contacto emergencia',
                'type' => 'text',
                'tab' => 'Emergencia',
            ],
            [
                'name' => 'telefono_1_emergencia',
                'label' => 'Telefono 1 contacto emergencia',
                'type' => 'text',
                'tab' => 'Emergencia',
            ],
            [
                'name' => 'telefono_2_emergencia',
                'label' => 'Telefono 2 contacto emergencia',
                'type' => 'text',
                'tab' => 'Emergencia',
            ],
            [
                'name' => 'imagen',
                'label' => 'Imagen',
                'type' => 'image',
                'tab' => 'Personals',
            ],
            [
                'name' => 'quota_socio_id',
                'label' => 'Quota socio',
                'type' => 'select2',
                'model'     => "App\Models\QuotaSocio",
                'attribute' => 'titulo',
                'default'   => null,
                'tab' => 'Quota',
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(ClientRequest::class);

        $this->basicFields();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
