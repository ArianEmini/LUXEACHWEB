

$(document).ready(function() {
    $('#manage_user3').submit(function(e) {
        e.preventDefault()
  
        $.ajax({
            url: 'process.php',
            data: $(this).serialize(),
            method: 'POST',
            success: function(resp) {
                $('#error_msg').html(resp);
            }
        })
    })
  })
  