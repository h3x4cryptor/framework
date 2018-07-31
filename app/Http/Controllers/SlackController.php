<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlackController extends Controller
{

    public function getIndex() {

        return view ('slack.index');
    }






    public function slackIndex() {
       header('Content-type: application/x-www-form-urlencoded; charset=utf-8');
        return  ([
	 'challenge' => 'OgCBQm7uIydmp2o6P55FOS6rupnXCaTlXuL5MaePpayZ6TGnj1nA'
    ]);
}


    public function getChannels() {
        return response()->json([
        'name' => 'h3x4',
        'age' => '19',
        'hoppies' => '420',
        'OS' => 'w10',
        'url' => 'http://master.iechosys.com:813/api'

       ]);

    }

    public function getHelp() {
        return response()->json([
        'Service' => 'This is Slack integration service portal Api',
        'Available Commands' => ([
            '1' => '/api/slack/commands',
            '2' => '/api/slack/channels',
            '3' => '/api/slack/join',
            '4' => '/api/slack/list',
            '5' => '/api/slack/bots',
        ]),
        'Creator' => 'h3x4',
        'Pourbose' => 'Extinsive Deveolpment',
        'hoppies' => '420',
        'OS' => 'w10',
        'url' => 'http://master.iechosys.com:813/api'

       ]);

    }









}
