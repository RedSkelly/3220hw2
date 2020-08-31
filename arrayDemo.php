<html>
<body>

<?php
$rows = $_POST['numRows'];
$columns = $_POST['numColumns'];
$minRandomVal = $_POST['minRandomVal'];
$maxRandomVal = $_POST['maxRandomVal'];

for ($x = 0; $x < $rows; $x++) {
    for ($y = 0; $y < $columns; $y++) {
    $numGen[$x] [$y] = rand($minRandomVal, $maxRandomVal);
    }
}

print("<table border = '3'><tr>");
for($x = 0; $x < $columns; $x++) {
    print("<th>$x</th>");
}
print("</tr>");

for($x = 0; $x < $rows; $x++) {
    print("<tr>");
    for($y = 0; $y < $columns; $y++) {
        print("<td align='right'>".$numGen[$x][$y]."</td>");
    }
    print("</tr>");
}
print("Your array size is: ".$rows." x ".$columns);
print("Your minimum value is: ".$minRandomVal);
print("Your maximum value is: ".$maxRandomVal);
print("</table>");
?>
<p><a href="arrayDemo.html">Home Page</a></p>
</body>
</html> 