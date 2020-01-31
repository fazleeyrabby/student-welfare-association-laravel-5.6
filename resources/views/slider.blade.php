

 <div class="clients-says owl-carousel">
    @foreach($sliders as $slider)
    <div class="single-client">
        <div class="client-details">

            <img src="public/assets/backend_asset/slider_images/{{ $slider->img }}" style="height:600px;">
            <div class="slider-slider-text">
            	<h2>{{ $slider->heading }}</h2>
            	<p class="h5 text-success">{{ $slider->sub_heading }}</p>
            </div>

        </div>
    </div>
    @endforeach
</div>
