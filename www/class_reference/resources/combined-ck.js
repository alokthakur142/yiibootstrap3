var ApiGen = ApiGen || {};

ApiGen.config = {
    require: {
        min: "2.8.0"
    },
    resources: {
        resources: "resources"
    },
    templates: {
        common: {
            "overview.latte": "index.html",
            "combined.js.latte": "resources/combined.js",
            "elementlist.js.latte": "elementlist.js",
            "404.latte": "404.html"
        },
        optional: {
            sitemap: {
                filename: "sitemap.xml",
                template: "sitemap.xml.latte"
            },
            opensearch: {
                filename: "opensearch.xml",
                template: "opensearch.xml.latte"
            },
            robots: {
                filename: "robots.txt",
                template: "robots.txt.latte"
            }
        },
        main: {
            "package": {
                filename: "package-%s.html",
                template: "package.latte"
            },
            namespace: {
                filename: "namespace-%s.html",
                template: "namespace.latte"
            },
            "class": {
                filename: "class-%s.html",
                template: "class.latte"
            },
            constant: {
                filename: "constant-%s.html",
                template: "constant.latte"
            },
            "function": {
                filename: "function-%s.html",
                template: "function.latte"
            },
            source: {
                filename: "source-%s.html",
                template: "source.latte"
            },
            tree: {
                filename: "tree.html",
                template: "tree.latte"
            },
            deprecated: {
                filename: "deprecated.html",
                template: "deprecated.latte"
            },
            todo: {
                filename: "todo.html",
                template: "todo.latte"
            }
        }
    },
    options: {
        elementDetailsCollapsed: !0,
        elementsOrder: "natural"
    },
    config: "/Users/pascal/www/apigen/templates/default/config.neon"
};

