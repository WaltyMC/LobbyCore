<?php

namespace WaltyMC\LobbyCore;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\{Config, TextFormat as TE};
use pocketmine\event\player\PlayerJoinEvent;

class Core extends PluginBase implements Listener {
  
  public function onEnable(){
    $this->getLogger()->info("Plugin Enable!");
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }


}
