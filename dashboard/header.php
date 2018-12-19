<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location: vendor_login.php");
} else
{

}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from appstack.bootlab.io/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Oct 2018 04:30:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin Template">
	<meta name="author" content="Bootlab">

	<title>Build Easy - Vendor</title>

	<link href="css/app.css" rel="stylesheet">

</head>

<body>
	<div class="wrapper">
		<div class="d-flex">
			<nav class="sidebar">
				<div class="sidebar-content">
                    <a class="sidebar-brand" href="index.php">                    
            <!-- <i class="align-middle" data-feather="box"></i> -->
            <span class="align-middle">Build Easy <span style="color:yellow;">Vendor</span></span>
          </a>

					<ul class="sidebar-nav">
						<li class="sidebar-header">
							Main
						</li>
						<li class="sidebar-item active">
							<a href="index.html" class="sidebar-link">
                                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                                <!-- <span class="sidebar-badge badge badge-primary">6</span> -->
                            </a>
						</li>
						
						<li class="sidebar-item">
							<a class="sidebar-link" href="ongoing.php">
                            <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Ongoing Leads</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
							<a class="sidebar-link" href="hired_leads.php">
                            <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Hired Leads</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
							<a class="sidebar-link" href="rejected_leads.php">
                            <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Rejected Leads</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
							<a class="sidebar-link" href="my_services.php">
                            <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">My Services</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
							<a class="sidebar-link" href="add_services.php">
                            <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Add Services</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
							<a class="sidebar-link" href="cart.php">
                            <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Cart</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
							<a class="sidebar-link" href="transactions.php">
                            <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Transaction</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
							<a class="sidebar-link" href="gallery.php">
                            <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Work Gallery</span>
                            </a>
                        </li>
						<li class="sidebar-item">
							<a class="sidebar-link" href="offers.php">
                            <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Offers</span>
                            </a>
                        </li>						
					</ul>
				</div>
			</nav>

			<div class="main">
				<nav class="navbar navbar-expand navbar-light bg-white">
					<a class="sidebar-toggle d-flex mr-2">
            <i class="hamburger align-self-center"></i>
          </a>

					<form class="form-inline d-none d-sm-inline-block">
						<input class="form-control mr-sm-2" type="text" placeholder="Search projects" aria-label="Search">
					</form>

					<div class="navbar-collapse collapse">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item dropdown">
								<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-toggle="dropdown">
									<div class="position-relative">
										<i class="align-middle" data-feather="message-circle"></i>
										<span class="indicator">4</span>
									</div>
								</a>
								<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="messagesDropdown">
									<div class="dropdown-menu-header">
										<div class="position-relative">
											4 New Messages
										</div>
									</div>
									<div class="list-group">
										<a href="#" class="list-group-item">
											<div class="row no-gutters align-items-center">
												<div class="col-2">
													<img src="img/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Ashley Briggs">
												</div>
												<div class="col-10 pl-2">
													<div class="text-dark">Ashley Briggs</div>
													<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
													<div class="text-muted small mt-1">15m ago</div>
												</div>
											</div>
										</a>
										<a href="#" class="list-group-item">
											<div class="row no-gutters align-items-center">
												<div class="col-2">
													<img src="img/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="Carl Jenkins">
												</div>
												<div class="col-10 pl-2">
													<div class="text-dark">Carl Jenkins</div>
													<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
													<div class="text-muted small mt-1">2h ago</div>
												</div>
											</div>
										</a>
										<a href="#" class="list-group-item">
											<div class="row no-gutters align-items-center">
												<div class="col-2">
													<img src="img/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Stacie Hall">
												</div>
												<div class="col-10 pl-2">
													<div class="text-dark">Stacie Hall</div>
													<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
													<div class="text-muted small mt-1">4h ago</div>
												</div>
											</div>
										</a>
										<a href="#" class="list-group-item">
											<div class="row no-gutters align-items-center">
												<div class="col-2">
													<img src="img/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Bertha Martin">
												</div>
												<div class="col-10 pl-2">
													<div class="text-dark">Bertha Martin</div>
													<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
													<div class="text-muted small mt-1">5h ago</div>
												</div>
											</div>
										</a>
									</div>
									<div class="dropdown-menu-footer">
										<a href="#" class="text-muted">Show all messages</a>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
									<div class="position-relative">
										<i class="align-middle" data-feather="bell-off"></i>
									</div>
								</a>
								<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
									<div class="dropdown-menu-header">
										4 New Notifications
									</div>
									<div class="list-group">
										<a href="#" class="list-group-item">
											<div class="row no-gutters align-items-center">
												<div class="col-2">
													<i class="text-danger" data-feather="alert-circle"></i>
												</div>
												<div class="col-10">
													<div class="text-dark">Update completed</div>
													<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
													<div class="text-muted small mt-1">2h ago</div>
												</div>
											</div>
										</a>
										<a href="#" class="list-group-item">
											<div class="row no-gutters align-items-center">
												<div class="col-2">
													<i class="text-warning" data-feather="bell"></i>
												</div>
												<div class="col-10">
													<div class="text-dark">Lorem ipsum</div>
													<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
													<div class="text-muted small mt-1">6h ago</div>
												</div>
											</div>
										</a>
										<a href="#" class="list-group-item">
											<div class="row no-gutters align-items-center">
												<div class="col-2">
													<i class="text-primary" data-feather="home"></i>
												</div>
												<div class="col-10">
													<div class="text-dark">Login from 192.186.1.1</div>
													<div class="text-muted small mt-1">8h ago</div>
												</div>
											</div>
										</a>
										<a href="#" class="list-group-item">
											<div class="row no-gutters align-items-center">
												<div class="col-2">
													<i class="text-success" data-feather="user-plus"></i>
												</div>
												<div class="col-10">
													<div class="text-dark">New connection</div>
													<div class="text-muted small mt-1">Anna accepted your request.</div>
													<div class="text-muted small mt-1">12h ago</div>
												</div>
											</div>
										</a>
									</div>
									<div class="dropdown-menu-footer">
										<a href="#" class="text-muted">Show all notifications</a>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown">
                  <span class="d-inline-block d-md-none">
                    <i class="align-middle" data-feather="settings"></i>
                  </span>
				  <?php
				 	include 'db2.php';
  					$sql = $con->query("SELECT vendors.name, vendors.email, vendor_profile.image, vendor_profile.mobile, vendor_profile.area, vendor_profile.address FROM vendors INNER JOIN vendor_profile ON vendors.id = vendor_profile.id_vendor");
  					$info = $sql->fetch_assoc(); 
				  ?>
                  <span class="d-none d-sm-inline-block">
                    <img src="<?php echo 'profiles/'.$info['image']; ?>" class="avatar img-fluid rounded-circle mr-1" alt="Chris Wood" /> <span class="text-dark"><?php echo $_SESSION['name'];  ?></span>
                  </span>
                </a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
									<a class="dropdown-item" href="profile.php"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
									<a class="dropdown-item" href="settings.php">Settings & Privacy</a>
									<a class="dropdown-item" href="signout.php">Sign out</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>

                
                
              