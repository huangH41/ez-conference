<?php

namespace App\Http\Controllers;

use App\RentalTransaction;
use App\Zoom;
use http\Env;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ZoomController extends Controller
{
    public function create($id)
    {
        $rent = RentalTransaction::all()->find($id);
        $zoom = Zoom::all()->find($rent->zoom->id);
        $success = $this->makeMeeting($rent,$zoom->zoom_user_id,\env('ZOOM_JWT'));
        if ($success == true){
            return back()->with('success','Successfully Create Zoom Meetings');
        }
        else return back()->with('success','Error Creating your Zoom Meetings');
    }

    private function makeMeeting($rent,$userId, $token)
    {
        $response = Http::withToken($token)->timeout(10)
            ->post('https://api.zoom.us/v2/users/'.$userId.'/meetings', [
                "topic" => "Ez-Meet ".$rent->id." ".$rent->user->username,
                "type" => "2",
                "start_time" => $rent->date."T".$rent->time."Z",
                "duration" => "120",
                "schedule_for" => $userId,
                "timezone" => "Asia/Jakarta",
                "password" => "eztomeet",
                "agenda" => "Ez-Meet ".$rent->id." ".$rent->user->username,
                "settings" => [
                    "host_video" => "false",
                    "participant_video" => "false",
                    "cn_meeting" => "false",
                    "in_meeting" => "false",
                    "join_before_host" => "false",
                    "mute_upon_entry" => "false",
                    "watermark" => "true",
                    "use_pmi" => "false",
                    "approval_type" => "0",
                    "audio" => "both",
                    "auto_recording" => "local",
                    "enforce_login" => "false",
                    "enforce_login_domains" => "",
                    "registrants_email_notification" => "false"
                ]
            ]);
        if ($response->status() == 201){
            $data = $response->json();
            $rent->update([
                'start_link' => $data["start_url"],
                'join_link' => $data["join_url"]
            ]);
            $rent->save();
            return true;
        }
        else return false;
    }
}
