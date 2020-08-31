<html>
<body>

<?php

$rows = $_POST['numRows'];
$columns = $_POST['numColumns'];
$minRandomVal = $_POST['minRandomVal'];
$maxRandomVal = $_POST['maxRandomVal'];
//inserts data into numGen array
for ($x = 0; $x < $rows; $x++) {
    for ($y = 0; $y < $columns; $y++) {
    $numGen[$x] [$y] = rand($minRandomVal, $maxRandomVal);
    }
}

//set border for table
print("<table border = '3'><tr>");
for($x = 0; $x < $columns; $x++) {
    print("<th>$x</th>");
}
print("</tr>");

//fills table with data from numGen
for($x = 0; $x < $rows; $x++) {
    print("<tr>");
    for($y = 0; $y < $columns; $y++) {
        print("<td align='center'>".$numGen[$x][$y]."</td>");
    }
    print("</tr>");
}
print("<p>Your array size is: ".$rows." x ".$columns."</p>");
print("<p>Your minimum value is: ".$minRandomVal."</p>");
print("<p>Your maximum value is: ".$maxRandomVal."</p>");
print("</table>");

//creates array for data analysis
$dataGen[0][0] = "Row";
$dataGen[0][1] = "Sum";
$dataGen[0][2] = "Avg";
$dataGen[0][3] = "Std Dev";
for($x = 1; $x < $rows; $x++) {
    $dataGen[$x][0] = $numGen[$x - 1][0];
}

for($x = 0; $x < $rows; $x++) {
    print("<tr>");
    for($y = 0; $y < 1; $y++) {
        print("<td align='center'>".$dataGen[$x][$y]."</td>");
    }
    print("</tr>");
}
print("</table>");
?>
<p><a href="arrayDemo.html">Home Page</a></p>
</body>
</html> 