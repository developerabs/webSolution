<?php 
    $districts = array("khulna", "dhaka", "rajshahi", "cumilla", "barisal", "jessore", "magura", "b.baria", "faridpur", "sylhet", "kishoregonj", "kazipur", "kushtia");

    if($_SERVER["REQUEST_METHOD"] == "POST"){ 
        $f_chr = $_POST["f_chr"];
        $t_chr = $_POST["t_chr"];
    //echo $t_chr;
    if(empty($f_chr && $t_chr)){
         $error = "Please enter your values.";
    }

    }
    $districts_data = [];
    foreach($districts as $v){ 
        if (substr($v, 0, 1) == $f_chr && strlen($v) == $t_chr) {
            array_push($districts_data, $v);
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
                    <h3 class="mt-5 mb-3">Array Search</h3>
                    <div class="guideline mb-5">
                        Array Elemenets: 
                        [khulna, dhaka, rajshahi, cumilla, barisal, jessore, magura, b.baria, faridpur, sylhet, kishoregonj, kazipur, kushtia]
                    </div>
                    <form action="" method="post">
                        <h4>Enter first character: </h4>
                        <div class="mb-3"><input type="text" name="f_chr" class="form-control box-length"></div>
                        <h4>How many characters?: </h4>
                        <div class="mb-3"><input type="text" name="t_chr" class="form-control box-length"></div>
                        <button type="submit" class="btn btn-primary btn-sm mb-3">Submit</button>
                    </form>

                    <h4>Output is:</h4>
                    <div>
                    `  <?php 
                        //for show null input error 
                        if (isset($error)) { ?> 
                        <p style="color: red;"><?php echo $error; ?></p>
                        <?php  
                        }
                        ?>`

                        <?php  
                         foreach ($districts_data as $value) { 
                            echo $value .",";
                         }
                        ?>
                    </div>
                  
                    
                </div>
            </div>
        </div>
    </div>
    

    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>