<?php
$conn = mysqli_connect("localhost", "root", "", "db_elearning");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

function tambah($data)
{
    global $conn;

    $STUDUSERNAME = htmlspecialchars($data['STUDUSERNAME']);
    $STUDPASS  = htmlspecialchars($data['STUDPASS']);

    // cek username sudah ada atau belu
    $cek = mysqli_query($conn, "SELECT * FROM tblstudent WHERE STUDUSERNAME = '$STUDUSERNAME'");
    if (mysqli_fetch_assoc($cek)) {
        echo "<script>
                alert('username sudah ada');
            </script>";
        return false;
    }

    // ubah password
    $STUDPASS = md5($STUDPASS, PASSWORD_DEFAULT);

    // upload profile terlebih dahulu sebelum menjalankan query
    $profile = upload();
    if (!$profile) {
        return false;
    }


    $query = "INSERT INTO `tblstudent` (`StudentID`, `STUDUSERNAME`, `STUDPASS`, `profile`) VALUES (NULL, '$STUDUSERNAME', '$STUDPASS', '$profile')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $nama_file = $_FILES['profile']['name'];
    $ukuran_file = $_FILES['profile']['size'];
    $error = $_FILES['profile']['error'];
    $tmpName = $_FILES['profile']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
        alert('Masukan foto profil dahulu');
        document.location.href = 'index-signin.php';
        </script>";

        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $nama_file);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('Yang anda masukan bukan gambar');
        document.location.href = 'index-signin.php';
        </script>";

        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuran_file > 2000000) {
        echo "<script>
        alert('Ukuran gambar terlalu besar');
        document.location.href = 'index-signin.php';
        </script>";

        return false;
    }

    // setelah gambar di upload masukan ke dalam file
    // generate nama gambar baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensiGambar;
    $pindah = move_uploaded_file($tmpName, 'img/profile/' . $nama_file_baru);
    return $nama_file_baru;
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tblstudent WHERE StudentID = $id");
    return mysqli_affected_rows($conn);
}
