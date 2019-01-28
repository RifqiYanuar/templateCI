<div class="row">
                  <div class="col-lg-9 main-chart">

                  	<div class="row mtbox">
                  		<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  			<div class="box1">
					  			<span class="li_heart"></span>
					  			<h3>9999</h3>
                  			</div>
					  			<p>9999 Orang menyukai barang di bisnis anda . Whoohoo!</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_cloud"></span>
					  			<h3>+48</h3>
                  			</div>
					  			<p>48 produk baru akan segera rilis awal bulan depan.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_stack"></span>
					  			<h3>100</h3>
                  			</div>
					  			<p>100 pesan dari pengunjung web yang belum anda baca</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_news"></span>
					  			<h3>+10</h3>
                  			</div>
					  			<p>10 buku baru yang harus anda baca,tentang bisnis.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_data"></span>
					  			<h3>OK!</h3>
                  			</div>
					  			<p>pengelolaan web ini terjamin sekali,bisnis anda lancar.</p>
                  		</div>

                  	</div><!-- /row mt -->


                      <div class="row mt">
                      <!-- SERVER STATUS PANELS -->
                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn donut-chart">
                      			<div class="white-header">
						  			<h5>DATA KUNJUNGAN</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										<p><i class="fa fa-database"></i> 80%</p>
									</div>
	                      		</div>
								<canvas id="serverstatus01" height="120" width="120"></canvas>
								<script>
									var doughnutData = [
											{
												value: 80,
												color:"#68dff0"
											},
											{
												value : 20,
												color : "#fdfdfd"
											}
										];
										var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
								</script>
	                      	</div><! --/grey-panel -->
                      	</div><!-- /col-md-4-->


                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn">
                      			<div class="white-header">
						  			<h5>PRODUK LANGKA</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										<p><i class="fa fa-heart"></i> 999</p>
									</div>
									<div class="col-sm-6 col-xs-6"></div>
	                      		</div>
	                      		<div class="centered">
										<img src="<?= base_url()?>assets/motor.jpg" width="120">
	                      		</div>
                      		</div>
                      	</div><!-- /col-md-4 -->

						<div class="col-md-4 mb">
							<!-- WHITE PANEL - TOP USER -->
							<div class="white-panel pn">
								<div class="white-header">
									<h5>DIREKTUR</h5>
								</div>
								<p><img src="<?= base_url()?>assets/saya.jpg" class="img-circle" width="60"></p>
								<p><b>Rifqi Yanuar</b></p>
								<div class="row">
									<div class="col-md-6">
										<p class="small mt">Mulai Berbisnis</p>
										<p>2001</p>
									</div>
									<div class="col-md-6">
										<p class="small mt">Total Pendapatan</p>
										<p>$ 99,99</p>
									</div>
								</div>
							</div>
						</div><!-- /col-md-4 -->


                    </div><!-- /row -->


					<div class="row">
						<!-- TWITTER PANEL -->
						<div class="col-md-4 mb">
                      		<div class="darkblue-panel pn">
                      			<div class="darkblue-header">
						  			<h5>Data Penjualan</h5>
                      			</div>
								<canvas id="serverstatus02" height="120" width="120"></canvas>
								<script>
									var doughnutData = [
											{
												value: 90,
												color:"#68dff0"
											},
											{
												value : 10,
												color : "#444c57"
											}
										];
										var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
								</script>
								<p>January 21 , 2019</p>
								<footer>
									<div class="pull-left">
										<h5><i class="fa fa-hdd-o"></i> 99 Rusak</h5>
									</div>
									<div class="pull-right">
										<h5>90% Terjual</h5>
									</div>
								</footer>
                      		</div><! -- /darkblue panel -->
						</div><!-- /col-md-4 -->


						<div class="col-md-4 mb">
							<!-- INSTAGRAM PANEL -->
							<div class="instagram-panel pn">
								<i class="fa fa-instagram fa-4x"></i>
								<p>@riefqi_yam83<br/>
									1 min. ago
								</p>
								<p><i class="fa fa-comment"></i> 88 | <i class="fa fa-heart"></i> 9.9850 K</p>
							</div>
						</div><!-- /col-md-4 -->

						<div class="col-md-4 col-sm-4 mb">
							<!-- REVENUE PANEL -->
							<div class="darkblue-panel pn">
								<div class="darkblue-header">
									<h5>Penghasilan</h5>
								</div>
								<div class="chart mt">
									<div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
								</div>
								<p class="mt"><b>$ 99,980</b><br/>Rekap Bulanan</p>
							</div>
						</div><!-- /col-md-4 -->

					</div><!-- /row -->

					<div class="row mt">
                      <!--CUSTOM CHART START -->
                      <div class="border-head">
                          <h3>Pengunjung</h3>
                      </div>
                      <div class="custom-bar-chart">
                          <ul class="y-axis">
                              <li><span>10.000</span></li>
                              <li><span>8.000</span></li>
                              <li><span>6.000</span></li>
                              <li><span>4.000</span></li>
                              <li><span>2.000</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class="bar">
                              <div class="title">JAN</div>
                              <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">FEB</div>
                              <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MAR</div>
                              <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">APR</div>
                              <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                          </div>
                          <div class="bar">
                              <div class="title">MAY</div>
                              <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">JUN</div>
                              <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                          </div>
                          <div class="bar">
                              <div class="title">JUL</div>
                              <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                          </div>
                      </div>
                      <!--custom chart end-->
					</div><!-- /row -->

                  </div><!-- /col-lg-9 END SECTION MIDDLE -->


      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->

                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						<h3>Pemberitahuan</h3>

                      <!-- First Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>2 Menit yang lalu</muted><br/>
                      		   <a href="#">Nofela Sogi </a> mengikuti bisnis anda.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Second Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>3 Jam yang lalu</muted><br/>
                      		   <a href="#">Maulana Aji</a> ingin bergabung bisnis anda.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Third Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>7 Jam yang lalu</muted><br/>
                      		   <a href="#">Yudha Dwi</a> mengikuti bisnis anda<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fourth Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>11 Jam yang lalu</muted><br/>
                      		   <a href="#">David Putra</a> mengomentari galery anda.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fifth Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>18 Jam yang lalu</muted><br/>
                      		   <a href="#">Risdhi Laksna</a> tertarik untuk mengikuti bisnis anda.<br/>
                      		</p>
                      	</div>
                      </div>

                       <!-- USERS ONLINE SECTION -->
						<h3>Nama Customer</h3>
                      <!-- First Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="<?= base_url()?>assets/prilly.jpeg" width="35px" height="35px" align="">
                      	</div>
                      	<div class="details">
                      		<p><a href="#">Prilly Latuconsina</a><br/>
                      		   <muted>customer 1</muted>
                      		</p>
                      	</div>
                      </div>
                      <!-- Second Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="<?= base_url()?>assets/milea.jpeg" width="35px" height="35px" align="">
                      	</div>
                      	<div class="details">
                      		<p><a href="#">Vanesha Prescilla</a><br/>
                      		   <muted>costumer 2</muted>
                      		</p>
                      	</div>
                      </div>
                      <!-- Third Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="<?= base_url()?>assets/natasha.jpeg" width="35px" height="35px" align="">
                      	</div>
                      	<div class="details">
                      		<p><a href="#">Natasha Wilona</a><br/>
                      		   <muted>costumer 3</muted>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fourth Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="<?= base_url()?>assets/jessica.jpeg" width="35px" height="35px" align="">
                      	</div>
                      	<div class="details">
                      		<p><a href="#">Jessica Mila</a><br/>
                      		   <muted>costumer 4</muted>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fifth Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="<?= base_url()?>assets/kathy.jpeg" width="35px" height="35px" align="">
                      	</div>
                      	<div class="details">
                      		<p><a href="#">Kathy Indera</a><br/>
                      		   <muted>costumer 5</muted>
                      		</p>
                      	</div>
                      </div>

                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->

                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
