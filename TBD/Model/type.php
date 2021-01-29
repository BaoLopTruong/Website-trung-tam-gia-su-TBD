<?php

    class type{
        private $maloai;
        private $tenloai;
       
      

        public function type($maloai, $tenloai){
            $this->maloai = $maloai;
            $this->tenloai   = $tenloai;
           
          
    
        }

        public function getmaloai(){
            return $this->mamaloai;
        }
        public function gettenloai(){
            return $this->tenloai;
        }


        



        public function getJson(){
            return [
                'maloai' =>$this->maloai,
                'tenloai'   =>$this->tenloai,
        
       
            ];
        }

    }

?>