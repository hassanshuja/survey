@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Success</div>
                <div class="card-body questions">
                    This link is send to the Client to fill the information.
                    @if(session()->has('link'))
                        <div class="alert alert-success">
                            click here 
                            <a href="http://{{ url('/').'/info/'. session()->get('link') }}">
                                http://{{ url('/').'/info/'. session()->get('link') }}
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
