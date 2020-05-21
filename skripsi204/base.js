  //base finding

 var technical_impact = new Array();
    technical_impact["C"]=1.0;
    technical_impact["H"]=0.9;
    technical_impact["M"]=0.6;
    technical_impact["L"]=0.3;
    technical_impact["N"]=0;
    technical_impact["D"]=0.6;
    technical_impact["UK"]=0.5;
    technical_impact["NA"]=1.0;
    technical_impact["Q"]=0; 

 var acquired_privilege = new Array();
    acquired_privilege["A"]=1.0 ;
    acquired_privilege["P"]=0.9 ;
    acquired_privilege["RU"]=0.7 ;
    acquired_privilege["L"]=0.6 ;
    acquired_privilege["N"]=0.1 ;
    acquired_privilege["D"]=0.7 ;
    acquired_privilege["UK"]= 0.5;
    acquired_privilege["NA"]=1.0 ;
    acquired_privilege["Q"]= 0;

 var acquired_privilegeLayer = new Array();
    acquired_privilegeLayer["A"]=1.0 ;
    acquired_privilegeLayer["S"]=0.9 ;
    acquired_privilegeLayer["N"]=0.7 ;
    acquired_privilegeLayer["E"]=1.0 ;
    acquired_privilegeLayer["D"]=0.9 ;
    acquired_privilegeLayer["UK"]= 0.5;
    acquired_privilegeLayer["NA"]=1.0 ;
    acquired_privilegeLayer["Q"]= 0;


var internalControl_effectiveness = new Array();
    internalControl_effectiveness["N"]=1.0 ;
    internalControl_effectiveness["L"]=0.9 ;
    internalControl_effectiveness["M"]=0.7 ;
    internalControl_effectiveness["I"]=0.5 ;
    internalControl_effectiveness["B"]=0.3 ;
    internalControl_effectiveness["C"]= 0.0;
    internalControl_effectiveness["D"]=0.6;
    internalControl_effectiveness["UK"]= 0.5;
    internalControl_effectiveness["NA"]=1.0 ;
    internalControl_effectiveness["Q"]= 0;

 var finding_confidence = new Array();
     finding_confidence["T"]=1.0 ;
     finding_confidence["LT"]=0.8 ;
     finding_confidence["F"]=0.0 ;
     finding_confidence["D"]=0.8 ;
     finding_confidence["UK"]=0.5 ;
     finding_confidence["NA"]= 1.0;
     finding_confidence["Q"]=0;


//attack surface

var required_privilege = new Array();
     required_privilege["N"]=1.0;
     required_privilege["L"]=0.9;
     required_privilege["RU"]=0.7;
     required_privilege["P"]=0.6;
     required_privilege["A"]=0.1;
     required_privilege["D"]=0.7;
     required_privilege["UK"]=0.5;
     required_privilege["NA"]=1.0;
     required_privilege["Q"]=0;

var required_privilegeLayer = new Array();
     required_privilegeLayer["A"]=1.0 ;
     required_privilegeLayer["S"]=0.9 ;
     required_privilegeLayer["N"]=0.7 ;
     required_privilegeLayer["E"]=1.0 ;
     required_privilegeLayer["D"]=0.9 ;
     required_privilegeLayer["UK"]= 0.5;
     required_privilegeLayer["NA"]=1.0 ;
     required_privilegeLayer["Q"]= 0;

var acces_vector = new Array();
     acces_vector["I"]=1.0;
     acces_vector["R"]=0.8;
     acces_vector["V"]=0.8;
     acces_vector["A"]=0.7;
     acces_vector["L"]=0.5;
     acces_vector["P"]=0.2;
     acces_vector["D"]=0.75;
     acces_vector["UK"]=0.5;
     acces_vector["NA"]=1.0;
     acces_vector["Q"]=0;

var authentication_strength = new Array();
     authentication_strength["S"]=0.7;
     authentication_strength["M"]=0.8;
     authentication_strength["W"]=0.9;
     authentication_strength["N"]=1.0;
     authentication_strength["D"]=0.85;
     authentication_strength["UK"]=0.5;
     authentication_strength["NA"]=1.0;
     authentication_strength["Q"]=0;

