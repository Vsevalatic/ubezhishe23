let currentImageIndex = 0;
const images = [
    '1zal.webp',
    '3zal.webp',
    '2zal.webp',
    'outside.webp',
    '4zal.webp',
    '5zal.webp',
];

function openCarousel(index) {
    currentImageIndex = index;
    document.getElementById('carousel-img').src = images[currentImageIndex];
    document.getElementById('carousel').style.display = 'flex';
}

function closeCarousel() {
    document.getElementById('carousel').style.display = 'none';
}

function changeImage(direction) {
    currentImageIndex += direction;
    if (currentImageIndex < 0) {
        currentImageIndex = images.length - 1;
    } else if (currentImageIndex >= images.length) {
        currentImageIndex = 0;
    }
    document.getElementById('carousel-img').src = images[currentImageIndex];
}

document.getElementById('showQRBtn').addEventListener('click', function() {
    
    document.getElementById('qr-container').style.display = 'block';
});


document.getElementById('showQRBtn').addEventListener('click', function() {
    document.getElementById('qr-container').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
});

function closeQR() {
    document.getElementById('qr-container').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
}





let lastScrollTop = 0;
const header = document.querySelector("header");
const nav = document.querySelector(".menu"); // Меню навигации
const headerHeight = header.offsetHeight;
const navHeight = nav.offsetHeight; // Высота меню

window.addEventListener("scroll", () => {
    let scrollTop = window.scrollY || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop && scrollTop > headerHeight - navHeight) {
        // Если скроллим вниз и скрыли верхнюю часть шапки — поднимаем её
        header.style.transform = `translateY(-${headerHeight - navHeight}px)`;
    } else if (scrollTop < lastScrollTop) {
        // Если скроллим вверх — полностью показываем шапку
        header.style.transform = "translateY(0)";
    }

    lastScrollTop = scrollTop;
});
