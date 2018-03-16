<?php
/*
 * MyBB: SideBar Menu
 *
 * File: sidemenu.php
 * 
 * Authors: Mybbco & Vintagedaddyo
 *
 * MyBB Version: 1.8
 *
 * Plugin Version: 1.2
 * 
 */

// Disallow direct access to this file for security reasons

if(!defined("IN_MYBB"))
{
    die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
}

// Load on Index
//$plugins->add_hook("index_start","sidemenu");

// Load on Portal 
//$plugins->add_hook("portal_start","sidemenu"); 

// Load Globally
$plugins->add_hook("global_start","sidemenu"); 
 
function sidemenu_info()
{
    global $lang;

    $lang->load("sidemenu");
    
    $lang->sidemenu_Desc = '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="float:right;">' .
        '<input type="hidden" name="cmd" value="_s-xclick">' . 
        '<input type="hidden" name="hosted_button_id" value="AZE6ZNZPBPVUL">' .
        '<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">' .
        '<img alt="" border="0" src="https://www.paypalobjects.com/pl_PL/i/scr/pixel.gif" width="1" height="1">' .
        '</form>' . $lang->sidemenu_Desc;

    return Array(
        'name' => $lang->sidemenu_Name,
        'description' => $lang->sidemenu_Desc,
        'website' => $lang->sidemenu_Web,
        'author' => $lang->sidemenu_Auth,
        'authorsite' => $lang->sidemenu_AuthSite,
        'version' => $lang->sidemenu_Ver,
        'compatibility' => $lang->sidemenu_Compat
    );
}

