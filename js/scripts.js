var donateButton = document.querySelector('.header-donate-button');
var heartIcon = document.querySelector('.header-call-outs .md-heart');

donateButton.addEventListener('mouseover', function() {
    heartIcon.textContent = 'favorite';
});

donateButton.addEventListener('mouseout', function() {
    heartIcon.textContent = 'favorite_border';
});