/**
 * FullScreen class
 */
var FullScreen = function (options) {
    this.element = null;
    this.onReadyScreen = null;
    this.onCancelScreen = null;
    this.fullscreemed = false;
    this.fireEvent = false;
    FullScreen.prototype.init.call(this, options);
};
/**
 * [init description]
 * @param  {Object} options Config options
 */
FullScreen.prototype.init = function (options) {
    var defaults = {
        element: document.documentElement,
        onReadyScreen: function () {
        },
        onCancelScreen: function () {
        }
    };
    jQuery.extend(true, defaults, options);
    this.element = defaults.element;
    this.action = defaults.action;

    this.onReadyScreen = defaults.onReadyScreen;
    this.onCancelScreen = defaults.onCancelScreen;
    this.attachListeners();
};
FullScreen.prototype.cancel = function () {
    var requestMethod, fnCancelScreen, wscript, el;
    if (parent.document.documentElement === document.documentElement) {
        el = document;
    } else {
        el = parent.document;
    }
    requestMethod = el.cancelFullScreen ||
        el.webkitCancelFullScreen ||
        el.mozCancelFullScreen ||
        el.exitFullscreen;
    if (requestMethod) {
        requestMethod.call(el);
        try {
            fnCancelScreen = this.onCancelScreen;
            fnCancelScreen(el);
        } catch (e) {
            throw new Error(e);
        }
    } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
        wscript = new ActiveXObject("WScript.Shell");
        if (wscript !== null) {
            wscript.SendKeys("{F11}");
        }
    }
};

FullScreen.prototype.applyZoom = function () {
    var requestMethod, wscript, fnReadyScreen, el = this.element;
    requestMethod = el.requestFullScreen ||
        el.webkitRequestFullScreen ||
        el.mozRequestFullScreen ||
        el.msRequestFullScreen;

    if (requestMethod) {
        requestMethod.call(el);
        try {
            fnReadyScreen = this.onReadyScreen;
            fnReadyScreen(el);
        } catch (e) {
            throw new Error(e);
        }
    } else if (typeof window.ActiveXObject !== "undefined") {
        wscript = new ActiveXObject("WScript.Shell");
        if (wscript !== null) {
            wscript.SendKeys("{F11}");
        }
    }
    return false
};
FullScreen.prototype.toggle = function (action) {
    var el, isInFullScreen;
    if (parent.document.documentElement === document.documentElement) {
        el = document;
    } else {
        el = parent.document;
    }

    isInFullScreen = (el.fullScreenElement && el.fullScreenElement !== null) || (el.mozFullScreen || el.webkitIsFullScreen);
    if (isInFullScreen) {
        this.action.setTooltip('Full Screen'.translate());
        this.cancel();
    } else {

        this.applyZoom();
        this.fullscreemed = true;
        this.action.setTooltip('Exit full screen'.translate());
    }
    return false;
};
FullScreen.prototype.attachListeners = function () {
    var el, self = this;
    if (parent.document.documentElement === document.documentElement) {
        el = document;
    } else {
        el = parent.document;
    }

    el.addEventListener("fullscreenchange", function () {
        self.fireFullScreen();
    }, false);

    el.addEventListener("mozfullscreenchange", function () {
        self.fireFullScreen();
    }, false);

    el.addEventListener("webkitfullscreenchange", function (e, a) {
        self.fireFullScreen();
    }, false);

    el.addEventListener("msfullscreenchange", function () {
        self.fireFullScreen();
    }, false);
};
FullScreen.prototype.fireFullScreen = function () {
    if (this.fullscreemed && this.fireEvent) {
        this.action.setTooltip('Full Screen'.translate());
        $(this.action.selector).tooltip("close");
        this.fireEvent = false;
    } else {
        this.fireEvent = true;
    }
    return true;
};