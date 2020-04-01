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

/* carta/index.html.twig */
class __TwigTemplate_ac67fe5c6c014a65a468deb9de73a5ba2b70c863860aa8755621e74d824b83a1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carta/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "carta/index.html.twig"));

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
        echo "\" />\t
\t<script type=\"text/javascript\" src=\"js/funciones.js\"></script>
\t<title>Carta - Restaurante JMJ</title>
</head>
<body >
\t<header>
\t\t<div>
\t\t\t<img src=\"img/logo.png\" id=\"logo\" onclick=\"document.location.href='";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bienvenida");
        echo "'\">
\t\t</div>
\t\t
\t\t<div id=\"marginNav\">
\t\t\t<a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("carta");
        echo "\">Carta</a>
\t\t\t<a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacto");
        echo "\">Contacto</a>
\t\t\t<a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Gestión</a>
\t\t</div>

\t\t<div>
\t\t\t<a href=\"https://es-es.facebook.com/\" class=\"social\"><img src=\"img/facebook.svg\"></a>
\t\t\t<a href=\"https://www.instagram.com/?hl=es\" class=\"social\"><img src=\"img/instagram.svg\"></a>
\t\t\t<a href=\"https://twitter.com/?lang=es\" class=\"social\"><img src=\"img/twitter.svg\"></a>
\t\t</div>
\t</header>
\t<main class=\"fondo_main\">

\t\t<img src=\"img/img1.png\" class=\"img_main\">
\t\t<img src=\"img/img2.png\" class=\"img_main\">
\t\t<img src=\"img/img3.png\" class=\"img_main\">
\t\t<img src=\"img/img4.png\" class=\"img_main\">
\t\t<img src=\"img/img5.png\" class=\"img_main\">

\t\t<h2 id=\"entrante\">ENTRANTES</h2>
\t\t<div class=\"linea\">
\t\t\t<div>
\t\t\t \t<h3>GUACAMOLE</h3>
\t\t\t \t<p>Receta tradicional Mexicana, preparado en la mesa y servido en molcajete de piedra volcánica, con lima, cilantro y cebolleta tierna. Acompañado de totopos caseros de maíz.</p>
\t\t\t \t<h3>PIPARRAS FRITAS </h3>
\t\t\t \t<p>Con aceite de oliva virgen, y sal maldón.</p>
\t\t\t\t<h3>TEQUEÑOS</h3>
\t\t\t \t<p>Deliciosos bastoncitos rellenos de queso fresco (paisa), acompañados con una salsa natural de tomate y albahaca fresca.</p>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h3>ENSALADA DE BURRATA</h3>
\t\t\t \t<p>Con naranja, nueces pecan, aceitunas y espinacas.</p>
\t\t\t \t<h3>ENSALADILLA RUSA </h3>
\t\t\t \t<p>Con pollo ecológico, tirabeques y crujiente de panceta ibérica.</p>
\t\t\t \t<h3>ALCACHOFAS FRITAS NATURALES</h3>
\t\t\t \t<p>Corazones de alcachofas fritas acompañados con salsa romescú.</p>
\t\t\t \t<h3>TATAKI DE ENTRAÑA</h3>
\t\t\t \t<p>A la parilla de carbón, aliñado con soja, sésamo, chimichurri y mayonesa de wasabí.</p>
\t\t\t</div>
\t\t</div>
\t\t<hr>
\t\t<h2>PASTA</h2>
\t\t<div class=\"linea\">
\t\t\t<div>
\t\t\t\t<h3>RAVIOLIS</h3>
\t\t\t\t<p>Rellenos de ternera y setas, con una salsa de queso ( Parmesano, Pecorino, Provolone, Gorgonzola ).</p>
\t\t\t\t<h3>ESPAGUETIS</h3>
\t\t\t\t<p>A la carbonara de Italia, sin nata y con bacon o panceta.</p>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h3>TORTELLINI CON SALSA PESTO</h3>\t
\t\t\t\t<p>Tortellini con una salsa de Pesto, elaborada con queso parmesano, piñones, albahaca fresca y un diente de ajo.</p>
\t\t\t\t<h3>LASAGNAS</h3>
\t\t\t\t<p>Clásica, a la Bolognesa, Vegetariana</p>

