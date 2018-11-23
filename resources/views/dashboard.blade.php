@extends('layouts.header')
	@section('menu')
		@parent
	@endsection
	<div class="contenedor">
		<div class="menu col-md-12 col-xs-12">
			<table class="col-md-12 col-xs-12">
				<td width="20%"><a href="login.php" class="btn btn-info">Ingresar al Sistema</a></td>
				<td width="60%"></td>
				
			</table>
		</div>
		<div class="col-md-12 col-xs-12">
			<div class="col-md-11 center-block center-block-f">	
				<div class="input-group">
					<input type="text" name="" class="form-control" placeholder="Buscar pacientes por enfermedad o requisito de insumo">
					<span class="input-group-btn">
						<button class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Buscar</button>
					</span>
				</div>
				<div class="multiple-check lista-media">
					<div class="media">
						<a href="#" class="pull-left">
							<img src="">
						</a>
					<div class="media">
						<a href="#" class="pull-left">
							<img src="">
						</a>

					</div>						
				</div>
			</div>		
		</div>
	</div>
</body>
</html>