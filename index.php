<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Katik - Kalkulator Matematik</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="font-awesome-4.6.1/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="images/katik-logo.png">
		<script type="text/javascript" src="js/jquery-1.2.3.min.js"></script>		
		<script src="js/jquery-1.12.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/validasi_angka.js"></script>
		<script src="js/submit.js"></script>
		<script src="js/reset.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
                    <a class="navbar-brand" href="/"><img src="images/katik-logo.png" alt="Katik Logo" title="Katik - Kalkulator Matematik"/></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="/">Home</a></li>
						<li><a href="../about">About</a></li>
						<li><a href="../contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>		
		<div class="jumbotron text-center">
			<h1>Katik <small style="color: #d5d5d5 !important;">Kalkulator Matematik</small></h1> 			
		</div>			
		<div class="container">
			<div class="homepage">
				<div class="text-center">
					<h2>Welcome to Katik</h2>
					<p>Hai Sobat, Selamat datang di Katik :]
					<br/>Sebuah web apps sederhana yang berfungsi untuk menghitung nilai luas dan keliling bangun datar</p>
				</div>

				<ul class="nav nav-pills nav-justified">
					<li class="active"><a data-toggle="pill" href="#persegi">Persegi</a></li>
					<li><a data-toggle="pill" href="#persegi-panjang">P. Panjang</a></li>
					<li><a data-toggle="pill" href="#segitiga">Segitiga</a></li>
					<li><a data-toggle="pill" href="#jajar-genjang">Jajar Genjang</a></li>
					<li><a data-toggle="pill" href="#trapesium">Trapesium</a></li>
					<li><a data-toggle="pill" href="#layang-layang">Layang-Layang</a></li>
					<li><a data-toggle="pill" href="#belah-ketupat">Belah Ketupat</a></li>
					<li><a data-toggle="pill" href="#lingkaran">Lingkaran</a></li>
				</ul>

				<div class="tab-content">
					<div id="persegi" class="tab-pane fade in active">
						<div class="row">
							<div class="col-sm-6">
								<div class="panel panel-default text-center">
									<div class="panel-heading">
										<h2>Luas Persegi</h2>
									</div>
									<div class="panel-body">
										<p><img src="images/persegi.jpg" alt="Luas Persegi"></p>
										<p class="text-left">Rumus Luas Persegi yaitu :</p>
										<p><strong>L = S x S</strong></p>
										<p class="text-left">Di mana :<br/>L = Luas<br/>S = Sisi</p>
									</div>
									<div class="panel-footer">
										<h3>Hitung Luas Persegi</h3>
										<form id="luas-persegi" method="post" action="perhitungan/luas-persegi.php">
											<input class="form-control" id="sisi" name="sisi" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Sisi" type="text" required />
											<div id="loading-luas-persegi" class="text-center" style="display:none;"><br /><img src="images/loading.gif" alt="loading..." /></div>																													
											<div id="result-luas-persegi" class="text-left" style="display:none;"></div>											
											<input type="submit" class="btn btn-lg" value="Hitung"></input>
											<p class="text-right">
												<input type="reset" class="btn btn-warning" value="Reset" onclick="showluaspersegi(0);"></input>
											</p>
										</form>											
									</div>
								</div> 
							</div> 
							<div class="col-sm-6">
								<div class="panel panel-default text-center">
									<div class="panel-heading">
										<h2>Keliling Persegi</h2>
									</div>
									<div class="panel-body">
										<p><img src="images/persegi.jpg" alt="Keliling Persegi"></p>
										<p class="text-left">Rumus Keliling Persegi yaitu :</p>
										<p><strong>K = 4 x S</strong></p>
										<p class="text-left">Di mana :<br/>K = Keliling<br/>S = Sisi</p>
									</div>
									<div class="panel-footer">
										<h3>Hitung Keliling Persegi</h3>
										<form id="keliling-persegi" method="post" action="perhitungan/keliling-persegi.php">
											<input class="form-control" id="sisi" name="sisi" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Sisi" type="text" required />
											<div id="loading-keliling-persegi" class="text-center" style="display:none;"><br /><img src="images/loading.gif" alt="loading..." /></div>																													
											<div id="result-keliling-persegi" class="text-left" style="display:none;"></div>											
											<input type="submit" class="btn btn-lg" value="Hitung"></input>
											<p class="text-right">
												<input type="reset" class="btn btn-warning" value="Reset" onclick="showkelilingpersegi(0);"></input>
											</p>
										</form>										
									</div>
								</div> 
							</div> 							
						</div>
					</div>
					<div id="persegi-panjang" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-default text-center">
                                    <div class="panel-heading">
                                        <h2>Luas Persegi Panjang</h2>
                                    </div>
                                    <div class="panel-body">
                                        <p><img src="images/persegi-panjang.jpg" alt="Luas Persegi Panjang"></p>
                                        <p class="text-left">Rumus Luas Persegi Panjang yaitu :</p>
                                        <p><strong>L = P x L</strong></p>
                                        <p class="text-left">Di mana :<br />L = Luas<br />P = Panjang<br />L = Lebar</p>
                                    </div>
                                    <div class="panel-footer">
                                        <h3>Hitung Luas Persegi Panjang</h3>
                                        <form id="luas-persegipanjang" method="post" action="perhitungan/luas-persegipanjang.php">
                                            <input class="form-control" id="panjang" name="panjang" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Panjang" type="text" required /><br />
                                            <input class="form-control" id="lebar" name="lebar" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Lebar" type="text" required />
                                            <div id="loading-luas-persegipanjang" class="text-center" style="display:none;"><br /><img src="images/loading.gif" alt="loading..." /></div>
                                            <div id="result-luas-persegipanjang" class="text-left" style="display:none;"></div>
                                            <input type="submit" class="btn btn-lg" value="Hitung"></input>
                                            <p class="text-right">
                                                <input type="reset" class="btn btn-warning" value="Reset" onclick="showluaspersegipanjang(0);"></input>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-default text-center">
                                    <div class="panel-heading">
                                        <h2>Keliling Persegi Panjang</h2>
                                    </div>
                                    <div class="panel-body">
                                        <p><img src="images/persegi-panjang.jpg" alt="Keliling Persegi Panjang"></p>
                                        <p class="text-left">Rumus Keliling Persegi Panjang yaitu :</p>
                                        <p><strong>K = 2 (P + L)</strong></p>
                                        <p class="text-left">Di mana :<br />K = Keliling<br />P = Panjang<br />L = Lebar</p>
                                    </div>
                                    <div class="panel-footer">
                                        <h3>Hitung Keliling Persegi</h3>
                                        <form id="keliling-persegipanjang" method="post" action="perhitungan/keliling-persegipanjang.php">
                                            <input class="form-control" id="panjang" name="panjang" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Panjang" type="text" required /><br />
                                            <input class="form-control" id="lebar" name="lebar" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Lebar" type="text" required />
                                            <div id="loading-keliling-persegipanjang" class="text-center" style="display:none;"><br /><img src="images/loading.gif" alt="loading..." /></div>
                                            <div id="result-keliling-persegipanjang" class="text-left" style="display:none;"></div>
                                            <input type="submit" class="btn btn-lg" value="Hitung"></input>
                                            <p class="text-right">
                                                <input type="reset" class="btn btn-warning" value="Reset" onclick="showkelilingpersegipanjang(0);"></input>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div id="segitiga" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-default text-center">
                                    <div class="panel-heading">
                                        <h2>Luas Segitiga</h2>
                                    </div>
                                    <div class="panel-body">
                                        <p><img src="images/segitiga.jpg" alt="Luas Segitiga"></p>
                                        <p class="text-left">Rumus Luas Segitiga yaitu :</p>
                                        <p><strong>L = 1/2 x a x t</strong></p>
                                        <p class="text-left">Di mana :<br />L = Luas<br />a = Panjang Alas<br />t = Tinggi</p>
                                    </div>
                                    <div class="panel-footer">
                                        <h3>Hitung Luas Segitiga</h3>
                                        <form id="luas-segitiga" method="post" action="perhitungan/luas-segitiga.php">
                                            <input class="form-control" id="alas" name="alas" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Alas" type="text" required /><br />
                                            <input class="form-control" id="tinggi" name="tinggi" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Tinggi" type="text" required />
                                            <div id="loading-luas-segitiga" class="text-center" style="display:none;"><br /><img src="images/loading.gif" alt="loading..." /></div>
                                            <div id="result-luas-segitiga" class="text-left" style="display:none;"></div>
                                            <input type="submit" class="btn btn-lg" value="Hitung"></input>
                                            <p class="text-right">
                                                <input type="reset" class="btn btn-warning" value="Reset" onclick="showluassegitiga(0);"></input>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-default text-center">
                                    <div class="panel-heading">
                                        <h2>Keliling Segitiga</h2>
                                    </div>
                                    <div class="panel-body">
                                        <p><img src="images/segitiga.jpg" alt="Keliling Segitiga"></p>
                                        <p class="text-left">Rumus Keliling Segitiga yaitu :</p>
                                        <p><strong>K = S1 + S2 + S3</strong></p>
                                        <p class="text-left">Di mana :<br />K = Keliling<br />S1 = Sisi A<br />S2 =  Sisi B<br />S3 = Sisi C</p>
                                    </div>
                                    <div class="panel-footer">
                                        <h3>Hitung Keliling Segitiga</h3>
                                        <form id="keliling-segitiga" method="post" action="perhitungan/keliling-segitiga.php">
                                            <input class="form-control" id="sisi1" name="sisi1" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Sisi A" type="text" required /><br />
                                            <input class="form-control" id="sisi2" name="sisi2" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Sisi B" type="text" required /><br />
                                            <input class="form-control" id="sisi3" name="sisi3" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Sisi C" type="text" required />
                                            <div id="loading-keliling-segitiga" class="text-center" style="display:none;"><br /><img src="images/loading.gif" alt="loading..." /></div>
                                            <div id="result-keliling-segitiga" class="text-left" style="display:none;"></div>
                                            <input type="submit" class="btn btn-lg" value="Hitung"></input>
                                            <p class="text-right">
                                                <input type="reset" class="btn btn-warning" value="Reset" onclick="showkelilingsegitiga(0);"></input>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div id="jajar-genjang" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-default text-center">
                                    <div class="panel-heading">
                                        <h2>Luas Jajar Genjang</h2>
                                    </div>
                                    <div class="panel-body">
                                        <p><img src="images/jajar-genjang.jpg" alt="Luas Jajar Genjang"></p>
                                        <p class="text-left">Rumus Luas Trapesium yaitu :</p>
                                        <p><strong>L = a x t</strong></p>
                                        <p class="text-left">Di mana :<br />L = Luas<br />a = Alas<br />t = Tinggi</p>
                                    </div>
                                    <div class="panel-footer">
                                        <h3>Hitung Luas Jajar Genjang</h3>
                                        <form id="luas-jajargenjang" method="post" action="perhitungan/luas-jajargenjang.php">
                                            <input class="form-control" id="alas" name="alas" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Alas" type="text" required /><br />
                                            <input class="form-control" id="tinggi" name="tinggi" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Tinggi" type="text" required />
                                            <div id="loading-luas-jajargenjang" class="text-center" style="display:none;"><br /><img src="images/loading.gif" alt="loading..." /></div>
                                            <div id="result-luas-jajargenjang" class="text-left" style="display:none;"></div>
                                            <input type="submit" class="btn btn-lg" value="Hitung"></input>
                                            <p class="text-right">
                                                <input type="reset" class="btn btn-warning" value="Reset" onclick="showluasjajargenjang(0);"></input>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-default text-center">
                                    <div class="panel-heading">
                                        <h2>Keliling Jajar Genjang</h2>
                                    </div>
                                    <div class="panel-body">
                                        <p><img src="images/jajar-genjang.jpg" alt="Keliling Jajar Genjang"></p>
                                        <p class="text-left">Rumus Keliling Jajar Genjang yaitu :</p>
                                        <p><strong>K = 2 (a + m)</strong></p>
                                        <p class="text-left">Di mana :<br />K = Keliling<br />a = Alas<br />m = Sisi Miring</p>
                                    </div>
                                    <div class="panel-footer">
                                        <h3>Hitung Keliling Jajar Genjang</h3>
                                        <form id="keliling-jajargenjang" method="post" action="perhitungan/keliling-jajargenjang.php">
                                            <input class="form-control" id="alas" name="alas" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Alas" type="text" required /><br />
                                            <input class="form-control" id="miring" name="miring" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Sisi Miring" type="text" required />
                                            <div id="loading-keliling-jajargenjang" class="text-center" style="display:none;"><br /><img src="images/loading.gif" alt="loading..." /></div>
                                            <div id="result-keliling-jajargenjang" class="text-left" style="display:none;"></div>
                                            <input type="submit" class="btn btn-lg" value="Hitung"></input>
                                            <p class="text-right">
                                                <input type="reset" class="btn btn-warning" value="Reset" onclick="showkelilingjajargenjang(0);"></input>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div id="trapesium" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-default text-center">
                                    <div class="panel-heading">
                                        <h2>Luas Trapesium</h2>
                                    </div>
                                    <div class="panel-body">
                                        <p><img src="images/trapesium.jpg" alt="Luas Trapesium"></p>
                                        <p class="text-left">Rumus Luas Trapesium yaitu :</p>
                                        <p><strong>L = 1/2 x (S1 + S2) x t</strong></p>
                                        <p class="text-left">Di mana :<br />L = Luas<br />S1 = Sisi A<br />S2 = Sisi B<br />t = Tinggi</p>
                                    </div>
                                    <div class="panel-footer">
                                        <h3>Hitung Luas Trapesium</h3>
                                        <form id="luas-trapesium" method="post" action="perhitungan/luas-trapesium.php">
                                            <input class="form-control" id="sisi1" name="sisi1" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Sisi A" type="text" required /><br />
                                            <input class="form-control" id="sisi2" name="sisi2" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Sisi B" type="text" required /><br />
                                            <input class="form-control" id="tinggi" name="tinggi" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Tinggi" type="text" required />
                                            <div id="loading-luas-trapesium" class="text-center" style="display:none;"><br /><img src="images/loading.gif" alt="loading..." /></div>
                                            <div id="result-luas-trapesium" class="text-left" style="display:none;"></div>
                                            <input type="submit" class="btn btn-lg" value="Hitung"></input>
                                            <p class="text-right">
                                                <input type="reset" class="btn btn-warning" value="Reset" onclick="showluastrapesium(0);"></input>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-default text-center">
                                    <div class="panel-heading">
                                        <h2>Keliling Trapesium</h2>
                                    </div>
                                    <div class="panel-body">
                                        <p><img src="images/trapesium.jpg" alt="Keliling Trapesium"></p>
                                        <p class="text-left">Rumus Keliling Trapesium yaitu :</p>
                                        <p><strong>K = S1 + S2 + S3 + S4</strong></p>
                                        <p class="text-left">Di mana :<br />K = Keliling<br />S1 = Sisi A<br />S2 = Sisi B<br />S3 = Sisi C<br />S4 = Sisi D</p>
                                    </div>
                                    <div class="panel-footer">
                                        <h3>Hitung Keliling Trapesium</h3>
                                        <form id="keliling-trapesium" method="post" action="perhitungan/keliling-trapesium.php">
                                            <input class="form-control" id="sisi1" name="sisi1" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Sisi A" type="text" required /><br />
                                            <input class="form-control" id="sisi2" name="sisi2" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Sisi B" type="text" required /><br />
                                            <input class="form-control" id="sisi3" name="sisi3" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Sisi C" type="text" required /><br />
                                            <input class="form-control" id="sisi4" name="sisi4" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Sisi D" type="text" required />
                                            <div id="loading-keliling-trapesium" class="text-center" style="display:none;"><br /><img src="images/loading.gif" alt="loading..." /></div>
                                            <div id="result-keliling-trapesium" class="text-left" style="display:none;"></div>
                                            <input type="submit" class="btn btn-lg" value="Hitung"></input>
                                            <p class="text-right">
                                                <input type="reset" class="btn btn-warning" value="Reset" onclick="showkelilingtrapesium(0);"></input>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div id="layang-layang" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-default text-center">
                                    <div class="panel-heading">
                                        <h2>Luas Layang-Layang</h2>
                                    </div>
                                    <div class="panel-body">
                                        <p><img src="images/layang-layang.png" alt="Luas Layang-Layang"></p>
                                        <p class="text-left">Rumus Luas Layang-Layang yaitu :</p>
                                        <p><strong>L = 1/2 x d1 x d2</strong></p>
                                        <p class="text-left">Di mana :<br />L = Luas<br />d1 = Diagonal Vertikal<br />d2 = Diagonal Horizontal</p>
                                    </div>
                                    <div class="panel-footer">
                                        <h3>Hitung Luas Layang-Layang</h3>
                                        <form id="luas-layanglayang" method="post" action="perhitungan/luas-layanglayang.php">
                                            <input class="form-control" id="diagonal1" name="diagonal1" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Diagonal Vertikal" type="text" required /><br />
                                            <input class="form-control" id="diagonal2" name="diagonal2" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Diagonal Horizontal" type="text" required />
                                            <div id="loading-luas-layanglayang" class="text-center" style="display:none;"><br /><img src="images/loading.gif" alt="loading..." /></div>
                                            <div id="result-luas-layanglayang" class="text-left" style="display:none;"></div>
                                            <input type="submit" class="btn btn-lg" value="Hitung"></input>
                                            <p class="text-right">
                                                <input type="reset" class="btn btn-warning" value="Reset" onclick="showluaslayanglayang(0);"></input>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-default text-center">
                                    <div class="panel-heading">
                                        <h2>Keliling Layang-Layang</h2>
                                    </div>
                                    <div class="panel-body">
                                        <p><img src="images/layang-layang.png" alt="Keliling Layang-Layang"></p>
                                        <p class="text-left">Rumus Keliling Layang-Layang yaitu :</p>
                                        <p><strong>K = 2 x (S1 + S2)</strong></p>
                                        <p class="text-left">Di mana :<br />K = Keliling<br />S1 = Sisi 1<br />S2 = Sisi 2</p>
                                    </div>
                                    <div class="panel-footer">
                                        <h3>Hitung Keliling Layang-Layang</h3>
                                        <form id="keliling-layanglayang" method="post" action="perhitungan/keliling-layanglayang.php">
                                            <input class="form-control" id="sisi1" name="sisi1" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Sisi 1" type="text" required /><br />
                                            <input class="form-control" id="sisi2" name="sisi2" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Sisi 2" type="text" required />                                            
                                            <div id="loading-keliling-layanglayang" class="text-center" style="display:none;"><br /><img src="images/loading.gif" alt="loading..." /></div>
                                            <div id="result-keliling-layanglayang" class="text-left" style="display:none;"></div>
                                            <input type="submit" class="btn btn-lg" value="Hitung"></input>
                                            <p class="text-right">
                                                <input type="reset" class="btn btn-warning" value="Reset" onclick="showkelilinglayanglayang(0);"></input>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div id="belah-ketupat" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-default text-center">
                                    <div class="panel-heading">
                                        <h2>Luas Belah Ketupat</h2>
                                    </div>
                                    <div class="panel-body">
                                        <p><img src="images/belah-ketupat.png" alt="Luas Belah Ketupat"></p>
                                        <p class="text-left">Rumus Luas Belah Ketupat yaitu :</p>
                                        <p><strong>L = 1/2 x d1 x d2</strong></p>
                                        <p class="text-left">Di mana :<br />L = Luas<br />d1 = Diagonal Horizontal<br />d2 = Diagonal Vertikal</p>
                                    </div>
                                    <div class="panel-footer">
                                        <h3>Hitung Luas Belah Ketupat</h3>
                                        <form id="luas-belahketupat" method="post" action="perhitungan/luas-belahketupat.php">
                                            <input class="form-control" id="diagonal1" name="diagonal1" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Diagonal Vertikal" type="text" required /><br />
                                            <input class="form-control" id="diagonal2" name="diagonal2" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Diagonal Horizontal" type="text" required />
                                            <div id="loading-luas-belahketupat" class="text-center" style="display:none;"><br /><img src="images/loading.gif" alt="loading..." /></div>
                                            <div id="result-luas-belahketupat" class="text-left" style="display:none;"></div>
                                            <input type="submit" class="btn btn-lg" value="Hitung"></input>
                                            <p class="text-right">
                                                <input type="reset" class="btn btn-warning" value="Reset" onclick="showluasbelahketupat(0);"></input>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-default text-center">
                                    <div class="panel-heading">
                                        <h2>Keliling Belah Ketupat</h2>
                                    </div>
                                    <div class="panel-body">
                                        <p><img src="images/belah-ketupat.png" alt="Keliling Belah Ketupat"></p>
                                        <p class="text-left">Rumus Keliling Belah Ketupat yaitu :</p>
                                        <p><strong>K = 4 x S</strong></p>
                                        <p class="text-left">Di mana :<br />K = Keliling<br />S = Sisi</p>
                                    </div>
                                    <div class="panel-footer">
                                        <h3>Hitung Keliling Layang-Layang</h3>
                                        <form id="keliling-belahketupat" method="post" action="perhitungan/keliling-belahketupat.php">
                                            <input class="form-control" id="sisi" name="sisi" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Sisi" type="text" required />
                                            <div id="loading-keliling-belahketupat" class="text-center" style="display:none;"><br /><img src="images/loading.gif" alt="loading..." /></div>
                                            <div id="result-keliling-belahketupat" class="text-left" style="display:none;"></div>
                                            <input type="submit" class="btn btn-lg" value="Hitung"></input>
                                            <p class="text-right">
                                                <input type="reset" class="btn btn-warning" value="Reset" onclick="showkelilingbelahketupat(0);"></input>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div id="lingkaran" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-default text-center">
                                    <div class="panel-heading">
                                        <h2>Luas Lingkaran</h2>
                                    </div>
                                    <div class="panel-body">
                                        <p><img src="images/lingkaran.jpg" alt="Luas Lingkaran"></p>
                                        <p class="text-left">Rumus Luas Lingkaran yaitu :</p>
                                        <p><strong>L = π x r x r</strong></p>
                                        <p class="text-left">Di mana :<br />L = Luas<br />π = Phi (3,14 atau 22/7)<br />r = Jari-Jari Lingkaran</p>
                                    </div>
                                    <div class="panel-footer">
                                        <h3>Hitung Luas Lingkaran</h3>
                                        <form id="luas-lingkaran" method="post" action="perhitungan/luas-lingkaran.php">                                            
                                            <input class="form-control" id="jarijari" name="jarijari" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Jari-Jari" type="text" required />
                                            <div id="loading-luas-lingkaran" class="text-center" style="display:none;"><br /><img src="images/loading.gif" alt="loading..." /></div>
                                            <div id="result-luas-lingkaran" class="text-left" style="display:none;"></div>
                                            <input type="submit" class="btn btn-lg" value="Hitung"></input>
                                            <p class="text-right">
                                                <input type="reset" class="btn btn-warning" value="Reset" onclick="showluaslingkaran(0);"></input>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-default text-center">
                                    <div class="panel-heading">
                                        <h2>Keliling Lingkaran</h2>
                                    </div>
                                    <div class="panel-body">
                                        <p><img src="images/lingkaran.jpg" alt="Keliling Lingkaran"></p>
                                        <p class="text-left">Rumus Keliling Lingkaran yaitu :</p>
                                        <p><strong>L = π x d</strong></p>
                                        <p class="text-left">Di mana :<br />L = Luas<br />π = Phi (3,14 atau 22/7)<br />d = Diameter Lingkaran</p>
                                    </div>
                                    <div class="panel-footer">
                                        <h3>Hitung Keliling Layang-Layang</h3>
                                        <form id="keliling-lingkaran" method="post" action="perhitungan/keliling-lingkaran.php">
                                            <input class="form-control" id="diameter" name="diameter" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Diameter" type="text" required />
                                            <div id="loading-keliling-lingkaran" class="text-center" style="display:none;"><br /><img src="images/loading.gif" alt="loading..." /></div>
                                            <div id="result-keliling-lingkaran" class="text-left" style="display:none;"></div>
                                            <input type="submit" class="btn btn-lg" value="Hitung"></input>
                                            <p class="text-right">
                                                <input type="reset" class="btn btn-warning" value="Reset" onclick="showkelilinglingkaran(0);"></input>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>			
		</div>
		<footer class="text-center">
			<p>Copyright 2016 <span class="glyphicon glyphicon-copyright-mark"></span> Katik All Rights Reserved<br />
            Made with <span class="glyphicon glyphicon-heart"></span> Powered by <a href="https://azure.microsoft.com" re="nofollow" target="_blank">Microsoft Azure</a></p>
		</footer>
	</body>
</html>