<div class="container">
    <div class="inner-column row">
        <div class="col-lg-12">
            {{ Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-horizontal centerbox')) }}
                <h1><strong>Konfirmasi Order</strong></h1>
                <p>Silakan masukan kode order anda.</p>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 text-right">Kode Order</label>
                    <div class="col-sm-7">
                        <input class="form-control" type="text" name="kodeorder" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-7 buttonbox">
                        <button class="btn btn-green capitalize" type="submit">Cari</button>
                    </div>
                </div>
            {{ Form::close() }} 
            <br>
        </div>
    </div>
</div>