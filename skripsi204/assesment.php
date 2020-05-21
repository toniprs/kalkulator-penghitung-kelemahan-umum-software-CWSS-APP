<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <title>Self Assesment App </title>
    <!<script type="text/javascript" src="base.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/metode.js"></script>
   
    <link rel="stylesheet" type="text/css" href="base.css">

</head>
<div class="content">
  <header>
    <img src="cm.png" width="160px" height="150"px align="right">
    <img src="cm.png" width="160px" height="150"px align="left">
    <h1 class="judul">CWSS (Common Weakness Scoring System) Application</h1>
   <!-- <h3 class="deskripsi">- Tugas Akhir 2019 -</h3> -->

  </header>
 
 <!-- <div class="menu">
    <ul>
      <li><a href="index.php?page=home">HOME</a></li>
      <li><a href="deskripsi.html?page=deskripsi">Deskripsi</a></li>
      <li><a href="assesment.php?page=assesment">Assesment</a></li>
    </ul>
  </div>-->
  <nav>
        <ul>
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="deskripsi.html?page=deskripsi">Deskripsi</a>
                <ul class="sub1">
                     <li><a href="cwss.php">Pengertian CWSS</a></li>
                    <li><a href="cwssformula.php">CWSS Formula</a></li>
                    <li><a href="cwssmetric.php">CWSS Metric</a></li>
                </ul>
            </li>
            <li><a href="assesment.php?page=assesment">Assesment</a></li>
        </ul>
    </nav>
 
  <div class="badan" style="background-color:;">
 <div class="float-left-area">
<div class="inner-left">

   <body>
  <div class="container">
    <div class="main">
        <form  method="get" action="penilaian.php" id="form">
      <h2>Form Identitas Diri</h2><hr/>    
      
      <label>NAMA EVALUATOR :</label>
      <input type="text" name="fnama" id="fnama" placeholder="Nama Evaluator" />
      
      <label>PROFESI :</label>
      <input type="text" name="fprofesi" id="fprofesi" placeholder="Profesi" />

       <label>APLIKASI YANG DIUJI :</label>
      <input type="text" name="faplikasi" id="faplikasi" placeholder="Aplikasi Yang Diuji" />

       <label>DESKRIPSI APLIKASI YANG DIUJI :</label>
       <br>
      <textarea   rows="5" cols="130" name="deskripsi" id="deskripsi" placeholder="Deskripsi Aplikasi Yang Diuji" /></textarea><br>
      <!--<label>Pilih Metode :</label>
      <span><input type="radio" name="method" value="get" checked> GET &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" name="method" value="post" > POST </span> -->
      




      <br>
      <input type="submit" formtarget="_parent" name="submit" id="submit" value="Submit">
      </form>
    
   

  </body>
  <br>

</html>
<style>.container {
  width: 100%;
    margin: 0 auto;
}

h2{
 background-color:navy;
 padding: 30px 35px;
 margin: -10px -50px;
 text-align:center;
 color: #fff;

 margin-bottom: 30px;
}
 
span{
 display: block;
 margin-bottom: 20px;
 color: red;
}
 
.success{
 display: block;
 margin-top: 20px;
 margin-bottom: 0;
 font-size: 14px;
} 

b{
 color:green;
}

hr{
 margin: 10px -50px;
 border: 0;
 border-top: 1px solid #ccc;
 margin-bottom: 25px;
}
 
div.main{
 width: 90%;
 padding: 10px 50px 30px;
 border: 2px solid gray;
 font-family: raleway;
 float:left;
 margin-top:15px;
}
 
input[type=text]{
 width: 96%;
 height: 25px;
 padding: 5px;
 margin-bottom: 25px;
 margin-top: 5px;
 border: 2px solid #ccc;
 color: black;
 font-size: 16px;
}
 
input[type=radio]{
 margin: 10px 10px 0 10px;
} 
 
label{
 color: black;
 text-shadow: 0 1px 0 #fff;
 font-size: 14px;
 font-weight: bold;
}
 
input[type=submit]{
 font-size: 22px;
 /*background: linear-gradient(green 5%, #fff 100%);*/
 background-color: navy;
 background-position: center;
 color: white;
 font-weight: bold;
 cursor: pointer;
 width: 100%;

 padding: 10px 0;
 outline:none;
}


</style>