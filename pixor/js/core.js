/**
 * Created by tinoglatzel on 16.06.17.
 */


/* DYNAMIC BACKGROUND IMAGES */
$(document).ready(function(){

    var header = $('body');

    var backgrounds = new Array(
        'url(/projectpiXOR/pixor/images/background.jpg)'
        , 'url(/projectpiXOR/pixor/images/background2.jpg)'
        , 'url(/projectpiXOR/pixor/images/background3.jpg)'
    );

    var current = 0;

    function nextBackground() {
        current++;
        current = current % backgrounds.length;
        header.css('background-image', backgrounds[current]);
    }
    setInterval(nextBackground, 10000);
    header.css('background-image', backgrounds[0]);

});
