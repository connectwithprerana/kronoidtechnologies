<?php
    $title="Explore Your SmartClass || Smart Classess Powered by W3Study";
    $filter='';
    if(isset($_REQUEST['filter']) && $_REQUEST['filter']!=''){
        $filter=trim($_REQUEST['filter']);
        $title="Search Results for ".$filter." || Smart Classess In association with W3Study & THE LIBRARY.";
    }
?>
<html>
    <head>
        <title>
            <?php echo $title; ?>
        </title>
        <meta name="og:title" property="og:title" content="<?php echo $title; ?>">
<meta name="title" property="title" content="<?php echo $title; ?>">
<meta name="og:description" property="og:description" content="World's best learning experience is here. Get started today connect at connect@smartclassess.com . get classess for <?php echo $filter; ?>.">
<meta name="og:image" property="og:image" content="https://img.freepik.com/free-vector/coaching-concept-illustration-idea-strategy-skills-improvement_613284-2305.jpg?w=2000">
<meta name="image" property="image" content="https://img.freepik.com/free-vector/coaching-concept-illustration-idea-strategy-skills-improvement_613284-2305.jpg?w=2000">
<meta name="description" property="description" content="World's best learning experience is here. Get started today connect at connect@smartclassess.com . get classess for <?php echo $filter; ?>.">
    </head>
    <?php include_once 'conn.php'; ?>
    <body>
        <style>
            /*Filter style*/
                @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
.wrapper{
    padding: 30px;
    max-width: 1200px;
    margin: auto;
}
.h3{
    font-weight: 900;
}
.views{
    font-size: 0.85rem;
}
.btn{
    color: #666;
    font-size: 0.85rem;
}
.btn:hover{
    color: #61b15a;
}
.green-label{
    background-color: #defadb;
    color: #48b83e;
    border-radius: 5px;
    font-size: 0.8rem;
    margin: 0 3px;
}
.radio,.checkbox{
    padding: 6px 10px;
}
.border{
    border-radius: 12px;
}
.options{
    position: relative;
    padding-left: 25px;
}
.radio label,
.checkbox label{
    display: block;
    font-size: 14px;
    cursor: pointer;
    margin: 0;
}
.options input{
    opacity: 0;
}
.checkmark {
    position: absolute;
    top: 0px;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #f8f8f8;
    border: 1px solid #ddd;
    border-radius: 50%;
}
.options input:checked ~ .checkmark:after {
    display: block;
}
.options .checkmark:after{
    content: "";
	width: 9px;
    height: 9px;
    display: block;
	background: white;
    position: absolute;
    top: 52%;
	left: 51%;
    border-radius: 50%;
    transform: translate(-50%,-50%) scale(0);
    transition: 300ms ease-in-out 0s;
}
.options input[type="radio"]:checked ~ .checkmark{
    background: #61b15a;
    transition: 300ms ease-in-out 0s;
}
.options input[type="radio"]:checked ~ .checkmark:after{
    transform: translate(-50%,-50%) scale(1);
}
.count{
    font-size: 0.8rem;
}
label{
    cursor: pointer;
}
.tick{
    display: block;
    position: relative;
    padding-left: 23px;
    cursor: pointer;
    font-size: 0.8rem;
    margin: 0;
}
.tick input{
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}
.check{
    position: absolute;
    top: 1px;
    left: 0;
    height: 18px;
    width: 18px;
    background-color: #f8f8f8;
    border: 1px solid #ddd;
    border-radius: 3px;
}
.tick:hover input ~ .check {
    background-color: #f3f3f3;
}
.tick input:checked ~ .check {
    background-color: #61b15a;
}
.check:after {
    content: "";
    position: absolute;
    display: none;
}
.tick input:checked ~ .check:after {
    display: block;
    transform: rotate(45deg) scale(1);
} 
.tick .check:after {
    left: 6px;
    top: 2px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    transform: rotate(45deg) scale(2);
}
#country{
    font-size: 0.8rem;
    border: none;
    border-left: 1px solid #ccc;
    padding: 0px 10px;
    outline: none;
    font-weight: 900;
}
.close{
    font-size: 1.2rem;
}
div.text-muted{
    font-size: 0.85rem;
}
#sidebar{
    width: 25%;
    float: left;
}
.category{
    font-size: 0.9rem;
    cursor: pointer;
}
.list-group-item{
    border: none;
    padding: 0.3rem 0.4rem 0.3rem 0rem;
}
.badge-primary{
    background-color: #defadb;
    color: #48b83e
}
.brand .check{
    background-color: #fff;
    top: 3px;
    border: 1px solid #666;
}
.brand .tick{
    font-size: 1rem;
    padding-left: 25px;
}
.rating .check{
    background-color: #fff;
    border: 1px solid #666;
    top: 0;
}
.rating .tick{
    font-size: 0.9rem;
    padding-left: 25px;
}
.rating .fas.fa-star{
    color: #ffbb00;
    padding: 0px 3px;
}
.brand .tick:hover input ~ .check,
.rating .tick:hover input ~ .check{
    background-color: #f9f9f9;
}
.brand .tick input:checked ~ .check,
.rating .tick input:checked ~ .check{
    background-color: #61b15a;
}
#products{
    width: 75%;
    padding-left: 30px;
    margin: 0;
    float: right;
}
.card:hover{
    transform: scale(1.1);
    transition: all 0.5s ease-in-out;
    cursor: pointer;
}
.card-body{
    padding: 0.5rem;
}
.card-body .description{
    font-size: 0.78rem;
    padding-bottom: 8px;
}
div.h6,h6{
    margin: 0;
}
.product .fa-star{
    font-size: 0.9rem;
}
.rebate{
    font-size: 0.9rem   ;
}
.btn.btn-primary{
    background-color: #48b83e;
    color: #fff;
    border: 1px solid #008000;    
    border-radius: 10px;
    font-weight: 800;
}
.btn.btn-primary:hover{
    background-color: #48b83ee8;
}
img{
    width: 192px;
    height: 132px;
    object-fit: contain;
}

