<div class="container">
    <div class="inner-column row">
        <div class="col-xs-12 col-sm-8 col-lg-9">
            <div class="breadcrumb">
                <p><strong>{{ $data->judul }}</strong></p>
            </div>
            <div class="row">
                <article class="col-xs-12 col-md-12 col-lg-12">
                    {{ $data->isi }}
                </article>
            </div>
        </div>
        <div id="sidebar" class="col-xs-12 col-sm-4 col-lg-3">
            @if(count(list_blog()) > 0)
            <div id="latest-news" class="block">
                <div class="title"><h2>Artikel Terbaru</h2></div>
                <ul class="block-content">
                    @foreach(list_blog(2) as $blogs)
                    <li>
                        <h5 class="title-news">{{ $blogs->judul }}</h5>
                        <p>{{ short_description($blogs->isi, 150) }}<a class="read-more" href="{{ blog_url($blogs) }}">Selengkapnya</a></p>
                        <span class="date-post">{{ date("F d, Y", strtotime($blogs->created_at)) }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(count(best_seller()) > 0)
            <div id="best-seller" class="block">
                <div class="title"><h2>Produk <strong>Terbaru</strong></h2></div>
                <ul class="block-content">
                    @foreach(best_seller() as $bestproduk)
                    <li>
                        <a href="{{ product_url($bestproduk) }}">
                            <div class="img-block">
                                {{ HTML::image(product_image_url($bestproduk->gambar1,'thumb'), $bestproduk->nama, array('class'=>'img-responsive imgbest')) }}
                            </div>
                            <p class="product-name">{{ short_description($bestproduk->nama,15) }}</p>
                            @if(!empty($bestproduk->hargaCoret))
                            <p class="author"><del>{{ price($bestproduk->hargaCoret) }}</del></p>
                            @endif
                            <p class="price">{{ price($bestproduk->hargaJual) }}</p> 
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="btn-more"><a href="{{ url('produk') }}">Lihat Semua</a></div>
            </div>
            @endif
            @if(count(vertical_banner()) > 0)
            <div id="advertising" class="block">
                @foreach(vertical_banner() as $banners)
                <div class="img-block">
                    <a href="{{ url($banners->url) }}">
                        {{ HTML::image(banner_image_url($banners->gambar),'Info Promo',array('width'=>'272','height'=>'391','class'=>'img-responsive')) }}
                    </a>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>