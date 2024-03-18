<?php
class ProductDB{
    private Product $product;
    
    public function __construct(Product $product)
    {
        if(is_null($product))
        {
            $this->product = NULL;
        } else {
            $this->product = $product;
        }
    }

    public function SelectAllProducts(): void
    {
        
    }
}
?>