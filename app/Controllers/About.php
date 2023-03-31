<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'About Us - Jogi krupa taxi service Are Reliable And Safe Ride At An Affordable Price',
            'meta_keywords' => 'about us, about jogi krupa taxi service, know about jogi krupa taxi service',
            'meta_description' => 'Jogi krupa taxi service is a car rental service provider across Gujarat. We provide cars on rent & cab services for local, outstation & airport rides. Visit us to know about cab booking.',
        ];

        return view('about', $data);
    }
}
