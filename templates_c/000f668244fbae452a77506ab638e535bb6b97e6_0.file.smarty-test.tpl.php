<?php
/* Smarty version 4.3.0, created on 2023-01-09 12:16:01
  from 'C:\xampp\htdocs\ucertify\Smarty Training\smarty-test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63bbf771cd08e7_96796199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '000f668244fbae452a77506ab638e535bb6b97e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ucertify\\Smarty Training\\smarty-test.tpl',
      1 => 1673262957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bbf771cd08e7_96796199 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),1=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\function.Counter.php','function'=>'smarty_function_Counter',),2=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),3=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),4=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\modifier.mb_wordwrap.php','function'=>'smarty_modifier_mb_wordwrap',),5=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),6=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smarty Test</title>
</head>
<body>
    <?php echo smarty_function_html_options(array('name'=>'dropdown','options'=>$_smarty_tpl->tpl_vars['options']->value,'selected'=>$_smarty_tpl->tpl_vars['selected']->value),$_smarty_tpl);?>

    <br>
    <br>
    <br>


    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
        <?php echo "5*".((string)$_smarty_tpl->tpl_vars['i']->value)."=".((string)($_smarty_tpl->tpl_vars['i']->value*5));?>
<br>
    <?php }
}
?>

    <br>
    <br>
    <br>

        <?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['str']->value, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>


    <br>
    <?php echo ($_smarty_tpl->tpl_vars['str1']->value).($_smarty_tpl->tpl_vars['str2']->value);?>


    <br>
    <br>

        <?php echo smarty_function_Counter(array('start'=>0,'skip'=>2),$_smarty_tpl);?>
 <br>
    <?php echo smarty_function_Counter(array(),$_smarty_tpl);?>
 <br>
    <?php echo smarty_function_Counter(array(),$_smarty_tpl);?>
 <br>
    <?php echo smarty_function_Counter(array(),$_smarty_tpl);?>
 <br>

        <?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
 <br>
    <?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
 <br>
    <?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
 <br>
    <?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
 <br>

    <br>
    <br>
    <br>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Contacts']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
        <?php echo "Fax = ".((string)$_smarty_tpl->tpl_vars['contact']->value['fax']);?>
<br>
        <?php echo "Email = ".((string)$_smarty_tpl->tpl_vars['contact']->value['email']);?>
<br>
        <?php echo "Phone:  Home = ".((string)$_smarty_tpl->tpl_vars['contact']->value['phone']['home']);?>
<br>
        <?php echo "Phone:  Cell = ".((string)$_smarty_tpl->tpl_vars['contact']->value['phone']['cell']);?>
<br>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php echo mb_strtolower($_smarty_tpl->tpl_vars['string1']->value, 'UTF-8');?>
 <br><br>
    <?php echo mb_strtolower($_smarty_tpl->tpl_vars['string2']->value, 'UTF-8');?>
 <br><br>
    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['string1']->value,'ucertify','uCertify');?>
<br><br>
    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['string2']->value,'ucertify','uCertify');?>
<br><br>
    <?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['string1']->value,30,"\n",false);?>
<br><br>
    <?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['string2']->value,30,"\n",false);?>
<br><br>
    <?php echo ($_smarty_tpl->tpl_vars['string1']->value).($_smarty_tpl->tpl_vars['string2']->value);?>
<br><br>


    <br>
    <br>
    <br>
    <br>


    <ul>
        <?php $_smarty_tpl->_assignInScope('i', 0);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['our_culture']->value, 'culture');
$_smarty_tpl->tpl_vars['culture']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['culture']->value) {
$_smarty_tpl->tpl_vars['culture']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['culture']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</li>
            <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

    <br>
    <br>
    <br>
    <?php echo smarty_function_html_checkboxes(array('name'=>"checkbox",'values'=>$_smarty_tpl->tpl_vars['gender_id']->value,'output'=>$_smarty_tpl->tpl_vars['gender']->value,'selected'=>1),$_smarty_tpl);?>


    <br>
    <br>
    <?php echo smarty_function_html_radios(array('name'=>"radio",'values'=>$_smarty_tpl->tpl_vars['gender_id']->value,'output'=>$_smarty_tpl->tpl_vars['gender']->value,'selected'=>1),$_smarty_tpl);?>



    <br>
    <br>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['number']->value % 2;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 0) {?>
        <?php echo "Number is even";?>

    <?php } else { ?>
        <?php echo "Number is odd";?>

    <?php }?>

    <br>
    <br>
    <br>
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
        <?php echo ((string)$_smarty_tpl->tpl_vars['number']->value)."*".((string)$_smarty_tpl->tpl_vars['i']->value)."=".((string)($_smarty_tpl->tpl_vars['i']->value*$_smarty_tpl->tpl_vars['number']->value));?>
<br>
    <?php }
}
?>
</body>
</html><?php }
}
