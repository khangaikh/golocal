<header>
    <div>
    <nav id="nav-bar" class="navbar navbar-default transparent " role="navigation" style="box-shadow: none;">
        <div class="nav-wrapper container" >
            <a id="logo-container" href="/" class="brand-logo"
                style="padding-top: 10px"> <img src="img/logo.png" class="brand-logo" style="width:100px"></a>
            <ul class="right hide-on-med-and-down ">
                <li><a href=" {{ url('/auth/register') }} ">Login</a></li>
                <li><a href=" {{ url('/auth/register') }} ">Drivers</a></li>
                <li><a href="help.html">Help</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
            <ul id="nav-mobile" class="side-nav ">
                <li><a href="login.html">Login </a></li>
                <li><a href="login.html">Drives</a></li>
                <li><a href="help.html">Help</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</header>