var level_interaction = new Array();
     level_interaction["A"]=1.0;
     level_interaction["T"]=0.9;
     level_interaction["M"]=0.8;
     level_interaction["O"]=0.3;
     level_interaction["H"]=0.10;
     level_interaction["NI"]=0.0;
     level_interaction["D"]=0.55;
     level_interaction["UK"]=0.5;
     level_interaction["NA"]=1.0;
     level_interaction["Q"]=0;

var deployment_scope = new Array();
     deployment_scope["A"]=1.0;
     deployment_scope["M"]=0.9;
     deployment_scope["R"]=0.5;
     deployment_scope["P"]=0.1;
     deployment_scope["D"]=0.7;
     deployment_scope["UK"]=0.5;
     deployment_scope["NA"]=1.0;
     deployment_scope["Q"]=0;



 // environmental score

 var business_impact = new Array();
     business_impact["C"]=1.0;
     business_impact["H"]=0.9;
     business_impact["M"]=0.6;
     business_impact["L"]=0.3;
     business_impact["N"]=0.0;
     business_impact["D"]=0.6;
     business_impact["UK"]=0.5;
     business_impact["NA"]=1.0;
     business_impact["Q"]=0 ;

var likelihoodOf_discovery = new Array();
     likelihoodOf_discovery["H"]=1.0;
     likelihoodOf_discovery["M"]=0.6;
     likelihoodOf_discovery["L"]=0.2;
     likelihoodOf_discovery["D"]=0.6;
     likelihoodOf_discovery["UK"]=0.5;
     likelihoodOf_discovery["NA"]=1.0;
     likelihoodOf_discovery["Q"]=0;

var likelihoodOf_exploit = new Array();
     likelihoodOf_exploit["H"]=1.0;
     likelihoodOf_exploit["M"]=0.6;
     likelihoodOf_exploit["L"]=0.2;
     likelihoodOf_exploit["N"]=0.0;
     likelihoodOf_exploit["D"]=0.6;
     likelihoodOf_exploit["UK"]=0.5;
     likelihoodOf_exploit["NA"]=1.0;
     likelihoodOf_exploit["Q"]=0;

 var externalControl_effectiveness = new Array();
     externalControl_effectiveness["N"]=1.0 ;
     externalControl_effectiveness["L"]=0.9 ;
     externalControl_effectiveness["M"]=0.7 ;
     externalControl_effectiveness["I"]=0.5 ;
     externalControl_effectiveness["B"]=0.3 ;
     externalControl_effectiveness["C"]= 0.1;
     externalControl_effectiveness["D"]=0.6;
     externalControl_effectiveness["UK"]= 0.5;
     externalControl_effectiveness["NA"]=1.0 ;
     externalControl_effectiveness["Q"]= 0;
     
var prevalence = new Array();
     prevalence["W"]=1.0;
     prevalence["H"]=0.9;
     prevalence["C"]=0.8;
     prevalence["L"]=0.7;
     prevalence["D"]=0.85;
     prevalence["UK"]=0.5;
     prevalence["NA"]=1.0;
     prevalence["Q"]=0;



 
	 
	 
// fungsi base finding

function gettechnicalimpact()
{  
    var technical=0;
    var theForm = document.forms["base finding"];
    var ti = theForm.elements["ti"];
    for(var i = 0; i < ti.length; i++)
    {
        if(ti[i].checked )
        {
            technical = technical_impact[ti[i].value];
            break;
        }
    }
    return technical;
}



function getacquiredprivilege()
{  
    var acquired =0;
    var theForm = document.forms["base finding"];
    var ap = theForm.elements["ap"];
    for(var i = 0; i < ap.length; i++)
    {
        if(ap[i].checked)
        {
            acquired = acquired_privilege[ap[i].value];
            break;
        }
    }
    return acquired;
}



function getacquiredprivilegelayer()
{  
    var acquiredpl=0;
    var theForm = document.forms["base finding"];
    var al = theForm.elements["al"];
    for(var i = 0; i < al.length; i++)
    {
        if(al[i].checked)
        {
            acquiredpl= acquired_privilegeLayer[al[i].value];
            break;
        }
    }
    return acquiredpl;
}



function getinternalcontrol()
{  
    var internal=0;
    var theForm = document.forms["base finding"];
    var ic = theForm.elements["ic"];
    for(var i = 0; i < ic.length; i++)
    {
        if(ic[i].checked)
        {
            internal = internalControl_effectiveness[ic[i].value];
            break;
        }
    }
    return internal;
}

