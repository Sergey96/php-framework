<?php

use yii\helpers\Html;
use engine\widgets\ActiveForm\ActiveForm;

?>
<div class="Section-_form">
	
	<?php $form = ActiveForm::begin(); ?>
		<?= $form->field($model, 'name')->textarea() ?>
			<input type='submit' class='btn btn-primary' name='save' value='Сохранить'>
	<?php ActiveForm::end(); ?>
</div>