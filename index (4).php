<?php
     $title = "SSODL: Symbiosis Online Programmes";
    $desc = "SSODL Pune provides Online Distance Learning Courses in India & Healthcare Courses in India.Which is designed to produce leaders in global healthcare.";
    $con = "https://ssodl.edu.in/";

   require ('include/header.php');
?>

<style>
    .hero-section{
      min-height: 180px;
      /*max-height: 600px;*/
    }
    
    .hero-section .owl-carousel .item img {
      width: 100%;
      height: auto;
      display: block;
      /*aspect-ratio: 16 / 9;*/
    }
    .hero-slider .position-absolute{
        z-index:1;
        left:0;
        right:0;
        top:50%;
        transform: translateY(-50%);
    }
    .course-item img {
        width: 100%;
    }

    .course-details h3,
    .course-details h3 a {
        font-size: 14px;
        color: #333;
        text-align: center;
    }
    .arrow2 {
        padding-top: 2px;
    }
    .hero-slider img{
        height: auto;
    }
    .event-section .carousel-item img{
        height: auto;
        width: 100%;
        max-height: 500px;
        object-fit:contain;
    }
    @keyframes colorChange {
        0% {
            color: red;
        }

        50% {
            color: white;
        }

        100% {
            color: red;
        }
    }

    .glow {
        animation: colorChange 1s infinite;
    }
    
</style>
<section class="hero-section position-relative w-100">
  <div class="d-md-block owl-carousel owl-theme hero-slider">
    <div class="item w-100 h-100">
        <img src="assets/images/banner/slider-3-412.webp" 
            srcset="assets/images/banner/slider-3-412.webp 422w, assets/images/banner/slider-3.webp 644w" 
            sizes="(max-width: 600px) 422px, 644px"
            alt="Symbiosis distance education courses" width="1920" height="600" fetchpriority="high" />
          <div class="container position-absolute ">
              <div class="slider-text text-center">
                <a href="https://symhealth.siu.edu.in/index" target="_blank">
                <h2 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">
                  An Online Degree as Credible as On-Campus
                </h2>
                <p class="wow cssanimation fadeInBottom" data-wow-delay="1s" style="font-size:26px !important">
                     - Powered by SSODL.
                </p>
                </a>
              </div>
          </div>
    </div>

    <div class="item w-100 h-100">
    <img src="assets/images/banner/slider-1-412.webp" 
        srcset="assets/images/banner/slider-1-412.webp 322w, assets/images/banner/slider-1.webp 644w" 
        sizes="(max-width: 600px) 322px, 644px"
        alt="Diploma in hospital and healthcare management" width="1920" height="600" fetchpriority="high" />
      <div class="container position-absolute">
          <div class="slider-text text-center ">
            <h2 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">
                Online Diploma & Certificate Programme
            </h2>
            <p class="wow cssanimation fadeInBottom" data-wow-delay="1s" style="font-size:26px !important">
                by Symbiosis School for Online and Digital Learning (SSODL)
            </p>
                <a data-toggle="modal" data-target="#healthcare" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Apply Now</a>
            <a href="#reg-form" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Register</a>
            
          </div>
      </div>
    </div>
    
    <div class="item w-100 h-100">
    <img src="assets/images/banner/slider-3.webp" alt="Symbiosis distance education courses" width="1920" height="600" fetchpriority="high" />
      <div class="container position-absolute ">
          <div class="slider-text text-center">
            <h2 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">
                Advance Your Career with Online Degrees (UG/PG)
            </h2>
            <p class="wow cssanimation fadeInBottom" data-wow-delay="1s" style="font-size:26px !important">
                from Symbiosis International (Deemed University)
            </p>
            <a href="https://enrollment.ssodl.edu.in/online/student_register" target="_blank" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Apply Now</a>
            <a href="#reg-form" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">Register</a>
          </div>
      </div>
    </div>

  </div>
</section>

<section class="py-4">
    <div class="container">
        <div class="row logsection-lg">
            <div class="col-lg-3 col-md-6 col-sm-12 px-0">
                <div class="p-2 d-flex align-items-center">
                    <img src="assets/images/logo/UGC_logo.png" alt="UGC entitled online mba, bba" class="img-fluid" loading="lazy" width="100" height="100" style="aspect-ratio: 1 / 1;" />
                    <p class="mx-1 p-2 mb-1 text-left">
                        <b> UGC</b> Entitled<br />(University Grants Commission of India)
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 px-0">
                <div class="p-2 d-flex align-items-center">
                    <img src="assets/images/logo/NAAC-logo.png" alt="naac accredited executive mba" class="img-fluid" loading="lazy" width="100" height="100" style="aspect-ratio: 1 / 1;" />
                    <p class="mx-1 p-2 mb-1">
                        Accredited with<br />NAAC Grade <b>A++</b>
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 px-0">
                <div class="p-2 d-flex align-items-center text-left">
                    <img src="assets/images/logo/AICTE-logo.png" alt="AICTE Approved online degree courses" class="img-fluid" width="100" height="100" loading="lazy" style="aspect-ratio: 1 / 1;" />
                    <p class="mx-1 p-2 mb-1">
                        Approved by <b>AICTE</b><br />
                        All India Council for Technical Education
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 px-0"
                style="display: flex; align-items: center; align-content: center">
                <div class="p-2 d-flex align-items-center">
                    <img src="assets/images/logo/NIRF-logo.png" alt="NIRT Ranked online degree courses" class="img-fluid" width="100" height="100" loading="lazy" style="aspect-ratio: 1 / 1;" />
                    <p class="mx-1 p-2 mb-1">
                        <b>Ranked 24<sup>th</sup></b> among<br />
                        Universities according to NIRF-2025
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="counter" class="counter-section container">
    <div class="container">
        <ul class="row counters">
            <li class="col-lg-4 col-sm-4 sm-padding">
                <div class="counter-content">
                    <i class="ti-user"></i>
                    <h3><span class="counter">95</span>Instructors</h3>
                </div>
            </li>
            <li class="col-lg-4 col-sm-4 sm-padding">
                <div class="counter-content">
                    <i class="ti-book"></i>
                    <h3><span class="counter">22</span>Unique Programmes</h3>
                </div>
            </li>
            <li class="col-lg-4 col-sm-4 sm-padding">
                <div class="counter-content">
                    <i class="ti-tag"></i>
                    <h3><span class="counter">20</span>Year of Excellence</h3>
                </div>
            </li>
            <!--<li class="col-lg-3 col-sm-6 sm-padding">
                        <div class="counter-content">
                            <i class="ti-crown"></i>
                            <h3><span class="counter">4950</span>Active Students</h3>
                        </div>
                    </li>-->
        </ul>
    </div>
</section>
<!-- Counter Section -->

<section class="about-section my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 xs-padding wow cssanimation fadeInLeft">
                <div class="about-content">
                    <h1 style="font-size: 32px;">SSODL</h1>
                    <h3><i>A Pinnacle of Online Education</i></h3>
                    <p>
                        The Symbiosis School for Online and Digital Learning, is an integral
                        part of the esteemed Symbiosis International (Deemed University)
                        (SIU). It specialises in providing recognised online undergraduate
                        and postgraduate degree programs, duly acknowledged by the UGC and
                        AICTE.
                    </p>
                    <p>
                        At SSODL, our programs are delivered through a cutting-edge online
                        and digital platform, ensuring that students acquire the same
                        caliber of skills, knowledge, and domain expertise as their
                        counterparts in traditional physical programs offered by Symbiosis.
                        We maintain the highest standards of academic rigor, boast
                        exceptional faculty, and prioritise a learner-centric approach to
                        outcome-based education.
                    </p>
                    <a href="about-organization.php" class="default-btn">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 wow cssanimation fadeInRight" data-wow-delay="0.5s">
                <div class="about-bg"></div>
            </div>
        </div>
    </div>
</section>
<!-- /#About Section -->

