<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    // 대량 할당을 허용할 수 있는 필드 정의
    protected $fillable = [
        'user_id',
        'plan',
        'expires_at',
        'yn_status', // 구독 상태 추가
    ];

    // 사용자의 구독 관계 정의
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
