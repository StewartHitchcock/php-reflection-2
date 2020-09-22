const nameField = document.querySelector('.nameinput');
const emailField = document.querySelector('.emailinput');
const telephoneField = document.querySelector('.telephoneinput');
const subjectField = document.querySelector('.subjectinput');
const messageField = document.querySelector('.messageinput');

const submit = document.querySelector('#submit');

// function disableButton() {
//     submit.disabled = true;
//  }
 
//  function enableButton() {
//     submit.disabled = false;
//  }


submit.addEventListener('click', () =>{ 

if(nameField.value === ""){
    nameField.classList.add('error');
    // disableButton();
    // setTimeout(enableButton, 1000);
    
} else if (nameField.value != "") {
    nameField.classList.remove('error');
    // enableButton();
}

if(emailField.value.match(/^\w+([.-]?\w+)@\w+([.-]?\w+)(.\w{2,3})+$/)) {
    emailField.classList.remove('error');
    // enableButton();

} else {
    emailField.classList.add('error');
    // disableButton();
    // setTimeout(enableButton, 1000);
    
}

if(telephoneField.value.length > 10) {
    telephoneField.classList.remove('error');
    // enableButton();

} else {
    telephoneField.classList.add('error');
    // disableButton();
    // setTimeout(enableButton, 1000);
    
}

if(subjectField.value === ""){
    subjectField.classList.add('error');
    // disableButton();
    // setTimeout(enableButton, 1000);
    
} else if (subjectField.value != "") {
    subjectField.classList.remove('error');
    // enableButton();
}

if(messageField.value.length == 1 ){
    messageField.classList.add('error');
    // disableButton();
    // setTimeout(enableButton, 1000);
    
    } else if (messageField.value.length > 1) {
    messageField.classList.remove('error');
    // enableButton();
}




})