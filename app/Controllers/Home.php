<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'Car Booking Services Near Me, Book a Safe Taxi Service across gujarat',
            'meta_keywords' => 'outstation cabs, taxi service, cabs in somnath, cabs in gujarat, one way taxi, one way cab, cab service in dwarka, how to hire a cab, hire cab, taxi for hire, cab service, outstation taxi service, hire a taxi online, cab service near me, online taxi service, taxi hire in somnath, jogi krupa taxi, cab booking, book a cab, taxi booking, outstation taxi, taxi near me, car booking for outstation, online cab booking, car booking, online car booking, car booking near me, cab hire, car hire for outstation, travel car booking, car booking for trip, taxi service near me, cabs near me, car rental, dwarka taxi, diu taxi services, taxi services, sasan cab service, cab booking services, taxi apps, car rentals',
            'meta_description' => 'Best Car service: Jogi krupa taxi service offers a hassle-free, comfortable & affordable taxi service nearby your location. For best outstation & city to city cabs book now.',
        ];

        return view('home', $data);
    }

    public function booking()
    {
        $request = service('request');

        // Validation
        $input = $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'from_destination' => 'required',
            'to_destination' => 'required',
            'date' => 'required',
            'g-recaptcha-response' => 'required|verifyRecaptcha',
        ], [
            'g-recaptcha-response' => [
                'required' => 'Please verify captcha',
            ],
        ]);

        if (!$input) { // Not valid
            $data['validation'] = $this->validator;

            return redirect('/')->withInput()->with('validation', $this->validator);
        }

        $date = new \DateTime($request->getPost('date'));
        $bookingModel = model('App\Models\BookingModel');
        $data = [
            'name' => $request->getPost('name'),
            'phone' => $request->getPost('phone'),
            'from_destination' => $request->getPost('from_destination'),
            'to_destination' => $request->getPost('to_destination'),
            'date' => $date->format('Y-m-d'),
        ];

        // Inserts data and returns inserted row's primary key
        $bookingModel->insert($data);
        $this->sendEmail($data);

        return redirect('/');
    }

    public function newsletter()
    {
        $request = service('request');

        $model = model('App\Models\NewsletterModel');

        // Inserts data and returns inserted row's primary key
        $model->insert(['email' => $request->getPost('email')]);

        return redirect('/');
    }

    public function sendEmail($data = [])
    {
        $email = \Config\Services::email();

        $email->setFrom(config('AppConfig')->from_email, config('AppConfig')->siteName);
        $email->setTo(config('AppConfig')->to_email);

        $email->setSubject('Booking request.');

        $message = view('emails/booking', $data);
        $email->setMessage($message);

        $email->send();
    }
}
