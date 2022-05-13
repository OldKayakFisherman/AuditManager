<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditLog extends Model
{
    use HasFactory;

    public $fillable = [
        'browser',
        'host',
        'referrer',
        'remote_address',
        'path',
        'query_string',
        'message',
        'severity',
        'type',
        'user_account',
        'event_date',
        'browser_version',
        'user_agent',
        'success',
        'app',
        'source',
        'stack',
        'exception',
        'detail',
        'app_version',
        'request_headers',
        'response_headers',
    ];

    public $table = 'auditlogs';
}
