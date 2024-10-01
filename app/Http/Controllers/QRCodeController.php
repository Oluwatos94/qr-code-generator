<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    // /**
    //  * Write code on Method
    //  *
    //  * @return response()
    //  */
    // public function index(Request $request)
    // {
    //     // This generates and return QrCode for link.
    //     return QrCode::size(300)->generate('https://www.your-link.com');
    // }

    // /**
    //  * Write code on Method
    //  *
    //  * @return response()
    //  */
    // public function index(Request $request)
    // {
    //     // This create QrCode and save it to the path.
    //     $path = public_path('qrcode/'.time().'.png');

    //     return QrCode::size(300)
    //                 ->generate('A simple example of QR code', $path);
    // }


    // /**
    //  * Write code on Method
    //  *
    //  * @return response()
    //  */
    // public function index(Request $request)
    // {
    //     // This create QrCode with color.
    //     return QrCode::size(300)
    //                 ->backgroundColor(255,55,0)
    //                 ->generate('A simple example of QR code');
    // }


    // /**
    //  * Write code on Method
    //  *
    //  * @return response()
    //  */
    // public function index(Request $request)
    // {
    //     // This create QrCode with image
    //     $image = QrCode::format('png')
    //                     ->merge(public_path('images/YOUR_IMAGE_NAME.png'), 0.5, true)
    //                     ->size(500)
    //                     ->errorCorrection('H')
    //                     ->generate('A simple example of QR code!');

    //     return response($image)->header('Content-type','image/png');
    // }


    // /**
    //  * Write code on Method
    //  *
    //  * @return response()
    //  */
    // public function index(Request $request)
    // {
    //     // This create QrCode with email.
    //     return QrCode::size(500)
    //             ->email('my@email.com', 'Welcome to websbite.com!', 'This is !.');
    // }

    // /**
    //  * Write code on Method
    //  *
    //  * @return response()
    //  */
    // public function index(Request $request)
    // {
    //     // This create QrCode with phone number.
    //     return QrCode::phoneNumber('111-222-6666');
    // }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        // This create QrCode with SMS.
        QrCode::SMS('111-222-6666', 'Body of the message');
    }
}
