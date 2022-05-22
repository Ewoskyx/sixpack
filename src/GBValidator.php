<?php 

namespace ewoskyx\sixpack\src;

class GBValidator {

    private $control;

    public function __construct()
    {
        $this->control = '';
    }

     /**
     * Ad,Soyad,Şehir,Ülke,Bölge,Kıta,Ürün vs gibi alanlar
     * min:2 - max:50 karakter olabilir.
     * @return {string}
     */
    public function basicInputString()
    {
        $this->result = 'required|min:2|max:50';
        return $this;
    }
}