document.addEventListener("DOMContentLoaded", function () {
    // Get references to the HTML elements where you want to display data
    const nameList = document.getElementById("name-list");
    const addressList = document.getElementById("address-list");
    const emailList = document.getElementById("email-list");
    const purposeList = document.getElementById("purpose-list");
    const dateList = document.getElementById("date-list");
    const timeslotList = document.getElementById("timeslot-list");
   
    const deleteList = document.getElementById("delete-list");

    // function deleteAppointment(appointmentId) {
    //     const confirmed = confirm("Are you sure you want to delete this appointment?");
    //     if (confirmed) {
    //         // Send a delete request to the PHP script
    //         const xhr = new XMLHttpRequest();
    //         xhr.open("POST", "php_files/deleteAppointment.php", true);
    //         xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    //         xhr.onreadystatechange = function () {
    //             if (xhr.readyState === 4) {
    //                 if (xhr.status === 200) {
    //                     const response = xhr.responseText;
    //                     console.log("Response from the server:", response);
    //                     location.reload();
    //                     alert("Appointment deleted successfully!");
    //                 } else {
    //                     console.log("Error:", xhr.status, xhr.statusText);
    //                     location.reload();
    //                     alert("An error occurred while deleting the appointment.");
    //                 }
    //             }
    //         };
    //         xhr.send("id=" + appointmentId);
    //     }
    // }

    const xhr = new XMLHttpRequest();
    xhr.open("GET", "php_files/fetchAppointment.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const data = JSON.parse(xhr.responseText);

            data.forEach(function (appointment) {
                
                // let tr = document.createElement('tr');

                // // Checkbox column
                // let thCheckbox = document.createElement('th');
                // let span = document.createElement('i');
                // i.className = "material-icons";
                // thCheckbox.appendChild(i);
                // tr.appendChild(thCheckbox);


                const deleteButton = document.createElement("text");
                deleteButton.innerHTML = '<i class="material-icons">date_range</i>';
                deleteButton.addEventListener("click", function() {
                    deleteAppointment(appointment.id);
                });

                const deleteButtonContainer = document.createElement("div");
                deleteButtonContainer.appendChild(deleteButton);
                deleteList.appendChild(deleteButtonContainer);

                nameList.innerHTML += `<div>${appointment.name}</div>`;
                addressList.innerHTML += `<div>${appointment.address}</div>`;
                emailList.innerHTML += `<div>${appointment.email}</div>`;
                purposeList.innerHTML += `<div>${appointment.purpose}</div>`;
                dateList.innerHTML += `<div>${appointment.date}</div>`;
                timeslotList.innerHTML += `<div class="time">${appointment.timeslot}</div>`;

            });
        }
    };
    xhr.send();

    
        // function showNotification(title, options) {
        //     if (!("Notification" in window)) {
        //         console.log("This browser does not support desktop notifications.");
        //     } else if (Notification.permission === "granted") {
        //         new Notification(title, options);
        //     } else if (Notification.permission !== "denied") {
        //         Notification.requestPermission().then(function (permission) {
        //             if (permission === "granted") {
        //                 new Notification(title, options);
        //             }
        //         });
        //     }
        // }

        // // Add an event listener to the button to trigger the notification
        // document.getElementById("showNotificationBtn").addEventListener("click", function () {
        //     showNotification("New Message", {
        //         body: "You have received a new message.",
        //         icon: "path_to_icon.png", // Replace with the actual path to your icon
        //     });
        // });
    });



