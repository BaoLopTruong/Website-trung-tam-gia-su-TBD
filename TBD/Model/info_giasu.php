<?php

    class giasu{
        private $ID;
        private $CMND;
        private $hoten;
        private $ngaysinh;
        private $sdt;
        private $email;
        private $quequan;   
        private $trinhdo;
        private $mota;    
      

        public function giasu($ID, $CMND, $hoten, $ngaysinh, $sdt, $email, $quequan, $trinhdo, $mota){
            $this->ID = $ID;
            $this->CMND = $CMND;
            $this->hoten = $hoten;
            $this->ngaysinh = $ngaysinh;
            $this->sdt = $sdt;
            $this->email = $email;
            $this->quequan = $quequan;
            $this->trinhdo = $trinhdo;
            $this->mota = $mota;
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
        public function gettrinhdo(){
            return $this->trinhdo;
        }
        public function getmota(){
            return $this->mota;
        }
        



        public function getJson(){
            return [
                'ID'   =>$this->ID,
                'CMND' =>$this->CMND,
                'hoten' =>$this->hoten,
                'ngaysinh' =>$this->ngaysinh,
                'sdt' =>$this->sdt,
                'email' =>$this->email,
                'quequan' =>$this->quequan,
                'trinhdo' =>$this->trinhdo,
                'mota' =>$this->mota
            ];
        }

    }

?>