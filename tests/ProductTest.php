<?php

class ProductTest extends PHPUnit\Framework\TestCase
{
    public function testProductConstructor()
    {
        $product_id = 3;
        $name = "Рыба вяленая";
        $description = "Очень вкусная";
        $product = new \app\models\entities\Product($name);
        $this->assertEquals([$product_id, $name, $description], [$product->product_id, $product->name, $product->description]);
    }
}