(function(e, t) {
    function cA(e) {
        return s.isWindow(e) ? e : e.nodeType === 9 ? e.defaultView || e.parentWindow : !1;
    }
    function cx(e) {
        if (!Rt[e]) {
            var t = n.body, r = s("<" + e + ">").appendTo(t), i = r.css("display");
            r.remove();
            if (i === "none" || i === "") {
                Ut || (Ut = n.createElement("iframe"), Ut.frameBorder = Ut.width = Ut.height = 0), t.appendChild(Ut);
                if (!zt || !Ut.createElement) zt = (Ut.contentWindow || Ut.contentDocument).document, zt.write((n.compatMode === "CSS1Compat" ? "<!doctype html>" : "") + "<html><body>"), zt.close();
                r = zt.createElement(e), zt.body.appendChild(r), i = s.css(r, "display"), t.removeChild(Ut);
            }
            Rt[e] = i;
        }
        return Rt[e];
    }
    function cw(e, t) {
        var n = {};
        s.each($t.concat.apply([], $t.slice(0, t)), function() {
            n[this] = e;
        });
        return n;
    }
    function cv() {
        Jt = t;
    }
    function cu() {
        setTimeout(cv, 0);
        return Jt = s.now();
    }
    function cl() {
        try {
            return new e.ActiveXObject("Microsoft.XMLHTTP");
        } catch (t) {}
    }
    function ck() {
        try {
            return new e.XMLHttpRequest;
        } catch (t) {}
    }
    function ce(e, n) {
        e.dataFilter && (n = e.dataFilter(n, e.dataType));
        var r = e.dataTypes, i = {}, o, u, a = r.length, f, l = r[0], c, h, p, d, v;
        for (o = 1; o < a; o++) {
            if (o === 1) for (u in e.converters) typeof u == "string" && (i[u.toLowerCase()] = e.converters[u]);
            c = l, l = r[o];
            if (l === "*") l = c; else if (c !== "*" && c !== l) {
                h = c + " " + l, p = i[h] || i["* " + l];
                if (!p) {
                    v = t;
                    for (d in i) {
                        f = d.split(" ");
                        if (f[0] === c || f[0] === "*") {
                            v = i[f[1] + " " + l];
                            if (v) {
                                d = i[d], d === !0 ? p = v : v === !0 && (p = d);
                                break;
                            }
                        }
                    }
                }
                !p && !v && s.error("No conversion from " + h.replace(" ", " to ")), p !== !0 && (n = p ? p(n) : v(d(n)));
            }
        }
        return n;
    }
    function cd(e, n, r) {
        var i = e.contents, s = e.dataTypes, o = e.responseFields, u, a, f, l;
        for (a in o) a in r && (n[o[a]] = r[a]);
        while (s[0] === "*") s.shift(), u === t && (u = e.mimeType || n.getResponseHeader("content-type"));
        if (u) for (a in i) if (i[a] && i[a].test(u)) {
            s.unshift(a);
            break;
        }
        if (s[0] in r) f = s[0]; else {
            for (a in r) {
                if (!s[0] || e.converters[a + " " + s[0]]) {
                    f = a;
                    break;
                }
                l || (l = a);
            }
            f = f || l;
        }
        if (f) {
            f !== s[0] && s.unshift(f);
            return r[f];
        }
    }
    function cc(e, t, n, r) {
        if (s.isArray(t)) s.each(t, function(t, i) {
            n || vt.test(e) ? r(e, i) : cc(e + "[" + (typeof i == "object" || s.isArray(i) ? t : "") + "]", i, n, r);
        }); else if (!n && t != null && typeof t == "object") for (var i in t) cc(e + "[" + i + "]", t[i], n, r); else r(e, t);
    }
    function cb(e, n) {
        var r, i, o = s.ajaxSettings.flatOptions || {};
        for (r in n) n[r] !== t && ((o[r] ? e : i || (i = {}))[r] = n[r]);
        i && s.extend(!0, e, i);
    }
    function ca(e, n, r, i, s, o) {
        s = s || n.dataTypes[0], o = o || {}, o[s] = !0;
        var u = e[s], a = 0, f = u ? u.length : 0, l = e === Ot, c;
        for (; a < f && (l || !c); a++) c = u[a](n, r, i), typeof c == "string" && (!l || o[c] ? c = t : (n.dataTypes.unshift(c), c = ca(e, n, r, i, c, o)));
        (l || !c) && !o["*"] && (c = ca(e, n, r, i, "*", o));
        return c;
    }
    function b_(e) {
        return function(t, n) {
            typeof t != "string" && (n = t, t = "*");
            if (s.isFunction(n)) {
                var r = t.toLowerCase().split(Ct), i = 0, o = r.length, u, a, f;
                for (; i < o; i++) u = r[i], f = /^\+/.test(u), f && (u = u.substr(1) || "*"), a = e[u] = e[u] || [], a[f ? "unshift" : "push"](n);
            }
        };
    }
    function bE(e, t, n) {
        var r = t === "width" ? e.offsetWidth : e.offsetHeight, i = t === "width" ? ft : lt;
        if (r > 0) {
            n !== "border" && s.each(i, function() {
                n || (r -= parseFloat(s.css(e, "padding" + this)) || 0), n === "margin" ? r += parseFloat(s.css(e, n + this)) || 0 : r -= parseFloat(s.css(e, "border" + this + "Width")) || 0;
            });
            return r + "px";
        }
        r = ct(e, t, t);
        if (r < 0 || r == null) r = e.style[t] || 0;
        r = parseFloat(r) || 0, n && s.each(i, function() {
            r += parseFloat(s.css(e, "padding" + this)) || 0, n !== "padding" && (r += parseFloat(s.css(e, "border" + this + "Width")) || 0), n === "margin" && (r += parseFloat(s.css(e, n + this)) || 0);
        });
        return r + "px";
    }
    function br(e, t) {
        t.src ? s.ajax({
            url: t.src,
            async: !1,
            dataType: "script"
        }) : s.globalEval((t.text || t.textContent || t.innerHTML || "").replace(Z, "/*$0*/")), t.parentNode && t.parentNode.removeChild(t);
    }
    function bq(e) {
        var t = (e.nodeName || "").toLowerCase();
        t === "input" ? bp(e) : t !== "script" && typeof e.getElementsByTagName != "undefined" && s.grep(e.getElementsByTagName("input"), bp);
    }
    function bp(e) {
        if (e.type === "checkbox" || e.type === "radio") e.defaultChecked = e.checked;
    }
    function bo(e) {
        return typeof e.getElementsByTagName != "undefined" ? e.getElementsByTagName("*") : typeof e.querySelectorAll != "undefined" ? e.querySelectorAll("*") : [];
    }
    function bn(e, t) {
        var n;
        if (t.nodeType === 1) {
            t.clearAttributes && t.clearAttributes(), t.mergeAttributes && t.mergeAttributes(e), n = t.nodeName.toLowerCase();
            if (n === "object") t.outerHTML = e.outerHTML; else if (n !== "input" || e.type !== "checkbox" && e.type !== "radio") {
                if (n === "option") t.selected = e.defaultSelected; else if (n === "input" || n === "textarea") t.defaultValue = e.defaultValue;
            } else e.checked && (t.defaultChecked = t.checked = e.checked), t.value !== e.value && (t.value = e.value);
            t.removeAttribute(s.expando);
        }
    }
    function bm(e, t) {
        if (t.nodeType === 1 && !!s.hasData(e)) {
            var n, r, i, o = s._data(e), u = s._data(t, o), a = o.events;
            if (a) {
                delete u.handle, u.events = {};
                for (n in a) for (r = 0, i = a[n].length; r < i; r++) s.event.add(t, n + (a[n][r].namespace ? "." : "") + a[n][r].namespace, a[n][r], a[n][r].data);
            }
            u.data && (u.data = s.extend({}, u.data));
        }
    }
    function bl(e, t) {
        return s.nodeName(e, "table") ? e.getElementsByTagName("tbody")[0] || e.appendChild(e.ownerDocument.createElement("tbody")) : e;
    }
    function X(e) {
        var t = R.split(" "), n = e.createDocumentFragment();
        if (n.createElement) while (t.length) n.createElement(t.pop());
        return n;
    }
    function W(e, t, n) {
        t = t || 0;
        if (s.isFunction(t)) return s.grep(e, function(e, r) {
            var i = !!t.call(e, r, e);
            return i === n;
        });
        if (t.nodeType) return s.grep(e, function(e, r) {
            return e === t === n;
        });
        if (typeof t == "string") {
            var r = s.grep(e, function(e) {
                return e.nodeType === 1;
            });
            if (j.test(t)) return s.filter(t, r, !n);
            t = s.filter(t, r);
        }
        return s.grep(e, function(e, r) {
            return s.inArray(e, t) >= 0 === n;
        });
    }
    function V(e) {
        return !e || !e.parentNode || e.parentNode.nodeType === 11;
    }
    function N() {
        return !0;
    }
    function M() {
        return !1;
    }
    function n(e, t, n) {
        var r = t + "defer", i = t + "queue", o = t + "mark", u = s._data(e, r);
        u && (n === "queue" || !s._data(e, i)) && (n === "mark" || !s._data(e, o)) && setTimeout(function() {
            !s._data(e, i) && !s._data(e, o) && (s.removeData(e, r, !0), u.fire());
        }, 0);
    }
    function m(e) {
        for (var t in e) {
            if (t === "data" && s.isEmptyObject(e[t])) continue;
            if (t !== "toJSON") return !1;
        }
        return !0;
    }
    function l(e, n, r) {
        if (r === t && e.nodeType === 1) {
            var i = "data-" + n.replace(f, "-$1").toLowerCase();
            r = e.getAttribute(i);
            if (typeof r == "string") {
                try {
                    r = r === "true" ? !0 : r === "false" ? !1 : r === "null" ? null : s.isNumeric(r) ? parseFloat(r) : a.test(r) ? s.parseJSON(r) : r;
                } catch (o) {}
                s.data(e, n, r);
            } else r = t;
        }
        return r;
    }
    function h(e) {
        var t = o[e] = {}, n, r;
        e = e.split(/\s+/);
        for (n = 0, r = e.length; n < r; n++) t[e[n]] = !0;
        return t;
    }
    var n = e.document, r = e.navigator, i = e.location, s = function() {
        function K() {
            if (!i.isReady) {
                try {
                    n.documentElement.doScroll("left");
                } catch (e) {
                    setTimeout(K, 1);
                    return;
                }
                i.ready();
            }
        }
        var i = function(e, t) {
            return new i.fn.init(e, t, u);
        }, s = e.jQuery, o = e.$, u, a = /^(?:[^#<]*(<[\w\W]+>)[^>]*$|#([\w\-]*)$)/, f = /\S/, l = /^\s+/, c = /\s+$/, h = /\d/, p = /^<(\w+)\s*\/?>(?:<\/\1>)?$/, d = /^[\],:{}\s]*$/, v = /\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g, m = /"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, g = /(?:^|:|,)(?:\s*\[)+/g, y = /(webkit)[ \/]([\w.]+)/, b = /(opera)(?:.*version)?[ \/]([\w.]+)/, w = /(msie) ([\w.]+)/, E = /(mozilla)(?:.*? rv:([\w.]+))?/, S = /-([a-z]|[0-9])/ig, x = /^-ms-/, T = function(e, t) {
            return (t + "").toUpperCase();
        }, N = r.userAgent, C, k, L, A = Object.prototype.toString, O = Object.prototype.hasOwnProperty, M = Array.prototype.push, _ = Array.prototype.slice, D = String.prototype.trim, P = Array.prototype.indexOf, H = {};
        i.fn = i.prototype = {
            constructor: i,
            init: function(e, r, s) {
                var o, u, f, l;
                if (!e) return this;
                if (e.nodeType) {
                    this.context = this[0] = e, this.length = 1;
                    return this;
                }
                if (e === "body" && !r && n.body) {
                    this.context = n, this[0] = n.body, this.selector = e, this.length = 1;
                    return this;
                }
                if (typeof e == "string") {
                    e.charAt(0) !== "<" || e.charAt(e.length - 1) !== ">" || e.length < 3 ? o = a.exec(e) : o = [ null, e, null ];
                    if (o && (o[1] || !r)) {
                        if (o[1]) {
                            r = r instanceof i ? r[0] : r, l = r ? r.ownerDocument || r : n, f = p.exec(e), f ? i.isPlainObject(r) ? (e = [ n.createElement(f[1]) ], i.fn.attr.call(e, r, !0)) : e = [ l.createElement(f[1]) ] : (f = i.buildFragment([ o[1] ], [ l ]), e = (f.cacheable ? i.clone(f.fragment) : f.fragment).childNodes);
                            return i.merge(this, e);
                        }
                        u = n.getElementById(o[2]);
                        if (u && u.parentNode) {
                            if (u.id !== o[2]) return s.find(e);
                            this.length = 1, this[0] = u;
                        }
                        this.context = n, this.selector = e;
                        return this;
                    }
                    return !r || r.jquery ? (r || s).find(e) : this.constructor(r).find(e);
                }
                if (i.isFunction(e)) return s.ready(e);
                e.selector !== t && (this.selector = e.selector, this.context = e.context);
                return i.makeArray(e, this);
            },
            selector: "",
            jquery: "1.7",
            length: 0,
            size: function() {
                return this.length;
            },
            toArray: function() {
                return _.call(this, 0);
            },
            get: function(e) {
                return e == null ? this.toArray() : e < 0 ? this[this.length + e] : this[e];
            },
            pushStack: function(e, t, n) {
                var r = this.constructor();
                i.isArray(e) ? M.apply(r, e) : i.merge(r, e), r.prevObject = this, r.context = this.context, t === "find" ? r.selector = this.selector + (this.selector ? " " : "") + n : t && (r.selector = this.selector + "." + t + "(" + n + ")");
                return r;
            },
            each: function(e, t) {
                return i.each(this, e, t);
            },
            ready: function(e) {
                i.bindReady(), k.add(e);
                return this;
            },
            eq: function(e) {
                return e === -1 ? this.slice(e) : this.slice(e, +e + 1);
            },
            first: function() {
                return this.eq(0);
            },
            last: function() {
                return this.eq(-1);
            },
            slice: function() {
                return this.pushStack(_.apply(this, arguments), "slice", _.call(arguments).join(","));
            },
            map: function(e) {
                return this.pushStack(i.map(this, function(t, n) {
                    return e.call(t, n, t);
                }));
            },
            end: function() {
                return this.prevObject || this.constructor(null);
            },
            push: M,
            sort: [].sort,
            splice: [].splice
        }, i.fn.init.prototype = i.fn, i.extend = i.fn.extend = function() {
            var e, n, r, s, o, u, a = arguments[0] || {}, f = 1, l = arguments.length, c = !1;
            typeof a == "boolean" && (c = a, a = arguments[1] || {}, f = 2), typeof a != "object" && !i.isFunction(a) && (a = {}), l === f && (a = this, --f);
            for (; f < l; f++) if ((e = arguments[f]) != null) for (n in e) {
                r = a[n], s = e[n];
                if (a === s) continue;
                c && s && (i.isPlainObject(s) || (o = i.isArray(s))) ? (o ? (o = !1, u = r && i.isArray(r) ? r : []) : u = r && i.isPlainObject(r) ? r : {}, a[n] = i.extend(c, u, s)) : s !== t && (a[n] = s);
            }
            return a;
        }, i.extend({
            noConflict: function(t) {
                e.$ === i && (e.$ = o), t && e.jQuery === i && (e.jQuery = s);
                return i;
            },
            isReady: !1,
            readyWait: 1,
            holdReady: function(e) {
                e ? i.readyWait++ : i.ready(!0);
            },
            ready: function(e) {
                if (e === !0 && !--i.readyWait || e !== !0 && !i.isReady) {
                    if (!n.body) return setTimeout(i.ready, 1);
                    i.isReady = !0;
                    if (e !== !0 && --i.readyWait > 0) return;
                    k.fireWith(n, [ i ]), i.fn.trigger && i(n).trigger("ready").unbind("ready");
                }
            },
            bindReady: function() {
                if (!k) {
                    k = i.Callbacks("once memory");
                    if (n.readyState === "complete") return setTimeout(i.ready, 1);
                    if (n.addEventListener) n.addEventListener("DOMContentLoaded", L, !1), e.addEventListener("load", i.ready, !1); else if (n.attachEvent) {
                        n.attachEvent("onreadystatechange", L), e.attachEvent("onload", i.ready);
                        var t = !1;
                        try {
                            t = e.frameElement == null;
                        } catch (r) {}
                        n.documentElement.doScroll && t && K();
                    }
                }
            },
            isFunction: function(e) {
                return i.type(e) === "function";
            },
            isArray: Array.isArray || function(e) {
                return i.type(e) === "array";
            },
            isWindow: function(e) {
                return e && typeof e == "object" && "setInterval" in e;
            },
            isNumeric: function(e) {
                return e != null && h.test(e) && !isNaN(e);
            },
            type: function(e) {
                return e == null ? String(e) : H[A.call(e)] || "object";
            },
            isPlainObject: function(e) {
                if (!e || i.type(e) !== "object" || e.nodeType || i.isWindow(e)) return !1;
                try {
                    if (e.constructor && !O.call(e, "constructor") && !O.call(e.constructor.prototype, "isPrototypeOf")) return !1;
                } catch (n) {
                    return !1;
                }
                var r;
                for (r in e) ;
                return r === t || O.call(e, r);
            },
            isEmptyObject: function(e) {
                for (var t in e) return !1;
                return !0;
            },
            error: function(e) {
                throw e;
            },
            parseJSON: function(t) {
                if (typeof t != "string" || !t) return null;
                t = i.trim(t);
                if (e.JSON && e.JSON.parse) return e.JSON.parse(t);
                if (d.test(t.replace(v, "@").replace(m, "]").replace(g, ""))) return (new Function("return " + t))();
                i.error("Invalid JSON: " + t);
            },
            parseXML: function(n) {
                var r, s;
                try {
                    e.DOMParser ? (s = new DOMParser, r = s.parseFromString(n, "text/xml")) : (r = new ActiveXObject("Microsoft.XMLDOM"), r.async = "false", r.loadXML(n));
                } catch (o) {
                    r = t;
                }
                (!r || !r.documentElement || r.getElementsByTagName("parsererror").length) && i.error("Invalid XML: " + n);
                return r;
            },
            noop: function() {},
            globalEval: function(t) {
                t && f.test(t) && (e.execScript || function(t) {
                    e.eval.call(e, t);
                })(t);
            },
            camelCase: function(e) {
                return e.replace(x, "ms-").replace(S, T);
            },
            nodeName: function(e, t) {
                return e.nodeName && e.nodeName.toUpperCase() === t.toUpperCase();
            },
            each: function(e, n, r) {
                var s, o = 0, u = e.length, a = u === t || i.isFunction(e);
                if (r) {
                    if (a) {
                        for (s in e) if (n.apply(e[s], r) === !1) break;
                    } else for (; o < u; ) if (n.apply(e[o++], r) === !1) break;
                } else if (a) {
                    for (s in e) if (n.call(e[s], s, e[s]) === !1) break;
                } else for (; o < u; ) if (n.call(e[o], o, e[o++]) === !1) break;
                return e;
            },
            trim: D ? function(e) {
                return e == null ? "" : D.call(e);
            } : function(e) {
                return e == null ? "" : (e + "").replace(l, "").replace(c, "");
            },
            makeArray: function(e, t) {
                var n = t || [];
                if (e != null) {
                    var r = i.type(e);
                    e.length == null || r === "string" || r === "function" || r === "regexp" || i.isWindow(e) ? M.call(n, e) : i.merge(n, e);
                }
                return n;
            },
            inArray: function(e, t, n) {
                var r;
                if (t) {
                    if (P) return P.call(t, e, n);
                    r = t.length, n = n ? n < 0 ? Math.max(0, r + n) : n : 0;
                    for (; n < r; n++) if (n in t && t[n] === e) return n;
                }
                return -1;
            },
            merge: function(e, n) {
                var r = e.length, i = 0;
                if (typeof n.length == "number") for (var s = n.length; i < s; i++) e[r++] = n[i]; else while (n[i] !== t) e[r++] = n[i++];
                e.length = r;
                return e;
            },
            grep: function(e, t, n) {
                var r = [], i;
                n = !!n;
                for (var s = 0, o = e.length; s < o; s++) i = !!t(e[s], s), n !== i && r.push(e[s]);
                return r;
            },
            map: function(e, n, r) {
                var s, o, u = [], a = 0, f = e.length, l = e instanceof i || f !== t && typeof f == "number" && (f > 0 && e[0] && e[f - 1] || f === 0 || i.isArray(e));
                if (l) for (; a < f; a++) s = n(e[a], a, r), s != null && (u[u.length] = s); else for (o in e) s = n(e[o], o, r), s != null && (u[u.length] = s);
                return u.concat.apply([], u);
            },
            guid: 1,
            proxy: function(e, n) {
                if (typeof n == "string") {
                    var r = e[n];
                    n = e, e = r;
                }
                if (!i.isFunction(e)) return t;
                var s = _.call(arguments, 2), o = function() {
                    return e.apply(n, s.concat(_.call(arguments)));
                };
                o.guid = e.guid = e.guid || o.guid || i.guid++;
                return o;
            },
            access: function(e, n, r, s, o, u) {
                var a = e.length;
                if (typeof n == "object") {
                    for (var f in n) i.access(e, f, n[f], s, o, r);
                    return e;
                }
                if (r !== t) {
                    s = !u && s && i.isFunction(r);
                    for (var l = 0; l < a; l++) o(e[l], n, s ? r.call(e[l], l, o(e[l], n)) : r, u);
                    return e;
                }
                return a ? o(e[0], n) : t;
            },
            now: function() {
                return (new Date).getTime();
            },
            uaMatch: function(e) {
                e = e.toLowerCase();
                var t = y.exec(e) || b.exec(e) || w.exec(e) || e.indexOf("compatible") < 0 && E.exec(e) || [];
                return {
                    browser: t[1] || "",
                    version: t[2] || "0"
                };
            },
            sub: function() {
                function a(e, t) {
                    return new a.fn.init(e, t);
                }
                i.extend(!0, a, this), a.superclass = this, a.fn = a.prototype = this(), a.fn.constructor = a, a.sub = this.sub, a.fn.init = function(t, n) {
                    n && n instanceof i && !(n instanceof a) && (n = a(n));
                    return i.fn.init.call(this, t, n, e);
                }, a.fn.init.prototype = a.fn;
                var e = a(n);
                return a;
            },
            browser: {}
        }), i.each("Boolean Number String Function Array Date RegExp Object".split(" "), function(e, t) {
            H["[object " + t + "]"] = t.toLowerCase();
        }), C = i.uaMatch(N), C.browser && (i.browser[C.browser] = !0, i.browser.version = C.version), i.browser.webkit && (i.browser.safari = !0), f.test(" ") && (l = /^[\s\xA0]+/, c = /[\s\xA0]+$/), u = i(n), n.addEventListener ? L = function() {
            n.removeEventListener("DOMContentLoaded", L, !1), i.ready();
        } : n.attachEvent && (L = function() {
            n.readyState === "complete" && (n.detachEvent("onreadystatechange", L), i.ready());
        }), typeof define == "function" && define.amd && define.amd.jQuery && define("jquery", [], function() {
            return i;
        });
        return i;
    }(), o = {};
    s.Callbacks = function(e) {
        e = e ? o[e] || h(e) : {};
        var n = [], r = [], i, u, a, f, l, c = function(t) {
            var r, i, o, u, a;
            for (r = 0, i = t.length; r < i; r++) o = t[r], u = s.type(o), u === "array" ? c(o) : u === "function" && (!e.unique || !p.has(o)) && n.push(o);
        }, h = function(t, s) {
            s = s || [], i = !e.memory || [ t, s ], u = !0, l = a || 0, a = 0, f = n.length;
            for (; n && l < f; l++) if (n[l].apply(t, s) === !1 && e.stopOnFalse) {
                i = !0;
                break;
            }
            u = !1, n && (e.once ? i === !0 ? p.disable() : n = [] : r && r.length && (i = r.shift(), p.fireWith(i[0], i[1])));
        }, p = {
            add: function() {
                if (n) {
                    var e = n.length;
                    c(arguments), u ? f = n.length : i && i !== !0 && (a = e, h(i[0], i[1]));
                }
                return this;
            },
            remove: function() {
                if (n) {
                    var t = arguments, r = 0, i = t.length;
                    for (; r < i; r++) for (var s = 0; s < n.length; s++) if (t[r] === n[s]) {
                        u && s <= f && (f--, s <= l && l--), n.splice(s--, 1);
                        if (e.unique) break;
                    }
                }
                return this;
            },
            has: function(e) {
                if (n) {
                    var t = 0, r = n.length;
                    for (; t < r; t++) if (e === n[t]) return !0;
                }
                return !1;
            },
            empty: function() {
                n = [];
                return this;
            },
            disable: function() {
                n = r = i = t;
                return this;
            },
            disabled: function() {
                return !n;
            },
            lock: function() {
                r = t, (!i || i === !0) && p.disable();
                return this;
            },
            locked: function() {
                return !r;
            },
            fireWith: function(t, n) {
                r && (u ? e.once || r.push([ t, n ]) : (!e.once || !i) && h(t, n));
                return this;
            },
            fire: function() {
                p.fireWith(this, arguments);
                return this;
            },
            fired: function() {
                return !!i;
            }
        };
        return p;
    };
    var u = [].slice;
    s.extend({
        Deferred: function(e) {
            var t = s.Callbacks("once memory"), n = s.Callbacks("once memory"), r = s.Callbacks("memory"), i = "pending", o = {
                resolve: t,
                reject: n,
                notify: r
            }, u = {
                done: t.add,
                fail: n.add,
                progress: r.add,
                state: function() {
                    return i;
                },
                isResolved: t.fired,
                isRejected: n.fired,
                then: function(e, t, n) {
                    a.done(e).fail(t).progress(n);
                    return this;
                },
                always: function() {
                    return a.done.apply(a, arguments).fail.apply(a, arguments);
                },
                pipe: function(e, t, n) {
                    return s.Deferred(function(r) {
                        s.each({
                            done: [ e, "resolve" ],
                            fail: [ t, "reject" ],
                            progress: [ n, "notify" ]
                        }, function(e, t) {
                            var n = t[0], i = t[1], o;
                            s.isFunction(n) ? a[e](function() {
                                o = n.apply(this, arguments), o && s.isFunction(o.promise) ? o.promise().then(r.resolve, r.reject, r.notify) : r[i + "With"](this === a ? r : this, [ o ]);
                            }) : a[e](r[i]);
                        });
                    }).promise();
                },
                promise: function(e) {
                    if (e == null) e = u; else for (var t in u) e[t] = u[t];
                    return e;
                }
            }, a = u.promise({}), f;
            for (f in o) a[f] = o[f].fire, a[f + "With"] = o[f].fireWith;
            a.done(function() {
                i = "resolved";
            }, n.disable, r.lock).fail(function() {
                i = "rejected";
            }, t.disable, r.lock), e && e.call(a, a);
            return a;
        },
        when: function(e) {
            function m(e) {
                return function(t) {
                    i[e] = arguments.length > 1 ? u.call(arguments, 0) : t, f.notifyWith(l, i);
                };
            }
            function l(e) {
                return function(n) {
                    t[e] = arguments.length > 1 ? u.call(arguments, 0) : n, --o || f.resolveWith(f, t);
                };
            }
            var t = u.call(arguments, 0), n = 0, r = t.length, i = Array(r), o = r, a = r, f = r <= 1 && e && s.isFunction(e.promise) ? e : s.Deferred(), l = f.promise();
            if (r > 1) {
                for (; n < r; n++) t[n] && t[n].promise && s.isFunction(t[n].promise) ? t[n].promise().then(l(n), f.reject, m(n)) : --o;
                o || f.resolveWith(f, t);
            } else f !== e && f.resolveWith(f, r ? [ e ] : []);
            return l;
        }
    }), s.support = function() {
        var e = n.createElement("div"), t = n.documentElement, r, i, o, u, a, f, l, c, h, p, d, v, m, g, y, b, w;
        e.setAttribute("className", "t"), e.innerHTML = "   <link/><table></table><a href='/a' style='top:1px;float:left;opacity:.55;'>a</a><input type='checkbox'/><nav></nav>", r = e.getElementsByTagName("*"), i = e.getElementsByTagName("a")[0];
        if (!r || !r.length || !i) return {};
        o = n.createElement("select"), u = o.appendChild(n.createElement("option")), a = e.getElementsByTagName("input")[0], l = {
            leadingWhitespace: e.firstChild.nodeType === 3,
            tbody: !e.getElementsByTagName("tbody").length,
            htmlSerialize: !!e.getElementsByTagName("link").length,
            style: /top/.test(i.getAttribute("style")),
            hrefNormalized: i.getAttribute("href") === "/a",
            opacity: /^0.55/.test(i.style.opacity),
            cssFloat: !!i.style.cssFloat,
            unknownElems: !!e.getElementsByTagName("nav").length,
            checkOn: a.value === "on",
            optSelected: u.selected,
            getSetAttribute: e.className !== "t",
            enctype: !!n.createElement("form").enctype,
            submitBubbles: !0,
            changeBubbles: !0,
            focusinBubbles: !1,
            deleteExpando: !0,
            noCloneEvent: !0,
            inlineBlockNeedsLayout: !1,
            shrinkWrapBlocks: !1,
            reliableMarginRight: !0
        }, a.checked = !0, l.noCloneChecked = a.cloneNode(!0).checked, o.disabled = !0, l.optDisabled = !u.disabled;
        try {
            delete e.test;
        } catch (E) {
            l.deleteExpando = !1;
        }
        !e.addEventListener && e.attachEvent && e.fireEvent && (e.attachEvent("onclick", function() {
            l.noCloneEvent = !1;
        }), e.cloneNode(!0).fireEvent("onclick")), a = n.createElement("input"), a.value = "t", a.setAttribute("type", "radio"), l.radioValue = a.value === "t", a.setAttribute("checked", "checked"), e.appendChild(a), c = n.createDocumentFragment(), c.appendChild(e.lastChild), l.checkClone = c.cloneNode(!0).cloneNode(!0).lastChild.checked, e.innerHTML = "", e.style.width = e.style.paddingLeft = "1px", h = n.getElementsByTagName("body")[0], d = n.createElement(h ? "div" : "body"), v = {
            visibility: "hidden",
            width: 0,
            height: 0,
            border: 0,
            margin: 0,
            background: "none"
        }, h && s.extend(v, {
            position: "absolute",
            left: "-999px",
            top: "-999px"
        });
        for (b in v) d.style[b] = v[b];
        d.appendChild(e), p = h || t, p.insertBefore(d, p.firstChild), l.appendChecked = a.checked, l.boxModel = e.offsetWidth === 2, "zoom" in e.style && (e.style.display = "inline", e.style.zoom = 1, l.inlineBlockNeedsLayout = e.offsetWidth === 2, e.style.display = "", e.innerHTML = "<div style='width:4px;'></div>", l.shrinkWrapBlocks = e.offsetWidth !== 2), e.innerHTML = "<table><tr><td style='padding:0;border:0;display:none'></td><td>t</td></tr></table>", m = e.getElementsByTagName("td"), w = m[0].offsetHeight === 0, m[0].style.display = "", m[1].style.display = "none", l.reliableHiddenOffsets = w && m[0].offsetHeight === 0, e.innerHTML = "", n.defaultView && n.defaultView.getComputedStyle && (f = n.createElement("div"), f.style.width = "0", f.style.marginRight = "0", e.appendChild(f), l.reliableMarginRight = (parseInt((n.defaultView.getComputedStyle(f, null) || {
            marginRight: 0
        }).marginRight, 10) || 0) === 0);
        if (e.attachEvent) for (b in {
            submit: 1,
            change: 1,
            focusin: 1
        }) y = "on" + b, w = y in e, w || (e.setAttribute(y, "return;"), w = typeof e[y] == "function"), l[b + "Bubbles"] = w;
        s(function() {
            var e, t, r, i, o, u, a = 1, f = "position:absolute;top:0;left:0;width:1px;height:1px;margin:0;", c = "visibility:hidden;border:0;", p = "style='" + f + "border:5px solid #000;padding:0;'", v = "<div " + p + "><div></div></div>" + "<table " + p + " cellpadding='0' cellspacing='0'>" + "<tr><td></td></tr></table>";
            h = n.getElementsByTagName("body")[0];
            !h || (e = n.createElement("div"), e.style.cssText = c + "width:0;height:0;position:static;top:0;margin-top:" + a + "px", h.insertBefore(e, h.firstChild), d = n.createElement("div"), d.style.cssText = f + c, d.innerHTML = v, e.appendChild(d), t = d.firstChild, r = t.firstChild, o = t.nextSibling.firstChild.firstChild, u = {
                doesNotAddBorder: r.offsetTop !== 5,
                doesAddBorderForTableAndCells: o.offsetTop === 5
            }, r.style.position = "fixed", r.style.top = "20px", u.fixedPosition = r.offsetTop === 20 || r.offsetTop === 15, r.style.position = r.style.top = "", t.style.overflow = "hidden", t.style.position = "relative", u.subtractsBorderForOverflowNotVisible = r.offsetTop === -5, u.doesNotIncludeMarginInBodyOffset = h.offsetTop !== a, h.removeChild(e), d = e = null, s.extend(l, u));
        }), d.innerHTML = "", p.removeChild(d), d = c = o = u = h = f = e = a = null;
        return l;
    }(), s.boxModel = s.support.boxModel;
    var a = /^(?:\{.*\}|\[.*\])$/, f = /([A-Z])/g;
    s.extend({
        cache: {},
        uuid: 0,
        expando: "jQuery" + (s.fn.jquery + Math.random()).replace(/\D/g, ""),
        noData: {
            embed: !0,
            object: "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",
            applet: !0
        },
        hasData: function(e) {
            e = e.nodeType ? s.cache[e[s.expando]] : e[s.expando];
            return !!e && !m(e);
        },
        data: function(e, n, r, i) {
            if (!!s.acceptData(e)) {
                var o, u, a, f = s.expando, l = typeof n == "string", c = e.nodeType, h = c ? s.cache : e, p = c ? e[s.expando] : e[s.expando] && s.expando, d = n === "events";
                if ((!p || !h[p] || !d && !i && !h[p].data) && l && r === t) return;
                p || (c ? e[s.expando] = p = ++s.uuid : p = s.expando), h[p] || (h[p] = {}, c || (h[p].toJSON = s.noop));
                if (typeof n == "object" || typeof n == "function") i ? h[p] = s.extend(h[p], n) : h[p].data = s.extend(h[p].data, n);
                o = u = h[p], i || (u.data || (u.data = {}), u = u.data), r !== t && (u[s.camelCase(n)] = r);
                if (d && !u[n]) return o.events;
                l ? (a = u[n], a == null && (a = u[s.camelCase(n)])) : a = u;
                return a;
            }
        },
        removeData: function(e, t, n) {
            if (!!s.acceptData(e)) {
                var r, i, o, u = s.expando, a = e.nodeType, f = a ? s.cache : e, l = a ? e[s.expando] : s.expando;
                if (!f[l]) return;
                if (t) {
                    r = n ? f[l] : f[l].data;
                    if (r) {
                        s.isArray(t) ? t = t : t in r ? t = [ t ] : (t = s.camelCase(t), t in r ? t = [ t ] : t = t.split(" "));
                        for (i = 0, o = t.length; i < o; i++) delete r[t[i]];
                        if (!(n ? m : s.isEmptyObject)(r)) return;
                    }
                }
                if (!n) {
                    delete f[l].data;
                    if (!m(f[l])) return;
                }
                s.support.deleteExpando || !f.setInterval ? delete f[l] : f[l] = null, a && (s.support.deleteExpando ? delete e[s.expando] : e.removeAttribute ? e.removeAttribute(s.expando) : e[s.expando] = null);
            }
        },
        _data: function(e, t, n) {
            return s.data(e, t, n, !0);
        },
        acceptData: function(e) {
            if (e.nodeName) {
                var t = s.noData[e.nodeName.toLowerCase()];
                if (t) return t !== !0 && e.getAttribute("classid") === t;
            }
            return !0;
        }
    }), s.fn.extend({
        data: function(e, n) {
            var r, i, o, u = null;
            if (typeof e == "undefined") {
                if (this.length) {
                    u = s.data(this[0]);
                    if (this[0].nodeType === 1 && !s._data(this[0], "parsedAttrs")) {
                        i = this[0].attributes;
                        for (var a = 0, f = i.length; a < f; a++) o = i[a].name, o.indexOf("data-") === 0 && (o = s.camelCase(o.substring(5)), l(this[0], o, u[o]));
                        s._data(this[0], "parsedAttrs", !0);
                    }
                }
                return u;
            }
            if (typeof e == "object") return this.each(function() {
                s.data(this, e);
            });
            r = e.split("."), r[1] = r[1] ? "." + r[1] : "";
            if (n === t) {
                u = this.triggerHandler("getData" + r[1] + "!", [ r[0] ]), u === t && this.length && (u = s.data(this[0], e), u = l(this[0], e, u));
                return u === t && r[1] ? this.data(r[0]) : u;
            }
            return this.each(function() {
                var t = s(this), i = [ r[0], n ];
                t.triggerHandler("setData" + r[1] + "!", i), s.data(this, e, n), t.triggerHandler("changeData" + r[1] + "!", i);
            });
        },
        removeData: function(e) {
            return this.each(function() {
                s.removeData(this, e);
            });
        }
    }), s.extend({
        _mark: function(e, t) {
            e && (t = (t || "fx") + "mark", s._data(e, t, (s._data(e, t) || 0) + 1));
        },
        _unmark: function(e, t, n) {
            e !== !0 && (n = t, t = e, e = !1);
            if (t) {
                n = n || "fx";
                var r = n + "mark", i = e ? 0 : (s._data(t, r) || 1) - 1;
                i ? s._data(t, r, i) : (s.removeData(t, r, !0), n(t, n, "mark"));
            }
        },
        queue: function(e, t, n) {
            var r;
            if (e) {
                t = (t || "fx") + "queue", r = s._data(e, t), n && (!r || s.isArray(n) ? r = s._data(e, t, s.makeArray(n)) : r.push(n));
                return r || [];
            }
        },
        dequeue: function(e, t) {
            t = t || "fx";
            var n = s.queue(e, t), r = n.shift(), i = {};
            r === "inprogress" && (r = n.shift()), r && (t === "fx" && n.unshift("inprogress"), s._data(e, t + ".run", i), r.call(e, function() {
                s.dequeue(e, t);
            }, i)), n.length || (s.removeData(e, t + "queue " + t + ".run", !0), n(e, t, "queue"));
        }
    }), s.fn.extend({
        queue: function(e, n) {
            typeof e != "string" && (n = e, e = "fx");
            return n === t ? s.queue(this[0], e) : this.each(function() {
                var t = s.queue(this, e, n);
                e === "fx" && t[0] !== "inprogress" && s.dequeue(this, e);
            });
        },
        dequeue: function(e) {
            return this.each(function() {
                s.dequeue(this, e);
            });
        },
        delay: function(e, t) {
            e = s.fx ? s.fx.speeds[e] || e : e, t = t || "fx";
            return this.queue(t, function(t, n) {
                var r = setTimeout(t, e);
                n.stop = function() {
                    clearTimeout(r);
                };
            });
        },
        clearQueue: function(e) {
            return this.queue(e || "fx", []);
        },
        promise: function(e, n) {
            function m() {
                --u || r.resolveWith(i, [ i ]);
            }
            typeof e != "string" && (n = e, e = t), e = e || "fx";
            var r = s.Deferred(), i = this, o = i.length, u = 1, a = e + "defer", f = e + "queue", l = e + "mark", c;
            while (o--) if (c = s.data(i[o], a, t, !0) || (s.data(i[o], f, t, !0) || s.data(i[o], l, t, !0)) && s.data(i[o], a, s.Callbacks("once memory"), !0)) u++, c.add(m);
            m();
            return r.promise();
        }
    });
    var l = /[\n\t\r]/g, c = /\s+/, h = /\r/g, p = /^(?:button|input)$/i, d = /^(?:button|input|object|select|textarea)$/i, v = /^a(?:rea)?$/i, m = /^(?:autofocus|autoplay|async|checked|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped|selected)$/i, g = s.support.getSetAttribute, y, b, w;
    s.fn.extend({
        attr: function(e, t) {
            return s.access(this, e, t, !0, s.attr);
        },
        removeAttr: function(e) {
            return this.each(function() {
                s.removeAttr(this, e);
            });
        },
        prop: function(e, t) {
            return s.access(this, e, t, !0, s.prop);
        },
        removeProp: function(e) {
            e = s.propFix[e] || e;
            return this.each(function() {
                try {
                    this[e] = t, delete this[e];
                } catch (n) {}
            });
        },
        addClass: function(e) {
            var t, n, r, i, o, u, a;
            if (s.isFunction(e)) return this.each(function(t) {
                s(this).addClass(e.call(this, t, this.className));
            });
            if (e && typeof e == "string") {
                t = e.split(c);
                for (n = 0, r = this.length; n < r; n++) {
                    i = this[n];
                    if (i.nodeType === 1) if (!i.className && t.length === 1) i.className = e; else {
                        o = " " + i.className + " ";
                        for (u = 0, a = t.length; u < a; u++) ~o.indexOf(" " + t[u] + " ") || (o += t[u] + " ");
                        i.className = s.trim(o);
                    }
                }
            }
            return this;
        },
        removeClass: function(e) {
            var n, r, i, o, u, a, f;
            if (s.isFunction(e)) return this.each(function(t) {
                s(this).removeClass(e.call(this, t, this.className));
            });
            if (e && typeof e == "string" || e === t) {
                n = (e || "").split(c);
                for (r = 0, i = this.length; r < i; r++) {
                    o = this[r];
                    if (o.nodeType === 1 && o.className) if (e) {
                        u = (" " + o.className + " ").replace(l, " ");
                        for (a = 0, f = n.length; a < f; a++) u = u.replace(" " + n[a] + " ", " ");
                        o.className = s.trim(u);
                    } else o.className = "";
                }
            }
            return this;
        },
        toggleClass: function(e, t) {
            var n = typeof e, r = typeof t == "boolean";
            return s.isFunction(e) ? this.each(function(n) {
                s(this).toggleClass(e.call(this, n, this.className, t), t);
            }) : this.each(function() {
                if (n === "string") {
                    var i, o = 0, u = s(this), a = t, f = e.split(c);
                    while (i = f[o++]) a = r ? a : !u.hasClass(i), u[a ? "addClass" : "removeClass"](i);
                } else if (n === "undefined" || n === "boolean") this.className && s._data(this, "__className__", this.className), this.className = this.className || e === !1 ? "" : s._data(this, "__className__") || "";
            });
        },
        hasClass: function(e) {
            var t = " " + e + " ", n = 0, r = this.length;
            for (; n < r; n++) if (this[n].nodeType === 1 && (" " + this[n].className + " ").replace(l, " ").indexOf(t) > -1) return !0;
            return !1;
        },
        val: function(e) {
            var n, r, i, o = this[0];
            if (!arguments.length) {
                if (o) {
                    n = s.valHooks[o.nodeName.toLowerCase()] || s.valHooks[o.type];
                    if (n && "get" in n && (r = n.get(o, "value")) !== t) return r;
                    r = o.value;
                    return typeof r == "string" ? r.replace(h, "") : r == null ? "" : r;
                }
                return t;
            }
            i = s.isFunction(e);
            return this.each(function(r) {
                var o = s(this), u;
                if (this.nodeType === 1) {
                    i ? u = e.call(this, r, o.val()) : u = e, u == null ? u = "" : typeof u == "number" ? u += "" : s.isArray(u) && (u = s.map(u, function(e) {
                        return e == null ? "" : e + "";
                    })), n = s.valHooks[this.nodeName.toLowerCase()] || s.valHooks[this.type];
                    if (!n || !("set" in n) || n.set(this, u, "value") === t) this.value = u;
                }
            });
        }
    }), s.extend({
        valHooks: {
            option: {
                get: function(e) {
                    var t = e.attributes.value;
                    return !t || t.specified ? e.value : e.text;
                }
            },
            select: {
                get: function(e) {
                    var t, n, r, i, o = e.selectedIndex, u = [], a = e.options, f = e.type === "select-one";
                    if (o < 0) return null;
                    n = f ? o : 0, r = f ? o + 1 : a.length;
                    for (; n < r; n++) {
                        i = a[n];
                        if (i.selected && (s.support.optDisabled ? !i.disabled : i.getAttribute("disabled") === null) && (!i.parentNode.disabled || !s.nodeName(i.parentNode, "optgroup"))) {
                            t = s(i).val();
                            if (f) return t;
                            u.push(t);
                        }
                    }
                    return f && !u.length && a.length ? s(a[o]).val() : u;
                },
                set: function(e, t) {
                    var n = s.makeArray(t);
                    s(e).find("option").each(function() {
                        this.selected = s.inArray(s(this).val(), n) >= 0;
                    }), n.length || (e.selectedIndex = -1);
                    return n;
                }
            }
        },
        attrFn: {
            val: !0,
            css: !0,
            html: !0,
            text: !0,
            data: !0,
            width: !0,
            height: !0,
            offset: !0
        },
        attr: function(e, n, r, i) {
            var o, u, a, f = e.nodeType;
            if (!e || f === 3 || f === 8 || f === 2) return t;
            if (i && n in s.attrFn) return s(e)[n](r);
            if ("getAttribute" in e) {
                a = f !== 1 || !s.isXMLDoc(e), a && (n = n.toLowerCase(), u = s.attrHooks[n] || (m.test(n) ? b : y));
                if (r !== t) {
                    if (r === null) {
                        s.removeAttr(e, n);
                        return t;
                    }
                    if (u && "set" in u && a && (o = u.set(e, r, n)) !== t) return o;
                    e.setAttribute(n, "" + r);
                    return r;
                }
                if (u && "get" in u && a && (o = u.get(e, n)) !== null) return o;
                o = e.getAttribute(n);
                return o === null ? t : o;
            }
            return s.prop(e, n, r);
        },
        removeAttr: function(e, t) {
            var n, r, i, o, u = 0;
            if (e.nodeType === 1) {
                r = (t || "").split(c), o = r.length;
                for (; u < o; u++) i = r[u].toLowerCase(), n = s.propFix[i] || i, s.attr(e, i, ""), e.removeAttribute(g ? i : n), m.test(i) && n in e && (e[n] = !1);
            }
        },
        attrHooks: {
            type: {
                set: function(e, t) {
                    if (p.test(e.nodeName) && e.parentNode) s.error("type property can't be changed"); else if (!s.support.radioValue && t === "radio" && s.nodeName(e, "input")) {
                        var n = e.value;
                        e.setAttribute("type", t), n && (e.value = n);
                        return t;
                    }
                }
            },
            value: {
                get: function(e, t) {
                    return y && s.nodeName(e, "button") ? y.get(e, t) : t in e ? e.value : null;
                },
                set: function(e, t, n) {
                    if (y && s.nodeName(e, "button")) return y.set(e, t, n);
                    e.value = t;
                }
            }
        },
        propFix: {
            tabindex: "tabIndex",
            readonly: "readOnly",
            "for": "htmlFor",
            "class": "className",
            maxlength: "maxLength",
            cellspacing: "cellSpacing",
            cellpadding: "cellPadding",
            rowspan: "rowSpan",
            colspan: "colSpan",
            usemap: "useMap",
            frameborder: "frameBorder",
            contenteditable: "contentEditable"
        },
        prop: function(e, n, r) {
            var i, o, u, a = e.nodeType;
            if (!e || a === 3 || a === 8 || a === 2) return t;
            u = a !== 1 || !s.isXMLDoc(e), u && (n = s.propFix[n] || n, o = s.propHooks[n]);
            return r !== t ? o && "set" in o && (i = o.set(e, r, n)) !== t ? i : e[n] = r : o && "get" in o && (i = o.get(e, n)) !== null ? i : e[n];
        },
        propHooks: {
            tabIndex: {
                get: function(e) {
                    var n = e.getAttributeNode("tabindex");
                    return n && n.specified ? parseInt(n.value, 10) : d.test(e.nodeName) || v.test(e.nodeName) && e.href ? 0 : t;
                }
            }
        }
    }), s.attrHooks.tabindex = s.propHooks.tabIndex, b = {
        get: function(e, n) {
            var r, i = s.prop(e, n);
            return i === !0 || typeof i != "boolean" && (r = e.getAttributeNode(n)) && r.nodeValue !== !1 ? n.toLowerCase() : t;
        },
        set: function(e, t, n) {
            var r;
            t === !1 ? s.removeAttr(e, n) : (r = s.propFix[n] || n, r in e && (e[r] = !0), e.setAttribute(n, n.toLowerCase()));
            return n;
        }
    }, g || (w = {
        name: !0,
        id: !0
    }, y = s.valHooks.button = {
        get: function(e, n) {
            var r;
            r = e.getAttributeNode(n);
            return r && (w[n] ? r.nodeValue !== "" : r.specified) ? r.nodeValue : t;
        },
        set: function(e, t, r) {
            var i = e.getAttributeNode(r);
            i || (i = n.createAttribute(r), e.setAttributeNode(i));
            return i.nodeValue = t + "";
        }
    }, s.attrHooks.tabindex.set = y.set, s.each([ "width", "height" ], function(e, t) {
        s.attrHooks[t] = s.extend(s.attrHooks[t], {
            set: function(e, n) {
                if (n === "") {
                    e.setAttribute(t, "auto");
                    return n;
                }
            }
        });
    }), s.attrHooks.contenteditable = {
        get: y.get,
        set: function(e, t, n) {
            t === "" && (t = "false"), y.set(e, t, n);
        }
    }), s.support.hrefNormalized || s.each([ "href", "src", "width", "height" ], function(e, n) {
        s.attrHooks[n] = s.extend(s.attrHooks[n], {
            get: function(e) {
                var r = e.getAttribute(n, 2);
                return r === null ? t : r;
            }
        });
    }), s.support.style || (s.attrHooks.style = {
        get: function(e) {
            return e.style.cssText.toLowerCase() || t;
        },
        set: function(e, t) {
            return e.style.cssText = "" + t;
        }
    }), s.support.optSelected || (s.propHooks.selected = s.extend(s.propHooks.selected, {
        get: function(e) {
            var t = e.parentNode;
            t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex);
            return null;
        }
    })), s.support.enctype || (s.propFix.enctype = "encoding"), s.support.checkOn || s.each([ "radio", "checkbox" ], function() {
        s.valHooks[this] = {
            get: function(e) {
                return e.getAttribute("value") === null ? "on" : e.value;
            }
        };
    }), s.each([ "radio", "checkbox" ], function() {
        s.valHooks[this] = s.extend(s.valHooks[this], {
            set: function(e, t) {
                if (s.isArray(t)) return e.checked = s.inArray(s(e).val(), t) >= 0;
            }
        });
    });
    var E = /\.(.*)$/, S = /^(?:textarea|input|select)$/i, x = /\./g, T = / /g, N = /[^\w\s.|`]/g, C = /^([^\.]*)?(?:\.(.+))?$/, k = /\bhover(\.\S+)?/, L = /^key/, A = /^(?:mouse|contextmenu)|click/, O = /^(\w*)(?:#([\w\-]+))?(?:\.([\w\-]+))?$/, M = function(e) {
        var t = O.exec(e);
        t && (t[1] = (t[1] || "").toLowerCase(), t[3] = t[3] && new RegExp("(?:^|\\s)" + t[3] + "(?:\\s|$)"));
        return t;
    }, _ = function(e, t) {
        return (!t[1] || e.nodeName.toLowerCase() === t[1]) && (!t[2] || e.id === t[2]) && (!t[3] || t[3].test(e.className));
    }, D = function(e) {
        return s.event.special.hover ? e : e.replace(k, "mouseenter$1 mouseleave$1");
    };
    s.event = {
        add: function(e, n, r, i, o) {
            var u, a, f, l, c, h, p, d, v, m, g, y;
            if (!(e.nodeType === 3 || e.nodeType === 8 || !n || !r || !(u = s._data(e)))) {
                r.handler && (v = r, r = v.handler), r.guid || (r.guid = s.guid++), f = u.events, f || (u.events = f = {}), a = u.handle, a || (u.handle = a = function(e) {
                    return typeof s == "undefined" || !!e && s.event.triggered === e.type ? t : s.event.dispatch.apply(a.elem, arguments);
                }, a.elem = e), n = D(n).split(" ");
                for (l = 0; l < n.length; l++) {
                    c = C.exec(n[l]) || [], h = c[1], p = (c[2] || "").split(".").sort(), y = s.event.special[h] || {}, h = (o ? y.delegateType : y.bindType) || h, y = s.event.special[h] || {}, d = s.extend({
                        type: h,
                        origType: c[1],
                        data: i,
                        handler: r,
                        guid: r.guid,
                        selector: o,
                        namespace: p.join(".")
                    }, v), o && (d.quick = M(o), !d.quick && s.expr.match.POS.test(o) && (d.isPositional = !0)), g = f[h];
                    if (!g) {
                        g = f[h] = [], g.delegateCount = 0;
                        if (!y.setup || y.setup.call(e, i, p, a) === !1) e.addEventListener ? e.addEventListener(h, a, !1) : e.attachEvent && e.attachEvent("on" + h, a);
                    }
                    y.add && (y.add.call(e, d), d.handler.guid || (d.handler.guid = r.guid)), o ? g.splice(g.delegateCount++, 0, d) : g.push(d), s.event.global[h] = !0;
                }
                e = null;
            }
        },
        global: {},
        remove: function(e, t, n, r) {
            var i = s.hasData(e) && s._data(e), o, u, a, f, l, c, h, p, d, v, m;
            if (!!i && !!(h = i.events)) {
                t = D(t || "").split(" ");
                for (o = 0; o < t.length; o++) {
                    u = C.exec(t[o]) || [], a = u[1], f = u[2];
                    if (!a) {
                        f = f ? "." + f : "";
                        for (c in h) s.event.remove(e, c + f, n, r);
                        return;
                    }
                    p = s.event.special[a] || {}, a = (r ? p.delegateType : p.bindType) || a, v = h[a] || [], l = v.length, f = f ? new RegExp("(^|\\.)" + f.split(".").sort().join("\\.(?:.*\\.)?") + "(\\.|$)") : null;
                    if (n || f || r || p.remove) for (c = 0; c < v.length; c++) {
                        m = v[c];
                        if (!n || n.guid === m.guid) if (!f || f.test(m.namespace)) if (!r || r === m.selector || r === "**" && m.selector) v.splice(c--, 1), m.selector && v.delegateCount--, p.remove && p.remove.call(e, m);
                    } else v.length = 0;
                    v.length === 0 && l !== v.length && ((!p.teardown || p.teardown.call(e, f) === !1) && s.removeEvent(e, a, i.handle), delete h[a]);
                }
                s.isEmptyObject(h) && (d = i.handle, d && (d.elem = null), s.removeData(e, [ "events", "handle" ], !0));
            }
        },
        customEvent: {
            getData: !0,
            setData: !0,
            changeData: !0
        },
        trigger: function(n, r, i, o) {
            if (!i || i.nodeType !== 3 && i.nodeType !== 8) {
                var u = n.type || n, a = [], f, l, c, h, p, d, v, m, g, y;
                u.indexOf("!") >= 0 && (u = u.slice(0, -1), l = !0), u.indexOf(".") >= 0 && (a = u.split("."), u = a.shift(), a.sort());
                if ((!i || s.event.customEvent[u]) && !s.event.global[u]) return;
                n = typeof n == "object" ? n[s.expando] ? n : new s.Event(u, n) : new s.Event(u), n.type = u, n.isTrigger = !0, n.exclusive = l, n.namespace = a.join("."), n.namespace_re = n.namespace ? new RegExp("(^|\\.)" + a.join("\\.(?:.*\\.)?") + "(\\.|$)") : null, d = u.indexOf(":") < 0 ? "on" + u : "", (o || !i) && n.preventDefault();
                if (!i) {
                    f = s.cache;
                    for (c in f) f[c].events && f[c].events[u] && s.event.trigger(n, r, f[c].handle.elem, !0);
                    return;
                }
                n.result = t, n.target || (n.target = i), r = r != null ? s.makeArray(r) : [], r.unshift(n), v = s.event.special[u] || {};
                if (v.trigger && v.trigger.apply(i, r) === !1) return;
                g = [ [ i, v.bindType || u ] ];
                if (!o && !v.noBubble && !s.isWindow(i)) {
                    y = v.delegateType || u, p = null;
                    for (h = i.parentNode; h; h = h.parentNode) g.push([ h, y ]), p = h;
                    p && p === i.ownerDocument && g.push([ p.defaultView || p.parentWindow || e, y ]);
                }
                for (c = 0; c < g.length; c++) {
                    h = g[c][0], n.type = g[c][1], m = (s._data(h, "events") || {})[n.type] && s._data(h, "handle"), m && m.apply(h, r), m = d && h[d], m && s.acceptData(h) && m.apply(h, r);
                    if (n.isPropagationStopped()) break;
                }
                n.type = u, n.isDefaultPrevented() || (!v._default || v._default.apply(i.ownerDocument, r) === !1) && (u !== "click" || !s.nodeName(i, "a")) && s.acceptData(i) && d && i[u] && (u !== "focus" && u !== "blur" || n.target.offsetWidth !== 0) && !s.isWindow(i) && (p = i[d], p && (i[d] = null), s.event.triggered = u, i[u](), s.event.triggered = t, p && (i[d] = p));
                return n.result;
            }
        },
        dispatch: function(n) {
            n = s.event.fix(n || e.event);
            var r = (s._data(this, "events") || {})[n.type] || [], i = r.delegateCount, o = [].slice.call(arguments, 0), u = !n.exclusive && !n.namespace, a = (s.event.special[n.type] || {}).handle, f = [], l, c, h, p, d, v, m, g, y, b, w;
            o[0] = n, n.delegateTarget = this;
            if (i && !n.target.disabled && (!n.button || n.type !== "click")) for (h = n.target; h != this; h = h.parentNode || this) {
                d = {}, m = [];
                for (l = 0; l < i; l++) g = r[l], y = g.selector, b = d[y], g.isPositional ? b = (b || (d[y] = s(y))).index(h) >= 0 : b === t && (b = d[y] = g.quick ? _(h, g.quick) : s(h).is(y)), b && m.push(g);
                m.length && f.push({
                    elem: h,
                    matches: m
                });
            }
            r.length > i && f.push({
                elem: this,
                matches: r.slice(i)
            });
            for (l = 0; l < f.length && !n.isPropagationStopped(); l++) {
                v = f[l], n.currentTarget = v.elem;
                for (c = 0; c < v.matches.length && !n.isImmediatePropagationStopped(); c++) {
                    g = v.matches[c];
                    if (u || !n.namespace && !g.namespace || n.namespace_re && n.namespace_re.test(g.namespace)) n.data = g.data, n.handleObj = g, p = (a || g.handler).apply(v.elem, o), p !== t && (n.result = p, p === !1 && (n.preventDefault(), n.stopPropagation()));
                }
            }
            return n.result;
        },
        props: "attrChange attrName relatedNode srcElement altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),
        fixHooks: {},
        keyHooks: {
            props: "char charCode key keyCode".split(" "),
            filter: function(e, t) {
                e.which == null && (e.which = t.charCode != null ? t.charCode : t.keyCode);
                return e;
            }
        },
        mouseHooks: {
            props: "button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement wheelDelta".split(" "),
            filter: function(e, r) {
                var i, s, o, u = r.button, a = r.fromElement;
                e.pageX == null && r.clientX != null && (i = e.target.ownerDocument || n, s = i.documentElement, o = i.body, e.pageX = r.clientX + (s && s.scrollLeft || o && o.scrollLeft || 0) - (s && s.clientLeft || o && o.clientLeft || 0), e.pageY = r.clientY + (s && s.scrollTop || o && o.scrollTop || 0) - (s && s.clientTop || o && o.clientTop || 0)), !e.relatedTarget && a && (e.relatedTarget = a === e.target ? r.toElement : a), !e.which && u !== t && (e.which = u & 1 ? 1 : u & 2 ? 3 : u & 4 ? 2 : 0);
                return e;
            }
        },
        fix: function(e) {
            if (e[s.expando]) return e;
            var r, i, o = e, u = s.event.fixHooks[e.type] || {}, a = u.props ? this.props.concat(u.props) : this.props;
            e = s.Event(o);
            for (r = a.length; r; ) i = a[--r], e[i] = o[i];
            e.target || (e.target = o.srcElement || n), e.target.nodeType === 3 && (e.target = e.target.parentNode), e.metaKey === t && (e.metaKey = e.ctrlKey);
            return u.filter ? u.filter(e, o) : e;
        },
        special: {
            ready: {
                setup: s.bindReady
            },
            focus: {
                delegateType: "focusin",
                noBubble: !0
            },
            blur: {
                delegateType: "focusout",
                noBubble: !0
            },
            beforeunload: {
                setup: function(e, t, n) {
                    s.isWindow(this) && (this.onbeforeunload = n);
                },
                teardown: function(e, t) {
                    this.onbeforeunload === t && (this.onbeforeunload = null);
                }
            }
        },
        simulate: function(e, t, n, r) {
            var i = s.extend(new s.Event, n, {
                type: e,
                isSimulated: !0,
                originalEvent: {}
            });
            r ? s.event.trigger(i, null, t) : s.event.dispatch.call(t, i), i.isDefaultPrevented() && n.preventDefault();
        }
    }, s.event.handle = s.event.dispatch, s.removeEvent = n.removeEventListener ? function(e, t, n) {
        e.removeEventListener && e.removeEventListener(t, n, !1);
    } : function(e, t, n) {
        e.detachEvent && e.detachEvent("on" + t, n);
    }, s.Event = function(e, t) {
        if (!(this instanceof s.Event)) return new s.Event(e, t);
        e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || e.returnValue === !1 || e.getPreventDefault && e.getPreventDefault() ? N : M) : this.type = e, t && s.extend(this, t), this.timeStamp = e && e.timeStamp || s.now(), this[s.expando] = !0;
    }, s.Event.prototype = {
        preventDefault: function() {
            this.isDefaultPrevented = N;
            var e = this.originalEvent;
            !e || (e.preventDefault ? e.preventDefault() : e.returnValue = !1);
        },
        stopPropagation: function() {
            this.isPropagationStopped = N;
            var e = this.originalEvent;
            !e || (e.stopPropagation && e.stopPropagation(), e.cancelBubble = !0);
        },
        stopImmediatePropagation: function() {
            this.isImmediatePropagationStopped = N, this.stopPropagation();
        },
        isDefaultPrevented: M,
        isPropagationStopped: M,
        isImmediatePropagationStopped: M
    }, s.each({
        mouseenter: "mouseover",
        mouseleave: "mouseout"
    }, function(e, t) {
        s.event.special[e] = s.event.special[t] = {
            delegateType: t,
            bindType: t,
            handle: function(e) {
                var t = this, n = e.relatedTarget, r = e.handleObj, i = r.selector, o, u;
                if (!n || r.origType === e.type || n !== t && !s.contains(t, n)) o = e.type, e.type = r.origType, u = r.handler.apply(this, arguments), e.type = o;
                return u;
            }
        };
    }), s.support.submitBubbles || (s.event.special.submit = {
        setup: function() {
            if (s.nodeName(this, "form")) return !1;
            s.event.add(this, "click._submit keypress._submit", function(e) {
                var n = e.target, r = s.nodeName(n, "input") || s.nodeName(n, "button") ? n.form : t;
                r && !r._submit_attached && (s.event.add(r, "submit._submit", function(e) {
                    this.parentNode && s.event.simulate("submit", this.parentNode, e, !0);
                }), r._submit_attached = !0);
            });
        },
        teardown: function() {
            if (s.nodeName(this, "form")) return !1;
            s.event.remove(this, "._submit");
        }
    }), s.support.changeBubbles || (s.event.special.change = {
        setup: function() {
            if (S.test(this.nodeName)) {
                if (this.type === "checkbox" || this.type === "radio") s.event.add(this, "propertychange._change", function(e) {
                    e.originalEvent.propertyName === "checked" && (this._just_changed = !0);
                }), s.event.add(this, "click._change", function(e) {
                    this._just_changed && (this._just_changed = !1, s.event.simulate("change", this, e, !0));
                });
                return !1;
            }
            s.event.add(this, "beforeactivate._change", function(e) {
                var t = e.target;
                S.test(t.nodeName) && !t._change_attached && (s.event.add(t, "change._change", function(e) {
                    this.parentNode && !e.isSimulated && s.event.simulate("change", this.parentNode, e, !0);
                }), t._change_attached = !0);
            });
        },
        handle: function(e) {
            var t = e.target;
            if (this !== t || e.isSimulated || e.isTrigger || t.type !== "radio" && t.type !== "checkbox") return e.handleObj.handler.apply(this, arguments);
        },
        teardown: function() {
            s.event.remove(this, "._change");
            return S.test(this.nodeName);
        }
    }), s.support.focusinBubbles || s.each({
        focus: "focusin",
        blur: "focusout"
    }, function(e, t) {
        var r = 0, i = function(e) {
            s.event.simulate(t, e.target, s.event.fix(e), !0);
        };
        s.event.special[t] = {
            setup: function() {
                r++ === 0 && n.addEventListener(e, i, !0);
            },
            teardown: function() {
                --r === 0 && n.removeEventListener(e, i, !0);
            }
        };
    }), s.fn.extend({
        on: function(e, n, r, i, o) {
            var u, a;
            if (typeof e == "object") {
                typeof n != "string" && (r = n, n = t);
                for (a in e) this.on(a, n, r, e[a], o);
                return this;
            }
            r == null && i == null ? (i = n, r = n = t) : i == null && (typeof n == "string" ? (i = r, r = t) : (i = r, r = n, n = t));
            if (i === !1) i = M; else if (!i) return this;
            o === 1 && (u = i, i = function(e) {
                s().off(e);
                return u.apply(this, arguments);
            }, i.guid = u.guid || (u.guid = s.guid++));
            return this.each(function() {
                s.event.add(this, e, i, r, n);
            });
        },
        one: function(e, t, n, r) {
            return this.on.call(this, e, t, n, r, 1);
        },
        off: function(e, n, r) {
            if (e && e.preventDefault && e.handleObj) {
                var i = e.handleObj;
                s(e.delegateTarget).off(i.namespace ? i.type + "." + i.namespace : i.type, i.selector, i.handler);
                return this;
            }
            if (typeof e == "object") {
                for (var o in e) this.off(o, n, e[o]);
                return this;
            }
            if (n === !1 || typeof n == "function") r = n, n = t;
            r === !1 && (r = M);
            return this.each(function() {
                s.event.remove(this, e, r, n);
            });
        },
        bind: function(e, t, n) {
            return this.on(e, null, t, n);
        },
        unbind: function(e, t) {
            return this.off(e, null, t);
        },
        live: function(e, t, n) {
            s(this.context).on(e, this.selector, t, n);
            return this;
        },
        die: function(e, t) {
            s(this.context).off(e, this.selector || "**", t);
            return this;
        },
        delegate: function(e, t, n, r) {
            return this.on(t, e, n, r);
        },
        undelegate: function(e, t, n) {
            return arguments.length == 1 ? this.off(e, "**") : this.off(t, e, n);
        },
        trigger: function(e, t) {
            return this.each(function() {
                s.event.trigger(e, t, this);
            });
        },
        triggerHandler: function(e, t) {
            if (this[0]) return s.event.trigger(e, t, this[0], !0);
        },
        toggle: function(e) {
            var t = arguments, n = e.guid || s.guid++, r = 0, i = function(n) {
                var i = (s._data(this, "lastToggle" + e.guid) || 0) % r;
                s._data(this, "lastToggle" + e.guid, i + 1), n.preventDefault();
                return t[i].apply(this, arguments) || !1;
            };
            i.guid = n;
            while (r < t.length) t[r++].guid = n;
            return this.click(i);
        },
        hover: function(e, t) {
            return this.mouseenter(e).mouseleave(t || e);
        }
    }), s.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "), function(e, t) {
        s.fn[t] = function(e, n) {
            n == null && (n = e, e = null);
            return arguments.length > 0 ? this.bind(t, e, n) : this.trigger(t);
        }, s.attrFn && (s.attrFn[t] = !0), L.test(t) && (s.event.fixHooks[t] = s.event.keyHooks), A.test(t) && (s.event.fixHooks[t] = s.event.mouseHooks);
    }), function() {
        function x(e, t, n, i, s, o) {
            for (var u = 0, a = i.length; u < a; u++) {
                var f = i[u];
                if (f) {
                    var l = !1;
                    f = f[e];
                    while (f) {
                        if (f[r] === n) {
                            l = i[f.sizset];
                            break;
                        }
                        if (f.nodeType === 1) {
                            o || (f[r] = n, f.sizset = u);
                            if (typeof t != "string") {
                                if (f === t) {
                                    l = !0;
                                    break;
                                }
                            } else if (h.filter(t, [ f ]).length > 0) {
                                l = f;
                                break;
                            }
                        }
                        f = f[e];
                    }
                    i[u] = l;
                }
            }
        }
        function w(e, t, n, i, s, o) {
            for (var u = 0, a = i.length; u < a; u++) {
                var f = i[u];
                if (f) {
                    var l = !1;
                    f = f[e];
                    while (f) {
                        if (f[r] === n) {
                            l = i[f.sizset];
                            break;
                        }
                        f.nodeType === 1 && !o && (f[r] = n, f.sizset = u);
                        if (f.nodeName.toLowerCase() === t) {
                            l = f;
                            break;
                        }
                        f = f[e];
                    }
                    i[u] = l;
                }
            }
        }
        var e = /((?:\((?:\([^()]+\)|[^()]+)+\)|\[(?:\[[^\[\]]*\]|['"][^'"]*['"]|[^\[\]'"]+)+\]|\\.|[^ >+~,(\[\\]+)+|[>+~])(\s*,\s*)?((?:.|\r|\n)*)/g, r = "sizcache" + (Math.random() + "").replace(".", ""), i = 0, o = Object.prototype.toString, u = !1, a = !0, f = /\\/g, l = /\r\n/g, c = /\W/;
        [ 0, 0 ].sort(function() {
            a = !1;
            return 0;
        });
        var h = function(t, r, i, s) {
            i = i || [], r = r || n;
            var u = r;
            if (r.nodeType !== 1 && r.nodeType !== 9) return [];
            if (!t || typeof t != "string") return i;
            var a, f, l, c, p, m, g, b, w = !0, E = h.isXML(r), x = [], T = t;
            do {
                e.exec(""), a = e.exec(T);
                if (a) {
                    T = a[3], x.push(a[1]);
                    if (a[2]) {
                        c = a[3];
                        break;
                    }
                }
            } while (a);
            if (x.length > 1 && v.exec(t)) if (x.length === 2 && d.relative[x[0]]) f = S(x[0] + x[1], r, s); else {
                f = d.relative[x[0]] ? [ r ] : h(x.shift(), r);
                while (x.length) t = x.shift(), d.relative[t] && (t += x.shift()), f = S(t, f, s);
            } else {
                !s && x.length > 1 && r.nodeType === 9 && !E && d.match.ID.test(x[0]) && !d.match.ID.test(x[x.length - 1]) && (p = h.find(x.shift(), r, E), r = p.expr ? h.filter(p.expr, p.set)[0] : p.set[0]);
                if (r) {
                    p = s ? {
                        expr: x.pop(),
                        set: y(s)
                    } : h.find(x.pop(), x.length !== 1 || x[0] !== "~" && x[0] !== "+" || !r.parentNode ? r : r.parentNode, E), f = p.expr ? h.filter(p.expr, p.set) : p.set, x.length > 0 ? l = y(f) : w = !1;
                    while (x.length) m = x.pop(), g = m, d.relative[m] ? g = x.pop() : m = "", g == null && (g = r), d.relative[m](l, g, E);
                } else l = x = [];
            }
            l || (l = f), l || h.error(m || t);
            if (o.call(l) === "[object Array]") if (!w) i.push.apply(i, l); else if (r && r.nodeType === 1) for (b = 0; l[b] != null; b++) l[b] && (l[b] === !0 || l[b].nodeType === 1 && h.contains(r, l[b])) && i.push(f[b]); else for (b = 0; l[b] != null; b++) l[b] && l[b].nodeType === 1 && i.push(f[b]); else y(l, i);
            c && (h(c, u, i, s), h.uniqueSort(i));
            return i;
        };
        h.uniqueSort = function(e) {
            if (w) {
                u = a, e.sort(w);
                if (u) for (var t = 1; t < e.length; t++) e[t] === e[t - 1] && e.splice(t--, 1);
            }
            return e;
        }, h.matches = function(e, t) {
            return h(e, null, null, t);
        }, h.matchesSelector = function(e, t) {
            return h(t, null, null, [ e ]).length > 0;
        }, h.find = function(e, t, n) {
            var r, i, s, o, u, a;
            if (!e) return [];
            for (i = 0, s = d.order.length; i < s; i++) {
                u = d.order[i];
                if (o = d.leftMatch[u].exec(e)) {
                    a = o[1], o.splice(1, 1);
                    if (a.substr(a.length - 1) !== "\\") {
                        o[1] = (o[1] || "").replace(f, ""), r = d.find[u](o, t, n);
                        if (r != null) {
                            e = e.replace(d.match[u], "");
                            break;
                        }
                    }
                }
            }
            r || (r = typeof t.getElementsByTagName != "undefined" ? t.getElementsByTagName("*") : []);
            return {
                set: r,
                expr: e
            };
        }, h.filter = function(e, n, r, i) {
            var s, o, u, a, f, l, c, p, v, m = e, g = [], y = n, b = n && n[0] && h.isXML(n[0]);
            while (e && n.length) {
                for (u in d.filter) if ((s = d.leftMatch[u].exec(e)) != null && s[2]) {
                    l = d.filter[u], c = s[1], o = !1, s.splice(1, 1);
                    if (c.substr(c.length - 1) === "\\") continue;
                    y === g && (g = []);
                    if (d.preFilter[u]) {
                        s = d.preFilter[u](s, y, r, g, i, b);
                        if (!s) o = a = !0; else if (s === !0) continue;
                    }
                    if (s) for (p = 0; (f = y[p]) != null; p++) f && (a = l(f, s, p, y), v = i ^ a, r && a != null ? v ? o = !0 : y[p] = !1 : v && (g.push(f), o = !0));
                    if (a !== t) {
                        r || (y = g), e = e.replace(d.match[u], "");
                        if (!o) return [];
                        break;
                    }
                }
                if (e === m) {
                    if (o != null) break;
                    h.error(e);
                }
                m = e;
            }
            return y;
        }, h.error = function(e) {
            throw "Syntax error, unrecognized expression: " + e;
        };
        var p = h.getText = function(e) {
            var t, n, r = e.nodeType, i = "";
            if (r) {
                if (r === 1) {
                    if (typeof e.textContent == "string") return e.textContent;
                    if (typeof e.innerText == "string") return e.innerText.replace(l, "");
                    for (e = e.firstChild; e; e = e.nextSibling) i += p(e);
                } else if (r === 3 || r === 4) return e.nodeValue;
            } else for (t = 0; n = e[t]; t++) n.nodeType !== 8 && (i += p(n));
            return i;
        }, d = h.selectors = {
            order: [ "ID", "NAME", "TAG" ],
            match: {
                ID: /#((?:[\w\u00c0-\uFFFF\-]|\\.)+)/,
                CLASS: /\.((?:[\w\u00c0-\uFFFF\-]|\\.)+)/,
                NAME: /\[name=['"]*((?:[\w\u00c0-\uFFFF\-]|\\.)+)['"]*\]/,
                ATTR: /\[\s*((?:[\w\u00c0-\uFFFF\-]|\\.)+)\s*(?:(\S?=)\s*(?:(['"])(.*?)\3|(#?(?:[\w\u00c0-\uFFFF\-]|\\.)*)|)|)\s*\]/,
                TAG: /^((?:[\w\u00c0-\uFFFF\*\-]|\\.)+)/,
                CHILD: /:(only|nth|last|first)-child(?:\(\s*(even|odd|(?:[+\-]?\d+|(?:[+\-]?\d*)?n\s*(?:[+\-]\s*\d+)?))\s*\))?/,
                POS: /:(nth|eq|gt|lt|first|last|even|odd)(?:\((\d*)\))?(?=[^\-]|$)/,
                PSEUDO: /:((?:[\w\u00c0-\uFFFF\-]|\\.)+)(?:\((['"]?)((?:\([^\)]+\)|[^\(\)]*)+)\2\))?/
            },
            leftMatch: {},
            attrMap: {
                "class": "className",
                "for": "htmlFor"
            },
            attrHandle: {
                href: function(e) {
                    return e.getAttribute("href");
                },
                type: function(e) {
                    return e.getAttribute("type");
                }
            },
            relative: {
                "+": function(e, t) {
                    var n = typeof t == "string", r = n && !c.test(t), i = n && !r;
                    r && (t = t.toLowerCase());
                    for (var s = 0, o = e.length, u; s < o; s++) if (u = e[s]) {
                        while ((u = u.previousSibling) && u.nodeType !== 1) ;
                        e[s] = i || u && u.nodeName.toLowerCase() === t ? u || !1 : u === t;
                    }
                    i && h.filter(t, e, !0);
                },
                ">": function(e, t) {
                    var n, r = typeof t == "string", i = 0, s = e.length;
                    if (r && !c.test(t)) {
                        t = t.toLowerCase();
                        for (; i < s; i++) {
                            n = e[i];
                            if (n) {
                                var o = n.parentNode;
                                e[i] = o.nodeName.toLowerCase() === t ? o : !1;
                            }
                        }
                    } else {
                        for (; i < s; i++) n = e[i], n && (e[i] = r ? n.parentNode : n.parentNode === t);
                        r && h.filter(t, e, !0);
                    }
                },
                "": function(e, t, n) {
                    var r, s = i++, o = x;
                    typeof t == "string" && !c.test(t) && (t = t.toLowerCase(), r = t, o = w), o("parentNode", t, s, e, r, n);
                },
                "~": function(e, t, n) {
                    var r, s = i++, o = x;
                    typeof t == "string" && !c.test(t) && (t = t.toLowerCase(), r = t, o = w), o("previousSibling", t, s, e, r, n);
                }
            },
            find: {
                ID: function(e, t, n) {
                    if (typeof t.getElementById != "undefined" && !n) {
                        var r = t.getElementById(e[1]);
                        return r && r.parentNode ? [ r ] : [];
                    }
                },
                NAME: function(e, t) {
                    if (typeof t.getElementsByName != "undefined") {
                        var n = [], r = t.getElementsByName(e[1]);
                        for (var i = 0, s = r.length; i < s; i++) r[i].getAttribute("name") === e[1] && n.push(r[i]);
                        return n.length === 0 ? null : n;
                    }
                },
                TAG: function(e, t) {
                    if (typeof t.getElementsByTagName != "undefined") return t.getElementsByTagName(e[1]);
                }
            },
            preFilter: {
                CLASS: function(e, t, n, r, i, s) {
                    e = " " + e[1].replace(f, "") + " ";
                    if (s) return e;
                    for (var o = 0, u; (u = t[o]) != null; o++) u && (i ^ (u.className && (" " + u.className + " ").replace(/[\t\n\r]/g, " ").indexOf(e) >= 0) ? n || r.push(u) : n && (t[o] = !1));
                    return !1;
                },
                ID: function(e) {
                    return e[1].replace(f, "");
                },
                TAG: function(e, t) {
                    return e[1].replace(f, "").toLowerCase();
                },
                CHILD: function(e) {
                    if (e[1] === "nth") {
                        e[2] || h.error(e[0]), e[2] = e[2].replace(/^\+|\s*/g, "");
                        var t = /(-?)(\d*)(?:n([+\-]?\d*))?/.exec(e[2] === "even" && "2n" || e[2] === "odd" && "2n+1" || !/\D/.test(e[2]) && "0n+" + e[2] || e[2]);
                        e[2] = t[1] + (t[2] || 1) - 0, e[3] = t[3] - 0;
                    } else e[2] && h.error(e[0]);
                    e[0] = i++;
                    return e;
                },
                ATTR: function(e, t, n, r, i, s) {
                    var o = e[1] = e[1].replace(f, "");
                    !s && d.attrMap[o] && (e[1] = d.attrMap[o]), e[4] = (e[4] || e[5] || "").replace(f, ""), e[2] === "~=" && (e[4] = " " + e[4] + " ");
                    return e;
                },
                PSEUDO: function(t, n, r, i, s) {
                    if (t[1] === "not") {
                        if (!((e.exec(t[3]) || "").length > 1 || /^\w/.test(t[3]))) {
                            var o = h.filter(t[3], n, r, !0 ^ s);
                            r || i.push.apply(i, o);
                            return !1;
                        }
                        t[3] = h(t[3], null, null, n);
                    } else if (d.match.POS.test(t[0]) || d.match.CHILD.test(t[0])) return !0;
                    return t;
                },
                POS: function(e) {
                    e.unshift(!0);
                    return e;
                }
            },
            filters: {
                enabled: function(e) {
                    return e.disabled === !1 && e.type !== "hidden";
                },
                disabled: function(e) {
                    return e.disabled === !0;
                },
                checked: function(e) {
                    return e.checked === !0;
                },
                selected: function(e) {
                    e.parentNode && e.parentNode.selectedIndex;
                    return e.selected === !0;
                },
                parent: function(e) {
                    return !!e.firstChild;
                },
                empty: function(e) {
                    return !e.firstChild;
                },
                has: function(e, t, n) {
                    return !!h(n[3], e).length;
                },
                header: function(e) {
                    return /h\d/i.test(e.nodeName);
                },
                text: function(e) {
                    var t = e.getAttribute("type"), n = e.type;
                    return e.nodeName.toLowerCase() === "input" && "text" === n && (t === n || t === null);
                },
                radio: function(e) {
                    return e.nodeName.toLowerCase() === "input" && "radio" === e.type;
                },
                checkbox: function(e) {
                    return e.nodeName.toLowerCase() === "input" && "checkbox" === e.type;
                },
                file: function(e) {
                    return e.nodeName.toLowerCase() === "input" && "file" === e.type;
                },
                password: function(e) {
                    return e.nodeName.toLowerCase() === "input" && "password" === e.type;
                },
                submit: function(e) {
                    var t = e.nodeName.toLowerCase();
                    return (t === "input" || t === "button") && "submit" === e.type;
                },
                image: function(e) {
                    return e.nodeName.toLowerCase() === "input" && "image" === e.type;
                },
                reset: function(e) {
                    var t = e.nodeName.toLowerCase();
                    return (t === "input" || t === "button") && "reset" === e.type;
                },
                button: function(e) {
                    var t = e.nodeName.toLowerCase();
                    return t === "input" && "button" === e.type || t === "button";
                },
                input: function(e) {
                    return /input|select|textarea|button/i.test(e.nodeName);
                },
                focus: function(e) {
                    return e === e.ownerDocument.activeElement;
                }
            },
            setFilters: {
                first: function(e, t) {
                    return t === 0;
                },
                last: function(e, t, n, r) {
                    return t === r.length - 1;
                },
                even: function(e, t) {
                    return t % 2 === 0;
                },
                odd: function(e, t) {
                    return t % 2 === 1;
                },
                lt: function(e, t, n) {
                    return t < n[3] - 0;
                },
                gt: function(e, t, n) {
                    return t > n[3] - 0;
                },
                nth: function(e, t, n) {
                    return n[3] - 0 === t;
                },
                eq: function(e, t, n) {
                    return n[3] - 0 === t;
                }
            },
            filter: {
                PSEUDO: function(e, t, n, r) {
                    var i = t[1], s = d.filters[i];
                    if (s) return s(e, n, t, r);
                    if (i === "contains") return (e.textContent || e.innerText || p([ e ]) || "").indexOf(t[3]) >= 0;
                    if (i === "not") {
                        var o = t[3];
                        for (var u = 0, a = o.length; u < a; u++) if (o[u] === e) return !1;
                        return !0;
                    }
                    h.error(i);
                },
                CHILD: function(e, t) {
                    var n, i, s, o, u, a, f, l = t[1], c = e;
                    switch (l) {
                      case "only":
                      case "first":
                        while (c = c.previousSibling) if (c.nodeType === 1) return !1;
                        if (l === "first") return !0;
                        c = e;
                      case "last":
                        while (c = c.nextSibling) if (c.nodeType === 1) return !1;
                        return !0;
                      case "nth":
                        n = t[2], i = t[3];
                        if (n === 1 && i === 0) return !0;
                        s = t[0], o = e.parentNode;
                        if (o && (o[r] !== s || !e.nodeIndex)) {
                            a = 0;
                            for (c = o.firstChild; c; c = c.nextSibling) c.nodeType === 1 && (c.nodeIndex = ++a);
                            o[r] = s;
                        }
                        f = e.nodeIndex - i;
                        return n === 0 ? f === 0 : f % n === 0 && f / n >= 0;
                    }
                },
                ID: function(e, t) {
                    return e.nodeType === 1 && e.getAttribute("id") === t;
                },
                TAG: function(e, t) {
                    return t === "*" && e.nodeType === 1 || !!e.nodeName && e.nodeName.toLowerCase() === t;
                },
                CLASS: function(e, t) {
                    return (" " + (e.className || e.getAttribute("class")) + " ").indexOf(t) > -1;
                },
                ATTR: function(e, t) {
                    var n = t[1], r = h.attr ? h.attr(e, n) : d.attrHandle[n] ? d.attrHandle[n](e) : e[n] != null ? e[n] : e.getAttribute(n), i = r + "", s = t[2], o = t[4];
                    return r == null ? s === "!=" : !s && h.attr ? r != null : s === "=" ? i === o : s === "*=" ? i.indexOf(o) >= 0 : s === "~=" ? (" " + i + " ").indexOf(o) >= 0 : o ? s === "!=" ? i !== o : s === "^=" ? i.indexOf(o) === 0 : s === "$=" ? i.substr(i.length - o.length) === o : s === "|=" ? i === o || i.substr(0, o.length + 1) === o + "-" : !1 : i && r !== !1;
                },
                POS: function(e, t, n, r) {
                    var i = t[2], s = d.setFilters[i];
                    if (s) return s(e, n, t, r);
                }
            }
        }, v = d.match.POS, m = function(e, t) {
            return "\\" + (t - 0 + 1);
        };
        for (var g in d.match) d.match[g] = new RegExp(d.match[g].source + /(?![^\[]*\])(?![^\(]*\))/.source), d.leftMatch[g] = new RegExp(/(^(?:.|\r|\n)*?)/.source + d.match[g].source.replace(/\\(\d+)/g, m));
        var y = function(e, t) {
            e = Array.prototype.slice.call(e, 0);
            if (t) {
                t.push.apply(t, e);
                return t;
            }
            return e;
        };
        try {
            Array.prototype.slice.call(n.documentElement.childNodes, 0)[0].nodeType;
        } catch (b) {
            y = function(e, t) {
                var n = 0, r = t || [];
                if (o.call(e) === "[object Array]") Array.prototype.push.apply(r, e); else if (typeof e.length == "number") for (var i = e.length; n < i; n++) r.push(e[n]); else for (; e[n]; n++) r.push(e[n]);
                return r;
            };
        }
        var w, E;
        n.documentElement.compareDocumentPosition ? w = function(e, t) {
            if (e === t) {
                u = !0;
                return 0;
            }
            return !e.compareDocumentPosition || !t.compareDocumentPosition ? e.compareDocumentPosition ? -1 : 1 : e.compareDocumentPosition(t) & 4 ? -1 : 1;
        } : (w = function(e, t) {
            if (e === t) {
                u = !0;
                return 0;
            }
            if (e.sourceIndex && t.sourceIndex) return e.sourceIndex - t.sourceIndex;
            var n, r, i = [], s = [], o = e.parentNode, a = t.parentNode, f = o;
            if (o === a) return E(e, t);
            if (!o) return -1;
            if (!a) return 1;
            while (f) i.unshift(f), f = f.parentNode;
            f = a;
            while (f) s.unshift(f), f = f.parentNode;
            n = i.length, r = s.length;
            for (var l = 0; l < n && l < r; l++) if (i[l] !== s[l]) return E(i[l], s[l]);
            return l === n ? E(e, s[l], -1) : E(i[l], t, 1);
        }, E = function(e, t, n) {
            if (e === t) return n;
            var r = e.nextSibling;
            while (r) {
                if (r === t) return -1;
                r = r.nextSibling;
            }
            return 1;
        }), function() {
            var e = n.createElement("div"), r = "script" + (new Date).getTime(), i = n.documentElement;
            e.innerHTML = "<a name='" + r + "'/>", i.insertBefore(e, i.firstChild), n.getElementById(r) && (d.find.ID = function(e, n, r) {
                if (typeof n.getElementById != "undefined" && !r) {
                    var i = n.getElementById(e[1]);
                    return i ? i.id === e[1] || typeof i.getAttributeNode != "undefined" && i.getAttributeNode("id").nodeValue === e[1] ? [ i ] : t : [];
                }
            }, d.filter.ID = function(e, t) {
                var n = typeof e.getAttributeNode != "undefined" && e.getAttributeNode("id");
                return e.nodeType === 1 && n && n.nodeValue === t;
            }), i.removeChild(e), i = e = null;
        }(), function() {
            var e = n.createElement("div");
            e.appendChild(n.createComment("")), e.getElementsByTagName("*").length > 0 && (d.find.TAG = function(e, t) {
                var n = t.getElementsByTagName(e[1]);
                if (e[1] === "*") {
                    var r = [];
                    for (var i = 0; n[i]; i++) n[i].nodeType === 1 && r.push(n[i]);
                    n = r;
                }
                return n;
            }), e.innerHTML = "<a href='#'></a>", e.firstChild && typeof e.firstChild.getAttribute != "undefined" && e.firstChild.getAttribute("href") !== "#" && (d.attrHandle.href = function(e) {
                return e.getAttribute("href", 2);
            }), e = null;
        }(), n.querySelectorAll && function() {
            var e = h, t = n.createElement("div"), r = "__sizzle__";
            t.innerHTML = "<p class='TEST'></p>";
            if (!t.querySelectorAll || t.querySelectorAll(".TEST").length !== 0) {
                h = function(t, i, s, o) {
                    i = i || n;
                    if (!o && !h.isXML(i)) {
                        var u = /^(\w+$)|^\.([\w\-]+$)|^#([\w\-]+$)/.exec(t);
                        if (u && (i.nodeType === 1 || i.nodeType === 9)) {
                            if (u[1]) return y(i.getElementsByTagName(t), s);
                            if (u[2] && d.find.CLASS && i.getElementsByClassName) return y(i.getElementsByClassName(u[2]), s);
                        }
                        if (i.nodeType === 9) {
                            if (t === "body" && i.body) return y([ i.body ], s);
                            if (u && u[3]) {
                                var a = i.getElementById(u[3]);
                                if (!a || !a.parentNode) return y([], s);
                                if (a.id === u[3]) return y([ a ], s);
                            }
                            try {
                                return y(i.querySelectorAll(t), s);
                            } catch (f) {}
                        } else if (i.nodeType === 1 && i.nodeName.toLowerCase() !== "object") {
                            var l = i, c = i.getAttribute("id"), p = c || r, v = i.parentNode, m = /^\s*[+~]/.test(t);
                            c ? p = p.replace(/'/g, "\\$&") : i.setAttribute("id", p), m && v && (i = i.parentNode);
                            try {
                                if (!m || v) return y(i.querySelectorAll("[id='" + p + "'] " + t), s);
                            } catch (g) {} finally {
                                c || l.removeAttribute("id");
                            }
                        }
                    }
                    return e(t, i, s, o);
                };
                for (var i in e) h[i] = e[i];
                t = null;
            }
        }(), function() {
            var e = n.documentElement, t = e.matchesSelector || e.mozMatchesSelector || e.webkitMatchesSelector || e.msMatchesSelector;
            if (t) {
                var r = !t.call(n.createElement("div"), "div"), i = !1;
                try {
                    t.call(n.documentElement, "[test!='']:sizzle");
                } catch (s) {
                    i = !0;
                }
                h.matchesSelector = function(e, n) {
                    n = n.replace(/\=\s*([^'"\]]*)\s*\]/g, "='$1']");
                    if (!h.isXML(e)) try {
                        if (i || !d.match.PSEUDO.test(n) && !/!=/.test(n)) {
                            var s = t.call(e, n);
                            if (s || !r || e.document && e.document.nodeType !== 11) return s;
                        }
                    } catch (o) {}
                    return h(n, null, null, [ e ]).length > 0;
                };
            }
        }(), function() {
            var e = n.createElement("div");
            e.innerHTML = "<div class='test e'></div><div class='test'></div>";
            if (!!e.getElementsByClassName && e.getElementsByClassName("e").length !== 0) {
                e.lastChild.className = "e";
                if (e.getElementsByClassName("e").length === 1) return;
                d.order.splice(1, 0, "CLASS"), d.find.CLASS = function(e, t, n) {
                    if (typeof t.getElementsByClassName != "undefined" && !n) return t.getElementsByClassName(e[1]);
                }, e = null;
            }
        }(), n.documentElement.contains ? h.contains = function(e, t) {
            return e !== t && (e.contains ? e.contains(t) : !0);
        } : n.documentElement.compareDocumentPosition ? h.contains = function(e, t) {
            return !!(e.compareDocumentPosition(t) & 16);
        } : h.contains = function() {
            return !1;
        }, h.isXML = function(e) {
            var t = (e ? e.ownerDocument || e : 0).documentElement;
            return t ? t.nodeName !== "HTML" : !1;
        };
        var S = function(e, t, n) {
            var r, i = [], s = "", o = t.nodeType ? [ t ] : t;
            while (r = d.match.PSEUDO.exec(e)) s += r[0], e = e.replace(d.match.PSEUDO, "");
            e = d.relative[e] ? e + "*" : e;
            for (var u = 0, a = o.length; u < a; u++) h(e, o[u], i, n);
            return h.filter(s, i);
        };
        h.attr = s.attr, h.selectors.attrMap = {}, s.find = h, s.expr = h.selectors, s.expr[":"] = s.expr.filters, s.unique = h.uniqueSort, s.text = h.getText, s.isXMLDoc = h.isXML, s.contains = h.contains;
    }();
    var P = /Until$/, H = /^(?:parents|prevUntil|prevAll)/, B = /,/, j = /^.[^:#\[\.,]*$/, F = Array.prototype.slice, I = s.expr.match.POS, q = {
        children: !0,
        contents: !0,
        next: !0,
        prev: !0
    };
    s.fn.extend({
        find: function(e) {
            var t = this, n, r;
            if (typeof e != "string") return s(e).filter(function() {
                for (n = 0, r = t.length; n < r; n++) if (s.contains(t[n], this)) return !0;
            });
            var i = this.pushStack("", "find", e), o, u, a;
            for (n = 0, r = this.length; n < r; n++) {
                o = i.length, s.find(e, this[n], i);
                if (n > 0) for (u = o; u < i.length; u++) for (a = 0; a < o; a++) if (i[a] === i[u]) {
                    i.splice(u--, 1);
                    break;
                }
            }
            return i;
        },
        has: function(e) {
            var t = s(e);
            return this.filter(function() {
                for (var e = 0, n = t.length; e < n; e++) if (s.contains(this, t[e])) return !0;
            });
        },
        not: function(e) {
            return this.pushStack(W(this, e, !1), "not", e);
        },
        filter: function(e) {
            return this.pushStack(W(this, e, !0), "filter", e);
        },
        is: function(e) {
            return !!e && (typeof e == "string" ? I.test(e) ? s(e, this.context).index(this[0]) >= 0 : s.filter(e, this).length > 0 : this.filter(e).length > 0);
        },
        closest: function(e, t) {
            var n = [], r, i, o = this[0];
            if (s.isArray(e)) {
                var u = 1;
                while (o && o.ownerDocument && o !== t) {
                    for (r = 0; r < e.length; r++) s(o).is(e[r]) && n.push({
                        selector: e[r],
                        elem: o,
                        level: u
                    });
                    o = o.parentNode, u++;
                }
                return n;
            }
            var a = I.test(e) || typeof e != "string" ? s(e, t || this.context) : 0;
            for (r = 0, i = this.length; r < i; r++) {
                o = this[r];
                while (o) {
                    if (a ? a.index(o) > -1 : s.find.matchesSelector(o, e)) {
                        n.push(o);
                        break;
                    }
                    o = o.parentNode;
                    if (!o || !o.ownerDocument || o === t || o.nodeType === 11) break;
                }
            }
            n = n.length > 1 ? s.unique(n) : n;
            return this.pushStack(n, "closest", e);
        },
        index: function(e) {
            return e ? typeof e == "string" ? s.inArray(this[0], s(e)) : s.inArray(e.jquery ? e[0] : e, this) : this[0] && this[0].parentNode ? this.prevAll().length : -1;
        },
        add: function(e, t) {
            var n = typeof e == "string" ? s(e, t) : s.makeArray(e && e.nodeType ? [ e ] : e), r = s.merge(this.get(), n);
            return this.pushStack(V(n[0]) || V(r[0]) ? r : s.unique(r));
        },
        andSelf: function() {
            return this.add(this.prevObject);
        }
    }), s.each({
        parent: function(e) {
            var t = e.parentNode;
            return t && t.nodeType !== 11 ? t : null;
        },
        parents: function(e) {
            return s.dir(e, "parentNode");
        },
        parentsUntil: function(e, t, n) {
            return s.dir(e, "parentNode", n);
        },
        next: function(e) {
            return s.nth(e, 2, "nextSibling");
        },
        prev: function(e) {
            return s.nth(e, 2, "previousSibling");
        },
        nextAll: function(e) {
            return s.dir(e, "nextSibling");
        },
        prevAll: function(e) {
            return s.dir(e, "previousSibling");
        },
        nextUntil: function(e, t, n) {
            return s.dir(e, "nextSibling", n);
        },
        prevUntil: function(e, t, n) {
            return s.dir(e, "previousSibling", n);
        },
        siblings: function(e) {
            return s.sibling(e.parentNode.firstChild, e);
        },
        children: function(e) {
            return s.sibling(e.firstChild);
        },
        contents: function(e) {
            return s.nodeName(e, "iframe") ? e.contentDocument || e.contentWindow.document : s.makeArray(e.childNodes);
        }
    }, function(e, t) {
        s.fn[e] = function(n, r) {
            var i = s.map(this, t, n), o = F.call(arguments);
            P.test(e) || (r = n), r && typeof r == "string" && (i = s.filter(r, i)), i = this.length > 1 && !q[e] ? s.unique(i) : i, (this.length > 1 || B.test(r)) && H.test(e) && (i = i.reverse());
            return this.pushStack(i, e, o.join(","));
        };
    }), s.extend({
        filter: function(e, t, n) {
            n && (e = ":not(" + e + ")");
            return t.length === 1 ? s.find.matchesSelector(t[0], e) ? [ t[0] ] : [] : s.find.matches(e, t);
        },
        dir: function(e, n, r) {
            var i = [], o = e[n];
            while (o && o.nodeType !== 9 && (r === t || o.nodeType !== 1 || !s(o).is(r))) o.nodeType === 1 && i.push(o), o = o[n];
            return i;
        },
        nth: function(e, t, n, r) {
            t = t || 1;
            var i = 0;
            for (; e; e = e[n]) if (e.nodeType === 1 && ++i === t) break;
            return e;
        },
        sibling: function(e, t) {
            var n = [];
            for (; e; e = e.nextSibling) e.nodeType === 1 && e !== t && n.push(e);
            return n;
        }
    });
    var R = "abbr article aside audio canvas datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video", U = / jQuery\d+="(?:\d+|null)"/g, z = /^\s+/, W = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/ig, X = /<([\w:]+)/, V = /<tbody/i, $ = /<|&#?\w+;/, J = /<(?:script|style)/i, K = /<(?:script|object|embed|option|style)/i, Q = new RegExp("<(?:" + R.replace(" ", "|") + ")", "i"), G = /checked\s*(?:[^=]|=\s*.checked.)/i, Y = /\/(java|ecma)script/i, Z = /^\s*<!(?:\[CDATA\[|\-\-)/, et = {
        option: [ 1, "<select multiple='multiple'>", "</select>" ],
        legend: [ 1, "<fieldset>", "</fieldset>" ],
        thead: [ 1, "<table>", "</table>" ],
        tr: [ 2, "<table><tbody>", "</tbody></table>" ],
        td: [ 3, "<table><tbody><tr>", "</tr></tbody></table>" ],
        col: [ 2, "<table><tbody></tbody><colgroup>", "</colgroup></table>" ],
        area: [ 1, "<map>", "</map>" ],
        _default: [ 0, "", "" ]
    }, tt = X(n);
    et.optgroup = et.option, et.tbody = et.tfoot = et.colgroup = et.caption = et.thead, et.th = et.td, s.support.htmlSerialize || (et._default = [ 1, "div<div>", "</div>" ]), s.fn.extend({
        text: function(e) {
            return s.isFunction(e) ? this.each(function(t) {
                var n = s(this);
                n.text(e.call(this, t, n.text()));
            }) : typeof e != "object" && e !== t ? this.empty().append((this[0] && this[0].ownerDocument || n).createTextNode(e)) : s.text(this);
        },
        wrapAll: function(e) {
            if (s.isFunction(e)) return this.each(function(t) {
                s(this).wrapAll(e.call(this, t));
            });
            if (this[0]) {
                var t = s(e, this[0].ownerDocument).eq(0).clone(!0);
                this[0].parentNode && t.insertBefore(this[0]), t.map(function() {
                    var e = this;
                    while (e.firstChild && e.firstChild.nodeType === 1) e = e.firstChild;
                    return e;
                }).append(this);
            }
            return this;
        },
        wrapInner: function(e) {
            return s.isFunction(e) ? this.each(function(t) {
                s(this).wrapInner(e.call(this, t));
            }) : this.each(function() {
                var t = s(this), n = t.contents();
                n.length ? n.wrapAll(e) : t.append(e);
            });
        },
        wrap: function(e) {
            return this.each(function() {
                s(this).wrapAll(e);
            });
        },
        unwrap: function() {
            return this.parent().each(function() {
                s.nodeName(this, "body") || s(this).replaceWith(this.childNodes);
            }).end();
        },
        append: function() {
            return this.domManip(arguments, !0, function(e) {
                this.nodeType === 1 && this.appendChild(e);
            });
        },
        prepend: function() {
            return this.domManip(arguments, !0, function(e) {
                this.nodeType === 1 && this.insertBefore(e, this.firstChild);
            });
        },
        before: function() {
            if (this[0] && this[0].parentNode) return this.domManip(arguments, !1, function(e) {
                this.parentNode.insertBefore(e, this);
            });
            if (arguments.length) {
                var e = s(arguments[0]);
                e.push.apply(e, this.toArray());
                return this.pushStack(e, "before", arguments);
            }
        },
        after: function() {
            if (this[0] && this[0].parentNode) return this.domManip(arguments, !1, function(e) {
                this.parentNode.insertBefore(e, this.nextSibling);
            });
            if (arguments.length) {
                var e = this.pushStack(this, "after", arguments);
                e.push.apply(e, s(arguments[0]).toArray());
                return e;
            }
        },
        remove: function(e, t) {
            for (var n = 0, r; (r = this[n]) != null; n++) if (!e || s.filter(e, [ r ]).length) !t && r.nodeType === 1 && (s.cleanData(r.getElementsByTagName("*")), s.cleanData([ r ])), r.parentNode && r.parentNode.removeChild(r);
            return this;
        },
        empty: function() {
            for (var e = 0, t; (t = this[e]) != null; e++) {
                t.nodeType === 1 && s.cleanData(t.getElementsByTagName("*"));
                while (t.firstChild) t.removeChild(t.firstChild);
            }
            return this;
        },
        clone: function(e, t) {
            e = e == null ? !1 : e, t = t == null ? e : t;
            return this.map(function() {
                return s.clone(this, e, t);
            });
        },
        html: function(e) {
            if (e === t) return this[0] && this[0].nodeType === 1 ? this[0].innerHTML.replace(U, "") : null;
            if (typeof e == "string" && !J.test(e) && (s.support.leadingWhitespace || !z.test(e)) && !et[(X.exec(e) || [ "", "" ])[1].toLowerCase()]) {
                e = e.replace(W, "<$1></$2>");
                try {
                    for (var n = 0, r = this.length; n < r; n++) this[n].nodeType === 1 && (s.cleanData(this[n].getElementsByTagName("*")), this[n].innerHTML = e);
                } catch (i) {
                    this.empty().append(e);
                }
            } else s.isFunction(e) ? this.each(function(t) {
                var n = s(this);
                n.html(e.call(this, t, n.html()));
            }) : this.empty().append(e);
            return this;
        },
        replaceWith: function(e) {
            if (this[0] && this[0].parentNode) {
                if (s.isFunction(e)) return this.each(function(t) {
                    var n = s(this), r = n.html();
                    n.replaceWith(e.call(this, t, r));
                });
                typeof e != "string" && (e = s(e).detach());
                return this.each(function() {
                    var t = this.nextSibling, n = this.parentNode;
                    s(this).remove(), t ? s(t).before(e) : s(n).append(e);
                });
            }
            return this.length ? this.pushStack(s(s.isFunction(e) ? e() : e), "replaceWith", e) : this;
        },
        detach: function(e) {
            return this.remove(e, !0);
        },
        domManip: function(e, n, r) {
            var i, o, u, a, f = e[0], l = [];
            if (!s.support.checkClone && arguments.length === 3 && typeof f == "string" && G.test(f)) return this.each(function() {
                s(this).domManip(e, n, r, !0);
            });
            if (s.isFunction(f)) return this.each(function(i) {
                var o = s(this);
                e[0] = f.call(this, i, n ? o.html() : t), o.domManip(e, n, r);
            });
            if (this[0]) {
                a = f && f.parentNode, s.support.parentNode && a && a.nodeType === 11 && a.childNodes.length === this.length ? i = {
                    fragment: a
                } : i = s.buildFragment(e, this, l), u = i.fragment, u.childNodes.length === 1 ? o = u = u.firstChild : o = u.firstChild;
                if (o) {
                    n = n && s.nodeName(o, "tr");
                    for (var c = 0, h = this.length, p = h - 1; c < h; c++) r.call(n ? bl(this[c], o) : this[c], i.cacheable || h > 1 && c < p ? s.clone(u, !0, !0) : u);
                }
                l.length && s.each(l, br);
            }
            return this;
        }
    }), s.buildFragment = function(e, t, r) {
        var i, o, u, a, f = e[0];
        t && t[0] && (a = t[0].ownerDocument || t[0]), a.createDocumentFragment || (a = n), e.length === 1 && typeof f == "string" && f.length < 512 && a === n && f.charAt(0) === "<" && !K.test(f) && (s.support.checkClone || !G.test(f)) && !s.support.unknownElems && Q.test(f) && (o = !0, u = s.fragments[f], u && u !== 1 && (i = u)), i || (i = a.createDocumentFragment(), s.clean(e, a, i, r)), o && (s.fragments[f] = u ? i : 1);
        return {
            fragment: i,
            cacheable: o
        };
    }, s.fragments = {}, s.each({
        appendTo: "append",
        prependTo: "prepend",
        insertBefore: "before",
        insertAfter: "after",
        replaceAll: "replaceWith"
    }, function(e, t) {
        s.fn[e] = function(n) {
            var r = [], i = s(n), o = this.length === 1 && this[0].parentNode;
            if (o && o.nodeType === 11 && o.childNodes.length === 1 && i.length === 1) {
                i[t](this[0]);
                return this;
            }
            for (var u = 0, a = i.length; u < a; u++) {
                var f = (u > 0 ? this.clone(!0) : this).get();
                s(i[u])[t](f), r = r.concat(f);
            }
            return this.pushStack(r, e, i.selector);
        };
    }), s.extend({
        clone: function(e, t, n) {
            var r = e.cloneNode(!0), i, o, u;
            if ((!s.support.noCloneEvent || !s.support.noCloneChecked) && (e.nodeType === 1 || e.nodeType === 11) && !s.isXMLDoc(e)) {
                bn(e, r), i = bo(e), o = bo(r);
                for (u = 0; i[u]; ++u) o[u] && bn(i[u], o[u]);
            }
            if (t) {
                bm(e, r);
                if (n) {
                    i = bo(e), o = bo(r);
                    for (u = 0; i[u]; ++u) bm(i[u], o[u]);
                }
            }
            i = o = null;
            return r;
        },
        clean: function(e, t, r, i) {
            var o;
            t = t || n, typeof t.createElement == "undefined" && (t = t.ownerDocument || t[0] && t[0].ownerDocument || n);
            var u = [], a;
            for (var f = 0, l; (l = e[f]) != null; f++) {
                typeof l == "number" && (l += "");
                if (!l) continue;
                if (typeof l == "string") if (!$.test(l)) l = t.createTextNode(l); else {
                    l = l.replace(W, "<$1></$2>");
                    var c = (X.exec(l) || [ "", "" ])[1].toLowerCase(), h = et[c] || et._default, p = h[0], d = t.createElement("div");
                    t === n ? tt.appendChild(d) : X(t).appendChild(d), d.innerHTML = h[1] + l + h[2];
                    while (p--) d = d.lastChild;
                    if (!s.support.tbody) {
                        var v = V.test(l), m = c === "table" && !v ? d.firstChild && d.firstChild.childNodes : h[1] === "<table>" && !v ? d.childNodes : [];
                        for (a = m.length - 1; a >= 0; --a) s.nodeName(m[a], "tbody") && !m[a].childNodes.length && m[a].parentNode.removeChild(m[a]);
                    }
                    !s.support.leadingWhitespace && z.test(l) && d.insertBefore(t.createTextNode(z.exec(l)[0]), d.firstChild), l = d.childNodes;
                }
                var g;
                if (!s.support.appendChecked) if (l[0] && typeof (g = l.length) == "number") for (a = 0; a < g; a++) bq(l[a]); else bq(l);
                l.nodeType ? u.push(l) : u = s.merge(u, l);
            }
            if (r) {
                o = function(e) {
                    return !e.type || Y.test(e.type);
                };
                for (f = 0; u[f]; f++) if (i && s.nodeName(u[f], "script") && (!u[f].type || u[f].type.toLowerCase() === "text/javascript")) i.push(u[f].parentNode ? u[f].parentNode.removeChild(u[f]) : u[f]); else {
                    if (u[f].nodeType === 1) {
                        var y = s.grep(u[f].getElementsByTagName("script"), o);
                        u.splice.apply(u, [ f + 1, 0 ].concat(y));
                    }
                    r.appendChild(u[f]);
                }
            }
            return u;
        },
        cleanData: function(e) {
            var t, n, r = s.cache, i = s.event.special, o = s.support.deleteExpando;
            for (var u = 0, a; (a = e[u]) != null; u++) {
                if (a.nodeName && s.noData[a.nodeName.toLowerCase()]) continue;
                n = a[s.expando];
                if (n) {
                    t = r[n];
                    if (t && t.events) {
                        for (var f in t.events) i[f] ? s.event.remove(a, f) : s.removeEvent(a, f, t.handle);
                        t.handle && (t.handle.elem = null);
                    }
                    o ? delete a[s.expando] : a.removeAttribute && a.removeAttribute(s.expando), delete r[n];
                }
            }
        }
    });
    var nt = /alpha\([^)]*\)/i, rt = /opacity=([^)]*)/, it = /([A-Z]|^ms)/g, st = /^-?\d+(?:px)?$/i, ot = /^-?\d/, ut = /^([\-+])=([\-+.\de]+)/, at = {
        position: "absolute",
        visibility: "hidden",
        display: "block"
    }, ft = [ "Left", "Right" ], lt = [ "Top", "Bottom" ], ct, ht, pt;
    s.fn.css = function(e, n) {
        return arguments.length === 2 && n === t ? this : s.access(this, e, n, !0, function(e, n, r) {
            return r !== t ? s.style(e, n, r) : s.css(e, n);
        });
    }, s.extend({
        cssHooks: {
            opacity: {
                get: function(e, t) {
                    if (t) {
                        var n = ct(e, "opacity", "opacity");
                        return n === "" ? "1" : n;
                    }
                    return e.style.opacity;
                }
            }
        },
        cssNumber: {
            fillOpacity: !0,
            fontWeight: !0,
            lineHeight: !0,
            opacity: !0,
            orphans: !0,
            widows: !0,
            zIndex: !0,
            zoom: !0
        },
        cssProps: {
            "float": s.support.cssFloat ? "cssFloat" : "styleFloat"
        },
        style: function(e, n, r, i) {
            if (!!e && e.nodeType !== 3 && e.nodeType !== 8 && !!e.style) {
                var o, u, a = s.camelCase(n), f = e.style, l = s.cssHooks[a];
                n = s.cssProps[a] || a;
                if (r === t) return l && "get" in l && (o = l.get(e, !1, i)) !== t ? o : f[n];
                u = typeof r, u === "string" && (o = ut.exec(r)) && (r = +(o[1] + 1) * +o[2] + parseFloat(s.css(e, n)), u = "number");
                if (r == null || u === "number" && isNaN(r)) return;
                u === "number" && !s.cssNumber[a] && (r += "px");
                if (!l || !("set" in l) || (r = l.set(e, r)) !== t) try {
                    f[n] = r;
                } catch (c) {}
            }
        },
        css: function(e, n, r) {
            var i, o;
            n = s.camelCase(n), o = s.cssHooks[n], n = s.cssProps[n] || n, n === "cssFloat" && (n = "float");
            if (o && "get" in o && (i = o.get(e, !0, r)) !== t) return i;
            if (ct) return ct(e, n);
        },
        swap: function(e, t, n) {
            var r = {};
            for (var i in t) r[i] = e.style[i], e.style[i] = t[i];
            n.call(e);
            for (i in t) e.style[i] = r[i];
        }
    }), s.curCSS = s.css, s.each([ "height", "width" ], function(e, t) {
        s.cssHooks[t] = {
            get: function(e, n, r) {
                var i;
                if (n) {
                    if (e.offsetWidth !== 0) return bE(e, t, r);
                    s.swap(e, at, function() {
                        i = bE(e, t, r);
                    });
                    return i;
                }
            },
            set: function(e, t) {
                if (!st.test(t)) return t;
                t = parseFloat(t);
                if (t >= 0) return t + "px";
            }
        };
    }), s.support.opacity || (s.cssHooks.opacity = {
        get: function(e, t) {
            return rt.test((t && e.currentStyle ? e.currentStyle.filter : e.style.filter) || "") ? parseFloat(RegExp.$1) / 100 + "" : t ? "1" : "";
        },
        set: function(e, t) {
            var n = e.style, r = e.currentStyle, i = s.isNumeric(t) ? "alpha(opacity=" + t * 100 + ")" : "", o = r && r.filter || n.filter || "";
            n.zoom = 1;
            if (t >= 1 && s.trim(o.replace(nt, "")) === "") {
                n.removeAttribute("filter");
                if (r && !r.filter) return;
            }
            n.filter = nt.test(o) ? o.replace(nt, i) : o + " " + i;
        }
    }), s(function() {
        s.support.reliableMarginRight || (s.cssHooks.marginRight = {
            get: function(e, t) {
                var n;
                s.swap(e, {
                    display: "inline-block"
                }, function() {
                    t ? n = ct(e, "margin-right", "marginRight") : n = e.style.marginRight;
                });
                return n;
            }
        });
    }), n.defaultView && n.defaultView.getComputedStyle && (ht = function(e, n) {
        var r, i, o;
        n = n.replace(it, "-$1").toLowerCase();
        if (!(i = e.ownerDocument.defaultView)) return t;
        if (o = i.getComputedStyle(e, null)) r = o.getPropertyValue(n), r === "" && !s.contains(e.ownerDocument.documentElement, e) && (r = s.style(e, n));
        return r;
    }), n.documentElement.currentStyle && (pt = function(e, t) {
        var n, r, i, s = e.currentStyle && e.currentStyle[t], o = e.style;
        s === null && o && (i = o[t]) && (s = i), !st.test(s) && ot.test(s) && (n = o.left, r = e.runtimeStyle && e.runtimeStyle.left, r && (e.runtimeStyle.left = e.currentStyle.left), o.left = t === "fontSize" ? "1em" : s || 0, s = o.pixelLeft + "px", o.left = n, r && (e.runtimeStyle.left = r));
        return s === "" ? "auto" : s;
    }), ct = ht || pt, s.expr && s.expr.filters && (s.expr.filters.hidden = function(e) {
        var t = e.offsetWidth, n = e.offsetHeight;
        return t === 0 && n === 0 || !s.support.reliableHiddenOffsets && (e.style && e.style.display || s.css(e, "display")) === "none";
    }, s.expr.filters.visible = function(e) {
        return !s.expr.filters.hidden(e);
    });
    var dt = /%20/g, vt = /\[\]$/, mt = /\r?\n/g, gt = /#.*$/, yt = /^(.*?):[ \t]*([^\r\n]*)\r?$/mg, bt = /^(?:color|date|datetime|datetime-local|email|hidden|month|number|password|range|search|tel|text|time|url|week)$/i, wt = /^(?:about|app|app\-storage|.+\-extension|file|res|widget):$/, Et = /^(?:GET|HEAD)$/, St = /^\/\//, xt = /\?/, Tt = /<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi, Nt = /^(?:select|textarea)/i, Ct = /\s+/, kt = /([?&])_=[^&]*/, Lt = /^([\w\+\.\-]+:)(?:\/\/([^\/?#:]*)(?::(\d+))?)?/, At = s.fn.load, Ot = {}, Mt = {}, _t, Dt, Pt = [ "*/" ] + [ "*" ];
    try {
        _t = i.href;
    } catch (Ht) {
        _t = n.createElement("a"), _t.href = "", _t = _t.href;
    }
    Dt = Lt.exec(_t.toLowerCase()) || [], s.fn.extend({
        load: function(e, n, r) {
            if (typeof e != "string" && At) return At.apply(this, arguments);
            if (!this.length) return this;
            var i = e.indexOf(" ");
            if (i >= 0) {
                var o = e.slice(i, e.length);
                e = e.slice(0, i);
            }
            var u = "GET";
            n && (s.isFunction(n) ? (r = n, n = t) : typeof n == "object" && (n = s.param(n, s.ajaxSettings.traditional), u = "POST"));
            var a = this;
            s.ajax({
                url: e,
                type: u,
                dataType: "html",
                data: n,
                complete: function(e, t, n) {
                    n = e.responseText, e.isResolved() && (e.done(function(e) {
                        n = e;
                    }), a.html(o ? s("<div>").append(n.replace(Tt, "")).find(o) : n)), r && a.each(r, [ n, t, e ]);
                }
            });
            return this;
        },
        serialize: function() {
            return s.param(this.serializeArray());
        },
        serializeArray: function() {
            return this.map(function() {
                return this.elements ? s.makeArray(this.elements) : this;
            }).filter(function() {
                return this.name && !this.disabled && (this.checked || Nt.test(this.nodeName) || bt.test(this.type));
            }).map(function(e, t) {
                var n = s(this).val();
                return n == null ? null : s.isArray(n) ? s.map(n, function(e, n) {
                    return {
                        name: t.name,
                        value: e.replace(mt, "\r\n")
                    };
                }) : {
                    name: t.name,
                    value: n.replace(mt, "\r\n")
                };
            }).get();
        }
    }), s.each("ajaxStart ajaxStop ajaxComplete ajaxError ajaxSuccess ajaxSend".split(" "), function(e, t) {
        s.fn[t] = function(e) {
            return this.bind(t, e);
        };
    }), s.each([ "get", "post" ], function(e, n) {
        s[n] = function(e, r, i, o) {
            s.isFunction(r) && (o = o || i, i = r, r = t);
            return s.ajax({
                type: n,
                url: e,
                data: r,
                success: i,
                dataType: o
            });
        };
    }), s.extend({
        getScript: function(e, n) {
            return s.get(e, t, n, "script");
        },
        getJSON: function(e, t, n) {
            return s.get(e, t, n, "json");
        },
        ajaxSetup: function(e, t) {
            t ? cb(e, s.ajaxSettings) : (t = e, e = s.ajaxSettings), cb(e, t);
            return e;
        },
        ajaxSettings: {
            url: _t,
            isLocal: wt.test(Dt[1]),
            global: !0,
            type: "GET",
            contentType: "application/x-www-form-urlencoded",
            processData: !0,
            async: !0,
            accepts: {
                xml: "application/xml, text/xml",
                html: "text/html",
                text: "text/plain",
                json: "application/json, text/javascript",
                "*": Pt
            },
            contents: {
                xml: /xml/,
                html: /html/,
                json: /json/
            },
            responseFields: {
                xml: "responseXML",
                text: "responseText"
            },
            converters: {
                "* text": e.String,
                "text html": !0,
                "text json": s.parseJSON,
                "text xml": s.parseXML
            },
            flatOptions: {
                context: !0,
                url: !0
            }
        },
        ajaxPrefilter: b_(Ot),
        ajaxTransport: b_(Mt),
        ajax: function(e, n) {
            function w(e, n, c, h) {
                if (y !== 2) {
                    y = 2, m && clearTimeout(m), v = t, p = h || "", E.readyState = e > 0 ? 4 : 0;
                    var d, g, w, S = n, x = c ? cd(r, E, c) : t, T, N;
                    if (e >= 200 && e < 300 || e === 304) {
                        if (r.ifModified) {
                            if (T = E.getResponseHeader("Last-Modified")) s.lastModified[l] = T;
                            if (N = E.getResponseHeader("Etag")) s.etag[l] = N;
                        }
                        if (e === 304) S = "notmodified", d = !0; else try {
                            g = ce(r, x), S = "success", d = !0;
                        } catch (C) {
                            S = "parsererror", w = C;
                        }
                    } else {
                        w = S;
                        if (!S || e) S = "error", e < 0 && (e = 0);
                    }
                    E.status = e, E.statusText = "" + (n || S), d ? u.resolveWith(i, [ g, S, E ]) : u.rejectWith(i, [ E, S, w ]), E.statusCode(f), f = t, b && o.trigger("ajax" + (d ? "Success" : "Error"), [ E, r, d ? g : w ]), a.fireWith(i, [ E, S ]), b && (o.trigger("ajaxComplete", [ E, r ]), --s.active || s.event.trigger("ajaxStop"));
                }
            }
            typeof e == "object" && (n = e, e = t), n = n || {};
            var r = s.ajaxSetup({}, n), i = r.context || r, o = i !== r && (i.nodeType || i instanceof s) ? s(i) : s.event, u = s.Deferred(), a = s.Callbacks("once memory"), f = r.statusCode || {}, l, c = {}, h = {}, p, d, v, m, g, y = 0, b, w, E = {
                readyState: 0,
                setRequestHeader: function(e, t) {
                    if (!y) {
                        var n = e.toLowerCase();
                        e = h[n] = h[n] || e, c[e] = t;
                    }
                    return this;
                },
                getAllResponseHeaders: function() {
                    return y === 2 ? p : null;
                },
                getResponseHeader: function(e) {
                    var n;
                    if (y === 2) {
                        if (!d) {
                            d = {};
                            while (n = yt.exec(p)) d[n[1].toLowerCase()] = n[2];
                        }
                        n = d[e.toLowerCase()];
                    }
                    return n === t ? null : n;
                },
                overrideMimeType: function(e) {
                    y || (r.mimeType = e);
                    return this;
                },
                abort: function(e) {
                    e = e || "abort", v && v.abort(e), w(0, e);
                    return this;
                }
            };
            u.promise(E), E.success = E.done, E.error = E.fail, E.complete = a.add, E.statusCode = function(e) {
                if (e) {
                    var t;
                    if (y < 2) for (t in e) f[t] = [ f[t], e[t] ]; else t = e[E.status], E.then(t, t);
                }
                return this;
            }, r.url = ((e || r.url) + "").replace(gt, "").replace(St, Dt[1] + "//"), r.dataTypes = s.trim(r.dataType || "*").toLowerCase().split(Ct), r.crossDomain == null && (g = Lt.exec(r.url.toLowerCase()), r.crossDomain = !(!g || g[1] == Dt[1] && g[2] == Dt[2] && (g[3] || (g[1] === "http:" ? 80 : 443)) == (Dt[3] || (Dt[1] === "http:" ? 80 : 443)))), r.data && r.processData && typeof r.data != "string" && (r.data = s.param(r.data, r.traditional)), ca(Ot, r, n, E);
            if (y === 2) return !1;
            b = r.global, r.type = r.type.toUpperCase(), r.hasContent = !Et.test(r.type), b && s.active++ === 0 && s.event.trigger("ajaxStart");
            if (!r.hasContent) {
                r.data && (r.url += (xt.test(r.url) ? "&" : "?") + r.data, delete r.data), l = r.url;
                if (r.cache === !1) {
                    var S = s.now(), x = r.url.replace(kt, "$1_=" + S);
                    r.url = x + (x === r.url ? (xt.test(r.url) ? "&" : "?") + "_=" + S : "");
                }
            }
            (r.data && r.hasContent && r.contentType !== !1 || n.contentType) && E.setRequestHeader("Content-Type", r.contentType), r.ifModified && (l = l || r.url, s.lastModified[l] && E.setRequestHeader("If-Modified-Since", s.lastModified[l]), s.etag[l] && E.setRequestHeader("If-None-Match", s.etag[l])), E.setRequestHeader("Accept", r.dataTypes[0] && r.accepts[r.dataTypes[0]] ? r.accepts[r.dataTypes[0]] + (r.dataTypes[0] !== "*" ? ", " + Pt + "; q=0.01" : "") : r.accepts["*"]);
            for (w in r.headers) E.setRequestHeader(w, r.headers[w]);
            if (!r.beforeSend || r.beforeSend.call(i, E, r) !== !1 && y !== 2) {
                for (w in {
                    success: 1,
                    error: 1,
                    complete: 1
                }) E[w](r[w]);
                v = ca(Mt, r, n, E);
                if (!v) w(-1, "No Transport"); else {
                    E.readyState = 1, b && o.trigger("ajaxSend", [ E, r ]), r.async && r.timeout > 0 && (m = setTimeout(function() {
                        E.abort("timeout");
                    }, r.timeout));
                    try {
                        y = 1, v.send(c, w);
                    } catch (T) {
                        y < 2 ? w(-1, T) : s.error(T);
                    }
                }
                return E;
            }
            E.abort();
            return !1;
        },
        param: function(e, n) {
            var r = [], i = function(e, t) {
                t = s.isFunction(t) ? t() : t, r[r.length] = encodeURIComponent(e) + "=" + encodeURIComponent(t);
            };
            n === t && (n = s.ajaxSettings.traditional);
            if (s.isArray(e) || e.jquery && !s.isPlainObject(e)) s.each(e, function() {
                i(this.name, this.value);
            }); else for (var o in e) cc(o, e[o], n, i);
            return r.join("&").replace(dt, "+");
        }
    }), s.extend({
        active: 0,
        lastModified: {},
        etag: {}
    });
    var Bt = s.now(), jt = /(\=)\?(&|$)|\?\?/i;
    s.ajaxSetup({
        jsonp: "callback",
        jsonpCallback: function() {
            return s.expando + "_" + Bt++;
        }
    }), s.ajaxPrefilter("json jsonp", function(t, n, r) {
        var i = t.contentType === "application/x-www-form-urlencoded" && typeof t.data == "string";
        if (t.dataTypes[0] === "jsonp" || t.jsonp !== !1 && (jt.test(t.url) || i && jt.test(t.data))) {
            var o, u = t.jsonpCallback = s.isFunction(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, a = e[u], f = t.url, l = t.data, c = "$1" + u + "$2";
            t.jsonp !== !1 && (f = f.replace(jt, c), t.url === f && (i && (l = l.replace(jt, c)), t.data === l && (f += (/\?/.test(f) ? "&" : "?") + t.jsonp + "=" + u))), t.url = f, t.data = l, e[u] = function(e) {
                o = [ e ];
            }, r.always(function() {
                e[u] = a, o && s.isFunction(a) && e[u](o[0]);
            }), t.converters["script json"] = function() {
                o || s.error(u + " was not called");
                return o[0];
            }, t.dataTypes[0] = "json";
            return "script";
        }
    }), s.ajaxSetup({
        accepts: {
            script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
        },
        contents: {
            script: /javascript|ecmascript/
        },
        converters: {
            "text script": function(e) {
                s.globalEval(e);
                return e;
            }
        }
    }), s.ajaxPrefilter("script", function(e) {
        e.cache === t && (e.cache = !1), e.crossDomain && (e.type = "GET", e.global = !1);
    }), s.ajaxTransport("script", function(e) {
        if (e.crossDomain) {
            var r, i = n.head || n.getElementsByTagName("head")[0] || n.documentElement;
            return {
                send: function(s, o) {
                    r = n.createElement("script"), r.async = "async", e.scriptCharset && (r.charset = e.scriptCharset), r.src = e.url, r.onload = r.onreadystatechange = function(e, n) {
                        if (n || !r.readyState || /loaded|complete/.test(r.readyState)) r.onload = r.onreadystatechange = null, i && r.parentNode && i.removeChild(r), r = t, n || o(200, "success");
                    }, i.insertBefore(r, i.firstChild);
                },
                abort: function() {
                    r && r.onload(0, 1);
                }
            };
        }
    });
    var Ft = e.ActiveXObject ? function() {
        for (var e in qt) qt[e](0, 1);
    } : !1, It = 0, qt;
    s.ajaxSettings.xhr = e.ActiveXObject ? function() {
        return !this.isLocal && ck() || cl();
    } : ck, function(e) {
        s.extend(s.support, {
            ajax: !!e,
            cors: !!e && "withCredentials" in e
        });
    }(s.ajaxSettings.xhr()), s.support.ajax && s.ajaxTransport(function(n) {
        if (!n.crossDomain || s.support.cors) {
            var r;
            return {
                send: function(i, o) {
                    var u = n.xhr(), a, f;
                    n.username ? u.open(n.type, n.url, n.async, n.username, n.password) : u.open(n.type, n.url, n.async);
                    if (n.xhrFields) for (f in n.xhrFields) u[f] = n.xhrFields[f];
                    n.mimeType && u.overrideMimeType && u.overrideMimeType(n.mimeType), !n.crossDomain && !i["X-Requested-With"] && (i["X-Requested-With"] = "XMLHttpRequest");
                    try {
                        for (f in i) u.setRequestHeader(f, i[f]);
                    } catch (l) {}
                    u.send(n.hasContent && n.data || null), r = function(e, i) {
                        var f, l, c, h, p;
                        try {
                            if (r && (i || u.readyState === 4)) {
                                r = t, a && (u.onreadystatechange = s.noop, Ft && delete qt[a]);
                                if (i) u.readyState !== 4 && u.abort(); else {
                                    f = u.status, c = u.getAllResponseHeaders(), h = {}, p = u.responseXML, p && p.documentElement && (h.xml = p), h.text = u.responseText;
                                    try {
                                        l = u.statusText;
                                    } catch (d) {
                                        l = "";
                                    }
                                    !f && n.isLocal && !n.crossDomain ? f = h.text ? 200 : 404 : f === 1223 && (f = 204);
                                }
                            }
                        } catch (v) {
                            i || o(-1, v);
                        }
                        h && o(f, l, h, c);
                    }, !n.async || u.readyState === 4 ? r() : (a = ++It, Ft && (qt || (qt = {}, s(e).unload(Ft)), qt[a] = r), u.onreadystatechange = r);
                },
                abort: function() {
                    r && r(0, 1);
                }
            };
        }
    });
    var Rt = {}, Ut, zt, Wt = /^(?:toggle|show|hide)$/, Xt = /^([+\-]=)?([\d+.\-]+)([a-z%]*)$/i, Vt, $t = [ [ "height", "marginTop", "marginBottom", "paddingTop", "paddingBottom" ], [ "width", "marginLeft", "marginRight", "paddingLeft", "paddingRight" ], [ "opacity" ] ], Jt;
    s.fn.extend({
        show: function(e, t, n) {
            var r, i;
            if (e || e === 0) return this.animate(cw("show", 3), e, t, n);
            for (var o = 0, u = this.length; o < u; o++) r = this[o], r.style && (i = r.style.display, !s._data(r, "olddisplay") && i === "none" && (i = r.style.display = ""), i === "" && s.css(r, "display") === "none" && s._data(r, "olddisplay", cx(r.nodeName)));
            for (o = 0; o < u; o++) {
                r = this[o];
                if (r.style) {
                    i = r.style.display;
                    if (i === "" || i === "none") r.style.display = s._data(r, "olddisplay") || "";
                }
            }
            return this;
        },
        hide: function(e, t, n) {
            if (e || e === 0) return this.animate(cw("hide", 3), e, t, n);
            var r, i, o = 0, u = this.length;
            for (; o < u; o++) r = this[o], r.style && (i = s.css(r, "display"), i !== "none" && !s._data(r, "olddisplay") && s._data(r, "olddisplay", i));
            for (o = 0; o < u; o++) this[o].style && (this[o].style.display = "none");
            return this;
        },
        _toggle: s.fn.toggle,
        toggle: function(e, t, n) {
            var r = typeof e == "boolean";
            s.isFunction(e) && s.isFunction(t) ? this._toggle.apply(this, arguments) : e == null || r ? this.each(function() {
                var t = r ? e : s(this).is(":hidden");
                s(this)[t ? "show" : "hide"]();
            }) : this.animate(cw("toggle", 3), e, t, n);
            return this;
        },
        fadeTo: function(e, t, n, r) {
            return this.filter(":hidden").css("opacity", 0).show().end().animate({
                opacity: t
            }, e, n, r);
        },
        animate: function(e, t, n, r) {
            function g() {
                i.queue === !1 && s._mark(this);
                var t = s.extend({}, i), n = this.nodeType === 1, r = n && s(this).is(":hidden"), o, u, a, f, l, c, h, p, d;
                t.animatedProperties = {};
                for (a in e) {
                    o = s.camelCase(a), a !== o && (e[o] = e[a], delete e[a]), u = e[o], s.isArray(u) ? (t.animatedProperties[o] = u[1], u = e[o] = u[0]) : t.animatedProperties[o] = t.specialEasing && t.specialEasing[o] || t.easing || "swing";
                    if (u === "hide" && r || u === "show" && !r) return t.complete.call(this);
                    n && (o === "height" || o === "width") && (t.overflow = [ this.style.overflow, this.style.overflowX, this.style.overflowY ], s.css(this, "display") === "inline" && s.css(this, "float") === "none" && (!s.support.inlineBlockNeedsLayout || cx(this.nodeName) === "inline" ? this.style.display = "inline-block" : this.style.zoom = 1));
                }
                t.overflow != null && (this.style.overflow = "hidden");
                for (a in e) f = new s.fx(this, t, a), u = e[a], Wt.test(u) ? (d = s._data(this, "toggle" + a) || (u === "toggle" ? r ? "show" : "hide" : 0), d ? (s._data(this, "toggle" + a, d === "show" ? "hide" : "show"), f[d]()) : f[u]()) : (l = Xt.exec(u), c = f.cur(), l ? (h = parseFloat(l[2]), p = l[3] || (s.cssNumber[a] ? "" : "px"), p !== "px" && (s.style(this, a, (h || 1) + p), c = (h || 1) / f.cur() * c, s.style(this, a, c + p)), l[1] && (h = (l[1] === "-=" ? -1 : 1) * h + c), f.custom(c, h, p)) : f.custom(c, u, ""));
                return !0;
            }
            var i = s.speed(t, n, r);
            if (s.isEmptyObject(e)) return this.each(i.complete, [ !1 ]);
            e = s.extend({}, e);
            return i.queue === !1 ? this.each(g) : this.queue(i.queue, g);
        },
        stop: function(e, n, r) {
            typeof e != "string" && (r = n, n = e, e = t), n && e !== !1 && this.queue(e || "fx", []);
            return this.each(function() {
                function h(e, t, n) {
                    var i = t[n];
                    s.removeData(e, n, !0), i.stop(r);
                }
                var t, n = !1, i = s.timers, o = s._data(this);
                r || s._unmark(!0, this);
                if (e == null) for (t in o) o[t].stop && t.indexOf(".run") === t.length - 4 && h(this, o, t); else o[t = e + ".run"] && o[t].stop && h(this, o, t);
                for (t = i.length; t--; ) i[t].elem === this && (e == null || i[t].queue === e) && (r ? i[t](!0) : i[t].saveState(), n = !0, i.splice(t, 1));
                (!r || !n) && s.dequeue(this, e);
            });
        }
    }), s.each({
        slideDown: cw("show", 1),
        slideUp: cw("hide", 1),
        slideToggle: cw("toggle", 1),
        fadeIn: {
            opacity: "show"
        },
        fadeOut: {
            opacity: "hide"
        },
        fadeToggle: {
            opacity: "toggle"
        }
    }, function(e, t) {
        s.fn[e] = function(e, n, r) {
            return this.animate(t, e, n, r);
        };
    }), s.extend({
        speed: function(e, t, n) {
            var r = e && typeof e == "object" ? s.extend({}, e) : {
                complete: n || !n && t || s.isFunction(e) && e,
                duration: e,
                easing: n && t || t && !s.isFunction(t) && t
            };
            r.duration = s.fx.off ? 0 : typeof r.duration == "number" ? r.duration : r.duration in s.fx.speeds ? s.fx.speeds[r.duration] : s.fx.speeds._default;
            if (r.queue == null || r.queue === !0) r.queue = "fx";
            r.old = r.complete, r.complete = function(e) {
                s.isFunction(r.old) && r.old.call(this), r.queue ? s.dequeue(this, r.queue) : e !== !1 && s._unmark(this);
            };
            return r;
        },
        easing: {
            linear: function(e, t, n, r) {
                return n + r * e;
            },
            swing: function(e, t, n, r) {
                return (-Math.cos(e * Math.PI) / 2 + .5) * r + n;
            }
        },
        timers: [],
        fx: function(e, t, n) {
            this.options = t, this.elem = e, this.prop = n, t.orig = t.orig || {};
        }
    }), s.fx.prototype = {
        update: function() {
            this.options.step && this.options.step.call(this.elem, this.now, this), (s.fx.step[this.prop] || s.fx.step._default)(this);
        },
        cur: function() {
            if (this.elem[this.prop] == null || !!this.elem.style && this.elem.style[this.prop] != null) {
                var e, t = s.css(this.elem, this.prop);
                return isNaN(e = parseFloat(t)) ? !t || t === "auto" ? 0 : t : e;
            }
            return this.elem[this.prop];
        },
        custom: function(e, n, r) {
            function h(e) {
                return i.step(e);
            }
            var i = this, o = s.fx;
            this.startTime = Jt || cu(), this.end = n, this.now = this.start = e, this.pos = this.state = 0, this.unit = r || this.unit || (s.cssNumber[this.prop] ? "" : "px"), h.queue = this.options.queue, h.elem = this.elem, h.saveState = function() {
                i.options.hide && s._data(i.elem, "fxshow" + i.prop) === t && s._data(i.elem, "fxshow" + i.prop, i.start);
            }, h() && s.timers.push(h) && !Vt && (Vt = setInterval(o.tick, o.interval));
        },
        show: function() {
            var e = s._data(this.elem, "fxshow" + this.prop);
            this.options.orig[this.prop] = e || s.style(this.elem, this.prop), this.options.show = !0, e !== t ? this.custom(this.cur(), e) : this.custom(this.prop === "width" || this.prop === "height" ? 1 : 0, this.cur()), s(this.elem).show();
        },
        hide: function() {
            this.options.orig[this.prop] = s._data(this.elem, "fxshow" + this.prop) || s.style(this.elem, this.prop), this.options.hide = !0, this.custom(this.cur(), 0);
        },
        step: function(e) {
            var t, n, r, i = Jt || cu(), o = !0, u = this.elem, a = this.options;
            if (e || i >= a.duration + this.startTime) {
                this.now = this.end, this.pos = this.state = 1, this.update(), a.animatedProperties[this.prop] = !0;
                for (t in a.animatedProperties) a.animatedProperties[t] !== !0 && (o = !1);
                if (o) {
                    a.overflow != null && !s.support.shrinkWrapBlocks && s.each([ "", "X", "Y" ], function(e, t) {
                        u.style["overflow" + t] = a.overflow[e];
                    }), a.hide && s(u).hide();
                    if (a.hide || a.show) for (t in a.animatedProperties) s.style(u, t, a.orig[t]), s.removeData(u, "fxshow" + t, !0), s.removeData(u, "toggle" + t, !0);
                    r = a.complete, r && (a.complete = !1, r.call(u));
                }
                return !1;
            }
            a.duration == Infinity ? this.now = i : (n = i - this.startTime, this.state = n / a.duration, this.pos = s.easing[a.animatedProperties[this.prop]](this.state, n, 0, 1, a.duration), this.now = this.start + (this.end - this.start) * this.pos), this.update();
            return !0;
        }
    }, s.extend(s.fx, {
        tick: function() {
            var e, t = s.timers, n = 0;
            for (; n < t.length; n++) e = t[n], !e() && t[n] === e && t.splice(n--, 1);
            t.length || s.fx.stop();
        },
        interval: 13,
        stop: function() {
            clearInterval(Vt), Vt = null;
        },
        speeds: {
            slow: 600,
            fast: 200,
            _default: 400
        },
        step: {
            opacity: function(e) {
                s.style(e.elem, "opacity", e.now);
            },
            _default: function(e) {
                e.elem.style && e.elem.style[e.prop] != null ? e.elem.style[e.prop] = e.now + e.unit : e.elem[e.prop] = e.now;
            }
        }
    }), s.each([ "width", "height" ], function(e, t) {
        s.fx.step[t] = function(e) {
            s.style(e.elem, t, Math.max(0, e.now));
        };
    }), s.expr && s.expr.filters && (s.expr.filters.animated = function(e) {
        return s.grep(s.timers, function(t) {
            return e === t.elem;
        }).length;
    });
    var Kt = /^t(?:able|d|h)$/i, Qt = /^(?:body|html)$/i;
    "getBoundingClientRect" in n.documentElement ? s.fn.offset = function(e) {
        var t = this[0], n;
        if (e) return this.each(function(t) {
            s.offset.setOffset(this, e, t);
        });
        if (!t || !t.ownerDocument) return null;
        if (t === t.ownerDocument.body) return s.offset.bodyOffset(t);
        try {
            n = t.getBoundingClientRect();
        } catch (r) {}
        var i = t.ownerDocument, o = i.documentElement;
        if (!n || !s.contains(o, t)) return n ? {
            top: n.top,
            left: n.left
        } : {
            top: 0,
            left: 0
        };
        var u = i.body, a = cA(i), f = o.clientTop || u.clientTop || 0, l = o.clientLeft || u.clientLeft || 0, c = a.pageYOffset || s.support.boxModel && o.scrollTop || u.scrollTop, h = a.pageXOffset || s.support.boxModel && o.scrollLeft || u.scrollLeft, p = n.top + c - f, d = n.left + h - l;
        return {
            top: p,
            left: d
        };
    } : s.fn.offset = function(e) {
        var t = this[0];
        if (e) return this.each(function(t) {
            s.offset.setOffset(this, e, t);
        });
        if (!t || !t.ownerDocument) return null;
        if (t === t.ownerDocument.body) return s.offset.bodyOffset(t);
        var n, r = t.offsetParent, i = t, o = t.ownerDocument, u = o.documentElement, a = o.body, f = o.defaultView, l = f ? f.getComputedStyle(t, null) : t.currentStyle, c = t.offsetTop, h = t.offsetLeft;
        while ((t = t.parentNode) && t !== a && t !== u) {
            if (s.support.fixedPosition && l.position === "fixed") break;
            n = f ? f.getComputedStyle(t, null) : t.currentStyle, c -= t.scrollTop, h -= t.scrollLeft, t === r && (c += t.offsetTop, h += t.offsetLeft, s.support.doesNotAddBorder && (!s.support.doesAddBorderForTableAndCells || !Kt.test(t.nodeName)) && (c += parseFloat(n.borderTopWidth) || 0, h += parseFloat(n.borderLeftWidth) || 0), i = r, r = t.offsetParent), s.support.subtractsBorderForOverflowNotVisible && n.overflow !== "visible" && (c += parseFloat(n.borderTopWidth) || 0, h += parseFloat(n.borderLeftWidth) || 0), l = n;
        }
        if (l.position === "relative" || l.position === "static") c += a.offsetTop, h += a.offsetLeft;
        s.support.fixedPosition && l.position === "fixed" && (c += Math.max(u.scrollTop, a.scrollTop), h += Math.max(u.scrollLeft, a.scrollLeft));
        return {
            top: c,
            left: h
        };
    }, s.offset = {
        bodyOffset: function(e) {
            var t = e.offsetTop, n = e.offsetLeft;
            s.support.doesNotIncludeMarginInBodyOffset && (t += parseFloat(s.css(e, "marginTop")) || 0, n += parseFloat(s.css(e, "marginLeft")) || 0);
            return {
                top: t,
                left: n
            };
        },
        setOffset: function(e, t, n) {
            var r = s.css(e, "position");
            r === "static" && (e.style.position = "relative");
            var i = s(e), o = i.offset(), u = s.css(e, "top"), a = s.css(e, "left"), f = (r === "absolute" || r === "fixed") && s.inArray("auto", [ u, a ]) > -1, l = {}, c = {}, h, p;
            f ? (c = i.position(), h = c.top, p = c.left) : (h = parseFloat(u) || 0, p = parseFloat(a) || 0), s.isFunction(t) && (t = t.call(e, n, o)), t.top != null && (l.top = t.top - o.top + h), t.left != null && (l.left = t.left - o.left + p), "using" in t ? t.using.call(e, l) : i.css(l);
        }
    }, s.fn.extend({
        position: function() {
            if (!this[0]) return null;
            var e = this[0], t = this.offsetParent(), n = this.offset(), r = Qt.test(t[0].nodeName) ? {
                top: 0,
                left: 0
            } : t.offset();
            n.top -= parseFloat(s.css(e, "marginTop")) || 0, n.left -= parseFloat(s.css(e, "marginLeft")) || 0, r.top += parseFloat(s.css(t[0], "borderTopWidth")) || 0, r.left += parseFloat(s.css(t[0], "borderLeftWidth")) || 0;
            return {
                top: n.top - r.top,
                left: n.left - r.left
            };
        },
        offsetParent: function() {
            return this.map(function() {
                var e = this.offsetParent || n.body;
                while (e && !Qt.test(e.nodeName) && s.css(e, "position") === "static") e = e.offsetParent;
                return e;
            });
        }
    }), s.each([ "Left", "Top" ], function(e, n) {
        var r = "scroll" + n;
        s.fn[r] = function(n) {
            var i, o;
            if (n === t) {
                i = this[0];
                if (!i) return null;
                o = cA(i);
                return o ? "pageXOffset" in o ? o[e ? "pageYOffset" : "pageXOffset"] : s.support.boxModel && o.document.documentElement[r] || o.document.body[r] : i[r];
            }
            return this.each(function() {
                o = cA(this), o ? o.scrollTo(e ? s(o).scrollLeft() : n, e ? n : s(o).scrollTop()) : this[r] = n;
            });
        };
    }), s.each([ "Height", "Width" ], function(e, n) {
        var r = n.toLowerCase();
        s.fn["inner" + n] = function() {
            var e = this[0];
            return e ? e.style ? parseFloat(s.css(e, r, "padding")) : this[r]() : null;
        }, s.fn["outer" + n] = function(e) {
            var t = this[0];
            return t ? t.style ? parseFloat(s.css(t, r, e ? "margin" : "border")) : this[r]() : null;
        }, s.fn[r] = function(e) {
            var i = this[0];
            if (!i) return e == null ? null : this;
            if (s.isFunction(e)) return this.each(function(t) {
                var n = s(this);
                n[r](e.call(this, t, n[r]()));
            });
            if (s.isWindow(i)) {
                var o = i.document.documentElement["client" + n], u = i.document.body;
                return i.document.compatMode === "CSS1Compat" && o || u && u["client" + n] || o;
            }
            if (i.nodeType === 9) return Math.max(i.documentElement["client" + n], i.body["scroll" + n], i.documentElement["scroll" + n], i.body["offset" + n], i.documentElement["offset" + n]);
            if (e === t) {
                var a = s.css(i, r), f = parseFloat(a);
                return s.isNumeric(f) ? f : a;
            }
            return this.css(r, typeof e == "string" ? e : e + "px");
        };
    }), e.jQuery = e.$ = s;
})(window);

jQuery.cookie = function(e, t, n) {
    if (typeof t == "undefined") {
        var a = null;
        if (document.cookie && document.cookie != "") {
            var f = document.cookie.split(";");
            for (var l = 0; l < f.length; l++) {
                var c = jQuery.trim(f[l]);
                if (c.substring(0, e.length + 1) == e + "=") {
                    a = decodeURIComponent(c.substring(e.length + 1));
                    break;
                }
            }
        }
        return a;
    }
    n = n || {};
    if (t === null) {
        t = "";
        n.expires = -1;
    }
    var r = "";
    if (n.expires && (typeof n.expires == "number" || n.expires.toUTCString)) {
        var i;
        if (typeof n.expires == "number") {
            i = new Date;
            i.setTime(i.getTime() + n.expires * 24 * 60 * 60 * 1e3);
        } else i = n.expires;
        r = "; expires=" + i.toUTCString();
    }
    var s = n.path ? "; path=" + n.path : "", o = n.domain ? "; domain=" + n.domain : "", u = n.secure ? "; secure" : "";
    document.cookie = [ e, "=", encodeURIComponent(t), r, s, o, u ].join("");
};

(function(e) {
    var t = {
        b: function(e) {
            return parseInt(e, 10).toString(2);
        },
        c: function(e) {
            return String.fromCharCode(parseInt(e, 10));
        },
        d: function(e) {
            return parseInt(e, 10);
        },
        u: function(e) {
            return Math.abs(e);
        },
        f: function(e, t) {
            t = parseInt(t, 10);
            e = parseFloat(e);
            return isNaN(t && e) ? NaN : t && e.toFixed(t) || e;
        },
        o: function(e) {
            return parseInt(e, 10).toString(8);
        },
        s: function(e) {
            return e;
        },
        x: function(e) {
            return ("" + parseInt(e, 10).toString(16)).toLowerCase();
        },
        X: function(e) {
            return ("" + parseInt(e, 10).toString(16)).toUpperCase();
        }
    }, n = /%(?:(\d+)?(?:\.(\d+))?|\(([^)]+)\))([%bcdufosxX])/g, r = function(e) {
        if (e.length == 1 && typeof e[0] == "object") {
            e = e[0];
            return function(n, r, i, s, o, u, l) {
                return t[o](e[s]);
            };
        }
        var n = 0;
        return function(r, i, s, o, u, l, c) {
            return u == "%" ? "%" : t[u](e[n++], s);
        };
    };
    e.extend({
        sprintf: function(e) {
            var t = Array.apply(null, arguments).slice(1);
            return e.replace(n, r(t));
        },
        vsprintf: function(e, t) {
            return e.replace(n, r(t));
        }
    });
})(jQuery);

(function(e) {
    e.fn.extend({
        autocomplete: function(t, n) {
            var r = typeof t == "string";
            n = e.extend({}, e.Autocompleter.defaults, {
                url: r ? t : null,
                data: r ? null : t,
                delay: r ? e.Autocompleter.defaults.delay : 10,
                max: n && !n.scroll ? 10 : 150
            }, n);
            n.highlight = n.highlight || function(e) {
                return e;
            };
            n.formatMatch = n.formatMatch || n.formatItem;
            n.show = n.show || function(e) {};
            return this.each(function() {
                new e.Autocompleter(this, n);
            });
        },
        result: function(e) {
            return this.bind("result", e);
        },
        search: function(e) {
            return this.trigger("search", [ e ]);
        },
        flushCache: function() {
            return this.trigger("flushCache");
        },
        setOptions: function(e) {
            return this.trigger("setOptions", [ e ]);
        },
        unautocomplete: function() {
            return this.trigger("unautocomplete");
        }
    });
    e.Autocompleter = function(t, n) {
        function selectCurrent() {
            var r = c.selected();
            if (!r) return !1;
            var s = r.result;
            o = s;
            if (n.multiple) {
                var u = trimWords(i.val());
                if (u.length > 1) {
                    var a = n.multipleSeparator.length, f = e(t).selection().start, l, h = 0;
                    e.each(u, function(e, t) {
                        h += t.length;
                        if (f <= h) {
                            l = e;
                            return !1;
                        }
                        h += a;
                    });
                    u[l] = s;
                    s = u.join(n.multipleSeparator);
                }
                s += n.multipleSeparator;
            }
            i.val(s);
            hideResultsNow();
            i.trigger("result", [ r.data, r.value ]);
            return !0;
        }
        function onChange(e, t) {
            if (f == r.DEL) {
                c.hide();
                return;
            }
            var s = i.val();
            if (!t && s == o) return;
            o = s;
            s = lastWord(s);
            if (s.length >= n.minChars) {
                i.addClass(n.loadingClass);
                n.matchCase || (s = s.toLowerCase());
                request(s, receiveData, hideResultsNow);
            } else {
                stopLoading();
                c.hide();
            }
        }
        function trimWords(t) {
            return t ? n.multiple ? e.map(t.split(n.multipleSeparator), function(n) {
                return e.trim(t).length ? e.trim(n) : null;
            }) : [ e.trim(t) ] : [ "" ];
        }
        function lastWord(r) {
            if (!n.multiple) return r;
            var i = trimWords(r);
            if (i.length == 1) return i[0];
            var s = e(t).selection().start;
            s == r.length ? i = trimWords(r) : i = trimWords(r.replace(r.substring(s), ""));
            return i[i.length - 1];
        }
        function autoFill(s, u) {
            if (n.autoFill && lastWord(i.val()).toLowerCase() == s.toLowerCase() && f != r.BACKSPACE) {
                i.val(i.val() + u.substring(lastWord(o).length));
                e(t).selection(o.length, o.length + u.length);
            }
        }
        function hideResults() {
            clearTimeout(s);
            s = setTimeout(hideResultsNow, 200);
        }
        function hideResultsNow() {
            var e = c.visible();
            c.hide();
            clearTimeout(s);
            stopLoading();
            n.mustMatch && i.search(function(e) {
                if (!e) if (n.multiple) {
                    var t = trimWords(i.val()).slice(0, -1);
                    i.val(t.join(n.multipleSeparator) + (t.length ? n.multipleSeparator : ""));
                } else {
                    i.val("");
                    i.trigger("result", null);
                }
            });
        }
        function receiveData(e, t) {
            if (t && t.length && a) {
                stopLoading();
                c.display(t, e);
                autoFill(e, t[0].value);
                c.show();
            } else hideResultsNow();
        }
        function request(r, i, s) {
            n.matchCase || (r = r.toLowerCase());
            var o = u.load(r);
            if (o && o.length) i(r, o); else if (typeof n.url == "string" && n.url.length > 0) {
                var a = {
                    timestamp: +(new Date)
                };
                e.each(n.extraParams, function(e, t) {
                    a[e] = typeof t == "function" ? t() : t;
                });
                e.ajax({
                    mode: "abort",
                    port: "autocomplete" + t.name,
                    dataType: n.dataType,
                    url: n.url,
                    data: e.extend({
                        q: lastWord(r),
                        limit: n.max
                    }, a),
                    success: function(e) {
                        var t = n.parse && n.parse(e) || parse(e);
                        u.add(r, t);
                        i(r, t);
                    }
                });
            } else {
                c.emptyList();
                s(r);
            }
        }
        function parse(t) {
            var r = [], i = t.split("\n");
            for (var s = 0; s < i.length; s++) {
                var o = e.trim(i[s]);
                if (o) {
                    o = o.split("|");
                    r[r.length] = {
                        data: o,
                        value: o[0],
                        result: n.formatResult && n.formatResult(o, o[0]) || o[0]
                    };
                }
            }
            return r;
        }
        function stopLoading() {
            i.removeClass(n.loadingClass);
        }
        var r = {
            UP: 38,
            DOWN: 40,
            DEL: 46,
            TAB: 9,
            RETURN: 13,
            ESC: 27,
            COMMA: 188,
            PAGEUP: 33,
            PAGEDOWN: 34,
            BACKSPACE: 8
        }, i = e(t).attr("autocomplete", "off").addClass(n.inputClass), s, o = "", u = e.Autocompleter.Cache(n), a = 0, f, l = {
            mouseDownOnSelect: !1
        }, c = e.Autocompleter.Select(n, t, selectCurrent, l);
        i.bind((e.browser.opera ? "keypress" : "keydown") + ".autocomplete", function(t) {
            a = 1;
            f = t.keyCode;
            switch (t.keyCode) {
              case r.UP:
                t.preventDefault();
                c.visible() ? c.prev() : onChange(0, !0);
                break;
              case r.DOWN:
                t.preventDefault();
                c.visible() ? c.next() : onChange(0, !0);
                break;
              case r.PAGEUP:
                t.preventDefault();
                c.visible() ? c.pageUp() : onChange(0, !0);
                break;
              case r.PAGEDOWN:
                t.preventDefault();
                c.visible() ? c.pageDown() : onChange(0, !0);
                break;
              case n.multiple && e.trim(n.multipleSeparator) == "," && r.COMMA:
              case r.TAB:
              case r.RETURN:
                selectCurrent();
                break;
              case r.ESC:
                c.hide();
                break;
              default:
                clearTimeout(s);
                s = setTimeout(onChange, n.delay);
            }
        }).focus(function() {
            a++;
        }).blur(function() {
            a = 0;
            l.mouseDownOnSelect || hideResults();
        }).click(function() {
            a++ > 1 && !c.visible() && onChange(0, !0);
        }).bind("search", function() {
            function findValueCallback(e, n) {
                var r;
                if (n && n.length) for (var s = 0; s < n.length; s++) if (n[s].result.toLowerCase() == e.toLowerCase()) {
                    r = n[s];
                    break;
                }
                typeof t == "function" ? t(r) : i.trigger("result", r && [ r.data, r.value ]);
            }
            var t = arguments.length > 1 ? arguments[1] : null;
            e.each(trimWords(i.val()), function(e, t) {
                request(t, findValueCallback, findValueCallback);
            });
        }).bind("flushCache", function() {
            u.flush();
        }).bind("setOptions", function() {
            e.extend(n, arguments[1]);
            "data" in arguments[1] && u.populate();
        }).bind("unautocomplete", function() {
            c.unbind();
            i.unbind();
            e(t.form).unbind(".autocomplete");
        });
    };
    e.Autocompleter.defaults = {
        inputClass: "ac_input",
        resultsClass: "ac_results",
        loadingClass: "ac_loading",
        minChars: 1,
        delay: 400,
        matchCase: !1,
        matchSubset: !0,
        matchContains: !1,
        cacheLength: 10,
        max: 100,
        mustMatch: !1,
        extraParams: {},
        selectFirst: !0,
        formatItem: function(e) {
            return e[0];
        },
        formatMatch: null,
        autoFill: !1,
        width: 0,
        multiple: !1,
        multipleSeparator: ", ",
        highlight: function(e, t) {
            return e.replace(new RegExp("(?![^&;]+;)(?!<[^<>]*)(" + t.replace(/([\^\$\(\)\[\]\{\}\*\.\+\?\|\\])/gi, "\\$1") + ")(?![^<>]*>)(?![^&;]+;)", "gi"), "<strong>$1</strong>");
        },
        scroll: !0,
        scrollHeight: 180
    };
    e.Autocompleter.Cache = function(t) {
        function matchSubset(e, n) {
            t.matchCase || (e = e.toLowerCase());
            var r = e.indexOf(n);
            t.matchContains == "word" && (r = e.toLowerCase().search("\\b" + n.toLowerCase()));
            return r == -1 ? !1 : r == 0 || t.matchContains;
        }
        function add(e, i) {
            r > t.cacheLength && flush();
            n[e] || r++;
            n[e] = i;
        }
        function populate() {
            if (!t.data) return !1;
            var n = {}, r = 0;
            t.url || (t.cacheLength = 1);
            n[""] = [];
            for (var i = 0, s = t.data.length; i < s; i++) {
                var o = t.data[i];
                o = typeof o == "string" ? [ o ] : o;
                var u = t.formatMatch(o, i + 1, t.data.length);
                if (u === !1) continue;
                var a = u.charAt(0).toLowerCase();
                n[a] || (n[a] = []);
                var f = {
                    value: u,
                    data: o,
                    result: t.formatResult && t.formatResult(o) || u
                };
                n[a].push(f);
                r++ < t.max && n[""].push(f);
            }
            e.each(n, function(e, n) {
                t.cacheLength++;
                add(e, n);
            });
        }
        function flush() {
            n = {};
            r = 0;
        }
        var n = {}, r = 0;
        setTimeout(populate, 25);
        return {
            flush: flush,
            add: add,
            populate: populate,
            load: function(i) {
                if (!t.cacheLength || !r) return null;
                if (!t.url && t.matchContains) {
                    var s = [];
                    for (var o in n) if (o.length > 0) {
                        var u = n[o];
                        e.each(u, function(e, t) {
                            matchSubset(t.value, i) && s.push(t);
                        });
                    }
                    return s;
                }
                if (n[i]) return n[i];
                if (t.matchSubset) for (var a = i.length - 1; a >= t.minChars; a--) {
                    var u = n[i.substr(0, a)];
                    if (u) {
                        var s = [];
                        e.each(u, function(e, t) {
                            matchSubset(t.value, i) && (s[s.length] = t);
                        });
                        return s;
                    }
                }
                return null;
            }
        };
    };
    e.Autocompleter.Select = function(t, n, r, i) {
        function init() {
            if (!l) return;
            c = e("<div/>").hide().addClass(t.resultsClass).css("position", "absolute").appendTo(document.body);
            h = e("<ul/>").appendTo(c).mouseover(function(t) {
                if (target(t).nodeName && target(t).nodeName.toUpperCase() == "LI") {
                    u = e("li", h).removeClass(s.ACTIVE).index(target(t));
                    e(target(t)).addClass(s.ACTIVE);
                }
            }).click(function(t) {
                e(target(t)).addClass(s.ACTIVE);
                r();
                n.focus();
                return !1;
            }).mousedown(function() {
                i.mouseDownOnSelect = !0;
            }).mouseup(function() {
                i.mouseDownOnSelect = !1;
            });
            t.width > 0 && c.css("width", t.width);
            l = !1;
        }
        function target(e) {
            var t = e.target;
            while (t && t.tagName != "LI") t = t.parentNode;
            return t ? t : [];
        }
        function moveSelect(e) {
            o.slice(u, u + 1).removeClass(s.ACTIVE);
            movePosition(e);
            var n = o.slice(u, u + 1).addClass(s.ACTIVE);
            if (t.scroll) {
                var r = 0;
                o.slice(0, u).each(function() {
                    r += this.offsetHeight;
                });
                r + n[0].offsetHeight - h.scrollTop() > h[0].clientHeight ? h.scrollTop(r + n[0].offsetHeight - h.innerHeight()) : r < h.scrollTop() && h.scrollTop(r);
            }
        }
        function movePosition(e) {
            u += e;
            u < 0 ? u = o.size() - 1 : u >= o.size() && (u = 0);
        }
        function limitNumberOfItems(e) {
            return t.max && t.max < e ? t.max : e;
        }
        function fillList() {
            h.empty();
            var n = limitNumberOfItems(a.length);
            for (var r = 0; r < n; r++) {
                if (!a[r]) continue;
                var i = t.formatItem(a[r].data, r + 1, n, a[r].value, f);
                if (i === !1) continue;
                var l = e("<li/>").html(t.highlight(i, f)).addClass(r % 2 == 0 ? "ac_even" : "ac_odd").appendTo(h)[0];
                e.data(l, "ac_data", a[r]);
            }
            o = h.find("li");
            if (t.selectFirst) {
                o.slice(0, 1).addClass(s.ACTIVE);
                u = 0;
            }
            e.fn.bgiframe && h.bgiframe();
        }
        var s = {
            ACTIVE: "ac_over"
        }, o, u = -1, a, f = "", l = !0, c, h;
        return {
            display: function(e, t) {
                init();
                a = e;
                f = t;
                fillList();
            },
            next: function() {
                moveSelect(1);
            },
            prev: function() {
                moveSelect(-1);
            },
            pageUp: function() {
                u != 0 && u - 8 < 0 ? moveSelect(-u) : moveSelect(-8);
            },
            pageDown: function() {
                u != o.size() - 1 && u + 8 > o.size() ? moveSelect(o.size() - 1 - u) : moveSelect(8);
            },
            hide: function() {
                c && c.hide();
                o && o.removeClass(s.ACTIVE);
                u = -1;
            },
            visible: function() {
                return c && c.is(":visible");
            },
            current: function() {
                return this.visible() && (o.filter("." + s.ACTIVE)[0] || t.selectFirst && o[0]);
            },
            show: function() {
                var r = e(n).offset();
                c.css({
                    width: typeof t.width == "string" || t.width > 0 ? t.width : e(n).innerWidth(),
                    top: r.top + n.offsetHeight,
                    left: r.left
                }).show();
                t.show(c);
                if (t.scroll) {
                    h.scrollTop(0);
                    h.css({
                        maxHeight: t.scrollHeight,
                        overflow: "auto"
                    });
                    if (e.browser.msie && typeof document.body.style.maxHeight == "undefined") {
                        var i = 0;
                        o.each(function() {
                            i += this.offsetHeight;
                        });
                        var s = i > t.scrollHeight;
                        h.css("height", s ? t.scrollHeight : i);
                        s || o.width(h.width() - parseInt(o.css("padding-left")) - parseInt(o.css("padding-right")));
                    }
                }
            },
            selected: function() {
                var t = o && o.filter("." + s.ACTIVE).removeClass(s.ACTIVE);
                return t && t.length && e.data(t[0], "ac_data");
            },
            emptyList: function() {
                h && h.empty();
            },
            unbind: function() {
                c && c.remove();
            }
        };
    };
    e.fn.selection = function(e, t) {
        if (e !== undefined) return this.each(function() {
            if (this.createTextRange) {
                var n = this.createTextRange();
                if (t === undefined || e == t) {
                    n.move("character", e);
                    n.select();
                } else {
                    n.collapse(!0);
                    n.moveStart("character", e);
                    n.moveEnd("character", t);
                    n.select();
                }
            } else if (this.setSelectionRange) this.setSelectionRange(e, t); else if (this.selectionStart) {
                this.selectionStart = e;
                this.selectionEnd = t;
            }
        });
        var n = this[0];
        if (n.createTextRange) {
            var r = document.selection.createRange(), i = n.value, s = "<->", o = r.text.length;
            r.text = s;
            var u = n.value.indexOf(s);
            n.value = i;
            this.selection(u, u + o);
            return {
                start: u,
                end: u + o
            };
        }
        if (n.selectionStart !== undefined) return {
            start: n.selectionStart,
            end: n.selectionEnd
        };
    };
})(jQuery);

jQuery.fn.sortElements = function() {
    var e = [].sort;
    return function(t, n) {
        n = n || function() {
            return this;
        };
        var r = this.map(function() {
            var e = n.call(this), t = e.parentNode, r = t.insertBefore(document.createTextNode(""), e.nextSibling);
            return function() {
                if (t === this) throw new Error("You can't sort elements if any one is a descendant of another.");
                t.insertBefore(this, r);
                t.removeChild(r);
            };
        });
        return e.call(this, t).each(function(e) {
            r[e].call(n.call(this));
        });
    };
}();

$(function() {
    function setSplitterPosition(e) {
        t.width(e);
        n.css("margin-left", e + c);
        i.css("left", e);
    }
    function setNavigationPosition() {
        var e = r.width();
        r.toggleClass("medium", e <= 960).toggleClass("small", e <= 650);
    }
    var e = $(document), t = $("#left"), n = $("#right"), r = $("#rightInner"), i = $("#splitter"), s = $("#groups"), o = $("#content");
    $("ul span", s).click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).toggleClass("collapsed").parent().next("ul").toggleClass("collapsed");
    }).click();
    $active = $("ul li.active", s);
    if ($active.length > 0) $("> a > span", $active).click(); else {
        $main = $("> ul > li.main", s);
        $main.length > 0 ? $("> a > span", $main).click() : $("> ul > li > a > span", s).click();
    }
    var u = !1, a = {
        c: "class",
        co: "constant",
        f: "function",
        m: "class",
        mm: "class",
        p: "class",
        mp: "class",
        cc: "class"
    }, f = $("#search input[name=q]");
    f.autocomplete(ApiGen.elements, {
        matchContains: !0,
        scrollHeight: 200,
        max: 20,
        formatItem: function(e) {
            return e[1].replace(/^(.+\\)(.+)$/, "<span><small>$1</small>$2</span>");
        },
        formatMatch: function(e) {
            return e[1];
        },
        formatResult: function(e) {
            return e[1];
        },
        show: function(e) {
            var t = $("li span", e), n = Math.max.apply(null, t.map(function() {
                return $(this).width();
            }));
            e.width(Math.max(n + 10, f.innerWidth())).css("left", f.offset().left + f.outerWidth() - e.outerWidth());
        }
    }).result(function(e, t) {
        u = !0;
        var n = window.location.href.split("/");
        n.pop();
        var r = t[1].split(/::|$/), i = $.sprintf(ApiGen.config.templates.main[a[t[0]]].filename, r[0].replace(/[^\w]/g, "."));
        r[1] && (i += "#" + ("mm" === t[0] || "mp" === t[0] ? "m" : "") + r[1].replace(/([\w]+)\(\)/, "_$1"));
        n.push(i);
        window.location = n.join("/");
        $(this).closest("form").attr("action", n.join("/"));
    }).closest("form").submit(function() {
        var e = f.val();
        if ("" === e) return !1;
        var t = $("#search input[name=more]").val();
        !u && t && -1 === e.indexOf("more:") && f.val(e + " more:" + t);
        return !u && "" !== $("#search input[name=cx]").val();
    });
    $("table.summary tr[data-order]", o).each(function(e) {
        do e = "0" + e; while (e.length < 3);
        $(this).attr("data-order-natural", e);
    });
    var l = $("table.summary", o).filter(":has(tr[data-order])").find("caption");
    l.click(function() {
        var e = $(this), t = e.data("order") || "natural";
        t = "natural" === t ? "alphabetical" : "natural";
        e.data("order", t);
        $.cookie("order", t, {
            expires: 365
        });
        var n = "alphabetical" === t ? "data-order" : "data-order-natural";
        e.closest("table").find("tr").sortElements(function(e, t) {
            return $(e).attr(n) > $(t).attr(n) ? 1 : -1;
        });
        return !1;
    }).addClass("switchable").attr("title", "Switch between natural and alphabetical order");
    (null === $.cookie("order") && "alphabetical" === ApiGen.config.options.elementsOrder || "alphabetical" === $.cookie("order")) && l.click();
    ApiGen.config.options.elementDetailsCollapsed && $("tr", o).filter(":has(.detailed)").click(function() {
        var e = $(this);
        $(".short", e).hide();
        $(".detailed", e).show();
    });
    var c = i.width();
    i.mousedown(function() {
        i.addClass("active");
        e.mousemove(function(t) {
            if (t.pageX >= 230 && e.width() - t.pageX >= 600 + c) {
                setSplitterPosition(t.pageX);
                setNavigationPosition();
            }
        });
        $().add(i).add(e).mouseup(function() {
            i.removeClass("active").unbind("mouseup");
            e.unbind("mousemove").unbind("mouseup");
            $.cookie("splitter", parseInt(i.css("left")), {
                expires: 365
            });
        });
        return !1;
    });
    var h = $.cookie("splitter");
    null !== h && setSplitterPosition(parseInt(h));
    setNavigationPosition();
    $(window).resize(setNavigationPosition);
    var p = window.location.hash.substr(1).match(/^\d+(?:-\d+)?(?:,\d+(?:-\d+)?)*$/);
    if (null !== p) {
        var d = p[0].split(",");
        for (var v = 0; v < d.length; v++) {
            var m = d[v].split("-");
            m[1] = m[1] || m[0];
            for (var g = m[0]; g <= m[1]; g++) $("#" + g).addClass("selected");
        }
        var y = $("#" + parseInt(p[0]));
        y.length > 0 && n.scrollTop(y.offset().top);
    }
    var b;
    $("a.l").click(function(e) {
        e.preventDefault();
        var t = $(this).parent(), n = parseInt(t.attr("id"));
        if (e.shiftKey) if (b) for (var r = Math.min(n, b); r <= Math.max(n, b); r++) $("#" + r).addClass("selected"); else t.addClass("selected"); else if (e.ctrlKey) t.toggleClass("selected"); else {
            var i = $(".l.selected").not(t).removeClass("selected");
            i.length > 0 ? t.addClass("selected") : t.toggleClass("selected");
        }
        b = t.hasClass("selected") ? n : null;
        var s = $(".l.selected").map(function() {
            return parseInt($(this).attr("id"));
        }).get().sort(function(e, t) {
            return e - t;
        }), o = [], u = [];
        for (var a = 0; a < s.length; a++) if (0 === a && a + 1 === s.length) o.push(s[a]); else if (0 === a) u[0] = s[a]; else if (s[a - 1] + 1 !== s[a] && a + 1 === s.length) {
            o.push(u.join("-"));
            o.push(s[a]);
        } else if (s[a - 1] + 1 !== s[a]) {
            o.push(u.join("-"));
            u = [ s[a] ];
        } else if (a + 1 === s.length) {
            u[1] = s[a];
            o.push(u.join("-"));
        } else u[1] = s[a];
        window.location.hash = o.join(",");
    });
});