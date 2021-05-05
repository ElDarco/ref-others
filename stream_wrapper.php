<?php

#Получаем список зарегистрированных обработчиков
print_r(stream_get_wrappers());

#Можно зарегать свой обработчик например для http, где CustomHttpStreamWrapper реализует StreamWrapper
stream_wrapper_register('http', 'CustomHttpStreamWrapper', STREAM_IS_URL);