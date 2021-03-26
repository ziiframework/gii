<?php

namespace yiiunit\gii;

use Yii;
use yii\gii\Module;

class ModuleTest extends TestCase
{
    public function testDefaultVersion()
    {
        $this->mockApplication();
        Yii::$app->extensions['ziiframework/gii'] = [
            'name' => 'ziiframework/gii',
            'version' => '3.2.1',
        ];

        $module = new Module('gii');

        $this->assertEquals('3.2.1', $module->getVersion());
    }
}
