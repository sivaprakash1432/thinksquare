<!DOCTYPE html>
  <html>
  <head>
   <title>ThinkSquare Technologies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="logo.png" type="image/x-icon" href="assets/img/logo.png">
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
  <style type="text/css">
     body
   {
     margin:0px; 
     font-family:Arial, Helvetica, sans-serif;
   }
   #main
   {
     width:600px; 
     height:260px; 
     margin-left:auto;
      margin-right:auto; 
      border-radius:5px;
      padding-left:10px;
       margin-top:100px;
     border-top:3px double #f1f1f1;
      border-bottom:3px double #f1f1f1;
       padding-top:20px;
   }
   #main table
   {
     font-family:"Comic Sans MS", cursive;
   } 
  /* css code for textbox */
  #main .tb
  {
    height:28px; 
    width:230px; 
    border:1px solid #27a465; 
    font-weight:bold; 
    border-left:5px solid #f7f7f7; 
    opacity:0.9;
  }

   /* css code for button*/
   #main .btn
   {
    width:80px; 
    height:32px; 
    outline:none;  
    font-weight:bold; 
    border:0px solid #27a465; 
    text-shadow: 0px 0.5px 0.5px #fff;  
    border-radius: 2px; 
    font-weight: 600; 
    color:  #A2CA8C; 
    letter-spacing: 1px; 
    font-size:14px; 
    -webkit-transition: 1s; 
    -moz-transition: 1s; 
    transition: 1s;
   }
  
   #main .btn:hover
   {
    background-color:#27a465; 
    outline:none;  
    border-radius: 2px; 
    color:#f1f1f1; 
    border:1px solid #f1f1f1;
   }
  </style>
  <script type="text/javascript">
    function login()
    {
        var uname = document.getElementById("email").value;
        var pwd = document.getElementById("pwd1").value;
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(uname == 'contact@thinksquare.in' && pwd == '12345678')
        {
                alert('Thank You for Login & You are Redirecting to Campuslife Website');
  //Redirecting to other page or webste code or you can set your own html page.
       window.location = "index.php";
        }
        else
        {
            if(uname =='')
        {
            alert("please enter user name.");
        }
        else if(pwd=='')
        {
            alert("enter the password");
        }
        else if(uname!='contact@thinksquare.in'&& pwd!='12345678')
        {
            alert("Enter Valid Username and Password")
        }
        }
    }
    //Reset Inputfield code.
    function clearFunc()
    {
        document.getElementById("email").value="";
        document.getElementById("pwd1").value="";
    }   
    
  </script>
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
    <!-- Close Header -->
    <!-- Main div code --><br><br>
    <div id="main">
    <div class="h-tag">
    <h2> Login..........!!!</h2>
    </div>
    <!-- Login box -->
    <div class="login">
    <table cellspacing="2" align="center" cellpadding="8" border="0">
    <tr>
    <td>User Name :</td>
    <td><input type="text" placeholder="user name" id="email" class="tb" /></td>
    </tr>
    <tr>
    <td>Password :</td>
    <td><input type="password" placeholder="Password" id="pwd1" class="tb" /></td>
    </tr>
    <tr>
    <td></td>
    <td>
    <input type="submit" value="clear" onclick="clearFunc()" class="btn" />
    <input type="submit" value="Login" class="btn" onClick="login()" /></td>
    </tr>
    </table>
    </div>
     <!-- login box div ending here.. -->
    </div> <br><br><br><br><br><br><br><br>
    <!-- Main div ending here... -->


    <!-- Start Footer -->
    <footer style="background-color: #A2CA8C";>
        <div class="container">
            <div class="row py-4">

                <div class="col-lg-3 col-12 align-left">
                    <a class="navbar-brand" href="index.html">
                        <img src="./assets/img/logo.png" style="width:15%">
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
                <div class="row pt-2">
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
    
  </body>
  </html>