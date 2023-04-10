<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
// require_once './vendor/autoload.php';

// use FormGuide\Handlx\FormHandler;


// $pp = new FormHandler(); 

// $validator = $pp->getValidator();
// $validator->fields(['Name','Email'])->areRequired()->maxLength(50);
// $validator->field('Email')->isEmail();
// $validator->field('Message')->maxLength(6000);





// $pp->sendEmailTo('tchoubeemb@gmail.com'); // ← Your email here

// echo $pp->process($_POST);







$logo = "https://ykawaii.github.io/images/logo.png";

$message = 
'<table cellpadding="0" cellspacing="0" border="0" width="100%" style="background: #f3f3f3; min-width: 350px; font-size: 1px; line-height: normal;">
 	<tbody><tr>
   	<td align="center" valign="top">   			
   		<!--[if (gte mso 9)|(IE)]>
         <table border="0" cellspacing="0" cellpadding="0">
         <tr><td align="center" valign="top" width="750"><![endif]-->
   		<table cellpadding="0" cellspacing="0" border="0" width="750" class="table750" style="width: 100%; max-width: 750px; min-width: 350px; background: #f3f3f3;">
   			<tbody><tr>
               <td class="mob_pad" width="25" style="width: 25px; max-width: 25px; min-width: 25px;">&nbsp;</td>
   				<td align="center" valign="top" style="background: #ffffff;">

                  <table cellpadding="0" cellspacing="0" border="0" width="100%" style="width: 100% !important; min-width: 100%; max-width: 100%; background: #f3f3f3;">
                     <tbody><tr>
                        <td align="right" valign="top">
                           <div class="top_pad" style="height: 25px; line-height: 25px; font-size: 23px;">&nbsp;</div>
                        </td>
                     </tr>
                  </tbody></table>

                  <table cellpadding="0" cellspacing="0" border="0" width="88%" style="width: 88% !important; min-width: 88%; max-width: 88%;">
                     <tbody><tr>
                        <td align="left" valign="top">
                           <div style="height: 39px; line-height: 39px; font-size: 37px;">&nbsp;</div>
                           <a href="#" target="_blank" style="display: block; max-width: 128px;">
                              <img src="'.$logo.'" style="border-radius:50%;" alt="img" width="128" border="0" style="display: block; width: 128px;">
                           </a>
                           <div style="height: 73px; line-height: 73px; font-size: 71px;">&nbsp;</div>
                        </td>
                     </tr>
                  </tbody></table> 
                  <table cellpadding="0" cellspacing="0" border="0" width="88%" style="width: 88% !important; min-width: 88%; max-width: 88%;">
                     <tbody><tr>
                        <td align="left" valign="top">
                           <ed style="font-family: system-ui;position: relative;display: flex;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 0 solid rgba(0,0,0,.125);border-radius: 1rem;">
							<ed style="font-family: system-ui;padding: 1.5rem;padding-top: 0.25rem!important;padding: 1rem!important;flex: 1 1 auto;">
								<h5 style="font-size: 1.2rem;line-height: 1.625;">Vous avez reçu un message !</h5>
								<h6 style="font-size: 1rem;line-height: 1.625;">'.$_POST['Name'].' <small> '.$_POST['Email'].'</small><small> '.$_POST['phone'].'</small></h6>
								<p style="font-size: 1rem;line-height: 1.625;">'.$_POST['message'].'</p>
							</ed>
						</ed>
                        </td>
                     </tr>
                  </tbody></table>
                  <table cellpadding="0" cellspacing="0" border="0" width="90%" style="width: 90% !important; min-width: 90%; max-width: 90%; border-width: 1px; border-style: solid; border-color: #e8e8e8; border-bottom: none; border-left: none; border-right: none;">
                     <tbody><tr>
                        <td align="left" valign="top">
                           <div style="height: 15px; line-height: 15px; font-size: 13px;">&nbsp;</div>
                        </td>
                     </tr>
                  </tbody></table>

                  <table cellpadding="0" cellspacing="0" border="0" width="88%" style="width: 88% !important; min-width: 88%; max-width: 88%;">
                     <tbody><tr>
                        <td align="center" valign="top">
                           <!--[if (gte mso 9)|(IE)]>
                           <table border="0" cellspacing="0" cellpadding="0">
                           <tr><td align="center" valign="top" width="50"><![endif]-->
                           <div style="display: inline-block; vertical-align: top; width: 50px;">
                              <table cellpadding="0" cellspacing="0" border="0" width="100%" style="width: 100% !important; min-width: 100%; max-width: 100%;">
                                 <tbody>
								
                              </tbody></table>
                           </div><!--[if (gte mso 9)|(IE)]></td><td align="left" valign="top" width="390"><![endif]--><div class="mob_div" style="display: inline-block; vertical-align: top; width: 62%; min-width: 260px;">
                              <table cellpadding="0" cellspacing="0" border="0" width="100%" style="width: 100% !important; min-width: 100%; max-width: 100%;">
                                 <tbody><tr>
                                    <td width="18" style="width: 18px; max-width: 18px; min-width: 18px;">&nbsp;</td>
                                    <td width="18" style="width: 18px; max-width: 18px; min-width: 18px;">&nbsp;</td>
                                 </tr>
                              </tbody></table>
                           </div><!--[if (gte mso 9)|(IE)]></td><td align="left" valign="top" width="177"><![endif]--><div style="display: inline-block; vertical-align: top; width: 177px;">
                           </div>
                           <!--[if (gte mso 9)|(IE)]>
                           </td></tr>
                           </table><![endif]-->
                           <div style="height: 30px; line-height: 30px; font-size: 28px;">&nbsp;</div>
                        </td>
                     </tr>
                  </tbody></table> 
                  <table cellpadding="0" cellspacing="0" border="0" width="100%" style="width: 100% !important; min-width: 100%; max-width: 100%; background: #f3f3f300;">
                     <tbody><tr>
                        <td align="right" valign="top">
                           <div class="top_pad" style="height: 25px; line-height: 25px; font-size: 23px;">&nbsp;</div>
                        </td>
                     </tr>
                  </tbody></table>  

               </td>
               <td class="mob_pad" width="25" style="width: 25px; max-width: 25px; min-width: 25px;">&nbsp;</td>
            </tr>
         </tbody></table>
         <!--[if (gte mso 9)|(IE)]>
         </td></tr>
         </table><![endif]-->
      </td>
   </tr>
</tbody></table>';





$to = 'tchoubeembt@gmail.com'; // ton mail
$sujet = "Un message sur GEG"; //Titre du message à la reception
$servername = "GEG"; // nom de domaine
$headers = "From: \"$servername\"<noreply@".$_SERVER["SERVER_NAME"].">\n";
$headers .= "Reply-To: ".$to."\n";
$headers .='Content-Type: text/html; charset="utf-8"'." ";
if(mail($to,$sujet,$message,$headers)){
	$message =  json_encode(['result'=>'success']);
}else{
	$message =  json_encode([
		'result'=>'error_sending_email',
		'errors'=> ['mail'=> "Une erreur s'est produite lors de l'envoi de l'email."]
	]);
}
echo $message;
