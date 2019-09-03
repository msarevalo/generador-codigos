<style>
    * {
        padding: 0;
        margin: 0;
    }

    /*Agregamos margenes inferiores a los parrafos*/
    p {
        margin-bottom: 20px;
    }

    header {
        background: rgba(0,0,0,0.9);
        width: 100%;
        position: fixed;
        z-index: 100;
    }

    nav {
        float: left; /* Desplazamos el nav hacia la izquierda */
    }

    nav ul {
        list-style: none;
        overflow: hidden; /* Limpiamos errores de float */
    }

    nav ul li {
        float: left;
        font-family: Arial, sans-serif;
        font-size: 16px;
    }

    nav ul li a {
        display: block; /* Convertimos los elementos a en elementos bloque para manipular el padding */
        padding: 20px;
        color: #fff;
        text-decoration: none;
    }

    nav ul li:hover {
        background: #3ead47;
    }

</style>
<header>
    <nav>
        <ul>
            <li><a href="">Inicio</a></li>
            <li><a href="#">Tutoriales</a></li>
            <li><a href="#">Cursos</a></li>
            <li><a href="#">Preguntame algo</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>
</header>

<section class="contenido wrapper">

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus adipiscing commodo aliquet. Fusce bibendum orci magna, a pellentesque augue posuere sed. Ut bibendum magna tincidunt velit fermentum, eu laoreet arcu consectetur. Nullam nec enim sed justo fermentum sagittis. Nam varius dapibus risus, quis consectetur mauris. Praesent ut iaculis turpis. Phasellus congue tristique ligula et consequat.</p>

</section><section class="contenido wrapper">

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus adipiscing commodo aliquet. Fusce bibendum orci magna, a pellentesque augue posuere sed. Ut bibendum magna tincidunt velit fermentum, eu laoreet arcu consectetur. Nullam nec enim sed justo fermentum sagittis. Nam varius dapibus risus, quis consectetur mauris. Praesent ut iaculis turpis. Phasellus congue tristique ligula et consequat.</p>

</section><section class="contenido wrapper">

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus adipiscing commodo aliquet. Fusce bibendum orci magna, a pellentesque augue posuere sed. Ut bibendum magna tincidunt velit fermentum, eu laoreet arcu consectetur. Nullam nec enim sed justo fermentum sagittis. Nam varius dapibus risus, quis consectetur mauris. Praesent ut iaculis turpis. Phasellus congue tristique ligula et consequat.</p>

</section><section class="contenido wrapper">

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus adipiscing commodo aliquet. Fusce bibendum orci magna, a pellentesque augue posuere sed. Ut bibendum magna tincidunt velit fermentum, eu laoreet arcu consectetur. Nullam nec enim sed justo fermentum sagittis. Nam varius dapibus risus, quis consectetur mauris. Praesent ut iaculis turpis. Phasellus congue tristique ligula et consequat.</p>

</section>