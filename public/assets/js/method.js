$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#saveBtn').click(function () {
        $('#saveBtn').attr('disabled', true);
        var data = $('#add')[0];
        var url = $('#addemployee').data('url');
        $('.error-messages').html('');
        var form = new FormData(data);
        //console.log(form);
        $.ajax({
            url: url,
            method: 'post',
            processData: false,
            contentType: false,
            data: form,

            success: function (response) {
                $('#addemployee').modal('hide');
            
                successRes(response);

            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    displayErrors(errors);
                    //$('#saveBtn').attr('disabled', false);
                }else{
                    $('.error-messagess').html('<span class="text-danger">Something went wrong. Please try again later.</span>');
                    $('#saveBtn').attr('disabled', false);
                }
            }
        });

    });

    function successRes(response) {
        swal("Success", response.success, "success");
        $('#student-table').DataTable().draw();
        $('#add')[0].reset();
        $('#saveBtn').attr('disabled', false);
        return true;
    };

    function displayErrors(errors){
        $('.error-messages').html('');

    $.each(errors, function (key, value) {
        // Update the error container next to the corresponding input field
        $('#' + key + 'Error').html('<span class="text-danger">' + value + '</span>');
    });

    $('#saveBtn').attr('disabled', false);
    };
});