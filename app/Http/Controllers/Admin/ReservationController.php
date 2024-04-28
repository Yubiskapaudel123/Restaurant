<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data']=Reservation::all();
        return view('admin/reservation', $result);
        
    }
    
    
    public function manage_reservation(Request $request,$id='')
    {
        $result = [];

        if ($id > 0) {
        $reservation = Reservation::find($id);

        if ($reservation) {
            $result['name'] = $reservation->name;
            $result['email'] = $reservation->email;
            $result['phone'] = $reservation->phone;
            $result['date'] = $reservation->date;
            $result['time'] = $reservation->time;
            $result['guests'] = $reservation->guests;
            $result['id'] = $reservation->id;
        }
    } else {
        $result['name'] = '';
        $result['email'] = '';
        $result['phone'] = '';
        $result['date'] = '';
        $result['time'] = '';
        $result['guests'] = '';
        $result['id'] = 0;
    }

    return view('admin.manage_reservation', $result);
    }

   
    
    public function manage_reservation_process(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'guests' => 'required',
        ]);
    
        $existingReservation = Reservation::where('date', $request->date)
        ->where('time', $request->time)
        ->count();
    
        if ($existingReservation > 0) {
            return redirect()->back()->with('message', 'Sorry, the selected time slot is already booked.');
        }
    
        if ($request->post('id') > 0) {
            $model = Reservation::find($request->post('id'));
            $msg = "Reservation updated";
        } else {
            $model = new Reservation();
            $msg = "Reservation inserted";
        }
    
        $model->name = $request->post('name');
        $model->phone = $request->post('phone');
        $model->email = $request->post('email');
        $model->date = $request->post('date');
        $model->time = $request->post('time');
        $model->guests = $request->post('guests');
    
        $model->save();
    
        $request->session()->flash('message', 'Table booked successfully');
        return redirect('admin/reservation');
    }
    
    
    public function delete(Request $request,$id)
    {
          $model=Reservation::find($id);
          $model->delete();
          $request->session()->flash('message', 'Reservation updated');
          return redirect('admin/reservation');
    }

    
    
}

