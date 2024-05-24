<?php
//indexed or numeric array
$color=["Black", "Green", "Yellow"];

print_r($colors);


?>
<br>
<?php
$user= array("Alex","Peter", "Ann");
print $user[2];
?>
<pre>
    <?php print_r($user);?>
</pre>
<?php
//Associative arrays
$user_data=[
    "fullname"=> "Alex Okama",
    "email"=> "AOKama@yahoo.com",
    "phone"=> "+254782451699"
];
print $user_data["email"];
?>
<pre>
    <?php print_r($user_data); ?>
</pre>
<?php
//Multidimensional arrays
$user_details=[
    "Director"=> array(
        "fullname"=> "Alex Okama",
        "address"=> "Mada",
        "email"=> "AnOKama@yahoo.com",
        "phone"=> [
            "Home"=> "+254782451699",
            "Work"=> "+254792834672",
            "Mobile"=> "+25490287378",
        ]
        ),
]
?>