<section class="about-section about-2 padding" id="reg-form">
    <div class="container">
        <div class="row about-wrap">
            <div class="col-lg-7  xs-padding"></div>
            <div class="col-lg-5 col-md-12">
                <div class="reg-form">
                    <div class="form-heading">
                        <h3 style="font-size: 22px; font-weight: 600">Enquiry Form</h3>
                        <hr />
                    </div>
                    <form action="./submit-enquiry" method="post" name="frmenq" id="frmenq">
                        <div class="row">
                            <div class="form-group">
                                <label for="program">Select Program *</label>
                                <select class="form-control validateRequired enq-form" id="program" name="programs"
                                    required>
                                    <option value="">Select Program</option>
                                    <option style="color: #e6701a" value="" disabled>
                                        <strong>Management, Computer Studies & Humanities</strong>
                                    </option>
                                    <option value="Bachelor of Business Administration">
                                        Bachelor of Business Administration
                                    </option>
                                    <option value="Bachelor of Computer Application (BCA)">
                                        Bachelor of Computer Application (BCA)
                                    </option>
                                    <option value="Bachelor of Science  (Economic )Honours">
                                        Bachelor of Science (Economic )Honours
                                    </option>
                                    <option value="Master of Arts (Mass Communication)">
                                        Master of Arts (Mass Communication)
                                    </option>
                                    <option value="Master of Science (Computer Applications)">
                                        Master of Science (Computer Applications)
                                    </option>
                                    <option value="Master of Science (Data Science)">
                                        Master of Science (Data Science)
                                    </option>
                                    <option value="Master of Science (Economics)">
                                        Master of Science (Economics)
                                    </option>
                                    <option value="Master of Business Administration">
                                        Master of Business Administration
                                    </option>
                                    <option style="color: #e6701a" value="" disabled>
                                        <strong>HealthCare Diploma</strong>
                                    </option>
                                    <option value="Hospital & Healthcare Management">
                                        Hospital & Healthcare Management (DHHM)
                                    </option>
                                    <option value="Medico Legal Systems">
                                        Medico Legal Systems (DMLS)
                                    </option>
                                    <!--<option value="Health Insurance Management">-->
                                    <!--    Health Insurance Management (DHIM)-->
                                    <!--</option>-->
                                    <option value="Clinical Research">
                                        Clinical Research (DCR)
                                    </option>
                                    <option value="Quality Management of Hospital">
                                        Quality Management of Hospital & Healthcare Organization
                                        (DQMHHO)
                                    </option>
                                    <!--<option value="Applied Nutrition & Dietetics">-->
                                    <!--    Applied Nutrition & Dietetics (DAND)-->
                                    <!--</option>-->
                                    <!--<option value="Medical Tourism">Medical Tourism (DMT)</option>-->
                                    <!--<option value="Pharmacovigilance">-->
                                    <!--    Pharmacovigilance & Clinical Data Management (DPVCDM)-->
                                    <!--</option>-->
                                    <option value="Nursing Administration">
                                        Nursing Administration (DNA)
                                    </option>
                                    <option value="Diploma in Health Communication">
                                        Diploma in Health Communication (DHC)
                                    </option>
                                    <option value="Diploma in Hospital Planning & Design">
                                        Diploma in Hospital Planning & Design (DHPD)
                                    </option>
                                    <option style="color: #e6701a" value="" disabled>
                                        <strong>HealthCare Certificate Program</strong>
                                    </option>
                                    <option value="Medical Writing">Medical Writing (CMW)</option>
                                    <option value="Disaster Management for Hospital">
                                        Disaster Management for Hospital & Healthcare Organization
                                        (CDMHHO)
                                    </option>
                                    <option value="Hospital Infection Control">
                                        Hospital Infection Control & Patient Safety (CHICPS)
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="firstname" class="control-label">Name *</label>
                                <div class="validateField">
                                    <input placeholder="Name*" type="text"
                                        class="form-control validateRequired validateAlphaonly" id="firstname"
                                        name="firstname" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Email" class="control-label">Email ID *</label>
                                <div class="validateField">
                                    <input placeholder="Email ID*" type="text"
                                        class="form-control validateRequired validateEmail" id="Email" name="email"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 pl-0">
                                <div class="form-group">
                                    <label for="Phone-Number" class="control-label">Mobile *</label>
                                    <div class="validateField">
                                        <input placeholder="Mobile*" type="tel"
                                            class="form-control validateRequired validateNumber validateMobileNoLimit"
                                            id="Phone-Number" maxlength="10" name="phone" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 pr-0">
                                <div class="form-group">
                                    <label for="City" class="control-label">City *</label>
                                    <div class="validateField">
                                        <input placeholder="City*" type="text" class="form-control validateRequired"
                                            id="city" name="city" required />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-12 pl-0">
                                <div class="form-group">
                                    <label for="Qualification" class="control-label">Qualification *</label>
                                    <div class="validateField">
                                        <input type="text" placeholder="Qualification*"
                                            class="form-control validateRequired" id="Qualification"
                                            name="qualification" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 pr-0">
                                <div class="form-group">
                                    <label for="City" class="control-label">Education Level *</label>
                                    <div class="validateField">
                                        <select class="form-control validateRequired enq-form" id="Education"
                                            name="education" required>
                                            <option value="">Education Level</option>
                                            <option value="Graduate">Graduate</option>
                                            <option value="Post Graduate">Post Graduate</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12 text-center">
                                <div class="form-group">
                                    <div class="g-recaptcha d-flex justify-content-center"
                                        data-sitekey="6LdCcQ4nAAAAACEMG0NxfWylwBLsdc-iD15AwDew"></div>
                                    <label id="captcha-error" style="display: none">This field is required.</label>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12 text-center">
                                <button type="submit" value="Submit" class="btn btn-primary checkValidationBtn">
                                    Register Now
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="course-section bg-grey padding">
    <div class="container wow cssanimation fadeInBottom" data-wow-delay="0.5s">
        <div class="section-heading mb-40 text-center">
            <h2>Programmes Offered</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <ul class="right-sidebar" id="menu">
                    <li class="remove-active active" onclick="show('ans4',this)">
                        <img src="assets/img/right-arrow.png" class="text-black" alt="Right Arrow Image" />
                        <a class="tran3s activeli">PG Programmes</a>
                    </li>
                    <li class="remove-active" onclick="show('ans3',this)">
                        <img src="assets/img/right-arrow.png" class="text-black" alt="Right Arrow Image" />
                        <a class="tran3s activeli">UG Programmes</a>
                    </li>
                    <li class="remove-active" onclick="show('ans1',this)">
                        <img src="assets/img/right-arrow.png" class="text-black" alt="Right Arrow Image" />
                        <a class="tran3s activeli">One Year - Healthcare Diploma</a>
                    </li>
                    <li class="remove-active" onclick="show('ans2',this)">
                        <img src="assets/img/right-arrow.png" class="text-black" alt="Right Arrow Image" />
                        <a class="tran3s activeli">Six Month - Healthcare Certificate</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="col-md-12 xs-padding section active" id="ans4">
                    <div class="course-carousel2 owl-carousel">
                        <div class="course-item">
                            <div class="course-thumb">
                                <img src="assets/images/programmes1/Programs offered sscodl-12.webp" alt="course" width="100%" loading="lazy"/>
                            </div>
                            <div class="course-details">
                                <h3>
                                    <a href="Master-of-arts.php">Master of Arts (Mass Communication)</a>
                                </h3>
                            </div>
                            <div class="bg-overlay text-center">
                                <h3>Master of Arts (Mass Communication)</h3>
                                <a href="Master-of-arts.php" class="default-btn">Learn More</a>
                            </div>
                        </div>
                        <div class="course-item">
                            <div class="course-thumb">
                                <img  src="assets/images/programmes1/Programs offered sscodl-14.webp" alt="course" width="100%" loading="lazy" />
                            </div>
                            <div class="course-details">
                                <h3>
                                    <a href="Master-of-science(Data_Science).php">Master of Science (Data Science)</a>
                                </h3>
                            </div>
                            <div class="bg-overlay text-center">
                                <h3>Master of Science (Data Science)</h3>
                                <a href="Master-of-science(Data_Science).php" class="default-btn">Learn More</a>
                            </div>
                        </div>
                        <div class="course-item">
                            <div class="course-thumb">
                                <img  src="assets/images/programmes1/Programs offered sscodl-16.webp" alt="course" width="100%" loading="lazy" />
                            </div>
                            <div class="course-details">
                                <h3>
                                    <a href="Master-of-science(Economics).php">Master of Science (Economics)</a>
                                </h3>
                            </div>
                            <div class="bg-overlay text-center">
                                <h3>Master of Science (Economics)</h3>
                                <a href="Master-of-science(Economics).php" class="default-btn">Learn More</a>
                            </div>
                        </div>
                        <div class="course-item">
                            <div class="course-thumb">
                                <img src="assets/images/programmes/img3.webp" alt="course" width="100%" loading="lazy"/>
                            </div>
                            <div class="course-details">
                                <h3>
                                    <a href="Master-of-Science(Computer_Apllications).php">Master of Science (Computer
                                        Applications)</a>
                                </h3>
                            </div>
                            <div class="bg-overlay text-center">
                                <h3>Master of Science (Computer Applications)</h3>
                                <a href="Master-of-Science(Computer_Apllications).php" class="default-btn">Learn
                                    More</a>
                            </div>
                        </div>
                        <div class="course-item">
                            <div class="course-thumb">
                                <img src="assets/images/programmes1/Programs offered sscodl-13.webp" alt="course" width="100%" loading="lazy"/>
                            </div>
                            <div class="course-details">
                                <h3>
                                    <a href="Master-of-business-administration.php">Master of Business Administration
                                        (MBA)</a>
                                </h3>
                            </div>
                            <div class="bg-overlay text-center">
                                <h3>Master of Business Administration (MBA)</h3>
                                <a href="Master-of-business-administration.php" class="default-btn">Learn More</a>
                            </div>
                        </div>
                        <!-- /#item-5 -->
                    </div>
                </div>

                <div class="col-md-12 xs-padding section" id="ans2">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 sm-padding">
                            <div class="course-item">
                                <div class="course-thumb">
                                    <img  src="assets/images/programmes1/Programs offered sscodl-18.webp" alt="course" width="100%" loading="lazy"/>
                                </div>
                                <div class="course-details">
                                    <h3>
                                        <a href="medical-writing-course.php">Medical Writing (CMW)</a>
                                    </h3>
                                </div>
                                <div class="bg-overlay text-center">
                                    <h3>Medical Writing (CMW)</h3>
                                    <a href="medical-writing-course.php" class="default-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 sm-padding">
                            <div class="course-item">
                                <div class="course-thumb">
                                    <img  src="assets/images/programmes1/Programs offered sscodl-15.webp" alt="course" width="100%" loading="lazy" />
                                </div>
                                <div class="course-details">
                                    <h3>
                                        <a href="disaster-management-healthcare.php">Disaster Management for Hospital &
                                            Healthcare
                                            Organization (CDMHHO)</a>
                                    </h3>
                                </div>
                                <div class="bg-overlay text-center">
                                    <h3>
                                        Disaster Management for Hospital & Healthcare Organization
                                        (CDMHHO)
                                    </h3>
                                    <a href="disaster-management-healthcare.php" class="default-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 sm-padding">
                            <div class="course-item">
                                <div class="course-thumb">
                                    <img  src="assets/images/programmes1/Programs offered sscodl-17.webp" alt="course" width="100%" loading="lazy"/>
                                </div>
                                <div class="course-details">
                                    <h3>
                                        <a href="infection-control-course.php">Hospital Infection Control & Patient
                                            Safety (CHICPS)
                                        </a>
                                    </h3>
                                </div>
                                <div class="bg-overlay text-center align-middle">
                                    <h3>Hospital Infection Control & Patient Safety (CHICPS)</h3>
                                    <a href="infection-control-course.php" class="default-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 xs-padding section" id="ans3">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 sm-padding">
                            <div class="course-item">
                                <div class="course-thumb">
                                    <img src="assets/images/programmes1/bba.webp" alt="course" width="100%" loading="lazy"/>
                                </div>
                                <div class="course-details">
                                    <h3>
                                        <a href="bachelor-of-business-administration.php">Bachelor of Business Administration (BBA)</a>
                                    </h3>
                                </div>
                                <div class="bg-overlay text-center">
                                    <h3>Bachelor of Business Administration (BBA)</h3>
                                    <p>
                                        To groom the students and to provide comprehensive inputs
                                        and develop an all-round personality.
                                    </p>
                                    <a href="bachelor-of-business-administration.php" class="default-btn">Learn More</a>
                                </div>
                            </div>
                            <!-- /#item-1 -->
                        </div>
                        <div class="col-lg-4 col-md-6 sm-padding">
                            <div class="course-item">
                                <div class="course-thumb">
                                    <img src="assets/images/programmes1/bca-banner.webp" alt="course" width="100%" loading="lazy" />
                                </div>
                                <div class="course-details">
                                    <h3>
                                        <a href="bachelor-of-computer-application.php">Bachelor of Computer Application (BCA)</a>
                                    </h3>
                                </div>
                                <div class="bg-overlay text-center">
                                    <h3>Bachelor of Computer Application (BCA)</h3>
                                    <p>
                                        BCA offers the prequalification for professionals heading
                                        for smart career in the IT field, which measures up to
                                        international standards
                                    </p>
                                    <a href="bachelor-of-computer-application.php" class="default-btn">Learn More</a>
                                </div>
                            </div>
                            <!-- /#item-2 -->
                        </div>
                        <div class="col-lg-4 col-md-6 sm-padding">
                            <div class="course-item">
                                <div class="course-thumb">
                                    <img src="assets/images/programmes1/bsc-eco.webp" alt="course" width="100%" loading="lazy" />
                                </div>
                                <div class="course-details">
                                    <h3>
                                        <a href="BSc-Economics-Honours.php">Bachelor of Science (Economic) Honours</a>
                                    </h3>
                                </div>
                                <div class="bg-overlay text-center">
                                    <h3>Bachelor of Science (Economic) Honours</h3>
                                    <p>
                                        To enable the students to identify issues related to the
                                        economy, business, public policy, and society.
                                    </p>
                                    <a href="BSc-Economics-Honours.php" class="default-btn">Learn More</a>
                                </div>
                            </div>
                            <!-- /#item-3 -->
                        </div>
                    </div>
                </div>
                <div class="col-md-12 xs-padding section" id="ans1">
                    <div class="row">
                        <div id="course-carousel" class="course-carousel owl-carousel">
                            <div class="course-item">
                                <div class="course-thumb">
                                    <img  src="assets/images/programmes1/programs-10.webp" alt="Healthcare Course in India" width="100%" loading="lazy" />
                                    <!--<a class="enroll-btn" href="#">Book Now <i class="fa fa-plus"></i></a>-->
                                </div>
                                <div class="course-details">
                                    <h3>
                                        <a href="healthcare-course-india.php">Hospital & Healthcare Management
                                            (DHHM)</a>
                                    </h3>
                                </div>
                                <div class="bg-overlay text-center">
                                    <h3>Hospital & Healthcare Management (DHHM)</h3>
                                    <a href="healthcare-course-india.php" class="default-btn">Learn More</a>
                                </div>
                            </div>
                            <div class="course-item">
                                <div class="course-thumb">
                                    <img  src="assets/images/programmes1/programs-07.webp" alt="Diploma in Medico Legal Systems" width="100%" loading="lazy"/>
                                </div>
                                <div class="course-details">
                                    <h3>
                                        <a href="medico-legal-system.php">Medico Legal Systems (DMLS)</a>
                                    </h3>
                                </div>
                                <div class="bg-overlay text-center">
                                    <h3>Medico Legal Systems (DMLS)</h3>
                                    <a href="medico-legal-system.php" class="default-btn">Learn More</a>
                                </div>
                            </div>
                            <div class="course-item">
                                <div class="course-thumb">
                                    <img  src="assets/images/programmes1/programs-04.webp" alt="health insurance online course" width="100%" loading="lazy"/>
                                </div>
                                <div class="course-details">
                                    <h3>
                                        <a href="health-insurance-management.php">Health Insurance Management (DHIM)</a>
                                    </h3>
                                </div>
                                <div class="bg-overlay text-center">
                                    <h3>Health Insurance Management (DHIM)</h3>
                                    <a href="health-insurance-management.php" class="default-btn">Learn More</a>
                                </div>
                            </div>
                            <div class="course-item">
                                <div class="course-thumb">
                                    <img  src="assets/images/programmes1/programs-02.webp" alt="clinical research course" width="100%" loading="lazy"/>
                                </div>
                                <div class="course-details">
                                    <h3>
                                        <a href="clinical-research-courses-india.php">Clinical Research (DCR)</a>
                                    </h3>
                                </div>
                                <div class="bg-overlay text-center">
                                    <h3>Clinical Research (DCR)</h3>
                                    <a href="clinical-research-courses-india.php" class="default-btn">Learn More</a>
                                </div>
                            </div>
                            <div class="course-item">
                                <div class="course-thumb">
                                    <img  src="assets/images/programmes/img10.webp" alt="Hospital Quality Management Course" width="100%" loading="lazy"/>
                                </div>
                                <div class="course-details">
                                    <h3>
                                        <a href="hospital-quality-management-course.php">Quality Management of Hospital
                                            (DQMHHO)</a>
                                    </h3>
                                </div>
                                <div class="bg-overlay text-center">
                                    <h3>
                                        Quality Management of Hospital & Healthcare Organization
                                        (DQMHHO)
                                    </h3>
                                    <a href="hospital-quality-management-course.php" class="default-btn">Learn More</a>
                                </div>
                            </div>
                            <div class="course-item">
                                <div class="course-thumb">
                                    <img  src="assets/images/programmes1/programs-05.webp" alt="Dietitian Course Online" width="100%" loading="lazy"/>
                                </div>
                                <div class="course-details">
                                    <h3>
                                        <a href="nutrition-dietetics-courses.php">Applied Nutrition & Dietetics
                                            (DAND)</a>
                                    </h3>
                                </div>
                                <div class="bg-overlay text-center">
                                    <h3>Applied Nutrition & Dietetics (DAND)</h3>
                                    <a href="nutrition-dietetics-courses.php" class="default-btn">Learn More</a>
                                </div>
                            </div>
                            <div class="course-item">
                                <div class="course-thumb">
                                    <img  src="assets/images/programmes1/programs-08.webp" alt="Medical Tourism Courses" width="100%" loading="lazy"/>
                                </div>
                                <div class="course-details">
                                    <h3>
                                        <a href="medical-tourism-courses.php">Medical Tourism (DMT)</a>
                                    </h3>
                                </div>
                                <div class="bg-overlay text-center">
                                    <h3>Medical Tourism (DMT)</h3>
                                    <a href="medical-tourism-courses.php" class="default-btn">Learn More</a>
                                </div>
                            </div>
                            <div class="course-item">
                                <div class="course-thumb">
                                    <img  src="assets/images/programmes/img13.webp" alt="clinical data management course" width="100%" loading="lazy"/>
                                </div>
                                <div class="course-details">
                                    <h3>
                                        <a href="clinical-data-management-course.php">Pharmacovigilance & Clinical Data
                                            Management (DPVCDM)</a>
                                    </h3>
                                </div>
                                <div class="bg-overlay text-center">
                                    <h3>Pharmacovigilance & Clinical Data Management (DPVCDM)</h3>
                                    <a href="clinical-data-management-course.php" class="default-btn">Learn More</a>
                                </div>
                            </div>
                            <div class="course-item">
                                <div class="course-thumb">
                                    <img  src="assets/images/programmes1/programs-01.webp" alt="diploma in nursing" width="100%" loading="lazy"/>
                                </div>
                                <div class="course-details">
                                    <h3>
                                        <a href="nursing-administration-course.php">Nursing Administration (DNA)</a>
                                    </h3>
                                </div>
                                <div class="bg-overlay text-center">
                                    <h3>Nursing Administration (DNA)</h3>
                                    <a href="nursing-administration-course.php" class="default-btn">Learn More</a>
                                </div>
                            </div>
                            <div class="course-item">
                                <div class="course-thumb">
                                    <img  src="assets/images/programmes1/programs-03.webp" alt="Health Communication Course" width="100%" loading="lazy"/>
                                </div>
                                <div class="course-details">
                                    <h3>
                                        <a href="health-communication-course.php">Health Communication (DHC)</a>
                                    </h3>
                                </div>
                                <div class="bg-overlay text-center">
                                    <h3>Health Communication (DHC)</h3>
                                    <a href="health-communication-course.php" class="default-btn">Learn More</a>
                                </div>
                            </div>
                            <div class="course-item">
                                <div class="course-thumb">
                                    <img  src="assets/images/programmes1/programs-06.webp" alt="hospital planning and design" width="100%" loading="lazy"/>
                                </div>
                                <div class="course-details">
                                    <h3>
                                        <a href="hospital-planning-design-course.php">Hospital Planning and Design
                                            (DHPD)</a>
                                    </h3>
                                </div>
                                <div class="bg-overlay text-center">
                                    <h3>Hospital Planning and Design (DHPD)</h3>
                                    <a href="hospital-planning-design-course.php" class="default-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /#Course-Section -->
