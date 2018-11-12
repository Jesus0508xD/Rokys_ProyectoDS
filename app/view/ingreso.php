<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bienvenido</title>
	<link rel="stylesheet" href="<?=RUTA_URL?>boostrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=RUTA_URL?>boostrap/css/body.css">
	<link rel="stylesheet" type="text/css" href="<?=RUTA_URL?>boostrap/css/medio.css">
	<link rel="stylesheet" type="text/css" href="<?=RUTA_URL?>boostrap/css/top.css">
	<link rel="stylesheet" type="text/css" href="<?=RUTA_URL?>boostrap/css/pie.css">
	<link rel="stylesheet" type="text/css" href="<?=RUTA_URL?>boostrap/css/fonts.css">
</head>
<script language="JavaScript">
	function mueveReloj(){
	   	momentoActual = new Date()
	   	hora = momentoActual.getHours()
	   	minuto = momentoActual.getMinutes()
	   	segundo = momentoActual.getSeconds()

	   	str_segundo = new String (segundo)
	   	if (str_segundo.length == 1)
	      	segundo = "0" + segundo

	   	str_minuto = new String (minuto)
	   	if (str_minuto.length == 1)
	      	minuto = "0" + minuto

	   	str_hora = new String (hora)
	   	if (str_hora.length == 1)
	      	hora = "0" + hora

	   	horaImprimible = hora + " : " + minuto + " : " + segundo

	   	document.form_reloj.reloj.value = horaImprimible

	   	setTimeout("mueveReloj()",1000)
	}
</script>

