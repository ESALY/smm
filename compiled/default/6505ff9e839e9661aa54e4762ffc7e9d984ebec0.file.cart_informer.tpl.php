<?php /* Smarty version Smarty-3.1.18, created on 2015-09-02 14:55:05
         compiled from "C:\OpenServer\domains\sites\smm\design\default\html\cart_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137955e6e399877f89-30738947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6505ff9e839e9661aa54e4762ffc7e9d984ebec0' => 
    array (
      0 => 'C:\\OpenServer\\domains\\sites\\smm\\design\\default\\html\\cart_informer.tpl',
      1 => 1328284806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137955e6e399877f89-30738947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e6e399897381_00796487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e6e399897381_00796487')) {function content_55e6e399897381_00796487($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['cart']->value->total_products>0) {?>
	В <a href="./cart/">корзине</a>
	<?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['cart']->value->total_products,'товар','товаров','товара');?>

	на <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['cart']->value->total_price);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>

<?php } else { ?>
	Корзина пуста
<?php }?>
<?php }} ?>
