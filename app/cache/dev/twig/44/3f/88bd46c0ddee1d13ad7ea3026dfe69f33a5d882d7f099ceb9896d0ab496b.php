<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_443f88bd46c0ddee1d13ad7ea3026dfe69f33a5d882d7f099ceb9896d0ab496b extends Twig_Template
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
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className && el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                if (el.className) {
                    el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
                }
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) {
                    el.className += \" \" + klass;
                }
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
                        '',
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
        return array (  91 => 35,  79 => 29,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  46 => 14,  42 => 12,  30 => 5,  26 => 3,  93 => 27,  83 => 30,  73 => 20,  65 => 17,  61 => 15,  57 => 14,  53 => 12,  49 => 10,  43 => 8,  32 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,  538 => 269,  533 => 227,  528 => 75,  523 => 17,  517 => 4,  510 => 270,  508 => 269,  505 => 268,  479 => 266,  475 => 262,  467 => 256,  435 => 254,  431 => 248,  425 => 245,  422 => 244,  342 => 242,  338 => 229,  335 => 228,  333 => 227,  271 => 168,  206 => 105,  202 => 95,  192 => 88,  188 => 87,  180 => 85,  176 => 84,  166 => 76,  164 => 75,  150 => 64,  130 => 48,  126 => 46,  120 => 44,  114 => 42,  112 => 41,  89 => 21,  82 => 18,  80 => 17,  77 => 22,  39 => 14,  35 => 7,  29 => 4,  24 => 2,  421 => 274,  400 => 256,  396 => 255,  387 => 249,  364 => 229,  345 => 213,  340 => 211,  334 => 208,  329 => 206,  323 => 203,  318 => 201,  312 => 198,  307 => 196,  301 => 193,  296 => 191,  290 => 188,  285 => 186,  277 => 181,  219 => 125,  208 => 123,  204 => 122,  196 => 117,  184 => 86,  174 => 103,  169 => 101,  165 => 100,  161 => 99,  156 => 97,  153 => 96,  147 => 94,  141 => 92,  139 => 91,  136 => 90,  132 => 89,  78 => 37,  67 => 18,  63 => 34,  31 => 4,  28 => 3,);
    }
}
