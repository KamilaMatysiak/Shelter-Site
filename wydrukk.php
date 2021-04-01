<html>
<head>
	<link rel="Stylesheet" href="ankieta.css">
	<meta charset="utf-8">
	<title>Ankieta - kot</title>
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
     
1: Czy kot, którego chce Pan/i adoptować, to kot dla Pana/i 
(i ewentualnie innych osób, z którymi Pan/i mieszka), czy też dla kogoś innego - 
np. z rodziny - i będzie on mieszkał gdzieś indziej?<br>
<?php switch($_GET['czyjkot']){
    case "moj":
        echo "Kota adoptuję dla siebie i będzie mieszkał ze mną";
        break;
    case "niemoj":
        echo "Kota adoptuję dla kogoś innego i będzie mieszkał gdzie indziej";
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

5: Ile godzin w ciągu doby (MAKSYMALNIE) kot będzie zostawał sam w domu?: <br>
 <?php echo $_GET['samwdomu']?>
     <br><br>
     
6: 6. Proszę zaznaczyć, które z następujących akcesoriów są Pana/i zdaniem absolutnie niezbędne dla dobrego samopoczucia kota w domu i planuje Pan/i je zapewnić kotu, którego chce Pan/i adoptować.
<br>
<?php
     if($_GET['wyposazenie1']=='on')
    {
        echo "kuweta, ";
    }
     
    if($_GET['wyposazenie2']=='on')
    {
        echo "drapaki, ";
    }
     if($_GET['wyposazenie3']=='on')
    {
        echo "kocie kryjówki, ";
    }
     
    if($_GET['wyposazenie4']=='on')
    {
        echo "kocie miski i pojemniki na wodę, ";
    }
      if($_GET['wyposazenie5']=='on')
    {
        echo "zabawki dla kota";
    }
    ?>
     <br><br>
     
7: Czy ktoś z domowników ma uczulenie na sierść lub ślinę kota?<br>
        <?php switch($_GET['alergia']){
    case "tak":
        echo " Tak";
        break;
    case "nie":
        echo "Nie";
        break;
    case "niewiem":
        echo "Nie wiem";
        break;
    default:
        echo "Nie wiem";
}
?>
     <br><br>
     
8: Co pozostali domownicy sądzą o pomyśle adoptowania kota ze schroniska?<br>
       <?php switch($_GET['zgodni']){
    case "bardzo":
        echo " wszyscy domownicy są zgodni, że adopcja kota ze schroniska to dobry pomysł - to jest nasza wspólna decyzja";
        break;
    case "niezbyt":
        echo "część domowników bardzo chce mieć kota adoptowanego ze schroniska, ale niektórzy nie są do końca przekonani do tego pomysłu";
        break;
}
?>
     <br><br>
     
9: Czy kiedykolwiek w przeszłości lub obecnie posiada Pan/i kota (koty)? <br>
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
     
10: Jak zamierza Pan(i) zadbać o bezpieczeństwo kota wychodzącego z domu?<br>
     <?php echo $_GET['kotwychodzacy']?>
     
     <br>
</div>
</body>
</html>