<?php
// This script is included in the showXYZ.php scripts.
// In those scripts $document has been initialized with the current post

echo '<h2>Etiquetas</h2>';	

// Show the tags of the current post

/**********
** YOUR CODE HERE:
Iterate through the post (use the variable $document) and get the tags
For each tag, print an hyperlink with the tag text
The link points to index.php with two parameters:
* command =  showPostsByTag
* tag = the tag
**********/
$tags = $document['tags'];
$tagsLength = count ($tags);
for ($x = 0; $x < $tagsLength; $x++){
        echo '<a href = index.php?command=showPostsByTag&tag=' . $tags[$x] .'>' . $tags[$x] .'</a>    ';
}

?>
