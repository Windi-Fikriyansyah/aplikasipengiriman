<!-- Footer -->
</div>
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url(); ?>assets/js/demo/chart-area-demo.js"></script>
<script src="<?= base_url(); ?>assets/js/demo/chart-pie-demo.js"></script>
<!-- data tabel -->
<script src="<?= base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url(); ?>assets/js/demo/datatables-demo.js"></script>

<script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url(); ?>assets/js/myscript.js"></script>
<script src="<?= base_url(); ?>assets/vendor/select2/js/select2.full.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        var i = 1;
        $('#add').click(function() {
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '"><tr> <td><input type="text" name="nama_paket" id="nama_paket" class="form-control" placeholder="Jenis Barang"></td><td><input type="text" name="waktu" id="waktu" class="form-control" placeholder="Berat"></td><td><input type="text" id="brt2" name="berat" onkeyup="byr2()" min="1" class="form-control" placeholder="Berat Cucian"></td> <td><button type="button" name ="remove" id = "' + i + '" class ="btn btn-danger btn_remove"> X </button></td> </tr>');
        });
        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
    });
</script>
<script>
    function byr() {
        var berat = parseInt(document.getElementById("berat").value);
        var harga = parseInt(document.getElementById("hrg").value);
        var hasil = berat * harga;
        if (!isNaN(hasil)) {
            document.getElementById("ttl").value = hasil;
        } else {
            document.getElementById("ttl").value = 0;
        }
    }

    function byr2() {
        var berat = parseInt(document.getElementById("berat").value);
        var harga = parseInt(document.getElementById("hrg").value);
        var total = parseInt(document.getElementById("ttl").value);
        var hasil = berat * harga;
        var hasil2 = hasil + total;
        if (!isNaN(hasil)) {
            document.getElementById("ttl").value = hasil;
        } else {
            document.getElementById("ttl").value = 0;
        }
    }

    function kendaraan() {
        // var tahun = $('#id_siswa option:selected').data('tahun_angkatan');
        var nml = $('#id_kendaraan option:selected').data('nama_supir');
        // if (!isNaN(tahun)) {
        //     document.getElementById('id_tahun').value = tahun;
        // } else {
        //     document.getElementById('id_tahun').value = 0;
        // }

        if (!isNaN(nml)) {
            document.getElementById('id_supir').value = nml;
        } else {
            document.getElementById('id_supir').value = 0;
        }
    }

    $(function() {
        $('.select2').select2({
            theme: 'bootstrap4'
        })
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    });
</script>



</body>

</html>