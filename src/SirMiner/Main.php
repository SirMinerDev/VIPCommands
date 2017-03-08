<?php namespace SirMiner;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class Main extends PluginBase{

	public function onEnable(){
		$this->getServer()->getLogger()->info(TextFormat::AQUA . "VIPCommands Enabled!");
	}
  
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		switch(strtolower($cmd->getName())){
			case "fly":
				if(!$sender->hasPermission("vip.fly")){
					$sender->sendMessage(TextFormat::RED."You do not have permission to use this command");
					return;
				}
				if(!isset($args[0])){
					$sender->sendMessage(TextFormat::RED."Usage: /fly <on:off>");
					return;
				}
				switch(strtolower($args[0])){
					case "on":
						$sender->sendMessage(TextFormat::GREEN."You can now fly!");
						$sender->setAllowFlight(true);
					break;
					case "off":
						$sender->sendMessage(TextFormat::RED."You disabled fly!");
						$sender->setAllowFlight(false);
					break;
					default:
						$sender->sendMessage(TextFormat::RED."Usage: /fly <on:off>");
					break;
				}
			break;
			case "gms":
				if(!$sender->hasPermission("vip.gamemodes")){
					$sender->sendMessage(TextFormat::RED."You do not have permission to use this command");
					return;
				}
				$sender->sendMessage(TextFormat::GREEN."Switched gamemode to survival mode");
				$sender->setGamemode(0);
			break;
			case "gmc":
				if(!$sender->hasPermission("vip.gamemodes")){
					$sender->sendMessage(TextFormat::RED."You do not have permission to use this command");
					return;
				}
				$sender->sendMessage(TextFormat::GREEN."§aSwitched gamemode to creative mode");
				$sender->setGamemode(1);
			break;
		}
	}
 }
