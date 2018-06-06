<?php

use engine\widgets\GridView\GridView;

$this->title = $model->Table;
$this->params['breadcrumbs'][] = ['label'=>'Главная', 'url'=>$this->HomeURL];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h4><?= $model->Table ?></h4>
	<a class='btn btn-success' href='/articles/create'>Создать</a>
	<?php
		$GRID = new GridView([
			'model' => $model,
			'fields'=>[
				'id:int',
				'title:text',
				'created:datetime',
				'description:text',
				//'content:text',
				'owner:text',
			]
		]);
	?>
</div>
