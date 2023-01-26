<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	    <link rel="apple-touch-icon"type="image/x-icon" href="assets/img/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<title>THINKSQUARE TECHNOLOGIES</title>
	<style>
		.container{
			text-align: center;
			position: absolute;
			margin-top: 0;
			left: 50%;
			
			transform: translate(-50%, -50%);
			
		}
		
		.container span{
			color: lawngreen;
			text-transform: uppercase;
			display: block;
		}
		.text1{
			font-size: 50px;
			font-weight: 900;
			letter-spacing: 10px;
			margin-bottom: 40px;
			position: relative;
			animation: text 3s 1;
		}
		.text2{
			font-size: 40px;
			color: lawngreen;
		}
		img{
			left:5%;
		}

		@keyframes text{
			0%{
			
				margin-bottom: -25px;
			}
			30%{
				letter-spacing: 25px;
				margin-bottom: -25px;
			}
			85%{
				letter-spacing: 8px;
				margin-bottom: -25px;
			}
		}

	
	</style>
</head><br><br><br><br><br><br><br><br><br><br>
<body>
	<div class="container">
		
		<span class="text1"> <img src="assets/img/logo.png" style="width: 50px; height: 50px;">
		THINKSQUARE TECHNOLOGIES </span><br><br><br>
	

<?php if (isset($_GET['error'])): ?> 
		<p><?php echo $_GET['error']; ?></p>

	<?php endif ?>
	
	<form action="upload.php"
	method="post"
	enctype="multipart/form-data" class="upload">
	

	<input type="file" name="my_image" style="border:2px solid black; background-color: whitesmoke;  border-radius: 5px;">&nbsp;&nbsp;&nbsp;


	<input type="submit" name="submit" value="upload" class="btn btn-danger"> &nbsp;
</div>
	
   </form>


<br><br><br>


<div class="data" style="margin-top:10%">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Data From Database</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-12">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-4">
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>
                                            <button type="submit" name="stud_delete_multiple_btn" class="btn btn-danger">Delete</button>
                                        </th>
                                        <th>ID</th>
                                        <th>image_url</th>
                                        
                                    </tr>

                                </tbody>
                                <tbody>
                                    <?php
                                        $con = mysqli_connect("localhost","root","","test_db");

                                        $query = "SELECT * FROM images";
                                        $query_run  = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <tr>
                                                    <td style="width:10px; text-align: center;">
                                                        <input type="checkbox" name="stud_delete_id[]" value="<?= $row['id']; ?>">
                                                    </td>
                                                    <td><?= $row['id']; ?></td>
                                                    <td><?= $row['image_url']; ?></td>
                                                    
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="5">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </form>
                        <a href="<?php echo 'login.php'; ?>">
    <button type="submit" class="btn btn-danger">logout</button></a>

                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

  
             
</body>
</html>