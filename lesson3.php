<?php
include 'header.php';
include 'nav.php';
?>
<main>
    <h2>Форма для введення рядка</h2>
    <form method="post" action="lesson3.php">
        <label for="inputString">Введіть рядок:</label>
        <input type="text" id="inputString" name="inputString" required>
        <button type="submit">Надіслати</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["inputString"])) {
        $inputString = $_POST["inputString"];
        $reversedString = strrev($inputString);
        echo "<h3>Оброблений рядок:</h3>";
        echo "<p>$reversedString</p>";
        echo '<form method="post" action="lesson3.php"><button type="submit">Назад</button></form>';
    }
    ?>
</main>
<?php
include 'footer.php';
?>