<section class="event-section bg-grey padding">
    <div class="container wow cssanimation fadeInBottom" data-wow-delay="0.5s">
        <div class="section-heading mb-40 text-center">
            <h2>Recent Events</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <div class="carousel-indicators text-black">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
                         <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>
                    </div>
                
                    <div class="carousel-inner">
                        
                        
                        <div class="carousel-item active" data-bs-interval="2000">
    <img src="assets/images/campus-connect-announcmenr.webp" class="d-block w-100" alt="Announcements | SSODL" loading="lazy"/>
</div>

<div class="carousel-item" data-bs-interval="2000">
    <img src="assets/images/Idea.jpeg" class="d-block w-100" alt="Announcements | SSODL" loading="lazy"/>
    <div class="text-center">
        <h3>Idea Symposium 2026</h3>
    </div>
</div>

<div class="carousel-item" data-bs-interval="2000">
    <img src="assets/images/Succession.jpeg" class="d-block w-100" alt="Announcements | SSODL" loading="lazy"/>
    <div class="text-center">
        <h3>Guest Lecture - Succession Planning & Wealth Transfer</h3>
    </div>
</div>

<div class="carousel-item" data-bs-interval="2000">
    <img src="assets/images/ssodl announcement.jpeg" class="d-block w-100" alt="Announcements | SSODL" loading="lazy"/>
