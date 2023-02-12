<?php
    namespace OpenNetworkTools\OpenNode;

    use OpenNetworkTools\OpenNode;

    class Reader {

        private $configFile;
        private $configReport = [];
        private $openNode;

        public function __construct(OpenNode $openNode){
            $this->openNode = $openNode;
        }

        public function analyseConfigFile(){
            $this->openNode->analyseConfigFile($this->configFile);
        }

        public function getConfigFile(){
            return $this->configFile;
        }

        public function loadConfigFile($filename, $ignoreComment = false, $ignoreSymbole = [""]){
            try {
                $fh = fopen($filename, "r");
                if(!$fh) throw new \Exception();
                while(!feof($fh)){
                    $line = fgets($fh, 2048);
                    if($ignoreComment == true && @in_array($line[0], $ignoreSymbole));
                    else $this->configFile[] = $line;
                }
            } catch (\Exception $e){
                throw new \Exception();
            }
        }

        public function addConfigReport($k){
            $this->configReport[$k] = true;
        }

        public function getConfigReport(){
            return $this->configReport;
        }

        public function printConfigReport($lineStart = null, $lineEnd = null){
            foreach ($this->configFile as $k => $v){
                $check = "\e[31m✕";
                if(!is_null($lineStart) && !is_null($lineEnd)){
                    if($k+1 >= $lineStart && $k+1 <= $lineEnd){
                        if(array_key_exists($k, $this->configReport)) $check = "\e[32m✓";
                        echo " ".$check."\e[96m  | \e[39m".$v;
                    }
                } else {
                    if(array_key_exists($k, $this->configReport)) $check = "\e[32m✓";
                    echo " ".$check."\e[96m  | \e[39m".$v;
                }
            }
        }

        public function getOpenNode(){
            return $this->openNode;
        }

    }