<?php
    include_once('template/head.php');
?>
<body>
    <div class="row">
        <div class="container">
        <h2><i class="fa fa-plus"></i> Tambah Data</h2>
        <hr>
        <form id="inputmahasiswa" class="form-horizontal" method="post" action="simpan.php">

            <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama" required>
                </div>
            </div>

            <div class="form-group">
                <label for="username" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukan username" required>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-4">
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukan email" required>
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-4">
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukan password" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                <button type="submit" class="btn btn-info">Tambah</button>
                </div>
            </div>
            </form>
        </div>
    </div>

    <footer>
        <!-- <p class="text-center">Copyright &copy; 2018 by Candra Septia Cahya</p> -->
    </footer>
</body>
<?php
    include_once('template/script.php');
?>
<script>
    $(document).ready(function(){
        $("#nama").keyup(function(){
            $pattern = "[^a-zA-Z ]";
            if(preg_match($pattern,$string)) {
                alert("gagal");
            } else {
                alert("berhasil");
            }
        });

        $.validator.addMethod("alpha", function(value, element) {
            return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
        });

        $("#inputmahasiswa").validate({
            rules: {
                username: "required",
                nama: {
                    required: true,
                    alpha: true
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 6
                }
            },
            messages: {
                username: "Masukan username",
                nama: {
                    required: "Masukan nama",
                    alpha: "*haya masukan huruf dan spasi"
                },
                email: "*masukan email secara benar",
                password: {
                    required: "Masukan password",
                    minlength: "*password minimal 6 karakter!"
                }
            },

            submitHandler: function(form) {
                form.submit();
            }
        });
    });
    
</script>
</html>

