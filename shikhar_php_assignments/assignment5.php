<?php
$arr = array(
            "key1" => "value1",
            "key2" => "value2",
            "key3" => "value3",
            "key4" => "value4",
        );
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Assignment5</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
    </head>
    <body>
        <form class="form-horizontal" name="key_form" id="key_form" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
            <div class="container">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="key_text">Key</label> 
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="key_text" id="key_text" required="required" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="value_text">Value</label> 
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="value_text" id="value_text" required="required" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-6 col-sm-2">
                        <button type="submit" class="btn btn-primary" name="submit_button" id="submit_button">Submit</button>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <td>Original Array</td>
                            <?php
                                foreach($arr as $key => $value) {
                                    echo "<td>".$key."=>".$value."</td>";
                                }
                            ?>
                    </tr>                
                    <?php
                    
                        if($_SERVER["REQUEST_METHOD"] == "POST") { 
                            if (array_key_exists($_POST["key_text"], $arr)) {                        
                                $arr[$_POST["key_text"]] = $_POST["value_text"];
                    ?>
                    <tr>
                        <td>New Array</td>
                        <?php
                            foreach($arr as $key => $value) {
                                echo "<td>".$key."=>"."<b>".$value."</b>"."</td>";
                            }
                        ?>
                    </tr>
                <?php                        
                    } else {
                        echo "You have entered Wrong key value";
                    }
                }
                ?>
                </table>
            </div>
        </form>
    </body>
    <pre>
        &lt;?php
        $arr = array(
                    "key1" =&gt; "value1",
                    "key2" =&gt; "value2",
                    "key3" =&gt; "value3",
                    "key4" =&gt; "value4",
                );
        ?&gt;
        &lt;?php
            foreach($arr as $key =&gt; $value) {
                echo "&lt;td&gt;".$key."=&gt;".$value."&lt;/td&gt;";
            }
        ?&gt;
        &lt;?php
        
            if($_SERVER["REQUEST_METHOD"] == "POST") { 
                if (array_key_exists($_POST["key_text"], $arr)) {                        
                    $arr[$_POST["key_text"]] = $_POST["value_text"];
        ?&gt;
        &lt;?php
            foreach($arr as $key =&gt; $value) {
                echo "&lt;td&gt;".$key."=&gt;"."&lt;b&gt;".$value."&lt;/b&gt;"."&lt;/td&gt;";
            }
        ?&gt;
        &lt;?php                        
            } else {
                echo "You have entered Wrong key value";
            }
        }
        ?&gt;
    </pre>
</html>
