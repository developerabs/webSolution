<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Test</title>

    <link href="{{ asset('webus/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('webus/css/style.css') }}" rel="stylesheet">
    <script src="https://www.paypal.com/sdk/js?client-id=ASxaRy9ZzxxlhsGEFCIRgkdrWHs7fxh-HzMW30CF_rCgdZez-6seg8sx0SP_mWpnw1OaQCRbAyLJzOHt&currency=USD"></script>
    
  </head>
  <body>
    
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="mt-5 mb-3">Laravel Form</h3> 
                    <h5 class="my-4" style="color:green" id="successMsg"> </h5>
                        <div class="mb-3">
                            <label>Name</label>
                            <div><input type="text" name="name" class="form-control box-quantity" id="name"></div>
                            <p class="nameError" style="color:red"></p>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <div><input type="text" name="email" class="form-control box-quantity" id="email"></div>
                            <p class="emailError" style="color:red"></p>
                        </div>
                        <div class="mb-3">
                            <label>Amount to pay (in USD)</label>
                            <div>
                                <select name="amount" class="form-control box-quantity" id="amount">
                                    <option value="5">$5</option>
                                    <option value="10">$10</option>
                                </select>
                            </div>
                        </div> 
                </div>
                <div class="col-md-4">
                <div id="paypal-button-container"> </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('webus/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        $('#paypal-button-container').on('click', function(){
            var name = $('#name').val();
            var email = $('#email').val(); 
            var amount = $('#amount').val();
            if(name == ""){
                $('.nameError').text('Name is Required');
                return false;
            }
            if(email == ""){
                $('.emailError').text('Email is Required');
                return false;
            }
         
        })
    </script>

<script>
      paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
            var name = $('#name').val();
            var email = $('#email').val(); 
            var amount = $('#amount').val();
            if(name == ""){
                $('.nameError').text('Name is Required');
                return false;
            }else{
                $('.nameError').text(' ');
            }
            if(email == ""){
                $('.emailError').text('Email is Required');
                return false;
            }else{
                $('.emailError').text(' ');
            } 
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: amount // Can also reference a variable or function
              }
            }]
          });
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            // alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            var name = $('#name').val();
            var email = $('#email').val(); 
            var amount = $('#amount').val();
            $.ajax({
            url: 'place-order',
            type: "POST",
            headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 },
            data: {
                name:name,
                email:email,
                amount:amount,
            },
            success: function (response) {
              if (response == 'success') {
                   $('#successMsg').text('Payment success.Please Check your email.Thanks')
              }
            }
        });
            
          });
        }
      }).render('#paypal-button-container');

    
    </script>

  </body>
</html>