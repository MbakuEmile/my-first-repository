document.getElementById("dataForm").addEventListener("submit", function(event) {
    let isValid = true;
    
    // Get form values
    let name = document.getElementById("name").value.trim();
    let title = document.getElementById("title").value.trim();
    let description = document.getElementById("description").value.trim();

    // Clear previous errors
    document.getElementById("nameError").innerText = "";
    document.getElementById("titleError").innerText = "";
    document.getElementById("descError").innerText = "";

    // Validation
    if (name === "") {
        document.getElementById("nameError").innerText = "Name is required.";
        isValid = false;
    }
    if (title === "") {
        document.getElementById("titleError").innerText = "Title is required.";
        isValid = false;
    }
    if (description === "") {
        document.getElementById("descError").innerText = "Description is required.";
        isValid = false;
    }

    // Prevent form submission if not valid
    if (!isValid) {
        event.preventDefault();
    }
});


