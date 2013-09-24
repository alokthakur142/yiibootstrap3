/**
 * User: Pascal Brewing
 * E-Mail: pascalbrewing@gmail.com
 * Date: 24.09.13
 * Time: 21:14
 *//* **********************************************
     Begin bootstrap.js
********************************************** *//**
* bootstrap.js v3.0.0 by @fat and @mdo
* Copyright 2013 Twitter Inc.
* http://www.apache.org/licenses/LICENSE-2.0
*/if (!jQuery) throw new Error("Bootstrap requires jQuery");

+function(e) {
    "use strict";
    function transitionEnd() {
        var e = document.createElement("bootstrap"), t = {
            WebkitTransition: "webkitTransitionEnd",
            MozTransition: "transitionend",
            OTransition: "oTransitionEnd otransitionend",
            transition: "transitionend"
        };
        for (var n in t) if (e.style[n] !== undefined) return {
            end: t[n]
        };
    }
    e.fn.emulateTransitionEnd = function(t) {
        var n = !1, r = this;
        e(this).one(e.support.transition.end, function() {
            n = !0;
        });
        var i = function() {
            n || e(r).trigger(e.support.transition.end);
        };
        setTimeout(i, t);
        return this;
    };
    e(function() {
        e.support.transition = transitionEnd();
    });
}(window.jQuery);

