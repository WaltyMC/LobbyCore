<?php

namespace WaltyMC\LobbyCore;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\{Config, TextFormat as TE};
use pocketmine\event\player\PlayerJoinEvent;

class Core extends PluginBase implements Listener {
  
  public function onEnable(){
    @mkdir($this->getDataFolder());
    $config = new Config($this->getDataFolder()."config.yml", Config::YAML);
    $config->save();
    $this->getLogger()->info("Plugin Enable!");
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onJoin(PlayerJoinEvent $event){
    $player = $event->getPlayer();
    $config = new Config($this->getDataFolder()."config.yml", Config::YAML);
    $event->setJoinMessage(str_replace("{player}", $player->getName(), $config->get("join-message"));
  }


}
