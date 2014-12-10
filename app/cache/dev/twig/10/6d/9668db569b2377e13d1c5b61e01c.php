<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_106d9668db569b2377e13d1c5b61e01c extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 65,  118 => 49,  76 => 31,  462 => 202,  449 => 198,  446 => 197,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  338 => 135,  335 => 134,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  270 => 102,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  213 => 78,  207 => 75,  200 => 72,  197 => 71,  194 => 70,  191 => 67,  185 => 66,  178 => 66,  172 => 64,  165 => 60,  153 => 56,  134 => 54,  113 => 48,  53 => 12,  161 => 63,  84 => 24,  620 => 286,  570 => 238,  564 => 235,  559 => 232,  557 => 231,  549 => 225,  545 => 223,  539 => 222,  524 => 219,  519 => 217,  516 => 216,  513 => 215,  509 => 214,  506 => 213,  503 => 212,  500 => 211,  487 => 208,  482 => 206,  479 => 205,  475 => 204,  472 => 203,  466 => 201,  448 => 196,  445 => 195,  441 => 196,  438 => 193,  436 => 192,  428 => 189,  425 => 188,  418 => 184,  410 => 181,  408 => 176,  405 => 179,  400 => 176,  391 => 172,  382 => 170,  378 => 169,  370 => 166,  367 => 165,  363 => 164,  352 => 155,  350 => 154,  347 => 153,  342 => 137,  333 => 147,  329 => 131,  325 => 129,  321 => 144,  318 => 143,  301 => 131,  299 => 130,  296 => 129,  291 => 126,  279 => 122,  275 => 105,  271 => 120,  267 => 101,  261 => 117,  257 => 116,  244 => 105,  242 => 104,  239 => 103,  234 => 100,  225 => 96,  216 => 79,  212 => 92,  205 => 90,  192 => 85,  181 => 65,  150 => 55,  70 => 19,  434 => 39,  424 => 329,  420 => 327,  403 => 313,  392 => 310,  390 => 309,  290 => 211,  284 => 209,  276 => 206,  114 => 50,  104 => 43,  97 => 39,  90 => 27,  65 => 24,  34 => 6,  23 => 3,  100 => 39,  81 => 23,  58 => 18,  20 => 1,  480 => 162,  474 => 161,  469 => 202,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 330,  423 => 187,  413 => 182,  409 => 132,  407 => 131,  402 => 130,  398 => 312,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 142,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 125,  283 => 88,  278 => 106,  268 => 85,  264 => 118,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 65,  169 => 60,  140 => 58,  132 => 51,  128 => 51,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 157,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 75,  159 => 61,  143 => 63,  135 => 53,  119 => 40,  102 => 40,  71 => 27,  67 => 24,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 33,  75 => 17,  68 => 23,  56 => 21,  87 => 34,  21 => 2,  26 => 2,  93 => 36,  88 => 33,  78 => 10,  46 => 13,  27 => 3,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 86,  183 => 82,  171 => 71,  166 => 71,  163 => 62,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 54,  136 => 24,  121 => 50,  117 => 47,  105 => 34,  91 => 27,  62 => 20,  49 => 14,  24 => 2,  25 => 4,  19 => 1,  79 => 18,  72 => 20,  69 => 25,  47 => 17,  40 => 9,  37 => 8,  22 => 1,  246 => 93,  157 => 30,  145 => 46,  139 => 45,  131 => 52,  123 => 42,  120 => 48,  115 => 46,  111 => 47,  108 => 36,  101 => 32,  98 => 31,  96 => 37,  83 => 33,  74 => 28,  66 => 22,  55 => 16,  52 => 6,  50 => 8,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 8,  209 => 91,  203 => 73,  199 => 87,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 63,  173 => 65,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 49,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 23,  116 => 39,  112 => 42,  109 => 42,  106 => 36,  103 => 39,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 12,  80 => 32,  73 => 20,  64 => 23,  60 => 9,  57 => 11,  54 => 16,  51 => 15,  48 => 11,  45 => 10,  42 => 8,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
