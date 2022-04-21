<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play the Quiz!</title>
</head>
<body>
    <div id="container">
        <h1>Play the Quiz!</h1>

        <?php foreach($questions as $row) {?>
        <?php $ans_array($row->choice1, $row->choice2, $row->choice3, $row->answer,);
        shuffle($ans_array); ?>
        <p> <?=$row->quiID, <?=$row->questions?> </p>
         <input type="radio" name"quizid<?=$row->quizID" value="<?=$ans_array[0]?>"> <?=$ans_array[0]?<br>
         <input type="radio" name"quizid<?=$row->quizID" value="<?=$ans_array[1]?>"> <?=$ans_array[1]?<br>
         <input type="radio" name"quizid<?=$row->quizID" value="<?=$ans_array[2]?>"> <?=$ans_array[2]?<br>
         <input type="radio" name"quizid<?=$row->quizID" value="<?=$ans_array[3]?>"> <?=$ans_array[3]?<br>

         <?php }>



    </div>
</body>
</html>