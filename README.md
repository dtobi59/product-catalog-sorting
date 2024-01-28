## Problem Statement

You get an unsorted array of products and you are required to sort it. Please the code
should allow the given products to be returned in sorted order either by price, the ratio of
sales per view (sales_count divided by views_count) depending on the context. It should be
EXTENSIBLE so that in theory different teams could add their own sorters easily, i.e. different
teams are able to create and add new sorters separate from the rest - without touching
existing code.


## What I did

I got the unsorted array of products and I wrote the code using a strategy design pattern to implement sort by price and sort per view making it highly decoupled and Extensible. 

## How to Use Software

1. `git clone git@github.com:dtobi59/product-catalog-sorting.git`

2. `composer install`

3. `php artisan serve` 

4. Visit <site_url>/products to view products(JSON) sorted by price & sales per view
e.g http://localhost:8000/product 

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
