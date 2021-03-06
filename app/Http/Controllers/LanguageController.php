<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    /**
     * Setting Language
     */
    public function setLang(Request $request)
    {
        return redirect()->back()->withCookie(cookie('language', $request->lang, 45000));
    }

}
