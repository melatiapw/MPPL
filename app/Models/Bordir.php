<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 10 Dec 2018 12:05:43 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Bordir
 * 
 * @property int $id
 * @property string $nama_bordir
 * @property string $harga
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Bordir extends Eloquent
{
	protected $table = 'bordir';

	protected $fillable = [
		'nama_bordir',
		'harga'
	];
}
