<br><br>
<h3 class="text-center">Mata Lensa Registrasi</h3>
<hr style="width: 25%">
<div class="container">
    <div class="col-md-2">
        <p></p>
    </div>
    <div class="col-md-8">
        <div class="box">
            <?php echo $msg ?>
            <div class="card">
                <form method="post" action="<?= site_url('user/insert_user') ?>">
                    <div class="input-container">
                        <input name="nama" type="text" id="#{label}" required="required" />
                        <label for="#{label}">Nama</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input name="username" type="text" id="#{label}" required="required" />
                        <label for="#{label}">Username</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input name="pass" type="password" id="#{label}" required="required" />
                        <label for="#{label}">Password</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input name="email" type="text" id="#{label}" required="required" />
                        <label for="#{label}">Email</label>
                        <div class="bar"></div>
                    </div>
                    <div style="margin-left: 60px">
                        <h5> Jenis Kelamin</h5>
                        <input required="required" checked="true" type="radio" name="jenis" value="Laki - laki"> Laki-laki</input>
                        <input type="radio" name="jenis" value="Perempuan"> Perempuan</input>   
                    </div>
                    <br>
                    <div class="input-container">
                        <input name="telp" type="text" id="#{label}" required="required" />
                        <label for="#{label}">No telp</label>
                        <div class="bar"></div>
                    </div>
                    <input type="submit" value="Registrasi" class="button"><br>
                </form>
            </div>
        </div>
    </div>
</div>
<br><br><br>