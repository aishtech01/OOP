<?php

      Interface hewan {
            public function setNama($nama);
            public function setMakan($makan);
            public function setReproduksi($reproduksi);
      }

class Ampibi Implements hewan {
      public $nama;
      public $makan;
      public $reproduksi;
      public function setNama($nama){
            $this->nama=$nama;
      }
      public function setMakan($makan){
            $this->makan=$makan;
      }
      public function setReproduksi($reproduksi){
            $this->reproduksi=$reproduksi;
      }

      public function getNama()
      {
            return $this->nama;
      }
      public function getMakan()
      {
            return $this->makan;
      }
      public function getReproduksi()
      {
            return $this->reproduksi;
      }
}
class Reptil Implements hewan {
      public $nama;
      public $makan;
      public $reproduksi;
      public function setNama($nama){
            $this->nama=$nama;
      }
      public function setMakan($makan){
            $this->makan=$makan;
      }
      public function setReproduksi($reproduksi){
            $this->reproduksi=$reproduksi;
      }

      public function getNama()
      {
            return $this->nama;
      }
      public function getMakan()
      {
            return $this->makan;
      }
      public function getReproduksi()
      {
            return $this->reproduksi;
      }
}
class Mamalia Implements hewan {
      public $nama;
      public $makan;
      public $reproduksi;
      public function setNama($nama){
            $this->nama=$nama;
      }
      public function setMakan($makan){
            $this->makan=$makan;
      }
      public function setReproduksi($reproduksi){
            $this->reproduksi=$reproduksi;
      }

      public function getNama()
      {
            return $this->nama;
      }
      public function getMakan()
      {
            return $this->makan;
      }
      public function getReproduksi()
      {
            return $this->reproduksi;
      }
}