async function ajaxAddToCart(productId) {
    /*    e.preventDefault();
        e.stopPropagation();*/
    let result = await $.ajax({
        url: BASE_URL + 'shop/add-to-cart',
        type: 'GET',
        dataType: 'html',
        data: {pid: productId},
    });
    /*
    * .then(function (res) {
        //location.reload();
        return 'cc';
    },function (res) {
        return 'abb';
    });
    * */
    return result;

}
/**
 * add .sticky class if user scroll down.
 */
function stick() {
    if (! $('.nav-sticky').length) return;

    var stickyNavTop = $('.nav-sticky').offset().top;
    var scrollTop = $(window).scrollTop();

    if(stickyNavTop > 70) {
        $('.nav-sticky').addClass('sticky');
    } else {
        $('.nav-sticky').removeClass('sticky');
    }
}

function alignVertical() {
    $('.fullscreen').height($(window).height());
    $('.align-vertical').each(function(){
        var that = $(this);
        height = that.height(),
            parentHeight = that.parent().height(),
            padAmount = (parentHeight / 2) - (height/2);

        that.css('padding-top', padAmount);
    });
}

var height = null;
var padAmount = null;
function heightCenter() {
    height = $(window).height();
    padAmount = (height/2.5);
    $('.col-height-center').css('padding-top', padAmount);
}

function initializeMap(selector) {

    var latitude  = $(selector).data('lat'),
        longitude = $(selector).data('long'),
        title     = $(selector).data('title'),
        subtitle  = $(selector).data('subtitle');

    var mapOptions = {
        zoom: 14,
        scrollwheel: false,
        panControl: false,
        zoomControl: true,
        scaleControl: false,
        disableDefaultUI: true,
        center: new google.maps.LatLng(latitude, longitude)
    }

    var map = new google.maps.Map(document.querySelector(selector), mapOptions);
    map.set('styles', [{
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{
            "color": "#e9e9e9"
        }, {
            "lightness": 17
        }]
    }, {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [{
            "color": "#f5f5f5"
        }, {
            "lightness": 20
        }]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [{
            "color": "#ffffff"
        }, {
            "lightness": 17
        }]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [{
            "color": "#ffffff"
        }, {
            "lightness": 29
        }, {
            "weight": 0.2
        }]
    }, {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [{
            "color": "#ffffff"
        }, {
            "lightness": 18
        }]
    }, {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [{
            "color": "#ffffff"
        }, {
            "lightness": 16
        }]
    }, {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [{
            "color": "#f5f5f5"
        }, {
            "lightness": 21
        }]
    }, {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [{
            "color": "#dedede"
        }, {
            "lightness": 21
        }]
    }, {
        "elementType": "labels.text.stroke",
        "stylers": [{
            "visibility": "on"
        }, {
            "color": "#ffffff"
        }, {
            "lightness": 16
        }]
    }, {
        "elementType": "labels.text.fill",
        "stylers": [{
            "saturation": 36
        }, {
            "color": "#333333"
        }, {
            "lightness": 40
        }]
    }, {
        "elementType": "labels.icon",
        "stylers": [{
            "visibility": "off"
        }]
    }, {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [{
            "color": "#f2f2f2"
        }, {
            "lightness": 19
        }]
    }, {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [{
            "color": "#fefefe"
        }, {
            "lightness": 20
        }]
    }, {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [{
            "color": "#fefefe"
        }, {
            "lightness": 17
        }, {
            "weight": 1.2
        }]
    }]);


    var image = 'build/img/map-marker.png';
    var myLatLng = new google.maps.LatLng(latitude, longitude);
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image
    });

    infowindow = new google.maps.InfoWindow({
        content: "<b>"+ title +"</b><br/>"+ subtitle
    });

    marker.addListener('click', function() {
        infowindow.open(map, marker);
    });
}

$(window).load(function () {
    alignVertical();
    heightCenter();
    stick();
});
var values,min,max;

