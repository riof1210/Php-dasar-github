<?php

$dunia = [
    'Benua Asia' => [
        'Indonesia' => ['Jakarta', 'Bali', 'Bandung', 'Makassar', 'Surabaya'],
        'Korea Selatan' => ['Kota Jeju', 'Busan', 'Incheon', 'Daegu', 'Daejeon'],
        'China' => ['Beijing', 'Shanghai', 'Nanjing', 'Wuhan', 'Hangzhou']
    ],
    'Benua Afrika' => [
        'Algeria' => ['Aljir', 'Oran', 'Tlemcen', 'Mila, Aljazair', 'Ghardia'],
        'Libya' => ['Tripoli', 'Benghazi', 'Bayda', 'Misrata', 'Derna'],
        'Mesir' => ['Kairo', 'Aleksandria', 'Giza', 'Luxor', 'Bursaid']
    ],
    'Benua Australia' => [
        'Australia Selatan' => ['Adelaide', 'Mount Gambier', 'Murray Bridge', 'Port Augusta', 'Port Pirie'],
        'New South Wales' => ['Sydney', 'Aldury', 'Armidale', 'Bathurst', 'Broken Hill'],
        'Queensland' => ['Brisbane', 'Bundaberg', 'Cairns', 'Charters Towers', 'Gladstone']
    ],
    'Benua Eropa' => [
        'Denmark' => ['Kopenhagen', 'Aarhus', 'Aalborg', 'Odense', 'Roskilde'],
        'Norwegia' => ['Lillehammer', 'Oslo', 'Bergen', 'Stavenger', 'Trondheim'],
        'Swedia' => ['Stockholm', 'Uppsala', 'Goteborg', 'Linkoping', 'Gavle']
    ]
];
// // echo "<pre>";
// // print_r($dunia);
// // echo "<br>";

echo '<ul>';
foreach ($dunia as $benua => $data) {
    echo '<ul>';
    echo '<li><b>' . $benua . ' : </b></li><br/>';
    echo '</ul>';
    foreach ($data as $negara => $kota) {
        echo '<li>Negara ' . $negara . ', negara ini memiliki kota  : ' . $kota[0] . ' - ' . $kota[1] . ' - ' . $kota[2] . ' - ' . $kota[3] . ' - ' . $kota[4] . '</li><br> ';
    }
    echo '<br/>';
}
echo '</ul>';


// $dunia = [
//     'Benua Asia' => [
//         'Indonesia', 'Jakarta', 'Bali', 'Bandung', 'Makassar', 'Surabaya',
//         'Korea Selatan', 'Kota Jeju', 'Busan', 'Incheon', 'Daegu', 'Daejeon',
//         'China', 'Beijing', 'Shanghai', 'Nanjing', 'Wuhan', 'Hangzhou'
//     ],
//     'Benua Afrika' => [
//         'Algeria', 'Aljir', 'Oran', 'Tlemcen', 'Mila, Aljazair', 'Ghardia',
//         'Libya', 'Tripoli', 'Benghazi', 'Bayda', 'Misrata', 'Derna',
//         'Mesir', 'Kairo', 'Aleksandria', 'Giza', 'Luxor', 'Bursaid'
//     ],
//     'Benua Australia' => [
//         'Australia Selatan', 'Adelaide', 'Mount Gambier', 'Murray Bridge', 'Port Augusta', 'Port Pirie',
//         'New South Wales', 'Sydney', 'Aldury', 'Armidale', 'Bathurst', 'Broken Hill',
//         'Queensland', 'Brisbane', 'Bundaberg', 'Cairns', 'Charters Towers', 'Gladstone'
//     ],
//     'Benua Eropa' => [
//         'Denmark', 'Kopenhagen', 'Aarhus', 'Aalborg', 'Odense', 'Roskilde',
//         'Norwegia', 'Lillehammer', 'Oslo', 'Bergen', 'Stavenger', 'Trondheim',
//         'Swedia', 'Stockholm', 'Uppsala', 'Goteborg', 'Linkoping', 'Gavle'
//     ]
// ];

// foreach ($dunia as $key => $value) {
//     echo 'Kota - kota di ' . $key . ' adalah ' . $value[0] . ' - ' . $value[1] . ' - ' . $value[2] . ' - ' . $value[3] . ' - ' . $value[4] . ' - ' . $value[5] . ' - <br>' . $value[6] . '<br>';
// }
