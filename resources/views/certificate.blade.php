<!DOCTYPE html>
<html>
  <head>  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
    <style> 
        body {
            font-family:"Arial, Helvetica, sans-serif";
            
        }
        .htitle{
            color:#ffffff;
            font-family:"Times New Roman"!important;
            font-size:15px;
            font-weight:800px;
            position:absolute;
            top:75px;
            left:160px;
        }
        .ftitle{
            color:#ffffff;
            font-family:"Arial, Helvetica, sans-serif"!important; 
            font-size:14px;
            font-weight:800px;
            position:absolute;
            bottom:25px;
            right:50px;
            text-align:right;
        }
        .ttitle{
            font-family:"Arial, Helvetica, sans-serif"!important;
            font-size:15px;
            margin-bottom:40px;
            color:#C92148;
        }
        label
        {
            font-family:"Arial, Helvetica, sans-serif"!important;
            text-align:left;            
            color:#555555;
            font-size:13px;
            margin-left:2px;
        }      
        p{
            font-family:"Arial, Helvetica, sans-serif"!important;
            font-size: 11px;
            color: #555555;
            width:100%; 
        }
        span{
            font-family:"Arial, Helvetica, sans-serif"!important;
            font-size: 11px;
            color: #555555;
            width:100%; 
        }
        table{
            /*font-family:"Arial, Helvetica, sans-serif", sans-serif;*/
            border-spacing: 0;
            border-collapse: collapse;
        }
        .tb1 {            
           width:100%;           
           margin-bottom:40px;           
           margin-top:20px;

        } 
        .tb1 td { 
           font-family:"Arial, Helvetica, sans-serif"!important;
           border-right:1px solid #FFFFFF;
           background-color: #DEEAF6;
           padding: 5px 5px;
           font-size:8.2px;
           color:#262626;
           text-align: center;
        } 
        .tb1 th{
            font-family:"Arial, Helvetica, sans-serif"!important;
            padding: 5px 5px;  
            border-right:1px solid #FFFFFF;           
            background-color: #C20430;
            color:#FFFFFF;
            font-size:9px;
        }
        .tb2 {            
           width:100%;           
           /*margin-left:5%;*/            
        }     
        .tb2 td{
            width:50%;    
            vertical-align: top;  
        }
        
        .ral > div,.ral > table {
            margin-left:5%;
        }
        .tb3 {            
           width:95%;            
        }     
        .tb3 td{
            padding: 5px 5px;
            border-bottom:1px solid #FFFFFF;
            background-color: #DEEAF6;
            font-size:11px;
            color:#262626;
            text-align:center;
            font-family:"Arial, Helvetica, sans-serif"!important; 
        }
        .tb3 tr td:nth-child(1) {
           text-align:left;
        }
        .tb3 th{
            padding: 5px 5px;             
            background-color: #C20430;
            color:#FFFFFF;
            border-bottom:1px solid #FFFFFF;
            font-size:12px;
            font-family:"Arial, Helvetica, sans-serif"!important;
            text-align:left;
        }
        .tb4 {            
           width:95%; 
        }
        .tb4 tr td {            
           padding:0;
        }
        .name{            
            font-weight:bold;
        }
        /** 
            Set the margins of the page to 0, so the footer and the header
            can be of the full height and width !
            **/
        @page {
            margin: 0cm 0cm;
        }

        /** Define now the real margins of every page in the PDF **/
        body {
            margin-top: 4cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
        }

        /** Define the header rules **/
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 3cm;
        }

        /** Define the footer rules **/
        footer {
            position: fixed; 
            bottom: 0cm; 
            left: 0cm; 
            right: 0cm;
            height: 2cm;
        }
    </style>
  </head>
  <body>
    <header>
        <div class="htitle">CERTIFICATE OF QUALITY</div>
        <img src="{{ public_path('/images/Picture1.jpg') }}"/>
    </header>
    <footer>
        <div class="ftitle">www.australiangarnet.com.au</div>
        <img src="{{ public_path('/images/Picture3.jpg') }}"/>
    </footer>
    <main>
        <div class='ttitle'>Product Details</div>
        <table class="tb1">
        <thead>
                <tr>
                    <th style="width:20%">BATCH NUMBER:</th>
                    <th style="width:20%">PRODUCT:</th>
                    <th style="width:20%">PACKAGING:</th>                
                    <th style="width:20%">COMPANY:</th>
                    <th style="width:20%">DATE CERTIFICATE GENERATED:</th>
                </tr>
            </thead>
                
            <tbody>
                <tr>               
                    <td>{{ $batchno }}</td> 
                    <td>@if(substr($batchno, -3)=='24B') {{'AG 20/40 Mesh'}} @elseif(substr($batchno, -3)=='36B') {{'AG 30/60 Mesh'}} @elseif(substr($batchno, -3)=='80W') {{'AG 80 Mesh'}} @elseif(substr($batchno, -3)=='12W') {{'AG 120 Mesh'}} @else {{$samplename}} @endif</td> 
                    <td>{{ $packaging }}</td>
                    <td>{{ $company }}</td> 
                    <td>{{ date('d F Y') }}</td>                              
                </tr>
            </tbody> 
        </table>    
    
        <table class="tb2">
            <tr>
                <td>
                    <div class='ttitle'>Typical Chemical Analysis</div>
                    <table class="tb3">
                        <thead>
                            <tr>
                                <th>ELEMENT</th>
                                <th style="width:60%">PRESENTING AS</th>
                                <th style="text-align:center;">CONC. %</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>               
                                <td>Silica*</td> 
                                <td>SiO2</td> 
                                <td>@if($exdata) {{$exdata[0]->silica}} @endif</td>                            
                            </tr>  
                            <tr>               
                                <td>Iron</td>
                                <td>Fe2O3</td>  
                                <td>@if($exdata) {{$exdata[0]->iron}} @endif</td>                            
                            </tr> 
                            <tr>               
                                <td>Alumina</td>
                                <td>Al2O3</td>  
                                <td>@if($exdata) {{$exdata[0]->alumina}} @endif</td>                            
                            </tr> 
                            <tr>               
                                <td>Magnesium</td>
                                <td>MgO</td>  
                                <td>@if($exdata) {{$exdata[0]->magnesium}} @endif</td>                            
                            </tr> 
                            <tr>               
                                <td>Calcium</td>
                                <td>CaO</td>  
                                <td>@if($exdata) {{$exdata[0]->calcium}} @endif</td>                            
                            </tr> 
                            <tr>               
                                <td>Manganese</td>
                                <td>MnO</td>   
                                <td>@if($exdata) {{$exdata[0]->manganese}} @endif</td>                            
                            </tr>     
                            <tr>               
                                <td>Titanium</td>
                                <td>TiO2</td>  
                                <td>@if($exdata) {{$exdata[0]->titanium}} @endif</td>                            
                            </tr>     
                        </tbody> 
                    </table> 
                    <p>* Silica that is bound within the lattice of the garnet crystal and not free crystalline silica.</p>
                    <div class='ttitle'>Typical Physical Characteristics</div>
                    <table class="tb3">
                        <thead>
                            <tr>
                                <th>PROPERTY</th>
                                <th style="text-align:center;">VALUE</th>
                            </tr>
                        </thead> 
                        <tbody>
                            <tr>               
                                <td>Specific Gravity</td> 
                                <td>@if($exdata) {{$exdata[0]->specific_gravity}} @endif</td>                            
                            </tr>  
                            <tr>               
                                <td>Bulk Density</td>
                                <td>@if($exdata) {{$exdata[0]->bulk_density}} @endif</td>                            
                            </tr> 
                            <tr>               
                                <td>Hardness</td>
                                <td>@if($exdata) {{$exdata[0]->hardness}} @endif</td>                            
                            </tr> 
                            <tr>               
                                <td>Melting Point</td>
                                <td>@if($exdata) {{$exdata[0]->melting_point}} @endif</td>                            
                            </tr> 
                            <tr>               
                                <td>Particle Shape</td>
                                <td>@if($exdata) {{$exdata[0]->particle_shape}} @endif</td>                            
                            </tr> 
                            <tr>               
                                <td>Fracture</td>
                                <td>@if($exdata) {{$exdata[0]->fracture}} @endif</td>                            
                            </tr>     
                            <tr>               
                                <td>Moisture Absorption</td>
                                <td>@if($exdata) {{$exdata[0]->moisture_absorption}} @endif</td>                            
                            </tr> 
                            <tr>               
                                <td>Magnetic Susceptibility</td>
                                <td>@if($exdata) {{$exdata[0]->magnetic_susceptibility}} @endif</td>                            
                            </tr>  
                            <tr>               
                                <td>Radioactive</td>
                                <td>@if($exdata) {{$exdata[0]->radioactive}} @endif</td>                            
                            </tr>                    
                        </tbody> 
                    </table> 
                </td> 
                <td class="ral">
                    <div class='ttitle'>Typical Mineral Composition</div>
                    <table class="tb3">
                        <thead>
                            <tr>
                                <th style="width:60%">ELEMENT</th>
                                <th style="text-align:center;">PRESENTING AS</th>
                                <th style="text-align:center;">CONC. %</th>
                            </tr>
                        </thead> 
                        <tbody>
                            <tr>               
                                <td>Garnet (Almandine)</td>
                                <td>Fe3Al2(SiO4)3</td>   
                                <td>@if($exdata) {{$exdata[0]->garnet}} @endif</td>                            
                            </tr>  
                            <tr>               
                                <td>Ilmenite</td>
                                <td>FeTiO3</td>   
                                <td>@if($exdata) {{$exdata[0]->ilmenite}} @endif</td>                            
                            </tr> 
                            <tr>               
                                <td>Zircon</td>
                                <td>ZrSiO4</td>   
                                <td>@if($exdata) {{$exdata[0]->zircon}} @endif</td>                            
                            </tr> 
                            <tr>               
                                <td>Crystalline Silica (free)</td>
                                <td>SiO2</td>   
                                <td>@if($exdata) {{$exdata[0]->crystalline_silica}} @endif</td>                            
                            </tr> 
                            <tr>               
                                <td>Other</td>
                                <td></td>   
                                <td>@if($exdata) {{$exdata[0]->other}} @endif</td>                            
                            </tr>          
                        </tbody> 
                    </table>
                    <p></p>
                    <div class='ttitle'>Typical Chloride & Conductivity</div>
                    <table class="tb3">
                        <thead>
                            <tr>
                                <th style="width:30%;">PROPERTY</th>
                                <th style="width:70%;text-align:center;">VALUE</th>
                            </tr>
                        </thead> 
                        <tbody>
                            <tr>               
                                <td>CHLORIDE*:</td> 
                                <td style="text-align:left;">@if($prdata) {{$prdata[0]->chloride}} @endif ppm</td>                            
                            </tr>  
                            <tr>               
                                <td>CONDUCTIVITY^:</td>
                                <td style="text-align:left;">@if($prdata) {{$prdata[0]->conductivity}} @endif µS/cm</td>                            
                            </tr>          
                        </tbody> 
                    </table> 
                    <table  class="tb4">
                        <tr><td><p>* Based on using ISO Standard 11127-7 test method, with a chloride content less than 25 ppm.</p></td></tr>
                        <tr><td><span>^ Based on using ISO Standard 11127-6 test method, with a conductivity of less than 250 µS/cm.</span></td></tr>
                        <tr><td><img src="{{ public_path('/images/Signature.JPG') }}" style="width:55%;margin:0;margin-top:10px"/></td></tr>
                        <tr><td><label class="name">Marcius Brown</label></td></tr> 
                        <tr><td><label class="designation">Registered Manager</label></td></tr>  
                    </table>               
                </td> 
            </tr>
        </table>
    </main>
</body>
</html>