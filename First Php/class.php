<html>
<body>

<h2>The fruit program</h2>

<?php
    class Fruit {
        public $name;
        public $color;

        function set_name($name) {
            $this->name = $name;
        }

        function get_name() {
            return $this->name;
        }
    }
?>
</body>


</html>