<table border="1">
    <tr>
        <th>Number</th>
        <th>Square</th>
    </tr>
    <?php
    $sum = 0;
    for($i = 0; $i < 101; $i++) {
        if ($i % 2 == 0) {
            $sum += sqrt($i);
            echo "<tr>" . "<td>$i</td>";
            echo "<td>" . number_format(sqrt($i), 2) . "</td></tr>";
        }
    }
    echo "<tr> <th>Total:</th> <td>" . number_format($sum, 2) . "</td> </tr>";
    ?>
</table>