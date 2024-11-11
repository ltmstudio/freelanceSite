// Получаем элементы модального окна и кнопок для открытия
const modal = document.getElementById('modal');
const modalOverlay = document.getElementById('modalOverlay');
const openModalBtns = document.querySelectorAll('.open-modal-btn'); // Все кнопки с классом open-modal-btn
const closeModalBtn = document.getElementById('closeModalBtn');

// Открытие модального окна
openModalBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        console.log('Opening modal');
        modal.classList.add('open'); // Добавляем класс для анимации
        modalOverlay.style.opacity = '1'; // Делаем оверлей видимым
        modalOverlay.style.visibility = 'visible'; // Делаем оверлей видимым

        // Убираем класс closing, если он был добавлен
        modal.classList.remove('closing');
        setTimeout(() => {
            modalOverlay.style.transition = 'opacity 0.4s ease'; // Задержка анимации для оверлея
        }, 800); // Ждем окончания анимации модального окна
    });
});

// Закрытие модального окна
closeModalBtn.addEventListener('click', () => {
    console.log('Closing modal');
    modal.classList.add('closing'); // Добавляем класс для анимации закрытия
    modalOverlay.style.transition = 'opacity 0.4s ease'; // Плавно исчезает
    modalOverlay.style.opacity = '0'; // Оверлей исчезает

    setTimeout(() => {
        modal.classList.remove('open'); // Убираем класс открытия
        modal.classList.remove('closing'); // Сбрасываем класс закрытия
        modalOverlay.style.visibility = 'hidden'; // Скрываем оверлей
    }, 800); // Задержка для завершения анимации
});




// Закрытие модального окна при клике за пределы окна
window.addEventListener('click', (event) => {
    if (event.target === modalOverlay) {
        modal.classList.add('closing'); // Добавляем класс для анимации закрытия
        modalOverlay.style.opacity = '0'; // Оверлей исчезает
        modalOverlay.style.visibility = 'hidden'; // Скрываем оверлей
        setTimeout(() => {
            modal.classList.remove('open'); // Убираем класс после анимации
        }, 800); // Задержка для завершения анимации
    }
});


// Закрытие модального окна при клике за пределы окна
window.addEventListener('click', (event) => {
    if (event.target === modalOverlay) {
        modal.classList.add('closing'); // Добавляем класс для анимации закрытия
        modalOverlay.style.opacity = '0'; // Скрываем оверлей
        modalOverlay.style.visibility = 'hidden'; // Скрываем оверлей
        setTimeout(() => {
            modal.classList.remove('open'); // Убираем класс после анимации
        }, 800); // Задержка для завершения анимации
    }
});



window.addEventListener("load", function () {
    const bgWrapper = document.querySelector('.text');
    bgWrapper.classList.add('visible'); // Добавляем класс для начала анимации

    document.getElementById('menuButton').addEventListener('click', function () {
        const mobileMenu = document.getElementById('mobileMenu');
        mobileMenu.classList.toggle('visible'); // Добавляем/удаляем класс видимости
    });

});


const textElements = document.querySelectorAll('.typing-text'); // Выбираем все элементы с классом typing-text

textElements.forEach(textElement => {
    const text = textElement.textContent;
    textElement.textContent = '';
    let index = 0;

    function type() {
        if (index < text.length) {
            const span = document.createElement('span'); // Создаем элемент span для каждой буквы
            span.textContent = text.charAt(index); // Устанавливаем текст
            textElement.appendChild(span); // Добавляем span к элементу

            // Используем requestAnimationFrame для плавного появления

            index++;
            setTimeout(type, 80); // Установите задержку между буквами
        } else {
            textElement.classList.add('visible'); // Добавляем класс видимости после окончания печати
        }
    }

    const handleScroll = () => {
        const scrollPosition = window.scrollY + window.innerHeight;
        const elementPosition = textElement.getBoundingClientRect().top + window.scrollY;

        if (scrollPosition > elementPosition) {
            textElement.classList.remove('hidden');
            type(); // Начинаем печатать
            window.removeEventListener('scroll', handleScroll);
        }
    };

    window.addEventListener('scroll', handleScroll);
});