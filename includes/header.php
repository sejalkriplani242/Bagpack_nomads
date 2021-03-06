<?php if($_SESSION['login'])
{?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.html"><i class="fa fa-home"></i></a></li>
			<li class="prnt"><a href="profile.php">My Profile</a></li>
				<li class="prnt"><a href="change-password.php">Change Password</a></li>
			<li class="prnt"><a href="tour-history.php">My Tour History</a></li>
			<li class="prnt"><a href="issuetickets.php">Issue Tickets</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Welcome :</li>				
			<li class="sig"><?php echo htmlentities($_SESSION['login']);?></li> 
			<li class="sigi"><a href="logout.php" >/ Logout</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div><?php } else {?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
				<li class="hm"><a href="admin/index.php">Admin Login</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Toll Number : 123-4568790</li>				
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Register</a></li> 
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >/ Log In</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div>
<?php }?>
<!--- /top-header ---->
<!--- header ---->
<div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.php">Bagpack<span>Nomads</span></a>	
		</div>
	
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			<li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">SAFE &amp; SECURE </div></li>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->

			
<nav class="navbar navbar-expand-lg navbar-dark main-nav">
        <div class="container">
        <ul class="navbar-nav mr-auto">
            <a class="navbar-brand" href="#">Backpack Nomads</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        </ul>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active right">
                  <a class="nav-link" href="page.php?type=aboutus">About Us</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="package-list.php">Tour packages</a>
                </li>
				<li class="nav-item active">
                  <a class="nav-link" href="page.php?type=privacy">Privacy Policy</a>
                </li>
				<li class="nav-item active">
                  <a class="nav-link" href="page.php?type=terms">Terms of Use</a>
                </li>
				<li class="nav-item active">
                  <a class="nav-link" href="page.php?type=contact">Contact Us</a>
                </li>
				<?php if($_SESSION['login'])
{?>
</li>
				<li class="nav-item active">
                  <a class="nav-link"  data-toggle="modal" data-target="#myModal3"> Need Help?</a>
                </li>
								<!-- <li>Need Help?<a href="#" data-toggle="modal" data-target="#myModal3"> / Write Us </a>  </li> -->
								<?php } else { ?>
								<li class="nav-item active">
                  <a class="nav-link" href="enquiry.php"> Enquiry</a>
                </li>
	
								<?php } ?>
                </ul>
                <!-- <li class="nav-item active dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Holidays</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Andaman Tour</a>
                        <a class="dropdown-item" href="#">Ladakh Tour</a>
                        <a class="dropdown-item" href="#">Kerala Tour</a>
                    </div>
                </li>
                
            </div>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search Holidays" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button> -->
            <!-- </form> -->
        </div>
    </nav>
		
