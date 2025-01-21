<!-- JavaScript Files -->
<script src="{{ asset('front/js/jquery.min.js') }}"></script>
<script src="{{ asset('front/js/jpreLoader.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front/js/wow.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('front/js/easing.js') }}"></script>
<script src="{{ asset('front/js/owl.carousel.js') }}"></script>
<script src="{{ asset('front/js/validation.js') }}"></script>
<script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('front/js/enquire.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.plugin.js') }}"></script>
<script src="{{ asset('front/js/typed.js') }}"></script>
<script src="{{ asset('front/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('front/js/jquery.countdown.js') }}"></script>

@if(app()->getLocale() == 'ar')
    <script src="{{ asset('front/js/designesia_ar.js') }}"></script>
@else
    <script src="{{ asset('front/js/designesia.js') }}"></script>
@endif


<!-- Revolution Slider Core JS -->
<script src="{{ asset('front/revolution/js/jquery.themepunch.tools.min.js?rev=5.0') }}"></script>
<script src="{{ asset('front/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0') }}"></script>

<!-- Revolution Slider Extensions -->
@foreach([
    'video',
    'slideanims',
    'layeranimation',
    'navigation',
    'actions',
    'kenburn',
    'migration',
    'parallax'
] as $extension)
    <script src="{{ asset("front/revolution/js/extensions/revolution.extension.$extension.min.js") }}"></script>
@endforeach

<!-- Revolution Slider Initialization -->
<script>
    jQuery(document).ready(function () {
        jQuery("#slider-revolution").revolution({
            sliderType: "standard",
            sliderLayout: "fullwidth",
            delay: 5000,
            navigation: {
                arrows: { enable: true },
                bullets: {
                    enable: true,
                    hide_onmobile: false,
                    style: "hermes",
                    hide_onleave: true,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 20,
                    v_offset: 30,
                    space: 5,
                },
            },
            parallax: {
                type: "mouse",
                origo: "slidercenter",
                speed: 2000,
                levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
            },
            responsiveLevels: [1920, 1380, 1240],
            gridwidth: [1200, 1200, 940],
            spinner: "off",
            gridheight: 700,
            disableProgressBar: "on"
        });
    });
</script>
