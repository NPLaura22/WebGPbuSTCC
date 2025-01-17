<!DOCTYPE html>
<html>
<head>
  <!--https://maujor.com/tutorial/propriedades-css-para-estilizacao-de-textos.php#text-align-->
  <!--https://www.blogson.com.br/como-dividir-uma-div-em-2-3-4-ou-mais-colunas/-->
  <!--SITE QR CODE https://qr.io/dashboard/-->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">  <!--ICONES TIPO AQUELES DE MENSAGEM--> 

  <title>Linhas e Horários - GPbuS</title>

  <script type="text/javascript">
    function showSection(sectionId) {
      var sections = document.getElementsByClassName("section");
      for (var i = 0; i < sections.length; i++) {
        if (sections[i].id === sectionId) {
          sections[i].style.display = "block";
        } else {
          sections[i].style.display = "none";
        }
      }
    }
  </script>

  <style type="text/css">
    .nav-link{
      color: white;
    }

    .nav-link:hover{
      color: #BE2121;
    }

    body {
      background-repeat: no-repeat;
      /*display: table; /*deixa reduzido pra direita*/
      width: 100%;
      height: 100vh;
      /*padding: 50px 0; /*leva a img mais pra cima dq a nav bar*/
      background-size: cover; /*deixa a imagem do back no fundo completo AMEMMMMMMMMMM*/
    }

    .myContainer {
      /*background-color: rgb(255, 165, 0, 0.7);*/
      background-color: white;
      border-radius: 8px;   
      padding: 20px;  
      color: black; 
      width: 80%;
    }

    a {
      text-decoration: none; 
    }

    a:link {  
      color: whitesmoke;
    }

    .card-title {
      color: orange;
    }
    .card-text {
      color: black;
    }   

    .img-container {
      width: 70px;
      height: 70px;
      overflow: hidden;

    }
    .img-container img {
      width: 90%;
      height: 90%;
      -webkit-transition: -webkit-transform .5s ease;
      transition: transform .5s ease;
    }

    .img-container:hover img {
      -webkit-transform: scale(1.1);
      transform: scale(1.3);
    }

    .display-3{
      font-size: 40px;
    }
    .containerApp {
      margin-top: 50px;
    }
    #app-info {
      margin-top: 50px;
    }
    .espaco{
      height: 500px;
    }


    .btn2:link,
    .btn2:visited {
      text-transform: uppercase;
      text-decoration: none;
      padding: 15px 40px;
      display: inline-block;
      transition: all .2s;
      position: absolute;
    }
    .btn2:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
      text-decoration: none;
    }
    .btn2:active {
      transform: translateY(-1px);
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
      text-decoration: none;
    }
    .btn2::after {
      content: "";
      display: inline-block;
      height: 100%;
      width: 100%;
      position: absolute;
      top: 0;
      left: 0;
      z-index: -1;
      transition: all .4s;
      text-decoration: none;
    }

    @keyframes moveInBottom {
      0% {
        opacity: 0;
        transform: translateY(30px);
      }

      100% {
        opacity: 1;
        transform: translateY(0px);
      }

    }

    .linH {
      background-color: black;
      color: whitesmoke;
      border-radius: 5px;
    }

    .hidden {
      display: none;
    }

    .column {
      display: flex;
      flex-direction: column;
    }
    .navbar{
      background-color: orange;
    }

    .radio-container {
      display: grid;
      grid-template-columns: repeat(2, 1fr); /* Divide em duas colunas com largura igual */
      gap: 10px;
    }

    .radio-label {
      position: relative;
      padding-left: 30px;
      cursor: pointer;
      color: black;
    }

    .radio-label:before {
      content: "";
      position: absolute;
      left: 0;
      top: 2px;
      width: 20px;
      height: 20px;
      border: 2px solid orange;
      border-radius: 50%;
      transition: all 0.3s ease;
    }

    .radio-input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
    }

    .radio-input:checked ~ .radio-label:before {
      background-color: orange;
      border: none;
    }

    .radio-input:checked ~ .radio-label:after {
      content: "";
      position: absolute;
      left: 6px;
      top: 6px;
      width: 8px;
      height: 8px;
      background-color: white;
      border-radius: 50%;
    }

    /*CLASSES BOTAÕ SWITCH*/
    .switch {
      position: relative;
      display: inline-block;
      width: 50px;
      height: 25px;
    }

    .switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: orange; /* Cor do botão quando no estado 'sol' */
      -webkit-transition: .4s;
      transition: .4s;
      border-radius: 34px;
    }

    .slider:before { /*DESIGN BOLINHA*/
      position: absolute;
      content: "";
      height: 17px;
      width: 17px;
      left: 4px;
      bottom: 4px;
      background-color: white; /* Cor do botão quando no estado 'sol' */
      -webkit-transition: .4s;
      transition: .4s;
      border-radius: 50%;
    }

    input:checked + .slider {
      background-color: white; /* Cor do botão quando no estado 'lua' */
    }

    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
      background-color: orange; /* Cor do botão quando no estado 'lua' */
    }
    /*FIM CLASSES BOTAÕ SWITCH*/

    /*CLASSE LEITURA VOZ*/
    .speech {
      cursor: pointer;
    }
  </style>

  

