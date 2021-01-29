<?php

    class monhoc{
        private $ID_MH;
        private $ten_mh;
       
      

        public function monhoc($ID_MH, $ten_mh){
            $this->ID_MH = $ID_MH;
            $this->ten_mh   = $ten_mh;
           
          
    
        }

        public function getID_MH(){
            return $this->ID_MH;
        }
        public function getten_mh(){
            return $this->ten_mh;
        }


        



        public function getJson(){
            return [
                'ID_MH' =>$this->ID_MH,
                'ten_mh'   =>$this->ten_mh,
        
       
            ];
        }

    }

?>