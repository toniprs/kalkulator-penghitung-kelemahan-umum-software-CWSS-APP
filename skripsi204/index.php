<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <title>Software Weakness Scoring Application  </title>
    <script type="text/javascript" src="base.js"></script>
<link href='cm.png' rel='shortcut icon'>

   
    <link rel="stylesheet" type="text/css" href="base.css">
</head>
<div class="content">
  <header>
    <img src="cm.png" width="160px" height="150"px align="right">
    <img src="cm.png" width="160px" height="150"px align="left">
    <h1 class="judul">CWSS (Common Weakness Scoring System) Application </h1>
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

 
  <div class="badan">
    <br><br>
 <img src="cwe_logo.jpg"><img src="capture.jpg" /><img src="m.png" align="right"><br></br></center></div>

<p><tab><strong style="color:blue">CWE&trade;</strong> adalah komunitas yang mengembangkan daftar kelemahan keamanan perangkat lunak umum. CWE ini berfungsi sebagai pengukur untuk alat keamanan perangkat lunak, dan sebagai dasar untuk identifikasi kelemahan, mitigasi, dan upaya pencegahan</p>
<ul><li><a><b><p class="title" style="color:red">Apakah itu &quot;software weakness&quot;?</p></b><a/></b></li>
<p class="text">Software weakness adalah kesalahan, bug, kerentanan, dan kesalahan lain dalam implementasi, kode, desain, atau arsitektur perangkat lunak yang jika tidak ditangani dapat menyebabkan sistem dan jaringan rentan terhadap serangan. Contoh kelemahan perangkat lunak meliputi: buffer overflows, format string, dll .; masalah struktur dan validitas; manipulasi elemen khusus umum; kesalahan saluran dan jalur; kesalahan handler; kesalahan antarmuka pengguna; kesalahan traversal dan kesetaraan pathname; kesalahan otentikasi; kesalahan manajemen sumber daya; verifikasi data yang tidak memadai; evaluasi dan injeksi kode; dan keacakan dan prediktabilitas.
</p>


<li><b><p class="title" id="A.2"style="color:red">Apa perbedaan software vulnerability dan software  weakness?</p></b></li>
<p class="text">Software weakness adalah kesalahan yang dapat menyebabkan kerentanan perangkat lunak. Software vulnerability, seperti yang disebutkan dalam Daftar Kerentanan dan Eksposur Umum (CVE®), adalah kesalahan dalam perangkat lunak yang dapat langsung digunakan oleh peretas untuk mendapatkan akses ke sistem atau jaringan
.</p>

<li><b><p class="title" id="A.6" style="color:red">Siapa yang memiliki CWE? Apakah CWE gratis untuk penggunaan umum?</p></b></li>
<p class="text"><a target="_blank" rel="noopener noreferrer" href="http://www.mitre.org/" target="_blank" rel="noopener noreferrer">The MITRE Corporation</a> mengelola CWE, upaya lanjutannya, dan situs web publik .Mengelola program kompatibilitas; dan memberikan panduan teknis yang tidak memihak kepada Komunitas CWE di seluruh proses untuk memastikan CWE melayani kepentingan publik.
 <a href="/community/index.html">CWE Community</a> sepanjang proses untuk memastikan CWE melayani kepentingan publik.</p>
<p class="text">CWE bebas untuk digunakan oleh organisasi atau individu apa pun untuk tujuan penelitian, pengembangan, dan / atau komersial, sesuai dengan Ketentuan Penggunaan CWE. MITRE memiliki hak cipta atas Daftar CWE, 25 Teratas, CWSS, dan CWRAF untuk kepentingan masyarakat untuk memastikan masing-masing tetap menjadi standar bebas dan terbuka, serta untuk secara legal melindungi penggunaan yang berkelanjutan dari itu dan konten apa pun yang dihasilkan oleh pemerintah, vendor, dan / atau pengguna. MITRE memiliki merek dagang ™ CWE dan akronim terkait serta CWE dan logo terkait untuk melindungi penggunaan tunggal dan berkelanjutan mereka oleh upaya CWE dalam arena keamanan informasi.</p>

