 
<!DOCTYPE html>
<html lang="en" dir="ltr" data-scompiler-id="0">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="format-detection" content="telephone=no" />
        <title>Job Portal</title>
        <!-- icon -->
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <!-- fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" />
        <!-- css -->
        <link rel="stylesheet" href="{{ asset('backend/vendor/bootstrap/css/bootstrap.ltr.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/vendor/highlight.js/styles/github.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/vendor/simplebar/simplebar.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/vendor/quill/quill.snow.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/vendor/air-datepicker/css/datepicker.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/vendor/select2/css/select2.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/vendor/datatables/css/dataTables.bootstrap5.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/vendor/nouislider/nouislider.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/vendor/fullcalendar/main.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}" />
    </head>
    <body>
        <div class="min-h-100 p-0 p-sm-6 d-flex align-items-stretch">
            <div class="card w-25x flex-grow-1 flex-sm-grow-0 m-sm-auto">
                <div class="card-body p-sm-5 m-sm-3 flex-grow-0">
                    <h1 class="mb-0 fs-3">Sign In</h1>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="fs-exact-14 text-muted mt-2 pt-1 mb-5 pb-2">Log in to your account to continue.</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label">Email or Phone Number</label>
                            <input type="text" name="email" required class="form-control form-control-lg" />
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" required class="form-control form-control-lg" />
                        </div> 
                        <div class="mb-4 row py-2 flex-wrap">
                            <div class="col-auto me-auto">
                                <label class="form-check mb-0">
                                    <input type="checkbox" name="remember" class="form-check-input" />
                                    <span class="form-check-label">Remember me</span>
                                </label>
                            </div>
                            <div class="col-auto d-flex align-items-center"><a href="auth-forgot-password.html">Forgot password?</a></div>
                        </div>
                        
                        <div><button type="submit" class="btn btn-primary btn-lg w-100">Sign In</button></div>
                    </form>

                </div>
            </div>
        </div>
        <!-- scripts -->
        <script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/vendor/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('backend/vendor/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/vendor/highlight.js/highlight.pack.js') }}"></script>
        <script src="{{ asset('backend/vendor/quill/quill.min.js') }}"></script>
        <script src="{{ asset('backend/vendor/air-datepicker/js/datepicker.min.js') }}"></script>
        <script src="{{ asset('backend/vendor/air-datepicker/js/i18n/datepicker.en.js') }}"></script>
        <script src="{{ asset('backend/vendor/select2/js/select2.min.js') }}"></script>
        <script src="{{ asset('backend/vendor/fontawesome/js/all.min.js') }}" data-auto-replace-svg="" async=""></script>
        <script src="{{ asset('backend/vendor/chart.js/chart.min.js') }}"></script>
        <script src="{{ asset('backend/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/vendor/datatables/js/dataTables.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('backend/vendor/nouislider/nouislider.min.js') }}"></script>
        <script src="{{ asset('backend/vendor/fullcalendar/main.min.js') }}"></script>
        <script src="{{ asset('backend/js/stroyka.js') }}"></script>
        <script src="{{ asset('backend/js/custom.js') }}"></script>
        <script src="{{ asset('backend/js/calendar.js') }}"></script>
        <script src="{{ asset('backend/js/demo.js') }}"></script>
        <script src="{{ asset('backend/js/demo-chart-js.js') }}"></script>
    </body>
</html>

