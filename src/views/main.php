<?php

use andrewdanilov\CookiesAgreement\CookiesAgreementAsset;

/* @var $this \yii\web\View */
/* @var $policyUrl string */

CookiesAgreementAsset::register($this);

?>

<div class="cookie-policy">
	<?= Yii::t('site', 'Продолжая использовать наш сайт, вы даете согласие на обработку файлов Cookies и других пользовательских данных, в соответствии с настоящим уведомлением об их использовании. Если вы не согласны с этими условиями, пожалуйста, отключите файлы cookies. Подробнее о <a href="{href}">политике конфиденциальности</a>.', ['href' => $policyUrl]) ?>
	<div class="close-button"></div>
</div>