<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friend;

class FriendController extends Controller
{
    public function formularioAmigos()
    {
        return view('frm_amigos');
    }

    public function amigoStore(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');

        $sum1 = $this->sumDivisors($num1);
        $sum2 = $this->sumDivisors($num2);

        if ($sum1 == $num2 && $sum2 == $num1) {
            $friend = new friend([
                'num1' => $num1,
                'num2' => $num2,
            ]);
            $friend->save();
            return "$num1 y $num2 son números amigos";
        } else {
            return "$num1 y $num2 no son números amigos";
        }
    }

    private function sumDivisors($number)
    {
        $sum = 0;
        for ($i = 1; $i <= $number / 2; $i++) {
            if ($number % $i == 0) {
                $sum += $i;
            }
        }
        return $sum;
    }
}