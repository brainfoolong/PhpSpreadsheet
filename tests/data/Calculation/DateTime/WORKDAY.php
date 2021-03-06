<?php

return [
    [
        '#VALUE!',
        '1-Jan-2007',
        'ABC',
    ],
    [
        39094,
        '1-Jan-2007',
        9,
    ],
    [
        39619,
        '18-Jun-2008',
        2,
    ],
    [
        39619,
        '16-Jun-2008',
        4,
    ],
    [
        39622,
        '14-Jun-2008',
        6,
    ],
    [
        39629,
        '14-Jun-2008',
        11,
    ],
    [
        39611,
        '14-Jun-2008',
        -2,
    ],
    [
        39605,
        '14-Jun-2008',
        -6,
    ],
    [
        39815,
        '19-Dec-2008',
        10,
    ],
    [
        39820,
        '19-Dec-2008',
        10,
        [
            '25-Dec-2008',
            '26-Dec-2008',
            '01-Jan-2009',
        ],
    ],
    [
        39820,
        '19-Dec-2008',
        10,
        [
            [
                '25-Dec-2008',
                '26-Dec-2008',
                '01-Jan-2009',
            ],
        ],
    ],
    [
        39801,
        39820,
        -10,
        [
            [
                '25-Dec-2008',
                '26-Dec-2008',
                '01-Jan-2009',
            ],
        ],
    ],
    [
        41011, // this had been 41010, which is wrong - confirmed with Excel
        '5-Apr-2012',
        3,
        [
            [
                '6-Apr-2012',
                '9-Apr-2012',
            ],
        ],
    ],
    [
        44242,
        '15-Feb-2021',
        0,
    ],
    [
        '#VALUE!',
        '5-Apr-2012',
        3,
        [
            [
                '6-Apr-2012',
                'ABQZ',
            ],
        ],
    ],
    [39598, '2008-06-12', -9],
    [44273, '2021-03-15', 3], // issue 1936 Monday
    [44274, '2021-03-16', 3], // issue 1936 Tuesday
    [44277, '2021-03-17', 3], // issue 1936 Wednesday
    [44278, '2021-03-18', 3], // issue 1936 Thursday
    [44279, '2021-03-19', 3], // issue 1936 Friday
    [44279, '2021-03-20', 3], // issue 1936 Saturday
    [44279, '2021-03-21', 3], // issue 1936 Sunday
    [44276, '2021-03-21', 0], // issue 1936 Sunday doesn't change for 0
    [44258, '2021-03-15', -8], // issue 1936 Monday
    [44259, '2021-03-16', -8], // issue 1936 Tuesday
    [44260, '2021-03-17', -8], // issue 1936 Wednesday
    [44263, '2021-03-18', -8], // issue 1936 Thursday
    [44264, '2021-03-19', -8], // issue 1936 Friday
    [44265, '2021-03-20', -8], // issue 1936 Saturday
    [44265, '2021-03-21', -8], // issue 1936 Sunday
    ['exception', '2000-01-01', 'omitted'],
    ['exception', 'omitted'],
];
