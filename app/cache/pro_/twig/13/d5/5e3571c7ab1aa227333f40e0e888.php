<?php

/* NelmioApiDocBundle::resources.html.twig */
class __TwigTemplate_13d55e3571c7ab1aa227333f40e0e888 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NelmioApiDocBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resources"]) ? $context["resources"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["section"] => $context["sections"]) {
            // line 5
            echo "        ";
            if (((isset($context["section"]) ? $context["section"] : null) != "_others")) {
                // line 6
                echo "            <div id=\"section\">
            <h1>";
                // line 7
                echo twig_escape_filter($this->env, (isset($context["section"]) ? $context["section"] : null), "html", null, true);
                echo "</h1>
        ";
            }
            // line 9
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["resource"] => $context["methods"]) {
                // line 10
                echo "            <li class=\"resource\">
                <div class=\"heading\">
                    ";
                // line 12
                if ((((isset($context["section"]) ? $context["section"] : null) == "_others") && ((isset($context["resource"]) ? $context["resource"] : null) != "others"))) {
                    // line 13
                    echo "                        <h2>";
                    echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : null), "html", null, true);
                    echo "</h2>
                    ";
                } elseif (((isset($context["resource"]) ? $context["resource"] : null) != "others")) {
                    // line 15
                    echo "                        <h2>";
                    echo twig_escape_filter($this->env, (isset($context["resource"]) ? $context["resource"] : null), "html", null, true);
                    echo "</h2>
                    ";
                }
                // line 17
                echo "                </div>
                <ul class=\"endpoints\">
                    <li class=\"endpoint\">
                        <ul class=\"operations\">
                            ";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["methods"]) ? $context["methods"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 22
                    echo "                                ";
                    $this->env->loadTemplate("NelmioApiDocBundle::method.html.twig")->display($context);
                    // line 23
                    echo "                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "                        </ul>
                    </li>
                </ul>
            </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['resource'], $context['methods'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
            if (((isset($context["section"]) ? $context["section"] : null) != "_others")) {
                // line 30
                echo "            </div>
        ";
            }
            // line 32
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['section'], $context['sections'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 32,  157 => 30,  96 => 17,  84 => 13,  52 => 6,  37 => 8,  620 => 286,  570 => 238,  564 => 235,  559 => 232,  557 => 231,  549 => 225,  545 => 223,  539 => 222,  524 => 219,  519 => 217,  516 => 216,  513 => 215,  509 => 214,  506 => 213,  503 => 212,  500 => 211,  487 => 208,  482 => 206,  479 => 205,  475 => 204,  472 => 203,  466 => 201,  448 => 196,  445 => 195,  441 => 194,  438 => 193,  436 => 192,  428 => 189,  425 => 188,  418 => 184,  410 => 181,  408 => 180,  405 => 179,  400 => 176,  391 => 172,  382 => 170,  378 => 169,  370 => 166,  367 => 165,  363 => 164,  352 => 155,  350 => 154,  347 => 153,  342 => 150,  333 => 147,  329 => 146,  325 => 145,  321 => 144,  318 => 143,  301 => 131,  299 => 130,  296 => 129,  291 => 126,  279 => 122,  275 => 121,  271 => 120,  267 => 119,  261 => 117,  257 => 116,  244 => 105,  242 => 104,  239 => 103,  234 => 100,  225 => 96,  216 => 93,  212 => 92,  205 => 90,  192 => 85,  181 => 76,  150 => 65,  120 => 48,  70 => 24,  434 => 39,  424 => 329,  420 => 327,  403 => 313,  392 => 310,  390 => 309,  290 => 211,  284 => 209,  276 => 206,  114 => 50,  104 => 43,  97 => 39,  90 => 15,  74 => 28,  65 => 24,  34 => 6,  23 => 3,  100 => 27,  81 => 31,  58 => 18,  20 => 1,  480 => 162,  474 => 161,  469 => 202,  461 => 155,  457 => 153,  453 => 198,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 330,  423 => 187,  413 => 182,  409 => 132,  407 => 131,  402 => 130,  398 => 312,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 142,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 125,  283 => 88,  278 => 207,  268 => 85,  264 => 118,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 51,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 157,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 75,  159 => 61,  143 => 63,  135 => 53,  131 => 52,  119 => 22,  108 => 36,  102 => 21,  71 => 27,  67 => 25,  63 => 15,  59 => 14,  47 => 17,  38 => 8,  94 => 28,  89 => 20,  85 => 33,  79 => 18,  75 => 17,  68 => 23,  56 => 21,  50 => 8,  29 => 8,  87 => 25,  72 => 20,  55 => 7,  21 => 2,  26 => 2,  98 => 31,  93 => 36,  88 => 33,  78 => 10,  46 => 13,  27 => 4,  40 => 9,  44 => 12,  35 => 5,  31 => 4,  43 => 8,  41 => 10,  28 => 3,  201 => 92,  196 => 86,  183 => 82,  171 => 71,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 24,  123 => 47,  121 => 46,  117 => 47,  115 => 46,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 22,  62 => 20,  49 => 5,  24 => 2,  32 => 5,  25 => 4,  22 => 1,  19 => 1,  209 => 91,  203 => 78,  199 => 87,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 74,  173 => 65,  168 => 72,  164 => 59,  162 => 68,  154 => 29,  149 => 51,  147 => 64,  144 => 49,  141 => 48,  133 => 55,  130 => 52,  125 => 50,  122 => 23,  116 => 51,  112 => 42,  109 => 42,  106 => 33,  103 => 39,  99 => 40,  95 => 28,  92 => 21,  86 => 28,  82 => 12,  80 => 30,  73 => 26,  64 => 17,  60 => 9,  57 => 11,  54 => 16,  51 => 15,  48 => 11,  45 => 8,  42 => 8,  39 => 9,  36 => 5,  33 => 9,  30 => 1,);
    }
}
