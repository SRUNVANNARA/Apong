@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center">
            <br>
            <img src="storage/images/plate.png" alt="" width="320" style="margin-top: 0px;">
        </div>

        <div class="text-center" id="vertical" style="display: none; margin-top: -300px">
            <img src="storage/images/v1.png" alt="" width="70" >
        </div>
        <div class="text-center" id="horizontal" style="margin-top: -175px; ">

            <img src="storage/images/{{$result}}" alt="" width="180" >

        </div>

        <div class="text-center" id="spin" style="display: none;margin-top: -303px;">
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
        <div id="btn" style="display: none" >
            <div class="text-center"  style=" margin-top: -310px;" id="cover">
                <img src="storage/images/cover.png" alt="" width="275" >
            </div>
            <form action="/welcome" method="GET">
                @csrf
                <div class="text-center" style="margin-top: -270px">
                    <input type="submit" name="1" id="1" value="" class="button" style="background-color: red; width: 100px; height: 140px;border-radius:100px 0px 00px 40px;border-color: transparent;outline: none"/>
                    <input type="submit" name="2" id="2" value="" class="button" style="background-color: green; width: 40px; height: 180px;border-radius:50px 50px 00px 0px;  border-color: transparent;outline: none"/>
                    <input type="submit" name="3" id="3" value="" class="button"  style="background-color: blue; width: 100px; height: 140px; border-radius:0px 100px 40px 0px;border-color: transparent;outline: none"/>
                </div>
            </form>
        </div>
        <div class="text-center my-5">
            <button  id="info" type="button" class="btn btn-outline-danger btn-lg">{{$info}}</button>
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
                setTimeout(function () {
                    var audio=new Audio("storage/sounds/"+n+".m4a");
                    audio.play();
                },3000);
                setTimeout(function () {
                    $("#1").attr('disabled',false);
                    $("#2").attr('disabled',false);
                    $("#3").attr('disabled',false);
                    document.getElementById("info").innerHTML="ដួលហើយ";
                },6000);
            });
            $("#1").click(function () {
                // $("#btn").hide();

            });
            $("#2").click(function () {
                // $("#btn").hide();

            });
            $("#3").click(function () {
                // $("#btn").hide();

            });
            $("#btn-play").click(function () {

            });

        });


    </script>


@endsection
