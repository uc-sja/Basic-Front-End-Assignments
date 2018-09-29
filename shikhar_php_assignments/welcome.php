<?php
session_start();
if(isset($_SESSION['login']) && isset($_SESSION['username'])) {
        echo "<h1>Welcome ".$_SESSION['username']."</h1>";
    } else {
        echo "Not Authorized";
    }
?>
<html>
    <head>
        <title>Welcome</title>
    </head>
    <body>
        <a href="welcome.php?txt=true">Logout/Go Back</a>
        <?php
            if(isset($_GET["txt"]) && $_GET["txt"]=="true") {    
                unset($_SESSION['login']);
                unset($_SESSION['username']);
                header("Location: assignment4.php");
            }
            if(isset($_SESSION["timeout"]) && (time() - ($_SESSION["timeout"])) > 180 ) {    
                unset($_SESSION['login']);
                unset($_SESSION['username']);
                header("Location: assignment4.php");
            }    
        ?>    
        <pre>
            &lt;?php
                session_start();
                if(isset($_SESSION['login']) && isset($_SESSION['username'])) {
                    echo "<h1&gt;Welcome ".$_SESSION['username']."</h1>";
                } else {
                    echo "Not Authorized";
                }
                if(isset($_GET["txt"]) && $_GET["txt"]=="true") {    
                    unset($_SESSION['login']);
                    unset($_SESSION['username']);
                    header("Location: login.php");
                }
                if(isset($_SESSION["timeout"]) && (time() - ($_SESSION["timeout"])) > 180 ) {    
                    unset($_SESSION['login']);
                    unset($_SESSION['username']);
                    header("Location: login.php");
                }    
                
            ?&gt;            
        </pre>        
    </body>    
</html>