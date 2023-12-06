<?php
    namespace OpenNetworkTools;

    use OpenNetworkTools\OpenManufacturer\OpenReader;
    use OpenNetworkTools\OpenManufacturer\OpenWriter;

    class OpenManufacturer {

        public $openReader;
        public $openWriter;

        public function __construct(){
            $this->openReader = new OpenReader();
            $this->openWriter = new OpenWriter();
        }

        public function getOpenReader(): OpenReader {
            return $this->openReader;
        }

        public function setOpenReader(OpenReader $openReader): self {
            $this->openReader = $openReader;
            return $this;
        }

        public function getOpenWriter(): OpenWriter {
            return $this->openWriter;
        }

        public function setOpenWriter(OpenWriter $openWriter): self {
            $this->openWriter = $openWriter;
            return $this;
        }

    }