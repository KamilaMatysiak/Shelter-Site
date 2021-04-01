<html>
<head>
	<link rel="Stylesheet" href="ankieta.css">
	<meta charset="utf-8">
	<title>Ankieta - pies</title>
</head>
<body>
<div class="header">
    <a href="home.html" class="logo"><img src="form/logo.png" alt="logo"></a>
        <div class="header-right">
            <a class ="active" href="home.html">HOME</a>
            <a href="psy.html">PSY</a>
            <a href="koty.html">KOTY</a>
            <a href="adoptowane.html">ADOPTOWANE</a>
            <a href="zasadyadopcji.html">ZASADY ADOPCJI</a>
            <a href="kontakt.html">KONTAKT</a>
        </div>
    </div>
 <div class="wydruk"> 
     
1: Czy pies, którego chce Pan/i adoptować, to pies dla Pana/i 
(i ewentualnie innych osób, z którymi Pan/i mieszka), czy też dla kogoś innego - 
np. z rodziny - i będzie on mieszkał gdzieś indziej?<br>
<?php switch($_GET['czyjpies']){
    case "moj":
        echo "Psa adoptuję dla siebie i będzie mieszkał ze mną";
        break;
    case "niemoj":
        echo "Psa adoptuję dla kogoś innego i będzie mieszkał gdzie indziej";
        break;
}
?>
     
     <br><br>
    
2: Jakie jest Pana/i GŁÓWNE źródło utrzymania?<br>
 <?php echo $_GET['zrodloDochodow']?>
     <br><br>
     
     
3: Gdzie Pan/i mieszka?<br>
<?php switch($_GET['miejscezam']){
    case "ogrod":
        echo "w domu z ogrodem/podwórkiem";
        break;
    case "blok":
        echo "w bloku/ kamienicy";
        break;
    case "inne":
        echo $_GET['miejscezamk'];
        break;
}
?>
     <br><br>
     
4: Kto jest właścicielem mieszkania lub domu, w którym Pan/i mieszka?<br>
<?php switch($_GET['wlascicielmiesz']){
    case "ja":
        echo "ja";
        break;
    case "nieja":
        echo "inna osoba, z którą mieszkam ";
        break;
    case "inny":
        echo $_GET['wlascicielmieszk'];
        break;
}
?>
     <br><br>

5: Ile godzin w ciągu doby (MAKSYMALNIE) pies będzie zostawał sam w domu?: <br>
 <?php echo $_GET['samwdomu']?>
     <br><br>
     
6: Gdzie będzie przebywał pies w ciągu całej doby? Możliwe, że przez część dnia pies będzie przebywał w domu z Panem/ią, część dnia będzie spędzał na terenie posesji luzem, czasem będzie np. zamykany w kojcu, a na chwilę będzie np. przywiązywany łańcuchem przy budzie. Proszę więc zaznaczyć WSZYSTKIE miejsca, gdzie pies będzie przebywał (nawet na krótko) w ciągu doby <br><br>
     <?php
    
    if($_GET['ulokowanie1']=='on')
    {
        echo "w domu, ";
    }
     
    if($_GET['ulokowanie2']=='on')
    {
        echo "na posesji luzem, ";
    }
     if($_GET['ulokowanie3']=='on')
    {
        echo "na posesji w budzie, ";
    }
     
    if($_GET['ulokowanie4']=='on')
    {
        echo "na posesji w kojcu, ";
    }
      if($_GET['ulokowanie5']=='on')
    {
        echo "na posesji na łańcuchu";
    }

    ?>
     <br><br>
     
7: Czy ktoś z domowników ma uczulenie na sierść lub ślinę psa?<br>
        <?php switch($_GET['alergia']){
    case "tak":
        echo " wszyscy domownicy są zgodni, że adopcja psa ze schroniska to dobry pomysł - to jest nasza wspólna decyzja";
        break;
    case "nie":
        echo "część domowników bardzo chce mieć psa adoptowanego ze schroniska, ale niektórzy nie są do końca przekonani do tego pomysłu";
        break;
    case "niewiem":
        echo "3";
        break;
    default:
        echo "Nie wiem";
}
?>
     <br><br>
     
8: Co pozostali domownicy sądzą o pomyśle adoptowania psa ze schroniska?<br>
       <?php switch($_GET['zgodni']){
    case "bardzo":
        echo " wszyscy domownicy są zgodni, że adopcja psa ze schroniska to dobry pomysł - to jest nasza wspólna decyzja";
        break;
    case "niezbyt":
        echo "część domowników bardzo chce mieć psa adoptowanego ze schroniska, ale niektórzy nie są do końca przekonani do tego pomysłu";
        break;

}
?>
     <br><br>
     
9: Czy kiedykolwiek w przeszłości lub obecnie posiada Pan/i psa (psy)? <br>
     <?php switch($_GET['inne']){
    case "blabla":
        echo "Tak";
        break;
    case "bleble":
        echo "Nie";
        break;
}
?>
     <br><br>
     
10: Gdzie będzie przebywał pies w czasie Pana/i nieobecności (oraz innych domowników, jeśli nie mieszka Pan/i sam/a) - np. w czasie, gdy jest Pan/i w pracy?<br>
     <?php echo $_GET['pieswychodzacy']?>
     
     <br>
</div>
</body>
</html>