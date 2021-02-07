<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calc extends Model
{
    public function getTaskAnswer($request)
    {
        $intParam = $request->input('intParam');
        $boolEqualFinded = false;
        $intAnswer = -1;
        foreach ($request->input('arParams') as $intElemIndex => $intElemValue) {
            if ($boolEqualFinded == false && $intElemValue == $intParam) {
                $intAnswer = $intElemIndex;
                $boolEqualFinded = true;
            }
            if ($boolEqualFinded == true && $intElemValue != $intParam) {
                $intAnswer++;
            }
        }
        return($intAnswer);
    }
}
