<?php

interface Notification
{
    public function send(string $title, string $message);
}
class EmailNotification implements Notification
{
    private $adminEmail;

    public function __construct(string $adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }
    public function send(string $title, string $message): void
    {
        // That Method is consider the adapter that helped me to send mail to FTP server
        mail($this->adminEmail, $title, $message);
        echo "Sent email with title '$title' to '{$this->adminEmail}' that says '$message'.";
    }
}
function clientCode(Notification $notification)
{
    echo $notification->send("Website is down!",
        "<strong style='color:red;font-size: 50px;'>Alert!</strong> " .
        "Our website is not responding. Call admins and bring it up!");

}
$notification = new EmailNotification("baselosama185@yahoo.com");
clientCode($notification);

