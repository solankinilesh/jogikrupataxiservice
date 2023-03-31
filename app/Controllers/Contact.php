<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'Contact Us | Taxi Service in Somnath | Dwarka | Diu :: Somnath Taxi',
            'meta_keywords' => 'Somnath to sasan, book savan cab, taxi service, somnath to diu, dwarka to somnath',
            'meta_description' => 'Taxi available for Somnath, Dwarka , Diu, Sasan Gir, Junagadh, Porbandar call now +91 8140204231',
        ];

        return view('contact', $data);
    }

    public function contactRequest()
    {
        $request = service('request');

        // Validation
        $input = $this->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|verifyRecaptcha',
        ], [
            'g-recaptcha-response' => [
                'required' => 'Please verify captcha',
            ],
        ]);

        if (!$input) { // Not valid
            $data['validation'] = $this->validator;

            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $data = [
            'name' => $request->getPost('name'),
            'email' => $request->getPost('email'),
            'subject' => $request->getPost('subject'),
            'message' => $request->getPost('message'),
        ];

        $this->sendEmail($data);

        return redirect('contact');
    }

    public function sendEmail($data = [])
    {
        $email = \Config\Services::email();

        $email->setFrom(config('AppConfig')->from_email, config('AppConfig')->siteName);
        $email->setTo(config('AppConfig')->to_email);

        $email->setSubject('Contact request.');

        $message = view('emails/contact_us', $data);
        $email->setMessage($message);

        $email->send();
    }
}
