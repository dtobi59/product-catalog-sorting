<?php

namespace App\Sorters;

interface ISorter
{
    public function sort(array $products): array;
}