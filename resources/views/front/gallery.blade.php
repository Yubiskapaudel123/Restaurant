@extends('front/layout')


@section('title')
    Gallery
@endsection

@section('container')
 
   
	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url('{{asset('front_assets/images/332276075_504926338465734_8285107212269949982_n.jpg')}}');">
		<h2 class="tit6 t-center">
			Gallery
		</h2>
	</section>



	<!-- Gallery -->
	<div class="section-gallery p-t-118 p-b-100">
		<div class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">
            <button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
				All Photo
			</button>
			@foreach($pictures as $picture)
			<button class="label-gallery txt26 trans-0-4 is-actived" data-filter=".{{ $picture->title }}">
				{{ $picture->title }}
			</button>
			@endforeach
		</div>


		<div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25">
        @foreach ($pictures as $picture)
            @if ($decodedImages = json_decode($picture->image))
                @foreach ($decodedImages as $image)
                    <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom {{ $picture->title }}">
                        <img src="{{ asset('/image/'.$image) }}" style="height:450px; width:450px" alt="Image">
                        <div class="overlay-item-gallery trans-0-4 flex-c-m">
                            <a class="btn-show-gallery flex-c-m fa fa-search" href="{{ asset('/image/'.$image) }}" style="height:120px; width:120px" data-lightbox="gallery"></a>
                        </div>
                    </div>
                @endforeach
            @endif
        @endforeach
    </div>
</div>
		<div class="pagination flex-c-m flex-w p-l-15 p-r-15 m-t-24 m-b-50">
			<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
			<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
			<a href="#" class="item-pagination flex-c-m trans-0-4">3</a>
		</div>
	</div>

	<script>
    document.addEventListener('DOMContentLoaded', function () {
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('label-gallery')) {
            const filter = event.target.getAttribute('data-filter');
            const images = document.querySelectorAll('.item-gallery');

            images.forEach(image => {
                image.style.display = 'none';
            });

            if (filter === '*') {
                images.forEach(image => {
                    image.style.display = 'block';
                });
            } else {
                const filteredImages = document.querySelectorAll('.item-gallery' + filter);
                filteredImages.forEach(image => {
                    image.style.display = 'block';
                });
            }
        }
    });
});

</script>
@endsection