/**
 * Created by Mir on 27.06.2017.
 */
$(document).ready(function(){
    $('#button1, #button2').click(function(e) {

        e.preventDefault();

        //, answeredQuestion: questionId, answer: answerOption

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
            data: {cmd: 'getNextQuestion' }, //, answeredQuestion: questionId, answer: answerOption
            success: function(dataReceived) {
                console.log(dataReceived);
            }
        });
        //buttonClick();
    });


});
