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

/* bienvenida/index.html.twig */
class __TwigTemplate_603325035c3ae5ba2b9d23e000d181b5f42013e99842bc64eaf44d87de7f38bd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bienvenida/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bienvenida/index.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=es>
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"stylesheet\" href=\"style/main_page.css\">
\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/favicon.ico"), "html", null, true);
        echo "\" />
\t<script type=\"text/javascript\" src=\"js/main_page.js\"></script>
\t<title>Restaurante JMJ</title>

</head>
<body>
\t<header>
\t\t<div>
\t\t\t<a href='";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bienvenida");
        echo "'><img src=\"img/logo.png\" id=\"logo\"></a>
\t\t</div>
\t\t\t<div id=\"marginNav\">
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
\t\t<div>
\t\t\t<a href=\"https://es-es.facebook.com/\" class=\"social\"><img src=\"img/facebook.svg\"></a>
\t\t\t<a href=\"https://www.instagram.com/?hl=es\" class=\"social\"><img src=\"img/instagram.svg\"></a>
\t\t\t<a href=\"https://twitter.com/?lang=es\" class=\"social\"><img src=\"img/twitter.svg\"></a>
\t\t</div>
\t</header>

\t<main>
\t\t<img src=\"img/img1.png\" class=\"img_main\">
        <img src=\"img/img2.png\" class=\"img_main\">
        <img src=\"img/img3.png\" class=\"img_main\">
        <img src=\"img/img4.png\" class=\"img_main\">
        <img src=\"img/img5.png\" class=\"img_main\">
\t</main>
\t
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
        return "bienvenida/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  73 => 20,  69 => 19,  63 => 16,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=es>
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"stylesheet\" href=\"style/main_page.css\">
\t<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('/img/favicon.ico') }}\" />
\t<script type=\"text/javascript\" src=\"js/main_page.js\"></script>
\t<title>Restaurante JMJ</title>

</head>
<body>
\t<header>
\t\t<div>
\t\t\t<a href='{{ path('bienvenida')}}'><img src=\"img/logo.png\" id=\"logo\"></a>
\t\t</div>
\t\t\t<div id=\"marginNav\">
\t\t\t<a href=\"{{ path('carta' ) }}\">Carta</a>
\t\t\t<a href=\"{{ path('contacto' ) }}\">Contacto</a>
\t\t\t<a href=\"{{ path('app_login' ) }}\">Gestión</a>
\t\t</div>
\t\t<div>
\t\t\t<a href=\"https://es-es.facebook.com/\" class=\"social\"><img src=\"img/facebook.svg\"></a>
\t\t\t<a href=\"https://www.instagram.com/?hl=es\" class=\"social\"><img src=\"img/instagram.svg\"></a>
\t\t\t<a href=\"https://twitter.com/?lang=es\" class=\"social\"><img src=\"img/twitter.svg\"></a>
\t\t</div>
\t</header>

\t<main>
\t\t<img src=\"img/img1.png\" class=\"img_main\">
        <img src=\"img/img2.png\" class=\"img_main\">
        <img src=\"img/img3.png\" class=\"img_main\">
        <img src=\"img/img4.png\" class=\"img_main\">
        <img src=\"img/img5.png\" class=\"img_main\">
\t</main>
\t
\t<footer>
\t\t
\t</footer>
</body>
</html>", "bienvenida/index.html.twig", "C:\\xampp\\htdocs\\restaurante\\templates\\bienvenida\\index.html.twig");
    }
}
