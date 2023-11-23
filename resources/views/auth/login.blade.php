<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin & Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="{{ asset('assets') }}/img/icons/icon-48x48.png">

    <title>Login Admin</title>

    <link class="js-stylesheet" href="{{ asset('assets/css/light.css') }}" rel="stylesheet">
</head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    <main class="d-flex w-100 h-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <h2 class="text-center mb-4">Admin Login</h2>
                                    <form method="POST" action="{{ route('masuk') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input class="form-control form-control-lg" type="text" name="username" placeholder="Enter your username">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password">
                                            <small><a href="pages-reset-password.html">Forgot password?</a></small>
                                        </div>
                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-primary">Login</button>
                                            <a href="{{ route('register') }}" class="btn btn-link">Register</a>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
