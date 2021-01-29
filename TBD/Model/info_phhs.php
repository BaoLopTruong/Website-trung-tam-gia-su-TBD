<?php

    class phhs{
        private $ID;
        private $CMND;
        private $hoten;
        private $ngaysinh;
        private $sdt;
        private $email;
        private $quequan;       
      

        public function phhs($ID, $CMND, $hoten, $ngaysinh, $sdt, $email, $quequan){
            $this->ID = $ID;
            $this->CMND = $CMND;
            $this->hoten = $hoten;
            $this->ngaysinh = $ngaysinh;
            $this->sdt = $sdt;
            $this->email = $email;
            $this->quequan = $quequan;
    
        }

   
        public function getID(){
            return $this->ID;
        }
        public function getCMND(){
            return $this->CMND;
        }
        public function gethoten(){
            return $this->hoten;
        }
        public function getngaysinh(){
            return $this->ngaysinh;
        }
        public function getsdt(){
            return $this->sdt;
        }
        public function getemail(){
            return $this->email;
        }
        public function getquequan(){
            return $this->quequan;
        }
        



        public function getJson(){
            return [
                'ID'   =>$this->ID,
                'CMND' =>$this->CMND,
                'hoten' =>$this->hoten,
                'ngaysinh' =>$this->ngaysinh,
                'sdt' =>$this->sdt,
                'email' =>$this->email,
                'quequan' =>$this->quequan
            ];
        }

    }

?>