//animação menu responsivo
$(".btn-menu").click(function () {
    $(".menu").show();
});

$(".btn-close").click(function () {
    $(".menu").hide();
});

$("nav ul li").click(function () {
    $(".menu").hide();
});

const $html = document.querySelector('html')
const $checkbox = document.querySelector('#switch')

$checkbox.addEventListener('change', function(){
	$html.classList.toggle('darkmode')
})