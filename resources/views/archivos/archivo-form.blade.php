<x-Plantilla :acero='$aceros'>


 <ul>
        @foreach ($archivos as $archivo)
            
           
<!----------------------- update Modal HTML ---------------------->


<div class="modal fade" id="Editar-{{$m->id}}"  >
 

	<div class="modal-dialog">
	<div class="modal-content">
			
        <form action=" {{route('archivo.store')}}" method="POST" enctype="multipart/form-data">
             @csrf <!-- para cuando se reenvia info del formulario no se duplique -->
             @method('patch')  <!-- para que se pueda enviar informacion -->

			<div class="modal-header">						
					<h4 class="modal-title">Editar</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

				<div class="modal-body">					
					<div class="form-group">
                    <label for="nombre_original">Nombre del archivo</label><br>
                    <input type="text" name="nombre_original" id="nombre_original" value="{{$archivo->nombre_original}}" value="{{ old('nombre_original') ?? $archivo->nombre_original }}" required><br>
                    @error('nombre_original')
                    <h2>{{$message}}</h2>
                    @enderror
				</div>

                
				<div class="form-group">
					<label for="cantidad">Acciones</label><br>
                    <input type="number" name="cantidad" id="cantidad" min="0" value="{{$m->cantidad}}" value="{{ old('cantidad') ?? $m->cantidad }}" required ><br>
                    @error('')
                    <h2>{{$message}}</h2>
                    @enderror
				</div>
    </div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Enviar">
				</div>

                <td class="px-4 py-3">
                    <div class="flex items-center text-sm">
                         <a href="#">Descargar</a>
                    </div>
                </td>
			</form>
		</div>
	</div>
</div> 

<!----------------------- delete Modal HTML ---------------------->

<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form action="{{ route('archivo.destroy',$archivo) }}" method="POST">
            
		@csrf
    	@method('DELETE')
				<div class="modal-header">						
					<h4 class="modal-title">Eliminar</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>¿Esta seguro de elimiarlo?</p>
					<p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
        @endforeach 
        </ul>

</x-Plantilla>