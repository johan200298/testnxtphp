<!DOCTYPE html>
<html>

<head>
    <title>NexxToys-Clientes</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilos/general.css">

</head>

<body>


    <?php include('header.php') ?>

    <div>
        <div class="ontop">
            <div class="col-5" style="align-self: center;">
                <h1 class="f1-ontop" style="background-color: #80b72b;">Nuestros clientes</h1>
            </div>
        </div>
        <div class="vertical single-featured-image-header" style="overflow: hidden;">
            <div class="box four"><img src="imgs/clientes.jpg" class="" style="width:100%"></div>
        </div>
    </div>

    <div>
        <div style="text-align: -webkit-center;">
            <div class="w3-container w3-content w3-padding-64" id="band">
                <div class="col-11">
                    <p>
                        En Nexx Toys creemos en la construcción de marcas y nos centramos en las
                        estrategias de marketing que se añaden una a otra para ofrecer a nuestros
                        clientes el apoyo que ellos merecen atendiéndolos de manera integral.
                    </p>
                </div>
            </div>

        </div>
    </div>

    <div>
        <div style="text-align: -webkit-center;">
            <div class="w3-container w3-content w3-center" id="band">
                <div class="grid-container">
                    <div class="grid-item">
                        <img src="logocadenas/plazavea.png" alt="">
                    </div>
                    <div class="grid-item">
                        <img src="logocadenas/tottus.png" alt="">
                    </div>
                    <div class="grid-item">
                        <img src="logocadenas/oeschele.png" alt="">
                    </div>
                    <div class="grid-item">
                        <img src="logocadenas/ripley.png" alt="">
                    </div>
                    <div class="grid-item">
                        <img src="logocadenas/metro.png" alt="">
                    </div>
                    <div class="grid-item">
                        <img src="logocadenas/falabella.png" alt="">
                    </div>
                    <div class="grid-item">
                        <img src="logocadenas/tailoy.png" alt="">
                    </div>
                    <div class="grid-item">
                        <img src="logocadenas/wong.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div>
        <div class="col-4 brochuremsg">
            <h1 style="width: 68%;">Para descargar
                nuestro BROCHURE
                por favor llene sus
                datos. Gracias</h1>
        </div>
        <div class="row" style="margin-top: 5%">
            <div class="col-4" style="background-color: #7abb43;">
            </div>
            <div class="col-8" style="background-color: #6e2b8c;">
                <div class="secondbroc">
                    <label for="" style="font-size: 3vw;">
                        Para descargar
                        nuestro BROCHURE
                        por favor llene sus
                        datos. Gracias
                    </label>

                </div>
                <img src="imgs/niñas.png" class="wave girl-clientes">
            </div>
        </div>

    </div>
    <div>
        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
            <form>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label formy">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label formy">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label formy">Teléfono</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="phone" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="empresa" class="col-sm-2 col-form-label formy">Empresa</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="empresa" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="empresa" class="col-sm-2 col-form-label formy"></label>
                    <div class="col-sm-6" style="text-align: -webkit-left;">
                        <button type="submit" class="showbtn">
                            Enviar
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <?php include('footer.php'); ?>

</body>

</html>