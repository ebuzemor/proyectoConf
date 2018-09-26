<div class="nav-absolute nav-sticky nav-light" data-nav-sticky-classes="rgba-black-strong" data-nav-sticky-logo='assets/img/logoConfraise.png'>
    <!-- Header -->
    <nav class="mainnav navbar navbar-default justify-content-between">
        <div class="container relative">
            <a class="offcanvas dl-trigger paper-nav-toggle" type="button" data-toggle="offcanvas"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i></i>
            </a>
            <a class="navbar-brand" href="/">
                <img src="assets/img/logoConfraise.PNG" width="184" height="64" alt="">
            </a>
            <div class="paper_menu">
                <div id="dl-menu" class="xv-menuwrapper responsive-menu">
                    <ul class="dl-menu align-items-left">
                    	<li class="parent"><a href="#"><font size="3">Browse</font></a>
                    		<ul class="lg-submenu">
                    			<li><a href="#"><i class="icon icon-diamond2"></i>Projects</a></li>
                    			<li><a href="#"><i class="icon icon-diamond2"></i>Conferences</a></li>
                    		</ul>
                    	</li>
                    	<li class="parent"><a href="#"><font size="3">Start a project</font></a>
                    		<ul class="lg-submenu">
                    			<li><a href="#"><i class="icon icon-diamond2"></i>Projects</a></li>
                    			<li><a href="#"><i class="icon icon-diamond2"></i>Conferences</a></li>
                    		</ul>
                    	</li>
                    	<li class="parent"><a href="#"><font size="3">How it works</font></a>
                    		<ul class="lg-submenu">
                    			<li><a href="#"><i class="icon icon-diamond2"></i>Projects</a></li>
                    			<li><a href="#"><i class="icon icon-diamond2"></i>Conferences</a></li>
                    		</ul>
                    	</li>
                        <li>
                            @guest
                        	   <a href="{{route('login')}}"><font size="3">Sign in</font></a>
                            @else
                               <a href="{{route('logout')}}"><font size="3">Logout</font></a> 
                            @endguest
                        </li>
                    </ul>
                </div>
            <!-- Login modal -->
            </div>
        </div>
    </nav>
</div>