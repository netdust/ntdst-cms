<?php

/* home.html */
class __TwigTemplate_527c002f2b88f4aa237e2c294add0dd21959239c0ac310ee234e48d5dd64c2d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "home.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<section id=\"features\" class=\"container px2 py4 overflow-hidden\">
    <div class=\"h3 center row\">
        <div class=\"column-4 py2\">
            Lightweight, minimal styles ready to be customized
        </div>
        <div class=\"column-4 py2\">
            No compilation or installation required – just plain HTML and CSS
        </div>
        <div class=\"column-4 py2\">
            Powerful utilities to design in the browser faster
        </div>
    </div>
</section>

<section id=\"stats\" class=\"h6 bold caps center container px2 overflow-hidden\">
    <div class=\"p2 border rounded\">
        <div class=\"inline-block px2 py1\">
            <div class=\"h3\">2.52 kB</div>
            gzipped
        </div>
        <div class=\"inline-block px2 py1\">
            <div class=\"h3\">206</div>
            rules
        </div>
        <div class=\"inline-block px2 py1\">
            <div class=\"h3\">314</div>
            selectors
        </div>
        <div class=\"inline-block px2 py1\">
            <div class=\"h3\">306</div>
            declarations
        </div>
    </div>
</section>

<div class=\"center px2 py3 mt3 overflow-hidden\">
    <a href=\"https://github.com/basscss/skull\" class=\"h6 caps button ml1 mr1\">Github</a>
    <a href=\"https://twitter.com/intent/tweet?text=Skull:%20Bare%20bones%20boilerplate%20and%20Basscss%20theme&amp;url=http://jxnblk.com/skull&amp;via=jxnblk\" class=\"h6 caps button ml1 mr1\">
        Tweet
    </a>
</div>

<section id=\"grid\" class=\"container px2 py4 overflow-hidden\">
    <h1>Grid</h1>
    <p>Simple, responsive grid that collapses at small viewport widths.</p>
    <div class=\"h6 center row mb2\">
        <div class=\"column-6\"> <div class=\"p1 bg-darken-2 rounded\">6</div> </div>
        <div class=\"column-6\"> <div class=\"p1 bg-darken-2 rounded\">6</div> </div>
    </div>
    <div class=\"h6 center row mb2\">
        <div class=\"column-4\"> <div class=\"p1 bg-darken-2 rounded\">4</div> </div>
        <div class=\"column-4\"> <div class=\"p1 bg-darken-2 rounded\">4</div> </div>
        <div class=\"column-4\"> <div class=\"p1 bg-darken-2 rounded\">4</div> </div>
    </div>
    <div class=\"h6 center row mb2\">
        <div class=\"column-3\"> <div class=\"p1 bg-darken-2 rounded\">3</div> </div>
        <div class=\"column-3\"> <div class=\"p1 bg-darken-2 rounded\">3</div> </div>
        <div class=\"column-3\"> <div class=\"p1 bg-darken-2 rounded\">3</div> </div>
        <div class=\"column-3\"> <div class=\"p1 bg-darken-2 rounded\">3</div> </div>
    </div>
    <div class=\"h6 center row mb2\">
        <div class=\"column-2\"> <div class=\"p1 bg-darken-2 rounded\">2</div> </div>
        <div class=\"column-2\"> <div class=\"p1 bg-darken-2 rounded\">2</div> </div>
        <div class=\"column-2\"> <div class=\"p1 bg-darken-2 rounded\">2</div> </div>
        <div class=\"column-2\"> <div class=\"p1 bg-darken-2 rounded\">2</div> </div>
        <div class=\"column-2\"> <div class=\"p1 bg-darken-2 rounded\">2</div> </div>
        <div class=\"column-2\"> <div class=\"p1 bg-darken-2 rounded\">2</div> </div>
    </div>
</section>

