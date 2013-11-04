<?php
/**
 * Created by PhpStorm.
 * File: MyHelloController.php
 * User: Yuriy Tarnavskiy
 * Date: 04.11.13
 * Time: 22:53
 * To change this template use File | Settings | File Templates.
 */

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class MyHelloController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeDemoBundle:MyHello:myhellocontent.html.twig', array(
                "name" => "Yuriy",
                "age" => "28",
                "target" => "learn Twig"
            )
        );
    }
}