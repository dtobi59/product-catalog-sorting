<?php
namespace App\Services;

use App\Sorters\ISorter;
use App\Models\Product;

class Catalog
{
    private $products;

    public function __construct(array $products)
    {
        $this->products = array_map(function ($product) {
            // Create a new product instance
            return Product::make($product);

        }, $products);
    }

    // Method to get sorted products using a specified sorter
    public function getProducts(ISorter $sorter): array
    {
        return $sorter->sort($this->products);
    }
}