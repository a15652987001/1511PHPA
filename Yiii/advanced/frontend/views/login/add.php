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
		<form action="<?php echo Url::to(['login/add_do'])?>" method="post">
			<table>
				<tr>
					<td>昵称:</td>
					<td><input type="text" name="leave_name"></td>
				</tr>
				
				<tr>
					<td>生日:</td>
					<td><textarea name="leave_content"  ></textarea></td>
				</tr>
				<tr>
					<td>工作地址</td>
					<td><input type="text" name="dizhi"></td>
				</tr>
				<tr>
					<td><input type="submit"  value="上一步"></td>
					<td><input type="submit"  value="下一步"></td>
					<td></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>