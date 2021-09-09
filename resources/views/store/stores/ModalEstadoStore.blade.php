<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-modalEstadoTienda-{{ Auth::user()->id }}">
<div class="modal-dialog">
    <div class="modal-content">
    <form action="{{ url('stores/StatusStore')  }}"  method="get">
        <div class="modal-header">   
            <h5 class="modal-title">Estado Actual:
                @if($NegocioEdit->status_business=='cerrado')
                <b style="color:red">Negocio Cerrado</b>
                @endif
                @if($NegocioEdit->status_business=='abierto')
                <b style="color:green">Negocio Abierto</b>
                @endif
            </h5>
            <button type="button" class="close text-danger" data-dismiss="modal" 
            aria-label="Close">
                <i class="fa fa-times"></i>
            </button>

			</div>
			<div class="modal-body">
                    <div class="form-group clearfix">
                      <div class="custom-control custom-checkbox">

                    @if($NegocioEdit->status_business=='abierto')
                          <h5>Desea <b style="color:red">Cerrar</b> el Negocio?</h5>
                          <input type="hidden" name="status_business" value="cerrado">
                    @endif

                    @if($NegocioEdit->status_business=='cerrado')
                    <h5>Desea <b style="color:green">Abrir</b> el Negocio?</h5>
                    <input type="hidden" name="status_business" value="abierto">
                    @endif
                     </div>
					</div>
			</div>
			<div class="modal-footer">
            <button type="button" class="btn  btn-outline-danger" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn  btn-outline-success">Confirmar</button>
            </div>
                    
        </form>
    		</div>
	</div>
</div>