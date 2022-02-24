<?php

namespace BhawaniSingh;

use onebone\economyapi\EconomyAPI;
use jojoe77777\FormAPI\SimpleForm;
use jojoe77777\FormAPI\CustomForm;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\Config;
use pocketmine\scheduler\ClosureTask;
use pocketmine\Server;
use pocketmine\math\Vector3;

class Hub extends PluginBase implements Listener {
  
  public function onEnable() : void {
    
        $this->getLogger()->info("AdvancedHubTP By BhawaniSingh Is Now Enabled ✅");
        
  }
  
public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{
        switch($command->getName()){
            case "hub":
              if($sender->hasPermission("hub.command")){
                $sender->teleport($this->getServer()->getWorldManager()->getDefaultWorld()->getSafeSpawn());
                $sender->sendMessage("§l§aSuccess! §r§7You Have Been Teleported To Hub");
              } else {
                $sender->sendMessage("You Don't Have Permission To Use This Command");
              }
        }
        return true;
   }
}