<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $table="subscription";
    protected $primarykey="Subscription_id";
    // protected $fillable = [
    //     'c_id',
    //     'plan_id',
    //     'purchase_date', 
    //     'purchase_end_date',
    // ];

//     public function subscriptions()
// {
// return $this->hasMany(Subscription::class, 'c_id');
// $subscription = new Subscription();
// $subscription->c_id = $customerId; // Replace $customerId with the actual customer ID
// $subscription->plan_id = $planId; // Replace $planId with the actual plan ID
// $subscription->save();

// }

    public $timestamps = false;
}
