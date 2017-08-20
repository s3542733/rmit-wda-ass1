<nav class="navbar navbar-default navbar-container">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href='{!! url('home') !!}'>Home</a> </li>
                <li><a href='{!! url('tickets') !!}'>View Tickets</a></li>
                <li><a href='{!! url('create') !!}'>Submit a new Ticket</a></li>
                <li><a href='{!! url('faq') !!}'>FAQ</a></li>
                <li><a href='{!! url('staff') !!}'>Staff Only</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><li><a href="#">Login</a></li></li>
            </ul>
        </div><!-- /.navbar-collapse --
    </div><!-- /.container-fluid -->
</nav>