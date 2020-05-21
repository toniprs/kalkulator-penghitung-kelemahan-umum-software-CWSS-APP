<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <title>Self Assesment CWSS</title>
    <script type="text/javascript" src="base.js"></script>
   
    <link rel="stylesheet" type="text/css" href="base.css">
</head>
<div class="content">
  <header>
    <img src="cm.png" width="160px" height="150"px align="right">
    <img src="cm.png" width="160px" height="150"px align="left">
    <h1 class="judul">CWSS (Common Weakness Scoring System) Application</h1>
   <!-- <h3 class="deskripsi">- Tugas Akhir 2019 -</h3> -->

  </header>
 
  <!--<div class="menu">
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
 
 
 <div class="float-left-area">

<content>

<hr/><hr/>
<center><h1 style="color:green">CWSS SCORE FORMULA</h1></center><br>

<h2 style="color: crimson">Base Finding Subscore</h2>
<b style="color: black">Base = [ (10 * Technical Impact + 5 * (Acquired Privilege + Acquired PrivilegeLayer) + 5 * Finding Confidence) * f(Technical Impact) * InternalControlEffectiveness ] * 4.0</b><br><br>

<b style="color:navy">f(Technical Impact) = 0 if Technical Impact = 0; otherwise f(TechnicalImpact) = 1.</b>
<hr/><hr/>

<h2 style="color: crimson">Atack Surface Subscore</h2>
<b style="color: black">Attack Surface = [ 20 * (Required Privilege + Required Privilege Layer + Access Vector) + 20 * Deployment Scope + 15 * Level Of Interaction + 5 * Authentication Strength ] / 100.0</b><br><br><hr/><hr/>

<h2 style="color: crimson">Environmental Subscore</h2>
<b style="color: black">Environmental = [ (10 * Business Impact + 3 * Likelihood Of Discovery + 4 * Likelihood Of Exploit + 3 * Prevalence) * f(Business Impact) * External Control Effectiveness ] / 20.0</b><br><br>

<b style="color:navy">f(Business Impact) = 0 if Business Impact == 0; otherwise f(BusinessImpact) = 1</b><br><br><hr/><hr/>


<h2 style="color: crimson">CWSS Score Formula</h2>
<b style="color: black">CWSS versi 1.0 = Base Finding Subscore * Attack Surface Subscore * Environment Subscore</b><hr/><hr/><br><br>




               </content>
                </fieldset>
            </div>
            <div id="footer">
  <center>  <a href="" class="title">Tugas Akhir 2019 - 15523204 </a> 
     <a href="" class="title">Score By CWE (Common Weakness Enumeration)</a>
    
   </center>
    </div>
         
       </form>
  </div><!--End of wrap-->


</html>