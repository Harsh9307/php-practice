<!DOCTYPE html>
<html>
<body>

<h1>
    <?php
        $x = 10;
        $y = 5;

        echo $x. ' , ' .$y;

        echo $x*$y;
    ?>
    <?= 'Hello World' ?>

</h1>
<p>My first paragraph.</p>

</body>
</html>



<form method="post">
    <input type="text" name="x" placeholder="Enter value for x">
    <input type="text" name="y" placeholder="Enter value for y">
    <button type="submit">Submit</button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = $_POST['x'];
        $y = $_POST['y'];
        echo "x: $x, y: $y, Product: " . ($x * $y);
    }
?> 
<!-- query params -->

<?php
    $x = $_GET['x'] ?? 0;
    $y = $_GET['y'] ?? 0;

    echo "x: $x, y: $y, Product: " . ($x * $y) . "<br>"; // Using <br> for a new line in the browser.

    $text = "Hello World";

    echo strtolower($text) . "<br>"; // hello world
    echo strtoupper($text)."<br>"; // HELLO WORLD

    $z = $x * $y;
    if ($z > 50) {
        echo "Product is large." . "<br>";
    } else {
        echo "Product is small."."<br>";
    }

    for ($i = 1; $i <= $x; $i++) {
        echo "$i x $y = " . ($i * $y) . "<br>";
    }

    function multiply($a, $b) {
        return $a * $b;
    }
    echo "Result: " . multiply(10, 20)."<br>";

    $numbers = [1, 2, 3, 4, 5];
    foreach ($numbers as $num) {
        echo "Square of $num: " . ($num ** 2) . "<br>";
    }


?>
<style>
    h1 {
        color: blue;
    }
    .dynamic-output {
        font-weight: bold;
    }
</style>
<div class="dynamic-output">
    <?php echo "Styled Output: " . ($x * $y); ?>
</div>

<?php
    class ParentClass {
        protected $message = "Hi from parent";
    
        public function greet() {
            return $this->message;
        }
    }
    
    class ChildClass extends ParentClass {
        public function changeMessage($newMessage) {
            $this->message = $newMessage;
        }
    }
    
    $child = new ChildClass();
    $child->changeMessage("Hi from child");
    echo $child->greet();
    
?>






