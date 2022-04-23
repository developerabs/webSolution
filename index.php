<?php 
 session_start();
//carts data
 $_SESSION['carts'] = array(
    "0"=>array("Product_name"=>"Shoe", "qty"=>1, "unite_price"=>1000),
    "1"=>array("Product_name"=>"T-Shirt", "qty"=>2, "unite_price"=>1000),
    "2"=>array("Product_name"=>"Pant", "qty"=>1, "unite_price"=>2000),
    "3"=>array("Product_name"=>"Panjabi", "qty"=>5, "unite_price"=>4000),
    "4"=>array("Product_name"=>"Lungi", "qty"=>2, "unite_price"=>1000),

);
 

//carts update 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["id"];
    $qty = $_POST["qty"];
    foreach ($_SESSION['carts'] as $key => $s_data) {
        foreach ($id as $sub_key => $value) { 
            if ($key == $value) {
                $_SESSION['carts'][$value]['qty'] = $qty[$sub_key];

            }
            
      
        }
        
    }
  
}

//carts delete  
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    unset($_SESSION['carts'][$id]);
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    
  </head>
  <body>
    
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="mt-5 mb-3">Shopping Cart</h3>
                    <form action="index.php" method="post">
                        <table class="table table-bordered">
                            <tr class="bg-primary text-white">
                                <th>Serial</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Subtotal</th>
                                <th>Action</th>
                            </tr>

                            <?php 
                            $i = 1;
                            $total_price = 0;
                            foreach ($_SESSION['carts'] as $key => $value) {      
                            ?> 
                            <tr id="cart_item">
                                <td><?php echo $i ?></td>
                                <td ><?php echo $value['Product_name'] ?></td>
                                <td>
                                    <input type="number" name="qty[]" value="<?php echo $value['qty'] ?>" class="form-control box-quantity quentity" >
                                </td>
                                <input type="hidden" class="id" name="id[]" value="<?php echo $key ?>">
                                <td>$<span class="unitPrice"><?php echo $value['unite_price'] ?></span></td>
                                <td>$<span class="subtotal"><?php echo $value['qty']*$value['unite_price'] ?></span></td>
                                <td><a href="index.php?delete=<?php echo $key; ?>" class="btn btn-danger btn-sm">Delete</a></td>
                              
                        
                            </tr>

                            <?php   
                                $total_price += $value['qty']*$value['unite_price'];
                                $i++; 
                            }
                            
                            ?> 

                            <tr>
                                <td colspan="4">Total: </td>
                                <td>$<span id="totalAmount"><?php echo $total_price; ?></span></td>
                                <td></td>
                            </tr>
                        </table>

                        <button type="submit" class="btn btn-success btn-sm">Update Cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <script src="js/bootstrap.bundle.min.js"></script> 
    <script type="text/javascript">
       
        $(".quentity").on('input',function(e){
            e.preventDefault();
            var quentity = $(this).val(); 
            var id = $(this).closest('#cart_item').find('.id').val();
            var unitPrice = $(this).closest('#cart_item').find('.unitPrice').text();
            var subtotal = $(this).closest('#cart_item').find('.subtotal');
            quentity = parseInt(quentity);
            unitPrice = parseInt(unitPrice);

            var result = quentity * unitPrice;

            subtotal.html(result);

            $.ajax({url:"ajax.php", 
                method:"GET", 
                data:{
                    id:id,
                    quentity:quentity,
                }, 
                success:function(response){ 

                   console.log(response)
                }
            }); 

            totalAmount()
            // alert(quentity)
        });
        function totalAmount(){
            var total = 0;
            var values = document.querySelectorAll('.subtotal');
            
            values.forEach(val => {
                const value = parseFloat(val.innerHTML);

                total += value;
            });6
           $('#totalAmount').text(total);
        }
      
    </script>

  </body>
</html>