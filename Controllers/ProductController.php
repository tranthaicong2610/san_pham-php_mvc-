<?php
// require 'BaseController.php';
class ProductController extends BaseController{
    private $productModel;
    public function __construct()
    {
        $this->loadModel('ProductModel');
        $this->productModel=new ProductModel;

        
    }
    public function index(){
        $products= $this->productModel->getAll();

        return $this->view('frontend.products.index',[
            'pageTitle'=>" Trang danh sach san pham ",
            'products'=>$products,

        ]);
       
    }
    public function show()
    {
        $product=$this->productModel->findById(1);
        return $this->view('frontend.products.show',[
            'product'=>$product,
        ]);
    }
}
?>