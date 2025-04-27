<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Program extends Model
{
    /** @use HasFactory<\Database\Factories\ProgramFactory> */
    use HasFactory;

    // Specify the table name
    protected $table = 'programs';

    protected $fillable = [
        'name',
        'symptoms',
        'remedy',
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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    // Relationship to clients (many-to-many)
    public function client(): BelongsToMany
    {
        return $this->belongsToMany(Client::class, 'client_program')->withTimestamps(); // Assuming 'learners_program' is the pivot table
    }
}