+function(e) {
    "use strict";
    var t = '[data-dismiss="alert"]', n = function(n) {
        e(n).on("click", t, this.close);
    };
    n.prototype.close = function(t) {
        function removeElement() {
            i.trigger("closed.bs.alert").remove();
        }
        var n = e(this), r = n.attr("data-target");
        if (!r) {
            r = n.attr("href");
            r = r && r.replace(/.*(?=#[^\s]*$)/, "");
        }
        var i = e(r);
        t && t.preventDefault();
        i.length || (i = n.hasClass("alert") ? n : n.parent());
        i.trigger(t = e.Event("close.bs.alert"));
        if (t.isDefaultPrevented()) return;
        i.removeClass("in");
        e.support.transition && i.hasClass("fade") ? i.one(e.support.transition.end, removeElement).emulateTransitionEnd(150) : removeElement();
    };
    var r = e.fn.alert;
    e.fn.alert = function(t) {
        return this.each(function() {
            var r = e(this), i = r.data("bs.alert");
            i || r.data("bs.alert", i = new n(this));
            typeof t == "string" && i[t].call(r);
        });
    };
    e.fn.alert.Constructor = n;
    e.fn.alert.noConflict = function() {
        e.fn.alert = r;
        return this;
    };
    e(document).on("click.bs.alert.data-api", t, n.prototype.close);
}(window.jQuery);

+function(e) {
    "use strict";
    var t = function(n, r) {
        this.$element = e(n);
        this.options = e.extend({}, t.DEFAULTS, r);
    };
    t.DEFAULTS = {
        loadingText: "loading..."
    };
    t.prototype.setState = function(e) {
        var t = "disabled", n = this.$element, r = n.is("input") ? "val" : "html", i = n.data();
        e += "Text";
        i.resetText || n.data("resetText", n[r]());
        n[r](i[e] || this.options[e]);
        setTimeout(function() {
            e == "loadingText" ? n.addClass(t).attr(t, t) : n.removeClass(t).removeAttr(t);
        }, 0);
    };
    t.prototype.toggle = function() {
        var e = this.$element.closest('[data-toggle="buttons"]');
        if (e.length) {
            var t = this.$element.find("input").prop("checked", !this.$element.hasClass("active")).trigger("change");
            t.prop("type") === "radio" && e.find(".active").removeClass("active");
        }
        this.$element.toggleClass("active");
    };
    var n = e.fn.button;
    e.fn.button = function(n) {
        return this.each(function() {
            var r = e(this), i = r.data("bs.button"), s = typeof n == "object" && n;
            i || r.data("bs.button", i = new t(this, s));
            n == "toggle" ? i.toggle() : n && i.setState(n);
        });
    };
    e.fn.button.Constructor = t;
    e.fn.button.noConflict = function() {
        e.fn.button = n;
        return this;
    };
    e(document).on("click.bs.button.data-api", "[data-toggle^=button]", function(t) {
        var n = e(t.target);
        n.hasClass("btn") || (n = n.closest(".btn"));
        n.button("toggle");
        t.preventDefault();
    });
}(window.jQuery);

+function(e) {
    "use strict";
    var t = function(t, n) {
        this.$element = e(t);
        this.$indicators = this.$element.find(".carousel-indicators");
        this.options = n;
        this.paused = this.sliding = this.interval = this.$active = this.$items = null;
        this.options.pause == "hover" && this.$element.on("mouseenter", e.proxy(this.pause, this)).on("mouseleave", e.proxy(this.cycle, this));
    };
    t.DEFAULTS = {
        interval: 5e3,
        pause: "hover",
        wrap: !0
    };
    t.prototype.cycle = function(t) {
        t || (this.paused = !1);
        this.interval && clearInterval(this.interval);
        this.options.interval && !this.paused && (this.interval = setInterval(e.proxy(this.next, this), this.options.interval));
        return this;
    };
    t.prototype.getActiveIndex = function() {
        this.$active = this.$element.find(".item.active");
        this.$items = this.$active.parent().children();
        return this.$items.index(this.$active);
    };
    t.prototype.to = function(t) {
        var n = this, r = this.getActiveIndex();
        if (t > this.$items.length - 1 || t < 0) return;
        return this.sliding ? this.$element.one("slid", function() {
            n.to(t);
        }) : r == t ? this.pause().cycle() : this.slide(t > r ? "next" : "prev", e(this.$items[t]));
    };
    t.prototype.pause = function(t) {
        t || (this.paused = !0);
        if (this.$element.find(".next, .prev").length && e.support.transition.end) {
            this.$element.trigger(e.support.transition.end);
            this.cycle(!0);
        }
        this.interval = clearInterval(this.interval);
        return this;
    };
    t.prototype.next = function() {
        if (this.sliding) return;
        return this.slide("next");
    };
    t.prototype.prev = function() {
        if (this.sliding) return;
        return this.slide("prev");
    };
    t.prototype.slide = function(t, n) {
        var r = this.$element.find(".item.active"), i = n || r[t](), s = this.interval, o = t == "next" ? "left" : "right", u = t == "next" ? "first" : "last", a = this;
        if (!i.length) {
            if (!this.options.wrap) return;
            i = this.$element.find(".item")[u]();
        }
        this.sliding = !0;
        s && this.pause();
        var f = e.Event("slide.bs.carousel", {
            relatedTarget: i[0],
            direction: o
        });
        if (i.hasClass("active")) return;
        if (this.$indicators.length) {
            this.$indicators.find(".active").removeClass("active");
            this.$element.one("slid", function() {
                var t = e(a.$indicators.children()[a.getActiveIndex()]);
                t && t.addClass("active");
            });
        }
        if (e.support.transition && this.$element.hasClass("slide")) {
            this.$element.trigger(f);
            if (f.isDefaultPrevented()) return;
            i.addClass(t);
            i[0].offsetWidth;
            r.addClass(o);
            i.addClass(o);
            r.one(e.support.transition.end, function() {
                i.removeClass([ t, o ].join(" ")).addClass("active");
                r.removeClass([ "active", o ].join(" "));
                a.sliding = !1;
                setTimeout(function() {
                    a.$element.trigger("slid");
                }, 0);
            }).emulateTransitionEnd(600);
        } else {
            this.$element.trigger(f);
            if (f.isDefaultPrevented()) return;
            r.removeClass("active");
            i.addClass("active");
            this.sliding = !1;
            this.$element.trigger("slid");
        }
        s && this.cycle();
        return this;
    };
    var n = e.fn.carousel;
    e.fn.carousel = function(n) {
        return this.each(function() {
            var r = e(this), i = r.data("bs.carousel"), s = e.extend({}, t.DEFAULTS, r.data(), typeof n == "object" && n), o = typeof n == "string" ? n : s.slide;
            i || r.data("bs.carousel", i = new t(this, s));
            typeof n == "number" ? i.to(n) : o ? i[o]() : s.interval && i.pause().cycle();
        });
    };
    e.fn.carousel.Constructor = t;
    e.fn.carousel.noConflict = function() {
        e.fn.carousel = n;
        return this;
    };
    e(document).on("click.bs.carousel.data-api", "[data-slide], [data-slide-to]", function(t) {
        var n = e(this), r, i = e(n.attr("data-target") || (r = n.attr("href")) && r.replace(/.*(?=#[^\s]+$)/, "")), s = e.extend({}, i.data(), n.data()), o = n.attr("data-slide-to");
        o && (s.interval = !1);
        i.carousel(s);
        (o = n.attr("data-slide-to")) && i.data("bs.carousel").to(o);
        t.preventDefault();
    });
    e(window).on("load", function() {
        e('[data-ride="carousel"]').each(function() {
            var t = e(this);
            t.carousel(t.data());
        });
    });
}(window.jQuery);

+function(e) {
    "use strict";
    var t = function(n, r) {
        this.$element = e(n);
        this.options = e.extend({}, t.DEFAULTS, r);
        this.transitioning = null;
        this.options.parent && (this.$parent = e(this.options.parent));
        this.options.toggle && this.toggle();
    };
    t.DEFAULTS = {
        toggle: !0
    };
    t.prototype.dimension = function() {
        var e = this.$element.hasClass("width");
        return e ? "width" : "height";
    };
    t.prototype.show = function() {
        if (this.transitioning || this.$element.hasClass("in")) return;
        var t = e.Event("show.bs.collapse");
        this.$element.trigger(t);
        if (t.isDefaultPrevented()) return;
        var n = this.$parent && this.$parent.find("> .panel > .in");
        if (n && n.length) {
            var r = n.data("bs.collapse");
            if (r && r.transitioning) return;
            n.collapse("hide");
            r || n.data("bs.collapse", null);
        }
        var i = this.dimension();
        this.$element.removeClass("collapse").addClass("collapsing")[i](0);
        this.transitioning = 1;
        var s = function() {
            this.$element.removeClass("collapsing").addClass("in")[i]("auto");
            this.transitioning = 0;
            this.$element.trigger("shown.bs.collapse");
        };
        if (!e.support.transition) return s.call(this);
        var o = e.camelCase([ "scroll", i ].join("-"));
        this.$element.one(e.support.transition.end, e.proxy(s, this)).emulateTransitionEnd(350)[i](this.$element[0][o]);
    };
    t.prototype.hide = function() {
        if (this.transitioning || !this.$element.hasClass("in")) return;
        var t = e.Event("hide.bs.collapse");
        this.$element.trigger(t);
        if (t.isDefaultPrevented()) return;
        var n = this.dimension();
        this.$element[n](this.$element[n]())[0].offsetHeight;
        this.$element.addClass("collapsing").removeClass("collapse").removeClass("in");
        this.transitioning = 1;
        var r = function() {
            this.transitioning = 0;
            this.$element.trigger("hidden.bs.collapse").removeClass("collapsing").addClass("collapse");
        };
        if (!e.support.transition) return r.call(this);
        this.$element[n](0).one(e.support.transition.end, e.proxy(r, this)).emulateTransitionEnd(350);
    };
    t.prototype.toggle = function() {
        this[this.$element.hasClass("in") ? "hide" : "show"]();
    };
    var n = e.fn.collapse;
    e.fn.collapse = function(n) {
        return this.each(function() {
            var r = e(this), i = r.data("bs.collapse"), s = e.extend({}, t.DEFAULTS, r.data(), typeof n == "object" && n);
            i || r.data("bs.collapse", i = new t(this, s));
            typeof n == "string" && i[n]();
        });
    };
    e.fn.collapse.Constructor = t;
    e.fn.collapse.noConflict = function() {
        e.fn.collapse = n;
        return this;
    };
    e(document).on("click.bs.collapse.data-api", "[data-toggle=collapse]", function(t) {
        var n = e(this), r, i = n.attr("data-target") || t.preventDefault() || (r = n.attr("href")) && r.replace(/.*(?=#[^\s]+$)/, ""), s = e(i), o = s.data("bs.collapse"), u = o ? "toggle" : n.data(), a = n.attr("data-parent"), f = a && e(a);
        if (!o || !o.transitioning) {
            f && f.find('[data-toggle=collapse][data-parent="' + a + '"]').not(n).addClass("collapsed");
            n[s.hasClass("in") ? "addClass" : "removeClass"]("collapsed");
        }
        s.collapse(u);
    });
}(window.jQuery);

+function(e) {
    "use strict";
    function clearMenus() {
        e(t).remove();
        e(n).each(function(t) {
            var n = getParent(e(this));
            if (!n.hasClass("open")) return;
            n.trigger(t = e.Event("hide.bs.dropdown"));
            if (t.isDefaultPrevented()) return;
            n.removeClass("open").trigger("hidden.bs.dropdown");
        });
    }
    function getParent(t) {
        var n = t.attr("data-target");
        if (!n) {
            n = t.attr("href");
            n = n && /#/.test(n) && n.replace(/.*(?=#[^\s]*$)/, "");
        }
        var r = n && e(n);
        return r && r.length ? r : t.parent();
    }
    var t = ".dropdown-backdrop", n = "[data-toggle=dropdown]", r = function(t) {
        var n = e(t).on("click.bs.dropdown", this.toggle);
    };
    r.prototype.toggle = function(t) {
        var n = e(this);
        if (n.is(".disabled, :disabled")) return;
        var r = getParent(n), i = r.hasClass("open");
        clearMenus();
        if (!i) {
            "ontouchstart" in document.documentElement && !r.closest(".navbar-nav").length && e('<div class="dropdown-backdrop"/>').insertAfter(e(this)).on("click", clearMenus);
            r.trigger(t = e.Event("show.bs.dropdown"));
            if (t.isDefaultPrevented()) return;
            r.toggleClass("open").trigger("shown.bs.dropdown");
            n.focus();
        }
        return !1;
    };
    r.prototype.keydown = function(t) {
        if (!/(38|40|27)/.test(t.keyCode)) return;
        var r = e(this);
        t.preventDefault();
        t.stopPropagation();
        if (r.is(".disabled, :disabled")) return;
        var i = getParent(r), s = i.hasClass("open");
        if (!s || s && t.keyCode == 27) {
            t.which == 27 && i.find(n).focus();
            return r.click();
        }
        var o = e("[role=menu] li:not(.divider):visible a", i);
        if (!o.length) return;
        var u = o.index(o.filter(":focus"));
        t.keyCode == 38 && u > 0 && u--;
        t.keyCode == 40 && u < o.length - 1 && u++;
        ~u || (u = 0);
        o.eq(u).focus();
    };
    var i = e.fn.dropdown;
    e.fn.dropdown = function(t) {
        return this.each(function() {
            var n = e(this), i = n.data("dropdown");
            i || n.data("dropdown", i = new r(this));
            typeof t == "string" && i[t].call(n);
        });
    };
    e.fn.dropdown.Constructor = r;
    e.fn.dropdown.noConflict = function() {
        e.fn.dropdown = i;
        return this;
    };
    e(document).on("click.bs.dropdown.data-api", clearMenus).on("click.bs.dropdown.data-api", ".dropdown form", function(e) {
        e.stopPropagation();
    }).on("click.bs.dropdown.data-api", n, r.prototype.toggle).on("keydown.bs.dropdown.data-api", n + ", [role=menu]", r.prototype.keydown);
}(window.jQuery);

+function(e) {
    "use strict";
    var t = function(t, n) {
        this.options = n;
        this.$element = e(t);
        this.$backdrop = this.isShown = null;
        this.options.remote && this.$element.load(this.options.remote);
    };
    t.DEFAULTS = {
        backdrop: !0,
        keyboard: !0,
        show: !0
    };
    t.prototype.toggle = function(e) {
        return this[this.isShown ? "hide" : "show"](e);
    };
    t.prototype.show = function(t) {
        var n = this, r = e.Event("show.bs.modal", {
            relatedTarget: t
        });
        this.$element.trigger(r);
        if (this.isShown || r.isDefaultPrevented()) return;
        this.isShown = !0;
        this.escape();
        this.$element.on("click.dismiss.modal", '[data-dismiss="modal"]', e.proxy(this.hide, this));
        this.backdrop(function() {
            var r = e.support.transition && n.$element.hasClass("fade");
            n.$element.parent().length || n.$element.appendTo(document.body);
            n.$element.show();
            r && n.$element[0].offsetWidth;
            n.$element.addClass("in").attr("aria-hidden", !1);
            n.enforceFocus();
            var i = e.Event("shown.bs.modal", {
                relatedTarget: t
            });
            r ? n.$element.find(".modal-dialog").one(e.support.transition.end, function() {
                n.$element.focus().trigger(i);
            }).emulateTransitionEnd(300) : n.$element.focus().trigger(i);
        });
    };
    t.prototype.hide = function(t) {
        t && t.preventDefault();
        t = e.Event("hide.bs.modal");
        this.$element.trigger(t);
        if (!this.isShown || t.isDefaultPrevented()) return;
        this.isShown = !1;
        this.escape();
        e(document).off("focusin.bs.modal");
        this.$element.removeClass("in").attr("aria-hidden", !0).off("click.dismiss.modal");
        e.support.transition && this.$element.hasClass("fade") ? this.$element.one(e.support.transition.end, e.proxy(this.hideModal, this)).emulateTransitionEnd(300) : this.hideModal();
    };
    t.prototype.enforceFocus = function() {
        e(document).off("focusin.bs.modal").on("focusin.bs.modal", e.proxy(function(e) {
            this.$element[0] !== e.target && !this.$element.has(e.target).length && this.$element.focus();
        }, this));
    };
    t.prototype.escape = function() {
        this.isShown && this.options.keyboard ? this.$element.on("keyup.dismiss.bs.modal", e.proxy(function(e) {
            e.which == 27 && this.hide();
        }, this)) : this.isShown || this.$element.off("keyup.dismiss.bs.modal");
    };
    t.prototype.hideModal = function() {
        var e = this;
        this.$element.hide();
        this.backdrop(function() {
            e.removeBackdrop();
            e.$element.trigger("hidden.bs.modal");
        });
    };
    t.prototype.removeBackdrop = function() {
        this.$backdrop && this.$backdrop.remove();
        this.$backdrop = null;
    };
    t.prototype.backdrop = function(t) {
        var n = this, r = this.$element.hasClass("fade") ? "fade" : "";
        if (this.isShown && this.options.backdrop) {
            var i = e.support.transition && r;
            this.$backdrop = e('<div class="modal-backdrop ' + r + '" />').appendTo(document.body);
            this.$element.on("click.dismiss.modal", e.proxy(function(e) {
                if (e.target !== e.currentTarget) return;
                this.options.backdrop == "static" ? this.$element[0].focus.call(this.$element[0]) : this.hide.call(this);
            }, this));
            i && this.$backdrop[0].offsetWidth;
            this.$backdrop.addClass("in");
            if (!t) return;
            i ? this.$backdrop.one(e.support.transition.end, t).emulateTransitionEnd(150) : t();
        } else if (!this.isShown && this.$backdrop) {
            this.$backdrop.removeClass("in");
            e.support.transition && this.$element.hasClass("fade") ? this.$backdrop.one(e.support.transition.end, t).emulateTransitionEnd(150) : t();
        } else t && t();
    };
    var n = e.fn.modal;
    e.fn.modal = function(n, r) {
        return this.each(function() {
            var i = e(this), s = i.data("bs.modal"), o = e.extend({}, t.DEFAULTS, i.data(), typeof n == "object" && n);
            s || i.data("bs.modal", s = new t(this, o));
            typeof n == "string" ? s[n](r) : o.show && s.show(r);
        });
    };
    e.fn.modal.Constructor = t;
    e.fn.modal.noConflict = function() {
        e.fn.modal = n;
        return this;
    };
    e(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', function(t) {
        var n = e(this), r = n.attr("href"), i = e(n.attr("data-target") || r && r.replace(/.*(?=#[^\s]+$)/, "")), s = i.data("modal") ? "toggle" : e.extend({
            remote: !/#/.test(r) && r
        }, i.data(), n.data());
        t.preventDefault();
        i.modal(s, this).one("hide", function() {
            n.is(":visible") && n.focus();
        });
    });
    e(document).on("show.bs.modal", ".modal", function() {
        e(document.body).addClass("modal-open");
    }).on("hidden.bs.modal", ".modal", function() {
        e(document.body).removeClass("modal-open");
    });
}(window.jQuery);

+function(e) {
    "use strict";
    var t = function(e, t) {
        this.type = this.options = this.enabled = this.timeout = this.hoverState = this.$element = null;
        this.init("tooltip", e, t);
    };
    t.DEFAULTS = {
        animation: !0,
        placement: "top",
        selector: !1,
        template: '<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
        trigger: "hover focus",
        title: "",
        delay: 0,
        html: !1,
        container: !1
    };
    t.prototype.init = function(t, n, r) {
        this.enabled = !0;
        this.type = t;
        this.$element = e(n);
        this.options = this.getOptions(r);
        var i = this.options.trigger.split(" ");
        for (var s = i.length; s--; ) {
            var o = i[s];
            if (o == "click") this.$element.on("click." + this.type, this.options.selector, e.proxy(this.toggle, this)); else if (o != "manual") {
                var u = o == "hover" ? "mouseenter" : "focus", a = o == "hover" ? "mouseleave" : "blur";
                this.$element.on(u + "." + this.type, this.options.selector, e.proxy(this.enter, this));
                this.$element.on(a + "." + this.type, this.options.selector, e.proxy(this.leave, this));
            }
        }
        this.options.selector ? this._options = e.extend({}, this.options, {
            trigger: "manual",
            selector: ""
        }) : this.fixTitle();
    };
    t.prototype.getDefaults = function() {
        return t.DEFAULTS;
    };
    t.prototype.getOptions = function(t) {
        t = e.extend({}, this.getDefaults(), this.$element.data(), t);
        t.delay && typeof t.delay == "number" && (t.delay = {
            show: t.delay,
            hide: t.delay
        });
        return t;
    };
    t.prototype.getDelegateOptions = function() {
        var t = {}, n = this.getDefaults();
        this._options && e.each(this._options, function(e, r) {
            n[e] != r && (t[e] = r);
        });
        return t;
    };
    t.prototype.enter = function(t) {
        var n = t instanceof this.constructor ? t : e(t.currentTarget)[this.type](this.getDelegateOptions()).data("bs." + this.type);
        clearTimeout(n.timeout);
        n.hoverState = "in";
        if (!n.options.delay || !n.options.delay.show) return n.show();
        n.timeout = setTimeout(function() {
            n.hoverState == "in" && n.show();
        }, n.options.delay.show);
    };
    t.prototype.leave = function(t) {
        var n = t instanceof this.constructor ? t : e(t.currentTarget)[this.type](this.getDelegateOptions()).data("bs." + this.type);
        clearTimeout(n.timeout);
        n.hoverState = "out";
        if (!n.options.delay || !n.options.delay.hide) return n.hide();
        n.timeout = setTimeout(function() {
            n.hoverState == "out" && n.hide();
        }, n.options.delay.hide);
    };
    t.prototype.show = function() {
        var t = e.Event("show.bs." + this.type);
        if (this.hasContent() && this.enabled) {
            this.$element.trigger(t);
            if (t.isDefaultPrevented()) return;
            var n = this.tip();
            this.setContent();
            this.options.animation && n.addClass("fade");
            var r = typeof this.options.placement == "function" ? this.options.placement.call(this, n[0], this.$element[0]) : this.options.placement, i = /\s?auto?\s?/i, s = i.test(r);
            s && (r = r.replace(i, "") || "top");
            n.detach().css({
                top: 0,
                left: 0,
                display: "block"
            }).addClass(r);
            this.options.container ? n.appendTo(this.options.container) : n.insertAfter(this.$element);
            var o = this.getPosition(), u = n[0].offsetWidth, a = n[0].offsetHeight;
            if (s) {
                var f = this.$element.parent(), l = r, c = document.documentElement.scrollTop || document.body.scrollTop, h = this.options.container == "body" ? window.innerWidth : f.outerWidth(), p = this.options.container == "body" ? window.innerHeight : f.outerHeight(), d = this.options.container == "body" ? 0 : f.offset().left;
                r = r == "bottom" && o.top + o.height + a - c > p ? "top" : r == "top" && o.top - c - a < 0 ? "bottom" : r == "right" && o.right + u > h ? "left" : r == "left" && o.left - u < d ? "right" : r;
                n.removeClass(l).addClass(r);
            }
            var v = this.getCalculatedOffset(r, o, u, a);
            this.applyPlacement(v, r);
            this.$element.trigger("shown.bs." + this.type);
        }
    };
    t.prototype.applyPlacement = function(e, t) {
        var n, r = this.tip(), i = r[0].offsetWidth, s = r[0].offsetHeight, o = parseInt(r.css("margin-top"), 10), u = parseInt(r.css("margin-left"), 10);
        isNaN(o) && (o = 0);
        isNaN(u) && (u = 0);
        e.top = e.top + o;
        e.left = e.left + u;
        r.offset(e).addClass("in");
        var a = r[0].offsetWidth, f = r[0].offsetHeight;
        if (t == "top" && f != s) {
            n = !0;
            e.top = e.top + s - f;
        }
        if (/bottom|top/.test(t)) {
            var l = 0;
            if (e.left < 0) {
                l = e.left * -2;
                e.left = 0;
                r.offset(e);
                a = r[0].offsetWidth;
                f = r[0].offsetHeight;
            }
            this.replaceArrow(l - i + a, a, "left");
        } else this.replaceArrow(f - s, f, "top");
        n && r.offset(e);
    };
    t.prototype.replaceArrow = function(e, t, n) {
        this.arrow().css(n, e ? 50 * (1 - e / t) + "%" : "");
    };
    t.prototype.setContent = function() {
        var e = this.tip(), t = this.getTitle();
        e.find(".tooltip-inner")[this.options.html ? "html" : "text"](t);
        e.removeClass("fade in top bottom left right");
    };
    t.prototype.hide = function() {
        function complete() {
            t.hoverState != "in" && n.detach();
        }
        var t = this, n = this.tip(), r = e.Event("hide.bs." + this.type);
        this.$element.trigger(r);
        if (r.isDefaultPrevented()) return;
        n.removeClass("in");
        e.support.transition && this.$tip.hasClass("fade") ? n.one(e.support.transition.end, complete).emulateTransitionEnd(150) : complete();
        this.$element.trigger("hidden.bs." + this.type);
        return this;
    };
    t.prototype.fixTitle = function() {
        var e = this.$element;
        (e.attr("title") || typeof e.attr("data-original-title") != "string") && e.attr("data-original-title", e.attr("title") || "").attr("title", "");
    };
    t.prototype.hasContent = function() {
        return this.getTitle();
    };
    t.prototype.getPosition = function() {
        var t = this.$element[0];
        return e.extend({}, typeof t.getBoundingClientRect == "function" ? t.getBoundingClientRect() : {
            width: t.offsetWidth,
            height: t.offsetHeight
        }, this.$element.offset());
    };
    t.prototype.getCalculatedOffset = function(e, t, n, r) {
        return e == "bottom" ? {
            top: t.top + t.height,
            left: t.left + t.width / 2 - n / 2
        } : e == "top" ? {
            top: t.top - r,
            left: t.left + t.width / 2 - n / 2
        } : e == "left" ? {
            top: t.top + t.height / 2 - r / 2,
            left: t.left - n
        } : {
            top: t.top + t.height / 2 - r / 2,
            left: t.left + t.width
        };
    };
    t.prototype.getTitle = function() {
        var e, t = this.$element, n = this.options;
        e = t.attr("data-original-title") || (typeof n.title == "function" ? n.title.call(t[0]) : n.title);
        return e;
    };
    t.prototype.tip = function() {
        return this.$tip = this.$tip || e(this.options.template);
    };
    t.prototype.arrow = function() {
        return this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow");
    };
    t.prototype.validate = function() {
        if (!this.$element[0].parentNode) {
            this.hide();
            this.$element = null;
            this.options = null;
        }
    };
    t.prototype.enable = function() {
        this.enabled = !0;
    };
    t.prototype.disable = function() {
        this.enabled = !1;
    };
    t.prototype.toggleEnabled = function() {
        this.enabled = !this.enabled;
    };
    t.prototype.toggle = function(t) {
        var n = t ? e(t.currentTarget)[this.type](this.getDelegateOptions()).data("bs." + this.type) : this;
        n.tip().hasClass("in") ? n.leave(n) : n.enter(n);
    };
    t.prototype.destroy = function() {
        this.hide().$element.off("." + this.type).removeData("bs." + this.type);
    };
    var n = e.fn.tooltip;
    e.fn.tooltip = function(n) {
        return this.each(function() {
            var r = e(this), i = r.data("bs.tooltip"), s = typeof n == "object" && n;
            i || r.data("bs.tooltip", i = new t(this, s));
            typeof n == "string" && i[n]();
        });
    };
    e.fn.tooltip.Constructor = t;
    e.fn.tooltip.noConflict = function() {
        e.fn.tooltip = n;
        return this;
    };
}(window.jQuery);

+function(e) {
    "use strict";
    var t = function(e, t) {
        this.init("popover", e, t);
    };
    if (!e.fn.tooltip) throw new Error("Popover requires tooltip.js");
    t.DEFAULTS = e.extend({}, e.fn.tooltip.Constructor.DEFAULTS, {
        placement: "right",
        trigger: "click",
        content: "",
        template: '<div class="popover"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
    });
    t.prototype = e.extend({}, e.fn.tooltip.Constructor.prototype);
    t.prototype.constructor = t;
    t.prototype.getDefaults = function() {
        return t.DEFAULTS;
    };
    t.prototype.setContent = function() {
        var e = this.tip(), t = this.getTitle(), n = this.getContent();
        e.find(".popover-title")[this.options.html ? "html" : "text"](t);
        e.find(".popover-content")[this.options.html ? "html" : "text"](n);
        e.removeClass("fade top bottom left right in");
        e.find(".popover-title").html() || e.find(".popover-title").hide();
    };
    t.prototype.hasContent = function() {
        return this.getTitle() || this.getContent();
    };
    t.prototype.getContent = function() {
        var e = this.$element, t = this.options;
        return e.attr("data-content") || (typeof t.content == "function" ? t.content.call(e[0]) : t.content);
    };
    t.prototype.arrow = function() {
        return this.$arrow = this.$arrow || this.tip().find(".arrow");
    };
    t.prototype.tip = function() {
        this.$tip || (this.$tip = e(this.options.template));
        return this.$tip;
    };
    var n = e.fn.popover;
    e.fn.popover = function(n) {
        return this.each(function() {
            var r = e(this), i = r.data("bs.popover"), s = typeof n == "object" && n;
            i || r.data("bs.popover", i = new t(this, s));
            typeof n == "string" && i[n]();
        });
    };
    e.fn.popover.Constructor = t;
    e.fn.popover.noConflict = function() {
        e.fn.popover = n;
        return this;
    };
}(window.jQuery);

+function(e) {
    "use strict";
    function ScrollSpy(t, n) {
        var r, i = e.proxy(this.process, this);
        this.$element = e(t).is("body") ? e(window) : e(t);
        this.$body = e("body");
        this.$scrollElement = this.$element.on("scroll.bs.scroll-spy.data-api", i);
        this.options = e.extend({}, ScrollSpy.DEFAULTS, n);
        this.selector = (this.options.target || (r = e(t).attr("href")) && r.replace(/.*(?=#[^\s]+$)/, "") || "") + " .nav li > a";
        this.offsets = e([]);
        this.targets = e([]);
        this.activeTarget = null;
        this.refresh();
        this.process();
    }
    ScrollSpy.DEFAULTS = {
        offset: 10
    };
    ScrollSpy.prototype.refresh = function() {
        var t = this.$element[0] == window ? "offset" : "position";
        this.offsets = e([]);
        this.targets = e([]);
        var n = this, r = this.$body.find(this.selector).map(function() {
            var r = e(this), i = r.data("target") || r.attr("href"), s = /^#\w/.test(i) && e(i);
            return s && s.length && [ [ s[t]().top + (!e.isWindow(n.$scrollElement.get(0)) && n.$scrollElement.scrollTop()), i ] ] || null;
        }).sort(function(e, t) {
            return e[0] - t[0];
        }).each(function() {
            n.offsets.push(this[0]);
            n.targets.push(this[1]);
        });
    };
    ScrollSpy.prototype.process = function() {
        var e = this.$scrollElement.scrollTop() + this.options.offset, t = this.$scrollElement[0].scrollHeight || this.$body[0].scrollHeight, n = t - this.$scrollElement.height(), r = this.offsets, i = this.targets, s = this.activeTarget, o;
        if (e >= n) return s != (o = i.last()[0]) && this.activate(o);
        for (o = r.length; o--; ) s != i[o] && e >= r[o] && (!r[o + 1] || e <= r[o + 1]) && this.activate(i[o]);
    };
    ScrollSpy.prototype.activate = function(t) {
        this.activeTarget = t;
        e(this.selector).parents(".active").removeClass("active");
        var n = this.selector + '[data-target="' + t + '"],' + this.selector + '[href="' + t + '"]', r = e(n).parents("li").addClass("active");
        r.parent(".dropdown-menu").length && (r = r.closest("li.dropdown").addClass("active"));
        r.trigger("activate");
    };
    var t = e.fn.scrollspy;
    e.fn.scrollspy = function(t) {
        return this.each(function() {
            var n = e(this), r = n.data("bs.scrollspy"), i = typeof t == "object" && t;
            r || n.data("bs.scrollspy", r = new ScrollSpy(this, i));
            typeof t == "string" && r[t]();
        });
    };
    e.fn.scrollspy.Constructor = ScrollSpy;
    e.fn.scrollspy.noConflict = function() {
        e.fn.scrollspy = t;
        return this;
    };
    e(window).on("load", function() {
        e('[data-spy="scroll"]').each(function() {
            var t = e(this);
            t.scrollspy(t.data());
        });
    });
}(window.jQuery);

+function(e) {
    "use strict";
    var t = function(t) {
        this.element = e(t);
    };
    t.prototype.show = function() {
        var t = this.element, n = t.closest("ul:not(.dropdown-menu)"), r = t.attr("data-target");
        if (!r) {
            r = t.attr("href");
            r = r && r.replace(/.*(?=#[^\s]*$)/, "");
        }
        if (t.parent("li").hasClass("active")) return;
        var i = n.find(".active:last a")[0], s = e.Event("show.bs.tab", {
            relatedTarget: i
        });
        t.trigger(s);
        if (s.isDefaultPrevented()) return;
        var o = e(r);
        this.activate(t.parent("li"), n);
        this.activate(o, o.parent(), function() {
            t.trigger({
                type: "shown.bs.tab",
                relatedTarget: i
            });
        });
    };
    t.prototype.activate = function(t, n, r) {
        function next() {
            i.removeClass("active").find("> .dropdown-menu > .active").removeClass("active");
            t.addClass("active");
            if (s) {
                t[0].offsetWidth;
                t.addClass("in");
            } else t.removeClass("fade");
            t.parent(".dropdown-menu") && t.closest("li.dropdown").addClass("active");
            r && r();
        }
        var i = n.find("> .active"), s = r && e.support.transition && i.hasClass("fade");
        s ? i.one(e.support.transition.end, next).emulateTransitionEnd(150) : next();
        i.removeClass("in");
    };
    var n = e.fn.tab;
    e.fn.tab = function(n) {
        return this.each(function() {
            var r = e(this), i = r.data("bs.tab");
            i || r.data("bs.tab", i = new t(this));
            typeof n == "string" && i[n]();
        });
    };
    e.fn.tab.Constructor = t;
    e.fn.tab.noConflict = function() {
        e.fn.tab = n;
        return this;
    };
    e(document).on("click.bs.tab.data-api", '[data-toggle="tab"], [data-toggle="pill"]', function(t) {
        t.preventDefault();
        e(this).tab("show");
    });
}(window.jQuery);

+function(e) {
    "use strict";
    var t = function(n, r) {
        this.options = e.extend({}, t.DEFAULTS, r);
        this.$window = e(window).on("scroll.bs.affix.data-api", e.proxy(this.checkPosition, this)).on("click.bs.affix.data-api", e.proxy(this.checkPositionWithEventLoop, this));
        this.$element = e(n);
        this.affixed = this.unpin = null;
        this.checkPosition();
    };
    t.RESET = "affix affix-top affix-bottom";
    t.DEFAULTS = {
        offset: 0
    };
    t.prototype.checkPositionWithEventLoop = function() {
        setTimeout(e.proxy(this.checkPosition, this), 1);
    };
    t.prototype.checkPosition = function() {
        if (!this.$element.is(":visible")) return;
        var n = e(document).height(), r = this.$window.scrollTop(), i = this.$element.offset(), s = this.options.offset, o = s.top, u = s.bottom;
        typeof s != "object" && (u = o = s);
        typeof o == "function" && (o = s.top());
        typeof u == "function" && (u = s.bottom());
        var a = this.unpin != null && r + this.unpin <= i.top ? !1 : u != null && i.top + this.$element.height() >= n - u ? "bottom" : o != null && r <= o ? "top" : !1;
        if (this.affixed === a) return;
        this.unpin && this.$element.css("top", "");
        this.affixed = a;
        this.unpin = a == "bottom" ? i.top - r : null;
        this.$element.removeClass(t.RESET).addClass("affix" + (a ? "-" + a : ""));
        a == "bottom" && this.$element.offset({
            top: document.body.offsetHeight - u - this.$element.height()
        });
    };
    var n = e.fn.affix;
    e.fn.affix = function(n) {
        return this.each(function() {
            var r = e(this), i = r.data("bs.affix"), s = typeof n == "object" && n;
            i || r.data("bs.affix", i = new t(this, s));
            typeof n == "string" && i[n]();
        });
    };
    e.fn.affix.Constructor = t;
    e.fn.affix.noConflict = function() {
        e.fn.affix = n;
        return this;
    };
    e(window).on("load", function() {
        e('[data-spy="affix"]').each(function() {
            var t = e(this), n = t.data();
            n.offset = n.offset || {};
            n.offsetBottom && (n.offset.bottom = n.offsetBottom);
            n.offsetTop && (n.offset.top = n.offsetTop);
            t.affix(n);
        });
    });
}(window.jQuery);

!function() {
    var e = null;
    window.PR_SHOULD_USE_CONTINUATION = !0;
    (function() {
        function S(e) {
            function d(e) {
                var t = e.charCodeAt(0);
                if (t !== 92) return t;
                var n = e.charAt(1);
                return (t = u[n]) ? t : "0" <= n && n <= "7" ? parseInt(e.substring(1), 8) : n === "u" || n === "x" ? parseInt(e.substring(2), 16) : e.charCodeAt(1);
            }
            function g(e) {
                if (e < 32) return (e < 16 ? "\\x0" : "\\x") + e.toString(16);
                e = String.fromCharCode(e);
                return e === "\\" || e === "-" || e === "]" || e === "^" ? "\\" + e : e;
            }
            function b(e) {
                var t = e.substring(1, e.length - 1).match(/\\u[\dA-Fa-f]{4}|\\x[\dA-Fa-f]{2}|\\[0-3][0-7]{0,2}|\\[0-7]{1,2}|\\[\S\s]|[^\\]/g), e = [], n = t[0] === "^", r = [ "[" ];
                n && r.push("^");
                for (var n = n ? 1 : 0, i = t.length; n < i; ++n) {
                    var s = t[n];
                    if (/\\[bdsw]/i.test(s)) r.push(s); else {
                        var s = d(s), o;
                        n + 2 < i && "-" === t[n + 1] ? (o = d(t[n + 2]), n += 2) : o = s;
                        e.push([ s, o ]);
                        o < 65 || s > 122 || (o < 65 || s > 90 || e.push([ Math.max(65, s) | 32, Math.min(o, 90) | 32 ]), o < 97 || s > 122 || e.push([ Math.max(97, s) & -33, Math.min(o, 122) & -33 ]));
                    }
                }
                e.sort(function(e, t) {
                    return e[0] - t[0] || t[1] - e[1];
                });
                t = [];
                i = [];
                for (n = 0; n < e.length; ++n) s = e[n], s[0] <= i[1] + 1 ? i[1] = Math.max(i[1], s[1]) : t.push(i = s);
                for (n = 0; n < t.length; ++n) s = t[n], r.push(g(s[0])), s[1] > s[0] && (s[1] + 1 > s[0] && r.push("-"), r.push(g(s[1])));
                r.push("]");
                return r.join("");
            }
            function s(e) {
                for (var r = e.source.match(/\[(?:[^\\\]]|\\[\S\s])*]|\\u[\dA-Fa-f]{4}|\\x[\dA-Fa-f]{2}|\\\d+|\\[^\dux]|\(\?[!:=]|[()^]|[^()[\\^]+/g), i = r.length, s = [], o = 0, u = 0; o < i; ++o) {
                    var a = r[o];
                    a === "(" ? ++u : "\\" === a.charAt(0) && (a = +a.substring(1)) && (a <= u ? s[a] = -1 : r[o] = g(a));
                }
                for (o = 1; o < s.length; ++o) -1 === s[o] && (s[o] = ++t);
                for (u = o = 0; o < i; ++o) a = r[o], a === "(" ? (++u, s[u] || (r[o] = "(?:")) : "\\" === a.charAt(0) && (a = +a.substring(1)) && a <= u && (r[o] = "\\" + s[a]);
                for (o = 0; o < i; ++o) "^" === r[o] && "^" !== r[o + 1] && (r[o] = "");
                if (e.ignoreCase && n) for (o = 0; o < i; ++o) a = r[o], e = a.charAt(0), a.length >= 2 && e === "[" ? r[o] = b(a) : e !== "\\" && (r[o] = a.replace(/[A-Za-z]/g, function(e) {
                    e = e.charCodeAt(0);
                    return "[" + String.fromCharCode(e & -33, e | 32) + "]";
                }));
                return r.join("");
            }
            for (var t = 0, n = !1, r = !1, i = 0, s = e.length; i < s; ++i) {
                var o = e[i];
                if (o.ignoreCase) r = !0; else if (/[a-z]/i.test(o.source.replace(/\\u[\da-f]{4}|\\x[\da-f]{2}|\\[^UXux]/gi, ""))) {
                    n = !0;
                    r = !1;
                    break;
                }
            }
            for (var u = {
                b: 8,
                t: 9,
                n: 10,
                v: 11,
                f: 12,
                r: 13
            }, a = [], i = 0, s = e.length; i < s; ++i) {
                o = e[i];
                if (o.global || o.multiline) throw Error("" + o);
                a.push("(?:" + s(o) + ")");
            }
            return RegExp(a.join("|"), r ? "gi" : "g");
        }
        function T(e, t) {
            function g(e) {
                var u = e.nodeType;
                if (u == 1) {
                    if (!n.test(e.className)) {
                        for (u = e.firstChild; u; u = u.nextSibling) g(u);
                        u = e.nodeName.toLowerCase();
                        if ("br" === u || "li" === u) r[o] = "\n", s[o << 1] = i++, s[o++ << 1 | 1] = e;
                    }
                } else if (u == 3 || u == 4) u = e.nodeValue, u.length && (u = t ? u.replace(/\r\n?/g, "\n") : u.replace(/[\t\n\r ]+/g, " "), r[o] = u, s[o << 1] = i, i += u.length, s[o++ << 1 | 1] = e);
            }
            var n = /(?:^|\s)nocode(?:\s|$)/, r = [], i = 0, s = [], o = 0;
            g(e);
            return {
                a: r.join("").replace(/\n$/, ""),
                d: s
            };
        }
        function H(e, t, n, r) {
            t && (e = {
                a: t,
                e: e
            }, n(e), r.push.apply(r, e.g));
        }
        function U(e) {
            for (var t = void 0, n = e.firstChild; n; n = n.nextSibling) var r = n.nodeType, t = r === 1 ? t ? e : n : r === 3 ? c.test(n.nodeValue) ? e : t : t;
            return t === e ? void 0 : t;
        }
        function C(t, n) {
            function g(e) {
                for (var t = e.e, o = [ t, "pln" ], u = 0, a = e.a.match(i) || [], f = {}, l = 0, c = a.length; l < c; ++l) {
                    var h = a[l], p = f[h], d = void 0, v;
                    if (typeof p == "string") v = !1; else {
                        var m = r[h.charAt(0)];
                        if (m) d = h.match(m[1]), p = m[0]; else {
                            for (v = 0; v < s; ++v) if (m = n[v], d = h.match(m[1])) {
                                p = m[0];
                                break;
                            }
                            d || (p = "pln");
                        }
                        (v = p.length >= 5 && "lang-" === p.substring(0, 5)) && (!d || typeof d[1] != "string") && (v = !1, p = "src");
                        v || (f[h] = p);
                    }
                    m = u;
                    u += h.length;
                    if (v) {
                        v = d[1];
                        var y = h.indexOf(v), w = y + v.length;
                        d[2] && (w = h.length - d[2].length, y = w - v.length);
                        p = p.substring(5);
                        H(t + m, h.substring(0, y), g, o);
                        H(t + m + y, v, I(p, v), o);
                        H(t + m + w, h.substring(w), g, o);
                    } else o.push(t + m, p);
                }
                e.g = o;
            }
            var r = {}, i;
            (function() {
                for (var s = t.concat(n), o = [], u = {}, a = 0, f = s.length; a < f; ++a) {
                    var l = s[a], c = l[3];
                    if (c) for (var h = c.length; --h >= 0; ) r[c.charAt(h)] = l;
                    l = l[1];
                    c = "" + l;
                    u.hasOwnProperty(c) || (o.push(l), u[c] = e);
                }
                o.push(/[\S\s]/);
                i = S(o);
            })();
            var s = n.length;
            return g;
        }
        function v(t) {
            var n = [], r = [];
            t.tripleQuotedStrings ? n.push([ "str", /^(?:'''(?:[^'\\]|\\[\S\s]|''?(?=[^']))*(?:'''|$)|"""(?:[^"\\]|\\[\S\s]|""?(?=[^"]))*(?:"""|$)|'(?:[^'\\]|\\[\S\s])*(?:'|$)|"(?:[^"\\]|\\[\S\s])*(?:"|$))/, e, "'\"" ]) : t.multiLineStrings ? n.push([ "str", /^(?:'(?:[^'\\]|\\[\S\s])*(?:'|$)|"(?:[^"\\]|\\[\S\s])*(?:"|$)|`(?:[^\\`]|\\[\S\s])*(?:`|$))/, e, "'\"`" ]) : n.push([ "str", /^(?:'(?:[^\n\r'\\]|\\.)*(?:'|$)|"(?:[^\n\r"\\]|\\.)*(?:"|$))/, e, "\"'" ]);
            t.verbatimStrings && r.push([ "str", /^@"(?:[^"]|"")*(?:"|$)/, e ]);
            var i = t.hashComments;
            i && (t.cStyleComments ? (i > 1 ? n.push([ "com", /^#(?:##(?:[^#]|#(?!##))*(?:###|$)|.*)/, e, "#" ]) : n.push([ "com", /^#(?:(?:define|e(?:l|nd)if|else|error|ifn?def|include|line|pragma|undef|warning)\b|[^\n\r]*)/, e, "#" ]), r.push([ "str", /^<(?:(?:(?:\.\.\/)*|\/?)(?:[\w-]+(?:\/[\w-]+)+)?[\w-]+\.h(?:h|pp|\+\+)?|[a-z]\w*)>/, e ])) : n.push([ "com", /^#[^\n\r]*/, e, "#" ]));
            t.cStyleComments && (r.push([ "com", /^\/\/[^\n\r]*/, e ]), r.push([ "com", /^\/\*[\S\s]*?(?:\*\/|$)/, e ]));
            if (i = t.regexLiterals) {
                var s = (i = i > 1 ? "" : "\n\r") ? "." : "[\\S\\s]";
                r.push([ "lang-regex", RegExp("^(?:^^\\.?|[+-]|[!=]=?=?|\\#|%=?|&&?=?|\\(|\\*=?|[+\\-]=|->|\\/=?|::?|<<?=?|>>?>?=?|,|;|\\?|@|\\[|~|{|\\^\\^?=?|\\|\\|?=?|break|case|continue|delete|do|else|finally|instanceof|return|throw|try|typeof)\\s*(" + ("/(?=[^/*" + i + "])(?:[^/\\x5B\\x5C" + i + "]|\\x5C" + s + "|\\x5B(?:[^\\x5C\\x5D" + i + "]|\\x5C" + s + ")*(?:\\x5D|$))+/") + ")") ]);
            }
            (i = t.types) && r.push([ "typ", i ]);
            i = ("" + t.keywords).replace(/^ | $/g, "");
            i.length && r.push([ "kwd", RegExp("^(?:" + i.replace(/[\s,]+/g, "|") + ")\\b"), e ]);
            n.push([ "pln", /^\s+/, e, " \r\n	 " ]);
            i = "^.[^\\s\\w.$@'\"`/\\\\]*";
            t.regexLiterals && (i += "(?!s*/)");
            r.push([ "lit", /^@[$_a-z][\w$@]*/i, e ], [ "typ", /^(?:[@_]?[A-Z]+[a-z][\w$@]*|\w+_t\b)/, e ], [ "pln", /^[$_a-z][\w$@]*/i, e ], [ "lit", /^(?:0x[\da-f]+|(?:\d(?:_\d+)*\d*(?:\.\d*)?|\.\d\+)(?:e[+-]?\d+)?)[a-z]*/i, e, "0123456789" ], [ "pln", /^\\[\S\s]?/, e ], [ "pun", RegExp(i), e ]);
            return C(n, r);
        }
        function J(e, t, n) {
            function b(e) {
                var t = e.nodeType;
                if (t == 1 && !r.test(e.className)) if ("br" === e.nodeName) s(e), e.parentNode && e.parentNode.removeChild(e); else for (e = e.firstChild; e; e = e.nextSibling) b(e); else if ((t == 3 || t == 4) && n) {
                    var o = e.nodeValue, u = o.match(i);
                    u && (t = o.substring(0, u.index), e.nodeValue = t, (o = o.substring(u.index + u[0].length)) && e.parentNode.insertBefore(s.createTextNode(o), e.nextSibling), s(e), t || e.parentNode.removeChild(e));
                }
            }
            function s(e) {
                function b(e, t) {
                    var n = t ? e.cloneNode(!1) : e, r = e.parentNode;
                    if (r) {
                        var r = b(r, 1), i = e.nextSibling;
                        r.appendChild(n);
                        for (var s = i; s; s = i) i = s.nextSibling, r.appendChild(s);
                    }
                    return n;
                }
                for (; !e.nextSibling; ) if (e = e.parentNode, !e) return;
                for (var e = b(e.nextSibling, 0), t; (t = e.parentNode) && t.nodeType === 1; ) e = t;
                u.push(e);
            }
            for (var r = /(?:^|\s)nocode(?:\s|$)/, i = /\r\n?|\n/, s = e.ownerDocument, o = s.createElement("li"); e.firstChild; ) o.appendChild(e.firstChild);
            for (var u = [ o ], a = 0; a < u.length; ++a) b(u[a]);
            t === (t | 0) && u[0].setAttribute("value", t);
            var f = s.createElement("ol");
            f.className = "linenums";
            for (var t = Math.max(0, t - 1 | 0) || 0, a = 0, l = u.length; a < l; ++a) o = u[a], o.className = "L" + (a + t) % 10, o.firstChild || o.appendChild(s.createTextNode(" ")), f.appendChild(o);
            e.appendChild(f);
        }
        function p(e, n) {
            for (var r = n.length; --r >= 0; ) {
                var i = n[r];
                p.hasOwnProperty(i) ? t.console && console.warn("cannot override language handler %s", i) : p[i] = e;
            }
        }
        function I(e, t) {
            if (!e || !p.hasOwnProperty(e)) e = /^\s*</.test(t) ? "default-markup" : "default-code";
            return p[e];
        }
        function K(e) {
            var n = e.h;
            try {
                var r = T(e.c, e.i), i = r.a;
                e.a = i;
                e.d = r.d;
                e.e = 0;
                I(n, i)(e);
                var s = /\bMSIE\s(\d+)/.exec(navigator.userAgent), s = s && +s[1] <= 8, n = /\n/g, o = e.a, u = o.length, r = 0, a = e.d, f = a.length, i = 0, l = e.g, c = l.length, h = 0;
                l[c] = u;
                var p, d;
                for (d = p = 0; d < c; ) l[d] !== l[d + 2] ? (l[p++] = l[d++], l[p++] = l[d++]) : d += 2;
                c = p;
                for (d = p = 0; d < c; ) {
                    for (var v = l[d], m = l[d + 1], g = d + 2; g + 2 <= c && l[g + 1] === m; ) g += 2;
                    l[p++] = v;
                    l[p++] = m;
                    d = g;
                }
                l.length = p;
                var y = e.c, b;
                y && (b = y.style.display, y.style.display = "none");
                try {
                    for (; i < f; ) {
                        var w = a[i + 2] || u, E = l[h + 2] || u, g = Math.min(w, E), S = a[i + 1], x;
                        if (S.nodeType !== 1 && (x = o.substring(r, g))) {
                            s && (x = x.replace(n, "\r"));
                            S.nodeValue = x;
                            var N = S.ownerDocument, C = N.createElement("span");
                            C.className = l[h + 1];
                            var k = S.parentNode;
                            k.replaceChild(C, S);
                            C.appendChild(S);
                            r < w && (a[i + 1] = S = N.createTextNode(o.substring(g, w)), k.insertBefore(S, C.nextSibling));
                        }
                        r = g;
                        r >= w && (i += 2);
                        r >= E && (h += 2);
                    }
                } finally {
                    y && (y.style.display = b);
                }
            } catch (L) {
                t.console && console.log(L && L.stack || L);
            }
        }
        var t = window, n = [ "break,continue,do,else,for,if,return,while" ], r = [ [ n, "auto,case,char,const,default,double,enum,extern,float,goto,inline,int,long,register,short,signed,sizeof,static,struct,switch,typedef,union,unsigned,void,volatile" ], "catch,class,delete,false,import,new,operator,private,protected,public,this,throw,true,try,typeof" ], i = [ r, "alignof,align_union,asm,axiom,bool,concept,concept_map,const_cast,constexpr,decltype,delegate,dynamic_cast,explicit,export,friend,generic,late_check,mutable,namespace,nullptr,property,reinterpret_cast,static_assert,static_cast,template,typeid,typename,using,virtual,where" ], s = [ r, "abstract,assert,boolean,byte,extends,final,finally,implements,import,instanceof,interface,null,native,package,strictfp,super,synchronized,throws,transient" ], o = [ s, "as,base,by,checked,decimal,delegate,descending,dynamic,event,fixed,foreach,from,group,implicit,in,internal,into,is,let,lock,object,out,override,orderby,params,partial,readonly,ref,sbyte,sealed,stackalloc,string,select,uint,ulong,unchecked,unsafe,ushort,var,virtual,where" ], r = [ r, "debugger,eval,export,function,get,null,set,undefined,var,with,Infinity,NaN" ], u = [ n, "and,as,assert,class,def,del,elif,except,exec,finally,from,global,import,in,is,lambda,nonlocal,not,or,pass,print,raise,try,with,yield,False,True,None" ], a = [ n, "alias,and,begin,case,class,def,defined,elsif,end,ensure,false,in,module,next,nil,not,or,redo,rescue,retry,self,super,then,true,undef,unless,until,when,yield,BEGIN,END" ], f = [ n, "as,assert,const,copy,drop,enum,extern,fail,false,fn,impl,let,log,loop,match,mod,move,mut,priv,pub,pure,ref,self,static,struct,true,trait,type,unsafe,use" ], n = [ n, "case,done,elif,esac,eval,fi,function,in,local,set,then,until" ], l = /^(DIR|FILE|vector|(de|priority_)?queue|list|stack|(const_)?iterator|(multi)?(set|map)|bitset|u?(int|float)\d*)\b/, c = /\S/, h = v({
            keywords: [ i, o, r, "caller,delete,die,do,dump,elsif,eval,exit,foreach,for,goto,if,import,last,local,my,next,no,our,print,package,redo,require,sub,undef,unless,until,use,wantarray,while,BEGIN,END", u, a, n ],
            hashComments: !0,
            cStyleComments: !0,
            multiLineStrings: !0,
            regexLiterals: !0
        }), p = {};
        p(h, [ "default-code" ]);
        p(C([], [ [ "pln", /^[^<?]+/ ], [ "dec", /^<!\w[^>]*(?:>|$)/ ], [ "com", /^<\!--[\S\s]*?(?:--\>|$)/ ], [ "lang-", /^<\?([\S\s]+?)(?:\?>|$)/ ], [ "lang-", /^<%([\S\s]+?)(?:%>|$)/ ], [ "pun", /^(?:<[%?]|[%?]>)/ ], [ "lang-", /^<xmp\b[^>]*>([\S\s]+?)<\/xmp\b[^>]*>/i ], [ "lang-js", /^<script\b[^>]*>([\S\s]*?)(<\/script\b[^>]*>)/i ], [ "lang-css", /^<style\b[^>]*>([\S\s]*?)(<\/style\b[^>]*>)/i ], [ "lang-in.tag", /^(<\/?[a-z][^<>]*>)/i ] ]), [ "default-markup", "htm", "html", "mxml", "xhtml", "xml", "xsl" ]);
        p(C([ [ "pln", /^\s+/, e, " 	\r\n" ], [ "atv", /^(?:"[^"]*"?|'[^']*'?)/, e, "\"'" ] ], [ [ "tag", /^^<\/?[a-z](?:[\w-.:]*\w)?|\/?>$/i ], [ "atn", /^(?!style[\s=]|on)[a-z](?:[\w:-]*\w)?/i ], [ "lang-uq.val", /^=\s*([^\s"'>]*(?:[^\s"'/>]|\/(?=\s)))/ ], [ "pun", /^[/<->]+/ ], [ "lang-js", /^on\w+\s*=\s*"([^"]+)"/i ], [ "lang-js", /^on\w+\s*=\s*'([^']+)'/i ], [ "lang-js", /^on\w+\s*=\s*([^\s"'>]+)/i ], [ "lang-css", /^style\s*=\s*"([^"]+)"/i ], [ "lang-css", /^style\s*=\s*'([^']+)'/i ], [ "lang-css", /^style\s*=\s*([^\s"'>]+)/i ] ]), [ "in.tag" ]);
        p(C([], [ [ "atv", /^[\S\s]+/ ] ]), [ "uq.val" ]);
        p(v({
            keywords: i,
            hashComments: !0,
            cStyleComments: !0,
            types: l
        }), [ "c", "cc", "cpp", "cxx", "cyc", "m" ]);
        p(v({
            keywords: "null,true,false"
        }), [ "json" ]);
        p(v({
            keywords: o,
            hashComments: !0,
            cStyleComments: !0,
            verbatimStrings: !0,
            types: l
        }), [ "cs" ]);
        p(v({
            keywords: s,
            cStyleComments: !0
        }), [ "java" ]);
        p(v({
            keywords: n,
            hashComments: !0,
            multiLineStrings: !0
        }), [ "bash", "bsh", "csh", "sh" ]);
        p(v({
            keywords: u,
            hashComments: !0,
            multiLineStrings: !0,
            tripleQuotedStrings: !0
        }), [ "cv", "py", "python" ]);
        p(v({
            keywords: "caller,delete,die,do,dump,elsif,eval,exit,foreach,for,goto,if,import,last,local,my,next,no,our,print,package,redo,require,sub,undef,unless,until,use,wantarray,while,BEGIN,END",
            hashComments: !0,
            multiLineStrings: !0,
            regexLiterals: 2
        }), [ "perl", "pl", "pm" ]);
        p(v({
            keywords: a,
            hashComments: !0,
            multiLineStrings: !0,
            regexLiterals: !0
        }), [ "rb", "ruby" ]);
        p(v({
            keywords: r,
            cStyleComments: !0,
            regexLiterals: !0
        }), [ "javascript", "js" ]);
        p(v({
            keywords: "all,and,by,catch,class,else,extends,false,finally,for,if,in,is,isnt,loop,new,no,not,null,of,off,on,or,return,super,then,throw,true,try,unless,until,when,while,yes",
            hashComments: 3,
            cStyleComments: !0,
            multilineStrings: !0,
            tripleQuotedStrings: !0,
            regexLiterals: !0
        }), [ "coffee" ]);
        p(v({
            keywords: f,
            cStyleComments: !0,
            multilineStrings: !0
        }), [ "rc", "rs", "rust" ]);
        p(C([], [ [ "str", /^[\S\s]+/ ] ]), [ "regex" ]);
        var d = t.PR = {
            createSimpleLexer: C,
            registerLangHandler: p,
            sourceDecorator: v,
            PR_ATTRIB_NAME: "atn",
            PR_ATTRIB_VALUE: "atv",
            PR_COMMENT: "com",
            PR_DECLARATION: "dec",
            PR_KEYWORD: "kwd",
            PR_LITERAL: "lit",
            PR_NOCODE: "nocode",
            PR_PLAIN: "pln",
            PR_PUNCTUATION: "pun",
            PR_SOURCE: "src",
            PR_STRING: "str",
            PR_TAG: "tag",
            PR_TYPE: "typ",
            prettyPrintOne: t.prettyPrintOne = function(e, t, n) {
                var r = document.createElement("div");
                r.innerHTML = "<pre>" + e + "</pre>";
                r = r.firstChild;
                n && J(r, n, !0);
                K({
                    h: t,
                    j: n,
                    c: r,
                    i: 1
                });
                return r.innerHTML;
            },
            prettyPrint: t.prettyPrint = function(n, r) {
                function g() {
                    for (var r = t.PR_SHOULD_USE_CONTINUATION ? l.now() + 250 : Infinity; c < o.length && l.now() < r; c++) {
                        for (var i = o[c], u = b, a = i; a = a.previousSibling; ) {
                            var f = a.nodeType, E = (f === 7 || f === 8) && a.nodeValue;
                            if (E ? !/^\??prettify\b/.test(E) : f !== 3 || /\S/.test(a.nodeValue)) break;
                            if (E) {
                                u = {};
                                E.replace(/\b(\w+)=([\w%+\-.:]+)/g, function(e, t, n) {
                                    u[t] = n;
                                });
                                break;
                            }
                        }
                        a = i.className;
                        if ((u !== b || d.test(a)) && !v.test(a)) {
                            f = !1;
                            for (E = i.parentNode; E; E = E.parentNode) if (y.test(E.tagName) && E.className && d.test(E.className)) {
                                f = !0;
                                break;
                            }
                            if (!f) {
                                i.className += " prettyprinted";
                                f = u.lang;
                                if (!f) {
                                    var f = a.match(p), S;
                                    !f && (S = U(i)) && g.test(S.tagName) && (f = S.className.match(p));
                                    f && (f = f[1]);
                                }
                                if (m.test(i.tagName)) E = 1; else var E = i.currentStyle, x = s.defaultView, E = (E = E ? E.whiteSpace : x && x.getComputedStyle ? x.getComputedStyle(i, e).getPropertyValue("white-space") : 0) && "pre" === E.substring(0, 3);
                                x = u.linenums;
                                (x = x === "true" || +x) || (x = (x = a.match(/\blinenums\b(?::(\d+))?/)) ? x[1] && x[1].length ? +x[1] : !0 : !1);
                                x && J(i, x, E);
                                h = {
                                    h: f,
                                    c: i,
                                    j: x,
                                    i: E
                                };
                                K(h);
                            }
                        }
                    }
                    c < o.length ? setTimeout(g, 250) : "function" == typeof n && n();
                }
                for (var i = r || document.body, s = i.ownerDocument || document, i = [ i.getElementsByTagName("pre"), i.getElementsByTagName("code"), i.getElementsByTagName("xmp") ], o = [], u = 0; u < i.length; ++u) for (var a = 0, f = i[u].length; a < f; ++a) o.push(i[u][a]);
                var i = e, l = Date;
                l.now || (l = {
                    now: function() {
                        return +(new Date);
                    }
                });
                var c = 0, h, p = /\blang(?:uage)?-([\w.]+)(?!\S)/, d = /\bprettyprint\b/, v = /\bprettyprinted\b/, m = /pre|xmp/i, g = /^code$/i, y = /^(?:pre|code|xmp)$/i, b = {};
                g();
            }
        };
        typeof define == "function" && define.amd && define("google-code-prettify", [], function() {
            return d;
        });
    })();
}();