</div>

<div class="carousel-item" data-bs-interval="2000">
    <img src="assets/images/4thFlyer_Ravi.jpeg" class="d-block w-100" alt="Announcements | SSODL" loading="lazy"/>
</div>

<div class="carousel-item" data-bs-interval="2000">
    <img src="assets/images/ai-blockchain.webp" class="d-block w-100" alt="Announcements | SSODL" loading="lazy"/>
</div>

<div class="carousel-item" data-bs-interval="2000">
    <img src="assets/images/22 March Session Creative.jpeg" class="d-block w-100" alt="Announcements | SSODL" loading="lazy"/>
</div>

<div class="carousel-item" data-bs-interval="2000">
    <img src="assets/images/A Conversation with Meeta Kanhere.jpeg" class="d-block w-100" alt="Announcements | SSODL" loading="lazy"/>
</div>

<div class="carousel-item" data-bs-interval="2000">
    <img src="assets/images/Navigating Product.jpeg" class="d-block w-100" alt="Announcements | SSODL" loading="lazy"/>
</div>

<div class="carousel-item" data-bs-interval="2000">
    <img src="assets/images/Budget Session 14 Feb.jpeg" class="d-block w-100" alt="Announcements | SSODL" loading="lazy"/>
</div>

<div class="carousel-item" data-bs-interval="2000">
    <img src="assets/images/Doing the Right Thing.JPG" class="d-block w-100" alt="Announcements | SSODL" loading="lazy"/>
    <div class="text-center">
        <h3>Doing the Right Thing : A Conversation on Ethics Leadership and Long - Term Impact</h3>
    </div>
