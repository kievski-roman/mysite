<?php
include 'header.php';
include 'nav.php';
?>
<main>
    <h2>Таблиця множення</h2>
    <table border="1">
        <?php
        echo "<tr>";
        for ($i = 1; $i <= 5; $i++) {
            echo "<td>";
            for ($j = 1; $j <= 10; $j++) {
                echo "$i x $j = " . ($i * $j) . "<br>";
            }
            echo "</td>";
        }
        echo "</tr>";
        echo "<tr>";
        for ($i = 6; $i <= 10; $i++) {
            echo "<td>";
            for ($j = 1; $j <= 10; $j++) {
                echo "$i x $j = " . ($i * $j) . "<br>";
            }
            echo "</td>";
        }
        echo "</tr>";
        ?>
    </table>
</main>
<?php
include 'footer.php';
?>

