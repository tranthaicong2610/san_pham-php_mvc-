<?php
class CategoryController extends BaseController{
    public function index(){
        $pageTitle="Danh sach san pham theo danh muc: laptop ";
        $categories=[
            [
                'id'=>1,
                'name'=> "Laptop",
            ],
            [
                'id'=>2,
                'name'=> "PC",
            ],
            [
                'id'=>3,
                'name'=> "Wan",
            ],
            [
                'id'=>4,
                'name'=> "Tablet",
            ],
            [
                'id'=>5,
                'name'=> "Printer",
            ],
        ];

        return $this->view('frontend.categories.index',
        ['categories'=>$categories,
            'pageTitle'=>$pageTitle,
    
        ]
        );

    }
    public function show()
    {
        echo __METHOD__;
    }
}
?>