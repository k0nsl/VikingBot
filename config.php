<?php

$config = array(
	'server'	=>	'irc.k0nsl.org',		//Server name, prefix it with "ssl://" in order to use SSL server
	'port'		=>	6697,			//Server port
	'channel'	=>	'#k0nsl',		//Channel to join, use array('channel1', 'channel2') for multiple channels
	'name'		=>	'Jochem',		//Name of the bot
	'nick'		=>	'jochem',		//Nick of the bot
	'pass'		=>	'',			//Server password
	'waitTime'	=>	10,			//How many seconds to wait before joining channel after connecting to server
	'adminPass'	=>	'test',		//Bot admin password, used for commands like !exit (!exit vikingbot)
	'memoryLimit'	=>	'100',			//Max memory the bot can use, in MB
        'memoryRestart' =>      '10',                   //Min memory usage, in MB. (The bot will try to clear RAM or restart if reached)
	'trigger'	=>	'!',			//What character should be used as bot command prefixes
	'maxPerTenMin'	=>	50			//Max messgages a user can send per 10 minutes before beeing ignored for that time
);

//=====================================
//Plugin specific configuration
//=====================================

//RSS Reader
$config['plugins']['rssReader'] = array(
        array('title'=> 'k0nsl',           'url'=>'http://k0nsl.org/blog/rss',    'pollInterval'=>15,     'channel'=>'#k0nsl'),
        array('title'=> 'quotes',     'url'=>'http://quotes.k0nsl.org/rss',          'pollInterval'=>20,     'channel'=>'#k0nsl'),
        array('title'=> 'DZ',          'url'=>'destroyzionism.com/rss',            'pollInterval'=>15,     'channel'=>'#k0nsl'),
);

//File reader
$config['plugins']['fileReader'] = array(
        'channel'       => '#k0nsl',
);