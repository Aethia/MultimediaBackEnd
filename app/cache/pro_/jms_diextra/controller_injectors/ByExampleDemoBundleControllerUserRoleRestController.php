<?php

namespace ByExample\DemoBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class UserRoleRestController__JMSInjector
{
    public static function inject($container) {
        require_once 'D:/Programmes/wamp/www/MultimediaService/app/cache/prod/jms_diextra/proxies/ByExample-DemoBundle-Controller-UserRoleRestController.php';
        $b = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('ByExample\\DemoBundle\\Controller\\UserRoleRestController' => array('getRolesAction' => array(0 => 'security.access.method_interceptor'), 'postRolesAction' => array(0 => 'security.access.method_interceptor'), 'deleteRoleAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy_4828730ea97f44e5d33f42ad46418158bf1ded0f\__CG__\ByExample\DemoBundle\Controller\UserRoleRestController();
        $instance->__CGInterception__setLoader($b);
        return $instance;
    }
}
