<?php
    include_once 'conn.php';
    $message="for your interest in SmartClassess, we will get in touch with you soon...";
    if(isset($_SESSION['action_type']) && $_SESSION['action_type']=='success' && isset($_SESSION['action_outcome']) && $_SESSION['action_outcome']!=''){
        $message=$_SESSION['action_outcome'];
        $_SESSION['action_outcome']='';
        $_SESSION['action_type']='';
    }
?>
<title>
    Thank You for choosing SMartClassess
</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
          rel="stylesheet" />
<style>
.thankyou-wrapper{
  width:100%;
  height:auto;
  margin:auto;
  background:#ffffff; 
  padding:10px 0px 50px;
  z-index:1;
}
.thankyou-wrapper h1{
  font:100px Arial, Helvetica, sans-serif;
  text-align:center;
  color:#333333;
  padding:0px 10px 10px;
}
.thankyou-wrapper p{
  font:26px Arial, Helvetica, sans-serif;
  text-align:center;
  color:#333333;
  padding:5px 10px 10px;
}
.thankyou-wrapper a{
  font:26px Arial, Helvetica, sans-serif;
  text-align:center;
  color:#ffffff;
  display:block;
  text-decoration:none;
  width:250px;
  background:#E47425;
  margin:10px auto 0px;
  padding:15px 20px 15px;
  border-bottom:5px solid #F96700;
}
.thankyou-wrapper a:hover{
  font:26px Arial, Helvetica, sans-serif;
  text-align:center;
  color:#ffffff;
  display:block;
  text-decoration:none;
  width:250px;
  background:#F96700;
  margin:10px auto 0px;
  padding:15px 20px 15px;
  border-bottom:5px solid #F96700;
}
</style>
<?php include_once 'navbar.php'; ?>
<section class="login-main-wrapper h-100 bg-dark">
      <div class="main-container bg-dark">
          <div class="login-process bg-dark">
              <div class="login-main-container bg-dark">
                  <div class="thankyou-wrapper bg-dark">
                      <h1><img src="http://montco.happeningmag.com/wp-content/uploads/2014/11/thankyou.png" alt="thanks" /></h1>
                        <p style="color:#fff;"><?php echo $message; ?></p>
                        <a href="explore.php" style="color:#fff;">Explore More</a>
                        <div class="clr"></div>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </section>