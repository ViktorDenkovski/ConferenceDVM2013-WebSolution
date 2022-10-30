<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/simple-php-contact-form.html
*/
require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();


//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('lpendovski@fvm.ukim.edu.mk'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Days of Veterinary Medicine 2013</title>

 <link rel="STYLESHEET" type="text/css" href="contact.css" />
      <script type='text/javascript' src='Scripts/gen_validatorv31.js'></script>
      
<link href="style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
.style2 {
	color: #FFFFFF;
	font-size: 42px;
}
body {
	background-color: #CCCCCC;
}
a:link {
	text-decoration: none;
}
a:hover {
	color: #013C96;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
body,td,th {
	font-family: Times New Roman;
	font-size: 11pt;
	margin:0; padding:0;
}
a {
	
	font-size: 11pt;
	font-weight: bold;
	color: #000000;
}
.style14 {font-size: 18px; font-style: italic; color: #FFFFFF;}
.style18 {font-size: 18pt}
.style19 {font-size: 18}
.style21 {
	font-style: italic;
	color: #FFF2DF;
	font-family: "Times New Roman";
	font-size: 16px;
	font-weight: bold;
}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<style type="text/css">
<!--
p.MsoNormal {
margin:0pt;
margin-bottom:.0001pt;
text-autospace:none;
font-size:10.0pt;
font-family:"Times New Roman","serif";
}
-->
</style>
<style type="text/css">
<!--
p.MsoNoSpacing {
margin:0pt;
margin-bottom:.0001pt;
text-autospace:none;
font-size:10.0pt;
font-family:"Times New Roman","serif";
}
.style22 {font-size: 12px}
.style10 {color: #CC0000; font-weight: bold; }
.titlovi {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-style: normal;
	font-weight: bold; background-color:#013C96; color:#fff; padding:10px;
}
.style34 {
	font-size: 16pt;
	color: #09398D;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style36 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 12pt;
}
.style37 {font-weight: bold}
.style38 {color: #000099}
.style39 {color: #0000FF}
-->
</style>
</head>

<body>
<table width="880" height="126" border="0" align="center" bordercolor="#333333" bgcolor="#333333">
  <tr>
   
    <td height="22" colspan="4"><span class="style18"></span>      <p align="center" class="style14"><span class="style18"><span class="style19"></span></span></p></td>

  </tr>
  <tr>
    <td width="609" height="98" rowspan="2"><span class="style2">DAYS OF<br />
VETERINARY MEDICINE 2013</span></td>
    <td colspan="3" align="left" valign="bottom" bordercolor="#FFFFFF"><div align="center" class="style21">6-8 September  2013<br />
    Struga, R. of Macedonia</div></td>
  </tr>
  <tr>
    <td width="88" height="42" align="left" valign="bottom" bordercolor="#FFFFFF"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','80','height','40','src','button1','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#333333','movie','button1' ); //end AC code
    </script>
      <noscript>
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="80" height="40">
        <param name="movie" value="button1.swf" />
        <param name="quality" value="high" />
        <param name="bgcolor" value="#333333" />
        <embed src="button1.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="80" height="40" bgcolor="#333333"></embed>
      </object>
      </noscript></td>
    <td width="81" align="left" valign="bottom" bordercolor="#FFFFFF"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','80','height','40','src','button2','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#333333','movie','button2' ); //end AC code
    </script>
      <noscript>
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="80" height="40">
        <param name="movie" value="button2.swf" />
        <param name="quality" value="high" />
        <param name="bgcolor" value="#333333" />
        <embed src="button2.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="80" height="40" bgcolor="#333333"></embed>
      </object>
      </noscript></td>
    <td width="82" align="left" valign="bottom" bordercolor="#FFFFFF"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','80','height','40','src','button3','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#333333','movie','button3' ); //end AC code
    </script>
      <noscript>
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="80" height="40">
        <param name="movie" value="button3.swf" />
        <param name="quality" value="high" />
        <param name="bgcolor" value="#333333" />
        <embed src="button3.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="80" height="40" bgcolor="#333333"></embed>
      </object>
      </noscript></td>
  </tr>
</table>
<table width="850" border="0" align="center" cellspacing="0">
  <tr>

    <td height="252" ><img src="header-photo2 copy.jpg" width="880" height="250" alt="header" /></td>

  </tr>
  <tr>
  
    <td align="left" bgcolor="#FFFFFF"><table width="878" height="33" border="0" cellpadding="0" cellspacing="4" id="3">
      <tr>
        <td width="169" height="25" align="left" valign="middle" bgcolor="#FFFFFF"><form id="form1" name="form1" action="http://www.google.com/search">
          <input type="submit" value="Search" />
          <input name="qfront" type="text" style="width: 90px" />
        </form></td>
       <td  align="center" valign="middle" ><span class="kopce"><a href="index.html">Welcome</a></span></td>
        <td  align="center" valign="middle" ><span class="kopce"><a href="Organizing Committee.html">Organizing Committee</a></span></td>
        <td  align="center" valign="middle"><span class="kopce"><a href="General Informationes.html">General Information’s</a></span></td>
        <td  align="center" valign="middle" ><span class="kopce"><a href="Program.html">Program</a></span></td>
        <td  align="center" valign="middle" ><span class="kopce"><a href="Call for Papers.html">Call for Papers</a></span></td>
        <td  align="center" valign="middle" ><span class="kopce"><a href="Registration.php"  style=" color:#FF3300;">Registration</a></span></td>
      </tr>
    </table>
      <table width="878" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
        <tr>
          <td bgcolor="#FFFFFF"><img src="Linija zelena 2.jpg" width="874" height="13"/></td>
        </tr>
      </table>
      <table width="872" height="1855" border="1" cellpadding="0" cellspacing="4" bordercolor="#CCCCCC" id="3">
        <tr>
          <td width="170" height="1845" align="left" valign="top" bgcolor="#92B6ED"><table width="170" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="30" align="center" valign="middle" bgcolor="#013C96"><div align="center"><span class="style36">Links</span></div>                </td>
            </tr>
            
            
          </table>          
            <table width="170" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td align="center" valign="middle" bgcolor="#FFFFFF"><table width="165" border="0" cellspacing="4" cellpadding="0">
                    <tr>
                    <td height="22"><strong><a href="Accommodation.html" class="kopce"  style="width:92%">Accommodation</a></strong></td>
                  </tr>
                  <tr>
                    <td height="22" ><strong><a href="Sponsors.html" class="kopce" style="width:92%">Sponsors</a></strong></td>
                  </tr>
                  <tr>
                    <td height="22" ><strong><a href="Previous Meetings.html" class="kopce" style="width:92%">Previous Meetings</a></strong></td>
                  </tr>
                  <tr>
                    <td height="22" ><a href="Dates.html" class="kopce" style="width:92%"><strong>Important Dates</strong></a></td>
                  </tr>
                  <tr>
                    <td height="22" ><strong><a href="http://www.exploringmacedonia.com/" target="_blank" class="kopce" style="width:92%">Explore Macedonia</a></strong></td>
                  </tr>
                </table></td>
              </tr>
            </table>
            <p>&nbsp;</p>
          <table width="170" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="30" align="center" valign="middle" bgcolor="#FFFFFF" class="style37"><table width="165" border="0" cellpadding="0" cellspacing="3" bordercolor="#FFFFFF">
                  <tr>
                    <td height="20" bgcolor="#013C96"><div align="center" class="style36">FVM-S</div></td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td align="center" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="middle"><img src="sliki/milenici-4.jpg" alt="" width="150" height="115" /></td>
            </tr>
            <tr>
              <td align="center" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="middle"><img src="sliki/Lab/Picture 090.jpg" width="150" height="115" /></td>
            </tr>
            <tr>
              <td align="center" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="middle"><img src="sliki/food/P3060172.JPG" width="150" height="115" /></td>
            </tr>
            <tr>
              <td align="center" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td height="16" align="center" valign="middle"><img src="sliki/food/IMG_0672.JPG" width="150" height="115" /></td>
            </tr>
            <tr>
              <td align="center" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="middle"><img src="sliki/vizuelni-2.jpg" alt="" width="150" height="115" /></td>
            </tr>
          </table>          
          <p>&nbsp;</p></td>
          <td width="690" align="left" valign="top"><p align="center" class="style34">REGISTRATION</p>
            <p id="tekst" style="padding-left:10px;">The <strong><a href="Registration form.pdf" target="_blank" class="style38">registration form</a></strong>  can be submitted on line or via e-mail, mail and fax too.</p>
        
            
            
            <!-- Form Code Start -->
<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset>
<legend></legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
<br />

<div class="titlovi">PERSONAL INFORMATION</div>

<div class="clear"></div>
<div class='container'>
    <label for='name' >Full Name*: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='contactus_name_errorloc' class='error'></span></div>

<div class='container'>
    <label for='degree' >Professional degree:</label><br/>
    <input type='text' name='degree' id='degree' value='<?php echo $formproc->SafeDisplay('degree') ?>' maxlength="50" /><br/>
    <!--<span id='contactus_email_errorloc' class='error'></span>-->
</div>
<div class="clear"></div>

<div class='container'>
    <label for='title' >Title:</label><br/>
    <input type='text' name='title' id='title' value='<?php echo $formproc->SafeDisplay('title') ?>' maxlength="50" /><br/>
    <!--<span id='contactus_email_errorloc' class='error'></span>-->
</div>

<div class='container'>
    <label for='address' >Address:</label><br/>
    <input type='text' name='address' id='address' value='<?php echo $formproc->SafeDisplay('address') ?>' maxlength="50" /><br/>
    <!--<span id='contactus_email_errorloc' class='error'></span>-->
</div>
<div class="clear"></div>

<div class='container'>
    <label for='institution' >Institution:</label><br/>
    <input type='text' name='institution' id='institution' value='<?php echo $formproc->SafeDisplay('institution') ?>' maxlength="50" /><br/>
    <!--<span id='contactus_email_errorloc' class='error'></span>-->
</div>


<div class='container'>
    <label for='postalcode' >Postal Code:</label><br/>
    <input type='text' name='postalcode' id='postalcode' value='<?php echo $formproc->SafeDisplay('postalcode') ?>' maxlength="50" /><br/>
    <!--<span id='contactus_email_errorloc' class='error'></span>-->
</div>

<div class="clear"></div>

<div class='container'>
    <label for='country' >Country:</label><br/>
    <input type='text' name='country' id='country' value='<?php echo $formproc->SafeDisplay('country') ?>' maxlength="50" /><br/>
    <!--<span id='contactus_email_errorloc' class='error'></span>-->
</div>


<div class='container'>
    <label for='phone' >Phone Number*:</label><br/>
    <input type='text' name='phone' id='phone' value='<?php echo $formproc->SafeDisplay('phone') ?>' maxlength="15" /><br/>
    <span id='contactus_phone_errorloc' class='error'></span></div>
<div class="clear"></div>
<div class='container'>
    <label for='fax' >Fax:</label><br/>
    <input type='text' name='fax' id='fax' value='<?php echo $formproc->SafeDisplay('fax') ?>' maxlength="15" /><br/>
    <!--<span id='contactus_name2_errorloc' class='error'></span>-->
</div>

<div class='container'>
    <label for='email' >Email Address*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span></div>

<div class="clear"></div>
<br />

<div class="titlovi">ACCOMPANYING PERSON/S</div>
<div class="clear"></div>
<div class='container'>
    <label for='person1' >Person 1 Full Name: </label><br/>
    <input type='text' name='person1' id='person1' value='<?php echo $formproc->SafeDisplay('person1') ?>' maxlength="50" /><br/>
</div>

<div class='container'>
    <label for='person2' >Person 2 Full Name: </label><br/>
    <input type='text' name='person2' id='person2' value='<?php echo $formproc->SafeDisplay('person2') ?>' maxlength="50" /><br/>
</div>
<div class="clear"></div>
<div class='container'>
    <label for='person3' >Person 3 Full Name: </label><br/>
    <input type='text' name='person3' id='person3' value='<?php echo $formproc->SafeDisplay('person3') ?>' maxlength="50" />
    <br/>
</div>
<div class="clear"></div><br />

<div class="titlovi">1.PAYMENT OF CONFERENCE FEES</div>

<div class="clear"></div>

<div class='container3'> <label>Participants*</label> </div>
<div class='container2'>
    <label for='70e_Participants_before_July' >Before July 01, 2013</label><br/>
    <input name='70e_Participants_before_July' type='checkbox' id='70e_Participants_before_July' value='<?php echo $formproc->SafeDisplay('70e_Participants_before_July') ?>' />70 €</div>


<div class='container2'>
    <label for='100e_Participants_after_July' >After July 01, 2013</label><br/>
    <input name='100e_Participants_after_July' type='checkbox' id='100e_Participants_after_July' value='<?php echo $formproc->SafeDisplay('100e_Participants_after_July') ?>' />100 €</div>
<div class="clear"></div>


<div class="clear"></div>
<div class='container3'><label>Accompanying Persons**</label></div>
<div class='container2'>
    <label for='50e_Accompanying_Persons_before_July' ></label><br/>
    <input name='50e_Accompanying_Persons_before_July' type='checkbox' id='50e_Accompanying_Persons_before_July' value='<?php echo $formproc->SafeDisplay('50e_Accompanying_Persons_before_July') ?>' />
    50 €</div>


<div class='container2'>
    <label for='70e_Accompanying_Persons_after_July' ></label><br/>
    <input name='70e_Accompanying_Persons_after_July' type='checkbox' id='70e_Accompanying_Persons_after_July' value='<?php echo $formproc->SafeDisplay('70e_Accompanying_Persons_after_July') ?>' />
    70 €</div>
<div class="clear"></div>


<div class="clear"></div>
<div class='container3'><label>Residents/Students*</label></div>
<div class='container2'>
    <label for='50e_Residents_Students_before_July' ></label><br/>
    <input name='50e_Residents_Students_before_July' type='checkbox' id='50e_Residents_Students_before_July' value='<?php echo $formproc->SafeDisplay('50e_Residents_Students_before_July') ?>' />
    50 €</div>


<div class='container2'>
    <label for='70e_Residents_Students_after_July' ></label><br/>
    <input name='70e_Residents_Students_after_July' type='checkbox' id='70e_Residents_Students_after_July' value='<?php echo $formproc->SafeDisplay('70e_Residents_Students_after_July') ?>' />
    70 €</div>
<div class="clear"></div>

<div>
<blockquote id="tekst">
                            <p><strong>* Conference Fee  includes:</strong></p>
                            <ul>
                              <li>conference kit</li>
                              <li>abstract book</li>
                              <li>coffee breaks</li>
                              <li>one gala dinner ticket</li>
                              <li>luncheons</li>
                            </ul>
                            <p><strong>**Accompanying  Persons Program Fee includes:</strong></p>
                            <ul>
                              <li>coffee breaks</li>
                              <li>one gala dinner ticket</li>
                              <li>luncheons</li>
                            </ul>
                          </blockquote>
                          </div>



<div class="clear"></div>
<br />

<div class="titlovi">2.ACCOMODATION AND SOCIAL PROGRAM</div>
<div class="clear"></div>
<div class='container5'><label>Participants/Accompanying Persons/Residents/Students</label></div>
<div class='container4'>
    <label for='100e_Accomodation_Social_before_July' >Before July 01, 2013</label><br/>
    <input name='100e_Accomodation_Social_before_July' type='checkbox' id='100e_Accomodation_Social_before_July' value='<?php echo $formproc->SafeDisplay('100e_Accomodation_Social_before_July') ?>' />100 €</div>


<div class='container4'>
    <label for='150e_Accomodation_Social_after_July' >After July 01, 2013</label><br/>
    <input name='150e_Accomodation_Social_after_July' type='checkbox' id='150e_Accomodation_Social_after_July' value='<?php echo $formproc->SafeDisplay('150e_Accomodation_Social_after_July') ?>' />150 €</div>
<div class="clear"></div>

<div class='container5'><label>Guided Ohrid Tour & DINNER at National Macedonian Restaurant</label></div>
<div class='container4'>
    <label for='30e_Ohrid_Tour_Dinner' ></label><br/>
    <input name='30e_Ohrid_Tour_Dinner' type='checkbox' id='30e_Ohrid_Tour_Dinner' value='<?php echo $formproc->SafeDisplay('30e_Ohrid_Tour_Dinner') ?>' />30 €</div>

<div class="clear"></div>

<div><blockquote  id="tekst">
                      <p>*Participants/Accompanying  Persons/Students <strong>accommodation fee</strong> includes: </p>
                      <ul>
                        <li>accommodation for 3 days (breakfasts, diners)</li>
                        <li>welcome cocktail</li>
                      </ul>
                      <p>**Participants/Accompanying  Persons/Students <strong>social program </strong>fee includes:</p>
                      <ul>
                        <li>dinner at National Macedonian Restaurant  (optional)</li>
                        <li>tour to Ohrid city </li>
                        <li>tickets to all historical museums in Ohrid</li>
                        <li>surely of attendance</li>
                      </ul>
                    </blockquote>
                    <p id="tekst"><strong>Please note:</strong> <span >Any College student with a letter of approval from faculty advisor may attend the conference at the special rate.</span></p>    
                    </div>
<div class="clear"></div>
<br />

<div class="titlovi">3. COMMERCIAL PRESENTATION</div>
<div style="background-color:#FEFDDE; padding:10px 0 0 10px;">
<p id="tekst"><strong>**These fields should be filled only by those who want to make a commercial presentation during the Meeting</strong></p>
<div class="clear"></div>
<div class='container'>
    <label for='company' >Company*: </label><br/>
    <input type='text' name='company' id='company' value='<?php echo $formproc->SafeDisplay('company') ?>' maxlength="50" /><br/>
    <!--<span id='contactus_name_errorloc' class='error'></span>--></div>

<div class='container'>
    <label for='head' >Head of the Company:</label><br/>
    <input type='text' name='head' id='head' value='<?php echo $formproc->SafeDisplay('head') ?>' maxlength="50" /><br/>
    <!--<span id='contactus_email_errorloc' class='error'></span>-->
</div>
<div class="clear"></div>

<div class='container'>
    <label for='attendance' >Person for Attendance:</label><br/>
    <input type='text' name='attendance' id='attendance' value='<?php echo $formproc->SafeDisplay('attendance') ?>' maxlength="50" /><br/>
    <!--<span id='contactus_email_errorloc' class='error'></span>-->
</div>

<div class='container'>
    <label for='addresscompany' >Address of the Company:</label><br/>
    <input type='text' name='addresscompany' id='addresscompany' value='<?php echo $formproc->SafeDisplay('addresscompany') ?>' maxlength="50" /><br/>
    <!--<span id='contactus_email_errorloc' class='error'></span>-->
</div>
<div class="clear"></div>

<div class='container'>
    <label for='postalcode2' >Postal Code:</label><br/>
    <input type='text' name='postalcode2' id='postalcode2' value='<?php echo $formproc->SafeDisplay('postalcode2') ?>' maxlength="50" /><br/>
    <!--<span id='contactus_email_errorloc' class='error'></span>-->
</div>


<div class='container'>
    <label for='country2' >Country:</label><br/>
    <input type='text' name='country2' id='country2' value='<?php echo $formproc->SafeDisplay('country2') ?>' maxlength="50" /><br/>
    <!--<span id='contactus_email_errorloc' class='error'></span>-->
</div>

<div class="clear"></div>

<div class='container'>
    <label for='phone2' >Phone:</label><br/>
    <input type='text' name='phone2' id='phone2' value='<?php echo $formproc->SafeDisplay('phone2') ?>' maxlength="50" /><br/>
    <!--<span id='contactus_email_errorloc' class='error'></span>-->
</div>


<div class='container'>
    <label for='fax2' >Fax:</label><br/>
    <input type='text' name='fax2' id='fax2' value='<?php echo $formproc->SafeDisplay('fax2') ?>' maxlength="15" /><br/>
    <span id='contactus_phone_errorloc' class='error'></span></div>
<div class="clear"></div>
<div class='container'>
  <label for='email2' >Email Address*:</label><br/>
    <input type='text' name='email2' id='email2' value='<?php echo $formproc->SafeDisplay('email2') ?>' maxlength="50" /><br/>
   <!-- <span id='contactus_email_errorloc' class='error'></span>--></div>




<div class="clear"></div>

<div class='container5'><label>Commercial Presentation*</label></div>
<div class='container4'>
    <label for='50e_commercial_presentation_before_July' >Before July 01, 2013</label><br/>
    <input name='50e_commercial_presentation_before_July' type='checkbox' id='50e_commercial_presentation_before_July' value='<?php echo $formproc->SafeDisplay('50e_commercial_presentation_before_July') ?>' />50 €</div>


<div class='container4'>
    <label for='100e_commercial_presentation_after_July' >After July 01, 2013</label><br/>
    <input name='100e_commercial_presentation_after_July' type='checkbox' id='100e_commercial_presentation_after_July' value='<?php echo $formproc->SafeDisplay('100e_commercial_presentation_after_July') ?>' />100 €</div>
<div class="clear"></div>


</div>
<p id="tekst">* For participant/s who will make a commercial presentation, the REGISTRATION and PAYMENT OF CONFERENCE FEES is obligatory and must be done together with <strong>PAYMENT FOR COMMERCIAL PRESENTATION</strong>.<br /><br />


** Payment should be made on the Macedonian Bank Account of Faculty of veterinary medicine in Skopje.</p>
<br />
<br />



<div align="center">
    <input type='submit' name='Submit' value='Submit' />
</div>


<div class="clear"></div>
</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");
	
	

    frmvalidator.addValidation("email","email","Please provide a valid email address");
	

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

    frmvalidator.addValidation("phone","req","Please provide your phone number");

// ]]>
</script>           

<div>
<table border="0" cellpadding="0" cellspacing="0">
 <tr>
                <td colspan="4" ><blockquote>
                    <div align="center" id="tekst"><strong>Correspondent bank details (:56:):</strong><br />
                      DEUTSCHE BUNDESBANK  ZENTRALE<br />
                      Address: Wilhelm  Epstein strasse 14, Frankfurt am Main, GERMANY SWIFT BIC: MARK DE FF<br />
                      <strong>Bank details (:57:):</strong><br />
                      NATIONAL BANK OF THE  REPUBLIC OF MACEDONIA<br />
                      Address: Bul  &quot;Kuzman Josifovski Pitu&quot; br. 1<br />
                      1000 Skopje,  MACEDONIA<br />
                      SWIFT BIC: NBRM MK 2X<br />
                      <strong>Final beneficiary (:59:):</strong><br />
                      IBAN: MK07 1007 0100  0011 422<br />
                      <strong>Name: </strong><br />
                      Fakultet za  veterinarna medicina Skopje </div>
                </blockquote></td>
              </tr>
              <tr bgcolor="#CCCCCC">
                <td colspan="4" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr bgcolor="#CCCCCC">
                <td colspan="4" bgcolor="#AFE3AC" style="height:40px;"><div class="titlovi">GENERAL CONDITIONS</span></div></td>
              </tr>
              <tr>
                <td height="157" colspan="4">
                    <blockquote id="tekst">
                      <p align="justify">All payments must be made in <strong>Euros</strong>.<br />
                        Please write <strong>“</strong><strong>DAYS OF VETERINARY  MEDICINE 2013</strong><strong>” </strong>and <strong>your full name</strong> on the money transfer. Also, please send us the transfer BANK copy by fax, (transfer order is not valid).<br />
                      </p>
                      <p align="justify"><strong>CONFERENCE CANCELLATION / REFUND POLICY</strong><br />
                        All cancellations made <strong>before July 1st</strong> will be subject to a penalty of 100 €.<br />
                        All cancellations made <strong>after July 1st</strong> will be subject to a penalty of the total amount paid. </p>
                    </blockquote></td>
              </tr>
              <tr>
                <td colspan="4">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="4"><div align="center"><span class="style10" id="tekst">Please send us copy of the receipt of yout Bank Transfer to avoid any possible mistake on the following mail:</span></div>
                <p align="center" id="tekst"><span class="style39">dvm2013@fvm.ukim.edu.mk</span></p></td>
              </tr>
              <tr>
                <td height="24" colspan="4">&nbsp;</td>
              </tr>
        
             
              </table>
</div>

        </td>
        </tr>
    </table>    </td>
    <td class="style22">&nbsp;</td>
  </tr>
  <tr>
    
    <td width="880" align="center" valign="bottom" bgcolor="#F0F0F0" class="style22"><img src="dole.jpg" alt="" width="875" height="118" /></td>
 
  </tr>
</table>
<p class="style22">&nbsp;</p>
</body>
</html>
