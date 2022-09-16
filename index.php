<?php 

$date = time () ;
$workingDate = date('Y-m-d', $date);

if(isset($_POST['next']))
{
    $workingDate = $_POST['nextMonth'];
}

if(isset($_POST['prev'])) 
{
    $workingDate = $_POST['prevMonth'];  
}

if(isset($_POST['updateDate'])) 
{
    $workingDate = $_POST['newDate'];  
}

$theDayOfWeek = date("w",strtotime($workingDate));
$weekNumber = date("W",strtotime($workingDate));

$firstDayOfTheWeek = date('l-Y-m-d', strtotime('this week',strtotime($workingDate)));
$lastDayOfTheWeek = date('l-Y-m-d', strtotime("+6 day",strtotime('this week',strtotime($workingDate))));

$prevMonth = date('Y-m-d', strtotime('-1 month',strtotime($workingDate)));
$nextMonth = date('Y-m-d', strtotime('+1 month',strtotime($workingDate)));

$prevYear = date('Y', strtotime($prevMonth));
$nextYear = date('Y', strtotime($nextMonth));

$firstDay = date('Y-m-01',strtotime($workingDate));
$lastDay = date('Y-m-t',strtotime($workingDate));

$prevWeek = date('Y-m-d',strtotime("-1 week", strtotime($workingDate)));
$nextWeek = date('Y-m-d',strtotime("+1 week", strtotime($workingDate)));


echo '<h3>
        <form method="post"  class="" action="">
            <div>
                <input type="date" name="newDate" value="'.$workingDate.'">
                <input type="submit" name="updateDate" value="Submit">
            </div>
            <div class="">
                <input type="hidden" name="prevMonth" value="' . $prevMonth . '">
                <input type="hidden" name="nextMonth" value="' . $nextMonth . '">

                <input type="hidden" name="prevYear" value="' . $prevYear . '">
                <input type="hidden" name="nextYear" value="' . $nextYear . '">

                <input type="submit" name="prev" value="Prev">
                
                <strong>'.date('d/m/Y',strtotime($firstDay)).' — '.date('d/m/Y',strtotime($lastDay)).'</strong>
                <input type="submit" name="next" value="Next">
            </div>
        </form>
    </h3>';

   

    
    
    echo 'First Day of The Month: '. $firstDay.'<br />';
    echo 'Last Day of The Month: '. $lastDay.'<br /> <br />';

    echo 'Back One Week From Now: '. $prevWeek.'<br />';
    echo 'One Week From Now: '. $nextWeek.'<br /> <br />';

    echo 'Week Number: '. $weekNumber.'<br />';
    echo 'Day Number In The Week: '. $theDayOfWeek.'<br />';
    echo 'First Day Of The Week: '. $firstDayOfTheWeek.'<br />';
    echo 'Last Day Of The Week: '. $lastDayOfTheWeek.'<br /><br />';

    
?>
