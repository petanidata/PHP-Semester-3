<?php
class customer{
    private $name, $address, $city, $state, $zipCode;

    private function setName($name){
        if (is_string($name))
        $this->name = $name;
        else die("Nama harus string!");
    }
    private function setAddress($address){
        if (is_string($address))
        $this->address = $address;
        else die("Address harus string!");
    }
    private function setCity($city){
        if (is_string($city))
        $this->city = $city;
        else die("City harus string!");
    }
    private function setState($state){
        if (is_string($state))
        $this->state = $state;
        else die("State harus string!");
    }
    private function setZipCode($zipCode){
        if (is_numeric($zipCode) && strlen($zipCode) == 5)
        $this->zipCode = $zipCode;
        else die("ZipCode harus 5 digit!");
    }
    public function __construct($name, $address, $city, $state, $zipCode){
        $this->setName($name);
        $this->setAddress($address);
        $this->setCity($city);
        $this->setState($state);
        $this->setZipCode($zipCode);
    }
    public function getIsi(){
        echo "name: ". $this->name. "<br>";
        echo "address: ". $this->address. "<br>";
        echo "city: ". $this->city. "<br>";
        echo "state: ". $this->state. "<br>";
        echo "zip code: ". $this->zipCode. "<br>";
    }
}

class customerOnline extends customer{
    private $email;
    public function __construct($name, $address, $city, $state, $zipCode, $email){
        parent::__construct($name, $address, $city, $state, $zipCode);
        if(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email))
        $this->email = $email;
        else die("Email tidak valid");
    }
    public function getIsi(){
        parent::getIsi();
        echo "email: ". $this->email. "<br>";
    }
}

$aku = new customerOnline("Rima", "Arzimar", "Bogor", "Indonesia", 16152, "rima@gmail.com");
echo $aku->getIsi();

//echo $aku->getName();
//echo $aku->getAddress();
//echo $aku->getCity();
//echo $aku->getState();
//echo $aku->getZipCode();
//echo $aku->getEmail();