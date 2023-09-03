<?php

namespace App\Models;

use App\Databasse\Eloquent\Factories\HasFactory;
use Illuminate\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function getByLimit(int $limit_count = 10)
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
