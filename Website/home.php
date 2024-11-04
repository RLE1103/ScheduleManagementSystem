<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <div class="fixed-top">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-1">
            <div class="container-fluid"> <!-- Use container-fluid for full width -->
                <a class="navbar-brand" href="#">Schedule Management System</a>
                <a href="login.php" class="btn btn-outline-light">Logout</a>
            </div>
        </nav>
    </div>
    <div class="container-fluid content-padding"> <!-- Sidebar -->
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-white Sidebar">
                <div class="d-flex flex-column align-items-center align-items-sm-start pt-2 min-vh-100 ">
                    <ul class="nav nav-pills flex-column ms-1">
                        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Class</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Schedule</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Maintenance</a></li>
                        <li class="nav-item"><a class="nav-link" href="user.php">User</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col py-3"> <!-- Content -->
                <div class="row">
                    <h2>Dashboard</h2>
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-blue order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Orders Received</h6>
                                <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>486</span></h2>
                                <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-green order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Orders Received</h6>
                                <h2 class="text-right"><i class="fa fa-rocket f-left"></i><span>486</span></h2>
                                <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-yellow order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Orders Received</h6>
                                <h2 class="text-right"><i class="fa fa-refresh f-left"></i><span>486</span></h2>
                                <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-xl-3">
                        <div class="card bg-c-pink order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Orders Received</h6>
                                <h2 class="text-right"><i class="fa fa-credit-card f-left"></i><span>486</span></h2>
                                <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer fixed-bottom flex-shrink-0 py-1 bg-dark text-white-50">
        <div class="container text-center">
            <span class="lead text-black-50">
                <small>Copyright &copy; Your Website</small>
            </span>
        </div>
    </footer>
</body>
</html>