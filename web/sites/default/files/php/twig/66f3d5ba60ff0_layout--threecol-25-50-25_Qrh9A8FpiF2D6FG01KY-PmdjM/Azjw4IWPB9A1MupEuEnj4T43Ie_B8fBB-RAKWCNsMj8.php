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

/* core/modules/layout_discovery/layouts/threecol_25_50_25/layout--threecol-25-50-25.html.twig */
class __TwigTemplate_adf09a061cdefe264c589e99dbf84eb6 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        $context["classes"] = ["layout", "layout--threecol-25-50-25"];
        // line 23
        if (($context["content"] ?? null)) {
            // line 24
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 24), 24, $this->source), "html", null, true);
            echo ">
    ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "top", [], "any", false, false, true, 25)) {
                // line 26
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "top", [], "any", false, false, true, 26), "addClass", ["layout__region", "layout__region--top"], "method", false, false, true, 26), 26, $this->source), "html", null, true);
                echo ">
        ";
                // line 27
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "top", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 30
            echo "
    ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first", [], "any", false, false, true, 31)) {
                // line 32
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "first", [], "any", false, false, true, 32), "addClass", ["layout__region", "layout__region--first"], "method", false, false, true, 32), 32, $this->source), "html", null, true);
                echo ">
        ";
                // line 33
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "first", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 36
            echo "
    ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 37)) {
                // line 38
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "second", [], "any", false, false, true, 38), "addClass", ["layout__region", "layout__region--second"], "method", false, false, true, 38), 38, $this->source), "html", null, true);
                echo ">
        ";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 42
            echo "
    ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "third", [], "any", false, false, true, 43)) {
                // line 44
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "third", [], "any", false, false, true, 44), "addClass", ["layout__region", "layout__region--third"], "method", false, false, true, 44), 44, $this->source), "html", null, true);
                echo ">
        ";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "third", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 48
            echo "
    ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bottom", [], "any", false, false, true, 49)) {
                // line 50
                echo "      <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["region_attributes"] ?? null), "bottom", [], "any", false, false, true, 50), "addClass", ["layout__region", "layout__region--bottom"], "method", false, false, true, 50), 50, $this->source), "html", null, true);
                echo ">
        ";
                // line 51
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "bottom", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 54
            echo "  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "attributes", "region_attributes"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/modules/layout_discovery/layouts/threecol_25_50_25/layout--threecol-25-50-25.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  125 => 54,  119 => 51,  114 => 50,  112 => 49,  109 => 48,  103 => 45,  98 => 44,  96 => 43,  93 => 42,  87 => 39,  82 => 38,  80 => 37,  77 => 36,  71 => 33,  66 => 32,  64 => 31,  61 => 30,  55 => 27,  50 => 26,  48 => 25,  43 => 24,  41 => 23,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/layout_discovery/layouts/threecol_25_50_25/layout--threecol-25-50-25.html.twig", "/var/www/html/web/core/modules/layout_discovery/layouts/threecol_25_50_25/layout--threecol-25-50-25.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 18, "if" => 23);
        static $filters = array("escape" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
