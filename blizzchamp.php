<html>
<body bgcolor="#000;" text="#ffffff;">
<h3 style="text-align: center;"><em>Diablo Champion Name Generator</em></h3>
<P style="text-align: center;">Prepare yourself to face</p>
<P style="text-align: center; font-variant: small-caps; font-size: 2em; color: #ff0000;">
<?php
$adjective = array("Arch", "Cold", "Corpse", "Dark", "Death", "Dusk", "Fire", "Flame", "Flood", "Frost", "Hammer", "Iron", "Jagged", "Pain", "Shadow", "Spark", "Titan", "Winter", "Tank", "Ice", "Azure", "Stink", "Tremble", "Bramble", "Strangle"); //get the first word, an adjective
$noun = array("ash", "bane", "bone", "bite", "blood", "breach", "breath", "chill", "cry", "gash", "mage", "maul", "maw", "mire", "skull", "song", "slash", "snap", "snow", "spike", "tooth", "waste", "blast", "spank", "face", "mongrel", "monger", "pick", "wrath", "wraith", "hive", "thorn"); //get the second word of the name, a nounish thing
$title = array(", Eater of Corpses", " the Cursed", " the Exiled", " the Fallen", " the Indomitable", " the Prophet", " the Stricken", " the Tortured", " of the North", " of the South", " of the East", " of the West", " the Redeemer", " the Thundrous", " the Villainous", " the Beastmaster", " the Charred", " the Lost One", ", Wretched One", " the Abyssal", " the Soulless", " the Ruthless", " the Charred One", " of the Veil"); //get the mob�s ridiculous title
$attributes = array("Extra Health", "Fast", "Inflicts Slow", "Knockback", "Minions are Invulnerable", "Reflects Damage", "Resists Elemental Damage", "Shielding", "Teleports"); //array for random non-specific attributes

$newadj = $adjective[array_rand($adjective)]; //establishing the first word as a string
$newnoun = $noun[array_rand($noun)]; //establishing the second word as a string
$randAttribute = $attributes[array_rand($attributes)]; // variable to pull a random attribute from the attributes table

echo "<p  style='text-align: center; font-variant: small-caps; font-size: 2em; color: #ff0000;'>" . $newadj; //returns first word
echo $newnoun;
echo $title[array_rand($title)] . "</p>\n";

if ($newnoun == "chill" OR $newnoun == "snow" OR $newadj == "Cold" OR $newadj == "Frost" OR $newadj == "Winter" OR $newadj == "Ice")
echo "<p style='text-align: center; font-variant: small-caps; font-size: 1.5em; color: #ff00ff;'>Freezes On Hit</p>";

if ($newadj == "Fire" OR $newadj == "Flame")
echo "<p style='text-align: center; font-variant: small-caps; font-size: 1.5em; color: #ff00ff;'>Molten \n </p>";

if ($newadj == "Spark")
echo "<p style='text-align: center; font-variant: small-caps; font-size: 1.5em; color: #ff00ff;'>Electrified \n Inflicts Paralysis</p>";

echo "<p style='text-align: center; font-variant: small-caps; font-size: 1.5em; color: #ff00ff;'>" . $randAttribute . "</p>";
?>
</p>
</body>
</html>
