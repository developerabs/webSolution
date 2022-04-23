<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Test</title>

    <link href="{{ asset('webus/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('webus/css/style.css') }}" rel="stylesheet">
    
  </head>
  <body>
    
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="mt-5 mb-3">Laravel Form</h3>
                    <form action="{{ route('processTransaction') }}" method="post">
                        @csrf
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
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary btn-sm" id="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('webus/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        $('#submit').on('click', function(){
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
            
            // $.ajax({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     },
            //     url: "process-transaction",
            //     type: "POST", 
            //     data: {
            //         amount:amount
            //     },
            //     success: function (response) {
            //     alert('h')
            //     }
            // })
        })
    </script>

  </body>
</html>