\t\t\t</div>
\t\t</div>
\t\t<hr>
\t\t<h2>CARNES</h2>
\t\t<div class=\"linea\">
\t\t\t<div>
\t\t\t\t<h3>POLLO ASADO</h3>
\t\t\t\t<p>Al horno con zanahorias, judías verdes y patatas asadas.</p>
\t\t\t\t<h3>COSTILLAS DE CERDO</h3>
\t\t\t\t<p>Ahumadas en madera de Hycory, hechas a baja temperatura, con una salsa de barbacoa japonesa, panela y puerro. Acompañadas de croquetas de maíz y nata agria.</p>
\t\t\t\t<h3>SOLOMILLO DE CERDO</h3>
\t\t\t\t<p>A la plancha, con ramas de perejil, patatas, sal y pimienta.</p>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h3>HAMBURGUESAS</h3>
\t\t\t\t<p>Todas nuestras hamburguesas son elaborada diariamente con carne 100% de vaca rubia Gallega. Pesan 170grs. Con PAN ARTESANO de nuestro obrador elaborado a diario a partir de masa madre y acompañadas de patatas fritas caseras o ensalada.</p>
\t\t\t\t<h3>SOLOMILLO WELLINGTON</h3>
\t\t\t\t<p>Con puré de patata y ensalada de lechuga, tomate, zanahoria y cebolla.</p>
\t\t\t</div>
\t\t</div>
\t\t<hr>
\t\t<h2>PESCADOS</h2>
\t\t<div class=\"linea\">
\t\t\t<div>
\t\t\t\t<h3>SALMÓN</h3>
\t\t\t\t<p>A la plancha, acompañado con pimientos, esparragos y dos rodajas de limón.</p>
\t\t\t\t<h3>BACALAO</h3>
\t\t\t\t<p>Ventresca de bacalao al Pil-Pil con quindilla y ajos laminados.</p>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h3>MERLUZA</h3>
\t\t\t\t<p>Al horno, con cebolla, zanahorias, pimientos, perejil, ajo y limón.</p>
\t\t\t\t<h3>RODABALLO</h3>
\t\t\t\t<p>A la plancha con una salsa ligera de yogur natural, mayonesa, cebolleta, patatas y perejil.</p>
\t\t\t</div>
\t\t</div>
\t\t<hr>
\t\t<h2>POSTRES</h2>
\t\t<div class=\"linea\" id=\"final\">
\t\t\t<div>
\t\t\t\t<h3>TARTAS</h3>
\t\t\t\t<p>Chocolate, Queso, Manzana, Zanahoria y De la abuela.</p>
\t\t\t\t<h3>FLAN</h3>
\t\t\t\t<p>De huevo ( casero ).</p>
\t\t\t\t<h3>FRUTA VARIADA</h3>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h3>Helados</h3>
\t\t\t\t<p>Chocolate, Limón, Nata, Fresa y Vainilla.</p>
\t\t\t\t<h3>TIRAMISU</h3>
\t\t\t</div>
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
        return "carta/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 20,  72 => 19,  68 => 18,  61 => 14,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"stylesheet\" href=\"style/main_page.css\">
\t<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('/img/favicon.ico') }}\" />\t
\t<script type=\"text/javascript\" src=\"js/funciones.js\"></script>
\t<title>Carta - Restaurante JMJ</title>
</head>
<body >
\t<header>
\t\t<div>
\t\t\t<img src=\"img/logo.png\" id=\"logo\" onclick=\"document.location.href='{{ path('bienvenida' ) }}'\">
\t\t</div>
\t\t
\t\t<div id=\"marginNav\">
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
\t<main class=\"fondo_main\">

\t\t<img src=\"img/img1.png\" class=\"img_main\">
\t\t<img src=\"img/img2.png\" class=\"img_main\">
\t\t<img src=\"img/img3.png\" class=\"img_main\">
\t\t<img src=\"img/img4.png\" class=\"img_main\">
\t\t<img src=\"img/img5.png\" class=\"img_main\">

