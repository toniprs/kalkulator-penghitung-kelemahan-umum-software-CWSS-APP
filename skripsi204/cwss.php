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
<h3><strong><div class="tablehead" style="text-align: left">Common Weakness Scoring System (CWSS)</div></strong></h3>
  <ul>
    <li><b><p> Apa itu CWSS?</p></b>
    <p class="text">CWSS (Common Weakness Scoring System) adalah bagian dari proyek Common Weakness Enumeration (CWE) yang menyediakan mekanisme untuk memprioritaskan kelemahan perangkat lunak secara konsisten, fleksibel, dan terbuka, hal ini memungkinkan stakeholder untuk membuat keputusan yang lebih tepat ketika mencoba untuk mengurangi risiko yang disebabkan oleh kelemahan</p></li>



    <li><b><p>Bagaimana cara kerja CWSS?</p></b>
    <p class="text">Skor CWSS CWE menggunakan 18 faktor berbeda di tiga kelompok metrik: (1) Base Finding Group , yang menangkap risiko inheren dari kelemahan, kepercayaan pada akurasi temuan, dan kekuatan kontrol; (2) Attack Surface Group , yang menangkap penghalang yang harus diserang oleh penyerang untuk mengeksploitasi kelemahan; dan (3) Environment Group, yang mencakup faktor-faktor yang mungkin spesifik untuk konteks operasional tertentu, seperti dampak bisnis, kemungkinan eksploitasi, dan adanya kontrol eksternal.
</p>

<p>Setiap faktor dalam grup Base Finding metric group diberi nilai (value). Nilai-nilai ini dikonversikan ke bobot terkait. Base finding Subscore dapat berkisar antara 0 dan 100. Metode yang sama juga diterapkan pada Attack Surface dan Environmental metric group. Subscore mereka berkisar antara 0 dan 100 yang mana tiga subscore dikalikan dan menghasilkan skor CWSS antara 0 dan 100 </p>

  <center><img src="CWSS.png" width="660px" height="450"px align="center">
    <p><b>Gambar Cara kerja CWSS Score</p></b></center><br>





    <li><b><p>Bagaimana CWSS membantu saya melindungi jaringan atau sistem saya?</p></b>
    <p class="text">Dengan mengetahui beratnya kelemahan, pengembang dan organisasi perangkat lunak yang menggunakan perangkat lunak itu akan mengetahui CWE mana yang harus diprioritaskan untuk ditangani. Selain itu, pendidik yang mengajar penulisan kode perangkat lunak akan tahu kelemahan mana yang harus diatasi secara langsung dalam kurikulum mereka.
</p>

    <li><b><p>Apakah CWSS gratis untuk penggunaan umum?</p></b>
    <p class="text">CWSS bebas digunakan oleh organisasi atau individu apa pun untuk tujuan penelitian, pengembangan, dan / atau komersial, sesuai dengan Ketentuan Penggunaan CWE. MITRE memiliki hak cipta atas Daftar CWE, CWSS, CWRAF, dan Top 25 untuk kepentingan komunitas untuk memastikan masing-masing tetap menjadi standar bebas dan terbuka, serta untuk secara legal melindungi penggunaan yang berkelanjutan dan konten apa pun yang dihasilkan oleh pemerintah, vendor, dan / atau pengguna. 
</p>


    <li><b><p>Apakah ada kalkulator CWSS, seperti kalkulator untuk Sistem Penilaian Kerentanan Umum (CVSS)?</p></b>
    <p class="text">Saat ini tidak ada kalkulator yang tersedia untuk CWSS. </p><br></ul>


<h3>CWSS menawarkan: </h3>
<ul>
    <li><b>Quantitative Measurements:</b> CWSS memberikan pengukuran kuantitatif kelemahan yang tidak tetap yang ada dalam aplikasi perangkat lunak.<br>
.</li>
    <li><b>Common Framework:</b> CWSS menyediakan kerangka kerja umum untuk memprioritaskan kesalahan keamanan ("kelemahan") yang ditemukan dalam aplikasi perangkat lunak.</li><br>
    <li><b>Customized Prioritization:</b>dalam hubungannya dengan Kerangka Analisis Risiko Kelemahan Umum (CWRAF), CWSS dapat digunakan oleh konsumen untuk mengidentifikasi jenis-jenis kelemahan terpenting untuk domain bisnis mereka, untuk menginformasikan kegiatan akuisisi dan perlindungan mereka sebagai salah satu bagian dari proses pencapaian yang lebih besar jaminan perangkat lunak.
</li>
</ul><br>



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