@extends('layouts.admin')

@section('content')
<section class="body">

		<!-- start: header -->
		<header class="header">
			<div class="logo-container">
				<a href="/home" class="logo">
					<img src="/images/logo.png" height="35" alt="Porto Admin" />
				</a>
				<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
					<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
				</div>
			</div>
		
			<!-- start: search & user box -->
			<div class="header-right">
		
				<form action="pages-search-results.html" class="search nav-form">
					<div class="input-group input-search">
						<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
						</span>
					</div>
				</form>
		
				<span class="separator"></span>
		
				<ul class="notifications">
					<li>
						<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
							<i class="fa fa-tasks"></i>
							<span class="badge">3</span>
						</a>
		
						<div class="dropdown-menu notification-menu large">
							<div class="notification-title">
								<span class="pull-right label label-default">3</span>
								Tasks
							</div>
		
							<div class="content">
								<ul>
									<li>
										<p class="clearfix mb-xs">
											<span class="message pull-left">Generating Sales Report</span>
											<span class="message pull-right text-dark">60%</span>
										</p>
										<div class="progress progress-xs light">
											<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
										</div>
									</li>
		
									<li>
										<p class="clearfix mb-xs">
											<span class="message pull-left">Importing Contacts</span>
											<span class="message pull-right text-dark">98%</span>
										</p>
										<div class="progress progress-xs light">
											<div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
										</div>
									</li>
		
									<li>
										<p class="clearfix mb-xs">
											<span class="message pull-left">Uploading something big</span>
											<span class="message pull-right text-dark">33%</span>
										</p>
										<div class="progress progress-xs light mb-xs">
											<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
							<i class="fa fa-envelope"></i>
							<span class="badge">4</span>
						</a>
		
						<div class="dropdown-menu notification-menu">
							<div class="notification-title">
								<span class="pull-right label label-default">230</span>
								Messages
							</div>
		
							<div class="content">
								<ul>
									<li>
										<a href="#" class="clearfix">
											<figure class="image">
												<img src="/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle" />
											</figure>
											<span class="title">Joseph Doe</span>
											<span class="message">Lorem ipsum dolor sit.</span>
										</a>
									</li>
									<li>
										<a href="#" class="clearfix">
											<figure class="image">
												<img src="/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
											</figure>
											<span class="title">Joseph Junior</span>
											<span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
										</a>
									</li>
									<li>
										<a href="#" class="clearfix">
											<figure class="image">
												<img src="/images/!sample-user.jpg" alt="Joe Junior" class="img-circle" />
											</figure>
											<span class="title">Joe Junior</span>
											<span class="message">Lorem ipsum dolor sit.</span>
										</a>
									</li>
									<li>
										<a href="#" class="clearfix">
											<figure class="image">
												<img src="/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
											</figure>
											<span class="title">Joseph Junior</span>
											<span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
										</a>
									</li>
								</ul>
		
								<hr />
		
								<div class="text-right">
									<a href="#" class="view-more">View All</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
							<i class="fa fa-bell"></i>
							<span class="badge">3</span>
						</a>
		
						<div class="dropdown-menu notification-menu">
							<div class="notification-title">
								<span class="pull-right label label-default">3</span>
								Alerts
							</div>
		
							<div class="content">
								<ul>
									<li>
										<a href="#" class="clearfix">
											<div class="image">
												<i class="fa fa-thumbs-down bg-danger"></i>
											</div>
											<span class="title">Server is Down!</span>
											<span class="message">Just now</span>
										</a>
									</li>
									<li>
										<a href="#" class="clearfix">
											<div class="image">
												<i class="fa fa-lock bg-warning"></i>
											</div>
											<span class="title">User Locked</span>
											<span class="message">15 minutes ago</span>
										</a>
									</li>
									<li>
										<a href="#" class="clearfix">
											<div class="image">
												<i class="fa fa-signal bg-success"></i>
											</div>
											<span class="title">Connection Restaured</span>
											<span class="message">10/10/2016</span>
										</a>
									</li>
								</ul>
		
								<hr />
		
								<div class="text-right">
									<a href="#" class="view-more">View All</a>
								</div>
							</div>
						</div>
					</li>
				</ul>
		
				<span class="separator"></span>
		
				<div id="userbox" class="userbox">
					<a href="#" data-toggle="dropdown">
						<figure class="profile-picture">
							<img src="/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="/images/!logged-user.jpg" />
						</figure>
						<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
							<span class="name">John Doe Junior</span>
							<span class="role">administrator</span>
						</div>
		
						<i class="fa custom-caret"></i>
					</a>
		
					<div class="dropdown-menu">
						<ul class="list-unstyled">
							<li class="divider"></li>
							<li>
								<a role="menuitem" tabindex="-1" href="#a"><i class="fa fa-user"></i> My Profile</a>
							</li>
							<li>
								<a role="menuitem" tabindex="-1" href="#a" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
							</li>
							<li>
								<a role="menuitem" tabindex="-1" href="{{ url('/logout') }}"
									onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
									<i class="fa fa-power-off"></i> Logout 
								</a>

								<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
								
								
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end: search & user box -->
		</header>
		<!-- end: header -->

		<div class="inner-wrapper">
			<!-- start: sidebar -->
			<aside id="sidebar-left" class="sidebar-left">
			
				<div class="sidebar-header">
					<div class="sidebar-title">
						Navigation
					</div>
					<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<div class="nano">
					<div class="nano-content">
						<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
										<li class="nav-parent">
										<a>
											<i class="fa fa-columns" aria-hidden="true"></i>
											<span>Manage Pages</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="{{ url('/list') }}">
													 List
												</a>
											</li>
											
											<li>
												<a href="{{ url('/add') }}">
													Add New
												</a>
											</li>
											
										</ul>
									</li>
									
								</ul>
							</nav>			
					</div>
			
					<script>
						// Maintain Scroll Position
						if (typeof localStorage !== 'undefined') {
							if (localStorage.getItem('sidebar-left-position') !== null) {
								var initialPosition = localStorage.getItem('sidebar-left-position'),
									sidebarLeft = document.querySelector('#sidebar-left .nano-content');
								
								sidebarLeft.scrollTop = initialPosition;
							}
						}
					</script>
			
				</div>
			
			</aside>
			<!-- end: sidebar -->

			<section role="main" class="content-body">
				<header class="page-header">
					<h2>Dashboard</h2>
				
					<div class="right-wrapper pull-right">
						<ol class="breadcrumbs">
							<li>
								<a href="{{ url('/home') }}">
									<i class="fa fa-home"></i>
								</a>
							</li>
							<li><span>Dashboard</span></li>
						</ol>
				
						<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
					</div>
				</header>

				<!-- start: page -->
				<div class="row">				
					<div class="col-md-12">
						<section class="panel">
							<header class="panel-heading">
								<!--<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>-->
				
								<h2 class="panel-title">Pages</h2>
							</header>
							<div class="row">
								<div class="col-md-12">
								<div class="" style="padding: 10px 0px 10px 10px;">
								<form action="#a" class="search nav-form">
									<div class="input-group input-search">
										<input type="text" class="form-control" name="q" id="q" placeholder="Search..." style="float: right; width: 120px;">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
										</span>
									</div>
								</form>		
								</div>
								</div>
							</div>
						<div class="panel-body">
								<div class="table-responsive">
						
								
								<table class="table mb-none">
									<thead>
										<tr>
											<th>Title</th>
											<th>Slug</th>
											<th>Short Desc</th>
											<th>Body</th>
											<th>Parent Page Id</th>
											<th>Actions</th>
										</tr>
									</thead>
									@if(isset($pages))
									<tbody>
										@foreach ($pages as $page)
										<tr>
											
											<td>{{ $page->title}}</td>
											<td>{{ $page->slug}}</td>
											<td>{!! $page->short_desc!!}</td> 
											<td>{!! $page->details!!}</td> 
											<td>{{ $page->parent_id}}</td> 
											<td class="actions">
												<a href="/edit/{{ $page->id }}"><i class="fa fa-pencil"></i></a>
												<a href="/delete_page/{{ $page->id }}" class="delete-row"><i class="fa fa-trash-o"></i></a>
											</td>
											
										</tr>
										@endforeach
									</tbody>
									@endif
							</table>
								
								
								
						  </div>
						</div>

						
						
						</section>
					</div>					
				</div>
				
				<div class="row">
					
					
				</div>
				
				<div class="row">
				
					
				
				</div>
				<div class="row">
					
			
				</div>
				<!-- end: page -->
			</section>
		</div>

		<aside id="sidebar-right" class="sidebar-right">
			<div class="nano">
				<div class="nano-content">
					<a href="#" class="mobile-close visible-xs">
						Collapse <i class="fa fa-chevron-right"></i>
					</a>
		
					<div class="sidebar-right-wrapper">
		
						<div class="sidebar-widget widget-calendar">
							<h6>Upcoming Tasks</h6>
							<div data-plugin-datepicker data-plugin-skin="dark" ></div>
		
							<ul>
								<li>
									<time datetime="2016-04-19T00:00+00:00">04/19/2016</time>
									<span>Company Meeting</span>
								</li>
							</ul>
						</div>
		
						<div class="sidebar-widget widget-friends">
							<h6>Friends</h6>
							<ul>
								<li class="status-online">
									<figure class="profile-picture">
										<img src="/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
									</figure>
									<div class="profile-info">
										<span class="name">Joseph Doe Junior</span>
										<span class="title">Hey, how are you?</span>
									</div>
								</li>
								<li class="status-online">
									<figure class="profile-picture">
										<img src="/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
									</figure>
									<div class="profile-info">
										<span class="name">Joseph Doe Junior</span>
										<span class="title">Hey, how are you?</span>
									</div>
								</li>
								<li class="status-offline">
									<figure class="profile-picture">
										<img src="/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
									</figure>
									<div class="profile-info">
										<span class="name">Joseph Doe Junior</span>
										<span class="title">Hey, how are you?</span>
									</div>
								</li>
								<li class="status-offline">
									<figure class="profile-picture">
										<img src="/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
									</figure>
									<div class="profile-info">
										<span class="name">Joseph Doe Junior</span>
										<span class="title">Hey, how are you?</span>
									</div>
								</li>
							</ul>
						</div>
		
					</div>
				</div>
			</div>
		</aside>
	</section>
<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pages</div>

                <div class="panel-body">
                    All pages
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
