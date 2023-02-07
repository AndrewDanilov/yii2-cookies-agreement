<?php

namespace andrewdanilov\CookiesAgreement;

use yii\web\AssetBundle;

class CookiesAgreementAsset extends AssetBundle
{
	public $sourcePath = '@andrewdanilov/CookiesAgreement/web';
	public $css = [
		'css/cookie-policy.css',
	];
	public $js = [
		'js/jquery.cookie.js?v1.4.1',
		'js/cookie-policy.js',
	];
	public $depends = [
		'yii\web\JqueryAsset',
	];
}