<div class="popup__wrapper js-popup">
    <div class="popup__container">
        <button class="popup__close js-popup-close">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.08337 2.0835L17.9167 17.9168M2.08337 17.9168L17.9167 2.0835" stroke="#050F28" stroke-width="3.16667" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
        </button>
        <div class="popup__content">
            <form action="#" class="popup__form">
                <h2 class="popup__title">Новая запись</h2>
                <label class="popup__label popup__item-label">
                    <span>Заголовок</span>
                    <input name="postTitle" type="text">
                </label>
                <label class="popup__label popup__item-date error">
                    <span>Дата</span>
                    <input name="postDate" type="text">
                    <span class="errorMessage">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.16" cx="12" cy="12" r="9" fill="#FF832A" />
                            <circle cx="12" cy="12" r="9" stroke="#FF832A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <rect x="12" y="16" width="0.01" height="0.01" stroke="#FF832A" stroke-width="3" stroke-linejoin="round" />
                            <path d="M12 12L12 8" stroke="#FF832A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        Обязательное поле</span>
                </label>
                <label class="popup__label popup__item-desc ">
                    <span>Заметка</span>
                    <textarea name="postContent"></textarea>
                </label>
                <button class="popup__submit" type="submit">Поделиться наболевшим</button>
            </form>
        </div>
    </div>
</div>
