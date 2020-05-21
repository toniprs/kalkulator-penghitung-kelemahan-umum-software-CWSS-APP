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

  <p><b>CWSS ini tersusun dari tiga grup metric:</b></p>
   <ul> <li><p> <b>Base finding metric group:</b> menangkap resiko yang berkaitan dengan kelemahan, kepercayaan pada keakuratan temuan dan kekuatan mengontrol</p>
    <li><p> <b>Attack surface metric group:</b> hambatan yang harus diatasi penyerang untuk mengeksploitasi kelemahan</p>
    <li><p> <b>Environmental Metric group:</b> suatu karakteristik kelemahan yang spesifik dalam konteks operasional tertentu</p><br></li></ul>

     <center><img src="cwssgrup.png" width="560px" height="280"px align="center"></center>
     <center><p>Gambar CWSS Metric Group</p></center>

<h2>CWSS Metric Group Factors</h2>

<p>CWSS berisi faktor-faktor berikut, yang disusun berdasarkan grup metrik mereka:
</p></ul>


 <table class="table1">
<thead><tr><th>Group</th><th>Name</th><th>Summary</th></tr></thead>

<tr><td class="ltpurplebackground">Base Finding
    <td>Technical Impact (TI)</td>
    <td>Dampak teknis yang diakibatkan oleh kelemahan, dengan asumsi bahwa kelemahan tersebut berhasil dieksploitasi</td></tr>

<tr><td class="ltpurplebackground">Base Finding</td>
    <td>Acquired Privilege (AP)</td>
    <td>Hak istimewa yang diperoleh penyerang untuk mengeksploitasi kelemahan</td><tr>

<td class="ltpurplebackground">Base Finding</td>
    <td>Acquired Privilege Layer (AL)</td>
    <td>Lapisan operasional dimana penyerang mendapatkan hak istimewa dengan berhasil mengeksploitasi kelemahan</td><tr>

<td class="ltpurplebackground">Base Finding</td>
    <td>Internal Control Effectiveness (IC)</td>
    <td>Kemampuan mengontrol kelemahan agar tidak dapat diekploitasi oleh penyerang</td><tr>

<td class="ltpurplebackground">Base Finding</td>
    <td>Finding Confidence (FC)</td>
    <td>Keyakinan bahwa masalah yang dilaporkan adalah kelemahan yang dapat dimanfaatkan oleh penyerang</td></tr><tr>

<td class="ltpurplebackground">Attack Surface</td>
    <td>Required Privilege (RP)</td>
    <td>Jenis hak istimewa yang harus dimiliki penyerang untuk mencapai kode/ fungsi yang mengandung kelemahan</td><tr>


<td class="ltpurplebackground">Attack Surface</td>
    <td>Required Privilege Layer (RL)</td>
    <td>Lapisan operasional dimana penyerang harus memiliki hak istimewa untuk mencoba menyerang kelemahan</td><tr>

<td class="ltpurplebackground">Attack Surface</td>
    <td>Access Vector (AV)</td>
    <td>Saluran dimana penyerang harus berkomunikasi untuk mencapai kode atau fungsionalitas yang mengandung kelemahan</td><tr>

<td class="ltpurplebackground">Attack Surface</td>
    <td>Authentication Strength (AS)</td>
    <td>Kemampuan autentikasi yang melindungi kode / fungsionalitas yang mengandung kelemahan</td><tr>

<td class="ltpurplebackground">Attack Surface</td>
    <td>Level of Interaction (IN)</td>
    <td>Tindakan yang diperlukan oleh korban (manusia)  untuk kemungkinan serangan yang berhasil terjadi</td><tr>

<td class="ltpurplebackground">Attack Surface</td>
    <td>Deployment Scope (SC)</td>
    <td>Apakah kelemahan yang hadir dalam semua instance perangkat lunak  dapat digunakan atau jika terbatas pada subset platform dan atau konfigurasi</td></tr><tr>

<td class="ltpurplebackground">Environmental</td>
    <td>Business Impact (BI)</td>
    <td>Dampak secara bisnis atau tujuan jika kelemahan berhasil dieksploitasi</td><tr>

<td class="ltpurplebackground">Environmental</td>
    <td>Likelihood of Discovery (DI)</td>
    <td>Kemungkinan dimana penyerang dapat menemukan kelemahannya</td><tr>

<td class="ltpurplebackground">Environmental</td>
    <td>Likelihood of Exploit (EX)</td>
    <td>Kemungkinan bahwa, jika kelemahan ditemukan, penyerang dengan hak istimewa/ memiliki autentikasi/ akses syang diperlukan dapat berhasil mengeksploitasinya</td><tr>

<td class="ltpurplebackground">Environmental</td>
    <td>External Control Effectiveness (EC)</td>
    <td>Kemampuan kontrol atau mitigasi di luar perangkat lunak yang dapat membuat kelemahan lebih sulit bagi penyerang untuk mencapai dan memicu perangakat lunak</td><tr>

<td class="ltpurplebackground">Environmental</td>
    <td>Prevalence (P)</td>
    <td>Seberapa sering jenis kelemahan ini muncul dalam perangkat lunak</td>
</tr>
</table><br><br>



<h3>Base Finding Metric Group</h3>

<p>Base finding metric group terdiri dari faktor – faktor berikut:</p>

<ul><li>Technical Impact (TI)</li>
    <li>Acquired Privilege (AP)</li>
    <li>Acquired Privilege Layer (AL)</li>
    <li>Internal Control Effectiveness (IC)</li>
    <li>Finding Confidence (FC)</li>
</ul>
<br>

<h4>Technical Impact (TI)</h4>
<p>Technical impact (TI) adalah dampak teknis yang dapat di hasilkan oleh kelemahan, dengan asumsi bahwa kelemahan tersebut berhasil dieksploitasi</p>

<table class="table1">
<thead><tr><th>Value</th><th>Code</th><th>Weight</th><th>Description</th></tr></thead>

<tr><td class="ltpurplebackground">Critical</td>
  <td>C</td><td>1.0</td>

<td>Kontrol penuh atas perangkat lunak yang dianalisis ke titik di mana operasi sedang berlangsung </td></tr><tr>

<td class="ltpurplebackground">High</td>
<td>H</td><td>0.9</td>

<td>Kontrol tinggi atas perangkat lunak yang dianalisis, atau akses ke informasi penting dapat diperoleh.</td></tr><tr>

<td class="ltpurplebackground">Medium</td>
<td>M</td><td>0.6</td>

<td>Kontrol menengah atas perangkat lunak yang dianalisis, atau akses ke informasi yang cukup penting dapat diperoleh</td></tr><tr>

<td class="ltpurplebackground">Low</td>
<td>L</td><td>0.3
</td>

<td>Kontrol minimal atas perangkat lunak yang dianalisis, atau hanya akses ke informasi yang relatif tidak penting dapat diperoleh.</td></tr><tr>


<td class="ltpurplebackground">None</td>
<td>N</td><td>0.0</td>

<td>Tidak ada dampak teknis terhadap perangkat lunak yang dianalisis sama sekali. Dengan kata lain, ini tidak menyebabkan kerentanan.</td></tr><tr>

<td class="ltpurplebackground">Default</td>
<td>D</td><td>0.6
</td>

<td>Bobot median dari bobot Critical, High, Medium, Low, dan none</td></tr><tr>

<td class="ltpurplebackground">Unknown</td>
<td>UK</td><td>0.5</td>

<td>Tidak ada informasi yang cukup untuk memberikan nilai untuk faktor ini. Analisis lebih lanjut mungkin diperlukan. Di masa depan, nilai yang berbeda mungkin dipilih, yang dapat mempengaruhi Skor</td></tr><tr>


