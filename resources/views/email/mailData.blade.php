<?php 

//dd($setting['company_address']);
$CompanyAddress = $setting['company_address'];
$CompanyName = $setting['company_name'];
$CompanyLogo = $setting['company_logo'];
$CompanyEmail = $setting['company_email'];

?>

<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gemver Affordable Luxury</title>
</head>
<body style="background-color: #f5f5f5;">
    <div style="margin: auto; align-items: center; justify-content: center;margin-top: 50px;min-height: 100vh;">
        <div style="font-family: 'Roboto', sans-serif; margin:20px; ">
            <div style="text-align: center; margin-bottom: 20px;">
                <img src="{{ url('images/company/'.$CompanyLogo) }}" alt=""  style="width: 150px;">
            </div>
            <div style="text-align: center; background-color: #fff; padding: 50px;">
                <div style="margin-bottom: 25px; font-weight: 900;font-size: 18px;">Thank you for contact us</div>
                <div style="margin-bottom: 25px;font-size: 13px;">
                     Our Representative will contact you soon.
                </div>
                <div style="margin-bottom: 5px; font-size: 13px;">
                    Thank you!
                    <div style="margin-top:3px;">{{ $CompanyName }} Team</div>
                </div>
                
            </div>
          
            <div style="text-align: center; margin-top: 50px;color: #b7b7b7;font-size: 13px;">
               
                © 2022 {{ $CompanyName }} 
            </div>
        </div>
    </div>
</body>

</html>

<?php 
// $SupplierUrl = "demo";

// $CompanyAddress = "a101, city center, laldarwaja, varachha, surat, gujarat 395003";
// $SupplierName = "demo";

// $SubOrderId = "demo";


