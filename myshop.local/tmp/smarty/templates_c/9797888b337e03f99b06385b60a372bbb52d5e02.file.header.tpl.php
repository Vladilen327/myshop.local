<?php /* Smarty version Smarty-3.1.6, created on 2019-05-12 17:55:36
         compiled from "../views/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:627965595cd8299d3706f9-54328419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9797888b337e03f99b06385b60a372bbb52d5e02' => 
    array (
      0 => '../views/default\\header.tpl',
      1 => 1557676525,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '627965595cd8299d3706f9-54328419',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5cd8299db4982',
  'variables' => 
  array (
    'pageTitle' => 0,
    'TemplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd8299db4982')) {function content_5cd8299db4982($_smarty_tpl) {?><html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
css/main.css" type="text/css" />
    <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
</head>

<body>
<div id="header">
    <h1>My shop - интернет-магазин</h1>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<!--Центральная часть -->
<div id="centerColumn">


<?php }} ?>