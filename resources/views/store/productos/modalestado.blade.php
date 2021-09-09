<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-estado-{{ $pro->id }}">
<div class="modal-dialog">
<form action="{{ url('producto/estado')  }}"  method="post">
@csrf

		<div class="modal-content">
			<div class="modal-header">
	
				<button type="button"  class="Closee" data-dismiss="modal" 
				aria-label="Close">
                     <span class="btn btn-danger" aria-hidden="true">×</span>
                </button>
                <h5>
                @if($pro->estado==1)
                <h4 style="color:red"> Desea desactivar el producto {{ $pro->nombre }}</h4>
                <input type="hidden" name="id" value="{{  $pro->id }}">
                <input type="hidden" name="estado" value="0">


                  @else
                  <h4 style="color:gren"> Desea Activar el producto  {{ $pro->nombre }}</h4>
                  <input type="hidden" name="id" value="{{  $pro->id }}">
                  <input type="hidden" name="estado" value="1">


                  @endif
                 </h5>

               
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary">Confirmar</button>
			</div>
		</div>
	</div>
    </form>
</div>	
