<?php
$paragraph = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
Tenetur, animi saepe consequuntur, temporibus architecto molestias, quod vel pariatur natus nisi odit?';
$paragraph_len = strlen($paragraph);
$censored_word = $_GET['word'];
echo $paragraph . '<br>' . $paragraph_len . '<br>';

$censored_paragraph = str_replace($censored_word, '***', strtolower($paragraph));
echo $censored_paragraph . '<br>';

$censored_paragraph_len = strlen($censored_paragraph);
echo $censored_paragraph_len;
?>