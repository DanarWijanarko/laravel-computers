// *-----------------------------Log Out-----------------------------

const formLogout = document.querySelector("#form-logout");
const btnLogout = document.querySelector("#btn-logout");

const jika = formLogout || btnLogout;

if (jika != null) {
    btnLogout.addEventListener("click", function (event) {
        const name = this.getAttribute("name");
        event.preventDefault();

        Swal.fire({
            title: "Are you sure " + name + "?",
            text: "You must be Sign in after exiting this session!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#0ea5e9",
            cancelButtonColor: "#dc2626",
            confirmButtonText: "Yes, Sure!",
        }).then((result) => {
            if (result.isConfirmed) {
                formLogout.submit();
            }
        });
    });
}

// *-----------------------------Delete Article-----------------------------

$(".btn-delete-article").on("click", function (e) {
    e.preventDefault();
    let formDeleteArticle = $(this).closest(".form-delete-article");
    let articleName = $(this).attr("article-name");
    Swal.fire({
        title: "Are You Sure Want to Delete ?",
        text: "Article '" + articleName + "' Will be Deleted Permanently.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#0ea5e9",
        cancelButtonColor: "#dc2626",
        confirmButtonText: "Yes, Sure!",
    }).then((result) => {
        if (result.isConfirmed) {
            formDeleteArticle.submit();
        }
    });
});

// *-----------------------------Delete Laptop-----------------------------

const formDeleteLaptop = document.querySelector("#form-delete-laptop");
const btnDeleteLaptop = document.querySelector("#btn-delete-laptop");

const DeleteLaptopIfNotExist = formDeleteLaptop || btnDeleteLaptop;

if (DeleteLaptopIfNotExist != null) {
    btnDeleteLaptop.addEventListener("click", function (event) {
        const laptopName = this.getAttribute("laptop-name");
        event.preventDefault();

        Swal.fire({
            title: "Are You Sure Want to Delete ?",
            text: "Laptop '" + laptopName + "' Will be Deleted Permanently.",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#0ea5e9",
            cancelButtonColor: "#dc2626",
            confirmButtonText: "Yes, Sure!",
        }).then((result) => {
            if (result.isConfirmed) {
                formDeleteLaptop.submit();
            }
        });
    });
}

// *-----------------------------Delete Message-----------------------------

$(".btn-delete-message").on("click", function (e) {
    e.preventDefault();
    let formDeleteMessage = $(this).closest(".form-delete-message");
    let messageName = $(this).attr("message-name");
    Swal.fire({
        title: "Are You Sure Want to Delete ?",
        text: "Message '" + messageName + "' Will be Deleted Permanently.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#0ea5e9",
        cancelButtonColor: "#dc2626",
        confirmButtonText: "Yes, Sure!",
    }).then((result) => {
        if (result.value) {
            formDeleteMessage.submit();
        }
    });
});

// *-----------------------------Delete Users-----------------------------

$(".btn-delete-user").on("click", function (e) {
    e.preventDefault();
    let formDeleteuser = $(this).closest(".form-delete-user");
    let userName = $(this).attr("user-name");
    Swal.fire({
        title: "Are You Sure Want to Delete ?",
        text: "User '" + userName + "' Will be Deleted Permanently.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#0ea5e9",
        cancelButtonColor: "#dc2626",
        confirmButtonText: "Yes, Sure!",
    }).then((result) => {
        if (result.value) {
            formDeleteuser.submit();
        }
    });
});

// *-----------------------------Submit Message Success-----------------------------

const success = document.querySelector("#success");
const attr = success.getAttribute("success");

if (attr == "done") {
    Swal.fire({
        title: "Success",
        text: "The Message was sent Succesfully!",
        icon: "success",
        confirmButtonColor: "#0ea5e9",
        confirmButtonText: "OK",
    });
}
