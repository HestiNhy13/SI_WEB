<!DOCTYPE html>
<html>
<head>
    <title>Dropzone Image Upload in Laravel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Dropzone Image Upload in Laravel</h1>
                <br>
                <form action="{{ route('dropzone.store') }}" method="post" enctype="multipart/form-data" class="dropzone" id="image-upload">
                    @csrf
                    <h3 class="text-center">Upload Multiple Images</h3>
                </form>
                <button type="button" id="button-upload" class="btn btn-primary">Upload</button>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize: 10, // Maksimal ukuran file 10MB
            acceptedFiles: ".jpeg,.jpg,.png,.gif", // Format yang diizinkan
            addRemoveLinks: true, // Tambahkan tombol hapus file
            createImageThumbnails: true, // Buat thumbnail gambar
            autoProcessQueue: false, // Jangan langsung upload otomatis
            parallelUploads: 5, // Upload 5 file sekaligus
            dictDefaultMessage: "Seret dan lepas gambar di sini atau klik untuk mengunggah.",

            init: function () {
                var myDropzone = this;

                // Aksi ketika tombol upload diklik
                $("#button-upload").click(function (e) {
                    e.preventDefault();
                    myDropzone.processQueue();
                });

                myDropzone.on('sending', function(file, xhr, formData) {
                    var data = $("#image-upload").serializeArray();
                    $.each(data, function(key, el) {
                        formData.append(el.name, el.value);
                    });
                });

                myDropzone.on('success', function(file, response) {
                    console.log("File berhasil diunggah:", response);
                });

                myDropzone.on('error', function(file, response) {
                    console.log("Gagal mengunggah:", response);
                });
            }
        };
    </script>
</body>
</html>
