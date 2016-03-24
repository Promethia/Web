<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class QueryHeartbeat extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'heartbeat:query';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Queries & records server and Mojang API for status.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$mcquery = new MinecraftServerStatus();
		$heartbeat = new AdminHeartbeat();

		$mcstatus = $mcquery->getStatus($_ENV['SERVER_ADDR']);
		if($mcstatus) {
			$server = 'green';
			$players = $mcstatus['players'];
		} else {
			$server = 'red';
			$players = 0;
		}

		$apiUrl = "https://status.mojang.com/check";
		$apiFile = @file_get_contents($apiUrl);
		if($apiFile) {
			$apiData = json_decode($apiFile, true);
			$mojang_api = $apiData[7]['api.mojang.com'];
			$mojang_login = $apiData[5]['authserver.mojang.com'];
			$mojang_session = $apiData[6]['sessionserver.mojang.com'];
			$mojang_skin = $apiData[8]['textures.minecraft.net'];
		} else {
			$mojang_api = 'red';
			$mojang_login = 'red';
			$mojang_session = 'red';
			$mojang_skin = 'red';
		}

		$heartbeat->server = $server;
		$heartbeat->players = $players;
		$heartbeat->mojang_api = $mojang_api;
		$heartbeat->mojang_login = $mojang_login;
		$heartbeat->mojang_session = $mojang_session;
		$heartbeat->mojang_skin = $mojang_skin;
		$heartbeat->save();
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array();
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array();
	}

}
