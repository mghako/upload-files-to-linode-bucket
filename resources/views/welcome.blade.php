<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-auto my-10">
        <div class="w-3/4 mx-auto">
            <form action="/upload-image" enctype="multipart/form-data" method="POST">
                @csrf
                @method('POST')
                <input type="file" name="image" id="image_upload" class="">
                <input type="submit" value="Upload" class="bg-green-400 text-white py-1 px-2 rounded">
            </form>
        </div>
        <div class="w-2/4">&nbsp;</div>
    </div>
</body>
</html>