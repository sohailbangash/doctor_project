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

/* themes/custom/doctor_themes/templates/system/page.html.twig */
class __TwigTemplate_b47beaf91c209b38cdc4aa2dffcc510b87b53f78efd9f7950aafba2b3b6c1404 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 6];
        $filters = ["escape" => 6];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        echo " ";
        // line 3
        echo "    <div class=\"col-md-12\">
        <div class=\"row bg-heading-color\">
            <div class=\"col-md-6  navbar_log mt-3\">
                ";
        // line 6
        if ($this->getAttribute(($context["page"] ?? null), "navbar_brand", [])) {
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar_brand", [])), "html", null, true);
            echo " ";
        }
        // line 7
        echo "            </div>
            <div class=\"col-md-6 region--address mt-3\">
                ";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar_icons", [])), "html", null, true);
        echo "
            </div>
            
        </div>
    </div>



   
        <div class=\"offset-3\">";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navbar", [])), "html", null, true);
        echo "</div>


    ";
        // line 26
        echo "

    <div class=\"col-md-12\">
        <div class=\"row\">
            <div class=\"col-md-12\">";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "tabs", [])), "html", null, true);
        echo "</div>
        </div>
    </div>
    <div class=\"\">

        ";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo " ";
        // line 36
        echo " ";
        echo " ";
        // line 37
        echo "    </div>

    ";
        // line 40
        echo "
<!----------------------- SECOND SECTION START------------------------------------->
<!-- Second Section  Start -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "region_second_first", [])), "html", null, true);
        echo "</div>

                <div class=\"col-md-6\">
                    <div class=\"col-md-12\"> ";
        // line 50
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "region_second_second", [])), "html", null, true);
        echo "</div>

                    <div class=\"col-md-12\"> ";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "region_second_third", [])), "html", null, true);
        echo "</div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-------- SECOND SECTION END--------------->





<!----------------------- BUTTON SECTION START------------------------------------->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6 offset-md-3\">
            ";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "region_third_buttton", [])), "html", null, true);
        echo " ";
        // line 70
        echo "        </div>

    </div>
</div>
<!------ BUTTON SECTION END---------->







";
        // line 95
        echo "<footer class= 'col-md-12'>
    <div class=\"row\">
        <div class=\"col-md-4\">";
        // line 97
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
        echo "</div>
        <div class=\"col-md-4\">";
        // line 98
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
        echo "</div>
        <div class=\"col-md-4\">";
        // line 99
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
        echo "</div>
    </div>

    ";
        // line 102
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
</footer>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/doctor_themes/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 102,  183 => 99,  179 => 98,  175 => 97,  171 => 95,  157 => 70,  154 => 69,  134 => 52,  129 => 50,  123 => 47,  114 => 40,  110 => 37,  107 => 36,  104 => 35,  96 => 30,  90 => 26,  84 => 18,  72 => 9,  68 => 7,  62 => 6,  57 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/doctor_themes/templates/system/page.html.twig", "D:\\xampp\\htdocs\\doctor_project\\web\\themes\\custom\\doctor_themes\\templates\\system\\page.html.twig");
    }
}
