<?php

namespace andrewdanilov\CookiesAgreement;

use yii\base\Widget;

class CookiesPanel extends Widget
{
	public $policyUrl;

	public function run()
	{
		return $this->render('main', ['policyUrl' => $this->policyUrl]);
	}
}