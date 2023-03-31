<?php

namespace App\Controllers;

class Gallery extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'Cars | luxury cab service |  Book cab Online Now',
            'meta_keywords' => 'Cab booking, outstation cab booking, somnath to diu cabs, cabs to ahmedabad, book cab from ahmedabad to rajkot, cabs to ahmedabad, rajkot to ahmedabad cabs, book cabs in somnath',
            'meta_description' => 'Jogi Krupa Taxi Service Provide luxury cabs in somnath-to-ahmedabad, feel safe tour and travels',
        ];

        return view('gallery', $data);
    }
}
