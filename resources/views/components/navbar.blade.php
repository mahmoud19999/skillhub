<nav id="nav">
    <ul class="main-menu nav navbar-nav navbar-right">
        <li><a href="index.html">@lang('web.home')</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@lang('web.cats')<span class="caret"></span></a>
            <ul class="dropdown-menu">

                @foreach ($cats as $cat)

                <li><a href="{{ route('cats', $cat->id) }}">

                    {{ $cat->name() }}

                </a></li>


                @endforeach

            </ul>
        </li>
        <li><a href="contact.html">@lang('web.contact')</a></li>
        <li><a href="login.html">@lang('web.signin')</a></li>
        <li><a href="register.html">@lang('web.signup')</a></li>

        @if(App::getLocale() == "ar")

        <li><a href="{{ url('lang/set/en') }}">English</a></li>

        @else
        <li><a href="{{ url('lang/set/ar') }}">عربي</a></li>

        @endif



    </ul>
</nav>
