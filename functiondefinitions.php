<?php
function percentage($oud, $nieuw) {
    $var = ($nieuw - $oud) / $oud * 100;
    $afwijking = number_format($var, 2)."%";
    return $afwijking;
}
function get() {
include 'connect.php';
    
$result = mysqli_query($conn, 'SELECT doden_aantal FROM statistieken WHERE Jaartal = 1950');
$row = mysqli_fetch_assoc($result);
$sum = $row['doden_aantal'];
return $sum;
}
function lees($kolom1, $kolom2, $tabel) {
    include 'connect.php';
    
    $sql = "SELECT * FROM $tabel";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><th>Jaartal</th> <th>Dodenaantal</th> <th>Afwijking van gem in %</th>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row[$kolom1]."</td><td>".$row[$kolom2]."</td><td>".percentage(get(), $row[$kolom2])."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
}
