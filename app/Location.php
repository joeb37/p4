<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['name', 'street_address', 'city', 'state', 'zip', 'business_type', 'payment_type'];

    public function games() {
        return $this->hasMany('\App\Game');
    }

    public static function state_list() {

        $state_list = [];
        //key = State Abbreviation
        //value = State Name

        $state_list['CT'] = "Connecticut";
        $state_list['RI'] = "Rhode Island";
        $state_list['MA'] = "Massachusetts";
        $state_list['NH'] = "New Hampshire";
        $state_list['VT'] = "Vermont";
        $state_list['ME'] = "Maine";

        return $state_list;
    }

    public static function payment_type_list() {

        $payment_type_list = [];

        $payment_type_list['BillsCoins'] = "Games take bills or coins";
        $payment_type_list['Tokens'] = "Games take tokens";
        $payment_type_list['OnePrice'] = "Pay one price to play games";
        $payment_type_list['Free'] = "Games are set to free play";

        return $payment_type_list;
    }

    public static function business_type_list() {

        $business_type_list = [];

        $business_type_list['Arcade'] = "Arcade";
        $business_type_list['EntCent'] = "Entertainment Center";
        $business_type_list['Bowl'] = "Bowling Alley";
        $business_type_list['Bar'] = "Bar";
        $business_type_list['Restaurant'] = "Restaurant";
        $business_type_list['OtherAll'] = "Other - All Ages";
        $business_type_list['Other21Plus'] = "Other - 21+";

        return $business_type_list;
    }

}
