$(document).ready(function(){

    $('#qual').on('change',function(){

        var selectValue = '#'+$(this).val();

        $('#pai').children('div').hide();
        $('#pai').children(selectValue).show();
    });
});