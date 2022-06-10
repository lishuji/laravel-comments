<?php

namespace Kanelli\Comments\Events;

use Illuminate\Queue\SerializesModels;
use Kanelli\Comments\Comment;

class CommentDeleted
{
    use SerializesModels;

    public $comment;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }
}
