<?php

declare(strict_types=1);

namespace Liberu\CRM\ContactCenter\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property int $user_id @property string $presence @property int $capacity @property array<int,mixed>|null $skills */
final class ContactCenterAgent extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_contact_center_agents';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['skills' => 'array', 'policy' => 'array'];
    }
}
