<?php

    class Product {
        $product_name;
        $product_price;
        $product_description;
        $product_image;
        $product_category = [];

        function addToCart() {
            $this->product_price;
        }


    }

    $redTshirt = new Product("Red T-Shirt", 20, "A red shirt", "ENTERIMAGEHERE", ["mens", "shirts"]);

    echo redTshirt->product_name;