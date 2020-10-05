<?php

declare(strict_types=1);

namespace DcrPHP\Annotations;

/**
 * Class Annotations
 * @author hhj
 * @package DcrPHP\Annotations
 */
class Annotations extends AnnotationsInfo
{
    /**
     * 获取类的注解
     * @param $parameterName 注解名
     * @return string
     * @throws \Exception
     */
    public function getCLassParameter($parameterName)
    {
        $reader = new \DocBlockReader\Reader($this->getClass());
        return $reader->getParameter($parameterName);
    }

    /**
     * 获取类的function的注解
     * @param $parameterName
     * @return string
     * @throws \Exception
     */
    public function getMethodParameter($parameterName)
    {
        $reader = new \DocBlockReader\Reader($this->getClass(), $this->getMethod());
        return $reader->getParameter($parameterName);
    }

    /**
     * 获取类的function的注解 且解析出来对应关系
     * @param $parameterName
     * @return string
     * @throws \Exception
     */
    public function getMethodVariableDeclarations($parameterName)
    {
        $reader = new \DocBlockReader\Reader($this->getClass(), $this->getMethod());
        return $reader->getVariableDeclarations($parameterName);
    }

    /**
     * 获取类的function的注解列表
     * @param $parameterName
     * @return string
     * @throws \Exception
     */
    public function getMethodParameters()
    {
        $reader = new \DocBlockReader\Reader($this->getClass(), $this->getMethod());
        return $reader->getParameters();
    }

    /**
     * 获取类的某个成员变量的某个注解
     * @param $parameterName
     * @return string
     * @throws \Exception
     */
    public function getPropertyParameter($parameterName)
    {
        $reader = new \DocBlockReader\Reader($this->getClass(), $this->getProperty(), 'property');
        return $reader->getParameter($parameterName);
    }
}
