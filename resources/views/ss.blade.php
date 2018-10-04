@extends('layouts.app')

@section('content')
    <div class="container2">
        <div class="row" style="margin-left: 50px">
            <div class="col-md-10 col-md-offset-1" style="margin-top: 300px">
                <div {{--class="panel panel-default"--}}>
                    {{--<div class="panel-heading3">Coming</div>
                    <div class="panel-heading3">Soon</div>--}}
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
                    {{--<div class="image"><img src="../images/bg-header-slider.png" height="50%"></div>--}}

                    {{--<div class="imgp"><img style="float: right" src="../images/bg-header-slider.png" height="500px"></div>--}}
                    <div class="imgslider">
                        {{--<img style="float: outside" src="../images/slide_1.jpg" height="400px">--}}
                        <img class="image1" style="float: right" src="../images/bg-header-slider.png" height="500px">
                        <img class="image2" style="float: right" src="../images/slide_1.jpg" height="360px">
                    </div>

                    <div class="bttn">
                        <button class="btn" type="button" id="btnLM">Learn More</button>
                        <button class="btn1" type="button" id="btnDL">Download App</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection