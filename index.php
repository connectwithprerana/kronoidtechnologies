<html>
    <head>
        <title>
            Smart Classess :: World's best learning experience is here.In Association with THE-LIBRARY & W3STUDY.
        </title>
        <meta name="og:title" property="og:title" content="SMART CLASSES :: World's best learning experience is here.In Association with THE-LIBRARY & W3STUDY.">
<meta name="title" property="title" content="SMART CLASSES :: World's best learning experience is here.In Association with THE-LIBRARY & W3STUDY.">
<meta name="og:description" property="og:description" content="World's best learning experience is here. Get started today connect at connect@smartclassess.com">
<meta name="og:image" property="og:image" content="https://img.freepik.com/free-vector/coaching-concept-illustration-idea-strategy-skills-improvement_613284-2305.jpg?w=2000">
<meta name="image" property="image" content="https://img.freepik.com/free-vector/coaching-concept-illustration-idea-strategy-skills-improvement_613284-2305.jpg?w=2000">
<meta name="description" property="description" content="World's best learning experience is here. Get started today connect at connect@smartclassess.com">
    </head>
    <?php
        include_once 'conn.php';
        $posted=array();
        $posted['first_name']='';
        $posted['last_name']='';
        $posted['address']='';
        $posted['father_name']='';
        $posted['mother_name']='';
        $posted['dob']='';
        $posted['gender']='';
        $posted['state']='Uttar Pradesh';
        $posted['city']='Aligarh';
        $posted['pincode']='';
        $posted['course_type']='';
        $posted['standard']='';
        $posted['streem']='';
        $posted['email']='';
        $posted['mobile']='';
        $posted['alternate_mobile']='';
        $error=false;
        if(isset($_POST['register_me'])){
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
                else{
                    if($set!=''){
                        $set=$set.',';
                    }
                    $set=$set.$key."='".$_POST[''.$key.'']."'";
                }
            }
            if(!$error){
                $query="INSERT INTO leads SET ".$set;
                if(mysqli_query($conn,$query)){
                    $query="SELECT * FROM users WHERE email='".$_POST['email']."'";
                    $result=mysqli_query($conn,$query);
                    if(mysqli_num_rows($result)<0){
                        $password=md5("smartclassess");
                        $query="INSERT INTO users SET password='$password',".$set;
                        if(mysqli_query($conn,$query)){
                            $userid=mysqli_insert_id($conn);
                            setcookie('register_hash', md5($userid), time() + (86400 * 30), "/");
                            ?>
                            <script>
                                window.location.href='setup.php?first_time=true';
                            </script>
                            <?php
                        }
                    }
                    else
                    {
                        $row=mysqli_fetch_array($result);
                        if($row['status']==0){
                            $userid=$row['id'];
                            setcookie('register_hash', md5($userid), time() + (86400 * 30), "/");
                            ?>
                            <script>
                                window.location.href='setup.php?first_time=true';
                            </script>
                            <?php
                        }
                        else{
                            ?>
                            <script>
                                window.location.href='login.php?first_time=false';
                            </script>
                            <?php
                        }
                    }
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
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                        alt="Register for Learning Smart Way" class="img-fluid"
                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                    </div>
                    <div class="col-xl-6">
                      <div class="card-body p-md-5 text-black">
                        <h3 class="mb-4 text-uppercase">Start New Way of Learning</h3>
        
                            <form method="post" action="">
                                <div class="row">
                                  <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                      <input required type="text" name="first_name" id="form3Example1m" value="<?php echo $posted['first_name']; ?>" class="form-control form-control-lg" />
                                      <label class="form-label" for="form3Example1m">First name</label>
                                    </div>
                                  </div>
                                  <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                      <input required type="text" value="<?php echo $posted['last_name']; ?>" name="last_name" id="form3Example1n" class="form-control form-control-lg" />
                                      <label class="form-label" for="form3Example1n">Last name</label>
                                    </div>
                                  </div>
                                </div>
                
                                <div class="row">
                                    
                                  <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                      <input type="text" value="<?php echo $posted['father_name']; ?>" name="father_name" id="form3Example1n1" required class="form-control form-control-lg" />
                                      <label class="form-label" for="form3Example1n1">Father's name</label>
                                    </div>
                                  </div>
                                  <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                      <input required type="text" value="<?php echo $posted['mother_name']; ?>" name="mother_name" id="form3Example1m1" class="form-control form-control-lg" />
                                      <label class="form-label" for="form3Example1m1">Mother's name</label>
                                    </div>
                                  </div>
                                </div>
                
                                <div class="form-outline mb-4">
                                  <input type="text" required value="<?php echo $posted['address']; ?>" name="address" id="form3Example8" class="form-control form-control-lg" />
                                  <label class="form-label" for="form3Example8">Address</label>
                                </div>
                
                                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                
                                  <h6 class="mb-0 me-4">Gender: </h6>
                
                                  <div class="form-check form-check-inline mb-0 me-4">
                                    <input <?php if($posted['gender']=='male'){ echo 'checked'; } ?> class="form-check-input" required type="radio" name="gender" id="maleGender"
                                      value="male" />
                                    <label class="form-check-label" for="maleGender">Male</label>
                                  </div>
                
                                  <div class="form-check form-check-inline mb-0 me-4">
                                    <input required class="form-check-input" type="radio" name="gender" <?php if($posted['gender']=='female'){ echo 'checked'; } ?> id="maleGender"
                                      value="female" />
                                    <label class="form-check-label" for="femaleGender">Female</label>
                                  </div>
                
                                  <div class="form-check form-check-inline mb-0">
                                    <input required class="form-check-input" type="radio" name="gender" <?php if($posted['gender']=='other'){ echo 'checked'; } ?> id="otherGender"
                                      value="other" />
                                    <label class="form-check-label" for="otherGender">Other</label>
                                  </div>
                
                                </div>
                
                                <div class="row">
                                  <div class="col-md-6 mb-4">
                
                                    <select required class="select form-control" value="<?php echo $posted['state']; ?>" name="state" id="state" onchange="print_city('city', this.selectedIndex);">
                                    </select>
                
                                  </div>
                                  <div class="col-md-6 mb-4">
                
                                    <select required class="select form-control" value="<?php echo $posted['city']; ?>" name="city" id="city">
                                    </select>
                
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6 mb-4">
                
                                        <div class="form-outline">
                                          <input type="date" name="dob" id="form3Example9" value="<?php echo $posted['dob']; ?>" required class="form-control form-control-lg" />
                                          <label class="form-label" for="form3Example9">DOB</label>
                                        </div>
                
                                  </div>
                                  <div class="col-md-6 mb-4">
                
                                    <div class="form-outline">
                                      <input type="text" required name="pincode" id="form3Example90" value="<?php echo $posted['pincode']; ?>" class="form-control form-control-lg" />
                                      <label class="form-label" for="form3Example90">Pincode</label>
                                    </div>
                
                                  </div>
                                </div>
                                
                
                                
                                <div class="row">
                                  <div class="col-md-4 mb-4">
                                        <select required class="select form-control" name="course_type" id="course_type">
                                              <option value="">Course Type</option>
                                              <option <?php if($posted['course_type']=='Crash Course'){ echo 'selected'; } ?> value="Crash Course">Crash Course</option>
                                              <option <?php if($posted['course_type']=='Preparation'){ echo 'selected'; } ?> value="Preparation">Preparation</option>
                                              <option <?php if($posted['course_type']=='Regular Classes'){ echo 'selected'; } ?> value="Regular Classes">Regular Classes</option>
                                            </select>
                                  </div>
                                  <div class="col-md-4 mb-4">
                                        <select class="select form-control" name="standard" required id="standard">
                                              <option value="">Standard</option>
                                              <option <?php if($posted['standard']=='IIT - JEE - NEET - AIEEE Preparation'){ echo 'selected'; } ?> value="IIT - JEE - NEET - AIEEE Preparation">IIT - JEE - NEET - AIEEE Preparation</option>
                                              <option <?php if($posted['standard']=='Polytechnic & AMU Preparation'){ echo 'selected'; } ?> value="Polytechnic & AMU Preparation">Polytechnic & AMU Preparation</option>
                                              <option <?php if($posted['standard']=='Programming Languages'){ echo 'selected'; } ?> value="Programming Languages">Programming Languages</option>
                                              <option <?php if($posted['standard']=='Engineering'){ echo 'selected'; } ?> value="Engineering">Engineering</option>
                                              <option <?php if($posted['standard']=='Diploma'){ echo 'selected'; } ?> value="Diploma">Diploma</option>
                                              <option <?php if($posted['standard']=='12th'){ echo 'selected'; } ?> value="12th">12th</option>
                                              <option <?php if($posted['standard']=='11th'){ echo 'selected'; } ?> value="11th">11th</option>
                                              <option <?php if($posted['standard']=='10th'){ echo 'selected'; } ?> value="10th">10th</option>
                                              <option <?php if($posted['standard']=='9th'){ echo 'selected'; } ?> value="9th">9th</option>
                                              <option <?php if($posted['standard']=='8th or Below 8th'){ echo 'selected'; } ?> value="8th or Below 8th">8th or Below 8th</option>
                                            </select>
                                  </div>
                                  <div class="col-md-4 mb-4">
                                        <select required class="select form-control" name="streem" id="medium_cum_streem">
                                              <option value="">Streem</option>
                                              <option <?php if($posted['streem']=='PCM'){ echo 'selected'; } ?> value="PCM">PCM</option>
                                              <option <?php if($posted['streem']=='PCB'){ echo 'selected'; } ?> value="PCB">PCB</option>
                                              <option <?php if($posted['streem']=='Other'){ echo 'selected'; } ?> value="Other">Other</option>
                                              <option <?php if($posted['streem']=='Not Applicable'){ echo 'selected'; } ?> value="Not Applicable">Not Applicable</option>
                                            </select>
                                  </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <div class="form-outline">
                                          <input type="email" required name="email" id="form3Example97" value="<?php echo $posted['email']; ?>" class="form-control form-control-lg" />
                                          <label class="form-label" for="form3Example97">Email ID</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-outline">
                                          <input type="text" required name="mobile" pattern="[6789][0-9]{9}" id="form3Example97" value="<?php echo $posted['mobile']; ?>" class="form-control form-control-lg" />
                                          <label class="form-label" for="mobile">Mobile</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-outline">
                                          <input type="text" pattern="[6789][0-9]{9}" required name="alternate_mobile" id="form3Example97" value="<?php echo $posted['alternate_mobile']; ?>" class="form-control form-control-lg" />
                                          <label class="form-label" for="alternate_mobile">Alternate</label>
                                        </div>
                                    </div>
                                </div>
                                
                
                                <div class="d-flex justify-content-end pt-3">
                                  <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                                  <button type="submit" name="register_me" class="btn btn-warning btn-lg ms-2">Submit form</button>
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
            var state_arr = new Array("Andaman & Nicobar", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadra & Nagar Haveli", "Daman & Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu & Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Orissa", "Pondicherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Tripura", "Uttar Pradesh", "Uttaranchal", "West Bengal");

            var s_a = new Array();
            s_a[0]="";
            s_a[1]="Alipur|Andaman Island|Anderson Island|Arainj-Laka-Punga|Austinabad|Bamboo Flat|Barren Island|Beadonabad|Betapur|Bindraban|Bonington|Brookesabad|Cadell Point|Calicut|Chetamale|Cinque Islands|Defence Island|Digilpur|Dolyganj|Flat Island|Geinyale|Great Coco Island|Haddo|Havelock Island|Henry Lawrence Island|Herbertabad|Hobdaypur|Ilichar|Ingoie|Inteview Island|Jangli Ghat|Jhon Lawrence Island|Karen|Kartara|KYD Islannd|Landfall Island|Little Andmand|Little Coco Island|Long Island|Maimyo|Malappuram|Manglutan|Manpur|Mitha Khari|Neill Island|Nicobar Island|North Brother Island|North Passage Island|North Sentinel Island|Nothen Reef Island|Outram Island|Pahlagaon|Palalankwe|Passage Island|Phaiapong|Phoenix Island|Port Blair|Preparis Island|Protheroepur|Rangachang|Rongat|Rutland Island|Sabari|Saddle Peak|Shadipur|Smith Island|Sound Island|South Sentinel Island|Spike Island|Tarmugli Island|Taylerabad|Titaije|Toibalawe|Tusonabad|West Island|Wimberleyganj|Yadita";
            s_a[2]="Achampet|Adilabad|Adoni|Alampur|Allagadda|Alur|Amalapuram|Amangallu|Anakapalle|Anantapur|Andole|Araku|Armoor|Asifabad|Aswaraopet|Atmakur|B. Kothakota|Badvel|Banaganapalle|Bandar|Bangarupalem|Banswada|Bapatla|Bellampalli|Bhadrachalam|Bhainsa|Bheemunipatnam|Bhimadole|Bhimavaram|Bhongir|Bhooragamphad|Boath|Bobbili|Bodhan|Chandoor|Chavitidibbalu|Chejerla|Chepurupalli|Cherial|Chevella|Chinnor|Chintalapudi|Chintapalle|Chirala|Chittoor|Chodavaram|Cuddapah|Cumbum|Darsi|Devarakonda|Dharmavaram|Dichpalli|Divi|Donakonda|Dronachalam|East Godavari|Eluru|Eturnagaram|Gadwal|Gajapathinagaram|Gajwel|Garladinne|Giddalur|Godavari|Gooty|Gudivada|Gudur|Guntur|Hindupur|Hunsabad|Huzurabad|Huzurnagar|Hyderabad|Ibrahimpatnam|Jaggayyapet|Jagtial|Jammalamadugu|Jangaon|Jangareddygudem|Jannaram|Kadiri|Kaikaluru|Kakinada|Kalwakurthy|Kalyandurg|Kamalapuram|Kamareddy|Kambadur|Kanaganapalle|Kandukuru|Kanigiri|Karimnagar|Kavali|Khammam|Khanapur (AP)|Kodangal|Koduru|Koilkuntla|Kollapur|Kothagudem|Kovvur|Krishna|Krosuru|Kuppam|Kurnool|Lakkireddipalli|Madakasira|Madanapalli|Madhira|Madnur|Mahabubabad|Mahabubnagar|Mahadevapur|Makthal|Mancherial|Mandapeta|Mangalagiri|Manthani|Markapur|Marturu|Medachal|Medak|Medarmetla|Metpalli|Mriyalguda|Mulug|Mylavaram|Nagarkurnool|Nalgonda|Nallacheruvu|Nampalle|Nandigama|Nandikotkur|Nandyal|Narasampet|Narasaraopet|Narayanakhed|Narayanpet|Narsapur|Narsipatnam|Nazvidu|Nelloe|Nellore|Nidamanur|Nirmal|Nizamabad|Nuguru|Ongole|Outsarangapalle|Paderu|Pakala|Palakonda|Paland|Palmaneru|Pamuru|Pargi|Parkal|Parvathipuram|Pathapatnam|Pattikonda|Peapalle|Peddapalli|Peddapuram|Penukonda|Piduguralla|Piler|Pithapuram|Podili|Polavaram|Prakasam|Proddatur|Pulivendla|Punganur|Putturu|Rajahmundri|Rajampeta|Ramachandrapuram|Ramannapet|Rampachodavaram|Rangareddy|Rapur|Rayachoti|Rayadurg|Razole|Repalle|Saluru|Sangareddy|Sathupalli|Sattenapalle|Satyavedu|Shadnagar|Siddavattam|Siddipet|Sileru|Sircilla|Sirpur Kagaznagar|Sodam|Sompeta|Srikakulam|Srikalahasthi|Srisailam|Srungavarapukota|Sudhimalla|Sullarpet|Tadepalligudem|Tadipatri|Tanduru|Tanuku|Tekkali|Tenali|Thungaturthy|Tirivuru|Tirupathi|Tuni|Udaygiri|Ulvapadu|Uravakonda|Utnor|V.R. Puram|Vaimpalli|Vayalpad|Venkatgiri|Venkatgirikota|Vijayawada|Vikrabad|Vinjamuru|Vinukonda|Visakhapatnam|Vizayanagaram|Vizianagaram|Vuyyuru|Wanaparthy|Warangal|Wardhannapet|Yelamanchili|Yelavaram|Yeleswaram|Yellandu|Yellanuru|Yellareddy|Yerragondapalem|Zahirabad ";
            s_a[3]="Along|Anini|Anjaw|Bameng|Basar|Changlang|Chowkhem|Daporizo|Dibang Valley|Dirang|Hayuliang|Huri|Itanagar|Jairampur|Kalaktung|Kameng|Khonsa|Kolaring|Kurung Kumey|Lohit|Lower Dibang Valley|Lower Subansiri|Mariyang|Mechuka|Miao|Nefra|Pakkekesang|Pangin|Papum Pare|Passighat|Roing|Sagalee|Seppa|Siang|Tali|Taliha|Tawang|Tezu|Tirap|Tuting|Upper Siang|Upper Subansiri|Yiang Kiag ";
            s_a[4]="Abhayapuri|Baithalangshu|Barama|Barpeta Road|Bihupuria|Bijni|Bilasipara|Bokajan|Bokakhat|Boko|Bongaigaon|Cachar|Cachar Hills|Darrang|Dhakuakhana|Dhemaji|Dhubri|Dibrugarh|Digboi|Diphu|Goalpara|Gohpur|Golaghat|Guwahati|Hailakandi|Hajo|Halflong|Hojai|Howraghat|Jorhat|Kamrup|Karbi Anglong|Karimganj|Kokarajhar|Kokrajhar|Lakhimpur|Maibong|Majuli|Mangaldoi|Mariani|Marigaon|Moranhat|Morigaon|Nagaon|Nalbari|Rangapara|Sadiya|Sibsagar|Silchar|Sivasagar|Sonitpur|Tarabarihat|Tezpur|Tinsukia|Udalgiri|Udalguri|UdarbondhBarpeta";
            s_a[5]="Adhaura|Amarpur|Araria|Areraj|Arrah|Arwal|Aurangabad|Bagaha|Banka|Banmankhi|Barachakia|Barauni|Barh|Barosi|Begusarai|Benipatti|Benipur|Bettiah|Bhabhua|Bhagalpur|Bhojpur|Bidupur|Biharsharif|Bikram|Bikramganj|Birpur|Buxar|Chakai|Champaran|Chapara|Dalsinghsarai|Danapur|Darbhanga|Daudnagar|Dhaka|Dhamdaha|Dumraon|Ekma|Forbesganj|Gaya|Gogri|Gopalganj|H.Kharagpur|Hajipur|Hathua|Hilsa|Imamganj|Jahanabad|Jainagar|Jamshedpur|Jamui|Jehanabad|Jhajha|Jhanjharpur|Kahalgaon|Kaimur (Bhabua)|Katihar|Katoria|Khagaria|Kishanganj|Korha|Lakhisarai|Madhepura|Madhubani|Maharajganj|Mahua|Mairwa|Mallehpur|Masrakh|Mohania|Monghyr|Motihari|Motipur|Munger|Muzaffarpur|Nabinagar|Nalanda|Narkatiaganj|Naugachia|Nawada|Pakribarwan|Pakridayal|Patna|Phulparas|Piro|Pupri|Purena|Purnia|Rafiganj|Rajauli|Ramnagar|Raniganj|Raxaul|Rohtas|Rosera|S.Bakhtiarpur|Saharsa|Samastipur|Saran|Sasaram|Seikhpura|Sheikhpura|Sheohar|Sherghati|Sidhawalia|Singhwara|Sitamarhi|Siwan|Sonepur|Supaul|Thakurganj|Triveniganj|Udakishanganj|Vaishali|Wazirganj";
            s_a[6]="Chandigarh|Mani Marja";
            s_a[7]="Ambikapur|Antagarh|Arang|Bacheli|Bagbahera|Bagicha|Baikunthpur|Balod|Balodabazar|Balrampur|Barpalli|Basana|Bastanar|Bastar|Bderajpur|Bemetara|Berla|Bhairongarh|Bhanupratappur|Bharathpur|Bhatapara|Bhilai|Bhilaigarh|Bhopalpatnam|Bijapur|Bilaspur|Bodla|Bokaband|Chandipara|Chhinagarh|Chhuriakala|Chingmut|Chuikhadan|Dabhara|Dallirajhara|Dantewada|Deobhog|Dhamda|Dhamtari|Dharamjaigarh|Dongargarh|Durg|Durgakondal|Fingeshwar|Gariaband|Garpa|Gharghoda|Gogunda|Ilamidi|Jagdalpur|Janjgir|Janjgir-Champa|Jarwa|Jashpur|Jashpurnagar|Kabirdham-Kawardha|Kanker|Kasdol|Kathdol|Kathghora|Kawardha|Keskal|Khairgarh|Kondagaon|Konta|Korba|Korea|Kota|Koyelibeda|Kuakunda|Kunkuri|Kurud|Lohadigundah|Lormi|Luckwada|Mahasamund|Makodi|Manendragarh|Manpur|Marwahi|Mohla|Mungeli|Nagri|Narainpur|Narayanpur|Neora|Netanar|Odgi|Padamkot|Pakhanjur|Pali|Pandaria|Pandishankar|Parasgaon|Pasan|Patan|Pathalgaon|Pendra|Pratappur|Premnagar|Raigarh|Raipur|Rajnandgaon|Rajpur|Ramchandrapur|Saraipali|Saranggarh|Sarona|Semaria|Shakti|Sitapur|Sukma|Surajpur|Surguja|Tapkara|Toynar|Udaipur|Uproda|Wadrainagar";
            s_a[8]="Amal|Amli|Bedpa|Chikhli|Dadra & Nagar Haveli|Dahikhed|Dolara|Galonda|Kanadi|Karchond|Khadoli|Kharadpada|Kherabari|Kherdi|Kothar|Luari|Mashat|Rakholi|Rudana|Saili|Sili|Silvassa|Sindavni|Udva|Umbarkoi|Vansda|Vasona|Velugam ";
            s_a[9]="Brancavare|Dagasi|Daman|Diu|Magarvara|Nagwa|Pariali|Passo Covo ";
            s_a[10]="Central Delhi|East Delhi|New Delhi|North Delhi|North East Delhi|North West Delhi|South Delhi|South West Delhi|West Delhi ";
            s_a[11]="Canacona|Candolim|Chinchinim|Cortalim|Goa|Jua|Madgaon|Mahem|Mapuca|Marmagao|Panji|Ponda|Sanvordem|Terekhol ";
            s_a[12]="Ahmedabad|Ahwa|Amod|Amreli|Anand|Anjar|Ankaleshwar|Babra|Balasinor|Banaskantha|Bansada|Bardoli|Bareja|Baroda|Barwala|Bayad|Bhachav|Bhanvad|Bharuch|Bhavnagar|Bhiloda|Bhuj|Billimora|Borsad|Botad|Chanasma|Chhota Udaipur|Chotila|Dabhoi|Dahod|Damnagar|Dang|Danta|Dasada|Dediapada|Deesa|Dehgam|Deodar|Devgadhbaria|Dhandhuka|Dhanera|Dharampur|Dhari|Dholka|Dhoraji|Dhrangadhra|Dhrol|Dwarka|Fortsongadh|Gadhada|Gandhi Nagar|Gariadhar|Godhra|Gogodar|Gondal|Halol|Halvad|Harij|Himatnagar|Idar|Jambusar|Jamjodhpur|Jamkalyanpur|Jamnagar|Jasdan|Jetpur|Jhagadia|Jhalod|Jodia|Junagadh|Junagarh|Kalawad|Kalol|Kapad Wanj|Keshod|Khambat|Khambhalia|Khavda|Kheda|Khedbrahma|Kheralu|Kodinar|Kotdasanghani|Kunkawav|Kutch|Kutchmandvi|Kutiyana|Lakhpat|Lakhtar|Lalpur|Limbdi|Limkheda|Lunavada|M.M.Mangrol|Mahuva|Malia-Hatina|Maliya|Malpur|Manavadar|Mandvi|Mangrol|Mehmedabad|Mehsana|Miyagam|Modasa|Morvi|Muli|Mundra|Nadiad|Nakhatrana|Nalia|Narmada|Naswadi|Navasari|Nizar|Okha|Paddhari|Padra|Palanpur|Palitana|Panchmahals|Patan|Pavijetpur|Porbandar|Prantij|Radhanpur|Rahpar|Rajaula|Rajkot|Rajpipla|Ranavav|Sabarkantha|Sanand|Sankheda|Santalpur|Santrampur|Savarkundla|Savli|Sayan|Sayla|Shehra|Sidhpur|Sihor|Sojitra|Sumrasar|Surat|Surendranagar|Talaja|Thara|Tharad|Thasra|Una-Diu|Upleta|Vadgam|Vadodara|Valia|Vallabhipur|Valod|Valsad|Vanthali|Vapi|Vav|Veraval|Vijapur|Viramgam|Visavadar|Visnagar|Vyara|Waghodia|Wankaner ";
            s_a[13]="Adampur Mandi|Ambala|Assandh|Bahadurgarh|Barara|Barwala|Bawal|Bawanikhera|Bhiwani|Charkhidadri|Cheeka|Chhachrauli|Dabwali|Ellenabad|Faridabad|Fatehabad|Ferojpur Jhirka|Gharaunda|Gohana|Gurgaon|Hansi|Hisar|Jagadhari|Jatusana|Jhajjar|Jind|Julana|Kaithal|Kalanaur|Kalanwali|Kalka|Karnal|Kosli|Kurukshetra|Loharu|Mahendragarh|Meham|Mewat|Mohindergarh|Naraingarh|Narnaul|Narwana|Nilokheri|Nuh|Palwal|Panchkula|Panipat|Pehowa|Ratia|Rewari|Rohtak|Safidon|Sirsa|Siwani|Sonipat|Tohana|Tohsam|Yamunanagar ";
            s_a[14]="Amb|Arki|Banjar|Bharmour|Bilaspur|Chamba|Churah|Dalhousie|Dehra Gopipur|Hamirpur|Jogindernagar|Kalpa|Kangra|Kinnaur|Kullu|Lahaul|Mandi|Nahan|Nalagarh|Nirmand|Nurpur|Palampur|Pangi|Paonta|Pooh|Rajgarh|Rampur Bushahar|Rohru|Shimla|Sirmaur|Solan|Spiti|Sundernagar|Theog|Udaipur|Una";
            s_a[15]="Akhnoor|Anantnag|Badgam|Bandipur|Baramulla|Basholi|Bedarwah|Budgam|Doda|Gulmarg|Jammu|Kalakot|Kargil|Karnah|Kathua|Kishtwar|Kulgam|Kupwara|Leh|Mahore|Nagrota|Nobra|Nowshera|Nyoma|Padam|Pahalgam|Patnitop|Poonch|Pulwama|Rajouri|Ramban|Ramnagar|Reasi|Samba|Srinagar|Udhampur|Vaishno Devi ";
            s_a[16]="Bagodar|Baharagora|Balumath|Barhi|Barkagaon|Barwadih|Basia|Bermo|Bhandaria|Bhawanathpur|Bishrampur|Bokaro|Bolwa|Bundu|Chaibasa|Chainpur|Chakardharpur|Chandil|Chatra|Chavparan|Daltonganj|Deoghar|Dhanbad|Dumka|Dumri|Garhwa|Garu|Ghaghra|Ghatsila|Giridih|Godda|Gomia|Govindpur|Gumla|Hazaribagh|Hunterganj|Ichak|Itki|Jagarnathpur|Jamshedpur|Jamtara|Japla|Jharmundi|Jhinkpani|Jhumaritalaiya|Kathikund|Kharsawa|Khunti|Koderma|Kolebira|Latehar|Lohardaga|Madhupur|Mahagama|Maheshpur Raj|Mandar|Mandu|Manoharpur|Muri|Nagarutatri|Nala|Noamundi|Pakur|Palamu|Palkot|Patan|Rajdhanwar|Rajmahal|Ramgarh|Ranchi|Sahibganj|Saraikela|Simaria|Simdega|Singhbhum|Tisri|Torpa ";
            s_a[17]="Afzalpur|Ainapur|Aland|Alur|Anekal|Ankola|Arsikere|Athani|Aurad|Bableshwar|Badami|Bagalkot|Bagepalli|Bailhongal|Bangalore|Bangalore Rural|Bangarpet|Bantwal|Basavakalyan|Basavanabagewadi|Basavapatna|Belgaum|Bellary|Belthangady|Belur|Bhadravati|Bhalki|Bhatkal|Bidar|Bijapur|Biligi|Chadchan|Challakere|Chamrajnagar|Channagiri|Channapatna|Channarayapatna|Chickmagalur|Chikballapur|Chikkaballapur|Chikkanayakanahalli|Chikkodi|Chikmagalur|Chincholi|Chintamani|Chitradurga|Chittapur|Cowdahalli|Davanagere|Deodurga|Devangere|Devarahippargi|Dharwad|Doddaballapur|Gadag|Gangavathi|Gokak|Gowribdanpur|Gubbi|Gulbarga|Gundlupet|H.B.Halli|H.D. Kote|Haliyal|Hampi|Hangal|Harapanahalli|Hassan|Haveri|Hebri|Hirekerur|Hiriyur|Holalkere|Holenarsipur|Honnali|Honnavar|Hosadurga|Hosakote|Hosanagara|Hospet|Hubli|Hukkeri|Humnabad|Hungund|Hunsagi|Hunsur|Huvinahadagali|Indi|Jagalur|Jamkhandi|Jewargi|Joida|K.R. Nagar|Kadur|Kalghatagi|Kamalapur|Kanakapura|Kannada|Kargal|Karkala|Karwar|Khanapur|Kodagu|Kolar|Kollegal|Koppa|Koppal|Koratageri|Krishnarajapet|Kudligi|Kumta|Kundapur|Kundgol|Kunigal|Kurugodu|Kustagi|Lingsugur|Madikeri|Madugiri|Malavalli|Malur|Mandya|Mangalore|Manipal|Manvi|Mashal|Molkalmuru|Mudalgi|Muddebihal|Mudhol|Mudigere|Mulbagal|Mundagod|Mundargi|Murugod|Mysore|Nagamangala|Nanjangud|Nargund|Narsimrajapur|Navalgund|Nelamangala|Nimburga|Pandavapura|Pavagada|Puttur|Raibag|Raichur|Ramdurg|Ranebennur|Ron|Sagar|Sakleshpur|Salkani|Sandur|Saundatti|Savanur|Sedam|Shahapur|Shankarnarayana|Shikaripura|Shimoga|Shirahatti|Shorapur|Siddapur|Sidlaghatta|Sindagi|Sindhanur|Sira|Sirsi|Siruguppa|Somwarpet|Sorab|Sringeri|Sriniwaspur|Srirangapatna|Sullia|T. Narsipur|Tallak|Tarikere|Telgi|Thirthahalli|Tiptur|Tumkur|Turuvekere|Udupi|Virajpet|Wadi|Yadgiri|Yelburga|Yellapur ";
            s_a[18]="Adimaly|Adoor|Agathy|Alappuzha|Alathur|Alleppey|Alwaye|Amini|Androth|Attingal|Badagara|Bitra|Calicut|Cannanore|Chetlet|Ernakulam|Idukki|Irinjalakuda|Kadamath|Kalpeni|Kalpetta|Kanhangad|Kanjirapally|Kannur|Karungapally|Kasargode|Kavarathy|Kiltan|Kochi|Koduvayur|Kollam|Kottayam|Kovalam|Kozhikode|Kunnamkulam|Malappuram|Mananthodi|Manjeri|Mannarghat|Mavelikkara|Minicoy|Munnar|Muvattupuzha|Nedumandad|Nedumgandam|Nilambur|Palai|Palakkad|Palghat|Pathaanamthitta|Pathanamthitta|Payyanur|Peermedu|Perinthalmanna|Perumbavoor|Punalur|Quilon|Ranni|Shertallai|Shoranur|Taliparamba|Tellicherry|Thiruvananthapuram|Thodupuzha|Thrissur|Tirur|Tiruvalla|Trichur|Trivandrum|Uppala|Vadakkanchery|Vikom|Wayanad ";
            s_a[19]="Agatti Island|Bingaram Island|Bitra Island|Chetlat Island|Kadmat Island|Kalpeni Island|Kavaratti Island|Kiltan Island|Lakshadweep Sea|Minicoy Island|North Island|South Island ";
            s_a[20]="Agar|Ajaigarh|Alirajpur|Amarpatan|Amarwada|Ambah|Anuppur|Arone|Ashoknagar|Ashta|Atner|Babaichichli|Badamalhera|Badarwsas|Badnagar|Badnawar|Badwani|Bagli|Baihar|Balaghat|Baldeogarh|Baldi|Bamori|Banda|Bandhavgarh|Bareli|Baroda|Barwaha|Barwani|Batkakhapa|Begamganj|Beohari|Berasia|Berchha|Betul|Bhainsdehi|Bhander|Bhanpura|Bhikangaon|Bhimpur|Bhind|Bhitarwar|Bhopal|Biaora|Bijadandi|Bijawar|Bijaypur|Bina|Birsa|Birsinghpur|Budhni|Burhanpur|Buxwaha|Chachaura|Chanderi|Chaurai|Chhapara|Chhatarpur|Chhindwara|Chicholi|Chitrangi|Churhat|Dabra|Damoh|Datia|Deori|Deosar|Depalpur|Dewas|Dhar|Dharampuri|Dindori|Gadarwara|Gairatganj|Ganjbasoda|Garoth|Ghansour|Ghatia|Ghatigaon|Ghorandogri|Ghughari|Gogaon|Gohad|Goharganj|Gopalganj|Gotegaon|Gourihar|Guna|Gunnore|Gwalior|Gyraspur|Hanumana|Harda|Harrai|Harsud|Hatta|Hoshangabad|Ichhawar|Indore|Isagarh|Itarsi|Jabalpur|Jabera|Jagdalpur|Jaisinghnagar|Jaithari|Jaitpur|Jaitwara|Jamai|Jaora|Jatara|Jawad|Jhabua|Jobat|Jora|Kakaiya|Kannod|Kannodi|Karanjia|Kareli|Karera|Karhal|Karpa|Kasrawad|Katangi|Katni|Keolari|Khachrod|Khajuraho|Khakner|Khalwa|Khandwa|Khaniadhana|Khargone|Khategaon|Khetia|Khilchipur|Khirkiya|Khurai|Kolaras|Kotma|Kukshi|Kundam|Kurwai|Kusmi|Laher|Lakhnadon|Lamta|Lanji|Lateri|Laundi|Maheshwar|Mahidpurcity|Maihar|Majhagwan|Majholi|Malhargarh|Manasa|Manawar|Mandla|Mandsaur|Manpur|Mauganj|Mawai|Mehgaon|Mhow|Morena|Multai|Mungaoli|Nagod|Nainpur|Narsingarh|Narsinghpur|Narwar|Nasrullaganj|Nateran|Neemuch|Niwari|Niwas|Nowgaon|Pachmarhi|Pandhana|Pandhurna|Panna|Parasia|Patan|Patera|Patharia|Pawai|Petlawad|Pichhore|Piparia|Pohari|Prabhapattan|Punasa|Pushprajgarh|Raghogarh|Raghunathpur|Rahatgarh|Raisen|Rajgarh|Rajpur|Ratlam|Rehli|Rewa|Sabalgarh|Sagar|Sailana|Sanwer|Sarangpur|Sardarpur|Satna|Saunsar|Sehore|Sendhwa|Seondha|Seoni|Seonimalwa|Shahdol|Shahnagar|Shahpur|Shajapur|Sheopur|Sheopurkalan|Shivpuri|Shujalpur|Sidhi|Sihora|Silwani|Singrauli|Sirmour|Sironj|Sitamau|Sohagpur|Sondhwa|Sonkatch|Susner|Tamia|Tarana|Tendukheda|Teonthar|Thandla|Tikamgarh|Timarani|Udaipura|Ujjain|Umaria|Umariapan|Vidisha|Vijayraghogarh|Waraseoni|Zhirnia ";
            s_a[21]="Achalpur|Aheri|Ahmednagar|Ahmedpur|Ajara|Akkalkot|Akola|Akole|Akot|Alibagh|Amagaon|Amalner|Ambad|Ambejogai|Amravati|Arjuni Merogaon|Arvi|Ashti|Atpadi|Aurangabad|Ausa|Babhulgaon|Balapur|Baramati|Barshi Takli|Barsi|Basmatnagar|Bassein|Beed|Bhadrawati|Bhamregadh|Bhandara|Bhir|Bhiwandi|Bhiwapur|Bhokar|Bhokardan|Bhoom|Bhor|Bhudargad|Bhusawal|Billoli|Brahmapuri|Buldhana|Butibori|Chalisgaon|Chamorshi|Chandgad|Chandrapur|Chandur|Chanwad|Chhikaldara|Chikhali|Chinchwad|Chiplun|Chopda|Chumur|Dahanu|Dapoli|Darwaha|Daryapur|Daund|Degloor|Delhi Tanda|Deogad|Deolgaonraja|Deori|Desaiganj|Dhadgaon|Dhanora|Dharani|Dhiwadi|Dhule|Dhulia|Digras|Dindori|Edalabad|Erandul|Etapalli|Gadhchiroli|Gadhinglaj|Gaganbavada|Gangakhed|Gangapur|Gevrai|Ghatanji|Golegaon|Gondia|Gondpipri|Goregaon|Guhagar|Hadgaon|Hatkangale|Hinganghat|Hingoli|Hingua|Igatpuri|Indapur|Islampur|Jalgaon|Jalna|Jamkhed|Jamner|Jath|Jawahar|Jintdor|Junnar|Kagal|Kaij|Kalamb|Kalamnuri|Kallam|Kalmeshwar|Kalwan|Kalyan|Kamptee|Kandhar|Kankavali|Kannad|Karad|Karjat|Karmala|Katol|Kavathemankal|Kedgaon|Khadakwasala|Khamgaon|Khed|Khopoli|Khultabad|Kinwat|Kolhapur|Kopargaon|Koregaon|Kudal|Kuhi|Kurkheda|Kusumba|Lakhandur|Langa|Latur|Lonar|Lonavala|Madangad|Madha|Mahabaleshwar|Mahad|Mahagaon|Mahasala|Mahaswad|Malegaon|Malgaon|Malgund|Malkapur|Malsuras|Malwan|Mancher|Mangalwedha|Mangaon|Mangrulpur|Manjalegaon|Manmad|Maregaon|Mehda|Mekhar|Mohadi|Mohol|Mokhada|Morshi|Mouda|Mukhed|Mul|Mumbai|Murbad|Murtizapur|Murud|Nagbhir|Nagpur|Nahavara|Nanded|Nandgaon|Nandnva|Nandurbar|Narkhed|Nashik|Navapur|Ner|Newasa|Nilanga|Niphad|Omerga|Osmanabad|Pachora|Paithan|Palghar|Pali|Pandharkawada|Pandharpur|Panhala|Paranda|Parbhani|Parner|Parola|Parseoni|Partur|Patan|Pathardi|Pathari|Patoda|Pauni|Peint|Pen|Phaltan|Pimpalner|Pirangut|Poladpur|Pune|Pusad|Pusegaon|Radhanagar|Rahuri|Raigad|Rajapur|Rajgurunagar|Rajura|Ralegaon|Ramtek|Ratnagiri|Raver|Risod|Roha|Sakarwadi|Sakoli|Sakri|Salekasa|Samudrapur|Sangamner|Sanganeshwar|Sangli|Sangola|Sanguem|Saoner|Saswad|Satana|Satara|Sawantwadi|Seloo|Shahada|Shahapur|Shahuwadi|Shevgaon|Shirala|Shirol|Shirpur|Shirur|Shirwal|Sholapur|Shri Rampur|Shrigonda|Shrivardhan|Sillod|Sinderwahi|Sindhudurg|Sindkheda|Sindkhedaraja|Sinnar|Sironcha|Soyegaon|Surgena|Talasari|Talegaon S.Ji Pant|Taloda|Tasgaon|Thane|Tirora|Tiwasa|Trimbak|Tuljapur|Tumsar|Udgir|Umarkhed|Umrane|Umrer|Urlikanchan|Vaduj|Velhe|Vengurla|Vijapur|Vita|Wada|Wai|Walchandnagar|Wani|Wardha|Warlydwarud|Warora|Washim|Wathar|Yavatmal|Yawal|Yeola|Yeotmal ";
            s_a[22]="Bishnupur|Chakpikarong|Chandel|Chattrik|Churachandpur|Imphal|Jiribam|Kakching|Kalapahar|Mao|Mulam|Parbung|Sadarhills|Saibom|Sempang|Senapati|Sochumer|Taloulong|Tamenglong|Thinghat|Thoubal|Ukhrul ";
            s_a[23]="Amlaren|Baghmara|Cherrapunjee|Dadengiri|Garo Hills|Jaintia Hills|Jowai|Khasi Hills|Khliehriat|Mariang|Mawkyrwat|Nongpoh|Nongstoin|Resubelpara|Ri Bhoi|Shillong|Tura|Williamnagar";
            s_a[24]="Aizawl|Champhai|Demagiri|Kolasib|Lawngtlai|Lunglei|Mamit|Saiha|Serchhip";
            s_a[25]=" Dimapur|Jalukie|Kiphire|Kohima|Mokokchung|Mon|Phek|Tuensang|Wokha|Zunheboto ";
            s_a[26]="Anandapur|Angul|Anugul|Aska|Athgarh|Athmallik|Attabira|Bagdihi|Balangir|Balasore|Baleswar|Baliguda|Balugaon|Banaigarh|Bangiriposi|Barbil|Bargarh|Baripada|Barkot|Basta|Berhampur|Betanati|Bhadrak|Bhanjanagar|Bhawanipatna|Bhubaneswar|Birmaharajpur|Bisam Cuttack|Boriguma|Boudh|Buguda|Chandbali|Chhatrapur|Chhendipada|Cuttack|Daringbadi|Daspalla|Deodgarh|Deogarh|Dhanmandal|Dharamgarh|Dhenkanal|Digapahandi|Dunguripali|G. Udayagiri|Gajapati|Ganjam|Ghatgaon|Gudari|Gunupur|Hemgiri|Hindol|Jagatsinghapur|Jajpur|Jamankira|Jashipur|Jayapatna|Jeypur|Jharigan|Jharsuguda|Jujumura|Kalahandi|Kalimela|Kamakhyanagar|Kandhamal|Kantabhanji|Kantamal|Karanjia|Kashipur|Kendrapara|Kendujhar|Keonjhar|Khalikote|Khordha|Khurda|Komana|Koraput|Kotagarh|Kuchinda|Lahunipara|Laxmipur|M. Rampur|Malkangiri|Mathili|Mayurbhanj|Mohana|Motu|Nabarangapur|Naktideul|Nandapur|Narlaroad|Narsinghpur|Nayagarh|Nimapara|Nowparatan|Nowrangapur|Nuapada|Padampur|Paikamal|Palla Hara|Papadhandi|Parajang|Pardip|Parlakhemundi|Patnagarh|Pattamundai|Phiringia|Phulbani|Puri|Puruna Katak|R. Udayigiri|Rairakhol|Rairangpur|Rajgangpur|Rajkhariar|Rayagada|Rourkela|Sambalpur|Sohela|Sonapur|Soro|Subarnapur|Sunabeda|Sundergarh|Surada|T. Rampur|Talcher|Telkoi|Titlagarh|Tumudibandha|Udala|Umerkote ";
            s_a[27]="Bahur|Karaikal|Mahe|Pondicherry|Purnankuppam|Valudavur|Villianur|Yanam ";
            s_a[28]="Abohar|Ajnala|Amritsar|Balachaur|Barnala|Batala|Bathinda|Chandigarh|Dasua|Dinanagar|Faridkot|Fatehgarh Sahib|Fazilka|Ferozepur|Garhashanker|Goindwal|Gurdaspur|Guruharsahai|Hoshiarpur|Jagraon|Jalandhar|Jugial|Kapurthala|Kharar|Kotkapura|Ludhiana|Malaut|Malerkotla|Mansa|Moga|Muktasar|Nabha|Nakodar|Nangal|Nawanshahar|Nawanshahr|Pathankot|Patiala|Patti|Phagwara|Phillaur|Phulmandi|Quadian|Rajpura|Raman|Rayya|Ropar|Rupnagar|Samana|Samrala|Sangrur|Sardulgarh|Sarhind|SAS Nagar|Sultanpur Lodhi|Sunam|Tanda Urmar|Tarn Taran|Zira ";
            s_a[29]="Abu Road|Ahore|Ajmer|Aklera|Alwar|Amber|Amet|Anupgarh|Asind|Aspur|Atru|Bagidora|Bali|Bamanwas|Banera|Bansur|Banswara|Baran|Bari|Barisadri|Barmer|Baseri|Bassi|Baswa|Bayana|Beawar|Begun|Behror|Bhadra|Bharatpur|Bhilwara|Bhim|Bhinmal|Bikaner|Bilara|Bundi|Chhabra|Chhipaborad|Chirawa|Chittorgarh|Chohtan|Churu|Dantaramgarh|Dausa|Deedwana|Deeg|Degana|Deogarh|Deoli|Desuri|Dhariawad|Dholpur|Digod|Dudu|Dungarpur|Dungla|Fatehpur|Gangapur|Gangdhar|Gerhi|Ghatol|Girwa|Gogunda|Hanumangarh|Hindaun|Hindoli|Hurda|Jahazpur|Jaipur|Jaisalmer|Jalore|Jhalawar|Jhunjhunu|Jodhpur|Kaman|Kapasan|Karauli|Kekri|Keshoraipatan|Khandar|Kherwara|Khetri|Kishanganj|Kishangarh|Kishangarhbas|Kolayat|Kota|Kotputli|Kotra|Kotri|Kumbalgarh|Kushalgarh|Ladnun|Ladpura|Lalsot|Laxmangarh|Lunkaransar|Mahuwa|Malpura|Malvi|Mandal|Mandalgarh|Mandawar|Mangrol|Marwar-Jn|Merta|Nadbai|Nagaur|Nainwa|Nasirabad|Nathdwara|Nawa|Neem Ka Thana|Newai|Nimbahera|Nohar|Nokha|Onli|Osian|Pachpadara|Pachpahar|Padampur|Pali|Parbatsar|Phagi|Phalodi|Pilani|Pindwara|Pipalda|Pirawa|Pokaran|Pratapgarh|Raipur|Raisinghnagar|Rajgarh|Rajsamand|Ramganj Mandi|Ramgarh|Rashmi|Ratangarh|Reodar|Rupbas|Sadulshahar|Sagwara|Sahabad|Salumber|Sanchore|Sangaria|Sangod|Sapotra|Sarada|Sardarshahar|Sarwar|Sawai Madhopur|Shahapura|Sheo|Sheoganj|Shergarh|Sikar|Sirohi|Siwana|Sojat|Sri Dungargarh|Sri Ganganagar|Sri Karanpur|Sri Madhopur|Sujangarh|Taranagar|Thanaghazi|Tibbi|Tijara|Todaraisingh|Tonk|Udaipur|Udaipurwati|Uniayara|Vallabhnagar|Viratnagar ";
            s_a[30]="Barmiak|Be|Bhurtuk|Chhubakha|Chidam|Chubha|Chumikteng|Dentam|Dikchu|Dzongri|Gangtok|Gauzing|Gyalshing|Hema|Kerung|Lachen|Lachung|Lema|Lingtam|Lungthu|Mangan|Namchi|Namthang|Nanga|Nantang|Naya Bazar|Padamachen|Pakhyong|Pemayangtse|Phensang|Rangli|Rinchingpong|Sakyong|Samdong|Singtam|Siniolchu|Sombari|Soreng|Sosing|Tekhug|Temi|Tsetang|Tsomgo|Tumlong|Yangang|Yumtang ";
            s_a[31]="Ambasamudram|Anamali|Arakandanallur|Arantangi|Aravakurichi|Ariyalur|Arkonam|Arni|Aruppukottai|Attur|Avanashi|Batlagundu|Bhavani|Chengalpattu|Chengam|Chennai|Chidambaram|Chingleput|Coimbatore|Courtallam|Cuddalore|Cumbum|Denkanikoitah|Devakottai|Dharampuram|Dharmapuri|Dindigul|Erode|Gingee|Gobichettipalayam|Gudalur|Gudiyatham|Harur|Hosur|Jayamkondan|Kallkurichi|Kanchipuram|Kangayam|Kanyakumari|Karaikal|Karaikudi|Karur|Keeranur|Kodaikanal|Kodumudi|Kotagiri|Kovilpatti|Krishnagiri|Kulithalai|Kumbakonam|Kuzhithurai|Madurai|Madurantgam|Manamadurai|Manaparai|Mannargudi|Mayiladuthurai|Mayiladutjurai|Mettupalayam|Metturdam|Mudukulathur|Mulanur|Musiri|Nagapattinam|Nagarcoil|Namakkal|Nanguneri|Natham|Neyveli|Nilgiris|Oddanchatram|Omalpur|Ootacamund|Ooty|Orathanad|Palacode|Palani|Palladum|Papanasam|Paramakudi|Pattukottai|Perambalur|Perundurai|Pollachi|Polur|Pondicherry|Ponnamaravathi|Ponneri|Pudukkottai|Rajapalayam|Ramanathapuram|Rameshwaram|Ranipet|Rasipuram|Salem|Sankagiri|Sankaran|Sathiyamangalam|Sivaganga|Sivakasi|Sriperumpudur|Srivaikundam|Tenkasi|Thanjavur|Theni|Thirumanglam|Thiruraipoondi|Thoothukudi|Thuraiyure|Tindivanam|Tiruchendur|Tiruchengode|Tiruchirappalli|Tirunelvelli|Tirupathur|Tirupur|Tiruttani|Tiruvallur|Tiruvannamalai|Tiruvarur|Tiruvellore|Tiruvettipuram|Trichy|Tuticorin|Udumalpet|Ulundurpet|Usiliampatti|Uthangarai|Valapady|Valliyoor|Vaniyambadi|Vedasandur|Vellore|Velur|Vilathikulam|Villupuram|Virudhachalam|Virudhunagar|Wandiwash|Yercaud ";
            s_a[32]="Agartala|Ambasa|Bampurbari|Belonia|Dhalai|Dharam Nagar|Kailashahar|Kamal Krishnabari|Khopaiyapara|Khowai|Phuldungsei|Radha Kishore Pur|Tripura ";
            s_a[33]="Achhnera|Agra|Akbarpur|Aliganj|Aligarh|Allahabad|Ambedkar Nagar|Amethi|Amiliya|Amroha|Anola|Atrauli|Auraiya|Azamgarh|Baberu|Badaun|Baghpat|Bagpat|Baheri|Bahraich|Ballia|Balrampur|Banda|Bansdeeh|Bansgaon|Bansi|Barabanki|Bareilly|Basti|Bhadohi|Bharthana|Bharwari|Bhogaon|Bhognipur|Bidhuna|Bijnore|Bikapur|Bilari|Bilgram|Bilhaur|Bindki|Bisalpur|Bisauli|Biswan|Budaun|Budhana|Bulandshahar|Bulandshahr|Capianganj|Chakia|Chandauli|Charkhari|Chhata|Chhibramau|Chirgaon|Chitrakoot|Chunur|Dadri|Dalmau|Dataganj|Debai|Deoband|Deoria|Derapur|Dhampur|Domariyaganj|Dudhi|Etah|Etawah|Faizabad|Farrukhabad|Fatehpur|Firozabad|Garauth|Garhmukteshwar|Gautam Buddha Nagar|Ghatampur|Ghaziabad|Ghazipur|Ghosi|Gonda|Gorakhpur|Gunnaur|Haidergarh|Hamirpur|Hapur|Hardoi|Harraiya|Hasanganj|Hasanpur|Hathras|Jalalabad|Jalaun|Jalesar|Jansath|Jarar|Jasrana|Jaunpur|Jhansi|Jyotiba Phule Nagar|Kadipur|Kaimganj|Kairana|Kaisarganj|Kalpi|Kannauj|Kanpur|Karchhana|Karhal|Karvi|Kasganj|Kaushambi|Kerakat|Khaga|Khair|Khalilabad|Kheri|Konch|Kumaon|Kunda|Kushinagar|Lalganj|Lalitpur|Lucknow|Machlishahar|Maharajganj|Mahoba|Mainpuri|Malihabad|Mariyahu|Math|Mathura|Mau|Maudaha|Maunathbhanjan|Mauranipur|Mawana|Meerut|Mehraun|Meja|Mirzapur|Misrikh|Modinagar|Mohamdabad|Mohamdi|Moradabad|Musafirkhana|Muzaffarnagar|Nagina|Najibabad|Nakur|Nanpara|Naraini|Naugarh|Nawabganj|Nighasan|Noida|Orai|Padrauna|Pahasu|Patti|Pharenda|Phoolpur|Phulpur|Pilibhit|Pitamberpur|Powayan|Pratapgarh|Puranpur|Purwa|Raibareli|Rampur|Ramsanehi Ghat|Rasara|Rath|Robertsganj|Sadabad|Safipur|Sagri|Saharanpur|Sahaswan|Sahjahanpur|Saidpur|Salempur|Salon|Sambhal|Sandila|Sant Kabir Nagar|Sant Ravidas Nagar|Sardhana|Shahabad|Shahganj|Shahjahanpur|Shikohabad|Shravasti|Siddharthnagar|Sidhauli|Sikandra Rao|Sikandrabad|Sitapur|Siyana|Sonbhadra|Soraon|Sultanpur|Tanda|Tarabganj|Tilhar|Unnao|Utraula|Varanasi|Zamania ";
            s_a[34]="Almora|Bageshwar|Bhatwari|Chakrata|Chamoli|Champawat|Dehradun|Deoprayag|Dharchula|Dunda|Haldwani|Haridwar|Joshimath|Karan Prayag|Kashipur|Khatima|Kichha|Lansdown|Munsiari|Mussoorie|Nainital|Pantnagar|Partapnagar|Pauri Garhwal|Pithoragarh|Purola|Rajgarh|Ranikhet|Roorkee|Rudraprayag|Tehri Garhwal|Udham Singh Nagar|Ukhimath|Uttarkashi ";
            s_a[35]="Adra|Alipurduar|Amlagora|Arambagh|Asansol|Balurghat|Bankura|Bardhaman|Basirhat|Berhampur|Bethuadahari|Birbhum|Birpara|Bishanpur|Bolpur|Bongoan|Bulbulchandi|Burdwan|Calcutta|Canning|Champadanga|Contai|Cooch Behar|Daimond Harbour|Dalkhola|Dantan|Darjeeling|Dhaniakhali|Dhuliyan|Dinajpur|Dinhata|Durgapur|Gangajalghati|Gangarampur|Ghatal|Guskara|Habra|Haldia|Harirampur|Harishchandrapur|Hooghly|Howrah|Islampur|Jagatballavpur|Jalpaiguri|Jhalda|Jhargram|Kakdwip|Kalchini|Kalimpong|Kalna|Kandi|Karimpur|Katwa|Kharagpur|Khatra|Krishnanagar|Mal Bazar|Malda|Manbazar|Mathabhanga|Medinipur|Mekhliganj|Mirzapur|Murshidabad|Nadia|Nagarakata|Nalhati|Nayagarh|Parganas|Purulia|Raiganj|Rampur Hat|Ranaghat|Seharabazar|Siliguri|Suri|Takipur|Tamluk";
            var state_selected="<?php echo $posted['state']; ?>";
            var city_selected="<?php echo $posted['city']; ?>";
            function print_state(state_id){
            	// given the id of the <select> tag as function argument, it inserts <option> tags
            	var option_str = document.getElementById(state_id);
            	option_str.length=0;
            	option_str.options[0] = new Option('Select State','');
            	//option_str.selectedIndex = 0;
            	for (var i=0; i<state_arr.length; i++) {
            	    if(state_arr[i]==state_selected){
            	        //console.log(state_selected);
            	        option_str.selectedIndex = i+1;
            	    }
            		option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i]);
            	}
            }
            
            function print_city(city_id, city_index){
            	var option_str = document.getElementById(city_id);
            	option_str.length=0;	// Fixed by Julian Woods
            	option_str.options[0] = new Option('Select City','');
            	option_str.selectedIndex = 0;
            	var city_arr = s_a[city_index].split("|");
            	for (var i=0; i<city_arr.length; i++) {
            	    if(city_arr[i]==city_selected){
            	        option_str.selectedIndex = i+1;
            	    }
            		option_str.options[option_str.length] = new Option(city_arr[i],city_arr[i]);
            	}
            	$("#city").val(city_selected);
            }
            print_state("state");
            $("#state").val(state_selected);
            $("#state").trigger('change');
        </script>
    </body>
</html>