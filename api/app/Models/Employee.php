<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $user_id
 * @property int|null $ck_settings_id
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property string $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Employee|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee whereCkSettingsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee whereUserId($value)
 * @mixin \Eloquent
 */
class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        "first_name",
        "last_name",
        "gender",
        "address",
        "ck_settings_id",
        "user_id",
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(Employee::class, "id");
    }
}
