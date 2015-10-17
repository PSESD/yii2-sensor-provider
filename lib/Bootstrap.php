<?php
namespace canis\sensorProvider;

use yii\base\BootstrapInterface;

/**
 * Bootstrap [[@doctodo class_description:canis\broadcaster\Bootstrap]].
 *
 * @author Jacob Morrison <email@ofjacob.com>
 */
class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $app->setModule('sensorProvider', ['class' => Module::className()]);
        $module = $app->getModule('sensorProvider');
    }
}
