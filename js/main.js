window.onscroll = function showHeader() {
	var header = document.querySelector('.header'); // находит класс

	if (window.pageYOffset > 200) { // измеряем по оси y
		header.classList.add('header_fixed');
	}
	else{
		header.classList.remove('header_fixed');
	}
}

const select = document.querySelector('select');
const allLng = ['en', 'ru', 'kz'];

select.addEventListener('change', changeURLLanguage);

function changeURLLanguage(){
	let lang = select.value;
	location.href = window.location.pathname + '#' + lang;
	location.reload();
}

function changeLanguage(){
	let hash = window.location.hash;
	hash = hash.substr(1);
	console.log(hash);
	if (!allLng.includes(hash)){
		location.href = window.location.pathname + '#en';
		location.reload();
	}
	select.value = hash;
	for (let key in langArr){
		document.querySelector('.lng-' + key).innerHTML = langArr[key][hash];
	} 
}

changeLanguage();
