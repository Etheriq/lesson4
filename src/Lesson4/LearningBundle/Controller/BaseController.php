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

    public function renderAction()
    {
        return $this->render('Lesson4LearningBundle:Base:render.html.twig');
    }

    public function templateAction($getParameter = null)
    {
        if ($getParameter == null) {
            return $this->render('Lesson4LearningBundle:Base:template.html.twig',
                array(
                    "variable1" => "var1",
                    "variable2" => "var2",
                    "variable3" => "var3"
                ));

        } elseif ($getParameter) {
            return $this->render('Lesson4LearningBundle:Base:templateGet.html.twig', array("getParameter" => "$getParameter"));
        } else {
            return new Response('get is empty');
        }
    }
} 