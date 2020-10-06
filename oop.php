<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// 
$color = 'đen';
$name = 4;

$color_2 = 'trắng';
$name = 3;

class Car {
    public $color;
    public $name;
    function __construct($color, $name){
        $this->mau_sac = $color;
        $this->name = $name;
    }
    function intro(){
        echo 'Bàn màu '.$this->color.' có '.$this->name.' chân bàn';
    }
    function ham_su_dung_bt(){
        echo 'Hàm sử dụng BT';
    }
    protected function ham_dac_biet(){
        echo 'Hàm cho lớp con sử dụng';
    }
}
$car = new Car('Đỏ', "honda");
echo '<pre>';
// var_dump($car;
echo '</pre>';
// thử truy cập vào thuộc tính của đối tượng
// echo $car->color;


class Car_Child extends Car{
    public $price;
    function __construct($color, $name, $price){
        $this->mau_sac = $color;
        $this->name = $name;
        $this->price = $price;
    } 
    function intro(){
        echo " Màu sắc xe {$this->color},có tên{$this->name} , có giá {$this->price}";
        parent::intro();
        parent::ham_dac_biet();
    }
}
$tb_child = new Car_Child('đen', "bmw", 5000);
// $tb_child->ham_su_dung_bt();
// $tb_child->intro();
class StaticCar {
    public static $local = 'Ngoài trời';
    public static function echo_car(){
        echo 'Đây là chiêc xe';
    }
}
// $car5 = new StaticCar();
// echo StaticTable::$local;
// StaticTable::echo_car(); 

// giới hạn quyền truy cập
class Car2 {
    private $color;
    private $name;
    function __construct($color, $name){
        $this->color = $color;
        $this->name = $name;
    }
    function getColor(){
        return $this->color;
    }
    function setColor($color){
        $this->color = $color;
    }
}
$car2 = new Car2('Đỏ', 4);
echo '<pre>';
// var_dump($car2);
echo '</pre>';
// echo $car2->color;  
// echo $car2->getColor();

// abstract và interface
abstract class Abs_Car{
    public $name;
    public $color;
    public function intro(){
        
    }
}

class Car4 extends Abs_Car {
    public function intro(){
        echo "hello car";
    }
}

$car4 = new Car4();
// $car4 ->intro();

interface In_Car{
    public function run();
    public function stop();
}

class Car5 implements In_Car {
    public function run() {
        echo "run";
    }
    public function stop(){
        echo "stop";
    }
}
$car5 = new Car5 ;
// $car5 -> run();

// trait

// trait Trait_1 {
//     function say_hello(){
//         echo 'Hello world';
//     }
// }
// trait Trait_2 {
//     function say_goodbye(){
//         echo 'Good bye';
//     }
// }
// trait Trait_3 {
//     function say_1(){
//         echo 'Hello One';
//     }
//     function say_2(){
//         echo 'Hello One';
//     }
// }
// trait Trait_4 {
//     function say_1(){
//         echo 'Hi One';
//     }
//     function say_2(){
//         echo 'Hi Two';
//     }
// }
// trait Trait_5 {
//     function say_protected(){
//         echo 'Hi Protected';
//     }
//     function say_private(){
//         echo 'Hi Private';
//     }
// }
// class Trait_Example {
//     use Trait_1;
//     use Trait_2;
//     use Trait_3, Trait_4 {
//         Trait_3::say_1 insteadof Trait_4;
//         Trait_4::say_2 insteadof Trait_3;
//     }
//     use Trait_5 {
//         say_protected as protected ex_say_protected;
//         say_private as private ex_say_private;
//     }
// }

// $ex = new Trait_Example();
// // $ex->say_hello();
// class Trait_Example_Child extends Trait_Example {
//     function say(){
//         parent::ex_say_protected();
//     }
// }
// $ex = new Trait_Example_Child;
// // $ex->say();



// // overload nạp chồng phường thức
// class Table_3 {
//     private $color;
//     private $name;
//     function __construct($color = null, $name = null){
//         $this->mau_sac = $color;
//         $this->name = $name;
//     }
//     function get_mau_sac(){
//         return $this->mau_sac;
//     }
//     function set_mau_sac(){
//         $this->mau_sac = $color;
//     }
// }

// $table_3 = new Table_3('Đỏ', 1);

// //anonymous class
// echo '<pre>';
// // var_dump($table_3);
// // var_dump(new class ('Đỏ',1){
// //     public $color;
// //     public $name;
// //     function __construct($color = null, $name = null){
// //         $this->mau_sac = $color;
// //         $this->name = $name;
// //     }
// //     function intro(){
// //        echo "Đây là bàn màu {$this->mau_sac} và có {$this->name} chân";
// //     }
// // });
// echo '</pre>';

// // self và this
// class Ban {
//     public $color;
//     public $so_chan;
//     public function __construct($color = 'Trắng', $so_chan = 4){
//         $this->mau_sac = $color;
//         $this->so_chan = $so_chan;
//     }
//     public function intro(){
//         echo "Đây là chiếc bàn màu {$this->mau_sac} và có {$this->so_chan} chân";
//     }
//     public function re_intro(){
//         echo 'Hello';
//         // self::intro();
//         $this->intro();
//     }
// }

// class Ban_2 extends Ban{
//     public $chat_lieu;
//     public function __construct($color = 'Trắng', $so_chan = 4,$chat_lieu = 'Gỗ'){
//         $this->mau_sac = $color;
//         $this->so_chan = $so_chan;
//         $this->chat_lieu = $chat_lieu;
//     }
//     public function intro(){
//         echo "Đây là chiếc bàn màu {$this->mau_sac} và có {$this->so_chan} chân, làm bằng {$this->chat_lieu}";
//     }
// }
// $ban_2 = new Ban_2('Nâu',4,'Gỗ');
// // $ban_2->re_intro();


// class Ban_3 {
//     public static $mes = 'Đây là bàn';
//     public static function mes(){
//         // echo $this->mes;
//         echo self::$mes;
//     }
// }
// // self dùng để gọi thuộc tính tĩnh
// // $ban_3 = new Ban_3();
// // $ban_3->mes();
// // Ban_3::mes();


// // static và final
// class Ban_4 {
//     // public final $mes = 1;
//     public final function mes(){
//         echo 'Đây là tin nhắn final';
//     }
//     public static function mes_2(){
//         echo 'Đây là tin nhắn static';
//     }
// }

// class Ban_5 extends Ban_4{   
//     // public final function mes(){
//     //     echo 'Đây là tin nhắn final kế thừa';
//     // }
//     public static function mes_2(){
//         echo 'Đây là tin nhắn static kế thừa';
//     }
// }
// // có thể kế thừa nhưng không thể ghi đè, ko dùng cho thuộc tính
// // Ban_5::mes();
// // có thể kế thừa và có thể ghi đè
// // Ban_5::mes_2();


// // so sánh self và static
// class Ban_6 {
//     public static $mes = 'Lời nhắn';
//     public function mes(){
//         echo self::$mes;
//         // echo static::$mes;
//     }
// }
// $b6 = new Ban_6();
// $b6->mes();

// class Ban_7 extends Ban_6 {
//     public static $mes = 'Tin nhắn';
// }
// $b7  = new Ban_7();
// $b7->mes();




?>


</body>
</html>
