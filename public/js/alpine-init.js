function dataDashboard() {
    function getThemeFromLocalStorage() {
        // ! if user already changed the theme, use it
        if (window.localStorage.getItem("dark")) {
            return JSON.parse(window.localStorage.getItem("dark"));
        }

        // ! else return their preferences
        return (
            !!window.matchMedia &&
            window.matchMedia("(prefers-color-scheme: dark)").matches
        );
    }

    function setThemeToLocalStorage(value) {
        window.localStorage.setItem("dark", value);
    }

    return {
        dark: getThemeFromLocalStorage(),
        toggleTheme() {
            this.dark = !this.dark;
            setThemeToLocalStorage(this.dark);
        },
        isSideMenuOpen: false,
        toggleSideMenu() {
            this.isSideMenuOpen = !this.isSideMenuOpen;
        },
        closeSideMenu() {
            this.isSideMenuOpen = false;
        },
        isNotificationsMenuOpen: false,
        toggleNotificationsMenu() {
            this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen;
        },
        closeNotificationsMenu() {
            this.isNotificationsMenuOpen = false;
        },
        isProfileMenuOpen: false,
        toggleProfileMenu() {
            this.isProfileMenuOpen = !this.isProfileMenuOpen;
        },
        closeProfileMenu() {
            this.isProfileMenuOpen = false;
        },
        isArticleMenuOpen: false,
        toggleArticleMenu() {
            this.isArticleMenuOpen = !this.isArticleMenuOpen;
        },
        isLaptopMenuOpen: false,
        toggleLaptopMenu() {
            this.isLaptopMenuOpen = !this.isLaptopMenuOpen;
        },
    };
}

function dataMain() {
    return {
        isProfileMenuOpenMain: false,
        toggleProfileMenuMain() {
            this.isProfileMenuOpenMain = !this.isProfileMenuOpenMain;
        },
        closeProfileMenuMain() {
            this.isProfileMenuOpenMain = false;
        },
        isNavbarMenuOpen: false,
        toggleNavbarMenu() {
            this.isNavbarMenuOpen = !this.isNavbarMenuOpen;
        },
        closeNavbarMenu() {
            this.isNavbarMenuOpen = false;
        },
    };
}

function dataUsers() {
    return {
        isInputShow: false,
        toggleShowHide() {
            this.isInputShow = !this.isInputShow;
        },
        isInputShowConfirm: false,
        toggleShowHideConfirm() {
            this.isInputShowConfirm = !this.isInputShowConfirm;
        },
    };
}

function previewImage() {
    return {
        imageUrl: "",

        fileChosen(event) {
            this.fileToDataUrl(event, (src) => (this.imageUrl = src));
        },

        fileToDataUrl(event, callback) {
            if (!event.target.files.length) return;

            let file = event.target.files[0],
                reader = new FileReader();

            reader.readAsDataURL(file);
            reader.onload = (e) => callback(e.target.result);
        },
    };
}
