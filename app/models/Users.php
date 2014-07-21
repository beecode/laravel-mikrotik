<?php

namespace App\Models;

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

/**
 * File ini adalah file class
 * yang digunakan untuk memodelkan / merepresentasikan
 * tabel users yang ada pada database.
 * 
 * File class ini mewariskan sifat Class Eloquent
 * yang merupakan sebuah ORM (Object Relational Model)
 * untuk keperluan memanipulasi data (CRUD)
 * pada database.
 */
class Users extends Eloquent implements UserInterface, RemindableInterface {

    /**
     * Atribute ini harus di isi sesuai
     * dengan nama tabel yang ada pada
     * database yang anda gunakan.
     * 
     * Pada variable di bawah ini,
     * $table di isi dengan users
     * agar sesuai dengan tabel users
     * yang tersedia pada database.
     * 
     * @var string
     */
    protected $table = 'users';

    /**
     * attribute ini digunakan untuk mengatur
     * pengisian nilai pada 
     * field created_at dan updated_at
     * 
     * jika di isi false,
     * maka field created_at dan updated_at 
     * tidak akan di isi pada tabel
     * 
     * jika di isi true,
     * maka field created_at dan updated_at
     * tidak akan di isi pada tabel.
     * 
     * secara default (jika tidak ditulis)
     * $timestamps akan bernilai true.
     * 
     * @var boolean
     */
    public $timestamps = true;

    /**
     * Method ini digunakan untuk menyatakan
     * relasi antara tabel users dengan tabel kegiatan.
     * 
     * @return Kegiatan
     */
    public function kegiatan() {

        /**
         * bagian sintaks dibawah ini untuk menyatakan
         * bahwa tabel user ada pada sisi "one"
         * dan memiliki tabel kegiatan yang 
         * ada pada sisi "many"
         * 
         * one user has many kegiatan
         * satu user memiliki banyak kegiatan
         * 
         * Sedangkan sintaks "App\\Models\\Kegiatan"
         * digunakan untuk mengacu pada models
         * tabel Kegiatan yang telah di buat pada 
         * folder App\Models dengan nama file
         * Kegiatan
         */
        return $this->hasMany("App\\Models\\Kegiatan");
    }

   /**
     * Method ini digunakan untuk menyatakan
     * relasi antara tabel users dengan tabel profile.
     * 
     * @return Kegiatan
     */
    public function profile() {
        /**
         * bagian sintaks dibawah ini untuk menyatakan
         * bahwa tabel user ada pada sisi "one"
         * dan memiliki tabel kegiatan yang 
         * ada pada sisi "one"
         * 
         * one user has one profile
         * satu user memiliki satu profile
         * 
         * Sedangkan sintaks "App\\Models\\Profile"
         * digunakan untuk mengacu pada models
         * tabel Profile yang telah di buat pada 
         * folder App\Models dengan nama file
         * Profile
         */
        return $this->hasOne("App\\Models\\Profile");
    }

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password');

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier() {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword() {
        return Hash::make(Crypt::decrypt($this->password));
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken() {
        return $this->remember_token;
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string  $value
     * @return void
     */
    public function setRememberToken($value) {
        $this->remember_token = $value;
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName() {
        return 'remember_token';
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail() {
        return $this->email;
    }

}
