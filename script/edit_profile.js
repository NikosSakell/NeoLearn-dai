// This function updates the information on basicInfo field
// The information is temporarily changed in the fields: Name, Email and Phone Number
function changeText() {
  let name = document.getElementById("nameHolder");
  let email = document.getElementById("emailHolder");
  let phoneNumber = document.getElementById("phoneHolder");

  let changeName = document.getElementById("fullname").value;
  let changeEmail = document.getElementById("email").value;
  let changePhoneNumber = document.getElementById("phoneNumber").value;

  console.log("Input values accessed succesfully!");
  console.log(changeName);
  console.log(changeEmail);
  console.log(changePhoneNumber);

  if (changeName !== "" && changeEmail !== "" && changePhoneNumber !== "") {
    name.textContent = changeName;
    email.textContent = changeEmail;
    phoneNumber.textContent = changePhoneNumber;
  } else {
    alert("Please fill all fields!");
  }
}

// This function sets the src attribute of the profile Image to the url of the uploaded file
// in the modal
function displayImage() {
  // Get the file input and image elements
  let fileInput = document.getElementById("formFile");
  let uploadedImage = document.getElementById("profilePhoto");

  // Check if a file is selected
  if (fileInput.files && fileInput.files[0]) {
    // Get the selected file
    let selectedFile = fileInput.files[0];

    // Create a FileReader to read the file
    let reader = new FileReader();

    // Set a callback function to handle the file reading
    reader.onload = function (e) {
      // Set the src attribute of the image to the data URL
      uploadedImage.src = e.target.result;
    };

    // Read the selected file as a data URL
    reader.readAsDataURL(selectedFile);
  }
}

// This function deletes the src attribute of the profile Image
function deleteImage() {
  let uploadedImage = document.getElementById("profilePhoto");
  uploadedImage.src = "images/blank-profile-picture-973460_1280.png";
}
