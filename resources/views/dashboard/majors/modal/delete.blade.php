<!-- Delete Confirmation Modal for Mata Pelajaran -->
<div class="modal fade" id="delete_mapel_modal" tabindex="-1" role="dialog" aria-labelledby="deleteMapelLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger white">
                <h5 class="modal-title" id="deleteMapelLabel">Konfirmasi Penghapusan Jurusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus Jurusan ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <form id="delete_mapel_form" action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus Jurusan</button>
                </form>
            </div>
        </div>
    </div>
</div>

