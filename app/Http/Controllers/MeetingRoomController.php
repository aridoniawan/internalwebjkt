<?php

namespace App\Http\Controllers;

use App\Models\MeetingRoom;
use Illuminate\Http\Request;

class MeetingRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meetingRooms = MeetingRoom::sortable()->paginate(10);

        return view('rmeeting.create', compact('meetingRooms'));
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function viewsroom()
    // {
    //     return view('rmeeting.viewsroom');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rmeeting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'room_meeting' => 'required|string',
            'uname' => 'required|string',
            'agenda' => 'required|string',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);

        $room_meeting = $request->input('room_meeting');
        $uname = $request->input('uname');
        $agenda = $request->input('agenda');
        $start_time = $request->input('start_time');
        $end_time = $request->input('end_time');
    
        $existingBooking = MeetingRoom::where('room_meeting', $request->room_meeting)
            ->where(function ($query) use ($request) {
                $query->whereBetween('start_time', [$request->start_time, $request->end_time])
                    ->orWhereBetween('end_time', [$request->start_time, $request->end_time]);
            })
            ->exists();

            if ($existingBooking) {
                session()->flash('error', 'Ruang Meeting sudah dipesan pada waktu tersebut.');
                return redirect('rmeeting');
            }
            

            // if ($existingBooking) {
            //     return redirect('rmeeting/create')->withErrors('error', 'Ruang Meeting sudah dipesan pada waktu tersebut.');
                
            // }

            MeetingRoom::insert([
                'room_meeting' => $room_meeting,
                'uname' => $uname,
                'agenda' => $agenda,
                'start_time' => $start_time,
                'end_time' => $end_time,
                
            ]);

            // return redirect('rmeeting')->flash('success', 'Ruang Meeting Berhasil di pesan');
            return redirect('rmeeting')->with('success', 'Ruang Meeting berhasil dipesan.');

    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $MeetingRooms=MeetingRoom::where('id', $id)
        // ->delete();

        // return redirect('rmeeting', compact('MeetingRoom'));

        $meetingRooms = MeetingRoom::find($id);

        if (!$meetingRooms) {
            // Handle the case where the record with the given id is not found
            return redirect('rmeeting')->with('error', 'Meeting Room not found');
        }

        $meetingRooms->delete();

        return redirect('rmeeting')->with('success', 'Meeting Room deleted successfully');
        }
}
