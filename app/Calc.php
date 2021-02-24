<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calc extends Model
{
    public function getTaskAnswer($intParam, $arParams)
    {
        $boolEqualFinded = false;
        $boolAnswerActual = false;
        $intAnswer = -1;
        foreach ($arParams as $intElemIndex => $intElemValue) {
            if ($boolEqualFinded == false && $intElemValue == $intParam) {
                $intAnswer = $intElemIndex;
                $boolEqualFinded = true;
            }
            if ($boolEqualFinded == true && $intElemValue != $intParam) {
                $intAnswer++;
                if ($boolAnswerActual == false) {
                    $boolAnswerActual = true;
                }
            }
        }
        return($boolAnswerActual ? $intAnswer : -1);
    }
}
