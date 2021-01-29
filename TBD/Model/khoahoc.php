<?php

    class khoahoc{
        private $ID_KH;
        private $ID;
        private $ten_kh;
        private $time_bd;
        private $time_kt;
        private $hocphi;       
      

        public function khoahoc($ID_KH, $ID, $ten_kh, $time_bd, $time_kt, $hocphi){
            $this->ID_KH = $ID_KH;
            $this->ID = $ID;
            $this->ten_kh = $ten_kh;
            $this->time_bd = $time_bd;
            $this->time_kt = $time_kt;
            $this->hocphi = $hocphi;
          
    
        }

        public function getID_KH(){
            return $this->ID_KH;
        }
        public function getID(){
            return $this->ID;
        }
        public function getten_kh(){
            return $this->ten_kh;
        }
        public function gettime_bd(){
            return $this->time_bd;
        }
        public function gettime_kt(){
            return $this->time_kt;
        }
        public function gethocphi(){
            return $this->hocphi;
        }


        



        public function getJson(){
            return [
                'ID_KH' =>$this->ID_KH,
                'ID'   =>$this->ID,
                'ten_kh' =>$this->ten_kh,
                'time_bd' =>$this->time_bd,
                'time_kt' =>$this->time_kt,
                'hocphi' =>$this->hocphi,
            ];
        }

    }

?>