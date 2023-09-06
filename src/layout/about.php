<?php
$link = "https://servicentrosuroeste.com/nosotros";
$page_title = "¿Quienes somos? | Servicentro Taller Mecánico Suroeste Antioqueño";
$description = "Nos ubicamos en Fredonia. Brindamos servicios de alta calidad en el Suroeste Antioqueño | Venecia, Amagá, La Pintada, Támesis, Titiribí y más."
?>

<?php require('../components/header.php') ?>

<main>
    <div class="welcome about">
        <section class="welcome__section about">
            <h1 class="welcome__title about">¿Quiénes somos?</h1>
            <p class="welcome__paragraph about">Somos un taller automotriz dedicado a brindar soluciones efectivas y
                personalizadas. Estamos ubicados en Fredonia siendo nuestros clientes principalmente del Suroeste
                Antioqueño, nuestra amabilidad y valores como equipo nos definen y le dan sentido a cada uno de nuestros
                trabajos procurando siempre la satisfacción de nuestros clientes.</p>
        </section>
        <section class="welcome__slider">
            <div class="slide active"><img src="/public/assets/services_imgs/afinacionMotor.jpg"
                    alt="afinación de motor" class="slide__img"></div>
            <div class="slide"><img src="/public/assets/services_imgs/pintura.jpg" alt="servicio de latonería y pintura"
                    class="slide__img"></div>
            <div class="slide"><img src="/public/assets/services_imgs/lavado.jpg" alt="servicio de lavado"
                    class="slide__img"></div>
            <div class="slide"><img src="/public/assets/services_imgs/soldadura.jpg" alt="servicio de soldadura"
                    class="slide__img"></div>
            <div class="slide"><img src="/public/assets/services_imgs/alineacion.jpg"
                    alt="alineación y balanceo para autos" class="slide__img"></div>
            <div class="box"><img src="/public/assets/Marco2.svg" alt="" class="box__img"></div>
        </section>
    </div>
    <div class="values">
        <article class="values__box active">
            <figure class="values__icon"><img class="values__icon-img" src="/public/assets/values_icons/Compromiso.svg"
                    alt=""></figure>
            <h3 class="values__box-title">Compromiso</h3>
            <p class="values__box-paragraph">Estamos comprometidos con la calidad y la excelencia en todo lo que
                hacemos. Nos esforzamos por brindar un servicio excepcional a cada uno de nuestros clientes.</p>
        </article>
        <article class="values__box">
            <figure class="values__icon"><img class="values__icon-img" src="/public/assets/values_icons/Honestidad.svg"
                    alt=""></figure>
            <h3 class="values__box-title">Honestidad</h3>
            <p class="values__box-paragraph">La honestidad es nuestro valor fundamental.
                Ser siempre honestos con nuestros clientes en cuanto a los servicios y reparaciones necesarios para sus
                vehículos es la base para una solida confianza en nuestro trabajo.</p>
        </article>
        <article class="values__box">
            <figure class="values__icon"><img class="values__icon-img"
                    src="/public/assets/values_icons/Responsabilidad.svg" alt=""></figure>
            <h3 class="values__box-title">responsabilidad</h3>
            <p class="values__box-paragraph">Tanto con nuestros clientes como con nosotros mismos, la responsabilidad es
                un
                pilar en nuestro taller para el correcto desempeño de todas nuestras tareas.</p>
        </article>
    </div>
    <div class="mision">
        <h2 class="mision__title">Misión</h2>
        <p class="mision__paragraph">En nuestro taller automotriz, nos comprometemos a ofrecer un servicio excepcional y
            de alta calidad a todos nuestros clientes. Nos esforzamos por ser expertos en la reparación y mantenimiento
            de vehículos de todas las marcas y modelos, utilizando tecnología de vanguardia y los mejores recursos para
            lograr los mejores resultados. Trabajamos para construir relaciones duraderas con nuestros clientes y para
            superar sus expectativas en cada visita. Nuestro objetivo es ser el taller de confianza de nuestros clientes
            y asegurarnos de que su experiencia sea lo más cómoda y conveniente posible.</p>
    </div>
    <div class="mision vision">
        <h2 class="mision__title">Visión</h2>
        <p class="mision__paragraph">Nuestra visión es ser un taller automotriz líder en calidad y servicio, brindando
            soluciones efectivas y personalizadas a nuestros clientes y superando sus expectativas en cada visita.
            Estamos comprometidos en ser el taller de confianza de nuestros clientes, trabajando con pasión, compromiso
            y dedicación para asegurar la satisfacción de nuestros clientes en todo momento.</p>
    </div>
    <div class="callToAction">
        <div class="callToAction__box">
            <p class="callToAction__title">Sabemos que buscas en quienes poder confiar y estamos aquí para demostrar que
                somos lo que necesitas, conoce
                más acerca de nuestros servicios y lo que podemos hacer por tí</p>
        </div>
        <div class="callToAction__btn">
            <a href="/src/layout/services.php" class="callToAction__btn-link"><img class="callToAction__btn-img"
                    src="/public/assets/icons/reshot-icon-right-long-arrow-2MGLKCZ874-17dc7.svg" alt=""></a>
        </div>
    </div>
</main>

<?php require('../components/footer.php') ?>