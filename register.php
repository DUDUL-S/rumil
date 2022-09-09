<?php  
require_once ("include/initialize.php"); 
if (isset($_SESSION['StudentID'])) {
  # code...
  redirect('index.php');
}
?>

 
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <link rel="icon" href="img/Logo.png">
    <title>Register Rumah Ilmu</title>

    <!-- Icons font CSS-->
    <link href="<?php echo web_root;?>plugins/registration/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo web_root;?>plugins/registration/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo web_root;?>plugins/registration/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo web_root;?>plugins/registration/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo web_root;?>plugins/registration/css/main.css" rel="stylesheet" media="all">
    <style type= "text/css">

.gambar{

}

.input-group {
  position: relative;
  width: 250px;
  margin-top: 35px;
  
}

.input-group input
{
width: 100%;
background: transparent;
color: black;
border: none;
outline: none;
box-shadow: none;
font-size: 1em;
letter-spacing: 0.1em;
padding: 10px 0 5px;
}
.input-group span
{
position: absolute;
left: 0;
padding: 10px 0 5px;
color: grey;
text-transform: uppercase;
pointer-events: none;
letter-spacing: 0.1em;
transition: 0.5s;
}
.input-group input:valid ~ span,
.input-group input:focus ~ span
{
  color: blue;
  transform: translateY(-15px);
  font-size: 0.65em;
}
.input-group i
{
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 2px;
  background: #fff;
  overflow: hidden;
}
.input-group i::before
{
  content: '';
  position: absolute;

  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, #ff1b69, #ff0, #2196f3, #9c27b0, #ff1b69);
  animation: animate 2s linear infinite;
  transition: 0.5s;
}

.input-group input:valid ~ i ::before,
.input-group input:focus ~ i ::before
{
}
@keyframes animate
{
  0%
{
background-position-x: 0;
}
100%
{
  background-position-x: 250px;
}
}

.radio-buttons {
    width: 100%;
    margin: 0 auto;
    text-align: center;
}

.custom-radio input {
    display: none;
}

.radio-btn {
    margin: 10px;
    width: 100px;
    height: 100px;
    border: 3px solid transparent;
    display: inline-block;
    border-radius: 50%;
    position: relative;
    text-align: center;
    box-shadow: 0 0 20px #c3c3c367;
    cursor: pointer;
}

.radio-btn>i {
    color: blue;
    background-color: #8373e6;
    font-size: 20px;
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%) scale(4);
    border-radius: 50px;
    padding: 3px;
    transition: 0.2s;
    pointer-events: none;
    opacity: 0;
}
.custom-radio input:checked+.radio-btn {
    border: 3px solid #8373e6;
}

.custom-radio input:checked+.radio-btn>i {
    opacity: 1;
    transform: translateX(-50%) scale(1);
}

.profile-img img{
    width: 75%;
    margin-top: 12px;
}
    </style>    
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form method="POST" action="register.php">
                        <div class="input-group">
                            <input class="input--style-1" type="text" name="FNAME">
                            <span>First Name</span>
                            <i></i>
                        </div>

                        <div class="input-group">
                            <input type="text" name="LNAME">
                            <span> Lastname </span>
                            <i></i>
                        </div>
                        <div class="input-group">
                            <input type="text" name="ADDRESS">
                            <span> Address </span>
                            <i></i>
                        </div>
                        <div class="input-group">
                            <input type="number" name="PHONE">
                            <span> Phone </span>
                            <i></i>
                        </div>
                        <div class="input-group">
                            <input type="text" name="USERNAME">
                            <span> Username </span>
                            <i></i>
                        </div>
                        <div class="input-group">
                            <input type="password" name="PASS">
                            <span> Password </span>
                            <i></i>
                            </div>
                        <span>Pilih foto profil?</span>    
                        <div class="radio-buttons">
                            <label class="custom-radio">
                                <input type="radio" name="profile" value="cat.png">
                                <span class="radio-btn">
                                <div class="profile-img">
                                    <img src="img/profile/cat.png">
                                </div>
                            </label>
                            <label class="custom-radio">
                                <input type="radio" name="profile" value="koala.png">
                                <span class="radio-btn">
                                <div class="profile-img">
                                    <img src="img/profile/koala.png">
                                </div>
                            </label>
                            <label class="custom-radio">
                                <input type="radio" name="profile" value="panda.png">
                                <span class="radio-btn">
                                <div class="profile-img">
                                    <img src="img/profile/panda.png">
                                </div>
                            </label>
                            <label class="custom-radio">
                                <input type="radio" name="profile" value="bear.png">
                                <span class="radio-btn">
                                <div class="profile-img">
                                    <img src="img/profile/bear.png">
                                </div>
                            </label>
                            <label class="custom-radio">
                                <input type="radio" name="profile" value="rabbit.png">
                                <span class="radio-btn">
                                <div class="profile-img">
                                    <img src="img/profile/rabbit.png">
                                </div>
                            </label>
                            <label class="custom-radio">
                                <input type="radio" name="profile" value="puffer-fish.png">
                                <span class="radio-btn">
                                <div class="profile-img">
                                    <img src="img/profile/puffer-fish.png">
                                </div>
                            </label>
                            <label class="custom-radio">
                                <input type="radio" name="profile" value="fox.png">
                                <span class="radio-btn">
                                <div class="profile-img">
                                    <img src="img/profile/fox.png">
                                </div>
                            </label>
                            <label class="custom-radio">
                                <input type="radio" name="profile" value="deer.png">
                                <span class="radio-btn">
                                <div class="profile-img">
                                    <img src="img/profile/deer.png">
                                </div>
                            </label>
                        </div>                                      
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="btnRegister">Submit</button>
                            <a href="login.php">Back to Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo web_root;?>plugins/registration/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo web_root;?>plugins/registration/vendor/select2/select2.min.js"></script>
    <script src="<?php echo web_root;?>plugins/registration/vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo web_root;?>plugins/registration/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
<script src="js/bootstrap.js"></script>
    <script type="text/javascript">
        function fileValidation() {
            var fileInput = document.getElementById('image');
            var filePath = fileInput.value;
            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
            if (!allowedExtensions.exec(filePath)) {
                alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
                fileInput.value = '';
                return false;
            } else {
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('gambar').innerHTML = '<img src="' + e.target.result + '" width="200" height="200"/>';
                    };
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        }
    </script>
<?php 
if (isset($_POST['btnRegister'])) {
    # code...  

    $student = New Student(); 
    $student->Fname         = $_POST['FNAME']; 
    $student->Lname         = $_POST['LNAME'];
    $student->Address       = $_POST['ADDRESS']; 
    $student->MobileNo         = $_POST['PHONE'];  
    $student->STUDUSERNAME      = $_POST['USERNAME'];
    $student->STUDPASS      = sha1($_POST['PASS']);
    $student->profile       =$_POST['profile'];
    $nama_file_baru.= '.';
    $student->create();  
    message("Selamat Kamu Sudah Bergabung di Rumah Ilmu","Sukses");
    redirect("login.php");
}
if(isset($_POST['btnRegister'])){
    $nama_file = $_FILES['profile']['name'];
    $tmpName = $_FILES['profile']['tmp_name'];

    $nama_file_baru = uniqid();
    $nama_file_baru.= $ekstensiGambar;
    $pindah = move_uploaded_file($tmpName, '.../img/profile/' . $nama_file_baru);
    return $nama_file_baru;

    message("Selamat Kamu Sudah Bergabung di Rumah Ilmu","Sukses");
    redirect("login.php");
}


?> 