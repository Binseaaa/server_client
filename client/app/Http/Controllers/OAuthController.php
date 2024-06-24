<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class OAuthController extends Controller
{
    public function redirect() {
        $queries = http_build_query([
            'client_id' => 4,
            'redirect_uri' => 'http://127.0.0.1:8000/callback',
            'response_type' => 'code'
        ]);

        return redirect('http://127.0.0.1:8001/oauth/authorize?' . $queries);
    }

    public function callback(Request $request) {
        $response = Http::post("http://127.0.0.1:8001/oauth/token", [
            'grant_type' => 'authorization_code',
            'client_id' => '4',
            'client_secret' => 'Cu0sptPLE2WJReBCIBXyg0bS4V0rb1PiITODZBy1',
            'redirect_uri' => 'http://127.0.0.1:8000/callback',
            'code' => $request->code
        ]);
        $response = $response->json();

        $request->user()->token()->delete();
        $request->user()->token()->create([
            'access_token' => $response['access_token']
        ]);

        return redirect('/dashboard')->with('success', 'Authorization Successful');
    }
}
