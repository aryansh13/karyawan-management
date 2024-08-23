<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Karyawan</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editEmployeeForm">
                    <div class="mb-3">
                        <label for="edit_nomor_induk" class="form-label">Nomor Induk:</label>
                        <input type="text" class="form-control" id="edit_nomor_induk">
                    </div>
                    <div class="mb-3">
                        <label for="edit_nama" class="form-label">Nama:</label>
                        <input type="text" class="form-control" id="edit_nama">
                    </div>
                    <div class="mb-3">
                        <label for="edit_alamat" class="form-label">Alamat:</label>
                        <input type="text" class="form-control" id="edit_alamat">
                    </div>
                    <div class="mb-3">
                        <label for="edit_tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                        <input type="date" class="form-control" id="edit_tanggal_lahir">
                    </div>
                    <div class="mb-3">
                        <label for="edit_tanggal_bergabung" class="form-label">Tanggal Bergabung:</label>
                        <input type="date" class="form-control" id="edit_tanggal_bergabung">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="saveChanges">Simpan Perubahan</button>
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

        // Function to fetch employee data
        function fetchEmployeeData(nomor_induk) {
            return $.ajax({
                url: '/api/karyawan/' + nomor_induk,
                type: 'GET',
                dataType: 'json'
            });
        }

        // Function to save employee changes
        function saveEmployeeChanges(nomor_induk, data) {
            return $.ajax({
                url: '/api/karyawan/' + nomor_induk,
                type: 'PUT',
                data: data,
                dataType: 'json'
            });
        }

        // Event listener for edit button
        $(document).on('click', '.edit-employee', function() {
            var nomor_induk = $(this).data('id');
            fetchEmployeeData(nomor_induk)
                .done(function(response) {
                    if (response.data) {
                        var karyawan = response.data;
                        $('#edit_nomor_induk').val(karyawan.nomor_induk);
                        $('#edit_nama').val(karyawan.nama);
                        $('#edit_alamat').val(karyawan.alamat);
                        $('#edit_tanggal_lahir').val(karyawan.tanggal_lahir);
                        $('#edit_tanggal_bergabung').val(karyawan.tanggal_bergabung);
                        $('#editModal').modal('show');
                    } else {
                        alert("Data karyawan tidak ditemukan.");
                    }
                })
                .fail(function(xhr, status, error) {
                    console.error("Error fetching employee data:", status, error);
                    alert("Gagal mengambil data karyawan. Silakan coba lagi.");
                });
        });

        // Event listener for save changes button
        $('#saveChanges').click(function() {
            var nomor_induk = $('#edit_nomor_induk').val();
            var data = {
                nama: $('#edit_nama').val(),
                alamat: $('#edit_alamat').val(),
                tanggal_lahir: $('#edit_tanggal_lahir').val(),
                tanggal_bergabung: $('#edit_tanggal_bergabung').val()
            };

            saveEmployeeChanges(nomor_induk, data)
                .done(function(response) {
                    console.log(response);
                    $('#editModal').modal('hide');
                    location.reload();
                })
                .fail(function(xhr, status, error) {
                    console.error("Error saving employee data:", status, error);
                    alert('Terjadi kesalahan saat menyimpan perubahan.');
                });
        });
    });
</script>
@endsection

