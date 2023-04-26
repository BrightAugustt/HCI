<?php
session_start();
if (empty($_SESSION['customer_id']) and empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and $_SESSION['user_role'] != 2) {
    header('Location:../Login/login.php');
};

require("../controllers/contact_controller.php");
$cid = $_SESSION['customer_id'];
$result = get_one_record_ctr($cid)
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AEO Profile</title>
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
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="aeo.php">
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
                            <a class="nav-link dashboard" href="record.php">
                                <span data-feather="file"></span>
                                <span id="boot-icon" class="bi bi-file-earmark-bar-graph record" style="font-size: 25px; "></span>
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
                                <span id="boot-icon" class="bi bi-person-lines-fill profile" style="font-size: 25px; "></span>
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
                <div class="container rounded bg-white mt-5 mb-5">
                    <form action="../actions/updateProfile.php" method="POST">
                        <div class="row">
                            <div class="col-md-3 border-right">
                                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                    <button type='button' class='mr-3 btn-first-modal btn btn-outline-success btn-lg' data-toggle='modal' data-target='#first-modal$i' style='font-size:10px;'>
                                        <span class='bi bi-card-image'></span></button>
                                    <span class="font-weight-bold"><?php echo $_SESSION['customer_fname'] ?></span>
                                    <span class="text-black-50"><?php echo $_SESSION['customer_email']; ?></span><span> </span>
                                </div>
                            </div>
                            <div class="col-md-5 border-right">
                                <div class="p-3 py-5">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="text-right">Profile Settings</h4>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-6"><label class="form-group labels">Name</label><input type="text" class="form-control" placeholder="first name" id="fname" name="customer_fname" value="<?php echo $_SESSION['customer_fname']; ?>"></div>
                                        <div class="col-md-6"><label class="form-group labels">Surname</label><input type="text" class="form-control" id="lname" name="customer_lname" value="<?php echo $_SESSION['customer_lname']; ?>" placeholder="surname"></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12"><label class="form-group labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" id="contact" name="customer_contact" value="<?php echo $_SESSION['customer_contact']; ?>"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 py-5">
                                    <div class="col-md-12"><label class="form-group labels">Email Address</label><input type="text" disabled class="form-control" placeholder="enter email address" id="email" name="customer_email" value="<?php echo $_SESSION['customer_email']; ?>"></div> <br>
                                    <input type="hidden" name="customer_id" value="<?php echo $_SESSION['customer_id'] ?>" />
                                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" id="updateBtn" name="updateBtn">Save Profile</button></div>
                                </div>
                            </div>
                        </div>
                    </form>
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