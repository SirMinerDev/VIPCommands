<?php

namespace SirMiner;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as TF;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\Player;
use pocketmine\Server;

class Main extends PluginBase implements Listener{

  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getServer()->getLogger()->notice(TF::AQUA . "VIPCommands Enabled!");
  }
  
public function onCommand(CommandSender $sender,Command $cmd,$label,array $args){
      		switch (strtolower($cmd->getName())) {
				case "fly":
				if (isset($args[0]) && strtolower($args[0]) == "on") {
                  if($sender->hasPermission("vip.fly")) {
                            $sender->sendMessage(TF::GREEN ."You can now fly!");
                            $sender->setAllowFlight(TRUE);
                }
                }
                if (isset($args[0]) && strtolower($args[0]) == "off") {
                  if($sender->hasPermission("vip.fly")) {
                            $sender->sendMessage(TF::RED . "You disabled fly!");
                            $sender->setAllowFlight(FALSE);
                }
                }
				break;
				case "gms":
                if ($sender->hasPermission("vip.gamemodes")) {
                    $sender->sendMessage("§cSwitched gamemode to survival mode");
                    $sender->setGamemode(0);
                }
                break;
            case "gmc":
                if ($sender->hasPermission("vip.gamemodes")) {
                    $sender->sendMessage("§aSwitched gamemode to creative mode");
                    $sender->setGamemode(1);
                }
                break;
   }
   }
 }