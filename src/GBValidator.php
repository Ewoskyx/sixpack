<?php

namespace Ewoskyx\Sixpack;

class GBValidator
{
    public function __construct()
    {
    }

    /**
     * Ad,Soyad,Kullanıcı Adı, Ürün adı v.b alanlar
     * min:2 - max:50 karakter olabilir.
     * varsayılan : Zorunlu
     * @return {string}
     */
    public function basicStringInput()
    {
        return 'required|min:2|max:50';
    }

    /**
     * Şifre, parola alanı
     * min:6 - max:100 karakter olabilir.
     * varsayılan : Zorunlu
     * @return {string}
     */
    public function passwordInput()
    {
        return 'required|min:6|max:100';
    }

     /**
     * Açıklama v.b küçük text area alanları
     * min:30 - max:500 karakter olabilir.
     * @return {string}
     */
    public function textAreaInput()
    {
        return 'min:30|max:500';
    }
   
    /**
     * Mesaj, yorum v.b büyük text area alanları
     * min:30 - max:1000 karakter olabilir.
     * @return {string}
     */
    public function textAreaBigInput()
    {
        return 'min:30|max:1000';
    }
    
    /**
     * Email alanı
     * min:10 - max:100 karakter olabilir.
     * varsayılan : Zorunlu
     * Unique
     * @var $table, db tablo 
     * @return {string}
     */
    public function emailInput(string $table)
    {
        return 'required|unique:'.$table.'|email:rfc,dns|min:10|max:100';
    }
    
    /**
     * Adres text area alanı
     * min:20 - max:255 karakter olabilir.
     * @return {string}
     */
    public function addressInput()
    {
        return 'min:20|max:255';
    }
    
    /**
     * TC numarası alanı
     * min:11 - max:11 karakter olabilir.
     * varsayılan : Zorunlu
     * @return {string}
     */
    public function tcNoInput()
    {
        return 'required|min:11|max:11';
    }
   
    /**
     * Ünvan v.b kısaltma alanları
     * Örn: Bay, Bayan, Dr, Prof.
     * min:3 - max:10 karakter olabilir.
     * varsayılan : Zorunlu
     * @return {string}
     */
    public function titleInput()
    {
        return 'min:3|max:10';
    }
    
    /**
     * Basit tarih alanı tipi, Date olmalıdır.
     * @return {string}
     */
    public function basicDateInput()
    {
        return 'date';
    }
    
    /**
     * Video alanı dosya tipleri avi, mpeg, quicktime.
     * @return {string}
     */
    public function videoInput()
    {
        return 'mimetypes:video/avi,video/mpeg,video/quicktime';
    }
   
    /**
     * Basit görsel alanı.
     * jpeg, jpg, bmp, png
     * Max 2MB
     * @return {string}
     */
    public function imgInput()
    {
        return 'mimes:jpg,jpeg,bmp,png|max:2048';
    }
  
    /**
     * Büyük görsel alanı.
     * jpeg, jpg, bmp, png
     * Max 10MB
     * @return {string}
     */
    public function imgBigInput()
    {
        return 'mimes:jpg,jpeg,bmp,png|max:10240';
    }

    
}
