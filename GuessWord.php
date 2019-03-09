<html>

<head>
<link rel="stylesheet" type="text/css" href="GuessWordDesign.css">
</head>

<body>

<br>
<h1> Guess The Word: Spongebob Edition! :) </h1>

<?php

$letters = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');

if (empty($_POST)) {
    $words = explode("\n", file_get_contents('wordlist.txt'));
    $right = array_fill_keys($letters, ' _ ');
    $wrong = array();
    shuffle($words);
    $word = strtolower($words[0]);
    $rightstr = serialize($right);
    $wrongstr = serialize($wrong);
    $wordletters = str_split($word);
    $show = '';
    foreach ($wordletters as $letter) {
        $show .= $right[$letter];
    }
} else {
    $word = $_POST['word'];
    $guess = strtolower($_POST['guess']);
    $right = unserialize($_POST['rightstr']);
    $wrong = unserialize($_POST['wrongstr']);
    $wordletters = str_split($word);
    if (stristr($word, $guess)) {
        $show = '';
        $right[$guess] = $guess;
        $wordletters = str_split($word);
        foreach ($wordletters as $letter) {
            $show .= $right[$letter];
        }   
    } else {
        $show = '';
        $wrong[$guess] = $guess;
        if (count($wrong) == 10) {
            $show = $word;
        } else {
            foreach ($wordletters as $letter) {
                $show .= $right[$letter];
            }
        }
    }
    $rightstr = serialize($right);
    $wrongstr = serialize($wrong);
}

?>

<?php echo $show ?><br />
<form method='post'>
<input name='guess' />
<input type='hidden' name='word' value='<?php echo $word ?>' />
<input type='hidden' name='rightstr' value='<?php echo $rightstr ?>' />
<input type='hidden' name='wrongstr' value='<?php echo $wrongstr ?>' />
<input type='submit' value='guess' />
</form>
<h2 class="othertext">this ain't it : </h2> <span id="red">  <?php echo implode(', ', $wrong) ?> </span><br />
<h2 class="othertext"><a href='GuessWord.php'>restart?</a></h2>
<h2 class="othertext"><a href='leaderboard.php'>leaderboard</a></h2>
<br>
<br>
<br>

</body>
</html>