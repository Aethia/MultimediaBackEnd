<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_8384d4bfe98b1da4e14856b0db5c3b4d extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  50 => 15,  42 => 12,  30 => 5,  26 => 3,  620 => 286,  570 => 238,  564 => 235,  559 => 232,  557 => 231,  549 => 225,  545 => 223,  539 => 222,  524 => 219,  519 => 217,  516 => 216,  513 => 215,  509 => 214,  506 => 213,  503 => 212,  500 => 211,  487 => 208,  482 => 206,  479 => 205,  475 => 204,  472 => 203,  469 => 202,  466 => 201,  453 => 198,  448 => 196,  445 => 195,  441 => 194,  438 => 193,  436 => 192,  428 => 189,  425 => 188,  423 => 187,  418 => 184,  413 => 182,  410 => 181,  408 => 180,  405 => 179,  400 => 176,  391 => 172,  382 => 170,  378 => 169,  370 => 166,  367 => 165,  363 => 164,  352 => 155,  350 => 154,  347 => 153,  342 => 150,  333 => 147,  329 => 146,  325 => 145,  321 => 144,  318 => 143,  314 => 142,  301 => 131,  299 => 130,  296 => 129,  291 => 126,  285 => 125,  279 => 122,  275 => 121,  271 => 120,  267 => 119,  264 => 118,  261 => 117,  257 => 116,  244 => 105,  242 => 104,  239 => 103,  234 => 100,  225 => 96,  216 => 93,  212 => 92,  209 => 91,  205 => 90,  199 => 87,  196 => 86,  192 => 85,  181 => 76,  179 => 75,  176 => 74,  171 => 71,  162 => 68,  158 => 67,  150 => 65,  147 => 64,  143 => 63,  130 => 52,  128 => 51,  125 => 50,  120 => 48,  117 => 47,  115 => 46,  109 => 42,  105 => 40,  103 => 39,  88 => 33,  80 => 30,  73 => 26,  70 => 26,  68 => 23,  66 => 25,  62 => 24,  58 => 18,  51 => 15,  46 => 14,  40 => 9,  38 => 8,  32 => 6,  24 => 2,  19 => 1,  434 => 39,  427 => 330,  424 => 329,  420 => 327,  403 => 313,  398 => 312,  392 => 310,  390 => 309,  290 => 211,  284 => 209,  278 => 207,  276 => 206,  224 => 157,  116 => 51,  114 => 50,  104 => 43,  99 => 40,  97 => 39,  93 => 36,  85 => 33,  81 => 31,  74 => 28,  71 => 27,  67 => 25,  65 => 24,  56 => 21,  47 => 17,  39 => 12,  33 => 9,  20 => 1,  161 => 32,  157 => 30,  154 => 66,  136 => 24,  122 => 23,  119 => 22,  102 => 21,  96 => 17,  90 => 36,  84 => 13,  82 => 31,  78 => 30,  60 => 22,  55 => 17,  52 => 6,  49 => 14,  31 => 4,  28 => 7,);
    }
}