<td class="ltpurplebackground">Not Applicable</td>
<td>NA</td><td>1.0</td>

<td>Faktor ini secara sengaja diabaikan dalam perhitungan Skor karena tidak relevan dengan bagaimana skorer memprioritaskan kelemahan. Faktor ini mungkin tidak berlaku di lingkungan dengan persyaratan jaminan yang tinggi; pengguna mungkin ingin menyelidiki setiap kelemahan menemukan bunga, terlepas dari keyakinan</td></tr><tr>

<td class="ltpurplebackground">Quantified</td>
<td>Q</td><td>
</td>
<td>Faktor ini dapat diukur dengan bobot kustom.</td></tr>
</table><br><br>


<h4>Acquired Privilege (AP)</h4>

<p>The Acquired Privilege mengidentifikasi jenis hak yang diperoleh oleh seorang penyerang yang dapat berhasil mengeksploitasi kelemahan</p>

<table class="table1">
<thead><tr><th>Value</th><th>Code<span class="footnote">*</span></th><th>Weight</th><th>Description</th></tr></thead><tr>

<td class="ltpurplebackground">Administrator</td>
<td>A</td><td>1.0</td>

<td><p>Penyerang mendapatkan akses ke entitas dengan administrator, root, sistem, atau hak istimewa setara yang menyiratkan kontrol penuh atas perangkat lunak dalam analisis; atau, penyerang dapat meningkatkan hak mereka sendiri (lebih rendah) untuk administrator</td></tr><tr>

<td class="ltpurplebackground">
Partially-Privileged User</td>
<td>P</td><td>0.9</td>

<td><p>Penyerang mendapatkan akses ke entitas dengan beberapa hak istimewa, tetapi tidak setara dengan administrator; atau, penyerang dapat meningkatkan hak mereka sendiri (lebih rendah) untuk pengguna yang sebagian-istimewa. Sebagai contoh, pengguna mungkin memiliki hak untuk membuat cadangan, tetapi tidak untuk mengubah konfigurasi perangkat lunak atau menginstal pemutakhiran</p></td></tr><tr>

<td class="ltpurplebackground">Regular User</td>
<td>RU</td><td>0.7</td>

<td><p>Penyerang mendapatkan akses ke entitas yang merupakan pengguna biasa yang tidak memiliki hak istimewa; atau, penyerang dapat meningkatkan hak mereka sendiri (lebih rendah) untuk pengguna biasa.</p></td></tr><tr>

<td class="ltpurplebackground">Limited / Guest</td>
<td>L</td><td>0.6</td>

<td><p>Penyerang mendapatkan akses ke entitas secara terbatas</p></td></tr><tr>


<td class="ltpurplebackground">None</td><td>N</td><td>0.1</td>  

