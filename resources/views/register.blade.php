@extends('layouts.app')

@section('content')
<div class="container4">
    <div class="row" style="margin-left: 50px">
        <div class="col-md-10 col-md-offset-1" style="margin-top: 300px">
            <div class="panel-heading">Meet BestApp</div>
            <div class="panel-heading">The new world for chat</div>

            <div class="panel-body" style="margin-top: 15px">
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing
                    elit.
                </p>
                <p>
                    Aenean commodo ligula eget dolor.
                    Aenean massa.
                </p>
                <p>
                    Cum sociis natoque penatibus et magnis dis parturient
                    montes, nascetur ridiculus mus.
                </p>
                <p>
                    Donec quam felis,
                    ultricies nec, pellentesque eu, pretium quis, sem.
                </p>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading2">Sign Up!</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-1 control-label"></label>

                            <div class="col-md-5">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Your Name">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-1 control-label"></label>

                            <div class="col-md-5">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail Address">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-1 control-label"></label>

                            <div class="col-md-5">
                                <input id="phone" type="tel" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Phone Number">

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-control1">
                                <input type="checkbox"> I agree to the terms and conditions
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="button">
                                <button class="btn4">Send me this app</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="button">
            <button class="btn2" type="button1" id="btnLM">Learn More</button>
            <button class="btn3" type="button2" id="btnDL">Download App</button>
        </div>
    </div>
</div>
@endsection
