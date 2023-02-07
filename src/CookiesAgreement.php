<?php

namespace andrewdanilov\CookiesAgreement;

use yii\base\Widget;

class CookiesAgreement extends Widget
{
	public $url;
	public $message;

    public function init()
    {
        if (!$this->message) {
            $this->message = 'Продолжая использовать наш сайт, вы даете согласие на обработку файлов Cookies и других пользовательских данных, в соответствии с настоящим уведомлением об их использовании. Если вы не согласны с этими условиями, пожалуйста, отключите файлы cookies. Подробнее о <a href="{href}">политике конфиденциальности</a>.';
        }
        parent::init();
    }

    public function run()
	{
		return $this->render('main', ['message' => $this->message, 'url' => $this->url]);
	}
}