<?php
require "function.php";


// session
$StudentID = $_SESSION['StudentID'];
$STUDPASS = $_SESSION['STUDPASS'];
$nama_user =$_SESSION['USERNAME'];

// waktu 
date_default_timezone_set("Asia/Jakarta");
$waktu = date("H:i");

// query form pesan
if (isset($_POST["post"])) {
    $pesan = $_POST['pesan'];
    $tema = $_POST['tema'];
    $insert = "INSERT INTO `pesan` (`id_pesan`, `StudentID`, `nama_user`, `pesan`, `waktu`, `tema`) VALUES (NULL, '$StudentID','$nama_user', '$pesan', '$waktu', '$tema')";
    mysqli_query($conn, $insert);
}

// menampilkan selain yang login
$select = "SELECT * FROM `tblstudent` WHERE StudentID != $StudentID";
$select_result = mysqli_query($conn, $select);

// isi data ke dalam tabel komentar
if (isset($_POST["komen"])) {
    $id_pesan = $_POST['id_pesan'];
    $komentar = $_POST['komentar'];

    $insert_komentar = "INSERT INTO `comment` (`id_komen`, `StudentID`,`id_pesan`, `nama_user`, `komentar`, `waktu`) VALUES (NULL, '$StudentID','$id_pesan', '$nama_user', '$komentar', '$waktu')";
    mysqli_query($conn, $insert_komentar);
}

// tampilkan komentar
$select_komentar = "SELECT * FROM `pesan` JOIN comment ON comment.id_pesan = pesan.id_pesan";
$result_komentar = mysqli_query($conn, $select_komentar);
$cek_komen = mysqli_fetch_assoc($result_komentar);

if (isset($_POST['cari'])) {
    $cari = $_POST['keyword'];
    $query = "SELECT * FROM `tblstudent` JOIN pesan ON pesan.StudentID = tblstudent.StudentID WHERE tema LIKE '%$cari%'";
    $result = mysqli_query($conn, $query);
} else {
    $query = "SELECT * FROM `tblstudent` JOIN pesan ON pesan.StudentID = tblstudent.StudentID";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
}

// cek member yang terdaftar
$member = mysqli_query($conn, "SELECT * FROM `tblstudent`");
$cek_member = mysqli_num_rows($member);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>div ID</title>
    <link rel="icon" href="img/Logo.png" type="image/png" sizes="32x32">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.8/typed.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
.content{
    width: 1468px;
    margin-left: -199px;
}
#maincontent{
    margin-top: -47px;
}

    </style>
</head>

<body>
    <!-- button posting -->
    <a href="#posting"><button type="button" class="btn btn-success buttonPost" onclick="show_hide2()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle mr-2" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg>add Post</button></a>
    <!-- navbar -->

    <!--jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="jumboDesc mt-4">
            <h1>Tempat-nya <BR><span id="typed"> </span> <br> Belajar dan Berdiskusi bersama </h1>
            <form action="" method="POST">
                <button class="btn btn-success" style="border-radius: 50%;" type="submit" name="cari">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
                <input type="text" name="keyword" placeholder="example : Web Development ect...  " class="text-center">
            </form>
        </div>
    </div>

    <!-- body -->
    <div class="content">
        <div class="rowContent">
            <div class="displayForm">
                <div class="container">
                    <h3 class="text-center">Discussion Form</h3>
                    <hr>
                    <?php foreach ($result as $data) : ?>
                        <div class="isi">
                            <table>
                                <tr>
                                    <td><img src="img/profile/<?= $data['profile']; ?>" class="profile_user"></td>
                                    <td>
                                        <h4 id="nama_user"><?= $data['nama_user']; ?></h4>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <div class="tema text-center" style="width:200px; background-color:cadetblue; color:white; padding:5px; box-sizing: border-box; border-radius:20px;">
                                <span><?= $data['tema']; ?></span>
                            </div>
                            <br>
                            <div class="post" style="position: relative;">
                                <table>
                                    <tr>
                                        <td>
                                            <p><?= $data['pesan']; ?></p>
                                        </td>
                                    </tr>
                                </table>
                                <span style="position:absolute; right:0; bottom:0;"><?= $data['waktu']; ?></span>
                                <div class="comment">
                                    <hr style="width: 100%; border: 1px solid grey">
                                    <span style="color: grey;">komentar...</span>
                                    <div class=" isi_komen">
                                        <table>
                                            <?php foreach ($result_komentar as $komen) : ?>
                                                <?php if ($komen['id_pesan'] == $data['id_pesan']) : ?>
                                                    <tr>
                                                        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
                                                            <span style="font-weight: 600;"><?= $komen['nama_user']; ?></span>
                                                        </td>
                                                        <td><?= $komen['komentar']; ?></td>
                                                    </tr>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                    <div id="komen">
                                        <br>
                                        <form action="" method="POST">
                                            <img src="img/profile/<?= $data['profile']; ?>" id="users"><span>
                                                <input type="text" name="id_pesan" value="<?= $data['id_pesan']; ?>" style="display:none; visibility:hidden">
                                                <textarea name="komentar" cols="80" rows="1" style="border: none; outline:none; border-bottom:1px solid cornflowerblue;" placeholder="tulis disini...."></textarea>
                                                <span><button type="submit" name="komen"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></button></span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="communityMembers">
                <h3 class="text-center">Community Members</h3>
                <hr>
                <div class="container">
                    <p class="text-center">Member's : <span style="color:#42ba96;"><?= $cek_member; ?></span></p>
                    <table>
                        <?php foreach ($select_result as $member) : ?>
                            <tr>
                                <td><img src="img/profile/<?= $member['profile']; ?>"></td>
                                <td><span><?= $member['STUDUSERNAME'];  ?></span></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Users -->
    <div class="user" id="posting" style="display: none;">
        <div class="userContainer">
            <div class="container">
                <img src="img/profile/<?= $profile; ?>" width="64" height="64" class="rounded-circle mr-3"><span><?= $nama_user; ?></span>
                <br><br>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="tema">Pilih Tema :</label><br>
                        <select class="form-control" id="posting" name="tema">
                            <option value="Web Development">Web Development</option>
                            <option value="Graphic Design">Graphic Design</option>
                            <option value="Mobile Programming">Mobile Programming</option>
                            <option value="Data Analyst">Data Analyst</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="posting">bingung? ayo langsung tanyakan</label><br>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pesan"></textarea>
                    </div>
                    
                    <input type="submit" class="btn btn-block btn-success" value="Post" name="post">
            </div>
        </div>
        </form>
    </div>

    <script>
        new Typed('#typed', {
            strings: ['"Belajar Bareng"', '"Diskusi Bareng"', '"Pinter Bareng"', '"Sukses Bareng"'],
            typeSpeed: 40,
            delaySpeed: 90,
            loop: true
        });
    </script>
    <script>
        var b;

        function show_hide2() {
            if (b == 1) {
                document.getElementById("posting").style.display = "inline";
                return b = 0;
            } else {
                document.getElementById("posting").style.display = "none";
                return b = 1;
            }
        }
    </script>
    <script src="js/bootstrap.js"></script>
    <footer>
        <center>
            <span>&copy; Kelompok 2 (2022)</span>
        </center>
    </footer>
</body>

</html>