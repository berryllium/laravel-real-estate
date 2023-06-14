<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Notifications\DatabaseNotification;

class NotificationSeenController extends Controller
{
    public function __invoke(DatabaseNotification $notification) : RedirectResponse
    {
        $this->authorize('update', $notification);
        $notification->markAsRead();
        return redirect()->back()->with('success', 'Notifications marked as read');
    }
}
