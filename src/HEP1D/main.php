<?php
namespace HEP1D;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat as c;
class Main extends PluginBase{
 public function onEnable(){
   $this->getLogger()->notice(c::BOLD.DARK_PURPLE."(!)".c::RESET.c::DARK_AQUA."has been enabled");
    }
   public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
  if(strtolower($cmd->getNameq()) == "youtube"}{
  if($sender->HasPermission("yt")){
  $sender->sendMessage(c::BOLD.c::DARK_PURPLE."(!)".c::DARK_AQUA."you have been heald");
  $sender->setHealth(20.0);
   }elself($sender->HasPermission("yt")){
       $sender->sendMessage(c::BOLD.c::DARK_RED."(!)".c::RESET.c::RED."invald permission");
       }
      }
     }
    
    public function onDisable(){
     $this->getLogger()->warning(c::BOLD.c::DARK_RED."(!)".c::RESET.c::RED."plugin has been disabled");
     }
    }
