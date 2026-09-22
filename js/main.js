document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.querySelector(".menu-toggle");
    const nav = document.querySelector("#navigation");
    const closeMenu = () => {
        nav.classList.remove("is-open");
        toggle.setAttribute("aria-expanded", "false");
        toggle.setAttribute("aria-label", "Open navigation");
    };
    toggle?.addEventListener("click", () => {
        const open = nav.classList.toggle("is-open");
        toggle.setAttribute("aria-expanded", String(open));
        toggle.setAttribute(
            "aria-label",
            open ? "Close navigation" : "Open navigation",
        );
    });
    nav?.querySelectorAll("a").forEach((a) =>
        a.addEventListener("click", closeMenu),
    );
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" && nav?.classList.contains("is-open")) {
            closeMenu();
            toggle.focus();
        }
    });
    document.addEventListener("click", (e) => {
        if (!e.target.closest(".header")) closeMenu();
    });
    const reduced = window.matchMedia("(prefers-reduced-motion: reduce)");
    document.querySelectorAll(".faq-list details").forEach((details) => {
        const summary = details.querySelector("summary");
        let animation;

        summary?.addEventListener("click", (event) => {
            event.preventDefault();
            const isOpen = details.open;

            if (reduced.matches) {
                details.open = !isOpen;
                return;
            }

            animation?.cancel();
            details.style.overflow = "hidden";
            const startHeight = `${details.offsetHeight}px`;

            if (!isOpen) details.open = true;
            const endHeight = isOpen
                ? `${summary.offsetHeight}px`
                : `${details.offsetHeight}px`;

            details.style.height = startHeight;
            animation = details.animate(
                { height: [startHeight, endHeight] },
                { duration: 260, easing: "cubic-bezier(.2,.8,.2,1)" },
            );

            animation.onfinish = () => {
                details.open = !isOpen;
                details.style.height = "";
                details.style.overflow = "";
                animation = undefined;
            };
        });
    });
    if (window.gsap && window.ScrollTrigger) {
        gsap.registerPlugin(ScrollTrigger);
        gsap.matchMedia().add("(prefers-reduced-motion: no-preference)", () => {
            gsap.from(".hero-enter", {
                opacity: 0,
                y: 25,
                duration: 0.95,
                stagger: 0.11,
                ease: "power3.out",
                clearProps: "all",
            });
            gsap.utils
                .toArray(".reveal")
                .forEach((el) =>
                    gsap.from(el, {
                        opacity: 0,
                        y: 28,
                        duration: 0.8,
                        ease: "power2.out",
                        clearProps: "all",
                        scrollTrigger: {
                            trigger: el,
                            start: "top 94%",
                            once: true,
                        },
                    }),
                );
            gsap.to(".fresh-badge", {
                rotation: 4,
                y: 6,
                duration: 3,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut",
            });
        });
    }
    const form = document.querySelector("#quoteForm");
    const formSuccess = document.querySelector("#formSuccess");
    if (formSuccess && new URLSearchParams(window.location.search).get("submitted") === "true") {
        formSuccess.hidden = false;
        formSuccess.scrollIntoView({ behavior: "smooth", block: "center" });
    }
    form?.addEventListener("submit", () => {
        const button = form.querySelector("button[type=submit]");
        button.disabled = true;
        button.textContent = "Sending your request…";
    });
    window.addEventListener("pageshow", () => {
        const button = form?.querySelector("button[type=submit]");
        if (button) {
            button.disabled = false;
            button.textContent = "Request my quote →";
        }
    });
});
