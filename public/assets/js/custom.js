document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('menuToggle');
    const wrapper = document.querySelector('.mobile-menu-wrapper');
    const menu = document.getElementById('mobileMenu');
    const navItems = document.querySelectorAll('.nav-item a'); // Все ссылки в меню

    // Обработчик для чекбокса меню
    if (menuToggle) {
        menuToggle.addEventListener('change', function() {
            if (menuToggle.checked) {
                wrapper.classList.add('expanded');
                menu.classList.add('visible');
            } else {
                wrapper.classList.remove('expanded');
                menu.classList.remove('visible');
            }
        });
    }

    // Обработчик для всех ссылок меню
    navItems.forEach(item => {
        item.addEventListener('click', () => {
            if (menuToggle.checked) {
                menuToggle.checked = false; // Снимаем отметку с чекбокса
                wrapper.classList.remove('expanded');
                menu.classList.remove('visible');
            }
        });
    });
});



// Получаем элементы модального окна и кнопок для открытия
const modal = document.getElementById('modal');
const modalOverlay = document.getElementById('modalOverlay');
const openModalBtns = document.querySelectorAll('.open-modal-btn'); // Все кнопки с классом open-modal-btn
const closeModalBtn = document.getElementById('closeModalBtn');

// Открытие модального окна
if (openModalBtns.length > 0 && modal && modalOverlay) {
    openModalBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            console.log('Opening modal');
            modal.classList.add('open'); // Добавляем класс для анимации
            modalOverlay.style.opacity = '1'; // Делаем оверлей видимым
            modalOverlay.style.visibility = 'visible'; // Делаем оверлей видимым
            modal.classList.remove('closing');
            setTimeout(() => {
                modalOverlay.style.transition = 'opacity 0.4s ease'; // Задержка анимации для оверлея
            }, 800);
        });
    });

    // Закрытие модального окна
    if (closeModalBtn) {
        closeModalBtn.addEventListener('click', () => {
            console.log('Closing modal');
            modal.classList.add('closing');
            modalOverlay.style.transition = 'opacity 0.4s ease';
            modalOverlay.style.opacity = '0';

            setTimeout(() => {
                modal.classList.remove('open');
                modal.classList.remove('closing');
                modalOverlay.style.visibility = 'hidden';
            }, 800);
        });
    }

    // Закрытие модального окна при клике за пределы окна
    window.addEventListener('click', (event) => {
        if (event.target === modalOverlay) {
            modal.classList.add('closing');
            modalOverlay.style.opacity = '0';
            modalOverlay.style.visibility = 'hidden';
            setTimeout(() => {
                modal.classList.remove('open');
            }, 800);
        }
    });
}

// Анимация набора текста
const textElements = document.querySelectorAll('.typing-text');
textElements.forEach(textElement => {
    const text = textElement.textContent;
    textElement.textContent = '';
    let index = 0;

    function type() {
        if (index < text.length) {
            const span = document.createElement('span');
            span.textContent = text.charAt(index);
            textElement.appendChild(span);
            index++;
            setTimeout(type, 80);
        } else {
            textElement.classList.add('visible');
        }
    }

    const handleScroll = () => {
        const scrollPosition = window.scrollY + window.innerHeight;
        const elementPosition = textElement.getBoundingClientRect().top + window.scrollY;

        if (scrollPosition > elementPosition) {
            textElement.classList.remove('hidden');
            type();
            window.removeEventListener('scroll', handleScroll);
        }
    };

    window.addEventListener('scroll', handleScroll);
});


window.addEventListener('load', () => {
    const textElement = document.querySelector('.text');
    if (textElement) {
        textElement.classList.add('visible');
    }
});
