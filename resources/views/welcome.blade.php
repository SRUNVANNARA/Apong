@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center">

            <img src="storage/images/plate.png" alt="" width="330px" style="margin-top: 20px">
        </div>

        <div class="text-center" id="vertical" style="display: none; margin-top: -225px">
            <img src="storage/images/v1.png" alt="" width="70" >
        </div>
        <div class="text-center" id="horizontal" style="margin-top: -100px; ">

            <img src="storage/images/{{$result}}" alt="" width="160" >

        </div>

        <div class="text-center" id="spin" style="display: none;margin-top: -225px;">
            <div id="demo" class="carousel " data-ride="carousel" data-interval="200" data-pause="false" >
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="storage/images/v1.png" alt="" width="70" >
                    </div>
                    <div class="carousel-item ">
                        <img src="storage/images/v2.png" alt=""  width="70" >
                    </div>
                    <div class="carousel-item">
                        <img src="storage/images/v4.png" alt=""  width="70" >
                    </div>
                    <div class="carousel-item">
                        <img src="storage/images/v6.png" alt=""  width="70" >
                    </div>
                </div>
            </div>
        </div>
        <div id="btn" style="display: none;">
            <div class="text-center"  style=" margin-top: -200px;" id="cover">
                {{--            <img src="storage/images/cover3.png" alt="" width="275" >--}}
                <img src="storage/images/cover.png" alt="" width="290px;">
            </div>
            <form action="/" method="GET">
                @csrf
                <div class="text-center" style="margin-top: -163px;">
                    <input type="text" name="random" id="random" value="{{$random}}" style="display: none;">
                    <input type="submit" name="1" id="1" value="" class="button" style="opacity: 0.3;background-color: transparent; width: 110px; height: 70px;border-radius:100px 0px 00px 0px;border-color: transparent;outline: none"/>
                    <input type="submit" name="2" id="2" value="" class="button" style="opacity: 0.3;background-color: transparent; width: 110px; height: 70px; border-radius:0px 100px 0px 0px; border-color: transparent;outline: none;"/>
                    <br>
                    <input type="submit" name="3" id="3" value="" class="button" style="opacity: 0.3;background-color: transparent; width: 120px; height: 70px; border-radius:15px 0px 0px 60px;  border-color: transparent;outline: none; margin-top: -3px;"/>
                    <input type="submit" name="4" id="4" value="" class="button"  style="opacity: 0.3;background-color: transparent; width: 120px; height: 70px;border-radius:0px 15px 60px 0px; border-color: transparent;outline: none; margin-top: -3px;"/>
                </div>
            </form>
        </div>
        <br>
        <div class="text-center my-3">
            <button  id="info" type="button" class="btn btn-outline-primary btn-lg">{{$info}}</button>
        </div>

        <div class="footer text-center">
            <img src="storage/images/result-board.png" width="300px" alt="">
            <br><br><br>
        </div>

    </div>

@endsection
@section('script')
    <script>


        $(document).ready(function(){
            $("#cover").click(function(){

            });
            $("#horizontal").click(function () {
                $("#horizontal").hide();
                $("#vertical").show();
            });
            $("#vertical").click(function () {
                $("#vertical").hide();
                $("#info").hide();
                $("#spin").show();
            });
            $("#spin").click(function () {
                $("#btn").show();
                $("#horizontal").hide();
                $("#spin").hide();
                $("#info").show();
                var n=Math.floor((Math.random() * 6) + 1);
                document.getElementById("info").innerHTML="កំពុងវិល";
                $("#1").attr('disabled',true);
                $("#2").attr('disabled',true);
                $("#3").attr('disabled',true);
                $("#4").attr('disabled',true);
                var audio=new Audio("storage/sounds/"+n+".mp3");
                setTimeout(function () {
                    audio.play();
                },3000);
                setTimeout(function () {
                    $("#1").attr('disabled',false);
                    $("#2").attr('disabled',false);
                    $("#3").attr('disabled',false);
                    $("#4").attr('disabled',false);
                    document.getElementById("info").innerHTML="ដួលហើយ";
                },6000);
            });
        });


    </script>


@endsection
