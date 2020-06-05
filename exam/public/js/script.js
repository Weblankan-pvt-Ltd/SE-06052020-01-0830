$(document).ready(function() {
    loadUsers();
})


$('body').on('click', '#signin', function(e) {
    e.preventDefault();
    // alert("OK");
    var email = $('#email').val();
    var pass = $('#password').val();

    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        type: 'POST',
        url: '/login',
        dataType: 'json',
        data: {
            'email': email,
            'password': pass
        },
        cache: false,
        success: function(data) {
            console.log(data);
            if (data === "ok") {
                window.location.href = "/";
            } else {
                $('#msg').html(data["error"]);
            }
        }
    });

});



function loadUsers() {

    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        type: 'GET',
        url: '/loadsers',
        dataType: 'json',
        cache: false,
        success: function(data) {
            console.log(data);
        }
    });
}