<td><p>Penyerang tidak dapat memperoleh akses ke hak tambahan apa pun selain yang telah tersedia untuk penyerang. (Perhatikan bahwa nilai ini dapat berguna dalam situasi terbatas di mana penyerang dapat melarikan diri dari Sandbox atau lingkungan membatasi lainnya tetapi masih tidak dapat memperoleh hak tambahan, atau mendapatkan akses sebagai pengguna lain.</p></td></tr><tr>

<td class="ltpurplebackground">Default</td><td>D</td>
<td>0.7
</td>

<td><p>Bobot median untuk None, Guest, Regular User, Partially-Privileged User, and Administrator</p></td></tr><tr>

<td class="ltpurplebackground">Unknown</td>
<td>UK</td>
<td>0.5</td>

<td>Tidak ada informasi yang cukup untuk memberikan nilai untuk faktor ini. Analisis lebih lanjut mungkin diperlukan. Di masa depan, nilai yang berbeda mungkin dipilih, yang dapat mempengaruhi Skor.</td></tr><tr>

<td class="ltpurplebackground">Not Applicable</td><td>NA</td>
<td>1.0</td>

<td><p>Faktor ini secara sengaja diabaikan dalam perhitungan Skor karena tidak relevan dengan bagaimana skorer memprioritaskan kelemahan.</p>
</td></tr>

<tr><td class="ltpurplebackground">Quantified</td><td>
Q</td><td></td>

<td><p>Faktor ini dapat diukur dengan bobot kustom. Perhatikan bahwa nilai quantified didukung untuk kelengkapan; Namun, karena hak istimewa dan pengguna adalah entitas diskrit, mungkin ada situasi terbatas di mana model yang diukur akan berguna</p>

</p></td></tr></table><br><br>


<h4>Acquired Privilege Layer (AL)</h4>
<p>The Acquired Privilege layer mengidentifikasi lapisan operasional dimana penyerang mendapatkan hak istimewa dengan berhasil mengeksploitasi kelemahan</p>

<table class="table1">
<thead><tr><th>Value</th><th>Code<span class="footnote">*</span></th><th>Weight</th><th>Description</th></tr></thead>
<tr><td class="ltpurplebackground">
Application
</td><td>
A
</td><td>
1.0
</td><td>

<p>Penyerang memperoleh hak istimewa yang didukung dalam perangkat lunak di bawah analisis itu sendiri. (Jika perangkat lunak dalam analisis adalah bagian penting dari sistem yang mendasari, seperti sistem operasi kernel, maka nilai sistem mungkin lebih tepat.)</p>

</td></tr><tr><td class="ltpurplebackground">
System
</td><td>
S
</td><td>
0.9
</td><td>

<p>Penyerang memperoleh hak istimewa untuk sistem dasar atau host fisik yang digunakan untuk menjalankan perangkat lunak dalam analisis.</p>

</td></tr><tr><td class="ltpurplebackground">
Network
</td><td>
N
</td><td>
0.7
</td><td>

<p>Penyerang memperoleh hak istimewa untuk mengakses jaringan</p>

</td></tr><tr><td class="ltpurplebackground">
Enterprise
Infrastructure
</td><td>
E
</td><td>
1.0
</td><td>

<p>Penyerang memperoleh hak istimewa untuk mengakses infrastruktur perusahaan, seperti router, switch, DNS, pengontrol domain, firewall, server identitas, dll.</p>

</td></tr><tr><td class="ltpurplebackground">
Default
</td><td>
D
</td><td>
0.9
</td><td><p>Bobot median Application, System, Network, and Enterprise Infrastructure.</p>

</td></tr><tr><td class="ltpurplebackground">
Unknown
</td><td>
UK
</td><td>
0.5
</td><td>
Tidak ada informasi yang cukup untuk memberikan nilai untuk faktor ini. Analisis lebih lanjut mungkin diperlukan. Di masa depan, nilai yang berbeda mungkin dipilih, yang dapat mempengaruhi Skor
</td></tr><tr><td class="ltpurplebackground">
Not Applicable
</td><td>
NA
</td><td>
1.0
</td><td>
Faktor ini secara sengaja diabaikan dalam perhitungan Skor karena tidak relevan dengan bagaimana skorer memprioritaskan kelemahan.
Faktor ini mungkin tidak berlaku di lingkungan dengan persyaratan jaminan tinggi yang ingin penegakan ketat pemisahan hak istimewa, bahkan antara pengguna yang sudah istimewa
</p>
</td></tr>

<tr><td class="ltpurplebackground">
Quantified
</td><td>
Q
</td><td>
</td><td>

<p>Faktor ini dapat diukur dengan bobot kustom. Perhatikan bahwa nilai quantified didukung untuk kelengkapan; Namun, karena lapisan hak adalah entitas diskrit, mungkin ada situasi terbatas di mana model yang diukur akan berguna.
</p></td></tr></table><br><br>


<h4>Internal Control Effectiveness (IC)</h4>

<p>Kontrol internal adalah kontrol, mekanisme perlindungan, atau mitigasi yang telah secara eksplisit dibangun ke dalam perangkat lunak (baik melalui arsitektur, Desain, atau implementasi). Efektivitas pengendalian internal mengukur kemampuan kontrol untuk merender kelemahan yang tidak dapat dimanfaatkan oleh penyerang</p>

<p>Bila ada beberapa kontrol internal, atau beberapa jalur kode yang dapat mencapai kelemahan yang sama, maka panduan berikut berlaku:</p>
<ul>

  <li>Untuk setiap jalur kode, analisis setiap kontrol internal yang ada di sepanjang jalur kode, dan pilih nilai dengan bobot terendah (yaitu kontrol internal terkuat di sepanjang jalur kode). Ini disebut nilai jalur kode.

  <li>Mengumpulkan semua kode path nilai.

  <li>Pilih nilai jalur kode yang memiliki bobot tertinggi (yaitu, adalah kontrol yang paling lemah).
</ul>
  

<p>Metode ini mengevaluasi setiap jalur kode dalam hal kontrol terkuat jalur kode (karena penyerang harus melewati kontrol itu), lalu memilih jalur kode terlemah (yaitu rute termudah bagi penyerang untuk mengambil).</p>



<table class="table1">
<thead><tr><th>Value</th><th>Code</th><th>Weight</th><th>Description</th></tr></thead>
<tr><td class="ltpurplebackground">
None
</td><td>
N
</td><td>
1.0
</td><td>
<p>
Tidak ada control
</p>
</td></tr><tr><td class="ltpurplebackground">
Limited
</td><td>
L
</td><td>
0.9
</td><td><p>
Ada metode sederhana atau pembatasan disengaja yang mungkin mencegah penyerang mengeksploitasi masalah.</p>
</td></tr><tr><td class="ltpurplebackground">
Moderate
</td><td>
M
</td><td>
0.7
</td><td><p>
Mekanisme perlindungan biasanya digunakan tetapi telah diketahui keterbatasan yang mungkin dilewati dengan beberapa upaya oleh penyerang berpengetahuan. Sebagai contoh, penggunaan pengkodean entitas HTML untuk mencegah serangan XSS mungkin dilewati ketika output ditempatkan ke konteks lain seperti Cascading Style Sheet atau HTML Tag atribut.</p>
</td></tr><tr><td class="ltpurplebackground">
Indirect (Defense-in-Depth)
</td><td>
I
</td><td>
0.5
</td><td><p>
Kontrol tidak secara khusus melindungi terhadap eksploitasi kelemahan, tetapi secara tidak langsung mengurangi dampak ketika serangan berhasil diluncurkan, atau sebaliknya membuatnya lebih sulit untuk membangun eksploitasi fungsional. Sebagai contoh, rutin validasi mungkin secara tidak langsung membatasi ukuran input, yang mungkin membuat sulit bagi penyerang untuk membangun muatan untuk XSS atau SQL Injeksi serangan</p>
</td></tr><tr><td class="ltpurplebackground">
Best-Available
</td><td>
B
</td><td>
0.3
</td><td><p>
Kontrol terbaik yang dimiliki, meskipun mungkin memiliki beberapa keterbatasan yang dapat diatasi oleh penyerang terampil. Sebagai contoh, metode submit ganda untuk perlindungan CSRF dianggap salah satu yang terkuat yang tersedia, tetapi dapat dikalahkan dalam hubungannya dengan perilaku fungsi tertentu yang dapat membaca header HTTP mentah</p>
</td></tr><tr><td class="ltpurplebackground">
Complete
</td><td>
C
</td><td>
0.0
</td><td><p>
Kontrol yang sepenuhnya efektif terhadap kelemahan, yaitu, tidak ada bug atau kerentanan, dan tidak ada konsekuensi yang merugikan dari eksploitasi masalah. Sebagai contoh, operasi buffer salinan yang memastikan bahwa buffer tujuan selalu lebih besar daripada sumber (ditambah ekspansi tidak langsung dari ukuran sumber asli) tidak akan menyebabkan overflow</p>
</td></tr><tr><td class="ltpurplebackground">
Default
</td><td>
D
</td><td>
0.6
</td><td><p>
Bobot median dari Complete, Best-Available, Indirect, Moderate, Limited, and None.</p>
</td></tr><tr><td class="ltpurplebackground">
Unknown
</td><td>
UK
</td><td>
0.5
</td><td>
TTidak ada informasi yang cukup untuk memberikan nilai untuk faktor ini. Analisis lebih lanjut mungkin diperlukan. Di masa depan, nilai yang berbeda mungkin dipilih, yang dapat mempengaruhi Skor.
</td></tr><tr><td class="ltpurplebackground">
Not Applicable
</td><td>
NA
</td><td>
1.0

</td><td>
Faktor ini secara sengaja diabaikan dalam perhitungan Skor karena tidak relevan dengan bagaimana skorer memprioritaskan kelemahan.
</td></tr>
<tr><td class="ltpurplebackground">
Quantified
</td><td>
Q
</td><td>
</td><td>
Faktor ini dapat diukur dengan bobot kustom.
</td></tr>
</table><br><br>


<h4>Finding Confidence (FC)</h4>

<p>Finding Confidence adalah Keyakinan bahwa masalah yang dilaporkan adalah kelemahan yang dapat dimanfaatkan oleh penyerang</p>

<br />

<table class="table1">
<thead><tr><th>Value</th><th>Code</th><th>Weight</th><th>Description</th></tr></thead>
<tr><td class="ltpurplebackground">
Proven True
</td><td>
T
</td><td>
1.0
</td><td>
<p>Kelemahan dapat dicapai oleh penyerang.</p>
</td></tr><tr><td class="ltpurplebackground">
Proven Locally True
</td><td>
LT
</td><td>
0.8
</td><td>

<p>Kelemahan terjadi dalam fungsi individu atau komponen desain yang bergantung pada fungsi itu, tetapi penyerang memliki keterbatasan menjangkau fungsi yang tidak diketahui atau tidak hadir. Sebagai contoh, fungsi utilitas mungkin membangun query database tanpa encoding input, tetapi jika hanya disebut dengan string konstan, temuan secara lokal benar</p>
</td></tr><tr><td class="ltpurplebackground">
Proven False
</td><td>
F
</td><td>
0.0
</td><td>
<p>Temuan ini keliru (yaitu temuan positif palsu dan tidak ada kelemahan), dan/atau tidak ada peran penyerang mungkin.</p>
</td></tr><tr><td class="ltpurplebackground">
Default
</td><td>
D
</td><td>
0.8
</td><td>
<p>Bobot median dari Proven True, Proven Locally True, and Proven False.</p>
</td></tr><tr><td class="ltpurplebackground">
Unknown
</td><td>
UK
</td><td>
0.5
</td><td>
Tidak ada informasi yang cukup untuk memberikan nilai untuk faktor ini. Analisis lebih lanjut mungkin diperlukan. Di masa depan, nilai yang berbeda mungkin dipilih, yang dapat mempengaruhi Skor
</td></tr><tr><td class="ltpurplebackground">
Not Applicable
</td><td>
NA
</td><td>
1.0
</td><td>
Faktor ini secara sengaja diabaikan dalam perhitungan Skor karena tidak relevan dengan bagaimana skorer memprioritaskan kelemahan.</p>
</td></tr><tr><td class="ltpurplebackground">
Quantified
</td><td>
Q
</td><td>
</td><td>
<p>Faktor ini mungkin tidak berlaku di lingkungan dengan persyaratan jaminan yang tinggi; pengguna mungkin ingin menyelidiki setiap kelemahan menemukan bunga, terlepas dari keyakinan</p>
</td></tr></table><br><br>

<h3>Attack Surface Metric Group</h3>

<p>The Attack Surface metric group consists of the following factors: </p>

<ul>
<li>Required Privilege (RP)
</li>
<li>Required Privilege Layer (RL)
</li>
<li>Access Vector (AV)
</li>
<li>Authentication Strength (AS)
</li>
<li>Level of Interaction (IN)
</li>
<li>Deployment Scope (SC)
</li>
</ul>

<p></p>

<h4>Required Privilege (RP)</h4>

<p>The Required Privilege mengidentifikasi Jenis hak istimewa yang harus dimiliki penyerang untuk mencapai kode/ fungsi yang mengandung kelemahan.</p>


<table class="table1">
<thead><tr><th>Value</th><th>Code<span class="footnote">*</span></th><th>Weight</th><th>Description</th></tr></thead>
<tr><td class="ltpurplebackground">
None
</td><td>
N
</td><td>
1.0
</td><td><p>
Tidak ada hak istimewa yang diperlukan. Misalnya, mesin telusur berbasis web mungkin tidak memerlukan hak istimewa apa pun untuk entitas untuk memasukkan istilah penelusuran dan melihat hasil</p>
</td></tr><tr><td class="ltpurplebackground">
Limited / Guest
</td><td>
L
</td><td>
0.9
</td><td>
<p>Entitas telah dibatasi atau "tamu" hak istimewa yang dapat secara signifikan membatasi aktivitas yang diizinkan; entitas mungkin dapat mendaftar atau membuat akun baru tanpa persyaratan khusus atau bukti identitas. Misalnya, blog web dapat memungkinkan peserta membuat nama pengguna dan mengirimkan alamat email yang valid sebelum memasukkan komentar. Catatan: nilai ini tidak mengacu pada konsep “Guest Operating System “dalam host virtual.</p>
</td></tr><tr><td class="ltpurplebackground">
Regular User
</td><td>
RU
</td><td>
0.7
</td><td><p>Entitas adalah pengguna biasa yang tidak memiliki hak istimewa.</p>
</td></tr><tr><td class="ltpurplebackground">
Partially-Privileged User
</td><td>
P
</td><td>
0.6
</td><td><p>
Entitas adalah pengguna yang valid dengan beberapa hak istimewa, namun tidak setara dengan administrator. Sebagai contoh, pengguna mungkin memiliki hak untuk membuat cadangan, tetapi tidak untuk mengubah konfigurasi perangkat lunak atau menginstal pemutakhiran.</p>
</td></tr><tr><td class="ltpurplebackground">
Administrator
</td><td>
A
</td><td>
0.1
</td><td><p>
Entitas memiliki administrator, root, sistem, atau hak istimewa setara yang menyiratkan kontrol penuh atas perangkat lunak atau OS yang mendasari</p>
</td></tr><tr><td class="ltpurplebackground">
Default
</td><td>
D
</td><td>
0.7
</td><td>
<p>Bobot median dari None, Limited, Regular User, Partially-Privileged User, and Administrator</p>
</td></tr><tr><td class="ltpurplebackground">
Unknown
</td><td>
UK
</td><td>
0.5
</td><td>
Tidak ada, terbatas, pengguna biasa, pengguna sebagian-istimewa, dan administrator
</td></tr><tr><td class="ltpurplebackground">
Not Applicable
</td><td>
NA
</td><td>
1.0
</td><td>
Faktor ini secara sengaja diabaikan dalam perhitungan Skor karena tidak relevan dengan bagaimana skorer memprioritaskan kelemahan.
Faktor ini mungkin tidak berlaku di lingkungan dengan persyaratan jaminan tinggi yang ingin penegakan ketat pemisahan hak istimewa, bahkan antara pengguna yang sudah istimewa.
</p>
</td></tr>

<tr><td class="ltpurplebackground">
Quantified
</td><td>
Q
</td><td>
</td><td>

<p>Faktor ini secara sengaja diabaikan dalam perhitungan Skor karena tidak relevan dengan bagaimana skorer memprioritaskan kelemahan.
Faktor ini mungkin tidak berlaku di lingkungan dengan persyaratan jaminan tinggi yang ingin penegakan ketat pemisahan hak istimewa, bahkan antara pengguna yang sudah istimewa.
</p>

</table><br><br>


<h4> Required Privilege Layer (RL)</h4>


<p>The Required Privilege Layer mengidentifikasi Lapisan operasional dimana penyerang harus memiliki hak istimewa untuk mencoba menyerang kelemahan</p>

<table class="table1">
<thead><tr><th>Value</th><th>Code<span class="footnote">*</span></th><th>Weight</th><th>Description</th></tr></thead>
<tr><td class="ltpurplebackground">
Application
</td><td>
A
</td><td>
1.0
</td><td>
<p>Penyerang harus memiliki hak yang didukung dalam perangkat lunak di bawah analisis itu sendiri. (Jika perangkat lunak dalam analisis adalah bagian penting dari sistem yang mendasari, seperti sistem operasi kernel, maka nilai sistem mungkin lebih tepat.)</p>
</td></tr>
<tr><td class="ltpurplebackground">
System
</td><td>
S
</td><td>
0.9
</td><td>

<p>Penyerang harus memiliki hak untuk sistem dasar atau host fisik yang digunakan untuk menjalankan perangkat lunak di bawah analisis</p>

</td></tr>
<tr><td class="ltpurplebackground">
Network
</td><td>
N
</td><td>
0.7
</td><td>
<p>Penyerang harus memiliki hak istimewa untuk mengakses jaringan</p>
</td></tr>
<tr><td class="ltpurplebackground">
Enterprise
Infrastructure
</td><td>
E
</td><td>
1.0
</td><td>

<p>Penyerang harus memiliki hak istimewa pada bagian penting dari infrastruktur perusahaan, seperti router, switch, DNS, pengontrol domain, firewall, server identitas, dll.</p>
</td></tr><tr><td class="ltpurplebackground">
Default
</td><td>
D
</td><td>
0.9
</td><td><p>
Bobot median dari Application, System, Network, and Enterprise Infrastructure</p>
</td></tr><tr><td class="ltpurplebackground">
Unknown
</td><td>
UK
</td><td>
0.5
</td><td>
Tidak ada informasi yang cukup untuk memberikan nilai untuk faktor ini. Analisis lebih lanjut mungkin diperlukan. Di masa depan, nilai yang berbeda mungkin dipilih, yang dapat mempengaruhi Skor.
</td></tr><tr><td class="ltpurplebackground">
Not Applicable
</td><td>
NA
</td><td>
1.0
</td><td>

Faktor ini secara sengaja diabaikan dalam perhitungan Skor karena tidak relevan dengan bagaimana skorer memprioritaskan kelemahan. Faktor ini mungkin tidak berlaku di lingkungan dengan persyaratan jaminan tinggi yang ingin penegakan ketat pemisahan hak istimewa, bahkan antara pengguna yang sudah istimewa.</p>
</td></tr>

<tr><td class="ltpurplebackground">
Quantified
</td><td>
Q
</td><td>
</td><td>

<p>Faktor ini dapat diukur dengan bobot kustom. Perhatikan bahwa nilai quantified didukung untuk kelengkapan; Namun, karena lapisan hak adalah entitas diskrit, mungkin ada situasi terbatas di mana model yang diukur akan berguna
</p>

</table><br><br>



<h4> Access Vector (AV)</h4>

<p>Faktor ini dapat diukur dengan bobot kustom. Perhatikan bahwa nilai quantified didukung untuk kelengkapan; Namun, karena lapisan hak adalah entitas diskrit, mungkin ada situasi terbatas di mana model yang Vektor akses mengidentifikasi saluran melalui mana penyerang harus berkomunikasi untuk mencapai kode atau fungsionalitas yang berisi kelemahan. Perhatikan bahwa nilai ini sangat mirip dengan yang digunakan dalam CVSS, kecuali CWSS membedakan antara akses fisik dan akses lokal (Shell/account).
Meskipun ada hubungan dekat antara Access Vector dan required Privilege Layer, keduanya berbeda. Sebagai contoh, penyerang dengan “fisik " akses ke router mungkin dapat mempengaruhi layer Network atau Enterprise
</p>



<table class="table1">
<thead><tr><th>Value</th><th>Code</th><th>Weight</th><th>Description</th></tr></thead>
<tr><td class="ltpurplebackground">
Internet
</td><td>
I
</td><td>
1.0
</td><td><p>Penyerang harus memiliki akses ke internet untuk mencapai kelemahan.</p>
</td></tr><tr><td class="ltpurplebackground">
Intranet
</td><td>
R
</td><td>
0.8
</td><td>
<p>Penyerang harus memiliki akses ke intranet perusahaan yang terlindung dari akses langsung dari internet, misalnya dengan menggunakan firewall, tetapi jika intranet dapat diakses oleh sebagian besar anggota perusahaan.</p>
</td></tr><tr><td class="ltpurplebackground">
Private Network
</td><td>
V
</td><td>
0.8
</td><td>
<p>Penyerang harus memiliki akses ke jaringan pribadi yang hanya dapat diakses oleh pihak terpercaya</p>
</td></tr><tr><td class="ltpurplebackground">
Adjacent Network
</td><td>
A
</td><td>
0.7
</td><td>
<p>Penyerang harus memiliki akses ke antarmuka fisik ke jaringan. Contoh jaringan lokal mencakup subnet IP lokal, Bluetooth, IEEE 802, 11, dan segmen Ethernet lokal.</p>
</td></tr><tr><td class="ltpurplebackground">
Local
</td><td>
L
</td><td>
0.5
</td><td>
<p>Penyerang harus memiliki akun interaktif, antarmuka local (shell) secara langsung dengan sistem operasi yang mendasari</p>
</td></tr><tr><td class="ltpurplebackground">
Physical
</td><td>
P
</td><td>
0.2
</td><td>
<p>Penyerang harus memiliki akses fisik ke sistem yang menjalankan perangkat lunak, atau dapat berinteraksi dengan sistem melalui antarmuka seperti USB, CD, keyboard, mouse, dll.</p>
</td></tr><tr><td class="ltpurplebackground">
Default
</td><td>
D
</td><td>
0.75
</td><td>
<p>Bobot median dari nilai yang relevan</p>
</td></tr><tr><td class="ltpurplebackground">
Unknown
</td><td>
U
</td><td>
0.5
</td><td>
</td></tr><tr><td class="ltpurplebackground">
Not Applicable
</td><td>
NA
</td><td>
1.0
</td><td>
Faktor ini secara sengaja diabaikan dalam perhitungan Skor karena tidak relevan dengan bagaimana skorer memprioritaskan kelemahan.

</td></tr>

<tr><td class="ltpurplebackground">
Quantified
</td><td>
Q
</td><td>
</td><td>

<p>Faktor-nya dapat diukur dengan bobot kustom. Perhatikan bahwa nilai quantified didukung untuk kelengkapan; Namun, karena vektor akses adalah entitas diskrit, mungkin ada situasi terbatas di mana model yang diukur akan berguna.
</p>

</table><br><br>



<h4> Authentication Strength (AS)</h4>


<p>Kekuatan otentikasi mencakup kekuatan rutin otentikasi yang melindungi kode/fungsionalitas yang berisi kelemahan</p>

<p>Ketika ada beberapa otentikasi rutin, atau beberapa jalur kode yang dapat mencapai kelemahan yang sama, maka panduan berikut berlaku:</p>
<ul>

  <li>Untuk setiap jalur kode, analisis setiap rutinitas autentikasi yang ada di sepanjang jalur kode, dan pilih nilai dengan bobot terendah (yaitu, rutinitas autentikasi terkuat di sepanjang jalur kode). Ini disebut nilai jalur kode

  <li>Mengumpulkan semua kode path nilai
  <li>Pilih nilai jalur kode yang memiliki bobot tertinggi (yaitu, berisi rutinitas yang paling lemah).

</ul>
  

<table class="table1">
<thead><tr><th>Value</th><th>Code</th><th>Weight</th><th>Description</th></tr></thead>
<tr><td class="ltpurplebackground">
Strong
</td><td>
S
</td><td>
0.7
</td><td><p>
Kelemahan membutuhkan metode yang paling kuat yang tersedia untuk mengikat entitas ke identitas dunia nyata, seperti token berbasis perangkat keras, dan/atau autentikasi multifaktor.</p>
</td></tr><tr><td class="ltpurplebackground">
Moderate
</td><td>
M
</td><td>
0.8
</td><td><p>
Kelemahan memerlukan otentikasi menggunakan metode yang cukup kuat, seperti penggunaan sertifikat dari otoritas yang tidak tepercaya, otentikasi berbasis pengetahuan, atau password satu kali</p>
</td></tr><tr><td class="ltpurplebackground">
Weak
</td><td>
W
</td><td>
0.9
</td><td><p>
Kelemahan membutuhkan metode otentikasi sederhana dan lemah yang mudah dikompromikan dengan menggunakan spoofing, Dictionary, atau serangan replay, seperti password statis</p>
</td></tr><tr><td class="ltpurplebackground">
None
</td><td>
N
</td><td>
1.0
</td><td><p>
Kelemahan tidak memerlukan otentikasi sama sekali..</p>
</td></tr><tr><td class="ltpurplebackground">
Default
</td><td>
D
</td><td>
0.85
</td><td><p>
Nilai median untuk Strong, Moderate, Weak, and None</p>
</td></tr><tr><td class="ltpurplebackground">
Unknown
</td><td>
UK
</td><td>
0.5
</td><td>
Tidak ada informasi yang cukup untuk memberikan nilai untuk faktor ini. Analisis lebih lanjut mungkin diperlukan. Di masa depan, nilai yang berbeda mungkin dipilih, yang dapat mempengaruhi Skor.
</td></tr><tr><td class="ltpurplebackground">
Not Applicable
</td><td>
NA
</td><td>
1.0
</td><td>Faktor ini secara sengaja diabaikan dalam perhitungan Skor karena tidak relevan dengan bagaimana skorer memprioritaskan kelemahan. Ini mungkin tidak berlaku di lingkungan dengan persyaratan jaminan tinggi yang berusaha untuk menghilangkan semua kelemahan.</p>

</td></tr>

<tr><td class="ltpurplebackground">
Quantified
</td><td>
Q
</td><td>
</td><td>

<p>Faktor ini dapat diukur dengan bobot kustom.
</p>
</table><br><br>


<h4>Level of Interaction (IN)</h4>

<p>Level interaksi mencakup tindakan yang diperlukan oleh korban manusia untuk memungkinkan serangan yang sukses terjadi.</p>

<table class="table1">
<thead><tr><th>Value</th><th>Code</th><th>Weight</th><th>Description</th></tr></thead>
<tr><td class="ltpurplebackground">
Automated
</td><td>
A
</td><td>
1.0
</td><td><p>
Tidak ada interaksi manusia yang diperlukan</p>
</td></tr><tr><td class="ltpurplebackground">
Typical/Limited
</td><td>
T
</td><td>
0.9
</td><td><p> Penyerang harus meyakinkan pengguna untuk melakukan tindakan yang umum atau dianggap sebagai "normal" dalam operasi produk khas. Misalnya, mengeklik tautan di laman web, atau melihat pratinjau badan email, adalah perilaku yang umum</p>
</td></tr><tr><td class="ltpurplebackground">
Moderate
</td><td>
M
</td><td>
0.8
</td><td><p>
Penyerang harus meyakinkan pengguna untuk melakukan tindakan yang mungkin tampak mencurigakan untuk pengguna yang berhati-hati dan berpengetahuan. Misalnya: pengguna harus menerima peringatan yang menunjukkan muatan penyerang mungkin berisi konten berbahaya.</p>
</td></tr><tr><td class="ltpurplebackground">
Opportunistic
</td><td>
O
</td><td>
0.3
</td><td><p>
Penyerang tidak dapat secara langsung mengendalikan atau mempengaruhi korban, dan hanya dapat secara pasif memanfaatkan kesalahan atau tindakan orang lain.</p>
</td></tr><tr><td class="ltpurplebackground">
High
</td><td>
H
</td><td>
0.1
</td><td><p>
Sejumlah besar rekayasa sosial diperlukan, mungkin termasuk ketidaktahuan atau kelalaian pada bagian dari korban.</p>
</td></tr><tr><td class="ltpurplebackground">
No interaction
</td><td>
NI
</td><td>
0.0
</td><td><p> Tidak ada interaksi yang mungkin, bahkan tidak oistically; ini biasanya akan membuat kelemahan sebagai "bug" bukannya mengarah ke kerentanan. Karena CWSS adalah untuk keamanan, berat adalah 0.</p>
</td></tr><tr><td class="ltpurplebackground">
Default
</td><td>
D
</td><td>
0.55
</td><td><p>
Nilai median dari Automated, Limited, Moderate, Opportunistic, High, and No interaction.</p>
</td></tr><tr><td class="ltpurplebackground">
Unknown
</td><td>
UK
</td><td>
0.5
</td><td>
Tidak ada informasi yang cukup untuk memberikan nilai untuk faktor ini. Analisis lebih lanjut mungkin diperlukan. Di masa depan, nilai yang berbeda mungkin dipilih, yang dapat mempengaruhi Skor.
</td></tr><tr><td class="ltpurplebackground">
Not Applicable
</td><td>
NA
</td><td>
1.0
</td><td>

Faktor ini secara sengaja diabaikan dalam perhitungan Skor karena tidak relevan dengan bagaimana skorer memprioritaskan kelemahan.</p>
</td></tr>

<tr><td class="ltpurplebackground">
Quantified
</td><td>
Q
</td><td>
</td><td>

<p>Faktor ini dapat diukur dengan bobot kustom.
</p>
</td>

</table><br><br>



<h4>Deployment Scope (SC)</h4>


<p>Deployment scope mengidentifikasi apakah kelemahan hadir dalam semua pengembangan perangkat lunak, atau jika dibatasi untuk subset dari platform dan/atau konfigurasi. </p>

<table class="table1">
<thead><tr><th>Value</th><th>Code<span class="footnote">*</span></th><th>Weight</th><th>Description</th></tr></thead>
<tr><td class="ltpurplebackground">
All
</td><td>
A
</td><td>
1.0
</td><td><p>
Tersedia di semua platform atau konfigurasi</p>
</td></tr><tr><td class="ltpurplebackground">
Moderate
</td><td>
M
</td><td>
0.9
</td><td><p>
Tersedia dalam platform umum atau konfigurasi</p>
</td></tr><tr><td class="ltpurplebackground">
Rare
</td><td>
R
</td><td>
0.5
</td><td><p>
Hanya ada di platform atau konfigurasi langka</p>
</td></tr><tr><td class="ltpurplebackground">
Potentially Reachable
</td><td>
P
</td><td>
0.1
</td><td><p> Berpotensi dicapai tetapi semua jalur kode yang saat ini aman, dan/atau kelemahan dalam kode mati</p>
</td></tr><tr><td class="ltpurplebackground">
Default
</td><td>
D
</td><td>
0.7
</td><td><p>
Bobot median untuk nilai RAMP (Rare, All, Moderate, Potentially Reachable)</p>
</td></tr><tr><td class="ltpurplebackground">
Unknown
</td><td>
UK
</td><td>
0.5
</td><td>
Tidak ada informasi yang cukup untuk memberikan nilai untuk faktor ini. Analisis lebih lanjut mungkin diperlukan. Di masa depan, nilai yang berbeda mungkin dipilih, yang dapat mempengaruhi Skor.
</td></tr><tr><td class="ltpurplebackground">
Not Applicable
</td><td>
NA
</td><td>
1.0
</td><td>
Faktor ini secara sengaja diabaikan dalam perhitungan Skor karena tidak relevan dengan bagaimana skorer memprioritaskan kelemahan.
</td></tr><tr><td class="ltpurplebackground">
Quantified
</td><td>
Q
</td><td>
</td><td><p>
Faktor ini dapat diukur dengan bobot kustom. Pengguna mungkin tahu berapa persentase perangkat lunak yang dikirim (atau didukung) berisi bug ini.</p>
</td></tr></table><br><br>


<h3>Environmental Metric Group</h3>
<p>The Environmental metric group terdiri dari beberapa faktor berikut:</p>

<ul>
<li>Business Impact (BI)
</li>
<li>Likelihood of Discovery (DI)
</li>
<li>Likelihood of Exploit (EX)
</li>
<li>External Control Effectiveness (EC)
</li>
<li>Prevalence (P)
</li>
</ul>
<br />

<h4>Business Impact (BI)</h4>

<p>Business impact menggambarkan dampak potensial terhadap bisnis atau misi jika kelemahan dapat berhasil dieksploitasi</p>

<table class="table1">
<thead><tr><th>Value</th><th>Code</th><th>Weight</th><th>Description</th></tr></thead>
<tr><td class="ltpurplebackground">
Critical
</td><td>
C
</td><td>
1.0
</td><td><p>
Bisnis/misi bisa gagal.</p>
</td></tr><tr><td class="ltpurplebackground">
High
</td><td>
H
</td><td>
0.9
</td><td><p>
Operasi bisnis/misi akan terpengaruh secara signifikan.</p>
</td></tr><tr><td class="ltpurplebackground">
Medium
</td><td>
M
</td><td>
0.6
</td><td><p>
Bisnis/misi akan terpengaruh, tetapi tanpa kerusakan yang luas untuk operasi rutin.</p>
</td></tr><tr><td class="ltpurplebackground">
Low
</td><td>
L
</td><td>
0.3
</td><td><p>
Dampak minimal pada bisnis/misi.</p>
</td></tr><tr><td class="ltpurplebackground">
None
</td><td>
N
</td><td>
0.0
</td><td>
Tidak ada dampak.
</td></tr><tr><td class="ltpurplebackground">
Default
</td><td>
D
</td><td>
0.6
</td><td><p>
Bobot median untuk Critical, High, Medium, Low, and None</p>
</td></tr><tr><td class="ltpurplebackground">
Unknown
</td><td>
UK
</td><td>
0.5
</td><td>
Tidak ada informasi yang cukup untuk memberikan nilai untuk faktor ini. Analisis lebih lanjut mungkin diperlukan. Di masa depan, nilai yang berbeda mungkin dipilih, yang dapat mempengaruhi Skor.
</td></tr><tr><td class="ltpurplebackground">
Not Applicable
</td><td>
NA
</td><td>
1.0
</td><td>
Faktor ini secara sengaja diabaikan dalam perhitungan Skor karena tidak relevan dengan bagaimana skorer memprioritaskan kelemahan. Faktor ini mungkin tidak berlaku dalam konteks di mana dampak bisnis tidak relevan, atau jika dampaknya sedang dinilai dan dipertimbangkan dalam proses analisis yang berada di luar Skor CWSS itu sendiri</p>
</td></tr><tr><td class="ltpurplebackground">
Quantified
</td><td>
Q
</td><td>
</td><td>
Faktor ini dapat diukur dengan bobot kustom. Beberapa organisasi mungkin memiliki pengukuran spesifik untuk nilai bisnis aset, misalnya, yang dapat diintegrasikan ke dalam pengukuran ini.

</td></tr></table><br><br>

<h4>Likelihood of Discovery (DI)</h4>

<p>Likelihood of discover adalah kemungkinan bahwa seorang penyerang dapat menemukan kelemahan</p>

<table class="table1">
<thead><tr><th>Value</th><th>Code</th><th>Weight</th><th>Description</th></tr></thead>
<tr><td class="ltpurplebackground">
High
</td><td>
H
</td><td>
1.0
</td><td><p>
Sangat mungkin bahwa seorang penyerang dapat menemukan kelemahan dengan cepat dan dengan sedikit usaha menggunakan teknik sederhana, tanpa akses ke kode sumber atau artefak lain yang menyederhanakan deteksi kelemahan.</p>
</td></tr><tr><td class="ltpurplebackground">
Medium
</td><td>
M
</td><td>
0.6
</td><td><p>
Seorang penyerang mungkin dapat menemukan kelemahan, tetapi akan memerlukan keterampilan tertentu untuk melakukannya, mungkin memerlukan akses kode sumber atau pengetahuan reverse engineering. Ini mungkin memerlukan beberapa waktu investasi untuk menemukan masalah.</p>
</td></tr><tr><td class="ltpurplebackground">
Low
</td><td>
L
</td><td>
0.2
</td><td><p>
Seorang penyerang tidak mungkin untuk menemukan kelemahan tanpa keterampilan yang sangat khusus, akses ke kode sumber (atau setara), dan investasi waktu yang besar.</p>
</td></tr><tr><td class="ltpurplebackground">
Default
</td><td>
D
</td><td>
0.6
</td><td><p>
Nilai median dari High, Medium, and Low values.</p>
</td></tr><tr><td class="ltpurplebackground">
Unknown
</td><td>
UK
</td><td>
0.5
</td><td>
Tidak ada informasi yang cukup untuk memberikan nilai untuk faktor ini. Analisis lebih lanjut mungkin diperlukan. Di masa depan, nilai yang berbeda mungkin dipilih, yang dapat mempengaruhi Skor
</td></tr><tr><td class="ltpurplebackground">
Not Applicable
</td><td>
NA
</td><td>
1.0
</td><td>

Faktor ini secara sengaja diabaikan dalam perhitungan Skor karena tidak relevan dengan bagaimana skorer memprioritaskan kelemahan. Ini mungkin tidak berlaku ketika pencetak gol mengasumsikan bahwa semua kelemahan akan ditemukan oleh penyerang.</p>

</td></tr><tr><td class="ltpurplebackground">
Quantified
</td><td>
Q
</td><td>
</td><td><p>
Faktor ini dapat diukur dengan bobot kustom.</p>
</td></tr></table><br><br>


<h4>Likelihood of Exploit (EX)</h4>

<p>Likelihood of exploit adalah kemungkinan bahwa, jika kelemahan ditemukan, seorang penyerang dengan hak istimewa/otentikasi/akses yang diperlukan akan dapat berhasil mengeksploitasi itu.</p>

<table class="table1">
<thead><tr><th>Value</th><th>Code</th><th>Weight</th><th>Description</th></tr></thead>
<tr><td class="ltpurplebackground">
High
</td><td>
H
</td><td>
1.0
</td><td><p>
Sangat mungkin bahwa seorang penyerang akan menargetkan keberhasilan mengeksploitasi dengan mudah.</p>
</td></tr><tr><td class="ltpurplebackground">
Medium
</td><td>
M
</td><td>
0.6
</td><td><p>
Seorang penyerang mungkin akan menargetkan kelemahan ini berhasil, tetapi kemungkinan keberhasilan dapat bervariasi, atau memerlukan beberapa upaya untuk berhasil.</p>
</td></tr><tr><td class="ltpurplebackground">
Low
</td><td>
L
</td><td>
0.2
</td><td><p>
Seorang penyerang mungkin tidak akan menargetkan kelemahan ini, atau bisa memiliki kemungkinan sangat terbatas pada keberhasilan.</p>
</td></tr><tr><td class="ltpurplebackground">
None
</td><td>
N
</td><td>
0.0
</td><td><p>
Seorang penyerang tidak memiliki kesempatan untuk sukses; yaitu, masalahnya adalah "bug" karena tidak ada peran penyerang, dan tidak ada manfaat bagi penyerang.</p>
</td></tr><tr><td class="ltpurplebackground">
Default
</td><td>
D
</td><td>
0.6
</td><td><p>
Nilai median dari High, Medium, and Low. “none” diabaikan dengan harapan bahwa beberapa kelemahan temuan akan dicetak dengan menggunakan nilai, dan termasuk dalam perhitungan median akan mengurangi berat ke tingkat non-intuitif.</p>
</td></tr><tr><td class="ltpurplebackground">
Unknown
</td><td>
UK
</td><td>
0.5
</td><td>
Tidak ada informasi yang cukup untuk memberikan nilai untuk faktor ini. Analisis lebih lanjut mungkin diperlukan. Di masa depan, nilai yang berbeda mungkin dipilih, yang dapat mempengaruhi Skor.
</td></tr><tr><td class="ltpurplebackground">
Not Applicable
</td><td>
NA
</td><td>
1.0
</td></td><td>
Faktor ini secara sengaja diabaikan dalam perhitungan Skor karena tidak relevan dengan bagaimana skorer memprioritaskan kelemahan.
Sebagai contoh, pencetak gol mungkin ingin berasumsi bahwa penyerang dapat mengeksploitasi kelemahan apa pun yang dapat mereka temukan, atau bersedia menginvestasikan sumber daya yang signifikan untuk mengatasi kemungkinan hambatan untuk mengeksploitasi keberhasilan
</p>

</td></tr><tr><td class="ltpurplebackground">
Quantified
</td><td>
Q
</td><td>
</td><td><p>
Faktor ini dapat diukur dengan bobot khusus</p>
</td></tr></table><br><br>


<h4>External Control Effectiveness (EC)</h4>


<p>Efektivitas kontrol eksternal adalah kemampuan kontrol atau Mitigations di luar perangkat lunak yang dapat membuat kelemahan lebih sulit bagi seorang penyerang untuk mencapai dan/atau memicu. Sebagai contoh, alamat Randomisasi tata letak ruang (ASLR) dan teknologi serupa mengurangi, tetapi tidak menghilangkan, kemungkinan keberhasilan untuk serangan kelebihan buffer. Namun, aslr tidak langsung dipakai dalam perangkat lunak itu sendiri</p>

<p>Bila ada beberapa kontrol eksternal, atau beberapa jalur kode yang dapat mencapai kelemahan yang sama, maka panduan berikut berlaku:</p>
<ul>

  <li>Untuk setiap jalur kode, menganalisa setiap kontrol eksternal yang ada di sepanjang jalur kode, dan memilih nilai dengan bobot terendah (yaitu, kontrol eksternal terkuat di sepanjang jalur kode). Ini disebut nilai jalur kode.

  <li>Mengumpulkan semua kode path nilai
  <li>Pilih nilai jalur kode yang memiliki bobot tertinggi (yaitu, adalah kontrol yang paling lemah). Pilih nilai jalur kode yang memiliki bobot tertinggi (yaitu, adalah kontrol yang paling lemah).

</ul>
  

<p>Metode ini mengevaluasi setiap jalur kode dalam hal kontrol terkuat jalur kode (karena penyerang harus melewati kontrol itu), lalu memilih jalur kode terlemah (yaitu rute termudah bagi penyerang untuk mengambil).</p>


<table class="table1">
<thead><tr><th>Value</th><th>Code</th><th>Weight</th><th>Description</th></tr></thead>
<tr><td class="ltpurplebackground">
None
</td><td>
N
</td><td>
1.0
</td><td>
Tidak ada kontrol
</td></tr><tr><td class="ltpurplebackground">
Limited
</td><td>
L
</td><td>
0.9
</td><td>
<p>Ada metode sederhana atau pembatasan yang mungkin mencegah penyerang mengeksploitasi masalah.</p>
</td></tr><tr><td class="ltpurplebackground">
Moderate
</td><td>
M
</td><td>
0.7
</td><td>

<p> Mekanisme perlindungan biasanya digunakan tetapi telah diketahui batasannya yang mungkin dilewati dengan beberapa upaya oleh penyerang berpengetahuan.</p>

</td></tr><tr><td class="ltpurplebackground">
Indirect (Defense-in-Depth)
</td><td>
I
</td><td>
0.5
</td><td>

<p>Kontrol tidak secara khusus melindungi terhadap eksploitasi kelemahan, tetapi secara tidak langsung mengurangi dampak ketika serangan berhasil diluncurkan, atau sebaliknya membuatnya lebih sulit untuk membangun eksploitasi fungsional.</p>

<p>Sebagai contoh, alamat Randomisasi tata letak ruang (ASLR) dan teknologi serupa mengurangi, tetapi tidak menghilangkan, kemungkinan keberhasilan dalam serangan kelebihan buffer. Karena respons biasanya untuk keluar dari proses, hasilnya masih merupakan penyangkalan layanan</p>

</td></tr><tr><td class="ltpurplebackground">
Best-Available
</td><td>
B
</td><td>
0.3
</td><td><p>
Kontrol terbaik saat ini, meskipun mungkin memiliki beberapa keterbatasan yang dapat diatasi oleh penyerang terampil, ditentukan, mungkin memerlukan kehadiran kelemahan lain. Misalnya, Transport Layer Security (TLS)/SSL 3 beroperasi di sebagian besar web, dan metode yang lebih kuat umumnya tidak tersedia karena masalah kompatibilitas..</p>
</td></tr><tr><td class="ltpurplebackground">
Complete
</td><td>
C
</td><td>
0.1
</td><td>

<p>Kontrol sepenuhnya efektif terhadap kelemahan, yaitu, tidak ada bug atau kerentanan, dan tidak ada konsekuensi yang merugikan dari eksploitasi masalah. Misalnya, lingkungan sandbox mungkin membatasi operasi akses file ke satu direktori kerja, yang akan melindungi dari eksploitasi jalur traversal. Bobot bukan nol digunakan untuk mencerminkan kemungkinan bahwa kontrol eksternal dapat dihapus secara tidak sengaja di masa mendatang, misalnya jika perubahan lingkungan perangkat lunak.</p>
</td></tr><tr><td class="ltpurplebackground">
Default
</td><td>
D
</td><td>
0.6
</td><td><p>
Median dari Complete, Best-Available, Indirect, Moderate, Limited, and None.</p>
</td></tr><tr><td class="ltpurplebackground">
Unknown
</td><td>
UK
</td><td>
0.5
</td><td>
Tidak ada informasi yang cukup untuk memberikan nilai untuk faktor ini. Analisis lebih lanjut mungkin diperlukan. Di masa depan, nilai yang berbeda mungkin dipilih, yang dapat mempengaruhi Skor
</td></tr><tr><td class="ltpurplebackground">
Not Applicable
</td><td>
NA
</td><td>
1.0
</td><td>
Faktor ini secara sengaja diabaikan dalam perhitungan Skor karena tidak relevan dengan bagaimana skorer memprioritaskan kelemahan
</td></tr>

</td></tr>
<tr><td class="ltpurplebackground">
Quantified
</td><td>
Q
</td><td>
</td><td>
Faktor ini dapat diukur dengan bobot kustom.
</td></tr>

</table><br><br>



<h4> Prevalence (P)</h4>

<p>Prevalensi dari temuan mengidentifikasi seberapa sering kelemahan jenis ini muncul dalam perangkat lunak.
Faktor ini dimaksudkan untuk digunakan dalam Skor Generalized kelas kelemahan, seperti pengembangan kustom Top-N daftar kelemahan
</p>



<table class="table1">
<thead><tr><th>Value</th><th>Code</th><th>Weight**</th><th>Description</th></tr></thead>
<tr><td class="ltpurplebackground">
Widespread
</td><td>
W
</td><td>
1.0
</td><td><p>
Kelemahan yang ditemukan di sebagian besar atau semua perangkat lunak dalam lingkungan terkait, dan mungkin terjadi beberapa kali dalam paket perangkat lunak yang sama.</p>
</td></tr><tr><td class="ltpurplebackground">
High
</td><td>
H
</td><td>
0.9
</td><td><p>
Kelemahan yang dihadapi sangat sering, tetapi tidak luas.</p>
</td></tr><tr><td class="ltpurplebackground">
Common
</td><td>
C
</td><td>
0.8
</td><td><p>
Kelemahan yang dihadapi secara berkala.</p>
</td></tr><tr><td class="ltpurplebackground">
Limited
</td><td>
L
</td><td>
0.7
</td><td><p>
Kelemahan yang dihadapi jarang, atau tidak pernah.</p>
</td></tr><tr><td class="ltpurplebackground">
Default
</td><td>
D
</td><td>
0.85
</td><td><p>
Median dari Limited, Common, High, and Widespread.</p>
</td></tr><tr><td class="ltpurplebackground">
Unknown
</td><td>
UK
</td><td>
0.5
</td><td>
Tidak ada informasi yang cukup untuk memberikan nilai untuk faktor ini. Analisis lebih lanjut mungkin diperlukan. Di masa depan, nilai yang berbeda mungkin dipilih, yang dapat mempengaruhi Skor.
</td></tr><tr><td class="ltpurplebackground">
Not Applicable
</td><td>
NA
</td><td>
1.0
</td><td>

Faktor ini secara sengaja diabaikan dalam perhitungan Skor karena tidak relevan dengan bagaimana skorer memprioritaskan kelemahan. Ketika melakukan penilaian yang ditargetkan terhadap temuan spesifik kelemahan dalam aplikasi, prevalensi biasanya diharapkan tidak relevan, karena aplikasi individu dan teknik analisis menentukan seberapa sering kelemahan terjadi, dan banyak metode penilaian agregat akan menghasilkan Skor yang lebih besar jika ada lebih banyak kelemahan.</p>

</td></tr><tr><td class="ltpurplebackground">
Quantified
</td><td>
Q
</td><td>
</td><td><p>
Faktor ini dapat diukur dengan bobot kustom. Data prevalensi yang tepat mungkin tersedia dalam kasus penggunaan terbatas, asalkan pengguna melacak data kelemahan pada tingkat granularity yang rendah. Misalnya, pengembang mungkin melacak kelemahan di seluruh rangkaian produk, atau vendor audit kode dapat mengukur prevalensi dari perangkat lunak yang dianalisis di seluruh basis pelanggan. Dalam versi CWSS sebelumnya, prevalensi dihitung berdasarkan data pemungutan suara mentah yang dikumpulkan untuk 2010 Top 25, yang menggunakan nilai diskrit (kisaran 1 sampai 4) yang kemudian disesuaikan dengan kisaran 1-ke-10.</p>
</td></tr>


</table>












































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