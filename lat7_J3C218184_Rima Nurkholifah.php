<?php
class gadget{
    private $merek, $harga;

    public function __construct($merek, $harga){
        if (is_string($merek))
        $this->merek = $merek;
        else die ("Merek harus string");

        if (is_numeric($harga))
        $this->harga = $harga;
        else die("Harga harus numeric");
    }
    public function info(){
        echo "Merek: ". $this->merek. "<br>".
             "Harga: ". $this->harga. "<br>";
    }
}
class smartphone extends gadget{
    private $ukuranLayar, $lcd;

    public function __construct($merek, $harga, $ukuranLayar, $lcd){
        parent::__construct($merek, $harga);
        if (is_numeric($ukuranLayar))
        $this->ukuranLayar = $ukuranLayar;
        else die("Ukuran layar harus numeric");

        if (is_string($lcd))
        $this->lcd = $lcd;
        else ("Jenis lcd harus string");
    }
    public function info(){
        parent::info();
        echo "Ukuran Layar: ". $this->ukuranLayar. "<br>".
             "lcd: ". $this->lcd. "<br>";
    }
}
class laptop extends gadget{
    private $ram, $processor;

    public function __construct($merek, $harga, $ram, $processor){
        parent::__construct($merek, $harga);
        if (is_integer($ram))
        $this->ram = $ram;
        else die("RAM harus integer");

        if (is_string($processor))
        $this->processor = $processor;
        else die("Processor harus string");
    }
    public function info(){
        parent::info();
        echo "RAM: ". $this->ram. "<br>".
             "Processor: ". $this->processor. "<br>";
    }
}
$g = new gadget ("Asus", 200);
$g->info();
echo "<br>";

$s = new smartphone("Samsung", 600, 5.5, "Amoled");
$s->info();
echo "<br>";

$l = new laptop ("Acer", 500, 8, "Intel");
$l->info();
echo "<br>";