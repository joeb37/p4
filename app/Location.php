<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['name', 'street_address', 'city', 'state', 'zip', 'business_type', 'payment_type'];

    public function games() {
        return $this->hasMany('\App\Game');
    }

    public static function states_for_dropdown() {

        $states_for_dropdown = [];
        //key = State Abbreviation
        //value = State Name

        $states_for_dropdown['CT'] = "Connecticut";
        $states_for_dropdown['RI'] = "Rhode Island";
        $states_for_dropdown['MA'] = "Massachusetts";
        $states_for_dropdown['NH'] = "New Hampshire";
        $states_for_dropdown['VT'] = "Vermont";
        $states_for_dropdown['ME'] = "Maine";

        return $states_for_dropdown;
    }

    public static function payments_for_dropdown() {

        $payments_for_dropdown = [];

        $payments_for_dropdown['BillsCoins'] = "Bills or Coins";
        $payments_for_dropdown['Tokens'] = "Tokens";
        $payments_for_dropdown['OnePrice'] = "Pay One Price";
        $payments_for_dropdown['Free'] = "Free Play";

        return $payments_for_dropdown;
    }

    public static function business_types_for_dropdown() {

        $business_types_for_dropdown = [];

        $business_types_for_dropdown['Arcade'] = "Arcade";
        $business_types_for_dropdown['EntCent'] = "Entertainment Center";
        $business_types_for_dropdown['Bowl'] = "Bowling Alley";
        $business_types_for_dropdown['Bar'] = "Bar";
        $business_types_for_dropdown['Restaurant'] = "Restaurant";
        $business_types_for_dropdown['OtherAll'] = "Other - All Ages";
        $business_types_for_dropdown['Other21Plus'] = "Other - 21+";

        return $business_types_for_dropdown;
    }

}
