<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="employeeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="employeeModalLabel">Tambah Karyawan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addEmployeeForm">
                    <div class="form-group">
                        <label for="nomor_induk">Nomor Induk</label>
                        <input type="text" class="form-control" id="nomor_induk" name="nomor_induk" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_bergabung">Tanggal Bergabung</label>
                        <input type="date" class="form-control" id="tanggal_bergabung" name="tanggal_bergabung" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="saveEmployee">Simpan</button>
            </div>
        </div>
    </div>
</div>


@section('scripts')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#saveEmployee').click(function() {
                var formData = {
                    nomor_induk: $('#nomor_induk').val(),
                    nama: $('#nama').val(),
                    alamat: $('#alamat').val(),
                    tanggal_lahir: $('#tanggal_lahir').val(),
                    tanggal_bergabung: $('#tanggal_bergabung').val()
                };

                $.ajax({
                    url: '/api/karyawan',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        // Hide the modal
                        $('#addModal').modal('hide');

                        // Use setTimeout to ensure the modal is fully hidden before showing SweetAlert
                        setTimeout(function() {
                            Swal.fire({
                                title: 'Berhasil!',
                                text: 'xhr.responseText',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Redirect to /dashboard after clicking OK
                                    window.location.href = '/dashboard';
                                }
                            });
                        }, 500); // Adjust the delay if necessary
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>
@endsection


