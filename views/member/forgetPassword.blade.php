<div class="container">
    <div class="inner-column row">
        <div class="col-lg-12">
            <form class="form-horizontal centerbox" action="{{ url('member/forgetpassword') }}" method="post">
                <h1><strong>Kesulitan mengakses akun Anda?</strong></h1>
                <p>Lupa kata sandi? Masukkan email login Anda di bawah ini. Kami akan mengirimkan pesan email beserta tautan untuk reset kata sandi Anda.</p>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 text-right">Email</label>
                    <div class="col-sm-7">
                        <input type="email" class="form-control" name="recoveryEmail" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-7 buttonbox">
                        <button class="btn btn-green" type="submit">Reset Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>