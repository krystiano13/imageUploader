<?php
    require_once "./vendor/autoload.php";
    $render = new App\Render();
    $render -> start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Uploader</title>
    <meta name="author" content="Krystian Zieja">
    <meta name="description" content="Simple image uploader">
    <meta name="keywords" content="Image, Upload, Images, Uploader">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" 
        crossorigin="anonymous"
    >
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" 
        crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./index.css" />
    <script src="https://cdn.jsdelivr.net/npm/macy@2"></script>
    <script src="./gallery.js"></script>
</head>
<body>
    <main class="container-fluid row">
        <form action="" method="post" enctype="multipart/form-data" class="col-lg-6 col-md-12 d-flex flex-column align-items-center justify-content-center">
            <input 
                accept="image/png, image/gif, image/jpeg" 
                type="file" 
                class="form-control-file" 
            />
            <button class="btn btn-primary">Upload</button>
        </form>
        <section class="images col-lg-6 col-md-12 ">
            <div class="container-images">
                
            </div>
        </section>
    </main>
</body>
</html>