<?php

require_once("../vendor/autoload.php");

use DcrPHP\Annotations\Annotations;

ini_set('display_errors', 'on');

//加载配置
$clsAnnotations = new Annotations();
$clsAnnotations->setClass(Annotations::class);
$clsAnnotations->setMethod('getCLassParameter');
$clsAnnotations->setProperty('class');

//获取Annotations的author注解
echo "Annotations的author是:" . $clsAnnotations->getCLassParameter('author');
echo "\r\n";

//获取Annotations->getCLassParameter的param注解
echo "Annotations->getCLassParameter的param是:" . $clsAnnotations->getMethodParameter('param');
echo "\r\n";

//获取Annotations->getCLassParameter的param注解
echo "Annotations->getCLassParameter的param是:";
print_r($clsAnnotations->getMethodVariableDeclarations('param'));
echo "\r\n";

//获取Annotations的属性class的var注解
echo "Annotations.class的var是:" . $clsAnnotations->getPropertyParameter('var');
echo "\r\n";

//获取Annotations->getCLassParameter的所有注解
$parameterList = $clsAnnotations->getMethodParameters();
print_r($parameterList);
