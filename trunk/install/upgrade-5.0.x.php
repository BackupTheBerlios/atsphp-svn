<?php
//===========================================================================\\
// Aardvark Topsites PHP 5                                                   \\
// Copyright (c) 2003-2006 Jeremy Scheff.  All rights reserved.              \\
//---------------------------------------------------------------------------\\
// http://www.aardvarktopsitesphp.com/                http://www.avatic.com/ \\
//---------------------------------------------------------------------------\\
// This program is free software; you can redistribute it and/or modify it   \\
// under the terms of the GNU General Public License as published by the     \\
// Free Software Foundation; either version 2 of the License, or (at your    \\
// option) any later version.                                                \\
//                                                                           \\
// This program is distributed in the hope that it will be useful, but       \\
// WITHOUT ANY WARRANTY; without even the implied warranty of                \\
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General \\
// Public License for more details.                                          \\
//===========================================================================\\

// Help prevent register_globals injection
define('ATSPHP', 1);
$CONF = array();
$FORM = array();
$TMPL = array();

// Change the path to your full path if necessary
$CONF['path'] = '..';

// Combine the GET and POST input
$FORM = array_merge($_GET, $_POST);

if (!isset($FORM['l'])) {
  $TMPL['content'] = <<<EndHTML
Please select your language.<br /><br />
<form action="upgrade-5.0.x.php" method="get">
<select name="l">
EndHTML;
  $languages = array();
  $dir = opendir("{$CONF['path']}/languages/");
  while (false !== ($file = readdir($dir))) {
    $file = str_replace('.php', '', $file);
    array_push($languages, $file);
  }
  natcasesort($languages);
  foreach ($languages as $file) {
    if (is_file("{$CONF['path']}/languages/{$file}.php")) {
      require "{$CONF['path']}/languages/{$file}.php";
      if ($file == 'english') {
        $TMPL['content'] .= "<option value=\"{$file}\" selected=\"selected\">{$translation}</option>\n";
      }
      else {
        $TMPL['content'] .= "<option value=\"{$file}\">{$translation}</option>\n";
      }
    }
  }
  require "{$CONF['path']}/languages/english.php";
  $TMPL['content'] .= <<<EndHTML
</select>
<input type="submit" value="Go" />
</form>
EndHTML;
}
elseif (!isset($FORM['submit'])) {
  require_once("{$CONF['path']}/languages/{$FORM['l']}.php");

  $upgrade_version = sprintf($LNG['upgrade_version'], '5.0.x');

  $TMPL['content'] = <<<EndHTML
{$LNG['upgrade_welcome']}<br /><br />
{$upgrade_version}<br /><br />
<form action="upgrade-5.0.x.php" method="post">
<input name="l" type="hidden" value="{$FORM['l']}" />
<input name="submit" type="submit" value="{$LNG['upgrade_header']}" />
</form>
EndHTML;
}
else {
  require_once("{$CONF['path']}/languages/{$FORM['l']}.php");

  require_once("{$CONF['path']}/settings_sql.php");
  require_once("{$CONF['path']}/sources/sql/{$CONF['sql']}.php");
  $DB = new sql;

  if ($DB->connect($CONF['sql_host'], $CONF['sql_username'], $CONF['sql_password'], $CONF['sql_database'])) {
    $default_language = $DB->escape($FORM['l']);

    $DB->query("CREATE TABLE `{$CONF['sql_prefix']}_bad_words` (
                  `id` int(10) unsigned,
                  `word` varchar(255),
                  `replacement` varchar(255),
                  `matching` tinyint(1),
                  PRIMARY KEY  (`id`)
                )", __FILE__, __LINE__);

    $DB->query("CREATE TABLE `{$CONF['sql_prefix']}_custom_pages` (
                  `id` varchar(255) default '',
                  `title` varchar(255) default '',
                  `content` text,
                  PRIMARY KEY  (`id`)
                )", __FILE__, __LINE__);

    $DB->query("ALTER TABLE {$CONF['sql_prefix']}_ip_log DROP INDEX ip_address", __FILE__, __LINE__);
    $DB->query("ALTER TABLE {$CONF['sql_prefix']}_ip_log DROP INDEX username", __FILE__, __LINE__);
    $DB->query("ALTER TABLE {$CONF['sql_prefix']}_ip_log ADD PRIMARY KEY (ip_address, username)", __FILE__, __LINE__);
    $DB->query("ALTER TABLE {$CONF['sql_prefix']}_sites ADD openid tinyint(1) default 0", __FILE__, __LINE__);
    $DB->query("ALTER TABLE {$CONF['sql_prefix']}_settings ADD email_admin_on_review tinyint(1) default 0 AFTER email_admin_on_join", __FILE__, __LINE__);
    $DB->query("ALTER TABLE {$CONF['sql_prefix']}_settings ADD google_friendly_links tinyint(1) default 1 AFTER button_num", __FILE__, __LINE__);

    list($TMPL['list_url'] = $DB->fetch("SELECT list_url FROM {$CONF['sql_prefix']}_settings", __FILE__, __LINE__);

    $TMPL['content'] = <<<EndHTML
{$LNG['upgrade_done']}<br /><br />
<a href="{$TMPL['list_url']}/">{$LNG['install_your']}</a><br />
<a href="{$TMPL['list_url']}/index.php?a=admin">{$LNG['install_admin']}</a><br />
<a href="http://www.aardvarktopsitesphp.com/manual/">{$LNG['install_manual']}</a><br />
EndHTML;
  }
  else {
    $TMPL['content'] = "<h3>{$LNG['g_error']}</h3><br />{$LNG['install_error_sql']}";
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Aardvark Topsites PHP 5 - <?php echo $LNG['upgrade_header']; ?></title>
<link rel="stylesheet" type="text/css" media="screen" href="../skins/fusion/screen.css" />
</head>
<body>

<div id="wrapper">
	<div id="header"><img src="../skins/fusion/header.jpg" width="700" height="65" alt="{$list_name}" /></div><br />
	<div id="content"><?php echo $TMPL['content']; ?><br /></div>
</div>
</body>
</html>