function validateForm(){
    var firstName = document.forms["form"]["FirstName"].value;
    var lastName = document.forms["form"]["LastName"].value;
    var email = document.forms["form"]["Email"].value;

    if (firstName == "" || lastName == "" || email == "") 
    {
        alert("All fields must be filled out");
        return false;
    }
    if (password != retypePassword) {
        alert("Passwords do not match");
        return false;
    }
    var regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
    if (!regex.test(password)) {
    alert("Password must contain at least 8 characters, including at"+
        "least one number, one uppercase, and one lowercase letter.");

    return false;
}
    return true;
}

