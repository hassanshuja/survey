@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <form action="{{ route('submitAnswer') }}" method="post">
                        @csrf
                    <div class="card-header">Questionnaire</div>
                    <div class="card-body questions">
                        <div class="row">
                            <div class="col">  
                                <h3>Please Fill in the Information Given Below.</h3>
                            </div>
                        </div>
                        @foreach($questions as $res)
                        <div class="row">
                            <div class="col col-md-8 question"> 
                               <div class="checkboxes">
                                   <label class="green-background col-md-12" for="q-{{ $res->q_no}}"><b>{{ $res->q_no}}</b> {{ $res->question }}</label>
                               </div>
                            </div>
                            <div class="answer">
                                <textarea name="{{ $res->q_no }}" class="input_text" rows="7" cols="100" required>
                                </textarea>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <input name="link" type="hidden" value="{{ $link }}">
                    <div class="row">
                        <div class="col">  
                            <div class="checkboxes col-md-6">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
