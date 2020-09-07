<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="{{ url('home') }}">Codingku</a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left" action="/user" method="GET">
					<div class="input-group">
						<input type="text" name="cari" value="{{ old('cari') }}" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="submit" class="btn btn-primary" value="cari">Go</button></span>
					</div>
				</form>

				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
                         @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{auth()->user()->getAvatar()}}" class="img-circle" alt="Avatar"> <span>
                                    {{ auth()->user()->name }}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
								<li>
                                    <a href="{{ url('/logout') }}">Logout</a>
                                </li>

							</ul>

                            </li>
                        @endguest

						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
        </nav>
