<?php

namespace gamemode;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use pocketmine\Player;

class Main extends Pluginbase{

public function onEnable() {
$this->getLogger()->info(TextFormat:: RED."Gamemode ist nun aktiviert!");
}

public function onDisable() {
$this->getLogger()->info(TextFormat::RED."Gamemode ist nun deaktiviert!");
}

public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{

switch($cmd->getName()){

case "gm1":
if($sender instanceof Player){
if($sender->hasPermission("gm1.cmd")){
$sender->setGamemode(1);
$sender->sendMessage("Du bist nun in §bGamemode 1");
}else{
$sender->sendMessage("§cSry du hast keine rechte");
}
}
break;

case "gm0":
if($sender instanceof Player){
if($sender->hasPermission("gm0.cmd")){
$sender->setGamemode(0);
$sender->sendMessage("Du bist nun in §bGamemode 0");
}else{
$sender->sendMessage("§cSry du hast keine rechte");
}
}
break;

case "gm2":
if($sender instanceof Player){
if($sender->hasPermission("gm2.cmd")){
$sender->setGamemode(2);
$sender->sendMessage("Du bist nun in §bGamemode 2");
}else{
$sender->sendMessage("§cSry du hast keine rechte");
}
}
break;

case "gm3":
if($sender instanceof Player){
if($sender->hasPermission("gm3.cmd")){
$sender->setGamemode(3);
$sender->sendMessage("Du bist nun in §bGamemode 3");
}else{
$sender->sendMessage("§cSry du hast keine rechte");
}
}
break;
}
return true;
}
}


