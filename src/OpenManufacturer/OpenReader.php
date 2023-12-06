<?php

    namespace OpenNetworkTools\OpenManufacturer;

    use OpenNetworkTools\OpenConfig;

    class OpenReader {

        private $configFile = [];
        private $configFileReport = [];

        public function analyseConfigFile(OpenConfig $openConfig){
            foreach ($this->configFile as $file => $c){
                foreach ($c as $k => $v){
                    $this->analyseConfigSystem($openConfig, $file, $k, $v);
                }
            }
        }

        public function loadConfigFile($filename, $ignoreComment = false, $ignoreSymbole = [""]){
            try {
                $fh = fopen($filename, "r");
                if(!$fh) throw new \Exception("Error with open file ". $filename);
                while (!feof($fh)){
                    $line = fgets($fh, 2048);
                    if($ignoreComment == true && @in_array($line[0], $ignoreSymbole));
                    else $this->configFile[$filename][] = $line;
                }
            } catch (\Exception $e){
                throw new \Exception($e);
            }
        }

        private function analyseConfigSystem(OpenConfig $openConfig, $filename, $key, $line){
            if(preg_match("#^set system hostname \"(.*)\"#", $line, $match)){
                $openConfig->getSystem()->setHostname($match[1]);
                $this->configFileReport[$filename][$key] = true;
            } elseif(preg_match("#^set system domain-name \"(.*)\"#", $line, $match)){
                $openConfig->getSystem()->setDomainName($match[1]);
                $this->configFileReport[$filename][$key] = true;
            } elseif(preg_match("#^set system nameserver (.*)#", $line, $match)){
                $openConfig->getSystem()->addNameServer($match[1]);
                $this->configFileReport[$filename][$key] = true;
            }
        }

    }