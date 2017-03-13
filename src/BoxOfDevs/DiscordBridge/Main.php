<?php

namespace BoxOfDevs\DiscordBridge;

use pocketmine\plugin\PluginBase;
use pocketmine\Listener;
use pocketmine\event\player\PlayerChatEvent;

class Main extends PluginBase implements Listener{
  public function onEnable() {
    bot.connect();
}
