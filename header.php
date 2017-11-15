<?php
/**
 * Created by PhpStorm.
 * User: dobiasz.tamas
 * Date: 2017.08.21.
 * Time: 7:24
 */
?>
<!DOCTYPE HTML>
<html class="no-js" lang="hu">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootsnav is a multi purpose header based with Bootstrap, you can build any header style with bootsnav only with a few minutes">
    <meta name="keywords" content="Bootsnav, Menu, Navigation, Navbar, Bootstrap, Dropdown, Multi Dropdown, Megamenu">
    <meta name="robots" content="index,follow">
    <title>Fodin-Home Kft</title>
    <link rel="icon" href="image/favicon.ico">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="bootsnav-master/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootsnav-master/css/animate.css" rel="stylesheet">
    <link href="bootsnav-master/css/bootsnav.css" rel="stylesheet">
    <link href="bootsnav-master/css/style.css" rel="stylesheet">
    <link href="bootsnav-master/images/brand/logo-black.png" rel="import">
    <link href="fonts/FontAwesome/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="typed.js-master/js/typed.js" type="text/javascript"></script>
    <script src="typed.js-master/js/typednext.js" type="text/javascript"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            Typed.new("#typed", {
                stringsElement: document.getElementById('typed-strings'),
                typeSpeed: 30,
                backDelay: 500,
                loop: false,
                contentType: 'html', // or text
                // defaults to null for infinite loop
                loopCount: null,
                callback: function(){ foo(); },
                resetCallback: function() { newTyped(); }
            });
            var resetElement = document.querySelector('.reset');
            if(resetElement) {
                resetElement.addEventListener('click', function() {
                    document.getElementById('typed')._typed.reset();
                });
            }
        });
        function newTyped(){ /* A new typed object */ }
        function foo(){ console.log("Callback"); }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            Typednext.new("#typednext", {
                stringsElement: document.getElementById('typed-strings'),
                typeSpeed: 30,
                backDelay: 500,
                loop: false,
                contentType: 'html', // or text
                // defaults to null for infinite loop
                loopCount: null,
                callback: function(){ foo(); },
                resetCallback: function() { newTypednext(); }
            });
            var resetElement = document.querySelector('.reset');
            if(resetElement) {
                resetElement.addEventListener('click', function() {
                    document.getElementById('typednext')._typed.reset();
                });
            }

        });
        function newTypednext(){ /* A new typed object */ }
        function foo(){ console.log("Callback"); }
    </script>
    <link href="main.css" rel="stylesheet"/>
    <style>
        .title-bar {
            padding: 5px 0;
            font-family: "Lucida Grande", sans-serif;
            font-size: 0.75em;
            text-align: center;
            text-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px;
            background-color: #f8f8f8;
            background-image: -webkit-linear-gradient(top, #f3f3f3, #bcbbbc);
            background-image: -moz-linear-gradient(top, #f3f3f3, #bcbbbc);
            background-image: linear-gradient(top, #f3f3f3, #bcbbbc);
            box-shadow: inset rgba(255, 255, 255, 0.7) 0px 1px 1px;
            border-bottom: #6a6a6a 1px solid;
        }
        /* code for animated blinking cursor */
        .typed-cursor{
            opacity: 1;
            font-weight: 100;
            -webkit-animation: blink 0.7s infinite;
            -moz-animation: blink 0.7s infinite;
            -ms-animation: blink 0.7s infinite;
            -o-animation: blink 0.7s infinite;
            animation: blink 0.7s infinite;
        }
        .text-body {
            height: 70px;
            background-color: rgba(0, 0, 0, 0.85);
            padding: 10px;
            color: #f0f0f0;
            text-shadow: #000 0px 1px 0px;
            font-family: "Consolas", "Courier New", "Courier";
            font-size: 1.75em;
            line-height: 1.40em;
            font-weight: 500;
            text-align: left;
            overflow: hidden;
            -webkit-transition: all 0.5s ease-out;
            -moz-transition: all 0.5s ease-out;
            -ms-transition: all 0.5s ease-out;
            -o-transition: all 0.5s ease-out;
            transition: all 0.5s ease-out;
        }
        .text-body2 {
            height: 250px;
            background-color: rgba(0, 0, 0, 0.85);
            padding: 10px;
            color: #f0f0f0;
            text-shadow: #000 0px 1px 0px;
            font-family: "Consolas", "Courier New", "Courier";
            font-size: 1.75em;
            line-height: 1.40em;
            font-weight: 500;
            text-align: left;
            overflow: hidden;
            -webkit-transition: all 0.5s ease-out;
            -moz-transition: all 0.5s ease-out;
            -ms-transition: all 0.5s ease-out;
            -o-transition: all 0.5s ease-out;
            transition: all 0.5s ease-out;
        }

        main.css-2 * {
            padding: 0;
            margin: 0;
        }
        @-webkit-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-webkit-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-moz-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-ms-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-o-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }

        .typed-fade-out{
            opacity: 0;
            animation: 0;
            transition: opacity .25s;
        }
    </style>
    <style>
        body, html {
            margin: 0;
            font: 400 15px/1.8 "Lato", sans-serif;
            color: #5e5e5e;
        }
        .bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4, .bgimg-5, .bgimg-6, .bgimg-7 .bgimg-8, .bgimg-9, .bgimg-10, .bgimg-11, .bgimg-12, .bgimg-13, .bgimg-14{
            position: relative;
            opacity: 0.65;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .bgimg-1 {
            background-image: url("image/living5.jpg");
            min-height: 100%;
        }
        .bgimg-2 {
            background-image: url("image/bathroom2.jpg");
            min-height: 400px;
        }
        .bgimg-3 {
            background-image: url("image/living4.jpg");
            min-height: 400px;
        }
        .bgimg-4 {
            background-image: url("image/living1.jpg");
            min-height: 100%;
        }
        .bgimg-5 {
            background-image: url("image/bathroom1.jpg");
            min-height: 400px;
        }
        .bgimg-6 {
            background-image: url("image/bedroom1.jpg");
            min-height: 400px;
        }
        .bgimg-7 {
            background-image: url("image/livingroom3.jpg");
            min-height: 400px;
        }
        .bgimg-8 {
            background-image: url("image/parketta1.jpg");
            min-height: 100%;
        }
        .bgimg-9 {
            background-image: url("image/parketta2.jpg");
            min-height: 400px;
        }
        .bgimg-10 {
            background-image: url("image/parketta3.jpg");
            min-height: 400px;
        }
        .bgimg-11 {
            background-image: url("image/living1.jpg");
            min-height: 100%;
        }
        .bgimg-12 {
            background-image: url("image/bathroom1.jpg");
            min-height: 400px;
        }
        .bgimg-13 {
            background-image: url("image/bedroom1.jpg");
            min-height: 400px;
        }
        .bgimg-14 {
            background-image: url("image/livingroom3.jpg");
            min-height: 400px;
        }
        .caption {
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            text-align: center;
            color: #000;
        }
        .caption span.border {
            background-color: #111;
            color: #fff;
            padding: 18px;
            font-size: 25px;
            letter-spacing: 10px;
        }
        h3 {
            letter-spacing: 5px;
            text-transform: uppercase;
            font: 20px "Lato", sans-serif;
            color: #111;
        }
        /* Turn off parallax scrolling for tablets and phones */
        @media only screen and (max-device-width: 1024px) {
            .bgimg-1, .bgimg-2, .bgimg-3 .bgimg-4, .bgimg-5, .bgimg-6 .bgimg-7{
                background-attachment: scroll;
            }
        }
    </style>
    <script>
        $(document).ready(function() {
            $("body").flowUp("h3", { transalteY: 350, duration: 100 });
        });
    </script>
</head>
