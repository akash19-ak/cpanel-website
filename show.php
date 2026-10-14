<?php

session_start(); //gets session id from cookies, or prepa

if ($_SESSION['login'] != 'ogadvertising') { //if sid exists and login for sid exists

    ?>
    
    <script>
        window.location.href="index.php"
    </script>
    
    <?php
    
    die();

} else {
    
}


    $servername = "localhost";
    $username = "ssodledu_admin";
    $password = "o2h}6@P)6ogR";
    $dbname = "ssodledu_enquiry_2023";
    
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT count(id) as total FROM enquiry where lead_status='open'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
    while($row = $result->fetch_assoc()) {
    
        $openCount =  $row['total'];
        // die();
        
    
    }
} 

$sql = "SELECT count(id) as total FROM enquiry where lead_status='in-process'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
    while($row = $result->fetch_assoc()) {
    
        $processCount =  $row['total'];
        // die();
        
    
    }
} 

$sql = "SELECT count(id) as total FROM enquiry where lead_status='closed'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
    while($row = $result->fetch_assoc()) {
    
        $closedCount =  $row['total'];
        // die();
        
    
    }
}

$sql = "SELECT count(id) as total FROM enquiry";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
    while($row = $result->fetch_assoc()) {
    
        $totalCount =  $row['total'];
        // die();
        
    
    }
} 

$conn->close();

?>

<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <!--<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />-->
  <!--<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />-->
  <!--<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />-->
  <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />


  <!--Theme Styles-->
  <link href="assets/css/dark-theme.css" rel="stylesheet" />
  <link href="assets/css/light-theme.css" rel="stylesheet" />
  <link href="assets/css/semi-dark.css" rel="stylesheet" />
  <link href="assets/css/header-colors.css" rel="stylesheet" />

  <title>SSODL Leads Data Export tool by OG Advertising</title>
</head>

