<html>

<head>
    <script src="jquery-3.6.1.js"></script>
    <link rel="stylesheet" href="dist/css/lightbox.css">
    <script src="dist/js/lightbox.js"></script>

    <a href="img.jpg" data-lightbox="image-1" data-title="My caption1">Image #1</a>
    <a href="img2.jpg" data-lightbox="image-2" data-title="My caption2">Image #2</a>

    <a href="img.jpg" data-lightbox="image-3" data-title="My caption3"><img src="img.jpg" style="width: 100px"></a>
    <a href="img2.jpg" data-lightbox="image-4" data-title="My caption4"><img src="img2.jpg" style="width: 100px"></a>

    <script>
        lightbox.option({
            'resizeDuration': 900,
            'wrapAround': true
        })
    </script>

</head>

<body>

</body>

</html>