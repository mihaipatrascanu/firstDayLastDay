<?php 

$date = time () ;
$working_date = date('Y-m-d', $date);

if(isset($_POST['next']))
{
    $working_date = $_POST['nextmonth'];
}

if(isset($_POST['prev'])) 
{
    $working_date = $_POST['prevmonth'];  
}
if(isset($_POST['updatedate'])) 
{
    $working_date = $_POST['newdate'];  
}


$prevMonth = date('Y-m-d', strtotime('-1 month',strtotime($working_date)));
$nextMonth = date('Y-m-d', strtotime('+1 month',strtotime($working_date)));

$prevYear = date('Y', strtotime($prevMonth));
$nextYear = date('Y', strtotime($nextMonth));

$firstDay = date('Y-m-01',strtotime($working_date));
$lastDay = date('Y-m-t',strtotime($working_date));


echo '<h3>
        <form method="post"  class="" action="">
            <div>
                <input type="date" name="newdate" value="'.$working_date.'">
                <input type="submit" name="updatedate" value="Submit">
            </div>

            <div class="">
                <input type="hidden" name="prevmonth" value="' . $prevMonth . '">
                <input type="hidden" name="nextmonth" value="' . $nextMonth . '">

                <input type="hidden" name="prevyear" value="' . $prevYear . '">
                <input type="hidden" name="nextyear" value="' . $nextYear . '">

                <input type="submit" name="prev" value="Prev">
                <strong>'.date('d/m/Y',strtotime($firstDay)).' — '.date('d/m/Y',strtotime($lastDay)).'</strong>
                <input type="submit" name="next" value="Next">
            </div>
        </form>
    </h3>';

    echo 'First Day of The Month: '. $firstDay.'<br />';
    echo 'Last Day of The Month: '. $lastDay.'<br />';
?>