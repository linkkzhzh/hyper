<?php

declare(strict_types=1);

namespace App\Model;



/**
 * @property int $id 
 * @property string $user_name 
 * @property string $nickname 
 * @property string $user_passwd 
 * @property string $user_phone 
 * @property string $user_phone_encrypt_bk 
 * @property string $user_email 
 * @property int $user_type 
 * @property string $user_area 
 * @property string $user_img 
 * @property int $zj_id 
 * @property int $time 
 * @property int $wx_img 
 * @property string $qr_code 
 * @property string $qr_url 
 * @property string $user_birthday 
 * @property string $area_country 
 * @property string $area_state 
 * @property string $area_city 
 * @property string $user_sex 
 * @property string $sex_ori 
 * @property string $blood_type 
 * @property string $desc 
 * @property int $tongzhi 
 * @property int $jifen 
 * @property int $my 
 * @property int $zhiding 
 * @property int $tuijian 
 * @property int $platform 
 * @property int $quying_tuijian 
 * @property int $rm 
 * @property int $lqtuijian 
 * @property int $new_tuijian 
 * @property int $ten_tj_all 
 * @property int $ten_tj_win 
 * @property int $tj_all 
 * @property int $tj_win 
 * @property int $total_fee 
 * @property int $fensi 
 * @property int $hongbao 
 * @property int $mfhongbao 
 * @property int $smzq 
 * @property int $hong 
 * @property int $lianhong 
 * @property int $tuisong 
 * @property int $user_status 
 * @property int $app_type 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property int $is_hot 
 * @property int $weight 
 * @property string $user_phone_encrypt 
 * @property int $channel_id 
 * @property int $app 
 * @property string $area_code 
 * @property string $ft_user_name 
 * @property string $ft_nickname 
 * @property string $ft_user_area 
 * @property string $ft_area_country 
 * @property string $ft_desc 
 * @property int $ft_change 
 * @property int $talent_apply_status 
 * @property int $promote_id 
 * @property int $show_talent_dot 
 * @property int $sport_fensi 
 * @property int $recent_visit_time 
 * @property string $recent_visit_devs 
 * @property string $client_sign 
 * @property int $dev 
 * @property string $user_unique 
 * @property int $first_time_consume_id 
 * @property int $first_visit_app_time 
 * @property int $wap_app_consume_status 
 */
class ZucaiUser extends Model
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'zucai_user';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = ['id' => 'integer', 'user_type' => 'integer', 'zj_id' => 'integer', 'time' => 'integer', 'wx_img' => 'integer', 'tongzhi' => 'integer', 'jifen' => 'integer', 'my' => 'integer', 'zhiding' => 'integer', 'tuijian' => 'integer', 'platform' => 'integer', 'quying_tuijian' => 'integer', 'rm' => 'integer', 'lqtuijian' => 'integer', 'new_tuijian' => 'integer', 'ten_tj_all' => 'integer', 'ten_tj_win' => 'integer', 'tj_all' => 'integer', 'tj_win' => 'integer', 'total_fee' => 'integer', 'fensi' => 'integer', 'hongbao' => 'integer', 'mfhongbao' => 'integer', 'smzq' => 'integer', 'hong' => 'integer', 'lianhong' => 'integer', 'tuisong' => 'integer', 'user_status' => 'integer', 'app_type' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'is_hot' => 'integer', 'weight' => 'integer', 'channel_id' => 'integer', 'app' => 'integer', 'ft_change' => 'integer', 'talent_apply_status' => 'integer', 'promote_id' => 'integer', 'show_talent_dot' => 'integer', 'sport_fensi' => 'integer', 'recent_visit_time' => 'integer', 'dev' => 'integer', 'first_time_consume_id' => 'integer', 'first_visit_app_time' => 'integer', 'wap_app_consume_status' => 'integer'];
}
