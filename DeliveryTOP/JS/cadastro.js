    var input = document.getElementsByClassName('input');

    var botao = document.getElementById('cadastrar');

  var corOriginal = input[0].style.backgroundColor;

  var corBotaoOriginal = botao.style.backgroundColor;

  var corMouseEmCima = "#C4D0C5";

  var timer;

  for (var i = 0; i < input.length; i++) {
    input[i].addEventListener('mouseover', function() {
      this.style.backgroundColor = corMouseEmCima;
      this.style.borderColor = '#37BD45';
    });

    input[i].addEventListener('mouseout', function() {
      this.style.backgroundColor = corOriginal;
    });
  }

  botao.addEventListener('mouseover', function(){
    this.style.backgroundColor = corMouseEmCima;
    this.style.color = 'white';
  });

  botao.addEventListener('mouseout', function() {
    this.style.backgroundColor = corBotaoOriginal;
    this.style.color = '#37BD45';
  });

