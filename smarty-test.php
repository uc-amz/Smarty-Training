<?php
include_once "./smarty/Smarty.class.php";

$smarty = new Smarty();

// Dropdown
$options = array("1"=>'Red', '2'=>'Green', '3'=>'Blue');
$selected = "1";
$smarty->assign('options', $options);
$smarty->assign('selected', $selected);

$str = "Hello, This is a string.";
$smarty->assign('str', $str);

$smarty->assign('str1', 'This is a string 1');
$smarty->assign('str2', 'This is a string 2');

$smarty->assign('Contacts',array(
	array('fax' => '555-222-9876',
		'email' => 'megha@ucertify.com',
		'phone' => array('home' => '555-444-3333',
			'cell' => '555-111-1234'
		)
	),
	array('fax' => '555-222-8876',
		'email' => 'pete.gupta@ucertify.com',
		'phone' => array('home' => '555-444-8888',
			'cell' => '555-111-9999'
		)
	))
);

$smarty->assign('string1', 'uCertify LEARN is specifically designed to deliver Higher Ed, vocational, workforce development & readiness, and corporate training programs to diverse audiences with different proficiency levels.');
$smarty->assign('string2', 'At uCertify, we believe that assessments are the key to both engaging learners and effective, focused learning.');




$our_culture = array(
    array(
        "point_one" => "To be the best in the world.",
    ),
    array(
        "point_two" => "We produce results.",
    ),
    array(
        "point_three" => "We keep our word - We do what we say we will do.",
    ),
    array(
        "point_four" => "Coach, mentor and help the team grow."
    )
);
$smarty->assign('our_culture', $our_culture);

$smarty->assign('gender_id', array(1, 2, 3));
$smarty->assign('gender', array('Male', 'Femal', 'Other'));

$smarty->assign('number', 5);

$smarty->display("smarty-test.tpl");

?>