<?php
session_start();
	if(isset($_POST['form_submit'])) {
		$data = array();
		$data = $_POST['data'];
		$_SESSION['student'][] = $data;
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Assgignment 2</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form name = "data_form" id="data_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal">
            <div class="container">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name_text">Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="data[name_text]" id="name_text" required="required" />
                    </div>                
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="id_email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="data[id_email]" id="id_email" required="required" />
                    </div>                
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="user_password">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="data[user_password]" id="user_password"  required="required"/>
                    </div>                
                </div>
                <div class="form-group">
                    <label class= "control-label col-sm-2">Gender:</label>
                    <div class="col-sm-1">
                        <div class="radio">
                            <label><input type="radio" name="data[gender_radio]" id="male_radio" value="Male" required="required">Male</label>
                        </div>    
                    </div>
                    <div class="col-sm-1">
                        <div class="radio">
                            <label><input type="radio" name="data[gender_radio]" id="female" value="Female">Female</label>
                        </div>                    
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="address_textarea">Address</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="data[address_textarea]" id="address_textarea"></textarea>
                    </div>                
                </div>            
                <div class="form-group">
                    <label class="control-label col-sm-2" for="country select">Country</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="data[country_select]" id="country_select" required>
                            <option value="none" selected="selected" disabled="disabled">---PLEASE SELECT---</option>
                            <?php 
                                $country = array("in" => "India",
                                                 "us" => "USA",
                                                 "pk" => "Pakistan",
                                                 "sr" => "SriLanka",
                                                );                                
                                foreach($country as $key => $value) {
                                    echo "<option value='".$value."'>".$value."</option>";
                                }
                            ?>
                        </select>
                    </div>                
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-6">
                        <button type="submit" class="btn btn-warning" name="form_submit" class="form_submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
        <?php
            if(isset($_SESSION['student'])) {
            //print_r ($_SESSION['student']);
            
        ?>
            <table border="3" class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Country</th>                    
                    </tr>
                </thead>
                <tbody>
                <?php                         
                    for($i=0; $i < count($_SESSION['student']); $i++) {
                        echo '<tr>';
                        echo "<td>".$_SESSION['student'][$i]['name_text']."</td>";
                        echo "<td>".$_SESSION['student'][$i]['id_email']."</td>";
                        echo "<td>".$_SESSION['student'][$i]['user_password']."</td>";
                        echo "<td>".$_SESSION['student'][$i]['gender_radio']."</td>";
                        echo "<td>".$_SESSION['student'][$i]['address_textarea']."</td>";
                        echo "<td>".(isset($_SESSION['student'][$i]['country_select'])?$_SESSION['student'][$i]['country_select']:'')."</td>";
                        echo '</tr>';
                    }
                ?>
                </tbody>
            </table>
        <?php }
            if(isset($_GET['txt'])) {
                session_unset($_SESSION['student']);
            }
        ?>
        <a href="logout.php">Click to Reset the Table</a>
        <a href="assignment3.php">Click here to get List of Email Ids</a>
		<pre>
            &lt;?php
            session_start();
            ?&gt;
            &lt;?php 
                $country = array("in" =&gt; "India",
                                 "us" =&gt; "USA",
                                 "pk" =&gt; "Pakistan",
                                 "sr" =&gt; "SriLanka",
                                );                                
                foreach($country as $key =&gt; $value) {
                    echo "&lt;option value='".$value."'&gt;".$value."&lt;/option&gt;";
                }
            ?&gt;
            &lt;?php
                if(isset($_POST['form_submit'])) {
                    $data = array();
                    $data = $_POST['data'];
                    $_SESSION['student'][] = $data; 
                    //print_r ($_SESSION['student']);
                
            ?&gt;
            &lt;?php                         
                for($i=0; $i &lt; count($_SESSION['student']); $i++) {
                    echo '&lt;tr&gt;';
                    echo "&lt;td&gt;".$_SESSION['student'][$i]['name_text']."&lt;/td&gt;";
                    echo "&lt;td&gt;".$_SESSION['student'][$i]['id_email']."&lt;/td&gt;";
                    echo "&lt;td&gt;".$_SESSION['student'][$i]['user_password']."&lt;/td&gt;";
                    echo "&lt;td&gt;".$_SESSION['student'][$i]['gender_radio']."&lt;/td&gt;";
                    echo "&lt;td&gt;".$_SESSION['student'][$i]['address_textarea']."&lt;/td&gt;";
                    echo "&lt;td&gt;".(isset($_SESSION['student'][$i]['country_select'])?$_SESSION['student'][$i]['country_select']:'')."&lt;/td&gt;";
                    echo '&lt;/tr&gt;';
                }
            ?&gt;        
        </pre>
    </body>
</html>