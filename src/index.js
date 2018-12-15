import './scss/main.scss';

function someFun() {
	const x = 'hello';
	return x;
}
document.getElementById('test').innerHTML = someFun();
