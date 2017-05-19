    {{ generate_theme_css('stazio/assets/css/reset.css') }} 
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    @if($tema->isiCss=='') 
    {{ generate_theme_css('stazio/assets/css/style.css?v=001') }} 
    @else 
    {{ generate_theme_css('stazio/assets/css/editstyle.css') }} 
    @endif 
    <link rel="stylesheet" type="text/css" href="//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/stazio/assets/css/flexslider.css">
    <link rel="stylesheet" type="text/css" href="//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/stazio/assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/stazio/assets/css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/stazio/assets/css/jquery.fancybox.css">

    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">

    {{ favicon() }} 
    <noscript>
        {{ generate_theme_css('stazio/assets/css/nojs.css') }} 
    </noscript>