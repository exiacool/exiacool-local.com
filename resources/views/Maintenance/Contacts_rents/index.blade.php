@extends ('layouts.master')
@section ('contenido')


	<div class="col-lg-8 col-md-8 col-xs-12">

		<h3>Lista de Contactos
			 <a href="Contacts_rents/create">
			 	<button> Nuevo Contacto</button>
			 </a>
		</h3>
		@include('Maintenance.Contacts_rents.search')

	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-ms-12 col-xs-12">
			<div class="table-responsive" >

				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Id</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Telefono</th>
						<th>Detalle</th>
						<th>Opcion</th>
					</thead>
					@foreach($contactos as $con )
						<tr>
							<td>{{ $con->id_contacto }}</td>
							<td>{{ $con->nombre }}</td>
							<td>{{ $con->apellido }}</td>
							<td>{{ $con->telefono }}</td>
							<td>{{ $con->detalle }}</td>
							<td>
								<a href=""><button class="btn btn-info">Editar</button> </a>
								<a href=""><button class="btn btn-info">Eliminar</button> </a>
								

							</td>
						</tr>
						@endforeach

				</table>
				
			</div>

			{{ $contactos-> render() }}
			

		</div>

		

	</div>

@endsection