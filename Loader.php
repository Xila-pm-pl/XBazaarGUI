<?php

namespace Xila\Bazaar;

use pocketmine\plugin\PluginBase;
// use muqsit\invmenu\InvMenuHandler;
class Loader extends PluginBase{

    /** code piece, so the Loader Class can be called from Outsides
        To Be honest i would have called this class Main.php instead of Loader.php
     */
    public static self $instance;

    public static function getInstance(): Loader
    {
        return self::$instance;
    }
    public function onLoad(): void
    {
        self::$instance = $this;
    }



    public function onEnable(): void{
        /** register EventListener */
        $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
        /** register InvMenu for later, rn i would add it as comment
         * if(!InvMenuHandler::isRegistered()){
         *   InvMenuHandler::register($this);
         * }
         */
        /** how to register commands
        $this->getServer()->getCommandMap()->registerAll('Commands', [
            new exampleCommand1("exampleCommand1", "this runs the exampleCommand1", "/exampleCommand1", array("Alias1", "Alias2")),
            new exampleCommand2("exampleCommand2", "this runs exampleCommand2", "/exampleCommand2", array("Alias3")),
        ]);
         */
    }
}