<?php
session_start();
if (empty($_SESSION['customer_id']) and empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and $_SESSION['user_role'] != 3) {
    header('Location:../Login/login.php');
};
// include_once '../controllers/crop_controller.php';



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
    <script defer src="../js/modal.js"></script>
    <script>
        $('#exampleModal$i').on('shown.bs.modal', function (event) {
        $('#myInput').trigger('focus')
        })
        $('modal2').on('shown.bs.modal', function (event) {
        $('#myInput').trigger('focus')
        })
    </script>


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
            <div class=" text-nowrap admin" >
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
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Crops Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div>

                <div class="wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                    <thead>
                    <tr>
                        <th>Crop Name</th>
                        <th></th>
                        <th>Farmer</th>
                        <th></th>
                        <th> Contact</th>
                        <th></th>
                        <th>Quantity</th>
                        <th></th>
                        <th>Crop Price/kg</th>
                        <th></th>
                        <th>Image</th>
                        <th>Category</th>
                        <th></th>
                        <th> Description</th>
                        <th></th>
                        <th>Status</th>
                        <th></th>
                        <th>Actions</th>
                        <th></th>
                        </tr>
                    </thead>
                                    <tbody>
                                    <?php 
                                        require "../controllers/product_controller.php";
                                        
                                        function displayCtr(){

                                            $crop = get_all_croprecords_ctr();
                                         
                                            for ($i=0; $i < count($crop); $i++) {
                                              
                                                echo "<tr>";
                                                echo "<td>".$crop[$i]['crop_name']."<td>";
                                                echo "<td>".$crop[$i]['farmer_name']."<td>";
                                                echo "<td>".$crop[$i]['farmer_contact']."<td>";
                                                echo "<td>".$crop[$i]['qty']."<td>";
                                                echo "<td>".$crop[$i]['crop_price']."<td>";
                                                echo "<td><img src='../images/crops/"  . $crop[$i]['crop_image']  . "' height='50px' width='90%'></td>";
                                                echo "<td>".$crop[$i]['crop_cat']."<td>";
                                                echo "<td>".$crop[$i]['crop_desc']."<td>";
                                                echo "<th><form method='POST' action='../actions/updatecropstatus.php' id='approve'.$i'>
                                                        <input type='hidden' name='crop_id' value= '".$crop[$i]['crop_id']."'>
                                                        <input type='hidden' name='check' value= '".$crop[$i]['Approved']."'>
                                                        <button type='submit' class='btn btn-toggle' <?php if(".$crop[$i]['Approved']."=='Yes'){ echo 'checked';}?>
                                                        ".$crop[$i]['Approved']."</button>
                                                        </form></th>";
                                                echo "<th><button type='button' class=' mr-3 btn-first-modal btn btn-outline-success btn-lg' data-toggle='modal' data-target='#first-modal$i' style='font-size:10px;'>
                                                <span class='bi bi-card-image'></span> 
                                                </button></th>";
                                                echo " <th><button type='button' class='btn-second-modal btn btn-outline-success btn-lg' style='font-size:10px;'>
                                                <span class='bi bi-envelope-fill'></span>
                                                </button>";


                                              

                                                echo 
                                                "
                                                <div class='modal' id='first-modal$i' data-backdrop='static' data-keyboard='false'>
                                                    <div class='modal-dialog'>
                                                    <div class='modal-content'>
                                                        <div class='modal-header'>
                                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                                                        <h4 class='modal-title' id='myModalLabel'>First Modal</h4>
                                                        </div>
                                                        <div class='modal-body'>
                                                            <div class='form'>
                                                                <form id='formid' action='../actions/edit_image.php' method='POST' class='row g-3' enctype='multipart/form-data'>
                                                                <input type='hidden' name='product_id' value= '".$crop[$i]['crop_id']."'>
                                                                <input type='hidden' name='product_id' value= '".$crop[$i]['crop_id']."'>
                                                                <input type='hidden' name='image' value= '../images/crops/"  . $crop[$i]['crop_image'] ."'>
                                                                
                                                                    <div class='col-12'>
                                                                        <label>Crop Image</label>
                                                                        <input type='file' name='crop_image[]' id='crop_image' class='form-control' placeholder= '".$crop[$i]['crop_image']."' >
                                                                        <input type='hidden' name='crop_id'  value= '".$crop[$i]['crop_id']."'>
                                                                    </div>
                                                                    
                                                               
                                                            </div>
                                                        </div>
                                                        <div class='modal-footer'>
                                                        <button type='button' class='btn-second-modal-close btn btn-default'>Close</button>
                                                        <input type = 'submit' value='update' name='edit_image' class='btn btn-outline-success'>
                                                        <input type='hidden' name='crop_id' value='".$crop[$i]['crop_id']."'>
                                                        </div>
                                                        </form>
                                                    </div>
                                                    </div>
                                                </div>";
        
        
                                                echo "
                                                <div class='modal' id='second-modal' data-backdrop='static' data-keyboard='false'>
                                                <div class='modal-dialog'>
                                                <div class='modal-content'>
                                                    <div class='modal-header'>
                                                    <button type='button' class='btn-second-modal-close close'><span aria-hidden='true'>&times;</span></button>
                                                    <h4 class='modal-title'>Second Modal</h4>
                                                    </div>
                                                    <div class='modal-body'>
                                                    <form method='POST' action='../actions/mail.php'>
                                                        <div class='form-group'>
                                                            <label for='recipient-name' class='col-form-label'>Recipient:</label>
                                                            <input type='text' class='form-control' id='recipient-name' value='".$crop[$i]['customer_email']."' name='customer_email'>
                                                            <input type='hidden' name='crop_id' value='".$crop[$i]['crop_id']."'>
                                                        </div>

                                                        <div class='modal-footer'>
                                                        <button type='button' class='btn-second-modal-close btn btn-default'>Close</button>
                                                        <input type='hidden' name='customer_email' value='".$crop[$i]['customer_email']."'>
                                                        <button type='submit' class='btn btn-outline-success' name='send_mail'>Send Email</button>
                                                    </div>
                                                     </form>
                                                    </div>
                                                   
                                                </div>
                                                </div>
                                            </div>
                                                ";
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
    

    <script>
        var myModal = document.getElementById('myModa$i')
        var myInput = document.getElementById('myInput$i')

        myModal.$i.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })
    </script>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
</body>

</html>