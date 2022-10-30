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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Contact us</title>
      <link rel="STYLESHEET" type="text/css" href="contact.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
</head>
<body>

<!-- Form Code Start -->
<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Registration form</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
<br />

<div>PERSONAL INFORMATION</div>

<div class="clear"></div>
<div class='container'>
    <label for='name' >Your Full Name*: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='contactus_name_errorloc' class='error'></span>
</div>

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
    <span id='contactus_phone_errorloc' class='error'></span>
</div>
<div class="clear"></div>
<div class='container'>
    <label for='fax' >Fax:</label><br/>
    <input type='text' name='fax' id='fax' value='<?php echo $formproc->SafeDisplay('fax') ?>' maxlength="15" /><br/>
    <!--<span id='contactus_name2_errorloc' class='error'></span>-->
</div>

<div class='container'>
    <label for='email' >Email Address*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>

<div class="clear"></div>

<div>ACCOMPANYING PERSON/S</div>
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
    <input type='text' name='person3' id='person3' value='<?php echo $formproc->SafeDisplay('person3') ?>' maxlength="50" /><br/>
</div>
<div class="clear"></div>
<div>1.PAYMENT OF CONFERENCE FEES</div>

<div class="clear"></div>
<div class='container'>
    <label for='70e_Participants_before_June' >Before June 01, 2013</label><br/>
    <input name='70e_Participants_before_June' type='checkbox' id='70e_Participants_before_June' value='<?php echo $formproc->SafeDisplay('70e_Participants_before_June') ?>' />70 €
</div>


<div class='container'>
    <label for='100e_Participants_after_June' >After June 01, 2013</label><br/>
    <input name='100e_Participants_after_June' type='checkbox' id='100e_Participants_after_June' value='<?php echo $formproc->SafeDisplay('100e_Participants_after_June') ?>' />100 €
</div>
<div class="clear"></div>


<div class="clear"></div>
<div class='container'>
    <label for='50e_Accompanying_Persons_before_June' ></label><br/>
    <input name='50e_Accompanying_Persons_before_June' type='checkbox' id='50e_Accompanying_Persons_before_June' value='<?php echo $formproc->SafeDisplay('50e_Accompanying_Persons_before_June') ?>' />
    50 €
</div>


<div class='container'>
    <label for='70e_Accompanying_Persons_after_June' ></label><br/>
    <input name='70e_Accompanying_Persons_after_June' type='checkbox' id='70e_Accompanying_Persons_after_June' value='<?php echo $formproc->SafeDisplay('70e_Accompanying_Persons_after_June') ?>' />
    70 €
</div>
<div class="clear"></div>


<div class="clear"></div>
<div class='container'>
    <label for='50e_Residents_Students_before_June' ></label><br/>
    <input name='50e_Residents_Students_before_June' type='checkbox' id='50e_Residents_Students_before_June' value='<?php echo $formproc->SafeDisplay('50e_Residents_Students_before_June') ?>' />
    50 €
</div>


<div class='container'>
    <label for='70e_Residents_Students_after_June' ></label><br/>
    <input name='70e_Residents_Students_after_June' type='checkbox' id='70e_Residents_Students_after_June' value='<?php echo $formproc->SafeDisplay('70e_Residents_Students_after_June') ?>' />
    70 €
</div>
<div class="clear"></div>

<div>
<blockquote>
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

<div>2.ACCOMODATION AND SOCIAL PROGRAM</div>
<div class="clear"></div>
<div class='container'>
    <label for='100e_Participants_AccompanyingPersons_Residents_Students_before_June' >Before June 01, 2013</label><br/>
    <input name='100e_Participants_AccompanyingPersons_Residents_Students_before_June' type='checkbox' id='100e_Participants_AccompanyingPersons_Residents_Students_before_June' value='<?php echo $formproc->SafeDisplay('100e_Participants_AccompanyingPersons_Residents_Students_before_June') ?>' />100 €
</div>


<div class='container'>
    <label for='150e_Participants_AccompanyingPersons_Residents_Students_after_June' >After June 01, 2013</label><br/>
    <input name='150e_Participants_AccompanyingPersons_Residents_Students_after_June' type='checkbox' id='150e_Participants_AccompanyingPersons_Residents_Students_after_June' value='<?php echo $formproc->SafeDisplay('150e_Participants_AccompanyingPersons_Residents_Students_after_June') ?>' />150 €
</div>
<div class="clear"></div>
<div class='container'>
    <label for='30e_Ohrid_Tour_Dinner' >After June 01, 2013</label><br/>
    <input name='30e_Ohrid_Tour_Dinner' type='checkbox' id='30e_Ohrid_Tour_Dinner' value='<?php echo $formproc->SafeDisplay('30e_Ohrid_Tour_Dinner') ?>' />30 €
</div>

<div class="clear"></div>

<div><blockquote>
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
                    </blockquote></div>
<div class="clear"></div>

<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>

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

</body>
</html>