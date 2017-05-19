    <div class="container">
        <div class="inner-column row">
            <div id="sidebar" class="col-xs-12 col-sm-4 col-lg-3">
                <div id="categories" class="block sidey">
                    <div class="title"><h2>Kategori</h2></div>
                    <ul class="block-content nav">
                        @foreach(list_category() as $side_menu)
                            @if($side_menu->parent == '0')
                            <li>
                                <a href="{{ category_url($side_menu) }}">{{ $side_menu->nama }}</a>
                                @if($side_menu->anak->count() != 0)
                                <ul class="sidekategori">
                                    @foreach($side_menu->anak as $submenu)
                                    @if($submenu->parent == $side_menu->id)
                                    <li>
                                        <a href="{{ category_url($submenu) }}" class="transparent">{{ $submenu->nama }}</a>
                                        @if($submenu->anak->count() != 0)
                                        <ul class="sidekategori">
                                            @foreach($submenu->anak as $submenu2)
                                            @if($submenu2->parent == $submenu->id)
                                            <li>
                                                <a href="{{ category_url($submenu2) }}">{{ $submenu2->nama }}</a>
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div id="adv-sidebar" class="block">
                    @foreach(vertical_banner() as $banners)
                    <a href="{{ URL::to($banners->url) }}">
                        {{ HTML::image(banner_image_url($banners->gambar),'Info Promo',array('width'=>'270','height'=>'388','class'=>'img-responsive')) }}
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-lg-9">
                @if(best_seller()->count() > 0)
                <div id="trending-home" class="product_home">
                    <div class="block-title">
                        <h2 class="fl">Produk <strong>Terlaris</strong></h2>
                        <a class="view-shop fr" href="{{ url('produk') }}"><span>Lihat Produk</span></a>
                        <div class="clr"></div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            <ul class="grid">
                                @foreach(best_seller(4) as $best)
                                <li class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                    <div class="prod-container">
                                        <div class="image-container">
                                            <a href="{{ product_url($best) }}">
                                                <img class="img-responsive" src="{{ product_image_url($best->gambar1,'medium') }}" alt="{{ $best->nama }}" />
                                            </a>
                                        </div>
                                        <h5 class="product-name">{{ short_description($best->nama, 25) }}</h5>
                                        <span class="price">{{ price($best->hargaJual) }}</span>
                                        <a href="{{ product_url($best) }}" class="buy-btn">Detail</a>
                                     </div>
                                </li>
                                @endforeach
                            </ul>
                            <div class="clr"></div>
                        </div>
                    </div>
                </div>
                @endif
                <div id="best-seller-home" class="product_home">
                    <div class="block-title">
                        <h2 class="fl"><strong>Produk</strong> Kami</h2>
                        <a class="view-shop fr" href="{{ url('produk') }}"><span>Lihat Produk</span></a>
                        <div class="clr"></div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            <ul class="grid">
                                @foreach(home_product() as $products)
                                <li class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                    <div class="prod-container">
                                        <div class="image-container">
                                            <a href="{{ product_url($products) }}">
                                                <img class="img-responsive" src="{{ url(product_image_url($products->gambar1,'medium')) }}" alt="{{ $products->nama }}" />
                                            </a>
                                            @if(is_outstok($products))
                                            <div class="icon-info icon-sold">Sold</div>
                                            @elseif(is_terlaris($products))
                                            <div class="icon-info icon-sale">Hot Item</div>
                                            @elseif(is_produkbaru($products))
                                            <div class="icon-info icon-new">New</div>
                                            @endif
                                        </div>
                                        <h5 class="product-name">{{ short_description($products->nama,25) }}</h5>
                                        <span class="price">{{ price($products->hargaJual) }}</span>
                                        <a href="{{ product_url($products) }}" class="buy-btn">Detail</a>
                                     </div>
                                </li>
                                @endforeach
                            </ul>
                            <div class="clr"></div>
                        </div>
                    </div>
                </div>
                @if(new_product()->count() > 0)
                <div id="new-arrivals" class="product_home">
                    <div class="block-title">
                        <h2 class="fl">Produk <strong>Terbaru</strong></h2>
                        <a class="view-shop fr" href="{{ url('produk') }}"><span>Lihat Produk</span></a>
                        <div class="clr"></div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            <ul class="grid">
                                @foreach(new_product(8) as $new)
                                <li class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                    <div class="prod-container">
                                        <div class="image-container">
                                            <a href="{{ product_url($new) }}">
                                                <img class="img-responsive" src="{{ product_image_url($new->gambar1,'medium') }}" alt="{{ $new->nama }}" />
                                            </a>
                                        </div>
                                        <h5 class="product-name">{{ short_description($new->nama, 25) }}</h5>
                                        <span class="price">{{ price($new->hargaJual) }}</span>
                                        <a href="{{ product_url($new) }}" class="buy-btn">Detail</a>
                                     </div>
                                </li>
                                @endforeach
                            </ul>
                            <div class="clr"></div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>