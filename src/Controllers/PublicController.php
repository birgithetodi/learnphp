<?php
namespace App\Controllers;

class PublicController {
    public function index() {
        $title = 'World';
        $posts = [
            [
                'title' => 'Some world title 1',
                'content' => 'Some world content 1',
                'date' => 'January 1, 2021',
                'author' => 'Biku',
            ],
            [
                'title' => 'Some world title 2',
                'content' => 'Some world content 2',
                'date' => 'January 2, 2021',
                'author' => 'Riku',
            ],
            [
                'title' => 'Some world title 3',
                'content' => 'Some world content 3',
                'date' => 'January 3, 2021',
                'author' => 'Tiku',
            ],
            [
                'title' => 'Some world title 4',
                'content' => 'Some world content 4',
                'date' => 'January 4, 2021',
                'author' => 'Nici',
            ],
        ];
        view('index', compact('title', 'posts'));
    }
    
public function us() {
    $title = 'U.S';
    $posts = [
        [
            'title' => 'Some U.S title 1',
            'content' => 'Some U.S content 1',
            'date' => 'January 1, 2021',
            'author' => 'Ronnuu',
        ],
        [
            'title' => 'Some U.S title 2',
            'content' => 'Some U.S content 2',
            'date' => 'January 2, 2021',
            'author' => 'Jass',
        ],
        [
            'title' => 'Some U.S title 3',
            'content' => 'Some U.S content 3',
            'date' => 'January 3, 2021',
            'author' => 'Kassu',
        ],
        [
            'title' => 'Some U.S title 4',
            'content' => 'Some U.S content 4',
            'date' => 'January 4, 2021',
            'author' => 'Markuss',
        ],
    ];
    view('us', compact('title', 'posts'));
}

public function tech() {
    $title = 'Technology';
    $posts = [
        [
            'title' => 'Some Tech title 1',
            'content' => 'Some Tech content 1',
            'date' => 'January 1, 2021',
            'author' => 'Pets',
        ],
        [
            'title' => 'Some Tech title 2',
            'content' => 'Some Tech content 2',
            'date' => 'January 2, 2021',
            'author' => 'Juss',
        ],
        [
            'title' => 'Some Tech title 3',
            'content' => 'Some Tech content 3',
            'date' => 'January 3, 2021',
            'author' => 'Alex',
        ],
        [
            'title' => 'Some Tech title 4',
            'content' => 'Some Tech content 4',
            'date' => 'January 4, 2021',
            'author' => 'Manivald',
        ],
    ];
    view('tech', compact('title', 'posts'));
}
public function forms() {
        view('forms');
        }
};