<?php

namespace App\Http\Controllers;

use App\Interfaces\NotificationsRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NotificationsController extends Controller
{
    protected  NotificationsRepositoryInterface $notificationsRespositoryInterface;

    public function __construct(NotificationsRepositoryInterface $notificationsRespositoryInterface)
    {
        $this->notificationsRespositoryInterface = $notificationsRespositoryInterface;
    }

    public function getNotificationUser()
    {
        $notifications = $this->notificationsRespositoryInterface->getNotificationUser();

        return response()->json($notifications, 200);
    }
}
