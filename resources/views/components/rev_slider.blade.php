<section class="bannercontainer row">
    <div class="rev_slider banner row m0" id="rev_slider" data-version="5.0">
        <ul>
        @foreach (App\Models\Slider::all() as $index => $slider)
            <li data-transition="random-premium" data-delay="10000">
                <img src="{{ $slider->img_url }}"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                <div class="tp-caption sfb tp-resizeme carpenters-ul type2" 
                    data-x="left" data-hoffset="620" 
                    data-y="255" data-voffset="470" 
                    data-whitespace="nowrap"
                    data-start="1500">
                    <ul class="nav">
                        <li><a href="#">Nhà gỗ cổ truyền</a></li>
                        <li><a href="#">Khuôn cửa</a></li>
                        <li><a href="#">Đồ nội thất</a></li>
                    </ul>
                </div>
                <div class="tp-caption sfr tp-resizeme carpenters-h1 type2" 
                    data-x="left" data-hoffset="620" 
                    data-y="320" data-voffset="160" 
                    data-whitespace="nowrap"
                    data-start="900">
                    <span>thiết kế</span> đồ nội thất<br><span>sản xuất</span> khuôn cửa
                </div>
            </li>
        @endforeach
        </ul>
    </div>
</section>