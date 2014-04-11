<?php

// Navigation
$pages = array(
    array(
        'type' => 'dropdown',
        'id' => 'encoding',
        'title' => 'Encoding',
        'pages' => array(
            array(
                'type' => 'page',
                'id' => 'encoding-base64-encode',
                'title' => 'Base 64 Encode',
                'snippet' => 'generic-form',
                'template' => 'generic-form',
            ),
            array(
                'type' => 'page',
                'id' => 'encoding-base64-decode',
                'title' => 'Base 64 Decode',
                'snippet' => 'generic-form',
                'template' => 'generic-form'
            ),
            array(
                'type' => 'separator'
            ),
            array(
                'type' => 'page',
                'id' => 'encoding-html-encode',
                'title' => 'HTML Encode',
                'snippet' => 'generic-form',
                'template' => 'generic-form',
            ),
            array(
                'type' => 'page',
                'id' => 'encoding-html-decode',
                'title' => 'HTML Decode',
                'snippet' => 'generic-form',
                'template' => 'generic-form',
            ),
            array(
                'type' => 'separator'
            ),
            array(
                'type' => 'page',
                'id' => 'encoding-url-encode',
                'title' => 'URL Encode',
                'snippet' => 'generic-form',
                'template' => 'generic-form',
            ),
            array(
                'type' => 'page',
                'id' => 'encoding-url-decode',
                'title' => 'URL Decode',
                'snippet' => 'generic-form',
                'template' => 'generic-form',
            ),
        )
    ),
    array(
        'type' => 'dropdown',
        'id' => 'regex',
        'title' => 'Regex',
        'pages' => array(
            array(
                'type' => 'page',
                'id' => 'regex-preg-match',
                'title' => 'preg_match'
            ),
            array(
                'type' => 'page',
                'id' => 'regex-preg-match-all',
                'title' => 'preg_match_all'
            ),
            array(
                'type' => 'page',
                'id' => 'regex-preg-replace',
                'title' => 'preg_replace'
            ),
        )
    ),
    array(
        'type' => 'page',
        'id' => 'form-inout',
        'title' => 'Form In/Out',
    )
);