</div>
                        
                        
                       <!-- <div class="carousel-item active" data-bs-interval="2000">
                            <img src="assets/images/Worksohop-June2024.webp" class="d-block w-100" alt="symbiosis pune online courses" loading="lazy"/>
                            <div class="text-center">
                                <h3>Topic: Engaging Workshop on Brand Storytelling: A strategic perspective - Vishal Hazare<br>
                                Date & Time: Jun 30, 2024 11:00 AM - 01:00 PM India 
                                </h3>
                            </div>
                        </div>
                
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="assets/images/SM-LaxmiSrini-SSODL.webp" class="d-block w-100" alt="symbiosis pune online courses" loading="lazy" />
                        </div>
                
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="assets/images/Adv. Omkar Ghate_new (1).webp" class="d-block w-100" alt="Anil Lamba" loading="lazy"/>
                        </div>
                
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="assets/images/collage.webp" class="d-block w-100" alt="symbiosis pune online courses" loading="lazy"/>
                        </div>
                
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="assets/images/Vikas Agarwal Flyer.webp" class="d-block w-100" alt="symbiosis online courses" loading="lazy"/>
                        </div>
                
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="assets/images/image_Anil_Lamba.webp" class="d-block w-100" alt="Anil Lamba" loading="lazy"/>
                            <div class="text-center">
                                <h3>Online Guest Session on "Romancing the balancing Sheet" By Dr Anil Lamba</h3>
                            </div>
                        </div>
                
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="assets/images/Dr Margi T Bhatt (1).webp" class="d-block w-100" alt="Event" loading="lazy"/>
                            <div class="text-center">
                                <h3>Assessment of Quality in Intensive Care Unit (ICU)</h3>
                            </div>
                        </div>
                
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="assets/images/Guest Session.webp" class="d-block w-100" alt="Event" loading="lazy"/>
                            <div class="text-center">
                                <h3>UPCOMING EVENT</h3>
                            </div>
                        </div>
                
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="assets/images/Alumni Lecture flyer.PNG" class="d-block w-100" alt="Medical Writing Session Flyer"loading="lazy"/>
                            <div class="text-center">
                                <h3>PRESENT EVENT</h3>
                            </div>
                        </div>
                
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="assets/images/image (3) (1).webp" class="d-block w-100" alt="Dr Abhishek Behl" loading="lazy"/>
                            <div class="text-center">
                                <h3>PAST EVENT</h3></div>
                        </div>-->
                    </div>
                
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" aria-label="Previous">
                        <span class="carousel-control-prev-icon text-black" aria-hidden="true" style="background-color:#00000060;border-radius:50%"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" aria-label="Next">
                        <span class="carousel-control-next-icon text-black" aria-hidden="true" style="background-color:#00000060;border-radius:50%"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="reg-section">
    <div class="container">
        <div class="row reg-wrap">
            <div class="col-md-6 text-white">
                <h2 class="text-white">THE SSODL ADVANTAGE</h2>
                <br />
                <p>
                    Symbiosis School for Online and Digital Learning (SSODL) is an
                    esteemed division of Symbiosis International (Deemed University)
                    (SIU). SSODL provides online undergraduate and postgraduate degree
                    programs that are authorised by the UGC and accredited by the AICTE.
                    The programs delivered by us employ online and digital methodologies
                    to offer the same caliber of skills, knowledge, and domain expertise
                    as the traditional programs offered by Symbiosis.
                </p>
                <p>
                    Our online programs maintain a high standard of academic rigor,
                    feature exceptional faculty, and prioritise learner-centric
                    outcome-based education. Additionally, SSODL provides the added
                    benefit of flexible, self-paced learning.
                </p>
            </div>
            <div class="col-md-6">
                <div class="list-type1">
                    <ol class="typelist" style="margin: 20px 30px !important">
                        <br />
                        <li class="m-l-10 wow cssanimation fadeInUp">
                            <button type="button" class="btn btn-info btn-lg btnblock">Dynamic Learning
                                    Management System

                            </button>
                        </li>
                        <li class="m-l-20 wow cssanimation fadeInUp">
                            <button type="button" class="btn btn-info btn-lg btnblock">
                                Qualified Faculty
                            </button>
                        </li>

                        <li class="m-l-30 wow cssanimation fadeInUp">
                            <button type="button" class="btn btn-info btn-lg btnblock">
                                Contemporary Curriculum
                            </button>
                        </li>
                        <li class="m-l-40 wow cssanimation fadeInUp">
                            <button type="button" class="btn btn-info btn-lg btnblock">Industry Connect Through
                                    Guest Session

                            </button>
                        </li>

                        <li class="m-l-50 wow cssanimation fadeInUp">
                            <button type="button" class="btn btn-info btn-lg btnblock list-xs">
                                Interdisciplinary Learning
                            </button>
                        </li>

                        <li class="m-l-60 wow cssanimation fadeInUp">
                            <button type="button" class="btn btn-info btn-lg btnblock">
                                Peer Learning
                            </button>
                        </li>
                        <li class="m-l-70 wow cssanimation fadeInUp">
                            <button type="button" class="btn btn-info btn-lg btnblock">
                                51 yr Legacy of Symbiosis
                            </button>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="video-cta wow cssanimation fadeInBottom" data-wow-delay="0.5s">
    <div class="video-content-wrapper" style="background-image:url(assets/images/bg-testi.svg);">
        <div class="container">
            <div class="video-content text-center">
                <h2>STUDENT TESTIMONIALS</h2>
                <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
                  
                    <div class="testimonial-item text-center">
                        <img loading="lazy" src="assets/images/testimonial/Devrukhkar-Yash-Santosh-Shilpa.jpg" alt="Shailendra Kumar" width="90" height="90"/>
                        <h4>Yash Santosh Devrukhkar<span>MBA</span></h4>
                        <p>Enrolling in the online MBA course was one of the best decisions <b><a style="cursor:pointer" data-toggle="modal" data-target="#myModalst8">More...</a></b></p></br>
                        <ul class="rattings">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                    
                    <div class="testimonial-item text-center">
                        <img loading="lazy" src="assets/images/testimonial/Navjot-Kaur.jpg" alt="Shailendra Kumar" width="90" height="90"/>
                        <h4>Navjot Kaur<span>MBA</span></h4>
                        <p>As a software engineer with four years of experience, the MBA program <b><a style="cursor:pointer" data-toggle="modal" data-target="#myModalst9">More...</a></b></p></br>
                        <ul class="rattings">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                    
                    <div class="testimonial-item text-center">
                        <img loading="lazy" src="assets/images/testimonial/Uday-Sankar-Das.jpg" alt="Shailendra Kumar" width="90" height="90"/>
                        <h4>Uday Sankar Das<span>MBA</span></h4>
                        <p>As a working professional, jumping into an MBA program felt daunting. <b><a style="cursor:pointer" data-toggle="modal" data-target="#myModalst10">More...</a></b></p></br>
                        <ul class="rattings">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                    
                    <div class="testimonial-item text-center">
                        <img loading="lazy" src="assets/images/testimonial/Shailendra Kumar.jpg" alt="Shailendra Kumar" width="90" height="90"/>
                        <h4>Shailendra Kumar<span>MBA in Operation Management</span></h4>
                        <p>Enrolling in the MBA classes at Symbiosis School for Online and <b><a style="cursor:pointer" data-toggle="modal" data-target="#myModalst1">More...</a></b></p></br>
                        <ul class="rattings">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                    
                    <div class="testimonial-item text-center">
                        <img loading="lazy" src="assets/images/testimonial/abdulrahman ahmad.jpg" alt="Abdulrahman Ahmad" width="90" height="90"/>
                        <h4>Abdulrahman Ahmad<span>BSC Economics</span></h4>
                        <p>I'm delighted to share my heartfelt testimonial about my experience <b><a style="cursor:pointer" data-toggle="modal" data-target="#myModalst2">More...</a></b></p></br>
                        <ul class="rattings">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                    
                    <div class="testimonial-item text-center">
                        <img loading="lazy" src="assets/images/testimonial/mulenga muma.jpg" alt="Mulenga Muma" width="90" height="90" />
                        <h4>Mulenga Muma<span>BCA</span></h4>
                        <p>I am delighted to share my extraordinary experience attending <b><a style="cursor:pointer" data-toggle="modal" data-target="#myModalst3">More...</a></b></p></br>
                        <ul class="rattings">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                    
                    <div class="testimonial-item text-center">
                        <img loading="lazy" src="assets/images/testimonial/richard borkey.jpg" alt="Richard Borkey" width="90" height="90"/>
                        <h4>Richard Borkey<span>MSc. Data Science</span></h4>
                        <p>Hello, my name is Richard Borkey, and I'm writing to express <b><a style="cursor:pointer" data-toggle="modal" data-target="#myModalst4">More...</a></b></p></br>
                        <ul class="rattings">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                    
                    <div class="testimonial-item text-center">
                        <img loading="lazy" src="assets/images/testimonial/anjan. a.jpg"alt="Anjan. A" width="90" height="90"/>
                        <h4>Anjan. A<span>MBA Online</span></h4>
                        <p>Anjan Ananthakrishnan Vice President, Northern <b><a style="cursor:pointer" data-toggle="modal" data-target="#myModalst5">More...</a></b></p></br>
                        <ul class="rattings">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                    
                    <div class="testimonial-item text-center">
                        <img loading="lazy" src="assets/images/testimonial/KalyaniVishwasShinde.webp" alt="Ms. Kalyani Vishwas Shinde" width="90" height="90"/>
                        <h4>Ms. Kalyani Vishwas Shinde<span>Student</span></h4>
                        <p>"Very nice staff & Management system."<br /><br /><br /></p>
                        <ul class="rattings">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                    <!-- Review-1-->
                    <div class="testimonial-item text-center">
                        <img loading="lazy" src="assets/images/testimonial/DrIndrayani_S_Sawargaonkar.webp" alt="Dr. Indrayani S Sawargaonkar" width="90" height="90" />
                        <h4>Dr. Indrayani S Sawargaonkar<span>Consultant</span></h4>
                        <p>
                            "Good programme. <br />Study material should be improved."<br /><br />
                        </p>
                        <ul class="rattings">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                    <!-- Review-2-->
                    <div class="testimonial-item text-center">
                        <img loading="lazy" src="assets/images/testimonial/DrAshwinSathe.webp" alt="Dr. Ashwin Sathe" width="90" height="90"/>
                        <h4>Dr. Ashwin Sathe<span>SR in Orthopaedics</span></h4>
                        <p>
                            "Excellent Notes with excellent<br />
                            explanation"<br /><br />
                        </p>
                        <ul class="rattings">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                    <!-- Review-3-->
                    <div class="testimonial-item text-center">
                        <img loading="lazy" src="assets/images/testimonial/Mr_Gaurav_Kothawade.webp" alt="Mr. Gaurav Kothawade" width="90" height="90"/>
                        <h4>
                            Mr. Gaurav Kothawade<span>Infection Control Nurse (ICN)</span>
                        </h4>
                        <p>
                            "It is very good programme and it has<br />
                            improved my knowledge and helped me<br />
                            to improve my skills as well."
                        </p>
                        <ul class="rattings">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                    <!-- Review-4-->
                    <div class="testimonial-item text-center">
                        <img loading="lazy" src="assets/images/testimonial/Ms.ArchanaSakpal.webp" alt="Ms. Archana Sakpal" width="90" height="90"/>
                        <h4>Ms. Archana Sakpal<span>Assistant Manger Radiology</span></h4>
                        <p>
                            "My experience was very good, <br />very cooperative team,
                            <br />Thank you so much."
                        </p>
                        <ul class="rattings">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="testimonial-item text-center">
                        <img loading="lazy" src="assets/images/testimonial/MrManoj_Kumar.webp" alt="Mr. Manoj Kumar" width="90" height="90"/>
                        <h4>Mr. Manoj Kumar<span>Nursing Supervisor</span></h4>
                        <p>
                            "All the help and guidance I needed was provided to me time to
                            time. The faculty is very helpful and professional."
                        </p>
                        <ul class="rattings">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                    <!-- <div class="testimonial-item text-center">-->
                    <!--    <img loading="lazy" src="assets/images/testimonial/Urvija-Srivastava.jpg" alt="Shailendra Kumar" width="90" height="90"/>-->
                    <!--    <h4>Urvija Srivastava <span>MBA</span></h4>-->
                    <!--    <p>SSODL's Online MBA: Learning on My Time, with Stellar Resources <b><a style="cursor:pointer" data-toggle="modal" data-target="#myModalst6">More...</a></b></p></br>-->
                    <!--    <ul class="rattings">-->
                    <!--        <li><i class="fa fa-star"></i></li>-->
                    <!--        <li><i class="fa fa-star"></i></li>-->
                    <!--        <li><i class="fa fa-star"></i></li>-->
                    <!--        <li><i class="fa fa-star"></i></li>-->
                    <!--        <li><i class="fa fa-star"></i></li>-->
                    <!--    </ul>-->
                    <!--</div>-->
                    
                </div>
                <a href="student-testimonials.php" class="default-btn mt-4">Student Testimonial Videos - Click Here</a>
            </div>
        </div>
    </div>
