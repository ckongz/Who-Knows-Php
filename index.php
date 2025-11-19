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
<title><?php echo htmlspecialchars($title); ?> — Romantic PHP Remix</title> <!-- Page title -->
<meta name="viewport" content="width=device-width,initial-scale=1"> <!-- Responsive design -->
<link rel="stylesheet" href="styles.css"> <!-- External CSS file -->
< <!-- Note: stray character here, possibly a typo -->
</head>
<body>
<div class="stage"> <!-- Main content container -->
<header>
    <h1><?php echo $title; ?></h1> <!-- Displays song title -->
    <div class="subtitle">By: <strong><?php echo $artist; ?></strong></div> <!-- Displays artist -->
    <div style="margin-top:6px; font-style:italic;">Mood: <?php echo $mood; ?> — <?php echo $moodWord; ?></div> <!-- Displays mood -->
</header>

<!-- Verse 1 -->
<div class='section'><h3>Verse 1</h3>
<?php
echo "<p>" . $verse1[0] . "</p>";
echo "<p>" . $verse1[1] . "</p>";
echo "<p>" . $verse1[2] . "</p>";
echo "<p>" . $verse1[3] . "</p>";
?>
</div>

<!-- Chorus 1 -->
<div class='section'><h3>Chorus</h3>
<?php
echo "<p>" . $chorus1[0] . "</p>";
echo "<p>" . $chorus1[1] . "</p>";
echo "<p>" . $chorus1[2] . "</p>";
?>
</div>

<!-- Verse 2 -->
<div class='section'><h3>Verse 2</h3>
<?php
echo "<p>" . $verse2[0] . "</p>";
echo "<p>" . $verse2[1] . "</p>";
echo "<p>" . $verse2[2] . "</p>";
echo "<p>" . $verse2[3] . "</p>";
?>
</div>

<!-- Chorus 2 -->
<div class='section'><h3>Chorus</h3>
<?php
echo "<p>" . $chorus2[0] . "</p>";
echo "<p>" . $chorus2[1] . "</p>";
echo "<p>" . $chorus2[2] . "</p>";
?>
</div>

<!-- Bridge -->
<div class='section'><h3>Bridge</h3>
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
<div class='section'><h3>Outro</h3>
<?php
echo "<p>" . $outro[0] . "</p>";
echo "<p>" . $outro[1] . "</p>";
echo "<p>" . $outro[2] . "</p>";
echo "<p>" . $outro[3] . "</p>";
?>
</div>

<!-- Footer message -->
<footer>
    "May our variables align, and our story keep looping in love.";
</footer>
</div>
</body>
</html>