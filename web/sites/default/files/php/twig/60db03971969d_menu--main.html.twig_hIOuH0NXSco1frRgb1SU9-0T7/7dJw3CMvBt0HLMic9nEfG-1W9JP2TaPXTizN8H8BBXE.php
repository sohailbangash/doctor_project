<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/doctor_themes/templates/menus/menu--main.html.twig */
class __TwigTemplate_564ee24321c29502ff21571cfd9dc53b22ea145f36f7b111cb58158bd9eb5a11 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 15, "if" => 17];
        $filters = ["escape" => 18];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "


<!-- ======= Header ======= -->
<!-- class=\"fixed-top\" -->
  <header id=\"\" class=\"nav_position\" >
    <div class=\"container d-flex align-items-center\" >

      ";
        // line 10
        echo "      <!-- Uncomment below if you prefer to use an image logo -->
       <a href=\"\" class=\"logo mr-auto \"><img src=\"http://localhost/doctor_project/web/themes/custom/doctor_themes/logo.svg\" alt=\"LOG\" class=\"img-fluid\"></a>

      <nav class=\"nav-menu d-none d-lg-block\">
        <ul>
           ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "
            ";
            // line 17
            if ($this->getAttribute($context["item"], "is_expanded", [])) {
                // line 18
                echo "          <!-- <li class=\"active\"><a href=\"index.html\">Home</a></li> -->           <li class=\"drop-down\"><a href=\"\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                echo "</a>
            <ul>
               ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "below", []));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 21
                    echo "              <li class=\"nav-menu\"><a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["subitem"], "url", [])), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["subitem"], "title", [])), "html", null, true);
                    echo "</a>
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "            </ul>
          </li>
             ";
            } else {
                // line 26
                echo "          <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                echo " \">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                echo "</a></li>

       ";
            }
            // line 29
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </ul>
      </nav><!-- .nav-menu -->


      ";
        // line 36
        echo "
    </div>
  ";
        // line 39
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/custom/doctor_themes/templates/menus/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 39,  129 => 36,  123 => 31,  116 => 29,  107 => 26,  102 => 23,  91 => 21,  87 => 20,  81 => 18,  79 => 17,  76 => 16,  72 => 15,  65 => 10,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/doctor_themes/templates/menus/menu--main.html.twig", "D:\\xampp\\htdocs\\doctor_project\\web\\themes\\custom\\doctor_themes\\templates\\menus\\menu--main.html.twig");
    }
}
