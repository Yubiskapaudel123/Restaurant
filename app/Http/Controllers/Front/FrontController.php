<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin\Reservation;
use App\Models\Admin\Multiple_image;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class FrontController extends Controller
{
   public function index()
   {
    
     return view('front.index');
   }



   public function reservation(Request $request)
   {
     $reservation = $request->session()->get('reservation');
     return view('front.reservation', compact('reservation'));
   }
   public function reservation_process(Request $request, $id='')
{
    $request->validate([
        'name' => 'required',
        'phone' => 'required',
        'date' => 'required|date_format:Y-m-d',
        'time' => 'required',
        'guests' => 'required',
    ]);

    

    if ($id>0) {
        $reservation = Reservation::find($id);

        if (!$reservation) {
            return redirect()->back()->with('error', 'Reservation not found.');
        }
        
        $reservation->name = $request->name;
        $reservation->phone = $request->phone;
        $reservation->email = $request->email;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->guests = $request->guests;
        $reservation->save();

        $message = 'Reservation updated successfully';
    } else {
        $existingReservation = Reservation::where('date', $request->date)
            ->where('time', $request->time)
            ->count();

        if ($existingReservation > 0) {
            return redirect()->back()->with('message', 'Sorry, the selected time slot is already booked.');
        }

        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->phone = $request->phone;
        $reservation->email = $request->email;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->guests = $request->guests;
        $reservation->save();

        $message = 'Reservation saved successfully';
    }

    return redirect()->route('front.reservation')->with('message', $message);
}



public function gallery()
{
    try {
        $pictures = DB::table('multiple_images')
                    ->where('status', 1)
                    ->get();

        return view('front.gallery', ['pictures' => $pictures]);
    } catch (\Exception $e) {
        \Log::error('Error fetching pictures: ' . $e->getMessage());

        dd($e->getMessage()); 
        return view('errors.500'); 
    }
}


   public function blog()
   {
    
    $result['category']=DB::table('categories')
    ->where(['status'=>1])
    ->get();
    return view('front.blog', $result);
   }
   
   

   public function contact()
   {
    return view('front.contact');
   }


   
   public function about()
   {
    return view('front.about');
   }
}