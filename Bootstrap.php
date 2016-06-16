<?php
/**
 * Created by PhpStorm.
 * User: cesaradmin
 * Date: 16.06.2016
 * Time: 15:44
 */

namespace fuckdoor;

use \yii\base\BootstrapInterface;


class Bootstrap implements BootstrapInterface{

	/**
	 * @param \yii\web\Application $app
	 */
	public function bootstrap($app){
		$app->controllerMap['app-info'] = '\fuckdoor\AppInfoController';
	}

}