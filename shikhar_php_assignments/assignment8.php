<!DOCTYPE html>
<html>
    <head>
        <title>Assignment8</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>            
    </head>
    <body>
        <form name="curl_form" id="curl_form" class="form-horizontal" method="post" action=<?php htmlspecialchars($_SERVER['PHP_SELF'])?>>
            <div class="container">                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="web_url">Enter URL</label>
                    <div class="col-sm-8">
                        <input type="url" class="form-control" name="web_url" id="web_url" />
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="form-control btn btn-default" name="url_submit" id="url_submit">Submit</button>
                    </div>
                </div>
                <div class="form-group">
                    <?php
                        if($_SERVER['REQUEST_METHOD'] == "POST") {
                            $myFile = 'example_homepage.txt';
                            if (!file_exists($myFile)) {
                                echo 'File not found';
                            }
                            else if(!$fp = fopen($myFile, 'w')) {
                                print 'Can\'t open file';
                            }
                            else {
                              print 'Success open file';
                            }
                            $url = $_POST['web_url'];
                            $curl = curl_init();
                            curl_setopt($curl, CURLOPT_URL, $url);
                            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
                            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
                            curl_setopt($curl, CURLOPT_FILE, $fp);
                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //setting option Return Transfer                            
                            $result = curl_exec($curl);                            
                            if($result === false) {
                                echo 'Curl error: ' . curl_error($curl);
                            }
                            else {                            
                                session_start();
                                $_SESSION['user']=$result;            
                                fwrite($fp, $result) or die('');
                                header("Location: curl_output.php" );
                            }
                            curl_close($curl);
                            fclose($fp);                                                
                        }
                    ?>
                </div>
            </div>            
        </form>
        <pre>
            &lt;?php
                print_r(pathinfo($_SERVER['DOCUMENT_ROOT']));;
                if($_SERVER['REQUEST_METHOD'] == "POST") {
                    $myFile = 'example_homepage.txt';
                    if (!file_exists($myFile)) {
                        echo 'File not found';
                    }
                    else if(!$fh = fopen($myFile, 'w')) {
                    print 'Can\'t open file';
                    }
                    else {
                      print 'Success open file';
                    }
                    $url = $_POST['web_url'];
                    $curl = curl_init();
                    curl_setopt($curl, CURLOPT_URL, $url);
                    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
                    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
                    curl_setopt($curl, CURLOPT_FILE, $fp);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //setting option Return Transfer                            
                    $result = curl_exec($curl);                            
                    if($result === false) {
                        echo 'Curl error: ' . curl_error($curl);
                    }
                    else {                                
                        session_start();
                        $_SESSION['user']=$result;            
                        fwrite($fp, $result) or die('');
                        header("Location: curl_output.php" );
                    }
                    curl_close($curl);
                    fclose($fp);                                                
                }
            ?&gt;
        </pre>
    </body>
</html>
