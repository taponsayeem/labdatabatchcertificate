@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header lead bg-primary text-white">{{ __('Search by Batch Number') }}</div>

                <div class="card-body">                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif

                    <!--Welcome {{ auth()->user()->name._(' |')}} {{ __('You are logged in!') }}-->
                    <form method="post" action="{{ route('certificate') }}">
                        @csrf 
                        
                        <div style="font-weight:bold;width:90%;margin-left:40px;">Instructions:
                            <ul style="left:70px;font-weight:500;">
                                <li>When entering batch numbers, please use underscore instead of dashes. For <u>example</u> 24-16-2D-12-36B needs to be entered as 24_16_2D_12_36B</li>
                                <li>When entering batch numbers that have a zero in the second set of characters, please do not enter the 0. For <u>example</u> 24-08-2D-12-36B, please enter it as 24_8_2D_12_36B</li>
                                <li>For any enquiries please contact the Australian Garnet sales department at <a href="mailto:sales@australiangarnet.com.au">sales@australiangarnet.com.au</a></li>
                                
                            </ul>
                        </div>
                        <div class="row py-1"> 
                            <div class="col-sm-2 text-center">
                                <label for="batch_number"><b>Batch Number</b></label> 
                            </div>   
                            <div class="col-sm-8">                                
                                <input type="text" name="batch_number" placeholder="--Enter batch number--" value= "{{ old('batch_number') }}" autocomplete="on" class="form-control text-black @if ($errors->has('batch_number')) is-invalid @else border-secondary @endif" required/>                                
                                @if ($errors->has('batch_number'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('batch_number') }}</strong>
                                </span>
                                @endif                            
                            </div>     
                            <div class="col-sm-2 text-center">
                                <button type="submit" class="btn btn-primary btn-md" value="Search"><i class="bi bi-plus-circle-dotted"></i> Search</button>
                            </div>         
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