.clear{
    clear: both;
}
.btn.btn-success{
    visibility: hidden;
}
@media(min-width:992px){
    .filter,#mobile-filter{
        display: none;
    }
}
@media(min-width:768px) and (max-width:991px){
    .radio, .checkbox {
        padding: 6px 10px;
        width: 49%;
        float: left;
        margin: 5px 5px 5px 0px;
    }
    .filter,#mobile-filter{
        display: none;
    }
}
@media(min-width:576px) and (max-width:767px){
    #sidebar{
        width: 35%;
    }
    #products{
        width: 65%;
    }
    .filter,#mobile-filter{
        display: none;
    }
    .h3 + .ml-auto{
        margin: 0;
    }
}
@media(max-width:575px){
    .wrapper{
        padding: 10px;
    }
    .h3{
        font-size: 1.3rem;
    }
    #sidebar{
        display: none;
    }
    #products{
        width: 100%;
        float: none;
    }
    #products{
        padding: 0;
    }
    .clear{
        float: left;
        width: 80%;
    }
    .btn.btn-success{
        visibility: visible;
        margin: 10px 0px;
        color: #fff;
        padding: 0.2rem 0.1rem;
        width: 20%;
    } 
    .green-label{
        width: 50%;
    }
    .btn.text-success{
        padding: 0;
    }
    .content,#mobile-filter{
        clear: both;
    }
}
.select2-search__field{
    min-height:30px !important;
}
            /*end filter style*/
            .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
        }
        .card-registration .select-arrow {
        top: 13px;
        }
        @media (max-width: 767.98px) { .border-sm-start-none { border-left: none !important; } }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
          rel="stylesheet" />
        <?php include_once 'navbar.php'; ?>
        <?php
            $additional_query="";
            if($filter!=''){
                $additional_query=" AND slug='".$filter."'";
            }
            $query="SELECT * FROM bundles WHERE status=1 ".$additional_query." ORDER BY id DESC";
            $result=mysqli_query($conn,$query);
        ?>
        <section style="background-color: #eee;">
            <div class="wrapper">
                
                <!--<div class="d-sm-flex align-items-sm-center pt-2 clear">
                    <div class="text-muted filter-label">Applied Filters:</div>
                    <div class="green-label font-weight-bold p-0 px-1 mx-sm-1 mx-0 my-sm-0 my-2">Selected Filtre <span class=" px-1 close">&times;</span> </div>
                    <div class="green-label font-weight-bold p-0 px-1 mx-sm-1 mx-0">Selected Filter <span class=" px-1 close">&times;</span> </div>
                </div>-->
                <div class="filters"> 
                    <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="true" aria-controls="mobile-filter">Filter<span class="px-1 fas fa-filter"></span></button> </div>
                    <div id="mobile-filter-1" class="row">
                        <div class="col-md-3 py-3">
                            <h5 class="font-weight-bold text-center">Subject / Topic</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <select class="form-control select2select" name="name[]" multiple="multiple" id="name">
                                        <?php
                                            
                                            $subject_query="SELECT id,name FROM bundles WHERE status=1 GROUP BY name ORDER BY id DESC";
                                        $subjects=mysqli_query($conn,$subject_query);
                                        if(mysqli_num_rows($subjects)>0){
                                            while($subject=mysqli_fetch_array($subjects)){
                                                ?>
                                                <option value="<?php echo $subject['name']; ?>"><?php echo $subject['name']; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 py-3">
                            <h5 class="font-weight-bold text-center">Standard</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <select class="form-control select2select" name="standard[]" multiple="multiple" id="standard">
                                        <?php
                                            $subject_query="SELECT id,standard FROM bundles WHERE status=1 GROUP BY standard ORDER BY id DESC";
                                        $subjects=mysqli_query($conn,$subject_query);
                                        if(mysqli_num_rows($subjects)>0){
                                            while($subject=mysqli_fetch_array($subjects)){
                                                ?>
                                                <option value="<?php echo $subject['standard']; ?>"><?php echo $subject['standard']; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 py-3">
                            <h5 class="font-weight-bold text-center">Medium</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <select class="form-control select2select" multiple="multiple"name="medium[]" id="medium">
                                        <?php
                                            $subject_query="SELECT id,medium FROM bundles WHERE status=1 GROUP BY medium ORDER BY id DESC";
                                        $subjects=mysqli_query($conn,$subject_query);
                                        if(mysqli_num_rows($subjects)>0){
                                            while($subject=mysqli_fetch_array($subjects)){
                                                ?>
                                                <option value="<?php echo $subject['medium']; ?>"><?php echo $subject['medium']; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 py-3">
                            <h5 class="font-weight-bold text-center">Board / University</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <select class="form-control select2select" name="board_if_any[]" multiple="multiple" id="board_if_any">
                                        <?php
                                            $subject_query="SELECT id,board_if_any FROM bundles WHERE status=1 GROUP BY board_if_any ORDER BY id DESC";
                                        $subjects=mysqli_query($conn,$subject_query);
                                        if(mysqli_num_rows($subjects)>0){
                                            while($subject=mysqli_fetch_array($subjects)){
                                                ?>
                                                <option value="<?php echo $subject['board_if_any']; ?>"><?php echo $subject['board_if_any']; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-5">
              <?php
                if(mysqli_num_rows($result)>0){
                    $rating_arr=array(4,5,4.5);
                    while($row=mysqli_fetch_array($result)){
                        $rating_count=mt_rand(200,700);
                        $rating_index=mt_rand(0,2);
                        $star_count=$rating_arr[$rating_index];
                        
                        if($row['rating_count']!=0){
                            $rating_count=$row['rating_count'];
                            $star_count=$row['star_count'];
                        }
                        else{
                            mysqli_query($conn,"UPDATE bundles SET rating_count='$rating_count',star_count='$star_count' WHERE id='".$row['id']."'");
                        }
                        $standard=$row['standard'];
                        if($standard=="Any"){
                            $standard="";
                        }
                        else{
                            $standard=' for '.$standard;
                        }
                        $card_string="I'm Interested in ".$row['name'].''.$standard." ".$row['medium'].' medium. Let me know more about it or call me back.';
                        $group="Consider my request as a group registration.";
                        ?>
                        <div class="row justify-content-center mb-3">
                          <div class="col-md-12 col-xl-10">
                            <div class="card shadow-0 border rounded-3">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                    <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                      <img src="https://media.istockphoto.com/id/887938150/photo/answering-a-question.jpg?s=170667a&w=0&k=20&c=8cQqxwB_mxZBR-1bwHr9SFcHg5bef4LGVTje0otod-s=" class="w-100" style="height:100%;" />
                                      <a target="_blank" href="https://wa.me/918077597688?text=<?php echo urlencode($card_string); ?>">
                                        <div class="hover-overlay">
                                          <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                        </div>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 col-xl-6">
                                    <h5><a href="https://wa.me/918077597688?text=<?php echo urlencode($card_string); ?>" target="_blank"><?php echo $row['name'].''.$standard; ?></a></h5>
                                    
                                    <div class="d-flex flex-row">
                                      <div class="text-danger mb-1 me-2">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <?php 
                                            if($star_count==4.5){
                                                ?>
                                                <i class="fa fa-star-half"></i>
                                                <?php
                                            }
                                            else if($star_count==5){
                                                ?>
                                                <i class="fa fa-star"></i>
                                                <?php
                                            }
                                        ?>
                                        
                                      </div>
                                      <span><?php echo $rating_count; ?></span>
                                    </div>
                                    <div class="mt-1 mb-0 text-muted small">
                                      <span><?php echo $row['medium'].' medium'; ?></span>
                                      <span class="text-primary"> | </span>
                                      <span><?php echo $row['board_if_any']; ?></span>
                                      <span class="text-primary"> | </span>
                                      <span>Best Learning Experience<br /></span>
                                    </div>
                                    <div class="mb-2 text-muted small">
                                      <span>Unique Teaching Approach</span>
                                      <span class="text-primary"> | </span>
                                      <span>With Examples & Creativity</span>
                                      <span class="text-primary"> | </span>
                                      <span>DPP<br /></span>
                                    </div>
                                    
                                    <p class="text-truncate mb-4 mb-md-0">
                                      <?php
                                        echo 'Offered in '.$row['medium'].' medium';
                                      ?>
                                    </p>
                                    <div class="mb-2 text-muted small mt-4" style="align-content:center !important;text-align:center;">
                                      <span class="text-danger" title="Direct Calling Number"><a class="text-danger" href="tel:918077597688"><i class="fas fa fa-mobile"></i> +918077597688</a></span>
                                      
                                      <span class="text-primary">   |   </span>
                                      <span class="text-danger" title="Whatsapp"><a class="text-danger" target="_blank" href="https://wa.me/918077597688?text=<?php echo urlencode($card_string); ?>"><i class="fas fa fa-phone"></i> 918077597688</a><br/></span>
                                      <span class="text-danger" style="margin-top:30px;" title="Email"><a class="text-danger" href="mailto:connect@smartclassess.com"><i class="fas fa fa-envelope"></i> connect@smartclassess.com</a></span>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                    <div class="d-flex flex-row align-items-center mb-1">
                                      <h4 class="mb-1 me-1" style="text-align:center;align-self: center;width:100% !important;align-self: center !important;"><a href="https://wa.me/918077597688?text=<?php echo urlencode($card_string.' '.$group); ?>" target="_blank" class="btn btn-warning" title="Unlock this by registering into group."><i class="fas fa fa-lock"></i> INR <?php echo $row['group_amount']; ?></a></h4><br/>
                                        
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-1">
                                        <h4>INR <?php echo $row['chargable_amount']; ?></h4><span class="text-danger">&nbsp;&nbsp;<s>INR <?php echo $row['amount']; ?></s></span>
                                    </div>
                                    <h6 class="text-success">No need for external books</h6>
                                    <h6 class="text-success">We do have internal library for all classess</h6>
                                    <div class="d-flex flex-column mt-4">
                                      <a class="btn btn-primary btn-sm" href="https://wa.me/918077597688?text=<?php echo urlencode($card_string); ?>">Know More</a>
                                      <a class="btn btn-outline-primary btn-sm mt-2" href="user/register.php?sc=<?php echo md5($row['id']); ?>">
                                        Register
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php
                    }
                }
                else{
                    ?>
                        <div class="row justify-content-center mb-3">
                            <div class="col-md-12 col-xl-10">
                                <div class="card shadow-0 border rounded-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12 col-xl-12 mb-4 mt-4">
                                              <h4 class="text-warning" style="text-align:center;">It seems like there is nothing for your search or filter you have applied for now. But we have got something you might be interested in.</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    $query="SELECT * FROM bundles WHERE status=1 ORDER BY id DESC";
                    $result=mysqli_query($conn,$query);
                    while($row=mysqli_fetch_array($result)){
                        $rating_count=mt_rand(200,700);
                        $rating_index=mt_rand(0,2);
                        $star_count=$rating_arr[$rating_index];
                        
                        if($row['rating_count']!=0){
                            $rating_count=$row['rating_count'];
                            $star_count=$row['star_count'];
                        }
                        else{
                            mysqli_query($conn,"UPDATE bundles SET rating_count='$rating_count',star_count='$star_count' WHERE id='".$row['id']."'");
                        }
                        $standard=$row['standard'];
                        if($standard=="Any"){
                            $standard="";
                        }
                        else{
                            $standard=' for '.$standard;
                        }
                        $card_string="I'm Interested in ".$row['name'].''.$standard." ".$row['medium'].' medium. Let me know more about it or call me back.';
                        $group="Consider my request as a group registration.";
                        ?>
                        <div class="row justify-content-center mb-3">
                          <div class="col-md-12 col-xl-10">
                            <div class="card shadow-0 border rounded-3">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                    <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                      <img src="https://media.istockphoto.com/id/887938150/photo/answering-a-question.jpg?s=170667a&w=0&k=20&c=8cQqxwB_mxZBR-1bwHr9SFcHg5bef4LGVTje0otod-s=" class="w-100" style="height:100%;" />
                                      <a target="_blank" href="https://wa.me/918077597688?text=<?php echo urlencode($card_string); ?>">
                                        <div class="hover-overlay">
                                          <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                        </div>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6 col-xl-6">
                                    <h5><a href="https://wa.me/918077597688?text=<?php echo urlencode($card_string); ?>" target="_blank"><?php echo $row['name'].''.$standard; ?></a></h5>
                                    
                                    <div class="d-flex flex-row">
                                      <div class="text-danger mb-1 me-2">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <?php 
                                            if($star_count==4.5){
                                                ?>
                                                <i class="fa fa-star-half"></i>
                                                <?php
                                            }
                                            else if($star_count==5){
                                                ?>
                                                <i class="fa fa-star"></i>
                                                <?php
                                            }
                                        ?>
                                        
                                      </div>
                                      <span><?php echo $rating_count; ?></span>
                                    </div>
                                    <div class="mt-1 mb-0 text-muted small">
                                      <span><?php echo $row['medium'].' medium'; ?></span>
                                      <span class="text-primary"> | </span>
                                      <span><?php echo $row['board_if_any']; ?></span>
                                      <span class="text-primary"> | </span>
                                      <span>Best Learning Experience<br /></span>
                                    </div>
                                    <div class="mb-2 text-muted small">
                                      <span>Unique Teaching Approach</span>
                                      <span class="text-primary"> | </span>
                                      <span>With Examples & Creativity</span>
                                      <span class="text-primary"> | </span>
                                      <span>DPP<br /></span>
                                    </div>
                                    
                                    <p class="text-truncate mb-4 mb-md-0">
                                      <?php
                                        echo 'Offered in '.$row['medium'].' medium';
                                      ?>
                                    </p>
                                    <div class="mb-2 text-muted small mt-4" style="align-content:center !important;text-align:center;">
                                      <span class="text-danger" title="Direct Calling Number"><a class="text-danger" href="tel:918077597688"><i class="fas fa fa-mobile"></i> +918077597688</a></span>
                                      
                                      <span class="text-primary">   |   </span>
                                      <span class="text-danger" title="Whatsapp"><a class="text-danger" target="_blank" href="https://wa.me/918077597688?text=<?php echo urlencode($card_string); ?>"><i class="fas fa fa-phone"></i> 918077597688</a><br/></span>
                                      <span class="text-danger" style="margin-top:30px;" title="Email"><a class="text-danger" href="mailto:connect@smartclassess.com"><i class="fas fa fa-envelope"></i> connect@smartclassess.com</a></span>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                    <div class="d-flex flex-row align-items-center mb-1">
                                      <h4 class="mb-1 me-1" style="text-align:center;align-self: center;width:100% !important;align-self: center !important;"><a href="https://wa.me/918077597688?text=<?php echo urlencode($card_string.' '.$group); ?>" target="_blank" class="btn btn-warning" title="Unlock this by registering into group."><i class="fas fa fa-lock"></i> INR <?php echo $row['group_amount']; ?></a></h4><br/>
                                        
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-1">
                                        <h4>INR <?php echo $row['chargable_amount']; ?></h4><span class="text-danger">&nbsp;&nbsp;<s>INR <?php echo $row['amount']; ?></s></span>
                                    </div>
                                    <h6 class="text-success">No need for external books</h6>
                                    <h6 class="text-success">We do have internal library for all classess</h6>
                                    <div class="d-flex flex-column mt-4">
                                      <a class="btn btn-primary btn-sm" href="https://wa.me/918077597688?text=<?php echo urlencode($card_string); ?>">Know More</a>
                                      <a class="btn btn-outline-primary btn-sm mt-2" href="user/register.php?sc=<?php echo md5($row['id']); ?>">
                                        Register
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php
                    }
                }
              ?>
          </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $('.select2select').select2({placeholder: "Select atleast one",
    allowClear: true});
        </script>
    </body>
</html>