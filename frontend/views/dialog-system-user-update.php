<?php
$SUBVIEW = 1;
require_once('../../lib/Loader.php');
require_once('../session.php');
?>

<table class='fullwidth aligned'>
	<tr>
		<th><?php echo LANG['new_password']; ?></th>
		<td><input type='password' class='fullwidth' autocomplete='new-password' id='txtEditSystemuserNewPassword' autofocus='true'></input></td>
	</tr>
	<tr>
		<th><?php echo LANG['confirm_password']; ?></th>
		<td><input type='password' class='fullwidth' autocomplete='new-password' id='txtEditSystemuserConfirmNewPassword'></input></td>
	</tr>
	<tr>
		<th></th>
		<td><button id='btnCreateUser' class='fullwidth' onclick='if(txtEditSystemuserNewPassword.value!=txtEditSystemuserConfirmNewPassword.value){emitMessage(L__PASSWORDS_DO_NOT_MATCH, "", MESSAGE_TYPE_WARNING);return false;} changeSelectedSystemuserPassword("systemuser_id[]", txtEditSystemuserNewPassword.value)'><img src='img/edit.svg'>&nbsp;<?php echo LANG['change']; ?></button></td>
	</tr>
</table>