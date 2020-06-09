<?php

function priceCheck($products, $productPrices, $productSold, $soldPrice) {
    $c = 0;
    foreach($products as $key => $item) {
        if(in_array($key, $productPrices)) {
            if($productPrices[$key] !== $soldPrice[$key]) {
                $c++;
            }    
        } 
    }
    return $c;
}