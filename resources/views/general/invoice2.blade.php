<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>NobleUI - HTML Bootstrap 5 Admin Dashboard Template</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="../../../assets/vendors/core/core.css">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="../../../assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="../../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="../../../assets/css/demo3/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:../../partials/_navbar.html -->
		<div class="horizontal-menu">
			<nav class="navbar top-navbar">
				<div class="container">
					<div class="navbar-content">
						<a href="#" class="navbar-brand">
							Noble<span>UI</span>
						</a>
						<form class="search-form">
							<div class="input-group">
                <div class="input-group-text">
                  <i data-feather="search"></i>
                </div>
								<input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
							</div>
						</form>
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="flag-icon flag-icon-us mt-1" title="us"></i> <span class="ms-1 me-1 d-none d-md-inline-block">English</span>
								</a>
								<div class="dropdown-menu" aria-labelledby="languageDropdown">
									<a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> <span class="ms-1"> English </span></a>
									<a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i> <span class="ms-1"> French </span></a>
									<a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de" title="de" id="de"></i> <span class="ms-1"> German </span></a>
									<a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt" title="pt" id="pt"></i> <span class="ms-1"> Portuguese </span></a>
									<a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es" id="es"></i> <span class="ms-1"> Spanish </span></a>
								</div>
							</li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i data-feather="grid"></i>
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="appsDropdown">
                  <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                    <p class="mb-0 fw-bold">Web Apps</p>
                    <a href="javascript:;" class="text-muted">Edit</a>
                  </div>
                  <div class="row g-0 p-1">
                    <div class="col-3 text-center">
                      <a href="../../pages/apps/chat.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="message-square" class="icon-lg mb-1"></i><p class="tx-12">Chat</p></a>
                    </div>
                    <div class="col-3 text-center">
                      <a href="../../pages/apps/calendar.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="calendar" class="icon-lg mb-1"></i><p class="tx-12">Calendar</p></a>
                    </div>
                    <div class="col-3 text-center">
                      <a href="../../pages/email/inbox.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="mail" class="icon-lg mb-1"></i><p class="tx-12">Email</p></a>
                    </div>
                    <div class="col-3 text-center">
                      <a href="../../pages/general/profile.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="instagram" class="icon-lg mb-1"></i><p class="tx-12">Profile</p></a>
                    </div>
                  </div>
                  <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                    <a href="javascript:;">View all</a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i data-feather="mail"></i>
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="messageDropdown">
                  <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                    <p>9 New Messages</p>
                    <a href="javascript:;" class="text-muted">Clear all</a>
                  </div>
                  <div class="p-1">
                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                      <div class="me-3">
                        <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                      </div>
                      <div class="d-flex justify-content-between flex-grow-1">
                        <div class="me-4">
                          <p>Leonardo Payne</p>
                          <p class="tx-12 text-muted">Project status</p>
                        </div>
                        <p class="tx-12 text-muted">2 min ago</p>
                      </div>	
                    </a>
                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                      <div class="me-3">
                        <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                      </div>
                      <div class="d-flex justify-content-between flex-grow-1">
                        <div class="me-4">
                          <p>Carl Henson</p>
                          <p class="tx-12 text-muted">Client meeting</p>
                        </div>
                        <p class="tx-12 text-muted">30 min ago</p>
                      </div>	
                    </a>
                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                      <div class="me-3">
                        <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                      </div>
                      <div class="d-flex justify-content-between flex-grow-1">
                        <div class="me-4">
                          <p>Jensen Combs</p>
                          <p class="tx-12 text-muted">Project updates</p>
                        </div>
                        <p class="tx-12 text-muted">1 hrs ago</p>
                      </div>	
                    </a>
                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                      <div class="me-3">
                        <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                      </div>
                      <div class="d-flex justify-content-between flex-grow-1">
                        <div class="me-4">
                          <p>Amiah Burton</p>
                          <p class="tx-12 text-muted">Project deatline</p>
                        </div>
                        <p class="tx-12 text-muted">2 hrs ago</p>
                      </div>	
                    </a>
                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                      <div class="me-3">
                        <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                      </div>
                      <div class="d-flex justify-content-between flex-grow-1">
                        <div class="me-4">
                          <p>Yaretzi Mayo</p>
                          <p class="tx-12 text-muted">New record</p>
                        </div>
                        <p class="tx-12 text-muted">5 hrs ago</p>
                      </div>	
                    </a>
                  </div>
                  <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                    <a href="javascript:;">View all</a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i data-feather="bell"></i>
                  <div class="indicator">
                    <div class="circle"></div>
                  </div>
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
                  <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                    <p>6 New Notifications</p>
                    <a href="javascript:;" class="text-muted">Clear all</a>
                  </div>
                  <div class="p-1">
                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                      <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                        <i class="icon-sm text-white" data-feather="gift"></i>
                      </div>
                      <div class="flex-grow-1 me-2">
                        <p>New Order Recieved</p>
                        <p class="tx-12 text-muted">30 min ago</p>
                      </div>	
                    </a>
                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                      <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                        <i class="icon-sm text-white" data-feather="alert-circle"></i>
                      </div>
                      <div class="flex-grow-1 me-2">
                        <p>Server Limit Reached!</p>
                        <p class="tx-12 text-muted">1 hrs ago</p>
                      </div>	
                    </a>
                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                      <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                        <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                      </div>
                      <div class="flex-grow-1 me-2">
                        <p>New customer registered</p>
                        <p class="tx-12 text-muted">2 sec ago</p>
                      </div>	
                    </a>
                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                      <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                        <i class="icon-sm text-white" data-feather="layers"></i>
                      </div>
                      <div class="flex-grow-1 me-2">
                        <p>Apps are ready for update</p>
                        <p class="tx-12 text-muted">5 hrs ago</p>
                      </div>	
                    </a>
                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                      <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                        <i class="icon-sm text-white" data-feather="download"></i>
                      </div>
                      <div class="flex-grow-1 me-2">
                        <p>Download completed</p>
                        <p class="tx-12 text-muted">6 hrs ago</p>
                      </div>	
                    </a>
                  </div>
                  <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                    <a href="javascript:;">View all</a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="profile">
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                  <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                    <div class="mb-3">
                      <img class="wd-80 ht-80 rounded-circle" src="https://via.placeholder.com/80x80" alt="">
                    </div>
                    <div class="text-center">
                      <p class="tx-16 fw-bolder">Amiah Burton</p>
                      <p class="tx-12 text-muted">amiahburton@gmail.com</p>
                    </div>
                  </div>
                  <ul class="list-unstyled p-1">
                    <li class="dropdown-item py-2">
                      <a href="../../pages/general/profile.html" class="text-body ms-0">
                        <i class="me-2 icon-md" data-feather="user"></i>
                        <span>Profile</span>
                      </a>
                    </li>
                    <li class="dropdown-item py-2">
                      <a href="javascript:;" class="text-body ms-0">
                        <i class="me-2 icon-md" data-feather="edit"></i>
                        <span>Edit Profile</span>
                      </a>
                    </li>
                    <li class="dropdown-item py-2">
                      <a href="javascript:;" class="text-body ms-0">
                        <i class="me-2 icon-md" data-feather="repeat"></i>
                        <span>Switch User</span>
                      </a>
                    </li>
                    <li class="dropdown-item py-2">
                      <a href="javascript:;" class="text-body ms-0">
                        <i class="me-2 icon-md" data-feather="log-out"></i>
                        <span>Log Out</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
						</ul>
						<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
							<i data-feather="menu"></i>					
						</button>
					</div>
				</div>
			</nav>
			<nav class="bottom-navbar">
				<div class="container">
					<ul class="nav page-navigation">
						<li class="nav-item">
							<a class="nav-link" href="../../dashboard.html">
								<i class="link-icon" data-feather="box"></i>
								<span class="menu-title">Dashboard</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="link-icon" data-feather="mail"></i>
								<span class="menu-title">Apps</span>
								<i class="link-arrow"></i>
							</a>
							<div class="submenu">
								<ul class="submenu-item">
									<li class="category-heading">Email</li>
									<li class="nav-item"><a class="nav-link" href="../../pages/email/inbox.html">Inbox</a></li>
									<li class="nav-item"><a class="nav-link" href="../../pages/email/read.html">Read</a></li>
									<li class="nav-item"><a class="nav-link" href="../../pages/email/compose.html">Compose</a></li>
									<li class="category-heading">Other<li>
									<li class="nav-item"><a class="nav-link" href="../../pages/apps/chat.html">Chat</a></li>
									<li class="nav-item"><a class="nav-link" href="../../pages/apps/calendar.html">Calendar</a></li>
								</ul>
							</div>
						</li>
						<li class="nav-item mega-menu">
							<a href="#" class="nav-link">
								<i class="link-icon" data-feather="feather"></i>
								<span class="menu-title">UI Kit</span>
								<i class="link-arrow"></i>
							</a>
							<div class="submenu">
								<div class="col-group-wrapper row">
									<div class="col-group col-md-9">
										<div class="row">
											<div class="col-12">
												<p class="category-heading">Basic</p>
												<div class="submenu-item">
													<div class="row">
														<div class="col-md-4">
															<ul>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/accordion.html">Accordion</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/alerts.html">Alerts</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/badges.html">Badges</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/breadcrumbs.html">Breadcrumbs</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/buttons.html">Buttons</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/button-group.html">Buttn Group</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/cards.html">Cards</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/carousel.html">Carousel</a></li>
															</ul>
														</div>
														<div class="col-md-4">
															<ul>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/collapse.html">Collapse</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/dropdowns.html">Dropdowns</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/list-group.html">List group</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/media-object.html">Media object</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/modal.html">Modal</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/navs.html">Navs</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/navbar.html">Navbar</a></li>
															</ul>
														</div>
														<div class="col-md-4">
															<ul>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/pagination.html">Pagination</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/popover.html">Popovers</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/progress.html">Progress</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/scrollbar.html">Scrollbar</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/scrollspy.html">Scrollspy</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/spinners.html">Spinners</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/tabs.html">Tabs</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/ui-components/tooltips.html">Tooltips</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-group col-md-3">
										<div class="row">
											<div class="col-12">
												<p class="category-heading">Advanced</p>
												<div class="submenu-item">
													<div class="row">
														<div class="col-md-12">
															<ul>
																<li class="nav-item"><a class="nav-link" href="../../pages/advanced-ui/cropper.html">Cropper</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/advanced-ui/owl-carousel.html">Owl carousel</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/advanced-ui/sortablejs.html">SortableJs</a></li>
																<li class="nav-item"><a class="nav-link" href="../../pages/advanced-ui/sweet-alert.html">Sweetalert</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="link-icon" data-feather="inbox"></i>
								<span class="menu-title">Forms</span>
								<i class="link-arrow"></i>
							</a>
							<div class="submenu">
								<ul class="submenu-item">
									<li class="nav-item"><a class="nav-link" href="../../pages/forms/basic-elements.html">Basic Elements</a></li>
									<li class="nav-item"><a class="nav-link" href="../../pages/forms/advanced-elements.html">Advanced Elements</a></li>
									<li class="nav-item"><a class="nav-link" href="../../pages/forms/editors.html">Editors</a></li>
									<li class="nav-item"><a class="nav-link" href="../../pages/forms/wizard.html">Wizard</a></li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="link-icon" data-feather="pie-chart"></i>
								<span class="menu-title">Data</span>
								<i class="link-arrow"></i>
							</a>
							<div class="submenu">
								<div class="row">
									<div class="col-md-6">
										<ul class="submenu-item pe-md-0">
											<li class="category-heading">Charts</li>
											<li class="nav-item"><a class="nav-link" href="../../pages/charts/apex.html">Apex</a></li>
											<li class="nav-item"><a class="nav-link" href="../../pages/charts/chartjs.html">ChartJs</a></li>
											<li class="nav-item"><a class="nav-link" href="../../pages/charts/flot.html">Float</a></li>
											<li class="nav-item"><a class="nav-link" href="../../pages/charts/peity.html">Peity</a></li>
											<li class="nav-item"><a class="nav-link" href="../../pages/charts/sparkline.html">Sparkline</a></li>
										</ul>
									</div>
									<div class="col-md-6">
										<ul class="submenu-item ps-md-0">
											<li class="category-heading">Tables</li>
											<li class="nav-item"><a class="nav-link" href="../../pages/tables/basic-table.html">Basic Tables</a></li>
											<li class="nav-item"><a class="nav-link" href="../../pages/tables/data-table.html">Data Table</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="link-icon" data-feather="smile"></i>
								<span class="menu-title">Icons</span>
								<i class="link-arrow"></i>
							</a>
							<div class="submenu">
								<ul class="submenu-item">
									<li class="nav-item"><a class="nav-link" href="../../pages/icons/feather-icons.html">Feather Icons</a></li>
									<li class="nav-item"><a class="nav-link" href="../../pages/icons/flag-icons.html">Flag Icons</a></li>
									<li class="nav-item"><a class="nav-link" href="../../pages/icons/mdi-icons.html">Mdi Icons</a></li>
								</ul>
							</div>
						</li>
						<li class="nav-item mega-menu">
							<a href="#" class="nav-link">
								<i class="link-icon" data-feather="book"></i>
								<span class="menu-title">Sample Pages</span>
								<i class="link-arrow"></i>
							</a>
							<div class="submenu">
								<div class="col-group-wrapper row">
									<div class="col-group col-md-6">
										<p class="category-heading">Special Pages</p>
										<div class="submenu-item">
											<div class="row">
												<div class="col-md-6">
													<ul>
														<li class="nav-item"><a class="nav-link" href="../../pages/general/blank-page.html">Blank page</a></li>
														<li class="nav-item"><a class="nav-link" href="../../pages/general/faq.html">Faq</a></li>
														<li class="nav-item"><a class="nav-link" href="../../pages/general/invoice.html">Invoice</a></li>
													</ul>
												</div>
												<div class="col-md-6">
													<ul>
														<li class="nav-item"><a class="nav-link" href="../../pages/general/profile.html">Profile</a></li>
														<li class="nav-item"><a class="nav-link" href="../../pages/general/pricing.html">Pricing</a></li>
														<li class="nav-item"><a class="nav-link" href="../../pages/general/timeline.html">Timeline</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="col-group col-md-3">
										<p class="category-heading">Auth Pages</p>
										<ul class="submenu-item">
											<li class="nav-item"><a class="nav-link" href="../../pages/auth/login.html">Login</a></li>
											<li class="nav-item"><a class="nav-link" href="../../pages/auth/register.html">Register</a></li>
										</ul>
									</div>
									<div class="col-group col-md-3">
										<p class="category-heading">Error Pages</p>
										<ul class="submenu-item">
											<li class="nav-item"><a class="nav-link" href="../../pages/error/404.html">404</a></li>
											<li class="nav-item"><a class="nav-link" href="../../pages/error/500.html">500</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
								<i class="link-icon" data-feather="hash"></i>
								<span class="menu-title">Documentation</span></a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- partial -->
	
		<div class="page-wrapper">

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Special pages</a></li>
						<li class="breadcrumb-item active" aria-current="page">Invoice</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="container-fluid d-flex justify-content-between">
                  <div class="col-lg-3 ps-0">
                    <a href="#" class="noble-ui-logo d-block mt-3">Noble<span>UI</span></a>                 
                    <p class="mt-1 mb-1"><b>NobleUI Themes</b></p>
                    <p>108,<br> Great Russell St,<br>London, WC1B 3NA.</p>
                    <h5 class="mt-5 mb-2 text-muted">Invoice to :</h5>
                    <p>Joseph E Carr,<br> 102, 102  Crown Street,<br> London, W3 3PR.</p>
                  </div>
                  <div class="col-lg-3 pe-0">
                    <h4 class="fw-bolder text-uppercase text-end mt-4 mb-2">invoice</h4>
                    <h6 class="text-end mb-5 pb-4"># INV-002308</h6>
                    <p class="text-end mb-1">Balance Due</p>
                    <h4 class="text-end fw-normal">$ 72,420.00</h4>
                    <h6 class="mb-0 mt-3 text-end fw-normal mb-2"><span class="text-muted">Invoice Date :</span> 25rd Jan 2022</h6>
                    <h6 class="text-end fw-normal"><span class="text-muted">Due Date :</span> 12th Jul 2022</h6>
                  </div>
                </div>
                <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                  <div class="table-responsive w-100">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                              <th>#</th>
                              <th>Description</th>
                              <th class="text-end">Quantity</th>
                              <th class="text-end">Unit cost</th>
                              <th class="text-end">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr class="text-end">
                            <td class="text-start">1</td>
                            <td class="text-start">PSD to html conversion</td>
                            <td>02</td>
                            <td>$55</td>
                            <td>$110</td>
                          </tr>
                          <tr class="text-end">
                            <td class="text-start">2</td>
                            <td class="text-start">Package design</td>
                            <td>08</td>
                            <td>$34</td>
                            <td>$272</td>
                          </tr>
                          <tr class="text-end">
                            <td class="text-start">3</td>
                            <td class="text-start">Html template development</td>
                            <td>03</td>
                            <td>$500</td>
                            <td>$1500</td>
                          </tr>
                          <tr class="text-end">
                            <td class="text-start">4</td>
                            <td class="text-start">Redesign</td>
                            <td>01</td>
                            <td>$30</td>
                            <td>$30</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
                <div class="container-fluid mt-5 w-100">
                  <div class="row">
                    <div class="col-md-6 ms-auto">
                        <div class="table-responsive">
                          <table class="table">
                              <tbody>
                                <tr>
                                  <td>Sub Total</td>
                                  <td class="text-end">$ 14,900.00</td>
                                </tr>
                                <tr>
                                  <td>TAX (12%)</td>
                                  <td class="text-end">$ 1,788.00</td>
                                </tr>
                                <tr>
                                  <td class="text-bold-800">Total</td>
                                  <td class="text-bold-800 text-end"> $ 16,688.00</td>
                                </tr>
                                <tr>
                                  <td>Payment Made</td>
                                  <td class="text-danger text-end">(-) $ 4,688.00</td>
                                </tr>
                                <tr class="bg-light">
                                  <td class="text-bold-800">Balance Due</td>
                                  <td class="text-bold-800 text-end">$ 12,000.00</td>
                                </tr>
                              </tbody>
                          </table>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="container-fluid w-100">
                  <a href="javascript:;" class="btn btn-primary float-end mt-4 ms-2"><i data-feather="send" class="me-3 icon-md"></i>Send Invoice</a>
                  <a href="javascript:;" class="btn btn-outline-primary float-end mt-4"><i data-feather="printer" class="me-2 icon-md"></i>Print</a>
                </div>
              </div>
            </div>
					</div>
				</div>
			</div>

			<!-- partial:../../partials/_footer.html -->
			<footer class="footer border-top">
        <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between py-3 small">
          <p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>.</p>
          <p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
        </div>
			</footer>
			<!-- partial -->
	
		</div>
	</div>

	<!-- core:js -->
	<script src="../../../assets/vendors/core/core.js"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="../../../assets/vendors/feather-icons/feather.min.js"></script>
	<script src="../../../assets/js/template.js"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
	<!-- End custom js for this page -->

</body>
</html>