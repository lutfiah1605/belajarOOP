<?php
    $mahasiswa = [
        'nim' => '2222105114',
        'nama' => 'Lutfiah',
        'kelas' => '2Ti04',
        'jurusan' => 'Teknik Informatika',
        'fakultas' => 'Teknik',
    ];
    //cara manggil array
    // echo $mahasiswa['nim']."<br>";

    $mahasiswaBanyak = [
        ['nim' => '2222105114',
        'nama' => 'Lutfiah',
        'kelas' => '2Ti04',
        'jurusan' => 'Teknik Informatika',
        'fakultas' => 'Teknik',
        ],
        ['nim' => '2222105115',
        'nama' => 'Noah',
        'kelas' => '2Ti04',
        'jurusan' => 'Teknik Informatika',
        'fakultas' => 'Teknik',
        ],
        ['nim' => '2222105118',
        'nama' => 'Eunho',
        'kelas' => '2Ti04',
        'jurusan' => 'Teknik Informatika',
        'fakultas' => 'Teknik',
        ],
    ];

    foreach ($mahasiswaBanyak as $manggilin11) {
        echo $manggilin11['nim']."<br>";
        echo $manggilin11['nama']."<br>";
        echo $manggilin11['kelas']."<br>";
        echo $manggilin11['jurusan']."<br>";
        echo $manggilin11['fakultas']."<br><br>";
    }
?>