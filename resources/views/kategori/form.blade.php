
<div class="modal fade" id="modal-form" tabindex="-1" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="post" class="form-horizontal">
         @csrf
         @method('post')
         <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                  <label for="nama_kategori" class="col-md-2 offset-md-1 control-label">Kategori</label>
                  <div class="col-md-9">
                     <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required autofocus>
                     <span class="help-blok with-errors"></span>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
               <button class="btn btn-xs btn-flat btn-primary">Simpan</button>
               <button type="button" class="btn btn-xs btn-flat btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </div>
        </form>
    </div>
</div>
