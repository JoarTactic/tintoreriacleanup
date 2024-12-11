$( document ).ready(function() {
    $('.numeroDecimal').inputmask({
        alias: 'decimal',
        radixPoint: '.',
        allowMinus: false,
        digits: 2,
        autoGroup: true,
        groupSeparator: ',',
        autoUnmask: true
    });
});
