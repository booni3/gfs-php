<?php

namespace Booni3\GFS\Type;

class ConsigneeNotifications
{

    /**
     * @var string
     */
    private $NotificationTypes;

    /**
     * @var string
     */
    private $NotificationLevel;

    /**
     * @return string
     */
    public function getNotificationTypes()
    {
        return $this->NotificationTypes;
    }

    /**
     * @param string $NotificationTypes
     * @return ConsigneeNotifications
     */
    public function withNotificationTypes($NotificationTypes)
    {
        $new = clone $this;
        $new->NotificationTypes = $NotificationTypes;

        return $new;
    }

    /**
     * @return string
     */
    public function getNotificationLevel()
    {
        return $this->NotificationLevel;
    }

    /**
     * @param string $NotificationLevel
     * @return ConsigneeNotifications
     */
    public function withNotificationLevel($NotificationLevel)
    {
        $new = clone $this;
        $new->NotificationLevel = $NotificationLevel;

        return $new;
    }


}

