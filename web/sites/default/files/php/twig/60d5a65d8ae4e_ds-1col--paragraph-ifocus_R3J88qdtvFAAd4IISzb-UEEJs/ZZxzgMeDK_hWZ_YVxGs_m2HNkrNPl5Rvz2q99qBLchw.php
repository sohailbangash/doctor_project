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

/* themes/custom/doctor_themes/templates/field/ds-1col--paragraph-ifocus.html.twig */
class __TwigTemplate_eda7cc441ce5f622d6e9ea42b5ea216075315f6feadf287272f4531958cfa38d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 13];
        $filters = ["escape" => 7];
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
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_first_title", [])), "html", null, true);
        echo "</h2>
          ";
        // line 9
        echo "        </div>

        <div class=\"row\">

     ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_news_image", []), "#items", [], "array"), "value", []));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 14
            echo "         <div class=\"col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0\">
            <div class=\"card\" style=\"border:none;\">
            <div class=\"card-img-top card__img\">";
            // line 16
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_news_image", []), $context["key"], [], "array")), "html", null, true);
            echo " </div>
            <div class=\"card-body inFocus_body\">
            ";
            // line 19
            echo "            <h5 class=\"card-text inFocus_text\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_descripation", []), $context["key"], [], "array")), "html", null, true);
            echo "</h5>
         </div>
          </div>
  </div>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "<!--
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

    
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id=\"faq\" class=\"faq section-bg\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class=\"faq-list\">
          <ul>
            <li data-aos=\"fade-up\">
              <i class=\"bx bx-help-circle icon-help\"></i> <a data-toggle=\"collapse\" class=\"collapse\" href=\"#faq-list-1\">Non consectetur a erat nam at lectus urna duis? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-chevron-up icon-close\"></i></a>
              <div id=\"faq-list-1\" class=\"collapse show\" data-parent=\".faq-list\">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos=\"fade-up\" data-aos-delay=\"100\">
              <i class=\"bx bx-help-circle icon-help\"></i> <a data-toggle=\"collapse\" href=\"#faq-list-2\" class=\"collapsed\">Feugiat scelerisque varius morbi enim nunc? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-chevron-up icon-close\"></i></a>
              <div id=\"faq-list-2\" class=\"collapse\" data-parent=\".faq-list\">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos=\"fade-up\" data-aos-delay=\"200\">
              <i class=\"bx bx-help-circle icon-help\"></i> <a data-toggle=\"collapse\" href=\"#faq-list-3\" class=\"collapsed\">Dolor sit amet consectetur adipiscing elit? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-chevron-up icon-close\"></i></a>
              <div id=\"faq-list-3\" class=\"collapse\" data-parent=\".faq-list\">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos=\"fade-up\" data-aos-delay=\"300\">
              <i class=\"bx bx-help-circle icon-help\"></i> <a data-toggle=\"collapse\" href=\"#faq-list-4\" class=\"collapsed\">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-chevron-up icon-close\"></i></a>
              <div id=\"faq-list-4\" class=\"collapse\" data-parent=\".faq-list\">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos=\"fade-up\" data-aos-delay=\"400\">
              <i class=\"bx bx-help-circle icon-help\"></i> <a data-toggle=\"collapse\" href=\"#faq-list-5\" class=\"collapsed\">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-chevron-up icon-close\"></i></a>
              <div id=\"faq-list-5\" class=\"collapse\" data-parent=\".faq-list\">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->";
    }

    public function getTemplateName()
    {
        return "themes/custom/doctor_themes/templates/field/ds-1col--paragraph-ifocus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  86 => 19,  81 => 16,  77 => 14,  73 => 13,  67 => 9,  63 => 7,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/doctor_themes/templates/field/ds-1col--paragraph-ifocus.html.twig", "D:\\xampp\\htdocs\\doctor_project\\web\\themes\\custom\\doctor_themes\\templates\\field\\ds-1col--paragraph-ifocus.html.twig");
    }
}
