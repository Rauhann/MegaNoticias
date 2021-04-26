var base_url = $('#url').val();

function register() {
    axios({
        method: 'post',
        url: base_url + '/registrar',
        data: {
            'email': $('#register').val()
        }
    })
        .then(response => {
            console.log('qui', response.data);
            Swal.fire({
                title: response.data[0],
                text: response.data[2],
                icon: response.data[1],
                confirmButtonText: 'Ok'
              })
        })
        .catch(error => {
            console.log(error)
        })
}


