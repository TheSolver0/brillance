<!DOCTYPE html>
<html>
<head>
    <title>Laravel SweetAlert Example</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

    <script>

            Swal.fire({
                title: 'Success!',
                text: 'Vote effectué avec succès',
                icon: 'success',
                confirmButtonText: 'Cool',

            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '/';
            }
        });

    </script>
</body>
</html>
