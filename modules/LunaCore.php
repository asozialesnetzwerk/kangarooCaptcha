<?php

class LunaCore {

    /**
     * load essential files
     */
    public function loadEssentials() {
        require_once('core/Routes.php');
    }

    /**
     * load modules from modules folder.
     * Add new modules with require_once
     */
    public function loadModules() {
        // Database Engine
        require_once('config/Database.php');
        // Analytics Engine
        require_once('config/Analytics.php');
    }



}