\t\t<h2 id=\"entrante\">ENTRANTES</h2>
\t\t<div class=\"linea\">
\t\t\t<div>
\t\t\t \t<h3>GUACAMOLE</h3>
\t\t\t \t<p>Receta tradicional Mexicana, preparado en la mesa y servido en molcajete de piedra volcánica, con lima, cilantro y cebolleta tierna. Acompañado de totopos caseros de maíz.</p>
\t\t\t \t<h3>PIPARRAS FRITAS </h3>
\t\t\t \t<p>Con aceite de oliva virgen, y sal maldón.</p>
\t\t\t\t<h3>TEQUEÑOS</h3>
\t\t\t \t<p>Deliciosos bastoncitos rellenos de queso fresco (paisa), acompañados con una salsa natural de tomate y albahaca fresca.</p>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h3>ENSALADA DE BURRATA</h3>
\t\t\t \t<p>Con naranja, nueces pecan, aceitunas y espinacas.</p>
\t\t\t \t<h3>ENSALADILLA RUSA </h3>
\t\t\t \t<p>Con pollo ecológico, tirabeques y crujiente de panceta ibérica.</p>
\t\t\t \t<h3>ALCACHOFAS FRITAS NATURALES</h3>
\t\t\t \t<p>Corazones de alcachofas fritas acompañados con salsa romescú.</p>
\t\t\t \t<h3>TATAKI DE ENTRAÑA</h3>
\t\t\t \t<p>A la parilla de carbón, aliñado con soja, sésamo, chimichurri y mayonesa de wasabí.</p>
\t\t\t</div>
\t\t</div>
\t\t<hr>
\t\t<h2>PASTA</h2>
\t\t<div class=\"linea\">
\t\t\t<div>
\t\t\t\t<h3>RAVIOLIS</h3>
\t\t\t\t<p>Rellenos de ternera y setas, con una salsa de queso ( Parmesano, Pecorino, Provolone, Gorgonzola ).</p>
\t\t\t\t<h3>ESPAGUETIS</h3>
\t\t\t\t<p>A la carbonara de Italia, sin nata y con bacon o panceta.</p>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h3>TORTELLINI CON SALSA PESTO</h3>\t
\t\t\t\t<p>Tortellini con una salsa de Pesto, elaborada con queso parmesano, piñones, albahaca fresca y un diente de ajo.</p>
\t\t\t\t<h3>LASAGNAS</h3>
\t\t\t\t<p>Clásica, a la Bolognesa, Vegetariana</p>

\t\t\t</div>
\t\t</div>
\t\t<hr>
\t\t<h2>CARNES</h2>
\t\t<div class=\"linea\">
\t\t\t<div>
\t\t\t\t<h3>POLLO ASADO</h3>
\t\t\t\t<p>Al horno con zanahorias, judías verdes y patatas asadas.</p>
\t\t\t\t<h3>COSTILLAS DE CERDO</h3>
\t\t\t\t<p>Ahumadas en madera de Hycory, hechas a baja temperatura, con una salsa de barbacoa japonesa, panela y puerro. Acompañadas de croquetas de maíz y nata agria.</p>
\t\t\t\t<h3>SOLOMILLO DE CERDO</h3>
\t\t\t\t<p>A la plancha, con ramas de perejil, patatas, sal y pimienta.</p>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h3>HAMBURGUESAS</h3>
\t\t\t\t<p>Todas nuestras hamburguesas son elaborada diariamente con carne 100% de vaca rubia Gallega. Pesan 170grs. Con PAN ARTESANO de nuestro obrador elaborado a diario a partir de masa madre y acompañadas de patatas fritas caseras o ensalada.</p>
\t\t\t\t<h3>SOLOMILLO WELLINGTON</h3>
\t\t\t\t<p>Con puré de patata y ensalada de lechuga, tomate, zanahoria y cebolla.</p>
\t\t\t</div>
\t\t</div>
\t\t<hr>
\t\t<h2>PESCADOS</h2>
\t\t<div class=\"linea\">
\t\t\t<div>
\t\t\t\t<h3>SALMÓN</h3>
\t\t\t\t<p>A la plancha, acompañado con pimientos, esparragos y dos rodajas de limón.</p>
\t\t\t\t<h3>BACALAO</h3>
\t\t\t\t<p>Ventresca de bacalao al Pil-Pil con quindilla y ajos laminados.</p>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h3>MERLUZA</h3>
\t\t\t\t<p>Al horno, con cebolla, zanahorias, pimientos, perejil, ajo y limón.</p>
\t\t\t\t<h3>RODABALLO</h3>
\t\t\t\t<p>A la plancha con una salsa ligera de yogur natural, mayonesa, cebolleta, patatas y perejil.</p>
\t\t\t</div>
\t\t</div>
\t\t<hr>
\t\t<h2>POSTRES</h2>
\t\t<div class=\"linea\" id=\"final\">
\t\t\t<div>
\t\t\t\t<h3>TARTAS</h3>
\t\t\t\t<p>Chocolate, Queso, Manzana, Zanahoria y De la abuela.</p>
\t\t\t\t<h3>FLAN</h3>
\t\t\t\t<p>De huevo ( casero ).</p>
\t\t\t\t<h3>FRUTA VARIADA</h3>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h3>Helados</h3>
\t\t\t\t<p>Chocolate, Limón, Nata, Fresa y Vainilla.</p>
\t\t\t\t<h3>TIRAMISU</h3>
\t\t\t</div>
\t\t</div>
\t</main>
\t<footer>
\t\t
\t</footer>
</body>
</html>", "carta/index.html.twig", "C:\\xampp\\htdocs\\restaurante\\templates\\carta\\index.html.twig");
    }
}
