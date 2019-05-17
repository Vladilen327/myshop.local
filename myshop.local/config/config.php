<?php

/**
 *
 * ФАЙЛ НАСТРОЕК
 *
 */

// Константы для обращения к контроллерам
define  ('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');


// Используемый шаблон
$template = 'default';
$templateAdmin = 'admin';

// Пути к файлам шаблонов (*.tpl)
define('TemplatePrefix', "../views/{$template}/");
define('TemplateAdminPrefix', "../views/{$templateAdmin}/");
define('TemplatePostfix', '.tpl');

// пути к файлам шаблонов в веб-пространстве (папка www)
define('TemplateWebPath', "/templates/{$template}/");
define('TemplateAdminWebPath', "/templates/{$templateAdmin}/");

// Инициализация шаблонизатора Smarty
//put full path to Smarty.class.php
require ('../library/Smarty/libs/Smarty.class.php');
$smarty=new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');

$smarty->assign('TemplateWebPath', TemplateWebPath);
//<