<?php
	use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>欢迎注册</title>
</head>
<body>
	<center>
		<form action="<?php echo Url::to(['login/login_do'])?>" method="post">
			<table>
				<tr>
					<td>手机号</td>
					<td><input type="text" name="login_name"></td>
				</tr>
				<tr>
					<td>密码</td>
					<td><input type="password" name="login_pwd"></td>
				</tr>
				<tr>
					<td>确认密码</td>
					<td><input type="passowrd" name="login_pwd"></td>
				</tr>
				 
				<tr>
					<td><input type="submit" name="" value="下一步"></td>
					<td></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>