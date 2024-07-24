<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Crypt;

class Doctor extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'doctor_name',
        'id_card',
        'experience',
        'commission_percentage',
        'total_commission',
    ];

    public function getEncryptedIdAttribute() {
        $id = Crypt::encryptString($this->id);
        return $id;
    }
    public function getShowRouteAttribute() {
        $e_id = Crypt::encryptString($this->id);
        $route = route('admin.doctors.show', ['encrypted_id' => $e_id]);
        return $route;
    }
    public function getEditRouteAttribute() {
        $e_id = Crypt::encryptString($this->id);
        $route = route('admin.doctors.edit', ['encrypted_id' => $e_id]);
        return $route;
    }
    public function getIndexRouteAttribute() {
        $route = route('admin.doctors.index');
        return $route;
    }
}