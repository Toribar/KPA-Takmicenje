<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar">

            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ route('competitors.index') }}">
                        <i class="fa fa-tasks"></i> Takmičari
                    </a>
                </li>

                <li>
                    <a href="{{ url('categories/contest') }}">
                        <i class="fa fa-tasks"></i> Pojedinacan plasman
                    </a>
                </li>

                <li>
                    <a href="{{ route('clubs.index') }}">
                        <i class="fa fa-calendar"></i> Klubovi
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-briefcase"></i> Klupski plasman
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
