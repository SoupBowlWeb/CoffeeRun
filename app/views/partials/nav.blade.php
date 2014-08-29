<div id="navbar-main">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-mug" style="color: #CCC;"></span>
                </button>
                <a class="navbar-brand hidden-xs hidden-sm" href="/" style="color: #CCC;"><span class="icon icon-mug"></span></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                </ul>

                @if( Auth::check() )
                    <p style="color: white; margin: 0; padding: 10px 0;" class="pull-right">
                        <img src="{{ Auth::user()->picture }}" alt="{{ Auth::user()->fullName() }}" width="32"/>
                        {{ Auth::user()->fullName() }}
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn" href="/logout" style="font-size: 16px; color: white;"><span class="icon icon-exit" style="color: white;"></span> LOGOUT</a>                    </p>
                @endif


            </div>
        </div>
    </div>
</div>