class ModalWindow {
    constructor(modalId, openBtnId) {
        this.modal = document.getElementById(modalId);
        this.closeBtn = this.modal.querySelector("#modal-btn-close");
        this.openBtn = document.getElementById(openBtnId);

        if (!this.modal || !this.closeBtn || !this.openBtn) {
            console.error("Ошибка: Не все элементы найдены!");
            return;
        }

        this.openBtn.onclick = () => this.open();
        this.closeBtn.onclick = () => this.close();
        window.onclick = (event) => {
            if (event.target === this.modal) this.close();
        };
    }

    open() {
        this.modal.style.display = "block";
    }

    close() {
        this.modal.style.display = "none";
    }
}

