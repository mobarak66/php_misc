<?php
require_once 'vendor/autoload.php';
use App\classes\FullName;
use App\classes\Series;
use App\classes\DecrementSeries;
use App\classes\Calculator;
use App\classes\OddEven;
use App\classes\OddEvenSeries;
use App\classes\WordCharacterCount;

//echo '<pre>';
//print_r($_POST);
//echo '</pre>';
$title = '';
$result = '';

if(isset($_GET['page']))
    {if($_GET['page']=='home')
    {
    $title = 'Home page';
    include 'pages/home.php';
    }
    elseif($_GET['page']=='calculator')
    {
        $title ='Calculator page';
        include 'pages/calculator.php';
    }
    elseif($_GET['page']=='full name')
    {
        $title = 'Full name page';
        include 'pages/full name.php';
    }

    elseif($_GET['page']=='series') {
        $title = 'Series';
        include 'pages/series.php';
    }
    elseif($_GET['page']=='decrement series')
    {
        $title = 'Decrement Series';
        include 'pages/decrement series.php';
    }
    elseif($_GET['page']=='odd even')
    {
        $title = 'Odd Even Number';
        include 'pages/odd even.php';
    }
    elseif($_GET['page']=='odd even series')
    {
        $title = 'Odd Even Series';
        include 'pages/odd even series.php';
    }
    elseif($_GET['page']=='word character count')
    {
        $title = 'Word Character Count';
        include 'pages/word character count.php';
    }
}
elseif (isset($_POST['full_name_btn']))
{
    $fullName = new FullName($_POST);
    $result = $fullName->getFullName();
    include 'pages/full name.php';

}
elseif (isset($_POST['series_btn']))
{
    $series = new Series($_POST);
    $result = $series->getResult();
    include 'pages/series.php';

}
elseif (isset($_POST['decrease_series_btn']))
{
    $decrease_series = new DecrementSeries($_POST);
    $result = $decrease_series->getResult();
    include 'pages/decrement series.php';

}
elseif (isset($_POST['odd_even_series_btn']))
{
    $odd_even_series = new OddEvenSeries($_POST);
    $result = $odd_even_series->getResult();
    include 'pages/odd even series.php';

}
elseif (isset($_POST['odd_even_btn']))
{
    $odd_even = new OddEven($_POST);
    $result = $odd_even->getResult();
    include 'pages/odd even.php';

}
elseif (isset($_POST['calculator_btn']))
{
    $calculate = new Calculator($_POST);
    $result = $calculate->getResult();
    include 'pages/calculator.php';

//    echo '<pre>';
//    print_r($_POST);
//    echo '</pre>';
}
elseif (isset($_POST['count_btn']))
{
    $count = new WordCharacterCount($_POST);
    $result = $count->getResult();
    include 'pages/word character count.php';
}