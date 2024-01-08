@extends('layouts.master')

@section('title')
    Kategori
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Kategori</li>
@endsection

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <button onclick="addForm('{{ route('kategori.store') }}')" class="btn btn-dark btn-xs btn-flat "><i
                                class="fa fa-plus-circle"> Tambah</i></button>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <th width="5%">No</th>
                                <th>Kategori</th>
                                <th width="15%"><i class="fa fa-cog"></i></th>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @includeIf('kategori.form')
@endsection

@push('scripts')
    <script>
        let table;
        $(function() {
            table = $('.table').DataTable({
                rocessing: true,
                autoWidth: false,
                ajax: {
                   url: '{{ route('kategori.data') }}',
                },
                columns: [
                    {data: 'DT_RowIndex', searchable: false, sortable: false},
                    {data: 'nama_kategori'},
                    {data: 'aksi', searchable: false, sortable: false},
                ]
            });

            $('#modal-form').validator().on('submit', function(e) {
                if (!e.preventDefault()) {
                    $.post($('#modal-form form').attr('action'), $('#modal-form form').serialize())
                        .done((response) => {
                            $('#modal-form').modal('hide');
                            table.ajax.reload();
                        })
                        .fail((errors) => {
                            alert('tidak dapat menyimpan data');
                            return;
                        });
                }
            })
        });

        function addForm(url) {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Tambah Kategori');

            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('post');
            $('#modal-form [name=nama_kategori]').focus();
        }

        function editForm(url) {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Ubah Kategori');

            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('put');
            $('#modal-form [name=nama_kategori]').focus();

            $.get(url)
                .done((response) => {
                    $('#modal-form [name=nama_kategori]').val(response.nama_kategori);
                })
                .fail ((errors) => {
                    alert('tidak dapat menampilkan data');
                    return;
                })
        }

        function deleteData(url){
            if(confirm('yakin ingin menghapus data? '))
            $.post(url, {
                '_token': $('[name=csrf_token]').attr('content'),
                '_method': 'delete'
            })
                .done((response) => {
                    table.ajax.reload();
                })
                .fail ((errors) => {
                    alert('tidak dapat menghapus data');
                    return;
                });
        }
    </script>
@endpush
