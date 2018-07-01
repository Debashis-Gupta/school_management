
<html>
    <head>
        <title>Admission Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            img {
                width: 150px;
                height: 150px
                object-fit:cover;
            }
            .image{
                width: 100%;
                height: 100%;
            }
            .head_color{
                background: firebrick;
                text-align: center;
                color: whitesmoke;
            }
            .head_color h3{
                padding: 10px;
            }
            .form_design{
                font-size: 17px;
                padding-left: 142px;
                padding-top: 14px;
            }
            .signature{
                border: 1px solid blueviolet;
                width: 250px;
            }
            .fit{
                margin:100px;
            }
            .fit p{
                font-size: 15px;

                padding-left: 67px;

                padding-top: 5px;
            }
        </style>
    </head>

    <body>
        {{--Start of form--}}
        <div class="container">
            
            {{--Image setting--}}
            
            <div class="text-center">
                <img src="{{asset('img/logo.jpg')}}">
            </div>

            {{--end of image setting--}}
            <div class="text-center">
                    <h2>Bir MuktiJoddha Mostafizur Rahman Institute</h2>

                <h4>Upazila Road, Phulbari, Dinajpur</h4>

                <p> <strong>Est.:</strong>2017, <strong>EIIN:</strong> 138327 </p>
            </div>
            <div class="head_color">
                <h3>Admission Form</h3>
            </div>
            <div class="text-center">
                <img src="{{base_path() . '/storage/image'.$image}}" class="rounded" alt="...">
            </div>
            <div class="row">
                <div class="col-md-6 form_design">
                   <p><b>Applicant Name :</b><span>{{$name}}</span></p>
                    <p><b>Admission Roll :</b><span>{{$roll}}</span></p>

                </div>
                <div class="col-md-6 form_design">
                    <p><b>Applied Class :</b><span>{{$class}}</span></p>
                    <p><b>Applied Group :</b><span>{{$group}}</span></p>
                </div>
                {{--<div class="col-md-7">--}}
                    {{--<img  src="{{asset('img/logo.jpg')}}">--}}
                {{--</div>--}}

            </div>

            <div class="pull-left fit">

                <div class="signature"></div>
                <p> <strong>Invesitor Sign</strong> </p>

            </div>
            <div class="row">
                <div class="col-md-12">
                   <h4><strong>Notice:</strong></h4>
                    <p>Please take a color printed photocopy of the admit card and the applicant must bring it to the exam</p>

                </div>
            </div>



            
        </div>
    {{--End of form--}}

    </body>

</html>



<?php
/**
 * Created by PhpStorm.
 * User: debashis
 * Date: 6/3/18
 * Time: 9:10 PM
 */

