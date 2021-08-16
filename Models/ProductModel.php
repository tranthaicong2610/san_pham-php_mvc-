<?php
class ProductModel extends BaseModel{
    const TABLE='products';
    public function getAll()
    {
        return [
            [
                'id'=>12,
                'name'=> "Iphone 12",
            ],
            [
                'id'=>13,
                'name'=> "Iphone 13",
            ],
            [
                'id'=>14,
                'name'=> "Iphone 14",
            ],
            [
                'id'=>15,
                'name'=> "Iphone 15",
            ],
        ];
    }
    public function findById($id)
    {
        return [
            'id'=>12,
            'name'=> "Iphone 12",
        ];
    }
    public function delete()
    {
        return __METHOD__;
    }

}