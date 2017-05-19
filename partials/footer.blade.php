            <section id="btm-info">
                <div class="container">
                    <div class="row">
                        {{ Theme::partial('subscribe') }} 
                        
                        <div id="testi-info" class="col-xs-12 col-sm-6">
                            <div class="split-green">&nbsp;</div>
                            <h2>Testimonial</h2>
                            <div id="testimoni" class="flexslider">
                                <ul class="slides">
                                    @foreach(list_testimonial() as $testimonial)
                                    <li>
                                        <div class="test-item">
                                            <p>{{$testimonial->isi}}</p>
                                            <i>&nbsp;</i>
                                        </div>
                                        <span class="ava">{{$testimonial->nama}}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer>
                <div class="top-footer">
                    <div class="container">
                        <div class="row">
                            <div id="about-foot" class="col-xs-12 col-sm-3 col-lg-4">
                                <h4 class="title">Tentang Kami</h4>
                                <div class="block-content">
                                    <p>{{short_description(about_us()->isi,400)}}</p>
                                </div>
                            </div>

                            @foreach(all_menu() as $key=>$menu)
                                @if($key == '1' || $key == '2')
                                <div id="links-foot" class="col-xs-12 col-sm-3 col-lg-2">
                                    <h4 class="title">{{$menu->nama}}</h4>
                                    <div class="block-content">
                                        <ul>
                                        @foreach($menu->link as $link_menu)
                                            @if($menu->id == $link_menu->tautanId)
                                            <li>
                                                <a href="{{menu_url($link_menu)}}">{{$link_menu->nama}}</a>
                                            </li>
                                            @endif
                                        @endforeach
                                        </ul>
                                    </div>
                                </div>
                                @endif
                            @endforeach  

                            <div id="contact-foot" class="col-xs-12 col-sm-3 col-lg-3">
                                <h4 class="title">Hubungi Kami</h4>
                                <div class="block-content">
                                    <p><strong>{{ucwords($kontak->nama)}}</strong></p>
                                    <p>{{$kontak->alamat}}</p><br>
                                    @if(!empty($kontak->telepon))
                                    <p><strong>Telpon :</strong> {{$kontak->telepon}}<br>
                                    @endif
                                    @if(!empty($kontak->hp))
                                    <strong>SMS :</strong> {{$kontak->hp}}<br>
                                    @endif
                                    @if(!empty($kontak->bb))
                                    <strong>BBM :</strong> {{$kontak->bb}}<br>
                                    @endif
                                    @if(!empty($kontak->email))
                                    <strong>Email :</strong> <a href="{{$kontak->email}}">{{$kontak->email}}</a></p>
                                    @endif
                                    <br>
                                    <div class="social">
                                        <h4>Ikuti Kami</h4>
                                        @if(!empty($kontak->fb))
                                        <div class="social-btn">
                                            <a class="first-link" href="{{url($kontak->fb)}}" target="_blank">
                                                <i class="fa fa-facebook" title="Facebook"></i>
                                            </a>
                                            <a href="{{url($kontak->fb)}}"><i class="fa fa-facebook"></i></a>
                                        </div>
                                        @endif
                                        @if(!empty($kontak->tw))
                                        <div class="social-btn">
                                            <a class="first-link" href="{{url($kontak->tw)}}" target="_blank">
                                                <i class="fa fa-twitter" title="Twitter"></i>
                                            </a>
                                            <a href="{{url($kontak->tw)}}"><i class="fa fa-twitter"></i></a>
                                        </div>
                                        @endif
                                        @if(!empty($kontak->gp))
                                        <div class="social-btn">
                                            <a class="first-link" href="{{url($kontak->gp)}}" target="_blank">
                                                <i class="fa fa-google" title="Google+"></i>
                                            </a>
                                            <a href="{{url($kontak->gp)}}"><i class="fa fa-google"></i></a>
                                        </div>
                                        @endif
                                        @if(!empty($kontak->pt))
                                        <div class="social-btn">
                                            <a class="first-link" href="{{url($kontak->pt)}}" target="_blank">
                                                <i class="fa fa-pinterest" title="Pinterest"></i>
                                            </a>
                                            <a href="{{url($kontak->pt)}}"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                        @endif
                                        @if(!empty($kontak->tl))
                                        <div class="social-btn">
                                            <a class="first-link" href="{{$kontak->tl}}" target="_blank">
                                                <i class="fa fa-tumblr" title="Tumblr"></i>
                                            </a>
                                            <a href="{{$kontak->tl}}"><i class="fa fa-tumblr"></i></a>
                                        </div>
                                        @endif
                                        @if(!empty($kontak->ig))
                                        <div class="social-btn">
                                            <a class="first-link" href="{{url($kontak->ig)}}" target="_blank">
                                                <i class="fa fa-instagram" title="Instagram"></i>
                                            </a>
                                            <a href="{{url($kontak->ig)}}"><i class="fa fa-instagram"></i></a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="payments">
                    <div class="container">
                        @foreach(list_banks() as $value)
                            @if($value->status == 1)
                            <img src="{{bank_logo($value)}}" class="img-responsive logobank" alt="{{$value->bankdefault->nama}}" title="{{$value->bankdefault->nama}}">
                            @endif
                        @endforeach
                        @foreach(list_payments() as $pay)
                            @if($pay->nama == 'ipaymu' && $pay->aktif == 1)
                            <img src="{{url('img/bank/ipaymu.jpg')}}" class="img-responsive logobank" alt="ipaymu" title="Ipaymu" />
                            @endif
                            @if($pay->nama == 'bitcoin' && $pay->aktif == 1)
                            <img src="{{url('img/bitcoin.png')}}" class="img-responsive logobank" alt="bitcoin" title="Bitcoin" />
                            @endif
                            @if($pay->nama == 'paypal' && $pay->aktif == 1)
                            <img src="{{url('img/bank/paypal.png')}}" class="img-responsive logobank" alt="paypal" title="Paypal" />
                            @endif
                        @endforeach
                        @if(count(list_dokus()) > 0 && list_dokus()->status == 1)
                        <img src="{{url('img/bank/doku.jpg')}}" class="img-responsive logobank" alt="doku myshortcart" title="Doku" />
                        @endif
                        @if(count(list_veritrans()) > 0 && list_veritrans()->status == 1 && list_veritrans()->type == 1)
                        <img src="{{url('img/bank/midtrans.png')}}" class="img-responsive logobank midtrans" alt="Midtrans" title="Midtrans">
                        @endif
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <p><strong>&copy; {{ short_description(Theme::place('title'),80) }} {{date('Y')}} All Right Reserved. </strong> Powered by <a href="http://jarvis-store.com" target="_blank">Jarvis Store</a></p>
                    </div>
                </div>
            </footer>
            {{pluginPowerup()}} 