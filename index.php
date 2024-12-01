<!-- <!DOCTYPE html>
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
</html> -->



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
    echo "x: $x, y: $y, Product: " . ($x * $y);
    // Access via: example.com?page.php?x=5&y=10
?>