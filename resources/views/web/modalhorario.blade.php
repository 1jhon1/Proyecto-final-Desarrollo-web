<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-horario-{{ $store->id }}">
<div class="modal-dialog">
    <div class="modal-content">
    <form action="{{ url('stores/StatusStore')  }}"  method="get">
        <div class="modal-header">   
            <h5 class="modal-title">Horario de atencion  {{ $store->type_business }} {{  $store->name_store}}
                
            </h5>
            <button type="button" class="close text-danger" data-dismiss="modal" 
            aria-label="Close">
                <i class="fa fa-times"></i>
            </button>

			</div>
			<div class="modal-body">
                    <div class="form-group clearfix">
                      <div class="custom-control custom-checkbox">
                        <p>Lunes : {{ $store->lunes }} hasta {{ $store->lunes2 }} horas<p>
                        <p>Martes : {{ $store->martes }} hasta {{ $store->martes2 }} horas<p>
                        <p>Miercoles : {{ $store->miercoles }} hasta {{ $store->miercoles2 }} horas<p>
                        <p>Jueves : {{ $store->jueves }} hasta {{ $store->jueves2 }} horas<p>
                        <p>Viernes : {{ $store->viernes }} hasta {{ $store->viernes }} horas<p>
                        <p>Sabado : {{ $store->sabado }} hasta {{ $store->sabado2 }} horas<p>
                        <p>Domingo : {{ $store->domingo }} hasta {{ $store->domingo2 }} horas<p>
                     </div>
					</div>
			</div>
			<div class="modal-footer">
            <button type="button" class="btn  btn-outline-danger" data-dismiss="modal">Cerrar</button>
            </div>
                    
        </form>
    		</div>
	</div>
</div>