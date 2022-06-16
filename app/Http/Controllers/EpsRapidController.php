<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;


class EpsRapidController extends Controller
{
    public function test()
    {
        $client = new Client();

        $res = $client->request('GET', 'https://test.ean.com/v3/regions?language=en-US&include=details&include=property_ids', [
            'headers'=>[
                'Authorization' => 'EAN apikey=7ljnfi2a8a4mvt9jkq2emic0js,signature=2c19c2e35da1a99abaef55b10d479b00cc5e249772014476d183ee0f321e65e247ebf60454ac32145128a7494dd88a010218e163b07d7f63415d17cecb373a6b,timestamp=1655357444'
            ]
        ]);
        echo $res->getStatusCode();
        // "200"
        echo $res->getHeader('content-type')[0];
        // 'application/json; charset=utf8'
        echo $res->getBody();
    }
}
