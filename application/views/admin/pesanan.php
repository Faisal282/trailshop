<?php if ($_SESSION['role'] == 1) : ?>
<!-- preloader area start -->
<div id="preloader">
	<div class="loader"></div>
</div>
<!-- preloader area end -->
<!-- page container area start -->
<div class="page-container">
	<!-- sidebar menu area start -->
	<div class="sidebar-menu">
		<div class="sidebar-header">
			<div class="logo">
				<a href="<?= base_url('') ?>"><img src="<?=base_url('assets')?>/images/icon/logo.png" alt="logo"></a>
			</div>
		</div>
		<div class="main-menu">
			<div class="menu-inner">
				<nav>
					<ul class="metismenu" id="menu">
						<li>
							<a href="<?= base_url('') ?>"><i class="ti-map-alt"></i> <span>Produk</span></a>
						</li>
						<li>
							<a href="<?= base_url('admin/pesanan') ?>"><i class="ti-map-alt"></i> <span>Pesanan</span></a>
						</li>
						<li>
							<a href="<?= base_url('admin/brand') ?>"><i class="ti-map-alt"></i> <span>Brand</span></a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<!-- sidebar menu area end -->
	<!-- main content area start -->
	<div class="main-content">
		<!-- header area start -->
		<div class="header-area">
			<div class="row align-items-center">
				<!-- nav and search button -->
				<div class="col-md-6 col-sm-8 clearfix">
					<div class="nav-btn pull-left">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class="search-box pull-left">
						<form action="#">
							<input type="text" name="search" placeholder="Search..." required>
							<i class="ti-search"></i>
						</form>
					</div>
				</div>
				<!-- profile info & task notification -->
				<div class="col-md-6 col-sm-4 clearfix">
					<ul class="notification-area pull-right">
						<li id="full-view"><i class="ti-fullscreen"></i></li>
						<li id="full-view-exit"><i class="ti-zoom-out"></i></li>
						<li class="dropdown">
							<i class="ti-bell dropdown-toggle" data-toggle="dropdown">
								<span>2</span>
							</i>
							<div class="dropdown-menu bell-notify-box notify-box">
								<span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
								<div class="nofity-list">
									<a href="#" class="notify-item">
										<div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
										<div class="notify-text">
											<p>You have Changed Your Password</p>
											<span>Just Now</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
										<div class="notify-text">
											<p>New Commetns On Post</p>
											<span>30 Seconds ago</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
										<div class="notify-text">
											<p>Some special like you</p>
											<span>Just Now</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
										<div class="notify-text">
											<p>New Commetns On Post</p>
											<span>30 Seconds ago</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
										<div class="notify-text">
											<p>Some special like you</p>
											<span>Just Now</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
										<div class="notify-text">
											<p>You have Changed Your Password</p>
											<span>Just Now</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
										<div class="notify-text">
											<p>You have Changed Your Password</p>
											<span>Just Now</span>
										</div>
									</a>
								</div>
							</div>
						</li>
						<li class="dropdown">
							<i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
							<div class="dropdown-menu notify-box nt-enveloper-box">
								<span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
								<div class="nofity-list">
									<a href="#" class="notify-item">
										<div class="notify-thumb">
											<img src="assets/images/author/author-img1.jpg" alt="image">
										</div>
										<div class="notify-text">
											<p>Aglae Mayer</p>
											<span class="msg">Hey I am waiting for you...</span>
											<span>3:15 PM</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb">
											<img src="assets/images/author/author-img2.jpg" alt="image">
										</div>
										<div class="notify-text">
											<p>Aglae Mayer</p>
											<span class="msg">When you can connect with me...</span>
											<span>3:15 PM</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb">
											<img src="assets/images/author/author-img3.jpg" alt="image">
										</div>
										<div class="notify-text">
											<p>Aglae Mayer</p>
											<span class="msg">I missed you so much...</span>
											<span>3:15 PM</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb">
											<img src="assets/images/author/author-img4.jpg" alt="image">
										</div>
										<div class="notify-text">
											<p>Aglae Mayer</p>
											<span class="msg">Your product is completely Ready...</span>
											<span>3:15 PM</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb">
											<img src="assets/images/author/author-img2.jpg" alt="image">
										</div>
										<div class="notify-text">
											<p>Aglae Mayer</p>
											<span class="msg">Hey I am waiting for you...</span>
											<span>3:15 PM</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb">
											<img src="assets/images/author/author-img1.jpg" alt="image">
										</div>
										<div class="notify-text">
											<p>Aglae Mayer</p>
											<span class="msg">Hey I am waiting for you...</span>
											<span>3:15 PM</span>
										</div>
									</a>
									<a href="#" class="notify-item">
										<div class="notify-thumb">
											<img src="assets/images/author/author-img3.jpg" alt="image">
										</div>
										<div class="notify-text">
											<p>Aglae Mayer</p>
											<span class="msg">Hey I am waiting for you...</span>
											<span>3:15 PM</span>
										</div>
									</a>
								</div>
							</div>
						</li>
						<li class="settings-btn">
							<i class="ti-settings"></i>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- header area end -->
		<!-- page title area start -->
		<div class="page-title-area">
			<div class="row align-items-center">
				<div class="col-sm-6">
					<div class="breadcrumbs-area clearfix">
						<h4 class="page-title pull-left">Dashboard</h4>
						<ul class="breadcrumbs pull-left">
							<li><a href="<?= base_url('') ?>">Home</a></li>
							<li><span>Produk</span></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 clearfix">
					<div class="user-profile pull-right">
						<img class="avatar user-thumb" src="<?=base_url('assets')?>/images/author/avatar.png" alt="avatar">
						<h4 class="user-name dropdown-toggle" data-toggle="dropdown">
							<?= $_SESSION['nama'] ?> <i class="fa fa-angle-down"></i></h4>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="<?= base_url('login/logout') ?>">Log Out</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- page title area end -->
		<div class="main-content-inner">
			<div class="row">
				<!-- Dark table start -->
				<div class="col-12 mt-5">
					<div class="card">
						<div class="card-body">
							<h4 class="header-title">Data Pesanan</h4>
							<?php if ($this->session->flashdata('pesan')) : ?>
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
								<strong>
									<?= $this->session->flashdata('pesan') ?></strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span>
								</button>
							</div>
							<?php endif; ?>
							<div class="data-tables datatable-dark">
								<table id="dataTable3" class="text-center">
									<thead class="text-capitalize">
										<tr>
											<th>No</th>
											<th>Nama Produk</th>
											<th>Brand</th>
											<th>Jumlah</th>
											<th>Status</th>
											<th>Dibeli Pada</th>
											<th>Opsi</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; ?>
										<?php foreach ($pesanan as $p ) : ?>
										<tr>
											<td>
												<?= $no ?>
											</td>
											<td>
												<?= $p['nama_produk'] ?>
											</td>
											<td>
												<?= $p['nama_brand'] ?>
											</td>
											<td>
												<?= $p['qty'] ?>
											</td>
											<td>
												<?php if ($p['status'] == 1) : ?>
													Terbayar
												<?php else: ?>
													Belum Terbayar
												<?php endif; ?>
											</td>
											<td>
												<?= $p['created_at'] ?>
											</td>
											<td>
												<button type="button" class="btn btn-success btn-flat btn-lg mt-3" onclick="window.location.href='<?= base_url('admin/add_brand_bayar/') . $p['id_nota'] ?>'"><i class="fas fa-check"></i></button>
												<button type="button" class="btn btn-danger btn-flat btn-lg mt-3" onclick="window.location.href='<?= base_url('admin/hapus_brand_bayar/') . $p['id_nota'] ?>'"><i class="fas fa-times"></i></button>
											</td>
											<input type="hidden" name="id_produk" value="<?= $p['id_produk'] ?>">
										</tr>
										<?php $no++; ?>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- Dark table end -->
			</div>
		</div>
	</div>
	<!-- main content area end -->
