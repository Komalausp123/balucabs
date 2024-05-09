document.addEventListener('DOMContentLoaded', function () {
    const setTimeBtn = document.querySelector('.tm');
    const hourSelect = document.querySelector('#hourSelect');
    const minuteSelect = document.querySelector('#minuteSelect');
    const ampmSelect = document.querySelector('#ampmSelect');
  
    setTimeBtn.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the form submission
  
        const selectedHour = hourSelect.value;
        const selectedMinute = minuteSelect.value;
        const selectedAMPM = ampmSelect.value;
  
        const formattedHour = selectedHour.padStart(2, '0');
        const formattedMinute = selectedMinute.padStart(2, '0');
  
        const formattedTime = formattedHour + ':' + formattedMinute + ' ' + selectedAMPM;
  
        // Set the value of the input field
        document.getElementById("timeInput").value = formattedTime;

        // Check if timeInput1 exists before setting its value
        const timeInput1 = document.getElementById("timeInput1");
        if (timeInput1) {
            timeInput1.value = formattedTime;
        }
  
        // Close the modal
        $('#timebtn').modal('hide');
    });
});
  
  document.addEventListener('DOMContentLoaded', function () {
    const today = new Date();
    const dd = String(today.getDate()).padStart(2, '0');
    const mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
    const yyyy = today.getFullYear();
  
    const minDate = yyyy + '-' + mm + '-' + dd;
    document.getElementById('selectedDate').setAttribute('min', minDate);
  });
  
  document.addEventListener('DOMContentLoaded', function () {
    const setDateBtn = document.getElementById('setDateBtn');
    const selectedDateInput = document.getElementById('selectedDate');
    const dateInput = document.querySelector('.date-class');
    const dateInput1 = document.querySelector('.date-class1');
  
    setDateBtn.addEventListener('click', function () {
        const selectedDate = selectedDateInput.value;
        dateInput.value = selectedDate;
      
        // Check if dateInput1 exists before setting its value
        if (dateInput1) {
            dateInput1.value = selectedDate;
        }
      
        $('#Datebtn').modal('hide'); // Hiding the modal after setting the date
    });
  });