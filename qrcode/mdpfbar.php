<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

// $document_folder = $_SERVER['DOCUMENT_ROOT']."/".DOCUMENT_FOLDER."/".PAYMENT_RECEIPTS."/".date("Y");
$document_folder = 'assets/reports';
        $extension = ".pdf";
        if(!is_dir($document_folder)){
            mkdir($document_folder, 0777,true);
        }
        $file_name = "namegiven";

$html = '<main role="main" class="container">
        

<div class="text-center" style="margin-top:150px; padding-top:170px; margin-bottom:20px;">
    <h1>ERDURAN GENETICS LABORATORY</h1>
    <p style="float: right; width: 28%;">'.date("d.m.Y").'</p>
</div>

<div class="text-center mt-3 pt-5" style="margin-top:80px;">
    <p>Erduran Genetik laboratuvarımızda DATE tarihinde TIME, IDNUMBER kimlik numarali USERNAME, adlı kişiye ait nazofarenks sürüntü örneğinden yapılan <em>SARS-CoV2</em> virüs testi <strong><u>Gerçek-Zamanlı PCR yöntemi</u></strong> ile çalısılmış ve <em>SARS-CoV2</em> virüsü #ANSWER.</p>
</div>

<div class="text-center mt-3 pt-5" style="margin-top:80px;">
    <h3>To Whom It May Concern</h3>
    <p><em>SARS-CoV2</em> Virus test was conducted by <strong><u>Real-Time PCR Method</u></strong> by Erduran Genetics Laboratory on nasopharyngeal swab specimen collected from #USERNAME, ID number #IDNUMBER, on #DATE at #TIME. <em>The SARS-CoV2</em> viral RNA #ANSWER in the nasopharyngel specimen. </p>
</div>

<div class="mt-2 pt-5" style="margin-top:80px;">
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
// $stylesheet = file_get_contents('assets/mpdfstyleA4.css');
$stylesheet = file_get_contents('assets/styles.css');
$mpdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text

$mpdf->SetHTMLFooter('<div>
<p class="text-center;">Kurluluş Cad. (Bellapais Yolu), Trafik Işıkları Yanı, Girne | Tel: +90 392 816 10 02 / 03 / 04 / 05 / 06 | +90 392 444 99 44 
            <br>
                Fax: +90 32 816 06 13 / 14 | Cep: +90 533 869 77 64 | E-posta:erduranlaboratuvarlari@gmail.com | Web:www.erduranlab.com.tr
                <br>
                DD.007 / YAYIN TARİHİ: 25.04.2017 / REV NO: 00 / REV TARİHİ: __
              </p>
</div>');

$mpdf->SetHTMLHeader('<div>
<img src="assets/img/header.jpg" width="100%">
</div>');

$mpdf->WriteHTML($html);

$mpdf->Output();
// $mpdf->Output($document_folder."/".$file_name.$extension, "F");

exit;
//==============================================================
//==============================================================
//==============================================================