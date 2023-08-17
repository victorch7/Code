<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Producto extends BaseController
{
    public function index()
    {
        $product = new ProductModel();
        $dat = $product->findAll();
        $dat = ['dat' => $dat];
        return view('productos/listado',$dat);
    }

    public function registro()
    {
        return view('productos/registro');
    }

    public function registrarProducto()
    {
        $product = new ProductModel();
        $dat = 
        [
            'nom_producto' => $this->request->getPost('nombre_pro'),
            'precio' => $this->request->getPost('pre'),
            'cantidad' => $this->request->getPost('cant'),
            'categoria' => $this->request->getPost('cate'),
        ];
        $product->insert($dat);
        return redirect()->to(base_url().'productos');
    }


}
