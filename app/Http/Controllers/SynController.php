<?php namespace App\Http\Controllers;

use App\Article;
use App\Location;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookingRequest;
use Illuminate\Support\Facades\Mail;

class SynController extends Controller {




    public function index()
    {
        $list = Location::all();

        return view('blades.index', ['location' => $list]);
    }

    public function article()
    {
        $art = Article::find(1);
        $list = Article::all();
        $title = $art->title;
        $body = $art->body;
        return view('blades.article', ['title' => $title, 'body' => $body, 'lists' => $list]);
    }

    public function articleShow($id)
    {
        $art = Article::find($id);
        $list = Article::all();
        $title = $art->title;
        $body = $art->body;
        return view('blades.article', ['title' => $title, 'body' => $body, 'lists' => $list]);
    }

    public function services()
    {
        return view('blades.service');
    }

    public function about()
    {
        return view('blades.about');
    }

    public function contact()
    {
        return view('blades.contact');
    }

    public function courier()
    {
        return view('blades.courier');
    }

    /**
     * @param BookingRequest $request
     * @return \Illuminate\View\View
     */
    public function store(BookingRequest $request)
    {
//        $input = Request::all();
        $dest = $request->get('to');
        $fro = $request->get('from');
        $mode = $request->get('mode');
        $depart = $request->get('depart');
        $returnValue = $request->get('return');
        $return = (!empty($returnValue))? $returnValue : "null";
        $first = $request->get('first');
        $last = $request->get('last');
        $mobile = $request->get('mobile');
        $email = $request->get('email');
/*
        Mail::send('emails.booking',['to'=>$to,'from'=> $from, 'mode'=> $mode, 'depart'=> $depart,'return'=> $return,'mobile'=> $mobile, 'email' => $email, 'first' => $first, 'last' => $last], function($message){

            $message->to('info@busdoctravel.com', 'Bookings')->subject('Booking')->cc('mercury.xlr@gmail.com');
        });

*/
        $to = "info@busdoctravel.com";
        $from = "bookings@busdoctravel.com";
        $subject = "Flight Bookings";
        $headers = "From: " . $from . "\r\n";
        $headers .= "Reply-To: ". $from . "\r\n";
        //	$headers .= "CC: busdoctravel@yahoo.com\r\n";
        $headers .= "CC: mercury.xlr@gmail.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $message = '<html><body>';
        $message .= "<h3>Flight Details</h3>";
        $message .= '<p><strong>From:</strong> '.$dest.'</p>';
        $message .= '<p><strong>To:</strong> '.$fro.'</p>';
        $message .= '<p><strong>Travel Mode:</strong> '.$mode.'</p>';
        $message .= '<p><strong>Depart :</strong> '.$depart.'</p>';
        $message .= '<p><strong>Return:</strong>  '.$return.'</p>';
        $message .= '<h3>Client Details</h3>';
        $message .= '<p><strong>Name:</strong> '.$last.' '.$first.'</p>';
        $message .= '<p><strong> Mobile Number: </strong>'.$mobile.'</p>';
        $message .= '<p><strong>Email:</strong> '.$email.'</p>';
        $message .= '</body></html>';
        @mail($to,$subject,$message,$headers);

        return view('blades.index');
    }

}
