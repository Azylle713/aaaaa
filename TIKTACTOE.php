<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TicTacToe HUMANVSCOMPUTER</title>
</head>

		
<body>
		<div class="container">
        <h1>Let's play!</h1>
		<h2>Tic-Tac-Two</h2>
		<button onclick="goBack()" class="back-button">Go Back</button>
		<div class="button-container">
        <button onclick="startHumanVsHuman()">Play against another Player</button>
	</div>
		<p id="status"></p>
		<div class="score-container">
		<label for="difficulty">Select Difficulty:</label>
		<select id="difficulty" onchange="changeDifficulty()">
        <option value="easy">Easy</option>
        <option value="normal">Normal</option>
        <option value="hard">Hard</option>
    </select>
		<p id="score">Player: 0 - Computer: 0</p>
	</div>
		
        <div id="board" class="board">
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>

            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
            <div class="cell" onclick="makeMove(this)"></div>
        </div>
        
		<div class="button-container">
        <button onclick="resetGame()">Play Again</button>
		</div>		 
		
		<div class="button-container">
            <button onclick="toggleMusic()">Play Music</button>
        </div>
		<audio id="backgroundMusic" loop>
			<source src="Mp3juice.blog Driftveil City [Pokémon_ Black & White].mp3" type="audio/mp3">
		</audio>
    </div>

		
    </div>

    <script src="scriptp.js"></script>
	
</body>
</html>
