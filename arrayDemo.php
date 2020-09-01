<html>
  <body>

    <?php   

        $rows = $_POST['numRows'];
        $columns = $_POST['numColumns'];
        $minRandomVal = $_POST['minRandomVal'];
        $maxRandomVal = $_POST['maxRandomVal'];



        /* --------------------
                TABLE 1
        -------------------- */

        //inserts data into numGen array
        for ($x = 0; $x < $rows; $x++) {
            for ($y = 0; $y < $columns; $y++) {
            $numGen[$x][$y] = rand($minRandomVal, $maxRandomVal);
            }
        }

        //set border for table
        print("<table border = '3' >");
        // for($x = 0; $x < $columns; $x++) {
        //     print("<th>$x</th>");
        // }
        // print("</tr>");

        //fills table with data from numGen
        for($x = 0; $x < $rows; $x++) {
            print("<tr>");
            for($y = 0; $y < $columns; $y++) {
                print("<td align='center'>" . $numGen[$x][$y] . "</td>");
            }
            print("</tr>");
        }
        print("<p>Your array size is: " . $rows . " x " . $columns . "</p>");
        print("<p>Your minimum value is: " . $minRandomVal . "</p>");
        print("<p>Your maximum value is: " . $maxRandomVal . "</p>");
        print("</table><br>");



        /* --------------------
                TABLE 2
        -------------------- */

        print("<table border = '3' ><tr>");
        $dataHeaders = ['Row', 'Sum', 'Avg', 'Std Dev'];
        for($x = 0; $x < 4; $x++) {
            print("<th>$dataHeaders[$x]</th>");
        }
        print("</tr>");
        // $dataGen[0][0] = "Row";
        // $dataGen[0][1] = "Sum";
        // $dataGen[0][2] = "Avg";
        // $dataGen[0][3] = "Std Dev";

        

        for($x = 0; $x < $rows; $x++) { // give each row a number
            $dataGen[$x][0] = $x;
            
        }   
        
        

        for($j = 0; $j < $rows; $j++) { // SUM up each row, placing value into column
            
            $sum = 0;
            for($i = 0; $i < $columns; $i++) {
                
                $sum += $numGen[$j][$i];
            }

            $avg = $sum / $columns;
            
            $dataGen[$j][1] = $sum;

            $dataGen[$j][2] = number_format($avg,3);

            // $stdDev1 = ($sum - ($avg * $columns)); // subtract mean from each value
            // $stdDev2 = $stdDev1 * (1/$columns); // 
            // $stdDev3 = sqrt($stdDev2);

            $variance = 0;
            $stdDev = 0;
            for($i = 0; $i < $columns; $i++) {

                $variance += (pow(($numGen[$j][$i] - $avg), 2)) / ($columns - 1);
            
            }

            $stdDev += sqrt($variance);
            $dataGen[$j][3] = number_format($stdDev,3);
        }
        

        for($x = 0; $x < $rows; $x++) {
            print("<tr>");
            for($y = 0; $y < 4; $y++) {
                print("<td align='center'>".$dataGen[$x][$y]."</td>");
            }
            print("</tr>");
        }
        print("</table><br>");



        /* --------------------
                TABLE 3
        -------------------- */


        print("<table border = '3' >");
        for($x = 0; $x < $rows; $x++) {
            print("<tr>");
            for($y = 0; $y < $columns; $y++) { // ouput rows of numbers, i.e. Table 1
                print("<td align='center'>" . $numGen[$x][$y] . "</td>");
                
                
                
            }
            print("</tr>");

            print("<tr>");
            for ($y = 0; $y < $columns; $y++) { // output rows of signage for values
                
                if ($numGen[$x][$y] < 0) {
                    
                    print("<td align='center'>" . "negative" . "</td>");
                    
                }
                else if ($numGen[$x][$y] > 0) {
                    
                    print("<td align='center'>" . "positive" . "</td>");
                    
                }
                else if ($numGen[$x][$y] == 0) {
                    
                    print("<td align='center'>" . "zero" . "</td>");
                    
                }
            }
            print("</tr>");
        }



        print("</table>");
    ?>
    <p>
      <a href="arrayDemo.html">Home Page</a>
    </p>
  </body>
</html> 
