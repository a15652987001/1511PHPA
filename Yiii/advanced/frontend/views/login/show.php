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
			<th>留言人</th>
			<th>留言标题</th>
			<th>留言内容</th>
			<th>操作</th>
			<th>操作</th>
			<?php foreach ($res as $key => $value): ?>
				<tr align="center">
					<td><?php echo $value['id']?></td>
					<td><?php echo $value['title']?></td>
					<td><?php echo $value['leave_name']?></td>
					<td><?php echo $value['leave_content']?></td>
					<td><a href="<?php echo Url::toRoute(['login/del','id'=>$value['id']])?>">删除</a></td>
					<td><a href="<?php echo Url::toRoute(['login/update','id'=>$value['id']])?>">修改</a></td>
				</tr>

			<?php endforeach ?>


		</table>
		  <div class="pagination-part">
			    <nav>
			        <?php
			        echo yii\widgets\LinkPager::widget([
			            'pagination' => $data['pages'],
			        ]);
			        ?>
			    </nav>
			</div>
	</center>
</body>
</html>