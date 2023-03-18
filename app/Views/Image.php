<!DOCTYPE html>
<html>

<head>
    <title>Codeigniter 4 Resize Image With Image Manipulation Tutorial Example - Nicesnippets.com</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5" style="max-width: 550px">
        <h2 class="mb-4 text-center">Codeigniter 4 Resize Image With Image Manipulation Tutorial Example</h2>

        <form method='POST' action='<?php echo base_url("upload"); ?>' enctype='multipart/form-data'>

            <div class="form-group">
                <label for="formFileLg" class="form-label">Select image :</label>
                <input class="form-control form-control-lg" type="file" name="gambarX">
            </div>

            <div class="d-grid mt-3">
                <input type="submit" value="Upload Image" class="btn btn-outline-primary" />
            </div>
        </form>
    </div>
</body>

</html>