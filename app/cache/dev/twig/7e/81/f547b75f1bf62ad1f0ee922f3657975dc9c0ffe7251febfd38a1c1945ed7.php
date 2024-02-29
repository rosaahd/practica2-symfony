<?php

/* ARSOFTDemoBundle:MisVistas:show.html.twig */
class __TwigTemplate_7e81f547b75f1bf62ad1f0ee922f3657975dc9c0ffe7251febfd38a1c1945ed7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
</head>
<body>

";
        // line 7
        if ((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo"))) {
            // line 8
            echo "    <h1>Artículo: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "title"), "html", null, true);
            echo "</h1>
    <p>ID: ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id"), "html", null, true);
            echo "</p>
    <p>Fecha de Creación: ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "created"), "html", null, true);
            echo "</p>
";
        } else {
            // line 12
            echo "    <p>Artículo no encontrado.</p>
";
        }
        // line 14
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "ARSOFTDemoBundle:MisVistas:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  43 => 12,  38 => 10,  34 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }
}
