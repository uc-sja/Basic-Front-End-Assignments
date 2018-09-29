<?php 
    $dir = './image';
    $files = scandir($dir);    
    //print_r($files);
    $file_names = array_diff($files, array('..', '.'));
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Assignment7</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>            
    </head>
    <body>
        <div class="container">
            <?php
                    foreach($file_names as $key => $value) {
                    if(pathinfo($value, PATHINFO_EXTENSION) == "png" || pathinfo($value, PATHINFO_EXTENSION) == "jpg") {
                        echo '<div class="col-md-4">
                            <div class="thumbnail">
                              <a href="#">
                                <img style="width:300px; height:300px;" src="image/'.$value.'">
                                <div class="caption">
                                  <p class="text-center">Image Gallery</p>
                                </div>    
                              </a>
                            </div>
                          </div>';
                    }
                }
            ?>
        </div>
    </body>
</html>
<pre>
    &lt;?php 
        $dir = '.\image';
        $files = scandir($dir);    
        //print_r($files);
        $file_names = array_diff($files, array('..', '.'));                
    ?&gt;
    &lt;?php 
        foreach($file_names as $key =&gt; $value) {
            if(pathinfo($value, PATHINFO_EXTENSION) == "png" || pathinfo($value, PATHINFO_EXTENSION) == "jpg") {
                echo '&lt;div class="col-md-4"&gt;
                        &lt;div class="thumbnail"&gt;
                            &lt;a href="#"&gt;
                                &lt;img style="width:350px; height:300px;" src="image/'.$value.'"&gt;
                                &lt;div class="caption"&gt;
                                    &lt;p class="text-center"&gt;Image Gallery&lt;/p&gt;
                                &lt;/div&gt;    
                            &lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;';
            }
        }
    ?&gt;
</pre>