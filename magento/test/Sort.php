<?php

class Sort {

    public function sortBy($products, $sortBy, $reverseSort = false) {
        $sortedProducts = $products;

        switch ($sortBy) {
            case 'name':
                usort($sortedProducts, function ($a, $b) {
                    return strcmp($a->getName(), $b->getName());
                });
                break;
            case 'price':
                usort($sortedProducts, function ($a, $b) {
                    if ($a->getPrice() == $b->getPrice()) return 0;
                    return ($a->getPrice() < $b->getPrice()) ? -1 : 1;
                });
                break;
            case 'created':
                usort($sortedProducts, function ($a, $b) {
                    if ($a->getCreated() == $b->getCreated()) return 0;
                    return ($a->getCreated() < $b->getCreated()) ? -1 : 1;
                });
                break;
            default:
                break;
        }

        if ($reverseSort) {
            return array_reverse($sortedProducts);
        } else {
            return $sortedProducts;
        }
    }
}