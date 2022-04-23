<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
 $input_values = $_POST["input_values"];
  // print_r($input_values);
 if(empty($input_values)){
  $error = "Please enter your values.";
}
}


?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    

    <title>Test</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
  </head>
  <body>
    
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mt-5 mb-4">Output</h4>
                    <?php 
                    if (isset($error)) { ?> 
                      <p style="color: red;"><?php echo $error; ?></p>
                    <?php  
                    }
                    ?> 
                    Summation of 
                    <?php 
                    foreach ($input_values as $key => $value) {
                      echo $value ." ";
                    }
                    ?>
                    are: <?php echo array_sum($input_values); ?>
                </div>
            </div>
        </div>
    </div>
    

    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>