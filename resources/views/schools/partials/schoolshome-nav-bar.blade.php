<!-- navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand">Forster's Gym 2015</a>
        </div>

        <div class="navbar-collapse" id="navbar-main">

            <!-- show schools menu option -->
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="schools">
                        Schools
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu" aria-labelledby="schools">
                        <li><a href="{{ URL::to('school') }}">Show Schools</a></li>
                    </ul>
                </li>
            </ul> <!-- end schools menu option -->


            <ul class="nav navbar-nav navbar-right">
                <p class="navbar-text navbar-right">Coded by {{ config('forstersgym.coder') }}</p>
            </ul>
        </div>
    </div>  <!-- end navbar container -->
</nav> <!-- close navbar -->