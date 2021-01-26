<?php

    class dulieukhoahoc{
        private $ID_KH;
        private $ID;
        private $ID_LH;
        private $ID_MH;
   
      

        public function dulieukhoahoc($ID_KH, $ID, $ID_LH, $ID_MH){
            $this->ID_KH = $ID_KH;
            $this->ID = $ID;
            $this->ID_LH = $ID_LH;
            $this->ID_MH = $ID_MH;
       
          
    
        }

        public function getID_KH(){
            return $this->ID_KH;
        }
        public function getID(){
            return $this->ID;
        }
        public function getID_LH(){
            return $this->ID_LH;
        }
        public function getID_MH(){
            return $this->ID_MH;
        }


        



        public function getJson(){
            return [
                'ID_KH' =>$this->ID_KH,
                'ID'   =>$this->ID,
                'ID_LH' =>$this->ID_LH,
                'ID_MH' =>$this->ID_MH,

            ];
        }

    }

?>