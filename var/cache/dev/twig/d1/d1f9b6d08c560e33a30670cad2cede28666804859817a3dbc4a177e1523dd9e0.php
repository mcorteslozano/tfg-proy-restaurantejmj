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

/* emails/contacto.html.twig */
class __TwigTemplate_98248b1c9825f906fb099fab11f69ff5eb9eb14182e95e3e74137f828458e86c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contacto.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contacto.html.twig"));

        // line 1
        echo "<h1>Los detalles del pedido de Restaurante JMJ son: </h1>
<p>Fecha de pedido: ";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form_pedido"]) || array_key_exists("form_pedido", $context) ? $context["form_pedido"] : (function () { throw new RuntimeError('Variable "form_pedido" does not exist.', 2, $this->source); })()), "getFechaPedido", [], "any", false, false, false, 2), "m/d/Y"), "html", null, true);
        echo " </p>
<p>Fecha de entrega: ";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form_pedido"]) || array_key_exists("form_pedido", $context) ? $context["form_pedido"] : (function () { throw new RuntimeError('Variable "form_pedido" does not exist.', 3, $this->source); })()), "getFechaEntrega", [], "any", false, false, false, 3), "m/d/Y"), "html", null, true);
        echo " </p>
<p>Proveedor: ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form_pedido"]) || array_key_exists("form_pedido", $context) ? $context["form_pedido"] : (function () { throw new RuntimeError('Variable "form_pedido" does not exist.', 4, $this->source); })()), "getIdProveedor", [], "any", false, false, false, 4), "html", null, true);
        echo " </p>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Los detalles del pedido de Restaurante JMJ son: </h1>
<p>Fecha de pedido: {{ form_pedido.getFechaPedido|date(\"m/d/Y\") }} </p>
<p>Fecha de entrega: {{ form_pedido.getFechaEntrega|date(\"m/d/Y\") }} </p>
<p>Proveedor: {{ form_pedido.getIdProveedor }} </p>", "emails/contacto.html.twig", "C:\\xampp\\htdocs\\restaurante2\\templates\\emails\\contacto.html.twig");
    }
}
