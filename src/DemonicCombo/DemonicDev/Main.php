<?php 
namespace DemonicCombo\DemonicDev; 

use pocketmine\plugin\PluginBase; 
use pocketmine\player\Player; 
use pocketmine\Server; 
use pocketmine\entity\Entity; 
use pocketmine\event\entity\EntityDamageByEntityEvent; 
use pocketmine\event\Listener; 
use pocketmine\utils\TextFormat as tf; 

class Main extends PluginBase implements Listener{
	
	public function onEnable() : void{ 
		$this->getServer()->getLogger()->info(tf::WHITE. "[" .tf::DARK_RED. "Demonic" .tf::AQUA. "Combo" .tf::WHITE. "]" .tf::GREEN. " ENABLED"); 
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	} 
	
	public function combo(EntityDamageByEntityEvent $ev){
		$player = $ev->getEntity(); 
		if($player instanceof Player){ 
			$attacker = $ev->getDamager(); 
			if($attacker instanceof Player){ 
				if($ev->getCause() == 1){ 
					$player->addMotion(0, 1, 0); 
				}
			}
		}
	}
}