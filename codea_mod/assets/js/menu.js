// JavaScript Document

function social(d,e) {
	document.getElementById('facebook').style.display='none';
	document.getElementById('twitter').style.display='none';
	document.getElementById('facelink').style.backgroundColor='#000000';
	document.getElementById('twitlink').style.backgroundColor='#000000';
	
	document.getElementById(d).style.display='block';
	document.getElementById(e).style.backgroundColor='#f1585d';
}

function openRightMenu() {
	document.getElementById('main-menu').style.display='block';
	document.getElementById('menu-overlay').style.display='block';
}

function closeRightMenu() {
	document.getElementById('main-menu').style.display='none';
	document.getElementById('menu-overlay').style.display='none';
}

function openTopMenu1() {
    
    if (document.getElementById("DNA").style.display === "block") {
        document.getElementById("DNA").style.display = "none";
        document.getElementById('menu-overlay1').style.display='none';
        document.getElementById("main1").style.borderTop = "none";
        document.getElementById("main1").style.background = "none";
        document.getElementById("main1").style.padding = "1.9rem 1rem";
        document.getElementById("main2").style.borderTop = "none";
        document.getElementById("main2").style.background = "none";
        document.getElementById("main2").style.padding = "1.9rem 1rem";
        document.getElementById("main3").style.borderTop = "none";
        document.getElementById("main3").style.background = "none";
        document.getElementById("main3").style.padding = "1.9rem 1rem";
        } else {
        document.getElementById("DNA").style.display = "block";
        document.getElementById('menu-overlay1').style.display='block';
        document.getElementById("main1").style.borderTop = "4px solid #f1585d";
        document.getElementById("main1").style.background = "rgba(0,0,0,0.05)";
        document.getElementById("main1").style.padding = "1.68rem 1rem";
        document.getElementById("main2").style.borderTop = "none";
        document.getElementById("main2").style.background = "none";
        document.getElementById("main2").style.padding = "1.9rem 1rem";
        document.getElementById("main3").style.borderTop = "none";
        document.getElementById("main3").style.background = "none";
        document.getElementById("main3").style.padding = "1.9rem 1rem";
        }

	document.getElementById('serv-menu').style.display='none';
	document.getElementById('menu-overlay2').style.display='none';
	document.getElementById('ind-menu').style.display='none';
	document.getElementById('menu-overlay3').style.display='none';
	document.getElementById('search-cont').style.display='none';
	document.getElementById('menu-overlay4').style.display='none';
}

function closeTopMenu1() {
	document.getElementById('DNA').style.display='none';
	document.getElementById('menu-overlay1').style.display='none';
	document.getElementById("main1").style.borderTop = "none";
    document.getElementById("main1").style.background = "none";
    document.getElementById("main1").style.padding = "1.9rem 1rem";
}

function openServeMenu() {
    
    if (document.getElementById("serv-menu").style.display === "block") {
        document.getElementById("serv-menu").style.display = "none";
        document.getElementById('menu-overlay2').style.display='none';
        document.getElementById("main1").style.borderTop = "none";
        document.getElementById("main1").style.background = "none";
        document.getElementById("main1").style.padding = "1.9rem 1rem";
        document.getElementById("main2").style.borderTop = "none";
        document.getElementById("main2").style.background = "none";
        document.getElementById("main2").style.padding = "1.9rem 1rem";
        document.getElementById("main3").style.borderTop = "none";
        document.getElementById("main3").style.background = "none";
        document.getElementById("main3").style.padding = "1.9rem 1rem";
        } else {
        document.getElementById("serv-menu").style.display = "block";
        document.getElementById('menu-overlay2').style.display='block';
        document.getElementById("main2").style.borderTop = "4px solid #f1585d";
        document.getElementById("main2").style.background = "rgba(0,0,0,0.05)";
        document.getElementById("main2").style.padding = "1.68rem 1rem";
        document.getElementById("main1").style.borderTop = "none";
        document.getElementById("main1").style.background = "none";
        document.getElementById("main1").style.padding = "1.9rem 1rem";
        document.getElementById("main3").style.borderTop = "none";
        document.getElementById("main3").style.background = "none";
        document.getElementById("main3").style.padding = "1.9rem 1rem";
        }

	document.getElementById('DNA').style.display='none';
	document.getElementById('menu-overlay1').style.display='none';
	document.getElementById('ind-menu').style.display='none';
	document.getElementById('menu-overlay3').style.display='none';
	document.getElementById('search-cont').style.display='none';
	document.getElementById('menu-overlay4').style.display='none';
}

