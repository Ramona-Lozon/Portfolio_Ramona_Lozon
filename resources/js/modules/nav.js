    export function navMenu() {
    const hamburger = document.querySelector('#logo');
    const menu = document.querySelector(".hamburger-dropdown");
    const logoCon = document.querySelector('.logo-con');
    const menuCon = document.querySelector('.menu-con');

    function openMenu() {
        if (!menu.classList.contains('open')) {
            menuCon.classList.add('X');
            menu.classList.add("open");
            menu.classList.remove("slide-back");
            menu.classList.add("slide-out");
        }
    }

    function closeMenu() {
        if (menu.classList.contains('open')) {
            menu.classList.remove('slide-out');
            menu.classList.add('slide-back');
            document.removeEventListener('click', docClick);

            menu.addEventListener('animationend', function () {
                menu.classList.remove('open');
                menuCon.classList.remove('X');
                menu.classList.remove('slide-back');
            }, { once: true });
        }
    }

    function docClick(e) {
        if (!menu.contains(e.target) && !hamburger.contains(e.target)) {
            closeMenu();
        }
    }

    function toggleMenu(e) {
        e.stopPropagation();
        if (menu.classList.contains('open')) {
            closeMenu();
        } else {
            openMenu();
            menu.addEventListener('animationend', function () {
                document.addEventListener('click', docClick);
            }, { once: true });
        }
    }

    function bindHover() {
        logoCon.addEventListener('mouseenter', openMenu);
        logoCon.addEventListener('mouseleave', closeMenu);
        // hamburger.addEventListener('mouseenter', openMenu);
        // hamburger.addEventListener('mouseleave', closeMenu);
        hamburger.removeEventListener('click', toggleMenu);
    }

    function bindClick() {
        hamburger.addEventListener('click', toggleMenu);
        // remove hover listeners if they were previously bound
        logoCon.removeEventListener('mouseenter', openMenu);
        logoCon.removeEventListener('mouseleave', closeMenu);
        // hamburger.removeEventListener('mouseenter', openMenu);
        // hamburger.removeEventListener('mouseleave', closeMenu);
    }

    function handleResize() {
        if (window.innerWidth > 768) {
            bindHover();
        } else {
            bindClick();
        }
    }

    handleResize();
    window.addEventListener('resize', handleResize);
}