function getfindingconfidence()
{  
    var finding=0;
    var theForm = document.forms["base finding"];
    var fc = theForm.elements["fc"];
    for(var i = 0; i < fc.length; i++)
    {
        if(fc[i].checked)
        {
            finding = finding_confidence[fc[i].value];
            break;
        }
    }
    return finding;
}


// fungsi attack surface

function getrequiredprivilege()
{  
    var required=0;
    var theForm = document.forms["base finding"];
    var rp = theForm.elements["rp"];
    for(var i = 0; i < rp.length; i++)
    {
        if(rp[i].checked)
        {
            required = required_privilege[rp[i].value];
            break;
        }
    }
    return required;
}


function getrequiredprivilegelayer()
{  
    var requiredpl=0;
    var theForm = document.forms["base finding"];
    var rl = theForm.elements["rl"];
    for(var i = 0; i < rl.length; i++)
    {
        if(rl[i].checked)
        {
            requiredpl = required_privilegeLayer[rl[i].value];
            break;
        }
    }
    return requiredpl;
}




function getaccesvector()
{  
    var acces=0;
    var theForm = document.forms["base finding"];
    var av = theForm.elements["av"];
    for(var i = 0; i < av.length; i++)
    {
        if(av[i].checked)
        {
            acces = acces_vector[av[i].value];
            break;
        }
    }
    return acces;
}


function getauthenticationstrength()
{  
    var authentication=0;
    var theForm = document.forms["base finding"];
    var as = theForm.elements["as"];
    for(var i = 0; i < as.length; i++)
    {
        if(as[i].checked)
        {
           authentication =authentication_strength[as[i].value];
            break;
        }
    }
    return authentication;
}


function getlevelinteraction()
{  
    var level=0;
    var theForm = document.forms["base finding"];
    var ini = theForm.elements["ini"];
    for(var i = 0; i < ini.length; i++)
    {
        if(ini[i].checked)
        {
            level =level_interaction[ini[i].value];
            break;
        }
    }
    return level;
}


function getdeploymentscope()
{  
    var deployment=0;
    var theForm = document.forms["base finding"];
    var sco = theForm.elements["sco"];
    for(var i = 0; i < sco.length; i++)
    {
        if(sco[i].checked)
        {
            deployment =deployment_scope[sco[i].value];
            break;
        }
    }
    return deployment;
}


// fungsi get environmental

function getbusinessimpact()
{  
    var business=0;
    var theForm = document.forms["base finding"];
    var bim = theForm.elements["bim"];
    for(var i = 0; i < bim.length; i++)
    {
        if(bim[i].checked)
        {
            business =business_impact[bim[i].value];
            break;
        }
    }
    return business;
}



function getlikelihooddiscovery()
{  
    var likelihood=0;
    var theForm = document.forms["base finding"];
    var di = theForm.elements["di"];
    for(var i = 0; i < di.length; i++)
    {
        if(di[i].checked)
        {
            likelihood =likelihoodOf_discovery[di[i].value];
            break;
        }
    }
    return likelihood;
}



function getlikelihoodexploit()
{  
    var lexploit=0;
    var theForm = document.forms["base finding"];
    var ex = theForm.elements["ex"];
    for(var i = 0; i < ex.length; i++)
    {
        
        if(ex[i].checked)
        {
            lexploit =likelihoodOf_exploit[ex[i].value];
            break;
        }
    }
    return lexploit;
}


function getexternalcontrol()
{  
    var external=0;
    var theForm = document.forms["base finding"];
    var ec = theForm.elements["ec"];
    for(var i = 0; i < ec.length; i++)
    {
        if(ec[i].checked)
        {
            external =externalControl_effectiveness[ec[i].value];
            break;
        }
    }
    return external;
}



function getprevalence()
{  
    var prevalen=0;
    var theForm = document.forms["base finding"];
    var p = theForm.elements["p"];
    for(var i = 0; i < p.length; i++)
    {
        if(p[i].checked)
        {
            prevalen =prevalence[p[i].value];
            break;
        }
    }
    return prevalen;
}


