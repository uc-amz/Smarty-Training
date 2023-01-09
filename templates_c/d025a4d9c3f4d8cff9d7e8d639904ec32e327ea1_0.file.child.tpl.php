<?php
/* Smarty version 4.3.0, created on 2022-11-28 13:06:22
  from 'C:\xampp\htdocs\ucertify\Smarty Training\child.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6384a43eee99c5_69863318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd025a4d9c3f4d8cff9d7e8d639904ec32e327ea1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ucertify\\Smarty Training\\child.tpl',
      1 => 1669637181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6384a43eee99c5_69863318 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6872977166384a43eedeaf1_64167925', "title");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block "title"} */
class Block_6872977166384a43eedeaf1_64167925 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6872977166384a43eedeaf1_64167925',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    This is child and <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.Parent}');
?>

<?php
}
}
/* {/block "title"} */
}
