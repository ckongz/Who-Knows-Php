<?php
// --------------------------------------
// Song Info Variables
// ---------------------------------------
$title = "But Who Knows?"; // Song title
$artist = "Daniel Caesar"; // Artist name
$mood = "soft";            // Mood descriptor

// ----------------------------------------
// Numeric Variables
// ----------------------------------------
$verseCount = 2;          // Number of verses
$chorusRepeat = 2;        // Number of choruses
$totalSections = $verseCount + $chorusRepeat; // Adds verse and chorus count
$totalSections .= " sections"; // Type juggling: converts number to string and appends text

// ---------------------------
// Mood Level (Type Juggling)
// ---------------------------
$moodLevel = 5; // Mood intensity level
$moodWord = "Level: " . $moodLevel; // Concatenates string with integer

// ---------------------------------------
// Arrays of Song Elements
// ----------------------------------------
// Nouns, verbs, adjectives used in lyrics
$nouns = ["time", "mind", "flower", "power", "future", "city", "girl"];
$verbs = ["thinking", "hiding", "feel", "love", "step"];
$adjectives = ["sweet", "ever-giving", "precarious", "pure", "kind", "mature", "divine"];

// --------------------------------------------
// Song Sections (Verses, Chorus, Bridge, Outro)
// ---------------------------------------------
$verse1 = [
    "I'll probably be a waste of your {$nouns[0]}, but who knows?", // uses "time"
    "Chances are I'll {$verbs[4]} out of line, but who knows?",     // uses "step"
    "Lately, you've set up in my {$nouns[1]}",                       // uses "mind"
    "Yeah, {$nouns[6]}, you and I like that"                         // uses "girl"
];

$chorus1 = [
    "Lately, I've been {$verbs[0]} that perhaps I am a coward",     // uses "thinking"
    "Hiding in a disguise of an {$adjectives[1]} {$nouns[2]}",       // uses "ever-giving flower"
    "Incompetent steward of all of that {$adjectives[0]}, {$adjectives[0]} {$nouns[3]}" // "sweet sweet power"
];

$verse2 = [
    "Yesterday was feeling so good, now it's gone",
    "I'd {$verbs[2]} like that always if I could, is that wrong?",  // uses "feel"
    "Tell me 'bout the {$nouns[5]} you're from",                     // uses "city"
    "Is it hot? Does it snow there?"
];

$chorus2 = [
    "Lately, I've been {$verbs[0]} 'bout my {$adjectives[2]} {$nouns[4]}", // "thinking about precarious future"
    "Will you be there with me by my side, my {$nouns[6]}, my shooter?",   // "girl"
    "Who's to say who calculates? Not me, I'm no computer"
];

$bridge = [
    "Is it a crime to be unsure? (Let me know...)",
    "In time we'll find (Let me know...)",
    "If it's sustainable (Let me know...)",
    "You're {$adjectives[3]}, you're {$adjectives[4]} (Let me know...)",   // "pure, kind"
    "{$adjectives[5]}, {$adjectives[6]} (Let me know...)",                 // "mature, divine"
    "You might be too good for me, unattainable (Let me know...)"
];

