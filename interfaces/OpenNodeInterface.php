<?php
    namespace OpenNetworkTools\Interfaces;

    interface OpenNodeInterface {

        public function __construct();

        public function getOpenConfig();
        public function setOpenConfig();

        public function getOpenRunning();
        public function setOpenRunning();

    }