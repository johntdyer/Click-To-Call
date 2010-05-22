<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="robots" content="all" />
		<style>
		body{
			width:120px;
			color:red;
			padding-left:50px;
		}
		</style>
	
</head>
 <table style="border-width: 0px;" cellpadding="5" width="100%">
  <tr> <td bgcolor="#333132"> <img id="logoleft" align="left" src="VectorVRwMatte.gif" width="230" height="116"/></td></tr>
  <tr style="left: 20px">
   <td align="left">
    <form name="PlaceCall" action="submitToken.php" method="post" enctype="multipart/form-data">
      First Name
      <br/>
     <input name="first_name" size="20" maxlength="20" value="" type="text"/>
     <br/>
      Last Name
      <br/>
     <input name="last_name" size="20" maxlength="20" value="" type="text"/>
     <br/>
     Company
      <br/>
     <input name="company" size="20" maxlength="20" value="" type="text"/>
     <br/>
      Phone Number(format: 4075551212)
     <br/>
     <input name="numbertocall" size="20" maxlength="10" value="" type="text"/>
  </td>
 </tr>

 <tr>
  <td>
   <input name="submit" value="Call" type="submit">
     &nbsp; 
    <input type="reset" value="Clear"> 
    <br/> <hr/>
   </td>
 </tr>
</form>
</table>
</body>
</html>