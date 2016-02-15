require('jquery');

$('#banner')
    .visibility({
        once: false,
        onBottomPassed: function () {
            $('.fixed.menu').transition('fade in');
        },
        onBottomPassedReverse: function () {
            $('.fixed.menu').transition('fade out');
        },
        onUpdate: function(calculations) {
            // $('#banner.bg .background-image').css("background-position","50% 100%, 50% 100%, 50% -" + calculations.pixelsPassed /3 + "px");
            $('#screenshot').css("background-position","50% " + calculations.pixelsPassed /2 + "px");
        }
    });


setTimeout(function(){
    $('#banner').addClass('bg');
}, 500);





