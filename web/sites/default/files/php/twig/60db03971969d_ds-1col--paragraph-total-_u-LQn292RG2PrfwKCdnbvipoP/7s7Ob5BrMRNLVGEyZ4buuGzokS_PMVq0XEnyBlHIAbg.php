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

/* themes/custom/doctor_themes/templates/field/ds-1col--paragraph-total-department.html.twig */
class __TwigTemplate_1520e5120cc3c31af0e074d9738a4f291dd830b424d51cbd517fff496568368a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 8];
        $filters = ["escape" => 12];
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
        // line 2
        echo "
    <!-- ======= Counts Section ======= -->
    <section id=\"counts\" class=\"counts\">
      <div class=\"container\">

        <div class=\"row\">
         ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_count_title", []), "#items", [], "array"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 9
            echo "          <div class=\"col-lg-3 col-md-6\">
            <div class=\"count-box\">
              <i class=\"icofont-doctor-alt\"></i>
              <span data-toggle=\"counter-up\">";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_count_numbers", []), $context["key"], [], "array")), "html", null, true);
            echo "</span>
              <p>";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_count_title", []), $context["key"], [], "array")), "html", null, true);
            echo "</p>
            </div>
          </div>
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "              <h1> something wrong<h1>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "

        </div>

      </div>
    </section><!-- End Counts Section -->
";
    }

    public function getTemplateName()
    {
        return "themes/custom/doctor_themes/templates/field/ds-1col--paragraph-total-department.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 19,  86 => 17,  77 => 13,  73 => 12,  68 => 9,  63 => 8,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/doctor_themes/templates/field/ds-1col--paragraph-total-department.html.twig", "D:\\xampp\\htdocs\\doctor_project\\web\\themes\\custom\\doctor_themes\\templates\\field\\ds-1col--paragraph-total-department.html.twig");
    }
}