$('.checkbox').on('click', function (e) {
    var $this = $(this),
        $links = $('.checkbox');

    if ($this.hasClass('selected')) {
        $this.removeClass('selected');
    } else {
        $this.addClass('selected');
    }

    $('.grid-cell').hide();
    if ($(".checkbox:checked").length > 0) {
        ApplyAllFilters();
    } else {
        // none is checked
        $('.grid-cell').show();
    }
});

function ApplyAllFilters()
{
    var selectedPricesFilterQry = $(".checkbox.priceFilter:checked").map(function() {
                 return '[data-category-type=' + $(this).data('categoryType') + ']';
              }).get()+''

    var selectedAreasFilterQry = $(".checkbox.areaFilter:checked").map(function() {
                 return '[data-category-name=' + $(this).data('categoryName') + ']';
              }).get()+''
   var filteredResults = {};
    if(selectedPricesFilterQry != '') 
        filteredResults  = $('.grid-cell').filter(selectedPricesFilterQry);
    else
        filteredResults  = $('.grid-cell');
    if(selectedAreasFilterQry != '') 
        filteredResults = $(filteredResults).filter(selectedAreasFilterQry);
    $(filteredResults).show();
}