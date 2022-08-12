<div class=" container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-4">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                </div>

                                <?= $this->session->flashdata('message') ?>

                                <form class="user" method="POST" action="<?= base_url('auth') ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h5 style="color:aliceblue">Visi : </h5>
            <h5 style="color:aliceblue">Menjadi pemasok global produk spare parts untuk industri otomotif sebagai basis produksi Aisin Group</h5>
            <br>
            <h5 style="color:aliceblue">Misi :</h5>
            <h5 style="color:aliceblue">1. Konsisten dan terus melakukan peningkatan dalam proses produksi untuk menjadi perusahaan manufaktur terbaik dengan operasi excellece</h5>
            <h5 style="color:aliceblue">2. Simbiosis dengan masyarakat dan alam</h5>
            <h5 style="color:aliceblue">3. Menghormati kreativitas dan inisiatif individu</h5>
        </div>

    </div>

</div>