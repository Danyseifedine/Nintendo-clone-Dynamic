import CONFIG from "./config.js";
document.addEventListener("DOMContentLoaded", function () {
    const e = {
            HIDDEN: "hidden",
            NINTENDO_RED: "bg-nintendo-red text-white",
            HOVER_BG: "hover:bg-gray-200",
            DISABLED: "text-gray-400 cursor-not-allowed",
            ENABLED: "text-gray-700"
        },
        t = {
            productsContainer: document.getElementById("products-container"),
            loadingIndicator: document.getElementById("loading-indicator"),
            noResults: document.getElementById("no-results"),
            pagination: document.getElementById("pagination"),
            searchInput: document.getElementById("search-input"),
            sortSelect: document.getElementById("sort-select"),
            clearFiltersBtn: document.getElementById("clear-filters"),
            filterCheckboxes: document.querySelectorAll(".filter-checkbox"),
            toggleOnlineFeatures: document.getElementById("toggle-online-features"),
            togglePlatform: document.getElementById("toggle-platform"),
            onlineFeaturesContainer: document.getElementById("online-features-container"),
            platformContainer: document.getElementById("platform-container")
        };
    let n = {
        page: CONFIG.DEFAULT_PAGE,
        sort: CONFIG.DEFAULT_SORT
    };

    function o() {
        a(!0);
        const s = new URLSearchParams;
        for (const e in n) null !== n[e] && void 0 !== n[e] && s.append(e, n[e]);
        const d = `${CONFIG.API_ENDPOINT}?${s.toString()}`;
        axios.get(d, {
            headers: {
                "X-Requested-With": "XMLHttpRequest",
                Accept: "application/json"
            }
        }).then(s => {
            a(!1);
            const d = s.data;
            if (d && d.products) {
                if (d.products.data) {
                    const a = Array.isArray(d.products.data) ? d.products.data : d.products.data.data && Array.isArray(d.products.data.data) ? d.products.data.data : null;
                    if (a) return 0 === a.length ? void c() : (function (n) {
                        if (t.productsContainer.innerHTML = "", !Array.isArray(n)) return void t.noResults.classList.remove(e.HIDDEN);
                        const o = document.getElementById("product-card-template");
                        let c = n.length;
                        c > 0 && t.loadingIndicator.classList.remove(e.HIDDEN);
                        n.forEach(n => {
                            const a = o.content.cloneNode(!0),
                                s = a.querySelector("div"),
                                d = a.querySelector(".product-link");
                            d.href = `/products/${n.name.replace(/\s+/g, "-")}`, s.style.opacity = "0", s.style.transition = "opacity 0.3s ease-in-out";
                            const i = a.querySelector(".product-image");
                            n.thumbnail ? (i.src = n.thumbnail, i.alt = n.name) : (i.src = CONFIG.PLACEHOLDER_IMAGE, i.alt = "No image available"), i.onload = function () {
                                    r(s, --c)
                                }, i.onerror = function () {
                                    c--, i.src = CONFIG.ERROR_IMAGE, r(s, c)
                                }, a.querySelector(".product-name").textContent = n.name,
                                function (e, t) {
                                    if (t.created_at) {
                                        const n = new Date(t.created_at),
                                            o = n.getMonth() + 1,
                                            c = n.getDate(),
                                            a = n.getFullYear().toString().substr(-2),
                                            r = `${o}/${c}/${a}`;
                                        e.querySelector(".product-release").textContent = r
                                    } else e.querySelector(".product-release").textContent = ""
                                }(a, n),
                                function (t, n) {
                                    if (n.is_on_sale && n.discount > 0) {
                                        const o = t.querySelector(".product-discount");
                                        if (o.classList.remove(e.HIDDEN), o.querySelector(".discount-percent").textContent = n.discount, n.discount_end_date) {
                                            const o = t.querySelector(".product-sale-countdown");
                                            o.classList.remove(e.HIDDEN);
                                            const c = new Date(n.discount_end_date),
                                                a = new Date,
                                                r = Math.max(0, Math.ceil((c - a) / 864e5));
                                            o.querySelector(".countdown-text").textContent = r > 1 ? `${r} days` : 1 === r ? "1 day" : "today"
                                        }
                                    }
                                    const o = t.querySelector(".product-price");
                                    if (n.price > 0)
                                        if (n.is_on_sale && n.discount > 0) {
                                            const e = document.createElement("span");
                                            e.className = "text-gray-500 line-through text-sm mr-2", e.textContent = `$${n.price.toFixed(2)}`;
                                            const t = document.createElement("span");
                                            t.className = "text-nintendo-red", t.textContent = `$${n.discounted_price.toFixed(2)}`, o.appendChild(e), o.appendChild(t)
                                        } else o.textContent = `$${n.price.toFixed(2)}`;
                                    else t.querySelector(".product-free").classList.remove(e.HIDDEN), o.textContent = "Free";
                                    n.has_free_demo && n.price > 0 && t.querySelector(".product-demo").classList.remove(e.HIDDEN)
                                }(a, n), t.productsContainer.appendChild(a)
                        })
                    }(a), void(d.products.current_page && d.products.last_page && function (c) {
                        if (t.pagination.innerHTML = "", c.last_page <= 1) return;
                        const a = document.createElement("div");
                        a.className = "flex items-center space-x-1";
                        const r = document.createElement("button"),
                            s = 1 === c.current_page;
                        r.className = `px-3 py-1 rounded-md ${s ? e.DISABLED : e.ENABLED + " " + e.HOVER_BG}`, r.innerHTML = "&laquo; Prev", s || r.addEventListener("click", () => {
                            n.page = c.current_page - 1, o()
                        });
                        a.appendChild(r);
                        const d = Math.max(1, c.current_page - 2),
                            i = Math.min(c.last_page, c.current_page + 2);
                        for (let t = d; t <= i; t++) {
                            const r = document.createElement("button"),
                                s = t === c.current_page;
                            r.className = `px-3 py-1 rounded-md ${s ? e.NINTENDO_RED : e.ENABLED + " " + e.HOVER_BG}`, r.textContent = t, s || r.addEventListener("click", () => {
                                n.page = t, o()
                            }), a.appendChild(r)
                        }
                        const l = document.createElement("button"),
                            u = c.current_page === c.last_page;
                        l.className = `px-3 py-1 rounded-md ${u ? e.DISABLED : e.ENABLED + " " + e.HOVER_BG}`, l.innerHTML = "Next &raquo;", u || l.addEventListener("click", () => {
                            n.page = c.current_page + 1, o()
                        });
                        a.appendChild(l), t.pagination.appendChild(a)
                    }(d.products)))
                }
                c()
            } else c()
        }).catch(n => {
            console.error('Error:', n.response || n);
            t.loadingIndicator.classList.add(e.HIDDEN), t.noResults.classList.remove(e.HIDDEN), t.noResults.querySelector("h3").textContent = "Error loading products", t.noResults.querySelector("p").textContent = "Please try again later or check the console for details."
        })
    }

    function c() {
        t.noResults.classList.remove(e.HIDDEN), t.productsContainer.innerHTML = "", t.pagination.innerHTML = ""
    }

    function a(n) {
        n ? (t.loadingIndicator.classList.remove(e.HIDDEN), t.productsContainer.classList.add(e.HIDDEN), t.noResults.classList.add(e.HIDDEN)) : (t.loadingIndicator.classList.add(e.HIDDEN), t.productsContainer.classList.remove(e.HIDDEN))
    }

    function r(n, o) {
        n.style.opacity = "1", o <= 0 && (t.loadingIndicator.classList.add(e.HIDDEN), t.productsContainer.classList.remove(e.HIDDEN))
    }

    function s() {
        const o = n.search || n.deals || n.has_free_demo || n.has_dlc || n.sort && n.sort !== CONFIG.DEFAULT_SORT;
        t.clearFiltersBtn.classList.toggle(e.HIDDEN, !o)
    }
    o(), t.searchInput.addEventListener("input", function (e, t) {
        let n;
        return function () {
            const o = this,
                c = arguments;
            clearTimeout(n), n = setTimeout(() => {
                e.apply(o, c)
            }, t)
        }
    }(function () {
        n.search = this.value, n.page = CONFIG.DEFAULT_PAGE, s(), o()
    }, CONFIG.DEBOUNCE_DELAY)), t.sortSelect.addEventListener("change", function () {
        n.sort = this.value, s(), o()
    }), t.clearFiltersBtn.addEventListener("click", function () {
        n = {
            page: CONFIG.DEFAULT_PAGE,
            sort: CONFIG.DEFAULT_SORT
        }, t.searchInput.value = "", t.sortSelect.value = CONFIG.DEFAULT_SORT, t.filterCheckboxes.forEach(e => e.checked = !1), s(), o()
    }), document.getElementById("deals-checkbox").addEventListener("change", function () {
        n.deals = this.checked ? 1 : null, n.page = CONFIG.DEFAULT_PAGE, s(), o()
    }), document.getElementById("demo-checkbox").addEventListener("change", function () {
        n.has_free_demo = this.checked ? 1 : null, n.page = CONFIG.DEFAULT_PAGE, s(), o()
    }), document.getElementById("dlc-checkbox") && document.getElementById("dlc-checkbox").addEventListener("change", function () {
        n.has_dlc = this.checked ? 1 : null, n.page = CONFIG.DEFAULT_PAGE, s(), o()
    }), s()
});
