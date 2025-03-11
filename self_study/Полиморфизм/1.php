<?php 
interface Notifier {
    public function send($message);

}
class EmailNotifier implements Notifier {
    public function send($message) {
        print("Отправка email: {$message}<br>");
    }
}

class SMSNotifier implements Notifier {
    public function send($message) {
        print("Отправка SMS: {$message}<br>");
    }
}
$ob = new EmailNotifier();
$ob->send('sdfgf');
$obb = new SMSNotifier();
$obb->send('fvgfh');
?>