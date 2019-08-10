<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsletterSubscriber;

class NewsletterController extends Controller
{
    public function subscribe(Request $request) {
        $this->validate($request, [
            'email' => 'required|email|max:255',
        ]);

        $subscriber = NewsletterSubscriber::where($request->only('email'))->first();

        if ($subscriber) return $this->success($request, 'You are already subscribed to our newsletter!', $subscriber);

        $subscriber = NewsletterSubscriber::create($request->only('email'));

        return $this->success($request, 'You have successfully subscribed to our newsletter!', $subscriber);
    }
    
    protected function success(Request $request, $message, $data = null) {
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(compact('message', 'data'));
        }

        return redirect()->back()->withSuccess($message);
    }
}


