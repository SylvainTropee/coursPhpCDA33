let input = document.getElementById('model')

input.addEventListener('input', function () {

    if (this.value.length >= 1) {

        fetch('back.php?model=' + this.value)
            .then(response => response.text())
            .then(html => {
                document.getElementById('carModel').innerHTML = html;
            })


    }
})