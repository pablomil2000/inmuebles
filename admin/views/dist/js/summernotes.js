$(document).ready(function () {

    $('#summernote').summernote({
        height: 300,
        lang: 'es-ES',
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['link', 'picture', 'video']],

            // ['fontsize', ['fontsize']],
            // ['color', ['color']],
            // ['height', ['height']]
        ]
        // airMode: true


    });

    let buttons = $('.note-editor button[data-toggle="dropdown"]');

    buttons.each((key, value) => {
        $(value).on('click', function (e) {
            $(this).closest('.note-btn-group').toggleClass('open');
        })
    })

});

