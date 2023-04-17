
$(document).ready(function(){
    var selectedValue = $('select[name="size"]').val();
    
    // Update selectedValue when dropdown changes
    $('select[name="size"]').change(function() {
        selectedValue = $(this).val();
    });
    $('.submit-button').click(function(){
        alert(selectedValue);
    });
    //To cancel order/ reset values
    $('.cancel-button').click(function(){
        selectedValue = 0;
    })
});