$outro = [
    "Maybe we get married one day, but who knows?",
    "Think I'll take that thought to the grave, but who knows?",
    "I know that I'll {$verbs[3]} you always",                             // uses "love"
    "Yeah, {$nouns[6]} you, and I'd like that"                             // uses "girl"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Romantic PHP Remix</title> <!-- Page title -->
    <meta name="viewport" content="width=device-width,initial-scale=1"> <!-- Responsive design -->
    <style>
        :root{
            --romantic-red: #8B0A14;
            --soft-rose: #F7E3E6;
            --wine-red: #6A0710;
            --dark-rose: #B63A42;
            --paper: #FFF8F8;
            --text: #3d2b2b;
            --accent-pink: #F9C1C1;
            --shadow-soft: rgba(0,0,0,0.1);
        }

        /* Body & Background */
        body{
            margin:0;
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(-45deg, #FDEDEF, #F7BFC0, #A11925, #F9C1C1);
            background-size: 400% 400%;
            color: var(--text);
            padding:40px 20px;
            animation: gradientShift 20s ease infinite; /* animated gradient */
            overflow-x: hidden;
            position: relative;
        }

        /* Gradient Animation */
        @keyframes gradientShift {
            0% {background-position: 0% 50%;}
            50% {background-position: 100% 50%;}
            100% {background-position: 0% 50%;}
        }

        /* Falling Love Letters */
        .falling-letter{
            position: absolute;
            font-size: 20px;
            opacity: 0.15;
            animation: fall 15s linear infinite;
            user-select: none;
            pointer-events: none;
        }

        @keyframes fall {
            0% {transform: translateY(-50px) rotate(0deg);}
            100% {transform: translateY(110vh) rotate(360deg);}
        }

        /* Generate multiple letters in HTML */
        body .letter1 { left: 5%; animation-duration: 12s; animation-delay: 0s; }
        body .letter2 { left: 20%; animation-duration: 18s; animation-delay: 2s; }
        body .letter3 { left: 35%; animation-duration: 14s; animation-delay: 4s; }
        body .letter4 { left: 50%; animation-duration: 20s; animation-delay: 1s; }
        body .letter5 { left: 65%; animation-duration: 16s; animation-delay: 3s; }
        body .letter6 { left: 80%; animation-duration: 19s; animation-delay: 5s; }
        body .letter7 { left: 90%; animation-duration: 17s; animation-delay: 2s; }

        /* Main Container */
        .stage{
            position: relative;
            z-index: 2; /* above falling letters */
            max-width:900px;
            margin:0 auto;
            background: var(--paper);
            padding:40px 36px;
            border-radius:24px;
            box-shadow:0 15px 35px var(--shadow-soft);
            border:1px solid var(--soft-rose);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .stage:hover{
            transform: translateY(-5px);
            box-shadow:0 20px 45px var(--shadow-soft);
        }

        /* Center header text */
        header{
            text-align: center;
        }

        h1{
            margin:0;
            font-size:36px;
            color: var(--romantic-red);
            text-shadow: 1px 1px 6px var(--dark-rose);
        }

        .subtitle{
            margin-top:6px;
            color: var(--wine-red);
            font-weight:600;
            letter-spacing: 0.5px;
        }

        .header-mood{
            margin-top:6px;
            font-style: italic;
            color: var(--dark-rose);
        }

        /* Song Sections */
        .section{
            margin-top:24px;
            background: linear-gradient(to right, #fff4f4, #ffe8e8);
            padding:20px;
            border-left:8px solid var(--dark-rose);
            border-radius:14px;
            box-shadow:0 8px 20px var(--shadow-soft);
            transition: transform 0.3s ease;
        }

        .section:hover{
            background: linear-gradient(to right, #ffe6e6, #fff0f0);
            transform: translateY(-3px);
        }

        /* Lines / Lyrics */
        .line{
            display:block;
            margin:8px 0;
            padding:8px 12px;
            background: #fff;
            border:1px dashed #f0b3b3;
            border-radius:12px;
            box-shadow: 0 2px 6px var(--shadow-soft);
        }

        /* Footer */
        footer{
            margin-top:32px;
            padding:20px;
            background:#ffe8eb;
            border-radius:14px;
            border:1px solid #f2b5ba;
            text-align:center;
            font-style:italic;
            color: var(--dark-rose);
            box-shadow:0 5px 15px var(--shadow-soft);
        }

        /* Footer emoji */
        footer::before{
            content:"💌 ";
        }
        footer::after{
            content:" 💖";
        }
    </style>
</head>
<body>
    <div class="stage"> <!-- Main content container -->
        <header>
            <h1><?php echo $title; ?></h1> <!-- Displays song title -->
            <div class="subtitle">By: <strong><?php echo $artist; ?></strong></div> <!-- Displays artist -->
            <div style="margin-top:6px; font-style:italic;">Mood: <?php echo $mood; ?> — <?php echo $moodWord; ?></div> <!-- Displays mood -->
        </header>

        <span class="falling-letter letter1">💌</span>
        <span class="falling-letter letter2">💖</span>
        <span class="falling-letter letter3">💕</span>
        <span class="falling-letter letter4">💘</span>
        <span class="falling-letter letter5">💌</span>
        <span class="falling-letter letter6">💖</span>
        <span class="falling-letter letter7">💘</span>

        <!-- Verse 1 -->
        <div class='section'>
            <h3>Verse 1</h3>
            <?php
            echo "<p>" . $verse1[0] . "</p>";
            echo "<p>" . $verse1[1] . "</p>";
            echo "<p>" . $verse1[2] . "</p>";
            echo "<p>" . $verse1[3] . "</p>";
            ?>
        </div>

        <!-- Chorus 1 -->
        <div class='section'>
            <h3>Chorus</h3>
            <?php
            echo "<p>" . $chorus1[0] . "</p>";
            echo "<p>" . $chorus1[1] . "</p>";
            echo "<p>" . $chorus1[2] . "</p>";
            ?>
        </div>

        <!-- Verse 2 -->
        <div class='section'>
            <h3>Verse 2</h3>
            <?php
            echo "<p>" . $verse2[0] . "</p>";
            echo "<p>" . $verse2[1] . "</p>";
            echo "<p>" . $verse2[2] . "</p>";
            echo "<p>" . $verse2[3] . "</p>";
            ?>
        </div>

        <!-- Chorus 2 -->
        <div class='section'>
            <h3>Chorus</h3>
            <?php
            echo "<p>" . $chorus2[0] . "</p>";
            echo "<p>" . $chorus2[1] . "</p>";
            echo "<p>" . $chorus2[2] . "</p>";
            ?>
        </div>

        <!-- Bridge -->
        <div class='section'>
            <h3>Bridge</h3>
            <?php
            echo "<p>" . $bridge[0] . "</p>";
            echo "<p>" . $bridge[1] . "</p>";
            echo "<p>" . $bridge[2] . "</p>";
            echo "<p>" . $bridge[3] . "</p>";
            echo "<p>" . $bridge[4] . "</p>";
            echo "<p>" . $bridge[5] . "</p>";
            ?>
        </div>

        <!-- Outro -->
        <div class='section'>
            <h3>Outro</h3>
            <?php
            echo "<p>" . $outro[0] . "</p>";
            echo "<p>" . $outro[1] . "</p>";
            echo "<p>" . $outro[2] . "</p>";
            echo "<p>" . $outro[3] . "</p>";
            ?>
        </div>

        <!-- Footer message -->
        <footer>
            "May our variables align, and our story keep looping in love."; - Casey Ong
        </footer>
    </div>
</body>
</html>
