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

/* themes/sales_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_a8c1cd8299ef2af7c3cea257e1e0d1d0 extends Template
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
        // line 60
        echo "

";
        // line 62
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contact_email", [], "any", false, false, true, 62) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_menu", [], "any", false, false, true, 62))) {
            // line 63
            echo "  <div class=\"top-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Contact Phone & Email -->
        <div class=\"col-sm-6\">
          ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contact_email", [], "any", false, false, true, 69)) {
                // line 70
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contact_email", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 72
            echo "        </div>
        <!-- End: Contact Phone & Email -->

        <!-- Start: Top menu -->
        <div class=\"col-sm-6\">
          ";
            // line 77
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_menu", [], "any", false, false, true, 77)) {
                // line 78
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_menu", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 80
            echo "        </div>
        <!-- End: Top menu -->

      </div>
    </div>
  </div>
";
        }
        // line 87
        echo "
<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->
        <div class=\"navbar-header col-md-2\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          ";
        // line 101
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 101)) {
            // line 102
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 104
        echo "        </div>
        <!-- End: Header -->

        <!-- Start: Main menu -->
        <div class=\"col-md-8\">
          ";
        // line 109
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 109)) {
            // line 110
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 112
        echo "        </div>
        <!-- End: Main menu -->

        <!-- Start: Search -->
        <div class=\"col-md-2\">
            ";
        // line 117
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 117)) {
            // line 118
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 119
        echo "        
        </div>
        <!-- End: Search -->

        </div>
      </div>
    </nav>
</header>


<!-- Start: Slider -->
  ";
        // line 130
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 131
            echo "    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 134
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 134, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "      </ul>
    </div>
  ";
        }
        // line 139
        echo "<!-- End: Slider -->


<!-- Start: Testimonials -->
  ";
        // line 143
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "testimonials", [], "any", false, false, true, 143))) {
            // line 144
            echo "    <div class=\"testimonials-wrap\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 148
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "testimonials", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 154
        echo "<!--End: Testimonials -->


<!-- Start: Home page message -->
  ";
        // line 158
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "homepagemessage", [], "any", false, false, true, 158))) {
            // line 159
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 162
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "homepagemessage", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 167
        echo "<!--End: Home page message -->


<!-- Start: Highlight region -->
  ";
        // line 171
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 171)) {
            // line 172
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 175
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 180
        echo "<!-- End: Highlight region -->


<!-- Start Top Widgets -->
";
        // line 184
        if ((($context["is_front"] ?? null) && ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 184) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 184)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 184)))) {
            // line 185
            echo "  <div class=\"topwidget\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Top widget first -->          
        ";
            // line 190
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 190)) {
                // line 191
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 191, $this->source), "html", null, true);
                echo ">
            ";
                // line 192
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 194
            echo "          
        <!-- End: Top widget first --> 

        <!-- Start: Top widget second -->          
        ";
            // line 198
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 198)) {
                // line 199
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 199, $this->source), "html", null, true);
                echo ">
            ";
                // line 200
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 202
            echo "          
        <!-- End: Top widget second --> 
        
        <!-- Start: Top widget third -->         
        ";
            // line 206
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 206)) {
                // line 207
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_third_class"] ?? null), 207, $this->source), "html", null, true);
                echo ">
            ";
                // line 208
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 208), 208, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 210
            echo "          
        <!-- End: Top widget third --> 

      </div>
    </div>
  </div>
";
        }
        // line 217
        echo "<!-- End: Top Widgets -->


<!-- Start: Page title -->
";
        // line 221
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 221) &&  !($context["is_front"] ?? null))) {
            // line 222
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 227
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 227), 227, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 234
        echo "<!-- End: Page title -- >


<!-- Start: Content Layout -->
<div id=\"wrapper\">  
  <div class=\"container\">
    
    <!-- Start: Content top -->
      ";
        // line 242
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 242)) {
            // line 243
            echo "        <div class=\"row\">
          ";
            // line 244
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 244), 244, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 247
        echo "    <!-- End: Content top -->
    
    <!-- Start: Breadcrumb -->
    ";
        // line 250
        if ( !($context["is_front"] ?? null)) {
            // line 251
            echo "      <div class=\"row\">
        <div class=\"col-md-12\">";
            // line 252
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 252), 252, $this->source), "html", null, true);
            echo "</div>
      </div>
    ";
        }
        // line 255
        echo "    <!-- End: Breadcrumb -->

    <div class=\"row layout\">

      <!--- Start: Left SideBar -->
      ";
        // line 260
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 260)) {
            // line 261
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 262
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 262, $this->source), "html", null, true);
            echo " >
            ";
            // line 263
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 263), 263, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 267
        echo "      <!-- End Left SideBar -->

      <!--- Start Content -->
      ";
        // line 270
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 270)) {
            // line 271
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 272
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 272, $this->source), "html", null, true);
            echo ">
            ";
            // line 273
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 273), 273, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 277
        echo "      <!-- End: Content -->

      <!-- Start: Right SideBar -->
      ";
        // line 280
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 280)) {
            // line 281
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 282
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 282, $this->source), "html", null, true);
            echo ">
            ";
            // line 283
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 283), 283, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 287
        echo "      <!-- End: Right SideBar -->
      
    </div>
    <!--End: Content -->

  </div>
</div>
<!-- End: Content Layout -->


<!-- Start: Address -->
  ";
        // line 298
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "address", [], "any", false, false, true, 298))) {
            // line 299
            echo "    <div class=\"address-wrap\">
      ";
            // line 300
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "address", [], "any", false, false, true, 300), 300, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 303
        echo "<!--End: Address -->


<!-- Start: Bottom Widgets-->
";
        // line 307
        if ((($context["is_front"] ?? null) && ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 307) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 307)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 307)))) {
            // line 308
            echo "  <div class=\"bottom-widgets\">
    <div class=\"container\">      
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 313
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 313)) {
                // line 314
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 314, $this->source), "html", null, true);
                echo ">
            ";
                // line 315
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 315), 315, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 317
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 321
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 321)) {
                // line 322
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 322, $this->source), "html", null, true);
                echo ">
            ";
                // line 323
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 323), 323, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 325
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 329
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 329)) {
                // line 330
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 330, $this->source), "html", null, true);
                echo ">
            ";
                // line 331
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 331), 331, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 333
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 337
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 337)) {
                // line 338
                echo "        <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 338, $this->source), "html", null, true);
                echo ">
          ";
                // line 339
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 339), 339, $this->source), "html", null, true);
                echo "
        </div>
        ";
            }
            // line 342
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>
";
        }
        // line 348
        echo "<!-- End: Bottom Widgets-->


<!-- Start: Footer -->
";
        // line 352
        if ((($context["is_front"] ?? null) && ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 352) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 352)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 352)))) {
            // line 353
            echo "  <div class=\"footerwidget\">
    <div class=\"container\">      
      <div class=\"row\">

        <!-- Start: Footer First -->
        ";
            // line 358
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 358)) {
                // line 359
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_class"] ?? null), 359, $this->source), "html", null, true);
                echo ">
            ";
                // line 360
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 360), 360, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 363
            echo "        <!-- End: Footer First -->

        <!-- Start :Footer Second -->
        ";
            // line 366
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 366)) {
                // line 367
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 367, $this->source), "html", null, true);
                echo ">
            ";
                // line 368
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 368), 368, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 371
            echo "        <!-- End: Footer Second -->

        <!-- Start: Footer third -->
        ";
            // line 374
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 374)) {
                // line 375
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 375, $this->source), "html", null, true);
                echo ">
            ";
                // line 376
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 376), 376, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 379
            echo "        <!-- End: Footer Third -->

      </div>
    </div>
  </div>
";
        }
        // line 385
        echo "<!--End: Footer -->


<!-- Start: Google map -->
";
        // line 389
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "google_map", [], "any", false, false, true, 389)) {
            // line 390
            echo "  <div class=\"google_map\">
    ";
            // line 391
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "google_map", [], "any", false, false, true, 391), 391, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 394
        echo "<!-- End: Google map -->


<!-- Start: Footer Menu -->
";
        // line 398
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 398)) {
            // line 399
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Footer Menu -->
        <div class=\"col-sm-6\">
          ";
            // line 405
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 405), 405, $this->source), "html", null, true);
            echo "
        </div>
        <!-- End: Footer Menu -->

        <!-- Start: Social media links -->
        ";
            // line 410
            if (($context["show_social_icon"] ?? null)) {
                // line 411
                echo "          <div class=\"col-sm-6\">
            <div class=\"social-media\">
              ";
                // line 413
                if (($context["facebook_url"] ?? null)) {
                    // line 414
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 414, $this->source), "html", null, true);
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
              ";
                }
                // line 416
                echo "              ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 417
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 417, $this->source), "html", null, true);
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
              ";
                }
                // line 419
                echo "              ";
                if (($context["twitter_url"] ?? null)) {
                    // line 420
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 420, $this->source), "html", null, true);
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
              ";
                }
                // line 422
                echo "              ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 423
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 423, $this->source), "html", null, true);
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
              ";
                }
                // line 425
                echo "              ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 426
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 426, $this->source), "html", null, true);
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
              ";
                }
                // line 428
                echo "              ";
                if (($context["rss_url"] ?? null)) {
                    // line 429
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 429, $this->source), "html", null, true);
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
              ";
                }
                // line 431
                echo "            </div>
          </div>
        ";
            }
            // line 434
            echo "        <!-- End: Social media links -->

      </div>
    </div>
  </div>
";
        }
        // line 440
        echo "<!-- End: Footer Menu -->


<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Copyright -->
      <div class=\"col-sm-6\">
        <p>Copyright © ";
        // line 449
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</p>
      </div>
      <!-- End: Copyright -->

      <!-- Start: Credit link -->
      ";
        // line 454
        if (($context["show_credit_link"] ?? null)) {
            // line 455
            echo "        <div class=\"col-sm-6\">
          <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
        }
        // line 459
        echo "      <!-- End: Credit link -->
      
    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "is_front", "show_slideshow", "slider_content", "topwidget_class", "topwidget_third_class", "sidebarfirst", "contentlayout", "sidebarsecond", "bottom_class", "footer_first_class", "footer_class", "show_social_icon", "facebook_url", "google_plus_url", "twitter_url", "linkedin_url", "pinterest_url", "rss_url", "show_credit_link"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/sales_zymphonies_theme/templates/layout/page.html.twig";
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
        return array (  772 => 459,  766 => 455,  764 => 454,  756 => 449,  745 => 440,  737 => 434,  732 => 431,  726 => 429,  723 => 428,  717 => 426,  714 => 425,  708 => 423,  705 => 422,  699 => 420,  696 => 419,  690 => 417,  687 => 416,  681 => 414,  679 => 413,  675 => 411,  673 => 410,  665 => 405,  657 => 399,  655 => 398,  649 => 394,  643 => 391,  640 => 390,  638 => 389,  632 => 385,  624 => 379,  618 => 376,  613 => 375,  611 => 374,  606 => 371,  600 => 368,  595 => 367,  593 => 366,  588 => 363,  582 => 360,  577 => 359,  575 => 358,  568 => 353,  566 => 352,  560 => 348,  552 => 342,  546 => 339,  541 => 338,  539 => 337,  533 => 333,  527 => 331,  522 => 330,  520 => 329,  514 => 325,  508 => 323,  503 => 322,  501 => 321,  495 => 317,  489 => 315,  484 => 314,  482 => 313,  475 => 308,  473 => 307,  467 => 303,  461 => 300,  458 => 299,  456 => 298,  443 => 287,  436 => 283,  432 => 282,  429 => 281,  427 => 280,  422 => 277,  415 => 273,  411 => 272,  408 => 271,  406 => 270,  401 => 267,  394 => 263,  390 => 262,  387 => 261,  385 => 260,  378 => 255,  372 => 252,  369 => 251,  367 => 250,  362 => 247,  356 => 244,  353 => 243,  351 => 242,  341 => 234,  331 => 227,  324 => 222,  322 => 221,  316 => 217,  307 => 210,  301 => 208,  296 => 207,  294 => 206,  288 => 202,  282 => 200,  277 => 199,  275 => 198,  269 => 194,  263 => 192,  258 => 191,  256 => 190,  249 => 185,  247 => 184,  241 => 180,  233 => 175,  228 => 172,  226 => 171,  220 => 167,  212 => 162,  207 => 159,  205 => 158,  199 => 154,  190 => 148,  184 => 144,  182 => 143,  176 => 139,  171 => 136,  162 => 134,  158 => 133,  154 => 131,  152 => 130,  139 => 119,  133 => 118,  131 => 117,  124 => 112,  118 => 110,  116 => 109,  109 => 104,  103 => 102,  101 => 101,  85 => 87,  76 => 80,  70 => 78,  68 => 77,  61 => 72,  55 => 70,  53 => 69,  45 => 63,  43 => 62,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/sales_zymphonies_theme/templates/layout/page.html.twig", "/var/www/html/web/themes/sales_zymphonies_theme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 62, "for" => 133);
        static $filters = array("escape" => 70, "raw" => 134, "date" => 449);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
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
