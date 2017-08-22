<?php

namespace App\Helpers;

use App\Http\Controllers\Slim;
use Illuminate\Http\Request;
use Torann\GeoIP\Facades\GeoIP;
use Auth;

class Helper
{
    /**
     * @param  [input] from HTML input name <input name="avatar" type="file">
     * @param  [destination] where to upload current image
     * @return [name] name of uploaded image to store in database
     */
    public static function uploadImage($input, $destination)
	{
		$avatar  = Slim::getImages($input)[0];
        $imgname = $avatar['input']['name'];
        $ext     = pathinfo($imgname, PATHINFO_EXTENSION);
        $upname  = time().'.'.$ext;
        $data    = $avatar['output']['data'];
        $file    = Slim::saveFile($data, $upname, public_path().'/img/'.$destination);

        return $file['name'];
	}

    public static function getIpAddress($ip)
    {
        $location = GeoIP::getLocation($ip);
        return $location;
    }

}