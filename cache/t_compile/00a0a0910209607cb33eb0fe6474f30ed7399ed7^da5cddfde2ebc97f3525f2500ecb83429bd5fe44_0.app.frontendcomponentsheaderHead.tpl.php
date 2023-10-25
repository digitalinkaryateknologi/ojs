<?php
/* Smarty version 4.3.1, created on 2023-10-25 00:13:18
  from 'app:frontendcomponentsheaderHead.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65385d9ece2c97_61824363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da5cddfde2ebc97f3525f2500ecb83429bd5fe44' => 
    array (
      0 => 'app:frontendcomponentsheaderHead.tpl',
      1 => 1698192775,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65385d9ece2c97_61824363 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
	<meta charset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['defaultCharset']->value ));?>
">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['pageTitleTranslated']->value ?: '');?>

				<?php if ((($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )) ?? null)===null||$tmp==='' ? "index" ?? null : $tmp) != 'index' && $_smarty_tpl->tpl_vars['currentContext']->value && $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedName()) {?>
			| <?php echo $_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedName();?>

		<?php }?>
	</title>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_header'][0], array( array('context'=>"frontend"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_stylesheet'][0], array( array('context'=>"frontend"),$_smarty_tpl ) );?>


	<style> 
		.pkp_structure_main {
    width: 80%;
}

.pkp_structure_main:first-child:last-child:before {
    display: none;
}

.pkp_structure_main:first-child:last-child:after {
    display: none;
}

#conten  li.has_thumb {
    border: none !important;
    width: 260px;
    float: left;
}

#conten .thumb {
    width: 100% !important;
}

#conten .thumb img{
    margin: 0 auto;
	-webkit-transition: 0.4s ease;
  transition: 0.4s ease;
}

#conten .thumb img:hover{
    margin: 0 auto;
	-webkit-transform: scale(1.08);
  transform: scale(1.08);
}

a#btn {
    width: 100px;
    background: #008acb;
    display: block;
    text-align: center;
    padding: 5px;
    text-decoration: none;
    color: #fff;
    margin: 10px auto;
}
.about_site h2{
	font-size:30px;
}
.banner{
	background-image: url('/public/slide.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 350px;
    width: 100%;
}
.pkp_site_name img {
    margin-top: -34px;
}
	</style>
	
</head>
<?php }
}
