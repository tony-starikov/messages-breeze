<?php

namespace App\Http\Resources\Message;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'message_id' => $this->message_id,
            'user_name' => $this->user_name,
            'email' => $this->email,
            'text' => $this->text,
            'image' => $this->image,
            'txt_file' => $this->txt_file,
            'created_at' => $this->created_at->format('M d Y h:i:s'),

            'child_messages' => MessageResource::collection($this->childMessages)->resolve(),
        ];
    }
}