</div>
<!-- page container area end -->
<!-- offset area start -->
<div class="offset-area">
	<div class="offset-close"><i class="ti-close"></i></div>
	<ul class="nav offset-menu-tab">
		<li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
		<li><a data-toggle="tab" href="#settings">Settings</a></li>
	</ul>
	<div class="offset-content tab-content">
		<div id="activity" class="tab-pane fade in show active">
			<div class="recent-activity">
				<div class="timeline-task">
					<div class="icon bg1">
						<i class="fa fa-envelope"></i>
					</div>
					<div class="tm-title">
						<h4>Rashed sent you an email</h4>
						<span class="time"><i class="ti-time"></i>09:35</span>
					</div>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
					</p>
				</div>
				<div class="timeline-task">
					<div class="icon bg2">
						<i class="fa fa-check"></i>
					</div>
					<div class="tm-title">
						<h4>Added</h4>
						<span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
					</div>
					<p>Lorem ipsum dolor sit amet consectetur.
					</p>
				</div>
				<div class="timeline-task">
					<div class="icon bg2">
						<i class="fa fa-exclamation-triangle"></i>
					</div>
					<div class="tm-title">
						<h4>You missed you Password!</h4>
						<span class="time"><i class="ti-time"></i>09:20 Am</span>
					</div>
				</div>
				<div class="timeline-task">
					<div class="icon bg3">
						<i class="fa fa-bomb"></i>
					</div>
					<div class="tm-title">
						<h4>Member waiting for you Attention</h4>
						<span class="time"><i class="ti-time"></i>09:35</span>
					</div>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
					</p>
				</div>
				<div class="timeline-task">
					<div class="icon bg3">
						<i class="ti-signal"></i>
					</div>
					<div class="tm-title">
						<h4>You Added Kaji Patha few minutes ago</h4>
						<span class="time"><i class="ti-time"></i>01 minutes ago</span>
					</div>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
					</p>
				</div>
				<div class="timeline-task">
					<div class="icon bg1">
						<i class="fa fa-envelope"></i>
					</div>
					<div class="tm-title">
						<h4>Ratul Hamba sent you an email</h4>
						<span class="time"><i class="ti-time"></i>09:35</span>
					</div>
					<p>Hello sir , where are you, i am egerly waiting for you.
					</p>
				</div>
				<div class="timeline-task">
					<div class="icon bg2">
						<i class="fa fa-exclamation-triangle"></i>
					</div>
					<div class="tm-title">
						<h4>Rashed sent you an email</h4>
						<span class="time"><i class="ti-time"></i>09:35</span>
					</div>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
					</p>
				</div>
				<div class="timeline-task">
					<div class="icon bg2">
						<i class="fa fa-exclamation-triangle"></i>
					</div>
					<div class="tm-title">
						<h4>Rashed sent you an email</h4>
						<span class="time"><i class="ti-time"></i>09:35</span>
					</div>
				</div>
				<div class="timeline-task">
					<div class="icon bg3">
						<i class="fa fa-bomb"></i>
					</div>
					<div class="tm-title">
						<h4>Rashed sent you an email</h4>
						<span class="time"><i class="ti-time"></i>09:35</span>
					</div>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
					</p>
				</div>
				<div class="timeline-task">
					<div class="icon bg3">
						<i class="ti-signal"></i>
					</div>
					<div class="tm-title">
						<h4>Rashed sent you an email</h4>
						<span class="time"><i class="ti-time"></i>09:35</span>
					</div>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
					</p>
				</div>
			</div>
		</div>
		<div id="settings" class="tab-pane fade">
			<div class="offset-settings">
				<h4>General Settings</h4>
				<div class="settings-list">
					<div class="s-settings">
						<div class="s-sw-title">
							<h5>Notifications</h5>
							<div class="s-swtich">
								<input type="checkbox" id="switch1" />
								<label for="switch1">Toggle</label>
							</div>
						</div>
						<p>Keep it 'On' When you want to get all the notification.</p>
					</div>
					<div class="s-settings">
						<div class="s-sw-title">
							<h5>Show recent activity</h5>
							<div class="s-swtich">
								<input type="checkbox" id="switch2" />
								<label for="switch2">Toggle</label>
							</div>
						</div>
						<p>The for attribute is necessary to bind our custom checkbox with the input.</p>
					</div>
					<div class="s-settings">
						<div class="s-sw-title">
							<h5>Show your emails</h5>
							<div class="s-swtich">
								<input type="checkbox" id="switch3" />
								<label for="switch3">Toggle</label>
							</div>
						</div>
						<p>Show email so that easily find you.</p>
					</div>
					<div class="s-settings">
						<div class="s-sw-title">
							<h5>Show Task statistics</h5>
							<div class="s-swtich">
								<input type="checkbox" id="switch4" />
								<label for="switch4">Toggle</label>
							</div>
						</div>
						<p>The for attribute is necessary to bind our custom checkbox with the input.</p>
					</div>
					<div class="s-settings">
						<div class="s-sw-title">
							<h5>Notifications</h5>
							<div class="s-swtich">
								<input type="checkbox" id="switch5" />
								<label for="switch5">Toggle</label>
							</div>
						</div>
						<p>Use checkboxes when looking for yes or no answers.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif ?>