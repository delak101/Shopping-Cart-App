<?php


class Product
{
    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity;
    
    public function __construct($id, $title, $price, $availableQuantity)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->availableQuantity = $availableQuantity;
    }

    /**
     * Summary of getId
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Summary of setId
     * @param mixed $value
     * @return void
     */
    public function setId($value) 
    {
        $this->id = $value;
    }
    /**
     * Summary of getTitle
     * @return string
     */
    public function getTitle() 
    {
        return $this->title;
    }
    /**
     * Summary of setTitle
     * @param mixed $value
     * @return void
     */
    public function setTitle($value) 
    {
        $this->title = $value;
    }
    /**
     * Summary of getPrice
     * @return float
     */
    public function getPrice() 
    {
        return $this->price;
    }
    /**
     * Summary of setPrice
     * @param mixed $value
     * @return void
     */
    public function setPrice($value) 
    { 
        $this->price = $value;
    }
    /**
     * Summary of getAvailableQuantity
     * @return int
     */
    public function getAvailableQuantity() 
    {
        return $this->availableQuantity;
    }
    /**
     * Summary of setAvailableQuantity
     * @param mixed $value
     * @return void
     */
    public function setAvailableQuantity($value) 
    {
        $this->availableQuantity = $value;
    }
                                


    /**
     * Add Product $product into cart. If product already exists inside cart
     * it must update quantity.
     * This must create CartItem and return CartItem from method
     * Bonus: $quantity must not become more than whatever
     * is $availableQuantity of the Product
     *
     * @param Cart $cart
     * @param int $quantity
     * @return CartItem
     */
    public function addToCart(Cart $cart, int $quantity)
    {
        return $cart->addProduct($this, $quantity);
    }

    /**
     * Remove product from cart
     *
     * @param Cart $cart
     */
    public function removeFromCart(Cart $cart)
    {
        return $cart->removeProduct($this);
    }
}