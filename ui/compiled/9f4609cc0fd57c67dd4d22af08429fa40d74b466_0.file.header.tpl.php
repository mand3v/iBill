<?php
/* Smarty version 3.1.30, created on 2017-08-21 23:13:29
  from "C:\Bitnami\wampstack-5.6.31-0\apache2\htdocs\ibill\ui\theme\ibilling\sections\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599b30d909c557_42260891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f4609cc0fd57c67dd4d22af08429fa40d74b466' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-5.6.31-0\\apache2\\htdocs\\ibill\\ui\\theme\\ibilling\\sections\\header.tpl',
      1 => 1479216128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_599b30d909c557_42260891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplheader']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if ($_smarty_tpl->tpl_vars['content_inner']->value != '') {?>
    <?php echo $_smarty_tpl->tpl_vars['content_inner']->value;?>

<?php }
}
}
