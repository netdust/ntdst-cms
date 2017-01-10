<?php

/* index.php */
class __TwigTemplate_fba689652a2e7d2dd2f7ba0d2584f74c809f001e7da0d6d88b460d86b3533313 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html class=\"js\" lang=\"en\" >
<head>

    <!--

    Copyright (c) Stefan Vandermeulen | http://netdust.be/

    -->

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_key"]) ? $context["csrf_key"] : null), "html", null, true);
        echo "\" content=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\">
    <meta charset=\"utf-8\" />
    <title></title>

    ";
        // line 17
        if (((isset($context["production"]) ? $context["production"] : null) == false)) {
            // line 18
            echo "    <link rel=\"stylesheet\" href=\"";
            echo $this->env->getExtension('api')->location_handler("to", "bower_components/normalize.css/normalize.css");
            echo "\" />
    <link rel=\"stylesheet\" href=\"";
            // line 19
            echo $this->env->getExtension('api')->location_handler("to", "bower_components/foundation/css/foundation.css");
            echo "\" />
    <link rel=\"stylesheet\" href=\"";
            // line 20
            echo $this->env->getExtension('api')->location_handler("to", "bower_components/components-font-awesome/css/font-awesome.css");
            echo "\" />
    <link rel=\"stylesheet\" href=\"";
            // line 21
            echo $this->env->getExtension('api')->location_handler("to", "bower_components/dropzone/dist/dropzone.css");
            echo "\" />
    ";
        }
        // line 23
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->env->getExtension('api')->location_handler("to", "admin/front/css/build.css");
        echo "\" />
    <script data-main=\"";
        // line 25
        echo $this->env->getExtension('api')->location_handler("to", "admin/front/js/admin");
        echo "\" src=\"";
        echo $this->env->getExtension('api')->location_handler("to", "admin/front/js/lib/require.js");
        echo "\"></script>

</head>
<body>
<div class=\"container\">

</div>
<div id=\"bootstrap\" role=\"data-bootstrap\" >
    <script>
        base='";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["base"]) ? $context["base"] : null), "html", null, true);
        echo "';
        define('app-bootstrap', function(){
            return {
                settings:";
        // line 37
        echo (isset($context["settings"]) ? $context["settings"] : null);
        echo ",
                modules:";
        // line 38
        echo (isset($context["modules"]) ? $context["modules"] : null);
        echo "
            }
        })
    </script>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 38,  89 => 37,  83 => 34,  69 => 25,  65 => 24,  62 => 23,  57 => 21,  53 => 20,  49 => 19,  44 => 18,  42 => 17,  33 => 13,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html class="js" lang="en" >*/
/* <head>*/
/* */
/*     <!--*/
/* */
/*     Copyright (c) Stefan Vandermeulen | http://netdust.be/*/
/* */
/*     -->*/
/* */
/*     <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*     <meta name="{{csrf_key}}" content="{{csrf_token}}">*/
/*     <meta charset="utf-8" />*/
/*     <title></title>*/
/* */
/*     {% if production==false %}*/
/*     <link rel="stylesheet" href="{{_l__to( 'bower_components/normalize.css/normalize.css' )}}" />*/
/*     <link rel="stylesheet" href="{{_l__to( 'bower_components/foundation/css/foundation.css' )}}" />*/
/*     <link rel="stylesheet" href="{{_l__to( 'bower_components/components-font-awesome/css/font-awesome.css' )}}" />*/
/*     <link rel="stylesheet" href="{{_l__to( 'bower_components/dropzone/dist/dropzone.css' )}}" />*/
/*     {% endif %}*/
/* */
/*     <link rel="stylesheet" href="{{_l__to( 'admin/front/css/build.css' )}}" />*/
/*     <script data-main="{{_l__to( 'admin/front/js/admin' )}}" src="{{_l__to('admin/front/js/lib/require.js')}}"></script>*/
/* */
/* </head>*/
/* <body>*/
/* <div class="container">*/
/* */
/* </div>*/
/* <div id="bootstrap" role="data-bootstrap" >*/
/*     <script>*/
/*         base='{{base}}';*/
/*         define('app-bootstrap', function(){*/
/*             return {*/
/*                 settings:{{settings|raw}},*/
/*                 modules:{{modules|raw}}*/
/*             }*/
/*         })*/
/*     </script>*/
/* </div>*/
/* </body>*/
/* </html>*/
/* */
