<html>
<body>

<h2>The fruit program</h2>

<?php   

    class Fruit {
        public $name;
        public $color;

        function __construct($name, $color)   {
            $this->name = $name;
            $this->color = $color;

        }
        function get_name() {
            return $this->name;
        }

        function get_color()    {
            return $this->color;
        }
    
    }
$strawberry = new Fruit ("strawberry", "pink");
echo $strawberry->get_name();
echo "<br>";
echo $stawberry->get_color(); 
?>
</body>


</html>