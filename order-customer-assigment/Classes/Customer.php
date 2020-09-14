<?php

class Customer {
    private $firstName;
    private $lastName;
    private $email;
    private $address;
    private $city;
    private $state;
    private $zip;
    private $phone;

    public function __construct(
        string $firstName,
        string $lastName,
        string $email,
        string $address,
        string $city,
        string $state,
        int $zip,
        string $phone
    ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->address = $address;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
        $this->phone = $phone;
    }
   
    public function getFirstName(): string {
        return $this->firstName;
    }
   
    public function setFirstName($first){
        $this->firstName = $firstName;
    }
   
    public function getLastName(): string {
        return $this->lastName;
    }
    public function setLastName($last){
        $this->lastName = $lastName;
    }
   
    public function getEmail(): string {
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }

    public function getAddress(): string {
        return $this->address;
    }
    public function setAddress($address){
        $this->email = $address;
    }
    
    public function getCity(): string {
        $this->city = $city;
    }
    
    public function setCity($city){
        $this->city = $city;
    }

    public function getState(): string {
        $this->state = $state;
    }
    
    public function setState($state){
        $this->state = $state;
    }

    public function getZip(): int {
        $this->zip = $zip;
    }
    
    public function setZip($zip){
        $this->zip = $zip;
    }

    public function getPhone(): string {
        $this->phone = $phone;
    }
    
    public function setPhone($phone){
        $this->phone = $phone;
    }

}
?>