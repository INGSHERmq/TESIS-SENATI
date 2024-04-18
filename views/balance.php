<?php include "../includes/header.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Formulario de montos mensuales</title>
    <link rel="stylesheet" href="css/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
<h2>INGRESE MONTOS MENSUALES DE  VENTAS</h2>
        <center>
        <form action="procesar.php"  method="post">
                <div class="mb-3">                
                    <label for="eneroV">Enero:</label><br>
                    <input type="number" id="eneroV" name="eneroV" ><br>
                </div>
                <div class="mb-3">
                    <label for="febreroV">Febrero:</label><br>
                    <input type="number" id="febreroV" name="febreroV" ><br>
                </div>
                <div class="mb-3">
                    <label for="marzoV">Marzo:</label><br>
                    <input type="number" id="marzoV" name="marzoV" ><br>
                </div>
                <div class="mb-3">
                    <label for="abrilV">Abril:</label><br>
                    <input type="number" id="abrilV" name="abrilV" ><br>
                </div>
                <div class="mb-3">
                    <label for="mayoV">Mayo:</label><br>
                    <input type="number" id="mayoV" name="mayoV" ><br>
                </div>
                <div class="mb-3">
                    <label for="junioV">Junio:</label><br>
                    <input type="number" id="junioV" name="junioV" ><br>
                </div>
                <div class="mb-3">
                    <label for="julioV">Julio:</label><br>
                    <input type="number" id="julioV" name="julioV" ><br>
                </div>
                <div class="mb-3">
                    <label for="agostoV">Agosto:</label><br>
                    <input type="number" id="agostoV" name="agostoV" ><br>
                </div>
                <div class="mb-3">       
                    <label for="septiembreV">Septiembre:</label><br>
                    <input type="number" id="septiembreV" name="septiembreV" ><br></div>
                <div class="mb-3">
                    <label for="octubreV">Octubre:</label><br>
                    <input type="number" id="octubreV" name="octubreV" ><br>
                </div>
                <div class="mb-3">
                    <label for="noviembreV">Noviembre:</label><br>
                    <input type="number" id="noviembreV" name="noviembreV" ><br>
                </div>
                <div class="mb-3">
                    <label for="diciembreV">Diciembre:</label><br>
                    <input type="number" id="diciembreV" name="diciembreV" ><br><br>
                </div>
                <h2> INGRESE COMPRAS MENSUALES DE LA EMPRESA</h2>
                <form action="procesar.php" method="post">
                <div class="mb-3">
                    <label for="eneroC">Enero:</label><br>
                    <input type="number" id="eneroC" name="eneroC"><br>
                </div>
                <div class="mb-3">
                    <label for="febreroV">Febrero:</label><br>
                    <input type="number" id="febreroC" name="febreroC" ><br>
                </div>
                <div class="mb-3">
                 <label for="marzoC">Marzo:</label><br>
                    <input type="number" id="marzoC" name="marzoC" ><br>
                </div>
                <div class="mb-3">
                    <label for="abrilC">Abril:</label><br>
                    <input type="number" id="abrilC" name="abrilC" ><br>
                </div>
                <div class="mb-3">
                    <label for="mayoC">Mayo:</label><br>
                    <input type="number" id="mayoC" name="mayoC" ><br>
                </div>
                <div class="mb-3">
                    <label for="junioC">Junio:</label><br>
                    <input type="number" id="junioC" name="junioC" ><br>
                </div>
                <div class="mb-3">
                    <label for="julioC">Julio:</label><br>
                    <input type="number" id="julioC" name="julioC" ><br>
                </div>
                <div class="mb-3">
                    <label for="agostoC">Agosto:</label><br>
                    <input type="number" id="agostoC" name="agostoC" ><br>
                </div>
                <div class="mb-3">
                    <label for="septiembreC">Septiembre:</label><br>
                    <input type="number" id="septiembreC" name="septiembreC" ><br>
                </div>
                <div class="mb-3">
                    <label for="octubreC">Octubre:</label><br>
                    <input type="number" id="octubreC" name="octubreC" ><br>
                </div>
                <div class="mb-3">
                    <label for="noviembreC">Noviembre:</label><br>
                    <input type="number" id="noviembreC" name="noviembreC" ><br>
                </div>
                <div class="mb-3">
                    <label for="diciembreC">Diciembre:</label><br>
                    <input type="number" id="diciembreC" name="diciembreC" ><br><br>
                </div>
                <div class="mb-3">
                    <label for="cFiscal">Credito Fiscal</label><br>
                    <input type="number" id="cFiscal" name="cFiscal" ><br><br>
                </div>
                <h2>INGRESE LOS RECIBOS POR HONORARIOS</h2>
                <h3>CONTABLES</h3>
                <form action="procesar.php" method="post">
                <div class="mb-3">
                    <label for="eneroHC">Enero:</label><br>
                    <input type="number" id="eneroHC" name="eneroHC"  ><br>
                </div>
                <div class="mb-3">
                    <label for="febreroHC">Febrero:</label><br>
                    <input type="number" id="febreroHC" name="febreroHC" ><br>
                </div>
                <div class="mb-3">
                    <label for="marzoHC">Marzo:</label><br>
                    <input type="number" id="marzoHC" name="marzoHC"><br>
                </div>
                <div class="mb-3">
                    <label for="abrilHC">Abril:</label><br>
                    <input type="number" id="abrilHC" name="abrilHC"  ><br>
                </div>
                <div class="mb-3">
                    <label for="mayoHC">Mayo:</label><br>
                    <input type="number" id="mayoHC" name="mayoHC"  ><br>
                </div>
                <div class="mb-3">
                    <label for="junioHC">Junio:</label><br>
                    <input type="number" id="junioHC" name="junioHC" ><br>
                </div>
                <div class="mb-3">
                    <label for="julioHC">Julio:</label><br>
                    <input type="number" id="julioHC" name="julioHC" ><br>
                </div>
                <div class="mb-3">
                    <label for="agostoHC">Agosto:</label><br>
                    <input type="number" id="agostoHC" name="agostoHC" ><br>
                </div>
                <div class="mb-3">
                    <label for="septiembreHC">Septiembre:</label><br>
                    <input type="number" id="septiembreHC" name="septiembreHC" ><br>
                </div>
                <div class="mb-3">
                    <label for="octubreHC">Octubre:</label><br>
                    <input type="number" id="octubreHC" name="octubreHC" ><br>
                </div>
                <div class="mb-3">
                    <label for="noviembreHC">Noviembre:</label><br>
                    <input type="number" id="noviembreHC" name="noviembreHC"  ><br>
                </div>
                <div class="mb-3">
                    <label for="diciembreHC">Diciembre:</label><br>
                    <input type="number" id="diciembreHC" name="diciembreHC"><br><br>
                </div>
                <h2>INGRESE LOS RECIBOS POR HONORARIOS</h2>
                <h3>MOVILIDAD</h3>
                <form action="procesar.php" method="post">
                <div class="mb-3">
                    <label for="eneroHM">Enero:</label><br>
                    <input type="number" id="eneroHM" name="eneroHM"  ><br>
                </div>
                <div class="mb-3">
                    <label for="febreroHM">Febrero:</label><br>
                    <input type="number" id="febreroHM" name="febreroHM" ><br>
                </div>
                <div class="mb-3">
                    <label for="marzoHM">Marzo:</label><br>
                    <input type="number" id="marzoHM" name="marzoHM"><br>
                </div>
                <div class="mb-3">
                    <label for="abrilHM">Abril:</label><br>
                    <input type="number" id="abrilHM" name="abrilHM"  ><br>
                </div>
                <div class="mb-3">
                    <label for="mayoHM">Mayo:</label><br>
                    <input type="number" id="mayoHM" name="mayoHM"  ><br>
                </div>
                <div class="mb-3">
                    <label for="junioHM">Junio:</label><br>
                    <input type="number" id="junioHM" name="junioHM" ><br>
                </div>
                <div class="mb-3">
                    <label for="julioHM">Julio:</label><br>
                    <input type="number" id="julioHM" name="julioHM" ><br>
                </div>
                <div class="mb-3">
                    <label for="agostoHM">Agosto:</label><br>
                    <input type="number" id="agostoHM" name="agostoHM" ><br>
                </div>
                <div class="mb-3">
                    <label for="septiembreHM">Septiembre:</label><br>
                    <input type="number" id="septiembreHM" name="septiembreHM" ><br>
                </div>

                <div class="mb-3">
                    <label for="octubreHM">Octubre:</label><br>
                    <input type="number" id="octubreHM" name="octubreHM" ><br>
                </div>
                <div class="mb-3">
                    <label for="noviembreHM">Noviembre:</label><br>
                    <input type="number" id="noviembreHM" name="noviembreHM"  ><br>
                </div>
                <div class="mb-3">
                    <label for="diciembreHM">Diciembre:</label><br>
                    <input type="number" id="diciembreHM" name="diciembreHM"><br><br>
                </div>
                <h2>INGRESE LOS RECIBOS POR HONORARIOS</h2>
                <h3>I.SISTEMAS</h3>
                <form action="procesar.php" method="post">
                <div class="mb-3">
                    <label for="eneroHS">Enero:</label><br>
                    <input type="number" id="eneroHS" name="eneroHS"  ><br>
                </div>
                <div class="mb-3">
                    <label for="febreroHS">Febrero:</label><br>
                    <input type="number" id="febreroHS" name="febreroHS" ><br>
                </div>
                <div class="mb-3">
                    <label for="marzoHS">Marzo:</label><br>
                    <input type="number" id="marzoHS" name="marzoHS"><br>
                </div>
                <div class="mb-3">
                    <label for="abrilHS">Abril:</label><br>
                    <input type="number" id="abrilHS" name="abrilHS"  ><br>
                </div>
                <div class="mb-3">
                    <label for="mayoHS">Mayo:</label><br>
                    <input type="number" id="mayoHS" name="mayoHS"  ><br>
                </div>
                <div class="mb-3">
                    <label for="junioHS">Junio:</label><br>
                    <input type="number" id="junioHS" name="junioHS" ><br>
                </div>
                <div class="mb-3">
                    <label for="julioHS">Julio:</label><br>
                    <input type="number" id="julioHS" name="julioHS" ><br>
                </div>
                <div class="mb-3">
                    <label for="agostoHS">Agosto:</label><br>
                    <input type="number" id="agostoHS" name="agostoHS" ><br>
                </div>
                <div class="mb-3">
                    <label for="septiembreHS">Septiembre:</label><br>
                    <input type="number" id="septiembreHS" name="septiembreHS" ><br>
                </div>
                <div class="mb-3">
                    <label for="octubreHS">Octubre:</label><br>
                    <input type="number" id="octubreHS" name="octubreHS" ><br>
                </div>
                <div class="mb-3">
                    <label for="noviembreHS">Noviembre:</label><br>
                    <input type="number" id="noviembreHS" name="noviembreHS"  ><br>
                </div>
                <div class="mb-3">
                    <label for="diciembreHS">Diciembre:</label><br>
                    <input type="number" id="diciembreHS" name="diciembreHS"><br><br>
                </div>
                <h2>INGRESE LOS RECIBOS POR HONORARIOS</h2>
                <h3>ALIMENTACION</h3>
                <form action="procesar.php" method="post">
                <div class="mb-3">
                    <label for="eneroHA">Enero:</label><br>
                    <input type="number" id="eneroHA" name="eneroHA"  ><br>
                </div>
                <div class="mb-3">
                    <label for="febreroHA">Febrero:</label><br>
                    <input type="number" id="febreroHA" name="febreroHA" ><br>
                </div>
                <div class="mb-3">
                    <label for="marzoHA">Marzo:</label><br>
                    <input type="number" id="marzoHA" name="marzoHA"><br>
                </div>
                <div class="mb-3">
                    <label for="abrilHA">Abril:</label><br>
                    <input type="number" id="abrilHA" name="abrilHA"  ><br>
                </div>
                <div class="mb-3">
                    <label for="mayoHA">Mayo:</label><br>
                    <input type="number" id="mayoHA" name="mayoHA"  ><br>
                </div>
                <div class="mb-3">
                    <label for="junioHA">Junio:</label><br>
                    <input type="number" id="junioHA" name="junioHA" ><br>
                </div>
                <div class="mb-3">
                    <label for="julioHA">Julio:</label><br>
                    <input type="number" id="julioHA" name="julioHA" ><br>
                </div>
                <div class="mb-3">
                    <label for="agostoHA">Agosto:</label><br>
                    <input type="number" id="agostoHA" name="agostoHA" ><br>
                </div>
                <div class="mb-3">
                    <label for="septiembreHA">Septiembre:</label><br>
                    <input type="number" id="septiembreHA" name="septiembreHA" ><br>
                </div>
                <div class="mb-3">
                    <label for="octubreHA">Octubre:</label><br>
                    <input type="number" id="octubreHA" name="octubreHA" ><br>
                </div>
                <div class="mb-3">                
                    <label for="noviembreHA">Noviembre:</label><br>
                    <input type="number" id="noviembreHA" name="noviembreHA"  ><br>
                </div>
                <div class="mb-3">
                    <label for="diciembreHA">Diciembre:</label><br>
                    <input type="number" id="diciembreHA" name="diciembreHA"><br><br>
                </div>

                            <input type="submit" name="registro">

            </form>
        </center>
           
</body>

</html>
<?php include "../includes/footer.php"; ?>