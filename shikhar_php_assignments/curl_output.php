<!DOCTYPE html>
<html>
    <head>
        <title>Assignment8</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>            
    </head>
    <body>
        <hr>
        <form name="output_form" id="output_form" class="form-horizontal" method="post">
            <div class="form-group">
                <label class="col-sm-offset-1 col-sm-2 control-label" for="start_text">Enter Start Tag</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="start_text" id="start_text" required="required" />
                </div>
                <label class="col-sm-2 control-label" for="end_text">Enter End Tag</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="end_text" id="end_text" required="required" />
                </div>
            </div>
            <div class="help-block form-group">
                <div class="col-sm-offset-5 col-sm-2">
                    <button type="submit" class="form-control btn btn-default" name="tag_submit" id="tag_submit">Search</button>
                </div>
                <div class="col-sm-of col-sm-2">
                    <a href="curl_output.php?txt='true'" class="form-control btn btn-default" name="url_submit" id="url_submit">Go to Previous Page</a>
                </div>
            </div>
            <?php
                session_start();
                if($_SERVER['REQUEST_METHOD'] == "POST") {
                    $_SESSION['start'] = $_POST['start_text'];
                    $_SESSION['end'] = $_POST['end_text'];
                    header("Location: tag_search.php");
                }
                if(isset($_GET['txt'])) {
                    header("Location: index.php");
                }
                if(!isset($_SESSION["user"])) {
                    echo "s";
                } else {
                    echo file_get_contents("example_homepage.txt");        
                }
            ?>
        </form>
        <pre>
            &lt;?php
                session_start();
                if($_SERVER['REQUEST_METHOD'] == "POST") {
                    $_SESSION['start'] = $_POST['start_text'];
                    $_SESSION['end'] = $_POST['end_text'];
                    header("Location: tag_search.php");
                }
                if(isset($_GET['txt'])) {
                    header("Location: index.php");
                }
                if(!isset($_SESSION["user"])) {
                    echo "s";
                } else {
                    echo file_get_contents("example_homepage.txt");                    
                }
            ?&gt;
        </pre>
    </body>
</html>
