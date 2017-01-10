<?php

/* base.html */
class __TwigTemplate_83810c4681a533bf6fbc83b2047a6bb4e4595d9545878883b74b1352f3af630c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html ";
        // line 2
        echo $this->env->getExtension('api')->site_handler("language_attr");
        echo " class=\"no-js\">


    <!--    Stefan Vandermeulen | http://netdust.be/    -->

    <meta charset=\"";
        // line 7
        echo $this->env->getExtension('api')->site_handler("charset");
        echo "\">
    <title>";
        // line 8
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('api')->page_handler("_title")), "html", null, true);
        echo "</title>

    <link href=\"//www.google-analytics.com\" rel=\"dns-prefetch\">
    <link href=\"";
        // line 11
        echo $this->env->getExtension('api')->location_handler("img", "icons/favicon.ico");
        echo "\" rel=\"shortcut icon\">
    <link href=\"";
        // line 12
        echo $this->env->getExtension('api')->location_handler("img", "icons/touch.png");
        echo "\" rel=\"apple-touch-icon-precomposed\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"";
        // line 16
        echo $this->env->getExtension('api')->page_handler("seo_description", 1);
        echo "\"/>
    <meta name=\"keywords\" content=\"";
        // line 17
        echo $this->env->getExtension('api')->page_handler("keywords", 1);
        echo "\"/>

    ";
        // line 19
        echo $this->env->getExtension('api')->util_handler("hook", "header");
        echo "

</head>

<body class=\"";
        // line 23
        echo $this->env->getExtension('api')->page_handler("body_class");
        echo "\">

";
        // line 25
        echo $this->env->getExtension('api')->util_handler("hook", "render.after.body");
        echo "

<!--[if lt IE 10]>
<div style=\"color: #434343;text-align: center;margin-bottom: 2em;\"><h1>Did you know that your Internet Explorer is out of date?</h1>To get the best possible experience using our site we recommend that you <a target=\"_blank\" href=\"http://browsehappy.com/\">upgrade</a> to a modern web browser.</div>
<![endif]-->


<!-- wrapper -->
<div class=\"container px2 py4\">
    <!-- header -->
    <header class=\"header px2 py4\" role=\"banner\">
        <h4 id=\"handle\">Navigation</h4>
        <nav class=\"navigation\" data-navigation-handle=\"#handle\">
            <a href=\"#\">Home</a>
            <a href=\"#\">About</a>
            <a href=\"#\">Contact</a>
        </nav>
    </header>
    <!-- /header -->

    <!-- sections -->
    ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "    <!-- /sections -->

    <!-- footer -->
    <footer class=\"footer\" role=\"contentinfo\">

        <!-- copyright -->
        <p class=\"copyright\">
            ";
        // line 55
        echo $this->env->getExtension('api')->site_handler("copyright");
        echo ".
        </p>
        <!-- /copyright -->

    </footer>
    <!-- /footer -->
</div>
<!-- /wrapper -->

<!-- javascript -->
";
        // line 65
        echo $this->env->getExtension('api')->util_handler("hook", "script");
        echo "


</body>
</html>";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        // line 47
        echo "    ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 47,  130 => 46,  121 => 65,  108 => 55,  99 => 48,  97 => 46,  73 => 25,  68 => 23,  61 => 19,  56 => 17,  52 => 16,  45 => 12,  41 => 11,  35 => 8,  31 => 7,  23 => 2,  20 => 1,);
    }
}
/* <!doctype html>*/
/* <html {{_s__language_attr()}} class="no-js">*/
/* */
/* */
/*     <!--    Stefan Vandermeulen | http://netdust.be/    -->*/
/* */
/*     <meta charset="{{_s__charset()}}">*/
/*     <title>{{ _p___title() | striptags }}</title>*/
/* */
/*     <link href="//www.google-analytics.com" rel="dns-prefetch">*/
/*     <link href="{{_l__img('icons/favicon.ico')}}" rel="shortcut icon">*/
/*     <link href="{{_l__img('icons/touch.png')}}" rel="apple-touch-icon-precomposed">*/
/* */
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="{{_p__seo_description(1)}}"/>*/
/*     <meta name="keywords" content="{{_p__keywords(1)}}"/>*/
/* */
/*     {{__hook('header')}}*/
/* */
/* </head>*/
/* */
/* <body class="{{_p__body_class()}}">*/
/* */
/* {{__hook('render.after.body')}}*/
/* */
/* <!--[if lt IE 10]>*/
/* <div style="color: #434343;text-align: center;margin-bottom: 2em;"><h1>Did you know that your Internet Explorer is out of date?</h1>To get the best possible experience using our site we recommend that you <a target="_blank" href="http://browsehappy.com/">upgrade</a> to a modern web browser.</div>*/
/* <![endif]-->*/
/* */
/* */
/* <!-- wrapper -->*/
/* <div class="container px2 py4">*/
/*     <!-- header -->*/
/*     <header class="header px2 py4" role="banner">*/
/*         <h4 id="handle">Navigation</h4>*/
/*         <nav class="navigation" data-navigation-handle="#handle">*/
/*             <a href="#">Home</a>*/
/*             <a href="#">About</a>*/
/*             <a href="#">Contact</a>*/
/*         </nav>*/
/*     </header>*/
/*     <!-- /header -->*/
/* */
/*     <!-- sections -->*/
/*     {% block content %}*/
/*     {% endblock %}*/
/*     <!-- /sections -->*/
/* */
/*     <!-- footer -->*/
/*     <footer class="footer" role="contentinfo">*/
/* */
/*         <!-- copyright -->*/
/*         <p class="copyright">*/
/*             {{_s__copyright()}}.*/
/*         </p>*/
/*         <!-- /copyright -->*/
/* */
/*     </footer>*/
/*     <!-- /footer -->*/
/* </div>*/
/* <!-- /wrapper -->*/
/* */
/* <!-- javascript -->*/
/* {{__hook('script')}}*/
/* */
/* */
/* </body>*/
/* </html>*/
