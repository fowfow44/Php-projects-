<html>
<body>

<h2>The fruit program</h2>

<?php   

    class Fruit {
        public $name;
        public $color;

        public function __construct($name, $color)   {
            $this->name = $name;
            $this->color = $color;
        }
        public function intro()  {
            echo  "A {$this->name} is a fruit and the color is {$this->color}."; 
        }
    }

    class cherry extends fruit {

        public function message() {
            echo "is cherry a fruit or berry?";
        }
    
    }
    $cherry = new Cherry ("cherry", "red");
    $cherry->message();
    $cherry->intro();

?>
</body>
            
            
</html>