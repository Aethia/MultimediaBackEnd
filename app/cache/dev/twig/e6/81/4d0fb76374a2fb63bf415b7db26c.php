<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_e6814d0fb76374a2fb63bf415b7db26c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
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
        if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, (isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")))) {
            // line 18
            echo "        <h1>Some Recommendations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((!twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 38,  77 => 25,  356 => 328,  339 => 316,  295 => 275,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  694 => 468,  690 => 467,  686 => 466,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  645 => 460,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 411,  530 => 410,  527 => 409,  525 => 408,  520 => 406,  515 => 404,  188 => 90,  389 => 160,  386 => 159,  371 => 156,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  293 => 120,  281 => 114,  259 => 103,  253 => 100,  232 => 88,  222 => 83,  210 => 77,  184 => 63,  170 => 84,  155 => 47,  152 => 46,  127 => 35,  357 => 123,  353 => 149,  344 => 318,  332 => 116,  327 => 114,  324 => 113,  306 => 107,  297 => 276,  288 => 118,  274 => 110,  265 => 105,  263 => 95,  255 => 101,  231 => 83,  202 => 77,  190 => 76,  174 => 65,  175 => 58,  118 => 49,  76 => 27,  462 => 202,  449 => 198,  446 => 197,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  351 => 120,  348 => 140,  338 => 135,  335 => 134,  323 => 128,  320 => 127,  315 => 131,  303 => 106,  300 => 105,  289 => 113,  286 => 112,  270 => 102,  262 => 98,  256 => 96,  248 => 97,  233 => 87,  226 => 84,  213 => 78,  207 => 75,  200 => 72,  197 => 69,  194 => 68,  191 => 67,  185 => 74,  178 => 59,  172 => 57,  165 => 83,  153 => 77,  134 => 39,  113 => 40,  53 => 17,  161 => 63,  84 => 35,  620 => 286,  570 => 238,  564 => 235,  559 => 232,  557 => 231,  549 => 225,  545 => 223,  539 => 222,  524 => 219,  519 => 217,  516 => 216,  513 => 215,  509 => 214,  506 => 213,  503 => 212,  500 => 211,  487 => 208,  482 => 206,  479 => 205,  475 => 204,  472 => 203,  466 => 201,  448 => 196,  445 => 195,  441 => 196,  438 => 193,  436 => 192,  428 => 189,  425 => 188,  418 => 184,  410 => 181,  408 => 176,  405 => 179,  400 => 176,  391 => 172,  382 => 170,  378 => 157,  370 => 166,  367 => 155,  363 => 153,  352 => 155,  350 => 154,  347 => 153,  342 => 317,  333 => 147,  329 => 131,  325 => 129,  321 => 135,  318 => 111,  301 => 131,  299 => 130,  296 => 121,  291 => 102,  279 => 122,  275 => 105,  271 => 120,  267 => 101,  261 => 117,  257 => 116,  244 => 136,  242 => 104,  239 => 103,  234 => 100,  225 => 96,  216 => 79,  212 => 78,  205 => 90,  192 => 85,  181 => 65,  150 => 55,  70 => 26,  434 => 39,  424 => 329,  420 => 327,  403 => 313,  392 => 310,  390 => 309,  290 => 119,  284 => 209,  276 => 111,  114 => 50,  104 => 37,  97 => 39,  90 => 42,  65 => 17,  34 => 5,  23 => 3,  100 => 36,  81 => 29,  58 => 14,  20 => 1,  480 => 162,  474 => 161,  469 => 202,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 330,  423 => 187,  413 => 182,  409 => 132,  407 => 131,  402 => 130,  398 => 312,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 142,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 90,  285 => 125,  283 => 115,  278 => 98,  268 => 85,  264 => 118,  258 => 94,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 65,  169 => 60,  140 => 58,  132 => 51,  128 => 51,  107 => 37,  61 => 12,  273 => 96,  269 => 107,  254 => 92,  243 => 92,  240 => 86,  238 => 85,  235 => 89,  230 => 82,  227 => 86,  224 => 81,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 72,  179 => 75,  159 => 61,  143 => 51,  135 => 53,  119 => 40,  102 => 43,  71 => 23,  67 => 18,  63 => 21,  59 => 16,  38 => 7,  94 => 38,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 16,  87 => 33,  21 => 2,  26 => 3,  93 => 36,  88 => 30,  78 => 24,  46 => 14,  27 => 4,  44 => 11,  31 => 4,  28 => 3,  201 => 92,  196 => 92,  183 => 82,  171 => 71,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 59,  138 => 54,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 34,  62 => 16,  49 => 12,  24 => 2,  25 => 4,  19 => 1,  79 => 29,  72 => 21,  69 => 17,  47 => 15,  40 => 11,  37 => 7,  22 => 2,  246 => 96,  157 => 30,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 40,  111 => 47,  108 => 36,  101 => 33,  98 => 34,  96 => 35,  83 => 30,  74 => 22,  66 => 25,  55 => 38,  52 => 12,  50 => 16,  43 => 11,  41 => 19,  35 => 5,  32 => 6,  29 => 3,  209 => 91,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 75,  144 => 42,  141 => 73,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 39,  109 => 47,  106 => 51,  103 => 39,  99 => 23,  95 => 34,  92 => 31,  86 => 28,  82 => 26,  80 => 27,  73 => 23,  64 => 21,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 11,  42 => 8,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
