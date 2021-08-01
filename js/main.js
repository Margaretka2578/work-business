// (function() {
	'use strict';
  
const widthWindow = document.documentElement.clientWidth,
	curtainBlock = document.querySelector('div.curtain');
var modalWrapper = curtainBlock.querySelector('.modal-wrapper'), block_but = false;
	function trackScroll() {
	  var scrolled = window.pageYOffset;
	  var coords = document.documentElement.clientHeight;
  
	  if (scrolled > coords) {
		goTopBtn.classList.add('back_to_top-show');
	  }
	  if (scrolled < coords) {
		goTopBtn.classList.remove('back_to_top-show');
	  }
	}
  
	function backToTop() {
	  if (window.pageYOffset > 0) {
		window.scrollBy(0, -80);
		setTimeout(backToTop, 0);
	  }
	}
  
	var goTopBtn = document.querySelector('.back_to_top');
  
	window.addEventListener('scroll', trackScroll);
	goTopBtn.addEventListener('click', backToTop);

	const time_call = $('#time_call').attr('placeholder'),
		birthday = $('#birthday').attr('placeholder'),
		num_passport = $('#num_passport').attr('placeholder'),
		date_passport = $('#date_passport').attr('placeholder');

	$('#time_call').focus(function(){
		$(this).attr('placeholder', 'HH:ii');
	});
	$('#time_call').blur(function(){
		$(this).attr('placeholder', time_call);
	});
	$('#time_call').on('keyup', function(e){
		let text =  $(this).val(),
			text1 = text.replace(/[^0-9]/g,''),
			textlen = text1.length,
			res = '';
		if(textlen > 4) text1 = text1.substr(0, 4);
		for(var i = 0; i < textlen; i++){
			if(i == 2) res += ':';
			if(text1[i] !== undefined) res += text1[i];
		}
		$(this).val(res);
	});
	
	$('#num_passport').focus(function(){
		$(this).attr('placeholder', 'XX XX YYYYYY');
	});
	$('#num_passport').blur(function(){
		$(this).attr('placeholder', num_passport);
	});
	$('#num_passport').on('keyup', function(e){
		let text =  $(this).val(),
			text1 = text.replace(/[^0-9]/g,''),
			textlen = text1.length,
			res = '';
		if(textlen > 10) text1 = text1.substr(0, 10);
		for(var i = 0; i < textlen; i++){
			if(i == 2 || i == 4) res += ' ';
			if(text1[i] !== undefined) res += text1[i];
		}
		$(this).val(res);
	});

	$('#birthday, #date_passport').focus(function(){
		$(this).attr('placeholder', 'dd/mm/yyyy');
	});
	$('#birthday, #date_passport').blur(function(){
		$(this).attr('placeholder', (this.id == 'birthday') ? birthday : date_passport);
	});
	$('#birthday, #date_passport').on('keyup', function(e){
		let text =  $(this).val(),
			text1 = text.replace(/[^0-9]/g,''),
			textlen = text1.length,
			res = '';
		if(textlen > 8) text1 = text1.substr(0, 8);
		for(var i = 0; i < textlen; i++){
			if(i == 2 || i == 4) res += '/';
			if(text1[i] !== undefined) res += text1[i];
		}
		$(this).val(res);
	});



	/**
	 * Открытие диалоговога окна
	 * @param {*} nameForm наименование формы, которую будут открывать
	 * @returns
	 */
	function openDialog(nameForm) {

		let openForm;

		if (nameForm === "success-result" || nameForm === 'error-result' || nameForm === 'subscrube-result') {

			openForm = document.documentElement.querySelector('.' + nameForm);

		} else {

			openForm = document.documentElement.querySelector('form[name=' + nameForm + ']');

		}

		openForm.classList.add('active');

		curtainBlock.style.zIndex = "9999";
		curtainBlock.style.opacity = "1";

		setTimeout(modalWrapper.style.display = "block", 600);

		return false;
	}

	/**
	 * Закрытие диалогового окна
	 */
	function closeDialog() {

		let currentForm = modalWrapper.querySelector('.active');

		modalWrapper.style.display = "none";
		currentForm.classList.remove('active');
		curtainBlock.style.zIndex = "-100";
		curtainBlock.style.opacity = "0";

	}


	$(document).ready(function(){
		//resize в coin-slider
		setTimeout(function(){
			$("#coin-slider").coinslider({
				width: window.innerWidth,
				height: 700,
				spw: 5,
				sph: 4
			});
		}, 100);
		$('.coin-slider a').on('click', function(e){
			e.preventDefault();
		});

		if(sessionStorage.getItem('subscrube')) {

			let messageSubsrube = curtainBlock.querySelector('.subscrube-result .message-result');
			messageSubsrube.innerHTML = sessionStorage.getItem('subscrube');
	
			openDialog('subscrube-result');
	
			sessionStorage.removeItem('subscrube');
		}
	});

	/**
	 * кроссплатформенное создание XMLHttpRequest
	 *
	 * @returns {*}
	 */
	function getXmlHttp(){
		let xmlhttp;
		try {
			xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (E) {
				xmlhttp = false;
			}
		}
		if (!xmlhttp && typeof XMLHttpRequest !== 'undefined') {
			xmlhttp = new XMLHttpRequest();
		}
		return xmlhttp;
	}

	
	/**
	 * обработка данных форм перед отправкой
	 * @param {*} frm element форма с которой приходят данные
	 * @returns boolean false
	 */
	function sendForm(frm) {
	if(!block_but){
		block_but = true;
		$(frm).find('button, .modal-btn').attr('disabled', true);

		let nameForm,
			userName,
			userPhone,
			userMail,
			userMessage,
			nullField,
			data = {},
			captcha,
			captchaError = document.getElementById('recaptchaError');

		nameForm = frm.getAttribute('name');

		data.form = nameForm;

		userName = validateName(frm.querySelector('[name="name"]'));
		userPhone = validatePhone(frm.querySelector('[name="phone"]'));
		userMail = validateEmail(frm.querySelector('[name="mail"]'));


		if (userName === false || userPhone === false || userMail === false) {
			return false;
		}

		if (nameForm === 'feedback-form') {
			captcha = grecaptcha.getResponse();

			if (!captcha.length) {
				captchaError.innerText = '* Вы не прошли проверку "Я не робот"';
				return false;
			} else {
				captchaError.innerText = '';
			}
		}

		data.name = userName;
		data.phone = userPhone;
		data.mail = userMail;

		let req = getXmlHttp();
			if($(frm).hasClass('form_footer')){
				data.mess = frm.querySelector('[name="mess"]').value;
				req.open('POST', '/feedback.php', true);
			}
			else if($(frm).hasClass('form_podp')){
				data.time = frm.querySelector('[name="time"]').value;
				data.date = frm.querySelector('[name="date"]').value;
				data.city = frm.querySelector('[name="city"]').value;
				data.num = frm.querySelector('[name="num"]').value;
				data.when = frm.querySelector('[name="when"]').value;
				data.who = frm.querySelector('[name="who"]').value;
				data.adress = frm.querySelector('[name="adress"]').value;
				req.open('POST', '/mail.php', true);
			}
			else{
				data.theme = ''
				if($(frm).hasClass('form_podpis')){
					data.mail_from = 'yes';
					data.theme = 'a';
				}
				req.open('POST', '/send.php', true);
			}
			let dataSend = 'data=' + JSON.stringify(data);
			req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			req.onreadystatechange = function() {
				if (req.readyState === 4) {
					if(req.status === 200) {

						let answerServer = req.responseText;
						console.log(answerServer)

						if (answerServer === 'error captcha') {

							captchaError.innerText = 'Не пройдена каптча! Попробуйте еще раз!';
							grecaptcha.reset();

						}

						if (answerServer === "success") {
							if($(frm).hasClass("form_modal_file")){
								$('.modal-title, .form_modal_file').remove();
								$('.modaal-container').addClass('modal_pop_suc');
								$('.modaal-content-container').append('<div class="result-send success-result active">'+
										'<div class="icon-success">'+
											'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">'+
												'<path d="M36 17L22 33l-8-7" stroke-miterlimit="10" fill="none" stroke="#001659" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"></path>'+
												'<path d="M25 0A25 25 0 000 25a25 25 0 0025 25 25 25 0 0025-25A25 25 0 0025 0zm0 3a22 22 0 0122 22 22 22 0 01-22 22A22 22 0 013 25 22 22 0 0125 3z" fill="#ccc"></path>'+
											'</svg>'+
										'</div>'+
										'<div class="message-result"><h3>Спасибо за заявку на обратный звонок!</h3><p>Я свяжусь с вами лично в течении 72 часов</p></div>'+
									'</div>');
								block_but = false;
								$(frm).find('button, .modal-btn').attr('disabled', false);
							}
							else{
								let type_modal = '2';
								if($(frm).hasClass('form_footer')){
									type_modal = '5';
								}
								else if($(frm).hasClass('form_podp')){
									type_modal = '3';
								}
								else if($(frm).hasClass('form_podpis')){
									type_modal = '4';
								}
								document.cookie = "type_form=" + type_modal;
								// $('.call_modal').attr('href', 'modal.php?v=' + $('.call_modal').attr('ver') + '&type=' + type_modal);
								// console.log('modal.php?v=' + $('.call_modal').attr('ver') + '&type=' + type_modal);
								setTimeout(function(){ 
									$('.call_modal').click(); 
									block_but = false;
									$(frm).find('button, .modal-btn').attr('disabled', false);
								}, 300);
							}

						}

						frm.reset();
					}
				}
			}

			req.send(dataSend);
			
		return false;
	}
	}
	window.addEventListener("beforeunload", function(e){
		document.cookie = "type_form=1";
	 }, false);
	
	/**
	 * Валидация поля с именем пользователя
	 * @param {*} userName
	 * @param {*} fieldName
	 */
	function validateName(field) {


		let userName = field.value;

		userName = trimStr(userName);

		if (!userName) {

			alert("Введите Ваше имя");
			return false;

		}

		if (userName.length > 70) {

			alert("Слишком длинное имя");
			return false;

		}

		return userName;
	}

	/**
	 * Проверка номера телефона
	 * проверяется наличие впереди знака + или цифры
	 * далее наличие цифр, символов скобок ( ) , двоеточия :, дефиса -
	 * без определённого патерна ввода
	 * при несоответствии возвращается 1
	 */
	function validatePhone(field) {

		let userPhone = field.value;
		let reg = /^[\d+][\d\(\)\ -]{4,20}\d$/;

		userPhone = trimStr(userPhone);

		if (!userPhone) {

			alert ("Введите номер телефона");
			return false;

		}

		if(userPhone.search(reg) === -1) {

			// alert("В номере телефона могут быть только цифры, знаки + ( ) : -");
			// return false;

		}

		return userPhone;

	}

	/**
	 * Проверка e-mail
	 * Регулярное выражение проверки e-mail (HTML5 спецификация)
	 * при несоответствии возвращается 1
	 */
	function validateEmail(field) {

		let emailRegExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

		let userEmail = field.value;

		userEmail = trimStr(userEmail);

		if (!userEmail) {

			alert("Введите Ваш email");
			return false;

		}

		if(userEmail.search(emailRegExp) === -1) {

			alert("Не корректный email");

			return false;

		}


		return userEmail;

	}

	/**
	 * Очистка текста от пробелов в начале и в конце строки
	 * удаляются все пробелы в начале и в конце строки
	 * возвращается строка, очищенная от пробелов в начале и в конце
	 */
	function trimStr(s) {
	
		s = s.replace( /^\s+/g, '');
		return s.replace( /\s+$/g, '');
	
	}

//   })();