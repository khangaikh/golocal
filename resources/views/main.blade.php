
@extends('layouts.home')

@section('content')
    <div id="index-banner" class="parallax-container"  style="top: -65px; height: 600px">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h1 class="header center white-text "></h1>
                <div class="row center">
                    <h4 class="header col s12 light"></h4>
                </div>
                <br><br>
                <div style="background-color: black; opacity: 0.7; padding: 10px; border-radius: 5px; margin-top:260px">
                    <form class="col s12" style="opacity: 1 !important;">
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="first_name" type="text" class="validate" value="SAN FRANCISCO">
                                <label for="first_name">Destination</label>
                            </div>
                            <div class="input-field col s2">
                                <input id="last_name" type="text" class="validate" value="$ 250">
                                <label for="last_name">Plat fee</label>
                            </div>
                            <div class="input-field col s3">
                                <input type="date" class="datepicker">
                                <label for="last_name">Tour date</label>
                            </div>
                            <div class="input-field col s2">
                                <select>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <label for="last_name" style="top: -6px !important;">Passengers</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="parallax"><img  class="responsive-img " src="img/background.jpg" alt="Unsplashed background img"  style="background-size: contain;"></div>
    </div>
    <div  id="main-container" class="container">
        <div class="section">
            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m6">
                    <div class="icon-block">
                        <h2 class="center green-text"><i class="material-icons">flash_on</i></h2>
                        <h5 class="center">Daily Quotos</h5>
                        <p class="light justified">Lorem ipsum dolor sit amet, in per choro nonumes sententiae, est et graecis adipiscing. Est in vitae gloriatur. Ei nisl vidit dicit sit, in oratio debitis deserunt vis. No stet nominati sed, ne sit erat consequat. Est quidam pertinax eu, his ad quodsi fabellas reprimique. Perpetua partiendo cu vel, sed movet facete ocurreret ei. Te ferri quando pri, laoreet conceptam pri ex.
                        </p>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="icon-block">
                        <h2 class="center green-text"><i class="material-icons">group</i></h2>
                        <h5 class="center">User testimonials</h5>
                        <p class="light justified">Lorem ipsum dolor sit amet, in per choro nonumes sententiae, est et graecis adipiscing. Est in vitae gloriatur. Ei nisl vidit dicit sit, in oratio debitis deserunt vis. No stet nominati sed, ne sit erat consequat. Est quidam pertinax eu, his ad quodsi fabellas reprimique. Perpetua partiendo cu vel, sed movet facete ocurreret ei. Te ferri quando pri, laoreet conceptam pri ex.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h1 class="header col s12 white-text  z-depth-5-text">Lets do nice things</h1>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="img/background2.jpg" alt="Unsplashed background img 3"></div>
    </div>
@stop

