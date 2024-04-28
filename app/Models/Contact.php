<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Mail\ContactFormMail;
use Mail;


class Contact extends Model
{
    use HasFactory;

    public $fillable = ['name', 'email', 'phone', 'message'];



    // public static function boot(){
    //     parent::boot();
    //     static::created(function ($item){
    //         $adminEmail = "yubiskapoudel08@gmail.com";
    //         Mail::to($adminEmail)->send(new ContactFormMail($item));
    //     });
    // }
}
