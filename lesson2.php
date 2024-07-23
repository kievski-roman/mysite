<?php
include 'header.php';
include 'nav.php';
?>
<main>
    <h2>Розфарбована таблиця множення</h2>
    <table border="1" cellspacing="0" cellpadding="5">
        <?php
        function getColor($digit) {
            switch ($digit) {
                case '1': return 'red';
                case '2': return 'green';
                case '3': return 'yellow';
                case '4': return 'blue';
                default: return 'black';
            }
        }

        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++) {
                $product = $i * $j;
                $coloredI = '';
                foreach (str_split(strval($i)) as $digit) {
                    $coloredI .= "<span style='color: " . getColor($digit) . ";'>$digit</span>";
                }

                $coloredJ = '';
                foreach (str_split(strval($j)) as $digit) {
                    $coloredJ .= "<span style='color: " . getColor($digit) . ";'>$digit</span>";
                }

                $coloredProduct = '';
                foreach (str_split(strval($product)) as $digit) {
                    $coloredProduct .= "<span style='color: " . getColor($digit) . ";'>$digit</span>";
                }

                echo "<td>$coloredI x $coloredJ = $coloredProduct</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</main>
<?php
include 'footer.php';
?>
