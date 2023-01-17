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
       function __destruct()  {
            echo "the fruit is {$this->name} and the color is {$this->color}.";

    }
}
$strawberry = new Fruit ("strawberry", "pink");
 
?>
</body>


</html>