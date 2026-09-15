<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AiMessage extends Model
{
    protected $fillable = [
        'chatroom_id',
        'role',
        'message',
        'message_type',

        // OpenAI
        'openai_response_id',
        'openai_model',

        // Token usage
        'input_tokens',
        'output_tokens',
        'total_tokens',

        // Status / error
        'status',
        'error_message',
        'response_time_ms',

        // Parent message
        'parent_message_id',

        // File / image
        'file_url',
        'file_name',
        'file_type',

        // Additional data
        'metadata',
    ];

    protected $casts = [
        'input_tokens' => 'integer',
        'output_tokens' => 'integer',
        'total_tokens' => 'integer',
        'response_time_ms' => 'integer',
        'metadata' => 'array',
    ];

    public function chatroom(): BelongsTo
    {
        return $this->belongsTo(
            AiChatroom::class,
            'chatroom_id'
        );
    }

    public function parentMessage(): BelongsTo
    {
        return $this->belongsTo(
            self::class,
            'parent_message_id'
        );
    }

    public function childMessages()
    {
        return $this->hasMany(
            self::class,
            'parent_message_id'
        );
    }
}