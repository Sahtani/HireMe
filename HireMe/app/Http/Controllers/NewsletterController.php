<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use MailchimpMarketing\ApiClient;

class NewsletterController extends Controller
{
    public function subscribe()
    {
        try {
            $mailchimp = new ApiClient();

            $mailchimp->setConfig([
                'apiKey' => config('services.mailchimp.key'),
                'server' => 'us11'
            ]);

            $response = $mailchimp->lists->addListMember('7d5115a1a7', [
                "email_address" => Auth::user()->email,
                "status" => "subscribed",
            ]);
           
        } catch (\Exception $e) {
            
            return redirect()->route('company.all')->with('error', 'Your email address could not be added to our newsletter list.');
        }

        return redirect()->route('company.all')->with('success', 'You are signed up for our newsletter!');}
}
