<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Client extends Model
{

    /** @use HasFactory<\Database\Factories\ProgramFactory> */
    use HasFactory;

    // Specify the table name
    protected $table = 'clients';

    const GENDER_MALE = 'male';

    const GENDER_FEMALE = 'female';

    const GENDER_DEFAULT = self::GENDER_MALE;

    const GENDERS = [

        self::GENDER_MALE => 'male',
        self::GENDER_FEMALE => 'female',

    ];

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
    public function program(): BelongsToMany
    {
        return $this->belongsToMany(Program::class, 'client_program')->withTimestamps(); // Assuming 'client_program' is the pivot table; // Assuming 'learners_program' is the pivot table
    }
}
