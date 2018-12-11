<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 11 Dec 2018 09:24:58 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class LokasiBordir
 * 
 * @property int $id
 * @property string $nama_lokasi_bordir
 * @property string $harga
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class LokasiBordir extends Eloquent
{
	protected $table = 'lokasi_bordir';

	protected $fillable = [
		'nama_lokasi_bordir',
		'harga'
	];
}