<div id="slide-row">
    <div id="bg-slider">
        <div class="container">
            <div id="da-slider" class="flexslider">
                <ul class="slides">
                    @foreach (slideshow() as $val) 
                    <li>
                        @if(!empty($val->url))
                        <a href="{{filter_link_url($val->url)}}" target="_blank">
                        @else
                        <a href="#">
                        @endif
                            {{HTML::image(slide_image_url($val->gambar), $val->title, array('width'=>'1020'))}} 
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<br>