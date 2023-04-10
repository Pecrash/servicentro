<?php require('./src/components/header.php') ?>
<main>
    <div class="welcome">
        <section class="welcome__section">
            <h1 class="welcome__title">Deja que te ayudemos para
                que nunca te detengas</h1>
            <p class="welcome__paragraph">Somos una empresa dedicada a la reparación de autos, tenemos las herramientas
                adecuadas para asegurarnos
                de que siempre puedas llegar a donde quieres, te mostraremos que somos en quienes puedes confiar.</p>
        </section>
        <section class="welcome__slider">
            <div class="slide active"><img src="/public/assets/services_imgs/afinacionMotor.jpg" alt=""
                    class="slide__img"></div>
            <div class="slide"><img src="/public/assets/services_imgs/pintura.jpg" alt="" class="slide__img"></div>
            <div class="slide"><img src="/public/assets/services_imgs/lavado.jpg" alt="" class="slide__img"></div>
            <div class="slide"><img src="/public/assets/services_imgs/soldadura.jpg" alt="" class="slide__img"></div>
            <div class="slide"><img src="/public/assets/services_imgs/alineacion.jpg" alt="" class="slide__img"></div>
            <div class="box"><img src="/public/assets/Marco.svg" alt="" class="box__img"></div>
        </section>
    </div>

    <div class="presentation">
        <h1 class="presentation__title">¿Quienes somos?</h1>
        <p class="presentation__paragraph">Somos un taller automotriz dedicado a brindar soluciones efectivas y
            personalizadas para todos nuestros clientes. Desde nuestros inicios, hemos estado comprometidos con la
            satisfacción de nuestros clientes y con la calidad de nuestro trabajo.
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
        <h1 class="services__title regular">Las mejores soluciones</h1>
        <h1 class="services__title bold">para tu vehículo</h1>
        <section class="services__container">
            <div class="services__container-box">
                <article class="services__container-item">
                    <h2 class="services__container-title">Latonería y pintura</h2>
                    <img class="services__container-icon" src="/public/assets/services_icons/Pintura-icon.svg" alt="">
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
                    <img class="services__container-icon" src="/public/assets/services_icons/Auto_icon.svg" alt="">
                </article>
                <article class="services__container-slider">
                    <p class="services__container-text">
                        Una suspensión adecuada es esencial para una conducción suave y segura. Nuestro servicio de
                        arreglo de suspensión incluye la verificación y reparación de los amortiguadores, las bujes y
                        otros componentes de la suspensión para garantizar que tu vehículo tenga un manejo suave y
                        estable.
                    </p>
                    <button class="services__container-btn">VER MÁS</button>
                </article>
            </div>
            <div class="services__container-box">
                <article class="services__container-item">
                    <h2 class="services__container-title">Soldadura</h2>
                    <img class="services__container-icon" src="/public/assets/services_icons/soldar_icon.svg" alt="">
                </article>
                <article class="services__container-slider">
                    <p class="services__container-text">
                        Nuestro servicio de soldadura utiliza tecnología de última generación para garantizar una
                        reparación de alta calidad en cualquier tipo de metal. Soldadura especializada TIG y MIG en
                        argón. Utilizamos equipos de soldadura avanzados que permiten una fusión precisa de los metales,
                        lo que resulta en una reparación duradera y resistente.
                    </p>
                    <button class="services__container-btn">VER MÁS</button>
                </article>
            </div>
            <div class="services__container-box">
                <article class="services__container-item">
                    <h2 class="services__container-title">Alineación y balanceo</h2>
                    <img class="services__container-icon" src="/public/assets/services_icons/wheel.svg" alt="">
                </article>
                <article class="services__container-slider">
                    <p class="services__container-text">
                        Con nuestro servicio de alineación y balanceo, te aseguramos que tu vehículo tendrá un manejo
                        suave y seguro en cualquier tipo de carretera. Utilizamos herramientas de última generación para
                        garantizar que las ruedas estén alineadas correctamente y que el peso esté distribuido
                        uniformemente en cada neumático.
                    </p>
                    <button class="services__container-btn">VER MÁS</button>
                </article>
            </div>
        </section>
    </div>

    <div class="videoSection">
        <h1 class="videoSection__title regular">Más acerca de</h1>
        <h1 class="videoSection__title bold">nuestro trabajo</h1>
        <section class="videoSection__card">
            <div class="videoSection__video">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/6kfxdeRzBp4?controls=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <article class="videoSection__text">
                <h1 class="videoSection__text-title">Somos Servicentro Fredonia</h1>
                <p class="videoSection__text-paragraph">Aquí puedes ver un poco más acerca de quienes somos y el
                    servicio que podemos brindarte. Somos un taller dedicado y responsable, siempre listos para servirte
                    y asegurarnos de que puedas continuar tu camino sin contratiempos. </p>
            </article>
        </section>
    </div>
</main>
<?php require('./src/components/footer.php') ?>