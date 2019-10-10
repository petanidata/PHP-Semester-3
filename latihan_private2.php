<?php
class customer{
    private $name, $address, $city, $state, $zipCode;
    public function __construct($name, $address, $city, $state, $zipCode){
        if (is_string($name))
        $this->name = $name;
        else die ("Nama harus String <br>");

        if (is_string($address))
        $this->address = $address;
        else die("Address harus string <br>");

        if (is_string($city))
        $this->city = $city;
        else die("City harus string <br>");

        if (is_string($state))
        $this->state = $state;
        else die ("State harus string <br>");

        if (is_integer($zipCode))
        $this->zipCode = $zipCode;
        else die ("Zipcode harus bilangan <br>");
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