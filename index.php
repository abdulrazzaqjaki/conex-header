<?php
/*
* Plugin Name: Conex Header
* Plugin URI: https://theabdul.cyou
* Description: Simple Header for your site
* Version: 1.0
* Author: Abdul Razzaq
* Text Domain: wp-ism
*/


global $conex_url, $conex_dir;


$conex_url = plugin_dir_url(__FILE__);
$conex_dir = plugin_dir_path(__FILE__);


if(!function_exists('pree')){
    function pree($d){

        echo '<pre>';
        print_r($d);
        echo '</pre>';
    }
}

if(!function_exists('conex_get_svg')){
    function conex_get_svg($svg_name){

        global $conex_url, $conex_dir;

        $svg_url = '';

        if($svg_name){

            $svg_url = $conex_url.'assets/'.$svg_name;
        }


        return $svg_url;

    }
}



add_shortcode('conextion-header', 'conex_main_header_callback');

if(!function_exists('conex_main_header_callback')){


    function conex_main_header_callback(){

        ob_flush();
        ob_start();

        ?>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <style>

            *, ::after, ::before {
                box-sizing: border-box;
            }
            .conex-main-header {
                height: 827px;
            }

            .conex-header{
                position: relative;
                height: 710px;
                bottom: 0px;
                left: 0;
                width: 100%;
                margin: 0 !important;
                padding: 0 !important;
            }

            .conex_house{
                position: relative;
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%;
            }

            .conex_house.c_left {
                background: url(<?php echo conex_get_svg('house_left.svg'); ?>) no-repeat 50% !important;
                background-position: left 85% !important;
            }

            .conex_house.c_right {
                background: url(<?php echo conex_get_svg('house_right.svg'); ?>) no-repeat 50% !important;
                background-position: 102% 100% !important;
            }

            @media only screen and (max-width: 850px) {

            }

            .conex-header .line {
                position: absolute;
                bottom: -106px;
                height: 172px;
            }

            .row.conex-header, .conex-header .row{
                margin: 0 !important;
            }
            .conex-header .linebg {
                background: url(<?php echo conex_get_svg('ground.png'); ?>) no-repeat;
                background-position: bottom center;
                background-size: 125% 200%;
                position: absolute;
                bottom: -106px;
                height: 172px;
                width: 100%;
                opacity: 28%;
            }

            .conex-header .linegrass {
                background: url("<?php echo conex_get_svg('grass.png'); ?>") repeat-x;
                background-position: bottom center;
                background-size: 10%;
                position: absolute;
                bottom: 66px;
                height: 40px;
                width: 100%;
                opacity: 10%;
            }



            .conex-header .swings {
                position: absolute;
                bottom: 22px;
                left: 400px;
                opacity: .8;
            }

            .conex-header .sandcastle {
                position: absolute;
                bottom: -3px;
                left: 629px;
                opacity: .9;
            }

            .conex-header .plant {
                position: absolute;
                width: 70px;
                bottom: -58px;
                left: 315px;
                opacity: 1;
                display: flex;
                justify-content: flex-end;
            }

            .conex-header #plant {
                position: absolute;
                bottom: -57px;
                right: 533px;
                width: 30px;
                opacity: 1;
                display: flex;
                justify-content: flex-end;
            }

            .conex-header #plant2 {
                position: absolute;
                bottom: -70px;
                right: 159px;
                opacity: 1;
                display: flex;
                justify-content: flex-end;
            }

            .conex-header .grass {
                position: absolute;
                width: 30px;
                bottom: -30px;
                left: 39px;
            }

            .conex-header #birds {
                position: absolute;
                bottom: 0;
                right: 0;
            }

            .conex-header .twobirds {
                position: absolute;
                bottom: -58px;
                left: 500px;
                opacity: 1;
                width: 80px;
            }

            .conex-header #couple {
                position: absolute;
                bottom: -58px;
                right: 316px;
            }

            .conex-header #fmly {
                position: absolute;
                bottom: 43px;
                right: 557px;
            }

            .conex-header #cat {
                position: absolute;
                bottom: -58px;
                right: 586px;
            }

            .conex-header .bcenter {
                position: absolute;
                background-position: bottom;
                background-size: cover;
                background-repeat: no-repeat;
                height: 250px;
                width: 100%;
                bottom: 29px;
                left: 53%;
                transform: translateX(-53%);
            }


            @media only screen and (max-width: 850px) {
                .conex-header #couple {
                    width: 200px;
                    bottom: -58px;
                    right: 170px;
                }
                .conex-header #plant1,
                .conex-header #plant2 {
                    display: none;
                }
            }

            .conex-header .plant #butterfly {
                position: absolute;
                top: 5px;
                left: 16px;
                transform: rotate(30deg);
            }


            .man_child{
                position: absolute;
                bottom: 5%;
                left: 55%;

            }

            .man_child img{
                width: 30px;
            }


            .man_board{
                position: absolute;
                bottom: 7%;
                left: 10%;
                transform: rotate(-15deg);
            }

            .man_board img{
                width: 50px;
            }

            .man_child_board{
                position: absolute;
                bottom: -11%;
                left: 65%;
            }

            .man_child_board img{
                width: 135px;
            }
            .man_footbal{
                position: absolute;
                bottom: 5%;
                left: 27%;
            }

            .man_footbal img{
                width: 60px;
            }

            .girl_bench{
                position: absolute;
                bottom: -10%;
                left: 15%;
            }

            .girl_bench img{
                width: 155px;
            }

            /*hello*/

            @media only screen and (max-width: 768px){
                .conex-main-header {
                    height: 525px;
                }

                .conex-header{
                    height: 400px;
                }

                .man_child_board img{
                    width: 80px;
                }

                .man_footbal img{
                    width: 40px;
                }

                .man_board img{
                    width: 35px;
                }

            }



            @media only screen and (min-width: 768px) and  (max-width: 1023px){
                .conex-main-header {
                    height: 750px;
                }

                .conex-header{
                    height: 550px;
                }

                .man_child_board img{
                    width: 80px;
                }

                .man_footbal img{
                    width: 40px;
                }

                .man_board img{
                    width: 35px;
                }

            }





        </style>
        <div class="conex-main-header">

            <!--Header Contents-->
            <!--Background-->
            <div class="row conex-header">

                <!--Background Floor-->
                <div class="row linegrass">
                </div>
                <div class="row line">
                </div>
                <div class="row linebg">

                </div>

                <!--Background Floor-->

                <!--Background Center Piece-->
                <div class="bcenter">
                    <div class="centerleft">

                    </div>
                    <div class="centeright">

                    </div>
                </div>

                <!--Background Center Piece-->

                <!--Background Left Side Full size-->
                <div class="conex_house c_left col-lg d-none d-md-block" style="background-size: 45% !important">

                    <span class="man_child"><img src="<?php echo conex_get_svg('man_child.svg'); ?>" alt="" width="250" ></span>
                    <span class="girl_bench"><img src="<?php echo conex_get_svg('girl_bench.svg'); ?>" alt="" width="250" ></span>
                </div>
                <!--Background Left Side Full size-->

                <!--Background Right Side Full size-->
                <div class="conex_house c_right col-lg" style="background-size: 50% !important">

                    <span class="man_board"><img src="<?php echo conex_get_svg('man_board.svg'); ?>" alt="" width="250" ></span>
                    <span class="man_footbal"><img src="<?php echo conex_get_svg('footbal-2.svg'); ?>" alt="" width="250" ></span>
                    <span class="man_child_board"><img src="<?php echo conex_get_svg('man_child_board.svg'); ?>" alt="" width="250" ></span>


                </div>
                <!--Background Right Side Full size-->


            </div>
            <!--Background-->



        </div>


        <?php

        return ob_get_clean();

    }


}



?>





