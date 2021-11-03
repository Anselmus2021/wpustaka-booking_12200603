<?php

namespace App\Database\Seeds;

use App\Models\Pengguna12200603;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
			    'nama'      => 'ansel',
			    'password'  => md5('12200603')
		    ],
		    [
				'nama'      => 'admin',
				'password'  => md5('123')
		    ],
		    [
				'nama'      => '12200603',
				'password'  => md5('ansel')
			]
		];

		$p = new Pengguna12200603();
		$p->insertBatch($data);
	}
}
