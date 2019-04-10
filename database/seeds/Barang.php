<?php

use Illuminate\Database\Seeder;
use App\Barang_master;

class Barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

        	['nama_barang'=>'BAWANG BOMBAY',
        	 'harga_jual'=>'19000'
        	],

        	['nama_barang'=>'BAWANG BOMBAY KUPAS',
        	 'harga_jual'=>'24000'
        	],

        	['nama_barang'=>'BAWANG DAUN',
        	 'harga_jual'=>'8000'
        	],

        	['nama_barang'=>'BAWANG MERAH',
        	 'harga_jual'=>'22000'
  
        	],

        	['nama_barang'=>'BAWANG MERAH KUPAS',
        	 'harga_jual'=>'27000'
 
        	],

        	['nama_barang'=>'BAWANG PUTIH',
        	 'harga_jual'=>'20000'
 
            ],

            ['nama_barang'=>'BAWANG PUTIH KUPAS',
             'harga_jual'=>'25000'
    
            ],

            ['nama_barang'=>'BAWANG SUMENEP',
             'harga_jual'=>'20000'
    
            ],

            ['nama_barang'=>'BAWANG SUMENEP KUPAS',
             'harga_jual'=>'25000'
    
            ],

            ['nama_barang'=>'BAYAM',
             'harga_jual'=>'9000'
    
            ],

            ['nama_barang'=>'BLUMKOL KOTOR',
             'harga_jual'=>'11000'
    
			],

		    ['nama_barang'=>'CABE HIJAU',
		     'harga_jual'=>'23000'
		    ],

		    ['nama_barang'=>'CABE KERITING MERAH',
		     'harga_jual'=>'25000'
		    ],

		    ['nama_barang'=>'CABE MERAH TANJUNG',
		     'harga_jual'=>'40000'
		    ],

		    ['nama_barang'=>'CAISIN',
		     'harga_jual'=>'5000'
		    ],

		    ['nama_barang'=>'CENGEK',
		     'harga_jual'=>'25000'
		    ],

		    ['nama_barang'=>'DAUN JERUK',
		     'harga_jual'=>'40000'
		    ],

		    ['nama_barang'=>'DAUN PANDAN',
		     'harga_jual'=>'17000'
		    ],

		    ['nama_barang'=>'DAUN PISANG',
		     'harga_jual'=>'7000'
		    ],

		    ['nama_barang'=>'DAUN SO',
		     'harga_jual'=>'8000'
		    ],

		    ['nama_barang'=>'JAGUNG MANIS',
		     'harga_jual'=>'7000'
		    ],

		    ['nama_barang'=>'JAGUNG SEMI',
		     'harga_jual'=>'20000'
		    ],

		    ['nama_barang'=>'JAHE',
		     'harga_jual'=>'25000'
		    ],

		    ['nama_barang'=>'JAMUR KUPING',
		     'harga_jual'=>'17000'
		    ],

		    ['nama_barang'=>'JAMUR MERANG',
		     'harga_jual'=>'45000'
		    ],

		    ['nama_barang'=>'JERUK SAMBAL',
		     'harga_jual'=>'30000'
		    ],

		    ['nama_barang'=>'JERUK NIPIS',
		     'harga_jual'=>'18000'
		    ],

		    ['nama_barang'=>'JERUK LEMON',
		     'harga_jual'=>'20000'
		    ],

		    ['nama_barang'=>'KACANG ENDUL',
		     'harga_jual'=>'26000'
		    ],

		    ['nama_barang'=>'KACANG PANJANG',
		     'harga_jual'=>'14000'
		    ],

		    ['nama_barang'=>'KANGKUNG',
		     'harga_jual'=>'8000'
		    ],

		    ['nama_barang'=>'KACANG MERAH',
		     'harga_jual'=>'21000'
		    ],

		    ['nama_barang'=>'KAPRI',
		     'harga_jual'=>'35000'
		    ],

		    ['nama_barang'=>'KEMANGI',
		     'harga_jual'=>'25000'
		    ],


		 ];


Barang_master::insert($data);

	}
}

