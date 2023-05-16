<html>
    <head>
        <title>
            Generate Profile Password :: Smart Classess
        </title>
    </head>
    <?php
        if(!isset($_COOKIE['register_hash']) || $_COOKIE['register_hash']==''){
            ?>
            <script>
                window.location.href='login.php?retrive_account=true';
            </script>
            <?php
            die();
        }
        include_once 'conn.php';
        $posted=array();
        $posted['password']='';
        $error=false;
        if(isset($_POST['generate_password'])){
            $set='';
            foreach($posted as $key=>$element){
                if($_POST[''.$key.'']==''){
                    echo $key;
                    $error=true;
                    ?>
                    <script>
                        alert('Please fill all the required fields.');
                    </script>
                    <?php
                    break;
                }
                else
                {
                    if($set!=''){
                        $set=$set.',';
                    }
                    $set=$set.$key."='".md5($_POST[''.$key.''])."'";
                }
            }
            if(!$error){
                $query="UPDATE users SET ".$set." WHERE md5(id)='".$_COOKIE['register_hash']."'";
                if(mysqli_query($conn,$query)){
                    
                    ?>
                    <script>
                        window.location.href='dashboard.php?first_time=true';
                    </script>
                    <?php
                }
                else{
                    ?>
                    <script>
                        alert('Something went wrong, Please try again.');
                    </script>
                    <?php
                }
            }
            $posted=$_POST;
        }
    ?>
    <body>
        <style>
            .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
        }
        .card-registration .select-arrow {
        top: 13px;
        }
        </style>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
          rel="stylesheet" />
        <?php include_once 'navbar.php'; ?>
        <section class="h-100 bg-dark">
          <div class="container py-2 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col">
                <div class="card card-registration my-4">
                  <div class="row g-0">
                    <div class="col-xl-6 d-none d-xl-block">
                      <img src="https://static.vecteezy.com/system/resources/thumbnails/002/844/147/small/closed-padlock-on-digital-background-cyber-security-free-vector.jpg"
                        alt="Register for Learning Smart Way" class="img-fluid"
                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;height:100%;width:100%;" />
                        <!--https://png.pngtree.com/thumb_back/fh260/back_our/20190614/ourmid/pngtree-internet-password-network-security-technology-background-image_122932.jpg-->
                    </div>
                    <div class="col-xl-6">
                      <div class="card-body p-md-5 text-black">
                        <h3 class="mb-4 text-uppercase">Generate Account Password</h3>
        
                            <form method="post" action="">
                                <div class="row">
                                  <div class="col-md-11 mb-4">
                                    <div class="form-outline">
                                      <input required type="password" name="password" id="password" value="<?php echo $posted['password']; ?>" class="form-control form-control-lg" />
                                      <label class="form-label" for="form3Example1m">Password</label>
                                    </div>
                                  </div>
                                  <div class="col-md-1 mb-4" style="margin-left:-85px;">
                                      <div class="form-outline">
                                          <button type="button" style="min-height:42px;max-height:42px;margin-top:0px;" onclick="togglePassword();" class="btn btn-default"><i class="fas fa fa-eye" id="togglePassword" title="Show/Hide Password" style="pointer:cursor;"></i></button>
                                      </div>
                                  </div>
                                </div>
                
                                
                                
                
                                <div class="d-flex justify-content-center pt-3">
                                  <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                                  <button type="submit" name="register_me" class="btn btn-warning btn-lg ms-2">Set Password</button>
                                </div>
                            </form>
        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
        <script>
            function togglePassword(){
                const password = document.querySelector('#password');
                const type = password.getAttribute('type')==='password'?'text' : 'password';
                const prev_class=password.getAttribute('type')==='password'?'fa-eye' : 'fa-eye-slash';
                const new_class=password.getAttribute('type')==='password'?'fa-eye-slash' : 'fa-eye';
                password.setAttribute('type', type);
                $("#togglePassword").removeClass(prev_class);
                $("#togglePassword").addClass(new_class);
            }
        </script>
    </body>
</html>