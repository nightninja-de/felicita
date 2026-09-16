<?php

namespace App\Http\Controllers;

use App\Mail\ReservationNotification;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'guests' => ['required', 'integer', 'min:1', 'max:50'],
            'date' => ['required', 'date', 'after_or_equal:today'],
            'time' => ['required'],
        ]);

        $reservation = Reservation::create($data);

        Mail::to('support@felicita-restaurant.com')->send(new ReservationNotification($reservation));

        return redirect()->route('reservations')->with('reservation_success', true);
    }
}
