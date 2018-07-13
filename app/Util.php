<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Util extends Model
{
    function log(string $info)
    {
        Log::info($info);
    }
}
?>
