<?php

date_default_timezone_set("Africa/Nairobi");

echo "this is my first php code";//displaying a sentence or a string

print "<br>";//using HTML to break a line

print "Today is <span style='color: #ff4856;text-transform:uppercase;'>Sunday</span>";

print "<br>";

print 1999;//this is an integer or a digit

print "<br>";

print "5437";//this is a string

print date('l');//display the current day of the week

print "<br>";

print date('l, F jS Y',strtotime('+123 days'));

print "<br>";



print "Today is" . date('1, F jS Y H:i:s');

//creating a (Declaring) variable

print "<br>";

$fname="Alex Okama";//declaration of a variable or a string or a group of words.

$yob=1999;//declaring a digit/integer

print $fname;

print "<br>";

$user_dob="1999-05-26";

echo $fname. "was born in". $yob;

print "<br>";

echo  $fname. "was actually born on" . date(' F jS Y',strtotime($user_dob));

print "<br>";

print $yob;

print "<br>";

$current_year= date('Y');

echo $current_year;

$age=$current_year-$yob;//using subtraction to find the age.

print "<br>";

print $fname. "is". $age. "years old.";

print "<br";

print $age;

print "<br>";

print "45+96";// a string

print "<br>";

print 45+40;

$birthday=new DateTime($user_dob);
$today= new DateTime('Today');

$interval=$birthday->diff($today);

echo '<pre>';
print_r($interval);
echo '</pre>';

print "<br>";

print $fname. "is actually,".$interval->y."years".$interval->m. "months, and". $interval->d. "days old";

//the if....else....statement

print "<br>";

$adult_age=18;
if($interval->y > $adult_age){
    print $fname.  "is an adult";//event in block to be executed if the condition is true
}else{
    print $fname. "is not an adult";//event in block to be executed if the condion is false
}

print "<br>";

//variable characteristics

$last_name="Okama";

print "My last name is $last_name";

print "<br>";

print 'My last name is $last_name';
//single quote instatiates that variable as a string
//double quote processes and interpret the variable value

print "<br>";

print 'My last name is' . $last_name;

print "<br>";

$call['lname']="Okama";
print $call['lname'];

print "<br>";

define('LNAME', 'Okama');
echo LNAME;

//NB all identifiers are case sensitive

?>
<br>
<br>
<br>
<br>
