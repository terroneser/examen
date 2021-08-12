<!doctype html>
<html>
	<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="styles/estilos.css">

    </head>
	<body class="bg-light container">
        <h1 class="display-4 text-danger">Programacion</h1>
		<hr />
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/cancun.png" alt="..." width="620px" height="450px">
              </div>
              <div class="carousel-item ">
                <img class="d-block w-100" src="img/riviera.png" alt="" width="620px" height="450px">
              </div>
              <div class="carousel-item ">
                <img class="d-block w-100" src="img/guanajuato.png" alt="" width="620px" height="450px">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
        <main>
            <!-- CABECERA -->
            <section class="row">
                <div class="col">
                    <div class="card"> <!-- cuadro -->
                        <div class="card-header">
                            <h3 class="card-title">Formulario de Reserva</h3>
                        </div>
                        <div class="card-body">
                            <form class="row" id="formCabecera" name="formulario1">
                                <div class="form-group col-md-4">
                                    <label for="">Destino/Ciudad</label>
                                    <select id="selectDestino" class="form-control" onclick="muestraSelect(this.value)">
                                        
                                    <option value="0">--Seleccione--</option>
                                        <?php include "./includes/_db.php" ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Hotel</label>
                                    <select id="selectHoteles" class="form-control" onclick="hoteles(this.value)">
                                        <option value="0">--Seleccione--</option>
                                        <?php include "./includes/_hoteles.php" ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Fecha</label>
                                    <input 
                                        type="date" 
                                        class="form-control"
                                        id="inputFecha"
                                    >
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Habitacion</label>
                                    <select id="selectHabitacion" class="form-control">
                                        <option value="0">--Seleccione--</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="">Adultos</label>
                                    <input 
                                        type="text" 
                                        class="form-control"
                                        id="inputAdulto"
                                    >
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="">Menores</label>
                                    <input 
                                        type="text" 
                                        class="form-control"
                                        id="inputMenores"
                                    >
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Total</label>
                                    <input 
                                        type="nomber" 
                                        class="form-control"
                                        id="inputTotal"
                                    >
                                </div>
                                <div class="form-group col-md-12 contenedor-boton">
                                    <button class="btn btn-primary" type="submit" id="btnConsultar">Consultar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <script src="./js/validacion.js"></script>
        <script src="./js/app.js"></script>
	</body>
</html>