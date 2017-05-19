<div class="container">
    <div class="breadcrumb"><p>Hubungi Kami</p></div>
        <div class="inner-column row">
            <div class="col-xs-12 col-sm-8 col-lg-9">
                <div class="maps" id="maplocation">
                    @if($kontak->lat!='0' || $kontak->lng!='0')
                    <iframe class="detailmaps" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
                    @else
                    <iframe class="detailmaps" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ str_replace(' ','+',$kontak->alamat) }}&amp;aq=0&amp;oq={{ str_replace(' ','+',$kontak->alamat) }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;hq=&amp;hnear={{ str_replace(' ','+',$kontak->alamat) }}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
                    @endif
                </div>
                <div class="contact-us" >
                    <br>
                    <div class="contact-desc">
                        @if(!empty($kontak->alamat))
                        <strong>Alamat Toko :</strong> {{ $kontak->alamat }}<br>
                        @endif
                        @if(!empty($kontak->telepon))
                        <strong>Telepon :</strong> {{ $kontak->telepon }}<br>
                        @endif
                        @if(!empty($kontak->hp))
                        <strong>SMS / WA :</strong> {{ $kontak->hp }}<br>
                        @endif
                        @if(!empty($kontak->bb))
                        <strong>BBM :</strong> {{ $kontak->bb }}<br>
                        @endif
                        @if(!empty($kontak->email))
                        <strong>Email :</strong> <a href="{{ $kontak->email }}">{{ $kontak->email }}</a>
                        @endif
                        <div class="clr"></div>
                    </div>
                    <br><br>
                    <form class="contact-form" action="{{ url('kontak') }}" method="post">
                        <p class="form-group">
                            <input class="form-control" placeholder="Nama" name="namaKontak" type="text" required>
                        </p>
                        <p class="form-group">
                            <input class="form-control" placeholder="Email" name="emailKontak" type="text" required>
                        </p>
                        <p class="form-group">
                            <textarea class="form-control" placeholder="Pesan" name="messageKontak" required></textarea>
                        </p>
                        <button class="btn-send">Kirim</button>
                    </form>
                </div>
            </div>
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
            </div>
        </div>
    </div>
</div>