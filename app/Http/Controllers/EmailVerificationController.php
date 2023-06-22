<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class EmailVerificationController extends Controller
{
    public function notice() {
        return inertia('Auth/VerifyEmail');
    }

    public function verify(EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect()->route('listing.index')->with('success', 'Email was virified!');
    }

    public function send(Request $request) {
        $request->user()->SendEmailVerificationNotification();
        return redirect()->back()->with('success', 'Verification link sent!');
    }
}
