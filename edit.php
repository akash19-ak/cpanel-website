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

function validate_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = preg_replace('!\s+!', ' ', $data);
  return $data;
}

$editid = validate_input($_GET['id']);

                                        $servername = "localhost";
                                        $username = "ssodl_enquiry21";
                                        $password = "UVNUC4,3LnqP";
                                        $dbname = "ssodl_enquiry21";
                                        
                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                          die("Connection failed: " . $conn->connect_error);
                                        }
                                        
                                        $sql = "SELECT * FROM enquiry21 where id=".$editid;
                                        $result = $conn->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                          // output data of each row
                                          while($row = $result->fetch_assoc()) {
                                              
                                              $OGname = $row['name'];
                                              $OGemail = $row['email'];
                                              $OGemail2 = $row['email2'];
                                              $OGphone = $row['phone'];
                                              $OGap = $row['alternate_phone'];
                                              $OGls = $row['lead_status'];
                                              $OGsalutation = $row['salutation'];
                                              $OGprogram = $row['program'];
                                              $OGcity = $row['city'];
                                              $OGq = $row['qualification'];
                                              $OGoccupation = $row['occupation'];
                                              $OGnote = $row['note'];
                                              
                                            
                                          }
                                        } else{
                                            echo 'something went wrong';
                                            die();
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
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
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
    </style>
   


  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
	<header class="top-header">        
        
      </header>
       <!--end top header-->
       
       

     
     <div class="text-center mt-5">
         <img src="https://www.ssodl.edu.in/images/SSODL-Logo.png" style="max-width:300px;margin:0 auto;">
         <br>
         <h5 style="font-size:18px;">Leads Data Export Tool by <span id='og-footer-logo-2021-dark'></span>
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
     
 

    <div class="container">
       <!--start content-->
       <main class="page-content">
           
            <form action="edit-backend.php?id=<?php echo $editid?>" method="post">
                
                <h4 class="text-center">Edit Lead #ID <?php echo $editid; ?></h4>
                
                <div class="row">
                    
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Lead Status</label>
                            <select name="lead-status" class="form-select" aria-label="Lead Status">
                              <option <?php if($OGls == "Open"){echo "selected";}?> value="open">Open</option>
                              <option <?php if($OGls == "in-process"){echo "selected";}?> value="in-process">In-Process</option>
                              <option <?php if($OGls == "closed"){echo "selected";}?> value="closed">Closed</option>
                            </select>
                          </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Salutation</label>
                            <select name="salutation" class="form-select" aria-label="Salutation">
                              <option <?php if($OGs == "Mr."){echo "selected";}?> value="Mr.">Mr.</option>
                              <option <?php if($OGs == "Mrs."){echo "selected";}?> value="Mrs.">Mrs.</option>
                            </select>
                          </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="name" name="name" class="form-control" id="exampleInputEmail1" value="<?php echo $OGname;?>" aria-describedby="emailHelp">
                          </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $OGemail;?>" aria-describedby="emailHelp">
                          </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email 2</label>
                        <input name="email2" class="form-control" id="exampleInputEmail1" value="<?php echo $OGemail2;?>" aria-describedby="emailHelp">
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                             <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Phone</label>
                        <input name="phone" class="form-control" id="exampleInputEmail1" value="<?php echo $OGphone;?>" aria-describedby="emailHelp">
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                        
                         
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alternate Phone</label>
                            <input name="alternate-phone" class="form-control" id="exampleInputEmail1" value="<?php echo $OGap;?>" aria-describedby="emailHelp">
                          </div>
                    </div>
                    <div class="col-md-6 col-12">
                        
                         
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Occupation</label>
                            <input name="occupation" class="form-control" id="exampleInputEmail1" value="<?php echo $OGoccupation;?>" aria-describedby="emailHelp">
                          </div>
                    </div>
                    <div class="col-md-6 col-12">
                        
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Qualification</label>
                            <input name="qualification" class="form-control" id="exampleInputEmail1" value="<?php echo $OGq;?>" aria-describedby="emailHelp">
                          </div>
                    </div>
                    <div class="col-md-6 col-12">
                        
          
           <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">City</label>
            <input name="city" class="form-control" id="exampleInputEmail1" value="<?php echo $OGcity;?>"  aria-describedby="emailHelp">
          </div>
                    </div>
                    
                    <div class="col-md-6 col-12">
                        
           <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Program <?php echo $OGprogram;?></label>
             <select name="program"   class="form-select" aria-label="Salutation">
             <option value="">Select Program</option>



              <option value="" disabled>Diploma</option>



              <option <?php if($OGprogram == "Hospital &amp; Healthcare Management"){echo "selected";}?>  value="Hospital &amp; Healthcare Management">Hospital &amp; Healthcare Management (DHHM)</option>



              <option <?php if($OGprogram == "Medico Legal Systems"){echo "selected";}?> value="Medico Legal Systems">Medico Legal Systems (DMLS)</option>



              <option <?php if($OGprogram == "Health Insurance Management"){echo "selected";}?> value="Health Insurance Management">Health Insurance Management (DHIM)</option>



              <option <?php if($OGprogram == "Clinical Research"){echo "selected";}?> value="Clinical Research">Clinical Research (DCR)</option>



              <option <?php if($OGprogram == "Quality Management of Hospital"){echo "selected";}?> value="Quality Management of Hospital">Quality Management of Hospital &amp; Healthcare Organization (DQMHHO) </option>



              <option <?php if($OGprogram == "Applied Nutrition &amp; Dietetics"){echo "selected";}?> value="Applied Nutrition &amp; Dietetics">Applied Nutrition &amp; Dietetics (DAND) </option>



              <option <?php if($OGprogram == "Medical Tourism"){echo "selected";}?> value="Medical Tourism">Medical Tourism (DMT) </option>



              <option <?php if($OGprogram == "Pharmacovigilance"){echo "selected";}?> value="Pharmacovigilance">Pharmacovigilance &amp; Clinical Data Management (DPVCDM) </option>



              <option <?php if($OGprogram == "Nursing Administration"){echo "selected";}?> value="Nursing Administration">Nursing Administration (DNA)</option>



              <option <?php if($OGprogram == "Diploma in Health Communication"){echo "selected";}?> value="Diploma in Health Communication">Diploma in Health Communication (DHC) </option>



              <option <?php if($OGprogram == "Diploma in Hospital Planning &amp; Design"){echo "selected";}?> value="Diploma in Hospital Planning &amp; Design">Diploma in Hospital Planning &amp; Design (DHPD) </option>



              <option  value="" disabled>Certificate Program</option>



              <option <?php if($OGprogram == "Medical Writing"){echo "selected";}?> value="Medical Writing">Medical Writing (CMW) </option>



              <option <?php if($OGprogram == "Disaster Management for Hospital"){echo "selected";}?> value="Disaster Management for Hospital">Disaster Management for Hospital &amp; Healthcare Organization (CDMHHO) </option>



              <option <?php if($OGprogram == "Hospital Infection Control"){echo "selected";}?> value="Hospital Infection Control">Hospital Infection Control &amp; Patient Safety (CHICPS) </option>



            </select>
          </div>
                    </div>
                    
                    <div class="col-md-6 col-12">
                        
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Note (Max. 50 characters)</label>
                            <input name="note" class="form-control" id="exampleInputEmail1" value="<?php echo $OGnote;?>" maxlength = "50" aria-describedby="emailHelp">
                          </div>
                    </div>
                    
                </div>
            
        
          
          
          
            
          
          
          
         
         
          <a href="show.php" style="    background: gray;
    color: #fff;
    padding: 10px;
    border-radius: 3px;">Cancel</a>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
           
       </main>
	</div>			
				

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

