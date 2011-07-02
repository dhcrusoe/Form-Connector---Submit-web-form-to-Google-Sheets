<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form </title>
</head>

<body>
<?php
$msg=$_GET['msg'];
if($msg=='ok'){$msg2="Previous Inserted OK";}
 ?>
<div id="messages" style="width:400px; margin-left:auto; margin-right:auto; text-align:center; color:#F00; margin-top:1px; margin-bottom:10px;"><?php echo $msg2; ?></div>
<form id="form1" name="form1" method="post" action="add_rowgs.php" onsubmit="return validate_f1();">
<table width="400" border="0" align="center" cellpadding="0" cellspacing="0" style="text-align:center;">
  <tr>
    <td>First Name</td>
    <td><input name="fn" type="text" id="fn" size="40" /></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td><input name="ln" type="text" id="ln" size="40" /></td>
  </tr>
  <tr>
    <td>Organization</td>
    <td><input name="org" type="text" id="org" size="40" /></td>
  </tr>
  <tr>
    <td>Entity</td>
    <td><input name="ent" type="text" id="ent" size="40" /></td>
  </tr>
  <tr>
    <td>Location*</td>
    <td><input name="loc" type="text" id="loc" size="40" /></td>
  </tr>
</table>
<div style="width:100%; text-align:center; margin-left:auto; margin-right:auto; display:inline-block; margin-top:10px; margin-bottom:10px;"><input name="sbg" type="submit" value="GO" /></div>
</form>
<script language="javascript">
function validate_f1()
{
var myTextField = document.getElementById('loc');
var trimmed_value = myTextField.value.replace(/^\s+|\s+$/g, '') ;
	if( trimmed_value== "")
	{
		alert("Location is empty");
		return false;
	}
	else
		{
			//alert("Location not empty");
		return true;	
		}
}


</script>
</body>
</html>