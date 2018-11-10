$(document).ready(function() {
    $('input').change(function() {
        var options = new Array();

        $.each($('input[type="checkbox"]:checked'), function(key, value) {
            options.push($(value).val());
        });

        $('div').text(calculateTotalScore(options));
    });

});