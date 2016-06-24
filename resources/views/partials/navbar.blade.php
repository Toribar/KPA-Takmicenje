<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="{{ url('/contest') }}">
                    <spinner></spinner> Takmičenje
                </a>
        </div>

        <div class="collapse navbar-collapse" id="navbar">

            <ul class="nav navbar-nav">
                <li class="{{ Ekko::isActiveRoute('competitors.*') }}">
                    <a href="{{ route('competitors.index') }}">
                        <i class="fa fa-tasks"></i> Takmičari
                    </a>
                </li>

                <li  class="{{ Ekko::isActiveRoute('clubs.*') }}">
                    <a href="{{ route('clubs.index') }}">
                        <i class="fa fa-calendar"></i> Klubovi
                    </a>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Admin <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">

                            <li>
                                <a href="{{ route('categories.index') }}">
                                    <i class="fa fa-file-powerpoint-o"></i> Unos kategorije
                                </a>
                            </li>

                        </ul>
                    </li>

            </ul>
        </div>
    </div>
</nav>
