<?php
    namespace OpenNetworkTools;

    use Symfony\Component\Yaml\Yaml;

    class OpenNode {

        public $openConfig;
        public $openManufacturer;

        public function __construct(){
            $this->openConfig = new OpenConfig();
            $this->openManufacturer = new OpenManufacturer();
        }

        public function getOpenConfig(){
            return $this->openConfig;
        }

        public function setOpenConfig(OpenConfig $openConfig){
            $this->openConfig = $openConfig;
            return $this;
        }

        public function getOpenManufacturer(): OpenManufacturer {
            return $this->openManufacturer;
        }

        public function setOpenManufacturer(OpenManufacturer $openManufacturer): self {
            $this->openManufacturer = $openManufacturer;
            return $this;
        }

    }