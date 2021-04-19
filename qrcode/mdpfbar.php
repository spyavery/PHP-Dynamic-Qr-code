<?php



$html = '<main role="main" class="container">
        
<div class="row col-12 mt-3">
    <div class="col-md-4 mx-auto">
        <img class="img-responsive" src="logo.png" height="100">
    </div>
    <div class="col-md-4 mx-auto pt-3 text-center">
        <h3>"since 1988"</h3>
    </div>
    <div class="col-md-4 mx-auto">
       <div class="row no-gutters">
           <div class="col-12">
            <img class="img-responsive d-inline pr-3" src="fqc.png" height="70">
             <img class="img-responsive d-inline" src="eqas.png" height="70">
        </div>
        <div class="col-12">
            <img class="img-responsive d-inline pr-3" src="iaf.png" height="70">
            <img class="img-responsive d-inline" src="daks.png" height="70">
        </div>
        <div class="col-6">
            <p class="text-center iso-text">ISO 9001:2015</p>
        </div>
       </div>
    </div>
</div>

<div class="text-center mt-5 pt-5">
    <h1>ERDURAN GENETICS LABORATORY</h1>
    <p class="lead float-right">02.03.2021</p>
</div>

<div class="text-center mt-3 pt-5">
    <p>Erduran Genetik laboratuvarımızda DATE tarihinde TIME, IDNUMBER kimlik numarali USERNAME, adlı kişiye ait nazofarenks sürüntü örneğinden yapılan <em>SARS-CoV2</em> virüs testi <strong><u>Gerçek-Zamanlı PCR yöntemi</u></strong> ile çalısılmış ve <em>SARS-CoV2</em> virüsü #ANSWER.</p>
</div>

<div class="text-center mt-3 pt-5">
    <h3>To Whom It May Concern</h3>
    <p><em>SARS-CoV2</em> Virus test was conducted by <strong><u>Real-Time PCR Method</u></strong> by Erduran Genetics Laboratory on nasopharyngeal swab specimen collected from #USERNAME, ID number #IDNUMBER, on #DATE at #TIME. <em>The SARS-CoV2</em> viral RNA #ANSWER in the nasopharyngel specimen. </p>
</div>

<div class="mt-2 pt-5">
    <p>Kind Regards,</p>
</div>





</main>';


//==============================================================
//==============================================================
//==============================================================

$path = (getenv('MPDF_ROOT')) ? getenv('MPDF_ROOT') : __DIR__;
require_once $path . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$mpdf->SetDisplayMode('fullpage');

// LOAD a stylesheet
$stylesheet = file_get_contents('assets/mpdfstyleA4.css');
$mpdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text

$mpdf->WriteHTML($html);

$mpdf->Output();

exit;
//==============================================================
//==============================================================
//==============================================================