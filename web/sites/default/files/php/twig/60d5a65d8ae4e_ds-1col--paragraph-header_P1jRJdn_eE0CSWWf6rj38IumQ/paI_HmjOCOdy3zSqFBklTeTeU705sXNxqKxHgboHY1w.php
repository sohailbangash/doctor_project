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

/* themes/custom/doctor_themes/templates/field/ds-1col--paragraph-header-image.html.twig */
class __TwigTemplate_a84b6a8b9dce7193a70104c14b37c098592b6d68d43c7ed0933166a4dd1fc4d6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 42];
        $filters = ["escape" => 39];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
  ";
        // line 3
        echo "  ";
        // line 4
        echo " ";
        // line 5
        echo "   ";
        // line 6
        echo "<style>
#hero {
  width: 100%;
  height: 90vh;
  background: url(\"themes/custom/doctor_themes/_feed/img/hero-bg.jpg\") top center; 
  background-size: cover;
  position: relative;
  margin-bottom: -200px;

}
";
        // line 26
        echo " 
</style>

    ";
        // line 34
        echo "
 <!-- ======= Hero Section ======= -->
 
  <section id=\"hero\"  class=\"d-flex align-items-center full-img\">
    <div class=\"container\">
      <h1>";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_header_title", [])), "html", null, true);
        echo "</h1>
      <h2>";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_header_description", [])), "html", null, true);
        echo "</h2>
 
 ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_header_btn", []), "#items", [], "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["header_link"]) {
            // line 43
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["header_link"], "url", [], "method")), "html", null, true);
            echo "\" class=\"btn-doctor scrollto\"> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["header_link"], "title", [])), "html", null, true);
            echo "
        </a>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header_link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "

      ";
        // line 50
        echo "    </div>
  </section><!-- End Hero -->


  <main id=\"main\">

    <!-- ======= Why Us Section ======= -->
    <section id=\"why-us\" class=\"why-us\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-lg-4 d-flex align-items-stretch\">
            <div class=\"content\">
              <h3> ";
        // line 63
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_small_header_title", [])), "html", null, true);
        echo "
              </h3>
              <p>
                ";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_long_header_description", [])), "html", null, true);
        echo "
              </p>
              <div class=\"text-center\">
                <!-- <a href=\"#\" class=\"more-btn\">Learn More <i class=\"bx bx-chevron-right\"></i></a> -->
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/doctor_themes/templates/field/ds-1col--paragraph-header-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 66,  132 => 63,  117 => 50,  113 => 46,  101 => 43,  97 => 42,  92 => 40,  88 => 39,  81 => 34,  76 => 26,  64 => 6,  62 => 5,  60 => 4,  58 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/doctor_themes/templates/field/ds-1col--paragraph-header-image.html.twig", "D:\\xampp\\htdocs\\doctor_project\\web\\themes\\custom\\doctor_themes\\templates\\field\\ds-1col--paragraph-header-image.html.twig");
    }
}
