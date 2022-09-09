<!-- <h1><?php echo $title;?></h1> -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">
    <style media= "screen">


.home{
  border-left-style: inset;
  border-right-style: inset;
  width: 1035px;
}
/***Garis Bawah ***/
.bagian{
  
}
.garis{
  width: 960px;
  height: 45px;
  position: relative;
  display: inline-block;
  text-transform: uppercase ;
  }
.garis::after, .garis::before{
  content: '';
  position:absolute;
  margin: auto;
  height: 4px;
  background: #FFF;
  width: 318px;
  top:45%;
  }
  .garis::after{
    left:-1%
  }
  .garis::before{
    right:0%
  }
  .line{
  width: 960px;
  height: 45px;
  position: relative;
  display: inline-block;
  text-transform: uppercase ;
  }
.line::after, .line::before{
  content: '';
  position:absolute;
  margin: auto;
  height: 4px;
  background: #FFF;
  width: 372px;
  top:45%;
  }

  .line::after{
    left:-1%
  }
  .line::before{
    right:0%
  }
/*** Service ***/
.service-item {
    background: var(--light);
    transition: .5s;
}

.service-item:hover {
    margin-top: -10px;
    background: var(--primary);
}

.service-item * {
    transition: .5s;
}

.service-item:hover * {
    color: var(--light) !important;
}
.col-lg-6{
  margin-left: 20px;
}
.col-lg-12{
    margin-top: -110px;
    margin-left: 20px;
}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.slide{
    height: 350px;
    width: 700px;
    transform: translate(-50%,-50%);
    margin-top: 220px;
    margin-left: 480px;
    overflow: hidden;
    
}
.wrapper{
    width: 100%;
    display: flex;
    animation: slide 30s infinite;
}
@keyframes slide{
    0%{
        transform: translateX(0);
    }
    25%{
        transform: translateX(0);
    }
    30%{
        transform: translateX(-100%);
    }
    50%{
        transform: translateX(-100%);
    }
    55%{
        transform: translateX(-200%);
    }
    75%{
        transform: translateX(-200%);
    }
    80%{
        transform: translateX(-300%);
    }
    100%{
        transform: translateX(-300%);
    }
}

.container-lg, .container-xl, .container-xxl {
    width: 100%;
    padding-right: var(--bs-gutter-x, .75rem);
    padding-left: var(--bs-gutter-x, .75rem);
    margin-right: auto;
    margin-left: auto;
    line-height: 1.5;
    box-sizing: border-box;
}
.container-xxl { box-sizing: border-box;
    border: 90px;
    border-color: #F0FBFC;
}
.g-4, .gy-4 {
    --bs-gutter-y: 1.5rem;
}

.col-lg-5 {
    flex: 0 0 auto;
    width: 47%;
    margin-inline: 6px;
    margin-bottom: 8px;
}
.col-lg-3 {
    flex: 0 0 auto;
    width: 32%;
    margin-inline: 6px;
    margin-bottom: 8px;
}
.service-item {
    background: lightblue;
    transition: 1.5s;
}
:root {
    --primary: #9799BA;
    --light: #F0FBFC;
    --dark: #181d38;
}
.text-center {
    text-align: center !important;
}
.service-item * {
    transition: 1.5s;
}
.p-4 {
    padding: 1.5rem !important;
}
.mb-3 {
    margin-bottom: 1rem !important;
}

.raw{
--bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: 5px;
    margin-right: -3px;
    margin-left: 15px;
    margin-bottom: 6px;
}
.row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(var(--bs-gutter-y) * -1);
    margin-right: calc(var(--bs-gutter-x) / -2);
    margin-left: calc(var(--bs-gutter-x) / -2);
}
.frow {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    color: black;
    margin-top: calc(var(--bs-gutter-y) * -1);
    margin-right: calc(var(--bs-gutter-x) / -2);
    margin-left: 200px;
}
.ul{
  list-style: none;
}
.footer{
  background-color: lightblue;
    padding: 70px 0;    
    width: 1659px;
    margin: auto;
    margin-left: -310px;
}
.footer-col h4{
  font-size: 18px;
  color: #2f8f9d;
  text-transform: capitalize;
  margin-bottom: 35px;
  font-weight: 500;
  position: relative;
}
.footer-col h4::before{
  content: '';
  position: absolute;
  left:0;
  bottom: -10px;
  background-color: #e91e63;
  height: 2px;
  box-sizing: border-box;
  width: 115px;
}
.footer-col ul li:not(:last-child){
  margin-bottom: 10px;
}
.footer-col ul li a{
  font-size: 16px;
  text-transform: capitaLize;
  color: #2f8f9d;
  text-decoration: none;
  font-weight: 300;
  
  display: block;
  transition: all 0.3s case;
}
.footer-col ul li a:hover{
  color: #ffffff;
  padding-left: 8px;
}
.footer-col .social-links a{
  display: inLine-block;
  height: 40px;
  width: 40px;
  background-color: rgba(255,255,255,0.2);
  margin:0 10px 10px 0;
  text-align: center;
  line-height: 40px;
  border-radius: 50%;
  color: #2f8f9d;
  transition: all 0.5s case;
}
.footer-col .social-links a:hover{
  color: #24262b;
  background-color: #ffffff;
}
.footer-col a{
  
}
/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}
    </style>
  </head>
