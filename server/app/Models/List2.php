<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class List2 extends Model {

    protected $table = 'List2';

    use HasFactory, Notifiable;

    /**
     * 出品者情報
     * @param $fillable
     * @return int list2_id
     * @author nasu
     * @var array
     * @name index
     * @modifid 06/14
     */
    protected $fillable = [
        'list2_id',
        'list_name',
        'office_name',
        'street_address',
        'tel_number',
        'mail_address',
        'respons_name',
        'review',
    ];
}
