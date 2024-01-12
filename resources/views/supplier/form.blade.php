
<div class="modal fade" id="modal-form" tabindex="-1" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="post" class="form-horizontal">
         @csrf
         @method('post')
         <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Tambah Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                  <label for="nama" class="col-md-2 offset-md-1 control-label">Nama</label>
                  <div class="col-md-9">
                     <input type="text" name="nama" id="nama" class="form-control" required autofocus>
                     <span class="help-blok with-errors"></span>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="telpon" class="col-md-2 offset-md-1 control-label">Telpon</label>
                  <div class="col-md-9">
                     <input type="text" name="telpon" id="telpon" class="form-control" required >
                     <span class="help-blok with-errors"></span>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="alamat" class="col-md-2 offset-md-1 control-label">Alamat</label>
                  <div class="col-md-9">
                     <textarea name="alamat" id="alamat" rows="3" class="form-control" required></textarea>
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
