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
		<form action="<?php echo Url::to(['login/save'])?>" method="post">
			<table>
				<input type="hidden" name="id" value="<?=$data['id']?>">
				<tr>
					<td>留言标题:</td>
					<td><input type="text" name="leave_name" value="<?=$data['leave_name']?>"></td>
				</tr>
				
				<tr>
					<td>留言内容:</td>
					<td><textarea name="leave_content" id="" cols="30" rows="10"><?=$data['leave_content']?></textarea></td>
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