function closeServeMenu() {
	document.getElementById('serv-menu').style.display='none';
	document.getElementById('menu-overlay2').style.display='none';
	document.getElementById("main2").style.borderTop = "none";
        document.getElementById("main2").style.background = "none";
        document.getElementById("main2").style.padding = "1.9rem 1rem";
}

function openIndMenu() {
    
    if (document.getElementById("ind-menu").style.display === "block") {
        document.getElementById("ind-menu").style.display = "none";
        document.getElementById('menu-overlay3').style.display='none';
        document.getElementById("main1").style.borderTop = "none";
        document.getElementById("main1").style.background = "none";
        document.getElementById("main1").style.padding = "1.9rem 1rem";
        document.getElementById("main2").style.borderTop = "none";
        document.getElementById("main2").style.background = "none";
        document.getElementById("main2").style.padding = "1.9rem 1rem";
        document.getElementById("main3").style.borderTop = "none";
        document.getElementById("main3").style.background = "none";
        document.getElementById("main3").style.padding = "1.9rem 1rem";
        } else {
        document.getElementById("ind-menu").style.display = "block";
        document.getElementById('menu-overlay3').style.display='block';
        document.getElementById("main3").style.borderTop = "4px solid #f1585d";
        document.getElementById("main3").style.background = "rgba(0,0,0,0.05)";
        document.getElementById("main3").style.padding = "1.68rem 1rem";
        document.getElementById("main2").style.borderTop = "none";
        document.getElementById("main2").style.background = "none";
        document.getElementById("main2").style.padding = "1.9rem 1rem";
        document.getElementById("main1").style.borderTop = "none";
        document.getElementById("main1").style.background = "none";
        document.getElementById("main1").style.padding = "1.9rem 1rem";
        }

	document.getElementById('DNA').style.display='none';
	document.getElementById('menu-overlay1').style.display='none';
	document.getElementById('serv-menu').style.display='none';
	document.getElementById('menu-overlay2').style.display='none';
	document.getElementById('search-cont').style.display='none';
	document.getElementById('menu-overlay4').style.display='none';
}

function closeIndMenu() {
	document.getElementById('ind-menu').style.display='none';
	document.getElementById('menu-overlay3').style.display='none';
	document.getElementById("main3").style.borderTop = "none";
    document.getElementById("main3").style.background = "none";
    document.getElementById("main3").style.padding = "1.9rem 1rem";
}

function openSearchMenu() {
    
    if (document.getElementById("search-cont").style.display === "block") {
        document.getElementById("search-cont").style.display = "none";
        document.getElementById("menu-overlay4").style.display = "none";
        document.getElementById("main1").style.borderTop = "none";
        document.getElementById("main1").style.background = "none";
        document.getElementById("main1").style.padding = "1.9rem 1rem";
        document.getElementById("main2").style.borderTop = "none";
        document.getElementById("main2").style.background = "none";
        document.getElementById("main2").style.padding = "1.9rem 1rem";
        document.getElementById("main3").style.borderTop = "none";
        document.getElementById("main3").style.background = "none";
        document.getElementById("main3").style.padding = "1.9rem 1rem";
        } else {
        document.getElementById("search-cont").style.display = "block";
        document.getElementById("menu-overlay4").style.display = "block";
        document.getElementById("main1").style.borderTop = "none";
        document.getElementById("main1").style.background = "none";
        document.getElementById("main1").style.padding = "1.9rem 1rem";
        document.getElementById("main2").style.borderTop = "none";
        document.getElementById("main2").style.background = "none";
        document.getElementById("main2").style.padding = "1.9rem 1rem";
        document.getElementById("main3").style.borderTop = "none";
        document.getElementById("main3").style.background = "none";
        document.getElementById("main3").style.padding = "1.9rem 1rem";
        }


	document.getElementById('DNA').style.display='none';
	document.getElementById('menu-overlay1').style.display='none';
	document.getElementById('serv-menu').style.display='none';
	document.getElementById('menu-overlay2').style.display='none';
	document.getElementById('ind-menu').style.display='none';
	document.getElementById('menu-overlay3').style.display='none';
}

function closeSearchMenu() {
	document.getElementById('search-cont').style.display='none';
	document.getElementById('menu-overlay4').style.display='none';
}