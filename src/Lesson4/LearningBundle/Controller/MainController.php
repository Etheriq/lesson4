<?php
/**
 * Created by PhpStorm.
 * File: MainController.php
 * User: Yuriy Tarnavskiy
 * Date: 02.11.13
 * Time: 20:37
 * To change this template use File | Settings | File Templates.
 */

namespace Lesson4\LearningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('Lesson4LearningBundle::index.html.twig');
    }
} 