<!DOCTYPE html>
<html>
    <head>
        <title>Assignment6</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>            
    </head>
    <body>
        <form class="form-horizontal" id="search_form" name="search_form" method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>>
            <div class="container">
                <div class="input-group">
                    <div class="input-group-addon">
                        <select name="lib_select" id="lib_select">
                            <option value="my_library" <?php if(isset($_POST['lib_select']) && ($_POST['lib_select'] == "my_library")) echo "selected = 'selected'"; ?>>My Library</option>
                            <option value="all" <?php if(isset($_POST['lib_select']) && $_POST['lib_select'] == "all") echo "selected = 'selected'"; ?> >All</option>
                            <option value="it_cert" <?php if(isset($_POST['lib_select']) && $_POST['lib_select'] == "it_cert") echo "selected = 'selected'"; ?>>IT Certification</option>
                        </select>
                    </div>
                    <input type ="search" class="form-control" name="sub_search" id="sub_search"  placeholder=    "Search"  />
                    <span class="input-group-btn">
                        <button type="submit" name="data_submit" id="data_submit" class="btn btn-default">Go</button>
                    </span>    
                </div>    
            </div>
            <?php 
                $library = array("Testing", "Software", "Prepkit", "Content", "Research", "Labs", "Archive", "Ucertify", "Company");
                $certify = array("Oracle", "Financial", "Services", "Comptia", "Adobe Systems", "Cisco", "Microsoft"); 
                $all = array_merge($library, $certify);
                //print_r($all);
                if(isset($_POST['data_submit'])) {
            ?>
            <div class="container">
                <?php
                    function filter_array($input_arr) {
                        $arr = $input_arr;
                        //print_r($input_arr);
                        $input_text = $_POST['sub_search'];
                        //print_r($arr);
                        //echo count($arr);    
                        $blank = array();
                        //echo strlen($input_text);
                        for($i = 0; $i < count($arr); $i++) {
                            if(stripos($arr[$i], $input_text) !== false) {
                                array_push($blank, $arr[$i]);
                            }
                        }
                        //print_r($blank);
                        foreach($blank as $blank_value) {
                            echo "<h4 class='text-center well'>".$blank_value."</h4>";
                        }
                    }
                    $selected_value = $_POST['lib_select'];
                    switch($selected_value ) {
                        case "my_library":
                            if($_POST['sub_search'] == "") {
                                    foreach($library as $lib) {                                 
                                        echo "<h4 class='text-center well'>".$lib."</h4>";
                                        //print_r($lib);            
                                    }    
                            }
                            else {
                                filter_array($library);
                            }
                            break;
                        case "it_cert":
                            if($_POST['sub_search'] == "") {
                                foreach($certify as $cert) {
                                        echo "<h4 class='text-center well'>".$cert."</h4>";
                                    }
                            } else {
                                filter_array($certify);
                            }                            
                            break;
                        case "all":                        
                            if($_POST['sub_search'] == "") {
                                foreach($all as $merged) {
                                    echo "<h4 class='text-center well'>".$merged."</h4>";
                                }
                            } else {
                                filter_array($all);
                            }
                            break;
                    }
                ?>                
            </div>    
            <?php }
            ?>    
        </form>
        <pre>
            &lt;?php 
                $library = array("Testing", "Software", "Prepkit", "Content", "Research", "Labs", "Archive", "Ucertify", "Company");
                $certify = array("Oracle", "Financial", "Services", "Comptia", "Adobe Systems", "Cisco", "Microsoft"); 
                $all = array_merge($library, $certify);
                //print_r($all);
                if(isset($_POST['data_submit'])) {
            ?&gt;
             &lt;?php
                function filter_array($input_arr) {
                    $arr = $input_arr;
                    //print_r($input_arr);
                    $input = $_POST['sub_search'];
                    //print_r($arr);
                    $flag = 0;
                    $blank = array();
                    //echo strlen($input);
                    for($i = 0; $i &lt; count($arr); $i++) {
                        for($j = 0; $j &lt; strlen($input); $j++) {
                            $left_operand = strtolower(substr($input, $j, 1)); //echo "&lt;i&gt;".$left_operand."&lt;/i&gt;.&lt;br&gt;";
                            $right_operand = strtolower(substr($arr[$i], $j, 1)); //echo "&lt;u&gt;".$right_operand."&lt;/u&gt;.&lt;br&gt;&lt;br&gt;";
                            if($left_operand == $right_operand) {
                                $flag++;
                                //echo "&lt;br&gt;".$flag."&lt;br&gt;";
                            } else {
                                $flag = 0;
                                //echo "&lt;b&gt;".$flag."&lt;/b&gt;";
                            }
                        }
                        if($flag == strlen($input)) {
                            //echo "&lt;br&gt;YE ";
                            array_push($blank, $arr[$i]);
                        }
                        else {
                            //echo "na ";
                            $flag = 0;    
                        }
                    }
                    //print_r($blank);
                    foreach($blank as $blank_value) {
                        echo "&lt;h4 class='text-center well'&gt;".$blank_value."&lt;/h4&gt;";
                    }
                }
                $selected_value = $_POST['lib_select'];
                switch($selected_value ) {
                    case "my_library":
                        if($_POST['sub_search'] == "") {
                                foreach($library as $lib) {                                 
                                    echo "&lt;h4 class='text-center well'&gt;".$lib."&lt;/h4&gt;";
                                    //print_r($lib);            
                                }    
                        }
                        else {
                            filter_array($library);
                        }
                        break;
                    case "it_cert":
                        if($_POST['sub_search'] == "") {
                            foreach($certify as $cert) {
                                    echo "&lt;h4 class='text-center well'&gt;".$cert."&lt;/h4&gt;";
                                }
                        } else {
                            filter_array($certify);
                        }                            
                        break;
                    case "all":                        
                        if($_POST['sub_search'] == "") {
                            foreach($all as $merged) {
                                echo "&lt;h4 class='text-center well'&gt;".$merged."&lt;/h4&gt;";
                            }
                        } else {
                            filter_array($all);
                        }
                        break;
                }
            ?&gt;                
            &lt;?php }
            ?&gt;
       </pre>
    </body>
</html>