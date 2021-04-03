<?php

namespace App\Http\Livewire\Home;

use App\Models\ShopArticle;
use App\Models\ShopBannerImage;
use App\Models\ShopCategorie;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\Paginator;

class Tienda extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $categorias;
    public $status = 0;
    public $tituloCategoria = "Nuevos productos";
    public $categoriaActual = 0;
    public $paginatorInterval = 16;
    public $totalItems = 0;
    public $currentPage = 1;

    public $caruselImages;
    public function render()
    {
        $this->categorias = ShopCategorie::where('activo', 1)->get();
        $this->caruselImages = ShopBannerImage::where('active', 1)->orderBy('id', 'DESC')->get();
        return view('livewire.home.tienda', [
            'articulos' => $this->paginatorArticulos($this->status)
        ]);
    }
    public function getCategory($id)
    {
        if ($id == 'all') {
            $this->categoriaActual = 0;
            $this->status = 0;

            $this->tituloCategoria = "Nuevos productos";
        } else {
            $this->categoriaActual = $id;
            $this->status = 1;

            $categoriaName = ShopCategorie::where('id', $id)->first();
            $this->tituloCategoria = $categoriaName->titulo;
        }
    }
    public function orderBy($type)
    {
        if ($this->categoriaActual == 0) {
            if ($type == "ASC") {
                $this->status = 2;
            } else if ($type == "DESC") {
                $this->status = 3;
            } else if ($type == "NEW") {
                $this->status = 4;
            }
        } else {
            if ($type == "ASC") {
                $this->status = 5;
            } else if ($type == "DESC") {
                $this->status = 6;
            } else if ($type == "NEW") {
                $this->status = 7;
            }
        }
    }
    public function setPage($url)
    {
        $this->currentPage = explode('page=', $url)[1];
        Paginator::currentPageResolver(function(){
            return $this->currentPage;
        });
    }
    public function paginatorArticulos($status)
    {
        switch ($status) {
            case 1:
                $this->totalItems = ShopArticle::where('activo', 1)
                    ->where('shop_categorie_id', $this->categoriaActual)
                    ->count();
                return ShopArticle::where('activo', 1)
                    ->where('shop_categorie_id', $this->categoriaActual)
                    ->orderBy('id', 'DESC')
                    ->paginate($this->paginatorInterval);
            case 2:
                $this->totalItems = ShopArticle::where('activo', 1)
                    ->count();
                return ShopArticle::where('activo', 1)
                    ->orderBy('precio', 'ASC')
                    ->paginate($this->paginatorInterval);
            case 3:
                $this->totalItems = ShopArticle::where('activo', 1)
                    ->count();
                return ShopArticle::where('activo', 1)
                    ->orderBy('precio', 'DESC')
                    ->paginate($this->paginatorInterval);
            case 4:
                $this->totalItems = ShopArticle::where('activo', 1)
                    ->count();
                return ShopArticle::where('activo', 1)
                    ->orderBy('id', 'DESC')
                    ->paginate($this->paginatorInterval);
            case 5:
                $this->totalItems = ShopArticle::where('activo', 1)
                    ->where('shop_categorie_id', $this->categoriaActual)
                    ->count();
                return ShopArticle::where('activo', 1)
                    ->where('shop_categorie_id', $this->categoriaActual)
                    ->orderBy('precio', 'ASC')
                    ->paginate($this->paginatorInterval);
            case 6:
                $this->totalItems = ShopArticle::where('activo', 1)
                    ->where('shop_categorie_id', $this->categoriaActual)
                    ->count();
                return ShopArticle::where('activo', 1)
                    ->where('shop_categorie_id', $this->categoriaActual)
                    ->orderBy('precio', 'DESC')
                    ->paginate($this->paginatorInterval);
            case 7:
                $this->totalItems = ShopArticle::where('activo', 1)
                    ->where('shop_categorie_id', $this->categoriaActual)
                    ->count();
                return ShopArticle::where('activo', 1)
                    ->where('shop_categorie_id', $this->categoriaActual)
                    ->orderBy('id', 'DESC')
                    ->paginate($this->paginatorInterval);
            default:
                $this->totalItems = ShopArticle::where('activo', 1)
                    ->count();
                return ShopArticle::where('activo', 1)
                    ->orderBy('id', 'DESC')
                    ->paginate($this->paginatorInterval);
        }
    }
}
