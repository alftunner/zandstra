<?php

namespace events;

class EventDispatcher
{
    private $callBacks;

    public function registerEventHandlers(string $name, array $arrayCallback)
        {
            foreach ($arrayCallback as $item) {
                if (!is_callable($item)) {
                    throw new \Exception('Таких нет!!!!!');
                }
            }
            $this->callBacks[$name] = $arrayCallback;
        }

    public function eventHandlers(string $event)
    {
        echo "Функция обрабатывается: {$event}";
        foreach ($this->callBacks[$even] as $callBack) {
            call_user_func($callBack, $event);
        }
    }
}