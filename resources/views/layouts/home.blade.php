<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>GoLocal</title>
        <!--CSS-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        {!! Html::style('css/materialize.css') !!}
        {!! Html::style('css/style.css') !!}
    </head>
    <body>
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

        <!--Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('select').material_select();
                $('.datepicker').pickadate({
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 15 // Creates a dropdown of 15 years to control year
                });
                var scroll_start = 0;
                var startchange = $('#main-container');
                var offset = startchange.offset();
                if (startchange.length){
                    $(document).scroll(function() {
                        scroll_start = $(this).scrollTop();
                        if(scroll_start > offset.top) {
                            $("#nav-bar").removeClass('transparent');
                        } else if(scroll_start == offset.top){
                            $('#nav-bar').addClass('transparent');
                        }
                        else {
                            $('#nav-bar').addClass('transparent');
                        }
                    });
                }
            });

        </script>
        {!! Html::script('js/materialize.js') !!}
        {!! Html::script('js/init.js') !!}
    </body>
</html>