<body onload="mueveReloj()">
	<!--Comienza cabecera-->
		<header>
			<div class="container">
				<div class="row">
						<div class="foto col-xs-12 col-sm-2 col-md-1 col-lg-1" align="center">
								<img src="<?=RUTA_URL?>img/usuario.png">
						</div>
						<div class="nom_emp col-xs-12 col-sm-1 col-md-1 col-lg-1" align="center" >
							<p><?=$datos[0]->getNombres();?></p>
						</div>

						<div class="fecha_hora col-xs-6 col-sm-2 col-md-2 col-lg-2" >
							<div id=fecha align="center">
							<script>
								var f=new Date();
								var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
								document.write('<div class="mifecha">');
								document.write('<div class="ano">' + f.getFullYear()+'      '+ f.getDate() + '     ' +meses[f.getMonth()] +'</div>');
								document.write('</div>');
							</script>
							</div>
							<div id=hora align="center">
								<form name="form_reloj">
									<input type="text" name="reloj" size="10" style=" font-family : Verdana, Arial, Helvetica; border:0px;font-size : 8pt; text-align : center;" onfocus="window.document.form_reloj.reloj.blur()">
								</form>
							</div>
						</div>
						<div class="mesa col-xs-6 col-sm-1 col-md-1 col-lg-2" align="center">
								<div>
								<label for="mesa">Mesa:    </label></div>
								<span><?=$datos[1];?></span>
								<div><input class="caja_mesa" type="text" name="mesa"/></div>
						</div>
						<div class="col-xs-12 col-sm-4">
						</div>
						<div class="logo col-xs-12 col-sm-2">
							
								<img src="<?=RUTA_URL?>img/LOGO-ROKYS-2017-01.png" alt="UserAvatar" height="60">
							
						</div>
				</div>
			</div>
		</header>
		<!--Fin de cabeza-->
		<!--Comienza el medio con container-->
		<div class="container-fluid">
			<div class="row"><!--Comienza parte del medio-->
				<div class="col-xs-12 col-sm-6 col-md-6" align="center"> <!--Comienza parte -->
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<p>
								<div class="table-wrapper-scroll-y">
									<table class="boletas table-bordered table-striped">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">Cantidad</th>
												<th scope="col">Descripcion</th>
												<th scope="col">Precio</th>
												<th scope="col">SubTotal</th>
												<th scope="col">Hora</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>1</td>
												<td>Pollito</td>
												<td>2</td>
												<td>2</td>
												<td>kha</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>4</td>
												<td>papa</td>
												<td>8</td>
												<td>32</td>
												<td>khe</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>3</td>
												<td>ensalda</td>
												<td>5</td>
												<td>15</td>
												<td>khi</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>2</td>
												<td>gaseosa</td>
												<td>7</td>
												<td>14</td>
												<td>kho</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>1</td>
												<td>parrilla</td>
												<td>70</td>
												<td>70</td>
												<td>khu</td>
											</tr>
										</tbody>
									</table>
								</div>
							</p>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-4">
								<p>
									<div class="table-responsive">
										<table class="cuentas">
											<thead>
												<th>Cuenta Cliente</th>
												<th>Cantidad</th>
											</thead>
											<tr>
												<td>Sub Total</td>
												<td>0.00</td>
											</tr>
											<tr>
												<td>Descuento</td>
												<td>0.00</td>
											</tr>
											<tr>
												<td>Descuento adm</td>
												<td>0.00</td>
											</tr>
											<tr>
												<td>Total</td>
												<td>0.00</td>
											</tr>
										</table>
									</div>
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="container">
							<div class="col-xs-12">
								<p>
									<table class="info">
										<tr><td>
												<select>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
												</select>
											</td>
											<td>
												<select>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
												</select>
											</td>
											<td>
												<select>
													<option value="normal">Normal</option>
													<option value="rfid">RFID</option>
												</select>
											</td>
										</tr>
										<tr><td>Seleccionar cantidad</td>
											<td>Visitantes</td>
											<td>Tipo de venta</td>
										</tr>
									</table>
								</p>
							</div>
						</div>
					</div><!--Fin parte izquierda-->
				</div>
				<div class="col-xs-12 col-ms-6 col-md-6"><!--Comienza parte derecha-->
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_pollo"  onclick="mostrarPollos()">Pollo</p>
								<p href="#Vcombo_pollo" class="btn btn-lg btn-block btn-warning" id="combo_pollo" style="display:none;" data-toggle="modal">Combo Pollo Enteros</p>
								<p href="#Vvino_tinto" class="btn btn-lg btn-block btn-warning" id="vino_tinto" style="display:none;">Vino Tinto</p>
								<p href="#Vlomo_saltado" class="btn btn-lg btn-block btn-warning" id="lomo_saltado" style="display:none;">Lomo Saltado</p>
								<p href="#Vcerveza_cristal" class="btn btn-lg btn-block btn-warning" id="cerveza_cristal" style="display:none;">Cristal</p>
								<p href="#Vensalada_verduras" class="btn btn-lg btn-block btn-warning" id="ensalada_verduras"  style="display:none;">Ensalada de Verduras</p>
								<p href="#Vchancho_palo" class="btn btn-lg btn-block btn-warning" id="chancho_palo" style="display:none;">Chancho al palo</p>
								<p href="#Voferta_1" class="btn btn-lg btn-block btn-warning" id="oferta_1"  style="display:none;">Oferta 1</p>
								<p href="#vbar_1" class="btn btn-lg btn-block btn-warning" id="bar_1"  style="display:none;">Bar 1</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="seis_broaster" style="display:none;">6 Broaster</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="desayuno_1" style="display:none;">Desayuno 1</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="inkacola_3" style="display:none;">Inkacola 3 litros</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="sangria_1" style="display:none;">1 litro de sangrias</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="te" style="display:none;">Te</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="parillada_1" style="display:none;">Parilladas 1</p>
							</div>
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_vino" onclick="mostrarVinos()">Vino</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="pollo_entero" style="display:none;">1 Pollo Entero Solo</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="vino_blanco" style="display:none;">Vino Blanco</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="arroz_con_pollo" style="display:none;">Arroz con Pollo</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="cerveza_pilsen" style="display:none;">Pilsen</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="ensalada_italiana"  style="display:none;">Ensalada Italiana</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="asado_de_chancho" style="display:none;">Asado de Chancho</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="oferta_2"  style="display:none;">Oferta 2</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="bar_2"  style="display:none;">Bar 2</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="seis_nuggets" style="display:none;">6 Nuggets</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="desayuno_2" style="display:none;">Desayuno 2</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="cocacola_3" style="display:none;">CocaCola 3 litros</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="sangria_2" style="display:none;">2 litros de sangrias</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="manzanilla" style="display:none;">Manzanilla</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="parillada_2" style="display:none;">Parilladas 2</p>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row"><p>
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_menus" onclick="mostrarMenus()">Menus</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="combo_1_2" style="display:none;">Combo 1/2 Pollo</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="vino_rose" style="display:none;">Vino Rose</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="tallarines_rojos" style="display:none;">Tallarines Rojos</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="cerveza_cusquena" style="display:none;">Cusqueña</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="ensalada_de_mango"  style="display:none;">Ensalada de Mango</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="pescado_frito" style="display:none;">Pescado Frito</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="oferta_3"  style="display:none;">Oferta 3</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="bar_3"  style="display:none;">Bar 3</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="doce_broaster" style="display:none;">12 Broasters</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="desayuno_3" style="display:none;">Desayuno 3</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="sprite_3" style="display:none;">Sprite 3 litros</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="sangria_3" style="display:none;">3 litros de sangrias</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="anis" style="display:none;">Anis</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="parillada_3" style="display:none;">Parilladas 3</p>
							</div>
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_cerveza" onclick="mostrarCerveza()">Cerveza</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="pollo_1_2" style="display:none;"> 1/2 Pollo Solo</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="pisco_puro" style="display:none;">Pisco Puro</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="arroz_chaufa" style="display:none;">Arroz Chaufa</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="cerveza_corona" style="display:none;">Corona</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="ensalada_de_aguacate"  style="display:none;">Ensalada de Aguacate</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="cordero_frito" style="display:none;">Cordero Frito</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="oferta_4"  style="display:none;">Oferta 4</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="doce_nuggets" style="display:none;">12 Nuggets</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="desayuno_4" style="display:none;">Desayuno 4</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="inkacola_2" style="display:none;">Inkacola 2 litros</p>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_ensa" onclick="mostrarEnsa()">Ensaladas y otros acompa</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="pollo_1_4" style="display:none;"> 1/4 Pollo</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="pisco_acholado" style="display:none;">Pisco Acholado</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="artesanal_candelaria" style="display:none;">Artesanal Candelaria</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="valde_broaster" style="display:none;">Valde de broaster</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="desayuno_5" style="display:none;">Desayuno 5</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="cocacola_2" style="display:none;">CocaCola 2 litros</p>
							</div>
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_otros" onclick="mostrarCarne()">Otras carnes</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="pollo_1_8" style="display:none;"> 1/8 Pollo</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="pisco_mosto_verde" style="display:none;">Pisco Mosto Verde</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="beer_gold" style="display:none;">Harboe Beer Gold</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="sprite_2" style="display:none;">Sprite 2 litros</p>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_ofer" onclick="mostrarOfer()">Ofertas y Promociones</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="champagne" style="display:none;">Champagne</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="artesanal_maddok" style="display:none;">Artesanal Maddok</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="inkacola_1" style="display:none;">InkaCola 1 litro</p>
							</div>
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_bar" onclick="mostrarBar()">Carta Bar Variado</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="cocacola_1" style="display:none;">CocaCola 1 litro</p>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_broaster" onclick="mostrarBroaster()">Broaster y Nuggets</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="sprite_1" style="display:none;">Sprite 1 litro</p>
							</div>
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_desayuno" onclick="mostrarDesayuno()">Desayuno</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="gordita" style="display:none;">Gordita</p>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_gaseosa" onclick="mostrarGaseosa()">Gaseosa</p>
								<p href="#vCombo_pollo" lass="btn btn-lg btn-block btn-warning" id="inkacola_personal" style="display:none;">InkaCola Personal</p>
							</div>
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_sangrias" value="Sangrias" href="" onclick="mostrarSangria()">Sangrias</p>
								<p href="#vCombo_pollo" class="btn btn-lg btn-block btn-warning" id="cocacola_personal" style="display:none;">CocaCola Personal</p>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_becal" onclick="mostrarbeCal()">Bebidas Calientes</p>
							</div>
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_parrilladas" onclick="mostrarParrilla()">Parilladas</p>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_cajita">Cajita Magica</p>
							</div>
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_peñas">Peñas</p>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="menu_criollo">Criollos</p>
							</div>
							<div class="col-xs-12 col-sm-6">
								<p class="btn btn-lg btn-block btn-warning" id="atras" href="#" style="display:none;">Atras</p>
							</div>
						</div>
					</div>
				</div><!--Fin parte derecha-->
			</div><!--Fin medio-->
		</div><!--Fin container-->
		<!--Fin de parte media, empieza botones-->
		<footer>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-6 col-sm-3 col-md-3">
						<a class="btn btn-md btn-block btn-primary" value="caja" href="">
						<span class="icon-shop"></span>Enviar Caja</a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3">
						<a class="btn btn-md btn-block btn-primary" value="vales" href="">
						<span class="icon-ticket"></span>Asignar RFID</a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3">
						<a class="btn btn-md btn-block btn-primary" value="kits" href="">
						<span class="icon-suitcase"></span>Agregar kits</a>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3">
						<a class="btn btn-md btn-block btn-primary" value="terminar" href="">
						<span class="icon-check"></span>Terminar</a>
					</div>
				</div>
				<br>
			</div>
		</footer>
		<!--Fin de botones-->
		<!--Comienza los menus desplegables-->
		<div class="nodal fade" id="Vcombo_pollo" style="display:none;">
			<?php
			/*
				//Caracteristicas de la base de datos
				include_once("connection.php");
				$db=AccesoDB::getConnection();
				include_once("producto.php");/*
				$coleccion=$db->Producto;
				$document=$coleccion->findOne(array('codigo'=> 'P001'));
				if(isset($document)){
					//$combo_pollo= new Producto($document['codigo'],$document['nombre'],$document['categoria'],$document['precio'],$document['descripcion']);
				//echo $combo_pollo->toString();
				}
				else{
					die('Producto no existe en la BD');
				}
				*/
			?>
		</div>
	<script src="<?=RUTA_URL?>boostrap/js/jquery.js"></script>
	<script src="<?=RUTA_URL?>boostrap/js/apertura_menus.js"></script>
	<script src="<?=RUTA_URL?>boostrap/js/bootstrap.min.js"></script>
</body>
</html>
