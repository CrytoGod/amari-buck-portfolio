

    console.log("Works");

    const form = document.querySelector("#contactForm");
    const feedback = document.querySelector("#feedback");

    function regForm(event) {
        event.preventDefault();

        const thisForm = event.currentTarget;
        const url = "sendmail.php";

        const formdata = 
        "fullname=" + thisForm.elements.fullname.value+
        "&email="+thisForm.elements.email.value+
        "&phone="+thisForm.elements.phone.value+
        "&comments="+thisForm.elements.comments.value;
        

        console.log(formdata);

        fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: formdata
        })
        .then(response => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.json();
        })
        .then(response => {
            console.log(response);
            feedback.innerHTML = "";

            if (response.errors) {
                Object.values(response.errors).forEach(error => {
                    const errorElement = document.createElement("p");
                    errorElement.textContent = error;
                    feedback.appendChild(errorElement);
                });
            } else {
                form.reset();
                const messageElement = document.createElement("p");
                messageElement.textContent = response.message;
                feedback.appendChild(messageElement);
            }

            feedback.scrollIntoView({ behavior: 'smooth', block: 'end' });
        })
        .catch(error => {
            console.error(error);
            feedback.innerHTML = "<p>Sorry, there seems to be an issue. Please try again later.</p>";
        });
    }

    form.addEventListener("submit", regForm);

