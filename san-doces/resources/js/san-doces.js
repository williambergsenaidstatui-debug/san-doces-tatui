document.addEventListener('DOMContentLoaded', () => {
    const categories = document.querySelectorAll('.category');
    const groups = document.querySelectorAll('.product-group');
    const cards = document.querySelectorAll('.product-card');
    const search = document.querySelector('#search');

    if (categories.length && groups.length) {
        categories.forEach((item) => {
            item.addEventListener('click', () => {
                categories.forEach((category) => category.classList.remove('active'));
                item.classList.add('active');

                const target = item.dataset.category;
                if (target) {
                    groups.forEach((group) => {
                        group.style.display = target === 'all' || group.dataset.group === target ? 'block' : 'none';
                    });
                }

                if (search) {
                    search.value = '';
                }
                cards.forEach((card) => {
                    card.style.display = 'block';
                });
            });
        });
    }

    if (search && groups.length && cards.length) {
        search.addEventListener('input', () => {
            const term = search.value.toLowerCase();

            groups.forEach((group) => {
                let found = false;

                group.querySelectorAll('.product-card').forEach((card) => {
                    const show = card.dataset.name.toLowerCase().includes(term);
                    card.style.display = show ? 'block' : 'none';
                    found ||= show;
                });

                group.style.display = found ? 'block' : 'none';
            });

            categories.forEach((category) => category.classList.remove('active'));
        });
    }

    document.querySelectorAll('.order-area .category').forEach((button) => {
        button.addEventListener('click', () => {
            document.querySelectorAll('.order-area .category').forEach((item) => item.classList.remove('active'));
            button.classList.add('active');
        });
    });

    const orderForm = document.querySelector('#formulario');
    if (orderForm) {
        orderForm.addEventListener('submit', (event) => {
            event.preventDefault();
            const name = orderForm.querySelector('input')?.value || '';
            const message = `Olá! Meu nome é ${name} e gostaria de fazer uma encomenda.`;
            window.open(`https://wa.me/5515991444740?text=${encodeURIComponent(message)}`, '_blank');
        });
    }

    const contactForm = document.querySelector('#mensagem');
    if (contactForm) {
        contactForm.addEventListener('submit', (event) => {
            event.preventDefault();
            const name = contactForm.querySelector('input')?.value || '';
            const message = `Olá! Meu nome é ${name} e gostaria de falar com a San Doces.`;
            window.open(`https://wa.me/5515991444740?text=${encodeURIComponent(message)}`, '_blank');
        });
    }
});
