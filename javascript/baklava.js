 $(document).ready(function(){
    $('#pistachio').click(function(){
        var pistachio = $(this).val();
        if($(this).text() == 'Added!') {
            $(this).css('background-color', '');
            $(this).text('Add');
            var pistachio = 0
        } else {
            $(this).css('background-color', 'brown');
            $(this).text('Added!');
        }
    });

    $('#almonds').click(function(){
        var almonds = $(this).val();
        if($(this).text() == 'Added!') {
            $(this).css('background-color', '');
            $(this).text('Add');
            var almonds = 0
        } else {
            $(this).css('background-color', 'brown');
            $(this).text('Added!');
        }
    });

    $('#wallnut').click(function(){
        var almonds = $(this).val();
        if($(this).text() == 'Added!') {
            $(this).css('background-color', '');
            $(this).text('Add');
            var almonds = 0
        } else {
            $(this).css('background-color', 'brown');
            $(this).text('Added!');
        }
    });

    $('#icecream').click(function(){
        var almonds = $(this).val();
        if($(this).text() == 'Added!') {
            $(this).css('background-color', '');
            $(this).text('Add');
            var almonds = 0
        } else {
            $(this).css('background-color', 'brown');
            $(this).text('Added!');
        }
    });

});