<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
   
    class Fan {
        const SLOW = 1;
        const MEDIUM= 2;
        const FAST = 3;
        
        private $peed  ;
        private $on;
        private $radius ;
        private $color ;

         public function __construct()
        {
            $this->SLOW =1;
            $this->MEDIUM =2;
            $this->FAST =3;
            $this->speed ="SLOW";
            $this->on =true;
            $this->radius =5;
            $this->color ="Blue";

        }

        public function setSpeed($speed) {
            $this->speed =$speed;
        }
        public function setOn($on) {
            $this->on =$on;
        }
        public function setRadius($radius) {
            $this->radius =$radius;
        }
        public function setcolor($color) {
            $this->color =$color;
        }

        public function getSpeed () {
            return $this->speed;
        }
        public function getOn () {
            return $this->on;
        }
        public function getRadius () {
            return $this->radius;
        }
        public function getColor () {
            return $this->color;
        }
       
        public function toString() {
            if( $this->on ) {

                return "Speed:".$this->speed. "-Color:". $this->color."- Radius:". $this->radius."- Fan is on";
            }
            return "Color: $this->color- Radius: $this->radius- Fan is off";
        }
        
        
      
    }
    $fan1= new Fan();
    $fan1.setSpeed("FAST");
    $fan1.setRadius(10);
    $fan1.setOn(true);
    $fan1.setC("yellow");
    $fan2= new Fan();
    $fan2.setSpeed("MEDIUM");
    $fan2.setRadius(5);
    $fan2.setOn(false);
    $fan2.setC("blue");
   
    echo $fan1->toString()."<br>";
    
    
    ?> 

</body>
</html>