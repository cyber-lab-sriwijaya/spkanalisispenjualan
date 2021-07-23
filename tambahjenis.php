<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}
include'header.php';
include'include/functions.php'
 ?>
 <section role="main" class="content-body content-body-modern">
	<header class="page-header">
		<h2 class="font-weight-bold text-6">Jenis Produk</h2>
			<div class="right-wrapper">
				<ol class="breadcrumbs">
					<li><span>Jenis Barang</span></li>
					<li><span>Sistem Pendukung Keputusan Hasil Penjualan</span></li>
				</ol>		
			</div>
	</header>
</section>
<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Tambah Jenis Produk</h2>
									</header>
									<div class="card-body">
										<form class="form-horizontal form-bordered" method="POST">
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Default</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault">
												</div>
											</div>
											<div class="image">
												<button color="grey" type="submit" class="default-dark">Tambahkan</button>
											</div>
						
									</form>
									</div>
								</section>
							</div>
						</div>
						
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Controls sizing</h2>
									</header>
									<div class="card-body">
										<form class="form-horizontal form-bordered" method="get">
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Input sizing</label>
												<div class="col-lg-6">
													<input class="form-control form-control-lg mb-3" type="text" placeholder=".form-control-lg">
													<input class="form-control mb-3" type="text" placeholder="Default input">
													<input class="form-control form-control-sm mb-3" type="text" placeholder=".form-control-sm">
												</div>
											</div>
						
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Select sizing</label>
												<div class="col-lg-6">
													<select class="form-control form-control-lg mb-3">
														<option>Option 1</option>
														<option>Option 2</option>
														<option>Option 3</option>
													</select>
													<select class="form-control mb-3">
														<option>Option 1</option>
														<option>Option 2</option>
														<option>Option 3</option>
													</select>
													<select class="form-control form-control-sm mb-3">
														<option>Option 1</option>
														<option>Option 2</option>
														<option>Option 3</option>
													</select>
												</div>
											</div>
										</form>
									</div>
								</section>
							</div>
						</div>
						
						<div class="row">
							<div class="col">
								<section class="card">
									<div class="card-body">
										<form class="form-horizontal form-bordered" method="get">
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Checkboxes and radios</label>
												<div class="col-lg-6">
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">
															Option one is this and that—be sure to include why it's great
														</label>
													</div>
						
													<div class="checkbox">
														<label>
															<input type="checkbox" value="">
															Option one is this and that—be sure to include why it's great option one
														</label>
													</div>
						
													<div class="radio">
														<label>
															<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
															Option one is this and that—be sure to include why it's great
														</label>
													</div>
													<div class="radio">
														<label>
															<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
															Option two can be something else and selecting it will deselect option one
														</label>
													</div>
						
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Inline checkboxes</label>
												<div class="col-lg-6">
													<label class="checkbox-inline">
														<input type="checkbox" id="inlineCheckbox1" value="option1"> 1
													</label>
													<label class="checkbox-inline">
														<input type="checkbox" id="inlineCheckbox2" value="option2"> 2
													</label>
													<label class="checkbox-inline">
														<input type="checkbox" id="inlineCheckbox3" value="option3"> 3
													</label>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Selects</label>
												<div class="col-lg-6">
													<select class="form-control mb-3">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
						
													<select multiple="" class="form-control">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>
											</div>
						
										</form>
									</div>
								</section>
							</div>
						</div>
						
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Input Groups</h2>
									</header>
									<div class="card-body">
										<form class="form-horizontal form-bordered" method="get">
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Basic examples</label>
												<div class="col-lg-6">
													<div class="input-group mb-3">
														<span class="input-group-prepend">
															<span class="input-group-text">@</span>
														</span>
														<input type="text" class="form-control" placeholder="Username">
													</div>
						
													<div class="input-group mb-3">
														<input type="text" class="form-control">
														<span class="input-group-append">
															<span class="input-group-text">.00</span>
														</span>
													</div>
						
													<div class="input-group mb-3">
														<span class="input-group-prepend">
															<span class="input-group-text">$</span>
														</span>
														<input type="text" class="form-control">
														<span class="input-group-append">
															<span class="input-group-text">.00</span>
														</span>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Sizing</label>
												<div class="col-lg-6">
													<div class="input-group input-group-4 mb-3">
														<span class="input-group-prepend">
															<span class="input-group-text">@</span>
														</span>
														<input type="text" class="form-control form-control-lg" placeholder="Username">
													</div>
						
													<div class="input-group mb-3">
														<span class="input-group-prepend">
															<span class="input-group-text">@</span>
														</span>
														<input type="text" class="form-control" placeholder="Username">
													</div>
						
													<div class="input-group input-group-sm mb-3">
														<span class="input-group-prepend">
															<span class="input-group-text">@</span>
														</span>
														<input type="text" class="form-control" placeholder="Username">
													</div>
						
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Iconic</label>
												<div class="col-lg-6">
													<div class="input-group mb-3">
														<span class="input-group-prepend">
															<span class="input-group-text">
																<i class="fas fa-user"></i>
															</span>
														</span>
														<input type="text" class="form-control" placeholder="Username">
													</div>
													<div class="input-group mb-3">
														<span class="input-group-prepend">
															<span class="input-group-text">
																<i class="fas fa-envelope"></i>
															</span>
														</span>
														<input type="text" class="form-control" placeholder="Email">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Checkbox and radio</label>
												<div class="col-lg-6">
													<div class="input-group mb-3">
														<span class="input-group-prepend">
															<span class="input-group-text">
																<input type="checkbox">
															</span>
														</span>
														<input type="text" class="form-control">
													</div>
						
													<div class="input-group mb-3">
														<span class="input-group-prepend">
															<span class="input-group-text">
																<input type="radio">
															</span>
														</span>
														<input type="text" class="form-control">
													</div>
						
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Button addons</label>
												<div class="col-lg-6">
													<div class="input-group mb-3">
														<span class="input-group-prepend">
															<button class="btn btn-danger" type="button">Go!</button>
														</span>
														<input type="text" class="form-control">
													</div>
						
													<div class="input-group mb-3">
														<input type="text" class="form-control">
														<span class="input-group-append">
															<button class="btn btn-success" type="button">Go!</button>
														</span>
													</div>
												</div>
											</div>
						
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2">Segmented buttons</label>
												<div class="col-lg-6">
													<div class="input-group mb-3">
														<div class="input-group-prepend">
															<button type="button" class="btn btn-primary">Action</button>
															<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<span class="sr-only">Toggle Dropdown</span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Action</a>
																<a class="dropdown-item" href="#">Another action</a>
																<a class="dropdown-item" href="#">Something else here</a>
																<div role="separator" class="dropdown-divider"></div>
																<a class="dropdown-item" href="#">Separated link</a>
															</div>
														</div>
														<input type="text" class="form-control">
													</div>
						
													<div class="input-group mb-3">
														<input type="text" class="form-control">
														<div class="input-group-append">
															<button tabindex="-1" class="btn btn-primary" type="button">Action</button>
															<button tabindex="-1" data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">
																<span class="caret"></span>
															</button>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Action</a>
																<a class="dropdown-item" href="#">Another action</a>
																<a class="dropdown-item" href="#">Something else here</a>
																<div role="separator" class="dropdown-divider"></div>
																<a class="dropdown-item" href="#">Separated link</a>
															</div>
														</div>
													</div>
												</div>
											</div>
						
										</form>
									</div>
								</section>
							</div>
						</div>
						
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Custom Checkbox &amp; Radio</h2>
									</header>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6 mb-3 mb-lg-0">
												<form class="form-horizontal form-bordered" method="get">
													<div class="form-group row">
														<label class="col-sm-4 control-label">Checkboxes</label>
						
														<div class="col-sm-8">
															<div class="checkbox-custom checkbox-default">
																<input type="checkbox" checked="" id="checkboxExample1">
																<label for="checkboxExample1">Checkbox Default</label>
															</div>
						
															<div class="checkbox-custom checkbox-primary">
																<input type="checkbox" checked="" id="checkboxExample2">
																<label for="checkboxExample2">Checkbox Primary</label>
															</div>
						
															<div class="checkbox-custom checkbox-success">
																<input type="checkbox" checked="" id="checkboxExample3">
																<label for="checkboxExample3">Checkbox Success</label>
															</div>
						
															<div class="checkbox-custom checkbox-warning">
																<input type="checkbox" checked="" id="checkboxExample4">
																<label for="checkboxExample4">Checkbox Warning</label>
															</div>
						
															<div class="checkbox-custom checkbox-danger">
																<input type="checkbox" checked="" id="checkboxExample5">
																<label for="checkboxExample5">Checkbox Danger</label>
															</div>
						
															<div class="checkbox-custom">
																<input type="checkbox" disabled="">
																<label>Checkbox Disabled</label>
															</div>
						
															<div class="checkbox-custom">
																<input type="checkbox" disabled="" checked="">
																<label>Checked &amp; Disabled</label>
															</div>
						
														</div>
													</div>
												</form>
											</div>
											<div class="col-lg-6">
												<form class="form-horizontal form-bordered" method="get">
													<div class="form-group row">
														<label class="col-sm-4 control-label">Radios</label>
						
														<div class="col-sm-8">
															<div class="radio-custom">
																<input type="radio" id="radioExample1" name="radioExample">
																<label for="radioExample1">Radio Default</label>
															</div>
						
															<div class="radio-custom radio-primary">
																<input type="radio" id="radioExample2" name="radioExample">
																<label for="radioExample2">Radio Primary</label>
															</div>
						
															<div class="radio-custom radio-success">
																<input type="radio" id="radioExample3" name="radioExample">
																<label for="radioExample3">Radio Success</label>
															</div>
						
															<div class="radio-custom radio-warning">
																<input type="radio" id="radioExample4" name="radioExample">
																<label for="radioExample4">Radio Warning</label>
															</div>
						
															<div class="radio-custom radio-danger">
																<input type="radio" id="radioExample5" name="radioExample">
																<label for="radioExample5">Radio Danger</label>
															</div>
						
															<div class="radio-custom">
																<input type="radio" disabled="">
																<label>Radio Disabled</label>
															</div>
						
															<div class="radio-custom">
																<input type="radio" disabled="" checked="">
																<label>Checked &amp; Disabled</label>
															</div>
						
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
						
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Textarea</h2>
									</header>
									<div class="card-body">
										<form class="form-horizontal form-bordered" method="get">
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="textareaDefault">Textarea</label>
												<div class="col-lg-6">
													<textarea class="form-control" rows="3" id="textareaDefault"></textarea>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="textareaAutosize">Textarea autosize</label>
												<div class="col-lg-6">
													<textarea class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize></textarea>
												</div>
											</div>
										</form>
									</div>
								</section>
							</div>
						</div>
						
						<div class="row">
							<div class="col-lg-12">
						
								<div data-collapsed="0" class="card">
						
									<div class="card-header">
										<div class="card-title">
											<div class="card-actions">
												<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
												<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
											</div>
						
											<h2 class="card-title">Input Grid</h2>
										</div>
									</div>
						
									<div class="card-body">
						
										<div class="row">
						
											<div class="col-lg-12 form-group">
												<input type="text" placeholder=".col-lg-12" class="form-control">
											</div>
						
											<div class="col-lg-6 form-group">
												<input type="text" placeholder=".col-lg-6" class="form-control">
											</div>
						
											<div class="col-lg-6 form-group">
												<input type="text" placeholder=".col-lg-6" class="form-control">
											</div>
						
						
											<div class="col-lg-4 form-group">
												<input type="text" placeholder=".col-lg-4" class="form-control">
											</div>
						
											<div class="col-lg-4 form-group">
												<input type="text" placeholder=".col-lg-4" class="form-control">
											</div>
						
											<div class="col-lg-4 form-group">
												<input type="text" placeholder=".col-lg-4" class="form-control">
											</div>
						
						
											<div class="col-lg-3 form-group">
												<input type="text" placeholder=".col-lg-3" class="form-control">
											</div>
						
											<div class="col-lg-3 form-group">
												<input type="text" placeholder=".col-lg-3" class="form-control">
											</div>
						
											<div class="col-lg-3 form-group">
												<input type="text" placeholder=".col-lg-3" class="form-control">
											</div>
						
											<div class="col-lg-3 form-group">
												<input type="text" placeholder=".col-lg-3" class="form-control">
											</div>
						
						
											<div class="col-lg-2 form-group">
												<input type="text" placeholder=".col-lg-2" class="form-control">
											</div>
						
											<div class="col-lg-2 form-group">
												<input type="text" placeholder=".col-lg-2" class="form-control">
											</div>
						
											<div class="col-lg-2 form-group">
												<input type="text" placeholder=".col-lg-2" class="form-control">
											</div>
						
											<div class="col-lg-2 form-group">
												<input type="text" placeholder=".col-lg-2" class="form-control">
											</div>
						
											<div class="col-lg-2 form-group">
												<input type="text" placeholder=".col-lg-2" class="form-control">
											</div>
						
											<div class="col-lg-2 form-group">
												<input type="text" placeholder=".col-lg-2" class="form-control">
											</div>
						
						
											<div class="col-lg-1 form-group">
												<input type="text" placeholder=".col-lg-1" class="form-control">
											</div>
						
											<div class="col-lg-1 form-group">
												<input type="text" placeholder=".col-lg-1" class="form-control">
											</div>
						
											<div class="col-lg-1 form-group">
												<input type="text" placeholder=".col-lg-1" class="form-control">
											</div>
						
											<div class="col-lg-1 form-group">
												<input type="text" placeholder=".col-lg-1" class="form-control">
											</div>
						
											<div class="col-lg-1 form-group">
												<input type="text" placeholder=".col-lg-1" class="form-control">
											</div>
						
											<div class="col-lg-1 form-group">
												<input type="text" placeholder=".col-lg-1" class="form-control">
											</div>
						
											<div class="col-lg-1 form-group">
												<input type="text" placeholder=".col-lg-1" class="form-control">
											</div>
						
											<div class="col-lg-1 form-group">
												<input type="text" placeholder=".col-lg-1" class="form-control">
											</div>
						
											<div class="col-lg-1 form-group">
												<input type="text" placeholder=".col-lg-1" class="form-control">
											</div>
						
											<div class="col-lg-1 form-group">
												<input type="text" placeholder=".col-lg-1" class="form-control">
											</div>
						
											<div class="col-lg-1 form-group">
												<input type="text" placeholder=".col-lg-1" class="form-control">
											</div>
						
											<div class="col-lg-1 form-group">
												<input type="text" placeholder=".col-lg-1" class="form-control">
											</div>
										</div>
						
									</div>
						
								</div>
						
							</div>
						</div>
						
						<div class="row">
							<div class="col">
								<section class="card card-modern card-big-info">
									<div class="card-body">
										<div class="row">
											<div class="col-lg-2-5 col-xl-1-5">
												<i class="card-big-info-icon bx bx-box"></i>
												<h2 class="card-big-info-title">General Info</h2>
												<p class="card-big-info-desc">Add here the product description with all details and necessary information.</p>
											</div>
											<div class="col-lg-3-5 col-xl-4-5">
												<div class="form-group row align-items-center">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Product Name</label>
													<div class="col-lg-7 col-xl-6">
														<input type="text" class="form-control form-control-modern" name="productName" value="" required />
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-5 col-xl-3 control-label text-lg-right pt-2 mt-1 mb-0">Product Description</label>
													<div class="col-lg-7 col-xl-6">
														<textarea class="form-control form-control-modern" name="productDescription" rows="6"></textarea>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					<!-- end: page -->
				</section>
			</div>