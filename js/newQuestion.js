


$(document).ready(function(){


    // When 'Button 1' is clicked...:

    $('#button1').click(function(e) {

        e.preventDefault();

        console.log('click');

        $.ajax({
            url: 'includes/answer.php',
            method: 'post',
            data: {cmd: 'getNextQuestion'},
            success: function (dataReceived) {


                console.log(dataReceived);

                console.log(dataReceived.questionId);
                console.log(dataReceived.answerA);
            }
        })
    });


    // When 'Button 2' is clicked...:

    $('#button2').click(function(e) {

        e.preventDefault();

        console.log('click');

        $.ajax({
            url: 'includes/answerB.php',
            method: 'post',
            data: {cmd: 'getNextQuestion'},
            success: function (dataReceived) {


                console.log(dataReceived);

                console.log(dataReceived.questionId);
                console.log(dataReceived.answerB);
            }
        })
    });


    $('form').submit(function(e) { //.answerform

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
