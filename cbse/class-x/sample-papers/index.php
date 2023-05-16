<html>
    <head>
        <title>
            New - CBSE class X sample papers <?php echo ((int)(date('Y'))-2).' - '.((int)(date('Y'))-1); ?> and <?php echo ((int)(date('Y'))-1).' - '.date('Y'); ?> by SmartClassess
        </title>
        <meta name="og:title" property="og:title" content="CBSE class X sample papers <?php echo ((int)(date('Y'))-2).' - '.((int)(date('Y'))-1); ?> and <?php echo ((int)(date('Y'))-1).' - '.date('Y'); ?>. SmartClassess">
        <meta name="title" property="title" content="CBSE class X sample papers <?php echo ((int)(date('Y'))-2).' - '.((int)(date('Y'))-1); ?> and <?php echo ((int)(date('Y'))-1).' - '.date('Y'); ?>. SmartClassess">
        <meta name="og:description" property="og:description" content="CBSE class X sample papers <?php echo ((int)(date('Y'))-2).' - '.((int)(date('Y'))-1); ?> and <?php echo ((int)(date('Y'))-1).' - '.date('Y'); ?>. World's best learning experience is here. Get started today connect at connect@smartclassess.com">
        <meta name="og:image" property="og:image" content="https://img.freepik.com/free-vector/coaching-concept-illustration-idea-strategy-skills-improvement_613284-2305.jpg?w=2000">
        <meta name="image" property="image" content="https://img.freepik.com/free-vector/coaching-concept-illustration-idea-strategy-skills-improvement_613284-2305.jpg?w=2000">
        <meta name="description" property="description" content="CBSE class X sample papers <?php echo ((int)(date('Y'))-2).' - '.((int)(date('Y'))-1); ?> and <?php echo ((int)(date('Y'))-1).' - '.date('Y'); ?>. World's best learning experience is here. Get started today connect at connect@smartclassess.com">
    </head>
    <?php include_once __DIR__.'/../../../conn.php'; ?>
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
        <?php include_once __DIR__.'/../../../navbar.php'; ?>
        <?php
            $direct="2022-2023/";
            
        ?>
        <section>
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-12 col-md-3"></div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-5">
                                    <input class="form-control" name="filter_dom" id="filter_dom" placeholder="Type to search...">
                                </div>
                            </div>
                            <div class="col-12 col-md-3"></div>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="text-align:center">Title</th>
                        <th style="text-align:center">View / Download Pdf</th>
                      </tr>
                    </thead>
                    <tbody id="filter_dom_html">
                        <?php
                            if (is_dir($direct)) {
                                if ($dh = opendir($direct)) {
                                    while (($file = readdir($dh)) !== false) {
                                        $direct_pre=base_url()."cbse/class-x/sample-papers/".$direct;
                                        if($file=="." || $file==".."){
                                            continue;
                                        }
                                        $file_title=str_replace(".pdf","",str_replace("-"," ",$file));
                                        $class_title=str_replace(".pdf","",$file);
                                        ?>
                                        <tr data-title="<?php echo $file_title;?>" class="sqp">
                                            <td data-url="<?php echo $direct_pre.$file; ?>" style="cursor:pointer;" title="<?php echo $file_title;?>" data-title="<?php echo $file_title;?>">
                                                <a target="_blank" data-url="<?php echo $direct_pre.$file; ?>" href="<?php echo $direct_pre.$file; ?>"><?php echo $file_title; ?></a>
                                            </td>
                                            <td>
                                                <a data-url="<?php echo $direct_pre.$file; ?>" title="<?php echo $file_title; ?>" data-title="<?php echo $file_title;?>" href="<?php echo $direct_pre.$file; ?>" download="<?php echo $file; ?>">
                                                    <i class="fas fa fa-eye"></i>&nbsp;&nbsp;Download
                                                </a>
                                            </td>
                                          </tr>
                                        <?php
                                    }
                                    closedir($dh);
                                }
                            }
                        ?>
                      
                    </tbody>
                </table>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $("#filter_dom").keyup(function(){
                if(filter_dom==""){
                    $(".sqp").show();
                }else{
                    var filter_dom=$("#filter_dom").val();
                    $(".sqp").hide();
                    $(".sqp:contains('"+filter_dom+"')").show();
                }
            });
        </script>
    </body>
</html>