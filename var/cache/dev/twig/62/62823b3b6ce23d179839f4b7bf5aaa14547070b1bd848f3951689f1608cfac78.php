<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* contacto/index.html.twig */
class __TwigTemplate_612fb7363d9b8768090fe5882cf45578529cf11651a7d3a40ac01392d8e942cc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacto/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacto/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"stylesheet\" href=\"style/main_page.css\">
\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/favicon.ico"), "html", null, true);
        echo "\" />
\t<script type=\"text/javascript\" src=\"js/main_page.js\"></script>
\t<title>Contacto - Restaurante JMJ</title>

</head>
<body >
\t<header>
\t\t<div>
\t\t\t<img src=\"img/logo.png\" id=\"logo\" onclick=\"document.location.href='";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bienvenida");
        echo "'\">
\t\t</div>

\t\t<div id=\"marginNav\">
\t\t\t<a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("carta");
        echo "\">Carta</a>
\t\t\t<a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacto");
        echo "\">Contacto</a>
\t\t\t<a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Gestión</a>
\t\t</div>
\t\t
\t\t<div>
\t\t\t<a href=\"https://es-es.facebook.com/\" class=\"social\"><img src=\"img/facebook.svg\"></a>
\t\t\t<a href=\"https://www.instagram.com/?hl=es\" class=\"social\"><img src=\"img/instagram.svg\"></a>
\t\t\t<a href=\"https://twitter.com/?lang=es\" class=\"social\"><img src=\"img/twitter.svg\"></a>
\t\t</div>
\t</header>
\t<main class=\"fondo_main\">

\t\t<img src=\"img/img1.png\" class=\"img_main\">
        <img src=\"img/img2.png\" class=\"img_main\">
        <img src=\"img/img3.png\" class=\"img_main\">
        <img src=\"img/img4.png\" class=\"img_main\">
        <img src=\"img/img5.png\" class=\"img_main\">
\t\t
\t\t<div class=\"linea\">
\t\t\t
\t\t\t<div id=\"informacion\">
\t\t\t\t<p>Calle del Padre Claret, 8,28002 Madrid - <span>915 19 52 57</span></p>
\t\t\t\t<p>Horarios: 13:30-16:00 y de 20:30-23:30</p>
\t\t\t\t<p>Domingo y lunes en la mañana cerrados</p>
\t\t\t\t<p><span>restaurantejmj@gmail.com</span> ¿Quieres trabajar con nosotros?</p>
\t\t\t</div>
\t\t\t<div class=\"formulario\">
\t\t\t\t<div>
\t\t\t\t\t<h1>Contacto</h1>
\t\t\t\t\t<label>Nombre</label>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t<label>Email</label>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"email\">
\t\t\t\t\t<label>Mensaje</label>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<textarea></textarea>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"submit\" value=\"Enviar\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"linea\">
\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.307085309799!2d-3.666308785236553!3d40.44633976176318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228d2f0d7df85%3A0x3a937702539f2525!2sCalle%20del%20Padre%20Claret%2C%208%2C%2028002%20Madrid!5e0!3m2!1ses!2ses!4v1585735354439!5m2!1ses!2ses\"  frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
\t\t</div>
\t</main>
\t<footer>
\t\t
\t</footer>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contacto/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  73 => 20,  69 => 19,  62 => 15,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"stylesheet\" href=\"style/main_page.css\">
\t<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('/img/favicon.ico') }}\" />
\t<script type=\"text/javascript\" src=\"js/main_page.js\"></script>
\t<title>Contacto - Restaurante JMJ</title>

</head>
<body >
\t<header>
\t\t<div>
\t\t\t<img src=\"img/logo.png\" id=\"logo\" onclick=\"document.location.href='{{ path('bienvenida' ) }}'\">
\t\t</div>

\t\t<div id=\"marginNav\">
\t\t\t<a href=\"{{ path('carta' ) }}\">Carta</a>
\t\t\t<a href=\"{{ path('contacto' ) }}\">Contacto</a>
\t\t\t<a href=\"{{ path('app_login' ) }}\">Gestión</a>
\t\t</div>
\t\t
\t\t<div>
\t\t\t<a href=\"https://es-es.facebook.com/\" class=\"social\"><img src=\"img/facebook.svg\"></a>
\t\t\t<a href=\"https://www.instagram.com/?hl=es\" class=\"social\"><img src=\"img/instagram.svg\"></a>
\t\t\t<a href=\"https://twitter.com/?lang=es\" class=\"social\"><img src=\"img/twitter.svg\"></a>
\t\t</div>
\t</header>
\t<main class=\"fondo_main\">

\t\t<img src=\"img/img1.png\" class=\"img_main\">
        <img src=\"img/img2.png\" class=\"img_main\">
        <img src=\"img/img3.png\" class=\"img_main\">
        <img src=\"img/img4.png\" class=\"img_main\">
        <img src=\"img/img5.png\" class=\"img_main\">
\t\t
\t\t<div class=\"linea\">
\t\t\t
\t\t\t<div id=\"informacion\">
\t\t\t\t<p>Calle del Padre Claret, 8,28002 Madrid - <span>915 19 52 57</span></p>
\t\t\t\t<p>Horarios: 13:30-16:00 y de 20:30-23:30</p>
\t\t\t\t<p>Domingo y lunes en la mañana cerrados</p>
\t\t\t\t<p><span>restaurantejmj@gmail.com</span> ¿Quieres trabajar con nosotros?</p>
\t\t\t</div>
\t\t\t<div class=\"formulario\">
\t\t\t\t<div>
\t\t\t\t\t<h1>Contacto</h1>
\t\t\t\t\t<label>Nombre</label>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t<label>Email</label>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"email\">
\t\t\t\t\t<label>Mensaje</label>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<textarea></textarea>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"submit\" value=\"Enviar\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"linea\">
\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.307085309799!2d-3.666308785236553!3d40.44633976176318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228d2f0d7df85%3A0x3a937702539f2525!2sCalle%20del%20Padre%20Claret%2C%208%2C%2028002%20Madrid!5e0!3m2!1ses!2ses!4v1585735354439!5m2!1ses!2ses\"  frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
\t\t</div>
\t</main>
\t<footer>
\t\t
\t</footer>
</body>
</html>", "contacto/index.html.twig", "C:\\xampp\\htdocs\\restaurante\\templates\\contacto\\index.html.twig");
    }
}
