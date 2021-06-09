<?php
namespace User\Client;

/**
 * 
 */
class Client
{
	
	function __construct()
	{
		echo 'start' . PHP_EOL;
	}

	public function run()
	{
		echo 'exec run function!';
	}
}

(new Client())->run();