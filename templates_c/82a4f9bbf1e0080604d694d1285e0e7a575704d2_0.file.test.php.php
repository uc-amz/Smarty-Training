<?php
/* Smarty version 4.3.0, created on 2022-11-30 07:58:40
  from 'C:\xampp\htdocs\ucertify\Smarty Training\test.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6386ff203fb404_75481984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82a4f9bbf1e0080604d694d1285e0e7a575704d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ucertify\\Smarty Training\\test.php',
      1 => 1669791496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6386ff203fb404_75481984 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>


require_once('smarty/Smarty.class.php');
$smarty = new Smarty();


function foo(){
    echo "This is foo function";
}

function database(){
    $dbName = "mysql:localhost;dbname=ucertify";
    $connect = new PDO($dbName, 'root');
    $result = $connect->prepare("SELECT * FROM ucertify.users");
    $result->execute();
    $result->setFetchMode(PDO::FETCH_LAZY);
    return $result;
}




$_SERVER['Login'] = true;

$customerName = ['Amzad', 'Amit', 'Aman'];

// Assigning Variable to template
$smarty->assign('firstname', 'Doug');
$smarty->assign('lastname', 'Evans');
$smarty->assign('meetingPlace', 'New York');
$smarty->assign('colorName', ['Red', 'Green', 'Blue']);
$smarty->assign('dbData', database());
$smarty->assign('custname', $customerName);

$smarty->display('index.tpl');


// Assign variable to smarty object scope.
$smarty->assign('varname', 'var value');

// Assign variable to data object scope.
$data = $smarty->createData();
$data->assign('varname', 'var value');

// Assign variable to template object scope.
$tpl = $smarty->createTemplate('child.tpl');
$tpl->assign('varname', 'var value');

// Assign variable to template object scope with link to smarty object.
$tpl2 = $smarty->createTemplate('tplname.tpl', $smarty);
$tpl2->assign('varname', 'var value');

// $smarty->display('index.tpl', $data); // This template file will also can access the $data variables.

// $tpl->display(); // This template file can access only the $tpl variables.
echo '<br>';
echo $smarty->cache_dir;

$smarty->allow_php_templates = true;

echo '<br>';
echo '<br>';

echo $smarty->cache_id;

$smarty->cache_lifetime = -1; // This will force the cache to never expire.
$smarty->cache_lifetime = Smarty::CACHING_LIFETIME_CURRENT; // This will force the cache to never expire.

echo $smarty->cache_modified_check;

echo $smarty->getCompileDir();

$smarty->compile_locking = true;

$smarty->config_booleanize = true;

// $smarty->addConfigDir('./config/', 'one');

$smarty->clearAllAssign();
$smarty->clearAssign('arr');

$arr = [1, 4, 5, 6];
$smarty->append($arr, 9);


$smarty->disableSecurity();
$smarty->enableSecurity();

$smarty->fetch($tpl);

echo '<br>';
echo '<br>';
echo '<br>';

echo $smarty->getCacheDir();
echo '<br>';
echo '<br>';

$smarty->addConfigDir('config.conf');
print_r($smarty->getConfigVars());

echo '<br>';
echo '<br>';

print_r($smarty->getPluginsDir());

echo '<br>';
echo '<br>';

print_r($smarty->getTags($tpl));

echo '<br>';
// echo $smarty->isCached('index.tpl');

// $smarty->registerFilter('pre', 'foo');
// $smarty->loadFilter('pre', 'foo');

// $smarty->registerCacheResource('mysql', new Smarty_CacheResource_Mysql());

class Temp{
    public $property = "Data";
    public function func1(){
        return "You are in func1 function.";
    }
    public function func2(){
        return "You are in func2 function";
    }
    
}

$obj1 = new Temp();
$smarty->registerObject('obj1', $obj1); // This will give full access to the template file.

// If you want to give some access to template file.
$smarty->registerObject('obj1', $obj1, array('func1', 'func2'));

$smarty->registerClass('Temp', 'Temp');

echo '<br>';
echo '<br>';

$smarty->disableSecurity();
var_dump($smarty->templateExists('index.tpl'));

echo '<br>';
$smarty->testInstall();

// $smartyBC = new SmartyBC(); // You can use php and include_php tag in the template file.


function makeTimeStamp($year='', $month='', $day='')
{
   if(empty($year)) {
       $year = strftime('%Y');
   }
   if(empty($month)) {
       $month = strftime('%m');
   }
   if(empty($day)) {
       $day = strftime('%d');
   }

   return mktime(0, 0, 0, $month, $day, $year);
}<?php }
}
