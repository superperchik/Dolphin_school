showtest.onclick = function() {
    document.getElementById('quiz-test-1').style.display = 'block';
    document.getElementById('showtest').style.display = 'none';
    document.getElementById('hidetest').style.display = 'block';
    style.display = 'none';
}
hidetest.onclick = function() {
    document.getElementById('quiz-test-1').style.display = 'none';
    document.getElementById('hidetest').style.display = 'none';
    document.getElementById('showtest').style.display = 'block';
}