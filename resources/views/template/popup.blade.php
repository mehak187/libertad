<div class="popup">
    <div class="content">
        <div class="d-flex justify-content-between align-items-center">
            <p class="text-dark fw-bold fs-4 mb-0">Share this link via</p>
            <div class="close"><i class="fa-regular fa-circle-xmark text-dark fs-4"></i></div>
        </div>
        <ul class="icons">
            <a href="https://www.facebook.com/yourPage"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/yourProfile"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/yourAccount"><i class="fab fa-instagram"></i></a>
            <a href="https://wa.me/phoneNumber"><i class="fab fa-whatsapp"></i></a>
            <a href="https://t.me/yourChannel"><i class="fab fa-telegram-plane"></i></a>
        </ul>
        
        <p class="text-dark fw-bold fs-4 mb-0">Or copy link</p>
        <div class="field">
            @php
            $currentUrl = url()->current();
            @endphp
            <input type="text" readonly value="{{$currentUrl}}">
            <button>Copy</button>
        </div>
    </div>
</div>
<script>
    const viewBtn = document.querySelector(".view-modal"),
        popup = document.querySelector(".popup"),
        close = popup.querySelector(".close"),
        field = popup.querySelector(".field"),
        input = field.querySelector("input"),
        copy = field.querySelector("button");

    viewBtn.onclick = () => {
        popup.classList.toggle("show");
    }
    close.onclick = () => {
        viewBtn.click();
    }

    copy.onclick = () => {
        input.select(); //select input value
        if (document.execCommand("copy")) { //if the selected text is copied
            field.classList.add("active");
            copy.innerText = "Copied";
            setTimeout(() => {
                window.getSelection().removeAllRanges(); //remove selection from page
                field.classList.remove("active");
                copy.innerText = "Copy";
            }, 3000);
        }
    }
</script>
<style>
    .popup {
        position: absolute;
        left: 50%;
    }

    .view-modal {
        color: #e8e4ee;
    }

    .popup {
        background-color: #E8C552;
        padding: 25px;
        border-radius: 15px;
        top: 10%;
        max-width: 380px;
        width: 100%;
        opacity: 0;
        pointer-events: none;
        box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
        transform: translate(-50%, -50%) scale(1.2);
        transition: top 0s 0.2s ease-in-out,
            opacity 0.2s 0s ease-in-out,
            transform 0.2s 0s ease-in-out;
    }

    .popup.show {
        top: 35%;
        left: 50%;
        opacity: 1;
        pointer-events: auto;
        transform: translate(-50%, -50%) scale(1);
        transition: top 0s 0s ease-in-out,
            opacity 0.2s 0s ease-in-out,
            transform 0.2s 0s ease-in-out;

    }

    .popup :is(header, .icons, .field) {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .popup header {
        padding-bottom: 15px;
        border-bottom: 1px solid #ebedf9;
    }

    header span {
        font-size: 21px;
        font-weight: 600;
    }

    header .close,
    .icons a {
        display: flex;
        align-items: center;
        border-radius: 50%;
        justify-content: center;
        transition: all 0.3s ease-in-out;
    }

    header .close {
        color: #878787;
        font-size: 17px;
        background: #f3f3f3;
        height: 33px;
        width: 33px;
        cursor: pointer;
    }

    header .close:hover {
        background: #ebedf9;
    }

    .popup .content {
        margin: 20px 0;
    }

    .popup .icons {
        margin: 20px 0 20px 0;
        padding-left: 0;
    }

    .content p {
        font-size: 16px;
    }

    .content .icons a {
        height: 50px;
        width: 50px;
        font-size: 20px;
        text-decoration: none;
        border: 1px solid transparent;
    }

    .icons a i {
        transition: transform 0.3s ease-in-out;
    }

    .icons a:nth-child(1) {
        color: #1877F2;
        border-color: #b7d4fb;
        background-color: #fff;
    }

    .icons a:nth-child(1):hover {
        background: #1877F2;
    }

    .icons a:nth-child(2) {
        color: #46C1F6;
        border-color: #b6e7fc;
        background-color: #fff;
    }

    .icons a:nth-child(2):hover {
        background: #46C1F6;
    }

    .icons a:nth-child(3) {
        color: #e1306c;
        border-color: #f5bccf;
        background-color: #fff;
    }

    .icons a:nth-child(3):hover {
        background: #e1306c;
    }

    .icons a:nth-child(4) {
        color: #25D366;
        border-color: #bef4d2;
        background-color: #fff;
    }

    .icons a:nth-child(4):hover {
        background: #25D366;
    }

    .icons a:nth-child(5) {
        color: #0088cc;
        border-color: #b3e6ff;
        background-color: #fff;
    }

    .icons a:nth-child(5):hover {
        background: #0088cc;
    }

    .icons a:hover {
        color: #fff;
        border-color: transparent;
    }

    .icons a:hover i {
        transform: scale(1.2);
    }

    .content .field {
        margin: 12px 0 -5px 0;
        height: 45px;
        border-radius: 10px;
        padding: 5px;
        border: 1px solid #000;
    }

    .field i {
        width: 50px;
        font-size: 18px;
        text-align: center;
    }

    .field input {
        width: 100%;
        height: 100%;
        background-color: transparent;
        color: black;
        border: none;
        outline: none;
        font-size: 15px;
    }

    .field button {
        color: #000;
        padding: 5px 15px;
        border: none;
        background-color: transparent;
        border-radius: 10px;
        border: solid #000 1px;
    }
</style>
