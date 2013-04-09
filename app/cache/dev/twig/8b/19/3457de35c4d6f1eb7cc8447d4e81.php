<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_8b193457de35c4d6f1eb7cc8447d4e81 extends Twig_Template
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
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},
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
            };

        return {
            hasClass: hasClass,
            removeClass: removeClass,
            addClass: addClass,
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
        return "WebProfilerBundle:Profiler:base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  46 => 14,  42 => 12,  32 => 6,  26 => 3,  24 => 2,  19 => 1,  321 => 182,  317 => 181,  313 => 180,  309 => 179,  305 => 178,  301 => 177,  297 => 176,  293 => 175,  289 => 174,  285 => 173,  281 => 172,  277 => 171,  273 => 170,  268 => 167,  265 => 166,  260 => 154,  236 => 11,  232 => 10,  228 => 9,  225 => 8,  222 => 7,  216 => 6,  208 => 187,  204 => 185,  202 => 166,  189 => 155,  187 => 154,  100 => 70,  96 => 68,  82 => 64,  80 => 63,  41 => 32,  36 => 31,  34 => 7,  23 => 1,  62 => 12,  59 => 21,  47 => 11,  43 => 9,  40 => 8,  30 => 5,  101 => 43,  90 => 66,  78 => 33,  74 => 31,  70 => 30,  64 => 27,  60 => 25,  56 => 44,  49 => 15,  31 => 4,  28 => 3,);
    }
}
