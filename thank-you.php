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
$formproc->AddRecipient('nakov.mkd@gmail.com'); //<<---Put your email address here


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
.style33 {color: #000000; font-weight: bold; }
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
.style40 {
	color: #990000;
	font-weight: bold;
}
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
      <table width="872" height="1055" border="1" cellpadding="0" cellspacing="4" bordercolor="#CCCCCC" id="3">
        <tr>
          <td width="170" height="1045" align="left" valign="top" bgcolor="#92B6ED"><table width="170" border="0" cellspacing="0" cellpadding="0">
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

          <td width="690" align="left" valign="top"><p align="center" class="style34" style="padding-top:25px;">Thank you for your registration!</p>
            
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