</section>
<!-- Video Section -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog model-xs">
        <div class="modal-content"
            style=" height: 550px!important;width: 40%;background: linear-gradient(rgba(179, 166, 166, 0.8),rgba(0,0,0,0.8)),  background-size: cover;">
            <div class="modal-header" style="border: none;">
                <button type="button" class="close" style="color:#000!important;" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <!--<a href="https://symbiosiscollege.edu.in/fyadmission " target="_blank">-->
                            <!--    <img src="assets/images/UG-Merit-List-2023-24 Main.jpg" style="width: 100%;">-->
                            <!--    </a>                   -->
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<!--karan-->

<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog 
    -xs">
        <div class="modal-content"
            style=" height: 550px!important;width: 40%;background: linear-gradient(rgba(179, 166, 166, 0.8),rgba(0,0,0,0.8)),  background-size: cover;">
            <div class="modal-header" style="border: none;">
                <button type="button" class="close" style="color:#000!important;" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <!--<a href="https://symbiosiscollege.edu.in/pgadmission" target="_blank"><img src="assets/images/UG Merit List 2023-24.jpg" style="width: 100%;"  ></a>-->
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!---->
<div class="modal fade" id="myModalst1" role="dialog" style="top:15%;">
    <div class="modal-dialog model-xs">
        <div class="modal-content"
            style="background: linear-gradient(rgba(179, 166, 166, 0.8),rgba(0,0,0,0.8)),  background-size: cover; overflow-y: auto;">
            <div class="modal-header" style="border: none;">
                <h4>Shailendra Kumar</h4>
                <button type="button" class="close" style="color:#000!important;" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Enrolling in the MBA classes at Symbiosis School for Online and Digital Learning (SSODL) has been a transformative experience that exceeded my expectations. The faculty's professionalism and expertise, coupled with their practical insights, provided a comprehensive understanding of the industrial and business landscape. The top-notch online learning platform facilitated seamless interaction and collaborative learning with fellow students. The personalized attention and support from the faculty and staff is commendable, ensuring timely guidance and feedback. The program's emphasis on practical application through case studies, simulations, and industry projects equipped us with valuable hands-on experience and problem-solving skills. The strong alumni network created networking and mentorship opportunities, enhancing the overall experience. I am sincerely grateful to SSODL for the exceptional learning journey and their unwavering commitment.</p>
            </div>
        </div>
    </div>
</div>

<!---->
<!---->
<div class="modal fade" id="myModalst2" role="dialog" style="top:15%;">
    <div class="modal-dialog model-xs">
        <div class="modal-content"
            style="background: linear-gradient(rgba(179, 166, 166, 0.8),rgba(0,0,0,0.8)),  background-size: cover; overflow-y: auto;">
            <div class="modal-header" style="border: none;">
                <h4>Abdulrahman Ahmad</h4>
                <button type="button" class="close" style="color:#000!important;" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>I'm delighted to share my heartfelt testimonial about my experience with SSODL and how it transformed my life. My name is Abdulrahman Ahmad, and I had the incredible opportunity to enroll in SSODL last year through the iLearn scholarship program. This scholarship gave me the chance to pursue my dream course, Economics. When I first learned about SSODL, I was filled with excitement and anticipation. The thought of studying Economics, a subject I had always been passionate about, under such a prestigious institution was a dream come true. Little did I know that this experience would surpass my wildest expectations. From the moment I started my journey with SSODL, I was blown away by the quality of education and support provided. The instructors were not only highly knowledgeable but also deeply passionate about their subjects. Their dedication to teaching and their willingness to go the extra mile to ensure our understanding was truly inspiring. The curriculum itself was comprehensive and well-structured. It covered a wide range of topics in Economics, from microeconomics to macroeconomics, giving me a solid foundation in the field. The coursework challenged me intellectually and encouraged me to think critically, helping me develop a deeper understanding of the subject matter. What truly sets SSODL apart is the sense of community and support that permeates every aspect of the program. Through my time at SSODL, I not only gained valuable knowledge and skills in Economics but also grew as an individual. The program instilled in me a sense of confidence and determination, empowering me to pursue my goals fearlessly. As I reflect on my experience with SSODL, I can confidently say that it has been a life-changing journey. It has opened doors for me, expanded my horizons, and equipped me with the tools I need to make a meaningful impact in the field of Economics. I wholeheartedly recommend SSODL to anyone seeking a transformative educational experience. Whether you're pursuing your dream course or looking to enhance your knowledge in a specific field, SSODL provides an exceptional learning environment that nurtures growth and fosters success. Thank you, SSODL, for giving me the opportunity to pursue my passion and for the invaluable lessons and memories I will carry with me forever. Sincerely, Abdulrahman Ahmad</p>
            </div>
        </div>
    </div>
</div>

<!---->
<div class="modal fade" id="myModalst3" role="dialog" style="top:15%;">
    <div class="modal-dialog model-xs">
        <div class="modal-content"
            style="background: linear-gradient(rgba(179, 166, 166, 0.8),rgba(0,0,0,0.8)),  background-size: cover;overflow-y: auto;">
            <div class="modal-header" style="border: none;">
                <h4>Mulenga Muma</h4>
                <button type="button" class="close" style="color:#000!important;" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>I am delighted to share my extraordinary experience attending Symbiosis School of Digital Learning (SSODL). Choosing SSODL was undoubtedly one of the best decisions I made for my academic and professional growth. The moment I stepped into the virtual campus, I was welcomed by a vibrant and inclusive community of learners, faculty, and staff. The curriculum at SSODL is meticulously designed, catering to the dynamic demands of the digital age. The courses offered provided me with a comprehensive understanding of the various aspects of digital learning, equipping me with valuable skills and knowledge. The faculty members are industry experts who imparted their practical insights, making the learning process engaging and meaningful. The online learning platform utilized by SSODL was seamless, intuitive, and interactive, fostering effective communication and collaboration among students. The frequent webinars, workshops, and guest lectures enriched my understanding and exposed me to diverse perspectives. Moreover, SSODL's commitment to holistic development is commendable. They offer numerous opportunities for networking, internships, and industry exposure, preparing students for the real-world challenges. Overall, my experience at Symbiosis School of Digital Learning has been transformative. I am immensely grateful for the invaluable education, support, and opportunities I received, which have propelled my career in the digital landscape. SSODL truly stands as a pioneering institution that nurtures and empowers students to thrive in the digital era.</p>
            </div>
        </div>
    </div>
