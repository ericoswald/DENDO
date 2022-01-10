const themeSwitch = document.querySelector('input');

        themeSwitch.addEventListener('change', () => {
            document.body.classList.toggle('light-mode');
        });