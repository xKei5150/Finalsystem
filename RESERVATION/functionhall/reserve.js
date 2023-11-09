 $(".tab").css("display", "none");
      $("#tab-0").css("display", "block");
      function run(hideTab, showTab){
        if(showTab=== 4) {
          populateSummary();
        }
        if(hideTab < showTab){ // If not press previous button
          // Validation if press next button
          var currentTab = 0;
          x = $('#tab-'+hideTab);
          y = $(x).find("input")
          for (i = 0; i < y.length; i++){
            if (y[i].value == ""){
              $(y[i]).css("background", "#fc8c8c");
              return false;
            }  
          }
         
        }

        // Progress bar
        for (i = 1; i < showTab; i++){
          $("#step-"+i).css("opacity", "1");
        }

        // Switch tab
        $("#tab-"+hideTab).css("display", "none");
        $("#tab-"+showTab).css("display", "block");
        $("input").css("background", "#fff");
      }

 const firstname = document.getElementById('firstname');
 const lastname = document.getElementById('lastname');
 const ID = document.getElementById('ID');
 const email = document.getElementById('email');
 const phone = document.getElementById('phone');
 const event = document.getElementById('event');
 const purpose = document.getElementById('purpose');
      function populateSummary() {

        const summary = document.getElementById('summary');
        summary.innerHTML = `
        <p>${firstname.value}</p>
        <p>${lastname.value}</p>
        <p>${ID.value}</p>
        <p>${email.value}</p>
        <p>${phone.value}</p>
        <p>${event.value}</p>
        <p>${purpose.value}</p>
        <p>${selectedDate}</p>
        <p>${selectedTimeslot}</p>
        `;
      }

document.addEventListener("DOMContentLoaded", function() {
  const submitBtn = document.getElementById('submit');
  submitBtn.addEventListener('click', function() {
    console.log("clicked");
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'php_files/addAppointment.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
      if (xhr.status === 200 && xhr.responseText === "success") {
        console.log("Data stored and slot updated successfully.");


      } else {
        console.error("Error processing the data.", xhr.responseText);
      }
    };
    xhr.onerror = function () {
      console.error("Network error occurred.");
    };
    xhr.send(`firstname=${firstname.value}&lastname=${lastname.value}&eu_id=${ID.value}&email=${email.value}&phone=${phone.value}&event=${event.value}&purpose=${purpose.value}&date=${selectedDate}&timeslot=${selectedTimeslot}`);
  });
})
