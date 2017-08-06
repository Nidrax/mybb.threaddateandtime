<?php
// Disallow direct access to this file for security reasons
if(!defined("IN_MYBB"))
{
	die("Direct initialization of this file is not allowed.");
}

$plugins->add_hook('forumdisplay_thread', 'getDateTime');

function threadDateTime_info()
{
	return array(
		"name"			=> "Thread date and time on forumdisplay",
		"description"	=> "Simple plugin that adds the thread creation date and time variables to the forumdisplay_thread template.",
		"website"		=> "",
		"author"		=> "Nidrax",
		"authorsite"	=> "http://nidrax.eu",
		"version"		=> "1.0",
		"guid" 			=> "",
		"codename"		=> "threadDateTime",
		"compatibility" => "18*"
	);
}

function threadDateTime_activate(){}

function threadDateTime_deactivate(){}

function getDateTime()
{
  global $mybb, $thread;
  $thread['creationdate'] = my_date($mybb->settings['dateformat'], $thread['dateline']);
  $thread['creationtime'] = my_date($mybb->settings['timeformat'], $thread['dateline']);
}
