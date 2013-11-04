<?php
/**
 * Created by PhpStorm.
 * File: BaseController.php
 * User: Yuriy Tarnavskiy
 * Date: 02.11.13
 * Time: 22:38
 * To change this template use File | Settings | File Templates.
 */

namespace Lesson4\LearningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BaseController extends Controller
{
    public function simpleAction()
    {
        return new Response('This is simple response');
    }

    public function rendAction()
    {
        return $this->render('Lesson4LearningBundle:Base:render.html.twig');
    }

    public function templAction($get1 = null)
    {
        if ($get1 == null) {
            return $this->render('Lesson4LearningBundle:Base:templ.html.twig',
                array(
                    "var1" => "var1",
                    "var2" => "var2",
                    "var3" => "var3"
                ));

        } elseif ($get1) {
            return $this->render('Lesson4LearningBundle:Base:templ_get.html.twig', array("get1" => "$get1"));
        } else {
            return new Response('get is empty');
        }
    }
} 