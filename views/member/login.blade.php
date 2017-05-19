<div class="container">
    <div class="inner-column row">
        <div class="col-lg-5 col-md-5 col-xs-12">
            <h1><strong>Login</strong></h1>
            <p>Silakan Login untuk menikmati kemudahan dalam bertransaksi.</p>
            <br>
            <form class="form-horizontal" action="{{ url('member/login') }}" method="post">
                <div class="form-group">
                    <label class="col-sm-3">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" value="{{ Input::old('email') }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <small>
                            <strong><a href="{{ url('member/forget-password') }}">Lupa Password?</a></strong>
                        </small>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn-green">Login</button>
                    </div>
                </div>
            </form>
            <br>
        </div>
        <div class="col-lg-2 col-md-2 hidden-xs hidden-sm">
            <div class="line1"></div>
            <p class="text-center" style="margin-top: 20px;margin-bottom: 20px;">atau</p>
            <div class="line1"></div>
        </div>
        <div class="col-lg-5 col-md-5 col-xs-12">
            <div class="newakun">
                <h1>Belum punya akun?</h1>
                <a href="{{ url('member/create') }}" class="btn-send">Daftar</a>
            </div>
        </div>
    </div>
</div>