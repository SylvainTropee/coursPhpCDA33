let form = document.getElementById('form')

form.addEventListener('submit', function (event) {
    event.preventDefault();


    const inputs = document.querySelectorAll('input');
    let message  =''

    inputs.forEach(function (input){
        if(input.value == ''){
            message += "erreur sur un champs"
        }

    })

    if(message){
        alert(message);
    }else{
        form.submit();
    }

})