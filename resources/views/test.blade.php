<!DOCTYPE html>
<html>
  <head>   
    <style> 
        body {
            font-family:"Calibri", sans-serif;
            width:100%;
        }
        img{
            width:100%; 
            margin-bottom:50px;
        }       
        p{
            font-size:75%;
        }
        div{
            font-size:80%;
            margin-bottom:10px;
            width:90%;
        }
        .tb1 {            
           width:100%;
           margin-bottom:40px;
        } 
        .tb1 td { 
           border:1px solid #DEEAF6;
           background-color: #DEEAF6;
           padding: 10px 10px;
           font-size:11px;
        } 
        .tb1 th{
            padding: 5px 5px;             
            background-color: #C20430;
            color:white;
            border:1px solid #C20430;
            font-size:12px;
        }
        .tb2 {            
           width:100%;          
        }     
        .tb2 td{
            width:50%;
        }
        .tb2 tr td:nth-child(2) {
            
        }

        
        .tb3 {            
           width:90%;
        }     
        .tb3 td{
            padding: 5px 5px;
            border:1px solid #DEEAF6;
            background-color: #DEEAF6;
            font-size:11px;
        }
        .tb3 th{
            padding: 2px 3px;             
            background-color: #C20430;
            color:white;
            border:1px solid #C20430;
            font-size:12px;
        }
    </style>
  </head>
  <body> 
    <img src="{{ public_path('/images/header.jpg') }}"/>
    <div>Product Details</div>
    <table class="tb1">
       <thead>
            <tr>
                <th style="width:20%">BATCH NUMBER:</th>
                <th style="width:20%">PRODUCT:</th>
                <th style="width:20%">PACKAGING:</th>                
                <th style="width:20%">COMPANY:</th>
                <th style="width:20%">DATE CERTIFICATE GENERATEED:</th>
            </tr>
        </thead>
            
        <tbody>
            <tr>               
                <td></td> 
                <td></td> 
                <td></td>
                <td></td> 
                <td>{{ date('d-m-Y H:i:s') }}</td>                              
            </tr>
        </tbody> 
   </table>
</div>
   <table class="tb2">
        <tr>
            <td>
                <div class="lead">Typical Chemical Analysis</div>
                <table class="tb3">
                    <thead>
                        <tr>
                            <th>Element</th>
                            <th>Presenting As</th>
                            <th>CONC. %</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>               
                            <td>Silica*</td> 
                            <td>SiO2</td> 
                            <td>{{$exdata[0]->silica}}</td>                            
                        </tr>  
                        <tr>               
                            <td>Iron</td>
                            <td>Fe2O3</td>  
                            <td>{{$exdata[0]->silica}}</td>                            
                        </tr> 
                        <tr>               
                            <td>Alumina</td>
                            <td>Al2O3</td>  
                            <td>{{$exdata[0]->alumina}}</td>                            
                        </tr> 
                        <tr>               
                            <td>Magnesium</td>
                            <td>MgO</td>  
                            <td>{{$exdata[0]->magnesium}}</td>                            
                        </tr> 
                        <tr>               
                            <td>Calcium</td>
                            <td>CaO</td>  
                            <td>{{$exdata[0]->calcium}}</td>                            
                        </tr> 
                        <tr>               
                            <td>Manganese</td>
                            <td>MnO</td>   
                            <td>{{$exdata[0]->manganese}}</td>                            
                        </tr>     
                        <tr>               
                            <td>Titanium</td>
                            <td>TiO2</td>  
                            <td>{{$exdata[0]->titanium}}</td>                            
                        </tr>     
                    </tbody> 
                </table> 
                <p>* 	Silica that is bound within the lattice of the garnet crystal and not free crystalline silica.</p>
                <div class="lead">Typical Physical Characteristics</div>
                <table class="tb3">
                    <thead>
                        <tr>
                            <th>Property</th>
                            <th>Value</th>
                        </tr>
                    </thead> 
                    <tbody>
                        <tr>               
                            <td>Specific Gravity</td> 
                            <td>{{$exdata[0]->specific_gravity}}</td>                            
                        </tr>  
                        <tr>               
                            <td>Bulk Density</td>
                            <td>{{$exdata[0]->bulk_density}}</td>                            
                        </tr> 
                        <tr>               
                            <td>Hardness</td>
                            <td>{{$exdata[0]->hardness}}</td>                            
                        </tr> 
                        <tr>               
                            <td>Melting Point</td>
                            <td>{{$exdata[0]->melting_point}}</td>                            
                        </tr> 
                        <tr>               
                            <td>Particle Shape</td>
                            <td>{{$exdata[0]->particle_shape}}</td>                            
                        </tr> 
                        <tr>               
                            <td>Fracture</td>
                            <td>{{$exdata[0]->fracture}}</td>                            
                        </tr>     
                        <tr>               
                            <td>Moisture Absorption</td>
                            <td>{{$exdata[0]->moisture_absorption}}</td>                            
                        </tr> 
                        <tr>               
                            <td>Magnetic Susceptibility</td>
                            <td>{{$exdata[0]->magnetic_susceptibility}}</td>                            
                        </tr>  
                        <tr>               
                            <td>Radioactive</td>
                            <td>{{$exdata[0]->radioactive}}</td>                            
                        </tr>                    
                    </tbody> 
                </table> 
            </td> 
            <td style="vertical-align: top">
                <div class="lead">Typical Mineral Composition</div>
                <table class="tb3">
                    <thead>
                        <tr>
                            <th>Element</th>
                            <th>Presenting As</th>
                            <th>CONC. %</th>
                        </tr>
                    </thead> 
                    <tbody>
                        <tr>               
                            <td>Garnet (Almandine)</td>
                            <td>Fe3Al2(SiO4)3</td>   
                            <td>{{$exdata[0]->garnet}}</td>                            
                        </tr>  
                        <tr>               
                            <td>Ilmenite</td>
                            <td>FeTiO3</td>   
                            <td>{{$exdata[0]->ilmenite}}</td>                            
                        </tr> 
                        <tr>               
                            <td>Zircon</td>
                            <td>ZrSiO4</td>   
                            <td>{{$exdata[0]->zircon}}</td>                            
                        </tr> 
                        <tr>               
                            <td>Crystalline Silica (free)</td>
                            <td>SiO2</td>   
                            <td>{{$exdata[0]->crystalline_silica}}</td>                            
                        </tr> 
                        <tr>               
                            <td>Other</td>
                            <td></td>   
                            <td>{{$exdata[0]->other}}</td>                            
                        </tr>          
                    </tbody> 
                </table>
                <p></p>
                <div class="lead">Typical Chloride & Conductivity</div>
                <table class="tb3">
                    <thead>
                        <tr>
                            <th>Property</th>
                            <th class="col-sm-8">Value</th>
                        </tr>
                    </thead> 
                    <tbody>
                        <tr>               
                            <td>CHLORIDE*:</td> 
                            <td>{{$exdata[0]->chloride}}</td>                            
                        </tr>  
                        <tr>               
                            <td>CONDUCTIVITY^:</td>
                            <td>{{$exdata[0]->conductivity}}</td>                            
                        </tr>          
                    </tbody> 
                </table> 
                <p>* Based on using ISO Standard 11127-7 test method, with a chloride content less than 25 ppm.</p>
                <p>^ Based on using ISO Standard 11127-6 test method, with a conductivity of less than 25 mS/m.</p>
            </td> 
        </tr>
    </table>
    

</body>
</html>