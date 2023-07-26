<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    //

    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function index()
    {
        $data = DB::table('satwils')->where('role_level', 'input')->select('id', 'name')->get();
        // dd($data);
        return view('pages.auth.register', [
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $response = $this->authService->StoreAuth($request->all());

        // dd($response);
        if ($response['status']) {
            return redirect()->route('login')->withSuccess($response['message']);
        } else {
            // dd($response['message']);
            return redirect()->back()->withErrors($response['message']);
        }
    }

    public function getSatker(Request $request)
    {
        $data = DB::table('satkers')->where('parent_id', $request->id)->get();

        return response()->json([
            'data' => $data
        ]);
    }
}