function sidemenu_activate()
{
	global $db, $myb, $lang;

    $lang->load("sidemenu");
	
	// Settings
    
    $sidemenu_group = array(
        "gid" => "0",
        "name" => $lang->sidemenu_name_0,
        "title" => $lang->sidemenu_title_0,
        "description" => $lang->sidemenu_description_0,
        "disporder" => "1",
        "isdefault" => "0",
    );
    $db->insert_query("settinggroups", $sidemenu_group);
    
    $gid = $db->insert_id();
    $sidemenu_setting_1 = array(
        "sid"            => "0",
        "name" => $lang->sidemenu_name_1,
        "title" => $lang->sidemenu_title_1,
        "description" => $lang->sidemenu_description_1,
        "optionscode"    => "yesno",
        "value"            => '0',
        "disporder"        => '1',
        "gid"            => intval($gid),
    );
	$gid = $db->insert_id();
    $sidemenu_setting_2 = array(
        "sid"            => "0",
        "name" => $lang->sidemenu_name_2,
        "title" => $lang->sidemenu_title_2,
        "description" => $lang->sidemenu_description_2,
        "optionscode"    => "text",
        "value" => $lang->sidemenu_value_2,
        "disporder"        => '2',
        "gid"            => intval($gid),
    );
		$gid = $db->insert_id();
    $sidemenu_setting_3 = array(
        "sid"            => "0",
        "name" => $lang->sidemenu_name_3,
        "title" => $lang->sidemenu_title_3,
        "description" => $lang->sidemenu_description_3,
        "optionscode"    => "text",
        "value" => $lang->sidemenu_value_3,
        "disporder"        => '3',
        "gid"            => intval($gid),
    );
		$gid = $db->insert_id();
    $sidemenu_setting_4 = array(
        "sid"            => "0",
        "name" => $lang->sidemenu_name_4,
        "title" => $lang->sidemenu_title_4,
        "description" => $lang->sidemenu_description_4,
        "optionscode"    => "text",
        "value" => $lang->sidemenu_value_4,
        "disporder"        => '4',
        "gid"            => intval($gid),
    );
		$gid = $db->insert_id();
    $sidemenu_setting_5 = array(
        "sid"            => "0",
        "name" => $lang->sidemenu_name_5,
        "title" => $lang->sidemenu_title_5,
        "description" => $lang->sidemenu_description_5,
        "optionscode"    => "text",
        "value" => $lang->sidemenu_value_5,
        "disporder"        => '5',
        "gid"            => intval($gid),
    );
		$gid = $db->insert_id();
    $sidemenu_setting_6 = array(
        "sid"            => "0",
        "name" => $lang->sidemenu_name_6,
        "title" => $lang->sidemenu_title_6,
        "description" => $lang->sidemenu_description_6,
        "optionscode"    => "text",
        "value" => $lang->sidemenu_value_6,
        "disporder"        => '6',
        "gid"            => intval($gid),
    );
	$sidemenu_setting_7 = array(
        "sid"            => "0",
        "name" => $lang->sidemenu_name_7,
        "title" => $lang->sidemenu_title_7,
        "description" => $lang->sidemenu_description_7,
        "optionscode"    => "text",
        "value" => $lang->sidemenu_value_7,
        "disporder"        => '7',
        "gid"            => intval($gid),
    );
	$sidemenu_setting_8 = array(
        "sid"            => "0",
        "name" => $lang->sidemenu_name_8,
        "title" => $lang->sidemenu_title_8,
        "description" => $lang->sidemenu_description_8,
        "optionscode"    => "text",
        "value" => $lang->sidemenu_value_8,
        "disporder"        => '8',
        "gid"            => intval($gid),
    );
	$sidemenu_setting_9 = array(
        "sid"            => "0",
        "name" => $lang->sidemenu_name_9,
        "title" => $lang->sidemenu_title_9,
        "description" => $lang->sidemenu_description_9,
        "optionscode"    => "text",
        "value" => $lang->sidemenu_value_9,
        "disporder"        => '9',
        "gid"            => intval($gid),
    );
	$sidemenu_setting_10 = array(
        "sid"            => "0",
        "name" => $lang->sidemenu_name_10,
        "title" => $lang->sidemenu_title_10,
        "description" => $lang->sidemenu_description_10,
        "optionscode"    => "text",
        "value" => $lang->sidemenu_value_10,
        "disporder"        => '10',
        "gid"            => intval($gid),
    );
	$sidemenu_setting_11 = array(
        "sid"            => "0",
        "name" => $lang->sidemenu_name_11,
        "title" => $lang->sidemenu_title_11,
        "description" => $lang->sidemenu_description_11,
        "optionscode"    => "text",
        "value" => $lang->sidemenu_value_11,
        "disporder"        => '11',
        "gid"            => intval($gid),
    );
	$sidemenu_setting_12 = array(
        "sid"            => "0",
        "name" => $lang->sidemenu_name_12,
        "title" => $lang->sidemenu_title_12,
        "description" => $lang->sidemenu_description_12,
        "optionscode"    => "text",
        "value" => $lang->sidemenu_value_12,
        "disporder"        => '12',
        "gid"            => intval($gid),
    );
	$sidemenu_setting_13 = array(
        "sid"            => "0",
        "name" => $lang->sidemenu_name_13,
        "title" => $lang->sidemenu_title_13,
        "description" => $lang->sidemenu_description_13,
        "optionscode"    => "text",
        "value" => $lang->sidemenu_value_13,
        "disporder"        => '13',
        "gid"            => intval($gid),
    );

	$db->insert_query("settings", $sidemenu_setting_1);
	$db->insert_query("settings", $sidemenu_setting_2);
	$db->insert_query("settings", $sidemenu_setting_3);
	$db->insert_query("settings", $sidemenu_setting_4);
	$db->insert_query("settings", $sidemenu_setting_5);
	$db->insert_query("settings", $sidemenu_setting_6);
	$db->insert_query("settings", $sidemenu_setting_7);
	$db->insert_query("settings", $sidemenu_setting_8);
	$db->insert_query("settings", $sidemenu_setting_9);
	$db->insert_query("settings", $sidemenu_setting_10);
	$db->insert_query("settings", $sidemenu_setting_11);
	$db->insert_query("settings", $sidemenu_setting_12);
	$db->insert_query("settings", $sidemenu_setting_13);

	
	require_once MYBB_ROOT."/inc/adminfunctions_templates.php";
	
// Rebuilding settings
    rebuild_settings();
}

