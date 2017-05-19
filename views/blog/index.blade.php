<div class="container">
    <div class="breadcrumb">
        <p><strong>List Blog</strong></p>
    </div>
    <div class="inner-column row">
        <div class="col-xs-12 col-sm-8 col-lg-9">
            @if(count(list_blog(null,@$blog_category)) > 0)
            <div class="row">
                @foreach(list_blog(null,@$blog_category) as $blog)
                <article class="col-lg-12 newarticle">
                    <h1 class="articletitle"><strong><a href="{{ blog_url($blog) }}">{{ $blog->judul }}</a></strong></h1>
                    <p class="articletag">
                        <small><i class="fa fa-calendar"></i> {{ waktuTgl($blog->created_at) }}</small>&nbsp;&nbsp;
                        @if(!empty($blog->kategori))
                        <span class="date-post"><i class="fa fa-tags"></i> <a href="{{ blog_category_url(@$blog->kategori) }}">{{ @$blog->kategori->nama }}</a></span>
                        @endif
                    </p>
                    <p>
                        {{ shortDescription($blog->isi,300) }}<br>
                        <a href="{{ blog_url($blog) }}" class="theme">Baca Selengkapnya →</a>
                    </p>
                    <hr>
                </article>
                @endforeach
            </div>
            <div class="pagination">
                {{ list_blog(null,@$blog_category)->links() }}
            </div>
            @else
            <article class="search-result">
                <p>Artikel tidak ditemukan.</p>
            </article>
            @endif
        </div>
        <div id="sidebar" class="col-xs-12 col-sm-4 col-lg-3">
            <div id="latest-news" class="block">
                <div class="title"><h2>Kategori</h2></div>
                <ul class="block-content">
                    @foreach(list_blog_category() as $kat)
                    <span class="underline"><a href="{{ blog_category_url($kat) }}">{{ $kat->nama }}</a></span>&nbsp;&nbsp;
                    @endforeach 
                </ul>
            </div>
            <div id="adv-sidebar" class="block">
                @foreach(vertical_banner() as $banners)
                <a href="{{ url($banners->url) }}">
                    {{ HTML::image(banner_image_url($banners->gambar),'Info Promo',array('width'=>'270','height'=>'388','class'=>'img-responsive')) }}
                </a>
                @endforeach
            </div>
            @if(count(best_seller()) > 0)
            <div id="best-seller" class="block">
                <div class="title"><h2>Produk <strong>Terlaris</strong></h2></div>
                <ul class="block-content">
                    @foreach(best_seller(5) as $bestproduk )
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
        </div>
    </div>
</div>