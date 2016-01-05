<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CustomClasses\GiantBomb\Api as GiantBombApi;
use Illuminate\Support\Facades\App;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

//
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

        $user =  \App\User::where('id', $id)->first();
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {


    }

    public function paid() {


    }

    public function payment_failed() {

      
    }

    public function pdf() {
        require_once('../../../../dompdf/dompdf_config.inc.php');
//        spl_autoload_register('DOMPDF_autoload');
//        function pdf_create($html, $filename, $paper, $orientation, $stream=TRUE)
//        {
//            $dompdf = new DOMPDF();
//            $dompdf->set_paper($paper,$orientation);
//            $dompdf->load_html($html);
//            $dompdf->render();
//            $dompdf->stream($filename.".pdf");
//        }
//        $filename = 'nama_file';
//        $dompdf = new DOMPDF();
//        $html = file_get_contents('file_html.php');
//        pdf_create($html,$filename,'A4','portrait');

        return view('user.show', compact('user'));
    }
}
