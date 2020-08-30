<html>
<body>

<?php
$numGen = array();

for ($x = 0; $x < $_POST['numRows']; $x++) {
    $numGen[$x] = rand($_POST['minRandomVal'], $_POST['maxRandomVal']);
    print "<td>$numGen[$x]</td>";
    
}

?>
<p><a href="arrayDemo.html">Home Page</a></p>
</body>
</html> 