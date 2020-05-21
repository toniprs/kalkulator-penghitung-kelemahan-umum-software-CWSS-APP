$(document).ready(function(){

//$("input[type=radio]").change(function(){
 //var method = $(this).val();
 //$("#form").attr("method", method); 
//});


$("#submit").click(function(){ 
	var fnama = document.getElementById("fnama").value;
        var fprofesi = document.getElementById("fprofesi").value;
        var faplikasi = document.getElementById("faplikasi").value;
        var deskripsi = document.getElementById("deskripsi").value;
        if(fnama==""&&fprofesi==""&&faplikasi==""&&deskripsi=="")
        {
            alert('silahkan isi! Nama Evaluator:..'+'\n'+'silahkan isi! Profesi:..'+'\n'+'silahkan isi! Aplikasi yang diuji:..'+'\n'+'silahkan isi! Deskripsi aplikasi yang diuji:..');
       		return false;
        }
        else if(fnama==""){
            alert('Nama Evaluator Harus diisi');
            return false;
        }
        else if (fprofesi == "") {
            alert("Profesi Harus diisi");
            return false;
 
        }
        else if (faplikasi == "") {
            alert("isi nama aplikasi yang diuji !");
            return false;
 
        }
        else if (deskripsi == "") {
            alert("Silahkan isi Deskripsi aplikasi");
            return false;
 
        }
 
        else{
            return true;
             
             }
 
	//var fnama = $("#fnama").val();
	//var fprofesi = $("#fprofesi").val();
	//var faplikasi = $("#faplikasi").val();
	//var deskripsi = $("#deskripsi").val();
	


	//validasi agar inputan tidak kosongsss
	//if( fnama != '' || fprofesi != '' || faplikasi != '' || deskripsi != ''){
	//	return true; 
	//}	
	//else{
	//	alert("Harap diisi yaa...");
	//	return false;
	//}




	//function doinsert() {
        
    
});
});