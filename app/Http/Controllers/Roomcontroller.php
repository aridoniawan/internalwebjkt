<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\MeetingRoom;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Roomcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        // Ambil waktu saat ini
        $now = Carbon::now();

        // Set waktu awal (mulai dari tengah malam hari ini)
        $startOfDay = $now->copy()->startOfDay();

        // Set waktu akhir (hingga akhir hari ini)
        $endOfDay = $now->copy()->endOfDay();

        $meetingRooms = MeetingRoom::where('room_meeting', 'Ruang Meeting A')
            ->whereBetween('start_time', [$startOfDay, $endOfDay])
            ->get();
        $meetingRoomsB = MeetingRoom::where('room_meeting', 'Ruang Meeting B')
            ->whereBetween('start_time', [$startOfDay, $endOfDay])
            ->get();
        $meetingRoomsC = MeetingRoom::where('room_meeting', 'Ruang Meeting C')
            ->whereBetween('start_time', [$startOfDay, $endOfDay])
            ->get();
        $meetingRoomsD = MeetingRoom::where('room_meeting', 'Ruang Meeting D')
            ->whereBetween('start_time', [$startOfDay, $endOfDay])
            ->get();
        $meetingRoomsE = MeetingRoom::where('room_meeting', 'Ruang Meeting E')
            ->whereBetween('start_time', [$startOfDay, $endOfDay])
            ->get();
        $meetingRoomsf = MeetingRoom::where('room_meeting', 'Ruang Meeting F')
            ->whereBetween('start_time', [$startOfDay, $endOfDay])
            ->get();

        return view('rooms.index', compact(
                  'meetingRooms', 'meetingRoomsB', 
                  'meetingRoomsC', 'meetingRoomsD',
                  'meetingRoomsE', 'meetingRoomsf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    function indoDate($date) {
        $days = [
            'Sunday'    => 'Minggu',
            'Monday'    => 'Senin',
            'Tuesday'   => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday'  => 'Kamis',
            'Friday'    => 'Jumat',
            'Saturday'  => 'Sabtu',
        ];
    
        $months = [
            'January'   => 'Januari',
            'February'  => 'Februari',
            'March'     => 'Maret',
            'April'     => 'April',
            'May'       => 'Mei',
            'June'      => 'Juni',
            'July'      => 'Juli',
            'August'    => 'Agustus',
            'September' => 'September',
            'October'   => 'Oktober',
            'November'  => 'November',
            'December'  => 'Desember',
        ];
    
        $day = date('l', strtotime($date));
        $month = date('F', strtotime($date));
    
        return $days[$day] . ', ' . $months[$month] . date(', j, Y', strtotime($date));
    }
}
