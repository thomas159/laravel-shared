$('.checkbox ').on('click', function (e) {
    
   

    var $this = $(this),
        $links = $('.checkbox');
    
    if ($this.hasClass('selected')) {
        $this.removeClass('selected');
    } else {
        $this.addClass('selected');
    }
    
 var selectedDivs = $('#Categories > div').hide();
var anySelectedCheckbox = false;
$.each($links, function (k, v) {

    $this = $(v);

    if ($this.hasClass('selected')) {
        anySelectedCheckbox = true;
        var cat = $this.data('categoryType');
        var nam = $this.data('categoryName');
        selectedDivs = selectedDivs.filter('[data-category-type="'+cat+'"], [data-category-name="'+nam+'"]');
    }

});
selectedDivs.show();
    
    if(!anySelectedCheckbox) {
    $('#Categories > div').show();
    
    }
    
    
});