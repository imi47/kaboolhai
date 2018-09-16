<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    //
     protected $primaryKey = 'user_id';
     protected $table = 'profiles';

     protected $fillable = ['user_name', 'email', 'password', 'genger','country_id','state_id','city_id','city_id','phone','skin_color','height','weight','physical_status','hair_color','body_type','beard','availability','language','child_count','like_chiled','profession','residency_status','ethnic_type','marige_type','profile_created','disability','age','religious_type','sect_are','pray','read_quran','attend_religious_service','polygamy','qualification','institute','year','job','job_address','job_contact','a_income','m_income','contact_address','present_country','convenient_time','contact_person','family_type','finacial_status','father_detail','mother_detail','father_job','family_cast','brother_status','sister_status','brother_elder','brother_younger','sister_elder','sister_younger','description','blood_group','disease','mother_job','created_at', 'updated_at'];

      public function Language(){
        return $this->hasMany('App\Language');
    }
}
