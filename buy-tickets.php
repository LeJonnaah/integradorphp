<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra tickets</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php include_once("layout/nav.php"); ?>

    <main>
        <section class="categories">
            <div class="categories__card">
                <h3>Estudiante</h3>
                <p>Tiene un descuento</p>
                <span class="categories__discount">80%</span>
                <span class="categories__documentation">* presentar documentación</span>
            </div>
            <div class="categories__card">
                <h3>Trainee</h3>
                <p>Tiene un descuento</p>
                <span class="categories__discount">50%</span>
                <span class="categories__documentation">* presentar documentación</span>
            </div>
            <div class="categories__card">
                <h3>Junior</h3>
                <p>Tiene un descuento</p>
                <span class="categories__discount">15%</span>
                <span class="categories__documentation">* presentar documentación</span>
            </div>
        </section>
        
        <div class="ticket-form">
            <h1 class="ticket-form__title">Venta</h1>
            <h2 class="ticket-form__value">Valor de ticket $200</h2>
            <form method="post" action="php/buy-tickets.php">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="inputName" placeholder="Nombre" name="nombre" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="inputLastName" placeholder="Apellido" name="apellido" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Correo" name="correo" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputQuantity" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="inputQuantity" placeholder="Cantidad" min="1" max="10" name="cantidad" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="inputCategory" class="form-label">Categoría</label>
                        <select class="form-select" name="categoria" id="inputCategory" required>
                            <option value="" disabled selected hidden>Selecciona una categoría</option>
                            <option value="student">Estudiante</option>
                            <option value="trainee">Trainee</option>
                            <option value="junior">Junior</option>
                        </select>
                    </div>
                </div>
                <div class="ticket-form__total">
                    <h4 class="ticket-form__total-title">Total a pagar: $<span id="total"></span></h4>
                </div>
                <div class="ticket-form__buttons">
                    <button type="reset" class="ticket-form__button btn btn-success">Borrar</button>
                    <button type="button" id="resume-button" class="ticket-form__button btn btn-success">Resumen</button>
                    <button type="submit" id="buy-button" class="ticket-form__button btn btn-success">Comprar</button>
                </div>
            </form>
        </div>
    </main>

    <?php include_once("layout/footer.php"); ?>
    <script src="js/index.js"></script>
</body>
</html>