$('.extra-fields-store').click(function() {
  $('.store_records').clone().appendTo('.store_records_dynamic');
  $('.store_records_dynamic .store_records').addClass('single remove');
  $('.single .extra-fields-store').remove();
  $('.single').append('<a href="#" class="remove-field btn-remove-customer">Remove Store</a>');
  $('.store_records_dynamic > .single').attr("class", "remove");

  $('.store_records_dynamic input').each(function() {
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