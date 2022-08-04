<?php
namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {

            switch ($message) {
                case ($message == 'hola'):
                case ($message == 'Hola'):
                case ($message == 'hi'):
                case ($message == 'hello'):
                case ($message == 'ola'):
                    $this->askName($botman);
                    break;
                case ($message == 'test'):
                    $this->asktest($botman);
                    break;

                default:
                    $botman->reply("Gracias por utilizar el bot");
                    $botman->reply("¿Dudas o Sugerencias?, Envialas en el siguiente enlace: http://127.0.0.1:8000/Sugerencias");
                    $botman->reply("¿Quieres Contactanos?, Visita el siguiente enlace: mailto:marktech@gmail.com");
            }

        });

        $botman->listen();
    }

    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hola, este es el bot para preguntas de Marktech ¿Cual es su nombre?', function (Answer $answer) {

            $name = $answer->getText();

            $this->say('Su nombre es: ' . $name, '¿Cual es su pregunta?');
            $this->say('¿Cual es su pregunta?');
        });
    }

    // Preguntas:

    public function asktest($botman)
    {
        $botman->ask('Test', function (Answer $answer) {

            $name = $answer->getText();

            $this->say('test ');
        });
    }

}
