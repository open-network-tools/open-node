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

        public function getOpenConfig() {
            // TODO: Implement getOpenConfig() method.
        }

        public function setOpenConfig() {
            // TODO: Implement setOpenConfig() method.
        }

        public function getOpenRunning() {
            // TODO: Implement getOpenRunning() method.
        }

        public function setOpenRunning() {
            // TODO: Implement setOpenRunning() method.
        }

    }