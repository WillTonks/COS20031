<!DOCTYPE html>
 <!--
filename: Details.php
author: Will Tonks
created: 20/5/2025
last modified: 29/5/2025
description: Infortmation submission for Archers
Tuesday 8:30am Class
Tutor: Jenny Lai
-->
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Initial Page for Archery Database Website" />
    <meta name="keywords" content="HTML, CSS" />
    <meta name="author" content="Will"  />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archery Australia: Archers Homepage</title>
    <link href= "style.css" rel="stylesheet"/>
</head>
<?php include 'header.inc';?>
<body>
    <h1>Archer's Interface</h1>
	<form method="get" action="processDetails.php" novalidate>
	<fieldset>
			<p><label for="rounds">rounds</label>
			<select name="rounds" id="rounds" required="required">
				<option value="WA90/1440">WA90/1440</option>
                <option value="WA70/1440">WA70/1440</option>
                <option value="WA60/1440">WA60/1440</option>
                <option value="AA50/1440">AA50/1440</option>
                <option value="AA40/1440">AA40/1440</option>
                <option value="Long Sydney">Long Sydney</option>
                <option value="Sydney">Sydney</option>
                <option value="Long Brisbane">Long Brisbane</option>
                <option value="Brisbane">Brisbane</option>
                <option value="Adelaide">Adelaide</option>
                <option value="Short Adelaide">Short Adelaide</option>
                <option value="Hobart">Hobart</option>
                <option value="Perth">Perth</option>
                <option value="Canberra (WA60/900)">Canberra (WA60/900)</option>
                <option value="Short Canberra">Short Canberra</option>
                <option value="WA720">WA720</option>
                <option value="WA60/720">WA60/720</option>
                <option value="WA50/720">WA50/720</option>
                <option value="AA50/720">AA50/720</option>
                <option value="WABB50/720">WABB50/720</option>
                <option value="AA40/720">AA40/720</option>
                <option value="AA30/720">AA30/720</option>
                <option value="Junior Canberra">Junior Canberra</option>
			</select>
	</fieldset>
    <fieldset>
			<p><label for="ChosenArcher">Choose Archer</label>
			<select name="ChosenArcher" id="ChosenArcher" required="required" onchange="displayArcherName()">
				<option value="1|Lori|Long">Lori Long</option>
                <option value="2|Bryan|Cole">Bryan Cole</option>
                <option value="3|Michelle|Sharp">Michelle Sharp</option>
                <option value="4|Edward|Smith">Edward Smith</option>
                <option value="5|Samantha|Brewer">Samantha Brewer</option>
                <option value="6|John|Rose">John Rose</option>
                <option value="7|Brett|Carr">Brett Carr</option>
                <option value="8|Colleen|White">Colleen White</option>
                <option value="9|Robert|Parker">Robert Parker</option>
                <option value="10|Colleen|Santos">Colleen Santos</option>
                <option value="11|Phillip|Shaw">Phillip Shaw</option>
                <option value="12|Michael|May">Michael May</option>
                <option value="13|Christopher|Singh">Christopher Singh</option>
                <option value="14|Susan|Escobar">Susan Escobar</option>
                <option value="15|Jonathan|Rivera">Jonathan Rivera</option>
                <option value="16|Michael|Morrow">Michael Morrow</option>
                <option value="17|Larry|Escobar">Larry Escobar</option>
                <option value="18|Kayla|Ellis">Kayla Ellis</option>
                <option value="19|Craig|Ward">Craig Ward</option>
                <option value="20">Adrian Miller</option>
                <option value="21">Tony Thompson</option>
                <option value="22">Steven Jones</option>
                <option value="23">Jimmy Ryan</option>
                <option value="24">William Richards</option>
                <option value="25">Stephen Schroeder</option>
                <option value="26">John Wells</option>
                <option value="27">Monica Garcia</option>
                <option value="28">Madeline Mullen</option>
                <option value="29">Riley Hanna</option>
                <option value="30">Alexandra Pace</option>
                <option value="31">Victor Johnson</option>
                <option value="32">Tonya Saunders</option>
                <option value="33">Anthony Lee</option>
                <option value="34">Michael Walker</option>
                <option value="35">Courtney Moore</option>
                <option value="36">Samuel Glenn</option>
                <option value="37">Maria Cowan</option>
                <option value="38">Joseph Guzman</option>
                <option value="39">Erica Rush</option>
                <option value="40">Jesus Newton</option>
                <option value="41">James Wilson</option>
                <option value="42">Jason Wong</option>
                <option value="43">Wyatt Gallegos</option>
                <option value="44">Aaron Joyce</option>
                <option value="45">Jared Mcmillan</option>
                <option value="46">Matthew Berg</option>
                <option value="47">John Adams</option>
                <option value="48">Anne Herrera</option>
                <option value="49">Kyle Powell</option>
                <option value="50">Brenda Ball</option>
			</select>
	</fieldset>
    <table>
        <td>   
            <p><span id="displayArea"></span></p>

  <script>
    function displayArcherName() {
      const selectElement = document.getElementById('ChosenArcher');
      const displayArea = document.getElementById('displayArea');
      displayArea.textContent = selectElement.value;
    }
  </script>



    
    