<?php 

namespace ewoskyx\sixpack\Fields\Contracts;

interface IBaseValidator {
     /**
     * Ad,Soyad,Şehir,Ülke,Bölge,Kıta,Ürün vs gibi alanlar
     * min:2 - max:50 karakter olabilir.
     * @return {string}
     */
    public function basic_form_string_input():string;
}