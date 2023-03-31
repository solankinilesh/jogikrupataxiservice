<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'Jogi Krupa Taxi Service Provide City, Airport rides, Rental & Outstation Cab Booking',
            'meta_keywords' => 'our-services, Jogi Krupa Taxi Service our, Jogi Krupa Taxi Service cab our-services, cab our-services',
            'meta_description' => 'The concept of ‘ride-hailing’ in gujarat. We take pride in being the Most trusted cab service provider in the gujarat.',
        ];

        return view('Services', $data);
    }
}
