const enter = document.querySelectorAll('input');

const values = {
    email: /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
    password: /^[\w@-]{5,20}$/
};

function validate(field, regex) 
{
    if(regex.test(field.value)) field.className = "valid";
    else  field.className = "invalid";
}

enter.forEach((input) => {
    input.addEventListener('keyup', (e) => 
    {
        validate(e.target, values[e.target.name])
    });
});