<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
 $total_fields = $_POST["total_fields"];
 if(empty($total_fields)){
  $error = "Please enter a number.";
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
                    <h4 class="mt-5 mb-4">Operation: Summation of 5 Numbers</h4>   
                    <?php 
                    if (isset($error)) { ?> 
                      <p style="color: red;"><?php echo $error; ?></p>
                    <?php  
                    }
                    ?>                 
                    <form action="index2.php" method="post"> 
                      <?php for($i=0; $i<$total_fields; $i++ ){    ?>
                        <input type="text" name="input_values[]" class="form-control box-quantity mb-3">
                      <?php 
                      }
                       ?>
                        
                        <button type="submit" name="" class="btn btn-primary btn-sm">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>