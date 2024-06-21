<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $code = $request->input('code');
        return response()->json(['code' => $code]);
    }
}
