<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Виджет платежной формы</title>
     <link rel="stylesheet" href="assets/style.css">
     <script src="assets/binking.js"></script>
</head>
 <body>
     <div class="container">
      <!------------------Banking card---begin---------------------->
         <div class="card__wrapper">
                  <div class="card__front">
                        <div class="card__front-top">
                          <!--empty div-->
                        </div>

                        <div class="card__number">
                            <label for="card__number_inp" class="card__number_lb">Номер карты</label>
                            <input type="text" id="card__number_inp">
                        </div>

                        <div class="card__group">
                             <div class="card__month">
                                <label for="card__month_inp" class="card__number_lb">Месяц</label>
                                <input type="text" id="card__month_inp">
                            </div>

                            <div class="card__year">
                                <label for="card__year_inp" class="card__number_lb">Год</label>
                                <input type="text" id="card__year_inp">
                            </div>
                        </div>
                    </div>

                     <div class="card__back">
                        <div class="card__top-back">
                          <!--empty div-->
                        </div>
                        <div class="card__back_line"></div>
                        <div class="card__back_cvv-group">
                            <div class="card__back-cvv">
                                 <label for="card__back-cvv_inp" class="card__back_lb">Код</label>
                                <input type="text" id="card__back-cvv_inp">
                            </div>
                        </div>
                    </div> 
        </div> 
            <!------------------Banking card---end---------------------->  
          
    </div>
 


    
  </body>
</html>