$(document).ready(function (){
    $('.js-user-autocomplete').each(function () {
        var autocmpleteUrl = $(this).data('autocomplete-url');

        $(this).autocomplete({hint: false}, [
            {
                source: function (query, cb){
                    $.ajax({
                        url: autocmpleteUrl+'?query='+query
                    }).then(function (data) {
                        cb(data.users);
                    })
                },
                displayKey: 'email',
                debounce: 500
            }
        ])
    })
});