<section id=\"typography\" class=\"container px2 py4 overflow-hidden\">
    <h1>Typography</h1>
    <p>
        Carefully considered, readable typography featuring
        <a href=\"https://www.google.com/fonts/specimen/Lato\">Lato</a>
        from Google Fonts
    </p>
    <div class=\"row\">
        <div class=\"column-4\">
            <h1 class=\"mt0\">Heading 1</h1>
            <h2>Heading 2</h2>
            <h3>Heading 3</h3>
            <h4>Heading 4</h4>
            <h5>Heading 5</h5>
            <h6>Heading 6</h6>
        </div>
        <div class=\"column-8\">
            <p class=\"h3\">
                Body copy set at 1.125rem (18px) with a 1.5 line-height and a high contrast type scale,
                Skull’s typography sets the pace for elegant information hierarchy
                and lends itself to effortless readability.
            </p>
            <p>
                In combination with typography utilities, sites built with Skull
                are quick to tweak and customize to fit any design –
                whether it’s a blog, documentation, a personal portfolio, or a cat gif portal.
            </p>
        </div>
    </div>
</section>

<section id=\"utilities\" class=\"container px2 py4 overflow-hidden\">
    <h1>Utilities</h1>
    <p>
        Quickly adjust layouts and iterate on designs with powerful utilities that
        let you spend less time futzing around with CSS and more time designing in the browser.
    </p>
    <div class=\"bold center row\">
        <div class=\"column-3\">.clearfix</div>
        <div class=\"column-3\">.left</div>
        <div class=\"column-3\">.right</div>
        <div class=\"column-3\">.inline</div>
        <div class=\"column-3\">.block</div>
        <div class=\"column-3\">.inline-block</div>
        <div class=\"column-3\">.overflow-hidden</div>
        <div class=\"column-3\">.overflow-scroll</div>
        <div class=\"column-3\">.overflow-auto</div>
        <div class=\"column-3\">.fit</div>
        <div class=\"column-3\">.bold</div>
        <div class=\"column-3\">.regular</div>
        <div class=\"column-3\">.italic</div>
        <div class=\"column-3\">.caps</div>
        <div class=\"column-3\">.left-align</div>
        <div class=\"column-3\">.center</div>
        <div class=\"column-3\">.right-align</div>
        <div class=\"column-3\">.justify</div>
        <div class=\"column-3\">.m0</div>
        <div class=\"column-3\">.mt0</div>
        <div class=\"column-3\">.mr0</div>
        <div class=\"column-3\">.mb0</div>
        <div class=\"column-3\">.ml0</div>
        <div class=\"column-3\">.m1</div>
        <div class=\"column-3\">.mt1</div>
        <div class=\"column-3\">.mr1</div>
        <div class=\"column-3\">.mb1</div>
        <div class=\"column-3\">.ml1</div>
        <div class=\"column-3\">.m2</div>
        <div class=\"column-3\">.mt2</div>
        <div class=\"column-3\">.mr2</div>
        <div class=\"column-3\">.mb2</div>
        <div class=\"column-3\">.ml2</div>
        <div class=\"column-3\">.m3</div>
        <div class=\"column-3\">.mt3</div>
        <div class=\"column-3\">.mr3</div>
        <div class=\"column-3\">.mb3</div>
        <div class=\"column-3\">.ml3</div>
        <div class=\"column-3\">.m4</div>
        <div class=\"column-3\">.mt4</div>
        <div class=\"column-3\">.mr4</div>
        <div class=\"column-3\">.mb4</div>
        <div class=\"column-3\">.ml4</div>
        <div class=\"column-3\">.p1</div>
        <div class=\"column-3\">.px1</div>
        <div class=\"column-3\">.py1</div>
        <div class=\"column-3\">.p2</div>
        <div class=\"column-3\">.px2</div>
        <div class=\"column-3\">.py2</div>
        <div class=\"column-3\">.p3</div>
        <div class=\"column-3\">.px3</div>
        <div class=\"column-3\">.py3</div>
        <div class=\"column-3\">.p4</div>
        <div class=\"column-3\">.px4</div>
        <div class=\"column-3\">.py4</div>
        <div class=\"column-3\">.border</div>
        <div class=\"column-3\">.rounded</div>
        <div class=\"column-3\">.circle</div>
    </div>
