<?php

/* themes/businessgroup_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_4fa0bf6274871f47221203d96f5e5089b7b757d0be3ed142eb0098a6f810f9a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 74);
        $filters = array("date" => 379);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('date'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 60
        echo "

<!-- Header and Navbar -->
<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        ";
        // line 74
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 75
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
        ";
        }
        // line 77
        echo "      </div>

      <!-- Navigation -->
      <div class=\"col-md-9\">
        ";
        // line 81
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 82
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
        ";
        }
        // line 83
        echo "      
      </div>
      <!--End Navigation -->

      </div>
    </div>
  </nav>

  <!-- Banner -->
  ";
        // line 92
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()))) {
            echo "  
    <div class=\"container slideshow\">
      <div class=\"row\">
        <div class=\"col-md-12\">
            ";
            // line 96
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 101
        echo "  <!-- End Banner -->

</header>
<!--End Header & Navbar -->


<!--Search-->
  ";
        // line 108
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array()))) {
            // line 109
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 112
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 117
        echo "<!--End Search-->


<!--Highlighted-->
  ";
        // line 121
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 122
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 125
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 130
        echo "<!--End Highlighted-->


<!-- Start Top Widget -->
";
        // line 134
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            echo "  
  ";
            // line 135
            if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array()))) {
                // line 136
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">
          <!-- Top widget first region -->
          <div class = ";
                // line 142
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_class"]) ? $context["topwidget_class"] : null), "html", null, true));
                echo ">
            ";
                // line 143
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array())) {
                    // line 144
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array()), "html", null, true));
                    echo "
            ";
                }
                // line 146
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget second region -->
          <div class = ";
                // line 149
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_class"]) ? $context["topwidget_class"] : null), "html", null, true));
                echo ">
            ";
                // line 150
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array())) {
                    // line 151
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array()), "html", null, true));
                    echo "
            ";
                }
                // line 153
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget third region -->
          <div class = ";
                // line 156
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_third_class"]) ? $context["topwidget_third_class"] : null), "html", null, true));
                echo ">
            ";
                // line 157
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array())) {
                    // line 158
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array()), "html", null, true));
                    echo "
            ";
                }
                // line 160
                echo "          </div>
          <!-- End top widget third region -->
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 167
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 171
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()) &&  !(isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 172
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        ";
            // line 176
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 181
        echo "<!-- End Page Title ---- >


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">
    
    <!--Content top-->
      ";
        // line 190
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 191
            echo "        <div class=\"row\">
          ";
            // line 192
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 195
        echo "    <!--End Content top-->
    
    <!--start:content -->
    <div class=\"row\">
      <div class=\"col-md-12\">";
        // line 199
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "</div>
    </div>

    <div class=\"row layout\">
      <!--- Start Left SideBar -->
      ";
        // line 204
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 205
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 206
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarfirst"]) ? $context["sidebarfirst"] : null), "html", null, true));
            echo " >
            ";
            // line 207
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 211
        echo "      <!---End Right SideBar -->

      <!--- Start content -->
      ";
        // line 214
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 215
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 216
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["contentlayout"]) ? $context["contentlayout"] : null), "html", null, true));
            echo ">
            ";
            // line 217
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 221
        echo "      <!---End content -->

      <!--- Start Right SideBar -->
      ";
        // line 224
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 225
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 226
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarsecond"]) ? $context["sidebarsecond"] : null), "html", null, true));
            echo ">
            ";
            // line 227
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 231
        echo "      <!---End Right SideBar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 237
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array())) {
            // line 238
            echo "      <div class=\"row\">
        ";
            // line 239
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 242
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->



<!-- start: Footer -->
";
        // line 250
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())))) {
            // line 251
            echo "  <div class=\"footerwidget\">
    <div class=\"container\">
      
      <div class=\"row\">

        <!-- Start Footer First Region -->
        <div class = ";
            // line 257
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_first_class"]) ? $context["footer_first_class"] : null), "html", null, true));
            echo ">
          ";
            // line 258
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 259
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
          ";
            }
            // line 261
            echo "        </div>
        <!-- End Footer First Region -->

        <!-- Start Footer Second Region -->
        <div class = ";
            // line 265
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
            echo ">
          ";
            // line 266
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 267
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
          ";
            }
            // line 269
            echo "        </div>
        <!-- End Footer Second Region -->

        <!-- Start Footer third Region -->
        <div class = ";
            // line 273
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
            echo ">
          ";
            // line 274
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 275
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
          ";
            }
            // line 277
            echo "        </div>
        <!-- End Footer Third Region -->
      </div>
    </div>
  </div>
";
        }
        // line 283
        echo "<!--End Footer -->



<!-- Start bottom -->
";
        // line 288
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            echo "  
  ";
            // line 289
            if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array()))) {
                // line 290
                echo "    <div class=\"bottom-widgets\">
      <!-- Start Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Start Bottom First Region -->
          <div class = ";
                // line 297
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 298
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array())) {
                    // line 299
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array()), "html", null, true));
                    echo "
            ";
                }
                // line 301
                echo "          </div>
          <!-- End Bottom First Region -->

          <!-- Start Bottom Second Region -->
          <div class = ";
                // line 305
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 306
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array())) {
                    // line 307
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array()), "html", null, true));
                    echo "
            ";
                }
                // line 309
                echo "          </div>
          <!-- End Bottom Second Region -->

          <!-- Start Bottom third Region -->
          <div class = ";
                // line 313
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 314
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array())) {
                    // line 315
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array()), "html", null, true));
                    echo "
            ";
                }
                // line 317
                echo "          </div>
          <!-- End Bottom Third Region -->

          <div class = ";
                // line 320
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
            ";
                // line 321
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array())) {
                    // line 322
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array()), "html", null, true));
                    echo "
            ";
                }
                // line 324
                echo "          </div>

        </div>
      </div>
    </div>
  ";
            }
        }
        // line 331
        echo "<!--End Bottom -->


<!-- Start Footer Menu -->
";
        // line 335
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array())) {
            // line 336
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6\">
          ";
            // line 340
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array()), "html", null, true));
            echo "
        </div>
        ";
            // line 342
            if ((isset($context["show_social_icon"]) ? $context["show_social_icon"] : null)) {
                // line 343
                echo "        <div class=\"col-sm-6\">
          <div class=\"social-media\">
            ";
                // line 345
                if ((isset($context["facebook_url"]) ? $context["facebook_url"] : null)) {
                    // line 346
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["facebook_url"]) ? $context["facebook_url"] : null), "html", null, true));
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            ";
                }
                // line 348
                echo "            ";
                if ((isset($context["google_plus_url"]) ? $context["google_plus_url"] : null)) {
                    // line 349
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["google_plus_url"]) ? $context["google_plus_url"] : null), "html", null, true));
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            ";
                }
                // line 351
                echo "            ";
                if ((isset($context["twitter_url"]) ? $context["twitter_url"] : null)) {
                    // line 352
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["twitter_url"]) ? $context["twitter_url"] : null), "html", null, true));
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            ";
                }
                // line 354
                echo "            ";
                if ((isset($context["linkedin_url"]) ? $context["linkedin_url"] : null)) {
                    // line 355
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linkedin_url"]) ? $context["linkedin_url"] : null), "html", null, true));
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
                }
                // line 357
                echo "            ";
                if ((isset($context["pinterest_url"]) ? $context["pinterest_url"] : null)) {
                    // line 358
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pinterest_url"]) ? $context["pinterest_url"] : null), "html", null, true));
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
            ";
                }
                // line 360
                echo "            ";
                if ((isset($context["rss_url"]) ? $context["rss_url"] : null)) {
                    // line 361
                    echo "              <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rss_url"]) ? $context["rss_url"] : null), "html", null, true));
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
                }
                // line 363
                echo "          </div>
        </div>
        ";
            }
            // line 366
            echo "      </div>
    </div>
  </div>
";
        }
        // line 370
        echo "<!-- End Footer Menu -->


<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Copyright -->
      <div class=\"col-sm-6\">
        <p>Copyright © ";
        // line 379
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo ". All rights reserved</p>
      </div>
      <!-- End Copyright -->

      <!-- Credit link -->
      ";
        // line 384
        if ((isset($context["show_credit_link"]) ? $context["show_credit_link"] : null)) {
            // line 385
            echo "        <div class=\"col-sm-6\">
          <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
        }
        // line 389
        echo "      <!-- End Credit link -->
      
    </div>
  </div>
</div>


<!-- Google map -->
";
        // line 397
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "google_map", array()))) {
            // line 398
            echo "  <div class=\"google_map\">
    ";
            // line 399
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "google_map", array()), "html", null, true));
            echo "
  </div>
";
        }
        // line 402
        echo "<!-- End Google map -->";
    }

    public function getTemplateName()
    {
        return "themes/businessgroup_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  671 => 402,  665 => 399,  662 => 398,  660 => 397,  650 => 389,  644 => 385,  642 => 384,  634 => 379,  623 => 370,  617 => 366,  612 => 363,  606 => 361,  603 => 360,  597 => 358,  594 => 357,  588 => 355,  585 => 354,  579 => 352,  576 => 351,  570 => 349,  567 => 348,  561 => 346,  559 => 345,  555 => 343,  553 => 342,  548 => 340,  542 => 336,  540 => 335,  534 => 331,  525 => 324,  519 => 322,  517 => 321,  513 => 320,  508 => 317,  502 => 315,  500 => 314,  496 => 313,  490 => 309,  484 => 307,  482 => 306,  478 => 305,  472 => 301,  466 => 299,  464 => 298,  460 => 297,  451 => 290,  449 => 289,  445 => 288,  438 => 283,  430 => 277,  424 => 275,  422 => 274,  418 => 273,  412 => 269,  406 => 267,  404 => 266,  400 => 265,  394 => 261,  388 => 259,  386 => 258,  382 => 257,  374 => 251,  372 => 250,  362 => 242,  356 => 239,  353 => 238,  351 => 237,  343 => 231,  336 => 227,  332 => 226,  329 => 225,  327 => 224,  322 => 221,  315 => 217,  311 => 216,  308 => 215,  306 => 214,  301 => 211,  294 => 207,  290 => 206,  287 => 205,  285 => 204,  277 => 199,  271 => 195,  265 => 192,  262 => 191,  260 => 190,  249 => 181,  241 => 176,  235 => 172,  233 => 171,  227 => 167,  218 => 160,  212 => 158,  210 => 157,  206 => 156,  201 => 153,  195 => 151,  193 => 150,  189 => 149,  184 => 146,  178 => 144,  176 => 143,  172 => 142,  164 => 136,  162 => 135,  158 => 134,  152 => 130,  144 => 125,  139 => 122,  137 => 121,  131 => 117,  123 => 112,  118 => 109,  116 => 108,  107 => 101,  99 => 96,  92 => 92,  81 => 83,  75 => 82,  73 => 81,  67 => 77,  61 => 75,  59 => 74,  43 => 60,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.navigation: Items for the Navigation region.*/
