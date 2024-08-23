<!-- Modal -->
<div class="modal fade" id="lihatModal" tabindex="-1" role="dialog" aria-labelledby="employeeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="employeeModalLabel">Detail Karyawan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
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

            $('.view-details').click(function() {
                var nomor_induk = $(this).data('id');
                $.ajax({
                    url: '/api/karyawan/' + nomor_induk,
                    type: 'GET',
                    success: function(response) {
                        console.log(response);
                        var karyawan = response.data;
                        var modalBody = $('#lihatModal .modal-body');
                        modalBody.empty();
                        modalBody.append('<p><strong>Nomor Induk:</strong> ' + karyawan
                            .nomor_induk + '</p>');
                        modalBody.append('<p><strong>Nama:</strong> ' + karyawan.nama + '</p>');
                        modalBody.append('<p><strong>Alamat:</strong> ' + karyawan.alamat +
                            '</p>');
                        modalBody.append('<p><strong>Tanggal Lahir:</strong> ' + karyawan
                            .tanggal_lahir + '</p>');
                        modalBody.append('<p><strong>Tanggal Bergabung:</strong> ' + karyawan
                            .tanggal_bergabung + '</p>');
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>
@endsection
