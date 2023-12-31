<!DOCTYPE html>
<html lang="es-AR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrador PHP</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include_once("layout/nav.php"); ?>

    <main>
        <section class="banner">
            <div class="container">
                <div class="container-opacity">
                    <div class="inner-container">
                        <h1>Conf Bs As</h1>
                        <p>Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el
                            conocomiento y experiencia de los expertos que están creando el futuro de Internet. Ven a
                            conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer
                            nivdel que tenemos para tí. Te esperamos!</p>
                        <div class="flex-buttons">
                            <a href='#speakers' type="button" class="btn btn-outline-light">Quiero ser orador</a>
                            <a href="buy-tickets.php" type="button" class="btn btn-success">Comprar tickets</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="speakers-section">
            <h2 class="speakers-section__title">Conoce a los <span class="speakers-section__title-span"> oradores</span>
            </h2>
            <div class="speakers-section__cards">
                <div>
                    <div class="card" style="width: 24rem;">
                        <img src="img/steve.jpg" class="card-img-top" alt="Steve Jobs">
                        <div class="card-body">
                            <div>
                                <span class="badge text-bg-warning">JavaScript</span>
                                <span class="badge text-bg-info">React</span>
                            </div>
                            <h5 class="card-title">Steve Jobs</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim fugiat
                                eius aliquam modi dolorum maiores, repellat voluptates provident nulla vel! </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card" style="width: 24rem;">
                        <img src="img/bill.jpg" class="card-img-top" alt="Bill Gates">
                        <div class="card-body">
                            <div>
                                <span class="badge text-bg-warning">JavaScript</span>
                                <span class="badge text-bg-info">React</span>
                            </div>
                            <h5 class="card-title">Bill Gates</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim fugiat
                                eius aliquam modi dolorum maiores, repellat voluptates provident nulla vel! </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card" style="width: 24rem;">
                        <img src="img/ada.jpeg" class="card-img-top" alt="Ada Lovelace">
                        <div class="card-body">
                            <div>
                                <span class="badge text-bg-secondary">Negocios</span>
                                <span class="badge text-bg-danger">Startups</span>
                            </div>
                            <h5 class="card-title">Ada Lovelace</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim fugiat
                                eius aliquam modi dolorum maiores, repellat voluptates provident nulla vel! </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="honolulu-section">
            <img src="img/honolulu.jpg" alt="Playa Honolulu">
            <div class="honolulu-section__right">
                <h2>Bs As - Octubre</h2>
                <p>Buenos Aires es la provincia y localidad más grande del estado de Argentina, en los Estados Unidos.
                    Honolulu es la más sureña de entre las principales ciudades estadounidenses. Aunque el nombre de
                    Honolulu se refiere al área urbana en la costa sureste de la isla de Oahu, la ciudad y el condado de
                    Honolulu han formado una ciudad-condado consolidada que cubre toda la ciudad &lpar;aproximadamente
                    600 km&sup2; de superficie&rpar;.</p>
                <button type="button" class="btn btn-outline-light">Conocé más</button>
            </div>
        </section>

        <section class='become-section' id="speakers">
            <h2 class="become-section__title">Conviértete en un <span class="become-section__title-span"> orador</span></h2>
            <p>Anótate como orador para dar una <a href="#" class="become-section__link">charla ignite</a>. Cuéntanos de qué quieres hablar!</p>
            <form action="php/become-speaker.php" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre" aria-label="Username" name="nombre" required>
                    <input type="text" class="form-control" placeholder="Apellido" aria-label="Server" name="apellido" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Sobre qué quieres hablar?" name="tema" required></textarea>
                    <label for="exampleFormControlTextarea1" class="form-label">Recuerda incluir un título para tu charla</label>
                </div>
                <button type="submit" id="send-button" class="btn btn-success">Enviar</button>
            </form>
        </section>
    </main>

    <?php include_once("layout/footer.php"); ?>
    
</body>

</html>