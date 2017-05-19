<div class="container">
    <div class="inner-column row">
        <div class="col-lg-12">
            <form class="form-horizontal centerbox" action="{{ url('member/recovery/'.$id.'/'.$code) }}" method="post">
                <h1><strong>Masukan Password Baru Anda</strong></h1>
                <br>
                <div class="form-group">
                    <label class="col-sm-3">Password Baru</label>
                    <div class="col-sm-7">
                        <input type="password" class="form-control" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3">Konfirmasi password</label>
                    <div class="col-sm-7">
                        <input type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9 buttonbox">
                        <button type="submit" class="btn btn-green">Update</button>
                    </div>
                </div>
            </form>
            <br>
        </div>
    </div>
</div>