<?php

namespace Application\Controllers;

use Application\Classes\AllException;
use Application\Models\News;
use Application\Classes\Mailer;

class Admin
{
    public function actionAddNews()
    {
        $news = new News;
        $news->data = $_POST;
        $news->data['datetime'] = date("Y-m-d H:i:s");
//пример использования PHPMailer
//        $mailer = new Mailer();
//        $mailer->Mailer();
//        $mailer->Subject = 'Добавлена новая новость';
//        $mailer->Body = implode("\n", $news->data);
//        $mailer->AddAddress('aaa24@bk.ru', 'Den M');
//        if (!$mailer->Send()) {
//            throw new AllException('Не удалось отправить письмо пользователю');
//        }
//        $mailer->ClearAddresses();
//        $mailer->ClearAttachments();
        $news->insert();
        header('Location: /news/one/' . $news->id);
    }

    public function actionUpdateNews($id)
    {
        $news = new News;
        $news->data = $_POST;
        $news->data['datetime'] = date("Y-m-d H:i:s");
        $news->id = $id;
        $news->update();
        header('Location: /news/one/' . $id);
    }

    public function actionDeleteNews($id)
    {
        $news = new News;
        $news->id = $id;
        $news->delete();
        header('Location: /news/all');
    }

    public function actionClearLogs()
    {
        file_put_contents(__DIR__ . '/../log.txt', '');
        header('Location: /news/all');
    }
}