function sidemenu_deactivate()
{
    global $db;
    $db->query("DELETE FROM ".TABLE_PREFIX."settinggroups WHERE name='sidemenu'");
    $db->query("DELETE FROM ".TABLE_PREFIX."settings WHERE name='sidemenu_power'");
    $db->query("DELETE FROM ".TABLE_PREFIX."settings WHERE name='img1'");
    $db->query("DELETE FROM ".TABLE_PREFIX."settings WHERE name='txt1'");
    $db->query("DELETE FROM ".TABLE_PREFIX."settings WHERE name='img2'");
    $db->query("DELETE FROM ".TABLE_PREFIX."settings WHERE name='txt2'");
    $db->query("DELETE FROM ".TABLE_PREFIX."settings WHERE name='img3'");
    $db->query("DELETE FROM ".TABLE_PREFIX."settings WHERE name='txt3'");
    $db->query("DELETE FROM ".TABLE_PREFIX."settings WHERE name='img4'");
    $db->query("DELETE FROM ".TABLE_PREFIX."settings WHERE name='txt4'");
    $db->query("DELETE FROM ".TABLE_PREFIX."settings WHERE name='link1'");
    $db->query("DELETE FROM ".TABLE_PREFIX."settings WHERE name='link2'");
    $db->query("DELETE FROM ".TABLE_PREFIX."settings WHERE name='link3'");
    $db->query("DELETE FROM ".TABLE_PREFIX."settings WHERE name='link4'");
}

function sidemenu(){
	
global $mybb;

if ($mybb->settings['sidemenu_power'] == 1){
	$img1 = $mybb->settings['img1'];
	$txt1 = $mybb->settings['txt1'];
	$link1 = $mybb->settings['link1'];
	$img2 = $mybb->settings['img2'];
	$txt2 = $mybb->settings['txt2'];
	$link2 = $mybb->settings['link2'];
	$img3 = $mybb->settings['img3'];
	$txt3 = $mybb->settings['txt3'];
	$link3 = $mybb->settings['link3'];
	$img4 = $mybb->settings['img4'];
	$txt4 = $mybb->settings['txt4'];
	$link4 = $mybb->settings['link4'];
	
echo "
<style>
.sidemenu {
    top: 55%;
    left: 3px; 
    position: fixed;
    text-align: left;
}
.sidemenu a {
    color: #000;
    text-decoration:none;
}
.sidemenu img {
    padding: 5px;
    margin-bottom: 2px; 
}
.sidemenu img:hover {
    margin-left: 5px; 
}
.sidemenu-span {
    opacity: 0;
    margin-top: 4px;
    display: inline; 
    font: 11px tahoma;
    position: relative;
}
.sidemenu-span a {
    text-decoration: none;
}
.sidemenu a:hover .sidemenu-span {
    opacity: 1;
    z-index: 98;
    color: #fff;
    width: 120px;
    padding: 5px; 
    background: #333;
    margin-left: 7px; 
    border-radius: 5px;
    position: absolute;
}
</style>
<div class='sidemenu'>
<a href='{$link1}'><img src='{$img1}' /><span class='sidemenu-span'>{$txt1}</span></a><br/>
<a href='{$link2}'><img src='{$img2}' /><span class='sidemenu-span'>{$txt2}</span></a><br/>
<a href='{$link3}'><img src='{$img3}' /><span class='sidemenu-span'>{$txt3}</span></a><br/>
<a href='{$link4}'><img src='{$img4}' /><span class='sidemenu-span'>{$txt4}</span></a><br/>
</div>
";
}
}

?>