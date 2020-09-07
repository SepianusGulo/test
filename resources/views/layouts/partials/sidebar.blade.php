<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
                        <li><a href="{{ url('home') }}" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                        @if(Auth::check() && Auth::user()->role === 'admin')
						<li><a href="{{ url('user') }}" class=""><i class="lnr lnr-user"></i> <span>User</span></a></li>
                        @endif
                        @if(Auth::check() && Auth::user()->role === 'calon')
						<li><a href="{{ url('user/profile') }}" class=""><i class="lnr lnr-user"></i> <span>Profile</span></a></li>
                        @endif

					</ul>
				</nav>
			</div>
		</div>
