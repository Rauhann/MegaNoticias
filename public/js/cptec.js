var base_url = $('#url').val();

axios({
    method: 'post',
    url: base_url + '/api/previsoes',
    data: {
        'quantidade': 5
    }
})
    .then(response => {
        $('#forecast-tbody').html('');
        $.each(response.data, function (key, value) {
            $.each(value, function (key2, v) {
                $('#forecast-tbody').append(
                    '<tr>' +
                    '<td>' + v.nome + '</td>' +
                    '<td>' + v.data + '</td>' +
                    '<td>' + v.temperatura_max + '</td>' +
                    '<td>' + v.temperatura_min + '</td>' +
                    '</tr>'
                );
                return false;
            });
        });
    })
    .catch(error => {
        console.log(error)
    })
