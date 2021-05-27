<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Subscription;

class SubscriptionDetailController extends Controller
{
    /**
     * @param \App\Models\Subscription $subscription
     * @return \Illuminate\View\View
     */
    public function __invoke(Subscription $subscription): View
    {
        abort_if($subscription->trashed(), 403);

        return view('subscription.detail', [
            'subscription' => $subscription,
        ]);
    }
}