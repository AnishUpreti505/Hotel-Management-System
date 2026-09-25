<div class="gallery" id="gallery">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>gallery</h2>
            </div>
         </div>
      </div>
      <div class="row">
         @foreach (range(1, 8) as $i)
         <div class="col-md-3 col-sm-6">
            <div class="gallery_img">
               <figure><img src="{{ asset('images/gallery' . $i . '.jpg') }}" alt="#"/></figure>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>