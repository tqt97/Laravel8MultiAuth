<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- SummerNote -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">

    <title>File Manager and SummerNote</title>
</head>

<body>

    <div class="container">
        <div class="form-group">

        </div>
        <textarea id="summernote"></textarea>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- SummerNote js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>

    <script>
        $(document).ready(function() {
            // File manager button (image icon)
            const FMButton = function(context) {
                const ui = $.summernote.ui;
                const button = ui.button({
                    contents: '<i class="note-icon-picture"></i> ',
                    tooltip: 'File Manager',
                    click: function() {
                        window.open('/file-manager/summernote', 'fm', 'width=2000,height=1000');
                    }
                });
                return button.render();
            };
            $('#summernote').summernote({
                toolbar: [
                    // [groupName, [list of button]]
                    ['view', ['fullscreen', 'codeview', 'help']],
                    ['fm-button', ['fm']],
                    ['insert', ['link', 'unlink', 'video']],
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['table', ['table']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['custom', ['examplePlugin']],
                    ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                    ['float', ['floatLeft', 'floatRight', 'floatNone']],
                    ['remove', ['removeMedia']],
                ],
                buttons: {
                    fm: FMButton
                },
                blockquoteBreakingLevel: 2,
                lineHeights: ['0.2', '0.3', '0.4', '0.5', '0.6', '0.8', '1.0', '1.2', '1.4', '1.5', '2.0',
                    '3.0'
                ],
                dialogsInBody: true,
                codeviewFilter: false,
                codeviewIframeFilter: true,
            });
        });
        // set file link
        function fmSetLink(url) {
            $('#summernote').summernote('insertImage', url);
        }
    </script>
</body>

</html>
