<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    //Author: Akmal Muhamad Firdaus - 1301204188
    protected $table = 'products';
    public static function getAllProducts()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Product 1',
                'description' => 'Description 1',
                'price' => 1000
            ],
            [
                'id' => 2,
                'name' => 'Product 2',
                'description' => 'Description 2',
                'price' => 2000
            ],
            [
                'id' => 3,
                'name' => 'Product 3',
                'description' => 'Description 3',
                'price' => 3000
            ]
        ];

        return $products;
    }
    public static function addProduct($data)
    {
        $products = self::getAllProducts();
        $lastId = end($products)['id'];
        $data['id'] = $lastId + 1;
        $products[] = $data;

        return $products;
    }
}
