<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function makeAppointment(Request $request){
        $appointment = new Appointment;
        $appointment->name = $request->name;
        $appointment->email = $request->email;
        $appointment->mobile = $request->mobile;
        $appointment->address = $request->address;
        $appointment->requirement = $request->requirement;

        $appointment->save();

        return redirect('/');
    }

    public function showAppointment(){
        $showAppointment = Appointment::all();
        return view('admin/appointments', compact('showAppointment'));
    }
}
