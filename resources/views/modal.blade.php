<!-- Add Modal -->
<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ url('save') }}" method="POST" id="addForm">
                <div class="mb-3">
                    <label for="firstname">Primeiro nome</label>
                    <input type="text" name="firstname" class="form-control" placeholder="Digite o seu primeiro nome" required>
                </div>
                <div class="mb-3">
                    <label for="lastname">Último nome</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Digite o seu último nome" required>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Member</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ url('update') }}" method="POST" id="editForm">
                <input type="hidden" id="memid" name="id">
                <div class="mb-3">
                    <label for="firstname">Primeiro nome</label>
                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Digite o seu primeiro nome" required>
                </div>
                <div class="mb-3">
                    <label for="lastname">Último nome</label>
                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Digite o seu último nome" required>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Member</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h4 class="text-center">Are you sure you want to delete Member?</h4>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" id="deletemember">Delete</button>
            </div>
        </div>
      </div>
    </div>
</div>