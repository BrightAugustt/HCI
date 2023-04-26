<?php
session_start();
if (empty($_SESSION['customer_id']) and empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and $_SESSION['user_role'] != 3) {
    header('Location:../Login/login.php');
};
require("../controllers/general_controller.php");
require("../controllers/cart_controller.php");


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/aeo.css">
    <script defer src="../js/activepage.js"></script>


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-white flex-md-nowrap p-0 shadow header">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="admin.php">
            <img class="bi me-2" src="../images/logo.png" width="189" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap" />
            </img>
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h4 style="color:#16AD22;text-align:center;">Admin Dashboard</h4>
        <div class="navbar-nav">
            <div class=" text-nowrap admin">
                <!-- <a class="nav-link px-3" href="../login/logout.php" style="color:black">Sign Out</a>-->
                <span id="boot-icon" class="bi bi-person-circle" style="font-size: 30px;"></span>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block  sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link dashboard" aria-current="page" href="admin.php">
                                <span data-feather="home"></span>
                                <span id="boot-icon" class="bi bi-house-door-fill icon" style="font-size: 25px;"></span>
                                </i>Dashboard
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link dashboard" aria-current="page" href="allproducts.php">
                                <span data-feather="home"></span>
                                <span id="boot-icon" class="bi bi-wallet-fill crop" style="font-size: 25px;"></span>
                                </i>Products
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link dashboard" href="report.php">
                                <span data-feather="file"></span>
                                <span id="boot-icon" class="bi bi-file-earmark-bar-graph record" style="font-size: 25px;"></span>
                                Records
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link dashboard" href="allcustomers.php">
                                <span data-feather="file"></span>
                                <span id="boot-icon" class="bi bi-people record" style="font-size: 25px;"></span>
                                Clients
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a class="nav-link dashboard" href="profile.php">
                                <span data-feather="users"></span>
                                <span id="boot-icon" class="bi bi-person-lines-fill profile" style="font-size: 25px ;"></span>
                                Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dashboard" href="help.php">
                                <span data-feather="file"></span>
                                <span id="boot-icon" class="bi bi-question-circle help" style="font-size: 25px; "></span>
                                Help
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Login/logout.php">
                            <span id="boot-icon" class="bi bi-box-arrow-right help" style="font-size: 25px; "></span>
                                <span data-feather="file"></span>
                                Signout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>


            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">


                <h5 class="heading">Overview</h5>
                <div class="row over">
                    <div class="col-sm-3">
                        <div class="card over">
                            <div class="card-body over">
                                <div>
                                    <span id="boot-icon" class="bi bi-cash-stack" style="font-size: 20px; color:black;"></span>
                                </div>

                                <div>
                                    <h5 class="card-title"> GHC
                                        <?php
                                        $sales = salesCount_ctr();
                                        $sales = intval(array_values($sales)[0]);
                                        echo $sales;
                                        ?>
                                    </h5>

                                    <p class="card-text">Money obatined from sales of farm produce of farmers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">

                                <span id="boot-icon" class="bi bi-people" style="font-size: 20px; color:black;"></span>
                                <h5 class="card-title">
                                    <?php
                                    $count = aeoCount_ctr();
                                    $count = intval(array_values($count)[0]);
                                    echo $count;
                                    ?>
                                </h5>
                                <p class="card-text">Agriculture Extension Officers regsitered on the platform.</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <span id="boot-icon" class="bi bi-people" style="font-size: 20px; color:black;"></span>
                                <h5 class="card-title">
                                    <?php
                                    $customer = customerCount_ctr();
                                    $customer = intval(array_values($customer)[0]);
                                    echo $customer;
                                    ?>
                                </h5>
                                </h5>
                                <p class="card-text">Consumers regsitered on the platform.</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <span id="boot-icon" class="bi bi-diagram-3-fill" style="font-size: 20px; color:black;"></span>
                                <h5 class="card-title">
                                    <?php
                                    $crops = cropsCount_ctr();
                                    $crops = intval(array_values($crops)[0]);
                                    echo $crops;
                                    ?>
                                </h5>
                                <p class="card-text">Products submitted by AEOs to be sold on the platform.</p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mt-5 mb-3 clearfix">
                                    <h3 class="pull-left" style="font-size: 24px;">
                                        Orders
                                    </h3>
                                    <a href="record.php" class="btn btn-success pull-right"><span id="boot-icon" class="bi bi-file-earmark-bar-graph record" style="font-size: 20px; color:white; margin-right:5px"></span></i> View Full Report</a>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th></th>
                                            <th>Crop Name</th>
                                            <th></th>
                                            <th>Quantity </th>
                                            <th></th>
                                            <th>Amount</th>
                                            <th></th>
                                            <th>Order Date</th>
                                            <th></th>
                                            <th>Location</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        function displayCtr()
                                        {
                                            $order = view_recentorder_ctr();

                                            for ($i = 0; $i < count($order); $i++) {
                                                echo "<tr>";
                                                echo "<td>" . $order[$i]['order_id'] . "<td>";
                                                echo "<td>" . $order[$i]['crop_name'] . "<td>";
                                                echo "<td>" . $order[$i]['qty'] . "<td>";
                                                echo "<td>" . $order[$i]['amount'] . "<td>";
                                                echo "<td>" . $order[$i]['order_date'] . "<td>";
                                                echo "<td>" . $order[$i]['location'] . "<td>";
                                            }
                                        }
                                        displayCtr();
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
</body>

</html>