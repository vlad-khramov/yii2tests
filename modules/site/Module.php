<?php

namespace app\modules\site;

use Yii;
use yii\base\BootstrapInterface;

class Module extends \yii\base\Module implements BootstrapInterface
{
    public $controllerNamespace = 'app\modules\site\controllers';

    /**
     * @param \yii\base\Application $app
     */
    public function bootstrap($app)
    {
        $app->getUrlManager()->addRules([
            'GET /' => 'site/home/home',
        ], true);
    }

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}