</section>

<section id=\"forms-and-buttons\" class=\"container px2 py4 overflow-hidden\">
    <h1>Forms and Buttons</h1>
    <p>
        Clean, straightforward forms for <i>don’t-make-me-think</i> style simplicity.
    </p>
    <form>
        <div class=\"row\">
            <div class=\"column-6\">
                <label>Hamburger</label>
                <input type=\"text\">
                <label>Pickle</label>
                <input type=\"text\">
                <label>Bun</label>
                <select>
                    <option value=\"Potato\" data-label=\"Potato\">
                    </option><option value=\"Multigrain\" data-label=\"Multigrain\">
                </option><option value=\"Gluten Free\" data-label=\"Gluten Free\">
                </option><option value=\"Brioche\" data-label=\"Brioche\">
                </option></select>
            </div>
            <div class=\"column-6\">
                <fieldset>
                    <legend>Toppings</legend>
                    <div class=\"row\">
                        <div class=\"column-6\">
                            <label>
                                <input type=\"checkbox\"> Onions
                            </label>
                            <label>
                                <input type=\"checkbox\"> Lettuce
                            </label>
                            <label>
                                <input type=\"checkbox\"> Tomato
                            </label>
                        </div>
                        <div class=\"column-6\">
                            <label>
                                <input type=\"checkbox\"> Ketchup
                            </label>
                            <label>
                                <input type=\"checkbox\"> Mayo
                            </label>
                        </div>
                    </div>
                </fieldset>
                <label>Notes</label>
                <textarea></textarea>
            </div>
        </div>
        <hr>
        <button class=\"button\">Medium Rare</button>
    </form>
</section>

<section id=\"tables\" class=\"container px2 py4 overflow-hidden\">
    <h1>Tables</h1>
    <div class=\"overflow-auto\">
        <table>
            <thead>
            <tr>

                <th>Name</th>

                <th>Handle</th>

                <th>Github</th>

                <th>Website</th>

            </tr>
            </thead>
            <tbody>

            <tr>

                <td>

                    Brent Jackson

                </td>

                <td>

                    @jxnblk

                </td>

                <td>

                    <a href=\"http://github.com/jxnblk\">http://github.com/jxnblk</a>

                </td>

                <td>

                    <a href=\"http://jxnblk.com\">http://jxnblk.com</a>

                </td>

            </tr>

            <tr>

                <td>

                    Adam Morse

                </td>

                <td>

                    @mrmrs_

                </td>

                <td>

                    <a href=\"http://github.com/mrmrs\">http://github.com/mrmrs</a>

                </td>

                <td>

                    <a href=\"http://mrmrs.cc\">http://mrmrs.cc</a>

                </td>

            </tr>

            <tr>

                <td>

                    John Otander

                </td>

                <td>

                    @4lpine

                </td>

                <td>

                    <a href=\"http://github.com/johnotander\">http://github.com/johnotander</a>

                </td>

                <td>

                    <a href=\"http://johnotander.com\">http://johnotander.com</a>

                </td>

            </tr>

            </tbody>
        </table>
    </div>
</section>

