<?php
/* Smarty version 4.3.0, created on 2022-11-30 07:50:38
  from 'C:\xampp\htdocs\ucertify\Smarty Training\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6386fd3ebd93a7_67277972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd347f199ed6353770aa5ecdaa57a9bf05b1410d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ucertify\\Smarty Training\\index.tpl',
      1 => 1669791028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:test.php' => 1,
  ),
),false)) {
function content_6386fd3ebd93a7_67277972 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),3=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),4=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),5=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),6=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\modifier.spacify.php','function'=>'smarty_modifier_spacify',),7=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\modifier.mb_wordwrap.php','function'=>'smarty_modifier_mb_wordwrap',),8=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),9=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),10=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),11=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\function.html_image.php','function'=>'smarty_function_html_image',),12=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),13=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),14=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\function.html_select_time.php','function'=>'smarty_function_html_select_time',),15=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\function.html_table.php','function'=>'smarty_function_html_table',),16=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\function.mailto.php','function'=>'smarty_function_mailto',),17=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\function.math.php','function'=>'smarty_function_math',),18=>array('file'=>'C:\\xampp\\htdocs\\ucertify\\SmartyTraining\\smarty\\plugins\\block.textformat.php','function'=>'smarty_block_textformat',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>



<?php $_smarty_tpl->_assignInScope('var', "This is a variable");
echo $_smarty_tpl->tpl_vars['var']->value;?>

<br>

<?php $_smarty_tpl->_assignInScope('var', array(2,4,3,7,8,1));
echo $_smarty_tpl->tpl_vars['var']->value[4];?>

<br>

<?php $_smarty_tpl->_assignInScope('student', array('name'=>'Amzad','Address'=>'Muaffarpur','Course'=>'B.Tech','roll'=>3));
echo $_smarty_tpl->tpl_vars['student']->value['name'];?>

<br>

<?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'var');?>
  
<?php ob_start();
$_smarty_tpl->_assignInScope('varname', 'value');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

<?php echo $_smarty_tpl->tpl_vars['varname']->value;?>

<br>

<?php echo "student";?>


<?php echo $_SERVER['Login'];?>





<?php $_smarty_tpl->_assignInScope('foo', 123);
$_smarty_tpl->_assignInScope('bar', 1);
echo $_smarty_tpl->tpl_vars['foo']->value+1;?>


<?php echo $_smarty_tpl->tpl_vars['foo']->value*$_smarty_tpl->tpl_vars['bar']->value;?>



<?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value+$_smarty_tpl->tpl_vars['bar']->value;
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('foo', $_prefixVariable2);?>

<?php echo '<script'; ?>
>
   // the following braces are ignored by Smarty
   // since they are surrounded by whitespace
   function foobar {
	alert('foobar!');
   }
   // this one will need literal escapement
   
	function bazzy {alert('foobar!');}
   
<?php echo '</script'; ?>
>

<br>

Hello <?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
, glad to see you can make it.
<br />
This weeks meeting is in <?php echo $_smarty_tpl->tpl_vars['meetingPlace']->value;?>
.


<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'config.conf', null, 0);
?>
;
<br>
<?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'isComplete');?>

<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'anothervar');?>


<?php echo $_GET['page'];?>






<br>
<?php echo "Current Time Stamp: ".((string)time());?>
 <br>
<?php ob_start();
echo smarty_modifier_date_format(time(),'%d/%m/%Y  %H:%M:%S');
$_prefixVariable3=ob_get_clean();
echo "Current Date and Time in Formatted: ".$_prefixVariable3;?>


<?php echo (defined('const_var_name') ? constant('const_var_name') : null);?>

<br>

<?php echo basename($_smarty_tpl->source->filepath);?>



<br>
<?php echo dirname($_smarty_tpl->source->filepath);?>


<br>
<?php echo Smarty::SMARTY_VERSION;?>


<br>
<?php $_smarty_tpl->_assignInScope('str', "This is a string.");
echo mb_strtoupper($_smarty_tpl->tpl_vars['str']->value ?? '', 'UTF-8');?>
 <br>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['str']->value,7,"hidden");?>

<br>
<?php echo str_repeat((string) "-", (int) 100);?>
<br>

<?php $_smarty_tpl->_assignInScope('arr', array(2,4,1,7,9));
echo smarty_modifier_count($_smarty_tpl->tpl_vars['arr']->value);?>
<br>

<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['str']->value);?>
<br>

<?php echo ($_smarty_tpl->tpl_vars['str']->value).(" This is another string which is concatinated.");?>
<br>

<?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['str']->value, $tmp);?>
<br>

<?php echo mb_strlen($_smarty_tpl->tpl_vars['str']->value, 'UTF-8');?>
<br>


<?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['str']->value, $tmp);?>
<br>

<?php echo (($tmp = $_smarty_tpl->tpl_vars['email']->value ?? null)===null||$tmp==='' ? "Email Not Provided." ?? null : $tmp);?>
<br>

<?php echo preg_replace('!^!m',str_repeat(' ',4),$_smarty_tpl->tpl_vars['str']->value);?>
<br>

<?php $_smarty_tpl->_assignInScope('str2', "This is line 1.\n This is line 2.");
echo nl2br((string) $_smarty_tpl->tpl_vars['str2']->value, (bool) 1);?>
<br>

<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['str2']->value,'/[\n,\t,\r]/',' ');?>
<br>

<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['str']->value,' ','\n');?>
<br>

<?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['str']->value);?>
<br>
<?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['str']->value,'^');?>
<br>

<?php $_smarty_tpl->_assignInScope('num', 123.34543);?>

<?php echo sprintf('%.2f',$_smarty_tpl->tpl_vars['num']->value);?>
<br> <?php echo sprintf('%d',$_smarty_tpl->tpl_vars['num']->value);?>
<br> 
<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['str2']->value);?>
<br> 
<?php $_smarty_tpl->_assignInScope('tagstr', "Blind Woman Gets <font face=\"helvetica\">New Kidney</font> from Dad she Hasn't Seen in <b>years</b>.");
echo strip_tags((string) $_smarty_tpl->tpl_vars['tagstr']->value);?>
<br>

<?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['str']->value, 'UTF-8', "UTF-8");?>
<br>

<?php $_smarty_tpl->_assignInScope('str2', "Blind woman gets new kidney from dad she hasn't seen in years.");
echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['str2']->value,30,"\n",false);?>
<br>

<?php echo smarty_modifier_capitalize(mb_strtolower($_smarty_tpl->tpl_vars['str2']->value, 'UTF-8'));?>
<br>


<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["first"] = "Mohd";
$_smarty_tpl->_assignInScope('name', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["last"] = "Amzad";
$_smarty_tpl->_assignInScope('name', $_tmp_array);?>

<?php echo "Full name: ".((string)$_smarty_tpl->tpl_vars['name']->value['first'])." ".((string)$_smarty_tpl->tpl_vars['name']->value['last']);?>
<br>

<?php $_smarty_tpl->_assignInScope('var_name', "value" ,false ,32);?>

<?php echo $_smarty_tpl->tpl_vars['var_name']->value;?>
<br>

<html>
   <head>
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14885880726386fd3eafc6e3_58561995', "title");
?>
</title>
   </head>
</html>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "foo", "bar", null);?>
   <?php $_smarty_tpl->_subTemplateRender("file:test.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'foo');?>


<br>
<br>
<br>

<ul>
   <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
      <li>
         Item <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 <br>
      </li>
   <?php }
}
?>
</ul>

<br>
<br>
<br>

<ul>
<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 1+1 - (2) : 2-(1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 2, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
    <li><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</li>
<?php }} else { ?>
  no iteration
<?php }
?>
</ul>
<br>
<br>
<br>

<ul>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colorName']->value, 'color');
$_smarty_tpl->tpl_vars['color']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['color']->value) {
$_smarty_tpl->tpl_vars['color']->do_else = false;
?>
      <li>
         <?php echo $_smarty_tpl->tpl_vars['color']->value;?>

      </li>
   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<br>
<br>
<br>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dbData']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
   Name:  <?php echo $_smarty_tpl->tpl_vars['data']->value['Name'];?>
 <br>
   Username: <?php echo $_smarty_tpl->tpl_vars['data']->value['username'];?>
   <br> 
   Password: <?php echo $_smarty_tpl->tpl_vars['data']->value['password'];?>
   <br>
   <?php
}
if ($_smarty_tpl->tpl_vars['data']->do_else) {
?>  
      No any data...
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<br>
<br>
<br>

<?php if (1 == 10) {?>
   Equal.
   <?php } else { ?>
      Not Equal.
<?php }?>

 
<br>
<br>
{Inside delimeter}

<br>
<br>

<ul>
   <?php
$__section_customers_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['custname']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_customers_0_total = $__section_customers_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_customers'] = new Smarty_Variable(array());
if ($__section_customers_0_total !== 0) {
for ($__section_customers_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_customers']->value['index'] = 0; $__section_customers_0_iteration <= $__section_customers_0_total; $__section_customers_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_customers']->value['index']++){
?>
      <li>
         <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_customers']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customers']->value['index'] : null);?>

         <?php echo $_smarty_tpl->tpl_vars['custname']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customers']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customers']->value['index'] : null)];?>

      </li>
   <?php
}
}
?>
</ul>

<table border='0'><tr><td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><font color="green">This is a test</font></a></td></tr></table>

<?php $_smarty_tpl->_assignInScope('foo', 10);
while ($_smarty_tpl->tpl_vars['foo']->value > 0) {?>
   <?php echo $_smarty_tpl->tpl_vars['foo']->value--;?>

<?php }?>



<br>
<br>
<br>

<?php echo smarty_function_counter(array('start'=>0,'skip'=>2),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />

<br>
<br>
<br>

<ul>
   <?php
$_smarty_tpl->tpl_vars['__smarty_section_forcycle'] = new Smarty_Variable(array());
if (true) {
for ($__section_forcycle_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_forcycle']->value['index'] = 0; $__section_forcycle_1_iteration <= 3; $__section_forcycle_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_forcycle']->value['index']++){
?>
      <li><?php echo smarty_function_cycle(array('values'=>"even,odd"),$_smarty_tpl);?>
</li><br>
   <?php
}
}
?>
</ul>
<br>
<br>

<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'isComplete'), $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?><br>
<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'anothervar'), $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>

<br>
<br>


<label>Select Gender</label><br>
<?php echo smarty_function_html_checkboxes(array('options'=>array(1=>'Male',2=>'Female',3=>'Other')),$_smarty_tpl);?>


<br>
<br>
<br>
<?php echo smarty_function_html_image(array('file'=>"https://www.w3schools.com/css/paris.jpg",'height'=>'100%','width'=>'100%','alt'=>"Image Not Loaded."),$_smarty_tpl);?>

<br>
<br>
<br>

<?php echo smarty_function_html_options(array('name'=>"menu",'options'=>array('name'=>'Name','roll'=>'Roll','id'=>'Id'),'selected'=>'name'),$_smarty_tpl);?>


<br>
Select DOB
<?php echo smarty_function_html_select_date(array(),$_smarty_tpl);?>


<br>
<?php echo smarty_function_html_select_time(array(),$_smarty_tpl);?>


<br>
<?php echo smarty_function_html_table(array('loop'=>array('Name','Email','Mobile')),$_smarty_tpl);?>


<br>

<?php echo smarty_function_mailto(array('address'=>"amzad.nnt@gmail.com",'subject'=>"For testing purpose",'text'=>"This is a text message."),$_smarty_tpl);?>


<br>
<br>
<br>

<?php echo smarty_function_math(array('equation'=>"(x+y)/z",'x'=>2,'y'=>3,'z'=>1),$_smarty_tpl);?>


<br>
<br>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('textformat', array('wrap'=>40));
$_block_repeat=true;
echo smarty_block_textformat(array('wrap'=>40), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

This is foo.
This is foo.
This is foo.
This is foo.
This is foo.
This is foo.

This is bar.

bar foo bar foo     foo.
bar foo bar foo     foo.
bar foo bar foo     foo.
bar foo bar foo     foo.
bar foo bar foo     foo.
bar foo bar foo     foo.
bar foo bar foo     foo.

<?php $_block_repeat=false;
echo smarty_block_textformat(array('wrap'=>40), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php
$__section_arrsec_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_arrsec_2_total = $__section_arrsec_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_arrsec'] = new Smarty_Variable(array());
if ($__section_arrsec_2_total !== 0) {
for ($__section_arrsec_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_arrsec']->value['index'] = 0; $__section_arrsec_2_iteration <= $__section_arrsec_2_total; $__section_arrsec_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_arrsec']->value['index']++){
?>
   <?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_arrsec']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_arrsec']->value['index'] : null)];?>

<?php
}
}
?>

<br>
<br>
<br>



<?php if ($_smarty_tpl->tpl_vars['title']->value == '') {?>
   &nbsp;
<?php } else { ?>
   <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

<?php }?>

<?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? '&nbsp;' ?? null : $tmp);?>

<?php }
/* {block "title"} */
class Block_14885880726386fd3eafc6e3_58561995 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14885880726386fd3eafc6e3_58561995',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            Parent Title
        <?php
}
}
/* {/block "title"} */
}