<li><b><p class="title" id="A.8"style="color:red">Apa hubungan antara CWE dan CVE?</p></b></li>
<p class="text">MITRE mulai bekerja pada masalah pengelompokan kelemahan perangkat lunak pada awal 1999 ketika meluncurkan Daftar Kerentanan Umum dan Eksposur (CVE®). Sebagai bagian dari membangun CVE, Tim CVE MITRE mengembangkan klasifikasi awal dan kategorisasi kerentanan, serangan, kesalahan, dan konsep lain yang dimulai pada tahun 2005 untuk membantu menentukan kelemahan perangkat lunak umum. Namun, meskipun cukup untuk CVE, pengelompokan tersebut terlalu kasar untuk digunakan untuk mengidentifikasi dan mengkategorikan fungsi yang ditawarkan dalam penawaran industri penilaian keamanan kode. Daftar CWE dibuat untuk mengatasi kebutuhan tambahan tersebut dengan lebih baik.
</p></ul><br>


<b><p class="title" id="A.5"style="color:red">Bagaimana CWE dapat membantu saya?</p></b>
<p class="text">Organisasi pengembangan perangkat lunak dan praktisi keamanan yang digunakan CWE hari ini sebagai bahasa umum untuk membahas cara menghilangkan dan / atau mengurangi kelemahan keamanan perangkat lunak dalam arsitektur, desain, kode, dan implementasi perangkat lunak. Organisasi menggunakan CWE hari ini sebagai tongkat pengukur standar untuk mengevaluasi alat keamanan perangkat lunak yang menargetkan kelemahan ini, dan sebagai standar dasar umum untuk identifikasi kelemahan, mitigasi, dan upaya pencegahannya.
 </p>
<p class="text">Selain itu, CWE dan masyarakat telah bekerja bersama untuk meningkatkan Daftar CWE dan menciptakan alat tambahan untuk membantu perusahaan dan vendor perangkat lunak dalam upaya mereka untuk mengatasi kelemahan perangkat lunak:
</p>
    <ul class="text">
      <li><a>Common Weakness Scoring System (CWSS&trade;)</a> 
    &ndash; memungkinkan organisasi untuk menilai tingkat keparahan kesalahan pengkodean perangkat lunak yang ditemukan dalam aplikasi perangkat lunak mereka untuk mengurangi kelemahan dalam aplikasi yang saat ini mereka gunakan dan untuk mempengaruhi pembelian di masa depan.
</li>
      <li><a>Common Weakness Risk Analysis Framework  (CWRAF™)</a> 
    &ndash; memungkinkan bagi organisasi untuk menerapkan CWSS pada CWE yang paling relevan dengan bisnis, misi, dan teknologi yang dikerahkannya sendiri.</li>
      <li><a>CWE/SANS Top 25 Most Dangerous Software 
    Errors List</a> &ndash; memberi perusahaan dan vendor prioritas untuk mitigasi dan pencegahan
. (The Top 25 list was issued in 2010 and 2011; 
    <a>CWSS</a> and <a>CWRAF</a> sekarang memungkinkan organisasi untuk secara langsung memenuhi kebutuhan spesifik mereka sendiri
.)</li>
      <li><a>CWE Coverage Claims Representation (CCR)</a> &ndash; memungkinkan untuk vendor analisis perangkat lunak untuk menyampaikan kepada pelanggan mereka dalam format XML persis kelemahan mana yang diidentifikasi CWE yang mereka klaim dapat temukan dalam perangkat lunak
.</li>
    </ul><br></br>



