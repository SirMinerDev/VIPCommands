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
    $this->getServer()->getLogger()->notice(TF::AQUA . "EnchantPlus Enabled!");
  }
  
public function onCommand(CommandSender $sender,Command $cmd,$label,array $args){
      		switch (strtolower($cmd->getName())) {
				case "fly":
				break;
   }
   }
 }