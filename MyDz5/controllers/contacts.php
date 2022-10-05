<?php

$pageTitle = 'Contacts';
$title = 'Contacts';
$left = template('contacts/v_contactsLeft');
$content = template('contacts/v_contactsCont');

$pageContent = template('contacts/v_contacts', [
    'content' => $content,
    'title' => $title,
    'left' => $left
]);