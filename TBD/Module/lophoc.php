<?php

    class lophoc{
        private $ID_LH;
        private $ten_lh;
       
      

        public function lophoc($ID_LH, $ten_lh){
            $this->ID_LH = $ID_LH;
            $this->ten_lh   = $ten_lh;
           
          
    
        }

        public function getID_LH(){
            return $this->ID_LH;
        }
        public function getten_lh(){
            return $this->ten_lh;
        }


        



        public function getJson(){
            return [
                'ID_LH' =>$this->ID_LH,
                'ten_lh'   =>$this->ten_lh,
        
       
            ];
        }

    }

?>