function calculateTotal()
{
    var hasil = gettechnicalimpact();
    var ftimp ;
    if(hasil <= 0){
        ftimp =0;
    } else {
        ftimp =1;
    }

    var basefinding =[(10 * gettechnicalimpact() + 5 * (getacquiredprivilege()+ getacquiredprivilegelayer()) + 5 *getfindingconfidence())  * ftimp* getinternalcontrol()  ] * 4 
    
    //display the result
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Base Finding Score: "+basefinding;

}





function calculateTotal2()
{
    var attack = [ 20 * (getrequiredprivilege() + getrequiredprivilegelayer() + getaccesvector()) + 20* getdeploymentscope() + 15* getlevelinteraction() + 5*getauthenticationstrength()] /100.0
        //display the result
    var divobj = document.getElementById('totalprices');
    divobj.style.display='block';
    divobj.innerHTML = "Attack surface score: "+attack;



}


function calculateTotal3()
{


    var hasil2 = getbusinessimpact();
    
    var fbimp ;
    if(hasil2 <=0){
        fbimp =0;
    } else {
        fbimp =1;
    }
 
    var business = [ (10*getbusinessimpact() + 3 * getlikelihooddiscovery() + 4 * getlikelihoodexploit() + 3* getprevalence() ) * fbimp * getexternalcontrol()] / 20

    //display the result
    var divobj = document.getElementById('totalPriced');
    divobj.style.display='block';
    divobj.innerHTML = "Environmental score: "+business;

}

function calculateTotal4()
{


 var hasil = gettechnicalimpact();
    
    var ftimp ;
    if(hasil <= 0){
        ftimp =0;
    } else {
        ftimp =1;
    }
 

var hasil2 = getbusinessimpact();
    
    var fbimp ;
    if(hasil2 <= 0){
        fbimp =0;
    } else {
        fbimp =1;
    }


    var cwss =[(10 * gettechnicalimpact() + 5 * (getacquiredprivilege()+ getacquiredprivilegelayer()) + 5 *getfindingconfidence()) * ftimp * getinternalcontrol() ] * 4.0 *  [ 20 * (getrequiredprivilege() + getrequiredprivilegelayer() + getaccesvector()) + 20* getdeploymentscope() + 15* getlevelinteraction() + 5*getauthenticationstrength()] /100
 * [ (10*getbusinessimpact() + 3 * getlikelihooddiscovery() + 4 * getlikelihoodexploit() + 3* getprevalence() ) * fbimp * getexternalcontrol()] / 20

         //display the result
    var divobj = document.getElementById('totalPricede');
    divobj.style.display='block';
    divobj.innerHTML = "CWSS Score: "+cwss;

}







function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
}



$('.btn-download').click(function(){
  var doc = new jsPDF("p", "mm", "a4");
  html2canvas(document.querySelector('#demo')).then(function(canvas){
    var imgData = canvas.toDataURL('image/png');
    var pageHeight = 295;  
    var imgWidth = (canvas.width * 33) / 210 ; 
    var imgHeight = canvas.height * imgWidth / canvas.width;
    var heightLeft = imgHeight;
    var position = 15;

    doc.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
    heightLeft -= pageHeight;

    while (heightLeft >= 0) {
        position = heightLeft - imgHeight;
        doc.addPage();
        doc.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
        heightLeft -= pageHeight; 
    }
    doc.output('dataurlnewwindow');
   doc.addPage()
   
    doc.setFontSize(10)
    doc.text(50,5,'cwss rep(Common Weakness Scoring System) Applicationort')
    doc.text(5, 10, 'Dampak teknis yang diakibatkan oleh kelemahan, dengan asumsi bahwa kelemahan tersebut berhasil dieksploitas')
    doc.text(5, 20, 'Dampak teknis yang diakibatkan oleh kelemahan, dengan asumsi bahwa kelemahan tersebut berhasil dieksploitas')
    doc.text(5, 30, 'Dampak teknis yang diakibatkan oleh kelemahan, dengan asumsi bahwa kelemahan tersebut berhasil dieksploitas')
    doc.save(Date.now() +'.pdf');
  });
});

var doc = new jsPDF();
doc.setFontSize(22);
doc.text(20, 20, 'This is a title');

doc.setFontSize(16);
doc.text(20, 30, 'This is some normal sized text underneath.'); 

// Output as Data URI
doc.output('datauri');








