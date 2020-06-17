<!doctype html>
<html lang="de">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>PINA | Internationaler Systemvergleich: Frühkindliche Bildungsforschung</title>
  <meta name="description" content="Das PINA Institut ist ein interdisziplin&auml;rer Forschungsverbund zur fr&uuml;hkindlichen Bildung und Entwicklung">

  <link rel="stylesheet" href="https://www.pina-research.de/assets/css/style.css">
</head>
<body>

  <header class="container-fluid header">
    <div class="lang-nav container">
  <div class="row">
    <ul class="lang-nav__list col-sm-12">
            <li class="lang-nav__list-item lang-nav__list-item--active">
        <a href="https://www.pina-research.de/forschung/projects/bika-beteiligung-im-kita-alltag">DE</a>
      </li>
            <li class="lang-nav__list-item">
        <a href="https://www.pina-research.de/en/research/projects/bika-beteiligung-im-kita-alltag">EN</a>
      </li>
          </ul>
  </div>
</div>
    <!-- <nav class="navigation column" role="navigation">
  <ul class="menu">
    
  </ul>
</nav> -->


<nav class="nav container">
  <a href="https://www.pina-research.de" rel="home" class="nav__home-link no-underline">
   <img src="https://www.pina-research.de/assets/images/pina_logo.png" alt="PINA Logo" class="nav__logo">
  </a>
  <ul class="nav__link-list">
          <li class="nav__link-item nav__link-item--with-children">
        <a href="https://www.pina-research.de/ueber-uns">&Uuml;ber Uns</a>
        <!-- do not display children of blog page in menu -->
                  <ul class="nav__sub-link-list">
                          <li class="nav__link-item">
                <a href="https://www.pina-research.de/ueber-uns/team">Team</a>
              </li>
                          <li class="nav__link-item">
                <a href="https://www.pina-research.de/ueber-uns/institut">Institut</a>
              </li>
                      </ul>
              </li>
          <li class="nav__link-item nav__link-item--with-children">
        <a href="https://www.pina-research.de/veranstaltungen">Veranstaltungen</a>
        <!-- do not display children of blog page in menu -->
                  <ul class="nav__sub-link-list">
                          <li class="nav__link-item">
                <a href="https://www.pina-research.de/veranstaltungen/kolloquien">Kolloquien</a>
              </li>
                          <li class="nav__link-item">
                <a href="https://www.pina-research.de/veranstaltungen/konferenzen">Konferenzen</a>
              </li>
                          <li class="nav__link-item">
                <a href="https://www.pina-research.de/veranstaltungen/weitere-veranstaltungen">Weitere Veranstaltungen</a>
              </li>
                      </ul>
              </li>
          <li class="nav__link-item nav__link-item--active  nav__link-item--with-children">
        <a href="https://www.pina-research.de/forschung">Forschung</a>
        <!-- do not display children of blog page in menu -->
                  <ul class="nav__sub-link-list">
                          <li class="nav__link-item nav__link-item--active">
                <a href="https://www.pina-research.de/forschung/projects">Projekte</a>
              </li>
                          <li class="nav__link-item">
                <a href="https://www.pina-research.de/forschung/forschungsethik">Forschungsethik</a>
              </li>
                          <li class="nav__link-item">
                <a href="https://www.pina-research.de/forschung/publikationen">Publikationen</a>
              </li>
                      </ul>
              </li>
          <li class="nav__link-item nav__link-item--with-children">
        <a href="https://www.pina-research.de/blog">News</a>
        <!-- do not display children of blog page in menu -->
              </li>
          <li class="nav__link-item nav__link-item--with-children">
        <a href="https://www.pina-research.de/mitmachen">Mitmachen</a>
        <!-- do not display children of blog page in menu -->
                  <ul class="nav__sub-link-list">
                          <li class="nav__link-item">
                <a href="https://www.pina-research.de/mitmachen/anmeldung-eltern-und-kinder">Anmeldung Eltern und Kind</a>
              </li>
                          <li class="nav__link-item">
                <a href="https://www.pina-research.de/mitmachen/anmeldung-kindertageseinrichtung">Anmeldung Kindertageseinrichtung</a>
              </li>
                          <li class="nav__link-item">
                <a href="https://www.pina-research.de/mitmachen/kontakt">Kontakt und Anfahrt</a>
              </li>
                      </ul>
              </li>
      </ul>
  <img class="hamburger" src="/assets/images/menu.svg">
  <div class="mobile-nav">
    <img class="mobile-nav__close" src="/assets/images/x.svg">
    <ul class="mobile-nav__list">
              <li class="mobile-nav__list-item">
          <a href="https://www.pina-research.de/ueber-uns">&Uuml;ber Uns</a>
        </li>
              <li class="mobile-nav__list-item">
          <a href="https://www.pina-research.de/veranstaltungen">Veranstaltungen</a>
        </li>
              <li class="mobile-nav__list-item nav__link-item--active ">
          <a href="https://www.pina-research.de/forschung">Forschung</a>
        </li>
              <li class="mobile-nav__list-item">
          <a href="https://www.pina-research.de/blog">News</a>
        </li>
              <li class="mobile-nav__list-item">
          <a href="https://www.pina-research.de/mitmachen">Mitmachen</a>
        </li>
          </ul>
  </div>
</nav>

<script>
  const hamburger = document.querySelector('.hamburger');
  const mobileMenu = document.querySelector('.mobile-nav');
  const mobileCloseBtn = document.querySelector('.mobile-nav__close');

  if(!hamburger || !mobileMenu) {
    console.error('Hamburger menu not found!')
  } else {
    hamburger.addEventListener('click', onHamburgerClick);
    mobileCloseBtn.addEventListener('click', onMobileCloseBtnClick);
  }

  function onHamburgerClick() {
    mobileMenu.classList.add('mobile-nav--visible');
  }

  function onMobileCloseBtnClick() {
    mobileMenu.classList.remove('mobile-nav--visible');
  }
</script>  </header>

<main class="main">
    <header class="container">
      <div class="row">
        <div class="col-sm-12 col-md-10 offset-md-1">
          <h1>
            Internationaler Systemvergleich: Frühkindliche Bildungsforschung
          </h1>
        </div>
      </div>
    </header>

    <div class="container">
      <div class="row">
        
<script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="sticky-table.min.js"></script>
<link rel="stylesheet" type="text/css" href="sticky-table.min.css" />
<style type="text/css">
#dtable div.cell-narrow {
	width: 10em;
}
#dtable div.cell-wide {
	width: 15em;
}
#dtable div.cell-wider {
	width: 100%;
}
#dtable div.cell-header {
	float: left;
	margin-right: 1em;
	border-left-width: 1px;
	border-right-width: 1px;
}
#dtable div.cell-header-last {
	float: left;
	border-right-width: 1px;
}
#dtable div.cell-super-header {
	text-align: inherit;
}
.extender {
	width: 100%;
	background: linear-gradient(to bottom, rgba(238,238,238,0), rgba(238,238,238,1));
	display: block;
	position: relative;
	height: 70px;
	top: -70px;
	margin-bottom: -70px;
	border-bottom-width: 0px !important;
}
.collapser {
	width: 100%;
	text-align: center;
	display: block;
	color: inherit !important;
	text-decoration: none;
	border-bottom-width: 0px !important;
	color: inherit;
	cursor: n-resize;
}
#dtable .collapsed-cell {
	overflow-y: hidden;
}
#dtable td, #dtable th {
	padding: .5em;
	outline-width: 0px;
	border-style: solid;
	border-color: gray;
	border-width: 0px;
	border-bottom-width: 1px;
	font-size: 80%;
}
.references, .read-more {
	font-size: 8pt;
}
.cell-content p {
	margin: 0.25em 0;
}
.sticky-header th {
	border: 1px solid black;
}
.extended-section-heading {
	cursor: n-resize;
}
.collapsed-section-heading {
	cursor: s-resize;
}
.collapsed-section {
	overflow-y: hidden;
}
.cat-info-cntry {
	font-size: 80%;
}
.cat-info-content {
	font-size: 75%;
	padding-left: 1em;
}


</style>
<script type="text/javascript">

$(function() {
	var max_cell_height = 150;
	var max_section_height = 70;
	$('.read-more a').on('click', function(e){
		var href = $(this).attr('href').substring(1);
		console.log(href);
		extendSection(href);
		$("#more-content-"+href).queue(function() {
			$('html, body').animate({
				scrollTop: $("#more-content-"+href+"-heading").offset().top
			},'slow');
			$(this).dequeue();
		});
		e.preventDefault();
		return false;
	});
	function extendCell() {
		var my_cell = $(".cell-content", $(this).parent());
		var my_collapser = $(".collapser", $(this).parent());
		my_cell.removeClass("collapsed-cell").height("auto");
		my_collapser.show();
		$(this).hide();
		return false;
	}
	function collapseCell() {
		var my_cell = $(".cell-content", $(this).parent());
		var my_extender = $(".extender", $(this).parent());
		my_cell.addClass("collapsed-cell").height(max_cell_height);
		my_extender.show();
		$(this).hide();
		return false;
	}
	function extendSection(which) {
		var el = $("#more-content-"+which);
		var doit = function() {
			el.animate({height: el.data("old-height")}).queue(function() {
				$(this).css("height", "auto");
				$(this).dequeue();
			}).removeClass("collapsed-section");
		}
		if(el.data("require-visibility-for") && $("#more-content-"+el.data("require-visibility-for")).hasClass("collapsed-section")) {
			extendSection(el.data("require-visibility-for"));
			$("#more-content-"+el.data("require-visibility-for")).queue(function() {
				doit();
				$(this).dequeue();
			});
		} else {
			doit();
		}
		$("*[data-toggle-for="+which+"]").addClass("extended-section-heading").removeClass("collapsed-section-heading");
	}
	function collapseSection(which) {
		//$("#more-content-"+which).slideUp();
		$("<div>").addClass("extender").insertAfter($("#more-content-"+which));
		$("#more-content-"+which).data("old-height", $("#more-content-"+which).height()).addClass("collapsed-section").animate({
			height: max_section_height
		}, "slow", "linear");
		if($("html").scrollTop() > $("#more-content-"+which+"-heading").offset().top) {
			$('html').animate({
				scrollTop: $("html").scrollTop() - $("#more-content-"+which).height() + max_section_height
			}, "slow", "linear");
		}
		$("*[data-toggle-for="+which+"]").removeClass("extended-section-heading").addClass("collapsed-section-heading");
	}
	function toggleSection() {
		if(!$("#more-content-"+$(this).data("toggle-for")).hasClass("collapsed-section")) {
			collapseSection($(this).data("toggle-for"));
			
		} else {
			extendSection($(this).data("toggle-for"));
		}
		return false;
	}
	$("#dtable .cell-content").each(function(){
		if($(this).height() > max_cell_height) {
			$(this).parent().append(
				$("<a>").attr("href", "#").click(extendCell).addClass("extender").css("cursor", "s-resize")
			).append(
				$("<a>").attr("href", "#").click(collapseCell).addClass("collapser").html("&#x25B2;").hide()
			);
			$(this).addClass("collapsed-cell").height(max_cell_height);
		}
	});
	$("#toggle-additional-info").click(function() {
		$(".read-more, .references").toggle();
		return false;
	});
	
	//$(".read-more, .references").hide();

	$(".more-content-country").each(function() {
		$("<a>").attr("href", "#").addClass("extender").attr("data-toggle-for",$(this).data("section-name")).insertAfter($(this)).click(toggleSection).click();
	});

	$(".more-content-country-heading").click(toggleSection).addClass("collapsed-section-heading");

	//$(".more-content-country-heading, .more-content-country-section-heading").click(toggleSectionOnHeading).each(function() {
	//	collapseSection($(this).data("toggle-for"));
	//}).addClass("collapsed-section-heading");

	$(".category-cell a").prop("href", "#").click(function() {
		$("#cat-content-"+$(this).data("cat")).dialog({title: $(this).data("cat-name"), width: 700});
		return false;
	});

});
</script>



<div class="intro-text"><p>In dem Seminar Internationaler Systemvergleich haben zehn Studierende des Masters Frühkindliche Bildungsforschung Kriterien entwickelt, anhand derer sie unterschiedliche Länder miteinander verglichen haben. Die Kriterien lassen sich dabei in sieben Kategorien unterordnen: Strukturelle Daten des Landes, Strukturelle Daten der frühkindlichen Betreuungsmöglichkeiten, soziale und landesspezifische Aspekte, Qualitätsverständnis, Erzieherdaten, Struktur und System der Frühkindlichen Betreuung sowie Curriculum und Qualitätskontrolle. Unter diese sieben Kategorien fallen insgesamt 49 Kriterien. Die Kriterien wurden interessengeleitet gemeinsam im Plenum entworfen und im Prozess des Seminars fortlaufend erweitert, zusammengefasst, angepasst und überarbeitet.</p>
<p>Auch die Wahl der Länder basierte rein auf dem Interesse der Studierenden. Jeder Studierende recherchierte speziell für ein Land alle Kriterien, sodass eine Gegenüberstellung der Länder möglich wurde. Dabei wurde versucht, möglichst viele Kontinente und Kulturen abzubilden. Die von den Studierenden ausgewählten Länder sind: Australien, Neuseeland, Kanada, Thailand, Japan, Island, Tansania, Frankreich und Finnland. Die Dozentin hat außerdem zu den Ländern Deutschland und Südamerika recherchiert. Alle Ergebnisse wurden zudem auch im Seminar präsentiert und es wurde interessanten landesspezifischen sowie generellen Diskussionsfragen zur frühen Bildung nachgegangen. </p>
<p>Auch Probleme und Schwierigkeiten bei der Recherche wurden besprochen. Da in manchen Ländern das Verständnis und das System von früher Bildung stark von dem uns gewohnten abweicht und die Literatur stellenweise sehr begrenzt ist, entstehen teilweise Lücken. Letztendlich konnte aber das Ziel des Seminars, einen internationalen Systemvergleich von früher Bildung ausgewählter Länder vorzunehmen, gut erreicht werden und es ist eine Vielzahl unterschiedlicher Eindrücke und Ergebnisse entstanden.</p></div>

<div class="sticky-table sticky-ltr-cells">
<table id="dtable">
<thead>
<tr class="sticky-header"><td></td><th colspan="1">
	<div class="cell-super-header">
				<a href="#australien">Australien</a>
			</div>
</th>
<th colspan="3">
	<div class="cell-super-header">
				<a href="#frankreich">Frankreich</a>
			</div>
	<div class="cell-narrow cell-header">U3</div>
	<div class="cell-narrow cell-header">Kita</div>
	<div class="cell-narrow cell-header-last">Vorschule </div>
</th>
<th colspan="0">
	<div class="cell-super-header">
				<a href="#island">Island</a>
			</div>
</th>
<th colspan="0">
	<div class="cell-super-header">
				<a href="#kanada">Kanada</a>
			</div>
</th>
<th colspan="0">
	<div class="cell-super-header">
				<a href="#neuseeland">Neuseeland</a>
			</div>
</th>
<th colspan="0">
	<div class="cell-super-header">
				<a href="#thailand">Thailand</a>
			</div>
</th>
<th colspan="3">
	<div class="cell-super-header">
				<a href="#japan">Japan</a>
			</div>
	<div class="cell-narrow cell-header">U3</div>
	<div class="cell-narrow cell-header">Kita</div>
	<div class="cell-narrow cell-header-last">Vorschule</div>
</th>
<th colspan="2">
	<div class="cell-super-header">
				<a href="#tansania">Tansania</a>
			</div>
	<div class="cell-narrow cell-header">Vorschule</div>
	<div class="cell-narrow cell-header-last">Kita</div>
</th>
<th colspan="0">
	<div class="cell-super-header">
				<a href="#finnland">Finnland</a>
			</div>
</th>
</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="größe" data-cat-name="Größe des Landes">Größe des Landes</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>7.692.024 km²</p></div>
						<div class="references">Quelle: <a href="#quelle-1">[1]</a></div>
			</div></td>
			<td colspan="3"><div class="cell-wider cell-content">
		<div><p>549.087 km²  </p></div>
						<div class="references">Quelle: <a href="#quelle-2">[2]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>103.000 km²</p></div>
						<div class="references">Quelle: <a href="#quelle-3">[3]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>8,965,588.85</p></div>
						<div class="references">Quelle: <a href="#quelle-4">[4]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>267.710 km²</p></div>
						<div class="references">Quelle: <a href="#quelle-5">[5]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>513.115 km²</p></div>
						<div class="references">Quelle: <a href="#quelle-6">[6]</a></div>
			</div></td>
			<td colspan="3"><div class="cell-wider cell-content">
		<div><p>378.000 Quadratkilometer</p></div>
						<div class="references">Quelle: <a href="#quelle-7">[7]</a></div>
			</div></td>
			<td colspan="2"><div class="cell-wider cell-content">
		<div><p>947.300 km² (2017)</p></div>
						<div class="references">Quelle: <a href="#quelle-8">[8]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>338.448 km² </p></div>
						<div class="references">Quellen: <a href="#quelle-9">[9]</a> <a href="#quelle-10">[10]</a> <a href="#quelle-11">[11]</a></div>
			</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="bevölkerung" data-cat-name="Bevölkerungsanzahl">Bevölkerungsanzahl</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>24 Millionen (2017)</p></div>
						<div class="references">Quelle: <a href="#quelle-12">[12]</a></div>
			</div></td>
			<td colspan="3"><div class="cell-wider cell-content">
		<div><p>ca. 65,1 Mio. </p></div>
						<div class="references">Quelle: <a href="#quelle-13">[13]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>337.430 (2018)</p></div>
						<div class="references">Quelle: <a href="#quelle-14">[14]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>37,242,571 (2018, Q3)</p></div>
						<div class="references">Quelle: <a href="#quelle-15">[15]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>4800000</p></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>67,2 Mio. Einwohner</p></div>
						<div class="references">Quelle: <a href="#quelle-6">[6]</a></div>
			</div></td>
			<td colspan="3"><div class="cell-wider cell-content">
		<div><p>126,49 Mio. (2018)</p></div>
						<div class="references">Quelle: <a href="#quelle-16">[16]</a></div>
			</div></td>
			<td colspan="2"><div class="cell-wider cell-content">
		<div><p>49,3 Mio. (2017)</p></div>
						<div class="references">Quelle: <a href="#quelle-8">[8]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>5.487.308 (2016)</p></div>
						<div class="references">Quellen: <a href="#quelle-9">[9]</a> <a href="#quelle-10">[10]</a> <a href="#quelle-11">[11]</a></div>
			</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="kategorie-5" data-cat-name="Bevölkerungsdichte (Einwohner/km²)">Bevölkerungsdichte (Einwohner/km²)</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>3,2 / km² (2017)</p></div>
						<div class="references">Quelle: <a href="#quelle-17">[17]</a></div>
			</div></td>
			<td colspan="3"><div class="cell-wider cell-content">
		<div><p>122,6 Einwohner pro km²</p></div>
						<div class="references">Quelle: <a href="#quelle-18">[18]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>3,27 Einwohner/km²</p></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>3,9 (2016)</p></div>
						<div class="references">Quelle: <a href="#quelle-4">[4]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>17,9</p></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>135,13 Einwohner/ km²</p></div>
						<div class="references">Quelle: <a href="#quelle-19">[19]</a></div>
			</div></td>
			<td colspan="3"><div class="cell-wider cell-content">
		<div><p>347,78 (2017)</p></div>
						<div class="references">Quelle: <a href="#quelle-20">[20]</a></div>
			</div></td>
			<td colspan="2"><div class="cell-wider cell-content">
		<div><p>58,54 Einwohner pro km²</p></div>
						<div class="references">Quelle: <a href="#quelle-21">[21]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>16,26 Einwohner pro km²</p></div>
						<div class="references">Quellen: <a href="#quelle-9">[9]</a> <a href="#quelle-10">[10]</a> <a href="#quelle-22">[22]</a> <a href="#quelle-23">[23]</a></div>
			</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="kategorie-6" data-cat-name="Anzahl Kinder pro Frau (Fertilitätsrate)">Anzahl Kinder pro Frau (Fertilitätsrate)</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>1,81 Kinder je Frau (2016)</p></div>
						<div class="references">Quelle: <a href="#quelle-24">[24]</a></div>
			</div></td>
			<td colspan="3"><div class="cell-wider cell-content">
		<div><p>1,92</p></div>
						<div class="references">Quelle: <a href="#quelle-25">[25]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>1,8 (2016)</p></div>
						<div class="references">Quelle: <a href="#quelle-26">[26]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>1,6 (2016)</p></div>
						<div class="references">Quelle: <a href="#quelle-27">[27]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>1,87 (Jahr 2016)</p></div>
						<div class="references">Quelle: <a href="#quelle-28">[28]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>1,48</p></div>
						<div class="references">Quelle: <a href="#quelle-29">[29]</a></div>
			</div></td>
			<td colspan="3"><div class="cell-wider cell-content">
		<div><p>1,44</p></div>
						<div class="references">Quelle: <a href="#quelle-30">[30]</a></div>
			</div></td>
			<td colspan="2"><div class="cell-wider cell-content">
		<div><p>2016: 5,02 Fertilitätsrate (Geburtenrate pro Frau)</p></div>
						<div class="references">Quelle: <a href="#quelle-31">[31]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>1,65</p></div>
						<div class="references">Quellen: <a href="#quelle-9">[9]</a> <a href="#quelle-10">[10]</a> <a href="#quelle-11">[11]</a></div>
			</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="formen-frühkindlicher-bildung" data-cat-name="Formen der frühkindlichen Bildung">Formen der frühkindlichen Bildung</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Long Day Care, Family Day Care, In-Home Care, Occasional Care, Outside School Hours Care, mobile Kinderdienste </p></div>
				<div class="read-more"><a href="#australien-formen-frühkindlicher-bildung">[mehr dazu]</a></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
				<div class="read-more"><a href="#frankreich-formen-frühkindlicher-bildung">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
				<div class="read-more"><a href="#frankreich-formen-frühkindlicher-bildung">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
				<div class="read-more"><a href="#frankreich-formen-frühkindlicher-bildung">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Pre-Schools (bis Schule) und Day-Parents (für 0-2-jährige)</p></div>
						<div class="references">Quelle: <a href="#quelle-32">[32]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Kindergärten (nursery schools, daycare centres), regulierte Betreuung in der Familie/Zuhause (Nannys, AuPairs), öffentliche Vorschuleinrichtungen (kindergarten)</p></div>
				<div class="read-more"><a href="#kanada-formen-frühkindlicher-bildung">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-33">[33]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Preschool classes, Kindergarten und childcare centers (S. 411)</p></div>
				<div class="read-more"><a href="#thailand-formen-frühkindlicher-bildung">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-34">[34]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Yochien (Kindergarten oder Vorschule)</p></div>
				<div class="read-more"><a href="#japan-formen-frühkindlicher-bildung">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Hoikuen (Kindertagesstätte)</p></div>
				<div class="read-more"><a href="#japan-formen-frühkindlicher-bildung">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Nintei-Kodomoens (Zusammenlegung von Yochien und Hoikuen seit 2006)</p></div>
				<div class="read-more"><a href="#japan-formen-frühkindlicher-bildung">[mehr dazu]</a></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Vorschule: Pre-Primary</p></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Kindergarten: Day Care Centre, Kindergarten, Nursery School </p></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Kindertageseinrichtungen oder Tagespflege; Spielgruppen; Vorschule</p></div>
				<div class="read-more"><a href="#finnland-formen-frühkindlicher-bildung">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-9">[9]</a> <a href="#quelle-10">[10]</a> <a href="#quelle-11">[11]</a></div>
			</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="verbindlichkeit" data-cat-name="Wie verbindlich ist der Besuch dieser Einrichtungen?">Wie verbindlich ist der Besuch dieser Einrichtungen?</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>nicht verbindlich</p></div>
				<div class="read-more"><a href="#frankreich-eintrittsalter">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-35">[35]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>nicht verbindlich</p></div>
				<div class="read-more"><a href="#frankreich-eintrittsalter">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-36">[36]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>noch nicht verbindlich</p></div>
				<div class="read-more"><a href="#frankreich-eintrittsalter">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-36">[36]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>freiwillig</p></div>
						<div class="references">Quelle: <a href="#quelle-37">[37]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>zum Teil Anwesenheitspflicht in der Vorschule (kindergarten), ansonsten freiwillig</p></div>
						<div class="references">Quelle: <a href="#quelle-33">[33]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>freiwillig</p></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>freiwillig (S.412)</p></div>
				<div class="read-more"><a href="#thailand-formen-frühkindlicher-bildung">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-34">[34]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Entscheidet sich eine Familie dafür ihr Kind in einen Yochien zu geben, muss das Kind mindestens 39 Wochen im Jahr für 5 Tage die Woche und 4 Stunden am Tag in die Einrichtung kommen.</p></div>
						<div class="references">Quelle: <a href="#quelle-38">[38]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>keine Pflicht</p></div>
						<div class="references">Quelle: <a href="#quelle-38">[38]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>keine Pflicht</p></div>
						<div class="references">Quelle: <a href="#quelle-38">[38]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Pflicht ab 5 Jahren, wenn Leistung in Schule nicht gut genug werden Kinder in Vorschule zurück gestuft </p></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>keine Pflicht</p></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>frühkindliche Betreuung keine Pflicht; Vorschule ab 6 Jahren als Teil der Schulzeit ist Pflicht</p></div>
				<div class="read-more"><a href="#finnland-eintrittsalter">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-9">[9]</a> <a href="#quelle-10">[10]</a> <a href="#quelle-11">[11]</a></div>
			</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="betreuungsquote" data-cat-name="Betreuungsquote">Betreuungsquote</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Im Dezemberquartal 2017 besuchten 31,9% aller Kinder im Alter von 0 bis 12 Jahren eine genehmigte Kinderbetreuung.</p></div>
				<div class="read-more"><a href="#australien-betreuungsquote">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-39">[39]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>43% der unter dreijährigen </p></div>
						<div class="references">Quelle: <a href="#quelle-40">[40]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>39% 0-2 Jahren (2011) , 95-97% mit 3-6 Jahren (2011)</p></div>
						<div class="references">Quelle: <a href="#quelle-41">[41]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>54% der Eltern mit Kinder im Alter von 0-4 Jahren (2011)<br />39% der Eltern mit Kindern im Schulalter (5-14 Jahre)<br />26% der Eltern mit Kinder von 0-1 Jahren - am häufigsten für Kinder von 2-4 Jahren<br />6 von 10 Eltern nutzen eine Form der Betreuung für ihre Kinder</p></div>
				<div class="read-more"><a href="#kanada-betreuungsquote">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-42">[42]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>0,955</p></div>
						<div class="references">Quelle: <a href="#quelle-43">[43]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Laut Gross enrolment ratio 100%</p></div>
				<div class="read-more"><a href="#thailand-betreuungsquote">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-44">[44]</a></div>
			</div></td>
			<td colspan="3"><div class="cell-wider cell-content">
		<div><p>unter 3 Jahre: 23%; 3 Jahre: 80%; 4 Jahre: 94%; 5 Jahre: 97%. (alle Einrichtungen zusammengefasst 2015)</p></div>
						<div class="references">Quelle: <a href="#quelle-45">[45]</a></div>
			</div></td>
			<td colspan="2"><div class="cell-wider cell-content">
		<div><p>2013: 32,3 % (Gross Enrolment Ratio)</p></div>
						<div class="references">Quelle: <a href="#quelle-46">[46]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
				<div class="read-more"><a href="#finnland-betreuungsquote">[mehr dazu]</a></div>
					</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="anzahl-einrichtungen" data-cat-name="Anzahl frühkindlicher Bildungseinrichtungen">Anzahl frühkindlicher Bildungseinrichtungen</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Dezemberquartal 2017: 18.524 zugelassene Kinderbetreuungseinrichtungen (55,8 % außerhalb der Schule, 39,7 %  Long Day Care)</p></div>
				<div class="read-more"><a href="#australien-anzahl-einrichtungen">[mehr dazu]</a></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>254 (2017)</p></div>
						<div class="references">Quelle: <a href="#quelle-47">[47]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>17297 "centre-based" (daycare centres &amp; preschools) + 23847 home care families</p></div>
						<div class="references">Quelle: <a href="#quelle-33">[33]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Education &amp; Care Einrichtungen (2.336), Kōhanga reo (466), Play Centres (455), Kindergarten (641)</p></div>
						<div class="references">Quelle: <a href="#quelle-48">[48]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>1 128 040 öffentliche Einrichtungen und 621 156 private Einrichtungen (S. 48).</p></div>
						<div class="references">Quelle: <a href="#quelle-49">[49]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>1 11252 Yochien (2016), 2 363,3 Yochien auf 100000 3-5 Jährige Kinder (2016), 36,7% sind öffentlich</p></div>
						<div class="references">Quellen: <a href="#quelle-50">[50]</a> <a href="#quelle-51">[51]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>1 24234 (2015),2  36,5% sind öffentlich (2015)</p></div>
						<div class="references">Quellen: <a href="#quelle-50">[50]</a> <a href="#quelle-52">[52]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>2822 Nintei-Kodomoens (2016)</p></div>
						<div class="references">Quelle: <a href="#quelle-50">[50]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="kategorie-9" data-cat-name="Quote der Paare mit Kindern (an Haushalten)">Quote der Paare mit Kindern (an Haushalten)</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>37 % der Paare haben Kinder</p></div>
						<div class="references">Quelle: <a href="#quelle-12">[12]</a></div>
			</div></td>
			<td colspan="3"><div class="cell-wider cell-content">
		<div><p>31,50%</p></div>
						<div class="references">Quelle: <a href="#quelle-53">[53]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>29,9% (2016)</p></div>
						<div class="references">Quelle: <a href="#quelle-54">[54]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="kategorie-10" data-cat-name="Quote Alleinerziehender (an Haushalten)">Quote Alleinerziehender (an Haushalten)</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Alleinerziehend: 10,2% (2016)</p></div>
						<div class="references">Quelle: <a href="#quelle-12">[12]</a></div>
			</div></td>
			<td colspan="3"><div class="cell-wider cell-content">
		<div><p>7,40%</p></div>
						<div class="references">Quelle: <a href="#quelle-53">[53]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>15,3% Alleinerziehende von allen Familien (auch zusammenlebend oder verheiratete Paare ohne Kinder)) Kinder bis 18 Jahre (2017)</p></div>
						<div class="references">Quelle: <a href="#quelle-55">[55]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>11,5% (2016)</p></div>
						<div class="references">Quelle: <a href="#quelle-54">[54]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="3"><div class="cell-wider cell-content">
		<div><p>1,24 Mio. alleinerziehende Frauen; 223000 alleinerziehende Väter</p></div>
						<div class="references">Quelle: <a href="#quelle-56">[56]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="kategorie-11" data-cat-name="Besonderheiten">Besonderheiten</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="3"><div class="cell-wider cell-content">
		<div><p>kinderlose Paare: 24,8%<br />Großfamilien: 5,3%<br />Alleinstehende Frauen:18,5%<br />Alleinstehende Männer:12,5%</p></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Thailand ist stark im Kommen und hat sich innerhalb nur einer Generation von einem low-income Landwirtschaftsland zu einem Land mit mittlerem Einkommen gemacht. Außerdem wurde viel im Bereich der Bildung getan. (S. 19; S. 41). 2018 hat Thailand die geringste Arbeitslosenrate der Welt (Shaeffer, 2018, S. 100).</p></div>
						<div class="references">Quelle: <a href="#quelle-57">[57]</a></div>
			</div></td>
			<td colspan="3"><div class="cell-wider cell-content">
		<div><p>1 98% der Kinder werden ehelich geboren. Familienbild und Zusammenleben von Mann und Frau ist sehr traditionell, oftmals ziehen Ehepartner erst nach der Hochzeit zusammen. Bei 1/4 der Hochzeiten ist die Frau bereits schwanger. 2 Nach Geburt des ersten Kindes bleiben 70% der Frauen für mindestens 10 Jahre zu Hause.</p></div>
						<div class="references">Quelle: <a href="#quelle-58">[58]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="betreuungsumfang" data-cat-name="Betreuungsumfang pro Woche">Betreuungsumfang pro Woche</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Durchschnittliche Aufenthaltsdauer eines Kindes für alle Arten (Long Day Care, Family Day Care und In-Home Care, Occasional Care, Outside School Hours Care) 24,6 Stunden pro Woche. Im Long Day Care durchschnittlich 28,8 Stunden pro Woche (Dezemberquartal 2017)</p></div>
				<div class="read-more"><a href="#australien-betreuungsumfang">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-39">[39]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>28,4 h/ Woche (Stand 2008)  (1)</p></div>
				<div class="read-more"><a href="#frankreich-eintrittsalter">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
				<div class="read-more"><a href="#frankreich-eintrittsalter">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>27,9h/Woche (1)</p></div>
				<div class="read-more"><a href="#frankreich-eintrittsalter">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>die meisten 40-45h die Woche (ab 2 Jahren)</p></div>
				<div class="read-more"><a href="#island-betreuungsumfang">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-59">[59]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>unterschiedlich, 60% Vollzeit (30h), 70% der 0-4 jährigen Kinder Vollzeit (2011)</p></div>
				<div class="read-more"><a href="#kanada-einrichtungsgröße">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-42">[42]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>20,7 h</p></div>
						<div class="references">Quelle: <a href="#quelle-60">[60]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>7 Stunden am Tag für 5 Tage die Woche (S. 101)</p></div>
				<div class="read-more"><a href="#thailand-betreuungsumfang">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-61">[61]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>20 Stunden</p></div>
				<div class="read-more"><a href="#japan-eintrittsalter">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-38">[38]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Ganztags (8 bis 11 Stunden geöffnet), Familien geben Kinder nach Bedarf in die Einrichtung. Da Familien nur einen Platz im Hoikuen bekommen, wenn beide Eltern arbeiten, gehen folglich  viele Kinder  40-55 Stunden pro Woche</p></div>
				<div class="read-more"><a href="#japan-eintrittsalter">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-62">[62]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Ganztags (8 bis 11 Stunden) geöffnet, Familien geben ihre Kinder nach Bedarf in die Einrichtung</p></div>
				<div class="read-more"><a href="#japan-eintrittsalter">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-62">[62]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>1-29 Std./Woche:<br />U3 - 7,9%<br />Ü3 - 32,2%</p><br /><p>über 30 Std./Woche:<br />U3 - 24,6%<br />Ü3 – 59,6%</p><br /><p>keine Betreuung in Einrichtung:<br />U3 - 67,4%<br />Ü3 – 17,2%</p></div>
				<div class="read-more"><a href="#finnland-zugänglichkeit">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-9">[9]</a> <a href="#quelle-10">[10]</a> <a href="#quelle-11">[11]</a></div>
			</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="eintrittsalter" data-cat-name="Eintrittsalter Betreuung">Eintrittsalter Betreuung</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Ab sechs Wochen: Nursery: 6 Wochen -2 Jahre, Toddler: 2-3 Jahre, Kindergarten 3-5 Jahre</p></div>
						<div class="references">Quelle: <a href="#quelle-63">[63]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>2 Monate </p></div>
				<div class="read-more"><a href="#frankreich-eintrittsalter">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-35">[35]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>2 Jahre</p></div>
				<div class="read-more"><a href="#frankreich-eintrittsalter">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-36">[36]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>2-3 Jahre (Wohnortabhängig)</p></div>
				<div class="read-more"><a href="#frankreich-eintrittsalter">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>die meisten gehen ab 2 Jahren in die Kita, vorher Day Parents möglich</p></div>
				<div class="read-more"><a href="#island-eintrittsalter">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-64">[64]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>ECE ab 0 Monate möglich, Vorschule ("Kindergarten") ab 5 Jahre (ON ab 4)</p></div>
				<div class="read-more"><a href="#kanada-einrichtungsgröße">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-33">[33]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>1 Jahr</p></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Ab 4 Jahren (S.98)</p></div>
				<div class="read-more"><a href="#thailand-betreuungsumfang">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-61">[61]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>3 Jahre</p></div>
				<div class="read-more"><a href="#japan-eintrittsalter">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-38">[38]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>ab 0</p></div>
				<div class="read-more"><a href="#japan-eintrittsalter">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-38">[38]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>ab 0</p></div>
				<div class="read-more"><a href="#japan-eintrittsalter">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-38">[38]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>ab 5 Jahren - 9 Jahre (falls Kinder von der Grundschule zurückgestuft werden)</p></div>
				<div class="read-more"><a href="#tansania-eintrittsalter">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>ab 2 Jahren (laut einem Einheimischen ist dies das typische Eintrittsalter)</p></div>
				<div class="read-more"><a href="#tansania-eintrittsalter">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Tagepflege und Kindertageseinrichtungen ab 9 bzw. 10 Monaten</p></div>
				<div class="read-more"><a href="#finnland-eintrittsalter">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-9">[9]</a> <a href="#quelle-10">[10]</a> <a href="#quelle-11">[11]</a></div>
			</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="gruppenstruktur" data-cat-name="Gruppenstruktur und -größe">Gruppenstruktur und -größe</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Long Day Care: Einrichtungen können selbst entscheiden solange der Personalschlüssel eingehalten ist, Family Day Care:dürfen nicht mehr als sieben Kinder gleichzeitig in der Obhut der Erzieher*innen sein, nicht mehr als vier Erzieher*innen</p></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>25,7 Kinder/Gruppe  Gruppe in öffentlichen Einrichtungen, 27 Kinder/Gruppe Gruppe in privaten vorschulischen Einrichtungen</p></div>
						<div class="references">Quelle: <a href="#quelle-36">[36]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p><strong>Daycare</strong>: Maximale Gruppengröße je nach Provinz unterschiedlich. Kanadaweiter Durchschnitt für U3 ist 9,9. Kleinste Gruppen auf Prince Edward Island mit 6 Kindern, größte Gruppen in Québec mit max. 15. Für 3-6 kanadaweiter Durchschnitt 20,1. Kleinste Gruppen in Newfoundland, Manitoba, Yukon und Nunavut mit 16, größte in Québec mit max. 30.<br /><strong>Family Care</strong>: max. Gruppengröße einschl. der eigenen durchschnittl. 4 Kinder (von 2 in Saskatchewan bis 6 in PEI/Québec/Ontario) für U3; Für Gruppen 3-6 J. durchschnittl. 6 Kinder (von 5 in Manitoba/Saskatchewan bis 7 in Newfoundland/Nova Scotia/BC)<br /><strong>Preschool</strong>: in den meisten Provinzen der doppelte Betreuungsschlüssel, also ca. 23 Kinder (von 16 in Newfoundland/Yukon bis 30 in Québec und Nova Scotia)</p></div>
				<div class="read-more"><a href="#kanada-einrichtungsgröße">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-33">[33]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>altershomogene Gruppen mit 35 Kindern pro Gruppe</p></div>
						<div class="references">Quelle: <a href="#quelle-62">[62]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>altershomogen</p></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>max. 12 bzw. 24 Kinder pro Gruppe, nämlich so viele, wie für 3 Fachkräfte pro Gruppe erlaubt ist; keine Angaben zur Struktur</p></div>
				<div class="read-more"><a href="#finnland-gruppenstruktur">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-9">[9]</a> <a href="#quelle-10">[10]</a> <a href="#quelle-11">[11]</a></div>
			</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="qualitätsmanagement" data-cat-name="Qualitätsmanagement">Qualitätsmanagement</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Die meisten Einrichtungen arbeiten nach dem National Quality Framework </p></div>
						<div class="references">Quelle: <a href="#quelle-65">[65]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Sozialministerium; Überprüfung der Räume, Ausstattung, Gesundheits-, Hygiene und Sicherheitsbestimmungen, <br />Überprüfung der Qualifikation von Fachkräften und Arbeitsbedingungen</p></div>
						<div class="references">Quelle: <a href="#quelle-35">[35]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Bildungsministerium; Überprüfung der Umsetzung des Curriculums und Entwicklungsprozess der Kinder mittels Fragebögen und Checklisten</p></div>
						<div class="references">Quelle: <a href="#quelle-36">[36]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>externe Evaluation vom  Ministry of Education, Science and Culture; externe Evaluationen der Stadverwaltungen; regelmäßige interne Evaluationen von der Kita</p></div>
				<div class="read-more"><a href="#island-qualitätsmanagement">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-66">[66]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>externe: Education Review Office (ERO) -&gt; verschiedene Arten von Überprüfungen und Bewertungen durch Reviews</p></div>
						<div class="references">Quelle: <a href="#quelle-67">[67]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>20% der ECCD center von schlechter Qualität, unterbesetzt und schlecht ausgestattet (S. 101)</p></div>
				<div class="read-more"><a href="#thailand-qualitätsmanagement">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-61">[61]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Private Einrichtungen stehen unter Beaufsichtigung der municipal government’s private schools<br />division. Öffentliche Kindergärten werden beaufsichtigt von municipal government’s educational committee</p></div>
						<div class="references">Quelle: <a href="#quelle-68">[68]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Laut MHLW (Ministerium) sollte eine unabhängige Kontrolle der Qualität von Bildungs- Betreuungs- und Erziehungsangeboten der jeweiligen Einrichtunge stattfinden. Diese Aufgabe wurde an eine dritte, gemeinnützige Organisation weitergegeben. Deshalb sind Kriterien und Standards nicht national verankert. Es gibt keine nationalen Qualitätsmessungen oder -skalen. Das Thema ist aber sehr aktuell und wird viel diskutiert.</p></div>
						<div class="references">Quelle: <a href="#quelle-38">[38]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Qualitätsmonitoring über Kommunen und deren Budget; nationale Bildungsagentur verpflichtet zur Evaluation frühkindlicher Bildung; keine externen Prüfungen - Selbstevaluation in Eigenverantwortung</p></div>
						<div class="references">Quellen: <a href="#quelle-9">[9]</a> <a href="#quelle-10">[10]</a> <a href="#quelle-11">[11]</a></div>
			</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="kategorie-16" data-cat-name="Besonderheiten">Besonderheiten</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="einrichtungsgröße" data-cat-name="Einrichtungsgröße">Einrichtungsgröße</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>max. 60 Plätze</p></div>
				<div class="read-more"><a href="#frankreich-eintrittsalter">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-69">[69]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>bis zu 80 Plätze</p></div>
				<div class="read-more"><a href="#frankreich-eintrittsalter">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-36">[36]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
				<div class="read-more"><a href="#frankreich-eintrittsalter">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>variieren stark, von Einrichtung mit einem Klassenraum und wenigen Kindern, bis 8 Klassenräumen und über 150 Kindern</p></div>
						<div class="references">Quelle: <a href="#quelle-70">[70]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Durchschnitt Kanada 69,8 Plätze pro Centre. Starke Unterschiede zwischen den Provinzen, kleinste Einrichtungen in Nunavut (22,8 Plätze) und größte in Québec (123,9 Plätze). Home Care Families haben durchschnittlich 6,0 Plätze pro Einrichtung (Spanne der Durchschnitte je Provinz: 3,9-9,0).</p></div>
				<div class="read-more"><a href="#kanada-einrichtungsgröße">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-33">[33]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="soziale-zugänglichkeit" data-cat-name="Soziale Zugänglichkeit zu Betreuungsplätzen">Soziale Zugänglichkeit zu Betreuungsplätzen</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>2017 waren bei jeweils 91% und 92% der Long-Day-Care – Einrichtungen und der Family-Day-Care – Einrichtungen freie Stellen verfügbar<br />Australische Regierung hat im Rahmen der „Universal Access National Partnership“ 870 Millionen Dollar zugesagt, um die Unterstützung des Commonwealth für Vorschulen in den Jahren 2018 und 2019 fortzusetzen. Diese Finanzierung stellt sicher, dass jedes Kind im Jahr vor der Schule 600 Stunden (15 Stunden pro Woche) lang Zugang zu einer qualitativ hochwertigen Vorschulausbildung hat </p></div>
				<div class="read-more"><a href="#australien-soziale-zugänglichkeit">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-39">[39]</a> <a href="#quelle-71">[71]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><ul><br /><li>kein genereller Rechtssanspruch für Kinder im U3 Bereich</li><br /></ul></div>
				<div class="read-more"><a href="#frankreich-soziale-zugänglichkeit">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-72">[72]</a> <a href="#quelle-73">[73]</a> <a href="#quelle-74">[74]</a> <a href="#quelle-75">[75]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
				<div class="read-more"><a href="#frankreich-soziale-zugänglichkeit">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><ul><br /><li>Recht auf staatlich geförderten Platz in der Vorschule besteht, dieser ist bis auf die Verpflegung kostenlos</li><br /></ul></div>
				<div class="read-more"><a href="#frankreich-soziale-zugänglichkeit">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Bevorzugt aufgenommen werden Kinder, die schon älter sind oder unter schwierigen Bedingungen aufwachsen (z.B. Kinder/Familienmitglieder mit Erkrankungen, junge Eltern oder viele Geschwister)</p></div>
				<div class="read-more"><a href="#island-soziale-zugänglichkeit">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-76">[76]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><ul><br /><li>zusätzlich zu den provinziellen/territorialen Programmen fördert die Bundesregierung (federal government) direkt verschiedene ECEC-Programme für besondere Bevölkerungsgruppen wie z.B. indigene Einwohner, Militärangehörige, Einwanderer/Newcomers, Geflüchtete</li><br /><li>insgesamt gesehen gibt es die Verfügbarkeit der geregelten Betreuungsangebote nur unzureichend vorhanden und deckt nur wenige Kinder ab</li><br /><li>nicht alle Familien können sich die Betreuung leisten</li><br /></ul></div>
				<div class="read-more"><a href="#kanada-soziale-zugänglichkeit">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-33">[33]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>12,6% der Bevölkerung lebt unterhalb der Armutsgrenze, 0,1% der Bevölkerung besitzt fast die Hälfte (46,5%) des Vermögens des ganzen Landes. Kinder, die aus diesem reichen Zehntel stammen, haben eine etwa 16 mal größere Bildungschancen als die ärmsten Kinder. Was die soziale Ungleichheit angeht, ist Thailand nach dem Gini Koeffizient (48,4) auf Platz 24 von 145 Ländern (Shaeffer, 2018, S. 96).</p></div>
				<div class="read-more"><a href="#thailand-kosten">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-61">[61]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Häufig wohlhabendes Klientel, Mütter sind meist nicht berufstätig.<br />Einige  Yochiens arbeiten mit Grundschulen zusammen, dann finden zur Aufnahme des Kindes Eingangstests statt, wodurch besonders leistungsstarke Kinder bevorzugt werden, andere Yochiens nehmen alle Kinder auf </p></div>
						<div class="references">Quelle: <a href="#quelle-77">[77]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>1 Nur für Familien, in denen beide Elternteile arbeiten      2 Es gibt private und staatliche Einrichtungen. Private Einrichtungen sind deutlich teurer als staatliche, so dass sich diese nur wohlhabenere Familien leisten können.  In den staatlichen Einrichtungen werden Kinder bevorzugt, deren Eltern für die Regierung arbeiten</p></div>
						<div class="references">Quellen: <a href="#quelle-38">[38]</a> <a href="#quelle-78">[78]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Alle Kinder (unabhängig von Berufstätigkeit der Eltern)</p></div>
						<div class="references">Quellen: <a href="#quelle-62">[62]</a> <a href="#quelle-38">[38]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>ja, wegen der Lage (Land) und der Unterschied der Qualität ist zu privaten Einrichtungen auch groß</p></div>
				<div class="read-more"><a href="#tansania-soziale-zugänglichkeit">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>eher in der Stadt zu finden und für besser gestellte Familien (Kosten)</p></div>
				<div class="read-more"><a href="#tansania-soziale-zugänglichkeit">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>k. A.; Rechtsanspruch auf Betreuungsplatz für alle Kinder unter 7 Jahren seit 1996</p></div>
						<div class="references">Quellen: <a href="#quelle-9">[9]</a> <a href="#quelle-10">[10]</a> <a href="#quelle-11">[11]</a></div>
			</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="kosten" data-cat-name="Kosten eines Betreuungsplatzes">Kosten eines Betreuungsplatzes</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Ungefährer Kostenüberblick:Long-day-care – Einrichtungen $70-$185 pro Tag, Family-day-care $7.50-$16.80 pro Stunde, abhängig von der Location und dem Service, In-home-care $20-$25 pro Stunde und Outside-of-School-Hours-Care $15-$30 pro Vormittag und $25-$45 für den Nachmittag</p></div>
				<div class="read-more"><a href="#australien-kosten">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-79">[79]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
				<div class="read-more"><a href="#frankreich-kosten">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
				<div class="read-more"><a href="#frankreich-kosten">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
				<div class="read-more"><a href="#frankreich-kosten">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Beiträge sozial gestaffelt und in Abhängigkeit von Betreuungsstunden pro Tag. Kosten pro Monat (Bsp. Reykjavik):<br />von 66,50€ (4h) bis 296,70€ (9,5h); <br />Alleinerziehende Eltern, beide Elternteile in Ausbildung, Eltern mit Behinderung, Angestellte des Kindergartens Reykjavik: von 36,55€ (4h) bis 167,53€ (9,5h),  </p></div>
				<div class="read-more"><a href="#island-kosten">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-80">[80]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Quebec: durchschnittlich $152 (100€)/Monat für 30h/Woche; Atlantic provinces: durchschnittlich $541 (358€)/Monat; Ontario: durchschnittl. $677 (448€)/Monat</p></div>
						<div class="references">Quelle: <a href="#quelle-42">[42]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>3 Jahre bis Schuleintritt: Anspruch auf 20 Stunden Kinderbetreuung pro Woche in einer staatlich geförderten, anerkannten ECE-Einrichtung</p></div>
						<div class="references">Quelle: <a href="#quelle-81">[81]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
				<div class="read-more"><a href="#thailand-kosten">[mehr dazu]</a></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Öffentliche Einrichtungen kosten ca. 70000 Yen (ca. 410€/Jahr). Private Einrichtungen kosten ca. 280000 Yen (ca. 1640€/Jahr)</p></div>
						<div class="references">Quelle: <a href="#quelle-82">[82]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Öffentlich keine Angabe, private Einrichtungen kosten ca. 300000 Yen (ca. 1760€/Jahr)</p></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Höchstgebühr in kommunalen Einrichtungen inkl. Essen: 354€ (Stand 2015), private Träger teurer; Unterstüzung für einkommensschwache Haushalte; Betreuungsgeld bei privater Betreuung</p></div>
						<div class="references">Quellen: <a href="#quelle-9">[9]</a> <a href="#quelle-10">[10]</a> <a href="#quelle-11">[11]</a></div>
			</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="kategorie-20" data-cat-name="Bildungsexklusionsmechanismen (Einkommen Elternhaus, Diskriminierung?)">Bildungsexklusionsmechanismen (Einkommen Elternhaus, Diskriminierung?)</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Kosten für die Einrichtungen (siehe soziale Zugänglichkeit)</p></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="2"><div class="cell-wider cell-content">
		<div><ul><br /><li>Einkommen ja bzg. Privater Träger (aber es gibt auch öffentliche Einrichtungen), auch öffentliche Einrichtungen müssen von Eltern finanziert werden.</li><br /><li>Eltern sehen Grund für Wichtigkeit der Bildung nicht</li><br /><li>Zu wenig Unterstützung von der Regierung </li><br /><li>Niedriger sozio-ökonomischer Status der Eltern</li><br /><li>Gender Diskriminierung</li><br /><li>Traditionelle Normen und kulturelle Werte</li><br /><li>Weiter Weg zur Schule</li><br /></ul></div>
						<div class="references">Quelle: <a href="#quelle-83">[83]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="zuschüsse" data-cat-name="Zuschüsse für Familien">Zuschüsse für Familien</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Child Care Benefit - Kinderbetreuungsgeld (CCB),<br />Child Care Rebate - Kinderbetreuungsrabatt (CCR). Familien, die die Anforderungen der Arbeits-, Ausbildungs- und Studienprüfung erfüllen, können Anspruch auf CCR für 50 Prozent aller Auslagen bis zu einer jährlichen Obergrenze haben.<br />Bevor die Kinderbetreuungsgelder der australischen Regierung berücksichtigt wurden, reichten die Kosten für Familien von 28,3% des wöchentlich verfügbaren Einkommens für Familien mit einem Bruttoeinkommen von $35.000 pro Jahr bis hin zu 9,1% für Familien mit einem Bruttoeinkommen von $215.000 pro Jahr. Nach den Kinderbetreuungsgeldern der australischen Regierung wurden die Selbstkosten deutlich gesenkt, und zwar auf 7,6% für Familien mit einem Bruttoeinkommen von $35.000 pro Jahr und 4,6% für Familien mit einem Bruttoeinkommen von $215.000 pro Jahr.</p></div>
				<div class="read-more"><a href="#australien-kosten">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-39">[39]</a></div>
			</div></td>
			<td colspan="3"><div class="cell-wider cell-content">
		<div><p>Zuschüsse für Familien: 14<br />Geburtenprämie von 855 Euro<br />Transferleistungen während der Elternzeit: <br />-&gt; ein Kind: 531 Euro (6 Monate lang), <br />-&gt; bei 2 Kindern: 531 Euro (36 Monate lang)<br />-&gt; ab 3. Kind 531 Euro (36 Monate lang oder 759 Euro für 12 Monate)<br />Kindergeld: bei 2 Kindern: 119 Euro, 3 Kinder: 272 Euro, jedes weitere Kind: 153 Euro<br />Steuereinsparungen: Der Steuersatz wird unter Berücksichtigung eines Familienquotienten berechnet, hängt von der Anzahl der unter 18-jährigen Kindern ab</p></div>
						<div class="references">Quelle: <a href="#quelle-84">[84]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>alle Betreuungsformen in Kanada (außer Quebec) werden überwiegend von den Eltern finanziert, die meisten Provinzen/ Territorien bezahlen einen begrenzten Anteil für die Betreuung - „base funding“ oder „grants“ <br />Quebec, Manitoba und Prince Edward Island:</p><br /><ul><br /><li>Elternbeiträge für Betreuungsangebote sind niedriger </li><br /><li>Elternbeiträge/Kitabeiträge sind abhängig vom Alter des Kindes, der Betreuungsdauer und der öffentlichen Förderung der Provinz/Territorium</li><br /><li>alle Provinzen/Territorien außer Quebec subventionieren individuell berechtigte Familien mit niedrigem Einkommen – finanzieren einen Teil oder die gesamten Elternbeiträge </li><br /><li>Föderale finanzielle Unterstützung für bedürftige Familien mit niedrigerem Einkommen, indigene Familien, Alleinerziehende, Familien in unterversorgten Communities/Gemeinden, für Familien mit ungewöhnlichen Arbeitszeiten, Familien mit Kindern mit verschiedenen Fähigkeiten</li><br /></ul></div>
				<div class="read-more"><a href="#kanada-finanzierung">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-33">[33]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>1700 baht pro Kindergartenjahr (S. 99)</p></div>
				<div class="read-more"><a href="#thailand-zuschüsse">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-61">[61]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>pro Jahr 700h kostenfreie Vorschulbildung pro Kind</p></div>
				<div class="read-more"><a href="#finnland-finanzierung">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-9">[9]</a> <a href="#quelle-10">[10]</a> <a href="#quelle-11">[11]</a></div>
			</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="kategorie-22" data-cat-name="Besonderheiten">Besonderheiten</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>20h pro Woche Betreuungsplatz für jedes Kind</p></div>
						<div class="references">Quellen: <a href="#quelle-9">[9]</a> <a href="#quelle-10">[10]</a> <a href="#quelle-11">[11]</a></div>
			</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="prozess-und-strukturqualität" data-cat-name="Prozess- und Strukturqualität (KES bzw. ECCERS)">Prozess- und Strukturqualität (KES bzw. ECCERS)</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Die NQS (National Quality Standards) kombiniert Prozess- und Strukturkomponenten von Qualität, sieben Qualitätsbereiche, Landesweit haben 66 % der geprüften Einrichtungen die Vorschriften der NQS „erfüllt“ oder „übertroffen“ (2015)</p></div>
				<div class="read-more"><a href="#australien-prozess-und-strukturqualität">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-65">[65]</a> <a href="#quelle-85">[85]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>ECERS-R (1998): 4,7 (4,0-5,6)<br />Aktuellere repräsentative Studien berichten selten deskriptive Statistiken</p></div>
				<div class="read-more"><a href="#kanada-prozess-und-strukturqualität">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-86">[86]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="interaktionsqualität" data-cat-name="Interaktionsqualität (z.B. nach CLASS, GiNA, LIS)">Interaktionsqualität (z.B. nach CLASS, GiNA, LIS)</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="qualifizierung" data-cat-name="Qualifizierung (Ausbildung, Abschluss o.ä.)">Qualifizierung (Ausbildung, Abschluss o.ä.)</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>LDC- und FDC-Einrichtungen haben Qualifikationsanforderungen. Für LDC-Dienste richten sich die Anforderungen nach der Anzahl der betreuten Kinder, wobei die Hälfte der Pädagog*innen über eine anerkannte ECEC-Qualifikation auf Diplomniveau verfügen oder aktiv daran arbeiten müssen.</p></div>
				<div class="read-more"><a href="#australien-qualifizierung">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-65">[65]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
				<div class="read-more"><a href="#frankreich-qualifizierung">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
				<div class="read-more"><a href="#frankreich-qualifizierung">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
				<div class="read-more"><a href="#frankreich-qualifizierung">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>2/3 des Personals sollen richtig ausgebildete Pre-School-teacher sein, also einen Master in Pädagogik haben, in der Realität waren es 2017 nur 27%  Leitung und stellv. Leitung sollen Zusatzausbildung in Management oder Berufserfahrung als Pre-School Teacher  haben</p></div>
				<div class="read-more"><a href="#island-qualifizierung">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-87">[87]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p><strong>Daycare</strong>: fast alle Zuständigkeiten fordern Hochschulausbildung (<em>Early Childhood Education, ECE</em>) zumindest für einen Teil der Fachkräfte in Einrichtungen<br /><strong>Family Care</strong>: man braucht nur eine begrenzte Ausbildung im ECE-Bereich<br /><strong>Preschool</strong>: gleiche Ausbildung wie Grundschullehrer, aber  keine besondere Ausbildung im frühkindlichen Bereich bei den meisten provinzialen Zuständigkeiten</p></div>
				<div class="read-more"><a href="#kanada-qualifizierung">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-33">[33]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
				<div class="read-more"><a href="#neuseeland-qualifizierung">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Die Fachkräfte in frühkindlichen Einrichtungen werden auch Lehrer genannt. Sie haben eine  5 Jährige Berufsausbildung, vorzugsweise in Frühkindlicher Entwicklung, und werden vom Techers Council of Thailand lizensiert (S. 101).</p></div>
				<div class="read-more"><a href="#thailand-qualifizierung">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-61">[61]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>drei Lizensstufen: Lizenz zweiter Klasse: zwei Jahre Studium an einer Universität oder Berufsschule (73%),   Lizenz erster Klasse: vierjähriges Bachelorstudium (23%), Lizenz "special level": Masterabschluss (1%)</p></div>
						<div class="references">Quelle: <a href="#quelle-38">[38]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Zwei Jahre Junior College- oder Berufsschulbesuch (muss durch MHWL zertifiziert sein)  oder vier Jahre universitärer Studiengang (selbe Profession, teilweise werden studierte Pädagogen besser bezahlt)</p></div>
						<div class="references">Quelle: <a href="#quelle-38">[38]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Wie Hoikuen</p></div>
						<div class="references">Quelle: <a href="#quelle-62">[62]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>nur 1426 (8.6%) von 16,597 Lehrern in der Vorschule sind professionell qualifiziert (Lehrer mit einer 2-jährigen Ausbildung Lehrer College) </p></div>
				<div class="read-more"><a href="#tansania-qualifizierung">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-88">[88]</a> <a href="#quelle-89">[89]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
				<div class="read-more"><a href="#tansania-qualifizierung">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Kindergartenfachkraft - Bachelorabschluss, Spez. Frühpädagogik</p><br /><p>Sozialdienstfachkraft - Bachelorabschluss, Spez. in Sozialen Diensten</p><br /><p>Krankenschwester - berufsbildende Sekundarausbildung</p><br /><p>Kinderbetreuungsfachkraft - berufsbildende Sekundarausbildung, Chuch Training College</p><br /><p>Förderpädagogische Fachkraft - postgraduierten Studium in Förderpädagogik</p><br /><p>Förderprädagogische Assistenzkraft- keine Grundausbildung erforderlich </p></div>
				<div class="read-more"><a href="#finnland-qualifizierung">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-9">[9]</a> <a href="#quelle-10">[10]</a> <a href="#quelle-11">[11]</a></div>
			</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="professionen" data-cat-name="Professionen (in Einrichtung)">Professionen (in Einrichtung)</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>50 % der Erzieher*innen (die bei der Berechnung des Personalschlüssels beachtet werden) brauchen anerkannte Ausbildung auf Diplomniveau oder müssen aktiv darauf hinarbeiten, alle anderen Erzieher*innen brauchen mindestens ein anerkanntes Zertifikat auf dem Niveau der Bildung und Pflege auf dem Niveau III</p></div>
						<div class="references">Quelle: <a href="#quelle-90">[90]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Kinderkrankenschwester, FrüherzieherIn, Assistenzkinderkrankenschwester, Frühkindliche Ergänzungsfachkraft</p></div>
						<div class="references">Quelle: <a href="#quelle-91">[91]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>(Vor-)Schullehrkraft (M.A.), ATSEM-Ergänzungskraft (Ausbildung)</p></div>
						<div class="references">Quelle: <a href="#quelle-92">[92]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>(Vorschul-)Lehrkraft (Hochschulabschluss), ATSEM-Eregänzungsfachkraft</p></div>
						<div class="references">Quelle: <a href="#quelle-93">[93]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>50%-Anforderung, z.B. 40 Kinder (5 Pädagog*innen), also 3 Pädagog*innen, die über einen Abschluss in der frühkindlichen Bildung verfügen</p></div>
						<div class="references">Quelle: <a href="#quelle-94">[94]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>siehe Qualifizierung, Erzieher werden trotz der verschiedenen Lizenzen meistens ähnlich bezahlt und haben auch ähnliche Aufgaben</p></div>
						<div class="references">Quelle: <a href="#quelle-68">[68]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>siehe Qualifizierung</p></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>siehe Qualifizierung</p></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="kategorie-27" data-cat-name="Rolle der Leitung (Bez. / Fkt. /Kindkontakt?)">Rolle der Leitung (Bez. / Fkt. /Kindkontakt?)</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Konzept und Jahresplanung erstellen, einmal jährlich Bericht über Kita vorlegen  regelmäßige interne Evaluatin   hauptsächlich Manager Funktion (nur sehr, sehr wenige, die hauptsächlich in Gruppen sind) </p></div>
						<div class="references">Quelle: <a href="#quelle-95">[95]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Grundschullehrer sehen sich eher als Dienstleister, statt als Leitung und Führungskräfte (S. 93)</p></div>
						<div class="references">Quelle: <a href="#quelle-61">[61]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Einrichtungen sind sehr groß, Leitungen sind meist komplett von pädagogischer Arbeit freigestellt, kümmern sich um Administration, Probleme mit Kindern, Eltern oder Behörden, Dokumentation</p></div>
						<div class="references">Quelle: <a href="#quelle-38">[38]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>wie Yochien</p></div>
						<div class="references">Quelle: <a href="#quelle-38">[38]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Wie Yochien</p></div>
						<div class="references">Quelle: <a href="#quelle-38">[38]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="arbeitszeit" data-cat-name="Arbeitsstunden pro Woche">Arbeitsstunden pro Woche</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="3"><div class="cell-wider cell-content">
		<div><p>24h/Woche in direktem Kontakt mit Kindern,108 Stunden pro Jahr für Tätigkeiten wie: individueller Unterricht (60 Stunden), Teamarbeit und Treffen mit Eltern (24 Stunden), pädagogische Spielarbeit (18 Stunden), Teilnahme an Treffen des Schulgremiums (6 Stunden) </p></div>
						<div class="references">Quelle: <a href="#quelle-93">[93]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>größtenteils Vollzeitstellen</p></div>
						<div class="references">Quelle: <a href="#quelle-96">[96]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>ECE: 32,5 Stunden pro Woche<br />Kindergarten teacher: 32,8 Stunden pro Woche</p></div>
				<div class="read-more"><a href="#kanada-arbeitszeit">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-97">[97]</a> <a href="#quelle-98">[98]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>durchschnittlich 41</p></div>
						<div class="references">Quelle: <a href="#quelle-99">[99]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>41</p></div>
						<div class="references">Quelle: <a href="#quelle-99">[99]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>wahrscheinlich wie Hoikuen</p></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="kindkontaktzeit" data-cat-name="davon Kindkontaktzeit">davon Kindkontaktzeit</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="berufserfahrung" data-cat-name="Berufserfahrung (während der Ausbildung, Praktika, Dual, etc.)">Berufserfahrung (während der Ausbildung, Praktika, Dual, etc.)</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Kurs zum Erhalt des Certificate III in Early Childhood Education and Care beinhaltet mindestens 120 Stunden Praktikum, welches in einer registrierten Kindertagesstätte unter der Aufsicht eines qualifizierten Mitarbeiters durchgeführt werden muss</p></div>
						<div class="references">Quelle: <a href="#quelle-100">[100]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Ja, aber keine Information wie viele Wochen o.ä.. Im Bachelor in der University of Icealnd z.B.  in ca. der Hälfte der Kurse field practice Einheiten, im Master weniger</p></div>
						<div class="references">Quelle: <a href="#quelle-70">[70]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>3 Jahre Studium + 2 Jahre staatliche Anerkennung („Registered Teacher Criteria“)</p></div>
						<div class="references">Quelle: <a href="#quelle-43">[43]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>1 Jahr Training in einer Einrichtung unter Beaufsichtigung eines erfahrenden Mentors</p></div>
						<div class="references">Quelle: <a href="#quelle-68">[68]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="gehalt" data-cat-name="Gehalt (netto/Monat in Euro)">Gehalt (netto/Monat in Euro)</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Child Care / Day Care Worker: 2100 – 2500 € <br />Director, Child Care: 3000 – 3800 € <br />Educator: 2200 – 2700 € <br />Primary School Teacher: 2650 – 3750 € </p></div>
						<div class="references">Quelle: <a href="#quelle-101">[101]</a></div>
			</div></td>
			<td colspan="3"><div class="cell-wider cell-content">
		<div><p>zwischen 1.540 und 2.560€ pro Monat, Leitungen zwischen 1.700 und 3.200€</p></div>
						<div class="references">Quelle: <a href="#quelle-93">[93]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>ECE: 19,75$ (13,06€) pro Stunde = 2789$ (1844€) brutto pro Monat bei 32,5 Stunden pro Woche = 2196$-2284$ (1451€-1510€) netto je nach Provinz<br />Kindergarten teacher: 40,50$ (26,77€) pro Stunde = 5772$ (3816€) brutto pro Monat bei 32,8 Stunden pro Woche = 4047$-4330$ (2675€-2862€) netto pro Monat</p></div>
				<div class="read-more"><a href="#kanada-arbeitszeit">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-102">[102]</a> <a href="#quelle-103">[103]</a> <a href="#quelle-104">[104]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>ca. 38000€</p></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Erzieher verdienen mit 15.000 baht pro Monat genauso viel wie Grundschullehrer (S.101).</p></div>
						<div class="references">Quelle: <a href="#quelle-61">[61]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Durchschnittlich 289250 Yen (2262€) (Brutto in 2014)</p></div>
						<div class="references">Quelle: <a href="#quelle-99">[99]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Durchschnittlich 263916 Yen (2064€/Monat) (Brutto in 2014)</p></div>
						<div class="references">Quelle: <a href="#quelle-99">[99]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Wahrscheinlich wie Hoikuen</p></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="sozioökonomischer-status" data-cat-name="Sozio-ökonomischer Status der Berufsgruppe (Wo liegt das Einkommen im Landesvergleich?)">Sozio-ökonomischer Status der Berufsgruppe (Wo liegt das Einkommen im Landesvergleich?)</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Erzieher*innen verdienen im Durchschnitt 17,50 € pro Stunde und Lehrer*innen im Durchschnitt 30 € pro Stunde. Sales Adviser verdienen im Schnitt 16 € pro Stunde, LKW – Fahrer im Durchschnitt auch 17,50 € pro Stunde, eine Krankenschwester 44,50 € und ein Anwalt ungefähr 30 € pro Stunde. </p></div>
						<div class="references">Quelle: <a href="#quelle-105">[105]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Durchschnittlicher Stundenlohn 27,60$ (18,26€), also ECEs niedriger, Kindergarten teacher darüber</p></div>
						<div class="references">Quelle: <a href="#quelle-97">[97]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Erzieher verdienen genauso viel wie Grundschullehrer. Das Gehalt von Lehrern ist jedoch, im Verhältnis zum BIP und im Vergleich zu anderen Ländern sehr gering (S.69).</p></div>
				<div class="read-more"><a href="#thailand-sozioökonomischer-status">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-106">[106]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="kategorie-33" data-cat-name="Besonderheiten">Besonderheiten</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>der Großteil der Betreuung in Kanada wird von Ehrenamtlichen oder ehrenamtlichen Organisationen, Elterninitiativen durchgefüht &gt; 70% der Betreuungsangebote liegen im non-profit-Sektor</p></div>
						<div class="references">Quelle: <a href="#quelle-33">[33]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Durchschnittsalter 32,4, 14,2 Jahre durchschnittliche Erfahrung</p></div>
						<div class="references">Quelle: <a href="#quelle-99">[99]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Durchschnittsalter 34,8, durchschnittliche Erfahrung 7,6 Jahre</p></div>
						<div class="references">Quelle: <a href="#quelle-99">[99]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Wahrscheinlich wie Hoikuen</p></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>(2012)<br />Fachkräfte mit einschlägigem Hochschulabschluss: 30%</p><br /><p>Fachkräfte mit einschlägigem Fachschulabschluss: n/z</p><br /><p>Personal mit einschlägig berufsbildenden Sekundarabschluss: 70%</p><br /><p>Personal mit anderer, nicht einschlägiger Qualifikation: nur sehr weniger, meist als Ersatzpersonal</p><br /><p>Personal ohne formale Ausbildung: 6%</p><br /><p>Fachkräfte mit besonderer Spezialisierung: meist von extern</p><br /><p>Männliche Fachkräfte: 2,1% davon in Verwaltung: 6,3%</p></div>
						<div class="references">Quellen: <a href="#quelle-9">[9]</a> <a href="#quelle-10">[10]</a> <a href="#quelle-11">[11]</a></div>
			</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="betreuungsschlüssel" data-cat-name="Personalschlüssel">Personalschlüssel</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Geburt bis 24 Monate: 1:4<br />24 Monate – 36 Monate: 1:5<br />36 Monate – Vorschule: 1:11<br />älter als Vorschule: 1:15</p></div>
						<div class="references">Quelle: <a href="#quelle-107">[107]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>5:1 wenn Kinder noch nicht selbstständig gehen können<br />8:1 wenn Kinder selbstständig gehen können</p></div>
						<div class="references">Quelle: <a href="#quelle-69">[69]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>8:1 <br /><a href="https://kindergartenpaedagogik.de/fachartikel/kinderbetreuung-in-anderen-laendern/913">https://kindergartenpaedagogik.de/fachartikel/kinderbetreuung-in-anderen-laendern/913</a>.<br />Wolf, K./Grgic, M. (2009): Kindertagesbetreuung im europäischen Vergleich. Die Chancen von EU-SILC und die aktuellen Grenzen. Deutsches Jugendinstitut e.V.<br />Abteilung Kinder und Kindertagesbetreuung: München.</p></div>
						<div class="references">Quellen: <a href="#quelle-108">[108]</a> <a href="#quelle-109">[109]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>12,5:1</p></div>
						<div class="references">Quelle: <a href="#quelle-36">[36]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>6:1 (2012)</p></div>
						<div class="references">Quelle: <a href="#quelle-110">[110]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Daycare: 1:4 bis 1:5 für U3 (außer Québec: 1:7), 1:8 bis 1:9 für 3-6 J. (außer Saskatchewan &amp; Prince Edward Island: 1:10)<br />Preschool: durchschnittl. 1:12 (1:8 in Newfoundland/Yukon bis 1:20 in Québec)</p></div>
						<div class="references">Quelle: <a href="#quelle-33">[33]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Beispiel: 10 Kinder unter 2 Jahre - 2 Erwachsene; 30 Kinder über 2 Jahre - 3 Erwachsene</p></div>
						<div class="references">Quelle: <a href="#quelle-111">[111]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>15 Kinder zu einer Fachkraft (S. 101).</p></div>
						<div class="references">Quelle: <a href="#quelle-61">[61]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>1 laut Vorschrift: 1:35, die meisten haben aber zwei oder mehr Fachkräfte pro Gruppe (vor allem bei den 3-Jährigen)  2 im Durchschnitt  1:12,9</p></div>
						<div class="references">Quellen: <a href="#quelle-38">[38]</a> <a href="#quelle-51">[51]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>0-1 Jahr: 1:3;                              1-3 Jahre: 1:6;                           3-4 Jahre: 1:20;                         4-5 Jahre 1:30;                           5-6 Jahre: 1:35          Schlüssel kann aber höher liegen, da die Regierung oftmals Anreize gibt, um noch zusätzliche Krankenschwestern einzustellen (diese sind meist bei den unter Einjährigen beschäftigt). Dann bekommen die Einrichtungen eine höhrere Finanzierung.</p></div>
						<div class="references">Quelle: <a href="#quelle-38">[38]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>1:25 max. in ländlichen Regionen meist viel mehr in privaten viel weniger </p></div>
						<div class="references">Quelle: <a href="#quelle-112">[112]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>1:4 / 1:8</p></div>
				<div class="read-more"><a href="#finnland-gruppenstruktur">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-9">[9]</a> <a href="#quelle-10">[10]</a> <a href="#quelle-11">[11]</a></div>
			</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="politischer-entscheidungsträger" data-cat-name="Politischer Entscheidungsträger">Politischer Entscheidungsträger</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Die Zuständigkeit der australischen Regierung besteht darin, Familien finanzielle Unterstützung zu gewähren. Staatliche und territoriale Regierungen sind zudem für die Qualität und Sicherheit der Kinderbetreuungseinrichtungen verantwortlich. Sie verwalten den Nationalen Qualitätsrahmen, die Genehmigung und Regulierung von Einrichtungen im Rahmen der Bildungs- und Betreuungsdienste Nationales Recht und Vorschriften.</p></div>
				<div class="read-more"><a href="#australien-politischer-entscheidungsträger">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-113">[113]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Gemeinsame Verantwortung des Ministeriums für Familien, Kindheit, Frauenrechte (Ministèredes familles, de l’enfanceet des droitsdes femmes) und den Kommunen, sowie dem Sozial- und Gesundheitsministerium (Ministèredes affairessocialeset de la santé)</p></div>
				<div class="read-more"><a href="#frankreich-politischer-entscheidungsträger">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-35">[35]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Werden öffentlich, von Vereinigungen oder von Eltern betrieben</p></div>
				<div class="read-more"><a href="#frankreich-politischer-entscheidungsträger">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-36">[36]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Ministerium für nationale Bildung, Hochschulbildung und Forschung (Ministèrede l’éducationnationale, de l‘enseignementsupérieuret de la recherche) -&gt; Teil des Primarschulsystems</p></div>
				<div class="read-more"><a href="#frankreich-politischer-entscheidungsträger">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-36">[36]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Ministry of Education, Science and Culture</p></div>
						<div class="references">Quelle: <a href="#quelle-114">[114]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>früher Zuständigkeit des social service ministry – heute: überwiegend Zuständigkeit der einzelnen Bildungsministerien der Provinzen/Territorien</p></div>
						<div class="references">Quelle: <a href="#quelle-33">[33]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Ministry of Education</p></div>
						<div class="references">Quelle: <a href="#quelle-115">[115]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Es gibt nationale, zentralistische, provinziale und lokale Entscheidungsträger(siehe Schaubild) (S. 50).</p></div>
						<div class="references">Quelle: <a href="#quelle-106">[106]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Ministerium für Bildung, Kultur, Sport, Wissenschaft und Technologie</p></div>
				<div class="read-more"><a href="#japan-politischer-entscheidungsträger">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-38">[38]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Ministerium für Gesundheit und Fürsorge</p></div>
				<div class="read-more"><a href="#japan-politischer-entscheidungsträger">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-38">[38]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Ministerium für Bildung, Kultur, Sport, Wissenschaft und Technik &amp; Ministerium für Gesundheit und Fürsorge</p></div>
				<div class="read-more"><a href="#japan-politischer-entscheidungsträger">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-38">[38]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Regierung Ministerium für Bildung und Kultur , Betreuung und Bildung zwei unterschiedliche aministrative Institutionen </p></div>
				<div class="read-more"><a href="#tansania-politischer-entscheidungsträger">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
				<div class="read-more"><a href="#tansania-politischer-entscheidungsträger">[mehr dazu]</a></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Bildungsministerium &amp; Bildungsagentur</p></div>
				<div class="read-more"><a href="#finnland-politischer-entscheidungsträger">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-9">[9]</a> <a href="#quelle-10">[10]</a> <a href="#quelle-11">[11]</a></div>
			</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="finanzierung" data-cat-name="Finanzierung (Wer muss die Ressourcen bereitstellen?)">Finanzierung (Wer muss die Ressourcen bereitstellen?)</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Die australischen, staatlichen und territorialen Regierungen sind gemeinsam für die Finanzierung der ECEC verantwortlich. Laut dem Report von Government Services 2015 beliefen sich die gesamten Staatsausgaben 2013-14 auf schätzungsweise $7,7 Milliarden. Staatliche Fördermittel werden jedoch seit der Etablierung eines "Qualitätssicherungs- und Akkreditierungssystem" 1994 nur noch ausgezahlt, wenn die Einrichtung akkreditiert ist oder sich gerade dem Akkreditierungsprozess unterzieht </p></div>
						<div class="references">Quellen: <a href="#quelle-116">[116]</a> <a href="#quelle-65">[65]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Staat, in Zusammenarbeit mit Kommunen und Familienkassen (Caissesdes AllocationsFamiliales, CAF), gestaffelten Elternbeitrag</p></div>
						<div class="references">Quelle: <a href="#quelle-117">[117]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Privat-gewerbliche Einrichtungen</p></div>
						<div class="references">Quelle: <a href="#quelle-36">[36]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Staat(sowohl zuständig für Finanzierung und Organisation von Bildungseinrichtungen, als auch für Fortbildung der Fachkräfte, den Inhalt der Curricula und Qualitätsüberprüfungen)</p></div>
						<div class="references">Quelle: <a href="#quelle-36">[36]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>meist zahlen Eltern 30% der Kosten, in einigen Kommunen letztes Kitajahr für einige Stunden pro Tag kostenlos,  Kommune entscheidet über Gebühr für Familien </p></div>
						<div class="references">Quelle: <a href="#quelle-118">[118]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>-jede Provinz/Territorium hat eigene Anforderungen, Reglementierungen, Finanzierungssystem</p></div>
				<div class="read-more"><a href="#kanada-finanzierung">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-33">[33]</a> <a href="#quelle-42">[42]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Die Eltern zahlen die Kitakosten. Jedoch wird immer mehr bezuschusst. </p></div>
						<div class="references">Quelle: <a href="#quelle-119">[119]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>öffentlich: Steuerzahler; privat: Elternbeiträge und nationale und regionale Regierungen</p></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>kommunale &amp; private Träger</p></div>
				<div class="read-more"><a href="#finnland-finanzierung">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-9">[9]</a> <a href="#quelle-10">[10]</a></div>
			</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="träger" data-cat-name="Träger? Wer ist zuständig?">Träger? Wer ist zuständig?</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>In Australien werden die meisten Anbieter von der Australian Children's Education and Care Quality Authority nach dem National Quality Framework (NQR) reguliert und dann als Anbieter zugelassen. Es gibt etliche verschiedene Träger, die dann Einrichtungen verteilt in ganz Australien haben. Einige Anbieter von frühkindlichen Bildungs- und Betreuungsleistungen - wie z.B. häusliche, mobile und gelegentliche Betreuungsleistungen - fallen nicht unter den NQR. Diese Dienstleistungen werden durch den Staat nach verschiedenen Gesetzen geregelt.</p></div>
				<div class="read-more"><a href="#australien-politischer-entscheidungsträger">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-120">[120]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Öffentliche/private Trägerschaft</p></div>
						<div class="references">Quelle: <a href="#quelle-69">[69]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Öffentliche/private Trägerschaft</p></div>
						<div class="references">Quelle: <a href="#quelle-36">[36]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Die meisten Kitas werden von Gemeinden/Kommunen unterhalten, einige auch privat.</p></div>
						<div class="references">Quelle: <a href="#quelle-121">[121]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><ul><br /><li>in keiner der Provinzen/Territorien wird der Zugang zur Betreuung von Kindern als Anspruch oder Recht gesehen</li><br /><li>Kinderbetreuung wird behandelt wie Marktware – private, familiäre Verantwortung </li><br /><li>NGO’s, Akteure in der Community</li><br /><li>Kernbestandteil der ECEC</li><br /><li>Interessenverbände – ECEC professionals, Ehrenamtliche und Wissenschaftler – „Child Care Community“ - wichtige Anbieter von ECEC-Angeboten</li><br /></ul></div>
						<div class="references">Quelle: <a href="#quelle-42">[42]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Education &amp; Care: private Unternehmen, Kindergarten: öffentlich durch die Kindergarten Association der jeweiligen Region , Playcentres: Eltern</p></div>
						<div class="references">Quelle: <a href="#quelle-43">[43]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Es gibt private und öffentliche Einrichtungen (S. 412).</p></div>
						<div class="references">Quelle: <a href="#quelle-34">[34]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Regierung (mithilfe von Spendern wie zb UNICEF), kirchliche Organisationen, Ujamaa Villages, 97 % in öffentlichen Einrichtungen</p></div>
						<div class="references">Quelle: <a href="#quelle-122">[122]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>kommunale &amp; private Träger</p></div>
				<div class="read-more"><a href="#finnland-politischer-entscheidungsträger">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-9">[9]</a> <a href="#quelle-10">[10]</a> <a href="#quelle-11">[11]</a></div>
			</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="bild-vom-kind" data-cat-name="Bild vom Kind">Bild vom Kind</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Das Early Years Learning Framework besagt, dass alle Kinder das Recht auf eine Bildung haben, die die Grundlage für den Rest ihres Lebens bildet, ihre Fähigkeiten maximiert und ihre familiären, kulturellen und anderen Identitäten und Sprachen respektiert. Die Konvention erkennt auch das Recht der Kinder an, in allen Angelegenheiten, die ihr Leben betreffen, zu spielen und aktiv daran teilzunehmen </p></div>
						<div class="references">Quelle: <a href="#quelle-123">[123]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Leikskóli = Spielschule <br />Kinder sollen Möglichkeit haben, sich damit zu beschäftigen, was sie interessiert und ihre Stärken sind und ihrer Entwicklung enstpricht.  Spielen ist die wichtigste Art zu Lernen.  </p></div>
				<div class="read-more"><a href="#island-bild-vom-kind">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-124">[124]</a> <a href="#quelle-125">[125]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>am Beispiel der Provinz Ontario:</p><br /><ul><br /><li>Kinder sind kompetent und verfügen über komplexes Denken</li><br /><li>Kinder sind neugierig und haben viel Potenzial</li><br /><li>kindliche Entwicklung sollte aus unterschiedlichen Perspektiven verstanden werden – nicht nur die „traditionellen“ Bereiche wie z.B. sozial-emotionale, körperliche, kognitive und sprachliche Entwicklung, sondern auch die kreative, ästhetische und spirituelle Entwicklung sollte Beachtung finden</li><br /></ul></div>
						<div class="references">Quelle: <a href="#quelle-126">[126]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>lernende, reflektierende, explorierende, kommunizierende Personen, </p></div>
				<div class="read-more"><a href="#neuseeland-bild-vom-kind">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-127">[127]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Das Bild von Früher Bildung scheint recht verschult zu sein. Es wird von „preschool classes“ und „pre-primary students“ gesprochen (Pholphirul, 2017, S.411-412). Auf der einen Seite scheint der Leistungsdruck auf die Kinder extrem hoch zu sein (Techawongtham, 2015), andererseits hat Thailand mit die glücklichsten Schüler der Welt (PISA, 2012, S.21)</p></div>
						<div class="references">Quellen: <a href="#quelle-34">[34]</a> <a href="#quelle-128">[128]</a> <a href="#quelle-129">[129]</a></div>
			</div></td>
			<td colspan="3"><div class="cell-wider cell-content">
		<div><p>Guiding child care theory/"free childcare and education"-Ansatz (Veränderung des Blickwinkels auf Kindergärten 1989): Kinder machen das meiste aus ihren Fähigkeiten und können sich weiterentwickeln, wenn sie sich frei fühlen können. Kinder wachsen durch die Interaktionen mit den Menschen und Objekten in der Kindergartenumgebung (Education through Environment). Die Aufgabe der Lehrer ist es, die Kinder zu unterstützen. Indirekte Unterstützung: durch die Umgebung. Direkte Unterstützung: Dem Kind helfen. Eine gute/verständnisvolle/wohlwollende Beziehung zwischen Lehrer und Kind ist die Grundlage für eine gelingende Bildung.Beziehungen zwischen den Kindern beginnen mit Zwei- oder Dreier-Kontakten, später erweitern sie sich auf die ganze Gruppe. Rollen und Beziehungen werden erlernt durch das Spiel und das alltägliche Miteinander. Diese Philosophie sollte die Grundlage für die vorherrschenden pädagogischen Praktiken in den Kindergärten und Kindertagesstätten bilden (siehe unter Pädagogik).</p></div>
				<div class="read-more"><a href="#japan-curriculum">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-130">[130]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="kategorie-39" data-cat-name="Pädagogik (Praktiken, (z.B. Lerngeschichten))">Pädagogik (Praktiken, (z.B. Lerngeschichten))</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Im nationalen „Early Years Learning Framework“, sind fünf Prinzipien aufgeführt, die zeitgenössische Theorien und Forschungsergebnisse zum Lernen von Kindern und zur frühkindlichen Pädagogik widerspiegeln</p></div>
						<div class="references">Quelle: <a href="#quelle-123">[123]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Pädagogik (Praktiken): 15<br />Portfolios über die individuelle Entwicklung des Kindes<br />Bildungspläne für die Ecole maternelle (Horaires et programmes d'enseignement de l'école primaire, 2008) 9<br />Ziele Kinder: sich verständlich ausdrücken können, Beziehungen mit anderen Kindern und Erwachsenen pflegen, Üben von motorischen, sensorische, affektiven und individuellen Fähigkeiten<br />Ziele FK: Vorbereitung auf die Grundschule, individuelles Eingehen auf Lerngeschwindigkeiten, Ungleichheiten zwischen Kindern reduzieren (Sprache)<br />5 Lernbereiche<br />Sprache in Wort und Schrift<br />Handeln<br />Ausdruck und Verstehen durch künstlerische Aktivitäten<br />Lernen, die Gedanken zu strukturieren<br />Entdecken der Welt durch das Erforschen der unmittelbaren Umgebung</p></div>
						<div class="references">Quelle: <a href="#quelle-131">[131]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Lernfelder:  literacy and communication, health and wellbeing, sustainability and science, creativity and culture</p></div>
						<div class="references">Quelle: <a href="#quelle-132">[132]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>am Beispiel der Provinz Ontario:<br />4 Säulen der Pädagogik des Bildungsplans „How does Learning happen? – Ontarios Pedagogy for the Early Years“</p></div>
						<div class="references">Quelle: <a href="#quelle-126">[126]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>learning stories</p></div>
						<div class="references">Quelle: <a href="#quelle-133">[133]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Es gibt buddhistische Sonntagsschulen, die neben buddhistischen Lehren und Werten auch weltliches Wisse vermitteln.</p></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>1 Sehr unterschiedlich, freies Spiel ist wichtig, teilweise gibt es aber auch Yochiens, die Fachunterricht anbieten. Es kann vorkommen, dass alle 10 Minuten das Unterrichtsfach wechselt. 2 Leistungsförderung im Fokus. 3 Kindergärten und Kindertagesstätten können für sich selbst entscheiden, in welche pädagogische Richtung sie tendieren. Es lassen sich drei unterschiedliche Richtungen charakterisieren, die mehr oder weniger vorkommen: A) Fokus auf die Gruppe/Beziehungen innerhalb der Gruppe: Lehrer versuchen sich weitestgehend zurückzuhalten. Im Fokus steht das Lernen der wichtigsten Alltagsregeln und Gewohnheiten. Wechsel zwischen vom Lehrer instruierten Aktivitäten und Freiem Spiel. Während des Freispiels werden die Kinder dazu angeregt mit den anderen Kindern zu interagieren, alleine spielen soll vermieden werden. Aufbau einer warmen Beziehung zwischen Lehrer und Kind sehr wichtig. B) Instruiertes Lernen. Im Fokus steht das Lernen in der Gruppe, der Lehrer bringt den Kindern in Form von Unterricht etwas bei. Unterrichtsfächer sind: lesen Chinesische Schriftzeichen, Schreiben von Hiragana- Schriftzeichen, Zahlen und Ziffern, Volumen und Geometrie, Trainieren der Merkfähigkeit, Musikinstrumente spielen und malen. Disziplin und Einhalten der Regeln ist sehr wichtig, strikter Stundenplan, Kinder haben wenig Freiraum eigene Entscheidungen zu treffen. C) Kindzentrierter Ansatz: Freies Spiel im Fokus. Es gibt auch Gruppenaktivitäten, aber sehr wenig Instruktionen vom Lehrer.</p></div>
						<div class="references">Quellen: <a href="#quelle-38">[38]</a> <a href="#quelle-62">[62]</a> <a href="#quelle-130">[130]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>siehe Yochien ab 3</p></div>
						<div class="references">Quelle: <a href="#quelle-134">[134]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Freies Spiel hat hohen Stellenwert, vereinzelt Unterrichtsstunden, siehe Yochien ab 3</p></div>
						<div class="references">Quellen: <a href="#quelle-135">[135]</a> <a href="#quelle-134">[134]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="curriculum" data-cat-name="Curriculum">Curriculum</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Pädagogen nutzen den nationalen „Early Years Learning Framework“ (Belonging, Being and Becoming), um das Lernen und die Entwicklung von Kindern von der Geburt bis zum Alter von fünf Jahren zu begleiten </p></div>
				<div class="read-more"><a href="#australien-curriculum">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-136">[136]</a> <a href="#quelle-123">[123]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>The Icelandic National Curriculum Guide for Preschools</p></div>
				<div class="read-more"><a href="#island-curriculum">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-132">[132]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Keine einheitliche Bildung auf Bundesebene – Verantwortung der Provinzen/Territorien (Beispiel Ontario s. Ländertext unten)</p></div>
				<div class="read-more"><a href="#kanada-curriculum">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-33">[33]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>nationales Curriculum: Te Whāriki (1996)</p></div>
				<div class="read-more"><a href="#neuseeland-curriculum">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-137">[137]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
				<div class="read-more"><a href="#thailand-curriculum">[mehr dazu]</a></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>1 Wird von jedem Kindergarten selbst entwickelt, um Umgebung und lokale Angebote der einzelnen Kindergärten zu berücksichtigen; 2 Ansprüche des Wird von jedem Kindergarten selbst entwickelt, um Umgebung und lokale Angebote der einzelnen Kindergärten zu berücksichtigen (MEXT 2008) -&gt; Ansprüche des Bildungsgesetztes müssen erfüllt werden, also in Kindergärten sollen Grundlagen für den weiteren Bildungsweg der Kinder gelegt werden<br />Fünf Ziele: Gesundheit, Beziehung, Umgebung, Sprache und Ausdruck<br />Gesundheit: unabhängiges, gesunders und sicheres Leben, Befriedigung des Bewegungs- und Aktivitätsdranges, Gefühl von Sicherheit und Selbstständigkeit (erreiches des Ziels durch freies Spiel, gemeinsames Essen und eine natürliche Umgebung)<br />Beziehungen: Entwicklung Selbstvertrauen, kommunikativ werden, gegenseitige Unterstützung, Betonung auf Gruppengedanken<br />Umgebung: Förderung der Interaktion mit Umgebung, sodass Kinder Neugierde und Interesse entwickeln<br />Sprache: Gefühle, Erfahrungen und Gedanken sollen verbalisiert werden, anderen zuhören, Interesse und Neugierde für Gesagte zeigen<br />Ausdruck: der Gefühle, Erfahrungen und Gedanken. Über Sprache hinausgehend zeichnerisch, musikalisch und in körperlichen Aufführungen (MEXT 2001)</p></div>
				<div class="read-more"><a href="#japan-curriculum">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-138">[138]</a> <a href="#quelle-139">[139]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>National Guidelines for Care and Education at Day Nursery: Thematisiert werden Grundlagen der Kinderbetreuung, Gesundheit und der Schutz der Kinder sowie das Managementsystem der Einrichtung</p><br /><p>Schwerpunkte der Kinderbetreuung: <br />Assistenz der Kinder und Aufbau stabiler Beziehungen zwischen Kindern und nurses, emotionale Stabilität und Schutz von Seiten der nurses</p><br /><p>Schwerpunkt der Bildung ist Entwicklung der Kinder </p><br /><p>Bereiche: Gesundheit, Sprache, Ausdruck, zwischenmenschliche Beziehungen und Beziehung zur Umwelt</p><br /><p>Freies Spiel in einer für Kinder ansprechend gestalteten Umgebung hat sehr hohen Stellenwert: soll ihnen ermöglichen sich weiterzuentwickeln, zu lernen und die im Curriculum benannten Schwerpunkte zu erleben</p></div>
				<div class="read-more"><a href="#japan-curriculum">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-62">[62]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
				<div class="read-more"><a href="#japan-curriculum">[mehr dazu]</a></div>
					</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Das nationale Kerncurriculum für frühkindliche Bildung und Betreuung</p><br /><ol><br /><li>Die Welt der Sprache</li><br /><li>Künstlerischer Ausdruck</li><br /><li>Ich und meine Gemeinschaft</li><br /><li>Das Erforschen meiner Umgebung</li><br /><li>Aufwachsen und Entwicklung in Bewegung</li><br /></ol><br /><p>Das nationale Kerncurriculum für Vorschulbildung<br />Prinzipien, die die Individualität des Kindes betonen<br />Bedeutung aktiven Lernens<br />Gemeinschaftsgefühl<br />spielbasiertes und kindzentriertes Lernen<br />eine positive Sicht auf das Leben</p></div>
				<div class="read-more"><a href="#finnland-curriculum">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-9">[9]</a> <a href="#quelle-10">[10]</a> <a href="#quelle-11">[11]</a></div>
			</div></td>
	</tr>
</thead>
<tbody>
<tr>
	<th class="sticky-cell category-cell"><a data-cat="inklusion" data-cat-name="Inklusionsansatz">Inklusionsansatz</a></th>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Es gibt ein Programm zur Unterstützung von Inklusion, welches Kinderbetreuungsdienste für Kinder mit zusätzlichen Bedürfnissen unterstützen soll, indem es maßgeschneiderte Inklusionsberatung und Unterstützung durch vertraglich gebundene Inklusionsagenturen sowie Mittel zur Beseitigung schwierigerer Inklusionsbarrieren bereitstellt</p></div>
						<div class="references">Quelle: <a href="#quelle-113">[113]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div><p>Fast ausschließlich in Regeleinrichtungen, vereinzelt existieren Inklusionsgruppen<br />In diesen: Individuelle Förderung des Kindes <br />94% der Inklusionsgruppen sind in öffentlichen Einrichtungen<br />2015: 31.299 Kinder mit Inklusionsbedarf besuchten eine Regeleinrichtung, 6.914 eine ULIS-Inklusionsgruppe</p></div>
						<div class="references">Quelle: <a href="#quelle-36">[36]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Kinder, die special assistance and training brauchen, soll das in Kita zur Verfügung gestellt werden, Zusammenarbeit mit weiterführender Schule wichtig; <br />Inklusion auch Teil der Ausbildung (Modul dazu in Uni) </p></div>
				<div class="read-more"><a href="#island-inklusion">[mehr dazu]</a></div>
						<div class="references">Quelle: <a href="#quelle-140">[140]</a></div>
			</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>Jedes Kind mit Beeinträchtigung hat seit 1999 das Recht auf Inklusion inder Schule. Diese Inklusion scheint allerdings in  Frühkindlichen Einrichtungen noch nicht angekommen zu sein (S.1107).</p></div>
						<div class="references">Quelle: <a href="#quelle-141">[141]</a></div>
			</div></td>
			<td colspan="3"><div class="cell-wider cell-content">
		<div><p>2016 gab es im vorschulischen Bereich 1.476<br />Einrichtungen speziell für Kinder mit Förderbedarf.</p></div>
						<div class="references">Quelle: <a href="#quelle-50">[50]</a></div>
			</div></td>
				<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-narrow cell-content">
		<div></div>
					</div></td>
			<td colspan="1"><div class="cell-wide cell-content">
		<div><p>sowohl integrative als auch geosnderte Gruppen, Einrichtungen immer in der Nähe des Wohnortes vom Kind, Förderfachkraft immer mit in der Gruppe, gesetzlich geregelter Anspruch auf Förderung</p></div>
				<div class="read-more"><a href="#finnland-inklusion">[mehr dazu]</a></div>
						<div class="references">Quellen: <a href="#quelle-9">[9]</a> <a href="#quelle-10">[10]</a> <a href="#quelle-11">[11]</a></div>
			</div></td>
	</tr>
</tbody>
</table>
</div>



<div><a href="#" id="toggle-additional-info">Zeige/verstecke Quellen und Links</a></div>


<div style="display:none;" id="cat-content-größe" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>7.692.024 km²</p></div>
<div class="cat-info-cntry">Frankreich:</div>
<div class="cat-info-content"><p>549.087 km²  </p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>103.000 km²</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>8,965,588.85</p></div>
<div class="cat-info-cntry">Neuseeland:</div>
<div class="cat-info-content"><p>267.710 km²</p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>513.115 km²</p></div>
<div class="cat-info-cntry">Japan:</div>
<div class="cat-info-content"><p>378.000 Quadratkilometer</p></div>
<div class="cat-info-cntry">Tansania:</div>
<div class="cat-info-content"><p>947.300 km² (2017)</p></div>
<div class="cat-info-cntry">Finnland:</div>
<div class="cat-info-content"><p>338.448 km² </p></div>
</div>
<div style="display:none;" id="cat-content-bevölkerung" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>24 Millionen (2017)</p></div>
<div class="cat-info-cntry">Frankreich:</div>
<div class="cat-info-content"><p>ca. 65,1 Mio. </p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>337.430 (2018)</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>37,242,571 (2018, Q3)</p></div>
<div class="cat-info-cntry">Neuseeland:</div>
<div class="cat-info-content"><p>4800000</p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>67,2 Mio. Einwohner</p></div>
<div class="cat-info-cntry">Japan:</div>
<div class="cat-info-content"><p>126,49 Mio. (2018)</p></div>
<div class="cat-info-cntry">Tansania:</div>
<div class="cat-info-content"><p>49,3 Mio. (2017)</p></div>
<div class="cat-info-cntry">Finnland:</div>
<div class="cat-info-content"><p>5.487.308 (2016)</p></div>
</div>
<div style="display:none;" id="cat-content-kategorie-5" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>3,2 / km² (2017)</p></div>
<div class="cat-info-cntry">Frankreich:</div>
<div class="cat-info-content"><p>122,6 Einwohner pro km²</p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>3,27 Einwohner/km²</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>3,9 (2016)</p></div>
<div class="cat-info-cntry">Neuseeland:</div>
<div class="cat-info-content"><p>17,9</p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>135,13 Einwohner/ km²</p></div>
<div class="cat-info-cntry">Japan:</div>
<div class="cat-info-content"><p>347,78 (2017)</p></div>
<div class="cat-info-cntry">Tansania:</div>
<div class="cat-info-content"><p>58,54 Einwohner pro km²</p></div>
<div class="cat-info-cntry">Finnland:</div>
<div class="cat-info-content"><p>16,26 Einwohner pro km²</p></div>
</div>
<div style="display:none;" id="cat-content-kategorie-6" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>1,81 Kinder je Frau (2016)</p></div>
<div class="cat-info-cntry">Frankreich:</div>
<div class="cat-info-content"><p>1,92</p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>1,8 (2016)</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>1,6 (2016)</p></div>
<div class="cat-info-cntry">Neuseeland:</div>
<div class="cat-info-content"><p>1,87 (Jahr 2016)</p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>1,48</p></div>
<div class="cat-info-cntry">Japan:</div>
<div class="cat-info-content"><p>1,44</p></div>
<div class="cat-info-cntry">Tansania:</div>
<div class="cat-info-content"><p>2016: 5,02 Fertilitätsrate (Geburtenrate pro Frau)</p></div>
<div class="cat-info-cntry">Finnland:</div>
<div class="cat-info-content"><p>1,65</p></div>
</div>
<div style="display:none;" id="cat-content-formen-frühkindlicher-bildung" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>Long Day Care, Family Day Care, In-Home Care, Occasional Care, Outside School Hours Care, mobile Kinderdienste </p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>Pre-Schools (bis Schule) und Day-Parents (für 0-2-jährige)</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>Kindergärten (nursery schools, daycare centres), regulierte Betreuung in der Familie/Zuhause (Nannys, AuPairs), öffentliche Vorschuleinrichtungen (kindergarten)</p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>Preschool classes, Kindergarten und childcare centers (S. 411)</p></div>
<div class="cat-info-cntry">Japan (U3):</div>
<div class="cat-info-content"><p>Yochien (Kindergarten oder Vorschule)</p></div>
<div class="cat-info-cntry">Japan (Kita):</div>
<div class="cat-info-content"><p>Hoikuen (Kindertagesstätte)</p></div>
<div class="cat-info-cntry">Japan (Vorschule):</div>
<div class="cat-info-content"><p>Nintei-Kodomoens (Zusammenlegung von Yochien und Hoikuen seit 2006)</p></div>
<div class="cat-info-cntry">Tansania (Vorschule):</div>
<div class="cat-info-content"><p>Vorschule: Pre-Primary</p></div>
<div class="cat-info-cntry">Tansania (Kita):</div>
<div class="cat-info-content"><p>Kindergarten: Day Care Centre, Kindergarten, Nursery School </p></div>
<div class="cat-info-cntry">Finnland:</div>
<div class="cat-info-content"><p>Kindertageseinrichtungen oder Tagespflege; Spielgruppen; Vorschule</p></div>
</div>
<div style="display:none;" id="cat-content-verbindlichkeit" class="cat-content">
<div class="cat-info-cntry">Frankreich (U3):</div>
<div class="cat-info-content"><p>nicht verbindlich</p></div>
<div class="cat-info-cntry">Frankreich (Kita):</div>
<div class="cat-info-content"><p>nicht verbindlich</p></div>
<div class="cat-info-cntry">Frankreich (Vorschule ):</div>
<div class="cat-info-content"><p>noch nicht verbindlich</p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>freiwillig</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>zum Teil Anwesenheitspflicht in der Vorschule (kindergarten), ansonsten freiwillig</p></div>
<div class="cat-info-cntry">Neuseeland:</div>
<div class="cat-info-content"><p>freiwillig</p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>freiwillig (S.412)</p></div>
<div class="cat-info-cntry">Japan (U3):</div>
<div class="cat-info-content"><p>Entscheidet sich eine Familie dafür ihr Kind in einen Yochien zu geben, muss das Kind mindestens 39 Wochen im Jahr für 5 Tage die Woche und 4 Stunden am Tag in die Einrichtung kommen.</p></div>
<div class="cat-info-cntry">Japan (Kita):</div>
<div class="cat-info-content"><p>keine Pflicht</p></div>
<div class="cat-info-cntry">Japan (Vorschule):</div>
<div class="cat-info-content"><p>keine Pflicht</p></div>
<div class="cat-info-cntry">Tansania (Vorschule):</div>
<div class="cat-info-content"><p>Pflicht ab 5 Jahren, wenn Leistung in Schule nicht gut genug werden Kinder in Vorschule zurück gestuft </p></div>
<div class="cat-info-cntry">Tansania (Kita):</div>
<div class="cat-info-content"><p>keine Pflicht</p></div>
<div class="cat-info-cntry">Finnland:</div>
<div class="cat-info-content"><p>frühkindliche Betreuung keine Pflicht; Vorschule ab 6 Jahren als Teil der Schulzeit ist Pflicht</p></div>
</div>
<div style="display:none;" id="cat-content-betreuungsquote" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>Im Dezemberquartal 2017 besuchten 31,9% aller Kinder im Alter von 0 bis 12 Jahren eine genehmigte Kinderbetreuung.</p></div>
<div class="cat-info-cntry">Frankreich (U3):</div>
<div class="cat-info-content"><p>43% der unter dreijährigen </p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>39% 0-2 Jahren (2011) , 95-97% mit 3-6 Jahren (2011)</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>54% der Eltern mit Kinder im Alter von 0-4 Jahren (2011)<br />39% der Eltern mit Kindern im Schulalter (5-14 Jahre)<br />26% der Eltern mit Kinder von 0-1 Jahren - am häufigsten für Kinder von 2-4 Jahren<br />6 von 10 Eltern nutzen eine Form der Betreuung für ihre Kinder</p></div>
<div class="cat-info-cntry">Neuseeland:</div>
<div class="cat-info-content"><p>0,955</p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>Laut Gross enrolment ratio 100%</p></div>
<div class="cat-info-cntry">Japan:</div>
<div class="cat-info-content"><p>unter 3 Jahre: 23%; 3 Jahre: 80%; 4 Jahre: 94%; 5 Jahre: 97%. (alle Einrichtungen zusammengefasst 2015)</p></div>
<div class="cat-info-cntry">Tansania:</div>
<div class="cat-info-content"><p>2013: 32,3 % (Gross Enrolment Ratio)</p></div>
</div>
<div style="display:none;" id="cat-content-anzahl-einrichtungen" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>Dezemberquartal 2017: 18.524 zugelassene Kinderbetreuungseinrichtungen (55,8 % außerhalb der Schule, 39,7 %  Long Day Care)</p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>254 (2017)</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>17297 "centre-based" (daycare centres &amp; preschools) + 23847 home care families</p></div>
<div class="cat-info-cntry">Neuseeland:</div>
<div class="cat-info-content"><p>Education &amp; Care Einrichtungen (2.336), Kōhanga reo (466), Play Centres (455), Kindergarten (641)</p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>1 128 040 öffentliche Einrichtungen und 621 156 private Einrichtungen (S. 48).</p></div>
<div class="cat-info-cntry">Japan (U3):</div>
<div class="cat-info-content"><p>1 11252 Yochien (2016), 2 363,3 Yochien auf 100000 3-5 Jährige Kinder (2016), 36,7% sind öffentlich</p></div>
<div class="cat-info-cntry">Japan (Kita):</div>
<div class="cat-info-content"><p>1 24234 (2015),2  36,5% sind öffentlich (2015)</p></div>
<div class="cat-info-cntry">Japan (Vorschule):</div>
<div class="cat-info-content"><p>2822 Nintei-Kodomoens (2016)</p></div>
</div>
<div style="display:none;" id="cat-content-kategorie-9" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>37 % der Paare haben Kinder</p></div>
<div class="cat-info-cntry">Frankreich:</div>
<div class="cat-info-content"><p>31,50%</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>29,9% (2016)</p></div>
</div>
<div style="display:none;" id="cat-content-kategorie-10" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>Alleinerziehend: 10,2% (2016)</p></div>
<div class="cat-info-cntry">Frankreich:</div>
<div class="cat-info-content"><p>7,40%</p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>15,3% Alleinerziehende von allen Familien (auch zusammenlebend oder verheiratete Paare ohne Kinder)) Kinder bis 18 Jahre (2017)</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>11,5% (2016)</p></div>
<div class="cat-info-cntry">Japan:</div>
<div class="cat-info-content"><p>1,24 Mio. alleinerziehende Frauen; 223000 alleinerziehende Väter</p></div>
</div>
<div style="display:none;" id="cat-content-kategorie-11" class="cat-content">
<div class="cat-info-cntry">Frankreich:</div>
<div class="cat-info-content"><p>kinderlose Paare: 24,8%<br />Großfamilien: 5,3%<br />Alleinstehende Frauen:18,5%<br />Alleinstehende Männer:12,5%</p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>Thailand ist stark im Kommen und hat sich innerhalb nur einer Generation von einem low-income Landwirtschaftsland zu einem Land mit mittlerem Einkommen gemacht. Außerdem wurde viel im Bereich der Bildung getan. (S. 19; S. 41). 2018 hat Thailand die geringste Arbeitslosenrate der Welt (Shaeffer, 2018, S. 100).</p></div>
<div class="cat-info-cntry">Japan:</div>
<div class="cat-info-content"><p>1 98% der Kinder werden ehelich geboren. Familienbild und Zusammenleben von Mann und Frau ist sehr traditionell, oftmals ziehen Ehepartner erst nach der Hochzeit zusammen. Bei 1/4 der Hochzeiten ist die Frau bereits schwanger. 2 Nach Geburt des ersten Kindes bleiben 70% der Frauen für mindestens 10 Jahre zu Hause.</p></div>
</div>
<div style="display:none;" id="cat-content-betreuungsumfang" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>Durchschnittliche Aufenthaltsdauer eines Kindes für alle Arten (Long Day Care, Family Day Care und In-Home Care, Occasional Care, Outside School Hours Care) 24,6 Stunden pro Woche. Im Long Day Care durchschnittlich 28,8 Stunden pro Woche (Dezemberquartal 2017)</p></div>
<div class="cat-info-cntry">Frankreich (U3):</div>
<div class="cat-info-content"><p>28,4 h/ Woche (Stand 2008)  (1)</p></div>
<div class="cat-info-cntry">Frankreich (Vorschule ):</div>
<div class="cat-info-content"><p>27,9h/Woche (1)</p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>die meisten 40-45h die Woche (ab 2 Jahren)</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>unterschiedlich, 60% Vollzeit (30h), 70% der 0-4 jährigen Kinder Vollzeit (2011)</p></div>
<div class="cat-info-cntry">Neuseeland:</div>
<div class="cat-info-content"><p>20,7 h</p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>7 Stunden am Tag für 5 Tage die Woche (S. 101)</p></div>
<div class="cat-info-cntry">Japan (U3):</div>
<div class="cat-info-content"><p>20 Stunden</p></div>
<div class="cat-info-cntry">Japan (Kita):</div>
<div class="cat-info-content"><p>Ganztags (8 bis 11 Stunden geöffnet), Familien geben Kinder nach Bedarf in die Einrichtung. Da Familien nur einen Platz im Hoikuen bekommen, wenn beide Eltern arbeiten, gehen folglich  viele Kinder  40-55 Stunden pro Woche</p></div>
<div class="cat-info-cntry">Japan (Vorschule):</div>
<div class="cat-info-content"><p>Ganztags (8 bis 11 Stunden) geöffnet, Familien geben ihre Kinder nach Bedarf in die Einrichtung</p></div>
<div class="cat-info-cntry">Finnland:</div>
<div class="cat-info-content"><p>1-29 Std./Woche:<br />U3 - 7,9%<br />Ü3 - 32,2%</p><br /><p>über 30 Std./Woche:<br />U3 - 24,6%<br />Ü3 – 59,6%</p><br /><p>keine Betreuung in Einrichtung:<br />U3 - 67,4%<br />Ü3 – 17,2%</p></div>
</div>
<div style="display:none;" id="cat-content-eintrittsalter" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>Ab sechs Wochen: Nursery: 6 Wochen -2 Jahre, Toddler: 2-3 Jahre, Kindergarten 3-5 Jahre</p></div>
<div class="cat-info-cntry">Frankreich (U3):</div>
<div class="cat-info-content"><p>2 Monate </p></div>
<div class="cat-info-cntry">Frankreich (Kita):</div>
<div class="cat-info-content"><p>2 Jahre</p></div>
<div class="cat-info-cntry">Frankreich (Vorschule ):</div>
<div class="cat-info-content"><p>2-3 Jahre (Wohnortabhängig)</p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>die meisten gehen ab 2 Jahren in die Kita, vorher Day Parents möglich</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>ECE ab 0 Monate möglich, Vorschule ("Kindergarten") ab 5 Jahre (ON ab 4)</p></div>
<div class="cat-info-cntry">Neuseeland:</div>
<div class="cat-info-content"><p>1 Jahr</p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>Ab 4 Jahren (S.98)</p></div>
<div class="cat-info-cntry">Japan (U3):</div>
<div class="cat-info-content"><p>3 Jahre</p></div>
<div class="cat-info-cntry">Japan (Kita):</div>
<div class="cat-info-content"><p>ab 0</p></div>
<div class="cat-info-cntry">Japan (Vorschule):</div>
<div class="cat-info-content"><p>ab 0</p></div>
<div class="cat-info-cntry">Tansania (Vorschule):</div>
<div class="cat-info-content"><p>ab 5 Jahren - 9 Jahre (falls Kinder von der Grundschule zurückgestuft werden)</p></div>
<div class="cat-info-cntry">Tansania (Kita):</div>
<div class="cat-info-content"><p>ab 2 Jahren (laut einem Einheimischen ist dies das typische Eintrittsalter)</p></div>
<div class="cat-info-cntry">Finnland:</div>
<div class="cat-info-content"><p>Tagepflege und Kindertageseinrichtungen ab 9 bzw. 10 Monaten</p></div>
</div>
<div style="display:none;" id="cat-content-gruppenstruktur" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>Long Day Care: Einrichtungen können selbst entscheiden solange der Personalschlüssel eingehalten ist, Family Day Care:dürfen nicht mehr als sieben Kinder gleichzeitig in der Obhut der Erzieher*innen sein, nicht mehr als vier Erzieher*innen</p></div>
<div class="cat-info-cntry">Frankreich (Vorschule ):</div>
<div class="cat-info-content"><p>25,7 Kinder/Gruppe  Gruppe in öffentlichen Einrichtungen, 27 Kinder/Gruppe Gruppe in privaten vorschulischen Einrichtungen</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p><strong>Daycare</strong>: Maximale Gruppengröße je nach Provinz unterschiedlich. Kanadaweiter Durchschnitt für U3 ist 9,9. Kleinste Gruppen auf Prince Edward Island mit 6 Kindern, größte Gruppen in Québec mit max. 15. Für 3-6 kanadaweiter Durchschnitt 20,1. Kleinste Gruppen in Newfoundland, Manitoba, Yukon und Nunavut mit 16, größte in Québec mit max. 30.<br /><strong>Family Care</strong>: max. Gruppengröße einschl. der eigenen durchschnittl. 4 Kinder (von 2 in Saskatchewan bis 6 in PEI/Québec/Ontario) für U3; Für Gruppen 3-6 J. durchschnittl. 6 Kinder (von 5 in Manitoba/Saskatchewan bis 7 in Newfoundland/Nova Scotia/BC)<br /><strong>Preschool</strong>: in den meisten Provinzen der doppelte Betreuungsschlüssel, also ca. 23 Kinder (von 16 in Newfoundland/Yukon bis 30 in Québec und Nova Scotia)</p></div>
<div class="cat-info-cntry">Japan (U3):</div>
<div class="cat-info-content"><p>altershomogene Gruppen mit 35 Kindern pro Gruppe</p></div>
<div class="cat-info-cntry">Tansania (Vorschule):</div>
<div class="cat-info-content"><p>altershomogen</p></div>
<div class="cat-info-cntry">Finnland:</div>
<div class="cat-info-content"><p>max. 12 bzw. 24 Kinder pro Gruppe, nämlich so viele, wie für 3 Fachkräfte pro Gruppe erlaubt ist; keine Angaben zur Struktur</p></div>
</div>
<div style="display:none;" id="cat-content-qualitätsmanagement" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>Die meisten Einrichtungen arbeiten nach dem National Quality Framework </p></div>
<div class="cat-info-cntry">Frankreich (U3):</div>
<div class="cat-info-content"><p>Sozialministerium; Überprüfung der Räume, Ausstattung, Gesundheits-, Hygiene und Sicherheitsbestimmungen, <br />Überprüfung der Qualifikation von Fachkräften und Arbeitsbedingungen</p></div>
<div class="cat-info-cntry">Frankreich (Vorschule ):</div>
<div class="cat-info-content"><p>Bildungsministerium; Überprüfung der Umsetzung des Curriculums und Entwicklungsprozess der Kinder mittels Fragebögen und Checklisten</p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>externe Evaluation vom  Ministry of Education, Science and Culture; externe Evaluationen der Stadverwaltungen; regelmäßige interne Evaluationen von der Kita</p></div>
<div class="cat-info-cntry">Neuseeland:</div>
<div class="cat-info-content"><p>externe: Education Review Office (ERO) -&gt; verschiedene Arten von Überprüfungen und Bewertungen durch Reviews</p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>20% der ECCD center von schlechter Qualität, unterbesetzt und schlecht ausgestattet (S. 101)</p></div>
<div class="cat-info-cntry">Japan (U3):</div>
<div class="cat-info-content"><p>Private Einrichtungen stehen unter Beaufsichtigung der municipal government’s private schools<br />division. Öffentliche Kindergärten werden beaufsichtigt von municipal government’s educational committee</p></div>
<div class="cat-info-cntry">Japan (Kita):</div>
<div class="cat-info-content"><p>Laut MHLW (Ministerium) sollte eine unabhängige Kontrolle der Qualität von Bildungs- Betreuungs- und Erziehungsangeboten der jeweiligen Einrichtunge stattfinden. Diese Aufgabe wurde an eine dritte, gemeinnützige Organisation weitergegeben. Deshalb sind Kriterien und Standards nicht national verankert. Es gibt keine nationalen Qualitätsmessungen oder -skalen. Das Thema ist aber sehr aktuell und wird viel diskutiert.</p></div>
<div class="cat-info-cntry">Finnland:</div>
<div class="cat-info-content"><p>Qualitätsmonitoring über Kommunen und deren Budget; nationale Bildungsagentur verpflichtet zur Evaluation frühkindlicher Bildung; keine externen Prüfungen - Selbstevaluation in Eigenverantwortung</p></div>
</div>
<div style="display:none;" id="cat-content-kategorie-16" class="cat-content">
</div>
<div style="display:none;" id="cat-content-einrichtungsgröße" class="cat-content">
<div class="cat-info-cntry">Frankreich (U3):</div>
<div class="cat-info-content"><p>max. 60 Plätze</p></div>
<div class="cat-info-cntry">Frankreich (Kita):</div>
<div class="cat-info-content"><p>bis zu 80 Plätze</p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>variieren stark, von Einrichtung mit einem Klassenraum und wenigen Kindern, bis 8 Klassenräumen und über 150 Kindern</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>Durchschnitt Kanada 69,8 Plätze pro Centre. Starke Unterschiede zwischen den Provinzen, kleinste Einrichtungen in Nunavut (22,8 Plätze) und größte in Québec (123,9 Plätze). Home Care Families haben durchschnittlich 6,0 Plätze pro Einrichtung (Spanne der Durchschnitte je Provinz: 3,9-9,0).</p></div>
</div>
<div style="display:none;" id="cat-content-soziale-zugänglichkeit" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>2017 waren bei jeweils 91% und 92% der Long-Day-Care – Einrichtungen und der Family-Day-Care – Einrichtungen freie Stellen verfügbar<br />Australische Regierung hat im Rahmen der „Universal Access National Partnership“ 870 Millionen Dollar zugesagt, um die Unterstützung des Commonwealth für Vorschulen in den Jahren 2018 und 2019 fortzusetzen. Diese Finanzierung stellt sicher, dass jedes Kind im Jahr vor der Schule 600 Stunden (15 Stunden pro Woche) lang Zugang zu einer qualitativ hochwertigen Vorschulausbildung hat </p></div>
<div class="cat-info-cntry">Frankreich (U3):</div>
<div class="cat-info-content"><ul><br /><li>kein genereller Rechtssanspruch für Kinder im U3 Bereich</li><br /></ul></div>
<div class="cat-info-cntry">Frankreich (Vorschule ):</div>
<div class="cat-info-content"><ul><br /><li>Recht auf staatlich geförderten Platz in der Vorschule besteht, dieser ist bis auf die Verpflegung kostenlos</li><br /></ul></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>Bevorzugt aufgenommen werden Kinder, die schon älter sind oder unter schwierigen Bedingungen aufwachsen (z.B. Kinder/Familienmitglieder mit Erkrankungen, junge Eltern oder viele Geschwister)</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><ul><br /><li>zusätzlich zu den provinziellen/territorialen Programmen fördert die Bundesregierung (federal government) direkt verschiedene ECEC-Programme für besondere Bevölkerungsgruppen wie z.B. indigene Einwohner, Militärangehörige, Einwanderer/Newcomers, Geflüchtete</li><br /><li>insgesamt gesehen gibt es die Verfügbarkeit der geregelten Betreuungsangebote nur unzureichend vorhanden und deckt nur wenige Kinder ab</li><br /><li>nicht alle Familien können sich die Betreuung leisten</li><br /></ul></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>12,6% der Bevölkerung lebt unterhalb der Armutsgrenze, 0,1% der Bevölkerung besitzt fast die Hälfte (46,5%) des Vermögens des ganzen Landes. Kinder, die aus diesem reichen Zehntel stammen, haben eine etwa 16 mal größere Bildungschancen als die ärmsten Kinder. Was die soziale Ungleichheit angeht, ist Thailand nach dem Gini Koeffizient (48,4) auf Platz 24 von 145 Ländern (Shaeffer, 2018, S. 96).</p></div>
<div class="cat-info-cntry">Japan (U3):</div>
<div class="cat-info-content"><p>Häufig wohlhabendes Klientel, Mütter sind meist nicht berufstätig.<br />Einige  Yochiens arbeiten mit Grundschulen zusammen, dann finden zur Aufnahme des Kindes Eingangstests statt, wodurch besonders leistungsstarke Kinder bevorzugt werden, andere Yochiens nehmen alle Kinder auf </p></div>
<div class="cat-info-cntry">Japan (Kita):</div>
<div class="cat-info-content"><p>1 Nur für Familien, in denen beide Elternteile arbeiten      2 Es gibt private und staatliche Einrichtungen. Private Einrichtungen sind deutlich teurer als staatliche, so dass sich diese nur wohlhabenere Familien leisten können.  In den staatlichen Einrichtungen werden Kinder bevorzugt, deren Eltern für die Regierung arbeiten</p></div>
<div class="cat-info-cntry">Japan (Vorschule):</div>
<div class="cat-info-content"><p>Alle Kinder (unabhängig von Berufstätigkeit der Eltern)</p></div>
<div class="cat-info-cntry">Tansania (Vorschule):</div>
<div class="cat-info-content"><p>ja, wegen der Lage (Land) und der Unterschied der Qualität ist zu privaten Einrichtungen auch groß</p></div>
<div class="cat-info-cntry">Tansania (Kita):</div>
<div class="cat-info-content"><p>eher in der Stadt zu finden und für besser gestellte Familien (Kosten)</p></div>
<div class="cat-info-cntry">Finnland:</div>
<div class="cat-info-content"><p>k. A.; Rechtsanspruch auf Betreuungsplatz für alle Kinder unter 7 Jahren seit 1996</p></div>
</div>
<div style="display:none;" id="cat-content-kosten" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>Ungefährer Kostenüberblick:Long-day-care – Einrichtungen $70-$185 pro Tag, Family-day-care $7.50-$16.80 pro Stunde, abhängig von der Location und dem Service, In-home-care $20-$25 pro Stunde und Outside-of-School-Hours-Care $15-$30 pro Vormittag und $25-$45 für den Nachmittag</p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>Beiträge sozial gestaffelt und in Abhängigkeit von Betreuungsstunden pro Tag. Kosten pro Monat (Bsp. Reykjavik):<br />von 66,50€ (4h) bis 296,70€ (9,5h); <br />Alleinerziehende Eltern, beide Elternteile in Ausbildung, Eltern mit Behinderung, Angestellte des Kindergartens Reykjavik: von 36,55€ (4h) bis 167,53€ (9,5h),  </p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>Quebec: durchschnittlich $152 (100€)/Monat für 30h/Woche; Atlantic provinces: durchschnittlich $541 (358€)/Monat; Ontario: durchschnittl. $677 (448€)/Monat</p></div>
<div class="cat-info-cntry">Neuseeland:</div>
<div class="cat-info-content"><p>3 Jahre bis Schuleintritt: Anspruch auf 20 Stunden Kinderbetreuung pro Woche in einer staatlich geförderten, anerkannten ECE-Einrichtung</p></div>
<div class="cat-info-cntry">Japan (U3):</div>
<div class="cat-info-content"><p>Öffentliche Einrichtungen kosten ca. 70000 Yen (ca. 410€/Jahr). Private Einrichtungen kosten ca. 280000 Yen (ca. 1640€/Jahr)</p></div>
<div class="cat-info-cntry">Japan (Kita):</div>
<div class="cat-info-content"><p>Öffentlich keine Angabe, private Einrichtungen kosten ca. 300000 Yen (ca. 1760€/Jahr)</p></div>
<div class="cat-info-cntry">Finnland:</div>
<div class="cat-info-content"><p>Höchstgebühr in kommunalen Einrichtungen inkl. Essen: 354€ (Stand 2015), private Träger teurer; Unterstüzung für einkommensschwache Haushalte; Betreuungsgeld bei privater Betreuung</p></div>
</div>
<div style="display:none;" id="cat-content-kategorie-20" class="cat-content">
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>Kosten für die Einrichtungen (siehe soziale Zugänglichkeit)</p></div>
<div class="cat-info-cntry">Tansania:</div>
<div class="cat-info-content"><ul><br /><li>Einkommen ja bzg. Privater Träger (aber es gibt auch öffentliche Einrichtungen), auch öffentliche Einrichtungen müssen von Eltern finanziert werden.</li><br /><li>Eltern sehen Grund für Wichtigkeit der Bildung nicht</li><br /><li>Zu wenig Unterstützung von der Regierung </li><br /><li>Niedriger sozio-ökonomischer Status der Eltern</li><br /><li>Gender Diskriminierung</li><br /><li>Traditionelle Normen und kulturelle Werte</li><br /><li>Weiter Weg zur Schule</li><br /></ul></div>
</div>
<div style="display:none;" id="cat-content-zuschüsse" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>Child Care Benefit - Kinderbetreuungsgeld (CCB),<br />Child Care Rebate - Kinderbetreuungsrabatt (CCR). Familien, die die Anforderungen der Arbeits-, Ausbildungs- und Studienprüfung erfüllen, können Anspruch auf CCR für 50 Prozent aller Auslagen bis zu einer jährlichen Obergrenze haben.<br />Bevor die Kinderbetreuungsgelder der australischen Regierung berücksichtigt wurden, reichten die Kosten für Familien von 28,3% des wöchentlich verfügbaren Einkommens für Familien mit einem Bruttoeinkommen von $35.000 pro Jahr bis hin zu 9,1% für Familien mit einem Bruttoeinkommen von $215.000 pro Jahr. Nach den Kinderbetreuungsgeldern der australischen Regierung wurden die Selbstkosten deutlich gesenkt, und zwar auf 7,6% für Familien mit einem Bruttoeinkommen von $35.000 pro Jahr und 4,6% für Familien mit einem Bruttoeinkommen von $215.000 pro Jahr.</p></div>
<div class="cat-info-cntry">Frankreich:</div>
<div class="cat-info-content"><p>Zuschüsse für Familien: 14<br />Geburtenprämie von 855 Euro<br />Transferleistungen während der Elternzeit: <br />-&gt; ein Kind: 531 Euro (6 Monate lang), <br />-&gt; bei 2 Kindern: 531 Euro (36 Monate lang)<br />-&gt; ab 3. Kind 531 Euro (36 Monate lang oder 759 Euro für 12 Monate)<br />Kindergeld: bei 2 Kindern: 119 Euro, 3 Kinder: 272 Euro, jedes weitere Kind: 153 Euro<br />Steuereinsparungen: Der Steuersatz wird unter Berücksichtigung eines Familienquotienten berechnet, hängt von der Anzahl der unter 18-jährigen Kindern ab</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>alle Betreuungsformen in Kanada (außer Quebec) werden überwiegend von den Eltern finanziert, die meisten Provinzen/ Territorien bezahlen einen begrenzten Anteil für die Betreuung - „base funding“ oder „grants“ <br />Quebec, Manitoba und Prince Edward Island:</p><br /><ul><br /><li>Elternbeiträge für Betreuungsangebote sind niedriger </li><br /><li>Elternbeiträge/Kitabeiträge sind abhängig vom Alter des Kindes, der Betreuungsdauer und der öffentlichen Förderung der Provinz/Territorium</li><br /><li>alle Provinzen/Territorien außer Quebec subventionieren individuell berechtigte Familien mit niedrigem Einkommen – finanzieren einen Teil oder die gesamten Elternbeiträge </li><br /><li>Föderale finanzielle Unterstützung für bedürftige Familien mit niedrigerem Einkommen, indigene Familien, Alleinerziehende, Familien in unterversorgten Communities/Gemeinden, für Familien mit ungewöhnlichen Arbeitszeiten, Familien mit Kindern mit verschiedenen Fähigkeiten</li><br /></ul></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>1700 baht pro Kindergartenjahr (S. 99)</p></div>
<div class="cat-info-cntry">Finnland:</div>
<div class="cat-info-content"><p>pro Jahr 700h kostenfreie Vorschulbildung pro Kind</p></div>
</div>
<div style="display:none;" id="cat-content-kategorie-22" class="cat-content">
<div class="cat-info-cntry">Finnland:</div>
<div class="cat-info-content"><p>20h pro Woche Betreuungsplatz für jedes Kind</p></div>
</div>
<div style="display:none;" id="cat-content-prozess-und-strukturqualität" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>Die NQS (National Quality Standards) kombiniert Prozess- und Strukturkomponenten von Qualität, sieben Qualitätsbereiche, Landesweit haben 66 % der geprüften Einrichtungen die Vorschriften der NQS „erfüllt“ oder „übertroffen“ (2015)</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>ECERS-R (1998): 4,7 (4,0-5,6)<br />Aktuellere repräsentative Studien berichten selten deskriptive Statistiken</p></div>
</div>
<div style="display:none;" id="cat-content-interaktionsqualität" class="cat-content">
</div>
<div style="display:none;" id="cat-content-qualifizierung" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>LDC- und FDC-Einrichtungen haben Qualifikationsanforderungen. Für LDC-Dienste richten sich die Anforderungen nach der Anzahl der betreuten Kinder, wobei die Hälfte der Pädagog*innen über eine anerkannte ECEC-Qualifikation auf Diplomniveau verfügen oder aktiv daran arbeiten müssen.</p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>2/3 des Personals sollen richtig ausgebildete Pre-School-teacher sein, also einen Master in Pädagogik haben, in der Realität waren es 2017 nur 27%  Leitung und stellv. Leitung sollen Zusatzausbildung in Management oder Berufserfahrung als Pre-School Teacher  haben</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p><strong>Daycare</strong>: fast alle Zuständigkeiten fordern Hochschulausbildung (<em>Early Childhood Education, ECE</em>) zumindest für einen Teil der Fachkräfte in Einrichtungen<br /><strong>Family Care</strong>: man braucht nur eine begrenzte Ausbildung im ECE-Bereich<br /><strong>Preschool</strong>: gleiche Ausbildung wie Grundschullehrer, aber  keine besondere Ausbildung im frühkindlichen Bereich bei den meisten provinzialen Zuständigkeiten</p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>Die Fachkräfte in frühkindlichen Einrichtungen werden auch Lehrer genannt. Sie haben eine  5 Jährige Berufsausbildung, vorzugsweise in Frühkindlicher Entwicklung, und werden vom Techers Council of Thailand lizensiert (S. 101).</p></div>
<div class="cat-info-cntry">Japan (U3):</div>
<div class="cat-info-content"><p>drei Lizensstufen: Lizenz zweiter Klasse: zwei Jahre Studium an einer Universität oder Berufsschule (73%),   Lizenz erster Klasse: vierjähriges Bachelorstudium (23%), Lizenz "special level": Masterabschluss (1%)</p></div>
<div class="cat-info-cntry">Japan (Kita):</div>
<div class="cat-info-content"><p>Zwei Jahre Junior College- oder Berufsschulbesuch (muss durch MHWL zertifiziert sein)  oder vier Jahre universitärer Studiengang (selbe Profession, teilweise werden studierte Pädagogen besser bezahlt)</p></div>
<div class="cat-info-cntry">Japan (Vorschule):</div>
<div class="cat-info-content"><p>Wie Hoikuen</p></div>
<div class="cat-info-cntry">Tansania (Vorschule):</div>
<div class="cat-info-content"><p>nur 1426 (8.6%) von 16,597 Lehrern in der Vorschule sind professionell qualifiziert (Lehrer mit einer 2-jährigen Ausbildung Lehrer College) </p></div>
<div class="cat-info-cntry">Finnland:</div>
<div class="cat-info-content"><p>Kindergartenfachkraft - Bachelorabschluss, Spez. Frühpädagogik</p><br /><p>Sozialdienstfachkraft - Bachelorabschluss, Spez. in Sozialen Diensten</p><br /><p>Krankenschwester - berufsbildende Sekundarausbildung</p><br /><p>Kinderbetreuungsfachkraft - berufsbildende Sekundarausbildung, Chuch Training College</p><br /><p>Förderpädagogische Fachkraft - postgraduierten Studium in Förderpädagogik</p><br /><p>Förderprädagogische Assistenzkraft- keine Grundausbildung erforderlich </p></div>
</div>
<div style="display:none;" id="cat-content-professionen" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>50 % der Erzieher*innen (die bei der Berechnung des Personalschlüssels beachtet werden) brauchen anerkannte Ausbildung auf Diplomniveau oder müssen aktiv darauf hinarbeiten, alle anderen Erzieher*innen brauchen mindestens ein anerkanntes Zertifikat auf dem Niveau der Bildung und Pflege auf dem Niveau III</p></div>
<div class="cat-info-cntry">Frankreich (U3):</div>
<div class="cat-info-content"><p>Kinderkrankenschwester, FrüherzieherIn, Assistenzkinderkrankenschwester, Frühkindliche Ergänzungsfachkraft</p></div>
<div class="cat-info-cntry">Frankreich (Kita):</div>
<div class="cat-info-content"><p>(Vor-)Schullehrkraft (M.A.), ATSEM-Ergänzungskraft (Ausbildung)</p></div>
<div class="cat-info-cntry">Frankreich (Vorschule ):</div>
<div class="cat-info-content"><p>(Vorschul-)Lehrkraft (Hochschulabschluss), ATSEM-Eregänzungsfachkraft</p></div>
<div class="cat-info-cntry">Neuseeland:</div>
<div class="cat-info-content"><p>50%-Anforderung, z.B. 40 Kinder (5 Pädagog*innen), also 3 Pädagog*innen, die über einen Abschluss in der frühkindlichen Bildung verfügen</p></div>
<div class="cat-info-cntry">Japan (U3):</div>
<div class="cat-info-content"><p>siehe Qualifizierung, Erzieher werden trotz der verschiedenen Lizenzen meistens ähnlich bezahlt und haben auch ähnliche Aufgaben</p></div>
<div class="cat-info-cntry">Japan (Kita):</div>
<div class="cat-info-content"><p>siehe Qualifizierung</p></div>
<div class="cat-info-cntry">Japan (Vorschule):</div>
<div class="cat-info-content"><p>siehe Qualifizierung</p></div>
</div>
<div style="display:none;" id="cat-content-kategorie-27" class="cat-content">
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>Konzept und Jahresplanung erstellen, einmal jährlich Bericht über Kita vorlegen  regelmäßige interne Evaluatin   hauptsächlich Manager Funktion (nur sehr, sehr wenige, die hauptsächlich in Gruppen sind) </p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>Grundschullehrer sehen sich eher als Dienstleister, statt als Leitung und Führungskräfte (S. 93)</p></div>
<div class="cat-info-cntry">Japan (U3):</div>
<div class="cat-info-content"><p>Einrichtungen sind sehr groß, Leitungen sind meist komplett von pädagogischer Arbeit freigestellt, kümmern sich um Administration, Probleme mit Kindern, Eltern oder Behörden, Dokumentation</p></div>
<div class="cat-info-cntry">Japan (Kita):</div>
<div class="cat-info-content"><p>wie Yochien</p></div>
<div class="cat-info-cntry">Japan (Vorschule):</div>
<div class="cat-info-content"><p>Wie Yochien</p></div>
</div>
<div style="display:none;" id="cat-content-arbeitszeit" class="cat-content">
<div class="cat-info-cntry">Frankreich:</div>
<div class="cat-info-content"><p>24h/Woche in direktem Kontakt mit Kindern,108 Stunden pro Jahr für Tätigkeiten wie: individueller Unterricht (60 Stunden), Teamarbeit und Treffen mit Eltern (24 Stunden), pädagogische Spielarbeit (18 Stunden), Teilnahme an Treffen des Schulgremiums (6 Stunden) </p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>größtenteils Vollzeitstellen</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>ECE: 32,5 Stunden pro Woche<br />Kindergarten teacher: 32,8 Stunden pro Woche</p></div>
<div class="cat-info-cntry">Japan (U3):</div>
<div class="cat-info-content"><p>durchschnittlich 41</p></div>
<div class="cat-info-cntry">Japan (Kita):</div>
<div class="cat-info-content"><p>41</p></div>
<div class="cat-info-cntry">Japan (Vorschule):</div>
<div class="cat-info-content"><p>wahrscheinlich wie Hoikuen</p></div>
</div>
<div style="display:none;" id="cat-content-kindkontaktzeit" class="cat-content">
</div>
<div style="display:none;" id="cat-content-berufserfahrung" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>Kurs zum Erhalt des Certificate III in Early Childhood Education and Care beinhaltet mindestens 120 Stunden Praktikum, welches in einer registrierten Kindertagesstätte unter der Aufsicht eines qualifizierten Mitarbeiters durchgeführt werden muss</p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>Ja, aber keine Information wie viele Wochen o.ä.. Im Bachelor in der University of Icealnd z.B.  in ca. der Hälfte der Kurse field practice Einheiten, im Master weniger</p></div>
<div class="cat-info-cntry">Neuseeland:</div>
<div class="cat-info-content"><p>3 Jahre Studium + 2 Jahre staatliche Anerkennung („Registered Teacher Criteria“)</p></div>
<div class="cat-info-cntry">Japan (U3):</div>
<div class="cat-info-content"><p>1 Jahr Training in einer Einrichtung unter Beaufsichtigung eines erfahrenden Mentors</p></div>
</div>
<div style="display:none;" id="cat-content-gehalt" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>Child Care / Day Care Worker: 2100 – 2500 € <br />Director, Child Care: 3000 – 3800 € <br />Educator: 2200 – 2700 € <br />Primary School Teacher: 2650 – 3750 € </p></div>
<div class="cat-info-cntry">Frankreich:</div>
<div class="cat-info-content"><p>zwischen 1.540 und 2.560€ pro Monat, Leitungen zwischen 1.700 und 3.200€</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>ECE: 19,75$ (13,06€) pro Stunde = 2789$ (1844€) brutto pro Monat bei 32,5 Stunden pro Woche = 2196$-2284$ (1451€-1510€) netto je nach Provinz<br />Kindergarten teacher: 40,50$ (26,77€) pro Stunde = 5772$ (3816€) brutto pro Monat bei 32,8 Stunden pro Woche = 4047$-4330$ (2675€-2862€) netto pro Monat</p></div>
<div class="cat-info-cntry">Neuseeland:</div>
<div class="cat-info-content"><p>ca. 38000€</p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>Erzieher verdienen mit 15.000 baht pro Monat genauso viel wie Grundschullehrer (S.101).</p></div>
<div class="cat-info-cntry">Japan (U3):</div>
<div class="cat-info-content"><p>Durchschnittlich 289250 Yen (2262€) (Brutto in 2014)</p></div>
<div class="cat-info-cntry">Japan (Kita):</div>
<div class="cat-info-content"><p>Durchschnittlich 263916 Yen (2064€/Monat) (Brutto in 2014)</p></div>
<div class="cat-info-cntry">Japan (Vorschule):</div>
<div class="cat-info-content"><p>Wahrscheinlich wie Hoikuen</p></div>
</div>
<div style="display:none;" id="cat-content-sozioökonomischer-status" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>Erzieher*innen verdienen im Durchschnitt 17,50 € pro Stunde und Lehrer*innen im Durchschnitt 30 € pro Stunde. Sales Adviser verdienen im Schnitt 16 € pro Stunde, LKW – Fahrer im Durchschnitt auch 17,50 € pro Stunde, eine Krankenschwester 44,50 € und ein Anwalt ungefähr 30 € pro Stunde. </p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>Durchschnittlicher Stundenlohn 27,60$ (18,26€), also ECEs niedriger, Kindergarten teacher darüber</p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>Erzieher verdienen genauso viel wie Grundschullehrer. Das Gehalt von Lehrern ist jedoch, im Verhältnis zum BIP und im Vergleich zu anderen Ländern sehr gering (S.69).</p></div>
</div>
<div style="display:none;" id="cat-content-kategorie-33" class="cat-content">
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>der Großteil der Betreuung in Kanada wird von Ehrenamtlichen oder ehrenamtlichen Organisationen, Elterninitiativen durchgefüht &gt; 70% der Betreuungsangebote liegen im non-profit-Sektor</p></div>
<div class="cat-info-cntry">Japan (U3):</div>
<div class="cat-info-content"><p>Durchschnittsalter 32,4, 14,2 Jahre durchschnittliche Erfahrung</p></div>
<div class="cat-info-cntry">Japan (Kita):</div>
<div class="cat-info-content"><p>Durchschnittsalter 34,8, durchschnittliche Erfahrung 7,6 Jahre</p></div>
<div class="cat-info-cntry">Japan (Vorschule):</div>
<div class="cat-info-content"><p>Wahrscheinlich wie Hoikuen</p></div>
<div class="cat-info-cntry">Finnland:</div>
<div class="cat-info-content"><p>(2012)<br />Fachkräfte mit einschlägigem Hochschulabschluss: 30%</p><br /><p>Fachkräfte mit einschlägigem Fachschulabschluss: n/z</p><br /><p>Personal mit einschlägig berufsbildenden Sekundarabschluss: 70%</p><br /><p>Personal mit anderer, nicht einschlägiger Qualifikation: nur sehr weniger, meist als Ersatzpersonal</p><br /><p>Personal ohne formale Ausbildung: 6%</p><br /><p>Fachkräfte mit besonderer Spezialisierung: meist von extern</p><br /><p>Männliche Fachkräfte: 2,1% davon in Verwaltung: 6,3%</p></div>
</div>
<div style="display:none;" id="cat-content-betreuungsschlüssel" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>Geburt bis 24 Monate: 1:4<br />24 Monate – 36 Monate: 1:5<br />36 Monate – Vorschule: 1:11<br />älter als Vorschule: 1:15</p></div>
<div class="cat-info-cntry">Frankreich (U3):</div>
<div class="cat-info-content"><p>5:1 wenn Kinder noch nicht selbstständig gehen können<br />8:1 wenn Kinder selbstständig gehen können</p></div>
<div class="cat-info-cntry">Frankreich (Kita):</div>
<div class="cat-info-content"><p>8:1 <br /><a href="https://kindergartenpaedagogik.de/fachartikel/kinderbetreuung-in-anderen-laendern/913">https://kindergartenpaedagogik.de/fachartikel/kinderbetreuung-in-anderen-laendern/913</a>.<br />Wolf, K./Grgic, M. (2009): Kindertagesbetreuung im europäischen Vergleich. Die Chancen von EU-SILC und die aktuellen Grenzen. Deutsches Jugendinstitut e.V.<br />Abteilung Kinder und Kindertagesbetreuung: München.</p></div>
<div class="cat-info-cntry">Frankreich (Vorschule ):</div>
<div class="cat-info-content"><p>12,5:1</p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>6:1 (2012)</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>Daycare: 1:4 bis 1:5 für U3 (außer Québec: 1:7), 1:8 bis 1:9 für 3-6 J. (außer Saskatchewan &amp; Prince Edward Island: 1:10)<br />Preschool: durchschnittl. 1:12 (1:8 in Newfoundland/Yukon bis 1:20 in Québec)</p></div>
<div class="cat-info-cntry">Neuseeland:</div>
<div class="cat-info-content"><p>Beispiel: 10 Kinder unter 2 Jahre - 2 Erwachsene; 30 Kinder über 2 Jahre - 3 Erwachsene</p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>15 Kinder zu einer Fachkraft (S. 101).</p></div>
<div class="cat-info-cntry">Japan (U3):</div>
<div class="cat-info-content"><p>1 laut Vorschrift: 1:35, die meisten haben aber zwei oder mehr Fachkräfte pro Gruppe (vor allem bei den 3-Jährigen)  2 im Durchschnitt  1:12,9</p></div>
<div class="cat-info-cntry">Japan (Kita):</div>
<div class="cat-info-content"><p>0-1 Jahr: 1:3;                              1-3 Jahre: 1:6;                           3-4 Jahre: 1:20;                         4-5 Jahre 1:30;                           5-6 Jahre: 1:35          Schlüssel kann aber höher liegen, da die Regierung oftmals Anreize gibt, um noch zusätzliche Krankenschwestern einzustellen (diese sind meist bei den unter Einjährigen beschäftigt). Dann bekommen die Einrichtungen eine höhrere Finanzierung.</p></div>
<div class="cat-info-cntry">Tansania (Vorschule):</div>
<div class="cat-info-content"><p>1:25 max. in ländlichen Regionen meist viel mehr in privaten viel weniger </p></div>
<div class="cat-info-cntry">Finnland:</div>
<div class="cat-info-content"><p>1:4 / 1:8</p></div>
</div>
<div style="display:none;" id="cat-content-politischer-entscheidungsträger" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>Die Zuständigkeit der australischen Regierung besteht darin, Familien finanzielle Unterstützung zu gewähren. Staatliche und territoriale Regierungen sind zudem für die Qualität und Sicherheit der Kinderbetreuungseinrichtungen verantwortlich. Sie verwalten den Nationalen Qualitätsrahmen, die Genehmigung und Regulierung von Einrichtungen im Rahmen der Bildungs- und Betreuungsdienste Nationales Recht und Vorschriften.</p></div>
<div class="cat-info-cntry">Frankreich (U3):</div>
<div class="cat-info-content"><p>Gemeinsame Verantwortung des Ministeriums für Familien, Kindheit, Frauenrechte (Ministèredes familles, de l’enfanceet des droitsdes femmes) und den Kommunen, sowie dem Sozial- und Gesundheitsministerium (Ministèredes affairessocialeset de la santé)</p></div>
<div class="cat-info-cntry">Frankreich (Kita):</div>
<div class="cat-info-content"><p>Werden öffentlich, von Vereinigungen oder von Eltern betrieben</p></div>
<div class="cat-info-cntry">Frankreich (Vorschule ):</div>
<div class="cat-info-content"><p>Ministerium für nationale Bildung, Hochschulbildung und Forschung (Ministèrede l’éducationnationale, de l‘enseignementsupérieuret de la recherche) -&gt; Teil des Primarschulsystems</p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>Ministry of Education, Science and Culture</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>früher Zuständigkeit des social service ministry – heute: überwiegend Zuständigkeit der einzelnen Bildungsministerien der Provinzen/Territorien</p></div>
<div class="cat-info-cntry">Neuseeland:</div>
<div class="cat-info-content"><p>Ministry of Education</p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>Es gibt nationale, zentralistische, provinziale und lokale Entscheidungsträger(siehe Schaubild) (S. 50).</p></div>
<div class="cat-info-cntry">Japan (U3):</div>
<div class="cat-info-content"><p>Ministerium für Bildung, Kultur, Sport, Wissenschaft und Technologie</p></div>
<div class="cat-info-cntry">Japan (Kita):</div>
<div class="cat-info-content"><p>Ministerium für Gesundheit und Fürsorge</p></div>
<div class="cat-info-cntry">Japan (Vorschule):</div>
<div class="cat-info-content"><p>Ministerium für Bildung, Kultur, Sport, Wissenschaft und Technik &amp; Ministerium für Gesundheit und Fürsorge</p></div>
<div class="cat-info-cntry">Tansania (Vorschule):</div>
<div class="cat-info-content"><p>Regierung Ministerium für Bildung und Kultur , Betreuung und Bildung zwei unterschiedliche aministrative Institutionen </p></div>
<div class="cat-info-cntry">Finnland:</div>
<div class="cat-info-content"><p>Bildungsministerium &amp; Bildungsagentur</p></div>
</div>
<div style="display:none;" id="cat-content-finanzierung" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>Die australischen, staatlichen und territorialen Regierungen sind gemeinsam für die Finanzierung der ECEC verantwortlich. Laut dem Report von Government Services 2015 beliefen sich die gesamten Staatsausgaben 2013-14 auf schätzungsweise $7,7 Milliarden. Staatliche Fördermittel werden jedoch seit der Etablierung eines "Qualitätssicherungs- und Akkreditierungssystem" 1994 nur noch ausgezahlt, wenn die Einrichtung akkreditiert ist oder sich gerade dem Akkreditierungsprozess unterzieht </p></div>
<div class="cat-info-cntry">Frankreich (U3):</div>
<div class="cat-info-content"><p>Staat, in Zusammenarbeit mit Kommunen und Familienkassen (Caissesdes AllocationsFamiliales, CAF), gestaffelten Elternbeitrag</p></div>
<div class="cat-info-cntry">Frankreich (Kita):</div>
<div class="cat-info-content"><p>Privat-gewerbliche Einrichtungen</p></div>
<div class="cat-info-cntry">Frankreich (Vorschule ):</div>
<div class="cat-info-content"><p>Staat(sowohl zuständig für Finanzierung und Organisation von Bildungseinrichtungen, als auch für Fortbildung der Fachkräfte, den Inhalt der Curricula und Qualitätsüberprüfungen)</p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>meist zahlen Eltern 30% der Kosten, in einigen Kommunen letztes Kitajahr für einige Stunden pro Tag kostenlos,  Kommune entscheidet über Gebühr für Familien </p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>-jede Provinz/Territorium hat eigene Anforderungen, Reglementierungen, Finanzierungssystem</p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>Die Eltern zahlen die Kitakosten. Jedoch wird immer mehr bezuschusst. </p></div>
<div class="cat-info-cntry">Japan (U3):</div>
<div class="cat-info-content"><p>öffentlich: Steuerzahler; privat: Elternbeiträge und nationale und regionale Regierungen</p></div>
<div class="cat-info-cntry">Finnland:</div>
<div class="cat-info-content"><p>kommunale &amp; private Träger</p></div>
</div>
<div style="display:none;" id="cat-content-träger" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>In Australien werden die meisten Anbieter von der Australian Children's Education and Care Quality Authority nach dem National Quality Framework (NQR) reguliert und dann als Anbieter zugelassen. Es gibt etliche verschiedene Träger, die dann Einrichtungen verteilt in ganz Australien haben. Einige Anbieter von frühkindlichen Bildungs- und Betreuungsleistungen - wie z.B. häusliche, mobile und gelegentliche Betreuungsleistungen - fallen nicht unter den NQR. Diese Dienstleistungen werden durch den Staat nach verschiedenen Gesetzen geregelt.</p></div>
<div class="cat-info-cntry">Frankreich (U3):</div>
<div class="cat-info-content"><p>Öffentliche/private Trägerschaft</p></div>
<div class="cat-info-cntry">Frankreich (Kita):</div>
<div class="cat-info-content"><p>Öffentliche/private Trägerschaft</p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>Die meisten Kitas werden von Gemeinden/Kommunen unterhalten, einige auch privat.</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><ul><br /><li>in keiner der Provinzen/Territorien wird der Zugang zur Betreuung von Kindern als Anspruch oder Recht gesehen</li><br /><li>Kinderbetreuung wird behandelt wie Marktware – private, familiäre Verantwortung </li><br /><li>NGO’s, Akteure in der Community</li><br /><li>Kernbestandteil der ECEC</li><br /><li>Interessenverbände – ECEC professionals, Ehrenamtliche und Wissenschaftler – „Child Care Community“ - wichtige Anbieter von ECEC-Angeboten</li><br /></ul></div>
<div class="cat-info-cntry">Neuseeland:</div>
<div class="cat-info-content"><p>Education &amp; Care: private Unternehmen, Kindergarten: öffentlich durch die Kindergarten Association der jeweiligen Region , Playcentres: Eltern</p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>Es gibt private und öffentliche Einrichtungen (S. 412).</p></div>
<div class="cat-info-cntry">Tansania (Vorschule):</div>
<div class="cat-info-content"><p>Regierung (mithilfe von Spendern wie zb UNICEF), kirchliche Organisationen, Ujamaa Villages, 97 % in öffentlichen Einrichtungen</p></div>
<div class="cat-info-cntry">Finnland:</div>
<div class="cat-info-content"><p>kommunale &amp; private Träger</p></div>
</div>
<div style="display:none;" id="cat-content-bild-vom-kind" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>Das Early Years Learning Framework besagt, dass alle Kinder das Recht auf eine Bildung haben, die die Grundlage für den Rest ihres Lebens bildet, ihre Fähigkeiten maximiert und ihre familiären, kulturellen und anderen Identitäten und Sprachen respektiert. Die Konvention erkennt auch das Recht der Kinder an, in allen Angelegenheiten, die ihr Leben betreffen, zu spielen und aktiv daran teilzunehmen </p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>Leikskóli = Spielschule <br />Kinder sollen Möglichkeit haben, sich damit zu beschäftigen, was sie interessiert und ihre Stärken sind und ihrer Entwicklung enstpricht.  Spielen ist die wichtigste Art zu Lernen.  </p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>am Beispiel der Provinz Ontario:</p><br /><ul><br /><li>Kinder sind kompetent und verfügen über komplexes Denken</li><br /><li>Kinder sind neugierig und haben viel Potenzial</li><br /><li>kindliche Entwicklung sollte aus unterschiedlichen Perspektiven verstanden werden – nicht nur die „traditionellen“ Bereiche wie z.B. sozial-emotionale, körperliche, kognitive und sprachliche Entwicklung, sondern auch die kreative, ästhetische und spirituelle Entwicklung sollte Beachtung finden</li><br /></ul></div>
<div class="cat-info-cntry">Neuseeland:</div>
<div class="cat-info-content"><p>lernende, reflektierende, explorierende, kommunizierende Personen, </p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>Das Bild von Früher Bildung scheint recht verschult zu sein. Es wird von „preschool classes“ und „pre-primary students“ gesprochen (Pholphirul, 2017, S.411-412). Auf der einen Seite scheint der Leistungsdruck auf die Kinder extrem hoch zu sein (Techawongtham, 2015), andererseits hat Thailand mit die glücklichsten Schüler der Welt (PISA, 2012, S.21)</p></div>
<div class="cat-info-cntry">Japan:</div>
<div class="cat-info-content"><p>Guiding child care theory/"free childcare and education"-Ansatz (Veränderung des Blickwinkels auf Kindergärten 1989): Kinder machen das meiste aus ihren Fähigkeiten und können sich weiterentwickeln, wenn sie sich frei fühlen können. Kinder wachsen durch die Interaktionen mit den Menschen und Objekten in der Kindergartenumgebung (Education through Environment). Die Aufgabe der Lehrer ist es, die Kinder zu unterstützen. Indirekte Unterstützung: durch die Umgebung. Direkte Unterstützung: Dem Kind helfen. Eine gute/verständnisvolle/wohlwollende Beziehung zwischen Lehrer und Kind ist die Grundlage für eine gelingende Bildung.Beziehungen zwischen den Kindern beginnen mit Zwei- oder Dreier-Kontakten, später erweitern sie sich auf die ganze Gruppe. Rollen und Beziehungen werden erlernt durch das Spiel und das alltägliche Miteinander. Diese Philosophie sollte die Grundlage für die vorherrschenden pädagogischen Praktiken in den Kindergärten und Kindertagesstätten bilden (siehe unter Pädagogik).</p></div>
</div>
<div style="display:none;" id="cat-content-kategorie-39" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>Im nationalen „Early Years Learning Framework“, sind fünf Prinzipien aufgeführt, die zeitgenössische Theorien und Forschungsergebnisse zum Lernen von Kindern und zur frühkindlichen Pädagogik widerspiegeln</p></div>
<div class="cat-info-cntry">Frankreich (Vorschule ):</div>
<div class="cat-info-content"><p>Pädagogik (Praktiken): 15<br />Portfolios über die individuelle Entwicklung des Kindes<br />Bildungspläne für die Ecole maternelle (Horaires et programmes d'enseignement de l'école primaire, 2008) 9<br />Ziele Kinder: sich verständlich ausdrücken können, Beziehungen mit anderen Kindern und Erwachsenen pflegen, Üben von motorischen, sensorische, affektiven und individuellen Fähigkeiten<br />Ziele FK: Vorbereitung auf die Grundschule, individuelles Eingehen auf Lerngeschwindigkeiten, Ungleichheiten zwischen Kindern reduzieren (Sprache)<br />5 Lernbereiche<br />Sprache in Wort und Schrift<br />Handeln<br />Ausdruck und Verstehen durch künstlerische Aktivitäten<br />Lernen, die Gedanken zu strukturieren<br />Entdecken der Welt durch das Erforschen der unmittelbaren Umgebung</p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>Lernfelder:  literacy and communication, health and wellbeing, sustainability and science, creativity and culture</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>am Beispiel der Provinz Ontario:<br />4 Säulen der Pädagogik des Bildungsplans „How does Learning happen? – Ontarios Pedagogy for the Early Years“</p></div>
<div class="cat-info-cntry">Neuseeland:</div>
<div class="cat-info-content"><p>learning stories</p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>Es gibt buddhistische Sonntagsschulen, die neben buddhistischen Lehren und Werten auch weltliches Wisse vermitteln.</p></div>
<div class="cat-info-cntry">Japan (U3):</div>
<div class="cat-info-content"><p>1 Sehr unterschiedlich, freies Spiel ist wichtig, teilweise gibt es aber auch Yochiens, die Fachunterricht anbieten. Es kann vorkommen, dass alle 10 Minuten das Unterrichtsfach wechselt. 2 Leistungsförderung im Fokus. 3 Kindergärten und Kindertagesstätten können für sich selbst entscheiden, in welche pädagogische Richtung sie tendieren. Es lassen sich drei unterschiedliche Richtungen charakterisieren, die mehr oder weniger vorkommen: A) Fokus auf die Gruppe/Beziehungen innerhalb der Gruppe: Lehrer versuchen sich weitestgehend zurückzuhalten. Im Fokus steht das Lernen der wichtigsten Alltagsregeln und Gewohnheiten. Wechsel zwischen vom Lehrer instruierten Aktivitäten und Freiem Spiel. Während des Freispiels werden die Kinder dazu angeregt mit den anderen Kindern zu interagieren, alleine spielen soll vermieden werden. Aufbau einer warmen Beziehung zwischen Lehrer und Kind sehr wichtig. B) Instruiertes Lernen. Im Fokus steht das Lernen in der Gruppe, der Lehrer bringt den Kindern in Form von Unterricht etwas bei. Unterrichtsfächer sind: lesen Chinesische Schriftzeichen, Schreiben von Hiragana- Schriftzeichen, Zahlen und Ziffern, Volumen und Geometrie, Trainieren der Merkfähigkeit, Musikinstrumente spielen und malen. Disziplin und Einhalten der Regeln ist sehr wichtig, strikter Stundenplan, Kinder haben wenig Freiraum eigene Entscheidungen zu treffen. C) Kindzentrierter Ansatz: Freies Spiel im Fokus. Es gibt auch Gruppenaktivitäten, aber sehr wenig Instruktionen vom Lehrer.</p></div>
<div class="cat-info-cntry">Japan (Kita):</div>
<div class="cat-info-content"><p>siehe Yochien ab 3</p></div>
<div class="cat-info-cntry">Japan (Vorschule):</div>
<div class="cat-info-content"><p>Freies Spiel hat hohen Stellenwert, vereinzelt Unterrichtsstunden, siehe Yochien ab 3</p></div>
</div>
<div style="display:none;" id="cat-content-curriculum" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>Pädagogen nutzen den nationalen „Early Years Learning Framework“ (Belonging, Being and Becoming), um das Lernen und die Entwicklung von Kindern von der Geburt bis zum Alter von fünf Jahren zu begleiten </p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>The Icelandic National Curriculum Guide for Preschools</p></div>
<div class="cat-info-cntry">Kanada:</div>
<div class="cat-info-content"><p>Keine einheitliche Bildung auf Bundesebene – Verantwortung der Provinzen/Territorien (Beispiel Ontario s. Ländertext unten)</p></div>
<div class="cat-info-cntry">Neuseeland:</div>
<div class="cat-info-content"><p>nationales Curriculum: Te Whāriki (1996)</p></div>
<div class="cat-info-cntry">Japan (U3):</div>
<div class="cat-info-content"><p>1 Wird von jedem Kindergarten selbst entwickelt, um Umgebung und lokale Angebote der einzelnen Kindergärten zu berücksichtigen; 2 Ansprüche des Wird von jedem Kindergarten selbst entwickelt, um Umgebung und lokale Angebote der einzelnen Kindergärten zu berücksichtigen (MEXT 2008) -&gt; Ansprüche des Bildungsgesetztes müssen erfüllt werden, also in Kindergärten sollen Grundlagen für den weiteren Bildungsweg der Kinder gelegt werden<br />Fünf Ziele: Gesundheit, Beziehung, Umgebung, Sprache und Ausdruck<br />Gesundheit: unabhängiges, gesunders und sicheres Leben, Befriedigung des Bewegungs- und Aktivitätsdranges, Gefühl von Sicherheit und Selbstständigkeit (erreiches des Ziels durch freies Spiel, gemeinsames Essen und eine natürliche Umgebung)<br />Beziehungen: Entwicklung Selbstvertrauen, kommunikativ werden, gegenseitige Unterstützung, Betonung auf Gruppengedanken<br />Umgebung: Förderung der Interaktion mit Umgebung, sodass Kinder Neugierde und Interesse entwickeln<br />Sprache: Gefühle, Erfahrungen und Gedanken sollen verbalisiert werden, anderen zuhören, Interesse und Neugierde für Gesagte zeigen<br />Ausdruck: der Gefühle, Erfahrungen und Gedanken. Über Sprache hinausgehend zeichnerisch, musikalisch und in körperlichen Aufführungen (MEXT 2001)</p></div>
<div class="cat-info-cntry">Japan (Kita):</div>
<div class="cat-info-content"><p>National Guidelines for Care and Education at Day Nursery: Thematisiert werden Grundlagen der Kinderbetreuung, Gesundheit und der Schutz der Kinder sowie das Managementsystem der Einrichtung</p><br /><p>Schwerpunkte der Kinderbetreuung: <br />Assistenz der Kinder und Aufbau stabiler Beziehungen zwischen Kindern und nurses, emotionale Stabilität und Schutz von Seiten der nurses</p><br /><p>Schwerpunkt der Bildung ist Entwicklung der Kinder </p><br /><p>Bereiche: Gesundheit, Sprache, Ausdruck, zwischenmenschliche Beziehungen und Beziehung zur Umwelt</p><br /><p>Freies Spiel in einer für Kinder ansprechend gestalteten Umgebung hat sehr hohen Stellenwert: soll ihnen ermöglichen sich weiterzuentwickeln, zu lernen und die im Curriculum benannten Schwerpunkte zu erleben</p></div>
<div class="cat-info-cntry">Finnland:</div>
<div class="cat-info-content"><p>Das nationale Kerncurriculum für frühkindliche Bildung und Betreuung</p><br /><ol><br /><li>Die Welt der Sprache</li><br /><li>Künstlerischer Ausdruck</li><br /><li>Ich und meine Gemeinschaft</li><br /><li>Das Erforschen meiner Umgebung</li><br /><li>Aufwachsen und Entwicklung in Bewegung</li><br /></ol><br /><p>Das nationale Kerncurriculum für Vorschulbildung<br />Prinzipien, die die Individualität des Kindes betonen<br />Bedeutung aktiven Lernens<br />Gemeinschaftsgefühl<br />spielbasiertes und kindzentriertes Lernen<br />eine positive Sicht auf das Leben</p></div>
</div>
<div style="display:none;" id="cat-content-inklusion" class="cat-content">
<div class="cat-info-cntry">Australien:</div>
<div class="cat-info-content"><p>Es gibt ein Programm zur Unterstützung von Inklusion, welches Kinderbetreuungsdienste für Kinder mit zusätzlichen Bedürfnissen unterstützen soll, indem es maßgeschneiderte Inklusionsberatung und Unterstützung durch vertraglich gebundene Inklusionsagenturen sowie Mittel zur Beseitigung schwierigerer Inklusionsbarrieren bereitstellt</p></div>
<div class="cat-info-cntry">Frankreich (Vorschule ):</div>
<div class="cat-info-content"><p>Fast ausschließlich in Regeleinrichtungen, vereinzelt existieren Inklusionsgruppen<br />In diesen: Individuelle Förderung des Kindes <br />94% der Inklusionsgruppen sind in öffentlichen Einrichtungen<br />2015: 31.299 Kinder mit Inklusionsbedarf besuchten eine Regeleinrichtung, 6.914 eine ULIS-Inklusionsgruppe</p></div>
<div class="cat-info-cntry">Island:</div>
<div class="cat-info-content"><p>Kinder, die special assistance and training brauchen, soll das in Kita zur Verfügung gestellt werden, Zusammenarbeit mit weiterführender Schule wichtig; <br />Inklusion auch Teil der Ausbildung (Modul dazu in Uni) </p></div>
<div class="cat-info-cntry">Thailand:</div>
<div class="cat-info-content"><p>Jedes Kind mit Beeinträchtigung hat seit 1999 das Recht auf Inklusion inder Schule. Diese Inklusion scheint allerdings in  Frühkindlichen Einrichtungen noch nicht angekommen zu sein (S.1107).</p></div>
<div class="cat-info-cntry">Japan:</div>
<div class="cat-info-content"><p>2016 gab es im vorschulischen Bereich 1.476<br />Einrichtungen speziell für Kinder mit Förderbedarf.</p></div>
<div class="cat-info-cntry">Finnland:</div>
<div class="cat-info-content"><p>sowohl integrative als auch geosnderte Gruppen, Einrichtungen immer in der Nähe des Wohnortes vom Kind, Förderfachkraft immer mit in der Gruppe, gesetzlich geregelter Anspruch auf Förderung</p></div>
</div>

<div>
	<h2 class="more-content-country-heading" data-toggle-for="australien" id="more-content-australien-heading">
		<a name="australien"></a>
		Australien	</h2>
	<div class="more-content-country" id="more-content-australien"  data-section-name="australien">
		<div class="more-content-country-section" data-require-visibility-for="australien" style="word-break: break-word;" id="more-content-australien-allgemein" data-section-name="australien-allgemein"></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="australien-formen-frühkindlicher-bildung" id="more-content-australien-formen-frühkindlicher-bildung-heading"><a name="australien-formen-frühkindlicher-bildung"></a>Formen der frühkindlichen Bildung</h3>
		<div class="more-content-country-section" data-require-visibility-for="australien" style="word-break: break-word;" id="more-content-australien-formen-frühkindlicher-bildung" data-section-name="australien-formen-frühkindlicher-bildung"><p>In Australien gibt es verschiedene Formen der frühkindlichen Bildung. Zum einen gibt es, vergleichbar mit deutschen Kindergärten die Long Day Care (LDC) – Einrichtungen, die sich an Kinder im Alter von 0 bis 6 Jahren richtet und mindestens acht Stunden am Tag, für fünf Tage die Woche und 48 Wochen pro Jahr geöffnet hat. Zudem gibt es die Family Day Care (FDC), vergleichbar mit Tagesmüttern, eine flexible Form der Kinderbetreuung (Ganztags-, Teilzeit-, Freizeit-, Übernacht-, Vor-/Nacht- und Schulferienbetreuung) im privaten Zuhause von Betreuer*innen. Eine weitere Form ist die In-Home-Care (IHC) – Betreuung, eine flexible Form (Ganztags-, Teilzeit-, Freizeit-, Übernacht-, Vor-, Nacht- und Ferienbetreuung), in der Erzieher*innen ins Zuhause des Kindes kommen (Sheppard, 2015). Die Qualität wird von einer zugelassenen Stelle überwacht (durch australische Regierung finanziert). Diese Form ist auf Familien beschränkt, die keinen Zugang zu bestehenden Kinderbetreuungseinrichtungen haben und/oder ihre Umstände bedeuten, dass ein bestehender Kinderbetreuungsdienst ihre Bedürfnisse nicht erfüllen kann. Verschiedene Kriterium müssen hierfür erfüllt werden (Australian Home Child Care Association, o.J.). Die Occasional Care ist eine flexible Form der frühkindlichen Bildungseinrichtungen, die regelmäßig (wie LDC) oder bei Bedarf genutzt werden kann, zum Beispiel, wenn Eltern unregelmäßige oder unvorhersehbare Arbeitszeiten haben (Sheppard, 2015). Des Weiteren gibt es die Outside School Hours Care, welches Einrichtungen sind, vergleichbar mit dem Hort in Deutschland, für Kinder im Grundschulalter (6-12 Jahre) vor und nach der Schule (7.30-21.00 Uhr, 15.00-18.00 Uhr), während der Schulferien und an schülerfreien Tagen (Australische Regierung, 2017). Eine besondere Form sind mobile Kinderdienste (Mobiles), die sich an Familien in ländlichen und abgelegenen Gebieten richten. Mobiles kann eine Reihe von Dienstleistungen anbieten, darunter Kinderbetreuung und Vorschule sowie Aktivitäten für ältere Kinder, Spielgruppen und Spielotheken. Die Arten der angebotenen Dienstleistungen variieren je nach den Bedürfnissen der Gemeinschaft. Mit sechs Jahren werden Kinder in Australien eingeschult und es besteht Anwesenheitspflicht. Wenn Kinder mit 5 Jahren eingeschult werden, nehmen sie an einem Vorbereitungsjahr teil (Press &amp; Hayes, 2000, S. 9).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="australien-anzahl-einrichtungen" id="more-content-australien-anzahl-einrichtungen-heading"><a name="australien-anzahl-einrichtungen"></a>Anzahl frühkindlicher Bildungseinrichtungen</h3>
		<div class="more-content-country-section" data-require-visibility-for="australien" style="word-break: break-word;" id="more-content-australien-anzahl-einrichtungen" data-section-name="australien-anzahl-einrichtungen"><p>Insgesamt gab es im Dezemberquartal 2017 18.524 zugelassene Kinderbetreuungseinrichtungen in Australien was ein Plus von 3,4 % (244 Dienstleistungen) gegenüber dem Dezemberquartal 2016 aufweist. Es gab 10.341 Outside School Hours Care – Einrichtungen, die 55,8 % ausmachten und 7.349 Long Day Care – Einrichtungen, die 39,7 % aller Dienstleistungen ausmachten. Danach folgen die Family Day Care und In-Home Care – Einrichtungen mit 728 und die Occasional Care mit 106 Einrichtungen (Australische Regierung, 2017).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="australien-betreuungsquote" id="more-content-australien-betreuungsquote-heading"><a name="australien-betreuungsquote"></a>Betreuungsquote</h3>
		<div class="more-content-country-section" data-require-visibility-for="australien" style="word-break: break-word;" id="more-content-australien-betreuungsquote" data-section-name="australien-betreuungsquote"><p>Im Dezemberquartal 2017 nutzten 1.302.940 Kinder die in Australien zugelassene Kinderbetreuung, ein Plus von 1,7 2018 gegenüber dem Dezemberquartal 2016. Bei der Betrachtung von Kindern im Alter von 0 bis 12 Jahren besuchten 31,9 2018 aller Kinder in dieser Altersgruppe im Dezemberquartal 2017 eine genehmigte Kinderbetreuung (Australische Regierung, 2017). </p>
<p>Die Nutzungsmuster der formalen und informellen Pflege variierten je nach Alter. 222018 der Kinder unter 2 Jahren besuchten 2014 in der Regel eine formelle Kinderbetreuung und 322018 besuchten eine informelle Kinderbetreuung. Die höchste Gesamtzahl der Betreuungsteilnehmer war bei den 2- und 3-jährigen, von denen 542018 in der Regel eine formelle Kinderbetreuung und 362018 eine informelle Kinderbetreuung besuchten. Der Anteil der Kinder im Alter von 0 bis 4 Jahren, die formelle Eichrichtungen besuchen, stieg von 272018 im Jahr 1999 auf 372018 im Jahr 2014 an. Die informelle Betreuung hingegen nahm ab. Großeltern sind die häufigste Quelle der informellen Kinderbetreuung; 232018 der Kinder von 0 bis 4 Jahren wurden 2014 von ihren Großeltern betreut (AIHW, 2017).</p>
<p>Für Kinder im Alter von 0-6 Jahren war die wichtigste Quelle der formalen Kinderbetreuung im Jahr 2011 die LDC, wobei 45 2018 der Kinder im Alter von 2-3 Jahren auf diese Art von Dienstleistungen zurückgreifen. Für schulpflichtige Kinder war OSHC die Hauptquelle der formalen Betreuung, wobei 13 bis 17 2018 der Kinder im Alter von 5-9 Jahren vor und nach der Schule Zugang zur Pflege hatten (Sheppard, 2015).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="australien-betreuungsumfang" id="more-content-australien-betreuungsumfang-heading"><a name="australien-betreuungsumfang"></a>Betreuungsumfang pro Woche</h3>
		<div class="more-content-country-section" data-require-visibility-for="australien" style="word-break: break-word;" id="more-content-australien-betreuungsumfang" data-section-name="australien-betreuungsumfang"><p>Im Dezemberquartal 2017 betrug die durchschnittliche Aufenthaltsdauer eines Kindes in der genehmigten Kinderbetreuung für alle Arten (Long Day Care, Family Day Care und In-Home Care, Occasional Care, Outside School Hours Care) der Kinderbetreuung 24,6 Stunden pro Woche. Im Vergleich dazu haben Kinder, die Long Day Care in Anspruch nahmen, durchschnittlich 28,8 Stunden pro Woche besucht.  Im Dezemberquartal 2017 verbrachten 58,1 2018 der Kinder aus Long-Day-Care – Einrichtungen dort durchschnittlich 20-39 Stunden pro Woche (Australische Regierung, 2017).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="australien-soziale-zugänglichkeit" id="more-content-australien-soziale-zugänglichkeit-heading"><a name="australien-soziale-zugänglichkeit"></a>Soziale Zugänglichkeit zu Betreuungsplätzen</h3>
		<div class="more-content-country-section" data-require-visibility-for="australien" style="word-break: break-word;" id="more-content-australien-soziale-zugänglichkeit" data-section-name="australien-soziale-zugänglichkeit"><p>Unter Berücksichtigung der Literatur und der Konsultationen mit den Interessengruppen ist klar, dass nicht alle Kinder in der Lage sind, die frühkindlichen Bindungsangebote gleichermaßen zu nutzen. Es gibt eine Reihe von Faktoren, die den Zugang von Kindern und Familien zu diesen Diensten beeinträchtigen können. Grundsätzlich haben auch Familien mit einem niedrigen Status die Möglichkeit auf eine Betreuung, allerdings wird diese weniger genutzt (Australische Regierung, 2014).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="australien-kosten" id="more-content-australien-kosten-heading"><a name="australien-kosten"></a>Kosten eines Betreuungsplatzes / Zuschüsse für Familien</h3>
		<div class="more-content-country-section" data-require-visibility-for="australien" style="word-break: break-word;" id="more-content-australien-kosten" data-section-name="australien-kosten"><p>Das durchschnittliche stündliche Kinderbetreuungsgeld für alle Leistungsarten betrug im Dezemberquartal 2017 $9,00, ein Anstieg von 3,0 % gegenüber dem Dezemberquartal 2016. Die Gebühren variierten je nach Serviceart von $7,20 pro Stunde für die Betreuung außerhalb der Schulzeiten (Hort) bis hin zu $10,50 pro Stunde für die Occasional Care Services (Australische Regierung, 2017). Die Kinderbetreuungskosten in Australien variieren von Anbieter zu Anbieter und von Staat zu Staat und werden nicht von der Regierung reguliert. Die meisten Anbieter berechnen einen minimalen Tagessatz oder einen Stundensatz. Einige Servicegebühren können Verpflegung und Windeln beinhalten, während andere von den Eltern verlangen, dass sie alles zur Verfügung stellen (Elloitt, 2018). </p>
<p>Die Productivity Commission (PC) hat kürzlich berichtet, dass die Unterstützung von Kinderbetreuungsgebühren den größten Teil der australischen Staatsfinanzierung für die ECEC darstellt (etwa 872018 in den Jahren 2014-15). Es gibt drei Arten von Zahlungen, die Familien über das Department of Human Services beantragen können:</p>
<ul>
<li>
<p>das bedarfsgeprüfte Kinderbetreuungsgeld</p>
</li>
<li>
<p>der nicht-mittelgetestete Kinderbetreuungsrabatt und</p>
</li>
<li>
<p>Jobs, Education and Training Child Care Fee Assistance.</p>
</li>
</ul>
<p>Die Kinderbetreuungseinrichtungen melden die wöchentliche Anwesenheit jedes betreuten Kindes und diese Informationen werden zusammen mit Informationen über die Familienberechtigung zur Berechnung der Gebührenunterstützung verwendet.</p>
<p>Die Auslagen für Familien variieren je nach Art der Betreuung, der Anzahl der betreuten Kinder und dem Familieneinkommen - aber es wird berichtet, dass die australische Regierung für 95 2018 der betreuten Kinder mindestens 50 2018 der Gebühren subventioniert. Im Jahr 2014 lagen die durchschnittlichen wöchentlichen Kosten für 50 Stunden Pflege in einem von der CCB genehmigten Einrichtungen bei 385 $ für Long-Day-Care und 375 $ für Family-Day-Care (Sheppard, 2015).</p>
<p>Bevor die Kinderbetreuungsgelder der australischen Regierung berücksichtigt wurden, reichten die Kosten für Familien von 28,32018 des wöchentlich verfügbaren Einkommens für Familien mit einem Bruttoeinkommen von $35.000 pro Jahr bis hin zu 9,12018 für Familien mit einem Bruttoeinkommen von $215.000 pro Jahr. Nach den Kinderbetreuungsgeldern der australischen Regierung wurden die Selbstkosten deutlich gesenkt, und zwar auf 7,62018 für Familien mit einem Bruttoeinkommen von $35.000 pro Jahr und 4,62018 für Familien mit einem Bruttoeinkommen von $215.000 pro Jahr.</p>
<p>Die geschätzten Gesamtausgaben für das Kinderbetreuungsgeld und den Kinderbetreuungsrabatt während des Dezemberquartals 2017 betrug $1.827,2 Millionen (Australische Regierung, 2017).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="australien-qualitätsmanagement" id="more-content-australien-qualitätsmanagement-heading"><a name="australien-qualitätsmanagement"></a>Qualitätsmanagement</h3>
		<div class="more-content-country-section" data-require-visibility-for="australien" style="word-break: break-word;" id="more-content-australien-qualitätsmanagement" data-section-name="australien-qualitätsmanagement"><p>Die meisten Einrichtungen arbeiten nach dem National Quality Framework (NQR).</p>
<p>Im Juli 2009 billigte der Council of Australian Governments Investitionen in die Early Years - Eine nationale Entwicklungsstrategie für Kleinkinder ein. Die Strategie zielt darauf ab, dass "bis 2020 alle Kinder den besten Start ins Leben haben, um eine bessere Zukunft für sich selbst und die Nation zu schaffen". Um diese Vision zu verwirklichen, haben sich die Regierungen von Bund, Ländern und Territorien zu einer Reihe von miteinander verbundenen nationalen Partnerschaften und nationalen Initiativen verpflichtet. Die Nationale Partnerschaftsvereinbarung über die Nationale Qualitätsagenda für die ECEC (NQAECE) war die erste große Reformtranche. Sie hat ein integriertes und einheitliches nationales System für ECEC und Arbeitsschutz eingerichtet, das gemeinsam geregelt wird und die kontinuierliche Verbesserung der Qualität der Dienstleistungen - den NQF – fördert.</p>
<p>Die wichtigsten Merkmale des NQF gehören:</p>
<ul>
<li>
<p>verantwortlich für die Leitung der Umsetzung und Verwaltung des nationalen Systems</p>
</li>
<li>
<p>nationaler Maßstab für die Erbringung hochwertiger Dienstleistungen in sieben Bereichen</p>
</li>
<li>
<p>ein nationales Qualitätsbewertungssystem, das die sieben Qualitätsbereiche mit einer fünfstufigen Bewertungsskala kombiniert, um die Qualität der Versorgung in einzelnen Diensten in ganz Australien zu beschreiben (Sheppard, 2015).</p>
</li>
</ul></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="australien-prozess-und-strukturqualität" id="more-content-australien-prozess-und-strukturqualität-heading"><a name="australien-prozess-und-strukturqualität"></a>Prozess- und Strukturqualität (KES bzw. ECCERS)</h3>
		<div class="more-content-country-section" data-require-visibility-for="australien" style="word-break: break-word;" id="more-content-australien-prozess-und-strukturqualität" data-section-name="australien-prozess-und-strukturqualität"><p>Die NQS (National Quality Standards) kombiniert Prozess- und Strukturkomponenten von Qualität. Zu den Prozesskomponenten gehören das Bewertung- und Ratingsystem. Die Strukturkomponenten umfassen Themen wie das Verhältnis von Erzieher zu Kind und die Qualifikation der Erzieher. Die Regulierungsbehörden für Bewertungen und Ratings haben im August 2012 damit begonnen, Dienstleistungen im Hinblick auf die NQS einzuschätzen und zu bewerten. ACECQA (Australian Children’s Education &amp; Care Quality Authority) berichtet, dass zum 31. März 2015 562018 der Einrichtungen ein Qualitätsrating erhalten haben. Die Einrichtungen werden für jeden der sieben Qualitätsbereiche - zu denen auch zugehörige Normen und Elemente gehören - bewertet und erhalten eine Gesamtbewertung. Landesweit haben 66 2018 der geprüften Einrichtungen die Vorschriften der NQS „erfüllt“ oder „übertroffen“ und 33 Einrichtungen haben die höchste Bewertung mit „ausgezeichnet“ erhalten, die erst auf Antrag bei der ACECQA vergeben werden kann nachdem die Regulierungsbehörde den Dienst bewertet hat. Die Einrichtungen sind verpflichtet, ihre Ratings anzuzeigen, die ebenfalls in den nationalen Registern von ACECQA und auf der MyChild Website der australischen Regierung (einem Online-Informationsportal) veröffentlicht werden (Sheppard, 2015).</p>
<p>Zu den wichtigsten Aspekten des Nationalen Qualitätsrahmens gehören:</p>
<ul>
<li>
<p>spezifizierte Verhältnisse zwischen Erzieher*innen und Kind, sodass jedes Kind die individuelle Zeit und Aufmerksamkeit erhält, die es benötigt.</p>
</li>
<li>
<p>einen genehmigten Lernrahmen zur Unterstützung des Lernens und der Entwicklung jedes Kindes.</p>
</li>
<li>
<p>Qualifikationsanforderungen für Erzieher*innen, damit Erzieher*innen besser in der Lage sind, Aktivitäten zu leiten, die Kinder zu inspirieren und ihnen helfen, zu lernen und sich zu entwickeln.</p>
</li>
<li>
<p>ein Einschätzungs- und Bewertungssystem, damit die Eltern die Qualität des Angebots an Frühförderung und Kinderbetreuung kennen und fundierte Entscheidungen treffen können (Australische Regierung, 2018).</p>
</li>
</ul>
<p>Die sieben Qualitätsbereiche sind: (1) Bildungsprogramm und –praxis, (2) Gesundheit und Sicherheit von Kindern, (3) Physische Umwelt, (4) Personalvereinbarungen, (5) Beziehungen zu Kindern, (6) Kollaborative Partnerschaften mit Familien und Gemeinden, (7) Führung und Leitung (Australian Children’s Education &amp; Care Quality Authority, 2018).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="australien-qualifizierung" id="more-content-australien-qualifizierung-heading"><a name="australien-qualifizierung"></a>Qualifizierung (Ausbildung, Abschluss o.ä.)</h3>
		<div class="more-content-country-section" data-require-visibility-for="australien" style="word-break: break-word;" id="more-content-australien-qualifizierung" data-section-name="australien-qualifizierung"><p>Bezüglich des Personals haben LDC- und FDC-Einrichtungen Qualifikationsanforderungen. Für LDC-Dienste richten sich die Anforderungen nach der Anzahl der betreuten Kinder, wobei die Hälfte der Pädagog*innen über eine anerkannte ECEC-Qualifikation auf Diplomniveau verfügen oder aktiv daran arbeiten müssen. Alle anderen Pädagog*innen und FDC-Pädagog*innen müssen über eine anerkannte Zertifikat III Level ECEC-Qualifikation verfügen oder aktiv daran arbeiten. Lehrer im frühen Kindesalter sind verpflichtet, die LDCs für eine bestimmte Anzahl von Stunden pro Tag zu besuchen. Pädagogen können online überprüfen, wie ihre Qualifikationen im Sinne der NQS bewertet werden (Sheppard, 2015).</p>
<p>Der Nationale Qualitätsrahmen legt die Mindestqualifikationsanforderungen für Pädagog*innen fest, die in der Kindererziehung und -betreuung tätig sind. Für die Arbeit mit schulpflichtigen Kindern gibt es auch einige landes- und gebietsspezifische Qualifikationsanforderungen (z.B. in der außerschulischen Pflege). Einige Staaten und Territorien verlangen, dass Lehrer*innen im frühen Kindesalter eine Lehrerregistrierung oder Akkreditierung besitzen. Es ist auch wichtig zu beachten, dass einzelne Arbeitgeber im Rahmen ihrer Beschäftigungspolitik höhere Qualifikationsanforderungen (z.B. einen vierjährigen ECT-Abschluss) festlegen können (Australian Children’s Education &amp; Care Quality Authority, 2018).</p>
<p>Die Stellenbeschreibung für einen Early Childhood Educator besagt, dass sie Säuglinge und Kleinkinder in einer Vielzahl von Umgebungen betreuen, um ihren sozialen, emotionalen, körperlichen und pädagogischen Bedürfnissen gerecht zu werden. So gehört zu den Hauptaufgaben: Betreuung von Kindern und Beteiligung an altersgerechten Aktivitäten, Unterstützung bei der Erfassung von Informationen über die Entwicklung, das Verhalten und den Fortschritt von Kindern und der Kommunikation mit ihren Eltern, Betreuern und anderen Fachleuten, die am Leben des Kindes beteiligt sein können, sowie die Aufrechterhaltung einer sauberen, gesunden und erzieherischen Umgebung für Kinder zum Spielen und Lernen. Early Childhood Educators können auch als Childcare Workers bezeichnet werden und bilden zusammen mit Early Childhood Teachers einen wichtigen Teil eines Teams, das eine qualitativ hochwertige Betreuung der Kinder gewährleistet. Die Rolle der Erzieher*innen kann je nach Umfeld variieren, ist aber überwiegend in Kindertagesstätten, Gelegenheitskliniken, Kindergärten und Vorschulen tätig.</p>
<p>Um ein Early Childhood Educator in Australien zu werden, ist in der Regel eine Berufsausbildung erforderlich. Die Mindestqualifikation ist ein Zertifikat III in Early Childhood Education and Care (CHC30113). Des Weiteren wird eine polizeiliche Genehmigung, wie z.B. einen Working with Children Check benötigt, sowie ein Erste-Hilfe-Zertifikat (Seek, o.J.).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="australien-politischer-entscheidungsträger" id="more-content-australien-politischer-entscheidungsträger-heading"><a name="australien-politischer-entscheidungsträger"></a>Politischer Entscheidungsträger / Träger? Wer ist zuständig?</h3>
		<div class="more-content-country-section" data-require-visibility-for="australien" style="word-break: break-word;" id="more-content-australien-politischer-entscheidungsträger" data-section-name="australien-politischer-entscheidungsträger"><p>Die Zuständigkeit der australischen Regierung besteht darin, Familien finanzielle Unterstützung, hauptsächlich als Subventionen, nach dem Familienhilfegesetz zu gewähren. Staatliche und territoriale Regierungen sind zudem für die Qualität und Sicherheit der Kinderbetreuungseinrichtungen verantwortlich. Sie verwalten den Nationalen Qualitätsrahmen, die Genehmigung und Regulierung von Einrichtungen im Rahmen der Bildungs- und Betreuungsdienste Nationales Recht und Vorschriften. Eine Regulierungsbehörde (National Quality Framework) in jedem Staat und Territorium ist in erster Linie für die Genehmigung, Überwachung und Qualitätsbewertung von Kinderbetreuungseinrichtungen und -diensten in ihrer Gerichtsbarkeit verantwortlich. Sie übt diese Funktion im Rahmen eines nationalen Rechtsrahmens aus, der als nationaler Qualitätsrahmen bekannt ist und aus dem nationalen Gesetz und den nationalen Vorschriften besteht (Australische Regierung, 2018). </p>
<p>Um Kinderbetreuungsdienste anbieten zu kommen, für die Eltern dann Anspruch auf einen Kinderbetreuungsgeldzuschuss haben, muss ein Anbieter von einem Delegierten des Sekretärs des Ministeriums für Bildung und Ausbildung genehmigt werden.</p>
<p>Ein Kinderbetreuer kann nach nationalem Recht oder anderen staatlichen oder territorialen Kinderbetreuungsgesetzen arbeiten und Gebühren für ihre Dienstleistungen erheben. Allerdings kann der Kinderbetreuungszuschuss nicht gewährt werden für diese Dienstleistungen, ohne dass der Anbieter vom Ministerium für allgemeine und berufliche Bildung genehmigt wird. Ein Anbieter muss eine Reihe von gesetzlichen Verpflichtungen erfüllen, wenn er die Genehmigung des Anbieters beim Bildungsministerium beantragt (Australische Regierung, 2018).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="australien-curriculum" id="more-content-australien-curriculum-heading"><a name="australien-curriculum"></a>Curriculum</h3>
		<div class="more-content-country-section" data-require-visibility-for="australien" style="word-break: break-word;" id="more-content-australien-curriculum" data-section-name="australien-curriculum"><p>Im nationalen „Early Years Learning Framework“, sind fünf Prinzipien aufgeführt, die zeitgenössische Theorien und Forschungsergebnisse zum Lernen von Kindern und zur frühkindlichen Pädagogik widerspiegeln. Die Prinzipien untermauern die Praxis, die sich darauf konzentriert, allen Kindern zu helfen, Fortschritte in Bezug auf die Lernergebnisse zu erzielen: 1. Sichere, respektvolle und gegenseitige Beziehungen (Pädagogen, die auf die Gedanken und Gefühle der Kinder eingestellt sind, unterstützen die Entwicklung eines starken Wohlbefindens.), 2. Partnerschaften (Lernergebnisse werden am ehesten erreicht, wenn Erzieher*innen in der frühen Kindheit in Partnerschaft mit Familien arbeiten), 3. Hohe Erwartungen und Fairness (Frühkindliche Erzieher*innen, die sich für Gerechtigkeit einsetzen, glauben an die Fähigkeit aller Kinder, erfolgreich zu sein, unabhängig von unterschiedlichen Umständen und Fähigkeiten.), 4. Respekt vor der Vielfalt (Es gibt viele Möglichkeiten zu leben, zu sein und zu wissen.), 5. Kontinuierliche Lern- und Reflexionspraxis (Pädagog*innen suchen ständig nach Wegen, ihr Fachwissen zu erweitern und Lerngemeinschaften zu entwickeln.).</p>
<p>Die Prinzipien der frühkindlichen Pädagogik bilden die Grundlage für die Praxis. Die Erzieher*innen greifen auf ein reichhaltiges Repertoire an pädagogischen Praktiken zurück, um das Lernen der Kinder zu fördern: ganzheitliche Ansätze, auf Kinder eingehen, Planung und Umsetzung von spielerischem Lernen, absichtliches Unterrichten, Schaffung von physischen und sozialen Lernumgebungen, die sich positiv auf das Lernen von Kindern auswirken, Wertschätzung des kulturellen und sozialen Kontexts von Kindern und ihren Familien, Kontinuität der Erfahrungen zu gewährleisten und Kindern einen erfolgreichen Übergang zu ermöglichen, Bewertung und Überwachung des Lernens von Kindern, um das Angebot zu informieren und Kinder bei der Erreichung von Lernergebnissen zu unterstützen (Australische Regierung, 2019).</p>
<p>Dies gilt gleichzeitig als Curriculum und Pädagog*innen nutzen den nationalen „Early Years Learning Framework“, um das Lernen und die Entwicklung von Kindern von der Geburt bis zum Alter von fünf Jahren zu begleiten. Eine Reihe von frühkindlichen Bildungseinrichtungen, darunter Familientagesstätten, Kindertagesstätten, Vorschulen und integrierte Einrichtungen, nutzen den Rahmen, um spielerische Programme zu entwerfen und die Kinder zur Kommunikation, Entdeckung, Vorstellungskraft und Kreativität zu ermutigen. Dieser Ansatz des frühen Lernens zielt darauf ab, Ihrem Kind bei der Entwicklung folgender Fähigkeiten zu helfen:</p>
<ul>
<li>
<p>ein starkes Identitätsgefühl</p>
</li>
<li>
<p>einer Verbindungen mit ihrer Welt</p>
</li>
<li>
<p>ein hohes Wohlbefinden</p>
</li>
<li>
<p>Vertrauen und Beteiligung an ihrem Lernen und</p>
</li>
<li>
<p>effektive Kommunikationsfähigkeiten (SA.GOV.AU, 2018).</p>
</li>
</ul>
<p>Belonging, Being and Becoming - The Early Years Learning Framework (EYLF) beschreibt die Prinzipien, Praktiken und Ergebnisse, die das Lernen von Kleinkindern von der Geburt bis zum Alter von fünf Jahren sowie deren Übergang zur Schule unterstützen und verbessern. Der Rahmen ist eine Schlüsselkomponente des Nationalen Qualitätsrahmens für die frühkindliche Bildung und Betreuung. Der EYLF wurde von der australischen Regierung sowie den Staats- und Territoriumsverwaltungen mit Beiträgen aus dem Bereich der Kleinkinderbetreuung und den Akademikern der frühen Kindheit entwickelt. Es soll die Vision des Council of Australian Governments: "Alle Kinder haben den besten Start ins Leben, um eine bessere Zukunft für sich und die Nation zu schaffen." umgesetzt werden. Der Rahmen bildet die Grundlage dafür, dass Kinder in allen Bereichen der frühkindlichen Bildung und Betreuung qualitativ hochwertiges Lehren und Lernen erleben. Sie legt einen besonderen Schwerpunkt auf das spielerische Lernen und erkennt die Bedeutung von Kommunikation und Sprache (einschließlich früher Lese- und Rechenfertigkeiten) sowie der sozialen und emotionalen Entwicklung an. Das Framework wurde für Erzieher*innen in der frühen Kindheit entwickelt, die in Partnerschaft mit Familien arbeiten. In der frühen Kindheit bedeutet das Curriculum „alle Interaktionen, Erfahrungen, Aktivitäten, Routinen und Ereignisse, geplant und ungeplant, die in einer Umgebung stattfinden, die das Lernen und die Entwicklung von Kindern fördert" (angepasst aus Te Whariki) (Australische Regierung, 2019).</p>
<p>Es gibt ein Programm zur Unterstützung von Inklusion, welches Kinderbetreuungsdienste für Kinder mit zusätzlichen Bedürfnissen unterstützen soll, indem es maßgeschneiderte Inklusionsberatung und Unterstützung durch vertraglich gebundene Inklusionsagenturen sowie Mittel zur Beseitigung schwierigerer Inklusionsbarrieren bereitstellt. Sie finanziert Anbieter, um ihre Fähigkeit zu verbessern, Kinder mit zusätzlichen Bedürfnissen in die Mainstream-Dienste aufzunehmen, damit diese Kinder gemeinsam mit ihren Altersgenossen lernen und sich entwickeln können.</p>
<p>Das Programm zur Unterstützung der Inklusion wird im ganzen Land von sieben Integrationsagenturen durchgeführt (eine für jeden Staat und jedes Gebiet, mit Ausnahme von NSW und ACT, die von einer einzigen Integrationsagentur betreut werden). Die Agenturen arbeiten mit geeigneten Früherziehungs- und Betreuungseinrichtungen zusammen, um ihnen zu helfen, Kinder mit zusätzlichen Bedürfnissen einzubeziehen.</p>
<p>Anbieter, die glauben, dass sie zusätzliche Unterstützung benötigen, um Kinder mit zusätzlichen Bedürfnissen aufzunehmen, sollten sich an die Inklusion Agency für ihren Staat oder ihr Gebiet wenden (Australische Regierung, 2018).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="australien-literatur" id="more-content-australien-literatur-heading"><a name="australien-literatur"></a>Literatur</h3>
		<div class="more-content-country-section" data-require-visibility-for="australien" style="word-break: break-word;" id="more-content-australien-literatur" data-section-name="australien-literatur"><p>AIHW. (2017). <em>Australia's welfare 2017: in brief</em>. Abgerufen am 01.02.2019 von <a href="https://www.aihw.gov.au/reports/australias-welfare/australias-welfare-2017-in-brief/contents/children-youth-and-families">https://www.aihw.gov.au/reports/australias-welfare/australias-welfare-2017-in-brief/contents/children-youth-and-families</a></p>
<p>Australian Children’s Education &amp; Care Quality Authority. (2018). <em>National Quality Standard</em>. Abgerufen am 04.01.2019 von <a href="https://www.acecqa.gov.au/nqf/national-quality-standard">https://www.acecqa.gov.au/nqf/national-quality-standard</a></p>
<p>Australian Home Child Care Association, o.J. <em>In Home Care</em>. Abgerufen am 01.12.2018 von <a href="http://australianhomechildcare.com.au/in-home-care/">http://australianhomechildcare.com.au/in-home-care/</a></p>
<p>Australische Regierung. (2014). <em>Access to early childhood education in Australia</em>. Abgerufen am 04.01.2019 von <a href="https://aifs.gov.au/publications/access-early-childhood-education-australia/4-understanding-access-early-childhood">https://aifs.gov.au/publications/access-early-childhood-education-australia/4-understanding-access-early-childhood</a></p>
<p>Australische Regierung. (2017). <em>Early Childhood and Child Care in Summary</em>. Abgerufen am: 01.12.2018 von <a href="https://www.education.gov.au/early-childhood-and-child-care-summary-reports">https://www.education.gov.au/early-childhood-and-child-care-summary-reports</a></p>
<p>Australische Regierung. (2018). <em>Child Care Provider Handbook – Regarding Australian Government child care payments and funding</em>. Abgerufen am 01.12.2018 von <a href="https://www.education.gov.au/child-care-provider-handbook-0">https://www.education.gov.au/child-care-provider-handbook-0</a></p>
<p>Australische Regierung. (2019). <em>Belonging, Being &amp; Becoming - The Early Years Learning Framework for Australia</em>. Abgerufen am 15.03.2019 von: <a href="https://docs.education.gov.au/node/2632">https://docs.education.gov.au/node/2632</a></p>
<p>Elloitt, R. (2018). <em>How much does child care cost?</em> Abgerufen am 04.02.2019 von</p>
<p><a href="https://www.careforkids.com.au/child-care-articles/article/77/how-much-does-child-care-cost">https://www.careforkids.com.au/child-care-articles/article/77/how-much-does-child-care-cost</a></p>
<p>Press, F., Hayes, A. (2000). <em>OECD Thematic Review of Early Childhood Education and Care Policy</em>. Abgerufen am 01.12.2018 von <a href="https://www.researchgate.net/profile/Alan_Hayes6/publication/237341947_OECD_Thematic_Review_of_Early_Childhood_Education_and_Care_Policy_in_Ireland/links/58f6ae65aca2723d16a98b6d/OECD-Thematic-Review-of-Early-Childhood-Education-and-Care-Policy-in-Ireland.pdf">https://www.researchgate.net/profile/Alan_Hayes6/publication/237341947_OECD_Thematic_Review_of_Early_Childhood_Education_and_Care_Policy_in_Ireland/links/58f6ae65aca2723d16a98b6d/OECD-Thematic-Review-of-Early-Childhood-Education-and-Care-Policy-in-Ireland.pdf</a>.</p>
<p>SA.GOV.AU. (2018). <em>Early childhood, education and care. Understanding the curriculum in the early years</em>. Abgerufen am 04.01.2019 von <a href="https://www.sa.gov.au/topics/education-and-learning/early-childhood-education-and-care/understanding-the-curriculum">https://www.sa.gov.au/topics/education-and-learning/early-childhood-education-and-care/understanding-the-curriculum</a></p>
<p>Sheppard, M. (2015). <em>Child care in Australia: a quick guide</em>. Abgerufen am 01.12.2018 von <a href="https://www.aph.gov.au/About_Parliament/Parliamentary_Departments/Parliamentary_Library/pubs/rp/rp1415/Quick_Guides/ChildCare">https://www.aph.gov.au/About_Parliament/Parliamentary_Departments/Parliamentary_Library/pubs/rp/rp1415/Quick_Guides/ChildCare</a></p>
<p>Seek. (o.J.). <em>Early Childhood Educator</em>. Abgerufen am 15.03.2019 von <a href="https://www.seek.com.au/career-guide/role/early-childhood-educator">https://www.seek.com.au/career-guide/role/early-childhood-educator</a></p></div>
	</div>
<div>
	<h2 class="more-content-country-heading" data-toggle-for="frankreich" id="more-content-frankreich-heading">
		<a name="frankreich"></a>
		Frankreich	</h2>
	<div class="more-content-country" id="more-content-frankreich"  data-section-name="frankreich">
		<div class="more-content-country-section" data-require-visibility-for="frankreich" style="word-break: break-word;" id="more-content-frankreich-allgemein" data-section-name="frankreich-allgemein"></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="frankreich-formen-frühkindlicher-bildung" id="more-content-frankreich-formen-frühkindlicher-bildung-heading"><a name="frankreich-formen-frühkindlicher-bildung"></a>Formen der frühkindlichen Bildung</h3>
		<div class="more-content-country-section" data-require-visibility-for="frankreich" style="word-break: break-word;" id="more-content-frankreich-formen-frühkindlicher-bildung" data-section-name="frankreich-formen-frühkindlicher-bildung"><p>Das frühkindliche Bildungs- und Betreuungssystem Frankreichs unterteilt sich hauptsächlich in drei Betreuungsformen: Krippe (crèche), Kindergarten (jardin d’enfants) und Vorschule (école maternelle).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="frankreich-eintrittsalter" id="more-content-frankreich-eintrittsalter-heading"><a name="frankreich-eintrittsalter"></a>Eintrittsalter Betreuung / Betreuungsumfang pro Woche / Einrichtungsgröße / Wie verbindlich ist der Besuch dieser Einrichtungen?</h3>
		<div class="more-content-country-section" data-require-visibility-for="frankreich" style="word-break: break-word;" id="more-content-frankreich-eintrittsalter" data-section-name="frankreich-eintrittsalter"><p><strong><em>Crèche.</em></strong> Hierzu zählen so genannte Kinderkrippen (crèches), welche Kinder im Alter von 2 Monaten bis zum 3. Lebensjahr aufnehmen. Die crèche bietet Platz für maximal 60 Kinder und ist in der Regel von 8.00-19.00 Uhr täglich geöffnet. Der Besuch einer Krippe ist nicht verbindlich (Schreyer/Oberhuemer 2017).</p>
<p><strong><em>Jardin d’enfants.</em></strong> Die zweite mögliche Betreuungsform in Frankreich stellen reguläre Kindergärten (jardins d'enfants) dar, in denen Kinder im Alter von 2 bis 6 Jahren aufgenommen werden können. Diese verfügen meist über bis zu 80 Betreuungsplätze. Ein Besuch ist auch hier nicht verpflichtend (Schreyer/Oberhuemer 2017). Im Vergleich zu den Vorschulen (écoles maternelles), die in Frankreich die am weitesten verbreitete Form der Betreuung im Alter von 2 bis 6 Jahren darstellen, haben diese jedoch einen zahlenmäßig geringeren Anteil (Fix 2003).</p>
<p><strong><em>École maternelle.</em></strong> Als die in Frankreich wohl verbreiteteste Betreuungsform ist die Vorschule (école maternelle) bekannt. Diese nimmt Kinder bereits ab einem Alter von 2 Jahren auf und normalerweise werden sie in dieser bis zum Alter von 6 Jahren betreut. Die Vorschule unterteilt sich in drei Gruppen, 2 bis 3-jährige Kinder besuchen die so genannte Eingangsgruppe, 4-jährige Kinder werden in der Mittelgruppe betreut bzw. unterrichtet und 5 bis 6-jährige Kinder gehen in die Abschlussgruppe (Schreyer/Oberhuemer 2017). Aktuell besteht für die Vorschule noch keine Besuchspflicht, diese wird jedoch aktuell in Frankreich verstärkt diskutiert (z.B. Textor 2018). Die Kinder werden täglich von 8.30 Uhr bis 16.30 Uhr betreut, mit Ausnahme von Mittwoch, an diesem erfolgt eine Halbtagsbetreuung (Schreyer/Oberhuemer 2017). </p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="frankreich-qualifizierung" id="more-content-frankreich-qualifizierung-heading"><a name="frankreich-qualifizierung"></a>Qualifizierung (Ausbildung, Abschluss o.ä.)</h3>
		<div class="more-content-country-section" data-require-visibility-for="frankreich" style="word-break: break-word;" id="more-content-frankreich-qualifizierung" data-section-name="frankreich-qualifizierung"><p>Um in der Creché arbeiten zu können ist ein B.A. Abschluss als Früherzieher*in notwendig. Außerdem werden hier Kinderkrankenschwestern, Assistenz-Kinderkrankenschwestern und Frühkindliche Ergänzungskräfte eingestellt (Rayna 2017). </p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="frankreich-politischer-entscheidungsträger" id="more-content-frankreich-politischer-entscheidungsträger-heading"><a name="frankreich-politischer-entscheidungsträger"></a>Politischer Entscheidungsträger / Qualitätsmanagement</h3>
		<div class="more-content-country-section" data-require-visibility-for="frankreich" style="word-break: break-word;" id="more-content-frankreich-politischer-entscheidungsträger" data-section-name="frankreich-politischer-entscheidungsträger"><p><strong><em>Crèche.</em></strong> Für das Qualitätsmanagement auf politischer Ebene ist das Sozialministerium in Frankreich zuständig, welches hauptsächlich kontrolliert, ob die in der crèche arbeitenden Fachkräfte hinreichend qualifiziert sind und wie sich die Arbeitsbedingungen in der Praxis gestalten.</p>
<p><strong><em>École maternelle.</em></strong> Die Verantwortlichkeit für die Vorschule auf politischer Ebene liegt beim Ministerium für nationale Bildung, Hochschulbildung und Forschung und ist damit ein Teil des Primarschulsystems in Frankreich (Schreyer/Oberhuemer 2017). Neben der Überprüfung der Räumlichkeiten und deren Ausstattung und der Gesundheits-, Hygiene- und Sicherheitsbestimmungen ist dieses in besonderem Maße für die Kontrolle der Einhaltung des Curriculums und der Entwicklungsprozesse der Kinder verantwortlich. Diese werden mittels standardisierter Fragebögen und Checklisten erfasst. Die Vorschule ist als Bestandteil des Primarschulsystems verpflichtet anhand von einheitlichen Standards das Curriculums und den Entwicklungsstandes der Kinder zu überprüfen (Schreyer/Oberhuemer 2017).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="frankreich-soziale-zugänglichkeit" id="more-content-frankreich-soziale-zugänglichkeit-heading"><a name="frankreich-soziale-zugänglichkeit"></a>Soziale Zugänglichkeit zu Betreuungsplätzen</h3>
		<div class="more-content-country-section" data-require-visibility-for="frankreich" style="word-break: break-word;" id="more-content-frankreich-soziale-zugänglichkeit" data-section-name="frankreich-soziale-zugänglichkeit"><p>In Frankreich existiert kein genereller Rechtsanspruch auf einen Betreuungsplatz im U3-Bereich. Dieser besteht nur auf einen staatlich subventionierten Platz in der Ecolé maternelle (Fix 2003).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="frankreich-kosten" id="more-content-frankreich-kosten-heading"><a name="frankreich-kosten"></a>Kosten eines Betreuungsplatzes</h3>
		<div class="more-content-country-section" data-require-visibility-for="frankreich" style="word-break: break-word;" id="more-content-frankreich-kosten" data-section-name="frankreich-kosten"><p>Der Besuch dieser ist exklusive Verpflegung kostenfrei (Wolf/Grgic 2009). </p>
<p>Ein Kitaplatz im U3-Bereich kostet monatlich ca. 153 Euro (Gaugel 2017), der exakte Betrag orientiert sich jedoch auch am Einkommen der Eltern. </p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="frankreich-�how-are-children-seen-in-your-society-wie-werden-kinder-in-deiner-gesellschaft-gesehen-�" id="more-content-frankreich-�how-are-children-seen-in-your-society-wie-werden-kinder-in-deiner-gesellschaft-gesehen-�-heading"><a name="frankreich-�how-are-children-seen-in-your-society-wie-werden-kinder-in-deiner-gesellschaft-gesehen-�"></a>“How are children seen in your society? Wie werden Kinder in deiner Gesellschaft gesehen?“</h3>
		<div class="more-content-country-section" data-require-visibility-for="frankreich" style="word-break: break-word;" id="more-content-frankreich-�how-are-children-seen-in-your-society-wie-werden-kinder-in-deiner-gesellschaft-gesehen-�" data-section-name="frankreich-�how-are-children-seen-in-your-society-wie-werden-kinder-in-deiner-gesellschaft-gesehen-�"><p><em>„I think that, generally, children are seen in a positive way. I think that they are more important than ever: many people invest in their children's education, they are given gifts ... But I think that it depends from one family to another. There is a big market upon children's toys, and products for children of all ages. They are seen as the future of society. But what I find interesting is that the Ministry of Education is not really implementing policies about primary school (middle and high school actually): so I would say that there is one group of teachers and parents that think that improving primary education is important, and the rest of population mainly think that children should grow as every child before them ...“</em></p>
<p>Die <em>école maternelle</em> betreffend:</p>
<p><em>„It's very different in France from Germany! Maternelle is something very mainstream ! In fact I'm not sure that it is compulsory but what I am sure of is that children that don't go to maternelle are very very rare. There is even parents that put their children to maternelle before they turn 3. Maternelle is seen as something very normal, and in continuity with primary school. I think this is also due to the fact that having a place in a kindergarten is very difficult (and I'm not sure they take children older than 3 there, and even if it would be possible, I'm almost sure that they would not be prioritised so they wouldn't have places), so keeping children at home would mean finding another person to take care of children during the day or leave its job but it absolutely not mainstream (because one salary is not always enough, because parents want to work, and also because finding another job after quitting the job market for 3 or 4 years is difficult)“</em></p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="frankreich-literatur" id="more-content-frankreich-literatur-heading"><a name="frankreich-literatur"></a>Literatur</h3>
		<div class="more-content-country-section" data-require-visibility-for="frankreich" style="word-break: break-word;" id="more-content-frankreich-literatur" data-section-name="frankreich-literatur"><p>Fix, B. (2003): <em>Kindertagesbetreuung in Frankreich, Finnland und Schweden</em>. URL: </p>
<p><a href="https://kindergartenpaedagogik.de/fachartikel/kinderbetreuung-in-anderen-laendern/913">https://kindergartenpaedagogik.de/fachartikel/kinderbetreuung-in-anderen-laendern/913</a>.</p>
<p>Gaugel, J. (2017): <em>Recht auf einen Betreuungsplatz: Gleicher Zugang für alle? Norwegen, Deutschland und Frankreich im Vergleich</em>. Deutsches Jugendinstitut e.V. : München.</p>
<p>Rayna, S. 2017. „Frühpädagogisches Personal – Länderbericht Frankreich“. In <em>Personalprofile in Systemen der frühkindlichen Bildung, Erziehung und Betreuung in Europa</em>, herausgegeben von I. Schreyer und P. Oberhuemer. www.seepro.eu/Deutsch/Laenderberichte.htm </p>
<p>Schreyer, I./Oberhuemer, P. (2017): „Frankreich – Kontextuelle Schlüsseldaten.“ In <em>Personal- profile in Systemen der frühkindlichen Bildung, Erziehung und Betreuung in Europa</em>. URL: www.seepro.eu/Deutsch/Laenderberichte.htm.</p>
<p>Textor, M. (2018): <em>Frankreich will die Schulpflicht für Kinder ab drei Jahren einführen</em>. URL: <a href="https://www.erzieherin.de/frankreich-will-die-schulpflicht-fuer-kinder-ab-drei-jahren-einfuehren.html">https://www.erzieherin.de/frankreich-will-die-schulpflicht-fuer-kinder-ab-drei-jahren-einfuehren.html</a></p>
<p>Wolf, K./Grgic, M. (2009): <em>Kindertagesbetreuung im europäischen Vergleich. Die Chancen von EU-SILC und die aktuellen Grenzen</em>. Deutsches Jugendinstitut e.V. Abteilung Kinder und Kindertagesbetreuung: München.</p></div>
	</div>
<div>
	<h2 class="more-content-country-heading" data-toggle-for="island" id="more-content-island-heading">
		<a name="island"></a>
		Island	</h2>
	<div class="more-content-country" id="more-content-island"  data-section-name="island">
		<div class="more-content-country-section" data-require-visibility-for="island" style="word-break: break-word;" id="more-content-island-allgemein" data-section-name="island-allgemein"></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="island-eintrittsalter" id="more-content-island-eintrittsalter-heading"><a name="island-eintrittsalter"></a>Eintrittsalter Betreuung</h3>
		<div class="more-content-country-section" data-require-visibility-for="island" style="word-break: break-word;" id="more-content-island-eintrittsalter" data-section-name="island-eintrittsalter"><p>In Island ist es üblich ab eineinhalb bis zwei Jahren in den Kindergarten zu gehen. Dies stellt eine Schwierigkeit dar, da die Eltern nur insgesamt neun Monate Elternzeit haben (drei Monate jeweils, die nicht übertragbar sind und drei weitere Monate, die frei aufgeteilt werden können) (Registers Iceland, n.d.b). Es gibt allerdings die Möglichkeit, die Kinder vorher von Day-Parents betreuen zu lassen (Euraxess Iceland, n.d.).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="island-betreuungsumfang" id="more-content-island-betreuungsumfang-heading"><a name="island-betreuungsumfang"></a>Betreuungsumfang pro Woche</h3>
		<div class="more-content-country-section" data-require-visibility-for="island" style="word-break: break-word;" id="more-content-island-betreuungsumfang" data-section-name="island-betreuungsumfang"><p>Ab zwei Jahren gehen nahezu alle Kinder in die Kita und dies auch meist acht bis neun Stunden am Tag (Statistics Iceland, n.d.a).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="island-soziale-zugänglichkeit" id="more-content-island-soziale-zugänglichkeit-heading"><a name="island-soziale-zugänglichkeit"></a>Soziale Zugänglichkeit zu Betreuungsplätzen</h3>
		<div class="more-content-country-section" data-require-visibility-for="island" style="word-break: break-word;" id="more-content-island-soziale-zugänglichkeit" data-section-name="island-soziale-zugänglichkeit"><p>Unter bestimmten Bedingungen werden Kinder bevorzugt aufgenommen oder werden auf Wartelisten nach oben geschrieben. Diese Bedingungen sind z.B. in Reykjavik folgende: Kinder, die bereits vier bis fünf Jahre alt sind, Kinder mit schweren Krankheiten, Kinder, die unter schwierigen Bedingungen aufwachsen, Kinder deren Eltern unter 18 Jahre alt sind, Alleinerziehende mit drei unter 9-jährigen Kindern und Drillinge (Reykjavik, n.d.a). </p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="island-kosten" id="more-content-island-kosten-heading"><a name="island-kosten"></a>Kosten eines Betreuungsplatzes</h3>
		<div class="more-content-country-section" data-require-visibility-for="island" style="word-break: break-word;" id="more-content-island-kosten" data-section-name="island-kosten"><p>Auch die Kosten sind sozial gestaffelt. Hier werden in Reykjavik beispielsweise Alleinerziehende, Familien bei denen beide Elternteile in Ausbildung sind, Eltern mit Behinderungen und Angestellte des Kindergarten Reykjaviks mit niedrigeren Kosten beansprucht. Insgesamt ist dies auch von der Anzahl der Stunden, die die Kinder betreut werden, abhängig (Reykjavik, n.d.b). Genaue Kriterien legt jede Kommune für ihre Kitas fest (The Preschool Act, No.90, 2008).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="island-qualifizierung" id="more-content-island-qualifizierung-heading"><a name="island-qualifizierung"></a>Qualifizierung (Ausbildung, Abschluss o.ä.)</h3>
		<div class="more-content-country-section" data-require-visibility-for="island" style="word-break: break-word;" id="more-content-island-qualifizierung" data-section-name="island-qualifizierung"><p>Zwei Drittel des Personals in den Kindergärten sollen ausgebildete Pre-School Teacher sein. Dies meint, dass das Personal einen Master in Pädagogik der frühen Kindheit haben soll (Act on the education und recruitment of teachers and administrators of preschools, compulsory schools and upper secondary schools, No. 87, 2008). Genauer muss das Personal mindestens 120 ECTS in Pädagogik und Lehre absolviert haben sowie mindestens 90 ECTS in einem Lernbereich des Kindergartens (Menntamálastofnun, 2016). Diese sind zum Beispiel Bewegung, Sprache, Kunst, Musik, Natur und Umwelt und Kultur und Gesellschaft (Einarsdottir, J., 2011). In der Praxis sieht es allerdings anders aus. Im Jahr 2017 waren nur knapp ein Drittel des Personals nach isländischen Anforderungen ausgebildete Pre-School Teacher (Statistics Iceland, n.d.b). Gibt es nicht genug Bewerbungen von Personen mit Masterabschluss werden jene mit Bachelor-Abschluss ungelernten Bewerbern vorgezogen (Act on the education und recruitment of teachers and administrators of preschools, compulsory schools and upper secondary schools, No. 87, 2008).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="island-bild-vom-kind" id="more-content-island-bild-vom-kind-heading"><a name="island-bild-vom-kind"></a>Bild vom Kind</h3>
		<div class="more-content-country-section" data-require-visibility-for="island" style="word-break: break-word;" id="more-content-island-bild-vom-kind" data-section-name="island-bild-vom-kind"><p>Der Kindergarten heißt in Island Leikskóli, was übersetzt Spielschule bedeutet (Langenscheid, 2018). Dies spiegelt auch das Bild vom Kind, wie es im „National Curriculum Guide for Preschools“ beschrieben wird, gut wieder. Es besagt, dass Kinder die Möglichkeit haben, sollen sich damit zu beschäftigen was sie interessiert, ihren Stärken und ihrer Entwicklung entspricht, damit sie Vertrauen in ihre Fähigkeiten entwickeln. </p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="island-curriculum" id="more-content-island-curriculum-heading"><a name="island-curriculum"></a>Curriculum</h3>
		<div class="more-content-country-section" data-require-visibility-for="island" style="word-break: break-word;" id="more-content-island-curriculum" data-section-name="island-curriculum"><p>Laut dem Curriculum ist Spielen die wichtigste Art zu lernen, da es Kindern die Möglichkeit gibt ihre Umwelt zu verstehen, ihre Ideen, Erfahrungen und Gefühle auszudrücken und soziale Beziehungen aufzubauen (Minstiry of Education, Science and Culture, 2011).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="island-qualitätsmanagement" id="more-content-island-qualitätsmanagement-heading"><a name="island-qualitätsmanagement"></a>Qualitätsmanagement</h3>
		<div class="more-content-country-section" data-require-visibility-for="island" style="word-break: break-word;" id="more-content-island-qualitätsmanagement" data-section-name="island-qualitätsmanagement"><p>Das Prinzip des Qualitätsmanagements erinnert sehr an das in Deutschland. Es gibt interne Evaluationen, die die Kitaleitung mit Beteiligung der Erzieher*innen, Kindern und Eltern durchführt. Außerdem gibt es externe Evaluationen, die das Ministerium mit eigenen Datenerhebungen (Besuch der Einrichtung, Interviews, geschriebene Dokumente) und auf Grundlage von Berichten der Stadtverwaltungen auswertet. Außerdem sollen die Kommunen Fachberater*innen für die Kindergärten anstellen und überprüfen, ob die in der Evaluation festgelegten Verbesserungen auch wirklich durchgeführt werden. Bei der Evaluation wird vor allem auf die Einhaltung des Curriculums sowie der Kinderrechte geachtet sowie darauf wie andere Aktivitäten durchgeführt und ausgewertet werden. Die Kita sieht den fertigen Bericht der externen Evaluatoren und hat die Möglichkeit diesen zu kommentieren, bevor er an das Ministerium gesendet wird (Minstiry of Education, Science and Culture, 2011).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="island-inklusion" id="more-content-island-inklusion-heading"><a name="island-inklusion"></a>Inklusionsansatz</h3>
		<div class="more-content-country-section" data-require-visibility-for="island" style="word-break: break-word;" id="more-content-island-inklusion" data-section-name="island-inklusion"><p>Bezüglich der Inklusion lässt sich sagen, dass Kindern, die besondere Unterstützung brauchen, dies in der Kita zur Verfügung gestellt werden soll. Auch die Zusammenarbeit mit weiterführenden Schulen und der Unterstützungsperson aus dem Kindergarten ist wichtig (Minstiry of Education, Science and Culture, 2011). Wenn die Kinder in die Grundschule kommen, können sie auf jede beliebige Schule gehen, da alle Schulen Kinder mit Lernschwierigkeiten, emotionalen oder sozialen Schwierigkeiten sowie Behinderungen aufnehmen. Allerdings gibt es dennoch auch extra Schulen oder extra Klassen an regulären Schulen für Kinder mit geistiger Behinderung und zusätzlich gesonderte Klassen für Kinder mit Autismus. Außerdem gibt es ab der 4. Klasse für Kinder mit massiven mentalen oder emotionalen Sozial-/Verhaltensproblemen Schulen, bei denen es jedoch das Ziel ist, dass die Kinder bald wieder auf Regelschulen gehen (Reykjavik, n.d.c).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="island-how-are-children-seen-in-your-society-wie-werden-kinder-in-deiner-gesellschaft-gesehen-" id="more-content-island-how-are-children-seen-in-your-society-wie-werden-kinder-in-deiner-gesellschaft-gesehen--heading"><a name="island-how-are-children-seen-in-your-society-wie-werden-kinder-in-deiner-gesellschaft-gesehen-"></a>How are children seen in your society? Wie werden Kinder in deiner Gesellschaft gesehen?</h3>
		<div class="more-content-country-section" data-require-visibility-for="island" style="word-break: break-word;" id="more-content-island-how-are-children-seen-in-your-society-wie-werden-kinder-in-deiner-gesellschaft-gesehen-" data-section-name="island-how-are-children-seen-in-your-society-wie-werden-kinder-in-deiner-gesellschaft-gesehen-"><p>Kathrin Steinþórsdóttir</p>
<p><em>„I think it has changed a lot in the last 20-35 years, nowadays people are more protective of children and they have less independence/freedom.. e.g. me and my sister are 12 years apart and when see was around 7 years old she went alone to the bus while i went first alone around 13 years (dont remember exactly). other things: nowadays its a lot in the conversation about childrens own choices -&gt; e.g. what they wear, eat, play with.. and to not put them into a steriotypical "box".. f.x just a few years ago it was banned in iceland to teach christianity in schools adults are very worried about that the icelandic language is going to disappear and much research is on kids languaging skills (mainly icelandic vs english) and many kids speak english between themselves - and use technology (which is mostly in english) but i guess in general people have hopes for the next generation, even though ive also heard that people worry that this generation now is too pampered and have everything so will be difficult for them to fit into normal jobs and then there are worrying issues of bullying, sexual abuse, healthy eating/fitness... and even though these problems have always been in society now people are talking about it more and more another interesting thing: nearly everyone starts working summer jobs at 13 -and if someone doesnt people think its lazy or weird“</em></p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="island-literatur" id="more-content-island-literatur-heading"><a name="island-literatur"></a>Literatur</h3>
		<div class="more-content-country-section" data-require-visibility-for="island" style="word-break: break-word;" id="more-content-island-literatur" data-section-name="island-literatur"><p>Act on the education und recruitment of teachers and administrators of preschools, compulsory schools and upper secondary schools, No. 87 (2008). Verfügbar unter <a href="https://www.icetra.is/media/english/Act-on-the-education-and-recruitment-of-teachers--No-87_2008-nr.-87-Uppfaerd-thyding-januar-2017.pdf">https://www.icetra.is/media/english/Act-on-the-education-and-recruitment-of-teachers--No-87_2008-nr.-87-Uppfaerd-thyding-januar-2017.pdf</a> [05.11.2018]</p>
<p>Einarsdottir, J. (2011). Training of Preschool Teachers in Iceland. Verfügbar unter <a href="http://vefir.hi.is/kennaramenntun/files/2011/08/Training-of-Preschool-Teachers-in-Icelandjóhanneinarsdótir.pdf">http://vefir.hi.is/kennaramenntun/files/2011/08/Training-of-Preschool-Teachers-in-Icelandjóhanneinarsdótir.pdf</a> [19.12.2018]</p>
<p>Euraxess Iceland (n.d.). Child care and the school system. Verfügbar unter  <a href="https://www.euraxess.is/iceland/information-assistance/child-care-and-school-system">https://www.euraxess.is/iceland/information-assistance/child-care-and-school-system</a> [19.12.2018]</p>
<p>Langenscheid (2018). Isländisch-Deutsch Übersetzung für „leikur“. Verfügabr unter <a href="https://de.langenscheidt.com/islaendisch-deutsch/leikur">https://de.langenscheidt.com/islaendisch-deutsch/leikur</a> [05.11.2018]</p>
<p>Menntamálastofnun (2016). Licence for Preschool Teachers. Verfügbar unter  <a href="https://mms.is/licence-preschool-teachers">https://mms.is/licence-preschool-teachers</a> [01.02.2019]</p>
<p>Minstiry of Education, Science and Culture. (2011). The Icelandic national curriculum guide     for preschools. Reykjavik, Iceland.</p>
<p>Registers Iceland (n.d.a). Nursery Schools. Verfügbar unter <a href="https://www.island.is/en/family/day_care_centres/nursery_schools/">https://www.island.is/en/family/day_care_centres/nursery_schools/</a> [16.01.2019]</p>
<p>Registers Iceland (n.d.b). Maternity/paternity leave and parental leave. Verfügbar unter <a href="https://www.island.is/en/family/having_a_baby/maternity_paternity_leave_and_parental_leave/">https://www.island.is/en/family/having_a_baby/maternity_paternity_leave_and_parental_leave/</a> [31.1.2019]</p>
<p>Reykjavik (n.d.a). Preschools. Verfügbar unter <a href="https://reykjavik.is/en/preschools">https://reykjavik.is/en/preschools</a> [19.12.2018]</p>
<p>Reykjavik (n.d.b). Leikskólagjöld. Verfügbar unter <a href="https://reykjavik.is/gjaldskrar/leikskolagjold-fra-1-jan-2016">https://reykjavik.is/gjaldskrar/leikskolagjold-fra-1-jan-2016</a> [01.02.2019]</p>
<p>Reykjavik (n.d.c) Special Education and Special Schools. Verfügabr unter <a href="https://reykjavik.is/en/special-education-and-special-schools">https://reykjavik.is/en/special-education-and-special-schools</a> [19.12.2018]</p>
<p>Statistics Iceland (n.d.a). Children in pre-primary institutions by age of children and attendance 1998-2017. Verfügbar unter <a href="http://px.hagstofa.is/pxen/pxweb/en/Samfelag/Samfelag__born__1_menntun__1_leikskolaborn/SKO01001.px/table/tableViewLayout1/?rxid=f2486477-3958-42f2-a2eb-7f480dfc9954">http://px.hagstofa.is/pxen/pxweb/en/Samfelag/Samfelag__born__1_menntun__1_leikskolaborn/SKO01001.px/table/tableViewLayout1/?rxid=f2486477-3958-42f2-a2eb-7f480dfc9954</a> [16.01.2019]</p>
<p>Statistics Iceland (n.d.b). Personnel in pre-primary institutions by age, education and region, 1998-2017. Verfügbar unter <a href="http://px.hagstofa.is/pxen/pxweb/en/Samfelag/Samfelag__skolamal__1_leikskolastig__1_lsStarfsfolk/SKO01301.px/table/tableViewLayout1/?rxid=12095944-d364-4fec-8a1d-7cc7006bfaac">http://px.hagstofa.is/pxen/pxweb/en/Samfelag/Samfelag__skolamal__1_leikskolastig__1_lsStarfsfolk/SKO01301.px/table/tableViewLayout1/?rxid=12095944-d364-4fec-8a1d-7cc7006bfaac</a> [16.01.2019]</p>
<p>The Preschool Act, No.90 (2008). Verfügbar unter <a href="https://www.government.is/media/menntamalaraduneyti-media/media/frettatengt2016/Preschool-Act-No-90-2008.pdf">https://www.government.is/media/menntamalaraduneyti-media/media/frettatengt2016/Preschool-Act-No-90-2008.pdf</a> [05.11.2018]</p></div>
	</div>
<div>
	<h2 class="more-content-country-heading" data-toggle-for="kanada" id="more-content-kanada-heading">
		<a name="kanada"></a>
		Kanada	</h2>
	<div class="more-content-country" id="more-content-kanada"  data-section-name="kanada">
		<div class="more-content-country-section" data-require-visibility-for="kanada" style="word-break: break-word;" id="more-content-kanada-allgemein" data-section-name="kanada-allgemein"></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="kanada-formen-frühkindlicher-bildung" id="more-content-kanada-formen-frühkindlicher-bildung-heading"><a name="kanada-formen-frühkindlicher-bildung"></a>Formen der frühkindlichen Bildung</h3>
		<div class="more-content-country-section" data-require-visibility-for="kanada" style="word-break: break-word;" id="more-content-kanada-formen-frühkindlicher-bildung" data-section-name="kanada-formen-frühkindlicher-bildung"><p>Kanadas Bildungssystem wird von 14 verschiedenen Zuständigkeiten, darunter zehn Provinzen, drei Territorien und der Bundesregierung geprägt. Dabei gibt es keine einheitlichen Bildungspläne. Die Bildungsministerien (Ministry of Education) der einzelnen Provinzen und Territorien haben ihre eigenen Reglementierungen, Anforderungen und ein eigenes Finanzierungssystem (Friendly et al., 2018). </p>
<p>Das Bildungs- und Betreuungsangebot ist sehr vielfältig. Es gibt verschiedene Programme mit verschiedenen Schwerpunkten wie z.B. „school readiness“, „early intervention“ die Gleichberechtigung und Unterstützung von Müttern in Erwerbstätigkeit, sowie die Armutsreduzierung.</p>
<p>Dabei bieten jede Provinz und jedes Territorium eine Form der geregelten Ganztagsbetreuung in und außerhalb der Familie an. Dazu zählen die Daycare Centres/Early Learning Centres (Kita), Home Family Care (provinzial regulierte Betreuung durch Tagesmütter in deren Zuhause), Kindergarten/Preschool (Vorschule) und die Elementary School (Grundschule). Es werden aber auch viele verschiedene andere nicht vom Staat regulierte Betreuungsformen genutzt, wie z.B. die Kinderbetreuung durch Nannys, Au-pairs oder auch durch die Unterstützung der Verwandtschaft. Außerdem wird unterschieden, ob die Betreuung in einer Einrichtung (centre-based) oder im familiären Umfeld der Betreuungsperson (home-based) stattfindet.</p>
<p>Während Kinder im Alter von Geburt bis zum ca. 5. Lebensjahr sehr individuell betreut werden, ist die Vorschule (kindergarten) ein sehr wichtiger Bestandteil der frühkindlichen Bildung in Kanada. Alle Provinzen und Territorien verfügen über öffentliche, kostenlose Vorschuleinrichtungen, die ähnlich wie in der Grundschule auf einem Ganztagskonzept basieren. Dieses Angebot gilt für alle Kinder ab dem Alter von 5 Jahren (in vereinzelten Provinzen ab 4 Jahren) und ist in den meisten Provinzen fakultativ. Der Großteil der Provinzen und Territorien hat zusätzlich noch ähnliche Angebote wie z.B. family resource/support programs und andere Leistungen.</p>
<p>Kinder im Schulalter können außerdem vor und nach der Schule in Before- /After-School-Care Programmen betreut werden, die ähnlich der Hortbetreuung sind.</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="kanada-betreuungsquote" id="more-content-kanada-betreuungsquote-heading"><a name="kanada-betreuungsquote"></a>Betreuungsquote</h3>
		<div class="more-content-country-section" data-require-visibility-for="kanada" style="word-break: break-word;" id="more-content-kanada-betreuungsquote" data-section-name="kanada-betreuungsquote"><p>Die Betreuungsquote lag im Jahr 2011 bei ca. 54% der Eltern mit Kindern im Alter von 0 bis 4 Jahren. 26% der Eltern mit Säuglingen im Alter von 0 bis 1 Jahren nutzten eine Art der Betreuungsform, sowie 39% der Eltern mit Kindern im Alter von 5 bis 14 Jahren.  Am höchsten lag die Betreuungsquote bei den 2 bis 4-jährigen Kindern bei ca. 60% (Sinha, 2014).  </p>
<p>Dabei variieren die verschiedenen Betreuungsformen relativ stark in den jeweiligen Provinzen und Territorien. Insgesamt auf Kanada bezogen ging man aber 2011 von jeweils einem Drittel der Kinder unter 4 Jahren in Daycare Centres, Family Home Care und privaten Betreuungsformen aus (Sinha, 2014).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="kanada-einrichtungsgröße" id="more-content-kanada-einrichtungsgröße-heading"><a name="kanada-einrichtungsgröße"></a>Einrichtungsgröße / Gruppenstruktur und -größe / Betreuungsumfang pro Woche / Eintrittsalter Betreuung</h3>
		<div class="more-content-country-section" data-require-visibility-for="kanada" style="word-break: break-word;" id="more-content-kanada-einrichtungsgröße" data-section-name="kanada-einrichtungsgröße"><p>Der Betreuungsumfang liegt durchschnittlich bei ca. 30 Stunden die Woche (Vollzeit) in den Daycare Centres, sowie bei ca. 25 Stunden in Kindergarten/Preschool. Die Betreuungszeiten in den Family Home Cares sind hierbei sehr individuell (Friendly et al., 2018). </p>
<p>Die Kinder können ab 0 Jahren betreut werden, einen gesetzlichen Anspruch gibt es aber erst ab 5 Jahren (Ausnahme: 4 Jahre in einzelnen Provinzen) mit dem Eintritt in den Kindergarten/Preschool.</p>
<p>Die Größe der Einrichtung, sowie die Gruppengröße variieren stark nach Provinz und Region. Für den U3-Bereich in den Daycare Centres liegt die maximale Gruppengröße in der Provinz Québec bei 15 Kindern und in der Provinz Prince Edward Island bei nur 5 Kindern. Bei den 3 bis 6-jährigen Kindern ist die maximale Gruppengröße in Québec bei 30 Kindern und in anderen Provinzen wie Nunavut, Newfoundland and Labrador, Manitoba und in den Yukon Territories bei nur 16 Kindern (Friendly et al., 2018; Sinha, 2014).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="kanada-finanzierung" id="more-content-kanada-finanzierung-heading"><a name="kanada-finanzierung"></a>Finanzierung (Wer muss die Ressourcen bereitstellen?) / Zuschüsse für Familien</h3>
		<div class="more-content-country-section" data-require-visibility-for="kanada" style="word-break: break-word;" id="more-content-kanada-finanzierung" data-section-name="kanada-finanzierung"><p>Die Betreuung der Kinder wird in Kanada überwiegend von den Eltern finanziert, jedoch bezahlen die meisten Provinzen und Territorien einen begrenzten Anteil für die Betreuung, sogenannte „grants“ oder „base funding“. In den Provinzen Québec, Manitoba, Prince Edward Island sind die Betreuungskosten für die Eltern am niedrigsten. Die Elternbeiträge sind jedoch auch abhängig vom Alter der Kinder und der Betreuungsdauer. Alle Provinzen und Territorien außer Québec subventionieren individuell berechtigte Familien, wie z.B. Familien mit niedrigem Einkommen, indigene Familien, Alleinerziehende, Familien in unterversorgten Communities etc. und finanzieren somit einen Großteil oder die gesamten Beiträge der Eltern. Zusätzlich zu den provinzialen und territorialen Programmen, fördert die Bundesregierung (federal government) direkt verschiedene Early Childhood Education (ECE) – Programme für besondere Bevölkerungsgruppen wie z.B. indigene Einwohner, Militärangehörige, Einwanderer/Newcomers, Geflüchtete (Friendly et al., 2018).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="kanada-soziale-zugänglichkeit" id="more-content-kanada-soziale-zugänglichkeit-heading"><a name="kanada-soziale-zugänglichkeit"></a>Soziale Zugänglichkeit zu Betreuungsplätzen</h3>
		<div class="more-content-country-section" data-require-visibility-for="kanada" style="word-break: break-word;" id="more-content-kanada-soziale-zugänglichkeit" data-section-name="kanada-soziale-zugänglichkeit"><p>Insgesamt gesehen ist die Verfügbarkeit von geregelten Betreuungsangeboten nur unzureichend vorhanden und deckt nur wenige Kinder ab. Nicht alle Familien können sich die Betreuung leisten und auch die Qualität der Betreuung ist zum Teil nur unzureichend.</p>
<p>Die Betreuung der Kinder liegt zum Großteil in der privaten und familiären Verantwortung. NGO’s und und und die Arbeit der Ehrenamtlichen in der Community sind dabei ein wichtiger Kernbestandteil des ECE-Systems.</p>
<p>Durch den „Multilateral Early Learning and Childcare Framework” (ESDC, 2017) wurden fünf Richtlinien für den ECE-Bereich herausgearbeitet.</p>
<ol>
<li>
<p>Hohe Qualität</p>
</li>
<li>
<p>Zugänglichkeit und Barrierefreiheit</p>
</li>
<li>
<p>Bezahlbarkeit</p>
</li>
<li>
<p>Flexibilität</p>
</li>
<li>
<p>Inklusivität</p>
</li>
</ol></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="kanada-qualifizierung" id="more-content-kanada-qualifizierung-heading"><a name="kanada-qualifizierung"></a>Qualifizierung (Ausbildung, Abschluss o.ä.)</h3>
		<div class="more-content-country-section" data-require-visibility-for="kanada" style="word-break: break-word;" id="more-content-kanada-qualifizierung" data-section-name="kanada-qualifizierung"><p>Fast alle Provinzen und Territorien fordern eine bestimmte Ausbildung für einzelne Fachkräfte im ECE-Bereich der Hochschulen. Insgesamt sind die Anforderungen an die Ausbildung im frühkindlichen Bildungsbereich jedoch eher weniger konzipiert und unterscheiden sich stark. Grundsätzlich gilt für die Daycare Centres, dass ca. ein Viertel bis zwei Drittel der Mitarbeiter*innen, die unabhängig von der Ausbildung Early Childhood Educators genannt werden, ein entsprechendes ECE-Diploma vorweisen müssen. In den Provinzen Nunavut und den Northwest Territories gelten aber keine besonderen formalen Ansprüche an die Ausbildung der Mitarbeiter*innen. Es genügt ein Erste-Hilfe-Kurs, sowie ein Führungszeugnis und das Ermessen liegt bei der Leitung (Friendly et al., 2018).</p>
<p>Dies gilt auch für die Betreuungsangebote in der Familie. Es gibt hier auch nur begrenzte Anforderungen an die ECE-Ausbildung. In der Provinz New Brunswick müssen die Family Home Care Anbieter*innen eine 20- bis 30-stündige Schulung absolvieren. In anderen Provinzen, wie z.B. Ontario, Nunavut und den Northwest Territories sind keine spezifischen Anforderungen notwendig (Friendly et al., 2018).</p>
<p>Für den Kindergarten/Preschool hingegen sind die Vorgaben etwas klarer. Die sogenannten Kindergarten-Teacher müssen dieselbe Ausbildung nachweisen wie Grundschullehrer*innen, welche meist ein vierjähriges Studium (Bachelor of Education) und in einigen Provinzen zusätzlich noch ein ein- bis zweijähriges ECE-Diploma/Training voraussetzt. In vereinzelten Provinzen sind jedoch auch Quereinsteiger mit einer entsprechenden Zusatzausbildung möglich (Friendly et al., 2018).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="kanada-arbeitszeit" id="more-content-kanada-arbeitszeit-heading"><a name="kanada-arbeitszeit"></a>Arbeitsstunden pro Woche / Gehalt (netto/Monat in Euro)</h3>
		<div class="more-content-country-section" data-require-visibility-for="kanada" style="word-break: break-word;" id="more-content-kanada-arbeitszeit" data-section-name="kanada-arbeitszeit"><p>Die Arbeitszeiten bei den Early Childhood Educators und den Kindergarten Teachers beträgt durchschnittlich ca. 32 Stunden in der Woche. Die Gehälter unterscheiden sich hierbei aber sehr stark. Während die Pädagog*innen in den Daycare Centres einen durchschnittlichen Stundenlohn von 13,06€ bekommen, verdienen Vorschullehrer*innen durchschnittlich 26,77€ die Stunde. Dies hängt jedoch auch von der Ausbildung und der Berufserfahrung der pädagogischen Fachkräfte ab und kann dementsprechend nicht pauschalisiert werden (Statistics Canada, 2019a, 2019b).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="kanada-prozess-und-strukturqualität" id="more-content-kanada-prozess-und-strukturqualität-heading"><a name="kanada-prozess-und-strukturqualität"></a>Prozess- und Strukturqualität (KES bzw. ECCERS)</h3>
		<div class="more-content-country-section" data-require-visibility-for="kanada" style="word-break: break-word;" id="more-content-kanada-prozess-und-strukturqualität" data-section-name="kanada-prozess-und-strukturqualität"><p>Zur Strukturqualität gibt es nur wenige aktuellere repräsentative Studien, die deskriptive Statistiken beinhalten. Eine Studie von Doherty et al. (2000) erhob einen durchschnittlichen Wert von 4,7 (4,0 bis 5,6 je nach Provinz) nach der Early Childhood Environmental Rating Scale Revised (ECERS-R).</p>
<p>Zur Prozessqualität wurde ein positiver Zusammenhang mit der Ausbildung im ECE-Bereich festgestellt. Des Weiteren gibt es außerdem einen starken positiven Zusammenhang mit der Motivation der Pädagog*innen die Standards zu erfüllen.</p>
<p>Ein negativer Zusammenhang besteht mit dem Betreuungsschlüssel, sowie die Anzahl der Jahre als unregulierte Family Home Care Provider. Das Ausbildungsniveau und die Prozessqualität in Family Home Cares sind niedriger als in den Daycare Centres (Bigras, et al., 2010; Bourgon &amp; Lavallée, 2004; Doherty et al., 2006).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="kanada-curriculum" id="more-content-kanada-curriculum-heading"><a name="kanada-curriculum"></a>Curriculum</h3>
		<div class="more-content-country-section" data-require-visibility-for="kanada" style="word-break: break-word;" id="more-content-kanada-curriculum" data-section-name="kanada-curriculum"><p>Die Verantwortung und Umsetzung von Bildungsplänen ist ebenso Aufgabe der jeweiligen Provinzen und Territorien und daher sehr unterschiedlich. Da Ontario die Provinz mit den meisten Einwohnern Kanadas ist, wurde diese ausgewählt, um die Pädagogik- und Bildungsrichtlinien für den frühkindlichen Bereich zu veranschaulichen.</p>
<p>In Ontario gibt es seit 2007 das Curriculum „Early Learning For Every Child Today” (ELECT), welches auf 6 Prinzipien basiert (Bertrand et al., 2007):</p>
<ol>
<li>
<p>Positive Erfahrungen in der frühen Kindheit bilden das Fundament für lebenslanges Lernen, Verhalten, Gesundheit und Wohlbefinden.</p>
</li>
<li>
<p>Zusammenarbeit mit Familien und Communities sind wichtig.</p>
</li>
<li>
<p>Respekt für Vielfalt, Gleichheit und Inklusion ist bedeutsam.</p>
</li>
<li>
<p>Ein intentionales, geplantes Programm unterstützt das Lernen.</p>
</li>
<li>
<p>Spielen und Hinterfragen sind Lernansätze, die die natürliche Neugierde und Ausgelassenheit des Kindes fördern.</p>
</li>
<li>
<p>Kompetente, zugängliche und reflektierende Pädagog*innen sind unentbehrlich.</p>
</li>
</ol>
<p>Dieses Curriculum wurde 2014 vom Bildungsministerium in Ontario aufgegriffen und neu überarbeitet. Daraus entwickelte sich der Bildungsplan „How does Learning happen? – Ontarios Pedagogy for the Early Years“. Zusätzlich zu den sechs Prinzipien wurden die vier Säulen der Pädagogik formuliert und verschiedene pädagogische Ansätze ergänzt. Zu den vier Säulen der Pädagogik zählen die Zugehörigkeit („belonging“), das Wohlbefinden („well-being“), die Interaktion („engagement“) und der kommunikative Ausdruck („expression“).</p>
<p>Die erste Säule beschreibt das Zugehörigkeitsgefühl zur Gesellschaft von Kindern. Frühkindliche Bildungseinrichtungen sollen den Kindern ermöglichen Beziehungen und Verbindungen zu ihren Mitmenschen aufzubauen und somit das Gefühl von Zugehörigkeit der Kinder stärken.</p>
<p>Die zweite Säule bezieht sich auf das Wohlbefinden des Kindes. Die Einrichtungen sollen eine gesunde Entwicklung der Kinder fördern.</p>
<p>Die dritte Säule beschreibt die Interaktion der Kinder. Kinder sind aktiv und lernbereit und erkunden die ihre Umwelt mit allen Sinnen. Dabei sollen sie unterstützt werden, indem für sie eine passende Lernumgebung geschaffen wird, die die Kreativität und Exploration der Kinder spielerisch fördern.</p>
<p>Die vierte Säule bezieht sich auf den kommunikativen Ausdruck der Kinder. Die frühkindlichen Bildungseinrichtungen sollen die Kommunikation auf allen Ebenen fördern.</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="kanada-literatur" id="more-content-kanada-literatur-heading"><a name="kanada-literatur"></a>Literatur</h3>
		<div class="more-content-country-section" data-require-visibility-for="kanada" style="word-break: break-word;" id="more-content-kanada-literatur" data-section-name="kanada-literatur"><p>Bertrand, J. et al. (2007). <em>Early Learning for Every Child Today: A Framework for Ontario Early Childhood Settings</em>. Ontario: Ministry of Children and Youth Services.</p>
<p>Bigras, N. et al. (2010). A comparative study of structural and process quality in center-based and family-based child care services. <em>Child Youth Care Forum, 39</em>, 129–150.</p>
<p>Bourgon, L., &amp; Lavallée, C. (2004). <em>Échelle d'observation de la qualité éducative, les services de garde en installations pour les enfants de 18 mois ou plus</em>. Emploi, solidarité sociale et famille Québec.</p>
<p>Doherty, G., Lero, D., Goelman, H., LaGrange, A., &amp; Tougas, J. (2000). <em>You Bet I Care!: Caring and learning environments: Quality in child care centres across Canada</em>. Guelph: University of Guelph.</p>
<p>Doherty, G., Forer, B., Lero, D. S., Goelman, H., &amp; LaGrange, A. (2006). Predictors of quality in family child care. <em>Early Childhood Research Quarterly 21</em>(3), 296-312.</p>
<p>Employment and Social Development Canada (ESDC, 2017). <em>Multilateral Early Learning and Child Care Framework</em>. Gatineau, QC.</p>
<p>Friendly, M., Larsen, E., Feltham, L.E., Grady, B., Forer, B., &amp; Jones, M. (2018). <em>Early childhood education and care in Canada 2016</em>. Toronto: Childcare Resource and Research Unit.</p>
<p>Sinha, M. (2014). <em>Child care in Canada</em>. Ottawa, ON: Statistics Canada.</p>
<p>Statistics Canada (2019a). <em>Job vacancies, proportion of job vacancies and average offered hourly wage by selected characteristics, quarterly, unadjusted for seasonality</em>. Ottawa, ON: Statistics Canada. Abgerufen von: <a href="https://www150.statcan.gc.ca/t1/tbl1/en/tv.action?pid=1410032801&amp;pickMembers%5B0%5D=1.1&amp;pickMembers%5B1%5D=2.418">https://www150.statcan.gc.ca/t1/tbl1/en/tv.action?pid=1410032801&amp;pickMembers%5B0%5D=1.1&amp;pickMembers%5B1%5D=2.418</a></p>
<p>Statistics Canada (2019b). <em>Average full-time hourly wage paid and payroll employment by type of work, economic region and occupation</em>. Ottawa, ON: Statistics Canada. Abgerufen von: <a href="https://www150.statcan.gc.ca/t1/tbl1/en/cv!recreate.action?pid=1410000101&amp;selectedNodeIds=1D2All,1D2,1D3,1D4,1D5,1D6,1D7,1D8,1D9,1D10,1D11,1D12,1D13,1D14,1D1,2D397,2D418,3D1&amp;checkedLevels=&amp;refPeriods=20160101,20170101&amp;dimensionLayouts=layout3,layout3,layout2,layout2&amp;vectorDisplay=false">https://www150.statcan.gc.ca/t1/tbl1/en/cv!recreate.action?pid=1410000101&amp;selectedNodeIds=1D2All,1D2,1D3,1D4,1D5,1D6,1D7,1D8,1D9,1D10,1D11,1D12,1D13,1D14,1D1,2D397,2D418,3D1&amp;checkedLevels=&amp;refPeriods=20160101,20170101&amp;dimensionLayouts=layout3,layout3,layout2,layout2&amp;vectorDisplay=false</a></p></div>
	</div>
<div>
	<h2 class="more-content-country-heading" data-toggle-for="neuseeland" id="more-content-neuseeland-heading">
		<a name="neuseeland"></a>
		Neuseeland	</h2>
	<div class="more-content-country" id="more-content-neuseeland"  data-section-name="neuseeland">
		<div class="more-content-country-section" data-require-visibility-for="neuseeland" style="word-break: break-word;" id="more-content-neuseeland-allgemein" data-section-name="neuseeland-allgemein"></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="neuseeland-bild-vom-kind" id="more-content-neuseeland-bild-vom-kind-heading"><a name="neuseeland-bild-vom-kind"></a>Bild vom Kind</h3>
		<div class="more-content-country-section" data-require-visibility-for="neuseeland" style="word-break: break-word;" id="more-content-neuseeland-bild-vom-kind" data-section-name="neuseeland-bild-vom-kind"><p>Die frühe Kindheit besitzt in Neuseeland einen hohen Stellenwert, da es die Zeit ist, in welcher die Grundlagen für einen lebenslangen Erfolg geschaffen werden. Um dies zu gewährleisten ist das Ziel des ECE-Systems, die Kinder ganzheitlich zu stärken, damit sie sich dementsprechend entwickeln. Sie sollen Beziehungen aufbauen und ebenso diverse Perspektiven auf die Welt einnehmen können.</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="neuseeland-curriculum" id="more-content-neuseeland-curriculum-heading"><a name="neuseeland-curriculum"></a>Curriculum</h3>
		<div class="more-content-country-section" data-require-visibility-for="neuseeland" style="word-break: break-word;" id="more-content-neuseeland-curriculum" data-section-name="neuseeland-curriculum"><p>Die Basis für das ECE-System ist das nationale Curriculum Te Whāriki (1996), welches alle entscheidenden Faktoren für den Blick auf die frühkindliche Bildung enthält. An dieser Stelle muss betont werden, dass Neuseeland das erste einheitliche nationale Curriculum für die frühe Bildung besaß. Dieses Curriculum ist für jeden online einsehbar. Ergänzend dazu ist das Bildungssystem auf der Webseite des politischen Entscheidungsträgers (Ministry of Eduaction) gut dargestellt.</p>
<p>Neuseeland ist ein multikulturelles Land, was auch im Te Whāriki (1996) deutlich sichtbar wird. Demnach ist dies in zwei Sprachen lesbar (Englisch und Maori). Eine zentrale Grafik veranschaulicht die zentralen Begriffe: Prinzipien (Empowerment, Ganzheitliche Entwicklung, Familie und Gemeinschaft, Beziehungen) und Ziele (Wohlbefinden, Zugehörigkeit, Mitwirkung, Kommunikation, Exploration). Diesem Curriculum liegt ein modernes Bild vom Kind zu Grunde. Schließlich basiert es auf einer Vision, dass Kinder kompetente und selbstbewusste Lernende sind, die sich ganz frei nach ihren Interessen entwickeln können. </p>
<p>Interessant ist, dass die meisten ECE-Zentren über Digitalkameras verfügen. Es dient der pädagogischen Arbeit, welche von Beobachtung und der Dokumentation geleitet wird. In einem Portfolio schreiben die Pädagog*innen regelmäßige Texte über die Themen des Kindes und darüber, was die Kinder lernen. In Neuseeland gibt es keine standardisierte Methode, welche die Fähigkeiten und Fertigkeiten der Kinder misst. Das Beobachtungsinstrument sind die sogenannten „learning stories“. Hier sei nochmal hervorzuheben, dass es eine Beschreibung der individuellen Lernerfahrungen und somit der Stärken des Kindes in einer bestimmten Situation ist. Dies wird in Form eines Briefes an das Kind verfasst.</p>
<p>Die Art dieser Beobachtung und Dokumentation wird mittlerweile in deutschen Kindertageseinrichtungen vermehrt eingesetzt. </p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="neuseeland-qualifizierung" id="more-content-neuseeland-qualifizierung-heading"><a name="neuseeland-qualifizierung"></a>Qualifizierung (Ausbildung, Abschluss o.ä.)</h3>
		<div class="more-content-country-section" data-require-visibility-for="neuseeland" style="word-break: break-word;" id="more-content-neuseeland-qualifizierung" data-section-name="neuseeland-qualifizierung"><p>Ein ebenso gut entwickelter Faktor ist die Ausbildung der Pädagog*innen, welche als dreijähriges Grundstudium an Lehrerschulen abläuft. Zusätzlich müssen die Pädagog*innen im Anschluss daran eine zweijährige begleitende Praxisphase für ihre Anerkennung durchlaufen.</p>
<p>Allgemein zusammengefasst sei die frühkindliche Bildung in Neuseeland und besonders das Bild vom Kind als Vorbild für viele andere Länder zu sehen.</p></div>
	</div>
<div>
	<h2 class="more-content-country-heading" data-toggle-for="thailand" id="more-content-thailand-heading">
		<a name="thailand"></a>
		Thailand	</h2>
	<div class="more-content-country" id="more-content-thailand"  data-section-name="thailand">
		<div class="more-content-country-section" data-require-visibility-for="thailand" style="word-break: break-word;" id="more-content-thailand-allgemein" data-section-name="thailand-allgemein"><p>Thailand ist stark im Kommen und hat sich innerhalb nur einer Generation von einem low-income Landwirtschaftsland zu einem Land mit mittlerem Einkommen gemacht. Außerdem wurde viel im Bereich der Bildung getan (OECD &amp; UNESCO, 2016, 19; 41). 2018 hat Thailand die geringste Arbeitslosenrate der Welt (Shaeffer, 2018, S. 100).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="thailand-formen-frühkindlicher-bildung" id="more-content-thailand-formen-frühkindlicher-bildung-heading"><a name="thailand-formen-frühkindlicher-bildung"></a>Formen der frühkindlichen Bildung / Wie verbindlich ist der Besuch dieser Einrichtungen?</h3>
		<div class="more-content-country-section" data-require-visibility-for="thailand" style="word-break: break-word;" id="more-content-thailand-formen-frühkindlicher-bildung" data-section-name="thailand-formen-frühkindlicher-bildung"><p>Es gibt drei Formen der Frühkindlichen Bildung: Preschool classes, Kindergarten und childcare centers. Der Besuch einer frühkindlichen Einrichtung ist in Thailand freiwillig (Pholphirul, 2017, S. 411–412).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="thailand-betreuungsquote" id="more-content-thailand-betreuungsquote-heading"><a name="thailand-betreuungsquote"></a>Betreuungsquote</h3>
		<div class="more-content-country-section" data-require-visibility-for="thailand" style="word-break: break-word;" id="more-content-thailand-betreuungsquote" data-section-name="thailand-betreuungsquote"><p>77,1 % aller Kinder im Jahre 2012 besuchten laut Pholphirul (2017) Einrichtungen frühkindlicher Bildung (S. 412). Laut einer Statistik von UNICEF, die sich auf die Gross enrolment ratio bezieht, besuchten von 2008 bis 2012 100,6% männliche und 100% weibliche Kinder eine Einrichtung. Allerdings beziehen sich diese Werte wahrscheinlich auf Bruttowerte, da sie 100% übersteigen. Im Gegensatz dazu steht der Wert 60,7% derselben Statistik unter der Angabe „Attendance in early childhood education 2005 bis 2012“. Eventuell ist der Unterschied der Werte aufgrund der nicht erfassten drei Jahre von 2005 bis 2008 oder dem Unterschied von Brutto- und Nettowert zu erklären ("Thailand", 2013).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="thailand-betreuungsumfang" id="more-content-thailand-betreuungsumfang-heading"><a name="thailand-betreuungsumfang"></a>Betreuungsumfang pro Woche / Eintrittsalter Betreuung</h3>
		<div class="more-content-country-section" data-require-visibility-for="thailand" style="word-break: break-word;" id="more-content-thailand-betreuungsumfang" data-section-name="thailand-betreuungsumfang"><p>Nach den zukünftigen Plänen des International Institute for Child Study sollen Kinder von 0 bis 3 Jahren vor allem in den Familien betreut werden, wobei es bei  Bedarf Unterstützung gibt (Erziehungsprogramme, gesundheitliche Interventionen, Tagespflege für Kinder, bei denen beide Eltern arbeiten). ). Kinder im Alter von 4 bis 6 Jahren besuchen in Thailand schon in der Regel frühkindliche Bildungseinrichtungen (Shaeffer, 2018, S. 98).</p>
<p>Betreuung im Alter von 0 bis 3 Jahren ist eher nicht üblich. Die Betreuung in diesem Alter wird zu Hause übernommen, wobei laut UNICEF 13% der 0 bis 3-Jährigen nur eine mangelhafte Pflege in der Familie bekommen  (Shaeffer, 2018, S. 99).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="thailand-qualitätsmanagement" id="more-content-thailand-qualitätsmanagement-heading"><a name="thailand-qualitätsmanagement"></a>Qualitätsmanagement</h3>
		<div class="more-content-country-section" data-require-visibility-for="thailand" style="word-break: break-word;" id="more-content-thailand-qualitätsmanagement" data-section-name="thailand-qualitätsmanagement"><p>Laut UNICEF sind 2012 20% der ECCD-Center von schlechter Qualität, unterbesetzt und schlecht ausgestattet (Shaeffer, 2018, S. 101). Ein gutes Qualitätsmanagement muss erst noch etabliert werden.</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="thailand-kosten" id="more-content-thailand-kosten-heading"><a name="thailand-kosten"></a>Kosten eines Betreuungsplatzes / Soziale Zugänglichkeit zu Betreuungsplätzen</h3>
		<div class="more-content-country-section" data-require-visibility-for="thailand" style="word-break: break-word;" id="more-content-thailand-kosten" data-section-name="thailand-kosten"><p>Frühkindliche Bildungseinrichtungen werden zwar immer mehr von der Regierung gefördert, jedoch muss ein Großteil noch von den Eltern getragen werden. Daher steigt die Anzahl der Kinder, die frühkindliche Bildungseinrichtungen besuchen mit ihrem sozio-ökonomischen Status (Pholphirul, 2017, S. 412). Die Anzahl von Kindern, die eine Einrichtung besucht haben, variiert nach PISA im Jahr 2012 von 84% (Extremely poor) bis 95% (Extremely wealthy) (Pholphirul, 2017, S.416).</p>
<p>12,6% der Bevölkerung lebt unterhalb der Armutsgrenze, 0,1% der Bevölkerung besitzt fast die Hälfte (46,5%) des Vermögens des ganzen Landes. Kinder, die aus diesem reichen Promille stammen, haben eine etwa 16 mal größere Bildungschance als die ärmsten Kinder. Was die soziale Ungleichheit angeht, ist Thailand nach dem Gini Koeffizient (48,4) auf Platz 24 von 145 Ländern (Shaeffer, 2018, S. 96).</p>
<p>Durch die Kitakosten besuchen weniger Kinder Einrichtungen frühkindlicher Bildung, die aus einem Haushalt mit niedrigerem sozio-ökonomischen Status kommen (Pholphirul, 2017, S. 412).  </p>
<p>Dazu gehören auch Kinder, die ein alleinerziehendes Elternteil haben. 88% Kinder mit einem alleinerziehendem Elternteil und 90% Kinder mit beiden Elternteilen besuchen frühkindliche Bildungseinrichtungen (Pholphirul, 2017, S. 416).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="thailand-zuschüsse" id="more-content-thailand-zuschüsse-heading"><a name="thailand-zuschüsse"></a>Zuschüsse für Familien</h3>
		<div class="more-content-country-section" data-require-visibility-for="thailand" style="word-break: break-word;" id="more-content-thailand-zuschüsse" data-section-name="thailand-zuschüsse"><p>Zuschüsse sollen steigen. In öffentlichen Einrichtungen soll das erste Kindergartenjahr voll bezuschusst werden, in privaten Einrichtungen soll es einen Zuschuss von 10% geben, was etwa 70% der privaten Kosten decken würde (Pholphirul, 2017, S. 412). Nach Shaeffer stellt die Regierung pro Kindergartenjahr 1700 Baht (Shaeffer, 2018, S. 99).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="thailand-qualifizierung" id="more-content-thailand-qualifizierung-heading"><a name="thailand-qualifizierung"></a>Qualifizierung (Ausbildung, Abschluss o.ä.)</h3>
		<div class="more-content-country-section" data-require-visibility-for="thailand" style="word-break: break-word;" id="more-content-thailand-qualifizierung" data-section-name="thailand-qualifizierung"><p>Die Fachkräfte in frühkindlichen Einrichtungen werden auch Lehrer genannt. Sie haben eine  5-jährige Berufsausbildung, vorzugsweise in frühkindlicher Entwicklung und werden vom Teachers Council of Thailand lizensiert (Shaeffer, 2018, S. 101).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="thailand-sozioökonomischer-status" id="more-content-thailand-sozioökonomischer-status-heading"><a name="thailand-sozioökonomischer-status"></a>Sozio-ökonomischer Status der Berufsgruppe (Wo liegt das Einkommen im Landesvergleich?)</h3>
		<div class="more-content-country-section" data-require-visibility-for="thailand" style="word-break: break-word;" id="more-content-thailand-sozioökonomischer-status" data-section-name="thailand-sozioökonomischer-status"><p>Erzieher*innen verdienen genauso viel wie Grundschullehrer*innen. Das Gehalt von Lehrer*innen ist jedoch, im Verhältnis zum BIP und im Vergleich zu anderen Ländern sehr gering. So gab Thailand 2010 nur 50,9% der Gesamtausgaben für Bildung für Lehrergehälter aus, 54,5% in Indonesien, 64% in Vietnam, 66,4% in Japan und 75% in Malaysia (siehe Schaubild) (OECD &amp; UNESCO, 2016, S. 69).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="thailand-curriculum" id="more-content-thailand-curriculum-heading"><a name="thailand-curriculum"></a>Curriculum</h3>
		<div class="more-content-country-section" data-require-visibility-for="thailand" style="word-break: break-word;" id="more-content-thailand-curriculum" data-section-name="thailand-curriculum"><p>Das Bild von Früher Bildung scheint recht verschult zu sein. Es wird von „preschool classes“ und „pre-primary students“ gesprochen (Pholphirul, 2017, S. 411–412).</p>
<p><em>„Once in kindergarten, many of the youngsters find that their carefree days, for all practical purposes, are over. It’s now study, study and study some more. Many parents…put their children in tuition schools just so they don’t fall behind their classmates and also to improve their changes of successful entrance into the first grade. Imagine that – children must face the horror of preparing for an entrance exam at the tender age of six!“</em> (Techawongtham, 2015)</p>
<p><em>„A policy that aims to produce human resources to fulfill the needs of the economic sector rather than nurturing ethically and socially responsible citizens for future society. So what we have are educational institutions that operate like factories, turning out products to satisfy the market; or military academies producing obedient troops, instead of being places of learning and enlightment.“</em> (Techawongtham, 2015)</p>
<p>Die Aussage von Techawongtham steht allerdings im Gegensatz zu den Befragungen von Pisa (2012), nachdem thailändische Schüler auf Platz 4 der glücklichsten Schüler sind (Gurría, 2014, S. 21).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="thailand-literatur" id="more-content-thailand-literatur-heading"><a name="thailand-literatur"></a>Literatur</h3>
		<div class="more-content-country-section" data-require-visibility-for="thailand" style="word-break: break-word;" id="more-content-thailand-literatur" data-section-name="thailand-literatur"><p>Fry, G. W. (Ed.). (2018). Education in Thailand: An old Elephant in Search of a New Mahout. Education in the Asia-Pacific Region: Issues, Concerns and Prospects: Vol. 42. Singapore: Springer Singapore.</p>
<p>Gurría, A. (2014). PISA 2012 Results in Focus: What 15-year-olds know and what they can do with what they know. Retrieved from <a href="https://www.oecd.org/pisa/keyfindings/pisa-2012-results-overview.pdfhttps://www.oecd.org/pisa/keyfindings/pisa-2012-results-overview.pdf">https://www.oecd.org/pisa/keyfindings/pisa-2012-results-overview.pdfhttps://www.oecd.org/pisa/keyfindings/pisa-2012-results-overview.pdf</a></p>
<p>OECD, &amp; UNESCO. (2016). Education in Thailand: An OECD-UNESCO Perspektive. Reviews of National Policies for Education. Paris: OECD Publishing.</p>
<p>Pholphirul, P. (2017). Pre-primary education and long-term education performance: Evidence from Programme for International Student Assessment (PISA) Thailand. Journal of Early Childhood Research, 15(4), 410–432. <a href="https://doi.org/10.1177/1476718X15616834">https://doi.org/10.1177/1476718X15616834</a></p>
<p>Shaeffer, S. (2018). Preschool and Primary Education: Thailand’s Progress in Achieving Education for All. In G. W. Fry (Ed.), Education in the Asia-Pacific Region: Issues, Concerns and Prospects: Vol. 42. Education in Thailand: An old Elephant in Search of a New Mahout (pp. 93–124). Singapore: Springer Singapore.</p>
<p>Sukbunpant, S., Arthur-Kelly, M., &amp; Dempsey, I. (2013). Thai preschool teachers' views about inclusive education for young children with disabilities. International Journal of Inclusive Education, 17(10), 1106–1118. <a href="https://doi.org/10.1080/13603116.2012.741146">https://doi.org/10.1080/13603116.2012.741146</a></p>
<p>Techawongtham, W. (2015). Putting humanity back into Thai education. Retrieved from <a href="https://www.bangkokpost.com/opinion/opinion/473848/putting-humanity-back-into-thai-education">https://www.bangkokpost.com/opinion/opinion/473848/putting-humanity-back-into-thai-education</a></p>
<p>(2018). Thailand: Auswärtiges Amt. Retrieved from <a href="https://www.auswaertiges-amt.de/de/aussenpolitik/laender/thailand-node/thailand/201556">https://www.auswaertiges-amt.de/de/aussenpolitik/laender/thailand-node/thailand/201556</a></p>
<p>(2013, December 31). Thailand: Statistics: UNICEF. Retrieved from <a href="https://www.unicef.org/infobycountry/Thailand_statistics.html">https://www.unicef.org/infobycountry/Thailand_statistics.html</a></p>
<p>(2018). Thailand: Bevölkerungsdichte von 2007 bis 2017 (in Einwohner pro Quadratkilometer): Statista. Retrieved from <a href="https://de.statista.com/statistik/daten/studie/747030/umfrage/bevoelkerungsdichte-in-thailand/">https://de.statista.com/statistik/daten/studie/747030/umfrage/bevoelkerungsdichte-in-thailand/</a></p>
<p>(2018). Thailand: Fertilitätsrate von 2006 bis 2016: Statista. Retrieved from <a href="https://de.statista.com/statistik/daten/studie/749281/umfrage/fertilitaetsrate-in-thailand/">https://de.statista.com/statistik/daten/studie/749281/umfrage/fertilitaetsrate-in-thailand/</a></p>
<p>UNESCO Office Bangkok and Regional Bureau for Education in Asia and the Pacific. New horizons: a review of early childhood care and education in Asia and the Pacific; 2016.</p></div>
	</div>
<div>
	<h2 class="more-content-country-heading" data-toggle-for="japan" id="more-content-japan-heading">
		<a name="japan"></a>
		Japan	</h2>
	<div class="more-content-country" id="more-content-japan"  data-section-name="japan">
		<div class="more-content-country-section" data-require-visibility-for="japan" style="word-break: break-word;" id="more-content-japan-allgemein" data-section-name="japan-allgemein"></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="japan-formen-frühkindlicher-bildung" id="more-content-japan-formen-frühkindlicher-bildung-heading"><a name="japan-formen-frühkindlicher-bildung"></a>Formen der frühkindlichen Bildung</h3>
		<div class="more-content-country-section" data-require-visibility-for="japan" style="word-break: break-word;" id="more-content-japan-formen-frühkindlicher-bildung" data-section-name="japan-formen-frühkindlicher-bildung"><p>In Japans Frühkindlicher Bildungslandschaft bestehen drei verschiedene Formen. Am längsten haben die Yochien und Hoikuen Tradition. </p>
<p><strong><em>Yochien</em></strong>. Yochien leitet sich vom japanischen „Youji kyouiku“ ab, was so viel wie „Frühkindliche Bildung und Erziehung“ bedeutet (Imoto 2007), in der Literatur wird es mit dem deutschen Wort Kindergarten oder Vorschule übersetzt (Tabu o.J.; Stenger 2017). </p>
<p><strong><em>Hoikuen</em></strong>. Hoikuen (japanisch hoiku=Kinderbetreuung) (Imoto 2007)) werden mit Kindertagesstätte übersetzt (Tabu o.J.).</p>
<p><strong><em>Nintei-Kodomoen</em></strong>. Die dritte Form der frühkindlichen Betreuung, die Nintei-Kodomoen, wurden erst 2006 auf Grundlage des Gesetzes für gemeinsame Kinderbetreuung und Bildung errichtet (Imoto 2007). Nintei-Kodomoen sind eine Zusammenlegung aus Yochien und Hoikuen, die die beiden Aspekte der ganztägigen Kinderbetreuung der Hoikuen mit dem Bildungsansatz der Yochien verbinden sollen.</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="japan-politischer-entscheidungsträger" id="more-content-japan-politischer-entscheidungsträger-heading"><a name="japan-politischer-entscheidungsträger"></a>Politischer Entscheidungsträger</h3>
		<div class="more-content-country-section" data-require-visibility-for="japan" style="word-break: break-word;" id="more-content-japan-politischer-entscheidungsträger" data-section-name="japan-politischer-entscheidungsträger"><p><strong><em>Yochien</em></strong>. Gegründet wurden die Yochien auf Basis des School Education Law von 1947 (Imoto 2007), der politische Entscheidungsträger ist das Ministerium für Bildung, Kultur, Sport, Wissenschaft und Technologie (MEXT).</p>
<p><strong><em>Hoikuen</em></strong>. Sie wurden auf Basis des Kinderwohlfahrtsgesetzes von 1947 und 1997 errichtet (Imoto 2007) und sind dem Ministerium für Gesundheit und Fürsorge (MLHW) untergeordnet.</p>
<p><strong><em>Nintei-Kodomoen</em></strong>. Zuständig für die Nintei-Kodomoen sind sowohl das Ministerium für Bildung, Kultur, Sport, Wissenschaft und Technologie als auch das Ministerium für Gesundheit und Fürsorge. Der Prozess der Zusammenlegung von Hoikuen und Yochien ist allerdings lange noch nicht abgeschlossen, so dass die Nintei-Kodomoen noch deutlich in der Unterzahl sind (Stenger 2017, Statistics Bureau).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="japan-eintrittsalter" id="more-content-japan-eintrittsalter-heading"><a name="japan-eintrittsalter"></a>Eintrittsalter Betreuung / Betreuungsumfang pro Woche</h3>
		<div class="more-content-country-section" data-require-visibility-for="japan" style="word-break: break-word;" id="more-content-japan-eintrittsalter" data-section-name="japan-eintrittsalter"><p><strong><em>Yochien</em></strong>. In den Yochien werden Kinder von drei bis sechs Jahren meist für vier Stunden am Vormittag betreut (Tabu o.J.). Vorrangig wohlhabende Familien leisten sich die Yochien, aufgrund der kurzen Betreuungsdauer können Mütter meist nicht arbeiten gehen (Hedge et al. 2013). </p>
<p><strong><em>Hoikuen</em></strong>. Hoikuen sind ganztags geöffnet (mindestens 8 Stunden, meist länger) und nur zugänglich für Familien, wenn beide Elternteile arbeiten. Es werden Kinder von null bis sechs Jahren aufgenommen (Tabu o.J.). In den Hoikuen steht die Betreuung der Kinder im Fokus, Unterricht wie in den Yochien findet meistens nicht statt (Stenger 2017). </p>
<p><strong><em>Nintei-Kodomoen</em></strong>. Kinder von null bis sechs können in ein Nintei-Kodomoen gehen (Tabu o.J.). </p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="japan-curriculum" id="more-content-japan-curriculum-heading"><a name="japan-curriculum"></a>Curriculum / Bild vom Kind</h3>
		<div class="more-content-country-section" data-require-visibility-for="japan" style="word-break: break-word;" id="more-content-japan-curriculum" data-section-name="japan-curriculum"><p>Das MEXT beschreibt das Ziel der Yochien wie folgt:  „Kindergartens aim at helping pre-school children develop their mind and body by providing a sound educative environment for them. Kindergartens cater for children aged 3, 4 and 5, and provide them with one- to three-year courses.“ (MEXT). In den Yochien steht meist in Form von Unterricht die Leistungsförderung der Kinder im Fokus. Allerdings können die pädagogischen Konzepte stark variieren und es gibt auch Yochien, in denen ein kindzentrierter Ansatz mit experimentierfreudigen Angeboten den Kindergartenalltag bestimmt (Tabu o.J.).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="japan-literatur" id="more-content-japan-literatur-heading"><a name="japan-literatur"></a>Literatur</h3>
		<div class="more-content-country-section" data-require-visibility-for="japan" style="word-break: break-word;" id="more-content-japan-literatur" data-section-name="japan-literatur"><p>Hedge, A. V. et al. (2014): Japanese nursery and kindergarten teachers’ beliefs and practices regarding developmentally appropriate practices. <em>International Journal of Early Years Education, 22</em>(3), 301-314.</p>
<p>Imoto, Y. (2007). The japanese preschool system in transition. <em>Research in Comparative and International Education 2</em>(2), 88-102.</p>
<p>MEXT. Overview. Verfügbar unter: <a href="http://www.mext.go.jp/en/policy/education/overview/index.htm">http://www.mext.go.jp/en/policy/education/overview/index.htm</a>, letzter Zugriff am 17.01.2019.</p>
<p>Statistics Bureau (2019). <em>School Education</em>. Verfügbar unter: <a href="http://www.stat.go.jp/english/data/nenkan/67nenkan/1431-25.html">http://www.stat.go.jp/english/data/nenkan/67nenkan/1431-25.html</a>, letzter Zugriff am: 17.01.2019.</p>
<p>Stenger, U. (2017): <em>Frühkindliches Bildungssystem und Bildungsforschung in Japan</em>. Verfügbar unter: <a href="https://www.kita-fachtexte.de/texte-finden/detail/data/fruehkindliches-bildungssystem-und-bildungsforschung-in-japan/">https://www.kita-fachtexte.de/texte-finden/detail/data/fruehkindliches-bildungssystem-und-bildungsforschung-in-japan/</a>, letzter Zugriff am 15.11.2018.</p>
<p>Tabu, M. (o. J.). <em>Ein Blick auf Japans System der frühkindlichen Bildung, Betreuung und Erziehung</em>. Verfügbar unter: <a href="https://www.dji.de/fileadmin/user_upload/icec/Interviews/Japans%20System%20der%20FBBE_Prof.%20Mikiko%20Tabu_final.pdf">https://www.dji.de/fileadmin/user_upload/icec/Interviews/Japans%20System%20der%20FBBE_Prof.%20Mikiko%20Tabu_final.pdf</a>, letzter Zugriff am: 15.11.2018.</p></div>
	</div>
<div>
	<h2 class="more-content-country-heading" data-toggle-for="tansania" id="more-content-tansania-heading">
		<a name="tansania"></a>
		Tansania	</h2>
	<div class="more-content-country" id="more-content-tansania"  data-section-name="tansania">
		<div class="more-content-country-section" data-require-visibility-for="tansania" style="word-break: break-word;" id="more-content-tansania-allgemein" data-section-name="tansania-allgemein"><p>Tansania ist ein sehr armes Land, in dem ein Großteil der Bevölkerung unter Hungersnot leidet. Mehr als 2 Mio. Menschen haben eine Mangelernährung. Jedes Jahr sterben 200,000 Kinder unter 5 Jahren (Anderson &amp; Sayre, 2016). Die Schere zwischen Arm und Reich ist dort sehr groß und somit zeigt sich auch ein großer Unterschied in den frühkindlichen Bildungseinrichtungen in Tansania. Vor allem ist ein großer Unterschied zwischen Stadt und Land zu erkennen. </p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="tansania-politischer-entscheidungsträger" id="more-content-tansania-politischer-entscheidungsträger-heading"><a name="tansania-politischer-entscheidungsträger"></a>Politischer Entscheidungsträger / zuständigkeit</h3>
		<div class="more-content-country-section" data-require-visibility-for="tansania" style="word-break: break-word;" id="more-content-tansania-politischer-entscheidungsträger" data-section-name="tansania-politischer-entscheidungsträger"><p>Das Bildungssystem hat sich seit 1961, seit der Unabhängigkeit von Großbritannien, in Tansania stark verändert. Es fand eine große Reform statt, aber da Tansanias Regierung aufgrund des unstabilen ökonomischen Status nicht genug finanzielle Mittel besaß wurde der Bildungssektor für private Institutionen geöffnet. In Tansania sollen Kinder frühzeitig Mitglieder der Gesellschaft werden und somit beenden die meisten Kinder nach Abschluss der Grundschule bereits wieder die Schullaufbahn. </p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="tansania-eintrittsalter" id="more-content-tansania-eintrittsalter-heading"><a name="tansania-eintrittsalter"></a>Eintrittsalter Betreuung</h3>
		<div class="more-content-country-section" data-require-visibility-for="tansania" style="word-break: break-word;" id="more-content-tansania-eintrittsalter" data-section-name="tansania-eintrittsalter"><p>Die Vorschule ist seit einigen Jahren in Tansania Pflicht und beginnt ab 5 Jahren. Es kommt häufiger vor, dass dort auch Kinder bis zu einem Alter von acht oder neun Jahren zu finden sind, da Kinder, die das geforderte Vorwissen in der Grundschule nicht mitbringen, zurückgestuft werden (Deutscher Caritasverband e.V. Mollel, S., 2016). Dabei besuchen 95 % öffentliche Einrichtungen. </p>
<p>Betreuungsschlüssel</p>
<p>Es ist eine Klassengröße festgeschrieben auf 1:25. Diese wird meist übertroffen in öffentlichen Einrichtungen. Der Durchschnitt liegt bei 1:77 (Anderson &amp; Sayre, 2016). </p>
<p>Wie viele Kinder besuchen die Schule? In 2016 wurden 45,4 % der registrierten Kinder eingeschult. Hierbei ist es wichtig zu wissen, dass es zwar die Vorschrift gibt, dass die Kinder nach der Geburt registriert werden, dennoch wird eine hohe Anzahl nicht registriert, da man dafür in eine größere Stadt fahren muss und das für einige Familien, die im ländlichen Raum leben, oder umherziehende Familien nicht möglich ist. Bei der Grundschule ist die Zahl deutlich höher (nahezu 100%), da es dafür auch mehr Einrichtungen gibt (Mligo, 2018). </p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="tansania-qualifizierung" id="more-content-tansania-qualifizierung-heading"><a name="tansania-qualifizierung"></a>Qualifizierung (Ausbildung, Abschluss o.ä.)</h3>
		<div class="more-content-country-section" data-require-visibility-for="tansania" style="word-break: break-word;" id="more-content-tansania-qualifizierung" data-section-name="tansania-qualifizierung"><p>Bis 1990 unterrichteten meist unausgebildete Lehrer. Seitdem wurde die Ausbildung der Lehrer stark verbessert. Auch in frühkindlichen Bildungseinrichtungen wird in Tansania bereits von Lehrern gesprochen, da die Kinder neben dem Spiel auch schon früh Unterricht in Englisch, Mathe, Lesen und Schreiben bekommen. Damit soll die Möglichkeit einer erfolgreichen Grundschullaufbahn erhöht werden (Jambo Bukoba e.V., 2015).</p>
<p>Formen der Betreuung</p>
<p>Wie sind die Lehrer qualifiziert? Vorgesehen ist, dass Lehrer ein zweijähriges Lehrercollege besuchen. Da aber ein großer Lehrermangel herrscht und diese Ausbildung auch erst nach den 1990er Jahren festgeschrieben wurde hat ein Großteil der Lehrer nicht diese Ausbildung durchlaufen (Anderson &amp; Sayre, 2016).</p>
<p>47 % der Lehrer haben ein Grade A Zertifikat, was ihnen bescheinigt, dass sie das Lehrer College für 2 Jahre durchlaufen haben und sie für die Grundschule qualifiziert sind. 3,7 % haben ein Diplom Abschluss, eine Ausbildung von 2 Jahren, welche sie berechtigt an einer weiterführenden Schule zu unterrichten. 1,4 % haben einen Universitätsabschluss. Aber 51 % können dort nicht eingeordnet werden. Vermutlich sind das Lehrer, die keine Lehrerausbildung durchlaufen haben. Oft ist es ausreichend einen Abschluss an einer weiterführenden Schule zu haben, um unterrichten zu dürfen (Mosha, 2017). </p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="tansania-soziale-zugänglichkeit" id="more-content-tansania-soziale-zugänglichkeit-heading"><a name="tansania-soziale-zugänglichkeit"></a>Soziale Zugänglichkeit zu Betreuungsplätzen</h3>
		<div class="more-content-country-section" data-require-visibility-for="tansania" style="word-break: break-word;" id="more-content-tansania-soziale-zugänglichkeit" data-section-name="tansania-soziale-zugänglichkeit"><p>Wie oben schon beschrieben, gibt es nicht überall ausreichend Schulen auf dem Land. Dies liegt auch daran, dass es oft den Gemeinden überlassen wird diese aufzubauen und zu finanzieren. Zuständig ist eigentlich das Ministerium für Bildung in Tansania, aber oft fehlen die finanziellen Mittel. Deswegen ist ein Grund, warum einige Schüler wenig oder gar nicht die Vorschule oder auch später die Schule besuchen die Erreichbarkeit, da der Weg zu weit ist. Weitere Gründe gegen den Besuch von Bildungseinrichtungen sind, dass Eltern die Wichtigkeit der Schule nicht sehen und es zu wenig Unterstützung durch die Regierung gibt. Der sozio-ökonomische Status von Familien ist von Bedeutung, da finanzielle Mittel nötig sind, für zum Beispiel Bücher und die Schuluniform. Ohne Uniform dürfen die Schüler die Einrichtungen nicht betreten. Es kommt oft vor, dass Kinder als Unterstützung der Familie zu Hause gebraucht werden. Auch kulturelle Normen und Werte hindern manche Familien daran ihre Kinder zur Schule zu schicken (Mligo, 2018). </p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="tansania-�how-are-children-seen-in-your-society-wie-werden-kinder-in-deiner-gesellschaft-gesehen-�" id="more-content-tansania-�how-are-children-seen-in-your-society-wie-werden-kinder-in-deiner-gesellschaft-gesehen-�-heading"><a name="tansania-�how-are-children-seen-in-your-society-wie-werden-kinder-in-deiner-gesellschaft-gesehen-�"></a>“How are children seen in your society? Wie werden Kinder in deiner Gesellschaft gesehen?“</h3>
		<div class="more-content-country-section" data-require-visibility-for="tansania" style="word-break: break-word;" id="more-content-tansania-�how-are-children-seen-in-your-society-wie-werden-kinder-in-deiner-gesellschaft-gesehen-�" data-section-name="tansania-�how-are-children-seen-in-your-society-wie-werden-kinder-in-deiner-gesellschaft-gesehen-�"><p>Gefragt wurde eine Deutsche, die ihr Praktikum in einer Grundschule in Tansania absolvierte und bei einer Familie vor Ort lebte. </p>
<p>Zum einen sind Kinder ein Statussymbol und eine Bereicherung für Familie. Die Familien haben viele Kinder und alle werden geliebt. Die Kinder sollen die Ehre der Familie hoch halten und dabei wird kein Unterschied zwischen Mädchen und Jungen gemacht. </p>
<p>Andererseits haben die Kinder keine Kindheit. Trotz Schulpflicht müssen sie frühzeitig raus, um zu arbeiten oder weil die Familien zu arm sind, um die Kinder dahin zu schicken (Transport, Schuluniform (ohne darf es nicht). Das Schlagen in der Schule ist normal (mit Stöcken). Der Schulalltag beginnt damit, dass die Kinder morgens Feuerholz mitbringen auf dem Schulweg,  damit das Essen machen möglich ist.  </p>
<p>Kinder müssen gehorchen, sich fügen, die Familie unterstützen, arbeiten und diese mit ernähren. Es gibt keine Eigenaktivität. Die Schule ist davon geprägt, dass der Lehrer Wissen eintrichtert (Trichtermodell).</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="tansania-literatur" id="more-content-tansania-literatur-heading"><a name="tansania-literatur"></a>Literatur</h3>
		<div class="more-content-country-section" data-require-visibility-for="tansania" style="word-break: break-word;" id="more-content-tansania-literatur" data-section-name="tansania-literatur"><p>Anderson, K., &amp; Sayre, R. (2016). <em>Measuring Early Learning Quality and Outcomes in Tanzania</em>. Centre for Universal Education</p>
<p>Deutscher Caritasverband e.V. Mollel, S. (2016). <em>Tansania: Frühkindliche Neugierde fördern</em>. Verfügbar unter: <a href="https://www.caritas-international.de/hilfeweltweit/afrika/tansania/vorschule-erziehung">https://www.caritas-international.de/hilfeweltweit/afrika/tansania/vorschule-erziehung</a> (Zugriff am 10.11. 2018) </p>
<p>Jambo Bukoba e.V. (2015). <em>Wie funktioniert das Bildungssystem in Tansania</em>. Verfügbar unter: <a href="https://www.jambobukoba.com/wie-funktioniert-bildungsystem-in-tansania-genau/">https://www.jambobukoba.com/wie-funktioniert-bildungsystem-in-tansania-genau/</a> (Abruf 10.11.2018)</p>
<p>Mligo, I. (2018). Enhancing Young Children’s Access to Early Childhood Education and Care in Tanzania. In Ş. Çetinkaya (Hrsg.), <em>Contemporary Perspective on Child Psychology and Education</em>. InTech. <a href="https://doi.org/10.5772/intechopen.71265">https://doi.org/10.5772/intechopen.71265</a></p>
<p>Mosha, M. (2017). <em>Challenges of teacher education in Tanzania</em>. Verfügbar unter: <a href="https://www.pambazuka.org/education/challenges-teacher-education-tanzania">https://www.pambazuka.org/education/challenges-teacher-education-tanzania</a> (Zugriff am 10.11. 2018)</p></div>
	</div>
<div>
	<h2 class="more-content-country-heading" data-toggle-for="finnland" id="more-content-finnland-heading">
		<a name="finnland"></a>
		Finnland	</h2>
	<div class="more-content-country" id="more-content-finnland"  data-section-name="finnland">
		<div class="more-content-country-section" data-require-visibility-for="finnland" style="word-break: break-word;" id="more-content-finnland-allgemein" data-section-name="finnland-allgemein"><p>Das frühkindliche Bildungssystem in Finnland weist viele Aspekte auf, die auch in Deutschland Berücksichtigung finden und macht einen Vergleich der Länder somit besonders interessant.</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="finnland-betreuungsquote" id="more-content-finnland-betreuungsquote-heading"><a name="finnland-betreuungsquote"></a>Betreuungsquote</h3>
		<div class="more-content-country-section" data-require-visibility-for="finnland" style="word-break: break-word;" id="more-content-finnland-betreuungsquote" data-section-name="finnland-betreuungsquote"><p>Im Jahr 2016 betrug der Anteil der Kinder unter 7 Jahren an der gesamten finnischen Bevölkerung ca. 7,2%. Das entspricht etwa 400.000 Kindern, wovon ungefähr 170.000 unter drei Jahre alt waren. Die Inanspruchnahme von Betreuung für Kinder hat sich in Finnland zwischen 2005 und 2015 kontinuierlich gesteigert, zählt allerdings, laut der Expertenmeinung von Eeva-Leena Onnismaa, noch zu einer der aktuellen Herausforderungen im finnischen frühkindlichen Bildungssystem. Trotzdem waren 2015 ungefähr 24,6% der unter-drei-Jährigen und 59,6% der Drei- bis Siebenjährigen mehr als 30 Stunden pro Woche in Betreuung. Im Vergleich dazu befanden sich 67,4% der Unter-Dreijährigen und 17,2% der Drei- bis Siebenjährigen nicht in Betreuung. </p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="finnland-formen-frühkindlicher-bildung" id="more-content-finnland-formen-frühkindlicher-bildung-heading"><a name="finnland-formen-frühkindlicher-bildung"></a>Formen der frühkindlichen Bildung</h3>
		<div class="more-content-country-section" data-require-visibility-for="finnland" style="word-break: break-word;" id="more-content-finnland-formen-frühkindlicher-bildung" data-section-name="finnland-formen-frühkindlicher-bildung"><p>Wenn außerhäusliche Betreuung und Bildung für Kinder vor der Schule in Anspruch genommen werden, dann in kommunalen Tageseinrichtungen, privaten Tageseinrichtungen, in kommunaler Tagespflege oder in privater Tagespflege. Der Rechtsanspruch auf einen Betreuungsplatz für Kinder unter sieben Jahren besteht seit 1996. </p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="finnland-zugänglichkeit" id="more-content-finnland-zugänglichkeit-heading"><a name="finnland-zugänglichkeit"></a>zugänglichkeit / Betreuungsumfang pro Woche</h3>
		<div class="more-content-country-section" data-require-visibility-for="finnland" style="word-break: break-word;" id="more-content-finnland-zugänglichkeit" data-section-name="finnland-zugänglichkeit"><p>Die Kommunen verantworten die Bereitstellung der Plätze. Hierbei werden besonders erwerbstätige und/oder in Vollzeit studierende Eltern berücksichtigt, denen Vollzeitbetreuungsplätze für ihre Kinder zur Verfügung gestellt werden. Privat betreuende oder erwerbslose Eltern können ihr Kind für 20 Stunden pro Woche – z.B. an 5 Tagen á 4 Stunden oder 2 Tage á 10 Stunden – in einer Einrichtung, in Tagespflege oder einer Spielgruppe unterbringen.</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="finnland-eintrittsalter" id="more-content-finnland-eintrittsalter-heading"><a name="finnland-eintrittsalter"></a>Eintrittsalter Betreuung / Wie verbindlich ist der Besuch dieser Einrichtungen?</h3>
		<div class="more-content-country-section" data-require-visibility-for="finnland" style="word-break: break-word;" id="more-content-finnland-eintrittsalter" data-section-name="finnland-eintrittsalter"><p>Der Besuch der einjährigen Vorschule im Alter von 6 Jahren ist seit August 2015 verpflichtend, allerdings besuchten zuvor ohnehin 98% der Sechs-jährigen die Vorschule. Ab 7 Jahren besteht die normale Schulpflicht. Über den Besuch einer Betreuungseinrichtung vor der Vorschule können Eltern ab dem 9. bzw. 10. Lebensmonat des Kindes entscheiden.</p>
<p>Kommunale Kindertageseinrichtungen werden von Kindern zwischen null bis sieben Jahren, entweder halbtags (5 Stunden) oder ganztags (10 Stunden), besucht. Die Tagespflege richtet sich ebenfalls an Kinder im Alter von zehn Monaten bis sieben Jahren und ist entweder kommunal oder privat für Eltern, die Betreuungsgeld erhalten. Spielgruppen hingegen sind offene Kurzzeit-Programme, die von kirchlichen oder gemeinnützigen Organisationen angeboten werden. Hier variieren jedoch sowohl die Häufigkeit des Angebots (manche z.B. nur an drei Tagen pro Woche), als auch die curricularen und pädagogischen Standards.  </p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="finnland-politischer-entscheidungsträger" id="more-content-finnland-politischer-entscheidungsträger-heading"><a name="finnland-politischer-entscheidungsträger"></a>Politischer Entscheidungsträger / Träger? Wer ist zuständig?</h3>
		<div class="more-content-country-section" data-require-visibility-for="finnland" style="word-break: break-word;" id="more-content-finnland-politischer-entscheidungsträger" data-section-name="finnland-politischer-entscheidungsträger"><p>Gerade Hinsichtlich des Curriculums gelten abseits der Spielgruppen spezifische Vorgaben. Das nationale curriculare Rahmenwerk wurde zuletzt im August 2017 reformiert, ist nun gesetzlich bindend, während es zuvor eher Empfehlungen waren, und baut auf den zwei Grundsätzen der „Chancengleichheit für alle“ und der „Bildung als Grundrecht aller Bürger“ auf. Das „nationale Kerncurriculum für frühkindliche Bildung und Betreuung“ entstand im Rahmen einiger struktureller Veränderung im finnischen Bildungssystem. </p>
<p>So ist die frühkindliche Bildung bspw. nicht mehr Teil des Wohlfahrtsystems, sondern ein integriertes Bildungssystem. Das Ministerium für Bildung und Kultur trägt die Verantwortung für Kindertageseinrichtungen und Kindertagespflege und in Zusammenarbeit mit der Bildungsagentur wird über Ziele, Inhalte und Methoden für den frühpädagogischen Bereich entschieden. Kommunalen und privaten Trägern obliegen Organisation und Management der Kindertagesbetreuung. Die rechtliche Grundlage für den vorschulischen Bereich bildeten ursprünglich das Kinderbetreuungsgesetz von 1973 und das Grundbildungsgesetz von 1998. Sie wurden jedoch, ebenfalls im Rahmen der strukturellen Veränderungen, 2015 unter dem Namen „Gesetz zur frühkindlichen Bildung und Betreuung“ zusammengeführt und reformiert.</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="finnland-curriculum" id="more-content-finnland-curriculum-heading"><a name="finnland-curriculum"></a>Curriculum</h3>
		<div class="more-content-country-section" data-require-visibility-for="finnland" style="word-break: break-word;" id="more-content-finnland-curriculum" data-section-name="finnland-curriculum"><p>Das nationale Kerncurriculum für frühkindliche Bildung und Betreuung fokussiert die 5 Lernbereiche: Die Welt der Sprache, Künstlerischer Ausdruck, Ich und meine Gemeinschaft, Das Erforschen meiner Umgebung sowie Aufwachsen und Entwicklung in Bewegung. Das schlussendlich spezifische Bildungsprogramm kommt dennoch immer von der jeweiligen Einrichtung. Das „nationale Kerncurriculum für Vorschulbildung“ von 2016 macht im Vergleich hierzu eher weniger spezifische Angaben. In dieser Lernphase soll es vor allem um Prinzipien, die die Individualität des Kindes betonen, die Bedeutung des aktiven Lernens, das Gemeinschaftsgefühl, spielbasiertes und kindzentriertes Lernen und um eine positive Sicht auf das Leben gehen. </p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="finnland-finanzierung" id="more-content-finnland-finanzierung-heading"><a name="finnland-finanzierung"></a>Finanzierung (Wer muss die Ressourcen bereitstellen?) / Zuschüsse für Familien</h3>
		<div class="more-content-country-section" data-require-visibility-for="finnland" style="word-break: break-word;" id="more-content-finnland-finanzierung" data-section-name="finnland-finanzierung"><p>Finnland investiert ca. 7,2 des gesamten finnischen Bruttoinlandsproduktes (Stand 2014) in öffentliche Bildungsausgaben. Somit sind bspw. auch 700 Stunden vorschulische Bildung pro sechs-jährigem Kind kostenfrei, was vier bis fünf Stunden am Tag entspricht. Außerdem wird Kindern, die weiter als 5 km von ihrer Vorschuleinrichtung entfernt leben, ein kostenloser Transport garantiert. Vorschulklassen sind in Tageseinrichtungen oder Grundschulen integriert. Eltern nehmen für eine Vollzeitbetreuung hierzu meist zusätzliche Betreuung in Anspruch, die nicht selten am selben Ort, teils mit demselben Personal stattfindet. Die weiteren Betreuungsstunden sind allerdings kostenpflichtig – die Beiträge richten sich nach der Größe der Familie, dem Einkommen der Eltern und der Anzahl der Betreuungsstunden.</p>
<p>Generell ist auch in Finnland die Betreuung bei privaten Anbietern teurer als bei kommunalen. Die Entscheidung über die Höhe des Beitrages liegt in der Verantwortung der privaten Träger. Die Elternbeiträge für einkommensschwache Haushalte wurden zuletzt (2016) übereinstimmend gesenkt. Über Elternbeiträge können im Schnitt 14% der Betriebskosten einer Einrichtung gedeckt werden. Private Träger gewinnen in Finnland zunehmend an Bedeutung. Sie werden in der Regel vermittelt, wenn kommunale Träger nicht ausreichend Plätze bereitstellen können. Öffentlich subventionierte, private Tageseinrichtungen wurden 2016 von knapp 14,2% aller betreuten Kinder in Anspruch genommen. Meist können mehr als die Hälfte der Kinder an kommunale Einrichtungen vermittelt werden.</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="finnland-inklusion" id="more-content-finnland-inklusion-heading"><a name="finnland-inklusion"></a>Inklusionsansatz</h3>
		<div class="more-content-country-section" data-require-visibility-for="finnland" style="word-break: break-word;" id="more-content-finnland-inklusion" data-section-name="finnland-inklusion"><p>Kinder mit „besonderen Bedürfnissen“, wie es im Rahmenwerk heißt, haben Anspruch auf einen Platz in einer Regeleinrichtung in der Nähe ihres Wohnortes. Außerdem besteht auch ein gesetzlicher Förderanspruch. Sowohl integrative Gruppen (5 Kinder mit b.B. und 7 Kinder ohne Förderstatus), als auch separate Gruppen (6-8 Kinder mit b.B.) werden von einer Förderfachkraft, einer Kindergartenlehrkraft und einer Kinderkrankenschwester betreut.</p>
<p>Circa. 4,4% der Gesamtbevölkerung Finnlands sind nicht-finnischer Abstammung. In den Einrichtungen wird zumeist finnisch, sami oder schwedisch gesprochen. Unterstützungsangebote, die jedoch keiner einheitlichen Kontrolle unterliegen, begleiten die Integration von Kindern anderer Herkünfte und/oder Sprachen.</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="finnland-gruppenstruktur" id="more-content-finnland-gruppenstruktur-heading"><a name="finnland-gruppenstruktur"></a>Gruppenstruktur und -größe / Personalschlüssel</h3>
		<div class="more-content-country-section" data-require-visibility-for="finnland" style="word-break: break-word;" id="more-content-finnland-gruppenstruktur" data-section-name="finnland-gruppenstruktur"><p>Hinsichtlich der Fachkraft-Kind-Relationen in den Betreuungseinrichtungen gilt, dass maximal nur so viele Kinder in eine Gruppe sein sollen, wie für drei Fachkräfte zugelassen ist. Die Vorgaben sind gesetzlich geregelt. So ist für den U3-Bereich ein Personalschlüssel von 1:4 und für den U6-Bereich ein Personalschlüssel von 1:8 vorgesehen. Im Curricular wird jedoch eigentlich in drei Gruppen unterschieden: Kinder von 0-3 Jahre, von 3-6 Jahre und Vorschulkinder 6-7 Jahre. Die neuen Regelungen zum Personalschlüssel sind nicht von allen Kommunen übernommen worden!</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="finnland-qualifizierung" id="more-content-finnland-qualifizierung-heading"><a name="finnland-qualifizierung"></a>Qualifizierung (Ausbildung, Abschluss o.ä.)</h3>
		<div class="more-content-country-section" data-require-visibility-for="finnland" style="word-break: break-word;" id="more-content-finnland-qualifizierung" data-section-name="finnland-qualifizierung"><p>Die Umstrukturierung des pädagogischen Fachpersonals stellt laut der Expertin Onnismaa ebenfalls eine aktuelle Herausforderung im finnischen Bildungssystem der frühen Kindheit dar. Hier sollen in Zukunft 40% vollqualifizierte päd. Fachkräfte beschäftigt werden, während nur noch 60% aus Sozialarbeit und Kinderpflege kommen sollen. Im Jahr 2016 belief sich der Anteil Letzterer noch auf 80%. </p>
<p>In Finnland waren 2012 ca. 30% der Fachkräfte in Betreuungseinrichtungen Hochschulabsolventen. Im Vergleich hierzu waren es in Deutschland 2016 gerade einmal 5,3%. Einen einschlägigen, berufsbildenden Sekundarstufenabschluss besaßen in Finnland 2012 ca. 70%. Von allen Beschäftigten waren 2,1% Männer – 6,3% davon jedoch in Verwaltung tätig. Personal in frühpädagogischen Einrichtungen war im selben Jahr im Durschnitt 47,5 Jahre alt. Es lässt sich jedoch nicht genau feststellen, welches Personal für die Angaben berücksichtigt wurde. </p>
<p>Das pädagogische Fachpersonal besitzt zudem unterschiedliche Professionsprofile, die die Fokussierung auf eine bestimmte Altersspanne voraussetzen. Hier unterscheiden sich z.B. die frühpädagogische Fachkraft (Fokus 0-6 Jahre) von der vor- und grundschulpädagogischen Fachkraft (3/4 Jahre bis 10/11 Jahre) und der sozial- und kindheitspädagogischen Fachkraft (0-12 Jahre, und auch Erwachsene). </p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="finnland-qualtitätsmanagement" id="more-content-finnland-qualtitätsmanagement-heading"><a name="finnland-qualtitätsmanagement"></a>Qualtitätsmanagement</h3>
		<div class="more-content-country-section" data-require-visibility-for="finnland" style="word-break: break-word;" id="more-content-finnland-qualtitätsmanagement" data-section-name="finnland-qualtitätsmanagement"><p>Im Bereich des Monitoring und Qualitätsmanagements frühkindlicher Bildung existieren keine einheitlichen Vorgaben. Kommunen tragen die Verantwortung für ihre Selbstevaluation. Letztere werden auch über ihr Budget verwaltet. Die nationale Bildungsagentur wacht lediglich über die Evaluation nationaler Einrichtungen. Die Führung eines Entwicklungsplans für Kinder ist verpflichtend, externe Überprüfungen erfolgen jedoch oft nur in Verdachtsfällen von Nichteinhaltung spezifischer Vorgaben.</p></div>
		<h3 class="more-content-country-section-heading" data-toggle-for="finnland-literatur" id="more-content-finnland-literatur-heading"><a name="finnland-literatur"></a>Literatur</h3>
		<div class="more-content-country-section" data-require-visibility-for="finnland" style="word-break: break-word;" id="more-content-finnland-literatur" data-section-name="finnland-literatur"><p>Schreyer, I. &amp; P. Oberhuemer. (2017). „Finnland – Kontextuelle Schlüsseldaten.“ In: <em>Personal-profile in Systemen der frühkindlichen Bildung, Erziehung und Betreuung in Europa</em>, herausgegeben von I. Schreyer und P. Oberhuemer. </p>
<p>Onnismaa, E.-L. (2017). „Frühpädagogisches Personal – Länderbericht Finnland“. In <em>Personal-profile in Systemen der frühkindlichen Bildung, Erziehung und Betreuung in Europa</em>, herausgegeben von I. Schreyer und P. Oberhuemer.</p></div>
	</div>
</div>


<h2>Literaturangaben</h2>

<ol type="1" style="word-break: break-word;">
	<li><a name="quelle-1"></a><a href="https://de.wikipedia.org/wiki/Australien">https://de.wikipedia.org/wiki/Australien</a></li>
	<li><a name="quelle-2"></a><a href="https://www.laenderdaten.info/Europa/Frankreich/index.php">https://www.laenderdaten.info/Europa/Frankreich/index.php</a></li>
	<li><a name="quelle-3"></a><a href="https://www.iceland.is/iceland-abroad/de/informationen-uber-island">https://www.iceland.is/iceland-abroad/de/informationen-uber-island</a></li>
	<li><a name="quelle-4"></a><a href="https://www12.statcan.gc.ca/census-recensement/2016/dp-pd/prof/details/page.cfm?Lang=E&amp;Geo1=PR&amp;Code1=01&amp;Geo2=PR&amp;Code2=01&amp;Data=Count&amp;SearchText=Canada&amp;SearchType=Begins&amp;SearchPR=01&amp;TABID=1&amp;B1=All">https://www12.statcan.gc.ca/census-recensement/2016/dp-pd/prof/details/page.cfm?Lang=E&amp;Geo1=PR&amp;Code1=01&amp;Geo2=PR&amp;Code2=01&amp;Data=Count&amp;SearchText=Canada&amp;SearchType=Begins&amp;SearchPR=01&amp;TABID=1&amp;B1=All</a></li>
	<li><a name="quelle-5"></a><a href="https://www.laenderdaten.info/laendervergleich.php?country1=NZL&amp;country2=DEU">https://www.laenderdaten.info/laendervergleich.php?country1=NZL&amp;country2=DEU</a></li>
	<li><a name="quelle-6"></a>Auswärtiges Amt (Stand Nov. 2018)</li>
	<li><a name="quelle-7"></a><a href="http://www.asien-daten.de/Japen_Flaeche.htm">http://www.asien-daten.de/Japen_Flaeche.htm</a></li>
	<li><a name="quelle-8"></a><a href="https://www.auswaertiges-amt.de/de/aussenpolitik/laender/tansania-node/tansania/208660">https://www.auswaertiges-amt.de/de/aussenpolitik/laender/tansania-node/tansania/208660</a>  20.11. 18</li>
	<li><a name="quelle-9"></a>Schreyer, I. &amp; Oberhuemer, P. (2017). Finnland – Kontextuelle Schlüsseldaten. In I. Schreyer &amp; P. Oberhuemer (H</li>
	<li><a name="quelle-10"></a>rsg.), *Personalprofile in Systemen der frühkindlichen Bildung, Erziehung und Betreuung in Europa. München: Staatsinstitut für Frühpädagogik. Zugriff am 15.04.2019 unter <a href="http://www.seepro.eu/Deutsch/Pdfs/FINNLAND_Schluesseldaten.pdf">http://www.seepro.eu/Deutsch/Pdfs/FINNLAND_Schluesseldaten.pdf</a></li>
	<li><a name="quelle-11"></a>Onnismaa, E.-L. (2017). Frühpädagogisches Personal – Länderbericht Finnland. *Personalprofile in Systemen der frühkindlichen Bildung, Erziehung und Betreuung in Europa. München: Staatsinstitut für Frühpädagogik. Zugriff am 15.04.2019 unter <a href="http://www.seepro.eu/Deutsch/Pdfs/FINNLAND_Fruehpaedagogisches_Personal.pdf">http://www.seepro.eu/Deutsch/Pdfs/FINNLAND_Fruehpaedagogisches_Personal.pdf</a></li>
	<li><a name="quelle-12"></a><a href="https://aifs.gov.au/facts-and-figures/population-and-households">https://aifs.gov.au/facts-and-figures/population-and-households</a></li>
	<li><a name="quelle-13"></a><a href="https://de.statista.com/statistik/daten/studie/19298/umfrage/gesamtbevoelkerung-in-frankreich/">https://de.statista.com/statistik/daten/studie/19298/umfrage/gesamtbevoelkerung-in-frankreich/</a></li>
	<li><a name="quelle-14"></a><a href="https://countrymeters.info/de/Iceland">https://countrymeters.info/de/Iceland</a></li>
	<li><a name="quelle-15"></a><a href="https://www150.statcan.gc.ca/t1/tbl1/en/tv.action?pid=1710000901">https://www150.statcan.gc.ca/t1/tbl1/en/tv.action?pid=1710000901</a></li>
	<li><a name="quelle-16"></a><a href="https://www.imf.org/en/Countries/JPN">https://www.imf.org/en/Countries/JPN</a></li>
	<li><a name="quelle-17"></a><a href="https://de.statista.com/statistik/daten/studie/180284/umfrage/bevoelkerungsdichte-in-australien/">https://de.statista.com/statistik/daten/studie/180284/umfrage/bevoelkerungsdichte-in-australien/</a></li>
	<li><a name="quelle-18"></a><a href="https://de.statista.com/statistik/daten/studie/167199/umfrage/bevoelkerungsdichte-in-frankreich/">https://de.statista.com/statistik/daten/studie/167199/umfrage/bevoelkerungsdichte-in-frankreich/</a></li>
	<li><a name="quelle-19"></a>statista.com (Stand 2017)</li>
	<li><a name="quelle-20"></a><a href="https://de.statista.com/statistik/daten/studie/165951/umfrage/bevoelkerungsdichte-in-japan/">https://de.statista.com/statistik/daten/studie/165951/umfrage/bevoelkerungsdichte-in-japan/</a></li>
	<li><a name="quelle-21"></a><a href="https://geoplay.de/laenderlexikon/tansania.aspx">https://geoplay.de/laenderlexikon/tansania.aspx</a></li>
	<li><a name="quelle-22"></a>Onnismaa, E.-L. (2017). Frühpädagogisches Personal – Länderbericht Finnland. *Perso</li>
	<li><a name="quelle-23"></a>nalprofile in Systemen der frühkindlichen Bildung, Erziehung und Betreuung in Europa. München: Staatsinstitut für Frühpädagogik. Zugriff am 15.04.2019 unter <a href="http://www.seepro.eu/Deutsch/Pdfs/FINNLAND_Fruehpaedagogisches_Personal.pdf">http://www.seepro.eu/Deutsch/Pdfs/FINNLAND_Fruehpaedagogisches_Personal.pdf</a></li>
	<li><a name="quelle-24"></a><a href="https://de.statista.com/statistik/daten/studie/180280/umfrage/fertilitaetsrate-in-australien/">https://de.statista.com/statistik/daten/studie/180280/umfrage/fertilitaetsrate-in-australien/</a></li>
	<li><a name="quelle-25"></a><a href="https://de.statista.com/statistik/daten/studie/200065/umfrage/geburtenziffern-in-ausgewaehlten-laendern-europas/">https://de.statista.com/statistik/daten/studie/200065/umfrage/geburtenziffern-in-ausgewaehlten-laendern-europas/</a></li>
	<li><a name="quelle-26"></a><a href="https://data.worldbank.org/indicator/SP.DYN.TFRT.IN">https://data.worldbank.org/indicator/SP.DYN.TFRT.IN</a></li>
	<li><a name="quelle-27"></a><a href="https://www150.statcan.gc.ca/n1/pub/91-209-x/2018001/article/54956-eng.htm">https://www150.statcan.gc.ca/n1/pub/91-209-x/2018001/article/54956-eng.htm</a></li>
	<li><a name="quelle-28"></a><a href="https://data.worldbank.org/indicator/SP.DYN.TFRT.IN?end=2016&amp;locations=NZ&amp;start=1960&amp;view=map">https://data.worldbank.org/indicator/SP.DYN.TFRT.IN?end=2016&amp;locations=NZ&amp;start=1960&amp;view=map</a></li>
	<li><a name="quelle-29"></a>statista.com (Stand 2016)</li>
	<li><a name="quelle-30"></a><a href="https://de.statista.com/themen/1255/japan/">https://de.statista.com/themen/1255/japan/</a></li>
	<li><a name="quelle-31"></a><a href="https://de.statista.com/statistik/daten/studie/749278/umfrage/fertilitaetsrate-in-tansania/">https://de.statista.com/statistik/daten/studie/749278/umfrage/fertilitaetsrate-in-tansania/</a></li>
	<li><a name="quelle-32"></a><a href="https://www.euraxess.is/iceland/information-assistance/child-care-and-school-system">https://www.euraxess.is/iceland/information-assistance/child-care-and-school-system</a></li>
	<li><a name="quelle-33"></a>Friendly, M., Larsen, E., Feltham, L.E., Grady, B., Forer, B., &amp; Jones, M. (2018). Early childhood education and care in Canada 2016. Toronto: Childcare Resource and Research Unit.</li>
	<li><a name="quelle-34"></a>Pholphirul, 2017</li>
	<li><a name="quelle-35"></a>Schreyer, I., Oberhuemer,P. (2017). <em>Frankreich – Kontextuelle Schlüsseldaten.</em> In: Personalprofile in Systemen der frühkindlichen Bildung, Erziehung und Betreuung in Europa, herausgegeben von I. Schreyer und P. Oberhuemer. www.seepro.eu/Deutsch/Laenderberichte.htm </li>
	<li><a name="quelle-36"></a>Schreyer, I., Oberhuemer,P. (2017). Frankreich – Kontextuelle Schlüsseldaten. In I. Schreyer &amp; P. Oberhuemer (Hrsg.), *Personalprofile in Systemen der frühkindlichen Bildung, Erziehung und Betreuung in Europa. München: Staatsinstitut für Frühpädagogik. Zugriff am 15.04.2019 unter <a href="http://www.seepro.eu/Deutsch/Pdfs/FRANKREICH_Schluesseldaten.pdf">http://www.seepro.eu/Deutsch/Pdfs/FRANKREICH_Schluesseldaten.pdf</a></li>
	<li><a name="quelle-37"></a><a href="https://www.island.is/en/family/day_care_centres/nursery_schools/">https://www.island.is/en/family/day_care_centres/nursery_schools/</a></li>
	<li><a name="quelle-38"></a>Tabu, M. (o. J.). <em>Ein Blick auf Japans System der frühkindlichen Bildung, Betreuung und Erziehung</em>. Zugriff am 15.04.2019 unter  <a href="https://www.dji.de/fileadmin/user_upload/icec/Interviews/Japans%20System%20der%20FBBE_Prof.%20Mikiko%20Tabu_final.pdf">https://www.dji.de/fileadmin/user_upload/icec/Interviews/Japans%20System%20der%20FBBE_Prof.%20Mikiko%20Tabu_final.pdf</a></li>
	<li><a name="quelle-39"></a><a href="https://www.education.gov.au/early-childhood-and-child-care-summary-reports">https://www.education.gov.au/early-childhood-and-child-care-summary-reports</a></li>
	<li><a name="quelle-40"></a> <a href="https://www.bmfsfj.de/blob/93556/e71785b2ad4b70362cb956de7011ae88/dossier-ausbau-der-kinderbetreuung-data.pdf">https://www.bmfsfj.de/blob/93556/e71785b2ad4b70362cb956de7011ae88/dossier-ausbau-der-kinderbetreuung-data.pdf</a></li>
	<li><a name="quelle-41"></a><a href="https://www.fruehe-chancen.de/uploads/tx_rfkinderbetreuung/fc_icec_betreuungszahlen_130102.pdf">https://www.fruehe-chancen.de/uploads/tx_rfkinderbetreuung/fc_icec_betreuungszahlen_130102.pdf</a></li>
	<li><a name="quelle-42"></a>Sinha, M. (2014). Child care in Canada. Ottawa, ON: Statistics Canada.</li>
	<li><a name="quelle-43"></a><a href="https://www.kindergartenpaedagogik.de/376.pdf">https://www.kindergartenpaedagogik.de/376.pdf</a></li>
	<li><a name="quelle-44"></a>UNICEF-Statistik, 2013, <a href="https://www.unicef.org/infobycountry/Thailand_statistics.html">https://www.unicef.org/infobycountry/Thailand_statistics.html</a></li>
	<li><a name="quelle-45"></a>OECD Bildungsindikatoren 2018</li>
	<li><a name="quelle-46"></a><a href="https://knoema.de/atlas/Vereinigte-Republik-Tansania/topics/Bildung/Vorschulbildung/Bruttoeinschulungsquote">https://knoema.de/atlas/Vereinigte-Republik-Tansania/topics/Bildung/Vorschulbildung/Bruttoeinschulungsquote</a></li>
	<li><a name="quelle-47"></a><a href="http://px.hagstofa.is/pxen/pxweb/en/Samfelag/Samfelag__skolamal__1_leikskolastig__2_lsSkolahald/SKO01201.px/table/tableViewLayout1/?rxid=8947cd5b-cf84-4b67-a462-57226352e8a6">http://px.hagstofa.is/pxen/pxweb/en/Samfelag/Samfelag__skolamal__1_leikskolastig__2_lsSkolahald/SKO01201.px/table/tableViewLayout1/?rxid=8947cd5b-cf84-4b67-a462-57226352e8a6</a></li>
	<li><a name="quelle-48"></a><a href="https://www.educationcounts.govt.nz/statistics/early-childhood-education/participation">https://www.educationcounts.govt.nz/statistics/early-childhood-education/participation</a>, <a href="https://www.educationcounts.govt.nz/__data/assets/pdf_file/0010/192943/ECE-Summary-page-2Services-in-2018.pdf">https://www.educationcounts.govt.nz/__data/assets/pdf_file/0010/192943/ECE-Summary-page-2Services-in-2018.pdf</a></li>
	<li><a name="quelle-49"></a>Education in Thailand, An OECD-UNESCO Perspective, 2016, nach: Educational Statistics in Brief 2013.</li>
	<li><a name="quelle-50"></a><a href="http://www.stat.go.jp/english/data/nenkan/67nenkan/1431-25.html">http://www.stat.go.jp/english/data/nenkan/67nenkan/1431-25.html</a></li>
	<li><a name="quelle-51"></a><a href="https://www.e-stat.go.jp/en/dbview?sid=0000010205">https://www.e-stat.go.jp/en/dbview?sid=0000010205</a></li>
	<li><a name="quelle-52"></a> <a href="https://www.e-stat.go.jp/en/dbview?sid=0000010205">https://www.e-stat.go.jp/en/dbview?sid=0000010205</a></li>
	<li><a name="quelle-53"></a><a href="http://www.frankreich-experte.de/themen/bevölkerungsstruktur">http://www.frankreich-experte.de/themen/bevölkerungsstruktur</a></li>
	<li><a name="quelle-54"></a><a href="https://www12.statcan.gc.ca/census-recensement/2016/dp-pd/prof/details/page.cfm?Lang=E&amp;Geo1=PR&amp;Code1=01&amp;Geo2=&amp;Code2=&amp;Data=Count&amp;SearchText=Canada&amp;SearchType=Begins&amp;SearchPR=01&amp;B1=All&amp;TABID=1">https://www12.statcan.gc.ca/census-recensement/2016/dp-pd/prof/details/page.cfm?Lang=E&amp;Geo1=PR&amp;Code1=01&amp;Geo2=&amp;Code2=&amp;Data=Count&amp;SearchText=Canada&amp;SearchType=Begins&amp;SearchPR=01&amp;B1=All&amp;TABID=1</a></li>
	<li><a name="quelle-55"></a><a href="https://www.statice.is/publications/news-archive/population/population-1-january-2017/">https://www.statice.is/publications/news-archive/population/population-1-january-2017/</a></li>
	<li><a name="quelle-56"></a><a href="https://www.japantimes.co.jp/news/2015/11/07/business/no-relief-sight-japans-poor-single-parent-families/#.XAlJ1_ZFzVI">https://www.japantimes.co.jp/news/2015/11/07/business/no-relief-sight-japans-poor-single-parent-families/#.XAlJ1_ZFzVI</a></li>
	<li><a name="quelle-57"></a>Education in Thailand, An OECD-UNESCO Perspective, 2016 Shaeffer, 2018, In: Fry</li>
	<li><a name="quelle-58"></a> <a href="https://www.welt.de/politik/ausland/article136583600/Japan-will-das-Kinderkriegen-erzwingen.html">https://www.welt.de/politik/ausland/article136583600/Japan-will-das-Kinderkriegen-erzwingen.html</a> 2 <a href="https://www.economist.com/briefing/2014/03/29/holding-back-half-the-nation">https://www.economist.com/briefing/2014/03/29/holding-back-half-the-nation</a></li>
	<li><a name="quelle-59"></a><a href="http://px.hagstofa.is/pxen/pxweb/en/Samfelag/Samfelag__born__1_menntun__1_leikskolaborn/SKO01001.px/table/tableViewLayout1/?rxid=746dd44a-11ab-42f2-9772-6b4b788a59a4">http://px.hagstofa.is/pxen/pxweb/en/Samfelag/Samfelag__born__1_menntun__1_leikskolaborn/SKO01001.px/table/tableViewLayout1/?rxid=746dd44a-11ab-42f2-9772-6b4b788a59a4</a></li>
	<li><a name="quelle-60"></a><a href="https://www.educationcounts.govt.nz/statistics/early-childhood-education">https://www.educationcounts.govt.nz/statistics/early-childhood-education</a></li>
	<li><a name="quelle-61"></a>Shaeffer, 2018, In: Fry</li>
	<li><a name="quelle-62"></a> Stenger, U. (2017). <em>Frühkindliches Bildungssystem und Bildungsforschung in Japan</em> Zugriff am 15.11.2018 unter <a href="https://www.kita-fachtexte.de/texte-finden/detail/data/fruehkindliches-bildungssystem-und-bildungsforschung-in-japan/">https://www.kita-fachtexte.de/texte-finden/detail/data/fruehkindliches-bildungssystem-und-bildungsforschung-in-japan/</a></li>
	<li><a name="quelle-63"></a><a href="https://www.goodstart.org.au/find-a-centre">https://www.goodstart.org.au/find-a-centre</a></li>
	<li><a name="quelle-64"></a><a href="http://education.stateuniversity.com/pages/641/Iceland-PREPRIMARY-PRIMARY-EDUCATION.html">http://education.stateuniversity.com/pages/641/Iceland-PREPRIMARY-PRIMARY-EDUCATION.html</a>, <a href="https://www.island.is/en/family/day_care_centres/nursery_schools/">https://www.island.is/en/family/day_care_centres/nursery_schools/</a></li>
	<li><a name="quelle-65"></a><a href="https://www.aph.gov.au/About_Parliament/Parliamentary_Departments/Parliamentary_Library/pubs/rp/rp1415/Quick_Guides/ChildCare">https://www.aph.gov.au/About_Parliament/Parliamentary_Departments/Parliamentary_Library/pubs/rp/rp1415/Quick_Guides/ChildCare</a></li>
	<li><a name="quelle-66"></a><a href="https://www.government.is/media/menntamalaraduneyti-media/media/frettatengt2016/Preschool-Act-No-90-2008.pdf">https://www.government.is/media/menntamalaraduneyti-media/media/frettatengt2016/Preschool-Act-No-90-2008.pdf</a></li>
	<li><a name="quelle-67"></a><a href="https://www.newzealandnow.govt.nz/living-in-nz/education/childcare-preschool">https://www.newzealandnow.govt.nz/living-in-nz/education/childcare-preschool</a>, <a href="https://www.ero.govt.nz/footer-upper/about-ero/">https://www.ero.govt.nz/footer-upper/about-ero/</a></li>
	<li><a name="quelle-68"></a>Research Center for Child and Adolescent Development and Education (2004). <em>Framework and mechanisms of early childhood education in Japan</em>. Zugriff am 18.06.2016 unter <a href="http://www.ocha.ac.jp/.../cwed_old/eccd/report/">http://www.ocha.ac.jp/.../cwed_old/eccd/report/</a> hand_E/1-1e.pdf</li>
	<li><a name="quelle-69"></a>Schreyer, I., Oberhuemer,P. (2017). <em>Frankreich – Kontextuelle Schlüsseldaten.</em> In: Personalprofile in Systemen der frühkindlichen Bildung, Erziehung und Betreuung in Europa, herausgegeben von I. Schreyer und P. Oberhuemer. www.seepro.eu/Deutsch/Laenderberichte.htm</li>
	<li><a name="quelle-70"></a><a href="http://vefir.hi.is/kennaramenntun/files/2011/08/Training-of-Preschool-Teachers-in-Icelandjóhanneinarsdótir.pdf">http://vefir.hi.is/kennaramenntun/files/2011/08/Training-of-Preschool-Teachers-in-Icelandjóhanneinarsdótir.pdf</a></li>
	<li><a name="quelle-71"></a><a href="https://www.education.gov.au/universal-access-early-childhood-education">https://www.education.gov.au/universal-access-early-childhood-education</a></li>
	<li><a name="quelle-72"></a>Fix, B. (2003). <em>Kindertagesbetreuung in Frankreich, Finnland und Schweden.</em> URL: </li>
	<li><a name="quelle-73"></a><a href="https://kindergartenpaedagogik.de/fachartikel/kinderbetreuung-in-anderen-laendern/913">https://kindergartenpaedagogik.de/fachartikel/kinderbetreuung-in-anderen-laendern/913</a>.</li>
	<li><a name="quelle-74"></a>Wolf, K./Grgic, M. (2009).<em>Kindertagesbetreuung im europäischen Vergleich. Die Chancen von EU-SILC und die aktuellen Grenzen</em>. Deutsches Jugendinstitut e.V.</li>
	<li><a name="quelle-75"></a>Abteilung Kinder und Kindertagesbetreuung: München.</li>
	<li><a name="quelle-76"></a><a href="https://reykjavik.is/en/preschools">https://reykjavik.is/en/preschools</a></li>
	<li><a name="quelle-77"></a>Hedge, A. V. et al. (2014). <em>Japanese nursery and kindergarten teachers’ beliefs and practices regarding developmentally appropriate practices</em>. International Journal of Early Years Education, 22(3), 301-314.</li>
	<li><a name="quelle-78"></a>Hedge et al. (2013)</li>
	<li><a name="quelle-79"></a><a href="https://www.careforkids.com.au/child-care-articles/article/77/how-much-does-child-care-cost">https://www.careforkids.com.au/child-care-articles/article/77/how-much-does-child-care-cost</a></li>
	<li><a name="quelle-80"></a><a href="https://reykjavik.is/gjaldskrar/leikskolagjold-fra-1-jan-2016">https://reykjavik.is/gjaldskrar/leikskolagjold-fra-1-jan-2016</a>, </li>
	<li><a name="quelle-81"></a><a href="https://www.education.govt.nz/early-childhood/funding-and-data/20-hours-ece-for-ece-services/">https://www.education.govt.nz/early-childhood/funding-and-data/20-hours-ece-for-ece-services/</a></li>
	<li><a name="quelle-82"></a>Harder 2008</li>
	<li><a name="quelle-83"></a>Mligo, I. (2018). Enhancing Young Children’s Access to Early Childhood Education and Care in Tanzania. In Ş. Çetinkaya (Hrsg.), <em>Contemporary Perspective on Child Psychology and Education.</em> InTech. <a href="https://doi.org/10.5772/intechopen.71265">https://doi.org/10.5772/intechopen.71265</a></li>
	<li><a name="quelle-84"></a><a href="https://www.statistik-bw.de/Service/Veroeff/Monatshefte/PDF/Beitrag07_05_03.pdf">https://www.statistik-bw.de/Service/Veroeff/Monatshefte/PDF/Beitrag07_05_03.pdf</a></li>
	<li><a name="quelle-85"></a><a href="https://www.acecqa.gov.au/nqf/national-quality-standard">https://www.acecqa.gov.au/nqf/national-quality-standard</a></li>
	<li><a name="quelle-86"></a>Doherty, G., Lero, D., Goelman, H., LaGrange, A., &amp; Tougas, J. (2000). You Bet I Care!: Caring and learning environments: Quality in child care centres across Canada. Guelph: University of Guelph.</li>
	<li><a name="quelle-87"></a> <a href="https://www.icetra.is/media/english/Act-on-the-education-and-recruitment-of-teachers--No-87_2008-nr.-87-Uppfaerd-thyding-januar-2017.pdf">https://www.icetra.is/media/english/Act-on-the-education-and-recruitment-of-teachers--No-87_2008-nr.-87-Uppfaerd-thyding-januar-2017.pdf</a> px.hagstofa.is/pxen/pxweb/en/Samfelag/Samfelag<strong>skolamal</strong>1_leikskolastig__1_lsStarfsfolk/SKO01301.px/table/tableViewLayout1/?rxid=783120a8-f651-4390-9263-8033a4cb928a</li>
	<li><a name="quelle-88"></a><a href="http://weitblick.bistum-eichstaett.de/bildung-in-tansania/">http://weitblick.bistum-eichstaett.de/bildung-in-tansania/</a> </li>
	<li><a name="quelle-89"></a>Mtahabwa, L., &amp; Rao, N. (2010). <em>Pre-primary education in Tanzania: Observations from urban and rural classrooms.</em> International Journal of Educational Development, 30(3), 227–235. <a href="https://doi.org/10/bbj8gh">https://doi.org/10/bbj8gh</a></li>
	<li><a name="quelle-90"></a><a href="https://www.legislation.nsw.gov.au/#/view/regulation/2011/653/chap4/part4.4">https://www.legislation.nsw.gov.au/#/view/regulation/2011/653/chap4/part4.4</a></li>
	<li><a name="quelle-91"></a>Rayna, S. (2017). <em>Frühpädagogisches Personal – Länderbericht Frankreich</em>. In: Personalprofile in Systemen der frühkindlichen Bildung, Erziehung und Betreuung in Europa, herausgegeben von I. Schreyer und P. Oberhuemer. www.seepro.eu/Deutsch/Laenderberichte.htm</li>
	<li><a name="quelle-92"></a>Rayna, S. (2017). Frühpädagogisches Personal – Länderbericht Frankreich. In I. Schreyer &amp; P. Oberhuemer (Hrsg.), Personalprofile in Systemen der frühkindlichen Bildung, Erziehung und Betreuung in Europa. München: Staatsinstitut für Frühpädagogik. Zugriff am 15.04.2019 unter <a href="http://www.seepro.eu/Deutsch/Pdfs/FRANKREICH_Fruehpaedagogisches_Personal.pdf">http://www.seepro.eu/Deutsch/Pdfs/FRANKREICH_Fruehpaedagogisches_Personal.pdf</a></li>
	<li><a name="quelle-93"></a>Rayna, S. (2017). Frühpädagogisches Personal – Länderbericht Frankreich. In I. Schreyer &amp; P. Oberhuemer (Hrsg.), <em>Personalprofile in Systemen der frühkindlichen Bildung, Erziehung und Betreuung in Europa</em>. München: Staatsinstitut für Frühpädagogik. Zugriff am 15.04.2019 unter <a href="http://www.seepro.eu/Deutsch/Pdfs/FRANKREICH_Fruehpaedagogisches_Personal.pdf">http://www.seepro.eu/Deutsch/Pdfs/FRANKREICH_Fruehpaedagogisches_Personal.pdf</a></li>
	<li><a name="quelle-94"></a><a href="https://www.education.govt.nz/early-childhood/employment/the-number-of-qualified-teachers-your-ece-service-needs/">https://www.education.govt.nz/early-childhood/employment/the-number-of-qualified-teachers-your-ece-service-needs/</a></li>
	<li><a name="quelle-95"></a> <a href="https://www.government.is/media/menntamalaraduneyti-media/media/frettatengt2016/Preschool-Act-No-90-2008.pdf">https://www.government.is/media/menntamalaraduneyti-media/media/frettatengt2016/Preschool-Act-No-90-2008.pdf</a> <a href="https://www.government.is/library/01-Ministries/Ministry-of-Education/Curriculum/adskr_leiksk_ens_2012.pdf">https://www.government.is/library/01-Ministries/Ministry-of-Education/Curriculum/adskr_leiksk_ens_2012.pdf</a>  <a href="http://px.hagstofa.is/pxen/pxweb/en/Samfelag/Samfelag__skolamal__1_leikskolastig__1_lsStarfsfolk/SKO01300.px/table/tableViewLayout1/?rxid=d9af4bc1-4bb3-467c-9be5-1fe30d36a9db">http://px.hagstofa.is/pxen/pxweb/en/Samfelag/Samfelag__skolamal__1_leikskolastig__1_lsStarfsfolk/SKO01300.px/table/tableViewLayout1/?rxid=d9af4bc1-4bb3-467c-9be5-1fe30d36a9db</a></li>
	<li><a name="quelle-96"></a><a href="http://px.hagstofa.is/pxen/pxweb/en/Samfelag/Samfelag__skolamal__1_leikskolastig__1_lsStarfsfolk/SKO01302.px/table/tableViewLayout1/?rxid=076aa607-11f4-4964-933b-da020af8c737">http://px.hagstofa.is/pxen/pxweb/en/Samfelag/Samfelag__skolamal__1_leikskolastig__1_lsStarfsfolk/SKO01302.px/table/tableViewLayout1/?rxid=076aa607-11f4-4964-933b-da020af8c737</a></li>
	<li><a name="quelle-97"></a><a href="https://www150.statcan.gc.ca/t1/tbl1/en/tv.action?pid=1410029901">https://www150.statcan.gc.ca/t1/tbl1/en/tv.action?pid=1410029901</a></li>
	<li><a name="quelle-98"></a> <a href="https://www150.statcan.gc.ca/t1/tbl1/en/cv!recreate.action?pid=1410029901&amp;selectedNodeIds=1D1,2D10,3D22,3D24,4D1&amp;checkedLevels=&amp;refPeriods=20140101,20180101&amp;dimensionLayouts=layout2,layout2,layout3,layout2,layout2&amp;vectorDisplay=false">https://www150.statcan.gc.ca/t1/tbl1/en/cv!recreate.action?pid=1410029901&amp;selectedNodeIds=1D1,2D10,3D22,3D24,4D1&amp;checkedLevels=&amp;refPeriods=20140101,20180101&amp;dimensionLayouts=layout2,layout2,layout3,layout2,layout2&amp;vectorDisplay=false</a></li>
	<li><a name="quelle-99"></a><a href="http://nbakki.hatenablog.com/entry/Annual_Salary_by_Occupation">http://nbakki.hatenablog.com/entry/Annual_Salary_by_Occupation</a></li>
	<li><a name="quelle-100"></a><a href="https://www.opencolleges.edu.au/courses/education-and-childcare/certificate-iii-in-early-childhood-education-and-care">https://www.opencolleges.edu.au/courses/education-and-childcare/certificate-iii-in-early-childhood-education-and-care</a></li>
	<li><a name="quelle-101"></a><a href="https://www.payscale.com/research/AU/Job=Early_Childhood_Educator_(ECE)/Hourly_Rate">https://www.payscale.com/research/AU/Job=Early_Childhood_Educator_(ECE)/Hourly_Rate</a></li>
	<li><a name="quelle-102"></a><a href="https://www150.statcan.gc.ca/t1/tbl1/en/tv.action?pid=1410032801&amp;pickMembers%5B0%5D=1.1&amp;pickMembers%5B1%5D=2.418">https://www150.statcan.gc.ca/t1/tbl1/en/tv.action?pid=1410032801&amp;pickMembers%5B0%5D=1.1&amp;pickMembers%5B1%5D=2.418</a></li>
	<li><a name="quelle-103"></a> <a href="https://neuvoo.ca/tax-calculator/">https://neuvoo.ca/tax-calculator/</a></li>
	<li><a name="quelle-104"></a> <a href="https://www150.statcan.gc.ca/t1/tbl1/en/cv!recreate.action?pid=1410000101&amp;selectedNodeIds=1D2All,1D2,1D3,1D4,1D5,1D6,1D7,1D8,1D9,1D10,1D11,1D12,1D13,1D14,1D1,2D397,2D418,2D1,3D1&amp;checkedLevels=&amp;refPeriods=20160101,20170101&amp;dimensionLayouts=layout3,layout3,layout2,layout2&amp;vectorDisplay=false">https://www150.statcan.gc.ca/t1/tbl1/en/cv!recreate.action?pid=1410000101&amp;selectedNodeIds=1D2All,1D2,1D3,1D4,1D5,1D6,1D7,1D8,1D9,1D10,1D11,1D12,1D13,1D14,1D1,2D397,2D418,2D1,3D1&amp;checkedLevels=&amp;refPeriods=20160101,20170101&amp;dimensionLayouts=layout3,layout3,layout2,layout2&amp;vectorDisplay=false</a></li>
	<li><a name="quelle-105"></a><a href="https://au.indeed.com/salaries?from=headercmplink&amp;attributionid=jobsearch">https://au.indeed.com/salaries?from=headercmplink&amp;attributionid=jobsearch</a></li>
	<li><a name="quelle-106"></a>Education in Thailand, An OECD-UNESCO Perspective, 2016</li>
	<li><a name="quelle-107"></a><a href="https://www.acecqa.gov.au/nqf/educator-to-child-ratios">https://www.acecqa.gov.au/nqf/educator-to-child-ratios</a></li>
	<li><a name="quelle-108"></a>Fix, B. (2003).<em>Kindertagesbetreuung in Frankreich, Finnland und Schweden</em> URL:</li>
	<li><a name="quelle-109"></a><a href="https://kindergartenpaedagogik.de/fachartikel/kinderbetreuunFix">https://kindergartenpaedagogik.de/fachartikel/kinderbetreuunFix</a>, B. (2003). <em>Kindertagesbetreuung in Frankreich, Finnland und Schweden</em>. Mannheim: Mannheimer Zentrum für Europäische Sozialforschung. Zugriff am 15.04.2019 unter <a href="https://kindergartenpaedagogik.de/fachartikel/kinderbetreuung-in-anderen-laendern/913g-in-anderen-laendern/913">https://kindergartenpaedagogik.de/fachartikel/kinderbetreuung-in-anderen-laendern/913g-in-anderen-laendern/913</a>.</li>
	<li><a name="quelle-110"></a><a href="http://www.oecd.org/education/Iceland-EAG2014-Country-Note.pdf">http://www.oecd.org/education/Iceland-EAG2014-Country-Note.pdf</a></li>
	<li><a name="quelle-111"></a><a href="https://www.education.govt.nz/early-childhood/employment/the-number-of-qualified-teachers-your-ece-service-needs/">https://www.education.govt.nz/early-childhood/employment/the-number-of-qualified-teachers-your-ece-service-needs/</a>, <a href="http://www.legislation.govt.nz/regulation/public/2008/0204/latest/DLM1412637.html">http://www.legislation.govt.nz/regulation/public/2008/0204/latest/DLM1412637.html</a></li>
	<li><a name="quelle-112"></a>Anderson, K., &amp; Sayre, R. (2016). <em>Measuring Early Learning Quality and Outcomes in Tanzania.</em> Centre for Universal Education</li>
	<li><a name="quelle-113"></a><a href="https://www.education.gov.au/child-care-provider-handbook-0">https://www.education.gov.au/child-care-provider-handbook-0</a></li>
	<li><a name="quelle-114"></a><a href="https://www.government.is/topics/education/">https://www.government.is/topics/education/</a></li>
	<li><a name="quelle-115"></a><a href="https://www.education.govt.nz/early-childhood/">https://www.education.govt.nz/early-childhood/</a></li>
	<li><a name="quelle-116"></a><a href="https://www.kindergartenpaedagogik.de/fachartikel/kinderbetreuung-in-anderen-laendern/45">https://www.kindergartenpaedagogik.de/fachartikel/kinderbetreuung-in-anderen-laendern/45</a></li>
	<li><a name="quelle-117"></a>Schreyer, I., Oberhuemer,P. (2017). <em>Frankreich – Kontextuelle Schlüsseldaten.</em> In: Personalprofile in Systemen der frühkindlichen Bildung, Erziehung und Betreuung in Europa, herausgegeben von I. Schreyer und P. Oberhuemer. Oberhuemer. www.seepro.eu/Deutsch/Laenderberichte.htm</li>
	<li><a name="quelle-118"></a> <a href="http://vefir.hi.is/kennaramenntun/files/2011/08/Training-of-Preschool-Teachers-in-Icelandjóhanneinarsdótir.pdf">http://vefir.hi.is/kennaramenntun/files/2011/08/Training-of-Preschool-Teachers-in-Icelandjóhanneinarsdótir.pdf</a> <a href="https://www.government.is/media/menntamalaraduneyti-media/media/frettatengt2016/Preschool-Act-No-90-2008.pdf">https://www.government.is/media/menntamalaraduneyti-media/media/frettatengt2016/Preschool-Act-No-90-2008.pdf</a>, </li>
	<li><a name="quelle-119"></a>Pholphirul, 2017 </li>
	<li><a name="quelle-120"></a><a href="https://www.service.nsw.gov.au/transaction/find-approved-child-care-services-providers">https://www.service.nsw.gov.au/transaction/find-approved-child-care-services-providers</a></li>
	<li><a name="quelle-121"></a><a href="https://ec.europa.eu/eures/main.jsp?catId=8802&amp;acro=living&amp;lang=de&amp;parentId=7815&amp;countryId=IS&amp;living">https://ec.europa.eu/eures/main.jsp?catId=8802&amp;acro=living&amp;lang=de&amp;parentId=7815&amp;countryId=IS&amp;living</a>=</li>
	<li><a name="quelle-122"></a>UNESCO Dar es Salaam (o.J.). <em>The Situation of early childhood education in tanzania.</em> The case of temeke district.</li>
	<li><a name="quelle-123"></a><a href="https://docs.education.gov.au/node/2632">https://docs.education.gov.au/node/2632</a></li>
	<li><a name="quelle-124"></a> <a href="https://www.government.is/library/01-Ministries/Ministry-of-Education/Curriculum/adskr_leiksk_ens_2012.pdf">https://www.government.is/library/01-Ministries/Ministry-of-Education/Curriculum/adskr_leiksk_ens_2012.pdf</a> </li>
	<li><a name="quelle-125"></a><a href="https://www.nordic-holidays.de/de/461-1/Island.aspx">https://www.nordic-holidays.de/de/461-1/Island.aspx</a></li>
	<li><a name="quelle-126"></a>Ministry of Education (2014). How does learning happen? Queen‘s Printer for Ontario.</li>
	<li><a name="quelle-127"></a><a href="https://www.education.govt.nz/early-childhood/teaching-and-learning/te-whariki/">https://www.education.govt.nz/early-childhood/teaching-and-learning/te-whariki/</a></li>
	<li><a name="quelle-128"></a>Techawongtham, 2015</li>
	<li><a name="quelle-129"></a>PISA, 2012, S.21</li>
	<li><a name="quelle-130"></a>RCCADE</li>
	<li><a name="quelle-131"></a><a href="http://www.oecd.org/education/school/ECECMN-France.pdf">http://www.oecd.org/education/school/ECECMN-France.pdf</a>                                    Schreyer, I., Oberhuemer,P. (2017). Frankreich – Kontextuelle Schlüsseldaten. In I. Schreyer &amp; P. Oberhuemer (Hrsg.), *Personalprofile in Systemen der frühkindlichen Bildung, Erziehung und Betreuung in Europa. München: Staatsinstitut für Frühpädagogik. Zugriff am 15.04.2019 unter <a href="http://www.seepro.eu/Deutsch/Pdfs/FRANKREICH_Schluesseldaten.pdf">http://www.seepro.eu/Deutsch/Pdfs/FRANKREICH_Schluesseldaten.pdf</a></li>
	<li><a name="quelle-132"></a><a href="https://www.government.is/library/01-Ministries/Ministry-of-Education/Curriculum/adskr_leiksk_ens_2012.pdf">https://www.government.is/library/01-Ministries/Ministry-of-Education/Curriculum/adskr_leiksk_ens_2012.pdf</a></li>
	<li><a name="quelle-133"></a><a href="https://www.kindergartenpaedagogik.de/376.pdf">https://www.kindergartenpaedagogik.de/376.pdf</a>, <a href="https://www.newzealandnow.govt.nz/living-in-nz/education/childcare-preschool">https://www.newzealandnow.govt.nz/living-in-nz/education/childcare-preschool</a></li>
	<li><a name="quelle-134"></a>Research Center for Child and Adolescent Development and Education (2004). <em>Framework and mechanisms of early childhood education in Japan</em>. Zugriff am 15.11.2018 unter <a href="http://www.ocha.ac.jp/.../cwed_old/eccd/report/">http://www.ocha.ac.jp/.../cwed_old/eccd/report/</a> hand_E/1-1e.pdf</li>
	<li><a name="quelle-135"></a>Stenger, U. (2017). <em>Frühkindliches Bildungssystem und Bildungsforschung in Japan</em> Zugriff am 15.11.2018 unter <a href="https://www.kita-fachtexte.de/texte-finden/detail/data/fruehkindliches-bildungssystem-und-bildungsforschung-in-japan/">https://www.kita-fachtexte.de/texte-finden/detail/data/fruehkindliches-bildungssystem-und-bildungsforschung-in-japan/</a></li>
	<li><a name="quelle-136"></a><a href="https://www.sa.gov.au/topics/education-and-learning/early-childhood-education-and-care/understanding-the-curriculum">https://www.sa.gov.au/topics/education-and-learning/early-childhood-education-and-care/understanding-the-curriculum</a></li>
	<li><a name="quelle-137"></a><a href="https://kinder.hypotheses.org/1356">https://kinder.hypotheses.org/1356</a>; <a href="http://www.education.govt.nz/early-childhood/teaching-and-learning/te-whariki/">http://www.education.govt.nz/early-childhood/teaching-and-learning/te-whariki/</a></li>
	<li><a name="quelle-138"></a>MEXT (2008). <em>Course of study for Kindergarten</em>. Zugriff am 15.11.2018 unter <a href="http://www.mext.go.jp/component/english/__icsFiles/afieldfile/2011/04/07/1303755_002.pdf">http://www.mext.go.jp/component/english/__icsFiles/afieldfile/2011/04/07/1303755_002.pdf</a></li>
	<li><a name="quelle-139"></a>MEXT (2001). <em>National Curriculum Standards for Kindergarten (NCSK)</em>. Zugriff am 15.11.2018 unter  <a href="http://www.ibe.unesco.org/curricula/japan/ja_ecefw_1998_eng.pdf">http://www.ibe.unesco.org/curricula/japan/ja_ecefw_1998_eng.pdf</a></li>
	<li><a name="quelle-140"></a> <a href="https://www.government.is/media/menntamalaraduneyti-media/media/frettatengt2016/Preschool-Act-No-90-2008.pdf">https://www.government.is/media/menntamalaraduneyti-media/media/frettatengt2016/Preschool-Act-No-90-2008.pdf</a> <a href="http://vefir.hi.is/kennaramenntun/files/2011/08/Training-of-Preschool-Teachers-in-Icelandjóhanneinarsdótir.pdf">http://vefir.hi.is/kennaramenntun/files/2011/08/Training-of-Preschool-Teachers-in-Icelandjóhanneinarsdótir.pdf</a></li>
	<li><a name="quelle-141"></a>Sukbunpant et al., 2012</li>
</ol>      </div>
    </div>
  </main>

  <script>
    /*
     * Polyfill for element.closest:
     */
    if (!Element.prototype.matches)
    Element.prototype.matches = Element.prototype.msMatchesSelector || 
                                Element.prototype.webkitMatchesSelector;

    if (!Element.prototype.closest) {
        Element.prototype.closest = function(s) {
            var el = this;
            if (!document.documentElement.contains(el)) return null;
            do {
                if (el.matches(s)) return el;
                el = el.parentElement || el.parentNode;
            } while (el !== null && el.nodeType === 1); 
            return null;
        };
    }

    /**
     * @param {object} element - The clicked element
     */
    function toggleDescription(element) {
      const parentClass = 'project-list-item';
      const openClass = parentClass + '--is-open'
      const closedClass = parentClass + '--is-closed'
      const parent = element.closest('.' + parentClass);
      const isOpen = parent.classList.contains(openClass);
      if(isOpen) {
        parent.classList.remove(openClass);
        parent.classList.add(closedClass);
      } else {
        parent.classList.remove(closedClass);
        parent.classList.add(openClass);
      }
    }
  </script>

  <footer class="footer">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          
        </div>

        <div class="row">

          <div class="col-sm-12 col-lg-7">
            <img src="https://www.pina-research.de/assets/images/logos.jpg" alt="PINA Sponsoren" class="footer__logos">
          </div>  
        </div>

        <div class="row">
          <div class="col-sm-12">
            <ul class="footer__link-list">
              <!-- 
  Checks if page exists and inserts an li + a element into the page
  Expected parameters:
    - $pagetitle: Title of the page
    - $pagelangkey: the language key
-->

  <li><a href="https://www.pina-research.de/mitmachen/kontakt">Kontakt</a></li>
               <!-- 
  Checks if page exists and inserts an li + a element into the page
  Expected parameters:
    - $pagetitle: Title of the page
    - $pagelangkey: the language key
-->

  <li><a href="https://www.pina-research.de/impressum">Impressum</a></li>
               <!-- 
  Checks if page exists and inserts an li + a element into the page
  Expected parameters:
    - $pagetitle: Title of the page
    - $pagelangkey: the language key
-->

  <li><a href="https://www.pina-research.de/datenschutz">Datenschutz</a></li>
             </ul>
          </div>  
        </div>

        
      </div>
    </div>
  </footer>
<?php echo js('assets/js/sticky-table.min.js') ?>
</body>
</html>
