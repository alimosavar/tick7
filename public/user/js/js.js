$(document).ready(function () {
    $.simpleTicker($("#ticker-fade"),{
        speed : 1000,
        delay : 100000000000,
        easing : 'swing',
        effectType:'fade'
    });
});

$(document).ready(function() {
    $('.countdown').final_countdown({
        start: '1362139200',
        end: '1388461320',
        now: '1387461319',
        seconds: {
            borderColor: '#7995D5',
            borderWidth: '6'
        },
        minutes: {
            borderColor: '#ACC742',
            borderWidth: '6'
        },
        hours: {
            borderColor: '#ECEFCB',
            borderWidth: '6'
        },
        days: {
            borderColor: '#FF9900',
            borderWidth: '6'
        }}, function() {
//alert('تخفیفات ویژه به مناسبت عید مبعث به پایان رسیده است');
    });
});
//random topic ticker
$(document).ready(function() {
$('#vertical-ticker').totemticker({
    row_height	:	'87px',
    next		:	'#ticker-next',
    previous	:	'#ticker-previous',
    stop		:	'#stop',
    start		:	'#start',
    max_items	: 	3,
    mousestop	:	true,

});
});
//bootstrap tooltip fire
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
});
//bootslidemenu
$('#slide-nav').BootSideMenu({

    // 'left' or 'right'
    side: "right",

    // animation speed
    duration: 500,

    // restore last menu status on page refresh
    remember: true,

    // auto close
    autoClose: false,

    // push the whole page
    pushBody: false,

    // close on click
    closeOnClick: true,

    // width

    // icons
    icons: {
        left: 'glyphicon glyphicon-chevron-left',
        right: 'glyphicon glyphicon-chevron-right',
        down: 'glyphicon glyphicon-chevron-down'
    },

    // 'dracula', 'darkblue', 'zenburn', 'pinklady', 'somebook'
    theme: '',

});
//owl slider related post
$('.owl-carousel').owlCarousel({
    rtl:true,
    loop:true,
    margin:10,
    /*dots:false,*/
    autoplay:true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
})
//show hidden password
$(document).ready(function() {
    $('#password').password('hide');
});