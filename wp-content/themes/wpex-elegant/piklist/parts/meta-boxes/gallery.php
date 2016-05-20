<?php
    /*
    Title: Gallery
    Order: -1
    Template: about
    */
?>

<?php
    piklist('field', array(
        'type' => 'file'
    ,'field' => 'logos'
    ,'label' => 'Add Image(s)'
    ,'description' => 'Select multiple images for Gallery'
    ,'options' => array(
            'modal_title' => 'Add Image(s)'
        ,'button' => 'Add Images'
        )
    ));
?>