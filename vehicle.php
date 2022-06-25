<?php

// parent class
class Vehicle{
    // public property name
    public $plakaNo;
    public $marka;
    public $model;
    public $tekerlekSayisi;
    public $kanatAcikligi;
}
class Car extends Vehicle{

    public function __construct($plakaNo, $marka, $model, $tekerlekSayisi)
    {
      $this->plakaNo = $plakaNo;
      $this->marka = $marka;
      $this->model = $model;
      $this->tekerlekSayisi = $tekerlekSayisi;
    }

}
class Motorcycle extends Vehicle{

    public function __construct($plakaNo, $marka, $model, $tekerlekSayisi)
    {
        $this->plakaNo = $plakaNo;
        $this->marka = $marka;
        $this->model = $model;
        $this->tekerlekSayisi = $tekerlekSayisi;
    }

}
class Airplane extends Vehicle{

    public function __construct($marka, $model, $kanatAcikligi)
    {
        $this->marka = $marka;
        $this->model = $model;
        $this->kanatAcikligi = $kanatAcikligi;
    }
}

$car = new Car("06 ARAC 06","Mercedes","C180","4");
echo "Plaka No:".$car->plakaNo."\n";
echo "Marka:".$car->marka."\n";
echo "Model:".$car->model."\n";
echo "Tekerlek Sayısı:".$car->tekerlekSayisi."\n";

$motorcycle = new Motorcycle("06 MOTOR 06", "Honda", "Forza 750", "2");
echo "Plaka No:".$motorcycle->plakaNo."\n";
echo "Marka:".$motorcycle->marka."\n";
echo "Model:".$motorcycle->model."\n";
echo "Tekerlek Sayısı:".$motorcycle->tekerlekSayisi."\n";

$airplane = new Airplane("Airbus", "A380", "80m");
echo "Marka:".$airplane->marka."\n";
echo "Model:".$airplane->model."\n";
echo "Kanat Açıklığı:".$airplane->kanatAcikligi."\n";

?>