<section id=\"colors\" class=\"container px2 py4 overflow-hidden\">
    <h1>Colors</h1>
    <p>All the colors from <a href=\"//clrs.cc\">colors.css</a>.
        What more could you need?
    </p>
    <div class=\"center bold row\">

        <div class=\"column-3\"><div class=\"px2 py3 mb2 white bg-aqua\">
            aqua
        </div></div>

        <div class=\"column-3\"><div class=\"px2 py3 mb2 white bg-blue\">
            blue
        </div></div>

        <div class=\"column-3\"><div class=\"px2 py3 mb2 white bg-lime\">
            lime
        </div></div>

        <div class=\"column-3\"><div class=\"px2 py3 mb2 white bg-navy\">
            navy
        </div></div>

        <div class=\"column-3\"><div class=\"px2 py3 mb2 white bg-teal\">
            teal
        </div></div>

        <div class=\"column-3\"><div class=\"px2 py3 mb2 white bg-olive\">
            olive
        </div></div>

        <div class=\"column-3\"><div class=\"px2 py3 mb2 white bg-green\">
            green
        </div></div>

        <div class=\"column-3\"><div class=\"px2 py3 mb2 white bg-red\">
            red
        </div></div>

        <div class=\"column-3\"><div class=\"px2 py3 mb2 white bg-maroon\">
            maroon
        </div></div>

        <div class=\"column-3\"><div class=\"px2 py3 mb2 white bg-orange\">
            orange
        </div></div>

        <div class=\"column-3\"><div class=\"px2 py3 mb2 white bg-purple\">
            purple
        </div></div>

        <div class=\"column-3\"><div class=\"px2 py3 mb2 white bg-yellow\">
            yellow
        </div></div>

        <div class=\"column-3\"><div class=\"px2 py3 mb2 white bg-fuchsia\">
            fuchsia
        </div></div>

        <div class=\"column-3\"><div class=\"px2 py3 mb2 white bg-gray\">
            gray
        </div></div>

        <div class=\"column-3\"><div class=\"px2 py3 mb2 white bg-black\">
            black
        </div></div>

        <div class=\"column-3\"><div class=\"px2 py3 mb2 white bg-silver\">
            silver
        </div></div>

    </div>
</section>

<section id=\"cta\" class=\"center container px2 py4 overflow-hidden\">
    <h1>Get Started</h1>
    <a href=\"https://github.com/jxnblk/skull/archive/1.0.0.zip\" class=\"h6 caps button\">Download</a>
</section>

<section id=\"related\" class=\"center container px2 py4 overflow-hidden\">
    <div class=\"p3 mb2 border rounded\">
        <p class=\"bold\">Built with:</p>
        <div class=\"row\">

            <div class=\"column-3\">
                <a href=\"http://basscss.com\" class=\"h4 bold\">

                    Basscss
                </a>
            </div>

            <div class=\"column-3\">
                <a href=\"http://github.com/jxnblk/autogrid\" class=\"h4 bold\">

                    Autogrid
                </a>
            </div>

            <div class=\"column-3\">
                <a href=\"http://github.com/jxnblk/autoform\" class=\"h4 bold\">

                    Autoform
                </a>
            </div>

            <div class=\"column-3\">
                <a href=\"http://github.com/jxnblk/autotable\" class=\"h4 bold\">

                    Autotable
                </a>
            </div>

        </div>
    </div>
    <p class=\"h5 m0\">Inspired by <a href=\"http://getskeleton.com/\">Skeleton</a>.</p>
</section>

