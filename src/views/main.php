<?php

use andrewdanilov\CookiesAgreement\CookiesAgreementAsset;

/* @var $this \yii\web\View */
/* @var $url string */
/* @var $message string */

CookiesAgreementAsset::register($this);

?>

<div class="cookie-policy">
	<?= Yii::t('app', $message, ['href' => $url]) ?>
	<div class="close-button"></div>
</div>