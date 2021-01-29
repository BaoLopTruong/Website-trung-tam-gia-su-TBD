<?php

    class lichhoc{
        private $ID_KH;
        private $buoihoc;
        private $ngayhoc;
       
      

        public function lichhoc($ID_KH, $buoihoc, $ngayhoc){
            $this->ID_KH = $ID_KH;
            $this->buoihoc   = $buoihoc;
            $this->ngayhoc = $ngayhoc;
           
          
    
        }

        public function getID_KH(){
            return $this->ID_KH;
        }
        public function getbuoihoc(){
            return $this->buoihoc;
        }
        public function getngayhoc(){
            return $this->ngayhoc;
        }


        



        public function getJson(){
            return [
                'ID_KH' =>$this->ID_KH,
                'buoihoc'   =>$this->buoihoc,
                'ngayhoc' =>$this->ngayhoc
       
            ];
        }

    }

?>