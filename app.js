const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;


loginBTN = document.querySelector('#login');
loginForm = document.querySelector('#login-form');
regBTN = document.querySelector('#register-btn')
resetBTN = document.querySelector('#reset-pass-btn')
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

const validatePassword = (obj) => {
    if (obj.inputPassword !== obj.confirmPassword || obj.inputPassword === "" || obj.confirmPassword === "") {
        if (document.querySelector('span .error') !== null){
            document.querySelector('span .error').remove()
        }
        document.querySelector(`#inputPassword`).className = 'form-control is-invalid'
        document.querySelector(`#confirmPassword`).className = 'form-control is-invalid'
        document.querySelector('#inputPassword').parentNode.append(
            createSpan('Passwords don\'t match')
        )
    } else {
        if (document.querySelector('span .error') !== null){
            document.querySelector('span .error').remove()
        }
        document.querySelector(`#inputPassword`).className = 'form-control is-valid'
        document.querySelector(`#confirmPassword`).className = 'form-control is-valid'
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




if (loginBTN !== null){
    loginBTN.addEventListener('click', event => {
        event.target.parentNode.className += ' d-none'
        loginForm.parentNode.className -= ' d-none'
    })

    loginForm.lastElementChild.addEventListener('click', e => {
        formObj = getFormValues('login-form')
        validateEmail(formObj.inputEmail)
        if (formObj.inputPassword === ""){
            if (document.querySelector('span .error') !== null && formObj.inputEmail !==""){
                document.querySelector('span .error').remove()
            }
            document.querySelector(`#inputPassword`).className = 'form-control is-invalid';
            document.querySelector('#inputPassword').parentNode.append(
                createSpan('Passwords don\'t match')
            )
        } else {
            document.querySelector(`#inputPassword`).className = 'form-control is-valid';
            document.querySelector('span .error').remove()
        }
        formValid()
    })
}

if (regBTN !== null){
    regBTN.addEventListener('click', e => {
       
        formObj = getFormValues('registration-form')
        console.log(formObj)
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
            document.querySelector('#form-col').className += ' d-none'
            document.querySelector('#emailSent').className -= ' d-none'
        }

    }, false)
}

if (resetBTN !== null){
    resetBTN.addEventListener('click', e => {
        input = document.querySelector('#inputEmail');
        validateEmail(input.value)
        if (document.querySelector('span .error') === null) {
            document.querySelector('#form-row').className += ' d-none'
            document.querySelector('#emailSent').className -= ' d-none'
        }
    })
}

