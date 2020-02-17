<!-- Modal -->
<div class="modal fade" id="modalCalendar" tabindex="-1" role="dialog" aria-labelledby="titleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="titleModal">Título do modal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div id="message"></div>
            <form id="formEvent">
                <div class="form-group">
                  <label for="title" class="col-form-label">Título:</label>
                  <input type="text" name="title" class="form-control" id="title">
                  <input type="hidden" name="id" id="id">
                </div>
                <div class="row">
                    <div class="form-group col-5">
                        <label for="start" class="col-form-label">Data/hora inicial:</label>
                        <input type="text" name="start" class="form-control date-time" id="start">
                    </div>
                    <div class="form-group col-5">
                        <label for="end" class="col-form-label">Data/hora final:</label>
                        <input type="text" name="end" class="form-control date-time" id="end">
                    </div>
                    <div class="form-group col-2">
                        <label for="color" class="col-form-label">Cor:</label>
                        <input type="color" name="color" class="form-control" id="color">
                    </div>
                </div>

                <div class="form-group">
                  <label for="description" class="col-form-label">Descrição:</label>
                  <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-danger deleteEvent">Excluir</button>
          <button type="button" class="btn btn-primary saveEvent">Salvar</button>
        </div>
      </div>
    </div>
  </div>
