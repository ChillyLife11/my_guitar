document.addEventListener('DOMContentLoaded', () => {
	const burger = document.querySelector('.burger');
	const nav = document.querySelector('.nav');
	if (burger) {
		burger.addEventListener('click', function() {
			this.classList.toggle('active');
			nav.classList.toggle('active');
		});
	}

	if (document.querySelector('.hero__swiper')) {
		const heroSlider = new Swiper('.hero__swiper', {
			slidesPerView: 1,
			spaceBetween: 30,
			autoHeight: true,
			autoplay: {
				delay: 3000,
				disableOnInteraction: false
			},
			pagination: {
				el: '.hero__pagination',
				clickable: true
			}
		});
	}


	const callBtns = document.querySelectorAll('.call-form');
	const phoneInput = document.querySelector('.form__input[name="phone');
	const overlay = document.querySelector('.overlay');
	const form = document.querySelector('.overlay__form');
	const closeOverlay = document.querySelector('.overlay__close');
	const formCost = document.querySelector('.form__cost');
	const formGuitar = document.querySelector('.form__guitar');
	const formInputs = document.querySelectorAll('.form__input');
	let guitarCost;
	let guitarDisc;

	if (phoneInput) {
		phoneInput.addEventListener('input', function() {
			this.value = this.value.replace(/[A-Za-zА-Яа-яЁё]/, '')
		})
	}
	if (callBtns) {
		callBtns.forEach(btn => {
			btn.addEventListener('click', function() {
				overlay.classList.add('active');
				form.classList.add('active');
				guitarCost = this.dataset.cost;
				guitarDisc = this.dataset.discount ? this.dataset.discount : null;

				formGuitar.innerHTML = this.dataset.guitar;
				formCost.innerHTML = this.dataset.discount ? `Цена: <span class="form__price discounted">₽ ${this.dataset.cost}</span> <del class="form__discount">₽ ${this.dataset.discount}</del>` : 
															 `Цена: <span class="form__price">₽ ${this.dataset.cost}</span>` 

			});
		});
	}
	if (closeOverlay) {
		closeOverlay.addEventListener('click', () => {
			overlay.classList.remove('active');
			form.classList.remove('active');
			form.fullname.classList.remove('red');
			form.phone.classList.remove('red');
			form.address.classList.remove('red');
			form.reset();
		})
	}
	if (form) {
		form.addEventListener('submit', function(e) {
			e.preventDefault();
			let fullname = this.fullname.value.trim();
			let phone = this.phone.value.trim();
			let address = this.address.value.trim();
			let hasErr = false;

			if (fullname.length < 2) {
				this.fullname.classList.add('red');
				hasErr = true;
			}
			if (phone.length < 8) {
				this.phone.classList.add('red');
				hasErr = true;
			}
			if (address.length < 8) {
				this.address.classList.add('red');
				hasErr = true;
			}

			if (!hasErr) {
				console.log('code of sending')
			}
		});
		formInputs.forEach(input => input.addEventListener('input', () => input.classList.remove('red')))
	}
});