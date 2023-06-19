<?php

namespace App\Http\Controllers;

use App\Models\Advise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {
            return response()->json(['message' => 'Succesvol ingelogd'], 200);
        } else {
            return response()->json(['message' => 'Email en/of wachtwoord is onjuist'], 400);
        }
    }

    public function updateAdvice(Request $request) {
        $data = $request->all();

        foreach ($data as $item) {
            $id = $item['id'];
            $title = $item['title'];
            $advice = $item['advise'];

            $adviceRecord = Advise::findOrFail($id);

            $adviceRecord->title = $title;
            $adviceRecord->advise = $advice;

            $adviceRecord->save();
        }

        return response()->json("De data is succesvol aangepast");
    }

    public function deleteAdvice($id) {
        try {
            $advice = Advise::findOrFail($id);
            $advice->delete();
            return response()->json(['message' => 'Advice row deleted succesfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to delete the advice row']);
        }
    }
}
