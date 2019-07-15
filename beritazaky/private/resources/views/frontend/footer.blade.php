<footer class="footer-distributed">

        <div class="footer-right">


                <a href="https://web.facebook.com/mr.daa19"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/mr.daa/" ><i class="fab fa-instagram" aria-hidden="true"></i></a>
                <a href="https://wa.me/6289644058987"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                <a href="https://twitter.com/Mr_DAA" ><i class="fab fa-twitter" aria-hidden="true"></i></a>
        </div>

        <div class="footer-left">

                <p class="footer-links">
                        <a href="#">Home</a>
                        ·
                        <a href="#">About Us</a>

                @php($ftr = DB::table('home')->get())
                @foreach ($ftr as $fttr)
                 <p>&copy; {{$fttr->footer}} </p>
                 @endforeach
               
        </div>

</footer>