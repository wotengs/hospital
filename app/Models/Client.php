<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Client extends Model
{

    /** @use HasFactory<\Database\Factories\ProgramFactory> */
    use HasFactory;

    // Specify the table name
    protected $table = 'clients';

    protected $fillable = [
        'name',
        'email',
        'age',
        'gender',
        'phone',
        'user_id',
    ];
    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'user_id' => 'integer',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Relationship to clients (many-to-many)
    public function program()
    {
        return $this->belongsToMany(Program::class, 'client_program')->withPivot(['order'])->withTimestamps(); // Assuming 'client_program' is the pivot table; // Assuming 'learners_program' is the pivot table
    }
}
