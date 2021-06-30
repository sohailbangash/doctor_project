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

/* themes/custom/doctor_themes/templates/field/ds-1col--paragraph-news-and-updates.html.twig */
class __TwigTemplate_83cd4544a356c4d847ff1c831101aedf82d4e8713e8cbc0554371dbefe97f2f4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 15];
        $filters = ["escape" => 8];
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

<!-- ======= News Section ======= -->
    <section id=\"services\" class=\"services\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_first_title", [])), "html", null, true);
        echo "</h2>
          ";
        // line 10
        echo "        </div>

        <div class=\"row\">
        ";
        // line 14
        echo "
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_news_image", []), "#items", [], "array"), "value", []));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 16
            echo "         <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0\">
            <div class=\"card\">
            <div class=\"card-img-top card__img\"> ";
            // line 18
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_news_image", []), $context["key"], [], "array")), "html", null, true);
            echo " </div>
            <div class=\"card-body\">
            <h5 class=\"card-text\">";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_descripation", []), $context["key"], [], "array")), "html", null, true);
            echo " </h5>
            <p class=\"card-text\"><small class=\"text-muted\"> ";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_upda", []), $context["key"], [], "array")), "html", null, true);
            echo "</small></p>
         </div>
          </div>
      </div>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo " ";
        // line 27
        echo "           ";
        // line 36
        echo "
 ";
        // line 38
        echo "             ";
        // line 47
        echo "


<!--
          <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4\">
            <div class=\"icon-box\">
              <div class=\"icon\"><i class=\"icofont-heartbeat\"></i></div>
              <h4><a href=\"\">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Services Section -->





";
    }

    public function getTemplateName()
    {
        return "themes/custom/doctor_themes/templates/field/ds-1col--paragraph-news-and-updates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 47,  111 => 38,  108 => 36,  106 => 27,  104 => 26,  93 => 21,  89 => 20,  84 => 18,  80 => 16,  76 => 15,  73 => 14,  68 => 10,  64 => 8,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/doctor_themes/templates/field/ds-1col--paragraph-news-and-updates.html.twig", "D:\\xampp\\htdocs\\doctor_project\\web\\themes\\custom\\doctor_themes\\templates\\field\\ds-1col--paragraph-news-and-updates.html.twig");
    }
}