</div>

<!---->
<div class="modal fade" id="myModalst4" role="dialog" style="top:15%;">
    <div class="modal-dialog model-xs">
        <div class="modal-content"
            style="background: linear-gradient(rgba(179, 166, 166, 0.8),rgba(0,0,0,0.8)),  background-size: cover;overflow-y: auto;">
            <div class="modal-header" style="border: none;">
                <h4>Richard Borkey</h4>
                <button type="button" class="close" style="color:#000!important;" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Hello, my name is Richard Borkey, and I'm writing to express how much I've enjoyed the program in which I'm currently enrolled. I was granted admission to Symbiosis International University to complete a two-year MSc in Data Science program. This chance has been incredible and completely changed my life. I received a full scholarship from the Indian government and the Ministry of External Affairs to follow my passion. God bless you all. The program's course materials are comprehensive and presented in a way that is very simple to understand. Our instructors are experts in their fields and possess the ability to easily explain even the most difficult concepts. I now have a thorough understanding of the most recent and important trends, techniques, and business strategies in the data science sector thanks to the course. Throughout the program, the instructors and staff have been very supportive, offering advice and assistance when I needed it. The support and online learning tools that were given to us were also excellent. I had the freedom to study at my own speed. Overall, I highly recommend this course and the university (Symbiosis International University) to anyone who is looking to expand their knowledge in the field of Data Science. You will succeed in your profession with the assistance of this institution's top-notch teachers and available resources. Thank you.</p>
            </div>
        </div>
    </div>
</div>

<!---->
<div class="modal fade" id="myModalst5" role="dialog" style="top:15%;">
    <div class="modal-dialog model-xs">
        <div class="modal-content"
            style="background: linear-gradient(rgba(179, 166, 166, 0.8),rgba(0,0,0,0.8)),  background-size: cover;overflow-y: auto;">
            <div class="modal-header" style="border: none;">
                <h4>Anjan. A</h4>
                <button type="button" class="close" style="color:#000!important;" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Anjan Ananthakrishnan Vice President, Northern Trust, I am writing this testimonial to express my heartfelt appreciation for the outstanding experience I had during my enrollment in the SSODL Online MBA program. The program has not only equipped me with invaluable knowledge and skills but has also provided exceptional support throughout my academic journey. I would like to extend a special mention to Mrs. Parimala Veluvalli, the Director of SSODL, for her exemplary guidance and dedication. From the moment I embarked on this educational endeavor, I was greeted with professionalism and warmth. The online platform provided by SSODL was seamless and user-friendly, making it incredibly convenient for me to access course materials, engage with faculty and fellow students, and complete Internal assessments. The flexibility offered by the program allowed me to balance my personal and professional commitments without compromising on the quality of education. What truly sets SSODL apart is the remarkable faculty members who are subject matter experts and industry practitioners. Their extensive knowledge, combined with their passion for teaching, created a dynamic and intellectually stimulating environment. The interactive virtual classrooms fostered meaningful discussions, enabling me to gain insights from diverse perspectives and apply them to real-world scenarios. The faculty's availability and responsiveness to student queries and concerns further enhanced the learning experience. I would like to express my deepest gratitude to Mrs. Parimala Veluvalli for her exceptional leadership and unwavering support throughout my academic journey. Her commitment to student success is evident in her proactive approach to addressing our needs. Mrs. Parimala's open-door policy and willingness to listen to our feedback and provide guidance were invaluable. Her vast industry experience and insights have been instrumental in shaping my understanding of business concepts and their practical applications. Under her direction, the SSODL Online MBA program is going to reach greater heights. The support services provided by SSODL were exemplary. The administrative staff was always prompt, friendly, and efficient in addressing any logistical or administrative concerns. The robust online library resources likenthe SLM and the discussion forums facilitated in-depth study and enriched my learning experience. Furthermore, the networking opportunities provided by the program helped me establish valuable connections with fellow students and alumni, creating a strong professional network that extends beyond the classroom. The SSODL Online MBA program has undoubtedly exceeded my expectations, and I am proud to become an alumnus of this esteemed institution. The knowledge and skills I have gained through this program will significantly contributed to my professional growth and will surely open doors to new opportunities. I would wholeheartedly recommend the SSODL Online MBA program to anyone seeking a comprehensive, flexible, and enriching educational experience. Once again, I would like to extend my sincerest appreciation to Mrs. Parimala Veluvalli, the faculty, and the entire SSODL team for their unwavering commitment to excellence. I am grateful for the opportunity to be a part of this exceptional learning community and will always cherish the memories and lessons gained as I continue my learning journey at SSODL. Thank you for making my educational journey an extraordinary one. Yours sincerely, Anjan Ananthakrishnan</p>
               <!-- <p>Anjan Ananthakrishnan Assistant Vice President, Northern Trust 9008788799 anjan.ananth@gmail.com Registration Number - 23029141009 Subject: Testimonial for the SSODL Online MBA Program - Anjan A Dear SSODL Team, I am writing this testimonial to express my heartfelt appreciation for the outstanding experience I had during my enrollment in the SSODL Online MBA program. The program has not only equipped me with invaluable knowledge and skills but has also provided exceptional support throughout my academic journey. I would like to extend a special mention to Mrs. Parimala Veluvalli, the Director of SSODL, for her exemplary guidance and dedication. From the moment I embarked on this educational endeavor, I was greeted with professionalism and warmth. The online platform provided by SSODL was seamless and user-friendly, making it incredibly convenient for me to access course materials, engage with faculty and fellow students, and complete Internal assessments. The flexibility offered by the program allowed me to balance my personal and professional commitments without compromising on the quality of education. What truly sets SSODL apart is the remarkable faculty members who are subject matter experts and industry practitioners. Their extensive knowledge, combined with their passion for teaching, created a dynamic and intellectually stimulating environment. The interactive virtual classrooms fostered meaningful discussions, enabling me to gain insights from diverse perspectives and apply them to real-world scenarios. The faculty's availability and responsiveness to student queries and concerns further enhanced the learning experience. I would like to express my deepest gratitude to Mrs. Parimala Veluvalli for her exceptional leadership and unwavering support throughout my academic journey. Her commitment to student success is evident in her proactive approach to addressing our needs. Mrs. Parimala's open-door policy and willingness to listen to our feedback and provide guidance were invaluable. Her vast industry experience and insights have been instrumental in shaping my understanding of business concepts and their practical applications. Under her direction, the SSODL Online MBA program is going to reach greater heights. The support services provided by SSODL were exemplary. The administrative staff was always prompt, friendly, and efficient in addressing any logistical or administrative concerns. The robust online library resources likenthe SLM and the discussion forums facilitated in-depth study and enriched my learning experience. Furthermore, the networking opportunities provided by the program helped me establish valuable connections with fellow students and alumni, creating a strong professional network that extends beyond the classroom. The SSODL Online MBA program has undoubtedly exceeded my expectations, and I am proud to become an alumnus of this esteemed institution. The knowledge and skills I have gained through this program will significantly contributed to my professional growth and will surely open doors to new opportunities. I would wholeheartedly recommend the SSODL Online MBA program to anyone seeking a comprehensive, flexible, and enriching educational experience. Once again, I would like to extend my sincerest appreciation to Mrs. Parimala Veluvalli, the faculty, and the entire SSODL team for their unwavering commitment to excellence. I am grateful for the opportunity to be a part of this exceptional learning community and will always cherish the memories and lessons gained as I continue my learning journey at SSODL. Thank you for making my educational journey an extraordinary one. Yours sincerely, Anjan Ananthakrishnan</p>-->
            </div>
        </div>
    </div>
</div>

