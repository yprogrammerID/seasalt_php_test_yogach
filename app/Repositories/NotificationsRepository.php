<?php

namespace App\Repositories;

use App\Interfaces\NotificationsRepositoryInterface;
use Illuminate\Support\Facades\DB;

class NotificationsRepository implements NotificationsRepositoryInterface
{
    public function getNotificationUser()
    {
        return DB::select("SELECT
            users.name,
            notifications.category,
            notifications.title,
            notifications.description,
            notifications.created_at,
            notification_reads.is_read,
            notification_reads.created_at as read_at	
        FROM
            users
        INNER JOIN
            notifications on users.id = notifications.user_id OR notifications.user_id IS NULL
        LEFT JOIN
            notification_reads on notifications.id = notification_reads.notification_id AND users.id = notification_reads.user_id
        WHERE
            users.id = 1
        ORDER BY notification_reads.is_read ASC");
    }
}
