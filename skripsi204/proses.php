<?php 
if(isset($_POST['fnama']))
{
$fnama = $_POST['fnama'];
$fprofesi = $_POST['fprofesi'];
$faplikasi = $_POST['faplikasi'];
$deskripsi = $_POST['deskripsi'];



//echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";

echo "Nama Evaluator : ".$fnama."<br/>
	   profesi : ".$fprofesi."<br/> 
	   Aplikasi yang diuji :".$faplikasi."<br/>
	   Deskripsi aplikasi yang diuji :".$deskripsi;    

}
//--------------------------------------------------------------------
if(isset($_GET['fnama']))
{
$fnama = $_GET['fnama'];
$fprofesi = $_GET['fprofesi'];
$faplikasi = $_GET['faplikasi'];
$deskripsi = $_GET['deskripsi'];


//echo "<span class='success'>Dengan <b>METODE GET</b></span><br/>";
//echo "Nama : ".$fnama."<br/>Alamat : ".$lalamat;
echo " 		
			<b>Nama Evaluator :</b><td><b><font color='gray'>".$fnama."<tr><br/><td>
			 <b> Profesi :</b><td><b><font color='gray'>".$fprofesi."<tr><br/><td>
			  <b>Aplikasi Yang Diuji :</b><td><b><font color='gray'>".$faplikasi."<tr><br/><td> 
			  <b>Deskripsi aplikasi :</b><td><b><font color='gray'>".$deskripsi; 


}
?>