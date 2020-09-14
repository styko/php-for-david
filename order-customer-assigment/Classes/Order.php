<?php
class Order {
    private $item;
    private $quantity;
    private $price;
    private $taxRate;
    private $total;
	
	public function __construct(
        string $item,
        int $quantity,
        float $price,
        float $taxRate
    ) {
        $this->item = $item;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->taxRate = $taxRate;
        $this->total = $this->getTotal();
    }
	
	public function getItem(): string {
      return $this->item;
    }
	
    public function setItem($item){
        $this->item = $item;
    }
   
	public function getQuantity(): int {
        return $this->quantity;
    }
	
    public function setQuantity($quantity){
        $this->quantity = $quantity;
    }
       
	public function getPrice(): float {
      return $this->price;
    }
	
    public function setPrice($price){
        $this->price = $price;
    }
       
	public function getTaxRate(): float {
      return $this->taxRate;
    }
	
    public function setTaxRate($taxRate){
        $this->taxRate = $taxRate;
    }
    
    public function getTotal(): float {
        $subtotal = $this->quantity * $this->price;
        $tax = $subtotal * $this->taxRate;
        $total = $subtotal + $tax;
        return $total;
    }
    
    public function setTotal($total){
        $this->total = $total;
    }
}
?>