<!---->
<div class="modal fade" id="myModalst6" role="dialog" style="top:15%;">
    <div class="modal-dialog model-xs">
        <div class="modal-content"
            style="background: linear-gradient(rgba(179, 166, 166, 0.8),rgba(0,0,0,0.8)),  background-size: cover; overflow-y: auto;">
            <div class="modal-header" style="border: none;">
                <h4>Urvija Srivastava </h4>
                <button type="button" class="close" style="color:#000!important;" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>SSODL's Online MBA: Learning on My Time, with Stellar Resources.</p>
                <p>The best part about SSODL's online MBA? The flexibility! I could juggle work, family, and conquer coursework at my own pace. No more stressing about cramming for in-person classes. The lectures and materials on Moodle were top-notch. They weren't just dry theory – SSODL made it real with practical applications. It felt like I was learning directly from business experts, not just reading textbooks.</p>
                <p>But SSODL didn't just offer a broad overview – they provided a deep dive into all aspects of business.  I gained a comprehensive understanding of everything from marketing and finance to strategy and operations. If you're looking for an online MBA that lets you learn on your terms and keeps things engaging, SSODL is the way to go!</p>
            </div>
        </div>
    </div>
</div>

<!---->
<div class="modal fade" id="myModalst7" role="dialog" style="top:15%;">
    <div class="modal-dialog model-xs">
        <div class="modal-content"
            style="background: linear-gradient(rgba(179, 166, 166, 0.8),rgba(0,0,0,0.8)),  background-size: cover;overflow-y: auto;">
            <div class="modal-header" style="border: none;">
                <h4>Asawari Puralkar</h4>
                <button type="button" class="close" style="color:#000!important;" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Enrolling in the online MBA program at the Symbiosis School of Online and Digital Learning (SSODL) has already begun to enhance my employability skills and propel my career forward, even though it's only been a month. Here are a few specific ways this has been happening: Balancing my professional commitments with the rigorous demands of the MBA coursework has significantly improved my ability to manage time effectively. This is a critical skill in any job role, and the necessity to juggle multiple responsibilities has made me more organized and efficient. The initial courses have introduced me to complex business concepts and frameworks. Engaging with these topics has sharpened my analytical and critical thinking abilities, enabling me to approach problems more strategically in my current role and many more.  In summary, the online MBA program at SSODL is equipping me with vital skills that are immediately applicable in my current job and essential for my long-term career growth. The initial experiences have been promising, and I am confident that the continuous learning and development will further enhance my employability and professional trajectory.</p>
            </div>
        </div>
    </div>
</div>

<!---->
<div class="modal fade" id="myModalst8" role="dialog" style="top:15%;">
    <div class="modal-dialog model-xs">
        <div class="modal-content"
            style="background: linear-gradient(rgba(179, 166, 166, 0.8),rgba(0,0,0,0.8)),  background-size: cover; overflow-y: auto;">
            <div class="modal-header" style="border: none;">
                <h4>Yash Santosh Devrukhkar </h4>
                <button type="button" class="close" style="color:#000!important;" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Enrolling in the online MBA course was one of the best decisions I've made. The program's interactive platform and engaging content kept me motivated and eager to learn. The professors are experts in their fields and provided personalized feedback, which helped me grow both professionally and personally. This course has opened doors to new career opportunities and boosted my confidence.</p>
            </div>
        </div>
    </div>
</div>

<!---->
<div class="modal fade" id="myModalst9" role="dialog" style="top:15%;">
    <div class="modal-dialog model-xs">
        <div class="modal-content"
            style="background: linear-gradient(rgba(179, 166, 166, 0.8),rgba(0,0,0,0.8)),  background-size: cover; overflow-y: auto;">
            <div class="modal-header" style="border: none;">
                <h4>Navjot Kaur</h4>
                <button type="button" class="close" style="color:#000!important;" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p> As a software engineer with four years of experience, the MBA program has been instrumental in enhancing my employability skills and propelling my career forward. Recently, I was given the opportunity to lead a team, and this program has significantly helped me in managing tasks and guiding my team effectively. It has also provided me with valuable opportunities to build new connections and network with professionals from various industries. Through the MBA, I have gained a deeper understanding of business standards, HR functions, and data management. Additionally, it has equipped me with the skills to analyze data in the most efficient ways, enabling better decision-making and project outcomes.</p>
            </div>
        </div>
    </div>
</div>

<!---->
<div class="modal fade" id="myModalst10" role="dialog" style="top:15%;">
    <div class="modal-dialog model-xs">
        <div class="modal-content"
            style="background: linear-gradient(rgba(179, 166, 166, 0.8),rgba(0,0,0,0.8)),  background-size: cover; overflow-y: auto;">
            <div class="modal-header" style="border: none;">
                <h4>Uday Sankar Das</h4>
                <button type="button" class="close" style="color:#000!important;" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>As a working professional, jumping into an MBA program felt daunting. But the SSODL format has been a game-changer. Trying to mention a few points below:</p>
                <p>Flexibility: The online structure allows me to fit my studies around my work schedule. All the classes are conducted on weekends and sessions are also recorded, so, I can either attend the live sessions or watch recorded sessions during anytime or both!</p>
                <p>Practical Knowledge, Real-World Application: The professors are veterans of their fields. They don't just talk theory; they bring real-world case studies to the table. It's amazing to see how the concepts we learn apply to actual business scenarios.</p>
                <p>Supportive Environment:  The SSODL faculty and staff have been incredibly supportive. They're readily available to answer questions, provide guidance, and offer encouragement. There's a real sense of community among the students as well, which makes the online learning experience more engaging and rewarding.</p>
                <p>So far, the program has been a fantastic experience for me. It's challenging, but in the best way possible. I'm excited to see how the program continues to shape my skills and propel my career forward.</p>
            </div>
        </div>
    </div>
</div>


<!-- MODAL -->
<div class="modal fade" id="myModalpopup" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="box-shadow: 0px 0px 10px 0px #ff0000;">

      <div class="modal-header">
        <h5 class="modal-title"></h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#myModalpopup').modal('hide');document.getElementById('myModalpopup').style.setProperty('display','none');$('#secModal').modal('show');" style="background-color: #ff0000;
    color: #ffffff;
    font-weight: bolder;
    border-bottom-left-radius: 39px;">×</button>
      </div>

      <div class="modal-body">
        <h3 class="mb-4" style="text-align:center;color:#c02222">Symbiosis School for Online and Digital Learning is the first online institution in India to earn the Certificate of International Affiliation from the Institute of Risk Management (IRM)</h3>
      </div>

    </div>
  </div>
</div>

<!-- SCRIPT TO OPEN ON PAGE LOAD -->
<script>
  $(document).ready(function () {
    $('#myModalpopup').modal('show');
  });
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#Banner').modal('show');
        function display_next() {
            $('#creative-poppup-2').modal('show');
        }
    });
</script>

<script>
    function scrollFunction() {
        window.scroll(0, findPosition(document.getElementById("reg-form")));
    }
</script>

<script>
$(document).ready(function(){
        
    $('.hero-slider').owlCarousel({
      items:1,
      loop:true,
      autoplay:true,
      autoplayTimeout:4000,
      autoplayHoverPause:true,
      nav:true,
      dots:false,
      navText : ["<i class='ti-arrow-left'></i>","<i class='ti-arrow-right'></i>"],
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      smartSpeed:1000
    });
    $('#course-carousel').owlCarousel({
        loop: true,
        margin: 15,
        autoplay: true,
        autoplayTimeout:1500,
        autoplayHoverPause:true,
        nav: true,
        dots: false,
        responsive : {
            0 : {
                items: 1,
                nav: false,
            },
            480 : {
                items: 1,
                nav: false,

            },
            768 : {
                items: 2,
            },
            1001 : {
                items: 3
            }
        },
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
    }); 
    
    
    $('.course-carousel2').owlCarousel({
        loop: true,
        margin: 15,
        autoplay: true,
        autoplayTimeout:1500,
        autoplayHoverPause:true,
        nav: true,
        dots: false,
        responsive : {
            0 : {
                items: 1,
                nav: false,
            },
            480 : {
                items: 1,
                nav: false,

            },
            768 : {
                items: 2,
            },
            1001 : {
                items: 3
            }
        },
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
    }); 
});
</script>


<script type="text/javascript">
    window.onload = function () {
        $("#ans2").hide();
        $("#ans3").hide();
        $("#ans1").hide();
    };
    
    $(document).on("click", "#menu li a", function () {
        $("#menu li").removeClass("active");
        $(this).parent().addClass("active");
    });

    var hideallElems2 = $(".remove-active");

    function removeactive() {
        hideallElems2.removeClass("active");
    }

    function show(ans, current) {
        removeactive();
        current.classList.add("active");
        $(".section").hide();
        $("#" + ans).toggle();
    }
</script>

<?php
    require ('include/footer.php');
?>