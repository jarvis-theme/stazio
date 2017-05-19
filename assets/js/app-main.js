var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
    baseUrl: '/',
    urlArgs: "v=001",
    waitSeconds: 60,
    shim: {
        "bootstrap" : {
            deps: ['jquery'],
        },
        'jq_ui' : {
            deps : ['jquery'],
        },
        "noty" : {
            deps : ['jquery'],
        },
        "cart" : {
            deps : ['jquery'],
        },
        'fancybox' : {
            deps : ['jquery']
        },
        "owl_carousel" : {
            deps: ['jquery'],
        },
        "jq_flexslider" : {
            deps : ['jquery'],
        },
        "navgoco" : {
            deps : ['jquery'],
        }
    },

    paths: {
        // LIBRARY
        jquery          : '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min',
        bootstrap       : '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min',
        cart            : '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/js/shop_cart',
        noty            : '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/js/jquery.noty',
        jq_ui           : '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/js/jquery-ui',
        fancybox        : '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/stazio/assets/js/jquery.fancybox.pack',
        jq_flexslider   : '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/stazio/assets/js/jquery.flexslider-min',
        navgoco         : '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/stazio/assets/js/jquery.navgoco.min',
        modernizr       : '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/stazio/assets/js/modernizr.custom.28468',
        owl_carousel    : '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/stazio/assets/js/owl.carousel.min',
        
        // ROUTE
        router          : '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/js/router',

        // CONTROLLER
        main            : '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/stazio/assets/js/pages/default',
        home            : '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/stazio/assets/js/pages/home',
        member          : '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/stazio/assets/js/pages/member',
        produk          : '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/stazio/assets/js/pages/produk',
    }
});
require([
    'jquery',
    'router',
    'cart',
    'main',
    'modernizr'
], function($,router,cart,main)
{
    // PRODUK
    router.define('/', 'home@run');
    router.define('home', 'home@run');
    router.define('produk/*', 'produk@run');
    router.run();
    cart.run();
    main.run();
});