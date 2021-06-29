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
class __TwigTemplate_c0a29ccb48af311044539a251a938b351b9d288cb2c26f1052c88544d2582a0b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 24];
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
           ";
        // line 22
        echo "        <div class=\"row\">

        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_our_doctor_images", []), "#items", [], "array"), "value", []));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 25
            echo "          <div class=\"col-lg-6 mt-lg-0\">
            <div class=\"member d-flex align-items-start\">


              ";
            // line 30
            echo "            ";
            // line 31
            echo " 

                  ";
            // line 34
            echo "
              <div class=\"member-info\">
                <h4>";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_doctor_name", []), $context["key"], [], "array")), "html", null, true);
            echo "</h4>
                <span>";
            // line 37
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_doctor_designation", []), $context["key"], [], "array")), "html", null, true);
            echo "</span>
                <p> ";
            // line 38
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
            // line 51
            echo "              ";
            // line 52
            echo "                ";
            // line 66
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
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
        return array (  137 => 68,  130 => 66,  128 => 52,  126 => 51,  112 => 38,  108 => 37,  104 => 36,  100 => 34,  96 => 31,  94 => 30,  88 => 25,  84 => 24,  80 => 22,  77 => 18,  75 => 17,  69 => 10,  65 => 9,  55 => 1,);
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
