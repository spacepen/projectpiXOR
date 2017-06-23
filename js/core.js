/**
 * Created by tinoglatzel on 16.06.17.
 */


/* DYNAMIC BACKGROUND IMAGES */
$(document).ready(function(){

    var header = $('body');

    var backgrounds = new Array(
        'url(/projectpixor/images/background.jpg)'
        , 'url(/projectpixor/images/background2.jpg)'
        , 'url(/projectpixor/images/background3.jpg)'
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






function buttonClick()
{
        document.getElementById('button1').style.display = 'none';
        document.getElementById('button2').style.display = 'none';
        document.getElementById('button3').style.visibility = 'visible';
        document.getElementById('question').style.visibility = 'hidden';
}