</div>
";
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "base.html" %}*/
/* */
/* {% block content %}*/
/* <section id="features" class="container px2 py4 overflow-hidden">*/
/*     <div class="h3 center row">*/
/*         <div class="column-4 py2">*/
/*             Lightweight, minimal styles ready to be customized*/
/*         </div>*/
/*         <div class="column-4 py2">*/
/*             No compilation or installation required – just plain HTML and CSS*/
/*         </div>*/
/*         <div class="column-4 py2">*/
/*             Powerful utilities to design in the browser faster*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <section id="stats" class="h6 bold caps center container px2 overflow-hidden">*/
/*     <div class="p2 border rounded">*/
/*         <div class="inline-block px2 py1">*/
/*             <div class="h3">2.52 kB</div>*/
/*             gzipped*/
/*         </div>*/
/*         <div class="inline-block px2 py1">*/
/*             <div class="h3">206</div>*/
/*             rules*/
/*         </div>*/
/*         <div class="inline-block px2 py1">*/
/*             <div class="h3">314</div>*/
/*             selectors*/
/*         </div>*/
/*         <div class="inline-block px2 py1">*/
/*             <div class="h3">306</div>*/
/*             declarations*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <div class="center px2 py3 mt3 overflow-hidden">*/
/*     <a href="https://github.com/basscss/skull" class="h6 caps button ml1 mr1">Github</a>*/
/*     <a href="https://twitter.com/intent/tweet?text=Skull:%20Bare%20bones%20boilerplate%20and%20Basscss%20theme&amp;url=http://jxnblk.com/skull&amp;via=jxnblk" class="h6 caps button ml1 mr1">*/
/*         Tweet*/
/*     </a>*/
/* </div>*/
/* */
/* <section id="grid" class="container px2 py4 overflow-hidden">*/
/*     <h1>Grid</h1>*/
/*     <p>Simple, responsive grid that collapses at small viewport widths.</p>*/
/*     <div class="h6 center row mb2">*/
/*         <div class="column-6"> <div class="p1 bg-darken-2 rounded">6</div> </div>*/
/*         <div class="column-6"> <div class="p1 bg-darken-2 rounded">6</div> </div>*/
/*     </div>*/
/*     <div class="h6 center row mb2">*/
/*         <div class="column-4"> <div class="p1 bg-darken-2 rounded">4</div> </div>*/
/*         <div class="column-4"> <div class="p1 bg-darken-2 rounded">4</div> </div>*/
/*         <div class="column-4"> <div class="p1 bg-darken-2 rounded">4</div> </div>*/
/*     </div>*/
/*     <div class="h6 center row mb2">*/
/*         <div class="column-3"> <div class="p1 bg-darken-2 rounded">3</div> </div>*/
/*         <div class="column-3"> <div class="p1 bg-darken-2 rounded">3</div> </div>*/
/*         <div class="column-3"> <div class="p1 bg-darken-2 rounded">3</div> </div>*/
/*         <div class="column-3"> <div class="p1 bg-darken-2 rounded">3</div> </div>*/
/*     </div>*/
/*     <div class="h6 center row mb2">*/
/*         <div class="column-2"> <div class="p1 bg-darken-2 rounded">2</div> </div>*/
/*         <div class="column-2"> <div class="p1 bg-darken-2 rounded">2</div> </div>*/
/*         <div class="column-2"> <div class="p1 bg-darken-2 rounded">2</div> </div>*/
/*         <div class="column-2"> <div class="p1 bg-darken-2 rounded">2</div> </div>*/
/*         <div class="column-2"> <div class="p1 bg-darken-2 rounded">2</div> </div>*/
/*         <div class="column-2"> <div class="p1 bg-darken-2 rounded">2</div> </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <section id="typography" class="container px2 py4 overflow-hidden">*/
/*     <h1>Typography</h1>*/
/*     <p>*/
/*         Carefully considered, readable typography featuring*/
/*         <a href="https://www.google.com/fonts/specimen/Lato">Lato</a>*/
/*         from Google Fonts*/
/*     </p>*/
/*     <div class="row">*/
/*         <div class="column-4">*/
/*             <h1 class="mt0">Heading 1</h1>*/
/*             <h2>Heading 2</h2>*/
/*             <h3>Heading 3</h3>*/
/*             <h4>Heading 4</h4>*/
/*             <h5>Heading 5</h5>*/
/*             <h6>Heading 6</h6>*/
/*         </div>*/
/*         <div class="column-8">*/
/*             <p class="h3">*/
/*                 Body copy set at 1.125rem (18px) with a 1.5 line-height and a high contrast type scale,*/
/*                 Skull’s typography sets the pace for elegant information hierarchy*/
/*                 and lends itself to effortless readability.*/
/*             </p>*/
/*             <p>*/
/*                 In combination with typography utilities, sites built with Skull*/
/*                 are quick to tweak and customize to fit any design –*/
/*                 whether it’s a blog, documentation, a personal portfolio, or a cat gif portal.*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <section id="utilities" class="container px2 py4 overflow-hidden">*/
/*     <h1>Utilities</h1>*/
/*     <p>*/
/*         Quickly adjust layouts and iterate on designs with powerful utilities that*/
/*         let you spend less time futzing around with CSS and more time designing in the browser.*/
/*     </p>*/
/*     <div class="bold center row">*/
/*         <div class="column-3">.clearfix</div>*/
/*         <div class="column-3">.left</div>*/
/*         <div class="column-3">.right</div>*/
/*         <div class="column-3">.inline</div>*/
/*         <div class="column-3">.block</div>*/
/*         <div class="column-3">.inline-block</div>*/
/*         <div class="column-3">.overflow-hidden</div>*/
/*         <div class="column-3">.overflow-scroll</div>*/
/*         <div class="column-3">.overflow-auto</div>*/
/*         <div class="column-3">.fit</div>*/
/*         <div class="column-3">.bold</div>*/
/*         <div class="column-3">.regular</div>*/
/*         <div class="column-3">.italic</div>*/
/*         <div class="column-3">.caps</div>*/
/*         <div class="column-3">.left-align</div>*/
/*         <div class="column-3">.center</div>*/
/*         <div class="column-3">.right-align</div>*/
/*         <div class="column-3">.justify</div>*/
/*         <div class="column-3">.m0</div>*/
/*         <div class="column-3">.mt0</div>*/
/*         <div class="column-3">.mr0</div>*/
/*         <div class="column-3">.mb0</div>*/
/*         <div class="column-3">.ml0</div>*/
/*         <div class="column-3">.m1</div>*/
/*         <div class="column-3">.mt1</div>*/
/*         <div class="column-3">.mr1</div>*/
/*         <div class="column-3">.mb1</div>*/
/*         <div class="column-3">.ml1</div>*/
/*         <div class="column-3">.m2</div>*/
/*         <div class="column-3">.mt2</div>*/
/*         <div class="column-3">.mr2</div>*/
/*         <div class="column-3">.mb2</div>*/
/*         <div class="column-3">.ml2</div>*/
/*         <div class="column-3">.m3</div>*/
/*         <div class="column-3">.mt3</div>*/
/*         <div class="column-3">.mr3</div>*/
/*         <div class="column-3">.mb3</div>*/
/*         <div class="column-3">.ml3</div>*/
/*         <div class="column-3">.m4</div>*/
/*         <div class="column-3">.mt4</div>*/
/*         <div class="column-3">.mr4</div>*/
/*         <div class="column-3">.mb4</div>*/
/*         <div class="column-3">.ml4</div>*/
/*         <div class="column-3">.p1</div>*/
/*         <div class="column-3">.px1</div>*/
/*         <div class="column-3">.py1</div>*/
/*         <div class="column-3">.p2</div>*/
/*         <div class="column-3">.px2</div>*/
/*         <div class="column-3">.py2</div>*/
/*         <div class="column-3">.p3</div>*/
/*         <div class="column-3">.px3</div>*/
/*         <div class="column-3">.py3</div>*/
/*         <div class="column-3">.p4</div>*/
/*         <div class="column-3">.px4</div>*/
/*         <div class="column-3">.py4</div>*/
/*         <div class="column-3">.border</div>*/
/*         <div class="column-3">.rounded</div>*/
/*         <div class="column-3">.circle</div>*/
/*     </div>*/
/* </section>*/
/* */
/* <section id="forms-and-buttons" class="container px2 py4 overflow-hidden">*/
/*     <h1>Forms and Buttons</h1>*/
/*     <p>*/
/*         Clean, straightforward forms for <i>don’t-make-me-think</i> style simplicity.*/
/*     </p>*/
/*     <form>*/
/*         <div class="row">*/
/*             <div class="column-6">*/
/*                 <label>Hamburger</label>*/
/*                 <input type="text">*/
/*                 <label>Pickle</label>*/
/*                 <input type="text">*/
/*                 <label>Bun</label>*/
/*                 <select>*/
/*                     <option value="Potato" data-label="Potato">*/
/*                     </option><option value="Multigrain" data-label="Multigrain">*/
/*                 </option><option value="Gluten Free" data-label="Gluten Free">*/
/*                 </option><option value="Brioche" data-label="Brioche">*/
/*                 </option></select>*/
/*             </div>*/
/*             <div class="column-6">*/
/*                 <fieldset>*/
/*                     <legend>Toppings</legend>*/
/*                     <div class="row">*/
/*                         <div class="column-6">*/
/*                             <label>*/
/*                                 <input type="checkbox"> Onions*/
/*                             </label>*/
/*                             <label>*/
/*                                 <input type="checkbox"> Lettuce*/
/*                             </label>*/
/*                             <label>*/
/*                                 <input type="checkbox"> Tomato*/
/*                             </label>*/
/*                         </div>*/
/*                         <div class="column-6">*/
/*                             <label>*/
/*                                 <input type="checkbox"> Ketchup*/
/*                             </label>*/
/*                             <label>*/
/*                                 <input type="checkbox"> Mayo*/
/*                             </label>*/
/*                         </div>*/
/*                     </div>*/
/*                 </fieldset>*/
/*                 <label>Notes</label>*/
/*                 <textarea></textarea>*/
/*             </div>*/
/*         </div>*/
/*         <hr>*/
/*         <button class="button">Medium Rare</button>*/
/*     </form>*/
/* </section>*/
/* */
/* <section id="tables" class="container px2 py4 overflow-hidden">*/
/*     <h1>Tables</h1>*/
/*     <div class="overflow-auto">*/
/*         <table>*/
/*             <thead>*/
/*             <tr>*/
/* */
/*                 <th>Name</th>*/
/* */
/*                 <th>Handle</th>*/
/* */
/*                 <th>Github</th>*/
/* */
/*                 <th>Website</th>*/
/* */
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             <tr>*/
/* */
/*                 <td>*/
/* */
/*                     Brent Jackson*/
/* */
/*                 </td>*/
/* */
/*                 <td>*/
/* */
/*                     @jxnblk*/
/* */
/*                 </td>*/
/* */
/*                 <td>*/
/* */
/*                     <a href="http://github.com/jxnblk">http://github.com/jxnblk</a>*/
/* */
/*                 </td>*/
/* */
/*                 <td>*/
/* */
/*                     <a href="http://jxnblk.com">http://jxnblk.com</a>*/
/* */
/*                 </td>*/
/* */
/*             </tr>*/
/* */
/*             <tr>*/
/* */
/*                 <td>*/
/* */
/*                     Adam Morse*/
/* */
/*                 </td>*/
/* */
/*                 <td>*/
/* */
/*                     @mrmrs_*/
/* */
/*                 </td>*/
/* */
/*                 <td>*/
/* */
/*                     <a href="http://github.com/mrmrs">http://github.com/mrmrs</a>*/
/* */
/*                 </td>*/
/* */
/*                 <td>*/
/* */
/*                     <a href="http://mrmrs.cc">http://mrmrs.cc</a>*/
/* */
/*                 </td>*/
/* */
/*             </tr>*/
/* */
/*             <tr>*/
/* */
/*                 <td>*/
/* */
/*                     John Otander*/
/* */
/*                 </td>*/
/* */
/*                 <td>*/
/* */
/*                     @4lpine*/
/* */
/*                 </td>*/
/* */
/*                 <td>*/
/* */
/*                     <a href="http://github.com/johnotander">http://github.com/johnotander</a>*/
/* */
/*                 </td>*/
/* */
/*                 <td>*/
/* */
/*                     <a href="http://johnotander.com">http://johnotander.com</a>*/
/* */
/*                 </td>*/
/* */
/*             </tr>*/
/* */
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* </section>*/
/* */
/* <section id="colors" class="container px2 py4 overflow-hidden">*/
/*     <h1>Colors</h1>*/
/*     <p>All the colors from <a href="//clrs.cc">colors.css</a>.*/
/*         What more could you need?*/
/*     </p>*/
/*     <div class="center bold row">*/
/* */
/*         <div class="column-3"><div class="px2 py3 mb2 white bg-aqua">*/
/*             aqua*/
/*         </div></div>*/
/* */
/*         <div class="column-3"><div class="px2 py3 mb2 white bg-blue">*/
/*             blue*/
/*         </div></div>*/
/* */
/*         <div class="column-3"><div class="px2 py3 mb2 white bg-lime">*/
/*             lime*/
/*         </div></div>*/
/* */
/*         <div class="column-3"><div class="px2 py3 mb2 white bg-navy">*/
/*             navy*/
/*         </div></div>*/
/* */
/*         <div class="column-3"><div class="px2 py3 mb2 white bg-teal">*/
/*             teal*/
/*         </div></div>*/
/* */
/*         <div class="column-3"><div class="px2 py3 mb2 white bg-olive">*/
/*             olive*/
/*         </div></div>*/
/* */
/*         <div class="column-3"><div class="px2 py3 mb2 white bg-green">*/
/*             green*/
/*         </div></div>*/
/* */
/*         <div class="column-3"><div class="px2 py3 mb2 white bg-red">*/
/*             red*/
/*         </div></div>*/
/* */
/*         <div class="column-3"><div class="px2 py3 mb2 white bg-maroon">*/
/*             maroon*/
/*         </div></div>*/
/* */
/*         <div class="column-3"><div class="px2 py3 mb2 white bg-orange">*/
/*             orange*/
/*         </div></div>*/
/* */
/*         <div class="column-3"><div class="px2 py3 mb2 white bg-purple">*/
/*             purple*/
/*         </div></div>*/
/* */
/*         <div class="column-3"><div class="px2 py3 mb2 white bg-yellow">*/
/*             yellow*/
/*         </div></div>*/
/* */
/*         <div class="column-3"><div class="px2 py3 mb2 white bg-fuchsia">*/
/*             fuchsia*/
/*         </div></div>*/
/* */
/*         <div class="column-3"><div class="px2 py3 mb2 white bg-gray">*/
/*             gray*/
/*         </div></div>*/
/* */
/*         <div class="column-3"><div class="px2 py3 mb2 white bg-black">*/
/*             black*/
/*         </div></div>*/
/* */
/*         <div class="column-3"><div class="px2 py3 mb2 white bg-silver">*/
/*             silver*/
/*         </div></div>*/
/* */
/*     </div>*/
/* </section>*/
/* */
/* <section id="cta" class="center container px2 py4 overflow-hidden">*/
/*     <h1>Get Started</h1>*/
/*     <a href="https://github.com/jxnblk/skull/archive/1.0.0.zip" class="h6 caps button">Download</a>*/
/* </section>*/
/* */
/* <section id="related" class="center container px2 py4 overflow-hidden">*/
/*     <div class="p3 mb2 border rounded">*/
/*         <p class="bold">Built with:</p>*/
/*         <div class="row">*/
/* */
/*             <div class="column-3">*/
/*                 <a href="http://basscss.com" class="h4 bold">*/
/* */
/*                     Basscss*/
/*                 </a>*/
/*             </div>*/
/* */
/*             <div class="column-3">*/
/*                 <a href="http://github.com/jxnblk/autogrid" class="h4 bold">*/
/* */
/*                     Autogrid*/
/*                 </a>*/
/*             </div>*/
/* */
/*             <div class="column-3">*/
/*                 <a href="http://github.com/jxnblk/autoform" class="h4 bold">*/
/* */
/*                     Autoform*/
/*                 </a>*/
/*             </div>*/
/* */
/*             <div class="column-3">*/
/*                 <a href="http://github.com/jxnblk/autotable" class="h4 bold">*/
/* */
/*                     Autotable*/
/*                 </a>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/*     <p class="h5 m0">Inspired by <a href="http://getskeleton.com/">Skeleton</a>.</p>*/
/* </section>*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */
