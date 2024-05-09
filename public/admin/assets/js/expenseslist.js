$('.extra-fields-expenses').click(function() {
  $('.expenses_records').clone().appendTo('.expenses_records_dynamic');
  $('.expenses_records_dynamic .expenses_records').addClass('single remove');
  $('.single .extra-fields-expenses').remove();
  $('.single').append('<a href="#" class="remove-field btn-remove-customer">Remove Field</a>');
  $('.expenses_records_dynamic > .single').attr("class", "remove");

  $('.expenses_records_dynamic input').each(function() {
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