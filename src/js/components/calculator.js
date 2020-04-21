jQuery(function($) {
    var val1 = '#amount-01';
    var val2 = '#amount-02';

    var first = 120;
    var second = 2000;
    var result;

    function recount() {
        result = first * second
        $(".calculator-value-result").html(result + " " + "Points");
    };
    recount();

    $('#slider-range-min-01, #slider-range-min-01 .ui-slider-handle').click(function() {
        first = $(val1).val() * 1;
        $("#slider-range-min-01").slider("value", first);
        recount();
    });
    $('#slider-range-min-02, #slider-range-min-01 .ui-slider-handle').click(function() {
        second = $(val2).val() * 1;
        $("#slider-range-min-02").slider("value", second);
        recount();
    });

    $( "#slider-range-min-01" ).slider({
        range: "min",
        value: 120,
        min: 1,
        max: 1000,
        slide: function( event, ui ) {
            $( val1 ).val( ui.value );
        }
    });
    $( val1 ).val( $( "#slider-range-min-01" ).slider( "value" ) );

    $( "#slider-range-min-02" ).slider({
        range: "min",
        value: 2000,
        min: 1,
        max: 3000,
        slide: function( event, ui ) {
            $( val2 ).val( ui.value );
        }
    });
    $( val2 ).val( $( "#slider-range-min-02" ).slider( "value" ) );
});