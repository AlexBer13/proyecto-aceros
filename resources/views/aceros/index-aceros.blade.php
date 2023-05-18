<x-Plantilla :acero='$aceros'>


 <ul>
        @foreach ($aceros as $m)
            
           
<!----------------------- update Modal HTML ------------clear----------->


<div class="modal fade" id="Editar-{{$m->id}}"  >
 
	<div class="modal-dialog">
	<div class="modal-content">
			
        <form action=" {{route('aceros.update',$m ->id )}}" method="POST">
             @csrf <!-- para cuando se reenvia info del formulario no se duplique -->
             @method('patch')  <!-- para que se pueda enviar informacion -->

			<div class="modal-header">						
					<h4 class="modal-title">Editar</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

				<div class="modal-body">					
					<div class="form-group">
                    <label for="tipo_de_calibre">tipo de calibre</label><br>
                    <input type="text" name="tipo_de_calibre" id="tipo_de_calibre" value="{{$m->tipo_de_calibre}}" value="{{ old('tipo_de_calibre') ?? $m->tipo_de_calibre }}" required><br>
                    @error('tipo_calibre')
                    <h2>{{$message}}</h2>
                    @enderror
				</div>

				<div class="form-group">
                    <label for="costos">costo</label><br>
                    <input type="number" name="costos" id="costos" step="0.01" min="0"   value="{{$m->costos}}" value="{{ old('costos') ?? $m->costos }}" required><br>
                    @error('costos')
                    <h2>{{$message}}</h2>
                    @enderror
				</div>

				<div class="form-group">
					<label for="cantidad">cantidad</label><br>
                    <input type="number" name="cantidad" id="cantidad" min="0" value="{{$m->cantidad}}" value="{{ old('cantidad') ?? $m->cantidad }}" required ><br>
                    @error('cantidad')
                    <h2>{{$message}}</h2>
                    @enderror
				</div>
    </div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Enviar">
				</div>
			</form>
		</div>
	</div>
</div> 

<!----------------------- delete Modal HTML ---------------------->

<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
		<form action="{{ route('aceros.destroy',$m) }}" method="POST">
            
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