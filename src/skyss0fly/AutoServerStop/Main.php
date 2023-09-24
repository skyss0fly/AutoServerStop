<?php

namespace skyss0fly\AutoServerStop;

use pocketmine\plugin\PluginBase;


class Main extends PluginBase {

public function onLoad(): void {

  $this->saveDefaultConfig();

  $this->sleep($this->getConfig()->get("TimeForReboot")*60);
  $this->getServer()->stopServer();

}

}
