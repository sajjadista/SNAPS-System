<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product | SNAPS Admin Portal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">



</head>

<body>

    <script>
        var loadFile = function(event) {
            var image = document.getElementById('uploaded-photo');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>

    <div class="container panel center-screen add-product py-4 px-3">

        <div class="row my-3">
            <div class="col d-flex justify-content-center">
                <h2>Edit Product Details</h2>
            </div>
        </div>
        <hr class="section-divider">


        <div class="row my-3">
            <div class="col d-flex justify-content-center">
                <img id="uploaded-photo" class="img-fluid" src="../assets/photo-placeholder.svg" alt="Photo Placeholder">
            </div>
        </div>

        <div class="row mt-3 mb-4">
            <div class="col-6 d-flex justify-content-center">
                <label class="label-theme" for="upload-picture">Upload product picture:</label>

            </div>

            <div class="col-6 d-flex justify-content-center">
                <input type="file" id="upload-picture" onchange="loadFile(event)" accept="image/*">
            </div>
        </div>


        <div class="row mb-1">
            <div class="col d-flex justify-content-center">
                <label class="label-theme">Product name:</label>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col d-flex justify-content-center">
                <input class="textfield-theme" type="text" id="product-name" value="Chicken sauce">
            </div>
        </div>

        <div class="row mb-1">
            <div class="col d-flex justify-content-center">
                <label class="label-theme">Product price:</label>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col d-flex justify-content-center">
                <input class="textfield-theme" type="text" id="product-price" value="33.10">
            </div>
        </div>

        <div class="row mb-1">
            <div class="col d-flex justify-content-center">
                <label class="label-theme">Variations:</label>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col d-flex justify-content-center">
                <input class="textfield-theme" type="text" id="product-variation" value="Food,Spicy">
            </div>
        </div>

        <div class="row mb-1">
            <div class="col d-flex justify-content-center">
                <label class="label-theme">Description:</label>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col d-flex justify-content-center">
                <textarea class="textarea-theme" name="description" id="description" cols="40" rows="5">A very nice and spicy sauce</textarea>
            </div>
        </div>

        <div class="row mb-1">
            <div class="col d-flex justify-content-center">
                <label class="label-theme">Payment method:</label>
            </div>
        </div>

        <div class="row mb-3">

            <div class="col d-flex justify-content-center">
                <div class="dropdown textfield-theme">
                    <button class="dropdown-toggle dropdown-theme" type="button" id="payment-option" data-bs-toggle="dropdown">
                        Payment method
                    </button>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item" id="pay-in-store">Pay in Store</li>
                        <li class="dropdown-item" id="online-payment">Online Payment</li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="row my-3">
            <div class="col d-flex justify-content-center">
                <button class="button-theme">Save details</button>
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>