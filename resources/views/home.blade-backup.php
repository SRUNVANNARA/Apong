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

        <img src="storage/images/h5.png" alt="" width="180" >
    </div>

    <div class="text-center" id="spin" style="display: none;margin-top: -303px;">
        <div id="demo" class="carousel " data-ride="carousel" data-interval="200" data-pause="false" >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="storage/images/v1.png" alt="" width="71" >
                </div>
                <div class="carousel-item ">
                    <img src="storage/images/v2.png" alt=""  width="70" >
                </div>
                <div class="carousel-item">
                    <img src="storage/images/v4.png" alt=""  width="71" >
                </div>
                <div class="carousel-item">
                    <img src="storage/images/v6.png" alt=""  width="70" >
                </div>
            </div>
        </div>
    </div>
    <div id="btn" style="display: none">
        <div class="text-center"  style=" margin-top: -310px;" id="cover">
            <img src="storage/images/cover.png" alt="" width="275" >
        </div>
        <form action="">
        <div class="text-center" style="margin-top: -270px">
            <input type="submit" name="r" id="r" value="" class="button" style="background-color: #2a9055; width: 100px; height: 140px;border-radius:100px 0px 00px 40px; background-color: red;border-color: transparent;outline: none"/>
            <input type="submit" name="b" id="b" value="" class="button" style="background-color: #2a9055; width: 40px; height: 180px;border-radius:50px 50px 00px 0px; background-color: green; border-color: transparent;outline: none"/>
            <input type="submit" name="s" id="s" value="" class="button"  style="background-color: #2a9055; width: 100px; height: 140px; border-radius:0px 100px 40px 0px;background-color: blue;border-color: transparent;outline: none"/>
    </div>
        </form>
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
                            $("#spin").show();
                        });
                        $("#spin").click(function () {
                            $("#btn").show();


                            $("#spin").hide();
                        });
                        $("#r").click(function () {
                            $("#btn").hide();
                            $("#horizontal").show();
                        });
                        $("#s").click(function () {
                            $("#btn").hide();
                            $("#horizontal").show();
                        });
                        $("#b").click(function () {
                            $("#btn").hide();
                            $("#horizontal").show();
                        });
                    });
        </script>
<div>
    <?php
    if ($_GET){
        if(isset($_GET['r'])){
            $random=mt_rand(1,6);
//            echo "<script>alert('$random');</script>";
        }elseif (isset($_GET['b'])){
            $big=mt_rand(4,6);
//            echo "<script>alert('$big');</script>";
        }elseif (isset($_GET['s'])){
            $big=mt_rand(1,3);
//            echo "<script>alert('$big');</script>";
        }
    }
    ?>
</div>



@endsection