<a name="CWE_Community" id="CWE_Community"></a>
<strong><div class="tablehead" style="color:blue">CWE Community</div></strong> 
<ul>
  <li><b><p class="title" id="G.1"style="color:red"> Siapa Komunitas CWE? Apa peran mereka?</p></b>
  <p class="text">Komunitas CWE mencakup peneliti perorangan dan perwakilan dari berbagai organisasi dari berbagai industri, akademisi, dan pemerintah yang tertarik untuk secara aktif mengurangi dan mengelola kelemahan dalam perangkat lunak. Lihat halaman Komunitas CWE untuk daftar lengkap organisasi anggota.
</p>

  <li><b><p class="title" id="G.5"style="color:red"> Apa itu MITRE?</p></b>
  <p class="text">Dalam kemitraan dengan klien pemerintah, MITRE Corporation (MITRE) adalah perusahaan nirlaba yang bekerja untuk kepentingan umum. Ini membahas isu-isu penting nasional yang kritis, menggabungkan rekayasa sistem dan teknologi informasi untuk mengembangkan solusi inovatif yang membuat perbedaan.
. </p>

  <li><b><p class="title" id="G.6"style="color:red">Apa peran MITRE dalam CWE</p></b>
  <p class="text">Pekerjaan <a target="_blank" rel="noopener noreferrer" href="http://www.mitre.org/" target="_blank" rel="noopener noreferrer">MITRE</a> difokuskan dalam Pusat Penelitian dan Pengembangan yang didanai oleh Federasi (FFRDC) untuk Departemen Pertahanan, Administrasi Penerbangan Federal, Layanan Pendapatan Internal dan Departemen Urusan Veteran, Departemen Keamanan Dalam Negeri, Kantor Administrasi Pengadilan AS; dan Pusat Layanan Medicare dan Medicaid.
.</p>


  <li><b><p class="title" id="G.7"style="color:red">Mengapa MITRE memelihara CWE dan berapa lama MITRE berencana untuk mempertahankannya?</p></b>
  <p class="text">Sesuai dengan misinya, MITRE secara tradisional bertindak untuk kepentingan umum. Perannya yang unik memungkinkannya untuk memberikan perspektif objektif terhadap upaya ini. MITRE akan mempertahankan CWE selama melayani masyarakat untuk melakukannya.</p>



  <li><b><p class="title" id="G.8"style="color:red">Siapa yang membayar CWE? Siapa sponsornya?</p></b>
  <p class="text">CWE disponsori oleh 
  <a href="http://www.dhs.gov/office-cybersecurity-and-communications/" target="_blank" rel="noopener noreferrer">Cybersecurity and Communications</a> pada
  <a href="http://www.dhs.gov/" target="_blank" rel="noopener noreferrer">U.S. Department of Homeland Security</a>. Situs Web CWE disponsori dan dikelola oleh
  <a href="http://www.mitre.org/" target="_blank" rel="noopener noreferrer">MITRE</a> untuk memungkinkan kolaborasi stakeholder.</p></ul>




<br>
 



            <div id="footer">
  <center>  <a href="" class="title">Tugas Akhir 2019 - 15523204 </a> 
     <a href="" class="title">Score By CWSS (Common Weakness Scoring System)</a>

    
   </center>
    </div>
         
       </form>
  </div><!--End of wrap-->


<style>
  .float-right-area {
      width: 30%;
      float: left;
      }

.inner-left   {
      padding: 5px 5px 5px 5px;
      margin-right: 0px;
      margin-left:  5px;
      border: #999999 2px solid;
      min-height: 60px;
      }

.inner-right    {
      font-size: 11px;
      padding: 10px 5px 5px 5px;
      border: #999999 1px solid;
      min-height: 60px;
      }

.clear-floated    { clear: both; height: 1px; font-size: 1px; line-height: 1px; padding: 0; margin: 0; }


.sidebar {
    height: 55%;
    width:400px;
    position: static;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: navy;
    overflow-x: hidden;
    padding-top: 5px;
  }
 
  .sidebar a {
    padding: 0px 0px 6px 10px;
    text-decoration:unset;

    font-size: 20px;
    color: yellow;
    display: block;
  }
 
  .sidebar a:hover {
    color: white;

  }
</style>

</html>