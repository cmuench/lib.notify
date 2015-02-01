<?php

namespace CMuench\LibNotify\Adapter;

class DbusModuleAdapter extends AbstractAdapter implements Adapter
{
    /**
     * @return bool
     * @see http://derickrethans.nl/talks/dbus-ipc10s.pdf
     * @throws \BadFunctionCallException
     */
    public function send()
    {
        if (!extension_loaded('dbus')) {
            throw new \BadFunctionCallException('dbus extension is not available');
        }

        $dbus = new \Dbus(\Dbus::BUS_SESSION);
        $notification = $dbus->createProxy(
            "org.freedesktop.Notifications",    /* connection */
            "/org/freedesktop/Notifications",   /* object */
            "org.freedesktop.Notifications"     /* interface */
        );

        $id = $notification->Notify(
            $this->appName,
            new \DBusUInt32(0),
            $this->icon,
            $this->summary,
            $this->body,
            new \DBusArray(\DBus::STRING, array()), // actions
            new \DBusDict( // hints
                \DBus::VARIANT,
                array(
                )
            ),
            1000 // expire timeout in msec
        );

        return $id > 0;
    }
}