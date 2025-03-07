
    console.log("Works");
    
    const form = document.querySelector("#contactForm");
    const feedback = document.querySelector("#feedback");


    function regForm(event) {
        // prevent from default settings
        event.preventDefault();
        // console.log("regForm Called");

        const thisForm = event.currentTarget;
        const url = "sendmail.php";

        // console.log(thisForm.elements);
        const formdata = 
        "fullname=" + thisForm.elements.fullname.value +
        "&email=" + thisForm.elements.email.value +
        "&phone=" + thisForm.elements.phone.value +
        "&comments=" + thisForm.elements.comments.value;
        console.log(formdata);
        fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: formdata
        })
        .then(response => response.json())
        .then(response => {
            console.log(response);
            feedback.innerHTML = "";
            if(response.errors) {
                response.errors.forEach(error => {
                    const errorElement = document.createElement("p");
                    errorElement.textContent = error;
                    feedback.appendChild(errorElement);
                })
            } else {
                form.reset();
                const messageElement = document.createElement("p");
                messageElement.textContent = response.message;
                feedback.appendChild(messageElement);
            }
            feedback.scrollIntoView({behavior: 'smooth', block: 'end'});
        })
        .catch(error=> {
            console.log(error);
            feedback.innerHTML = "";
            feedback.innerHTML = `<p>Sorry there seems to be an issue. Either you're using an older browser or javascript is disabled.</p>`
        })

    }

    form.addEventListener("submit", regForm);