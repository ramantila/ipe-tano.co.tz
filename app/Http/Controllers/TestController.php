<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function testemail()
    {
        try {
            Mail::to('test@ipetano.co.tz')->send(new TestMail());
            return 'Email sent successfully';
        } catch (\Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
}
