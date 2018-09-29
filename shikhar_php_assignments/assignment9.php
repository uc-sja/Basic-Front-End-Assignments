<!DOCTYPE html>
<html>
    <head>
        <title>Assignment8</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>            
    </head>
    <body>
        <form name="grade_form" id="grade_form" class="form-horizontal" method="post" action=<?php htmlspecialchars($_SERVER['PHP_SELF'])?>>
            <?php
                $nameErr = "";
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["number_text"])) {
                        $nameErr = "Required Field";
                    } else {
                        // check if name only contains letters and whitespace
                        if (!is_numeric($_POST["number_text"])) {
                            $nameErr = "Only Natural Number allowed"; 
                        } else {
                            $input_num = ($_POST["number_text"]);
                            echo "<b>"."Your Entered Number: ".$input_num."</b>";
                            $freq = array_fill(0, 10, 0);
                            $length = strlen($input_num); //echo $length;
                            $num = intval($input_num);
                            for($k = 0; $k < $length; $k++) {                            
                                $last =(fmod($num, 10));
                                //echo $input_num;
                                //echo $last." ";
                                $freq[$last]++;
                                $num = floor($num/10);
                                //echo $num." "; 
                            }
                        }
                    }
                }
            ?>
            <div class="container">                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="number_texy">Enter Any Number</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="number_text" id="number_text" />
                        <span><?php echo $nameErr; ?></span>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="form-control btn btn-default" name="url_submit" id="url_submit">Submit</button>
                    </div>
                </div>
                <div>
                    <?php
                        if(isset($input_num)) {
                            foreach($freq as $key => $value) {
                                echo $key.": ".str_repeat('*', $value)."<br>"; 
                            }
                        }
                    ?>
                </div>
            </div>
        </form>
        <pre>
            &lt;?php
                $nameErr = "";
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["number_text"])) {
                        $nameErr = "Required Field";
                    } else {
                        // check if name only contains letters and whitespace
                        if (!is_numeric($_POST["number_text"])) {
                            $nameErr = "Only Natural Number allowed"; 
                        } else {
                            $input_num = ($_POST["number_text"]);
                            echo "&lt;b&gt;"."Your Entered Number: ".$input_num."&lt;/b&gt;";
                            $freq = array_fill(0, 10, 0);
                            $length = strlen($input_num); //echo $length;
                            $num = intval($input_num);
                            for($k = 0; $k &lt; $length; $k++) {                            
                                $last =(fmod($num, 10));
                                //echo $input_num;
                                //echo $last." ";
                                $freq[$last]++;
                                $num = floor($num/10);
                                //echo $num." "; 
                            }
                        }
                    }
                }
            ?&gt;
            &lt;?php
                if(isset($input_num)) {
                    foreach($freq as $key =&gt; $value) {
                        echo $key.": ".str_repeat('*', $value)."&lt;br&gt;"; 
                    }
                }
            ?&gt;
        </pre>
    </body>
</html>
