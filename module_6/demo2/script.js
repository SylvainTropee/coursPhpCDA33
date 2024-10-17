let button = document.getElementById('btnSend');
button.addEventListener('click', function () {

    let data = JSON.stringify({name : "Sylvain"});

    fetch("back.php", {method : 'POST', body : data})
        .then(response => response.json())
        .then(data => console.log(data));
})