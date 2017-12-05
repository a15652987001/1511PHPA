<?php
	use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<form action="<?php echo Url::to(['show/save'])?>" method="post">
			<table>
				<input type="hidden" name="id" value="<?=$data['id']?>">
				<tr>
					<td>用户名</td>
					<td><input type="text" name="user" value="<?=$data['user']?>"></td>
				</tr>
				<tr>
					<td>密码</td>
					<td><input type="text" name="pwd" value="<?=$data['pwd']?>"></td>
				</tr>
				<tr>
					<td><input type="submit" name="" value="修改"></td>
					<td></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>