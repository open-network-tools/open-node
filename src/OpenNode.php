<?php
    namespace OpenNetworkTools;

    use OpenNetworkTools\Interfaces\OpenNodeInterface;

    class OpenNode implements OpenNodeInterface {

        private $openConfig;
        private $openRunning;

        public function __construct() {
            $this->openConfig = new OpenConfig();
            $this->openRunning = new OpenRunning();
        }

        public function analyseConfigFile(){
        }

        public function getOpenConfig() {
            return $this->openConfig;
        }

        public function setOpenConfig() {
            // TODO: Implement setOpenConfig() method.
        }

        public function getOpenRunning() {
            return $this->openRunning;
        }

        public function setOpenRunning() {
            // TODO: Implement setOpenRunning() method.
        }

    }