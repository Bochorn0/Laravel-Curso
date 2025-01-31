<?php

namespace App\Services;

use App\Models\Chat;
use App\Events\NewChatMessage;
use Illuminate\Support\Facades\Auth;

class ChatService
{
    public function getProductMessages($productId)
    {
        return Chat::where('product_id', $productId)
                   ->with('user')
                   ->latest()
                   ->take(50)
                   ->get();
    }

    public function createMessage(string $message, int $productId)
    {
        $chat = Chat::create([
            'user_id' => Auth::id(),
            'product_id' => $productId,
            'message' => $message,
            'type' => 'user'
        ]);

        $chat->load('user');
        broadcast(new NewChatMessage($chat))->toOthers();

        return $chat;
    }
} 