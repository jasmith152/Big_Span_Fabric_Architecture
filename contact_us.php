<?php
$page_title = 'Contact Us Page';
$matatag_description = '';
include('header_inside.php');
include('include/captcha.php'); 
?>
<div class="content_inside">
    <table id="table_format" width="100%" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td><form action="include/formmail_recaptcha.php" method="post" accept-charset="utf-8" name="contact_form" >
<input type="hidden" name="subject" value="Online Contact form from Big Span Structure" />
<!--     <input type="hidden" name="recipient" value="info@bigspans.com" />-->
     <input type="hidden" name="recipient" value="john@naturecoastdesign.net" />
     <input type="hidden" name="required" value="first_name,last_name,email,user_answer" />
     <input type="hidden" name="redirect" value="../thank_you.php" />
<fieldset>
<legend>Contact Us</legend>

<p><em>Required fields indicated by *</em></p>
<table align="left" width="80%" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td><label for="first_name">* First Name:</label> </td>
    <td><input type="text" name="first_name" id="first_name"/> </td>
  </tr>
  <tr>
    <td><label for="last_name">* Last Name:</label></td>
    <td><input type="text" name="last_name" id="last_name"/></td>
  </tr>
  <tr>
    <td><label for="phone">&nbsp;&nbsp; Phone:</label></td>
    <td><input type="text" name="phone" id="phone" /></td>
  </tr>
  <tr>
    <td><label for="email">* Email:</label></td>
    <td><input type="text" name="email" id="email" /></td>
  </tr>
  <tr>
    <td align="left" colspan="2">Please contact me about your:</td>
  </tr>
  <tr>
    <td><input name="contact me about stadium umbrella" type="checkbox" value="Yes">Stadium</td>
    <td><input name="contact me about Tension Frame" type="checkbox" value="Yes">Tension Frame</td>
  </tr>
  <tr>
    <td><input name="contact me about Rigid Frame" type="checkbox" value="Yes">Rigid Frame</td>
    <td><input name="contact me about Air Dome" type="checkbox" value="Yes">Air Dome</td>
  </tr>
  <tr>
    <td><input name="contact me about Umbrellas" type="checkbox" value="Yes">Umbrellas</td>
    <td><input name="contact me about Facades" type="checkbox" value="Yes">Facades</td>
  </tr>
  <tr>
    <td><input name="contact me about Pre Owned Deals" type="checkbox" value="Yes">Pre Owned Deals</td>
    <td><input name="contact me about Other" type="checkbox" value="Yes">Other</td>
  </tr>
  <tr>
    <td><label for="comments">&nbsp;&nbsp;Questions/Comments:</label></td>
    <td><textarea name="comments" id="text" cols="35" rows="5" align="right"></textarea></td>
  </tr>
  <tr>
    <td align="left" colspan="2"><?php captcha();?></td>
  </tr>
  <tr>
    <td align="center" colspan="2"><input type="submit" name="submit" value="submit" /></td>
  </tr>
</table>
</fieldset>
</form>
</td>
  </tr>
</table>

</div><!-- end .content -->
<?php include ('footer.php'); ?>