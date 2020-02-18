<!-- Modal -->
<div class="modal fade" id="modalFastEvent" tabindex="-1" role="dialog" aria-labelledby="titleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="titleModal">Título do modal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="message"></div>
            <form id="formFastEvent">
                <div class="form-group">
                  <label for="title" class="col-form-label">Título:</label>
                  <input type="text" name="title" class="form-control">
                  <input type="hidden" name="id">
                </div>
                <div class="row">
                    <div class="form-group col-5">
                        <label for="start" class="col-form-label">Hora inicial:</label>
                        <input type="text" name="start" class="form-control time">
                    </div>
                    <div class="form-group col-5">
                        <label for="end" class="col-form-label">Hora final:</label>
                        <input type="text" name="end" class="form-control time">
                    </div>
                    <div class="form-group col-2">
                        <label for="color" class="col-form-label">Cor:</label>
                        <input type="color" name="color" class="form-control">
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-danger deleteFastEvent">Excluir</button>
          <button type="button" class="btn btn-primary saveFastEvent">Salvar</button>
        </div>
      </div>
    </div>
  </div>
