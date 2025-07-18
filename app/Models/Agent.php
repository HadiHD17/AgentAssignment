<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Ramsey\Uuid\Uuid;

class Agent extends Model
{
    /** @use HasFactory<\Database\Factories\AgentFactory> */
    use HasFactory;
    use HasUuids;
    protected $table = 'agents';
    protected $primaryKey = 'agent_id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function newUniqueId(): string
    {
        return (string) Uuid::uuid4();
    }
    public function uniqueIds(): array
    {
        return ['agent_id'];
    }
    public $timestamps = false;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date_time';
    const UPDATED_AT = 'updated_date_time';
    protected $connection = 'mysql';
    protected $attributes = [
        'title' => 'AI Agent'
    ];
}
$agent = Agent::create(['title' => 'Traveling to Europe']);

Agent::withoutTimestamps(fn() => $agent->increment('counter'));

$agent->id();
