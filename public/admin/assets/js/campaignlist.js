$('.extra-fields-campaign').click(function() {
  $('.campaign_records').clone().appendTo('.campaign_records_dynamic');
  $('.campaign_records_dynamic .campaign_records').addClass('single remove');
  $('.single .extra-fields-campaign').remove();
  $('.single').append('<a href="#" class="remove-field btn-remove-customer">Remove Store</a>');
  $('.campaign_records_dynamic > .single').attr("class", "remove");

  $('.campaign_records_dynamic input').each(function() {
    var count = 0;
    var fieldname = $(this).attr("name");
    $(this).attr('name', fieldname + count);
    count++;
  });

});

$(document).on('click', '.remove-field', function(e) {
  $(this).parent('.remove').remove();
  e.preventDefault();
});