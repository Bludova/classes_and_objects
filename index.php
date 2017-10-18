<?php 
class Car {
	public $brand = 'BMW';
	public $color = 'red';
	public $maxSpeed = '280';
    public $currentSpeed = '0';
	public function move() {
		$this->currentSpeed = 80;
	}

}
class Televisions {
	public $brand = 'Samsung';
	public $price = '25000';
	public $color = 'black';
	public $discount = '0';
	public function issueDiscount() {
		$this -> discount = '1000' ;
	}
}
class Pens {
	public $price = '25';
	public $color = 'black';
	public $quantity = '0';
	public function arrived() {
		$this -> quantity = '100' ;
	}
}
class Duck {
	public $breed = 'Bashkir Colored';
	public $price = '250';
	public $color = 'Colored';
}
class Products {
	public $product = 'milk';
	public $price = '100';
	public $shelfLife = '7';
}

$bmw = new Car();
$bmw -> move();
$samsung = new Televisions();
$samsung -> issueDiscount();
$penBlack = new Pens();

$blackBelogruda = new Duck();
$blackBelogruda ->breed ='black Belogruda';

$milk = new Products();

$audi = new Car();
$audi -> brand = 'Audi';

$lenova = new Televisions();
$lenova -> brand = 'Lenova';
$lenova -> price = '35000';

$penRed = new Pens();
$penRed -> color = 'red';
$penRed -> arrived() ;
$bashkirColored = new Duck();

$tea = new Products();
$tea ->product = 'Tea';
$tea ->shelfLife = '365';
?>
<!DOCTYPE html>
  <html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Классы и объекты</title>
  </head>
  <body>
    <h1>Инкапсуляция</h1>

    <p>Подход к созданию классов, применяемый в объектно-ориентированных языках, называют инкапсуляцией. Данные принадлежащие классу, сохраняются в его свойствах, доступ к которым тщательно ограничивается и предоставляется в основном при помощи специальных методов </p>
    
    <h2>Плюсы и минусы объектов</h2>
    <p>Плюсы объектов простом управлении и контроле. Минусов я пока не знаю)</p>
<br>

  <?php
print_r($bmw);
echo '<br>';
print_r($samsung);
echo '<br>';
print_r($penBlack);
echo '<br>';
print_r($blackBelogruda);
echo '<br>';
print_r($milk);
echo '<br>';
print_r($audi);
echo '<br>';
print_r($lenova);
echo '<br>';
print_r($penRed);
echo '<br>';
print_r($bashkirColored);
echo '<br>';
print_r($tea);
  ?>

  </body>
</html>
