@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Questionnaire</div>
                <div class="card-body questions">
                    <div class="row">
                        <div class="col">  
                            <h3>Please Fill in the Information Given Below.</h3>
                        </div>
                    </div>

                    @foreach($questions as $res)
                    <div class="row">
                        <div class="col-md-8">  
                            <span >This is a sample question. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        </div>
                        <div>
                            <textarea class="input_text" rows="7" cols="100">
                                
                            </textarea>
                        </div>
                    </div>

                    @endforeach
                    <div class="row">
                        <div class="col-md-12">  
                            <span >This is a sample question. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        </div>
                        <div >
                            <textarea class="input_text" rows="8" cols="120">
                                
                            </textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">  
                            <span >This is a sample question. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        </div>
                        <div>
                            <textarea rows="4" cols="50">
                                
                            </textarea>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
