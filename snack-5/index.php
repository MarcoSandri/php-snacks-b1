<?php 

$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut justo lectus. Cras accumsan diam enim, et semper ipsum tempor tristique. Suspendisse interdum quam sed metus scelerisque elementum id eget tellus. Sed vel nibh aliquam, ultricies dui eu, lobortis lacus. Etiam placerat massa non ligula fermentum luctus. Curabitur sit amet.";

$paragraphs = explode('.', $text);

for($i=0; $i < count($paragraphs); $i++) {
    echo $paragraphs[$i] . '<br>';
}