const form = document.getElementById("form");
const fullname = document.getElementById("fullname");
const address1 = document.getElementById("address1");
const address2 = document.getElementById("address2");
const city = document.getElementById("city");
const state = document.getElementById("state");
const zipcode = document.getElementById("zipcode");

zipcode.addEventListener('input', (e) => {
  if (isNaN(e.target.value)){
    e.target.value = e.target.value.slice(0, e.target.value.length-1);
  }
  if (e.target.value.length > this.maxLength){
    this.value.slice(0, this.maxLength);
  }
})

form.addEventListener("submit", (e) => {
  e.preventDefault();
  checkInputs();
});

function checkInputs() {
  // get the values from the inputs
  const fullnameValue = fullname.value.trim();
  const address1Value = address1.value.trim();
  const cityValue = city.value.trim();
  const zipcodeValue = zipcode.value.trim();

  if (fullnameValue === "") {
    // show error
    // add error class
    setErrorFor(fullname, "fullname cannot be blank");
  } else {
    // add success class
    setSuccessFor(fullname);
  }

  if (address1Value === "") {
    // show error
    // add error class
    setErrorFor(address1, "address cannot be blank");
  } else {
    // add success class
    setSuccessFor(address1);
  }

  if (cityValue === "") {
    // show error
    // add error class
    setErrorFor(city, "city cannot be blank");
  } else {
    // add success class
    setSuccessFor(city);
  }

  if (/^\d{5}(-\d{4})?$/.test(zipcodeValue) === false){
    setErrorFor(zipcode, "invalid zipcode");
  }else{
    setSuccessFor(zipcode);
  }
}

function setErrorFor(input, message) {
  const formControl = input.parentElement; // .form-control
  const span = formControl.querySelector("span");

  span.innerText = message;
  formControl.classList.add("error");
}

function setSuccessFor(input, message){
  const formControl = input.parentElement; // .form-control
  formControl.classList.remove("error");
}
