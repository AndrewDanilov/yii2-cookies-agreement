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
		'js/cookie-policy.js',
	];
	public $depends = [
		'yii\web\JqueryAsset',
	];
}