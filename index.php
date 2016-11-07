<?php
/**
 * Created by PhpStorm.
 * User: IstvanMarki
 * Date: 07-Nov-16
 * Time: 4:35 PM
 */


require_once 'vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('view');
$twig = new Twig_Environment($loader, array(
    'auto_reload' => true
));
$template = $twig->loadTemplate('index.html.twig');
echo $template->render(array('title' => 'Math genius 101', 'first' => 'First number', 'second' => 'Second number', 'operand' => 'Select an action'));