<?php

namespace andrewdanilov\CookiesAgreement\assets;

use yii\web\AssetBundle;

class CookiesAgreementAsset extends AssetBundle
{
	public $sourcePath = '@vendor/andrewdanilov/CookiesAgreement/src/web';
	public $css = [
		'css/cookie-policy.css',
	];
	public $js = [
		'js/cookie-policy.js',
	];
	public $depends = [
		'yii\web\JqueryAsset',
	];
}