<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Assigment 3</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            if (isset($_SESSION['student'])) {
            //print_r($_SESSION);
        ?>
        <table class="table" border="4">
            <thead>
                <tr>
                    <td>User</td>
                    <td>Email Username</td>
                    <td>Email Domain</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    for($i = 0; $i < count($_SESSION['student']); $i++) {
                        $arr = explode("@", $_SESSION['student'][$i]['id_email']);
                        //print_r($arr);
                        echo "<tr>";
                        echo "<td>".$_SESSION['student'][$i]["name_text"]."</td>";
                        echo "<td>".$arr[0]."</td>";
                        echo "<td>".$arr[1]."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <a href="assignment2.php">Click here to Go Back</a>
        <?php }
        else {
            echo "You have not registered any user"."<br>";
            echo "<a href='assignment2.php'>Click here to Go Back</a>";
        }
        ?>
        <h3><a href = "assignment4.php">Click Here to login</a></h3>
        <pre>
            &lt;?php
                session_start();
            ?&gt;    
            &lt;?php
                if (isset($_SESSION['student'])) {
                //print_r($_SESSION);
            ?&gt;
            &lt;?php
                for($i = 0; $i &lt; count($_SESSION['student']); $i++) {
                    $arr = explode("@", $_SESSION['student'][$i]['id_email']);
                    //print_r($arr);
                    echo "&lt;tr&gt;";
                    echo "&lt;td&gt;".$_SESSION['student'][$i]["name_text"]."&lt;/td&gt;";
                    echo "&lt;td&gt;".$arr[0]."&lt;/td&gt;";
                    echo "&lt;td&gt;".$arr[1]."&lt;/td&gt;";
                    echo "&lt;/tr&gt;";
                }
            ?&gt;
            &lt;?php }
            else {
                echo "You have not registered any user"."&lt;br&gt;";
                echo "&lt;a href='assignment2.php'&gt;Click here to Go Back&lt;/a&gt;";
            }
            ?&gt;
        </pre>
    </body>
</html>
