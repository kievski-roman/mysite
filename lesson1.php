<?php
include 'header.php';
include 'nav.php';
?>
<main>
    <h2>Таблица умножения</h2>
    <table border="1">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</main>
<?php
include 'footer.php';
?>
