<footer>
   <div class="footer">
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <h3>Contact US</h3>
               <ul class="conta">
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address</li>
                  <li><i class="fa fa-mobile" aria-hidden="true"></i>9844413247</li>
                  <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">uanish767@gail.com</a></li>
               </ul>
            </div>
            <div class="col-md-4">
               <h3>Menu Link</h3>
               <ul class="link_menu">
                  <li class="active"><a href="{{ route('home') }}">Home</a></li>
                  <li><a href="{{ url('/about') }}" data-target="about"> about</a></li>
                  <li><a href="{{ url('/room') }}" data-target="room">Our Room</a></li>
                  <li><a href="{{ url('/gallery') }}" data-target="gallery">Gallery</a></li>
                  <li><a href="{{ url('/blog') }}" data-target="blog">Blog</a></li>
                  <li><a href="{{ url('/contact') }}" data-target="contact">Contact Us</a></li>
               </ul>
            </div>
            <div class="col-md-4">
               <h3>News letter</h3>
               <form class="bottom_form">
                  <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
               </form>
               <ul class="social_icon">
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
               </ul>
            </div>
         </div>
      </div>
      <div class="copyright">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <p>
                  © 2026 All Rights Reserved.
                  <br><br>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

<script>
   document.addEventListener('DOMContentLoaded', function () {
      const path = window.location.pathname.replace('/', ''); // e.g. "gallery"
      const target = document.getElementById(path);
      if (target) {
         target.scrollIntoView({ behavior: 'smooth' });
      }
   });
</script>