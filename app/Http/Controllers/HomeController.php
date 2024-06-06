<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
        
        //$data = Sample::orderBy("date", "DESC")->paginate(10);         

        //return view('samples.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

     /**
     * search by batch no.
     */
    public function certificate(Request $request)
    {
        //
        $sample = Sample::whereBatchno($request->batch_number)->first();
        if(empty($sample)){
            return back()->with('error', 'Batch number not found, please check batch format is entered correctly as detailed in the instructions below, otherwise please contact the Australian Garnet Sales team at sales@australiangarnet.com.au');
        }
        
        $exsample = DB::select( "SELECT [sampleid] from samples WHERE name='".$sample->name."' and category='External Samples' and '".$sample->date."'>=exsdate and '".$sample->date."'<=exedate" );  
        if(empty($exsample)){
            return back()->with('error', 'Batch number not found, please check batch format is entered correctly as detailed in the instructions below, otherwise please contact the Australian Garnet Sales team at sales@australiangarnet.com.au');
        }    

        
          
        $exdata = DB::select( "SELECT * from external_data WHERE sampleid='".$exsample[0]->sampleid."'" );
        if(empty($exdata)){
            return back()->with('error', 'Batch number not found, please check batch format is entered correctly as detailed in the instructions below, otherwise please contact the Australian Garnet Sales team at sales@australiangarnet.com.au');
        }    

        $prdata = DB::select( "SELECT * from primary_properties WHERE sampleid='".$sample->sampleid."'" );
        
        return view('show',compact('sample','exdata','prdata'));
    }

     /**
     * Generate Certificate
     */
    public function generatecertificate(Request $request)
    {
        // 
        $request->validate([
            'exid' => 'required',
            'samplename' => 'required',
            'sampleid' => 'required',
            'batchno' => 'required',
            'packaging' => 'required',
            'company' => 'required',             
        ]);

        //dd($request);
        
        if($request->exid>0){       
            // retreive all records from db
            $exdata = DB::select( "SELECT * from external_data WHERE id='".$request->exid."'" );        

            $prdata = DB::select( "SELECT * from primary_properties WHERE sampleid='".$request->sampleid."'" );

            /*$samplename = $request->samplename;
            $batchno = $request->batchno;
            $packaging = $request->packaging;
            $company = $request->company;
            return view('test',compact('exdata','prdata','samplename','batchno','packaging','company')); */

            $data = [
                    'exdata' => $exdata,
                    'prdata' => $prdata,
                    'samplename' => $request->samplename,
                    'batchno' => $request->batchno,
                    'packaging' => $request->packaging,
                    'company' => $request->company,  
            ];

            
            $pdf = PDF::loadView('certificate',$data)->setPaper('a4', 'portrait');
            /*$output = $pdf->output();

            return new Response($output, 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' =>  'inline; filename="Certificate-'.$request->batchno.'.pdf"',
            ]);
            //return $pdf->stream( 'Invoice-'.($sale[0]->invoice_type==0?'SI-':'Mn-').sprintf("%06s",$sale[0]->invoice_no).'.pdf'); 
            */
            $pdf->render();

            $dompdf = $pdf->getDomPDF();
            //$font = $dompdf->getFontMetrics()->get_font("Calibri", "sans-serif",);
            //$dompdf->get_canvas()->page_text(34, 18, "{PAGE_NUM} / {PAGE_COUNT}", $font, 10, array(0, 0, 0));
            
            return $pdf->stream("BatchCertificate-".$request->batchno.".pdf");
        }
    }
}
