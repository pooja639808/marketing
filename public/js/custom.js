// custom.js
document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('search-toggle');
    const searchForm = document.getElementById('search-form');

    if (toggleBtn && searchForm) {
        toggleBtn.addEventListener('click', function (e) {
            e.preventDefault();
            searchForm.classList.toggle('hidden');

            if (!searchForm.classList.contains('hidden')) {
                searchForm.querySelector('input')?.focus();
            }
        });
    }
});
