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

/* themes/custom/doctor_themes/templates/field/ds-1col--paragraph-our-doctors.html.twig */
class __TwigTemplate_5cf5c8087fa0882e8e9a2093666c5cd9dfc48bed2a1d75d313666eed70bdcb69 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 22];
        $filters = ["escape" => 9];
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


<!-- ======= Doctors Section ======= -->
    <section id=\"doctors\" class=\"doctors\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_first_doctor_title", [])), "html", null, true);
        echo "</h2>
          <p>";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_first_description", [])), "html", null, true);
        echo "</p>
        </div>

 ";
        // line 17
        echo "                 ";
        // line 18
        echo "

        <div class=\"row\">

        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_our_doctor_images", []), "#items", [], "array"), "value", []));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 23
            echo "          <div class=\"col-lg-6 mt-lg-0\">
            <div class=\"member d-flex align-items-start\">


              ";
            // line 28
            echo "            ";
            // line 29
            echo "
                  <div class=\"pic\"><img src=\"";
            // line 30
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_our_doctor_images", []), "#markup", [], "array"), "entity", []), "uri", []), "value", [])), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"img\"></div>

              <div class=\"member-info\">
                <h4>";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_doctor_name", []), $context["key"], [], "array")), "html", null, true);
            echo "</h4>
                <span>";
            // line 34
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_doctor_designation", []), $context["key"], [], "array")), "html", null, true);
            echo "</span>
                <p> ";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_doctor_description", []), $context["key"], [], "array")), "html", null, true);
            echo "</p>
                <div class=\"social\">
                  <a href=\"\"><i class=\"ri-twitter-fill\"></i></a>
                  <a href=\"\"><i class=\"ri-facebook-fill\"></i></a>
                  <a href=\"\"><i class=\"ri-instagram-fill\"></i></a>
                  <a href=\"\"> <i class=\"ri-linkedin-box-fill\"></i> </a>
                </div>
              </div>
            </div>
          </div>

          ";
            // line 48
            echo "              ";
            // line 49
            echo "                ";
            // line 63
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
     </div>

      </div>
    </section><!-- End Doctors Section -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/doctor_themes/templates/field/ds-1col--paragraph-our-doctors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 65,  130 => 63,  128 => 49,  126 => 48,  112 => 35,  108 => 34,  104 => 33,  98 => 30,  95 => 29,  93 => 28,  87 => 23,  83 => 22,  77 => 18,  75 => 17,  69 => 10,  65 => 9,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/doctor_themes/templates/field/ds-1col--paragraph-our-doctors.html.twig", "D:\\xampp\\htdocs\\doctor_project\\web\\themes\\custom\\doctor_themes\\templates\\field\\ds-1col--paragraph-our-doctors.html.twig");
    }
}