jQuery(document).ready(function() {

    $('.shopping-cart .dropdown-menu a').click(function() {
        window.location = $(this).attr('href');
    });

    $('.shopping-cart .dropdown-menu').click(function() {
        return false;
    });

    $('[data-toggle="tooltip"]').tooltip();

    if ($("#logos").length) {
        $("#logos").owlCarousel({
            items: 7,
            loop: false,
            nav: false,
            margin:40,
            dots: false,
            responsive: {
                0: {
                    items: 3
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 7
                }
            }
        });
    }

    $('.product-images-carousel').owlCarousel({
        items: 3,
        loop: false,
        nav: false,
        margin: 20,
        dots: false,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    $('#related-products').owlCarousel({
        items: 3,
        loop: false,
        nav: true,
        margin: 20,
        dots: false,
        navText: ['<i class="lil-navigate_before"></i>', '<i class="lil-navigate_next"></i>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    // Run slim scroll.
    $('[slim-scroll]').slimScroll({
        size: '5px'
    });

    // Rating Stars.
    if ($('.rating-stars').length) {
        var rating = $('.rating-stars').data('rating');
        var readOnly = ($('.rating-stars').attr('readonly'));
        $('.rating-stars').starrr({
            readOnly: readOnly,
            rating : rating,
            fullClass: 'lil-star',
            emptyClass: 'lil-star_outline'
        });

        $('.rating-stars').on('starrr:change', function(e, value){
            $(e.target).attr('data-rating', value); // For change stars rating attr
            $('input[name="rating"]').val(value);
        });
    }

    // Ren Fancybox
    if ($('.fancybox').length) {
        $('.fancybox').fancybox({
            padding : 0,
            openEffect  : 'elastic'
        });
    }

    /**
     * Flying to cart effect
     */
    $('.add-to-cart:not(.added)').on('click', function(e) {
        //stop bubbling event
        e.preventDefault();
        e.stopPropagation();
        if ($(this).hasClass('added')) return;

        var cart = $('.shopping-cart'),
            product   = $(this).parents('.product'),
            imgToDrag = product.find("img").eq(0);
        debugger;
        if (imgToDrag) {
            var imgClone = imgToDrag.clone()
                .offset({
                    top: imgToDrag.offset().top + 150,
                    left: imgToDrag.offset().left + 150
                })
                .css({
                    'opacity': '.9',
                    'position': 'absolute',
                    'height': '50px',
                    'width': '50px',
                    'z-index': '999999',
                    'border-radius': '50%'
                })
                .appendTo($('body'))
                .animate({
                    'top': cart.offset().top + 12,
                    'left': cart.offset().left + 12,
                    'width': 75,
                    'height': 75
                }, 1000, 'easeInOutExpo');

            setTimeout(function() {
                cart.effect("shake", {
                    times: 2
                }, 400, addToCart(product));
            }, 1500);

            imgClone.animate({
                'width': 0,
                'height': 0
            }, function() {
                $(this).detach()
            });
        }


        $(this).addClass('added');
        $(this).parent().attr('data-original-title', 'Added');

    });

    /**
     * Add product to cart and change badge count
     */
    function addToCart(product) {
        var $cart     = $('.shopping-cart');
        var productId = product.data('product-id');
        console.dir(productId);
        /*
        * 1- [Add product to 'Application' by AJAX]
        *  - Your AJAX code.
        */
        if(!ajaxAddToCart(productId)) return;
        // 2- [Add product to shopping cart]
        var product_title = product.find('.product-title a').text();
        var product_price = product.find('.product-price span').text();
        var product_link  = product.find('.view-details').attr('href');
        var product_img   = product.find('.product-thumbnail img').attr('src');

        var toCart = '<li>';
        toCart += '<a href="'+ product_link +'"><img src="'+ product_img +'" class="img-responsive product-img"></a>';
        toCart += '<div class="product-details">';
        toCart += '<p class="product-title clearfix"><a href="'+ product_link +'">'+ product_title +'</a></p>';
        toCart += '<div class="product-price clearfix">'+ product_price +'</div>';
        toCart += '</div>';
        toCart += '</li>';

        $cart.find('.dropdown-wrap').prepend(toCart);

        // 3- [Change badge count]
        var badge = $cart.find('.badge');
        badge.text( parseInt(badge.text()) + 1 );
    }

    // Custom Quantity Input
    $('.quantity input[type="button"]').on('click', function() {
        var qty = $(this).parent().find('input.qty');
        var qtyVal = parseInt(qty.val());
        var min  = qty.attr('min') ? parseInt(qty.attr('min')) : 1,
            max  = qty.attr('max') ? parseInt(qty.attr('max')) : null,
            step = qty.attr('step') ? parseInt(qty.attr('step')) : 1;

        if($(this).hasClass('plus') && (max == null || qtyVal < max)) {
            qty.val(qtyVal+step);
        } else if($(this).hasClass('minus') && qtyVal > min) {
            qty.val(qtyVal-step);
        }
    });

    var $masonry = $('.masonry').imagesLoaded( function() {
        // init Isotope after all images have loaded
        $masonry.isotope({
            isInitLayout: true,
            // isOriginLeft: false, // RTL
            isOriginTop: true,
            isResizeBound: true,
            isResizingContainer: true,
            layoutMode: 'masonry',
            itemSelector: '.product',
        });

        alignVertical();
        heightCenter();
    });

    // Products Filter
    $('.products-filter a').click(function(e) {
        e.preventDefault();

        var selector = $(this).attr('data-filter');
        $(".products-filter li").removeClass("active");
        $(this).parent().addClass("active");
        $('.masonry').isotope({ filter: selector });
    });

    // Go to top
    $(".go-to-top").click(function(e) {
        e.preventDefault();
        $("html,body").animate({scrollTop : 0}, 350);
    });

    // Google maps
    if ($('#map').length) {
        google.maps.event.addDomListener(window, 'load', initializeMap('#map'));
    }

    // Enter in any string, and watch it type at the speed you've set.
    if ($('.autotype').length) {
        $('.autotype').typed({
            strings: ['Hello', 'Merhaba', 'Ħello', 'Salü', 'Hallo', 'Halito', 'مرحبا', 'Hallå'],
            typeSpeed: 20,
            loop: true
        });
    }

    if($('#filter-slider').length) {
        var values = $('#filter-slider').data('values').split(",");
        var max    = $('#filter-slider').data('max');
        var min    = $('#filter-slider').data('min');

        $('#filter-slider').slider({
            min: min,
            max: max,
            orientation: 'horizontal',
            range: true,
            values: [values[0], values[1]],
            slide: function (event, ui) {
                $("#amount-slider > span").html("$" + ui.values[0] + " — $" + ui.values[1]);
                $("input#price").val(ui.values[0] + "," + ui.values[1]);
            }
        });
    }

    // Slide Toggle
    $('[data-slide-toggle]').on('click', function(e) {
        e.preventDefault();

        var $target = $($(this).data('slide-toggle'));
        var parent  = $(this).attr('data-parent');
        if (parent) {
            $(this).parents(parent).find('[data-slide-toggle]').each(function(index, element) {
                $($(element).data('slide-toggle')).slideUp();
            });
        }

        $target.slideToggle();
    });

    // Custom checkbox and radio.
    $('.checkbox[data-slide-toggle], .radio[data-slide-toggle]').on('click', function(e) {
        var query  = $(this).hasClass('checkbox') ? 'checkbox' : 'radio';
        var $input = $(this).parent().find('>input[type="'+ query +'"]');

        if (query == 'radio') {
            $('[name="' + $input.attr('name') + '"]').attr('checked', false).prop('checked', false);
        }

        if (! $input.attr('checked')) {
            $input.attr('checked', true).prop('checked', true);
        } else {
            $input.attr('checked', false).prop('checked', false);
        }
    });

    // Swiper Silder
    var shamSwiper = new Swiper('.swiper-container', {
        // Optional parameters
        // direction: 'vertical',
        loop: true,
        effect: 'fade', // Could be "slide", "fade", "cube", "coverflow" or "flip"
        parallax: true,
        autoplay: 3000,
        // If we need pagination
        pagination: '.swiper-pagination',
        // Navigation arrows
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        // And if we need scrollbar
        // scrollbar: '.swiper-scrollbar',
    });

    /**
     * List Select.
     */
    // Hover container select menu
    $('.list-select .inner-select').hover(
        function() {
            $(this).addClass('hover');
            $(this).children().eq(0).addClass('hover');
            $(this).find('ul').stop().slideToggle(100);

        }, function(){
            $(this).removeClass('hover');
            $(this).children().eq(0).removeClass('hover');
            $(this).find('ul').stop().slideToggle(100);
        }
    );

    // Click Select
    $('.list-select ul a').on('click', function(){
        // Select value and apply changes
        $(this).parents('ul').find('a').removeClass('active');
        $(this).addClass('active');
        var $lang = $(this).html();
        $(this).parents('.list-select').find('.selected').html($lang);
    });

    // Open dropdown on hover.
    $('.navbar [data-toggle="dropdown"]:not(.li-icon)').hover(function (e) {
        e.preventDefault();

        if ($('.navbar-toggle').css('display') != 'none') return;

        $(this).parents('.nav').find('.open').removeClass('open');
        $(this).parent().addClass('open');
    });

    // To get random number between custom number
    function randomIntFromInterval(min, max) {
        return Math.floor(Math.random()*(max-min+1)+min);
    }

    // Instagram effect.
    var insta = $('.instagram ul>li').length;
    if (insta) {
        setInterval(function() {
            var random = randomIntFromInterval(1, insta);
            $('.instagram ul>li').removeClass('active');
            $('.instagram ul>li:eq('+ random +')').addClass('active');
        }, 1000);
    }

});

$(window).scroll(function() {
    stick();

    // Go to top
    $(this).scrollTop() > 300 ? $('.go-to-top').addClass('visible') : $('.go-to-top').removeClass('visible');
});

$(window).resize(function(){
    alignVertical();
    heightCenter();
});
