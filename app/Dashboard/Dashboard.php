<?php
/**
 * Created by PhpStorm.
 * User: dione
 * Date: 10/28/2019
 * Time: 10:48 AM
 */

namespace App\Dashboard;
use App\Dashboard\config\Header;
use App\User;
use Illuminate\Http\Request;

class Dashboard
{
    var $request, $user, $header, $geo;

    public function __construct($user){
        $this -> request = Request::capture();
        $this -> user = $user;
        $this -> header = new Header();
    }

    public function get($target = 'all'){
        switch($target){
            case'all':
            default:
                return [
                    "page" => $this -> calculateURI(),
                    'url' => $this -> request -> url(),
                    'header' => $this -> header -> header,
                    'request' => [
                        "message" => ($this -> request["message"])? $this -> request["message"]: null,
                        "item" =>  null
                    ],
                    "user" => $this -> userInformation($this -> user["id"]),
                    "section" => null,
                ];
            break;
        }
    }

    private function calculateURI(){
        $array = explode('/', $this -> request -> path());

        $pages = [
            'main' => (isset($array[0]))? $array[0] : null,
            'sub' => (isset($array[1]))? $array[1] : null,
            'target' => (isset($array[2]))? $array[2] : null,
        ];

        return [
            'main' => $pages['main'],
            'sub' => $pages['sub'],
            'target' => $pages['target'],
            'host' => explode($this -> request -> path(), $this -> request -> url())[0],
            'uri' => $this -> request -> path(),
            'env' => ['app_url' => env('APP_URL'), 'app_env' => env('APP_ENV')],
        ];
    }

    private function userInformation($id){
        $user = User::find($id);

        if (isset($user)){
            $data = $user;
        }

        else $data = null;
        return $data;
    }
}
