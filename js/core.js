

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


    $('#button1, #button2').click(function(e) {

        e.preventDefault();

        //, answeredQuestion: questionId, answer: answerOtion

        console.log('click');

        $.ajax({
           url: 'api.php',
            method: 'post',
            data: {cmd: 'getNextQuestion' },
            success: function(dataReceived) {
               console.log(dataReceived);

               console.log(dataReceived.questionId);
               console.log(dataReceived.questionName);
               console.log(dataReceived.answerA);
               console.log(dataReceived.answerB);
            }
        });
        //buttonClick();
    });


    $('form').submit(function(e) { //.anwerform

        e.preventDefault();

        console.log('submit');


        $.ajax({
            url: 'api.php',
            method: 'post',
            data: {cmd: 'getNextQuestion' }, //, answeredQuestion: questionId, answer: answerOtion
            success: function(dataReceived) {
                console.log(dataReceived);
            }
        });
        //buttonClick();
    });


});


/*disable und enable button*/

function buttonClick()
{
        document.getElementById('button1').style.visibility = 'hidden';
        document.getElementById('button2').style.visibility = 'hidden';
        document.getElementById('button3').style.visibility = 'visible';
        document.getElementById('question').style.visibility = 'hidden';
}


/*fragen counter*/

function continuer() {

    document.getElementById('button1').style.visibility = 'visible';
    document.getElementById('button2').style.visibility = 'visible';
    document.getElementById('button3').style.visibility = 'hidden';
    document.getElementById('question').style.visibility = 'visible';
}



