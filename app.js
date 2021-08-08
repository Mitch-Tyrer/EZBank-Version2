const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;


loginBTN = document.querySelector('#login');
loginForm = document.querySelector('#login-form');
regBTN = document.querySelector('#register-btn')

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

const removeError = (element) => {
    target.prev(parent).find(element).remove();
}



const validateEmail = (input) => {
    email = document.querySelector('#inputEmail')
    if (!input.match(emailRegex)){
        if (document.querySelector('span .error') !== null){
            document.querySelector('span .error').remove()
        }
        email.parentNode.append(
            createSpan('Please enter a valid email.')
        )
    }
    else {
        document.querySelector('span .error').remove()
    }
}

if (loginBTN !== null){
    loginBTN.addEventListener('click', event => {
        event.target.parentNode.className += ' d-none'
        loginForm.parentNode.className -= ' d-none'
    })

    loginForm.addEventListener('click', e => {
        formObj = getFormValues('login-form')
        validateEmail(formObj.inputEmail)
    })
}

if (regBTN !== null){
    regBTN.addEventListener('click', e => {
        formObj = getFormValues('registration-form')
        console.log(formObj)
        validateEmail(formObj.inputEmail)
    }, false)
}


