function sendEmail() {
    $(document).ready(() => {
        const formData = {
            name: $("#my-name").val(),
            email: $("#my-email").val(),
            problem: $("#my-problem").val(),
            file: $("#my-file").val().split('\\').pop()
        };

        console.log(JSON.stringify(formData))

        $.ajax({
            type: "POST",
            url: "../../app/send_email.php",
            data: JSON.stringify(formData), // Send data as JSON
            contentType: "application/json", // Set content type
            dataType: "json",
        }).done((data) => {
            console.log(data);
        });
    })
}