</head>
<link rel="icon" type="text/css" href="img/bus.png">

<body style="background-color: whitesmoke;">

  <nav class="navbar navbar-expand-lg navbar-dark" style="background: black;">
    <div class="container">
      <a href="https://www.apple.com/br/search/gpbus?src=globalnav"><i class="bi bi-apple" style="font-size: 20px; color: white;"></i></a>
      <a href="https://play.google.com/store/search?q=gpbus&c=apps&hl=pt_BR&gl=US"><i class="bi bi-google-play" style="font-size: 20px; color: white;"></i></a>
      <a href="#"><i class="bi bi-instagram" style="font-size: 20px; color: white;"></i></a>
      <a href="#"><i class="bi bi-youtube" style="font-size: 20px; color: white;"></i></a>

      <label class="switch">
          <input type="checkbox" id="modoSwitch">
          <span class="slider"></span>
        </label>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-dark" > 

    <div class="container-fluid">
      <a class="img-container" href="#"><img src="img/logo2.png" width="60px"></a> <!--IMAGEM DO CANTO SUPERIOR ESQUERDO -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 grid gap-4">
          <li class="nav-item">
            <a class="nav-link active speech" style="color:white;  font-family: sans-serif;"  href="index.html">Início</a> <!--text-decoration: underline wavy red;-->
          </li>

          <li class="nav-item dropdown speech">
            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;" >Cadastro Escolar</a>
            <ul class="dropdown-menu">

              <li><a class="dropdown-item" target="_blank" href="file:img/Formulario_Escolar.pdf"></i>Formulário Escolar</a></li>
              <li><a class="dropdown-item" target="_blank" href="file:img/Atestado_de_Frequencia.pdf">Atestado de Frequência</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link speech" style="color:black; font-family: sans-serif;  font-weight: bold;" aria-current="page" href="linhaHora.html">Linhas e Horários</a>
          </li>

          <li class="nav-item">
            <a class="nav-link speech" style="color:white; font-family: sans-serif;" target="_blank" href="https://www.youtube.com/watch?v=mLt1iUaZ3uQ&pp=ygUGb25pYnVz">Tutorial da Plataforma</a>
          </li>
        </ul> 
        <ul class="navbar-nav mb-2 mb-lg-0 grid gap-3">             
          <ul class="navbar-nav mb-2 mb-lg-0 grid gap-3">
            <ul class="navbar-nav mb-2 mb-lg-0 grid gap-3">  
              <button type="button" class="btn btn-outline-light position-relative speech "><a href="centralAjuda.html" style="color:black">Central de Ajuda </a><i class="bi bi-chat-dots-fill"></i> </button>
            </ul>
          </ul>

        </ul>
      </div>
    </nav>



    <div class="container myContainer">
      <h4 class="display-4 lead" style="text-align:center; color: orange;" id="conteudo"><b>Linhas e Horários</b></h4>  
      <h1 class="lead" style="text-align:center;"><i class="bi bi-alarm"></i> Procure o melhor dia e horário para sua viagem! <i class="bi bi-calendar"></i></h1>

      <div class="row">
        <div class="col-md-9 col-sm-12 mx-auto" align="center" style="max-width: 700px; background-color: white; color: black; border-radius: 8px;">
          <label class="form-label speech"><i class="bi bi-signpost-split-fill"></i> Selecione uma linha: </label>

          <select class="form-select" required onchange="showSection(this.value);">
            <option value=""></option>
            <option value="secao1">2022 - Cotil-Republicas <-> Republicas-Cotil</option>
            <option value="secao2">0106 - Terminal Saudade - Jardim Vaughan</option>
            <option value="secao3">0120 - Upa - Jardim Picerno</option>
            <option value="secao4">0130 - Jardim Paulistano - Centro (Rodoviaria)</option>
            <option value="secao5">0140 - Sumare - Dall Orto Via Virginia Viel</option>
            <option value="secao6">0145 - Sumare - Dall Orto Via Avenida Da Amizade  </option>
            <option value="secao7">0150 - Sumare - Parque Italia Via Altos De Sumare </option>
            <option value="secao8">0155 - Sumare - Maria Antonia Via Nova Veneza </option>
          </select>

          <div class="section" id="secao1" style="display:none;">
            <div class="container linH">
              <div class="row">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Consulte as datas disponíveis:  
                      </button>
                    </h2>
                    
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <div class="radio-container">
                          <label for="january" class="radio-label">Janeiro
                            <input type="radio" id="january" name="month" value="01" class="radio-input">
                          </label>

                          <label for="february" class="radio-label">Fevereiro
                            <input type="radio" id="february" name="month" value="02" class="radio-input">
                          </label>

                          <label for="march" class="radio-label">Março
                            <input type="radio" id="march" name="month" value="03" class="radio-input">
                          </label>

                          <label for="april" class="radio-label">Abril
                            <input type="radio" id="april" name="month" value="04" class="radio-input">
                          </label>

                          <label for="may" class="radio-label">Maio
                            <input type="radio" id="may" name="month" value="05" class="radio-input">
                          </label>

                          <label for="june" class="radio-label">Junho
                            <input type="radio" id="june" name="month" value="06" class="radio-input">
                          </label>

                          <label for="july" class="radio-label">Julho
                            <input type="radio" id="july" name="month" value="07" class="radio-input">
                          </label>

                          <label for="august" class="radio-label">Agosto
                            <input type="radio" id="august" name="month" value="08" class="radio-input">
                          </label>

                          <label for="september" class="radio-label">Setembro
                            <input type="radio" id="september" name="month" value="09" class="radio-input">
                          </label>

                          <label for="october" class="radio-label">Outubro
                            <input type="radio" id="october" name="month" value="10" class="radio-input">
                          </label>

                          <label for="november" class="radio-label">Novembro
                            <input type="radio" id="november" name="month" value="11" class="radio-input">
                          </label>

                          <label for="december" class="radio-label">Dezembro
                            <input type="radio" id="december" name="month" value="12" class="radio-input">
                          </label>
                        </div>

                        <br><br>

                        <input type="date" id="datepicker" class="hidden">

                      </div>
                    </div>

                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Consulte os horários de saída e os destinos
                      </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">Horário de saída</th>
                              <th scope="col">Destino</th>
                              <th scope="col">Motorista</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">05:00</th>
                              <td>Terminal Saudade</td>
                              <td>01 - João Márcio</td>
                            </tr>
                            <tr>
                              <th scope="row">07:00</th>
                              <td>Jardim Vaughan</td>
                              <td>34 - Márcio Antônio</td>
                            </tr>
                            <tr>
                              <th scope="row">09:00</th>
                              <td>Rodoviária</td>
                              <td>77 - Juliana Almeida</td>
                            </tr>
                            <tr>
                              <th scope="row">11:00</th>
                              <td>Terminal Saudade</td>
                              <td>09 - Meire Regina</td>
                            </tr>
                            <tr>
                              <th scope="row">13:00</th>
                              <td>Jardim Vaughan</td>
                              <td>12 - Leonardo Pascal</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="section" id="secao2" style="display:none;">
            <h6>Linha: 010 - Terminal Saudade - Jardim Vaughan</h6>
            <p>AAAAAAAAAAAAAAAAAAAAAAAA</p>
          </div>

          <div class="section" id="secao3" style="display:none;">
            <h6>Seção 3</h6>
            <p>FSFSFDSFDSFSF</p>
          </div>

          <div class="section" id="secao4" style="display:none;">
            <h6>Linha: 0106 - Terminal Saudade - Jardim Vaughan</h6>
            <p>AAAAAAAAAAAAAAAAAAAAAAAA</p>
          </div>

          <div class="section" id="secao5" style="display:none;">
            <h6>Linha: 0106 - Terminal Saudade - Jardim Vaughan</h6>
            <p>AAAAAAAAAAAAAAAAAAAAAAAA</p>
          </div>

          <div class="section" id="secao6" style="display:none;">
            <h6>Linha: 0106 - Terminal Saudade - Jardim Vaughan</h6>
            <p>AAAAAAAAAAAAAAAAAAAAAAAA</p>
          </div>

          <div class="section" id="secao7" style="display:none;">
            <h6>Linha: 0106 - Terminal Saudade - Jardim Vaughan</h6>
            <p>AAAAAAAAAAAAAAAAAAAAAAAA</p>
          </div>

          <div class="section" id="secao8" style="display:none;">
            <h6>Linha: 0106 - Terminal Saudade - Jardim Vaughan</h6>
            <p>AAAAAAAAAAAAAAAAAAAAAAAA</p>
          </div>


        </div>
      </div>

    </div>


    <script>
      var monthRadios = document.querySelectorAll('input[name="month"]');
      var datePicker = document.getElementById('datepicker');

      monthRadios.forEach(function(radio) {
        radio.addEventListener('change', function() {
          var selectedMonth = this.value;
          var currentDate = new Date();

          currentDate.setMonth(selectedMonth - 1);
          datePicker.value = currentDate.toISOString().slice(0, 10);
          datePicker.classList.remove('hidden');

            // Oculta os elementos não selecionados
            monthRadios.forEach(function(radio) {
              if (radio.value !== selectedMonth) {
                radio.parentNode.style.display = 'none';
              }
            });
          });
      });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <script type="text/javascript">

      const elementsWithSpeech = document.querySelectorAll(".speech");

            function speakText(text) {
              const speechSynthesis = window.speechSynthesis;

              if (speechSynthesis.speaking) {
                speechSynthesis.cancel();
              }

              const utterance = new SpeechSynthesisUtterance(text);
              speechSynthesis.speak(utterance);
            }

            elementsWithSpeech.forEach((element) => {
              element.addEventListener("mouseover", () => {
                const text = element.textContent;
                speakText(text);
              });
            });



      const modoSwitch = document.getElementById("modoSwitch");
            const conteudo = document.getElementById("conteudo");

            modoSwitch.addEventListener("change", () => {
              if (modoSwitch.checked) {
                // Modo Escuro
                conteudo.style.backgroundColor = "black";
                conteudo.style.color = "orange";
              } else {
                // Modo Claro
                conteudo.style.backgroundColor = "white";
                conteudo.style.color = "orange";
              }
            });
    </script>

    
  </body>
  </html>
