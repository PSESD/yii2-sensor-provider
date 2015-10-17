<?php
namespace canis\sensorProvider;

use Yii;
use yii\base\Application;
use yii\base\Event;
use canis\caching\Cacher;

/**
 * Module [[@doctodo class_description:canis\broadcaster\Module]].
 *
 * @author Jacob Morrison <email@ofjacob.com>
 */
class Module extends \yii\base\Module
{
    public $friendlyUrl = 'sensor-provider';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $app = Yii::$app;
        if ($app instanceof \yii\web\Application) {
            $app->getUrlManager()->addRules([
                $this->friendlyUrl . '/<controller:[\w\-]+>' => $this->id . '/<controller>/index',
                $this->friendlyUrl . '/<controller:[\w\-]+>/<action:[\w\-]+>' => $this->id . '/<controller>/<action>',
            ], false);
        }
        $controllers = [
        ];
        foreach ($controllers as $id => $controller) {
            if (!$controller) { continue; }
            $this->controllerMap[$id] = $controller;
        }
   }
}
