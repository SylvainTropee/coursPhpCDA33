let input = document.getElementById('model')

input.addEventListener('input', function () {

    if (this.value.length >= 1) {

        fetch('back.php?model=' + this.value)
            .then(response => response.json())
            .then(data => {
                console.log(data);
               data.forEach(function(val){
                   let option = document.createElement('option')
                   option.value = val.modele;
                   document.getElementById('carModel').append(option)
               })
            })


    }
})