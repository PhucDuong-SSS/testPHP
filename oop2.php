<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    
// trait

trait Trait_1 {
    function say_hello(){
        echo 'Hello world';
    }
}
trait Trait_2 {
    function say_goodbye(){
        echo 'Good bye';
    }
}
trait Trait_3 {
    function say_1(){
        echo 'Hello One';
    }
    function say_2(){
        echo 'Hello One';
    }
}
trait Trait_4 {
    function say_1(){
        echo 'Hi One';
    }
    function say_2(){
        echo 'Hi Two';
    }
}
trait Trait_5 {
    function say_protected(){
        echo 'Hi Protected';
    }
    function say_private(){
        echo 'Hi Private';
    }
}
class Trait_Example {
    use Trait_1;
    use Trait_2;
    use Trait_3, Trait_4 {
        Trait_3::say_1 insteadof Trait_4;
        Trait_4::say_2 insteadof Trait_3;
    }
    use Trait_5 {
        say_protected as protected ex_say_protected;
        say_private as private ex_say_private;
    }
}

$ex = new Trait_Example();
// $ex->say_hello();
class Trait_Example_Child extends Trait_Example {
    function say(){
        parent::ex_say_protected();
    }
}
$ex = new Trait_Example_Child;
// $ex->say();



// overload nạp chồng phường thức
class Table_3 {
    private $mau_sac;
    private $so_chan_ban;
    function __construct($mau_sac = null, $so_chan_ban = null){
        $this->mau_sac = $mau_sac;
        $this->so_chan_ban = $so_chan_ban;
    }
    function get_mau_sac(){
        return $this->mau_sac;
    }
    function set_mau_sac(){
        $this->mau_sac = $mau_sac;
    }
}

$table_3 = new Table_3('Đỏ', 1);

//anonymous class
echo '<pre>';
// var_dump($table_3);
// var_dump(new class ('Đỏ',"honda"){
//     public $color;
//     public $name;
//     function __construct($color , $name ){
//         $this->color = $color;
//         $this->name = $name;
//     }
//     function intro(){
//        echo "Color car: {$this->color} Name car {$this->$name}";
//     }
// });
echo '</pre>';

// self và this
class Ban {
    public $mau_sac;
    public $so_chan;
    public function __construct($mau_sac = 'Trắng', $so_chan = 4){
        $this->mau_sac = $mau_sac;
        $this->so_chan = $so_chan;
    }
    public function intro(){
        echo "Đây là chiếc bàn màu {$this->mau_sac} và có {$this->so_chan} chân";
    }
    public function re_intro(){
        echo 'Hello';
        // self::intro();
        $this->intro();
    }
}

class Ban_2 extends Ban{
    public $chat_lieu;
    public function __construct($mau_sac = 'Trắng', $so_chan = 4,$chat_lieu = 'Gỗ'){
        $this->mau_sac = $mau_sac;
        $this->so_chan = $so_chan;
        $this->chat_lieu = $chat_lieu;
    }
    public function intro(){
        echo "Đây là chiếc bàn màu {$this->mau_sac} và có {$this->so_chan} chân, làm bằng {$this->chat_lieu}";
    }
}
$ban_2 = new Ban_2('Nâu',4,'Gỗ');
// $ban_2->re_intro();


class Ban_3 {
    public static $mes = 'Đây là bàn';
    public static function mes(){
        // echo $this->mes;
        echo self::$mes;
    }
}
// self dùng để gọi thuộc tính tĩnh
// $ban_3 = new Ban_3();
// $ban_3->mes();
// Ban_3::mes();


// static và final
class Ban_4 {
    // public final $mes = 1;
    public final function mes(){
        echo 'Đây là tin nhắn final';
    }
    public static function mes_2(){
        echo 'Đây là tin nhắn static';
    }
}

class Ban_5 extends Ban_4{   
    // public final function mes(){
    //     echo 'Đây là tin nhắn final kế thừa';
    // }
    public static function mes_2(){
        echo 'Đây là tin nhắn static kế thừa';
    }
}
// có thể kế thừa nhưng không thể ghi đè, ko dùng cho thuộc tính
// Ban_5::mes();
// có thể kế thừa và có thể ghi đè
// Ban_5::mes_2();


// so sánh self và static
class Ban_6 {
    public static $mes = 'Lời nhắn';
    public function mes(){
        echo self::$mes;
        // echo static::$mes;
    }
}
$b6 = new Ban_6();
$b6->mes();

class Ban_7 extends Ban_6 {
    public static $mes = 'Tin nhắn';
}
$b7  = new Ban_7();
$b7->mes();
    
    
    ?> 

</body>
</html>