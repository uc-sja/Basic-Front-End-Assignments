<!DOCTYPE html>
<html>
    <head>
        <style>
            .table_style
            {
                border:10px solid #800000;
                padding: 20px;
                margin: 20px;
            }
            .table_style td{
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <?php        
            $record = "";
            $s1 = $s2 = $s3 = 0;
            $marks = array( 
                    "mohammad" => array(
                                    "physics" => 35,        
                                    "maths" => 30,        
                                    "chemistry" => 39        
                                ),
                    "qadir" => array(
                                    "physics" => 30,
                                    "maths" => 32,
                                    "chemistry" => 29
                                ),
                    "zara" => array(
                                    "physics" => 31,
                                    "maths" => 22,
                                    "chemistry" => 39
                                ),
                        );
            echo "<table border='5' class='table_style'>";
            echo "<tr><td>Student</td>";
            foreach($marks['mohammad'] as $subject => $score) {
                    echo "<td>".$subject."</td>";
                }
            echo "</tr>";
            foreach($marks as $student => $student_array) {    
                echo "<tr><td>".$student."</td>";
                foreach($student_array as $subject => $score) {
                    $record = "$score".",".$record;
                    echo "<td>".$score."</td>";
                    if($subject == "physics") {
                        $s1 = $s1 + $score;
                    }
                    else if($subject == "maths") {
                        $s2 = $s2 + $score;
                    }
                    else {
                        $s3 = $s3  + $score; 
                    }            
                }
                echo "</tr>";
            }
            //echo $s1;
            //echo $s2;
            //echo $s3;
            echo "<tr><td>Average Marks</td><td>".round(($s1/count($marks)), 2)."</td><td>".round(($s2/count($marks)), 2)."</td><td>".round(($s3/count($marks)), 2)."</td><tr>";
            $s = explode(",", $record);        
            sort($s);
            //print_r($s);
            //echo $s[1];
            //echo count($s);
            
            echo "<tr><td>Lowest Marks</td><td colspan=3>";
            for($i = 1; $i< 4; $i++) {
                echo $i.") ".$s[$i]."<br>"; 
            }
            echo "</td></tr>";
            echo "<tr><td>Highest Marks</td><td colspan=3>";
            $len = count($s);
            for($j = 1; $j < 4; $j++) {
                echo $j.") ".$s[$len-$j]."<br>";
            }
            echo "</td></tr>";
            echo "</table>";
        ?>
        <pre>
            $record = "";
            $s1 = $s2 = $s3 = 0;
            $p = $m = $c = 0;                
            $marks = array( 
                    "mohammad" =&gt; array(
                                    "physics" =&gt; 35,        
                                    "maths" =&gt; 30,        
                                    "chemistry" =&gt; 39        
                                ),
                    "qadir" =&gt; array(
                                    "physics" =&gt; 30,
                                    "maths" =&gt; 32,
                                    "chemistry" =&gt; 29
                                ),
                    "zara" =&gt; array(
                                    "physics" =&gt; 31,
                                    "maths" =&gt; 22,
                                    "chemistry" =&gt; 39
                                ),
                        );
            echo "&lt;table border='5' class='table_style'&gt;";
            echo "&lt;tr&gt;&lt;td&gt;Student&lt;/td&gt;";
            foreach($marks['mohammad'] as $subject =&gt; $score) {
                    echo "&lt;td&gt;".$subject."&lt;/td&gt;";
                }
            echo "&lt;/tr&gt;";
            foreach($marks as $student =&gt; $student_array) {    
                echo "&lt;tr&gt;&lt;td&gt;".$student."&lt;/td&gt;";
                foreach($student_array as $subject =&gt; $score) {
                    $record = "$score".",".$record;
                    echo "&lt;td&gt;".$score."&lt;/td&gt;";
                    if($subject == "physics") {
                        $s1 = $s1 + $score;
                        $p++;
                    }
                    else if($subject == "maths") {
                        $s2 = $s2 + $score;
                        $m++;
                    }
                    else {
                        $s3 = $s3  + $score; 
                        $c++;
                    }            
                }
                echo "&lt;/tr&gt;";
            }
            //echo $s1;
            //echo $s2;
            //echo $s3;        
            echo "&lt;tr&gt;&lt;td&gt;Average Marks&lt;/td&gt;&lt;td&gt;".round(($s1/$p), 2)."&lt;/td&gt;&lt;td&gt;".round(($s2/$m), 2)."&lt;/td&gt;&lt;td&gt;".round(($s3/$c), 2)."&lt;/td&gt;&lt;tr&gt;";
            $s = explode(",", $record);        
            sort($s);
            //print_r($s);
            //echo $s[1];
            //echo count($s);
            
            echo "&lt;tr&gt;&lt;td&gt;Lowest Marks&lt;/td&gt;&lt;td colspan=3&gt;";
            for($i = 1; $i&lt; 4; $i++) {
                echo $i.") ".$s[$i]."&lt;br&gt;"; 
            }
            echo "&lt;/td&gt;&lt;/tr&gt;";
            echo "&lt;tr&gt;&lt;td&gt;Highest Marks&lt;/td&gt;&lt;td colspan=3&gt;";
            $len = count($s);
            for($j = 1; $j &lt; 4; $j++) {
                echo $j.") ".$s[$len-$j]."&lt;br&gt;";
            }
            echo "&lt;/td&gt;&lt;/tr&gt;";
            echo "&lt;/table&gt;";
        </pre>
    </body>
</html>

