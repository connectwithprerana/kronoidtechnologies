<style>
nav {
  white-space: nowrap;
 --mdb--bg-opacity: 1;
    background-color: rgba(51,45,45,var(--mdb--bg-opacity));
}
nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
/* Only stick if you can fit */
@media (min-height: 300px) {
  nav ul {
    position: fixed;
    top: 50;
    z-index:999;
  }
}
nav ul li a {
  display: block;
  padding: 0.75rem 1.25rem;
  color: white;
  text-decoration: none;
}
nav ul li a.current {
  background: black;
}
.sticky-menu-custom li{
    font-size:25px !important;
}
#fixedbutton {
    position: fixed;
    bottom: 5px;
    right: 5px; 
    z-index:9999;
}
#fixedbutton img{
    border-color:#9e34eb;
    border:2px solid #9e34eb;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo base_url(); ?>user/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<nav>
  <ul class="sticky-menu-custom" style="background-color:rgba(var(--mdb-dark-rgb),var(--mdb-bg-opacity)) !important;">
    <li><a href="<?php echo base_url(); ?>" title="Home"><i class="fa fa-home"></i></a></li>
    <li><a href="<?php echo base_url(); ?>user/register.php" title="Register"><i class="bi bi-pencil-square"></i></a></li>
    <li><a href="<?php echo base_url(); ?>user/login.php" title="Login"><i class="fa fa-sign-in"></i></a></li>
    <li><a href="<?php echo base_url(); ?>explore.php" title="Explore"><i class="bi bi-upc-scan"></i></a></li>
    <li><a href="<?php echo base_url(); ?>explore.php?filter=regular-subjects-pcm-pcb-others" title="Regular Classes"><i class="bi bi-book"></i></a></li>
    <li><a href="<?php echo base_url(); ?>explore.php?filter=entrance-exam-preparation" title="Entrance Exams Preparation"><i class="bi bi-bullseye"></i></a></li>
    <li><a href="<?php echo base_url(); ?>explore.php?filter=programming-languages" title="Programming Languages"><i class="fab fas fa fa-code"></i></a></li>
    <li><a href="<?php echo base_url(); ?>explore.php?filter=engineering-classes" title="Engineering Classes"><i class="fab fas fa fa-drafting-compass"></i></a></li>
    <!--<li><a href="<?php echo base_url(); ?>fee-calculator.php" title="Fee Calculator"><i class="bi bi-calculator"></i></a></li>
    <li><a href="<?php echo base_url(); ?>customize-batch.php" title="Customize Batch"><i class="bi bi-command"></i></a></li>-->
    
    <li><a href="<?php echo base_url(); ?>explore.php?filter=personality-and-professional-classes" title="Personality & Professional Classess"><i class="fab fas fa fa-person fa-solid"></i></a></li>
    
    <li><a href="<?php echo base_url(); ?>explore.php?filter=french-german-spanish-language" title="French - German -Spanish"><i class="fa fa-language"></i></a></li>
    
    
  </ul>
</nav>
<a id="fixedbutton" class="fixedbutton" target="_blank" href="https://wa.me/918077597688?text=I+would+like+to+discuss+about+my+smartclass" title="Connect on Whatsapp">
    <img src="https://cdn.iconscout.com/icon/free/png-256/whatsapp-1653084-1402372.png" style="width:75px;height:75px;border-radius:50%;">
</a>