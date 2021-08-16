const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;


loginBTN = document.querySelector('#login');
loginForm = document.querySelector('#login-form');
//regBTN = document.querySelector('#register-btn')
//resetBTN = document.querySelector('#reset-pass-btn')
form = document.querySelector('form')
formObj = {}

const getFormValues = (formId) => {
    var inputs = document.querySelectorAll('#' + formId + ' input');    
    var formValues = {};

    for (var i = 0; i < inputs.length; i++) {
      formValues[inputs[i].id] = inputs[i].value;
    }

    return formValues;
}

const createSpan = (text) => {
    newSpan = document.createElement('span')
    newSpan.className = 'error'
    newSpan.innerHTML = `<span class="error">${text}</span>`
    return newSpan
}



const validateEmail = (input) => {
    email = document.querySelector('#inputEmail')
    if (!input.match(emailRegex)){
        if (document.querySelector('span .error') !== null){
            document.querySelector('span .error').remove()
            email.className = 'form-control is-invalid'
        }
        email.parentNode.append(
            createSpan('Please enter a valid email.')
        )
    }
    else {
        if (document.querySelector('span .error') !== null){
            document.querySelector('span .error').remove()
            email.className = 'form-control is-valid'
        }
    }
}


// const validatePassword = (obj) => {
//     password = document.querySelector("#inputPassword");
//     if (document.querySelector('span .error') !== null){
//         document.querySelector('span .error').remove()
//     }

//     if("confirmPassword" in obj === false) {
//         console.log("Yay")
//     }

// }

const validatePassword = (obj) => {
    password = document.querySelector("#inputPassword");

    if (document.querySelector('span .error') !== null){
        document.querySelector('span .error').remove()
    }

    if ("confirmPassword" in obj !== false){
        confirmPass = document.querySelector("#confirmPassword");
        if (obj.inputPassword !== obj.confirmPassword || obj.inputPassword === "" || obj.confirmPassword === "") {
            password.className = 'form-control is-invalid'
            confirmPass.className = 'form-control is-invalid'
            password.parentNode.append(
                createSpan('Passwords don\'t match')
            )
        } else {
            password.className = 'form-control is-valid'
            confirmPass.className = 'form-control is-valid'
        }
    } else if (obj.inputPassword === '') {
            password.className = 'form-control is-invalid'
            password.parentNode.append(
                createSpan('Passwords don\'t match'))
    } else {
            password.className = 'form-control is-valid'
        }
    }



const formValid = () => {
    inputs = document.querySelectorAll('form input');
    isValid = false;
    for (i=0; i<inputs.length; i++){
        if (inputs[i].classList.contains('is-invalid')){
            return
        }
        else{
            isValid = true 
        }
    }
    return isValid
}


form.addEventListener('submit', e => {
    
     id = form.id;
     formObj = getFormValues(id)
     for (const key in formObj) {
         if (formObj[key] == ''){
             document.querySelector(`#${key}`).className = 'form-control is-invalid'
         }
         else {
             document.querySelector(`#${key}`).className = 'form-control is-valid'
         }
     }
     validateEmail(formObj.inputEmail)
     validatePassword(formObj)

     if (formValid() === true){
        if (document.querySelector('#form-col') !== null) {
            document.querySelector('#form-col').className += ' d-none'
            document.querySelector('#emailSent').className -= ' d-none'
        }
     } else {
         e.preventDefault();
         return false;
     }

 }, false)




if (loginBTN !== null){
    loginBTN.addEventListener('click', e => {
        e.preventDefault()
        e.target.parentNode.className += ' d-none'
        loginForm.parentNode.className -= ' d-none'
    })
}

//     loginForm.lastElementChild.addEventListener('click', e => {
//         e.preventDefault()
//         formObj = getFormValues('login-form')
//         validateEmail(formObj.inputEmail)
//         if (formObj.inputPassword === ""){
//             if (document.querySelector('span .error') !== null && formObj.inputEmail !==""){
//                 document.querySelector('span .error').remove()
//             }
//             document.querySelector(`#inputPassword`).className = 'form-control is-invalid';
//             document.querySelector('#inputPassword').parentNode.append(
//                 createSpan('Passwords don\'t match')
//             )
//         } else {
//             document.querySelector(`#inputPassword`).className = 'form-control is-valid';
//             document.querySelector('span .error').remove()
//         }
//         formValid()
//     })
// }





// if (regBTN !== null){
//     regBTN.addEventListener('click', e => {
//        e.preventDefault()
//         formObj = getFormValues('registration-form')
//         for (const key in formObj) {
//             if (formObj[key] == ''){
//                 document.querySelector(`#${key}`).className = 'form-control is-invalid'
//             }
//             else {
//                 document.querySelector(`#${key}`).className = 'form-control is-valid'
//             }
//         }
//         validateEmail(formObj.inputEmail)
//         validatePassword(formObj)

//         if (formValid() === true){
//             document.querySelector('#form-col').className += ' d-none'
//             document.querySelector('#emailSent').className -= ' d-none'
//         }

//     }, false)
// }

// if (resetBTN !== null){
//     resetBTN.addEventListener('click', e => {
//         e.preventDefault();
//         input = document.querySelector('#inputEmail');
//         validateEmail(input.value)
//         if (document.querySelector('span .error') === null) {
//             document.querySelector('#form-row').className += ' d-none'
//             document.querySelector('#emailSent').className -= ' d-none'
//         }
//     })
// }

