<?php

namespace WaltyMC\LobbyCore;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\{Config, TextFormat as TE};
use pocketmine\event\player\PlayerJoinEvent;

class Core extends PluginBase implements Listener {
  
  public function onEnable(){
    @mkdir($this->getDataFolder());
    $this->getLogger()->info("Plugin Enable!");
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onJoin(PlayerJoinEvent $event){
    $player = $event->getPlayer();
    $config = new Config($this->getDataFolder()."config.yml", Config::YAML);
  }


}
