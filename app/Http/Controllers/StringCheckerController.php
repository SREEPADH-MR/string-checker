<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StringCheckerController extends Controller
{
    public function stringChecker(Request $request)
    {
        if ($request->masterString == null) {
            return response()->json([
                'message' => 'Master string is empty.',
                'status' => 'failed'
            ], 200);
        }

        foreach ($request->strings as $value) {
            if ($value == null) {
                return response()->json([
                    'message' => 'string is empty.',
                    'status' => 'failed'
                ], 200);
            }
        }

        $masterString = $request->masterString;
        $words = $request->strings;

        foreach ($words as $word) {
            $split = str_split($word);
            $occurrence = 0;
            $newMasterString = $masterString;
            if (strlen($masterString) > 0) {
                foreach ($split as $chr) {
                    $pos = strpos($newMasterString, $chr);
                    if ($pos === false) {
                        break;
                    } else {
                        $occurrence++;
                    }
                    $newMasterString = substr_replace($newMasterString, "", $pos, 1);
                }
            }
            if (count($split) == $occurrence) {
                $masterString = $newMasterString;
                echo nl2br($word . " - Yes\n");
            } else {
                echo nl2br($word . " - No\n");
            }
        }
    }
}
