<!DOCTYPE html>
<html>
    <head>
        <title>Assignment8</title>
    </head>
    <body>
        <?php    
            session_start();
            $s = file_get_contents("example_homepage.txt");
            $a =$_SESSION['start'];
            $b = $_SESSION['end'];    
            $reg = '/<'.$a.'[^>]*>(.*?)<\/'.$b.'>/s';
            preg_match_all($reg,$s,$pat_array);            
            foreach($pat_array[1] as $val) {
              $a =   $val."<br><br>";
            }
        ?>
        <pre>
            &lt;?php
                session_start();
                $s = file_get_contents("example_homepage.txt");
                $a =$_SESSION['start']; $b = $_SESSION['end'];    
                $reg = '/&lt;'.$a.'[^&gt;]*&gt;(.*?)&lt;\/'.$b.'&gt;/s';
                preg_match_all($reg,$s,$pat_array);            
                foreach($pat_array[1] as $val) {
                    echo ($val)."&lt;br&gt;&lt;br&gt;";
                }          
            ?&gt;
        </pre>
    </body>
</html>    
