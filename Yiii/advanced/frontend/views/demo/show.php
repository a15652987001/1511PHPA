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
		<table border="1">
			<th>id</th>
			<th>用户名</th>
			<th>密码</th>
			<th>操作</th>
			<th>操作</th>
		<?php foreach ($data as $key => $value): ?>
			<tr align="center">
				<td><?=$value['id']?></td>
				<td><?=$value['user']?></td>
				<td><?=$value['pwd']?></td>
				<td><a href="<?=Url::toRoute(['demo/del','id'=>$value['id']])?>">删除</a></td>
				<td><a href="<?=Url::toRoute(['demo/update','id'=>$value['id']])?>">修改</a></td>
			</tr>
		<?php endforeach ?>
	</table>
	</center>
</body>
</html>