<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}
function dump(...$vars)
{
    echo '<pre>';
    var_dump(...$vars);
    echo '</pre>';
}

switch ($_SERVER['REQUEST_URI']) {
    case '/':
        $title = 'World';
        $posts = [
            [
                'title' => 'Some world title 1',
                'content' => 'Some world content 1',
                'date' => 'June 26, 2008',
                'author' => 'Biku'
            ],
            [
                'title' => 'Some world title 2',
                'content' => 'Some world content 2',
                'date' => 'January 5, 2007',
                'author' => 'Nici'
            ],
            [
                'title' => 'Some world title 3',
                'content' => 'Some world content 3',
                'date' => 'September 20, 2007',
                'author' => 'Trivurr'
            ],
            [
                'title' => 'Some world title 4',
                'content' => 'Some world content 4',
                'date' => 'December 28, 2012',
                'author' => 'Ronald'
            ],
        ];
        include __DIR__ . '/../views/index.php';
        break;
    case '/us':
        $title = 'U.S';
        $posts = [
            [
                'title' => 'Some U.S title 1',
                'content' => 'Some U.S content 1',
                'date' => 'June 26, 2008',
                'author' => 'Biku'
            ],
            [
                'title' => 'Some U.S title 2',
                'content' => 'Some U.S content 2',
                'date' => 'January 5, 2007',
                'author' => 'Nici'
            ],
            [
                'title' => 'Some U.S title 3',
                'content' => 'Some U.S content 3',
                'date' => 'September 20, 2007',
                'author' => 'Trivurr'
            ],
            [
                'title' => 'Some U.S title 4',
                'content' => 'Some U.S content 4',
                'date' => 'December 28, 2012',
                'author' => 'Ronald'
            ],
        ];
        include __DIR__ . '/../views/us.php';
        break;
    case '/tech':
        $title = 'Tech';
        $posts = [
            [
                'title' => 'Some tech title 1',
                'content' => 'Some tech content 1',
                'date' => 'September 17, 2006',
                'author' => 'Riksuu',
            ],

            [
                'title' => 'Some tech title 2',
                'content' => 'Some tech content 2',
                'date' => 'April 1, 2001',
                'author' => 'Aniga',
            ],

            [
                'title' => 'Some tech title 3',
                'content' => 'Some tech content 3',
                'date' => 'January 3, 2009',
                'author' => 'Kassu',
            ],

            [
                'title' => 'Some tech title 4',
                'content' => 'Some tech content 4',
                'date' => 'August 29, 2017',
                'author' => 'Anksu',
            ],
        ];
        include __DIR__ . '/../views/tech.php';
        break;
    default:
        echo '404';
}