//  $Refmsg = '<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="x-apple-disable-message-reformatting"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title></title><style type="text/css">a { color: #0000ee; text-decoration: underline; } .clean-body table{ width: 100%; } [owa] .u-row .u-col {display: table-cell;float: none !important;vertical-align: top;.ie-container .u-row,[owa] .u-row {width: 600px !important;}.ie-container .u-col-100,[owa] .u-col-100 {width: 600px !important;}@media only screen and (min-width: 620px) {.u-row {width: 600px !important;}.u-row .u-col {vertical-align: top;}.u-row .u-col-100 {width: 600px !important;}}@media (max-width: 620px) {.u-row-container {max-width: 100% !important;padding-left: 0px !important;padding-right: 0px !important;}.u-row .u-col {min-width: 320px !important;max-width: 100% !important;display: block !important;}.u-row {width: calc(100% - 40px) !important;}.u-col {width: 100% !important;}.u-col > div {margin: 0 auto;}.no-stack .u-col {min-width: 0 !important;display: table-cell !important;}.no-stack .u-col-100 {width: 100% !important;}}body {margin: 0;padding: 0;}table,tr,td {vertical-align: top;border-collapse: collapse;}p {margin: 0;}.ie-container table,.mso-container table {table-layout: fixed;}* {line-height: inherit;}a[x-apple-data-detectors="true"] {color: inherit !important;text-decoration: none !important;}.ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div {line-height: 100%;}@media (max-width: 480px) {.hide-mobile {display: none !important;max-height: 0px;overflow: hidden;}}@media (min-width: 481px) {.hide-desktop {display: none !important;max-height: none !important;}}</style><link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"></head><body class="clean-body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #ffffff">';
//                 $Refmsg .= '<table class="nl-container" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #ffffff;width:100%" cellpadding="0" cellspacing="0">';
//                 $Refmsg .= '<tbody>';
//                 $Refmsg .= '<tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">';
//                 $Refmsg .= '<div class="u-row-container" style="padding: 0px;background-color: transparent"><div style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="u-row"><div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;"><div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;"><div style="width: 100% !important;"><div style="padding:0px;border-top:0px solid transparent;border-left:0px solid transparent;border-right:0px solid transparent;border-bottom:0px solid transparent;background: #ecf0f1;padding: 15px;">';
//                 $Refmsg .= '<table id="u_content_image_1" class="u_content_image" style="font-family:Montserrat,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody>';
//                 $Refmsg .= '<tr><td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:Montserrat,sans-serif;" align="left">';
//                 $Refmsg .= '<table width="100%" cellpadding="0" cellspacing="0" border="0">';
//                 $Refmsg .= '<tr><td style="padding-right: 0px;padding-left: 0px;" align="center"><img align="center" border="0" src="'. url('frontend/image/logo-transparent.png') .'" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;width: 100%; max-width: 80px;" width="80" class="v-src-width v-src-max-width"/></td></tr>';
//                 $Refmsg .= '</table></td></tr></tbody></table></div></div></div></div></div></div>';
//                 $Refmsg .= '<div class="u-row-container" style="padding: 0px;background-color: transparent"><div style="Margin: 0 auto;min-width: 320px;max-width: 600px;background-color: #843fa1;" class="u-row"><div style="border-collapse: collapse;display: table;width: 100%;background-color: #843fa1;"><div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;"><div style="width: 100% !important;"><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">';
//                 $Refmsg .= '<table id="u_content_text_1" class="u_content_text" style="font-family:Montserrat,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:Montserrat,sans-serif;" align="left"><div class="v-text-align" style="color: #ffffff; line-height: 140%; text-align: center; word-wrap: break-word;"><p style="font-size: 14px; line-height: 140%;"><span style="font-size: 16px; line-height: 22.4px;"><strong>Thank you for contact us</strong></span></p></div>';
//                 $Refmsg .= '</td></tr></tbody></table></div></div></div></div></div></div>';
//                 $Refmsg .= '<div class="u-row-container" style="padding: 0px;background-color: transparent"><div style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ecf0f1;" class="u-row"><div style="border-collapse: collapse;display: table;width: 100%;background-color: #ecf0f1;">';
//                 $Refmsg .= '<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;"><div style="width: 100% !important;"><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">';
//                 $Refmsg .= '<table id="u_content_text_8" class="u_content_text" style="font-family:Montserrat,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody>';
//                 $Refmsg .= '<tr><td style="overflow-wrap:break-word;word-break:break-word;padding:33px 10px 0px;font-family:Montserrat,sans-serif;" align="left">';
//                 $Refmsg .= '<div class="v-text-align" style="color: #00c399; line-height: 140%; text-align: center; word-wrap: break-word;"><p style="font-size: 14px; line-height: 140%;"><span style="font-size: 34px; line-height: 47.6px;"><strong><span style="line-height: 47.6px; font-size: 34px;">Gemver Affordable Luxury </span></strong></span></p></div>';
//                 $Refmsg .= '</td></tr></tbody></table>';
//                 $Refmsg .= '<table id="u_content_text_5" class="u_content_text" style="font-family:Montserrat,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody>';
//                 $Refmsg .= '<tr><td style="overflow-wrap:break-word;word-break:break-word;padding:4px 10px 10px;font-family:Montserrat,sans-serif;" align="left">';
//                 //$Refmsg .= '<div class="v-text-align" style="color: #843fa1; line-height: 140%; text-align: left; word-wrap: break-word; padding: 11px 44px 18px;"><p style="text-align: center; font-size: 14px; line-height: 140%;"><span style="font-size: 22px; line-height: 30.8px;"><strong><span style="line-height: 30.8px; font-size: 22px;">Order '.$SubOrderId.'</span></strong></span></p></div>';
//                 $Refmsg .= '</td></tr></tbody></table>';
//                 $Refmsg .= '<table id="u_content_text_7" class="u_content_text" style="font-family:Montserrat,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody>';
//                 $Refmsg .= '<tr><td style="overflow-wrap:break-word;word-break:break-word;padding:11px 44px;font-family:Montserrat,sans-serif;" align="left">';
//                 $Refmsg .= '<div class="v-text-align" style="color: #000000; line-height: 190%; text-align: center; word-wrap: break-word; padding: 11px 44px 18px;"><p style="font-size: 14px; line-height: 190%; text-align: left;">Hi '.$CustomerName.',</p><p style="font-size: 14px; line-height: 190%; text-align: left;">Our Representative will contact you soon</p></div>';
//                 $Refmsg .= '</td></tr></tbody></table>';
//                 $Refmsg .= '<table id="u_content_button_1" class="u_content_button" style="font-family:Montserrat,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody>';
//                 $Refmsg .= '<tr><td style="overflow-wrap:break-word;word-break:break-word;padding:20px 10px;font-family:Montserrat,sans-serif;" align="left">';
//                //$Refmsg .= '<div class="v-text-align" align="center"><a href="'.$SupplierUrl.'order?oid='.$OrderId.'" target="_blank" class="v-size-width" style="box-sizing: border-box;display: inline-block;font-family:Montserrat,sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color: #843fa1; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;"><span class="v-padding" style="display:block;padding:15px 35px;line-height:120%;"><strong><span style="font-size: 14px; line-height: 16.8px;">More Details</span></strong></span></a>';
//                 $Refmsg .= '</div></td></tr></tbody></table>';
//                 $Refmsg .= '<table id="u_content_text_9" class="u_content_text" style="font-family:Montserrat,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="overflow-wrap:break-word;word-break:break-word;padding:11px 44px 18px;font-family:Montserrat,sans-serif;" align="left">';
//                // $Refmsg .= '<div class="v-text-align" style="color: #000000; line-height: 190%; text-align: center; word-wrap: break-word; padding: 11px 44px 18px;"><p style="font-size: 14px; line-height: 190%; text-align: left;"><strong>Customer Shipping Address</strong></p>'.$CustomerFullAddr.'</div>';
//                 $Refmsg .= '</td></tr></tbody></table>';
//                 $Refmsg .= '<table id="u_content_divider_1" class="u_content_divider" style="font-family:Montserrat,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody>';
//                 $Refmsg .= '<tr><td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:Montserrat,sans-serif;" align="left">';
//                 $Refmsg .= '<table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="87%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #843fa1;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><tbody>';
//                 $Refmsg .= '<tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%"><span>&#160;</span></td></tr>';
//                 $Refmsg .= '</tbody></table></td></tr></tbody></table></div></div></div></div></div></div>';
//                 $Refmsg .= '<div class="u-row-container" style="padding: 0px;background-color: transparent">';
//                 //$Refmsg .= '<div style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ecf0f1;" class="u-row"><div style="border-collapse: collapse;display: table;width: 100%;background-color: #ecf0f1;"><div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;"><div style="width: 100% !important;"><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 6px solid #843fa1;">';
//                 $Refmsg .= '<table id="u_content_text_11" class="u_content_text" style="font-family:Montserrat,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody><tr><td style="overflow-wrap:break-word;word-break:break-word;padding:29px 44px 42px;font-family:Montserrat,sans-serif;" align="left">';
//                 $Refmsg .= '<div class="v-text-align" style="color: #000000; line-height: 190%; text-align: center; word-wrap: break-word; padding: 11px 44px 18px;"><p style="font-size: 14px; line-height: 190%; text-align: left;">For any assistance/ feedback, you can email us at gemver@gmail.com</p></div>';
//                 $Refmsg .= '</td></tr></tbody></table></div></div></div></div></div></div>';
//                 $Refmsg .= '<div class="u-row-container" style="padding: 0px;background-color: transparent"><div style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="u-row"><div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">';
//                 $Refmsg .= '<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;"><div style="width: 100% !important;"><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">';
//                 $Refmsg .= '<table id="u_content_text_6" class="u_content_text" style="font-family:Montserrat,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0"><tbody>';
//                 $Refmsg .= '<tr><td style="overflow-wrap:break-word;word-break:break-word;padding:11px 44px 42px;font-family:Montserrat,sans-serif;" align="left">';
//                 $Refmsg .= '<div class="v-text-align" style="color: #b8bfca; line-height: 190%; text-align: center; word-wrap: break-word; padding: 11px 44px 18px;"><p style="font-size: 14px; line-height: 190%;">'.$CompanyAddress.'</p><p style="font-size: 14px; line-height: 190%;">&nbsp;</p><p style="font-size: 14px; line-height: 190%;"><span style="font-size: 12px; line-height: 22.8px;">Copyright &copy; Gemver Affordable Luxury, All rights reserved. </span></p></div>';
//                 $Refmsg .= '</td></tr></tbody></table></div></div></div></div></div></div></td></tr></tbody></table>';
//                 $Refmsg .= "</body></html>";

//      echo $Refmsg;           

     ?>