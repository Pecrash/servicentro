<?php
$link = "https://servicentrosuroeste.com/";
$page_title = "Inicio | Servicentro Taller Mecánico Automotriz";
$description = "Taller de mecánica automotriz en el suroeste Antioqueño. Destacamos por la calidad en nuestro trabajo y nuestros precios accesibles, ¡conócenos!";
?>

<?php require('./src/components/header.php') ?>
<main>
    <div class="welcome">
        <section class="welcome__section">
            <h1 class="welcome__title">Taller Mecánico Automotriz Servicentro</h1>
            <p class="welcome__paragraph">Nos enorgullecemos de nuestro trabajo y la calidad con la que lo realizamos,
                trabajar ardua y responsablemente es pilar en cada uno de nuestros servicios para asegurarnos
                de que siempre puedas continuar con tu camino. Somos tu taller mecánico de confianza.</p>
        </section>
        <section class="welcome__slider">
            <div class="slide active"><img src="/public/assets/services_imgs/afinacionMotor.jpg"
                    alt="Afinación y reparación de motor" class="slide__img"></div>
            <div class="slide"><img src="/public/assets/services_imgs/pintura.jpg" alt="servicio de latonería y pintura"
                    class="slide__img"></div>
            <div class="slide"><img src="/public/assets/services_imgs/lavado.jpg" alt="servicio de lavado para autos"
                    class="slide__img"></div>
            <div class="slide"><img src="/public/assets/services_imgs/soldadura.jpg" alt="servicio de soldadura"
                    class="slide__img"></div>
            <div class="slide"><img src="/public/assets/services_imgs/alineacion.jpg"
                    alt="alineación y balanceo para autos" class="slide__img"></div>
            <div class="box"><img src="/public/assets/Marco.svg" alt="" class="box__img"></div>
        </section>
    </div>

    <div class="presentation">
        <h2 class="presentation__title">¿Quiénes somos?</h2>
        <p class="presentation__paragraph">Somos un taller automotriz dedicado a brindar soluciones efectivas y
            personalizadas. Nuestro compromiso y dedicación es lo que nos identifica, nuestros precios son asequibles y
            la variedad de nuestros servicios amplia para adaptarnos a tus necesidades.
        </p>
        <div class="presentation__btn">
            <a href="/src/layout/services.php" class="presentation__btn-text">VER MÁS</a>
        </div>
        <figure class="presentation__animation">
            <img class="presentation__animation-img" src="/public/assets/processing-animate.svg" alt="">
            <a class="presentation__animation-attribute" href="https://storyset.com/work">Work illustrations by
                Storyset</a>
        </figure>
    </div>

    <div class="services">
        <h2 class="services__title regular">Las mejores soluciones</h2>
        <h2 class="services__title bold">para tu vehículo</h2>
        <section class="services__container">
            <div class="services__container-box">
                <article class="services__container-item">
                    <h2 class="services__container-title">Latonería y pintura</h2>
                    <img class="services__container-icon" src="/public/assets/services_icons/Pintura-icon.svg"
                        alt="icono latonería y pintura">
                </article>
                <article class="services__container-slider">
                    <p class="services__container-text">
                        Utilizamos técnicas de reparación de alta calidad y pinturas de primera línea para asegurarnos
                        de que tu vehículo tenga un acabado impecable y una apariencia renovada. Además, nuestra pintura
                        está diseñada para durar, lo que garantiza una protección duradera contra la oxidación y el daño
                        por el clima.
                    </p>
                    <button class="services__container-btn">VER MÁS</button>
                </article>
            </div>
            <div class="services__container-box">
                <article class="services__container-item">
                    <h2 class="services__container-title">Suspensión</h2>
                    <img class="services__container-icon" src="/public/assets/services_icons/Auto_icon.svg"
                        alt="icono reparación de suspención">
                </article>
                <article class="services__container-slider">
                    <p class="services__container-text">
                        Una suspensión adecuada es esencial para una conducción suave y segura. Verificamos y reparamos
                        los amortiguadores, las bujes y
                        otros componentes de la suspensión para garantizar que tu vehículo tenga un manejo agradable y
                        estable.
                    </p>
                    <button class="services__container-btn">VER MÁS</button>
                </article>
            </div>
            <div class="services__container-box">
                <article class="services__container-item">
                    <h2 class="services__container-title">Soldadura MIG y TIG</h2>
                    <img class="services__container-icon" src="/public/assets/services_icons/soldar_icon.svg"
                        alt="icono servicio de soldadura para autos">
                </article>
                <article class="services__container-slider">
                    <p class="services__container-text">
                        Nuestro servicio de soldadura utiliza tecnología enfocada en garantizar una
                        reparación de alta calidad en cualquier tipo de metal. Soldadura especializada MIG y TIG en
                        argón. Utilizamos equipos de soldadura avanzados que permiten una fusión precisa de los metales,
                        lo que resulta en una reparación duradera y resistente.
                    </p>
                    <button class="services__container-btn">VER MÁS</button>
                </article>
            </div>
            <div class="services__container-box">
                <article class="services__container-item">
                    <h2 class="services__container-title">Alineación y balanceo</h2>
                    <img class="services__container-icon" src="/public/assets/services_icons/wheel.svg"
                        alt="icono alineación y balanceo para autos">
                </article>
                <article class="services__container-slider">
                    <p class="services__container-text">
                        Somos el único taller en el suroeste Antioqueño con equipo especializado para realizar una
                        correcta alineación y un correcto balanceo, te aseguramos que tu vehículo tendrá un manejo
                        suave y seguro en cualquier tipo de carretera. Podrás confiar en que las ruedas estén alineadas
                        correctamente y que el peso esté distribuido
                        uniformemente en cada neumático.
                    </p>
                    <button class="services__container-btn">VER MÁS</button>
                </article>
            </div>
        </section>
    </div>

    <div class="videoSection">
        <h2 class="videoSection__title regular">Más acerca de</h2>
        <h2 class="videoSection__title bold">nuestro trabajo</h2>
        <section class="videoSection__card">
            <div class="videoSection__video">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/tfevqFiB5Wk"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <article class="videoSection__text">
                <h2 class="videoSection__text-title">Somos Servicentro Fredonia</h2>
                <p class="videoSection__text-paragraph">Aquí puedes ver un poco más acerca de quienes somos y el
                    servicio que podemos brindarte. Somos un taller dedicado y responsable, siempre listos para servirte
                    y asegurarnos de que puedas continuar tu camino sin contratiempos. </p>
            </article>
        </section>
    </div>
</main>
<?php require('./src/components/footer.php') ?>