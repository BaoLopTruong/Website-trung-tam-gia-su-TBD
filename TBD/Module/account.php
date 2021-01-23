<?php

    class account{
        private $ID;
        private $username;
        private $password;
        private $maloai;
   
      

        public function account($ID, $username, $password, $maloai){
            $this->ID = $ID;
            $this->username = $username;
            $this->password = $password;
            $this->maloai = $maloai;
       
          
    
        }

        public function getID(){
            return $this->ID;
        }
        public function getusername(){
            return $this->username;
        }
        public function getpassword(){
            return $this->password;
        }
        public function getmaloai(){
            return $this->maloai;
        }


        



        public function getJson(){
            return [
                'ID' =>$this->ID,
                'username'   =>$this->username,
                'password' =>$this->password,
                'maloai' =>$this->maloai

            ];
        }

    }

?>