<?php require_once('header.php') ?>
    <main>
    <div id="wrapper" style="margin-top: 20px;">
    <p>Please tell us you name:</p>

        <input id="name" type="text">

        <button type="button" onclick="nameNew()">Submit</button>
        <p id="hello"></p>
        <button type="button" id="timeBtn" style="margin-bottom:10px;">Click here to see the time</button>
        <h1 id="time" style="display: none;"></h1><br>
        
        <button type="button" onclick="zoroInfo()">Click here to learn more about Zoro</button>
        <button type="button" onclick="luffyInfo()">Click here to learn more about Luffy</button>
        <button type="button" onclick="sanjiInfo()">Click here to learn more about Sanji</button>
        <p id="zoro">Info about Zoro</p>
        <p id="luffy">Info about Luffy</p>
        <p id="sanji">Info about Sanji</p>

        
        <h1>Click threw One Piece pictures to find your favorite one</h1>
        <img id="onePiece" onclick="changeImage()" src="onePiece1.jpg" width="auto" height="auto">


        
        <p>And now how about we'll do some math:</p>
        <input id="number1" type="number" />
        <input id="number2" type="number" />
        <input id="number3" type="number" />
        <input type="button" onclick="doingMath()"  value="Click here"/>
        <p id="math"></p>
        <p id="math1"></p>
        <p id="math2"></p>
        <p id="math3"></p>
        
        <!-- form that helps to choose your favorite anime -->
        <h2>Now it's time to choose your favorite anime</h2>
        <form action="favorite_animes.php" method="post" id="form">
<fieldset><legend>Choose your favorite anime(s) and we'll provide a link to best resources for it:</legend>
<input type="checkbox" name="anime[]" value="Bleach">Bleach
<input type="checkbox" name="anime[]" value="One Piece">One Piece<br>
<input type="checkbox" name="anime[]" value="Naruto" />Naruto
<input type="checkbox" name="anime[]" value="Fairy Tail" />Fairy Tail <br>
<input type="checkbox" name="anime[]" value="Toriko" >Toriko
<input type="checkbox" name="anime[]" value="Death Note" style="margin-left: 403px;"/>Death Note<br>
<input type="checkbox" name="anime[]" value="Akame_Ga_Kill">Akame Ga Kill
<input type="checkbox" name="anime[]" value="Beelzebub" style="margin-left: 353px;"/>Beelzebub<br>
<input type="checkbox" name="anime[]" value="Noblesse" />Noblesse 
<input type="checkbox" name="anime[]" value="The_Gamer" style="margin-left: 384px;"/>The Gamer

</fieldset>
<br />
<input type="submit" name="submit" value="SUBMIT" style="background-color: black; color: white; margin-left: 630px;"/>
</form>
<h1> Calculate how much time you spend watching one season of anime:</h1>
<form action="anime_calculator.php" method="post">
<p> Name of the anime: <input type="text" name="anime_name"></p>
<p>How many episode in a season: <input type="text" name="distance"> </p>
<p>Ave. time of the episode:<span class="input">
<input type="radio" name="episode_time" value="20"> 20 min
<input type="radio" name="episode_time" value="21"> 21 min
<input type="radio" name="episode_time" value="22"> 22 min
</span></p>
<p>How many episode you watch in one day: <select name="efficiency">
<option value="1">1-5</option>
<option value="5">5-10</option>
<option value="10">10-15</option>
<option value="15">15-20</option>
<option value="20">20+</option>
</select></p>
<p><input type="submit" name="submit" value="Calculate!"></p>
</form>
</div>
    </main>
             <?php include('footer.php'); ?>
