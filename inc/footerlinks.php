<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<!-- slick slider js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<!-- slick slider js -->
<!-- Vendor JS Files -->
<!--<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>-->
<script src=""></script>
<!--<script src="js/aos.js"></script>-->
<!--<script src="js/bootstrap.bundle.min.js"></script>-->
<!--<script src="js/glightbox.min.js"></script>-->
<!--<script src="js/isotope.pkgd.min.js"></script>-->
<!--<script src="js/swiper-bundle.min.js"></script>-->
<!--<script src="js/noframework.waypoints.js"></script>-->
<!--<script src="js/validate.js"></script>-->

<!-- Template Main JS File -->
<script src="js/main.js"></script>
<!-- Jquery JS -->
<script>
    $(document).ready(function() {
        $(window).on('load', function() {
            $("#preloader").fadeOut(1000);
        });
    })
    $('.sslider_testimonials').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    const CurrentLocation = location.href;
    const menuItem = document.querySelectorAll('.nav-link');
    const menuLength = menuItem.length;
    for (let i = 0; i < menuLength; i++) {
        if (menuItem[i].href === CurrentLocation) {
            menuItem[i].className += " active";
        }

    }
    if (CurrentLocation === "https://demos-clients-websites.com/arian/") {
            menuItem[0].className += " active";
        }
</script>