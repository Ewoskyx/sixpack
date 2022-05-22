<?php 

namespace Ewoskyx\Sixpack;

class GBValidator {

   

    public function __construct()
    {
        
    }

     /**
     * Ad,Soyad,Şehir,Ülke,Bölge,Kıta,Ürün vs gibi alanlar
     * min:2 - max:50 karakter olabilir.
     * @return {string}
     */
    public function basicInputString()
    {
        return 'required|min:2|max:50';
    }
}