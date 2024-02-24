
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-2">
        <div class="col-md-12"> 
            <div class="row py-1">   
                <div class="col-sm-6">                
                    <div class="form-group">
                        <label class="lead">Batch Number</label> 
                        <label class="form-control text-black mt-2">{{$sample->batchno}}</label>                            
                    </div>              
                </div>
                
                <div class="col-sm-6">                
                    <div class="form-group">
                        <label class="lead">Product</label> 
                        <labe class="form-control text-black mt-2">@if(substr($sample->batchno, -3)=='24B') {{'AG 20/40 Mesh'}} @elseif(substr($sample->batchno, -3)=='36B') {{'AG 30/60 Mesh'}} @elseif(substr($sample->batchno, -3)=='80W') {{'AG 80 Mesh'}} @elseif(substr($sample->batchno, -3)=='12W') {{'AG 120 Mesh'}} @else {{$sample->name}} @endif</label> 
                    </div>              
                </div> 
                <!--div class="col-sm-3">                
                    <div class="form-group">
                        <label for="packaging">PACKAGING</label> 
                        <input type="text" name="packaging" placeholder="--Enter packaging--" value= "" autocomplete="off" class="form-control text-black mt-2 @if ($errors->has('packaging')) is-invalid @else border-secondary @endif" required/>                                
                        @if ($errors->has('packaging'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('packaging') }}</strong>
                        </span>
                        @endif
                    </div>              
                </div>
                
                <div class="col-sm-3">                
                    <div class="form-group">
                        <label for="company">COMPANY</label> 
                        <input type="text" name="company" placeholder="--Enter company--" value= "" autocomplete="off" class="form-control text-black mt-2 @if ($errors->has('company')) is-invalid @else border-secondary @endif" required/>                                
                        @if ($errors->has('company'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('company') }}</strong>
                        </span>
                        @endif
                    </div>              
                </div-->
            </div>            
        </div>        
    </div>
    <div class="row justify-content-center py-2">
        <div class="col-md-6"> 
            <div class="lead">Typical Chemical Analysis</div>
            <table class="table table-bordered" style="width:100%">
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
            <div class="lead">Typical Physical Characteristics</div>
            <table class="table table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Property</th>
                        <th>Value</th>
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
        </div>  
        <div class="col-md-6"> 
            <div class="lead">Typical Mineral Composition</div>
            <table class="table table-bordered" style="width:100%">
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
            <div class="lead">Typical Chloride & Conductivity</div>
            <table class="table table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Property</th>
                        <th class="col-sm-8">Value</th>
                    </tr>
                </thead> 
                <tbody>
                    <tr>               
                        <td>CHLORIDE*:</td>
                        <td>@if($prdata) {{$prdata[0]->chloride}} @endif</td> 
                    </tr>  
                    <tr>               
                        <td>CONDUCTIVITY^:</td>
                        
                        <td>@if($prdata) {{$prdata[0]->conductivity}} @endif</td>  
                                                 
                    </tr>          
                </tbody> 
            </table> 
            <div class="text-center py-5">	
		        <button type="button" id="btncertificate" class="btn btn-success btn-lg"><i class="bi bi-plus-lg"></i>Generate Certificate</button>
            </div>  
        </div>  
    </div>  

    

<!-- Modal HTML -->
<div id="myModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{ route('generatecertificate') }}"> 
                @csrf 
                <div class="modal-header">
                    <h5 class="modal-title">Product Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <!--p>Do you want to save changes to this document before closing?</p>
                    <p class="text-secondary"><small>If you don't save, your changes will be lost.</small></p-->
                
                    <div>
                        <input type="hidden" name="exid" value="{{$exdata[0]->id}}">
                        <input type="hidden" name="batchno" value="{{$sample->batchno}}">
                        <input type="hidden" name="samplename" value="{{$sample->name}}">
                        <input type="hidden" name="sampleid" value="{{$sample->sampleid}}">
                    <div>
                    <div class="py-1">                
                        <div class="form-group">
                            <label for="packaging">PACKAGING</label> 
                            <input type="text" name="packaging" placeholder="--Enter packaging--" value= "" autocomplete="off" class="form-control text-black mt-2 @if ($errors->has('packaging')) is-invalid @else border-secondary @endif" required/>                                
                            @if ($errors->has('packaging'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('packaging') }}</strong>
                            </span>
                            @endif
                        </div>              
                    </div>
                    
                    <div class="py-1">                
                        <div class="form-group">
                            <label for="company">COMPANY</label> 
                            <input type="text" name="company" placeholder="--Enter company--" value= "" autocomplete="off" class="form-control text-black mt-2 @if ($errors->has('company')) is-invalid @else border-secondary @endif" required/>                                
                            @if ($errors->has('company'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('company') }}</strong>
                            </span>
                            @endif
                        </div>              
                    </div>

                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
      
</div>

<!-- jQuery Code (to Show Modal on Page Load) -->
<script>
$(document).ready(function() {
    $('#btncertificate').on('click',function(){
        $("#myModal").modal("show");
    })
    
});
</script>
@endsection