/*  * - page.page_title: Used by Current page Title.*/
/*  * - page.banner: Items for the banner region.*/
/*  * - page.highlighted: Items for the highlighted top  region.*/
/*  * - page.content_top: The main content top of the current page.*/
/*  * - page.help: Item for the help region.*/
/*  * - page.breadcrumb: Item for the Breadcrumb region.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.content_bottom: Items for the bottom in content region.*/
/*  * - page.footer_top: Items for the footer top region.*/
/*  * - page.footer_first: Items for the footer first region.*/
/*  * - page.footer_second: Items for the footer Second region.*/
/*  * - page.footer_third: Items for the footer third region.*/
/*  * - page.footer_bottom: Items for the footer bottom region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* */
/* */
/* <!-- Header and Navbar -->*/
/* <header class="main-header">*/
/*   <nav class="navbar topnav navbar-default" role="navigation">*/
/*     <div class="container">*/
/*       <div class="row">*/
/*       <div class="navbar-header col-md-3">*/
/*         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">*/
/*           <span class="sr-only">Toggle navigation</span>*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*         </button>*/
/*         {% if page.header %}*/
/*           {{ page.header }}*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       <!-- Navigation -->*/
/*       <div class="col-md-9">*/
/*         {% if page.primary_menu %}*/
/*           {{ page.primary_menu }}*/
/*         {% endif %}      */
/*       </div>*/
/*       <!--End Navigation -->*/
/* */
/*       </div>*/
/*     </div>*/
/*   </nav>*/
/* */
/*   <!-- Banner -->*/
/*   {% if is_front and page.slideshow %}  */
/*     <div class="container slideshow">*/
/*       <div class="row">*/
/*         <div class="col-md-12">*/
/*             {{ page.slideshow }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/*   <!-- End Banner -->*/
/* */
/* </header>*/
/* <!--End Header & Navbar -->*/
/* */
/* */
/* <!--Search-->*/
/*   {% if is_front and page.search %}*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         <div class="col-md-12">*/
/*           {{ page.search }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* <!--End Search-->*/
/* */
/* */
/* <!--Highlighted-->*/
/*   {% if page.highlighted %}*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         <div class="col-md-12">*/
/*           {{ page.highlighted }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* <!--End Highlighted-->*/
/* */
/* */
/* <!-- Start Top Widget -->*/
/* {% if is_front %}  */
/*   {% if page.topwidget_first or page.topwidget_second or page.topwidget_third %}*/
/*     <div class="topwidget">*/
/*       <!-- start: Container -->*/
/*       <div class="container">*/
/*         */
/*         <div class="row">*/
/*           <!-- Top widget first region -->*/
/*           <div class = {{ topwidget_class }}>*/
/*             {% if page.topwidget_first %}*/
/*               {{ page.topwidget_first }}*/
/*             {% endif %}*/
/*           </div>*/
/*           <!-- End top widget third region -->*/
/*           <!-- Top widget second region -->*/
/*           <div class = {{ topwidget_class }}>*/
/*             {% if page.topwidget_second %}*/
/*               {{ page.topwidget_second }}*/
/*             {% endif %}*/
/*           </div>*/
/*           <!-- End top widget third region -->*/
/*           <!-- Top widget third region -->*/
/*           <div class = {{ topwidget_third_class }}>*/
/*             {% if page.topwidget_third %}*/
/*               {{ page.topwidget_third }}*/
/*             {% endif %}*/
/*           </div>*/
/*           <!-- End top widget third region -->*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* {% endif %}*/
/* <!--End Top Widget -->*/
/* */
/* */
/* <!-- Page Title -->*/
/* {%  if page.page_title and not is_front %}*/
/*   <div id="page-title">*/
/*     <div id="page-title-inner">*/
/*       <!-- start: Container -->*/
/*       <div class="container">*/
/*         {{ page.page_title }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* <!-- End Page Title ---- >*/
/* */
/* */
/* <!-- layout -->*/
/* <div id="wrapper">*/
/*   <!-- start: Container -->*/
/*   <div class="container">*/
/*     */
/*     <!--Content top-->*/
/*       {% if page.content_top %}*/
/*         <div class="row">*/
/*           {{ page.content_top }}*/
/*         </div>*/
/*       {% endif %}*/
/*     <!--End Content top-->*/
/*     */
/*     <!--start:content -->*/
/*     <div class="row">*/
/*       <div class="col-md-12">{{ page.breadcrumb }}</div>*/
/*     </div>*/
/* */
/*     <div class="row layout">*/
/*       <!--- Start Left SideBar -->*/
/*       {% if page.sidebar_first %}*/
/*         <div class="sidebar" >*/
/*           <div class = {{sidebarfirst}} >*/
/*             {{ page.sidebar_first }}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*       <!---End Right SideBar -->*/
/* */
/*       <!--- Start content -->*/
/*       {% if page.content %}*/
/*         <div class="content_layout">*/
/*           <div class={{contentlayout}}>*/
/*             {{ page.content }}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*       <!---End content -->*/
/* */
/*       <!--- Start Right SideBar -->*/
/*       {% if page.sidebar_second %}*/
/*         <div class="sidebar">*/
/*           <div class={{sidebarsecond}}>*/
/*             {{ page.sidebar_second }}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*       <!---End Right SideBar -->*/
/*       */
/*     </div>*/
/*     <!--End Content -->*/
/* */
/*     <!--Start Content Bottom-->*/
/*     {% if page.content_bottom %}*/
/*       <div class="row">*/
/*         {{ page.content_bottom }}*/
/*       </div>*/
/*     {% endif %}*/
/*     <!--End Content Bottom-->*/
/*   </div>*/
/* </div>*/
/* <!-- End layout -->*/
/* */
/* */
/* */
/* <!-- start: Footer -->*/
/* {% if  is_front and (page.footer_first or page.footer_second or page.footer_third) %}*/
/*   <div class="footerwidget">*/
/*     <div class="container">*/
/*       */
/*       <div class="row">*/
/* */
/*         <!-- Start Footer First Region -->*/
/*         <div class = {{ footer_first_class }}>*/
/*           {% if page.footer_first %}*/
/*             {{ page.footer_first }}*/
/*           {% endif %}*/
/*         </div>*/
/*         <!-- End Footer First Region -->*/
/* */
/*         <!-- Start Footer Second Region -->*/
/*         <div class = {{ footer_class }}>*/
/*           {% if page.footer_second %}*/
/*             {{ page.footer_second }}*/
/*           {% endif %}*/
/*         </div>*/
/*         <!-- End Footer Second Region -->*/
/* */
/*         <!-- Start Footer third Region -->*/
/*         <div class = {{ footer_class }}>*/
/*           {% if page.footer_third %}*/
/*             {{ page.footer_third }}*/
/*           {% endif %}*/
/*         </div>*/
/*         <!-- End Footer Third Region -->*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* <!--End Footer -->*/
/* */
/* */
/* */
/* <!-- Start bottom -->*/
/* {% if is_front %}  */
/*   {% if page.bottom_first or page.bottom_second or page.bottom_third %}*/
/*     <div class="bottom-widgets">*/
/*       <!-- Start Container -->*/
/*       <div class="container">*/
/*         */
/*         <div class="row">*/
/* */
/*           <!-- Start Bottom First Region -->*/
/*           <div class = {{ bottom_class }}>*/
/*             {% if page.bottom_first %}*/
/*               {{ page.bottom_first }}*/
/*             {% endif %}*/
/*           </div>*/
/*           <!-- End Bottom First Region -->*/
/* */
/*           <!-- Start Bottom Second Region -->*/
/*           <div class = {{ bottom_class }}>*/
/*             {% if page.bottom_second %}*/
/*               {{ page.bottom_second }}*/
/*             {% endif %}*/
/*           </div>*/
/*           <!-- End Bottom Second Region -->*/
/* */
/*           <!-- Start Bottom third Region -->*/
/*           <div class = {{ bottom_class }}>*/
/*             {% if page.bottom_third %}*/
/*               {{ page.bottom_third }}*/
/*             {% endif %}*/
/*           </div>*/
/*           <!-- End Bottom Third Region -->*/
/* */
/*           <div class = {{ bottom_class }}>*/
/*             {% if page.bottom_forth %}*/
/*               {{ page.bottom_forth }}*/
/*             {% endif %}*/
/*           </div>*/
/* */
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* {% endif %}*/
/* <!--End Bottom -->*/
/* */
/* */
/* <!-- Start Footer Menu -->*/
/* {% if page.footer_menu %}*/
/*   <div class="footer-menu">*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         <div class="col-sm-6">*/
/*           {{ page.footer_menu }}*/
/*         </div>*/
/*         {% if show_social_icon %}*/
/*         <div class="col-sm-6">*/
/*           <div class="social-media">*/
/*             {% if facebook_url %}*/
/*               <a href="{{ facebook_url }}"  class="facebook" target="_blank" ><i class="fa fa-facebook"></i></a>*/
/*             {% endif %}*/
/*             {% if google_plus_url %}*/
/*               <a href="{{ google_plus_url }}"  class="google-plus" target="_blank" ><i class="fa fa-google-plus"></i></a>*/
/*             {% endif %}*/
/*             {% if twitter_url %}*/
/*               <a href="{{ twitter_url }}" class="twitter" target="_blank" ><i class="fa fa-twitter"></i></a>*/
/*             {% endif %}*/
/*             {% if linkedin_url %}*/
/*               <a href="{{ linkedin_url }}" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>*/
/*             {% endif %}*/
/*             {% if pinterest_url %}*/
/*               <a href="{{ pinterest_url }}" class="pinterest" target="_blank" ><i class="fa fa-pinterest"></i></a>*/
/*             {% endif %}*/
/*             {% if rss_url %}*/
/*               <a href="{{ rss_url }}" class="rss" target="_blank" ><i class="fa fa-rss"></i></a>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* <!-- End Footer Menu -->*/
/* */
/* */
/* <div class="copyright">*/
/*   <div class="container">*/
/*     <div class="row">*/
/* */
/*       <!-- Copyright -->*/
/*       <div class="col-sm-6">*/
/*         <p>Copyright © {{ "now"|date("Y") }}. All rights reserved</p>*/
/*       </div>*/
/*       <!-- End Copyright -->*/
/* */
/*       <!-- Credit link -->*/
/*       {% if show_credit_link %}*/
/*         <div class="col-sm-6">*/
/*           <p class="credit-link">Designed By <a href="http://www.zymphonies.com" target="_blank">Zymphonies</a></p>*/
/*         </div>*/
/*       {% endif %}*/
/*       <!-- End Credit link -->*/
/*       */
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* <!-- Google map -->*/
/* {% if is_front and page.google_map %}*/
/*   <div class="google_map">*/
/*     {{ page.google_map }}*/
/*   </div>*/
/* {% endif %}*/
/* <!-- End Google map -->*/
