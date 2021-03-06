<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Purchase */

$this->title = 'Purchase';
$this->params['breadcrumbs'][] = ['label' => 'Purchases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchase-create">

	<?php
	/**
	 * Accounts have 3 options for purchase:
	 * New Purchase
	 * Add Device
	 * Add Time to Account
	 */

	?>
    <?= $this->render('_purchase', [
		'cc_format_mdl'            => $cc_format_mdl,
		'country_mdl'              => $country_mdl,
		'device_count_options_mdl' => $device_count_options_mdl,
		'purchase_mdl'             => $purchase_mdl,
		'time_options_mdl'         => $time_options_mdl,
    ]) ?>

</div>
