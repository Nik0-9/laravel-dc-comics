import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const searchForm = document.getElementById("search-form");
if (searchForm) {
    const searchSelect = document.getElementById("search");
    searchSelect.addEventListener("change", () => {
        if (searchSelect.value !== "") {
            searchForm.submit();
        }
    });
}

const deleteButton = document.getElementById('comicDelete');
deleteButton.addEventListner('click',(e)=>{
    e.preventDefault();
});

