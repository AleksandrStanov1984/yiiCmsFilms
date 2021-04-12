<?php






namespace Common\bootstrap;

use common\domain\Metadata\MetadataRepositoryInterface;
use Yii;
use yii\base\Application;
use yii\base\BootstrapInterface;

class SetUp implements BootstrapInterface
{

    /**
     * Bootstrap method to be called during application bootstrap stage.
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
        $container = Yii::$container;

        $container->setSingleton(MetadataRepositoryInterface::class, MetadataRepository::class);
    }
}