<body>
    
    <style>
        .page-content{
            margin-left:0;
        }
        .buttons-pdf{
            display:none;
        }
        
        .circle-stats{
            height: 11px;
            width: 11px;
            margin: 0 auto;
            border-radius: 100%;
        }
        .c-r{
            background:#fd3c3c;;
        }
        .c-g{
            background:#7dd043;
        }
        .c-y{
            background:#f7b900;
        }
        
        .logout-btn{
            position: absolute;
            top: 10px;
            border:none;
            right: 10px;
        }
        
        @media(min-width:992px){
            .desktop-topbar{
                width: 800px;
                margin-left: 0;
            }
        }
    </style>
   
   <a href="logout.php"><button class=" logout-btn btn btn-primary" style="
            background:#fd3c3c;">Logout</button></a>


  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
	<header class="top-header">        
        
      </header>
       <!--end top header-->

     
     <div class="text-center mt-5">
         <img src="https://www.ssodl.edu.in/assets/images/SSODL_6.png" style="max-width:300px;margin:0 auto;">
         <br>
         <h5 >Leads Data Export Tool by <span id='og-footer-logo-2021-dark'></span>
              <script>
                  let OG_randomNum = Math.floor(Math.random()*100000)
                  let OG_scriptSrc = 'https://ogad.agency/footer-api/footer.js?v=' + OG_randomNum.toString()

                  let OG_Script = document.createElement("script");
                  OG_Script.setAttribute("src", OG_scriptSrc);
                  OG_Script.setAttribute("async", "false");

                  let head = document.head;
                  head.insertBefore(OG_Script, head.firstElementChild);
              </script></h5>
     </div>
     


       <!--start content-->
       <main class="page-content" style="margin-top:15px;">
			
			
			<div class="container mt-2 mb-2 desktop-topbar"> 
			    
			    <div class="row text-center ">
			        <div class="col-md-3 col-12">
			            Total Leads: <?php echo $totalCount; ?>
			        </div>
			        <div class="col-md-3 col-12">
			            <div class="circle-stats c-r" style="display:inline-block;"></div> Open / Unanswered: <?php echo $openCount; ?>
			        </div>
			        <div class="col-md-3 col-12">
			            <div class="circle-stats c-y" style="display:inline-block;"></div> In-Process: <?php echo $processCount; ?>
			        </div>
			        <div class="col-md-3 col-12">
			            <div class="circle-stats c-g" style="display:inline-block;"></div> Closed: <?php echo $closedCount; ?>
			        </div>
			    </div>
			    
			
			</div>
				
				
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Edit</th>
										<th>Stats</th>
										<th>Sr. No.</th>
										<th>Lead Status</th>
										<th>Lead Date</th>
										<th>Salutation</th>
										<th>Name</th>
										<th>Phone</th>
										<th>Alternate Phone</th>
										<th>Email</th>
										<th>Email 2</th>
										<th>Qualification</th>
										<th>Occupation</th>
										<th>Program</th>
										<th>City</th>
										<th>Note</th>
									</tr>
								</thead>
								<tbody>
								    
								     <?php
                                        $servername = "localhost";
                                        $username = "ssodledu_admin";
                                        $password = "o2h}6@P)6ogR";
                                        $dbname = "ssodledu_enquiry_2023";
                                        
                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                          die("Connection failed: " . $conn->connect_error);
                                        }
                                        
                                        $sql = "SELECT * FROM enquiry order by id DESC";
                                        $result = $conn->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                          // output data of each row
                                          while($row = $result->fetch_assoc()) {
                                            
                                            switch($row['lead_status']){
                                                case 'in-process':
                                                    $circleColor = 'c-y';
                                                    break;
                                                case 'open':
                                                    $circleColor = 'c-r';
                                                    break;
                                                case 'closed':
                                                    $circleColor = 'c-g';
                                                    break;
                                            }
                                            ?>
                                            
                                            
                                            
                                            <tr>
                                                <td class="text-center" ><a  style="color:red" href="edit.php?id=<?php echo $row['id']; ?>"><i class="bi bi-pencil"></i></a></td>
        									    <td class="text-center" style="position:relative;" >
        									       <div style="position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);" class="circle-stats <?php echo $circleColor; ?>">
        									           
        									       </div>
									            </td>
        										<td class="text-center"><?php echo $row['id']; ?></td>
        										<td><?php echo $row['lead_status']; ?></td>
        										<td><?php echo $row['date']; ?></td>
        										<td><?php echo $row['salutation']; ?></td>
        										<td><?php echo $row['name']; ?></td>
        										<td><?php echo $row['phone']; ?></td>
        										<td><?php echo $row['alternate_phone']; ?></td>
        										<td><?php echo $row['email']; ?></td>
        										<td><?php echo $row['email2']; ?></td>
        										<td><?php echo $row['qualification']; ?></td>
        										<td><?php echo $row['occupation']; ?></td>
        										<td><?php echo $row['program']; ?></td>
        										<td><?php echo $row['city']; ?></td>
        										<td><?php echo $row['note']; ?></td>
        									</tr>
                                            
                                            <?php
                                          }
                                        } 
                                        $conn->close();
                                        ?> 
								    
									
									
								</tbody>
								<tfoot>
									<tr>
										<th>Sr. No.</th>
										<th>Lead Status</th>
										<th>Lead Date</th>
										<th>Salutation</th>
										<th>Name</th>
										<th>Phone</th>
										<th>Alternate Phone</th>
										<th>Email</th>
										<th>Email 2</th>
										<th>Qualification</th>
										<th>Occupation</th>
										<th>Program</th>
										<th>City</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</main>
       <!--end page main-->


       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        
        <!--start switcher-->
       <div class="switcher-body">
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
          <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body">
            <h6 class="mb-0">Theme Variation</h6>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1" checked>
              <label class="form-check-label" for="LightTheme">Light</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
              <label class="form-check-label" for="DarkTheme">Dark</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
              <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
            </div>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3">
              <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
            </div>
            <hr/>
            <h6 class="mb-0">Header Colors</h6>
            <hr/>
            <div class="header-colors-indigators">
              <div class="row row-cols-auto g-3">
                <div class="col">
                  <div class="indigator headercolor1" id="headercolor1"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor2" id="headercolor2"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor3" id="headercolor3"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor4" id="headercolor4"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor5" id="headercolor5"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor6" id="headercolor6"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor7" id="headercolor7"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor8" id="headercolor8"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
       <!--end switcher-->

  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="assets/js/pace.min.js"></script>
  <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
  <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
  <script src="assets/js/table-datatable.js"></script>
	
  <!--app-->
  <script src="assets/js/app.js"></script>
  
</body>

</html>

