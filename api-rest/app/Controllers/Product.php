<?php 
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProductModel;

class Product extends BaseController 
{
    public function findAll()
    {
        $productModel = new ProductModel();
        $products = $productModel->findAll();
        return $this->response->setStatusCode(200)
                                        ->setJSON($products);
    }
       public function find($id)
    {
        $productModel = new ProductModel();
        $products = $productModel->findAll($id);
        return $this->response->setStatusCode(200)
                             ->setJSON($products);
    }
     public function search($keyword)
    {
        $productModel = new ProductModel();
        $products = $productModel->
        like('Nombre_producto', $keyword, 'both')->findAll();
        return $this->response->setStatusCode(200)
                            ->setJSON($products);
    }
         public function create()
    {
        $products = $this->request->getJSON();
        $productModel = new ProductModel();
         $productModel->insert($products);
         return $this->response->setStatusCode(200);
    }
          public function update()
    {
        $products = $this->request->getJSON();
        $productModel = new ProductModel();
        $productModel->update($products->id , $products);
         return $this->response->setStatusCode(200);
    }
      public function delete($id)
    {
        $productModel = new ProductModel();
        $productModel->delete($id);
        return $this->response->setStatusCode(200);
    }

}