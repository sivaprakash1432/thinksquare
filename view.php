<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ThinkSquare Technologies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" type="image/x-icon"href="assets/img/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Load Require CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">

<style>
* {
  box-sizing: border-box;
}

.pra {
  display: flex;
  margin-left: 5%;
  margin-right: 10%;
}
.siva {
  flex: 10%;
  padding: 50px;
}
</style>
<style>
        .view{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            min-height: 100vh;
        }
        .alb{
            width: 300px;
            height: 200px;
            padding: 3%;
          
  margin-left: 5%;
  margin-right: 5%;
  padding-bottom: 2%;
        }
        .alb img{
        
            width: 100%;
            height: 100%;
        }
       
    </style>
</head>

<body>
    <!-- Header -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="index.html">
                <img src="./assets/img/logo.png" style="width:30%">
                <span class="text-dark h4">ThinkSquare</span> <span  style="color: #A2CA8C";>Technologies</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="<?php echo 'front.php'; ?>">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="<?php echo 'work.php'; ?>">CAREERS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="<?php echo 'about.php'; ?>">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="<?php echo 'view.php'; ?>">OUR CLIENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="<?php echo 'contact.php'; ?>">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="<?php echo 'login.php'; ?>">ADMIN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
<br><br>
 
    <div class="view">
<?php  
$sql = "SELECT * FROM images ORDER BY id DESC";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    while ($images = mysqli_fetch_assoc($res)) { ?>

        <div class="alb">
            <img src="uploads/<?=$images['image_url']?>">
        </div>
    <?php }}?>
</div>
    

<br><br>
          
   
    <!-- Start Footer -->
    <footer style="background-color: #A2CA8C"; >
        <div class="container" >
            <div class="pra py-4" >

                <div style="margin-left: 5px;">
                    <a class="navbar-brand" href="index.html">
                        <img src="./assets/img/logo.png" style="width:15%; ">
                        <span class="text-light h5">ThinkSquare</span> <span class="text-light h5 semi-bold-600">Technologies</span>
                    </a>
                    <p class="text-light my-lg-4 my-2">
                        Think Square Technologies Pvt Ltd Choudadenahalli, Bengaluru, Karnataka 562125, India
                    </p>
                    <ul class="list-inline footer-icons light-300">
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.linkedin.com/">
                                <i class='bx bxl-linkedin-square bx-md'></i>
                            </a></li>
                       </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h3 class="h4 pb-lg-3 text-light light-300">Our Company</h2>
                        <ul class="list-unstyled text-light light-300">
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light" href="index.html">Home</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="about.html">Careers</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="work.html">Services</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i></i><a class="text-decoration-none text-light py-1" href="pricing.html">Our Client</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="contact.html">Contact</a>
                            </li>
                        </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h4 pb-lg-3 text-light light-300">Contact</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1" href="tel:010-020-0340">9902577735</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1" href="mailto:info@company.com">contact@thinksquare.in</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div style="background-color: #A2CA8C";>
            <div class="container">
                <div class="pra pt-2">
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-start text-center text-light light-300">
                            © Copyright 2019 ThinkSquare Technologies. All Rights Reserved.
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Templatemo -->
    <script src="assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="assets/js/custom.js"></script>

</body>

</html>











    
</head>

</html>