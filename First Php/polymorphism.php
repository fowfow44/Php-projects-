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

        public $weight;
        public function __construct($name, $color, $weight) {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;

        }
        public function intro()  {
            echo  "A {$this->name} is a fruit and the color is {$this->color}, and the weight is{$this->weight} gram."; 
        }
    
    }
    $cherry = new Cherry ("cherry", "bright pink", 20);
    $cherry->intro();
  

?>
</body>
            
            
</html>