<body>
  <div class ="slide">
    <div class= "wrapper">
  <img src= "img/Banner Pilihan.png">
  <img src= "img/Q1.png">
  <img src= "img/Q2.png">
  <img src= "img/Q3.png">
  <img src= "img/Q4.png">
  <img src= "img/Q5.png">

    </div>
      </div>
<div class ="home">      
<div class="col-lg-12">  
<h4>Tentang Rumah Ilmu</h4>
    <p> Rumah ilmu merupakan aplikasi berbasis website yang dibuat oleh 6 orang siswa dan siswi dari jurusan Rekayasa Perangkat Lunak (RPL) dalam rangka mengerjakan tugas project yang diberikan oleh Guru mata pelajaran PWPB. Aplikasi berbasis website ini dibangun dengan tujuan menyediakan ilmu seperti E-Book, Video Pembelajaran, dan juga Forum Diskusi bagi siswa. Ilmu bisa didapat dari mana saja, tidak hanya dari sekolah. Website inipun sebenarnya tidak hanya diperuntukkan bagi siswa saja tetapi bagi orang yang ingin mencari ilmu.</p> 
</div>
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
  <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg>
                            <h5 class="mb-3">E-Book</h5>
                            <p>Sumber Ilmu dunia programming dalam bentuk Buku Digital secara Online maupun Offline </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-btn" viewBox="0 0 16 16">
  <path d="M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
</svg>
                            <h5 class="mb-3">Video Pembelajaran</h5>
                            <p>Berisi Animasi Tutorial pembelajaran dalam dunia programming secara bertahap</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
</svg>
                            <h5 class="mb-3">Diskusi</h5>
                            <p>Tempat para Programmer bertukar pikiran mengenai seputar ilmu progamming dan berbagi Tips & Tricks</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>                
<div  class="col-lg-6">
  <h4>Visi</h4> 
  <p> Menjadikan Aplikasi berbasis Website ini bermanfaat bagi siwa dan siswi.</p>
  <p> Mempermudah siswa dan siwi di Jurusan RPL mendapat materi seputar jurusannya.</p>
  <h4>Misi</h4>
  <p> Menyediakan berbagai E-Book, Video Pembelajaran seputar RPL, dan Forum diskusi.</p> 
  
  <div class= "Bagian"> 
    <center><h2 class ="garis">Front End & Back End</div></h2><center>
        <div class="raw g-4">
        <div class="raw g-4 col-lg-5">
        <img src="img/Abdul.png">
        </div>
        <div class="raw g-4 col-lg-5">
        <img src="img/Amat.png">
        </div>
      </div>
  </div>
    <center><h2 class ="line"><p>Data Analyst</p></h2></center>
    <div class="raw g-4">
      <div class="raw g-4 col-lg-5">
      <img src="img/Bila.png">
      </div>
        <div class="raw g-4 col-lg-5">
        <img src="img/Talita.png">
        </div>
    </div>
    <center><h2 class ="line"><p>Design UI/UX</p></h2></center>
    <div class="raw g-4">
      <div class="raw g-4 col-lg-5">
      <img src="img/Asra.png">
      </div>
        <div class="raw g-4 col-lg-5">
        <img src="img/Devi.png">
        </div>
    </div>
  </div>
 
</div>
<footer class="footer">
    <div class="container">
      <div class="frow">
        <div class="footer-col">
          <h4>explore</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="<?php echo web_root; ?>index.php?q=lesson">Materi</a></li>
            <li><a href="<?php echo web_root; ?>index.php?q=exercises">Forum Belajar</a></li>
            <li><a href="<?php echo web_root; ?>index.php?q=download">Download</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>contact </h4>
          <ul>
            <li><a href="#">Jl. Barokah No.6, Wanaherang, Kec. Gn. Putri</a></li>
            <li><a href="#">Kabupaten Bogor, Jawa Barat 16965</a></li>
            <li><a href="#">rumahilmu@gmail.com</a></li>
            <li><a href="#">(021) 8673310</a></li>
          </ul>
        </div> 
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
          <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></a>
          <a href="https://www.instagram.com/rumahilmu.id/?hl=id"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg></a>
          <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
</svg></a>
          <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

 
</body>
</html>